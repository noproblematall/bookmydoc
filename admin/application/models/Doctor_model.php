<?php 
class Doctor_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	public function get_doctordetails(){
				 
				    $this->db->select('doctor.*,
			                  cities.state as state_name,
							  cities.city as city_name,
				              language_categories.language_name, 
				              cities.country as country_name,
							  specialty_categories.specialty_name,
							  affilliated_hospitals.hospital_name,
							  degree_categories.degree_name,
							  visit_categories.reason,
							  insurance_categories.insurance_name,,
							 
            GROUP_CONCAT(distinct insurance_categories.insurance_name) as insurance_name,			
			GROUP_CONCAT(distinct visit_categories.reason) as reason,				  
            GROUP_CONCAT(distinct degree_categories.degree_name) as degree_name,
			GROUP_CONCAT(distinct affilliated_hospitals.hospital_name) as hospital_name,
		    GROUP_CONCAT(distinct specialty_categories.specialty_name) as specialty_name,
			GROUP_CONCAT(distinct language_categories.language_name) as language_name');	 
			$this->db->from('doctor as doctor' );
			//$this->db->join('country_categories', 'country_categories.id = doctor.id','left');
			//$this->db->join('state_categories', 'state_categories.id = doctor.id','left');
			//$this->db->join('city_categories', 'city_categories.id = doctor.id','left');
			$this->db->join('cities', 'cities.id = doctor.cities_id','left');
			$this->db->join('language_categories', 'FIND_IN_SET(language_categories.id, doctor.doctor_languages) > 0','left');
			$this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, doctor.specialty) > 0','left');
			$this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, doctor.doctor_affiliations) > 0','left');
			$this->db->join('degree_categories', 'FIND_IN_SET(degree_categories.id, doctor.doctor_degree) > 0','left');
			$this->db->join('visit_categories', 'FIND_IN_SET(visit_categories.id, doctor.visitation) > 0','left');
			$this->db->join('insurance_categories', 'FIND_IN_SET(insurance_categories.id, doctor.insurance) > 0','left');
			$this->db->group_by('doctor.id'); 
			$query = $this->db->get();
			$result = $query->result();
			return $result;		
	}
	public function get_doctortiming(){
					$this->db->select('working_time');
					$data = $this->db->get_where('doctor',array())->row_array();
					return $data['working_time'];
	    }
	function update_worktime($id, $work_time){
		$sql = $this->db->get_where('doctor',array('id'=>$id));
		if($sql->num_rows() == 0){
			$working_time['id'] = $id;
			return $this->db->insert('doctor',$working_time);
		}else{
			return $this->db->update('doctor',$working_time, array('id'=>$id));
		}
	}
	public function doctorsbreaktime_add($data)
	{
		
	}
 public function get_parent($id)
 {
		$this->db->where("id",$id);
		$query=$this->db->get("doctor");
		$result=$query->row();
		    if(!empty($result->clinic_id))
			{
				$this->db->where("id",$result->clinic_id);
				$query=$this->db->get("clinic");
				$result1=$query->row();
				return $result1;
			}
			elseif (!empty($result->medical_id))
			{
				$this->db->where("id",$result->medical_id);
				$query=$this->db->get("medical_center");
				$result1=$query->row();
				return $result1;
			}
			else
			{
				$this->db->where("id",$result->hospital_id);
				$query=$this->db->get("hospital");
				$result1=$query->row();
				return $result1;
			}
 }
	function view_popup_doctor($id){
		    $this->db->select('doctor.*,
			                  cities.state as state_name,
							  cities.city as city_name,
				              language_categories.language_name, 
				              cities.country as country_name,
							  specialty_categories.specialty_name,
							  affilliated_hospitals.hospital_name,
							  degree_categories.degree_name,
							  visit_categories.reason,
							  insurance_categories.insurance_name, cities.zip as doctor_office_zip,
            GROUP_CONCAT(distinct insurance_categories.insurance_name) as insurance_name,			
			GROUP_CONCAT(distinct visit_categories.reason) as reason,				  
            GROUP_CONCAT(distinct degree_categories.degree_name) as degree_name,
			GROUP_CONCAT(distinct affilliated_hospitals.hospital_name) as hospital_name,
		    GROUP_CONCAT(distinct specialty_categories.specialty_name) as specialty_name,
			GROUP_CONCAT(distinct language_categories.language_name) as language_name');	 
			$this->db->from('doctor as doctor' );
			//$this->db->join('country_categories', 'country_categories.id = doctor.doctor_office_country','left');
			//$this->db->join('state_categories', 'state_categories.id = doctor.doctor_office_state','left');
			//$this->db->join('city_categories', 'city_categories.id = doctor.doctor_office_city','left');
			$this->db->join('cities', 'cities.id = doctor.cities_id','left');
			$this->db->join('language_categories', 'FIND_IN_SET(language_categories.id, doctor.doctor_languages) > 0','left');
			$this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, doctor.specialty) > 0','left');
			$this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, doctor.doctor_affiliations) > 0','left');
			$this->db->join('degree_categories', 'FIND_IN_SET(degree_categories.id, doctor.doctor_degree) > 0','left');
			$this->db->join('visit_categories', 'FIND_IN_SET(visit_categories.id, doctor.visitation) > 0','left');
			$this->db->join('insurance_categories', 'FIND_IN_SET(insurance_categories.id, doctor.insurance) > 0','left');
			$this->db->group_by('doctor.id'); 
			$this->db->where('doctor.id',$id); 
			$query = $this->db->get();
			$result = $query->row();
			return $result;
	    }
	public function get_single_doctor($id){
		$this->db->where('id',$id);
		$query = $this->db->get('doctor');
		$result = $query->row();
		return $result;  
	}
	public function get_doctor_working_time($id){	
	         $this->db->select('working_time');
		     $data = $this->db->get_where('doctor',array('id'=>$id))->row_array();
		     return $data['working_time'];
	}
    public function doctorsinfo_edit($data, $id){	
			$this->db->where('email', $data['email']);
			$this->db->where('id<>', $id);
			$query1 = $this->db->get('doctor');
			$result1 = $query1->row(); 
			if($result1){  
				return false;
			}
			else{
				$this->db->where('email', $data['email']);
				$query2 = $this->db->get('clinic');
				$result2 = $query2->row(); 
				if($result2){  
					return false;
				}
				else{
					$this->db->where('email', $data['email']);
					$query3 = $this->db->get('patient');
					$result3 = $query3->row(); 
					if($result3){  
						return false;
					}
					else{
						$this->db->where('email', $data['email']);
						$query4 = $this->db->get('hospital');
						$result4 = $query4->row(); 
						if($result4){  
							return false;
						}
						else{
							$this->db->where('email', $data['email']);
							$query5 = $this->db->get('medical_center');
							$result5 = $query5->row(); 
							if($result5){  
								return false;
							}
							else{
								$array = $data['doctor_languages'];
								$comma_separated = implode(",", $array);
								$data['doctor_languages']=$comma_separated;
								$array = $data['doctor_affiliations'];
								$comma_separated = implode(",", $array);
								$data['doctor_affiliations']=$comma_separated;
								$array = $data['insurance'];
								$comma_separated = implode(",", $array);
								$data['insurance']=$comma_separated;
								$array = $data['specialty'];
								$comma_separated = implode(",", $array);
								$data['specialty']=$comma_separated;
								$array = $data['visitation'];
								$comma_separated = implode(",", $array);
								$data['visitation']=$comma_separated;
								$array = $data['doctor_degree'];
								$comma_separated = implode(",", $array);
								$data['doctor_degree']=$comma_separated;
								$this->db->where('id', $id);
								$result = $this->db->update('doctor', $data); 
								return "Success";
						}
					}
				}
			}
		}
 	}
    public function get_affiliation(){
		$query = $this->db->get('affilliated_hospitals');
		$result = $query->result();
		return $result;
	}	
	public function get_languag(){
		$query = $this->db->get('language_categories');
		$result = $query->result();
		return $result;
	}
    public function get_country(){
		 $query = $this->db->get('country_categories');
		 $result = $query->result();
		 return $result;
	}
	public function get_clinic(){
		$query = $this->db->get('clinic');
		$result = $query->result();
		return $result;
	}
	public function get_hospital(){
		$query = $this->db->get('hospital');
		$result = $query->result();
		return $result;
	}
	public function get_medical(){
		$query = $this->db->get('medical_center');
		$result = $query->result();
		return $result;
	}
	public function get_states($id){			
		$this->db->select('doctor.id as id,doctor.doctor_office_country,state_categories.id as state_id,state_categories.state_name');
	    $this->db->from('doctor');
	    $this->db->where('doctor.id',$id);
		$this->db->join('state_categories','find_in_set(doctor.doctor_office_country,state_categories.country_id) > 0', 'left');
		$query = $this->db->get();
		$result = $query->result();
		return $result;		
	}
	public function get_cityval($id){
		$this->db->select('doctor.id as id,doctor.doctor_office_state,city_categories.id as city_id,city_categories.city_name');
		$this->db->from('doctor');
		$this->db->where('doctor.id',$id);
		$this->db->join('city_categories','find_in_set(doctor.doctor_office_state,city_categories.state_id) > 0', 'left');
		$query = $this->db->get();
		$result = $query->result();
	    return $result;
	}
	public function get_insurance(){
		 $query = $this->db->get('insurance_categories');
		 $result = $query->result();
		 return $result;
	}
	public function get_specialty(){
		$query = $this->db->get('specialty_categories');
		$result = $query->result();
		return $result;
	}
	public function get_visiters(){
		 $query = $this->db->get('visit_categories');
		 $result = $query->result();
		 return $result;
	}
	public function get_docdegrees(){
		$query = $this->db->get('degree_categories');
		$result = $query->result();
		return $result;
	}
   public function doctorinfo_add($data){
			$this->db->where('email', $data['email']);
			$query1 = $this->db->get('doctor');
			$result1 = $query1->row(); 
			if($result1){  
				return false;
			}
			else{
				$this->db->where('email', $data['email']);
				$query2 = $this->db->get('clinic');
				$result2 = $query2->row(); 
				if($result2){  
					return false;
				}
				else{
					$this->db->where('email', $data['email']);
					$query3 = $this->db->get('patient');
					$result3 = $query3->row(); 
					if($result3){  
						return false;
					}
					else{
						$this->db->where('email', $data['email']);
						$query4 = $this->db->get('hospital');
						$result4 = $query4->row(); 
						if($result4){  
							return false;
						}
						else{
							$this->db->where('email', $data['email']);
							$query5 = $this->db->get('medical_center');
							$result5 = $query5->row(); 
							if($result5){  
								return false;
							}
							else{
							  $array = $data['doctor_languages'];
							  $comma_separated = implode(",", $array);
							  $data['doctor_languages']=$comma_separated;
							  $array = $data['insurance'];
							  $comma_separated = implode(",", $array);
							  $data['insurance']=$comma_separated;
							  $array = $data['doctor_affiliations'];
							  $comma_separated = implode(",", $array);
							  $data['doctor_affiliations']=$comma_separated;
							  $array = $data['specialty'];
							  $comma_separated = implode(",", $array);
							  $data['specialty']=$comma_separated;
							  $array = $data['visitation'];
							  $comma_separated = implode(",", $array);
							  $data['visitation']=$comma_separated;
							  $array = $data['doctor_degree'];
							  $comma_separated = implode(",", $array);
							  $data['doctor_degree']=$comma_separated;  
							  $data['password'] = md5($data['password']);
							  $result = $this->db->insert('doctor' ,$data);
							  return $result;
							  
						}
					}
				}
			}
		}
 	}
	public function doctors_delete($id){ 
		 $this->db->where('id',$id);
		 $result = $this->db->delete('doctor');
		 if($result){
			return "success"; 
		 }
		 else {
			 return "error";
		 }
	 }
	   public function get_statdetails($id) {
			$this->db->where('country_id', $id);
			$query = $this->db->get('state_categories');
			$result = $query->result();				
			return $result;		 
	   } 
	   public function get_citydetails($id){
		    $this->db->where('state_id', $id);
			$query = $this->db->get('city_categories');
		    $result = $query->result();				
			return $result;
	   }
	   public function get_countrypoint() {
			$id=$_POST['value'];
			$this->db->where('country_id', $id);
			$query = $this->db->get('state_categories');
		    $result = $query->result();
			foreach($result as $editrouteget){
				echo '<option value="'.$editrouteget->id.'">'. $editrouteget->state_name.' </option>';
			}
				 return $result; 	   
	   } 
	   public function get_citypoint()
	   {
			$id=$_POST['value'];
			$this->db->where('state_id', $id);
			$query = $this->db->get('city_categories');
			$result = $query->result();
			foreach($result as $editrouteget){
				echo '<option value="'.$editrouteget->id.'">'. $editrouteget->city_name.' </option>';
			}
				 return $result; 
	   }
	    function update_doctor_status($data,$data1){
			$this->db->where('id',$data);
			$result = $this->db->update('doctor',$data1);
			return $result; 
	    }
		function get_map($id){
		    $query = $this->db->where('id',$id);
			$query = $this->db->get('doctor');
			$get_details=$query->row();
			if($get_details){
				   return $get_details;
			}
			else{
				  return "Novalue";
			}  
			return $result;
	 }	 
	  function Gallery_add($data) {
			 $result =$this->db->insert('doctor_gallery',$data);
			 return $result;
	  }
	  public function get_gallerydetails() {      
		 $query = $this->db->get('doctor');
		 $result = $query->result();
		 return $result; 				
	  }
	  public function getdoctor_gallery() {
		  $this->db->select('doctor_gallery.doctor_id, doctor.doctor_firstname, count(doctor_gallery.id) as total_images');
		  $this->db->from('doctor_gallery');
		  $this->db->join('doctor', 'doctor.id = doctor_gallery.doctor_id','left');
		  $this->db->group_by("doctor_gallery.doctor_id");
		  $query = $this->db->get();
		  $result = $query->result();
		  return $result;
	  }
	  function get_doctors_gallery($id) {			
			$this->db->select('doctor_gallery.id, doctor_gallery.image, doctor.doctor_firstname');
			$this->db->from('doctor_gallery');
			$this->db->join('doctor', 'doctor.id = doctor_gallery.doctor_id','left');
			$this->db->where('doctor_gallery.doctor_id', $id);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
	  }
	  function delete_gallery_images($id) {		
			 $this->db->where('id', $id);
			 $result = $this->db->delete('doctor_gallery'); 
			 if($result) {
				 return "Success";
			 }
			 else {

				 return "Error";
			 }
	   }  
