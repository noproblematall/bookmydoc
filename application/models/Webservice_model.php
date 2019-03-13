<?php 
class Webservice_model extends CI_Model {	
	public function _consruct(){
		parent::_construct();
 	}
	
	function EncryptedPatientKey($uniqueId,$key){		
		$insertion_array = array("token" => $uniqueId,"token_patient" =>$key,"token_status" =>1);
    	if($this->db->insert('web_tokens',$insertion_array)){
			return true;
		}
	}
	function getPatient_Token($token) {
        $query = $this->db->get_where('web_tokens', array('token' => $token,'token_status' => 1));
        if($query->num_rows() > 0) { return $query->result()[0]->token_patient; } else { return false; }
    }
	function get_settings(){
		$query = $this->db->get_where('settings',array('id'=>'1'));
		return $result = $query->row();
	}
	public function generate_unique() {
    	$unqe = md5(uniqid(time().mt_rand(), true));
    	return $unqe;
    }
	function signin($data){		
		$return_response =array();
		$uniqueId = $this->generate_unique();
		//check if user exist or not
		$query = $this->db->get_where('patient',array('email'=>$data['email'],'password'=>md5($data['password']),'status'=>'1'));						
		if($query){
			$single_row = $query->row_array();						
			$data['userID'] = $single_row['id'];	
			$data['userType'] = 2;
			$data['gender']=$single_row['patient_sex']=='male'?1:2;
			$data['name']=$single_row['patient_firstname']." ".$single_row['patient_lastname'];
			$msg[] = ($data['usertype']!=2)? array('message'=>'Invalid User Type') : array('message'=>'');
			$msg[] = (empty($single_row))? array('message'=>'Invalid Login Details') : array('message'=>'');
			$data['error']= array('status' => ($data['usertype']!=2 || empty($single_row)) ? true : false,'msg'=> $msg);
			return $data;
		}			
	}
	function isEmailExistPatient($email){
		$query1 = $this->db->get_where('patient',array('email'=>$email));
		$this->db->last_query();
		if($query1->num_rows()==0){
			return true;
		}else{
			$query2 = $this->db->get_where('doctor',array('email'=>$email));
			if($query2->num_rows()>0){
				return true;
			}else{
				$query3 = $this->db->get_where('hospital',array('email'=>$email));
				if($query3->num_rows()>0){
					return true;
				}else{
					$query4 = $this->db->get_where('clinic',array('email'=>$email));
					if($query4->num_rows()>0){
						return true;
					}else{
						$query5 = $this->db->get_where('medical_center',array('email'=>$email));
						if($query4->num_rows()>0){
							return true;
						}else{
							return false;
						}
					}			
				}	
			}
		}
	}
	function signup($data,$password){
		$info = array(  'patient_firstname'=>$data['firstname'],
						'patient_lastname'=>$data['lastname'],
						'email'=>$data['email'],
						'password'=>$password,
						'patient_sex'=>'male',
						'terms'=>'agreed',
						'status'=>1
				);		
		if($this->db->insert('patient',$info)){
			return true;
		}
	}
	function forget_password($email){
		$query = $this->db->get_where('patient',array('email'=>$email));
		$checker = $query->row();
		$settings = get_settings();
		if($checker){
			$username=$checker->patient_firstname;
			$from_email=$settings->admin_email;
			$this->load->helper('string');
			$rand_pwd= random_string('alnum', 8);
			$password=array('password'=>md5($rand_pwd));                 
			$this->db->where('email',$email);
			$checker2=$this->db->update('patient',$password);
			if($checker2){
				$configuration = array( 'protocol'=>'smtp',
										'smtp_host'=>$settings->smtp_host,
										'smtp_user'=>$settings->smtp_username,
										'smtp_pass'=>$settings->smtp_password,
										'smtp_port'=>'587'
								);
				$this->load->library('email');
				$this->email->initialize($configuration);
				$this->email->from($from_email, $username);
				$this->email->to($email);
				$this->email->subject('Forget Password');
				$this->email->message('New Password is '.$rand_pwd.' ');
				$this->email->send();
				return "EmailSend";
			}
		}else{
			return "EmailNotExist";
		}
	}	
	function get_all($table_name){
		$query = $this->db->get($table_name);
		$result = $query->result();
		return $result;
	}
	function get_doctors($data){		
		$this->db->select('do.id as id,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,cities.zip as doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating');
		$this->db->from('doctor as do');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');		
		$this->db->where("status" ,"1");
		$currentDate = date("Y-m-d");
		$this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");
		if(isset($data['specialty']) and !empty($data['specialty'])) {
			$specialty = $data['specialty'];	
			$this->db->join('specialty_categories','FIND_IN_SET(specialty_categories.id, do.specialty) > 0', 'left');
			$this->db->where("specialty_categories.id" ,$specialty);
		}
		if(isset($data['location']) and !empty($data['location'])) {
			$location = $data['location'];	
			$this->db->join('cities','FIND_IN_SET(cities.id, do.cities_id) > 0', 'left');
			$this->db->where("cities.id" ,$location);
		}
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, do.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');				
		$query = $this->db->get();		
		return $result = $query->result();	
	}
	function save_appointment($data,$auth){
		$data['patient_id'] = $this->getPatient_Token($auth);
		if($this->db->insert('appointment',$data)){
			return true;
		}
	}
	function get_appointment($auth){		
		$this->db->select('appointment.*,visit_categories.reason AS apnt_note');
		$this->db->where('patient_id',$auth);
		$this->db->from('appointment');
		$this->db->join('visit_categories','appointment.ill_reason=visit_categories.id','left');
		$this->db->order_by('id','DESC');
		$rs = $this->db->get()->result();				
		return $rs;
	}
	function doctor_count($patient_id,$doctor_id){
		$this->db->where('patient_id',$patient_id);
		$this->db->where('doctor_id',$doctor_id);
		return $query = $this->db->get('appointment')->num_rows();
	}
	function get_specialties($doc_id){		
		$query = $this->db->query('SELECT specialty_categories.id,GROUP_CONCAT(specialty_categories.specialty_name) AS name FROM specialty_categories LEFT JOIN doctor ON FIND_IN_SET (specialty_categories.id,doctor.specialty) WHERE doctor.id='.$doc_id);
		if($query->num_rows()>0){
			return $query->row_array();
		} else {
			return array("name"=>"","id"=>"0");
		}
	}
	function get_singledoctorrating($id){			
		$this->db->select('rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating');
		$this->db->from('doctor as do');		
		$this->db->join('rating_doctor as rate','FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left');		
		$this->db->group_by('do.id');
		$this->db->where('do.id', $id);
		$query = $this -> db -> get();		
		$view_doctor = $query->row();		
        return $view_doctor;				
	}
	function get_singledoctor($id){
		return $this->db->where('id',$id)->get('doctor')->row();
	}
	function get_address($id){	
		$rs = $this->db->query('SELECT city as city_name,country as country_name,state as state_name,zip as doctor_office_zip FROM cities WHERE cities.id='.$id)->row();
		return $rs;
	}
	function doctor_degree($degree){
		$rs = $this->db->query("SELECT GROUP_CONCAT(degree_name) AS education FROM `degree_categories` WHERE id IN('$degree')");
		return $rs->education;
	}
	function doctor_affiliations($affilliated){
		$rs = $this->db->query("SELECT GROUP_CONCAT(hospital_name) AS affilliated FROM `affilliated_hospitals` WHERE id IN($affilliated)")->row();
		return $rs->affilliated;
	}
	function get_selected_data($table,$fields){		
		$sField = implode(',',$fields);
		return $this->db->query("SELECT $sField FROM $table")->result(); 
	}
	function get_selected_data_like($table,$fields,$like,$search_text){	
		$sField = implode(',', $fields);
		foreach ($like as $key => $value) {
			$slike []= $value." like '%".$search_text."%'"; 	
		}
		$sLike = implode(' or ',$slike);
		$sQuery = "SELECT $sField FROM $table where  $sLike";
		return $rResult = $this->db->query($sQuery)->result();
	}
	function searchDoctorLimit($speciality=NULL,$location=NULL,$insuracePlan=NULL,$language=NULL,$start,$perpage,$status){
		$sql = '';
		$cond = ' WHERE status= 1';
		if($speciality!=''){
			$cond .=" AND FIND_IN_SET('$speciality',doctor.specialty)";
		}
		if($location!=''){
			$cond .=" AND doctor.cities_id='$location'";
		}
		if($insuracePlan!=''){ 
			$cond .=" AND FIND_IN_SET('$insuracePlan',doctor.insurance)";
		}
		if($language!=''){
			$cond .=" AND FIND_IN_SET('$language',doctor.doctor_languages)";
		}	
		$sql ="SELECT doctor.id AS doctorID,doctor.doctor_firstname AS firstname,doctor.doctor_lastname AS lastname,doctor.doctor_office_address,doctor.doctor_office_state,doctor.doctor_office_city,doctor.doctor_office_zip,doctor.about_doctor AS description,doctor.specialty AS specilaityID,doctor.display_image AS imageName,doctor.insurance AS insuranceID FROM doctor";
		$sql .= $cond;
		if($status==1){
			$sql .= " GROUP  BY doctor.`id` ORDER BY `doctor`.`id` ASC";
		} else {
			$sql .= " GROUP  BY doctor.`id` ORDER BY `doctor`.`id` ASC LIMIT ".$start." , ".$perpage."";
		}			
		return $this->db->query($sql)->result_array();
	}
	function get_insurance_list(){
		$rs = $this->db->select('id,insurance_name AS name')->get('insurance_categories')->result();
		print json_encode($rs);
	}
	function get_visit_list(){
		$rs = $this->db->get('visit_categories')->result();
		print json_encode($rs);
	}
	function booking_appint($data){
		$num = $this->db->where('doctor_id',$data['doctor_id'])->where('patient_id',$data['patient_id'])->where('appointment_date',$data['appointment_date'])->where('appointment_time',$data['appointment_time'])->get('appointment')->num_rows();
		if($num>0){
			return false;
		} else {
			return $this->db->insert('appointment',$data);
		}
	}	
	function check_app_key($app_key){
		$num = $this->db->where('app_key',$app_key)->get('settings')->row();
		if(count($num)){
			return 'true';
		} else {
			return 'false';
		}		
		
	}	

} ?>