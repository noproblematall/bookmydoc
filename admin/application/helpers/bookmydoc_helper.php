<?php

function get_icon(){
	$CI = & get_instance();
	$CI->db->select('*');
	$CI->db->where("id", 1);
	$CI->db->from('settings');
	$result = $CI->db->get()->row();
	return $result;
}
	function get_picture($id){
		$CI = & get_instance();
		$query = $CI->db->get_where('admin',array('id' => $id));		
		$result = $query->row();
		return $result;		
	}
	/* ===Get Admin=== */
		function pull_admin(){
		$CI = & get_instance();
		$query = $CI->db->get('admin');		
		$result = $query->result();
		return $result;		
	}
	
		function get_homesettings(){
		$CI = & get_instance();
		$query = $CI->db->get_where('settings',array('id' => 1));		
		$result = $query->row();
		return $result;		
	}
	function upload_patient_image($path) {   
		$config = array();
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;
		return $config;
  }
	function upload_doctor_image($path) {   
		$config = array();
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;
		return $config;
	}
	function upload_hospital_image($path) {   
		$config = array();
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;
		return $config;
	}
	function upload_medical_image($path) {   
		$config = array();
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;
		return $config;
	}
	function upload_clinic_image($path) {   
		$config = array();
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;
		return $config;
	}
		/* === Get Total Patients Count === */
		function pull_total_patients(){
			$CI = & get_instance();	
			$CI->db->where('status','1');			
			$query = $CI->db->get('patient');
			$car=$query->num_rows();
			return $car;	
		}
		/* === Get Total Appointment Count === */
		function pull_total_appoinment(){
			$CI = & get_instance();	
			$CI->db->where('status','1');			
			$query = $CI->db->get('appointment');
			$car=$query->num_rows();
			return $car;	
		}
		/* === Get Total Doctor Count === */
		function pull_total_doctor(){
			$CI = & get_instance();	
			$CI->db->where('status','1');			
			$query = $CI->db->get('doctor');
			$car=$query->num_rows();
			return $car;	
		}
		/* === Get Total Clinic Count === */
		function pull_total_clinic(){
			$CI = & get_instance();	
			$CI->db->where('status','1');			
			$query = $CI->db->get('clinic');
			$car=$query->num_rows();
			return $car;	
		}
?>
