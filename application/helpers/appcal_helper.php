<?php


function get_calendarapp(){
	$CI = & get_instance();
	
	$CI->db->select('working_time,break_time,vacation_time,time_duration,cost_duration');	
	$CI->db->from('doctor');
	$result = $CI->db->get()->result();
	return $result;
	
	
	
}


?>