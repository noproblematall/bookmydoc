<?php 
class Medical_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	public function get_medicaldetails(){
		$this->db->select('medical_center.*,				                  
						   cities.state as state_name,
						   cities.city as city_name,	
						   cities.country as country_name,
						   specialty_categories.specialty_name,
						   insurance_categories.insurance_name,
						   visit_categories.reason,
						   amenities_categories.facility_name,
						   affilliated_hospitals.hospital_name,cities.zip as medical_zip,
		 GROUP_CONCAT(distinct affilliated_hospitals.hospital_name) as hospital_name,				   
		 GROUP_CONCAT(distinct amenities_categories.facility_name) as facility_name,				   
		 GROUP_CONCAT(distinct visit_categories.reason) as reason,				   
		 GROUP_CONCAT(distinct insurance_categories.insurance_name) as insurance_name,
		 GROUP_CONCAT(distinct specialty_categories.specialty_name) as specialty_name,				   
		 GROUP_CONCAT(distinct language_categories.language_name) as language_name');
		 $this->db->from('medical_center as medical_center' );
		// $this->db->join('country_categories', 'country_categories.id = medical_center.medical_country','left');	
		// $this->db->join('state_categories', 'state_categories.id = medical_center.medical_state','left');
		// $this->db->join('city_categories', 'city_categories.id = medical_center.medical_city','left');	
         $this->db->join('cities', 'cities.id = medical_center.cities_id','left');				 
		 $this->db->join('language_categories', 'FIND_IN_SET(language_categories.id, medical_center.medical_languages) > 0','left');
		 $this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, medical_center.specialty) > 0','left');
		 $this->db->join('insurance_categories', 'FIND_IN_SET(insurance_categories.id, medical_center.insurance	) > 0','left');
		 $this->db->join('visit_categories', 'FIND_IN_SET(visit_categories.id, medical_center.visitation	) > 0','left');
		 $this->db->join('amenities_categories', 'FIND_IN_SET(amenities_categories.id, medical_center.amenities	) > 0','left');
		 $this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, medical_center.medical_affilliations	) > 0','left');
		 $this->db->group_by("medical_center.id"); 
		 $query = $this->db->get();
		 $result = $query->result();
		 return $result;			
	}
	public function get_submedical($id)
	{
		$this->db->where("id",$id);
		$query=$this->db->get("medical_center");
		$result=$query->row();
	    if($result){
				$this->db->where("id",$result->parent_id);
				$query=$this->db->get("medical_center");
				$result1=$query->row();
				return $result1;
		}
	}
	public function view_popup_medical($id){
		 $this->db->select('medical_center.*,
						   language_categories.language_name, 
						   cities.country as country_name,
						   cities.state as state_name,
						   cities.city as city_name,
						   specialty_categories.specialty_name,
						   insurance_categories.insurance_name,
						   visit_categories.reason,
						   amenities_categories.facility_name,
						   affilliated_hospitals.hospital_name,		   
		 GROUP_CONCAT(distinct affilliated_hospitals.hospital_name) as hospital_name,				   
		 GROUP_CONCAT(distinct amenities_categories.facility_name) as facility_name,				   
		 GROUP_CONCAT(distinct visit_categories.reason) as reason,				   
		 GROUP_CONCAT(distinct insurance_categories.insurance_name) as insurance_name,
		 GROUP_CONCAT(distinct specialty_categories.specialty_name) as specialty_name,				   
		 GROUP_CONCAT(distinct language_categories.language_name) as language_name');
		 $this->db->from('medical_center as medical_center' );
		 $this->db->join('cities', 'cities.id = medical_center.cities_id','left');	
		 $this->db->join('language_categories', 'FIND_IN_SET(language_categories.id, medical_center.medical_languages) > 0','left');
		 $this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, medical_center.specialty) > 0','left');
		 $this->db->join('insurance_categories', 'FIND_IN_SET(insurance_categories.id, medical_center.insurance	) > 0','left');
		 $this->db->join('visit_categories', 'FIND_IN_SET(visit_categories.id, medical_center.visitation	) > 0','left');
		 $this->db->join('amenities_categories', 'FIND_IN_SET(amenities_categories.id, medical_center.amenities	) > 0','left');
		 $this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, medical_center.medical_affilliations	) > 0','left');
		 $this->db->group_by("medical_center.id"); 
		 $this->db->where('medical_center.id',$id); 
		 $query = $this->db->get();
		 $result = $query->row();
		 return $result;		
	}
	public function medicalinfo_add($data){
		    $this->db->where('email', $data['email']);
			$query1 = $this->db->get('medical_center');
			$result1 = $query1->row(); 
			if($result1){  
				return false;
			}
			else{
				$this->db->where('email', $data['email']);
				$query2 = $this->db->get('doctor');
				$result2 = $query2->row(); 
				if($result2){  
					return false;
				}
				else{
					$this->db->where('email', $data['email']);
					$query3 = $this->db->get('clinic');
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
							$query5 = $this->db->get('patient');
							$result5 = $query5->row(); 
							if($result5){  
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
								$array = $data['medical_languages'];
								$comma_separated = implode(",", $array);
								$data['medical_languages']=$comma_separated;	  
								$array = $data['amenities'];
								$comma_separated = implode(",", $array);
								$data['amenities']=$comma_separated;
								$array = $data['medical_affilliations'];
								$comma_separated = implode(",", $array);
								$data['medical_affilliations']=$comma_separated;	  
								$data['password'] = md5($data['password']);	
								$result = $this->db->insert('medical_center', $data);
								return $result;
							}
						}
					}
				}
			}
	 }
	public function medicaldetails_edit($data, $id){
		    $this->db->where('email', $data['email']);
			$this->db->where('id<>', $id);
			$query1 = $this->db->get('medical_center');
			$result1 = $query1->row(); 
			if($result1){  
				return false;
			}
			else{
				$this->db->where('email', $data['email']);
				$query2 = $this->db->get('doctor');
				$result2 = $query2->row(); 
				if($result2){  
					return false;
				}
				else{
					$this->db->where('email', $data['email']);
					$query3 = $this->db->get('clinic');
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
							$query5 = $this->db->get('patient');
							$result5 = $query5->row(); 
							if($result5){  
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
								$array = $data['medical_languages'];
								$comma_separated = implode(",", $array);
								$data['medical_languages']=$comma_separated;
								$array = $data['amenities'];
								$comma_separated = implode(",", $array);
								$data['amenities']=$comma_separated;
								$array = $data['medical_affilliations'];
								$comma_separated = implode(",", $array);
								$data['medical_affilliations']=$comma_separated;
								$this->db->where('id', $id);
								$result = $this->db->update('medical_center', $data);
								return $result;
							}
						}
					}
				}
			}
	 }
	public function getmedical_amenities(){
		$query = $this->db->get('amenities_categories');
		$result = $query->result();
		return $result;
	}
	public function getmedical_affiliateds(){
		$query = $this->db->get('affilliated_hospitals');
		$result = $query->result();
		return $result;
	}
	public function get_medcountry(){
		$query = $this->db->get('country_categories');
		$result = $query->result();
		return $result;
	}
	public function get_medstate($id){
		$this->db->select('medical_center.id as id,medical_center.medical_country,state_categories.id as state_id,state_categories.state_name');
	    $this->db->from('medical_center');
	    $this->db->where('medical_center.id',$id);
		$this->db->join('state_categories','find_in_set(medical_center.medical_country,state_categories.country_id) > 0', 'left');
		$query = $this->db->get();
		$result = $query->result();
		return $result;	
	}
	public function get_medcity($id){
		$this->db->select('medical_center.id as id,medical_center.medical_state,city_categories.id as city_id,city_categories.city_name');
		$this->db->from('medical_center');
		$this->db->where('medical_center.id',$id);
		$this->db->join('city_categories','find_in_set(medical_center.medical_state,city_categories.state_id) > 0', 'left');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function get_medvisitaion(){
		$query = $this->db->get('visit_categories');
		$result = $query->result();
		return $result;
	}
	public function get_medinsurance(){
		$query = $this->db->get('insurance_categories');
		$result = $query->result();
		return $result;
	}
	public function get_medspecialty(){
		$query = $this->db->get('specialty_categories');
		$result = $query->result();
		return $result;
	}
	public function get_medlanguage(){
		$query = $this->db->get('language_categories');
		$result = $query->result();
		return $result;
	}
	public function get_medical(){
		$query = $this->db->get('medical_center');
		$result = $query->result();
		return $result;
	}
	public function get_medicalsvaldetails($id) {
		$this->db->where('country_id', $id);
		$query = $this->db->get('state_categories');
		$result = $query->result();					
		return $result;			 
    } 	
	public function getmedical_citydetails($id) {
		$this->db->where('state_id', $id);
		$query = $this->db->get('city_categories');
		$result = $query->result();								
		return $result;			 
    }
	public function get_single_medical($id){
	   $query = $this->db->where('id',$id);
	   $query = $this->db->get('medical_center');
	   $result = $query->row();
	   return $result;  
	}
	public function medical_delete($id){
		 $this->db->where('id',$id);
		 $result = $this->db->delete('medical_center');
		 if($result) {
			return "success"; 
		 }
		 else{
			 return "error";
		 }
	 }
	public function update_medical_status($id, $data1){
		 $this->db->where('id',$id);
		 $result = $this->db->update('medical_center',$data1);		
		 return $result; 
    }
    function medicalgallery_add($data){
		$result = $this->db->insert('medical_gallery', $data);
		return $result;
	}
	function get_medicalgallery(){
		$query = $this->db->get('medical_center');
		$result = $query->result();
		return $result;
	}
	function getmedical_gallery(){ 
		$this->db->select('medical_gallery.medical_id, medical_center.medical_name, count(medical_gallery.id) as total_images');
		$this->db->from('medical_gallery');
		$this->db->join('medical_center', 'medical_center.id = medical_gallery.medical_id','left');
		$this->db->group_by("medical_gallery.medical_id");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	function get_medical_gallery($id){
		$this->db->select('medical_gallery.id, medical_gallery.image, medical_center.medical_name');
		$this->db->from('medical_gallery');
		$this->db->join('medical_center', 'medical_center.id = medical_gallery.medical_id','left');
		$this->db->where('medical_gallery.medical_id', $id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	function medicalgallery_delete($id){ 
		 $this->db->where('id', $id);
		 $result = $this->db->delete('medical_gallery'); 
		 if($result) {
			 return "Success";
		 }
		 else {
			 return "Error";
		 }
	}
}