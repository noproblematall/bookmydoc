<?php	
class Doctor_Model extends CI_Model
{
	public function _construct(){
		parent::_construct();
	}
	/*
	
	
	function getall_doctorscalendar($data,$status = null,$dateCnt=0,$columns =3){	
		$currDate = date('Y-m-d');			
		$days=array('mon','tue','wed','thu','fri','sat','sun');		 
        if($status=='next'){		
			$date= ($dateCnt==0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ' + '.$columns.' days'));
			$Day = ($dateCnt==0) ? date('D') : date('D',strtotime($dateCnt. ' + '.$columns.' days'));		
		}else{			
			$date= ($dateCnt==0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ' - '.$columns.' days'));		
			$Day = ($dateCnt==0) ? date('D') : date('D',strtotime($dateCnt. ' - '.$columns.' days'));
		}		
		$end_date = date('Y-m-d', strtotime($currDate. ' + '.$columns.' days'));		
	    $second_date = date('Y-m-d' , strtotime($date. ' + '.$columns.' days'));		
		$this->db->select('do.id as id,do.working_time,do.vacation_time,do.break_time,do.time_duration,do.cost_duration,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,do.doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('doctor as do');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');		
		$this->db->where("status" ,"1");        		
		if(isset($data['country']) and ($data['country'] == -1)){
		  unset($data['country']);
		}
		else if(isset($data['country']) and !empty($data['country'])) {	
		  $country = $data['country'];
		$this->db->where("cou.id" ,$country);		
		}		
		if(isset($data['state']) and ($data['state'] == -1)){
		 unset($data['state']);
		}
		else if(isset($data['state']) and !empty($data['state'])) {		
		$state = $data['state'];			
		$this->db->where("stat.id" ,$state);
		}		
		if(isset($data['city']) and ($data['city'] == -1)){
		 unset($data['city']);
		}
		else if(isset($data['city']) and !empty($data['city'])) {		
		$city = $data['city'];			
		$this->db->where("cit.id" ,$city);
		}		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
		 unset($data['specialty']);
		}
		else if(isset($data['specialty']) and !empty($data['specialty'])) {
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, do.specialty) > 0', 'left');
		$specialty = $data['specialty'];					
		$this->db->where("specialty_categories.id" ,$specialty);
		}		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, do.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}		
		if(isset($data['language']) and !empty($data['language'])) {
		$language = $data['language'];	
		$this->db->join('language_categories','FIND_IN_SET(language_categories.id, do.doctor_languages) > 0', 'left');
		$this->db->where("language_categories.id" ,$language);
		}		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, do.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}		
		if(isset($data['gender']) and !empty($data['gender'])) {	
           $gender = $data['gender'];	
        $this->db->where("do.doctor_sex",$gender);	
		}			
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		$this->db->limit(4);					
		$result = $this->db->get(); 
		$query = $result->result(); 
			if(count($query)>0){
 			$data1=0;
			$s =base_url();
 			foreach ($query as $key => $value) {	
 				if(! empty($value->working_time)){
					$res_data[$value->id]['working_time']=json_decode($value->working_time,TRUE);
					$data1=1;
				}else{
					$res_data[$value->id]['working_time']='none';
				}				
				if(! empty($value->break_time)){
					$res_data[$value->id]['break_time']=json_decode($value->break_time,TRUE);
				}
		if(! empty($value->vacation_time)){
					$res_data[$value->id]['vacation_time']=json_decode($value->vacation_time,TRUE);
				}
				$id=$value->id;
				$array1 = $this->get_doctor_details($id,$second_date,$date);
				if(!empty($array1)){
				if(is_array($array1)){
            foreach($array1 as $keey=>$valus){				
               $res_data[$valus->doctor_id]['apntdate'][]=$valus->appointment_date;
			   $starttime =$valus->start_time;
			   $endtime=$valus->end_time;
			   $r=$this->get_apnt_times( $starttime,$endtime );
                $res_data[$valus->doctor_id]['apnttime'][$valus->appointment_date]=$r;
				
			}
		}
			}else{
				$res_data[$id]['apntdate'][]='';
			   
			   
                $res_data[$id]['apnttime'][]='';
			}	
 			} 			 
				foreach ($res_data as $key => $value) {					
					if($value['working_time'] != 'none'){
						foreach ($days as  $day) {
							$res_data[$key][$day]['working_time_auto'] = (array_key_exists('working_time',$value) && $value['working_time']!='none')  ? $this->get_working_plan($value['working_time'][$day]) : '';
							$res_data[$key][$day]['break_time_auto'] = (array_key_exists('break_time',$value)) ? $this->get_break_time($value['break_time'][$day]) : '';
							$res_data[$key]['vacation_date_auto'] = (array_key_exists('vacation_time',$value)) ? $this->get_vacation_date($value['vacation_time']) : '';							
						}
					}
				}				
			$data_res ='';
				$s =base_url();				
				$data_res .= '<input type="hidden" class="currentDate"  value="'.$date.'">';								
				foreach ($res_data as $key => $value) {					
					$data_res .='<div class="evt-br-doc" >';					
					$data_res .='
					<div class="date-head">
				    <div class="previouscalapp" id="'.$key.'" data-selected="true" >
				    <img id="previouscalapp" src="'.$s.'assets/images/career/cal-left.png" />
				    </div>
					<div class="dttime">
					<ul>
					';
					$data_res .= $this->date_slide($columns,$date,0,$key,$s);
					$data_res .='
						</ul>
					</div>
					<div class="nextcalapp " id="'.$key.'" data-selected="true">
					<img id="nextcalapp" src="'.$s.'assets/images/career/cal-right.png" />
				    </div>		
				     
					 ';
					 $data_res .='
					  <div class="clearfix"></div>
					 ';
					  $data_res .='
					  </div>
					 ';
					$data_res .=$this->calendar_html($value,$columns,$Day,$date,$s,$key);					
					$data_res .='
					  <div class="clearfix"></div>
					 ';
					 $data_res .='</div>';	
					 
				}
				$date_slide= $this->date_slide($columns,$date,0,$key);	  		
				$result_data['success']='success';
	  			$result_data['date_slide'] = $date_slide;
	  			$result_data['html'] = $data_res;	  			
				echo json_encode($result_data);				
			}else{
				$data_res = '<div class="error">
				Sorry, No records found. Please try with different keywords</div>';
				$result_data['success']='Failed';
				$result_data['data'] = $data_res;
				echo json_encode($result_data);
			}
		
		}		
		
		
		
		public function calendar_html($value,$columns,$Day,$date,$s,$key){
	
		error_reporting(0);
		$id = $key;
		
		 if($columns==3){$cal_cls='date-inner-mn-list';}else{$cal_cls='date-inner-mn-list';}
		$calendar_html = '';
					if($value['working_time']=='none'){
						$calendar_html .= '<div class="error1" 
						">
						<p style="margin:0 auto;padding:20px">No availability these days</p></div>';
					}
					else{
						//echo 'arun';die;
		for($i=0;$i<$columns;$i++){
            $day_C = strtolower(date('D', strtotime($Day. ' + '.$i.' days')));
            $date_C = date('Y-m-d', strtotime($date. ' + '.$i.' days'));
			$day[]= $day_C;
			$datec[] = $date_C ;
            $list_work_array[] = $value[$day_C]['working_time_auto'];
            $list_brk_array[] = $value[$day_C]['break_time_auto'];
			
            if(array_key_exists($date_C,$value['apnttime'])){
				 $r[]=$value['apnttime'][$date_C][0];
                $list_apnt_array[] = $r;
				
            }
			
			
			
			if(is_array($value['vacation_date_auto'])){
             if (array_key_exists($date_C, $value['vacation_time'])){

                $list_vecation_array[] = $value['vacation_time'][$date_C];
            }
			}$list_vecation_array="";

        }
  
        $final_array = array();
		
        foreach ($list_work_array as $key => $value) {
							
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
				
				
				
				if(!empty($list_vecation_array)){
                if(array_key_exists($key,$list_vecation_array)){
                    if(in_array($value1,$list_vecation_array[$key])){
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
					}if($key==4){
						// $calendar_html .= '<li class="more sss" data-value="'.$id.'"  > 
							// <img  src="'.$s.'assets/images/more_arw.png">
							 // </li>';
					}	
						$calendar_html .= '<li onclick="gettimecalendar(this)" class="'.$cls_hi.'" '.$path.'> '.$value.'</li>';
						
						if($value==end($final_array[$keys])){
						// $calendar_html .= '<li class="less '.$cls_hi.' sss'.$id.'" data-value="'.$id.'" > <img src="'.$s.'assets/images/less_arw.png"> </li>';
					}
							}$calendar_html .= '</ul></div>';
					}
					$calendar_html .='</div>';
					}
					// var_dump($calendar_html);
					// exit;
				return $calendar_html;     
	}

		//get date slide
	

			function profile_html($value,$s,$key,$button){
		$style = ($button==1)? 'style="display:none"' : '';
		return $profile_html = '
						<div class="left-events left-img-ph">						
										<img src="'.$value["display_image"].'">
									</div>
								 <div class="left-events">
								  <h5>Dr. '.$value["name"].'</h5>
								<div class="gc-ratting" data-rate='.$value["avg_rating"].' ></div> 
								<div class="pt-ent">
                            <div class="row">
                                <div class="col-lg-1">
                                    <img src="'.$s.'assets/images/patient-login/13.png" />
                                </div>
								<div class="col-lg-4">
                                    <h6> '.$value["address"].'</h6>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="view-prf">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="'.$s.'assets/images/patient-login/14.png" />								
                                <h6><a href ="'.$s.'Doctor/Profile/'.$key.'">View Profile</a></h6>
                            </div>
                            <div class="col-lg-4">
                                <img src="'.$s.'assets/images/patient-login/15.png" />
                                <h6><a href ="javascript:void(0);" data-toggle="modal" data-target="#myModal" modal_target="'.$key.'">Book Online</a></h6>
                            </div>
                        </div>
                    </div>                
													
						';
	}

		
	
		public function get_latlang(){
			
			$this->db->select('id,display_image,doctor_firstname,latitude,longitude');
			$this->db->from('doctor');
			$this->db->group_by('id');
			$currentDate = date("Y-m-d");
			  $this->db->where("(doctor.trial_date >='$currentDate' OR doctor.end_date >='$currentDate')");
			$query = $this -> db -> get();
			return $query->result();
		}		
public function get_states()
		{
		$this->db->select('*');
		$this->db->from('state_categories ');
		$this->db->group_by("state_name");       
				
		$query = $this->db->get();
	
		return $states = $query->result();
		}
		public function get_cities()
		{
		$this->db->select('*');
		$this->db->from('city_categories ');
		$this->db->group_by("city_name");       
				
		$query = $this->db->get();
	
		return $cities = $query->result();
		}
	public function get_countries()
		{
		$this->db->select('*');
		$this->db->from('country_categories ');
		$this->db->group_by("country_name");       
				
		$query = $this->db->get();
	
		return $countries = $query->result();
		}
		
		
		public function get_gender()
		{
		$this->db->select('*');
		$this->db->from('gender_categories ');
		$this->db->group_by("gender_name");       
				
		$query = $this->db->get();
	
		return $gender = $query->result();
		}		
		public function get_visitation()
		{
		$this->db->select('*');
		$this->db->from('visit_categories ');
		$this->db->group_by("reason");       
				
		$query = $this->db->get();
	
		return $visitation = $query->result();
		}
		public

	function getall_doctors()
		{
			
		$this->db->select('do.id as id,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,do.doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('doctor as do');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');
		$this->db->where("status" ,"1");
		
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		$this->db->limit(4);
		
		$query = $this->db->get();
		return $doctors = $query->result();	
		}
		
		public function getall_doctorsfiltermap($data){
			$this->db->select('do.id as id,display_image,doctor_firstname,doctor_office_address,latitude,longitude,doctor_office_country,doctor_office_state,doctor_office_city
			specialty,insurance,doctor_languages,visitation,doctor_sex
			           ');
			$this->db->from('doctor as do');
			$this->db->where("do.status" ,'1');
			//$query = $this -> db -> get();
			//return $query->result();
			$currentDate = date("Y-m-d");
			  $this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");
		
		if(isset($data['country']) and ($data['country'] == -1)){
		  unset($data['country']);
		}
		else if(isset($data['country']) and !empty($data['country'])) {	
		$country = $data['country'];   
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');		
		$this->db->where("cou.id" ,$country);
		
		}
		
		if(isset($data['state']) and ($data['state'] == -1)){
		 unset($data['state']);
		}
		else if(isset($data['state']) and !empty($data['state'])) {
		
		$state = $data['state'];	
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->where("stat.id" ,$state);
		}
		
		if(isset($data['city']) and ($data['city'] == -1)){
		 unset($data['city']);
		}
		else if(isset($data['city']) and !empty($data['city'])) {
		
		$city = $data['city'];	
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');
		$this->db->where("cit.id" ,$city);
		}
		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
		 unset($data['specialty']);
		}
		else if(isset($data['specialty']) and !empty($data['specialty'])) {
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, do.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, do.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		if(isset($data['language']) and !empty($data['language'])) {
		$language = $data['language'];	
		$this->db->join('language_categories','FIND_IN_SET(language_categories.id, do.doctor_languages) > 0', 'left');
		$this->db->where("language_categories.id" ,$language);
		}
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, do.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		if(isset($data['gender']) and !empty($data['gender'])) {	
           $gender = $data['gender'];	
        $this->db->where("do.doctor_sex",$gender);	
		}	
		
		$this->db->group_by('do.id');
		//$this->db->order_by('do.id','desc');
		//$this->db->limit(4);
		
		$query = $this->db->get();
		return $query->result();	
		}
		public function getall_doctorsfilter($data)
          {	
		  
		$this->db->select('do.id as id,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,do.doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('doctor as do');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');
		$this->db->where("status" ,"1");
		$currentDate = date("Y-m-d");
			 $this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");
		
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
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, do.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, do.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		if(isset($data['language']) and !empty($data['language'])) {
		$language = $data['language'];	
		$this->db->join('language_categories','FIND_IN_SET(language_categories.id, do.doctor_languages) > 0', 'left');
		$this->db->where("language_categories.id" ,$language);
		}
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, do.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		if(isset($data['gender']) and !empty($data['gender'])) {	
           $gender = $data['gender'];	
        $this->db->where("do.doctor_sex",$gender);	
		}	
		
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		$this->db->limit(4);
		
		$query = $this->db->get();
		return $doctors = $query->result();	
		
		
}
		public function getall_doctorload($data)
{		
              $lastmsg=$data['lastmsg'];	
              
		$this->db->select('do.id as id,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,do.doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('doctor as do');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');
		//$this->db->where("status" ,"1");
		
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
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, do.specialty) > 0', 'left');
		$specialty = $data['specialty'];	
		
		
		$this->db->where("specialty_categories.id" ,$specialty);
		}
		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, do.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}
		
		if(isset($data['language']) and !empty($data['language'])) {
		$language = $data['language'];	
		$this->db->join('language_categories','FIND_IN_SET(language_categories.id, do.doctor_languages) > 0', 'left');
		$this->db->where("language_categories.id" ,$language);
		}
		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {
		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, do.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}
		
		if(isset($data['gender']) and !empty($data['gender'])) {	
           $gender = $data['gender'];	
        $this->db->where("do.doctor_sex",$gender);	
		}		
		
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		$this->db->limit(4);
			
       $this->db->where('status','1');
	   $currentDate = date("Y-m-d");
		$this->db->where("do.id<$lastmsg");	
	   $this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");
		$query = $this->db->get();
		return $doctors = $query->result();	
		
			
	
		
}
public function getall_doctorsconven($data)
          {	
			
		$this->db->select('do.id as id,do.working_time,do.vacation_time,do.break_time,do.time_duration,do.cost_duration,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,do.doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cou.country_name,stat.state_name,cit.city_name
		               ');
		$this->db->from('doctor as do');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');
		$this->db->join('country_categories as cou','FIND_IN_SET(cou.id, do.doctor_office_country) > 0', 'left');
		$this->db->join('state_categories as stat','FIND_IN_SET(stat.id, do.doctor_office_state) > 0', 'left');
		$this->db->join('city_categories as cit','FIND_IN_SET(cit.id, do.doctor_office_city) > 0', 'left');		
		 $this->db->where("status" ,"1");
		 $currentDate = date("Y-m-d");
			 $this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");
			//$where = "status='1' do.trial_date >='$currentDate' OR do.end_date >='$currentDate'";
			//$this->db->where($where);
		//$wherearray = array('do.trial_date >=' => $currentDate, 'do.end_date >=' => $currentDate, 'status' => '1');
		//$this->db->where($wherearray); 
		//$this->db->where('status','1')->where('do.trial_date>=',$currentDate)->where('do.end_date >=',$currentDate);
		if(isset($data['country']) and ($data['country'] == -1)){
		  unset($data['country']);
		}
		else if(isset($data['country']) and !empty($data['country'])) {	
        $country = $data['country'];			
		$this->db->where("cou.id" ,$country);		
		}		
		if(isset($data['state']) and ($data['state'] == -1)){
		 unset($data['state']);
		}
		else if(isset($data['state']) and !empty($data['state'])) {		
		$state = $data['state'];			
		$this->db->where("stat.id" ,$state);
		}		
		if(isset($data['city']) and ($data['city'] == -1)){
		 unset($data['city']);
		}
		else if(isset($data['city']) and !empty($data['city'])) {		
		$city = $data['city'];			
		$this->db->where("cit.id" ,$city);
		}		
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
		 unset($data['specialty']);
		}
		else if(isset($data['specialty']) and !empty($data['specialty'])) {
		$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, do.specialty) > 0', 'left');
		$specialty = $data['specialty'];					
		$this->db->where("specialty_categories.id" ,$specialty);
		}		
		if(isset($data['insurance']) and !empty($data['insurance'])) {
		$insurance = $data['insurance'];	
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, do.insurance) > 0', 'left');
		$this->db->where("insurance_categories.id" ,$insurance);
		}		
		if(isset($data['language']) and !empty($data['language'])) {
		$language = $data['language'];	
		$this->db->join('language_categories','FIND_IN_SET(language_categories.id, do.doctor_languages) > 0', 'left');
		$this->db->where("language_categories.id" ,$language);
		}		
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
		unset($data['visitation']);
		}
		else if(isset($data['visitation']) and !empty($data['visitation'])) {		
		$visitation = $data['visitation'];		
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, do.visitation) > 0', 'left');
		$this->db->where("visit_categories.id" ,$visitation);
		}		
		if(isset($data['gender']) and !empty($data['gender'])) {	
           $gender = $data['gender'];	
        $this->db->where("do.doctor_sex",$gender);	
		}			
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		//$this->db->limit(4);
		
		$query = $this->db->get();
		return $doctors = $query->result();	
		
		
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
	
		
		
		
		
		
		
		
		
		
	function get_apnt_times($starttime,$endtime){
		$vd[] = $this->get_times($starttime, $endtime);
		return $flat = array_unique(call_user_func_array('array_merge', $vd));
	}	
	public function get_singledoctorrating($id){
			
		$this->db->select('
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating');

		$this->db->from('doctor as do');		
		$this->db->join('rating_doctor as rate','FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left');		
		$this->db->group_by('do.id');
		$this->db->where('do.id', $id);
		$query = $this -> db -> get();		
		$view_doctor = $query->row();		
        return $view_doctor;	
			
		} */
/*=== Search Doctor Filter Method === */
	function pushfilter_doctorsearch($data){
		$currentDate = date("Y-m-d");
		$this->db->select('do.id as id,do.working_time,do.latitude,do.longitude,do.vacation_time,do.break_time,do.time_duration,do.cost_duration,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,cities.zip as doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('doctor as do');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');	
	/* === General Filters === */
		/* == City Filter == */
		if(isset($data['latitude']) && isset($data['longitude'])){
			$short_lat = explode('.',$data['latitude']);	
			$short_lon = explode('.',$data['longitude']);	
			$this->db->join('cities','FIND_IN_SET(cities.id, do.cities_id) > 0', 'left');
			$this->db->where("cities.short_lat" ,$short_lat[0]);
			$this->db->where("cities.short_lon" ,$short_lon[0]);			
		}else{
			$this->db->join('cities','FIND_IN_SET(cities.id, do.cities_id) > 0', 'left');
		}
		/* == Specialty Filter */
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, do.specialty) > 0', 'left');
			$specialty = $data['specialty'];					
			$this->db->where("specialty_categories.id" ,$specialty);
		}
		/* == Reason Filter */
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, do.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}
		/* == Insurance Filter */
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, do.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}
		/* == Language Filter */
		if(isset($data['language']) and !empty($data['language'])) {
			$language = $data['language'];	
			$this->db->join('language_categories','FIND_IN_SET(language_categories.id, do.doctor_languages) > 0', 'left');
			$this->db->where("language_categories.id" ,$language);
		}
		/* == Gender Filter */
		if(isset($data['gender']) and !empty($data['gender'])) {	
			$gender = $data['gender'];	
			$this->db->where("do.doctor_sex",$gender);	
		}			
		$this->db->where("do.status",1);						
		$this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");
		$this->db->group_by('do.id');		
		$query = $this->db->get();
		$result = $query->result();			
		return $result;
	}	
	/* === Search bar - Ill Reason Method === */
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
	/* === Search bar - cities === */
	function pull_city($lat,$lon){
		$short_lat = explode('.',$lat);
		$short_lon = explode('.',$lon);
		$this->db->where('short_lat',$short_lat[0]);
		$this->db->where('short_lon',$short_lon[0]);
		$query = $this->db->get('cities');
		$result = $query->row();
		return $result;
	}
	function pull_cities(){
		$query = $this->db->get('cities');
		$result = $query->result();
		return $result;
	}
	/* === Search bar - specialties === */
	function get_specialties(){
		$this->db->select('*');
		$this->db->from('specialty_categories ');		  				
		$query = $this->db->get();	
		return $specialties = $query->result();
	}
	/* === Search bar - Insurances === */
	function get_insurance(){
		$this->db->select('*');
		$this->db->from('insurance_categories ');		      		
		$query = $this->db->get();	
		return $insurance = $query->result();
	}
	/* === Search bar - languages === */
	function get_languages(){
		$this->db->select('*');
		$this->db->from('language_categories ');		      			
		$query = $this->db->get();	
		return $languages = $query->result();
	}	
	/* === Doctor Calendar === */
	function get_doctor_main_calendar($doc_id,$status=0,$dateCnt=0,$columns =3){	  	
		$currDate = date('Y-m-d');			
		$days=array('mon','tue','wed','thu','fri','sat','sun');		
        if($status=='next'){		
			$date= ($dateCnt==0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ' + '.$columns.' days'));
			$Day = ($dateCnt==0) ? date('D') : date('D',strtotime($dateCnt. ' + '.$columns.' days'));		
		}else{			
			$date= ($dateCnt==0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ' - '.$columns.' days'));		
			$Day = ($dateCnt==0) ? date('D') : date('D',strtotime($dateCnt. ' - '.$columns.' days'));
		}		
		$end_date = date('Y-m-d', strtotime($currDate. ' + '.$columns.' days'));		
	    $second_date = date('Y-m-d' , strtotime($date. ' + '.$columns.' days'));		
		$this->db->select('do.id as id,do.working_time,do.vacation_time,do.break_time,do.time_duration,do.cost_duration');
		$this->db->from('doctor as do');		
		$this->db->where("do.id" ,$doc_id);	
		$this->db->where("status" ,"1");		
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		$this->db->limit(4);
		$query = $this->db->get(); 
		$result = $query->row(); 
		if(count($result)>0){
			$data1=0;
			$s =base_url(); 			
			if(! empty($result->working_time)){
				$res_data[$result->id]['working_time']=json_decode($result->working_time,TRUE);
				$data1=1;
			}else{
				$res_data[$result->id]['working_time']='none';
			}				
			if(! empty($result->break_time)){
				$res_data[$result->id]['break_time']=json_decode($result->break_time,TRUE);
			}
			if(! empty($result->vacation_time)){
				$res_data[$result->id]['vacation_time']=json_decode($result->vacation_time,TRUE);
			}
			$id=$result->id;
			$array1 = $this->get_doctor_details($id,$second_date,$date);				
			if(!empty($array1)){
				if(is_array($array1)){
					$i=0;					
					foreach($array1 as $keey=>$valus){
						$res_data[$id]['apntdate'][] = $keey;
						$res_data[$id]['apnttime'][$keey] =$valus;				
					}
				}
			}else{
				$res_data[$id]['apntdate'][]='';			   
                $res_data[$id]['apnttime'][]='';
			}	
			foreach ($res_data as $key => $value) {					
				if(!empty ($value['working_time'])){	
					if($value['working_time'] != 'none'){					
						foreach ($days as  $day) {							
							$res_data[$key][$day]['working_time_auto'] = (array_key_exists('working_time',$value) && $value['working_time']!='none')  ? $this->get_working_plan($value['working_time'][$day]) : '';
							$res_data[$key][$day]['break_time_auto'] = (array_key_exists('break_time',$value)) ? $this->get_break_time($value['break_time'][$day]) : '';
							$res_data[$key]['vacation_date_auto'] = (array_key_exists('vacation_time',$value)) ? $this->get_vacation_date($value['vacation_time']) : '';							
						}
					}
				}
			}
			return $res_data;							
		}else{
			return null;
		}	   
	}
	/* === calendar works === */
	function get_working_plan($wr_plan){			
		return $this->get_times($wr_plan['start'],$wr_plan['end']);
	}
	function get_break_time($br_plan){		
        foreach ($br_plan as $key => $value) {
            if($key==='start' || $key==='end'){
                $br[] = $this->get_times($br_plan['start'],$br_plan['end']);
				return $flat = call_user_func_array('array_merge', $br);
			}else{
                $br[] = $this->get_times($br_plan[$key]['start'],$br_plan[$key]['end']);    
				return $flat = call_user_func_array('array_merge', $br);
            }            
        }       
    }
	function get_vacation_date($va_time_plan){
        foreach ($va_time_plan as $key => $value) {
            $vd[] = $this->get_days($value['startdate'], $value['enddate']);
        }
        return $flat = array_unique(call_user_func_array('array_merge', $vd));
    }	
	function get_times($startdate,$enddate){
		if(!empty($startdate)){
			if(!empty($enddate)){
				$begin = new DateTime(date("H:i", strtotime($startdate)));
				$end = new DateTime(date("H:i", strtotime($enddate)));
				$daterange = new DatePeriod($begin, new DateInterval('PT900S'), $end);
				foreach($daterange as $date){
					$atimes[] =$date->format("H:i A");
				}
				$atimes[] =date("H:i A", strtotime($enddate)) ;
			}else{		
				$atimes[] ='';		
			}
		}else{		
			$atimes[] ='';		
		}		
		return $atimes;  
	}			
	function get_days($startdate,$enddate){
		$begin = new DateTime(date("Y-m-d", strtotime($startdate)));
		$end = new DateTime(date("Y-m-d", strtotime($enddate)));
		$daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
		foreach($daterange as $date){
			$adays[] =$date->format("Y-m-d");
		}
		$adays[] =date("Y-m-d", strtotime($enddate)) ;
		return $adays;  
	}
	/*=== After Filter Doctor Search === */
	function pushfilter_afterdoctorsearch($data){
		$currentDate = date("Y-m-d");
		$this->db->select('do.id as id,do.working_time,do.latitude,do.longitude,do.vacation_time,do.break_time,do.time_duration,do.cost_duration,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,cities.zip as doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('doctor as do');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');	
	/* === General Filters === */		
		/* == Specialty Filter */
		if(isset($data['specialty']) and ($data['specialty'] == -1)){
			unset($data['specialty']);
		}else if(isset($data['specialty']) and !empty($data['specialty'])) {
			$this->db->join('specialty_categories ','FIND_IN_SET(specialty_categories.id, do.specialty) > 0', 'left');
			$specialty = $data['specialty'];					
			$this->db->where("specialty_categories.id" ,$specialty);
		}
		/* == Reason Filter */
		if(isset($data['visitation']) and ($data['visitation'] == -1)){
			unset($data['visitation']);
		}else if(isset($data['visitation']) and !empty($data['visitation'])) {		
			$visitation = $data['visitation'];		
			$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, do.visitation) > 0', 'left');
			$this->db->where("visit_categories.id" ,$visitation);
		}
		/* == Insurance Filter */
		if(isset($data['insurance']) and !empty($data['insurance'])) {
			$insurance = $data['insurance'];	
			$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, do.insurance) > 0', 'left');
			$this->db->where("insurance_categories.id" ,$insurance);
		}
		/* == Language Filter */
		if(isset($data['language']) and !empty($data['language'])) {
			$language = $data['language'];	
			$this->db->join('language_categories','FIND_IN_SET(language_categories.id, do.doctor_languages) > 0', 'left');
			$this->db->where("language_categories.id" ,$language);
		}
		/* == Gender Filter */
		if(isset($data['gender']) and !empty($data['gender'])) {	
			$gender = $data['gender'];	
			$this->db->where("do.doctor_sex",$gender);	
		}
		if(isset($data['cities_id']) and ($data['cities_id'] == -1)){
			unset($data['cities_id']);
			$this->db->join('cities','FIND_IN_SET(cities.id, do.cities_id) > 0', 'left');
		}else{
			$this->db->join('cities','FIND_IN_SET(cities.id, do.cities_id) > 0', 'left');
			$this->db->where("cities.id",$data['cities_id']);	
		}	
		$this->db->where("do.status",1);		
		$this->db->where("(do.trial_date >='$currentDate' OR do.end_date >='$currentDate')");	
		$this->db->group_by('do.id');		
		$query = $this->db->get();
		$result = $query->result();			
		return $result;
	}
	/* == Doctor Details [Get Method] == */
	function get_doctor_details($id,$second_date,$date){			
		$condition = "appointment_date BETWEEN " . "'" . $date . "'" . " AND " . "'" . $second_date . "'";			
		$this->db->select('id,doctor_id,patient_id,appointment_date,appointment_time as start_time,end_time');		
		$this->db->where('doctor_id',$id);
		$this->db->where($condition);		
		$query  = $this->db->get('appointment');  //--- Table name = User
		$result = $query->result();
		$start_time = array();
		foreach($result as $key => $value){
			$start_time[$value->appointment_date][] = $value->start_time;
		}
		return $start_time;	 
	}
	/*  === Load Reason By Specialty === */
	function get_freshcal($doc_id,$status=0,$dateCnt=0,$columns =3){	  	
		$currDate = date('Y-m-d');			
		$days=array('mon','tue','wed','thu','fri','sat','sun');		
        if($status=='next'){		
			$date= ($dateCnt==0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ' + '.$columns.' days'));
			$Day = ($dateCnt==0) ? date('D') : date('D',strtotime($dateCnt. ' + '.$columns.' days'));		
		}else{			
			$date= ($dateCnt==0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ' - '.$columns.' days'));		
			$Day = ($dateCnt==0) ? date('D') : date('D',strtotime($dateCnt. ' - '.$columns.' days'));
		}		
		$end_date = date('Y-m-d', strtotime($currDate. ' + '.$columns.' days'));		
	    $second_date = date('Y-m-d' , strtotime($date. ' + '.$columns.' days'));		
		$this->db->select('do.id as id,do.working_time,do.vacation_time,do.break_time,do.time_duration,do.cost_duration');
		$this->db->from('doctor as do');		
		$this->db->where("do.id" ,$doc_id);	
		$this->db->where("status" ,"1");		
		$this->db->group_by('do.id');
		$this->db->order_by('do.id','desc');
		$this->db->limit(4);
		$result = $this->db->get(); 
		$query = $result->row(); 
		if(count($query)>0){
			$data1=0;
			$s =base_url(); 			
			if(! empty($query->working_time)){
				$res_data[$query->id]['working_time']=json_decode($query->working_time,TRUE);
				$data1=1;
			}else{
				$res_data[$query->id]['working_time']='none';
			}				
			if(! empty($query->break_time)){
				$res_data[$query->id]['break_time']=json_decode($query->break_time,TRUE);
			}
			if(! empty($query->vacation_time)){
				$res_data[$query->id]['vacation_time']=json_decode($query->vacation_time,TRUE);
			}
			$id=$query->id;
			$array1 = $this->get_doctor_details($id,$second_date,$date);				
			if(!empty($array1)){
				if(is_array($array1)){
					$i=0;					
					foreach($array1 as $keey=>$valus){
						$res_data[$id]['apntdate'][] = $keey;
						$res_data[$id]['apnttime'][$keey] =$valus;				
					}
				}
			}else{
				$res_data[$id]['apntdate'][]='';			   
                $res_data[$id]['apnttime'][]='';
			}	
			foreach ($res_data as $key => $value) {					
				if(!empty ($value['working_time'])){	
					if($value['working_time'] != 'none'){					
						foreach ($days as  $day) {							
							$res_data[$key][$day]['working_time_auto'] = (array_key_exists('working_time',$value) && $value['working_time']!='none')  ? $this->get_working_plan($value['working_time'][$day]) : '';
							$res_data[$key][$day]['break_time_auto'] = (array_key_exists('break_time',$value)) ? $this->get_break_time($value['break_time'][$day]) : '';
							$res_data[$key]['vacation_date_auto'] = (array_key_exists('vacation_time',$value)) ? $this->get_vacation_date($value['vacation_time']) : '';							
						}
					}
				}
			}
			return $res_data;							
		}else{
			return null;
		}	   
	}
	/* == Doctor Gallery [ GET Method ] == */
	function get_singlegalpic($id){
		$this->db->select("*");
		$this->db->from('doctor_gallery');		
		$this->db->where('doctor_id', $id);
		$this->db->limit(9);
		$query = $this -> db -> get();		
		$view_galpic = $query->result();		
        return $view_galpic;  
	}
	/* == Doctor [ GET Method ] == */
	function get_singledoctor($id){			
		$this->db->select('do.id as id,do.doctor_firstname,do.doctor_experience,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.about_doctor,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,cities.zip as doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,
		rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating,degree_categories.degree_name,specialty_categories.specialty_name,GROUP_CONCAT(DISTINCT affilliated_hospitals.hospital_name ORDER BY affilliated_hospitals.id) as hospital_name,cities.country as country_name,cities.state as state_name,cities.city as city_name');
		$this->db->from('doctor as do');
		$this->db->join('degree_categories','FIND_IN_SET(degree_categories.id, do.doctor_degree) > 0', 'left');
		$this->db->join('specialty_categories', 'FIND_IN_SET(specialty_categories.id, do.specialty) > 0', 'left ');
		$this->db->join('affilliated_hospitals', 'FIND_IN_SET(affilliated_hospitals.id, do.doctor_affiliations) > 0','left ');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');		
		$this->db->join('cities', 'FIND_IN_SET(cities.id, do.cities_id) > 0', 'left ');
		$this->db->group_by('do.id');
		$this->db->where('do.id', $id);
		$query = $this -> db -> get();		
		$view_doctor = $query->row();		
        return $view_doctor;				
	}
	/* == Doctor Reviews [ GET Method ] == */
	function get_singlereview($id){
		$this->db->select('rate.id as id,rate.review,rate.rating,rate.date,rate.doctor_id,rate.patient_id,patient.patient_firstname,patient.patient_display_image');
		$this->db->from('rating_doctor as rate');
		$this->db->join('patient','FIND_IN_SET(patient.id, rate.patient_id) > 0', 'left');		
		$this->db->where('rate.doctor_id', $id);
		$query = $this -> db -> get();		
		$review_doctor = $query->result();		
		return $review_doctor;							
	}
	/* == Doctor Location Picker [ GET Method ] == */
	function get_latlang_doctor($id){			
		$this->db->select('display_image,doctor_office_address,doctor_firstname,latitude,longitude');
		$this->db->from('doctor');
		$this->db->where('id', $id);
		$query = $this -> db -> get();
		return $query->row();
	}
	function getall_doctorscalendarnavi($doc_id,$status,$dateCnt,$columns =3){				
		$currDate = date('Y-m-d');		
		$currentfulldate =date('D Y-m-d');
		$prevcolumns = 0;		
		$days=array('mon','tue','wed','thu','fri','sat','sun');		
        if($status === 'next'){		
			$date= ($dateCnt===0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ', + '.$columns.' days'));
			$Day = ($dateCnt===0) ? date('D') : date('D',strtotime($dateCnt. ', + '.$columns.' days'));		
		}else{
			if($dateCnt != $currentfulldate)	{
				$date= ($dateCnt===0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ', - '.$columns.' days'));
				$Day = ($dateCnt===0) ? date('D') : date('D',strtotime($dateCnt. ', - '.$columns.' days'));
			}else{
				$date= ($currentfulldate===0) ? date('Y-m-d') : date('Y-m-d' , strtotime($currentfulldate. ', + '.$prevcolumns.' days'));				
				$Day = ($currentfulldate===0) ? date('D') : date('D',strtotime($currentfulldate. ', + '.$prevcolumns.' days'));
			}
		}	
		$end_date = date('Y-m-d', strtotime($currDate. ' + '.$columns.' days'));		
	    $second_date = date('Y-m-d' , strtotime($date. ' + '.$columns.' days'));		
		$this->db->select('do.id as id,do.working_time,do.vacation_time,do.break_time,do.time_duration,do.cost_duration,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,do.doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating');
		$this->db->from('doctor as do');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');					
		$this->db->where("do.id" ,$doc_id);					
		$result = $this->db->get(); 
		$query = $result->row(); 
		if(count($query)>0){
			$data1=0;
			$s =base_url(); 			
			if(! empty($query->working_time)){
				$res_data[$query->id]['working_time']=json_decode($query->working_time,TRUE);
				$data1=1;
			}else{
				$res_data[$query->id]['working_time']='none';
			}				
			if(! empty($query->break_time)){
				$res_data[$query->id]['break_time']=json_decode($query->break_time,TRUE);
			}
			if(! empty($query->vacation_time)){
				$res_data[$query->id]['vacation_time']=json_decode($query->vacation_time,TRUE);
			}
			$id=$query->id;
			$array1 = $this->get_doctor_details($id,$second_date,$date);
			if(!empty($array1)){
				if(is_array($array1)){
					$i=0;					
					foreach($array1 as $keey=>$valus){
					$res_data[$id]['apntdate'][] = $keey;
					$res_data[$id]['apnttime'][$keey] =$valus;				
					}
				}
			}else{
				$res_data[$id]['apntdate'][]='';			   			   
                $res_data[$id]['apnttime'][]='';
			}	 						 
			foreach ($res_data as $key => $value) {					
				if($value['working_time'] != 'none'){
					foreach ($days as  $day) {
						$res_data[$key][$day]['working_time_auto'] = (array_key_exists('working_time',$value) && $value['working_time']!='none')  ? $this->get_working_plan($value['working_time'][$day]) : '';
						$res_data[$key][$day]['break_time_auto'] = (array_key_exists('break_time',$value)) ? $this->get_break_time($value['break_time'][$day]) : '';
						$res_data[$key]['vacation_date_auto'] = (array_key_exists('vacation_time',$value)) ? $this->get_vacation_date($value['vacation_time']) : '';							
					}
				}
			}		
			$data_res ='';
			$s =base_url();																
			foreach ($res_data as $key => $value) {									
				$data_res .='<div class="date-head"><div class="previouscalapp" id="'.$key.'" data-date="'.$Day.' '.$date.'" data-selected="true" data-div="evt-br-doc_'.$key.'"><img id="previouscalapp" src="'.$s.'assets/images/career/cal-left.png" /></div><div class="dttime"><ul>';
				$data_res .= $this->date_slide($columns,$date,0,$key,$s);
				$data_res .='</ul></div><div class="nextcalapp " id="'.$key.'" data-date="'.$Day.' '.$date.'"  data-selected="true" data-div="evt-br-doc_'.$key.'"><img id="nextcalapp" src="'.$s.'assets/images/career/cal-right.png" /></div>';
				$data_res .='<div class="clearfix"></div>';
				$data_res .='</div>';
				$data_res .=$this->single_calendar_html($value,$columns,$Day,$date,$s,$key);					
				$data_res .='<div class="clearfix"></div>';					
			}
			$date_slide= $this->date_slide($columns,$date,0,$key);	  		
			$result_data['success']='success';
			$result_data['date_slide'] = $date_slide;
			$result_data['html'] = $data_res;				
			echo json_encode($result_data);				
		}else{
			$data_res = '<div class="error">Sorry, No records found. Please try with different keywords</div>';
			$result_data['success']='Failed';
			$result_data['data'] = $data_res;
			echo json_encode($result_data);
		}
	}
	function date_slide($columns,$date,$cls,$key,$s){		
		$data = '';
		for($i=0;$i<$columns;$i++){
			$date_C = date('D Y-m-d', strtotime($date. ' + '.$i.' days'));
			if($cls==1){
				$data .='<div class="dttime-list"><li><h5>'.$date_C.'</li></h5></div>';
			}else{
				$data .='<div class="dttime-list"><li><h5>'.$date_C.'</li></h5></div>';
			}
		}
		return $data;
	}
	function single_calendar_html($value,$columns,$Day,$date,$s,$key){
		error_reporting(0);
		$id = $key;		
		if($columns==3){$cal_cls='date-inner-mn-list';}else{$cal_cls='date-inner-mn-list';}
		$calendar_html = '';
		if($value['working_time']=='none'){
			$calendar_html .= '<div class="error1" ><p style="margin:0 auto;padding:20px">No availability these days</p></div>';
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
			$final_array = array();		
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
					if($this->session->userdata('super_person') == 0){
						$calendar_html .= '<li onclick="gettimecalendar(this)" class="'.$cls_hi.'" '.$path.'> '.$value.'</li>';
					}else{
						$calendar_html .= '<li onclick="mysigninFunction()" class="'.$cls_hi.'" '.$path.'> '.$value.'</li>';  
					}						  						  
					$calendar_html .= '<li onclick="gettimecalendar(this)" class="'.$cls_hi.'" '.$path.'> '.$value.'</li>';
					if($value==end($final_array[$keys])){						
					}
				}
				$calendar_html .= '</ul></div>';
			}
			$calendar_html .='</div>';
		}				
		return $calendar_html;    
	}
	function get_singlepatient($id){
		$this->db->select('patient.id as id,patient.*,insurance_categories.insurance_name as insurance_title,visit_categories.reason as visit_title');
		$this->db->from('patient');
		$this->db->join('insurance_categories','FIND_IN_SET(insurance_categories.id, patient.insurance) > 0', 'left');
		$this->db->join('visit_categories','FIND_IN_SET(visit_categories.id, patient.visitation) > 0', 'left');
		$this->db->where('patient.id', $id);
		$query = $this -> db -> get();		
		$result= $query->row();		
		return $result;	
	}
	function update_bklevelone($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('patient', $data);
		return $result;
	}
	function book_appointment($data){
		if ($this->db->insert("appointment", $data)){
			return true;
		}
	}
	function getall_doctorscalendarnavianother($doc_id,$status,$dateCnt,$columns =3){	
		$currDate = date('Y-m-d');			
		$currentfulldate =date('D Y-m-d');
		$prevcolumns = 0;		
		$days=array('mon','tue','wed','thu','fri','sat','sun');	
        if($status === 'next'){		
			$date= ($dateCnt===0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ', + '.$columns.' days'));
			$Day = ($dateCnt===0) ? date('D') : date('D',strtotime($dateCnt. ', + '.$columns.' days'));		
		}elseif($status === 'normal'){
			$date= date('Y-m-d');
			$Day = date('D');			
		}else{
			if($dateCnt != $currentfulldate){
				$date= ($dateCnt===0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ', - '.$columns.' days'));
				$Day = ($dateCnt===0) ? date('D') : date('D',strtotime($dateCnt. ', - '.$columns.' days'));
			}else{
				$date= ($currentfulldate===0) ? date('Y-m-d') : date('Y-m-d' , strtotime($currentfulldate. ', + '.$prevcolumns.' days'));
				$Day = ($currentfulldate===0) ? date('D') : date('D',strtotime($currentfulldate. ', + '.$prevcolumns.' days'));
			}
		}	
		$end_date = date('Y-m-d', strtotime($currDate. ' + '.$columns.' days'));		
	    $second_date = date('Y-m-d' , strtotime($date. ' + '.$columns.' days'));		
		$this->db->select('do.id as id,do.working_time,do.vacation_time,do.break_time,do.time_duration,do.cost_duration,do.doctor_firstname,do.doctor_lastname,do.doctor_sex,do.email,do.doctor_age,do.doctor_degree,do.doctor_affiliations,do.doctor_languages,do.doctor_awards,do.doctor_memberships,do.doctor_office_country,do.password,do.doctor_office_address,do.doctor_office_state,do.doctor_office_city,do.doctor_office_zip,do.specialty,do.terms,do.status,do.display_image,rate.review,rate.date,rate.doctor_id,rate.patient_id,rate.rating,AVG(rate.rating) as avg_rating');
		$this->db->from('doctor as do');
		$this->db->join('rating_doctor as rate', 'FIND_IN_SET(rate.doctor_id, do.id) > 0', 'left ');		
		$this->db->where("do.id" ,$doc_id);				
		$result = $this->db->get(); 
		$query = $result->row(); 
		if(count($query)>0){
			$data1=0;
			$s =base_url(); 			
			if(! empty($query->working_time)){
				$res_data[$query->id]['working_time']=json_decode($query->working_time,TRUE);
				$data1=1;
			}else{
				$res_data[$query->id]['working_time']='none';
			}				
			if(! empty($query->break_time)){
				$res_data[$query->id]['break_time']=json_decode($query->break_time,TRUE);
			}
			if(! empty($query->vacation_time)){
				$res_data[$query->id]['vacation_time']=json_decode($query->vacation_time,TRUE);
			}
			$id=$query->id;
			$array1 = $this->get_doctor_details($id,$second_date,$date);				
			if(!empty($array1)){
				if(is_array($array1)){							
					$i=0;					
					foreach($array1 as $keey=>$valus){
						$res_data[$id]['apntdate'][] = $keey;
						$res_data[$id]['apnttime'][$keey] =$valus;					
					}
				}
			}else{
				$res_data[$id]['apntdate'][]='';			   			   
				$res_data[$id]['apnttime'][]='';
			}	 			
			foreach ($res_data as $key => $value) {					
				if($value['working_time'] != 'none'){
					foreach ($days as  $day) {
						$res_data[$key][$day]['working_time_auto'] = (array_key_exists('working_time',$value) && $value['working_time']!='none')  ? $this->get_working_plan($value['working_time'][$day]) : '';
						$res_data[$key][$day]['break_time_auto'] = (array_key_exists('break_time',$value)) ? $this->get_break_time($value['break_time'][$day]) : '';
						$res_data[$key]['vacation_date_auto'] = (array_key_exists('vacation_time',$value)) ? $this->get_vacation_date($value['vacation_time']) : '';							
					}
				}
			}				
			$data_res ='';
			$s =base_url();																
			foreach ($res_data as $key => $value) {										
				$data_res .='<div class="date-head"><div class="dttime"><ul>';
				$data_res .= $this->date_slide($columns,$date,0,$key,$s);
				$data_res .='</ul></div>';
				$data_res .='<div class="clearfix"></div>';
				$data_res .='</div>';					 
				$data_res .=$this->single_calendar_html($value,$columns,$Day,$date,$s,$key);				
				$data_res .='<div class="clearfix"></div>';									 
			}
			$date_slide= $this->date_slide($columns,$date,0,$key);	  		
			$result_data['success']='success';
			$result_data['date_slide'] = $date_slide;
			$result_data['html'] = $data_res;					  		
			echo json_encode($result_data);				
		}else{
			$data_res = '<div class="error">Sorry, No records found. Please try with different keywords</div>';
			$result_data['success']='Failed';
			$result_data['data'] = $data_res;
			echo json_encode($result_data);
		}
	}
	 function cancel_appoinment($id,$data1){
			$this->db->where('id',$id);
			if($this->db->update('appointment',$data1)){
			return "cancel"; 
			}
	    }
		 function approve_appoinment($id,$data1){
			$this->db->where('id',$id);
			if($this->db->update('appointment',$data1)){
			return "approved"; 
			}
	    }
}
?>