////////////////////////////////////////////////////
///////********DOCTOR WORKINGTIME ADD********///////	   
	 public function get_singleid($id){
		       $query = $this->db->where('id',$id);
			   $query = $this->db->get('doctor');
			   $result = $query->row();
			   return $result;  
	}
	public function doctorsinfo_edits($working_time, $id)
	{
		$sql = $this->db->get_where('doctor',array('id'=>$id));
		if($sql->num_rows() == 0){
			$working_time['id'] = $id;

			return $this->db->insert('doctor',$working_time);
		}else{
			return $this->db->update('doctor',$working_time, array('id'=>$id));
		}
	}
////////////////////////////////////////////////////
///////***********BREAKE TIME ADD************///////	 
     public function get_singlebreakid($id){
		       $query = $this->db->where('id',$id);
			   $query = $this->db->get('doctor');
			   $result = $query->row();
			   return $result;  
	}
	 public function doctorbreaktime_edits($working_time, $id){
		$sql = $this->db->get_where('doctor',array('id'=>$id));
		if($sql->num_rows() == 0){
			$working_time['id'] = $id;
			return $this->db->insert('doctor',$working_time);
		}else{
			return $this->db->update('doctor',$working_time, array('id'=>$id));
		}
	}
	function getCountry(){
		$this->db->select('id,country_name');
		$this->db->from('country_categories');
		$this->db->order_by('country_name', 'asc');
		$query=$this->db->get();
		return $query;
}
	public function getData($loadType,$loadId){
		if($loadType=="state"){
			$fieldList='id,state_name as name';
			$table='state_categories';
			$fieldName='country_id';
			$orderByField='state_name';						
		}else{
			$fieldList='id,city_name as name';
			$table='city_categories';
			$fieldName='state_id';
			$orderByField='city_name';	
		}
		$this->db->select($fieldList);
		$this->db->from($table);
		$this->db->where($fieldName, $loadId);
		$this->db->order_by($orderByField, 'asc');
		$query=$this->db->get();
		return $query; 
	}
}