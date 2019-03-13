<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Doctor extends CI_Controller {
	public function __construct() {
		parent::__construct();	
		check_installer();
		$this->load->helper('url','form');	
		$this->load->model('Doctor_Model');	
		$this->load->model('Home_Model');
 	}	
	/*public function index(){		
		$data = array();		
		if(isset($_POST) and !empty($_POST)){
			$data = $_POST;	   
			$result=$this->Doctor_Model->getall_doctorsfiltermap($data);			 	
			$this->load->library('googlemaps');				 
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';		
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<img  class="img-mp-section" src= '.$row->display_image.' >'."".'<h2>'.'Dr.'.$row->doctor_firstname.'</h2>';				
						$this->googlemaps->add_marker($marker);
					}
				}
			}	    
			$template['map'] = $this->googlemaps->create_map();	    		
	     }else{	  
			$result = $this->Doctor_Model->get_latlang();		 
			$this->load->library('googlemaps');	
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';		
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<img  class="img-mp-section" src= '.$row->display_image.' >'."".'<h2>'.'Dr.'.$row->doctor_firstname.'</h2>';				
						$this->googlemaps->add_marker($marker);
					}
				}
			}
			$template['map'] = $this->googlemaps->create_map();	 
		}		  
				 
		if(isset($data['country'])) {
			$template['states'] =$this->loadData($data['country'], 'state');
		}		 
		if(isset($data['state'])) {
			$template['cities'] =$this->loadData($data['state'], 'city');
		}		
		if(isset($data['specialty'])) {
			$template['reasons'] =$this->loadDataReason($data['specialty'], 'reason');
		}
		$template['post_data'] = $data;
		$template['doctors'] =$this->Doctor_Model->getall_doctorsconven($data);			
		$template['days'] = array('mon','tue','wed','thu','fri','sat','sun');
		$template['Days'] = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');				
		$template['countries'] =$this->Doctor_Model->get_countries();	
		$template['languages'] =$this->Doctor_Model->get_languages();
		$template['specialties'] =$this->Doctor_Model->get_specialties();
		$template['insurance'] =$this->Doctor_Model->get_insurance();
		$template['page'] = "filter_doctor";			
		$template['page_title'] = "doctor Page";
		$template['data'] = "doctor page";
		$template['actual_data'] = json_encode($data);			  
		$this->load->view('template', $template);
	}	 
	public function test_calendar_searching(){
		$data = json_decode($_POST['data'],true);			 
		$result = $this->Doctor_Model->getall_doctorscalendar($data);			
		return $result;		  
	}	
	public function filterdoctormap(){		
		$data = $_POST;			
		$result=$this->Doctor_Model->getall_doctorsfiltermap($data);			 			
		$this->load->library('googlemaps');	
		foreach($result as $row){
			if($row->latitude != ""){		
				if($row->longitude != ""){       
					$this->googlemaps->center = $row->latitude.",". $row->longitude;
					$config['zoom'] = 'auto';		
					$this->googlemaps->initialize();		
					$marker = array();		
					$marker['position'] = $row->latitude.",". $row->longitude;
					$marker['infowindow_content']= '<img  class="img-mp-section" src= '.$row->display_image.' >'."".'<h2>'.'Dr.'.$row->doctor_firstname.'</h2>';				
					$this->googlemaps->add_marker($marker);
				}
			}
		}
		$template['map'] = $this->googlemaps->create_map();
		echo $temp = $this->load->view('filterresults_doctormap',$template,true);			 
	}	
	public function filterdoctor(){	
		if(isset($_POST)){
			$data = $_POST;			  
			$template['doctors']=$this->Doctor_Model->getall_doctorsfilter($data);
			$result=$this->Doctor_Model->getall_doctorsfiltermap($data);			  
			$map_data = array();
			$this->load->library('googlemaps');		
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){  	   
						$map_data[] = '{ "DisplayText": "'.$row->doctor_firstname.'", "Location": "'.$row->doctor_office_address.'", "LatitudeLongitude": "'.$row->latitude.','.$row->longitude.'"}';
					}
				}
			}
			$maps = '['.implode(",", $map_data).']';	
			$temp = $this->load->view('filterresults_doctor',$template,true);
		}		 
		foreach($template['doctors'] as $rs){
			$last_id = $rs->id;
		}
		if(count($template['doctors'])==0){
			$last_id =0;
		}		 
		print json_encode(array('total'=>count($template['doctors']),'temp'=>$temp,'last_id'=>$last_id,'map_data'=>$maps));
	}	 
	public function loadmore_doctor(){		
		if(isset($_POST)){				  
			$data = $_POST;			 
			$template['doctors']=$this->Doctor_Model->getall_doctorload($data);			
			$this->load->view('loadmore_doctor',$template);	
		}		
	}	
	public function loadData($loadId = '', $loadType = ''){		
		if(empty($loadId) and empty($loadType)) {
			$loadType=$_POST['loadType'];
			$loadId=$_POST['loadId'];
		}
		$result=$this->Doctor_Model->getData($loadType,$loadId);		
		return $result->result();
	}	 
		
		
		
	
	
	public function calendernavisecond(){		
		$id = $_POST['id'];
		$status = $_POST['status'];
		$dateCnt = $_POST['dateCnt'];		
		$result = $this->Doctor_Model->getall_doctorscalendarnavi($id,$status,$dateCnt);			
		return $result;		
	}
	
	
	public function Storepatient1(){	
		if (isset($_POST) && !empty($_POST)){
			$data = $_POST;
			$id = $data['id'];
			$result = $this->Doctor_Model->update_bklevelone($id,$data);
			if($result){
				echo "loggedIn";
			}else{
				echo "No";	
			}
		}
	}
	public function isEmailExistDoctor($email) {
		$this->load->library('form_validation');
		$this->load->model('Login_Model');
		$doctor_exist = $this->Login_Model->isEmailExistDoctor($email);
		if ($doctor_exist) {
			$this->session->set_flashdata('messagebookdoc',array('message' => 'Email  is already exist ','class' => 'danger'));          
			return false;
		}else {
			return true;
		}
	}	
	public function check_database($password){
		$this->load->model('Login_Model');
		$email = $this->input->post('email');
		$result = $this->Login_Model->Role_login($email, md5($password));
		if ($result){
			$sess_array = array();
			$sess_array = array(
				'id' => $result->id,
				'username' => $result->username
			);
			$this->session->set_userdata('super_person', $result->super_person);
			$this->session->set_userdata('frontend_logged_in', $sess_array);
			return TRUE;
		}else{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}		
	
	 */
	/* Doctor Search Pool Method */
	public function Search(){
		$city_id = $this->uri->segment(3);
		if($_POST){
			if(isset($_POST) && !empty($_POST)){
				$data = $_POST;											
				$map_template['doctors']=$this->Doctor_Model->pushfilter_doctorsearch($data);
				foreach($map_template['doctors'] as $row){
					if($row->latitude != ""){		
						if($row->longitude != ""){       
							$this->googlemaps->center = $row->latitude.",". $row->longitude;
							$config['zoom'] = 'auto';
							$config['apiKey'] = pull_settings()[0]->api_key;
							$this->googlemaps->initialize();		
							$marker = array();		
							$marker['position'] = $row->latitude.",". $row->longitude;
							$marker['infowindow_content']= '<h2>'.'Dr'.$row->doctor_firstname.'</h2>'.'<br><h3>'. $row->doctor_office_address .'</h3>';
							$this->googlemaps->add_marker($marker);
						}
					}
				}	
				$map_template['map'] = $this->googlemaps->create_map();
				if(isset($data['specialty'])) {
					$map_template['reasons'] =$this->loadDataReason($data['specialty'], 'reason');
				}				
				$single_city=$this->Doctor_Model->pull_city($data['latitude'],$data['longitude']);
				$data['main_city'] = $single_city->id;
				$map_template['actual_data'] = json_encode($data);
				$map_template['post_data'] = $data;	
			} 
		}else{	
			if(!isset($city_id)):
				$data['cities_id'] = '-1';
				$data_pass['main_city'] = '-1';
			else:
				$data['cities_id'] = $city_id;
				$data_pass['main_city'] = $city_id;
			endif;
			$map_template['post_data'] = $data_pass;	
			$map_template['doctors']=$this->Doctor_Model->pushfilter_afterdoctorsearch($data);
			foreach($map_template['doctors'] as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';
						$config['apiKey'] = pull_settings()[0]->api_key;
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<h2>'.'Dr.'.$row->doctor_firstname.'</h2>'.'<h5>'. $row->doctor_office_address .'</h5>';
						$this->googlemaps->add_marker($marker);
					}
				}
			}	
			$map_template['map'] = $this->googlemaps->create_map();	
		}
		$map_template['footer_cities'] =$this->Home_Model->pull_footer_cities(6);
		$map_template['days'] = array('mon','tue','wed','thu','fri','sat','sun');
		$map_template['Days'] = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
		$map_template['cities'] =$this->Doctor_Model->pull_cities();
		$map_template['languages'] =$this->Doctor_Model->get_languages();
		$map_template['specialties'] =$this->Doctor_Model->get_specialties();
		$map_template['insurance'] =$this->Doctor_Model->get_insurance();
		$map_template['page'] = "filter_doctor";			
		$map_template['page_title'] = "doctor Page";
		$map_template['data'] = "doctor page";		
		$this->load->view('map_template', $map_template);		
	}
	/*  === Load Reason By Specialty === */
	public function loadDataReason($loadId = '', $loadType = ''){
		if(empty($loadId) and empty($loadType)) {
			if($_POST){
				if(isset($_POST) && !empty($_POST)){
					$data = $_POST;
					$loadType=$data['loadType'];
					$loadId=$data['loadId'];
				}
			}				
        }
		$result=$this->Doctor_Model->getDataReason($loadType,$loadId);
		return $result->result();		
	}
	public function filtersearch_doctor(){	
		if($_POST){
			if(isset($_POST) && !empty($_POST)){
				$data = $_POST;			  
				$map_template['doctors']=$this->Doctor_Model->pushfilter_afterdoctorsearch($data);						 
				$map_data = array();
				$this->load->library('googlemaps');		
				foreach($map_template['doctors'] as $row){
					if($row->latitude != ""){		
						if($row->longitude != ""){  	   
							$map_data[] = '{ "DisplayText": "'.'Dr'.$row->doctor_firstname.'", "Location": "'.$row->doctor_office_address.'", "LatitudeLongitude": "'.$row->latitude.','.$row->longitude.'"}';
						}
					}
				}
				$maps = '['.implode(",", $map_data).']';	
				$temp = $this->load->view('filterresults_doctor',$map_template,true);			 						 
				print json_encode(array('total'=>count($map_template['doctors']),'temp'=>$temp,'map_data'=>$maps));
			}
		}
	}
	/*  === Doctor Profile === */
	public function Profile(){	
		$id = $this->uri->segment(3);		
		$map_template['specialtydetails'] =$this->Doctor_Model->get_specialties();
		$map_template['view_galpic'] =$this->Doctor_Model->get_singlegalpic($id);		
		$map_template['view_doctor'] =$this->Doctor_Model->get_singledoctor($id);
		if(isset($map_template['view_doctor'])&!empty($map_template['view_doctor'])){
			$map_template['review_doctor'] =$this->Doctor_Model->get_singlereview($id);		
			$result = $this->Doctor_Model->get_latlang_doctor($id);		
			$this->load->library('googlemaps');			
			if($result->latitude != ""){		
				if($result->longitude != ""){       
					$this->googlemaps->center = $result->latitude.",". $result->longitude;
					$config['zoom'] = 'auto';		
					$this->googlemaps->initialize();		
					$marker = array();		
					$marker['position'] = $result->latitude.",". $result->longitude;
					$marker['infowindow_content']= '<h2>'.'Dr.'.$result->doctor_firstname.'</h2>'.'<h5>'.$result->doctor_office_address.'</h5>';				
					$this->googlemaps->add_marker($marker);
				}
			}	
			$this->load->model('Home_Model');
			$map_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);	
			$map_template['map'] = $this->googlemaps->create_map();	
			$map_template['page'] = "doctor_profile";
			$map_template['page_title'] = "profile Page";
			$map_template['data'] = "profile page";
			$this->load->view('map_template', $map_template);	
		}else{
			$map_template['page'] = "error_404";
			$map_template['page_title'] = "Error Page";
			$map_template['data'] = "Error page";
			$this->load->view('map_template', $map_template);
		}		
	}
	public function calendernavi(){		
		$id = $_POST['id'];
		$status = $_POST['status'];
		$dateCnt = $_POST['dateCnt'];		
		$result = $this->Doctor_Model->getall_doctorscalendarnavi($id,$status,$dateCnt);			 
		return $result;		
	}
	public function checktimer(){
		if($_POST){
			$current_date = date('Y-m-d H:i');				
			$calculated_date  = strtotime($current_date);
			$data=$_POST;	
			$cal_date = str_replace(' ','+',$data['checkdate']);
			$final_date = explode('+',$cal_date);
			$m_final_date = $final_date[0].' '.$final_date[1];		
			$check_date = strtotime($m_final_date);  	
			if($check_date > $calculated_date){
				echo 'success';
			}else{
				echo "error";
			}
		}	
	}
	public function Booking(){
		if($this->session->userdata('frontend_logged_in')) {
			$id = $this->session->userdata['frontend_logged_in']['id'];
			$template['patientinfo'] =$this->Doctor_Model->get_singlepatient($id);
		}
		$id = $this->uri->segment(3);
		if (isset($_POST['formdocsignup']) && !empty ($_POST['formdocsignup'])){
			$data = $_POST;
			unset ($data['formdocsignup']);
			$this->load->library('form_validation');
			$data['password'] = md5($this->input->post('password'));
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_isEmailExistDoctor'); 
			if ($this->form_validation->run() == TRUE){
				$this->Login_Model->Insert_patient($data);
				$this->session->set_flashdata('messagebookdoc',array('messagebookdoc' => 'Successfully Enrolled.Please Signin to continue booking ','class' => 'success'));
			}else{
				$this->session->set_flashdata('messagebookdoc',array('messagebookdoc' => 'You have Entered Wrong Information ','class' => 'danger'));
			}
		}elseif (isset($_POST['formdocreg']) && !empty ($_POST['formdocreg'])){				
			$data = $_POST;	
			unset ($data['formdocreg']);
			$userid=$this->session->userdata['frontend_logged_in']['id'];		
			$result = $this->Doctor_Model->update_bklevelone($userid,$data);
			if($result){
				$this->session->set_flashdata('messagebookdoc',array('messagebookdoc' => 'Successfully Saved. Click Below Link To Continue ','class' => 'success'));			
			}else{
				$this->session->set_flashdata('messagebookdoc',array('messagebookdoc' => 'Error','class' => 'success'));
			}					
		}						
		$template['book_doctor'] =$this->Doctor_Model->get_singledoctor($id);
		if(isset($template['book_doctor'])&!empty($template['book_doctor'])){
			$this->load->model('Home_Model');		
			$template['insurance'] =$this->Home_Model->get_insurance();
			$template['visitation'] =$this->Home_Model->get_visitation();
			$this->load->model('Home_Model');
			$template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);	
			$template['page'] = "doctor_booking";
			$template['page_title'] = "booking Page";
			$template['data'] = "booking page";
			$this->load->view('template', $template);	
		}else{
			$template['page'] = "error_404";
			$template['page_title'] = "Error Page";
			$template['data'] = "Error page";
			$this->load->view('template', $template);
		}	
	}
	public function updatepatreg(){
		if (isset($_POST) && !empty($_POST)){
			$data = $_POST;
			$id = $data['id'];
			$result = $this->Doctor_Model->update_bklevelone($id,$data);
			if($result){
				echo "loggedIn";
			}else{
				echo "No";	
			}
		}
	}
	public function appointment(){
		if(isset($_POST)){
			$data=$_POST;
			$datafinal['status'] = $data['status'];
			$datafinal['end_time'] = $data['end_time'];
			$datafinal['insurance'] = $data['insurance'];
			$datafinal['ill_reason'] = $data['ill_reason'];
			$datearray=explode ('-',$data['appointment_date']);
			$datafinal['appointment_date'] = trim($datearray[1].'-'.$datearray[2].'-'.$datearray[3]);
			$timearray=explode ('-',$data['appointment_time']);
			$datafinal['appointment_time'] = trim($timearray[0].' '.$timearray[1]);
			$datafinal['doctor_id'] = $data['doctor_id'];	
			$datafinal['patient_id']=$this->session->userdata['frontend_logged_in']['id'];	
			$result = $this->Doctor_Model->book_appointment($datafinal);
			if($result){
				echo "loggedIn";
			}else{
				echo "No";
			}
		}	
	}
	public function appointment_email(){
		
	}
	public function booking_calendar(){
		$id = $_POST['id'];
		$status = 'normal';
		$dateCnt ='';		
		$result = $this->Doctor_Model->getall_doctorscalendarnavianother($id,$status,$dateCnt);
		return $result;
	}
	public function updateinitialbooking(){
		$data = $_POST;				 
		$id=$data['id'];
		unset($data['id']);		
		$result = $this->Doctor_Model->update_bklevelone($id,$data);
		if($result){
			echo "loggedIn";
		}else{
			echo false;
		}	
	}
	
	public function cancelappoinment(){
		$id = $_POST['id'];
		$data1 = array(
						"final_status" => 'Cancelled',
						"status" => 0
		);  
		$result=$this->Doctor_Model->cancel_appoinment($id, $data1);
		if($result == "cancel"){ 
		$result = array('status'  => 'cancel','message'  => 'cancel');
	}
	else{
		$result = array('status'  => 'error','message'  => 'error');
	}
		print json_encode($result);
	}
	
	public function approveappoinment(){
		$id = $_POST['id'];
		$data1 = array(
						"final_status" => 'Approved',
						"status" => 1
		);   
		$result=$this->Doctor_Model->approve_appoinment($id, $data1);
		if($result == "approved"){ 
		$result = array('status'  => 'approved','message'  => 'approved');
	}
	else{
		$result = array('status'  => 'error','message'  => 'error');
	}
		print json_encode($result);
	}
	
	
	
  }
?>