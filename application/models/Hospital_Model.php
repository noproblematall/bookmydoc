<?php
class Hospital_Model extends CI_Model{
	public function _construct(){
		parent::_construct();
	}
	/*function getall_hospitalfiltermap($data){
		$this->db->select('hos.id as id,display_image,hospital_name,latitude,longitude,hospital_address,hospital_country,hospital_state,hospital_city
			specialty,insurance,visitation
		');
		$this->db->from('hospital as hos');		
		if(isset($data['country']) and ($data['country'] == -1)){
			unset($data['country']);
		}else if(isset($data['country']) and !empty($data['country'])) {	
			$country = $data['country'];   
			$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, hos.hospital_country) > 0', 'left');		
			$this->db->where("cou.id" ,$country);		
		}		
		if(isset($data['state']) and ($data['state'] == -1)){
			unset($data['state']);
		}else if(isset($data['state']) and !empty($data['state'])) {		
			$state = $data['state'];	
			$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, hos.hospital_state) > 0', 'left');
			$this->db->where("stat.id" ,$state);
		}		
		if(isset($data['city']) and ($data['city'] == -1)){
			unset($data['city']);
		}else if(isset($data['city']) and !empty($data['city'])) {		
			$city = $data['city'];	
			$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, hos.hospital_city) > 0', 'left');
			$this->db->where("cit.id" ,$city);
		}		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id,hos.specialty) > 0', 'left');
			$specialty = $data['specialty'];					
			$this->db->where("specialty_categories.id" ,$specialty);
		}		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id,hos.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, hos.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}						
		$this->db->group_by('hos.id');		
		$this->db->where("hos.profile_status" ,"1");
		$this->db->where("hos.features_status" ,"1");
		$currentDate = date("Y-m-d");
		$this->db->where("(hos.trial_date >='$currentDate' OR hos.end_date >='$currentDate')");		
		$query = $this->db->get();
		return $query->result();	
	}			
	function getall_hospitalconven($data){					
		$this->db->select('hos.id as id,hos.hospital_name,hos.email,hos.hospital_languages,hos.visitation,hos.insurance,hos.hospital_awards,hos.hospital_memberships,hos.hospital_country,hos.password,hos.hospital_address,hos.hospital_state,hos.hospital_city,hos.hospital_zip,hos.specialty,hos.terms,hos.status,hos.display_image,
		rate.review,rate.date,rate.hospital_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		');
		$this->db->from('hospital as hos');
		$this->db->join('rating_hospital as rate', 'FIND_IN_SET(rate.hospital_id, hos.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, hos.hospital_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, hos.hospital_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, hos.hospital_city) > 0', 'left');
		$this->db->where("status" ,"1");
		$currentDate = date("Y-m-d");
		$this->db->where("hos.trial_date >=" ,$currentDate);
		$this->db->or_where("hos.end_date >=" ,$currentDate);		
		if(isset($data['country']) and ($data['country'] == -1)){
			unset($data['country']);
		}else if(isset($data['country']) and !empty($data['country'])) {	
			$country = $data['country'];   		
			$this->db->where("cou.id" ,$country);		
		}		
		if(isset($data['state']) and ($data['state'] == -1)){
			unset($data['state']);
		}else if(isset($data['state']) and !empty($data['state'])) {		
			$state = $data['state'];			
			$this->db->where("stat.id" ,$state);
		}		
		if(isset($data['city']) and ($data['city'] == -1)){
			unset($data['city']);
		}else if(isset($data['city']) and !empty($data['city'])) {		
			$city = $data['city'];			
			$this->db->where("cit.id" ,$city);
		}		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, hos.specialty) > 0', 'left');
			$specialty = $data['specialty'];			
			$this->db->where("specialty_categories.id" ,$specialty);
		}		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, hos.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, hos.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}				
		$this->db->where("hos.profile_status" ,"1");
		$this->db->where("hos.features_status" ,"1");		
		$this->db->group_by('hos.id');
		$this->db->order_by('hos.id','desc');
		$this->db->limit(4);		
		$query = $this->db->get();
		return $hospital = $query->result();			
	}
	public function get_countries(){
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
							
	public function getall_hospitalfilter($data){			  
		$this->db->select('hos.id as id,hos.hospital_name,hos.email,hos.hospital_languages,hos.visitation,hos.insurance,hos.hospital_awards,hos.hospital_memberships,hos.hospital_country,hos.password,hos.hospital_address,hos.hospital_state,hos.hospital_city,hos.hospital_zip,hos.specialty,hos.terms,hos.status,hos.display_image,
		rate.review,rate.date,rate.hospital_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		  ');
		$this->db->from('hospital as hos');
		$this->db->join('rating_hospital as rate', 'FIND_IN_SET(rate.hospital_id, hos.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, hos.hospital_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, hos.hospital_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, hos.hospital_city) > 0', 'left');							
		$this->db->where("status" ,"1");
		$currentDate = date("Y-m-d");
		$this->db->where("hos.trial_date >=" ,$currentDate);
			 $this->db->or_where("hos.end_date >=" ,$currentDate);
		
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
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, hos.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, hos.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, hos.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		$this->db->group_by('hos.id');
		$this->db->order_by('hos.id','desc');
		$this->db->limit(4);
		
		$query = $this->db->get();
		return $hospital = $query->result();	
		
		
}
public function getall_hospitalload($data)
{		
			
              $lastmsg=$data['lastmsg'];	
              
		$this->db->select('hos.id as id,hos.hospital_name,hos.email,hos.hospital_languages,hos.visitation,hos.insurance,hos.hospital_awards,hos.hospital_memberships,hos.hospital_country,hos.password,hos.hospital_address,hos.hospital_state,hos.hospital_city,hos.hospital_zip,hos.specialty,hos.terms,hos.status,hos.display_image,
		rate.review,rate.date,rate.hospital_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('hospital as hos');
		$this->db->join('rating_hospital as rate', 'FIND_IN_SET(rate.hospital_id, hos.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, hos.hospital_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, hos.hospital_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, hos.hospital_city) > 0', 'left');							
		
			 
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
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, hos.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, hos.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, hos.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		$this->db->group_by('hos.id');
		$this->db->order_by('hos.id','desc');
		$this->db->limit(4);
		//$this->db->where("hos.id<$lastmsg");	
		//$where = "hos.id<'$lastmsg' AND status='1' AND hos.trial_date >='$currentDate' OR hos.end_date >='$currentDate'";
			//$this->db->where($where);
		$this->db->where("hos.id<$lastmsg");	
       $this->db->where('status','1');
	   $currentDate = date("Y-m-d");
	   $this->db->where("(hos.trial_date >='$currentDate' OR hos.end_date >='$currentDate')");
       //$where = '(hos.trial_date>="$currentDate" or hos.end_date >= "$currentDate")';
       //$this->db->where($where);
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		return $hospital = $query->result();	
		
			
	
		
}	
	
		

		public function get_latlang(){
			
			$this->db->select('id,display_image,hospital_name,latitude,longitude');
			$this->db->from('hospital');
			$this->db->group_by('id');
			$this->db->where("hospital.profile_status" ,"1");
		$this->db->where("hospital.features_status" ,"1");	
			$query = $this -> db -> get();
			return $query->result();
		}
		
		
		public function getall_hospitaldoctorload($data,$id){
			$lastmsg=$data['lastmsg'];
			$this->db->select('do.id as id,do.hospital_id,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,do.doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('doctor as do');
		 $this->db->join('hospital', 'FIND_IN_SET(hospital.id, do.hospital_id) > 0', 'left ');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');
		//$this->db->where('do.clinic_id', $id);
		$this->db->where("FIND_IN_SET(hospital.id,'$id') != ",0);	 
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
		
	/*=== Search Hospital Filter Method === */
	function pushfilter_hospitalsearch($data){
		$currentDate = date("Y-m-d");
		$this->db->select('hos.id as id,hos.hospital_name,hos.email,hos.hospital_languages,hos.visitation,hos.insurance,hos.hospital_awards,hos.hospital_memberships,hos.hospital_country,hos.password,hos.hospital_address,hos.hospital_state,hos.hospital_city,cities.zip as hospital_zip,hos.specialty,hos.terms,hos.status,hos.display_image,rate.review,rate.date,rate.hospital_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,hos.latitude,hos.longitude,cities.country as country_name,cities.state as state_name,cities.city as city_name
		');
		$this->db->from('hospital as hos');
		$this->db->join('rating_hospital as rate', 'FIND_IN_SET(rate.hospital_id, hos.id) > 0', 'left ');
		/* === General Filters === */
		/* == City Filter == */
		if(isset($data['latitude']) && isset($data['longitude'])){
			$short_lat = explode('.',$data['latitude']);	
			$short_lon = explode('.',$data['longitude']);	
			$this->db->join('cities','FIND_IN_SET(cities.id, hos.cities_id) > 0', 'left');
			$this->db->where("cities.short_lat" ,$short_lat[0]);
			$this->db->where("cities.short_lon" ,$short_lon[0]);			
		}else{
			$this->db->join('cities', 'cities.id = hos.cities_id', 'left ');
		}				
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id,hos.specialty) > 0', 'left');
			$specialty = $data['specialty'];					
			$this->db->where("specialty_categories.id" ,$specialty);
		}
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, hos.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id,hos.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}								
		$this->db->group_by('hos.id');	
		$this->db->where("status" ,"1");					
		$this->db->where("(hos.trial_date >='$currentDate' OR hos.end_date >='$currentDate')");	
		$query = $this->db->get();
		$result =  $query->result();
		return $result;
	}
	/*=== Search Hospital After Filter Method === */
	function pushfilter_afterhospitalsearch($data){
		$currentDate = date("Y-m-d");
		$this->db->select('hos.id as id,hos.hospital_name,hos.email,hos.hospital_languages,hos.visitation,hos.insurance,hos.hospital_awards,hos.hospital_memberships,hos.hospital_country,hos.password,hos.hospital_address,hos.hospital_state,hos.hospital_city,cities.zip as hospital_zip,hos.specialty,hos.terms,hos.status,hos.display_image,rate.review,rate.date,rate.hospital_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,hos.latitude,hos.longitude,cities.country as country_name,cities.state as state_name,cities.city as city_name
		');
		$this->db->from('hospital as hos');
		$this->db->join('rating_hospital as rate', 'FIND_IN_SET(rate.hospital_id, hos.id) > 0', 'left ');
		/* === General Filters === */			
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id,hos.specialty) > 0', 'left');
			$specialty = $data['specialty'];					
			$this->db->where("specialty_categories.id" ,$specialty);
		}
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, hos.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id,hos.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}
		if(isset($data['cities_id']) and ($data['cities_id'] == -1)){
			unset($data['cities_id']);
			$this->db->join('cities', 'cities.id = hos.cities_id', 'left ');
		}else{
			$this->db->join('cities', 'cities.id = hos.cities_id', 'left ');
			$this->db->where("cities.id",$data['cities_id']);	
		}	
		$this->db->group_by('hos.id');
		$this->db->where("status" ,"1");			
		$this->db->where("(hos.trial_date >='$currentDate' OR hos.end_date >='$currentDate')");	
		$query = $this->db->get();
		$result =  $query->result();
		return $result;
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
	function get_singlehospitalgallery($id){
		$this->db->where("hospital_id",$id);
		$query = $this->db->get("hospital_gallery");
		$result = $query->result();
		return $result;			
	}
	function get_singlehospital($id){			
		$this->db->select('hos.id as id,hos.about_hospital,hos.hospital_affilliations,hos.amenities,hos.hospital_name,hos.email,hos.hospital_languages,hos.visitation,hos.insurance,hos.hospital_awards,hos.hospital_memberships,hos.hospital_country,hos.password,hos.hospital_address,hos.hospital_state,hos.hospital_city,cities.zip as hospital_zip,hos.specialty,hos.terms,hos.status,hos.display_image,
		rate.review,rate.date,rate.hospital_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,
		GROUP_CONCAT(DISTINCT specialty_categories.specialty_name ORDER BY specialty_categories.id) as specialty_name,
		GROUP_CONCAT(DISTINCT affilliated_hospitals.hospital_name ORDER BY affilliated_hospitals.id) as affhospital_name,
		GROUP_CONCAT(DISTINCT insurance_categories.insurance_name ORDER BY insurance_categories.id) as insurance_name,
		GROUP_CONCAT(DISTINCT amenities_categories.facility_name ORDER BY amenities_categories.id) as facility_name,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('hospital as hos');	
		$this->db->join('amenities_categories', 'FIND_IN_SET(amenities_categories.id, hos.amenities) > 0', 'left ');	
        $this->db->join('insurance_categories', 'FIND_IN_SET(insurance_categories.id, hos.insurance) > 0', 'left ');		
		$this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, hos.specialty) > 0', 'left ');
		$this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, hos.hospital_affilliations) > 0', 'left ');		
		$this->db->join('rating_hospital as rate', 'FIND_IN_SET(rate.hospital_id, hos.id) > 0', 'left ');
		$this->db->join('cities', 'cities.id = hos.cities_id', 'left ');	
		$this->db->group_by('hos.id');
		$this->db->where('hos.id', $id);
		$query = $this -> db -> get();		
		$view_hospital = $query->row();		
        return $view_hospital;					
	}
	function get_hospitaldoctors($id){	
		$this->db->select('do.id as id,do.hospital_id,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,cities.zip as doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('doctor as do');
	    $this->db->join('hospital', 'FIND_IN_SET(hospital.id, do.hospital_id) > 0', 'left ');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');	
		$this->db->join('cities', 'cities.id = do.cities_id', 'left ');
		$this->db->where("FIND_IN_SET(hospital.id,'$id') != ",0);	 
		$this->db->where('do.status' ,'1'); 
		$currentDate = date("Y-m-d");
		$this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		$this->db->limit(4);		
		$query = $this->db->get();		
		return $doctors = $query->result();											
	}
	function get_latlang_hospital($id){			
		$this->db->select('*');
		$this->db->from('hospital');
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