<?php
class Clinic_Model extends CI_Model{
	public function _construct(){
		parent::_construct();
	}		
	/* public function get_countries(){
		$this->db->select('*');
		$this->db->from('country_categories ');
		$this->db->group_by("country_name");       
				
		$query = $this->db->get();
	
		return $countries = $query->result();
		}
		
		
		public function getall_clinicfiltermap($data){
			$this->db->select('cli.id as id,display_image,clinic_name,latitude,longitude,clinic_address,clinic_country,clinic_state,clinic_city
			specialty,insurance,visitation
			           ');
			$this->db->from('clinic as cli');
			
			//$query = $this -> db -> get();
			//return $query->result();
		
		if(isset($data['country']) and ($data['country'] == -1)){
		  unset($data['country']);
		}
		else if(isset($data['country']) and !empty($data['country'])) {	
		$country = $data['country'];   
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, cli.clinic_country) > 0', 'left');		
		$this->db->where("cou.id" ,$country);
		
		}
		
		if(isset($data['state']) and ($data['state'] == -1)){
		 unset($data['state']);
		}
		else if(isset($data['state']) and !empty($data['state'])) {
		
		$state = $data['state'];	
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, cli.clinic_state) > 0', 'left');
		$this->db->where("stat.id" ,$state);
		}
		
		if(isset($data['city']) and ($data['city'] == -1)){
		 unset($data['city']);
		}
		else if(isset($data['city']) and !empty($data['city'])) {
		
		$city = $data['city'];	
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, cli.clinic_city) > 0', 'left');
		$this->db->where("cit.id" ,$city);
		}
		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
		 unset($data['specialty']);
		}
		else if(isset($data['specialty']) and !empty($data['specialty'])) {
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, cli.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, cli.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, cli.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}				
		
		$this->db->group_by('cli.id');
		$this->db->where("cli.profile_status" ,"1");
		$this->db->where("cli.features_status" ,"1");
			$currentDate = date("Y-m-d");
	   $this->db->where("(cli.trial_date >='$currentDate' OR cli.end_date >='$currentDate')");
		//$this->db->order_by('do.id','desc');
		//$this->db->limit(4);
		
		$query = $this->db->get();
		return $query->result();	
		}
		
		public function get_latlang(){
			
			$this->db->select('id,display_image,clinic_name,latitude,longitude');
			$this->db->from('clinic');
			$this->db->group_by('id');
			$this->db->where("clinic.profile_status" ,"1");
		$this->db->where("clinic.features_status" ,"1");
			$query = $this -> db -> get();
			return $query->result();
		}
		public function getall_clinicconven($data)
          {				
		$this->db->select('cli.id as id,cli.clinic_name,cli.email,cli.clinic_languages,cli.visitation,cli.insurance,cli.clinic_awards,cli.clinic_memberships,cli.clinic_country,cli.password,cli.clinic_address,cli.clinic_state,cli.clinic_city,cli.clinic_zip,cli.specialty,cli.terms,cli.status,cli.display_image,
		rate.review,rate.date,rate.clinic_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('clinic as cli');
		$this->db->join('rating_clinic as rate', 'FIND_IN_SET(rate.clinic_id, cli.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, cli.clinic_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, cli.clinic_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, cli.clinic_city) > 0', 'left');							
		$this->db->where("status" ,"1");
		$currentDate = date("Y-m-d");
	   $this->db->where("(cli.trial_date >='$currentDate' OR cli.end_date >='$currentDate')");
		
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
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, cli.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, cli.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, cli.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		
		$this->db->where("cli.profile_status" ,"1");
		$this->db->where("cli.features_status" ,"1");		
		$this->db->group_by('cli.id');
		$this->db->order_by('cli.id','desc');
		$this->db->limit(4);
		
		$query = $this->db->get();
		return $clinics = $query->result();	
		
		
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
			
		
		public function getall_clinicfilter($data)
          {	
		  
		$this->db->select('cli.id as id,cli.clinic_name,cli.email,cli.clinic_languages,cli.visitation,cli.insurance,cli.clinic_awards,cli.clinic_memberships,cli.clinic_country,cli.password,cli.clinic_address,cli.clinic_state,cli.clinic_city,cli.clinic_zip,cli.specialty,cli.terms,cli.status,cli.display_image,
		rate.review,rate.date,rate.clinic_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('clinic as cli');
		$this->db->join('rating_clinic as rate', 'FIND_IN_SET(rate.clinic_id, cli.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, cli.clinic_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, cli.clinic_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, cli.clinic_city) > 0', 'left');							
		$this->db->where("status" ,"1");
		$currentDate = date("Y-m-d");
	   $this->db->where("(cli.trial_date >='$currentDate' OR cli.end_date >='$currentDate')");
			 
		
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
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, cli.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, cli.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, cli.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		$this->db->group_by('cli.id');
		$this->db->order_by('cli.id','desc');
		$this->db->limit(4);
		
		$query = $this->db->get();
		return $clinics = $query->result();	
		
		
}
		
		
	public function getall_clinicload($data)
{		
              $lastmsg=$data['lastmsg'];	
              
		$this->db->select('cli.id as id,cli.clinic_name,cli.email,cli.clinic_languages,cli.visitation,cli.insurance,cli.clinic_awards,cli.clinic_memberships,cli.clinic_country,cli.password,cli.clinic_address,cli.clinic_state,cli.clinic_city,cli.clinic_zip,cli.specialty,cli.terms,cli.status,cli.display_image,
		rate.review,rate.date,rate.clinic_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('clinic as cli');
		$this->db->join('rating_clinic as rate', 'FIND_IN_SET(rate.clinic_id, cli.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, cli.clinic_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, cli.clinic_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, cli.clinic_city) > 0', 'left');							
		$this->db->where("status" ,"1");
		$currentDate = date("Y-m-d");
	   $this->db->where("(cli.trial_date >='$currentDate' OR cli.end_date >='$currentDate')");
			 
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
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, cli.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, cli.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, cli.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		$this->db->group_by('cli.id');
		$this->db->order_by('cli.id','desc');
		$this->db->limit(4);
		$this->db->where("cli.id<$lastmsg");	
		
		$query = $this->db->get();
		return $clinics = $query->result();	
		
			
	
		
}	
		
	
		
		
		
		public function getall_clinicdoctorload($data,$id){
			$lastmsg=$data['lastmsg'];
			$this->db->select('do.id as id,do.clinic_id,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,do.doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('doctor as do');
		 $this->db->join('clinic', 'FIND_IN_SET(clinic.id, do.clinic_id) > 0', 'left ');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');
		//$this->db->where('do.clinic_id', $id);
		$this->db->where("FIND_IN_SET(clinic.id,'$id') != ",0);	 
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
	/*=== Search Clinic Filter Method === */
	function pushfilter_clinicsearch($data){
		$currentDate = date("Y-m-d");	
		$this->db->select('cli.id as id,cli.clinic_name,cli.email,cli.clinic_languages,cli.visitation,cli.insurance,cli.clinic_awards,cli.clinic_memberships,cli.clinic_country,cli.password,cli.clinic_address,cli.clinic_state,cli.clinic_city,cities.zip as clinic_zip,cli.specialty,cli.terms,cli.status,cli.display_image,rate.review,rate.date,rate.clinic_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cli.latitude,cli.longitude,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('clinic as cli');
		$this->db->join('rating_clinic as rate', 'FIND_IN_SET(rate.clinic_id, cli.id) > 0', 'left ');				
		/* === General Filters === */
		/* == City Filter == */
		if(isset($data['latitude']) && isset($data['longitude'])){
			$short_lat = explode('.',$data['latitude']);	
			$short_lon = explode('.',$data['longitude']);	
			$this->db->join('cities','FIND_IN_SET(cities.id, cli.cities_id) > 0', 'left');
			$this->db->where("cities.short_lat" ,$short_lat[0]);
			$this->db->where("cities.short_lon" ,$short_lon[0]);			
		}else{
			$this->db->join('cities','FIND_IN_SET(cities.id, cli.cities_id) > 0', 'left');
		}
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, cli.specialty) > 0', 'left');
			$specialty = $data['specialty'];					
			$this->db->where("specialty_categories.id" ,$specialty);
		}		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, cli.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}						
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, cli.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}		
		$this->db->where("status" ,"1");
		$this->db->where("(cli.trial_date >='$currentDate' OR cli.end_date >='$currentDate')");	
		$this->db->group_by('cli.id');		
		$query = $this->db->get();
		return $clinics = $query->result();	
	}
	/*=== Search Clinic After Filter Method === */
	function pushfilter_afterclinicsearch($data){
		$currentDate = date("Y-m-d");	
		$this->db->select('cli.id as id,cli.clinic_name,cli.email,cli.clinic_languages,cli.visitation,cli.insurance,cli.clinic_awards,cli.clinic_memberships,cli.clinic_country,cli.password,cli.clinic_address,cli.clinic_state,cli.clinic_city,cities.zip as clinic_zip,cli.specialty,cli.terms,cli.status,cli.display_image,rate.review,rate.date,rate.clinic_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cli.latitude,cli.longitude,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('clinic as cli');
		$this->db->join('rating_clinic as rate', 'FIND_IN_SET(rate.clinic_id, cli.id) > 0', 'left ');				
		/* === General Filters === */		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, cli.specialty) > 0', 'left');
			$specialty = $data['specialty'];					
			$this->db->where("specialty_categories.id" ,$specialty);
		}		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, cli.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}						
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, cli.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}
		if(isset($data['cities_id']) and ($data['cities_id'] == -1)){
			unset($data['cities_id']);
			$this->db->join('cities', 'cities.id = cli.cities_id', 'left ');
		}else{
			$this->db->join('cities', 'cities.id = cli.cities_id', 'left ');
			$this->db->where("cities.id",$data['cities_id']);	
		}		
		$this->db->where("status" ,"1");	
		$this->db->where("(cli.trial_date >='$currentDate' OR cli.end_date >='$currentDate')");	
		$this->db->group_by('cli.id');		
		$query = $this->db->get();
		return $clinics = $query->result();	
	}
	/* === Clinic Doctors [ GET METHOD ] === */
	function get_clinicdoctors($id){
		$this->db->select('do.id as id,do.clinic_id,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,cities.zip as doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('doctor as do');
	    $this->db->join('clinic', 'FIND_IN_SET(clinic.id, do.clinic_id) > 0', 'left ');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');
		$this->db->join('cities', 'cities.id = do.cities_id', 'left ');
		$this->db->where("FIND_IN_SET(clinic.id,'$id') != ",0);	 
		$this->db->where('do.status' ,'1');
		$currentDate = date("Y-m-d");		
		$this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");        
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		$this->db->limit(4);		
		$query = $this->db->get();		
		return $doctors = $query->result();											
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
	function get_singleclinic($id){			
		$this->db->select('cli.id as id,cli.clinic_name,cli.amenities,cli.about_clinic,cli.clinic_affilliations,cli.email,cli.clinic_languages,cli.visitation,cli.insurance,cli.clinic_awards,cli.clinic_memberships,cli.clinic_country,cli.password,cli.clinic_address,cli.clinic_state,cli.clinic_city,cities.zip as clinic_zip,cli.specialty,cli.terms,cli.status,cli.display_image,
		rate.review,rate.date,rate.clinic_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,GROUP_CONCAT(DISTINCT specialty_categories.specialty_name ORDER BY specialty_categories.id) as specialty_name,GROUP_CONCAT(DISTINCT affilliated_hospitals.hospital_name ORDER BY affilliated_hospitals.id) as affhospital_name,GROUP_CONCAT(DISTINCT insurance_categories.insurance_name ORDER BY insurance_categories.id) as insurance_name,
		GROUP_CONCAT(DISTINCT amenities_categories.facility_name ORDER BY amenities_categories.id) as facility_name,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('clinic as cli');	
		$this->db->join('amenities_categories','FIND_IN_SET(amenities_categories.id, cli.amenities) > 0','left ');	
        $this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, cli.insurance) > 0','left ');		
		$this->db->join('specialty_categories','FIND_IN_SET(specialty_categories.id, cli.specialty) > 0','left ');
		$this->db->join('affilliated_hospitals','FIND_IN_SET(affilliated_hospitals.id, cli.clinic_affilliations) > 0','left');		
		$this->db->join('rating_clinic as rate', 'FIND_IN_SET(rate.clinic_id, cli.id) > 0', 'left ');
		$this->db->join('cities', 'cities.id = cli.cities_id', 'left ');
		$this->db->group_by('cli.id');
		$this->db->where('cli.id', $id);
		$query = $this -> db -> get();		
		$view_clinic = $query->row();		
        return $view_clinic;					
	}
	function get_latlang_clinic($id){			
		$this->db->select('*');
		$this->db->from('clinic');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	function get_singleclinicgallery($id){
		$this->db->where("clinic_id",$id);
		$query = $this->db->get("clinic_gallery");
		$this->db->limit(7);
		$result = $query->result();
		return $result;
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