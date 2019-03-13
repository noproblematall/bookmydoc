<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
	header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
		header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
		exit(0);
}
class Webservice extends CI_Controller {
	public function __construct() {
		parent::__construct();
		error_reporting(0);
		date_default_timezone_set('Asia/Kolkata');		
		$this->load->model('Webservice_model','webservice_model');		
	}
	public function index(){
		echo "hi! guys";
	}
	public function appkey_validator(){		
		$data =json_decode(file_get_contents('php://input'), true);	
		$result = $this->webservice_model->check_app_key($data['my_key']);
		echo $result;
	}
	public function Signin(){	
		$data =json_decode(file_get_contents('php://input'), true);	
		if(isset($data) && !empty($data)){
			$result = $this->webservice_model->signin($data);
			echo json_encode($result);
		}
	}
	public function Signup(){		
		$data =json_decode(file_get_contents('php://input'), true);
		if(isset($data) && !empty($data)){
			if($this->Isemailexist($data['email'])){
				$data = array('status'=>false,'msg'=>'We already have this email address');
			}else{
				$password = md5($data['password']);	unset($data['password']);				
				$result = $this->webservice_model->signup($data,$password);
				if($result){
					$data = array('status'=>true,'msg'=>'Successfully Registered. Please login to your account');
				}
			}
			echo json_encode($data);				
		}		
	}
	public function Isemailexist($email){
		$doctor_exist = $this->webservice_model->isEmailExistPatient($email);	
    if ($doctor_exist) {		
        return false;
		}else {
			return true;
		}	
	}
    public function Final_return($status,$error,$message) {
        if($status == "success") {
            $ret_msg = array('status'=>"success",'message' => $message);
        } else {
            $ret_msg = array('status'=>"error",'error' => $error,'message' => $message);    
        }
        header('Content-type: application/json');
        return json_encode($ret_msg);
    }
	public function Forget_password(){
		if($_POST){
			if(isset($_POST) && !empty($_POST)){
				$data =json_decode(file_get_contents('php://input'), true);
				$result = $this->webservice_model->forget_password($data['email']);
				if($result){
					echo $this->Final_return('success','','');
				}else{
					echo $this->Final_return('error','error','entered email is invalid');	
				}
			}
		}
	}
	public function get_all_specialty(){				       
		$specialties = $this->webservice_model->get_all('specialty_categories');
		echo json_encode($specialties);					
	}
	public function get_all_location(){					      
		$cities = $this->webservice_model->get_all('city_categories');
		echo json_encode($cities);					
	}
	public function get_all_insurance(){				      
		$insurance = $this->webservice_model->get_all('insurance_categories');
		echo json_encode($insurance);					
	}
	public function get_all_reason(){				       
		$visitation = $this->webservice_model->get_all('visit_categories');
		echo json_encode($visitation);					
	}
	public function get_doctors(){
		if($_POST){
			if(isset($_POST) && !empty($_POST)){
				$data =json_decode(file_get_contents('php://input'), true);				
				$result = $this->webservice_model->get_doctors($data);
				echo json_encode($result);
			}
		}		
	}
	public function save_appointment(){
		if(isset(apache_request_headers()['Authorization'])) {
			$data = json_decode(file_get_contents('php://input'), true);
			$auth = apache_request_headers()['Authorization'];
			$result = $this->webservice_model->save_appointment($data,$auth);
			if($result){
				echo $this->Final_return('success','','');
			}else{
				echo $this->Final_return('error','error','entered value is invalid');	
			}
		}	
	}
	public function get_appointment(){		
		$data =json_decode(file_get_contents('php://input'), true);		
		if(isset($data) && !empty($data)){
			$result = $this->webservice_model->get_appointment($data['user_id']);
			$book_info = array();
			foreach ($result as $rs) {
				$count = $this->webservice_model->doctor_count($rs->patient_id,$rs->doctor_id);
				$row = array(   'id'=>$rs->id,
								'apnt_starttime'=>$rs->appointment_time,
								'apnt_endtime'=>$rs->end_time,
								'apnt_date'=>$rs->appointment_date,
								'doctor_id'=>$rs->doctor_id,
								'patient_id'=>$rs->patient_id,
								'illness'=>$rs->ill_reason,
								'apnt_note'=>$rs->apnt_note,
								'status'=>$rs->status,
								'apnt_count'=>array('doctor_id'=>$rs->doctor_id,'count'=>$count)
						);
				array_push($book_info, $row);
			}
			if(count($book_info)>0){
				print json_encode(array("status"=>true,'data'=>$book_info));
			} else {
				print json_encode(array("status"=>false,'data'=>array()));
			}
		}		
	}	
	public function get_doctor_info(){	
		$data =json_decode(file_get_contents('php://input'), true);				
		if(isset($data) && !empty($data)){
			$doc_speciality =$this->webservice_model->get_specialties($data['user_id']);
			$doc_details =$this->webservice_model->get_singledoctor($data['user_id']);
			$doc_rating =$this->webservice_model->get_singledoctorrating($data['user_id']);
			$gender = $doc_details->doctor_sex=='male'?'1':'2';				
			$address = $this->webservice_model->get_address($doc_details->cities_id);
			$education = $this->webservice_model->doctor_degree($doc_details->doctor_degree);
			$affiliations = $this->webservice_model->doctor_affiliations($doc_details->doctor_affiliations);
			$dac_array = array("id"=>$doc_details->id,"email"=>$doc_details->email,"password"=>$doc_details->password,"usertype"=>"1","firstname"=>$doc_details->doctor_firstname,"lastname"=>$doc_details->doctor_lastname,"gender"=>$doc_details->$gender,"dob"=>$doc_details->doctor_age,"maritalstatus"=>"","address"=>$doc_details->doctor_office_address.', '.$address->city_name.', '.$address->state_name.', '.$address->country_name.' '.$address->doctor_office_zip,"city"=>$address->city_name,"state"=>$address->state_name,"zipcode"=>$address->doctor_office_zip,"phone"=>$doc_details->phone,"speciality"=>$doc_details->specialty,"description"=>$doc_details->about_doctor,"Education"=>$education,"HospitalAffiliations"=>$affiliations,"BoardCertifications"=>"","ProfessionalMemberships"=>$doc_details->doctor_memberships,"Awards"=>$doc_details->doctor_awards,"working_plan"=>$doc_details->working_time,"breaks"=>$doc_details->break_time,"vecation"=>$doc_details->vacation_time,"createdate"=>"0000-00-00 00=>00=>00","updatedate"=>"0000-00-00 00=>00=>00","secret_key"=>"","status"=>"1");
			if(!empty($doc_details->display_image)):
			$doc_image = $doc_details->display_image;
			else:
			$doc_image = 'uploads/noimage.png';
			endif;
			$data = array(  'doc_rating'=>$doc_rating->avg_rating,
							'doc_details'=>$dac_array,
							'doc_speciality'=>$doc_speciality,
							'doc_image'=>$doc_image
					);
			print json_encode($data);
		}	
	}
	public function get_selection_details(){
		$data =json_decode(file_get_contents('php://input'), true);	
		$data = $data['data'];		
		if(isset($data) && !empty($data)){
			$selected = $data['selectionname'];
			switch ($selected) {
				case 'speciality':
					$table_name='specialty_categories';
					$fields=array('id','specialty_name as name');
					break;
				case 'location':
					$table_name='cities';
					$fields=array('id','city as name');
					break;
				case 'insurance':
					$table_name='insurance_categories';
					$fields=array('id','insurance_name as name');
					break;
			}
			$result = $this->webservice_model->get_selected_data($table_name,$fields);
			echo json_encode($result);
		} else {
			echo json_encode(null);
		}
	}
	public function act_search_bar(){
		$data =json_decode(file_get_contents('php://input'), true);	
		$search_text = $data['search_text'];
		if(is_numeric($search_text)){
			$response['location'] = $this->webservice_model->get_selected_data_like('city_categories',array('city_name as name','id'),array('city_name'),$search_text);
			$response['user'] = $this->webservice_model->get_selected_data_like('doctor',array('id','CONCAT_WS(" ",doctor_firstname,doctor_lastname) AS name'),array('doctor_firstname','doctor_lastname'),$search_text);
		}else{
			$response['location'] = $this->webservice_model->get_selected_data_like('city_categories',array('city_name as name','id'),array('city_name'),$search_text);
			$response['user'] = $this->webservice_model->get_selected_data_like('doctor',array('id','CONCAT_WS(" ",doctor_firstname,doctor_lastname) AS name'),array('doctor_firstname','doctor_lastname'),$search_text);
			$response['speciality'] = $this->webservice_model->get_selected_data_like('specialty_categories',array('id','specialty_name as name'),array('id','specialty_name'),$search_text);
			$response['insurance'] = $this->webservice_model->get_selected_data_like('insurance_categories',array('id','insurance_name as name'),array('id','insurance_name'),$search_text);
			$response['languages'] = $this->webservice_model->get_selected_data_like('language_categories',array('id','language_name as name'),array('id','language_name'),$search_text);
		}
		echo json_encode($response, JSON_FORCE_OBJECT);
	}
	public function get_calendar_details(){	
		$this->load->helper('general');		
		calender();
		$calendar = new Calendar(); 
		echo $calendar->show();
	}
	public function get_search_details(){
		$this->load->helper('general');
		$data =json_decode(file_get_contents('php://input'), true);
		$searchData = $data['searchData'];
		$page     = $searchData['page'];
		$page -= 1;
		$per_page     = 5;
		$start        = $page * $per_page;
		if(!isset($searchData['languages'])){
			$searchData['languages'] = '';
		}
		$resultdata['profile_details'] = $this->webservice_model->searchDoctorLimit($searchData['speciality'],$searchData['location'],$searchData['insurance'],$searchData['languages'],$start,$per_page,0);
		$length = count($this->webservice_model->searchDoctorLimit($searchData['speciality'],$searchData['location'],$searchData['insurance'],$searchData['languages'],$start,$per_page,1));
		$result_data['length'] =  $length ;
		$cur_date= date('d-M-Y g:i:s A',strtotime($searchData['selectedDate']));
		$current_time = strtotime($cur_date);
		$frac = 900;
		$r = $current_time % $frac;
		$new_time = $current_time + ($frac-$r);
		$cur_date = date('d-M-Y g:i:s A', $new_time);
		$status = $searchData['status'];
		foreach ($resultdata['profile_details'] as $key => $value) {
			$value['time_details']= init($value['doctorID'],$cur_date,$status);
			$specilaityName = $this->webservice_model->get_specialties($value['doctorID']);
			$value['specilaityName'] = $specilaityName['name'];
			$value['doc_rating'] =$this->webservice_model->get_singledoctorrating($data['user_id']);
			$result_data['profile_details'][] = $value;
		}		
		echo json_encode($result_data);
	}
	public function get_doctor_details(){
		$this->load->helper('calender');
		$docData = json_decode(file_get_contents('php://input'), true);
		$docData = $docData['docData'];
		$cur_date= date('d-M-Y g:i:s A',strtotime($docData['date']));
		$status = $docData['status'];
		$doc_details = init($docData['id'],$cur_date,$status);
		$value['doc_dates']= $doc_details;
		echo json_encode($value, JSON_FORCE_OBJECT);
	}
	public function get_insurance_list(){
		$this->webservice_model->get_insurance_list();		
	}
	public function visit_categories(){
		$this->webservice_model->get_visit_list();
	}
	public function act_confirm_apnt(){
		$docData = json_decode(file_get_contents('php://input'), true);
		$booking = $docData['Appointment'];
		$booking_reason = $docData['reason'];
		$booking_insurance = $docData['insurance'];
        $apt_date_time = str_replace('T', ' ',$booking['apnttime']);
        list($apt_date,$apt_time) = explode(' ',$apt_date_time);
        $endTime = strtotime("+15 minutes", strtotime($apt_time));
		$endTime = date('h:i A', $endTime);
		$discount_start_date = $apt_date_time;    
		$start_date = date('h:i A', strtotime($discount_start_date));
        $data = array('doctor_id'=>$booking['doctor_id'],
        			  'patient_id'=>$booking['patiendid'],
        			  'appointment_date'=>$apt_date,
        			  'appointment_time'=>$start_date,
        			  'end_time'=>$endTime,
        			  'insurance'=>$booking_insurance,
        			  'ill_reason'=>$booking_reason
				);	
		$status = $this->webservice_model->booking_appint($data);
		if($status){
			print json_encode(array('status'=>true));
		} else {
			print json_encode(array('status'=>false,'msg'=>"Sorry.This time is booked already.Please try another one"));
		}
	}
	
} ?>