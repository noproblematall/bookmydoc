<?php
	function check_installer(){  
		$file = "INSTALLER_TRUE.php";
		if(file_exists($file)){
			redirect(base_url().'Installer/installer.php');
		} 
	}
	function remove_html(&$item, $key){
		$item = strip_tags($item);
	}	
	function get_security_key() {
		$CI = & get_instance();
		$security_key = $CI->config->item('security_key');
		return $security_key;
	}
	function get_user($token) {
		$CI = & get_instance();
		$post_data['token'] = $token;
		$url = $CI->config->item('webservice_url')."getuser";
		$security_key = $CI->config->item('security_key');
		$curl_handle = curl_init();
		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('X-API-KEY: '.$security_key));
		curl_setopt($curl_handle, CURLOPT_URL, $url);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_POST, 1);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $post_data);		 
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);		 
		$result = json_decode($buffer);
		$user_session = (array)$result->profile;
		$user_session['token'] = $result->token;
		return $user_session;
	}
	/* Get Currency Details */
	function get_currency(){
		$id = get_icon()->currency;
		$CI = & get_instance();
		$CI->db->select('currrency_symbol,currency_code');
		$CI->db->from('countries');
		$CI->db->where('id_countries',$id);	
		$query = $CI->db->get();
		return $result = $query->row();
	}
	/* Get Settings */
	function get_settings() {
		$CI = & get_instance();
		
		$url = $CI->config->item('webservice_url')."getsettings";
		$security_key = $CI->config->item('security_key');
		$post_data['test'] = 'test';
		$curl_handle = curl_init();
		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('X-API-KEY: '.$security_key));
		curl_setopt($curl_handle, CURLOPT_URL, $url);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_POST, 1);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $post_data);		 
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);		 
		$result = json_decode($buffer);		
		return $result->settings;
	}
	/* === Get APP Settings === */
	function get_icon(){
		$CI = & get_instance();	
		$CI->db->select('*');
		$CI->db->where("id", 1);
		$CI->db->from('settings');
		$result = $CI->db->get()->row();
		return $result;	
	}
	/* === Appointment Calendar === */
	function calendar_html($value,$columns,$Day,$date,$s,$key){
		error_reporting(0);
		$id = $key;		
		if($columns==3){$cal_cls='date-inner-mn-list';}else{$cal_cls='date-inner-mn-list';}
		$calendar_html = '';
		if($value['working_time']=='none'){
			$calendar_html .= '<div class="error1" >
				<p style="margin:0 auto;padding:20px">
				No availability these days</p></div>';
		}else{						
			for($i=0;$i<$columns;$i++){
				$day_C = strtolower(date('D', strtotime($Day. ' + '.$i.' days')));
				$date_C = date('Y-m-d', strtotime($date. ' + '.$i.' days'));
				$day[]= $day_C;
				$datec[] = $date_C ;
				$list_work_array[] = $value[$day_C]['working_time_auto'];
				$list_brk_array[] = $value[$day_C]['break_time_auto'];				
				if(array_key_exists($date_C,$value['apnttime'])){
					$r=$value['apnttime'][$date_C];
					$list_apnt_array[] = $r;				
				}				
				if(is_array($value['vacation_date_auto'])){
					if (in_array($date_C, $value['vacation_date_auto'])){
						$list_vecation_array[] = $value['vacation_date_auto'];
					}
				}
			}
			$date_array = array();
			foreach ($list_work_array as $key => $value) {
				$date_val = date('Y-m-d', strtotime($date. ' + '.$key.' days'));				
				foreach ($value as $key1 => $value1) {					
					if(array_key_exists($key,$list_work_array)){
						if(in_array($value1,$list_work_array[$key])){
							$final_array[$key][$key1] = $value1;
						}
					}					
						if(array_key_exists($key,$list_brk_array)){
						if(is_array($list_brk_array[$key])){
							if(in_array($value1,$list_brk_array[$key])){
								$final_array[$key][$key1] = 'Break';
							}
						}
					}					
					if(array_key_exists($key,$list_apnt_array)){
						if(in_array($value1,$list_apnt_array[$key])){
							$final_array[$key][$key1] = 'Booked';
						}
					}
					if(isset($list_vecation_array) && !empty($list_vecation_array)){
						foreach ($list_vecation_array as $keyvlenfinal => $valuevlenfinal) {
							if(in_array($date_val,$valuevlenfinal)){
								$final_array[$key][$key1] = 'In vacation';
							}
						}
					}								
				}
			}	
		}
		if(!empty($final_array)){						
			$calendar_html .='<div class="date-inner-mn">';							
			foreach($final_array as $keys =>$values){
				$calendar_html .='<div class="'.$cal_cls.'"><ul>';
				foreach($values as $key =>$value){
					if($value != "Booked" && $value != "In vacation" && $value != "Break"){
						$path ='id="'.$id.'_'.$day[$keys].' '.$datec[$keys].'_'.$value.'" ';
					}else{
						$path ="";
					}									
					if($key>3){
						$cls_hi='';
					}else{
						$cls_hi='gettimecal';
					}
					if($key==4){
							
					}													  
					$calendar_html .= '<li onclick="gettimecalendar(this)" class="'.$cls_hi.'" '.$path.'> '.$value.'</li>';
					if($value==end($final_array[$keys])){						
					}
				}$calendar_html .= '</ul></div>';
			}
			$calendar_html .='</div>';
		}				
		return $calendar_html;     
	}
	function pdffunc(){
		include('pdf/fpdf_helper.php');
	}
	/* === Get Language === */
	function get_trans_language($lang_id){
		$CI = & get_instance();		
		$CI->db->where("id", $lang_id);		
		$result = $CI->db->get('language_set')->row();
		return $result;	
	}
	/* === Get Settings === */
	function pull_settings(){
		$CI = & get_instance();					
		$result = $CI->db->get('settings')->result();
		return $result;	
	}
	/* === Get doctor galendar ===*/
	function pull_doccalendar($id){
		$CI = & get_instance();
		$data['result'] = $CI->Doctor_Model->get_doctor_main_calendar($id);
		$data['id'] = $id;	
		return $CI->load->view("doc_calendar",$data);
	}
	function get_doccalendaranother($id){
		$CI = & get_instance();
		$data['result'] = $CI->Doctor_Model->get_freshcal($id);
		$data['id'] = $id;   
		return $data['id'];
	}
	function get_doccalendar($id){
		$CI = & get_instance();
		$data['result'] = $CI->Doctor_Model->get_freshcal($id);
		$data['id'] = $id;	
		return $CI->load->view("dummy",$data);
	}
	/* === Get User Details === */
	function get_login_userDetails($email){
		$CI = & get_instance();	
		$CI->db->select('*,doctor_firstname as username');
		$CI->db->from('doctor');
		$CI->db->where('email', $email);
		$query = $CI->db->get();
		$result = $query->row();
		if($result){
			return $result;	
		}else{
			$CI->db->select('*,patient_firstname as username');
			$CI->db->from('patient');
			$CI->db->where('email', $email);
			$query = $CI->db->get();
			$result = $query->row();
			if($result){
				return $result;
			}else{
				$CI->db->select('*,clinic_name as username');
				$CI->db->from('clinic');
				$CI->db->where('email', $email);
				$query = $CI->db->get();
				$result = $query->row();
				if($result){
					return $result;
				}else{
					$CI->db->select('*,medical_name as username');
					$CI->db->from('medical_center');
					$CI->db->where('email', $email);
					$query = $CI->db->get();
					$result = $query->row();
					if($result){
						return $result;
					}else{
						$CI->db->select('*,hospital_name as username');
						$CI->db->from('hospital');
						$CI->db->where('email', $email);
						$query = $CI->db->get();
						$result = $query->row();
						if($result){
							return $result;
						}else{
							return false;
						}
					}
				}
			}
		}		
	}
	/* === Pull Location === */
	function get_practice_location(){
		$CI = & get_instance();		
		$query = $CI->db->get('cities');
		$result = $query->result();
		return $result;
	}
	
	
	
	
?>
