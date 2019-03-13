<?php 
class Hospital_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function get_hospitaldetails(){
		 $this->db->select('hospital.*,			                    
							cities.state as state_name,
							cities.city as city_name,
							cities.country as country_name,									 
							specialty_categories.specialty_name, 
							insurance_categories.insurance_name, 
							visit_categories.reason, 
							amenities_categories.facility_name, 
							hospital.hospital_name	, 
		 GROUP_CONCAT(distinct hospital.hospital_name	) as hospital_name,	cities.zip as hospital_zip,			
		 GROUP_CONCAT(distinct amenities_categories.facility_name) as facility_name,				
		 GROUP_CONCAT(distinct visit_categories.reason) as reason,				
		 GROUP_CONCAT(distinct insurance_categories.insurance_name) as insurance_name,				
		 GROUP_CONCAT(distinct language_categories.language_name) as language_name,
		 GROUP_CONCAT(distinct specialty_categories.specialty_name) as specialty_name
		 ');
		 $this->db->from('hospital as hospital' );
		// $this->db->join('country_categories', 'country_categories.id = hospital.hospital_country','left');
		 //$this->db->join('state_categories', 'state_categories.id = hospital.hospital_state','left');
		 //$this->db->join('city_categories', 'city_categories.id = hospital.hospital_city','left');
		 $this->db->join('cities', 'cities.id = hospital.cities_id','left');		
		 $this->db->join('language_categories', 'FIND_IN_SET(language_categories.id, hospital.hospital_languages) > 0','left');
		 $this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, hospital.specialty) > 0','left');
		 $this->db->join('insurance_categories', 'FIND_IN_SET(insurance_categories.id, hospital.insurance) > 0','left');
		 $this->db->join('visit_categories', 'FIND_IN_SET(visit_categories.id, hospital.visitation) > 0','left');
		 $this->db->join('amenities_categories', 'FIND_IN_SET(amenities_categories.id, hospital.amenities) > 0','left');
		 $this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, hospital.hospital_affilliations) > 0','left');
		 $this->db->group_by("hospital.id"); 
		 $query = $this->db->get();
		 $result = $query->result();
		 return $result;
	}
	function get_parenthos($id){
		 $this->db->where("id",$id);
		 $query = $this->db->get("hospital");
	     $result = $query->row(); 
		 if($result){
			  $this->db->where("id",$result->parent_id);
			  $query = $this->db->get("hospital");
			  $result1 = $query->row();
			  return $result1;
		 }		 
}
    function view_popup_hospital($id) {
			 $this->db->select('hospital.*,			                    
								cities.country as country_name,
								cities.state as state_name,
								cities.city as city_name,
								language_categories.language_name, 
								specialty_categories.specialty_name, 
								insurance_categories.insurance_name, 
								visit_categories.reason, 
								amenities_categories.facility_name, 
								hospital.hospital_name	, 
			 GROUP_CONCAT(distinct hospital.hospital_name) as hospital_name	,
			 GROUP_CONCAT(distinct amenities_categories.facility_name) as facility_name,				
			 GROUP_CONCAT(distinct visit_categories.reason) as reason,				
			 GROUP_CONCAT(distinct insurance_categories.insurance_name) as insurance_name,				
			 GROUP_CONCAT(distinct language_categories.language_name) as language_name,
			 GROUP_CONCAT(distinct specialty_categories.specialty_name) as specialty_name
			 ');
			 $this->db->from('hospital as hospital' );
			 $this->db->join('cities', 'cities.id = hospital.cities_id','left');		
			 $this->db->join('language_categories', 'FIND_IN_SET(language_categories.id, hospital.hospital_languages) > 0','left');
			 $this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, hospital.specialty) > 0','left');
			 $this->db->join('insurance_categories', 'FIND_IN_SET(insurance_categories.id, hospital.insurance) > 0','left');
			 $this->db->join('visit_categories', 'FIND_IN_SET(visit_categories.id, hospital.visitation) > 0','left');
			 $this->db->join('amenities_categories', 'FIND_IN_SET(amenities_categories.id, hospital.amenities) > 0','left');
			 $this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, hospital.hospital_affilliations) > 0','left');
			 $this->db->group_by("hospital.id"); 
			 $this->db->where('hospital.id',$id); 
			 $query = $this->db->get();
			 $result = $query->row();
			 return $result;	
	 }
	function hospitaldetails_add($data)
	{
		$this->db->where('email', $data['email']);
		$query = $this->db->get('hospital');
		if( $query->num_rows() > 0 ){ 
		return false;
		} 
		else{
			$array = $data['visitation'];
			$comma_separated = implode(",", $array);
			$data['visitation']=$comma_separated;
			$array = $data['insurance'];
			$comma_separated = implode(",", $array);
			$data['insurance']=$comma_separated;
			$array = $data['specialty'];
			$comma_separated = implode(",", $array);
			$data['specialty']=$comma_separated;	  
			$array = $data['hospital_languages'];
			$comma_separated = implode(",", $array);
			$data['hospital_languages']=$comma_separated;			  
			$array = $data['amenities'];
			$comma_separated = implode(",", $array);
			$data['amenities']=$comma_separated;
			$array = $data['hospital_affilliations'];
			$comma_separated = implode(",", $array);
			$data['hospital_affilliations']=$comma_separated;				  	  
			$data['password'] = md5($data['password']);
			$result = $this->db->insert('hospital', $data);
			return $result;
		}
	}
	function hospitaldetails_edit($data, $id){
		$this->db->where('email', $data['email']);
		$this->db->where('id<>', $id);
		$query = $this->db->get('hospital');
		if( $query->num_rows() > 0 ){ 
		return false;
		} 
		else{
			  $array = $data['visitation'];
			  $comma_separated = implode(",", $array);
			  $data['visitation']=$comma_separated;
			  $array = $data['insurance'];
			  $comma_separated = implode(",", $array);
			  $data['insurance']=$comma_separated;		  
			  $array = $data['specialty'];
			  $comma_separated = implode(",", $array);
			  $data['specialty']=$comma_separated;		  
			  $array = $data['hospital_languages'];
			  $comma_separated = implode(",", $array);
			  $data['hospital_languages']=$comma_separated;		  
			  $array = $data['amenities'];
			  $comma_separated = implode(",", $array);
			  $data['amenities']=$comma_separated;
			  $array = $data['hospital_affilliations'];
			  $comma_separated = implode(",", $array);
			  $data['hospital_affilliations']=$comma_separated;						  
			  $this->db->where('id', $id);
			  $result = $this->db->update('hospital', $data);
			  return $result;
		}		  
	}
	public function get_hosvisitaion(){
		  $query = $this->db->get('visit_categories');
		  $result = $query->result();
		  return $result;
	}
	public function get_insurancehosp(){
	     $query = $this->db->get('insurance_categories');
		 $result = $query->result();
		 return $result;
	}
    public function get_specialtyhosp(){
		$query = $this->db->get('specialty_categories');
		$result = $query->result();
		return $result;
	}
	public function get_languagehosp(){
		$query = $this->db->get('language_categories');
		$result = $query->result();
		return $result;
	}	
	public function get_countryhosp(){
		 $query = $this->db->get('country_categories');
		 $result = $query->result();
		 return $result;
	}
	public function get_hospital(){
		$query = $this->db->get('hospital');
		$result = $query->result();
		return $result;
	}
	public function get_satehosp($id)
	{
		$this->db->select('hospital.id as id,hospital.hospital_country,state_categories.id as state_id,state_categories.state_name');
	    $this->db->from('hospital');
	    $this->db->where('hospital.id',$id);
		$this->db->join('state_categories','find_in_set(hospital.hospital_country,state_categories.country_id) > 0', 'left');
		$query = $this->db->get();
		$result = $query->result();
		return $result;				
	}
	public function get_cityhosp($id){
		$this->db->select('hospital.id as id,hospital.hospital_state,city_categories.id as city_id,city_categories.city_name');
		$this->db->from('hospital');
		$this->db->where('hospital.id',$id);
		$this->db->join('city_categories','find_in_set(hospital.hospital_state,city_categories.state_id) > 0', 'left');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function gethospital_amenities(){
		 $query = $this->db->get('amenities_categories');
		 $result = $query->result();
		 return $result;
	}
	public function gethospital_affiliateds(){
		  $query = $this->db->get('affilliated_hospitals');
		  $result = $query->result();
		  return $result;
	}
	public function get_hospitalstatdetails($id) {
		$this->db->where('country_id', $id);
		$query = $this->db->get('state_categories');
	    $result = $query->result();					
		return $result;		 
    } 
	public function get_hospitalcitydetails($id) {
		$this->db->where('state_id', $id);
		$query = $this->db->get('city_categories');
		$result = $query->result();								
		return $result;			 
    }
	public function get_single_hospital($id){
		 $query = $this->db->where('id',$id);
		 $query = $this->db->get('hospital');
		 $result = $query->row();
		 return $result;  
	}
	public function hospital_delete($id){
		 $this->db->where('id',$id);
		 $result = $this->db->delete('hospital');
		 if($result){
			return "success"; 
		 }
		 else {
			 return "error";
		 }
	 }
	 public function update_hospital_status($id, $data1) {
		$this->db->where('id', $id);
		$result = $this->db->update('hospital',$data1);
		return $result; 
	 }
	 function hospitalgallery_add($data){
		 $result = $this->db->insert('hospital_gallery', $data);
		 return $result;
	 }
	 function gethospital_gallerydetails(){
		 $query = $this->db->get('hospital');
		 $result = $query->result();
		 return $result;
	 }
	 function gethospital_gallery(){
		 $this->db->select('hospital_gallery.hospital_id, hospital.hospital_name, count(hospital_gallery.id) as total_images');
		 $this->db->from('hospital_gallery');
		 $this->db->join('hospital', 'hospital.id = hospital_gallery.hospital_id','left');
		 $this->db->group_by("hospital_gallery.hospital_id");
		 $query = $this->db->get();
		 $result = $query->result();
		 return $result;
	 }
	 function get_hospitals_gallery($id) {
		 $this->db->select('hospital_gallery.id, hospital.hospital_name, hospital_gallery.image');
		 $this->db->from('hospital_gallery');
		 $this->db->join('hospital', 'hospital.id = hospital_gallery.hospital_id','left');
		 $this->db->where('hospital_gallery.hospital_id', $id);
		 $query = $this->db->get();
		 $result = $query->result();
		 return $result;
	 }
	 function hospitalgallery_delete($id){
		 $this->db->where('id', $id);
		 $result = $this->db->delete('hospital_gallery'); 
		 if($result) {
			 return "Success";
		 }
		 else {
			 return "Error";
		 }
	 }
}