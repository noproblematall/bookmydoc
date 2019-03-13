<?php
class Medical_Model extends CI_Model{
	public function _construct(){
		parent::_construct();
	}
	/* public function getall_medicalfiltermap($data){
		$this->db->select('med.id as id,display_image,medical_name,latitude,longitude,medical_address,medical_country,medical_state,medical_city
			specialty,insurance,visitation
			');
		$this->db->from('medical_center as med');
		if(isset($data['country']) and ($data['country'] == -1)){
			unset($data['country']);
		}else if(isset($data['country']) and !empty($data['country'])) {	
			$country = $data['country'];   
			$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, med.medical_country) > 0', 'left');		
			$this->db->where("cou.id" ,$country);		
		}		
		if(isset($data['state']) and ($data['state'] == -1)){
			unset($data['state']);
		}else if(isset($data['state']) and !empty($data['state'])) {		
			$state = $data['state'];	
			$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, med.medical_state) > 0', 'left');
			$this->db->where("stat.id" ,$state);
		}		
		if(isset($data['city']) and ($data['city'] == -1)){
			unset($data['city']);
		}else if(isset($data['city']) and !empty($data['city'])) {		
			$city = $data['city'];	
			$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, med.medical_city) > 0', 'left');
			$this->db->where("cit.id" ,$city);
		}		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id,med.specialty) > 0', 'left');
			$specialty = $data['specialty'];					
			$this->db->where("specialty_categories.id" ,$specialty);
		}		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id,med.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}						
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, med.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}				
		$this->db->where("med.profile_status" ,"1");
		$this->db->where("med.features_status" ,"1");	
		$currentDate = date("Y-m-d");
		$this->db->where("(med.trial_date >='$currentDate' OR med.end_date >='$currentDate')");
		$this->db->group_by('med.id');		
		$query = $this->db->get();
		return $query->result();	
	}
		
		public function getall_medicalconven($data)
          {	
			$currentDate = date("Y-m-d");
		$this->db->select('med.id as id,med.medical_name,med.email,med.medical_languages,med.visitation,med.insurance,med.medical_awards,med.medical_memberships,med.medical_country,med.password,med.medical_address,med.medical_state,med.medical_city,med.medical_zip,med.specialty,med.terms,med.status,med.display_image,
		rate.review,rate.date,rate.medical_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('medical_center as med');
		$this->db->join('rating_medical as rate', 'FIND_IN_SET(rate.medical_id, med.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, med.medical_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, med.medical_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, med.medical_city) > 0', 'left');							
		$this->db->where("status" ,"1");
		
		
		if(isset($data['country']) and ($data['country'] == -1)){
		  unset($data['country']);
		}
		else if(isset($data['country']) and !empty($data['country'])) {	
		$country = $data['country'];   
		//$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->where("cou.id" ,$country);

		
		}
		
		if(isset($data['state']) and ($data['state'] == -1)){
		 unset($data['state']);
		}
		else if(isset($data['state']) and !empty($data['state'])) {
		
		$state = $data['state'];	
		//$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->where("stat.id" ,$state);
		}
		
		if(isset($data['city']) and ($data['city'] == -1)){
		 unset($data['city']);
		}
		else if(isset($data['city']) and !empty($data['city'])) {
		
		$city = $data['city'];	
		//$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');
		$this->db->where("cit.id" ,$city);
		}
		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
		 unset($data['specialty']);
		}
		else if(isset($data['specialty']) and !empty($data['specialty'])) {
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, med.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, med.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, med.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		
		
		$this->db->group_by('med.id');
		$this->db->order_by('med.id','desc');
		$this->db->where("med.profile_status" ,"1");
		$this->db->where("med.features_status" ,"1");
			$currentDate = date("Y-m-d");
	   $this->db->where("(med.trial_date >='$currentDate' OR med.end_date >='$currentDate')");
		$this->db->limit(4);
		
		$query = $this->db->get();
		return $medical = $query->result();	
		
		
}
		
public function get_countries()
		{
		$this->db->select('*');
		$this->db->from('country_categories ');
		$this->db->group_by("country_name");       
				
		$query = $this->db->get();
	
		return $countries = $query->result();
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
		
		
		public function getall_medicalfilter($data)
          {	
		  
		$this->db->select('med.id as id,med.medical_name,med.email,med.medical_languages,med.visitation,med.insurance,med.medical_awards,med.medical_memberships,med.medical_country,med.password,med.medical_address,med.medical_state,med.medical_city,med.medical_zip,med.specialty,med.terms,med.status,med.display_image,
		rate.review,rate.date,rate.medical_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('medical_center as med');
		$this->db->join('rating_medical as rate', 'FIND_IN_SET(rate.medical_id, med.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, med.medical_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, med.medical_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, med.medical_city) > 0', 'left');							
		$this->db->where("status" ,"1");
		$currentDate = date("Y-m-d");		
	   $this->db->where("(med.trial_date >='$currentDate' OR med.end_date >='$currentDate')");
		
		if(isset($data['country']) and ($data['country'] == -1)){
		  unset($data['country']);
		}
		else if(isset($data['country']) and !empty($data['country'])) {	
		$country = $data['country'];   
		//$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->where("cou.id" ,$country);

		
		}
		
		if(isset($data['state']) and ($data['state'] == -1)){
		 unset($data['state']);
		}
		else if(isset($data['state']) and !empty($data['state'])) {
		
		$state = $data['state'];	
		//$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->where("stat.id" ,$state);
		}
		
		if(isset($data['city']) and ($data['city'] == -1)){
		 unset($data['city']);
		}
		else if(isset($data['city']) and !empty($data['city'])) {
		
		$city = $data['city'];	
		//$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');
		$this->db->where("cit.id" ,$city);
		}
		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
		 unset($data['specialty']);
		}
		else if(isset($data['specialty']) and !empty($data['specialty'])) {
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, med.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, med.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, med.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		$this->db->group_by('med.id');
		$this->db->order_by('med.id','desc');
		$this->db->limit(4);
		
		$query = $this->db->get();
		return $medical = $query->result();	
		
		
}
public function getall_medicalload($data)
{		
              $lastmsg=$data['lastmsg'];	
              
		$this->db->select('med.id as id,med.medical_name,med.email,med.medical_languages,med.visitation,med.insurance,med.medical_awards,med.medical_memberships,med.medical_country,med.password,med.medical_address,med.medical_state,med.medical_city,med.medical_zip,med.specialty,med.terms,med.status,med.display_image,
		rate.review,rate.date,rate.medical_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('medical_center as med');
		$this->db->join('rating_medical as rate', 'FIND_IN_SET(rate.medical_id, med.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, med.medical_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, med.medical_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, med.medical_city) > 0', 'left');							
		$this->db->where("status" ,"1");		
			 
		if(isset($data['country']) and ($data['country'] == -1)){
		  unset($data['country']);
		}
		else if(isset($data['country']) and !empty($data['country'])) {	
		$country = $data['country'];   
		//$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->where("cou.id" ,$country);

		
		}
		
		if(isset($data['state']) and ($data['state'] == -1)){
		 unset($data['state']);
		}
		else if(isset($data['state']) and !empty($data['state'])) {
		
		$state = $data['state'];	
		//$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->where("stat.id" ,$state);
		}
		
		if(isset($data['city']) and ($data['city'] == -1)){
		 unset($data['city']);
		}
		else if(isset($data['city']) and !empty($data['city'])) {
		
		$city = $data['city'];	
		//$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');
		$this->db->where("cit.id" ,$city);
		}
		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
		 unset($data['specialty']);
		}
		else if(isset($data['specialty']) and !empty($data['specialty'])) {
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, med.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, med.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, med.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		$this->db->group_by('med.id');
		$this->db->order_by('med.id','desc');
		$this->db->limit(4);
		$this->db->where("med.id<$lastmsg");	
		$currentDate = date("Y-m-d");
	   $this->db->where("(med.trial_date >='$currentDate' OR med.end_date >='$currentDate')");
		$query = $this->db->get();
		return $medical = $query->result();	
		
			
	
		
}	
		

		public function get_latlang(){
			
			$this->db->select('id,display_image,medical_name,latitude,longitude');
			$this->db->from('medical_center');
			$this->db->where("medical_center.profile_status" ,"1");
		$this->db->where("medical_center.features_status" ,"1");		
			$this->db->group_by('id');
			$query = $this -> db -> get();
			return $query->result();
		}
		
		
		public function getall_medicaldoctorload($data,$id){
			$lastmsg=$data['lastmsg'];
			$this->db->select('do.id as id,do.medical_id,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,do.doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('doctor as do');
		 $this->db->join('medical_center', 'FIND_IN_SET(medical_center.id, do.medical_id) > 0', 'left ');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');
		//$this->db->where('do.clinic_id', $id);
		$this->db->where("FIND_IN_SET(medical_center.id,'$id') != ",0);	 
		$this->db->where("do.status" ,"1");		
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		$this->db->limit(4);
		$currentDate = date("Y-m-d");
		$this->db->where("do.id<$lastmsg");	
	   $this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");
		$query = $this->db->get();
		return $doctors = $query->result();	
		}		
		
		*/
	/*=== Search Medical Filter Method === */
	function pushfilter_medicalsearch($data){
		$currentDate = date("Y-m-d");
		$this->db->select('med.id as id,med.medical_name,med.email,med.medical_languages,med.visitation,med.insurance,med.medical_awards,med.medical_memberships,med.medical_country,med.password,med.medical_address,med.medical_state,med.medical_city,cities.zip as medical_zip,med.specialty,med.terms,med.status,med.display_image,rate.review,rate.date,rate.medical_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,med.latitude,med.longitude,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('medical_center as med');
		$this->db->join('rating_medical as rate', 'FIND_IN_SET(rate.medical_id, med.id) > 0', 'left ');		
		/* === General Filters === */
		/* == City Filter == */
		if(isset($data['latitude'])  && isset($data['longitude'])){
			$short_lat = explode('.',$data['latitude']);	
			$short_lon = explode('.',$data['longitude']);	
			$this->db->join('cities','FIND_IN_SET(cities.id, med.cities_id) > 0', 'left');
			$this->db->where("cities.short_lat" ,$short_lat[0]);
			$this->db->where("cities.short_lon" ,$short_lon[0]);			
		}else{
			$this->db->join('cities', 'cities.id = med.cities_id', 'left ');
		}		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id,med.specialty) > 0', 'left');
			$specialty = $data['specialty'];					
			$this->db->where("specialty_categories.id" ,$specialty);
		}		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id,med.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}						
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, med.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}
		$this->db->where("status" ,"1");			
		$this->db->where("(med.trial_date >='$currentDate' OR med.end_date >='$currentDate')");	
		$this->db->group_by('med.id');		
		$query = $this->db->get();
		return $query->result();	
	}
	/*=== Search Medical After Filter Method === */
	function pushfilter_aftermedicalsearch($data){
		$currentDate = date("Y-m-d");
		$this->db->select('med.id as id,med.medical_name,med.email,med.medical_languages,med.visitation,med.insurance,med.medical_awards,med.medical_memberships,med.medical_country,med.password,med.medical_address,med.medical_state,med.medical_city,cities.zip as medical_zip,med.specialty,med.terms,med.status,med.display_image,rate.review,rate.date,rate.medical_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,med.latitude,med.longitude,cities.country as country_name,cities.state as state_name,cities.city as city_name
		               ');
		$this->db->from('medical_center as med');
		$this->db->join('rating_medical as rate', 'FIND_IN_SET(rate.medical_id, med.id) > 0', 'left ');		
		/* === General Filters === */			
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id,med.specialty) > 0', 'left');
			$specialty = $data['specialty'];					
			$this->db->where("specialty_categories.id" ,$specialty);
		}		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id,med.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}						
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, med.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}
		if(isset($data['cities_id']) and ($data['cities_id'] == -1)){
			unset($data['cities_id']);
			$this->db->join('cities', 'cities.id = med.cities_id', 'left ');
		}else{
			$this->db->join('cities', 'cities.id = med.cities_id', 'left ');
			$this->db->where("cities.id",$data['cities_id']);	
		}
		$this->db->where("status" ,"1");			
		$this->db->where("(med.trial_date >='$currentDate' OR med.end_date >='$currentDate')");	
		$this->db->group_by('med.id');		
		$query = $this->db->get();
		return $query->result();	
	}
	function get_specialties(){
		$this->db->select('*');
		$this->db->from('specialty_categories ');
		$this->db->group_by("specialty_name");       				
		$query = $this->db->get();	
		return $specialties = $query->result();
	}
	function get_insurance(){
		$this->db->select('*');
		$this->db->from('insurance_categories ');
		$this->db->group_by("insurance_name");       				
		$query = $this->db->get();	
		return $insurance = $query->result();
	}
	function get_singlemedicalgallery($id){
		$this->db->where("medical_id",$id);
		$query = $this->db->get("medical_gallery");
		$result = $query->result();
		return $result;
	}
	function get_singlemedical($id){				
		$this->db->select('med.id as id,med.about_medical,med.amenities,med.medical_affilliations,med.medical_name,med.email,med.medical_languages,med.visitation,med.insurance,med.medical_awards,med.medical_memberships,med.medical_country,med.password,med.medical_address,med.medical_state,med.medical_city,cities.zip as medical_zip,med.specialty,med.terms,med.status,med.display_image,
		rate.review,rate.date,rate.medical_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,
		GROUP_CONCAT(DISTINCT specialty_categories.specialty_name ORDER BY specialty_categories.id) as specialty_name,
		GROUP_CONCAT(DISTINCT affilliated_hospitals.hospital_name ORDER BY affilliated_hospitals.id) as affhospital_name,
		GROUP_CONCAT(DISTINCT insurance_categories.insurance_name ORDER BY insurance_categories.id) as insurance_name,
		GROUP_CONCAT(DISTINCT amenities_categories.facility_name ORDER BY amenities_categories.id) as facility_name,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('medical_center as med');	
		$this->db->join('amenities_categories', 'FIND_IN_SET(amenities_categories.id, med.amenities) > 0', 'left ');	
        $this->db->join('insurance_categories', 'FIND_IN_SET(insurance_categories.id, med.insurance) > 0', 'left ');		
		$this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, med.specialty) > 0', 'left ');
		$this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, med.medical_affilliations) > 0', 'left ');		
		$this->db->join('rating_medical as rate', 'FIND_IN_SET(rate.medical_id, med.id) > 0', 'left ');		
		$this->db->join('cities', 'cities.id = med.cities_id', 'left ');
		$this->db->group_by('med.id');
		$this->db->where('med.id', $id);
		$query = $this -> db -> get();		
		$view_medical = $query->row();		
        return $view_medical;					
	}
	function get_medicaldoctors($id){
		$this->db->select('do.id as id,do.medical_id,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,cities.zip as doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('doctor as do');
	    $this->db->join('medical_center', 'FIND_IN_SET(medical_center.id, do.medical_id) > 0', 'left ');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');
		$this->db->join('cities', 'cities.id = do.cities_id', 'left ');
		$this->db->where("FIND_IN_SET(medical_center.id,'$id') != ",0);	 
		$this->db->where('do.status' ,'1');  
		$currentDate = date("Y-m-d");		
		$this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		$this->db->limit(4);		
		$query = $this->db->get();		
		return $doctors = $query->result();											
	}
	function get_latlang_medical($id){			
		$this->db->select('display_image,medical_name,latitude,longitude');
		$this->db->from('medical_center');
		$this->db->where('id', $id);
		$query = $this -> db -> get();
		return $query->row();
	}
	function getDataReason($loadType,$loadId){
		$loadType=="reason";
		$fieldList='id,reason as name';
		$table='visit_categories';
		$fieldName='specialty_id';
		$orderByField='reason';										
		$this->db->select($fieldList);
		$this->db->from($table);
		$this->db->where($fieldName, $loadId);
		$this->db->order_by($orderByField, 'asc');
		$query=$this->db->get();
		return $query; 						
	}	
}
?>