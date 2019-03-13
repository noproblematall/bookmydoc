<?php 
class Clinic_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
 	public function get_clinicdetails(){ 		
		        $this->db->select('clinic.*,				                   
									insurance_categories.insurance_name,
									specialty_categories.specialty_name,
                                     cities.state as state_name,
							         cities.city as city_name,
									 cities.country as country_name,
									visit_categories.reason,
									amenities_categories.facility_name,
									affilliated_hospitals.hospital_name,cities.zip as clinic_zip,				
				 GROUP_CONCAT(distinct affilliated_hospitals.hospital_name) as hospital_name,
				 GROUP_CONCAT(distinct amenities_categories.facility_name) as facility_name,
				 GROUP_CONCAT(distinct visit_categories.reason) as reason,
                 GROUP_CONCAT(distinct insurance_categories.insurance_name) as insurance_name,				
                 GROUP_CONCAT(distinct specialty_categories.specialty_name) as specialty_name,				
				 GROUP_CONCAT(distinct language_categories.language_name) as language_name');
			     $this->db->from('clinic as clinic' );
			    // $this->db->join('country_categories', 'country_categories.id = clinic.clinic_country','left');	
			    // $this->db->join('state_categories', 'state_categories.id = clinic.clinic_state','left');			     
			    // $this->db->join('city_categories', 'city_categories.id = clinic.clinic_city','left');	
                 $this->db->join('cities', 'cities.id = clinic.cities_id','left');				
				 $this->db->join('language_categories', 'FIND_IN_SET(language_categories.id, clinic.clinic_languages) > 0','left');
				 $this->db->join('insurance_categories', 'FIND_IN_SET(insurance_categories.id, clinic.insurance) > 0','left');
				 $this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, clinic.specialty) > 0','left');
				 $this->db->join('visit_categories', 'FIND_IN_SET(visit_categories.id, clinic.visitation) > 0','left');
				 $this->db->join('amenities_categories', 'FIND_IN_SET(amenities_categories.id, clinic.amenities) > 0','left');
				 $this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, clinic.clinic_affilliations) > 0','left');
				 $this->db->group_by("clinic.id"); 
				 $query = $this->db->get();
			     $result = $query->result();
			     return $result;
 	}
	public function get_subclinic($id){
		$this->db->where("id",$id);
		$query=$this->db->get("clinic");
		$result=$query->row();
		    if($result){
				$this->db->where("id",$result->parent_id);
				$query=$this->db->get("clinic");
				$result1=$query->row();
				return $result1;
			}
	}
	public function view_popup_clinic($id){
		        $this->db->select('clinic.*,
				                    language_categories.language_name,
									insurance_categories.insurance_name,
									specialty_categories.specialty_name,
                                    cities.state as state_name, 									
									cities.country as country_name,
									cities.city as city_name,
									visit_categories.reason,
									amenities_categories.facility_name,
									affilliated_hospitals.hospital_name,	
				 GROUP_CONCAT(distinct affilliated_hospitals.hospital_name) as hospital_name,
				 GROUP_CONCAT(distinct amenities_categories.facility_name) as facility_name,
				 GROUP_CONCAT(distinct visit_categories.reason) as reason,
                 GROUP_CONCAT(distinct insurance_categories.insurance_name) as insurance_name,				
                 GROUP_CONCAT(distinct specialty_categories.specialty_name) as specialty_name,				
				 GROUP_CONCAT(distinct language_categories.language_name) as language_name'); 
			     $this->db->from('clinic as clinic' );
			     $this->db->join('cities', 'cities.id = clinic.cities_id','left');
				 $this->db->join('language_categories', 'FIND_IN_SET(language_categories.id, clinic.clinic_languages) > 0','left');
				 $this->db->join('insurance_categories', 'FIND_IN_SET(insurance_categories.id, clinic.insurance) > 0','left');
				 $this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, clinic.specialty) > 0','left');
				 $this->db->join('visit_categories', 'FIND_IN_SET(visit_categories.id, clinic.visitation) > 0','left');
				 $this->db->join('amenities_categories', 'FIND_IN_SET(amenities_categories.id, clinic.amenities) > 0','left');
				 $this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, clinic.clinic_affilliations) > 0','left');
				 $this->db->group_by("clinic.id"); 
				 $this->db->where('clinic.id',$id); 
				 $query = $this->db->get();
			     $result = $query->row();
			     return $result;			 
	}
 	public function clinicinfo_add($data){
		  	$this->db->where('email', $data['email']);
			$query1 = $this->db->get('clinic');
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
							$query5 = $this->db->get('medical');
							$result5 = $query5->row(); 
							if($result5){  
								return false;
							}
							else{
								$array = $data['visitation'];
								$comma_separated = implode(",", $array);
							    $data['visitation']=$comma_separated;
								$array = $data['specialty'];
								$comma_separated = implode(",", $array);
								$data['specialty']=$comma_separated;
								$array = $data['insurance'];
								$comma_separated = implode(",", $array);
								$data['insurance']=$comma_separated;
								$array = $data['clinic_languages'];
								$comma_separated = implode(",", $array);
								$data['clinic_languages']=$comma_separated;				  
								$array = $data['amenities'];
								$comma_separated = implode(",", $array);
								$data['amenities']=$comma_separated;			  
								$array = $data['clinic_affilliations'];
								$comma_separated = implode(",", $array);
								$data['clinic_affilliations']=$comma_separated;
								$data['password'] = md5($data['password']);
								$result = $this->db->insert('clinic', $data);
								return $result;
						}
					}
				}
			}
		}
 	}
 	public function get_clinics(){
 		 $query = $this->db->get('country_categories');
	     $result = $query->result();
	     return $result;
 	}
 	public function get_clinicstate($id){
		 $this->db->select('clinic.id as id,clinic.clinic_country,state_categories.id as state_id,state_categories.state_name');
	    $this->db->from('clinic');
	    $this->db->where('clinic.id',$id);
		$this->db->join('state_categories','find_in_set(clinic.clinic_country,state_categories.country_id) > 0', 'left');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
 	}
 	public function get_cityclinic($id){
			$this->db->select('clinic.id as id,clinic.clinic_state,city_categories.id as city_id,city_categories.city_name');
			$this->db->from('clinic');
			$this->db->where('clinic.id',$id);
			$this->db->join('city_categories','find_in_set(clinic.clinic_state,city_categories.state_id) > 0', 'left');
			$query = $this->db->get();
			$result = $query->result();
			return $result;
 	}
	public function getclinic_amenities(){
 		 $query = $this->db->get('amenities_categories');
	     $result = $query->result();
	     return $result;
 	}
 	public function get_clinicsstatdetails($id) {
				$this->db->where('country_id', $id);
				$query = $this->db->get('state_categories');
			    $result = $query->result();					
				return $result;		 
    } 
    public function getclinic_citydetails($id) {
				$this->db->where('state_id', $id);
				$query = $this->db->get('city_categories');
			    $result = $query->result();								
				return $result;			 
    }
    public function get_specialityclinic(){
                $query = $this->db->get('specialty_categories');
			    $result = $query->result();
			    return $result;
    } 
	public function get_clinic(){
		        $query = $this->db->get('clinic');
			    $result = $query->result();
			    return $result;
	}
    public function getclinic_insuranceclinic() {
   	            $query = $this->db->get('insurance_categories');
			    $result = $query->result();
			    return $result;
   }
   public function getclinic_visits() {
                $query = $this->db->get('visit_categories');
			    $result = $query->result();
			    return $result;
   }
   public function getclinic_language() {
   	            $query = $this->db->get('language_categories');
			    $result = $query->result();
			    return $result;
   }
   public function getclinic_affiliateds(){
	            $query = $this->db->get('affilliated_hospitals');
			    $result = $query->result();
			    return $result;
   }
   public function update_clinic_status($id, $data1) {
   	             $this->db->where('id',$id);
				 $result = $this->db->update('clinic',$data1);
				 return $result; 
   }
   public function get_single_clinic($id){
		       $query = $this->db->where('id',$id);
			   $query = $this->db->get('clinic');
			   $result = $query->row();
			   return $result;  
	}
	public function clinicdetails_edit($data, $id){
		  	$this->db->where('email', $data['email']);
			$this->db->where('id<>', $id);
			$query1 = $this->db->get('clinic');
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
								  $array = $data['visitation'];
								  $comma_separated = implode(",", $array);
								  $data['visitation']=$comma_separated;				  
								  $array = $data['specialty'];
								  $comma_separated = implode(",", $array);
								  $data['specialty']=$comma_separated;				  
								  $array = $data['insurance'];
								  $comma_separated = implode(",", $array);
								  $data['insurance']=$comma_separated;
								  $array = $data['clinic_languages'];
								  $comma_separated = implode(",", $array);
								  $data['clinic_languages']=$comma_separated;				  
								  $array = $data['amenities'];
								  $comma_separated = implode(",", $array);
								  $data['amenities']=$comma_separated;			  
								  $array = $data['clinic_affilliations'];
								  $comma_separated = implode(",", $array);
								  $data['clinic_affilliations']=$comma_separated;
								$this->db->where('id', $id);
								$result = $this->db->update('clinic', $data);
								return $result;
						}
					}
				}
			}
		}
 	}
	public function clinic_delete($id){		 
		 $this->db->where('id',$id);
		 $result = $this->db->delete('clinic');
		 if($result) {
			return "success"; 
		 }
		 else {
			 return "error";
		 }
	 }
	 function clinicgallery_add($data){
		   $result =$this->db->insert('clinic_gallery',$data);
		   return $result;
	 }	 
	 function get_clinicgallery(){
		        $query = $this->db->get('clinic');
			    $result = $query->result();
			    return $result; 
	 }	 
	 function getclinic_gallery() {
		        $this->db->select('clinic_gallery.clinic_id, clinic.clinic_name, count(clinic_gallery.id) as total_images');
				$this->db->from('clinic_gallery');
				$this->db->join('clinic', 'clinic.id = clinic_gallery.clinic_id','left');
				$this->db->group_by("clinic_gallery.clinic_id");
				$query = $this->db->get();
				$result = $query->result();
				return $result;
	 }	 
	 function get_clinic_gallery($id){
		        $this->db->select('clinic_gallery.id, clinic_gallery.image, clinic.clinic_name');
				$this->db->from('clinic_gallery');
				$this->db->join('clinic', 'clinic.id = clinic_gallery.clinic_id','left');
				$this->db->where('clinic_gallery.clinic_id', $id);
				$query = $this->db->get();
				$result = $query->result();
				return $result;
	 }
	 function clinicgallery_delete($id) {
		         $this->db->where('id', $id);
				 $result = $this->db->delete('clinic_gallery'); 
				 if($result) {
					 return "Success";
				 }
				 else {
					 return "Error";
				 }
	 } 
 }