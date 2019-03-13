<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		check_installer();
		$session_data = $this->session->userdata('frontend_logged_in');
		$this->load->helper('url','form','bookmydoc');	
		$this->load->model('Welcome_Model');		
		$this->load->model('Home_Model');
		$this->load->library('paypal_lib');
		if(!$this->session->userdata('frontend_logged_in')) { 
			redirect(base_url());
		 }
 	}	
	/* === Dashboard Redirection === */
	public function index(){
	/***=== Super Persons Role ===***/
		/***=== NO: 1. Doctor Redirection ===***/
		if ($this->session->userdata('super_person') == 1){						
			$id=$this->session->userdata['frontend_logged_in']['id'];
			if($_POST){
				$result = $this->Doctor_Pool($id,$_POST);
			}							
			$search_template['days'] = array('mon','tue','wed','thu','fri','sat','sun');
			$search_template['Days'] = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
			$search_template['doctor_pictures'] =$this->Welcome_Model->get_singledoctorpictures($id);					
			$search_template['doctor_schedule'] =$this->Welcome_Model->get_singledoctorschedule($id);			
			$search_template['doctor_personal'] =$this->Welcome_Model->get_singledoctor($id);		
			$search_template['degree'] =$this->Welcome_Model->get_degree();
			$search_template['affilliation'] =$this->Welcome_Model->get_affilliation();
			$search_template['visitation'] =$this->Welcome_Model->get_visitation();								        
			$search_template['citydetails'] = $this->Welcome_Model->get_checkdoccity($id);
			$search_template['all_package'] = $this->Welcome_Model->get_packages();											
			$search_template['languagesslider'] =$this->Home_Model->get_languages();
			$search_template['specialtiesslider'] =$this->Home_Model->get_specialties();
			$search_template['insuranceslider'] =$this->Home_Model->get_insurance();
			$this->load->model('Home_Model');
			$search_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);
			$search_template['page'] = "Welcome_doctor";
		}
		/***=== NO: 0. Patient Redirection ===***/
		elseif ($this->session->userdata('super_person') == 0){
			$id=$this->session->userdata['frontend_logged_in']['id'];					
			if($_POST){
				$result = $this->Patient_Pool($id,$_POST);
			}			
			$search_template['final_patient_history'] =$this->Welcome_Model->get_patient_history_final($id);
			$search_template['patient_history'] =$this->Welcome_Model->get_patient_history_final($id);
			$search_template['an_patient_history'] =$this->Welcome_Model->get_an_patient_history($id);
			$new_app_pat = array();
			foreach($search_template['patient_history'] as $docpatdetail){				
				$docpatdetail->total = $this->Welcome_Model->get_hospapppat_doctor($docpatdetail->id,$id);
				 $new_app_pat[] = $docpatdetail;
			 }
			$current_date = date('Y-m-d');
			$search_template['an_patientc_history'] =$this->Welcome_Model->get_an_check_patient_history($id,$current_date);
			$new_app_pat = array();
			foreach($search_template['an_patientc_history'] as $docpdatdetail){				
				$docpdatdetail->total = $this->Welcome_Model->get_hospapppat_doctor($docpdatdetail->id,$id);
				$new_app_pat[] = $docpdatdetail;
			}			
			$search_template['patient_personal'] =$this->Welcome_Model->get_singlepatient($id);			
			$search_template['languagesslider'] =$this->Home_Model->get_languages();
			$search_template['specialtiesslider'] =$this->Home_Model->get_specialties();
			$search_template['insuranceslider'] =$this->Home_Model->get_insurance();
			$this->load->model('Home_Model');
			$search_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);
			$search_template['page'] = "Welcome_patient";
		}
		/***=== NO: 2. Clinic Redirection ===***/
		elseif ($this->session->userdata('super_person') == 2){
			$id=$this->session->userdata['frontend_logged_in']['id'];
			if($_POST){ 
				$result = $this->Clinic_Pool($id,$_POST);
			}				
			$search_template['app_doc'] = $this->Welcome_Model->get_appclinic_doctor($id);
			$new_app = array();
			foreach($search_template['app_doc'] as $docdetail){							
				$docdetail->total = $this->Welcome_Model->get_hospappclinic_doctor($docdetail->id);
				$new_app[] = $docdetail;
			}			 
			$new_appall = array();
			foreach($new_app as $ndocdetail){							
				$ndocdetail->totalanother = $this->Welcome_Model->get_hospappclinic_doctorall($ndocdetail->id);
				$new_appall[] = $ndocdetail;
			}
			$search_template['an_patient_history'] =$this->Welcome_Model->get_an_patientagainclinic_history($id);			
			$new_appnew = array();
			foreach($search_template['an_patient_history'] as $ndocdetails){				
				$ndocdetails->totalanother = $this->Welcome_Model->get_hospappclinic_doctorall($ndocdetails->id);
				$new_appnew[] = $ndocdetails;
			}
			$search_template['sub_hospitals'] = $this->Welcome_Model->get_sub_clinic($id);			
			$search_template['hospital_data'] = $this->Welcome_Model->get_singleclinic_hospital($id);
			$search_template['gallery_hospital_pictures'] =$this->Welcome_Model->get_gallery_clinic($id);				
			$search_template['mydoc_hospital'] =$this->Welcome_Model->get_doc_clinics($id);	
			$search_template['degree'] =$this->Welcome_Model->get_degree();
			$search_template['affilliation'] =$this->Welcome_Model->get_affilliation();
			$search_template['visitation'] =$this->Welcome_Model->get_visitation();					        		
			$search_template['amenities'] =$this->Welcome_Model->get_amenities();			        					
			$search_template['all_package'] = $this->Welcome_Model->get_center_packages();				
			$search_template['languagesslider'] =$this->Home_Model->get_languages();
			$search_template['specialtiesslider'] =$this->Home_Model->get_specialties();
			$search_template['insuranceslider'] =$this->Home_Model->get_insurance();
			$this->load->model('Home_Model');
			$search_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);
			$search_template['page'] = "Welcome_clinic";
		}
		/***=== NO: 3. Medical Center Redirection ===***/	
		elseif ($this->session->userdata('super_person') == 3){
			$id=$this->session->userdata['frontend_logged_in']['id'];
			if($_POST){
				$result = $this->Medical_Pool($id,$_POST);
			}				
			$search_template['app_doc'] = $this->Welcome_Model->get_appmedical_doctor($id);			
			$new_app = array();
			foreach($search_template['app_doc'] as $docdetail){				
				$docdetail->total = $this->Welcome_Model->get_hospappmedical_doctor($docdetail->id);
				$new_app[] = $docdetail;
			}			 
			$new_appall = array();
			foreach($new_app as $ndocdetail){				
				$ndocdetail->totalanother = $this->Welcome_Model->get_hospappmedical_doctorall($ndocdetail->id);
				$new_appall[] = $ndocdetail;
			}
			$search_template['an_patient_history'] =$this->Welcome_Model->get_an_patientagainmedical_history($id);			
			$new_appnew = array();
			foreach($search_template['an_patient_history'] as $ndocdetails){				
				$ndocdetails->totalanother = $this->Welcome_Model->get_hospappmedical_doctorall($ndocdetails->id);
				$new_appnew[] = $ndocdetails;
			}
			$search_template['sub_hospitals'] = $this->Welcome_Model->get_sub_medical($id);
			$search_template['hospital_data'] = $this->Welcome_Model->get_singlemedical_hospital($id);
			$search_template['gallery_hospital_pictures'] =$this->Welcome_Model->get_gallery_medicals($id);			
			$search_template['mydoc_hospital'] =$this->Welcome_Model->get_doc_medicals($id);	
			$search_template['degree'] =$this->Welcome_Model->get_degree();
			$search_template['affilliation'] =$this->Welcome_Model->get_affilliation();
			$search_template['visitation'] =$this->Welcome_Model->get_visitation();							
			$search_template['amenities'] =$this->Welcome_Model->get_amenities();								
			$search_template['all_package'] = $this->Welcome_Model->get_center_packages();				
			$search_template['languagesslider'] =$this->Home_Model->get_languages();
			$search_template['specialtiesslider'] =$this->Home_Model->get_specialties();
			$search_template['insuranceslider'] =$this->Home_Model->get_insurance();
			$this->load->model('Home_Model');
			$search_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);
			$search_template['page'] = "Welcome_medical";
		}
		/***=== NO: 4. Hospital Redirection ===***/	
		elseif ($this->session->userdata('super_person') == 4){
			$id=$this->session->userdata['frontend_logged_in']['id'];
			if($_POST){
				$result = $this->Hospital_Pool($id,$_POST);
			}	
			$search_template['app_doc'] = $this->Welcome_Model->get_app_doctor($id);			
			$new_app = array();
			foreach($search_template['app_doc'] as $docdetail){				
				$docdetail->total = $this->Welcome_Model->get_hospapp_doctor($docdetail->id);
				$new_app[] = $docdetail;
			}			 
			$new_appall = array();
			foreach($new_app as $ndocdetail){				
				$ndocdetail->totalanother = $this->Welcome_Model->get_hospapp_doctorall($ndocdetail->id);
				$new_appall[] = $ndocdetail;
			}
			$search_template['an_patient_history'] =$this->Welcome_Model->get_an_patientagain_history($id);			
			$new_appnew = array();
			foreach($search_template['an_patient_history'] as $ndocdetails){				
				$ndocdetails->totalanother = $this->Welcome_Model->get_hospapp_doctorall($ndocdetails->id);
				$new_appnew[] = $ndocdetails;
			}
			$search_template['sub_hospitals'] = $this->Welcome_Model->get_sub_hospital($id);
			$search_template['hospital_data'] = $this->Welcome_Model->get_single_hospital($id);	
			$search_template['gallery_hospital_pictures'] =$this->Welcome_Model->get_gallery_hospitals($id);			
			$search_template['mydoc_hospital'] =$this->Welcome_Model->get_doc_hospitals($id);	
			$search_template['degree'] =$this->Welcome_Model->get_degree();
			$search_template['affilliation'] =$this->Welcome_Model->get_affilliation();
			$search_template['visitation'] =$this->Welcome_Model->get_visitation();									
			$search_template['amenities'] =$this->Welcome_Model->get_amenities();						
			$search_template['all_package'] = $this->Welcome_Model->get_center_packages();				
			$search_template['languagesslider'] =$this->Home_Model->get_languages();
			$search_template['specialtiesslider'] =$this->Home_Model->get_specialties();
			$search_template['insuranceslider'] =$this->Home_Model->get_insurance();
			$this->load->model('Home_Model');
			$search_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);
			$search_template['page'] = "Welcome_hospital";					
		}
		$search_template['cities'] =$this->Home_Model->pull_cities();			
		$search_template['languages'] =$this->Home_Model->get_languages();
		$search_template['specialties'] =$this->Home_Model->get_specialties();
		$search_template['insurance'] =$this->Home_Model->get_insurance();		
		$search_template['page_title'] = "Welcome Page";
		$search_template['data'] = "Welcome page";
		$this->load->view('search_template', $search_template);		
	}
	// Doctor Welcome Page	
	public function Doctor_Pool(){
		$id=$this->session->userdata['frontend_logged_in']['id'];
		if (isset($_POST['doctorsubmit1']) && !empty ($_POST['doctorsubmit1'])){
				$data = $_POST;			
				unset ($data['doctorsubmit1']);
				$this->Welcome_Model->update_doctor($data,$id);				  
				$this->session->set_flashdata('message1',array('message1' => 'Successfully Updated.','class' => 'success'));								
			}elseif (isset($_POST['doctorsubmit2']) && !empty ($_POST['doctorsubmit2'])){
				$data = $_POST;				
				unset ($data['doctorsubmit2']);			
				$this->Welcome_Model->update_doctor($data,$id);				  
				$this->session->set_flashdata('message2',array('message2' => 'Successfully Updated.','class' => 'success'));						
			}elseif (isset($_POST['doctorsubmit3']) && !empty ($_POST['doctorsubmit3'])){
				$data = $_POST;					
				unset ($data['doctorsubmit3']);						
				if($data['new_password'] !== $data['re_password']) {
					$this->session->set_flashdata('message3', array('message3' => 'Password doesn\'t match', 'title' => 'Error !', 'class' => 'danger'));								
				} else {							                                                      
					unset($data['re_password']);						
					$result = $this->Welcome_Model->update_doctor_password($data, $id);
					if($result) {
						if($result === "notexist") {
							$this->session->set_flashdata('message3', array('message3' => 'Entered Current Password Is Invalid', 'title' => 'Warning !', 'class' => 'warning'));									
						}else{							
							$this->session->set_flashdata('message3', array('message3' => 'Password updated successfully', 'title' => 'Success !', 'class' => 'success'));									
						}
					}else {							
						$this->session->set_flashdata('message3', array('message3' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));								
					}
				}										  								
			}elseif (isset($_POST['doctorsubmitgallery1']) & !empty ($_POST['doctorsubmitgallery1'])){
				$data = $_POST;			
				unset ($data['doctorsubmitgallery1']);		
				if (isset($_FILES['image'])){
					$config['upload_path'] = './admin/assets/uploads/doctor/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/doctor/';
						$data['image'] = $config['upload_path'] . $fname;
					}
				}
				$data['doctor_id']=$this->session->userdata['frontend_logged_in']['id'];
				$result = $this->Welcome_Model->update_docgallery_profile($data);				
			}elseif (isset($_POST['doctorcountrysubmit']) & !empty ($_POST['doctorcountrysubmit'])){
				$data = $_POST;			
				unset ($data['doctorcountrysubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('country_name', 'country_name', 'required|callback_isCountryExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagecountry',array('messagecountry' => 'Country is already exist','class' => 'danger'));	
				}else{
					$this->Welcome_Model->add_country($data);				  
					$this->session->set_flashdata('messagecountry',array('messagecountry' => 'Successfully Added.','class' => 'success')); }
			}elseif (isset($_POST['doctorstatesubmit']) & !empty ($_POST['doctorstatesubmit'])){
				$data = $_POST;	               				 
				unset ($data['doctorstatesubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('state_name', 'state_name', 'required|callback_isStateExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagestate',array('messagestate' => 'State is already exist','class' => 'danger'));	
				}else{
					$this->Welcome_Model->add_state($data);				  
					$this->session->set_flashdata('messagestate',array('messagestate' => 'Successfully Added.','class' => 'success')); }	
			}elseif (isset($_POST['doctorcitysubmit']) & !empty ($_POST['doctorcitysubmit'])){
				$data = $_POST;			
				unset ($data['doctorcitysubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('city_name', 'city_name', 'required|callback_isCityExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagecity',array('messagecity' => 'City is already exist','class' => 'danger'));	
				}else{
					$this->Welcome_Model->add_city($data);				  
					$this->session->set_flashdata('messagecity',array('messagecity' => 'Successfully Added.','class' => 'success')); }
			}elseif (isset($_POST['doctorsubmitwork']) & !empty ($_POST['doctorsubmitwork'])){
				unset ($_POST['doctorsubmitwork']);
				$session_data = $this->session->userdata('frontend_logged_in');
				$id=$this->session->userdata['frontend_logged_in']['id'];					 
				$data['working_time'] = json_encode($_POST['work']);								
				$this->Welcome_Model->update_workingtime($id,$data);
				$this->session->set_flashdata('messagework', array('messagework' => 'working time updated successfully', 'title' => 'Success !', 'class' => 'success'));	 
			}elseif (isset($_POST['doctorsubmitbreak']) & !empty ($_POST['doctorsubmitbreak'])){
				unset ($_POST['doctorsubmitbreak']);
				$session_data = $this->session->userdata('frontend_logged_in');
				$id=$this->session->userdata['frontend_logged_in']['id'];					
				$break_time=array();
				$days = array('mon','tue','wed','thu','fri','sat','sun');
				foreach ($days as $key => $value) {
					if(isset($_POST['break'][$value])){
						foreach ($_POST['break'][$value]['start'] as $key => $br_value) {
							$break_time[$value][] = array('start'=>$br_value,'end'=>$_POST['break'][$value]['end'][$key]);
						}
					}else{
						$break_time[$value][] = array('start'=>'','end'=>'');
					}
				}			      
				$data['break_time'] = json_encode($break_time);					
				$this->Welcome_Model->update_workingtime($id,$data);
				$this->session->set_flashdata('messagebreak', array('messagebreak' => 'break time updated successfully', 'title' => 'Success !', 'class' => 'success'));									
			}elseif (isset($_POST['doctorsubmitvacation']) & !empty ($_POST['doctorsubmitvacation'])){
				unset ($_POST['doctorsubmitvacation']);
				$session_data = $this->session->userdata('frontend_logged_in');
				$id=$this->session->userdata['frontend_logged_in']['id'];
				$data['vacation_time'] =array();
				foreach ($_POST['startdate'] as $key => $value) {				
					$data['vacation_time'][] = array('startdate'=>$value,'enddate'=>$_POST['enddate'][$key]);
				}
				$data['vacation_time'] = json_encode($data['vacation_time']);	
				$this->Welcome_Model->update_workingtime($id,$data);
				$this->session->set_flashdata('messagevacation', array('messagevacation' => 'vacation time updated successfully', 'title' => 'Success !', 'class' => 'success'));
			}elseif (isset($_POST['submitpatient1']) & !empty ($_POST['submitpatient1'])){
				$data = $_POST;	
				$id=$this->session->userdata['frontend_logged_in']['id'];
				unset ($data['submitpatient1']);			
				if (isset($_FILES['display_image'])){						
					$config['upload_path'] = './admin/assets/uploads/doctor/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
						if ($this->upload->do_upload('display_image')){
							$file_data = $this->upload->data();
							$fname = $file_data['file_name'];
							$config['upload_path'] = 'assets/uploads/doctor/';
							$data['display_image']=$config['upload_path'].$fname;							
						}
					}					
				$result = $this->Welcome_Model->update_doctor_image($data,$id);	
				if($result){
					redirect(base_URL().'Welcome');
				}
			}elseif (isset($_POST['package_id']) & !empty ($_POST['package_id'])){				
				$data = $_POST;	
				$data['doctor_id']=$this->session->userdata['frontend_logged_in']['id'];
				$last_id=$this->Welcome_Model->insert_package($data);
				if($last_id){
					redirect(base_URL() . 'Welcome/buy_package/'.$last_id);
				}else{
					echo "error";
				}
			}
	}
	// Patient Welcome Page
	public function Patient_Pool(){
		$id=$this->session->userdata['frontend_logged_in']['id'];
		if (isset($_POST['submitpatient1']) & !empty ($_POST['submitpatient1'])){
			$data = $_POST;			
			unset ($data['submitpatient1']);			
			if (isset($_FILES['patient_display_image'])){ 						
				$config['upload_path'] = './admin/uploads/patient/';
				$config['overwrite'] = TRUE;
				$config['allowed_types'] = '*';
				$config['max_size'] = '800';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('patient_display_image')){
					$file_data = $this->upload->data();
					$fname = $file_data['file_name'];
					$config['upload_path'] = 'uploads/patient/';
					$data['patient_display_image']=$config['upload_path'].$fname;							
				}
			}					
			$result = $this->Welcome_Model->update_patient($id,$data);
			if($result){
				$this->session->set_flashdata('messagepatient1',array('messagepatient1' => 'Successfully Updated.','class' => 'success'));								
			}
		}elseif (isset($_POST['rating_doctor']) & !empty ($_POST['rating_doctor'])){
			$data = $_POST;			
			unset ($data['rating_doctor']);
			$data['rating'] = $data['score'];
			unset ($data['score']);
			$data['patient_id']=$id;
			$data['date'] = date('y-m-d');			
			$result = $this->Welcome_Model->update_rating_doctor($data);
			if($result){
				$this->session->set_flashdata('messageratedoc',array('messageratedoc' => 'Successfully Rated.','class' => 'success'));								
			}
		}elseif (isset($_POST['submitpatient2']) & !empty ($_POST['submitpatient2'])){
			$data = $_POST;			
			unset ($data['submitpatient2']);
			$this->load->helper(array('form'));	          
			$this->Welcome_Model->update_patient($id,$data);				  
			$this->session->set_flashdata('messagepatient1',array('messagepatient1' => 'Successfully Updated.','class' => 'success'));											
		}elseif (isset($_POST['submitpatient3']) & !empty ($_POST['submitpatient3'])){
			$data = $_POST;			
			unset ($data['submitpatient3']);				
			if($data['new_password'] !== $data['re_password']){
				$this->session->set_flashdata('messagepatient1', array('messagepatient1' => 'Password doesn\'t match', 'title' => 'Error !', 'class' => 'danger'));								
			} else {							                                                      
				unset($data['re_password']);						
				$result = $this->Welcome_Model->update_patient_password($data, $id);
				if($result) {
					if($result === "notexist") {
						$this->session->set_flashdata('messagepatient1', array('messagepatient1' => 'Entered Current Password Is Invalid', 'title' => 'Warning !', 'class' => 'warning'));				
					} else {							
						$this->session->set_flashdata('messagepatient1', array('messagepatient1' => 'Password updated successfully', 'title' => 'Success !', 'class' => 'success'));									
					}
				}else {							
						$this->session->set_flashdata('messagepatient1', array('messagepatient1' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));								
				}
			}					
		}
	}
	// Clinic Welcome Page
	public function Clinic_Pool(){
		$id=$this->session->userdata['frontend_logged_in']['id'];
		if(isset($_POST) & !empty($_POST)){
			if(isset($_POST['hospital_addition']) && !empty($_POST['hospital_addition'])){
				$data = $_POST;
				unset($data['hospital_addition']);				
				$data['password'] = md5($this->input->post('password'));				
				$data['parent_id'] = $id;
				$data['type_selection'] ="subclinic";
				$this->load->library('form_validation');
				$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_isEmailExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedash1',array('messagedash1' => 'Email is already exist','class' => 'danger'));	
				}else{	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}													
					$result = $this->Welcome_Model->add_clinic($data);
					if($result){
						redirect(base_url().'Welcome');	
						$this->session->set_flashdata('messagedash1', array('messagedash1' => 'Clinic Added successfully', 'title' => 'Success !', 'class' => 'success'));               				 
					}else{
						$this->session->set_flashdata('messagedash1', array('messagedash1' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
					}
				}
			}else if(isset ($_POST['hospital_updation']) && !empty($_POST['hospital_updation'])){				
				$org_id=$_POST['subid'];
				$data = $_POST;
				unset($data['hospital_updation']);
				unset($data['subid']);
				if (isset($_FILES['display_image'])){	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}
				}						
				$result = $this->Welcome_Model->update_clinics($data,$org_id);
				if($result){
					redirect(base_url().'Welcome');	
					$this->session->set_flashdata('messagedash2', array('messagedash2' => 'Clinics Updated successfully', 'title' => 'Success !', 'class' => 'success'));	
				}else{
					$this->session->set_flashdata('messagedash2', array('messagedash2' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}						
			}else if(isset ($_POST['hospital-doc_addition']) && !empty($_POST['hospital-doc_addition'])){
				$data = $_POST;
				unset($data['hospital-doc_addition']);
				$data['password'] = md5($this->input->post('password'));
				$data['clinic_id'] = $id;
				$data['type_selection']= 'clinic';
				$this->load->library('form_validation');
				$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_isEmailExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedash1',array('messagedash1' => 'Email is already exist','class' => 'danger'));	
				}else{	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}													
					$result = $this->Welcome_Model->add_clinic_doc($data);				
					if($result){					  	
						$this->session->set_flashdata('messagedash3', array('messagedash3' => 'Doctor Added successfully', 'title' => 'Success !', 'class' => 'success'));
						redirect(base_url().'Welcome');               				 
					}else{
						$this->session->set_flashdata('messagedash3', array('messagedash3' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
					}
				}
			}else if(isset ($_POST['hospital-doc_updation']) && !empty($_POST['hospital-doc_updation'])){
				$org_id=$_POST['subid'];
				$data = $_POST;
				$data['type_selection']= 'hospital';
				unset($data['hospital-doc_updation']);
				unset($data['subid']);
				if (isset($_FILES['display_image'])){	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}
				}						
				$result = $this->Welcome_Model->update_clinics_doc($data,$org_id);
				if($result){
					redirect(base_url().'Welcome');	
					$this->session->set_flashdata('messagedash4', array('messagedash4' => 'Doctor Updated successfully', 'title' => 'Success !', 'class' => 'success'));	
				}else{
					$this->session->set_flashdata('messagedash4', array('messagedash4' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}				
			}elseif (isset($_POST['doctorcountrysubmit']) & !empty ($_POST['doctorcountrysubmit'])){
				$data = $_POST;			
				unset ($data['doctorcountrysubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('country_name', 'country_name', 'required|callback_isCountryExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Country is already exist','class' => 'danger'));	
				}else{	
					$this->Welcome_Model->add_country($data);				  
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Successfully Added.','class' => 'success'));
				}
			}elseif (isset($_POST['doctorstatesubmit']) & !empty ($_POST['doctorstatesubmit'])){
				$data = $_POST;	               				 
				unset ($data['doctorstatesubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('state_name', 'state_name', 'required|callback_isStateExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'State is already exist','class' => 'danger'));	
				}else{
					$this->Welcome_Model->add_state($data);				  
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Successfully Added.','class' => 'success'));	}
			}elseif (isset($_POST['doctorcitysubmit']) & !empty ($_POST['doctorcitysubmit'])){
				$data = $_POST;			
				unset ($data['doctorcitysubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('city_name', 'city_name', 'required|callback_isCityExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'City is already exist','class' => 'danger'));	
				}else{
					$this->Welcome_Model->add_city($data);				  
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Successfully Added.','class' => 'success'));
				}				
			}elseif (isset($_POST['hospital-self']) & !empty ($_POST['hospital-self'])){
				$data = $_POST;			
				unset ($data['hospital-self']);
				if (isset($_FILES['display_image'])){	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}
				}						
				$result = $this->Welcome_Model->update_clinic_single($id,$data);
				if($result){
					redirect(base_url().'Welcome');	
					$this->session->set_flashdata('messagedashhogg', array('messagedashhogg' => 'Clinic Updated successfully', 'title' => 'Success !', 'class' => 'success'));	
				}else{
					$this->session->set_flashdata('messagedashhogg', array('messagedashhogg' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}
			}elseif (isset($_POST['hospital-self-check']) & !empty ($_POST['hospital-self-check'])){
				$data = $_POST;			
				unset ($data['hospital-self-check']);
				$emailhosp = $data['email']; 			
				if($data['new_password'] !== $data['re_password']) {
					$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Password doesn\'t match', 'title' => 'Error !', 'class' => 'danger'));								
				} else {							                                                      
					unset($data['re_password']);						
					$result = $this->Welcome_Model->update_clinic_password($data,$id,$emailhosp);
					if($result) {
						if($result === "notexist") {
							$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Entered Current Password Is Invalid', 'title' => 'Warning !', 'class' => 'warning'));
						} else {							
							$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Password updated successfully', 'title' => 'Success !', 'class' => 'success'));
							redirect(base_url().'Welcome');		   
						}
					}else {							
						$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));								
					}
				}	  				
			}elseif (isset($_POST['hospital_additional-feat']) & !empty ($_POST['hospital_additional-feat'])){
				$data = $_POST;			
				unset ($data['hospital_additional-feat']);				
				$result = $this->Welcome_Model->update_additionalclinic_feat($data,$id);  
				if($result){
					$this->session->set_flashdata('messagedashfeat', array('messagedashfeat' => 'Updated Successfully', 'title' => 'Success !', 'class' => 'success'));	
					redirect(base_url().'Welcome');
				}else{					  
					$this->session->set_flashdata('messagedashfeat', array('messagedashfeat' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}				  
			}elseif (isset($_POST['package_id']) & !empty ($_POST['package_id'])){
				$data = $_POST;	
				$data['hospital_id']=$this->session->userdata['frontend_logged_in']['id'];
				$last_id=$this->Welcome_Model->insert_center_package($data);
				if($last_id){
					redirect(base_URL() . 'Welcome/buy_package/'.$last_id);
				}
			}elseif (isset($_POST['doctorsubmitgallery1_hospital']) & !empty ($_POST['doctorsubmitgallery1_hospital'])){
				$data = $_POST;			
				unset ($data['doctorsubmitgallery1_hospital']);		
				if (isset($_FILES['image'])){
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['image'] = $config['upload_path'] . $fname;
					}
				}
				$data['clinic_id']=$this->session->userdata['frontend_logged_in']['id'];
				$result = $this->Welcome_Model->update_clinicgallery_profile($data);
			}
		}
	}
	// Medical Welcome Page
	public function Medical_Pool(){
		$id=$this->session->userdata['frontend_logged_in']['id'];
		if(isset($_POST) & !empty($_POST)){
			if(isset($_POST['hospital_addition']) && !empty($_POST['hospital_addition'])){
				$data = $_POST;
				unset($data['hospital_addition']);
				$data['password'] = md5($this->input->post('password'));
				$data['parent_id'] = $id;
				$data['type_selection'] ="submedical";
				$this->load->library('form_validation');
				$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_isEmailExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedash1',array('messagedash1' => 'Email is already exist','class' => 'danger'));	
				}else{	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}													
					$result = $this->Welcome_Model->add_medical($data);
					if($result){
						redirect(base_url().'Welcome');	
						$this->session->set_flashdata('messagedash1', array('messagedash1' => 'Medical Added successfully', 'title' => 'Success !', 'class' => 'success'));               				 
					}else{
						$this->session->set_flashdata('messagedash1', array('messagedash1' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
					}
				}
			}else if(isset ($_POST['hospital_updation']) && !empty($_POST['hospital_updation'])){				
				$org_id=$_POST['subid'];
				$data = $_POST;
				unset($data['hospital_updation']);
				unset($data['subid']);
				if (isset($_FILES['display_image'])){	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}
				}						
				$result = $this->Welcome_Model->update_medical($data,$org_id);
					if($result){
						redirect(base_url().'Welcome');	
						$this->session->set_flashdata('messagedash2', array('messagedash2' => 'Medical Updated successfully', 'title' => 'Success !', 'class' => 'success'));	
					}else{
						$this->session->set_flashdata('messagedash2', array('messagedash2' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
					}						
			}else if(isset ($_POST['hospital-doc_addition']) && !empty($_POST['hospital-doc_addition'])){
				$data = $_POST;
				unset($data['hospital-doc_addition']);
				$data['type_selection']= 'medical';
				$data['password'] = md5($this->input->post('password'));
				$data['medical_id'] = $id;				
				$this->load->library('form_validation');
				$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_isEmailExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedash1',array('messagedash1' => 'Email is already exist','class' => 'danger'));	
				}else{	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}													
					$result = $this->Welcome_Model->add_medical_doc($data);				
					if($result){					  	
						$this->session->set_flashdata('messagedash3', array('messagedash3' => 'Doctor Added successfully', 	'title' => 'Success !', 'class' => 'success'));
						redirect(base_url().'Welcome');               				 
					}else{
						$this->session->set_flashdata('messagedash3', array('messagedash3' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
					}
				}
			}else if(isset ($_POST['hospital-doc_updation']) && !empty($_POST['hospital-doc_updation'])){
				$org_id=$_POST['subid'];
				$data = $_POST;
				$data['type_selection']= 'medical';
				unset($data['hospital-doc_updation']);
				unset($data['subid']);
				if (isset($_FILES['display_image'])){	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}
				}						
				$result = $this->Welcome_Model->update_medical_doc($data,$org_id);
				if($result){						
					$this->session->set_flashdata('messagedash4', array('messagedash4' => 'Doctor Updated successfully', 'title' => 'Success !', 'class' => 'success'));
					redirect(base_url().'Welcome');					 
				}else{
					$this->session->set_flashdata('messagedash4', array('messagedash4' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}				
			}elseif (isset($_POST['doctorcountrysubmit']) & !empty ($_POST['doctorcountrysubmit'])){
				$data = $_POST;			
				unset ($data['doctorcountrysubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('country_name', 'country_name', 'required|callback_isCountryExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Country is already exist','class' => 'danger'));	
				}else{	
					$this->Welcome_Model->add_country($data);				  
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Successfully Added.','class' => 'success'));
				}
			}elseif (isset($_POST['doctorstatesubmit']) & !empty ($_POST['doctorstatesubmit'])){
				$data = $_POST;	               				 
				unset ($data['doctorstatesubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('state_name', 'state_name', 'required|callback_isStateExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'State is already exist','class' => 'danger'));	
				}else{
					$this->Welcome_Model->add_state($data);				  
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Successfully Added.','class' => 'success'));	}
			}elseif (isset($_POST['doctorcitysubmit']) & !empty ($_POST['doctorcitysubmit'])){
				$data = $_POST;			
				unset ($data['doctorcitysubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('city_name', 'city_name', 'required|callback_isCityExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'City is already exist','class' => 'danger'));	
				}else{
					$this->Welcome_Model->add_city($data);				  
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Successfully Added.','class' => 'success'));
				}				
			}elseif (isset($_POST['hospital-self']) & !empty ($_POST['hospital-self'])){
				$data = $_POST;			
				unset ($data['hospital-self']);
				if (isset($_FILES['display_image'])){	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}
				}						
				$result = $this->Welcome_Model->update_medical_single($id,$data);
				if($result){
					redirect(base_url().'Welcome');	
					$this->session->set_flashdata('messagedashhogg', array('messagedashhogg' => 'Medical Updated successfully', 'title' => 'Success !', 'class' => 'success'));	
				}else{
					$this->session->set_flashdata('messagedashhogg', array('messagedashhogg' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}
			}elseif (isset($_POST['hospital-self-check']) & !empty ($_POST['hospital-self-check'])){
				$data = $_POST;			
				unset ($data['hospital-self-check']);
				$emailhosp = $data['email']; 			
				if($data['new_password'] !== $data['re_password']) {
					$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Password doesn\'t match', 'title' => 'Error !', 'class' => 'danger'));								
				} else {							                                                      
					unset($data['re_password']);						
					$result = $this->Welcome_Model->update_medical_password($data,$id,$emailhosp);
					if($result) {
						if($result === "notexist") {
							$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Entered Current Password Is Invalid', 'title' => 'Warning !', 'class' => 'warning'));						
						} else {							
							$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Password updated successfully', 'title' => 'Success !', 'class' => 'success'));
							redirect(base_url().'Welcome');		   
						}
					}else {							
						$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));								
					}
				}	  				
			}elseif (isset($_POST['hospital_additional-feat']) & !empty ($_POST['hospital_additional-feat'])){
				$data = $_POST;			
				unset ($data['hospital_additional-feat']);							  
				$result = $this->Welcome_Model->update_additionalmedical_feat($data,$id);  
				if($result){
					$this->session->set_flashdata('messagedashfeat', array('messagedashfeat' => 'Updated Successfully', 'title' => 'Success !', 'class' => 'success'));	
					redirect(base_url().'Welcome');
				}else{					  
					$this->session->set_flashdata('messagedashfeat', array('messagedashfeat' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}				  
			}elseif (isset($_POST['package_id']) & !empty ($_POST['package_id'])){
				$data = $_POST;		
				$data['hospital_id']=$this->session->userdata['frontend_logged_in']['id'];
				$last_id=$this->Welcome_Model->insert_center_package($data);
				if($last_id){
					redirect(base_URL() . 'Welcome/buy_package/'.$last_id);
				}
			}elseif (isset($_POST['doctorsubmitgallery1_hospital']) & !empty ($_POST['doctorsubmitgallery1_hospital'])){
				$data = $_POST;			
				unset ($data['doctorsubmitgallery1_hospital']);		
				if (isset($_FILES['image'])){
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['image'] = $config['upload_path'] . $fname;
					}
				}
				$data['medical_id']=$this->session->userdata['frontend_logged_in']['id'];
				$result = $this->Welcome_Model->insert_medical_gallery($data);
			}				
		}
	}
	// Hospital Welcome Page
	public function Hospital_Pool(){
		$id=$this->session->userdata['frontend_logged_in']['id'];
		if(isset($_POST) & !empty($_POST)){
			if(isset($_POST['hospital_addition']) && !empty($_POST['hospital_addition'])){
				$data = $_POST;
				unset($data['hospital_addition']);
				$data['password'] = md5($this->input->post('password'));
				$data['parent_id'] = $id;
				$data['type_selection'] ="subhospital";
				$this->load->library('form_validation');
				$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_isEmailExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedash1',array('messagedash1' => 'Email is already exist','class' => 'danger'));	
				}else{	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}									
					$result = $this->Welcome_Model->add_hospital($data);
					if($result){
						redirect(base_url().'Welcome');	
						$this->session->set_flashdata('messagedash1', array('messagedash1' => 'Hospital Added successfully', 'title' => 'Success !', 'class' => 'success'));               				 
					}else{
						$this->session->set_flashdata('messagedash1', array('messagedash1' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
					}
				}
			}else if(isset ($_POST['hospital_updation']) && !empty($_POST['hospital_updation'])){				
				$org_id=$_POST['subid'];
				$data = $_POST;
				unset($data['hospital_updation']);
				unset($data['subid']);
				if (isset($_FILES['display_image'])){	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}
				}						
				$result = $this->Welcome_Model->update_hospitals($data,$org_id);
				if($result){
					redirect(base_url().'Welcome');	
					$this->session->set_flashdata('messagedash2', array('messagedash2' => 'Hospital Updated successfully', 'title' => 'Success !', 'class' => 'success'));	
				}else{
					$this->session->set_flashdata('messagedash2', array('messagedash2' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}						
			}else if(isset ($_POST['hospital-doc_addition']) && !empty($_POST['hospital-doc_addition'])){
				$data = $_POST;
				unset($data['hospital-doc_addition']);
				$data['type_selection']= 'hospital';
				$data['password'] = md5($this->input->post('password'));
				$data['hospital_id'] = $id;				
				$this->load->library('form_validation');
				$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_isEmailExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedash1',array('messagedash1' => 'Email is already exist','class' => 'danger'));	
				}else{	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}				
					$result = $this->Welcome_Model->add_hospital_doc($data);				
					if($result){					  	
						$this->session->set_flashdata('messagedash3', array('messagedash3' => 'Doctor Added successfully', 'title' => 'Success !', 'class' => 'success'));
						redirect(base_url().'Welcome');               				 
					}else{
						$this->session->set_flashdata('messagedash3', array('messagedash3' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
					}
				}
			}else if(isset ($_POST['hospital-doc_updation']) && !empty($_POST['hospital-doc_updation'])){
				$org_id=$_POST['subid'];
				$data = $_POST;
				$data['type_selection']= 'hospital';
				unset($data['hospital-doc_updation']);
				unset($data['subid']);
				if (isset($_FILES['display_image'])){	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}
				}						
				$result = $this->Welcome_Model->update_hospitals_doc($data,$org_id);
				if($result){
					redirect(base_url().'Welcome');	
					$this->session->set_flashdata('messagedash4', array('messagedash4' => 'Doctor Updated successfully', 'title' => 'Success !', 'class' => 'success'));	
				}else{
					$this->session->set_flashdata('messagedash4', array('messagedash4' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}				
			}elseif (isset($_POST['doctorcountrysubmit']) & !empty ($_POST['doctorcountrysubmit'])){
				$data = $_POST;				
				unset ($data['doctorcountrysubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('country_name', 'country_name', 'required|callback_isCountryExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Country is already exist','class' => 'danger'));	
				}else{	
					$this->Welcome_Model->add_country($data);				  
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Successfully Added.','class' => 'success'));
				}
			}elseif (isset($_POST['doctorstatesubmit']) & !empty ($_POST['doctorstatesubmit'])){
				$data = $_POST;	               				 
				unset ($data['doctorstatesubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('state_name', 'state_name', 'required|callback_isStateExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'State is already exist','class' => 'danger'));	
				}else{
					$this->Welcome_Model->add_state($data);				  
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Successfully Added.','class' => 'success'));	}
			}elseif (isset($_POST['doctorcitysubmit']) & !empty ($_POST['doctorcitysubmit'])){
				$data = $_POST;			
				unset ($data['doctorcitysubmit']);
				$this->load->library('form_validation');
				$this->form_validation->set_rules('city_name', 'city_name', 'required|callback_isCityExist'); 
				if ($this->form_validation->run() == FALSE){	
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'City is already exist','class' => 'danger'));	
				}else{
					$this->Welcome_Model->add_city($data);				  
					$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'Successfully Added.','class' => 'success'));
				}
			}elseif (isset($_POST['hospital-self']) & !empty ($_POST['hospital-self'])){
				$data = $_POST;			
				unset ($data['hospital-self']);			
				if (isset($_FILES['display_image'])){	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('display_image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['display_image']=$config['upload_path'].$fname;							
					}
				}					
				$result = $this->Welcome_Model->update_hospital_single($id,$data);
				if($result){
					redirect(base_url().'Welcome');	
					$this->session->set_flashdata('messagedashhogg', array('messagedashhogg' => 'Hospital Updated successfully', 'title' => 'Success !', 'class' => 'success'));	
				}else{
					$this->session->set_flashdata('messagedashhogg', array('messagedashhogg' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}
			}elseif (isset($_POST['hospital-self-check']) & !empty ($_POST['hospital-self-check'])){
				$data = $_POST;			
				unset ($data['hospital-self-check']);
				$emailhosp = $data['email']; 			
				if($data['new_password'] !== $data['re_password']) {
					$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Password doesn\'t match', 'title' => 'Error !', 'class' => 'danger'));								
				} else {							                                                      
					unset($data['re_password']);						
					$result = $this->Welcome_Model->update_hospital_password($data,$id,$emailhosp);
					if($result) {
						if($result === "notexist") {
							$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Entered Current Password Is Invalid', 'title' => 'Warning !', 'class' => 'warning'));	
						} else {							
							$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Password updated successfully', 'title' => 'Success !', 'class' => 'success'));
							redirect(base_url().'Welcome');		   
						}
					}else {							
						$this->session->set_flashdata('messagedashhogg2', array('messagedashhogg2' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));								
					}
				}	  				 
			}elseif (isset($_POST['hospital_additional-feat']) & !empty ($_POST['hospital_additional-feat'])){
				$data = $_POST;			
				unset ($data['hospital_additional-feat']);			
				$result = $this->Welcome_Model->update_additional_feat($data,$id);  
				if($result){
					$this->session->set_flashdata('messagedashfeat', array('messagedashfeat' => 'Updated Successfully', 'title' => 'Success !', 'class' => 'success'));	
					redirect(base_url().'Welcome');
				}else{					  
					$this->session->set_flashdata('messagedashfeat', array('messagedashfeat' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}				  
			}elseif(isset($_POST['doctorsubmitgallery1_hospital']) & !empty ($_POST['doctorsubmitgallery1_hospital'])){
				$data = $_POST;
				unset ($data['doctorsubmitgallery1_hospital']);			
				if (isset($_FILES['image'])){	
					$config['upload_path'] = './admin/assets/uploads/';
					$config['overwrite'] = TRUE;
					$config['allowed_types'] = '*';
					$config['max_size'] = '800';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('image')){
						$file_data = $this->upload->data();
						$fname = $file_data['file_name'];
						$config['upload_path'] = 'assets/uploads/';
						$data['image']=$config['upload_path'].$fname;							
					}
				}					
				$result = $this->Welcome_Model->insert_hospital_gallery($data);
				if($result){
					$this->session->set_flashdata('messagedashgallery', array('messagedashgallery' => 'Gallery Picture Inserted Successfully', 'title' => 'Success !', 'class' => 'success'));	
					redirect(base_url().'Welcome');
				}else{					  
					$this->session->set_flashdata('messagedashgallery', array('messagedashgallery' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));	
				}
			}elseif (isset($_POST['package_id']) & !empty ($_POST['package_id'])){
				$data = $_POST;	
				$data['hospital_id']=$this->session->userdata['frontend_logged_in']['id'];
				$last_id=$this->Welcome_Model->insert_center_package($data);
				if($last_id){
					redirect(base_URL() . 'Welcome/buy_package/'.$last_id);
				}
			}
		}
	}
	// Email-Country-State-City Existing checker Page
	public function isEmailExist($email) {
		$this->load->library('form_validation');    
		$doctor_exist = $this->Welcome_Model->isEmailExist($email);	
		if ($doctor_exist) {
			$this->session->set_flashdata('messagepatient1',array('messagepatient1' => 'Email  is already exist ','class' => 'danger'));			  
			return false;
		}else {
			return true;
		}
	}
	public function isCountryExist($country_name){		
		$this->load->library('form_validation');    
		$country_exist = $this->Welcome_Model->isCountryExist($country_name);	
		if ($country_exist) {
			$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'country is already exist ','class' => 'danger'));          
			return false;
		}else {
			return true;
		}
	}
	public function isStateExist($state_name){
		$this->load->library('form_validation');    
		$state_exist = $this->Welcome_Model->isStateExist($state_name);	
		if ($state_exist) {
			$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'state is already exist ','class' => 'danger'));			  
			return false;
		}else {
			return true;
		}
	}
	public function isCityExist($city_name){
		$this->load->library('form_validation');    
		$city_exist = $this->Welcome_Model->isCityExist($city_name);	
		if ($city_exist) {
			$this->session->set_flashdata('messagedashloc',array('messagedashloc' => 'city is already exist ','class' => 'danger'));			  
			return false;
		}else {
			return true;
		}
	}
	/* === Get Calendar Method === */
	public function getCalender(){
		$_POST['year'];	
		$_POST['month'];
		$result = $this->Welcome_Model->getcalendar($_POST);
		return 	$result;	
	}
	/* === Get Events Method === */
	public function getEvents(){
		$_POST['year'];	
		$result = $this->Welcome_Model->getevents($_POST);
		return 	$result;		
	}
	/* === Get Doctor Calendar Method === */
	public function checkappdate(){				
		$id=$this->session->userdata['frontend_logged_in']['id'];
		if (!empty($_REQUEST['year']) && !empty($_REQUEST['month'])) {    
			$result = $this->Welcome_Model->getappdate($id);
			$dates = array();	
			foreach ($result as $resdetail){		
				$date = date('Y-m-d',strtotime($resdetail->appointment_date));		
				$dates[] = array(
							"date" => $date,
							"badge" => false,
							"title" => '"'.$resdetail->patient_firstname.'"',
							'body' => '
							<p class="lead">Patient Name: "'.$resdetail->patient_firstname.'"</p>
							<p>You can add <strong>html</strong> in this block</p>
							',            
						);
				if (!empty($_REQUEST['grade'])) {
					$dates[$i]['badge'] = false;
					$dates[$i]['classname'] = 'grade-' . rand(1, 4);
				}
				if (!empty($_REQUEST['action'])) {
					$dates[$i]['title'] = 'Action for ' . $date;
					$dates[$i]['body'] = '<p>The footer of this modal window consists of two buttons. One button to close the modal window without further action.</p>';
					$dates[$i]['body'] .= '<p>The other button [Go ahead!] fires myFunction(). The content for the footer was obtained with the AJAX request.</p>';
					$dates[$i]['body'] .= '<p>The ID needed for the function can be retrieved with jQuery: <code>dateId = $(this).closest(\'.modal\').attr(\'dateId\');</code></p>';
					$dates[$i]['body'] .= '<p>The second argument is true in this case, so the function can handle closing the modal window: <code>myFunction(dateId, true);</code></p>';
					$dates[$i]['footer'] = '
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="dateId = $(this).closest(\'.modal\').attr(\'dateId\'); myDateFunction(dateId, true);">Go ahead!</button>
					';
				}
			}
			echo json_encode($dates);
		} else {
			echo json_encode(array());
		}		
	}
	public function getmultiple(){
		$id=$this->session->userdata['frontend_logged_in']['id'];
		if(isset($_POST)){
			$data = $_POST;
			$date = $data['date'];
			$result['data'] = $this->Welcome_Model->getanotherappdate($date,$id);		
			return $this->load->view("getcalendar.php",$result);		
		}
	}
	/* === Remove Method === */
	public function doctorap_remove(){	
			$data = $_POST;
			$id = $data['id'];
			if($this->Welcome_Model->remove_apdoctor($id)){
				return "success";
			}				
	}
	public function doctorap_remove_another(){
		$data = $_POST;
		$id = $data['id'];
		if($this->Welcome_Model->remove_apdoctor_another($id)){
			return "success";
		}
	}	
	/* === Patient PDF Method === */
	public function pdf(){
		$id = $this->uri->segment(3);		
		$result= $this->Welcome_Model->get_checkpdfsingleappointment($id);		
		pdffunc();
		if($result) {
			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial','B',18);
			$pdf->Write(20,'BOOKMYDOC INVOICE DETAILS');
			$pdf->Ln();
			$pdf->SetFont('Arial','B',10);
			$pdf->Write(10,'Appointment Details:');
			$pdf->Ln();
			$pdf->SetFont('Arial','B',8);
			$pdf->Write(3,'Appointment Date:');
			$pdf->Write(3,$result->appointment_date);
			$pdf->Ln();
			$pdf->Write(3,'Appointment time:');
			$pdf->Write(3,$result->appointment_time);
			$pdf->Ln();
			$pdf->Write(3,'Reason for visitation:');
			$pdf->Write(3,$result->reason );
			$pdf->Ln();
			$pdf->SetFont('Arial','B',10);
			$pdf->Write(10,'Patient Details:');
			$pdf->Ln();
			$pdf->SetFont('Arial','B',8);
			$pdf->Write(3,'Patient Name:');
			$pdf->Write(3,$result->patient_firstname .' '.$result->patient_lastname);
			$pdf->Ln();
			$pdf->Write(3,'Patient Insurance:');
			$pdf->Write(3,$result->insurance_name);
			$pdf->Ln();
			$pdf->SetFont('Arial','B',10);
			$pdf->Write(10,'Doctor Details:');
			$pdf->Ln();
			$pdf->SetFont('Arial','B',8);
			$pdf->Write(3,'Doctor Name:');
			$pdf->Write(3,$result->doctor_firstname.' '.$result->doctor_lastname);
			$pdf->Ln();
			$pdf->Write(3,'Doctor Specialization:');
			$pdf->Write(3,$result->specialty_name);
			$pdf->Ln();
			$pdf->Write(3,'Doctor Address:');
			$pdf->Write(3,$result->doctor_office_address);
			$pdf->Ln();
			$pdf->Write(3,$result->city_name .' '.$result->state_name);
			$pdf->Ln();
			$pdf->Write(3,$result->country_name .' '.$result->doctor_office_zip);
			$pdf->Ln();
			$pdf->Write(3,'Doctor Email:');
			$pdf->Ln();
			$pdf->Write(3,$result->doc_email);
			$pdf->Ln();
			$pdf->Output();	
		}else{
			echo 'Permission Restricted';
		}	
	}
	/* === Hospital PDF Method === */
	public function pdf_hosp(){
		$id=$this->session->userdata['frontend_logged_in']['id'];			
		$template['an_patient_history'] =$this->Welcome_Model->get_an_patientagain_history($id);
		$new_appnew = array();
		foreach($template['an_patient_history'] as $ndocdetails){				
			$ndocdetails->totalanother = $this->Welcome_Model->get_hospapp_doctorall($ndocdetails->id);
			$new_appnew[] = $ndocdetails;
		}
		pdffunc();	 
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',20);
		$pdf->Ln();
		$pdf->Ln();
		$pdf->SetFont('times','B',12);
		$pdf->Cell(40,7,"Doctor Name");
		$pdf->Cell(40,7,"Patient Name");
		$pdf->Cell(40,7,"Appointment Date");
		$pdf->Cell(40,7,"Appointment Time");
		$pdf->Ln(); 
		foreach($template["an_patient_history"] as $resdetail){		
			$doctor_firstname = $resdetail->doctor_firstname;
			$doctor_lastname = $resdetail->doctor_lastname;
			$patient_firstname = $resdetail->totalanother['patient_firstname'];
			$patient_lastname = $resdetail->totalanother['patient_lastname'];
			$appointment_date = $resdetail->appointment_date;
			$appointment_time = $resdetail->appointment_time;
			$pdf->SetFont('times','B',8); 
			$pdf->Cell(40,7,$doctor_firstname.' '.$doctor_lastname);				
			$pdf->Cell(40,7,$patient_firstname.' '.$patient_lastname);
			$pdf->Cell(40,7,$appointment_date);
			$pdf->Cell(40,7,$appointment_time);						
			$pdf->Ln();
		}
		$pdf->Output();				
	}
	/* === Clinic PDF Method === */	
	public function pdf_clinic(){
		$id=$this->session->userdata['frontend_logged_in']['id'];					
		$template['an_patient_history'] =$this->Welcome_Model->get_an_patientagainclinic_history($id);
		$new_appnew = array();
		foreach($template['an_patient_history'] as $ndocdetails){							
			$ndocdetails->totalanother = $this->Welcome_Model->get_hospappclinic_doctorall($ndocdetails->id);
			$new_appnew[] = $ndocdetails;
		}
		pdffunc();	 
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',20);
		$pdf->Ln();
		$pdf->Ln();
		$pdf->SetFont('times','B',12);
		$pdf->Cell(40,7,"Doctor Name");
		$pdf->Cell(40,7,"Patient Name");
		$pdf->Cell(40,7,"Appointment Date");
		$pdf->Cell(40,7,"Appointment Time");
		$pdf->Ln(); 
		foreach($template["an_patient_history"] as $resdetail){		
			$doctor_firstname = $resdetail->doctor_firstname;
			$doctor_lastname = $resdetail->doctor_lastname;
			$patient_firstname = $resdetail->totalanother['patient_firstname'];
			$patient_lastname = $resdetail->totalanother['patient_lastname'];
			$appointment_date = $resdetail->appointment_date;
			$appointment_time = $resdetail->appointment_time;
			$pdf->SetFont('times','B',8); 
            $pdf->Cell(40,7,$doctor_firstname.' '.$doctor_lastname);				
			$pdf->Cell(40,7,$patient_firstname.' '.$patient_lastname);
            $pdf->Cell(40,7,$appointment_date);
			$pdf->Cell(40,7,$appointment_time);			
			$pdf->Ln();
		}
		$pdf->Output();			 			 
	}
	/* === Medical PDF Method === */
	public function pdf_medical(){
		$id=$this->session->userdata['frontend_logged_in']['id'];					
		$template['an_patient_history'] =$this->Welcome_Model->get_an_patientagainmedical_history($id);
		$new_appnew = array();
		foreach($template['an_patient_history'] as $ndocdetails){					
			$ndocdetails->totalanother = $this->Welcome_Model->get_hospappmedical_doctorall($ndocdetails->id);
			$new_appnew[] = $ndocdetails;
		}	
		pdffunc();	 
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',20);
		$pdf->Ln();
		$pdf->Ln();
		$pdf->SetFont('times','B',12);
		$pdf->Cell(40,7,"Doctor Name");
		$pdf->Cell(40,7,"Patient Name");
		$pdf->Cell(40,7,"Appointment Date");
		$pdf->Cell(40,7,"Appointment Time");
		$pdf->Ln(); 
		foreach($template["an_patient_history"] as $resdetail){				
			$doctor_firstname = $resdetail->doctor_firstname;
			$doctor_lastname = $resdetail->doctor_lastname;
			$patient_firstname = $resdetail->totalanother['patient_firstname'];
			$patient_lastname = $resdetail->totalanother['patient_lastname'];
			$appointment_date = $resdetail->appointment_date;
			$appointment_time = $resdetail->appointment_time;
			$pdf->SetFont('times','B',8); 
			$pdf->Cell(40,7,$doctor_firstname.' '.$doctor_lastname);				
			$pdf->Cell(40,7,$patient_firstname.' '.$patient_lastname);
			$pdf->Cell(40,7,$appointment_date);
			$pdf->Cell(40,7,$appointment_time);					
			$pdf->Ln();
		}
		$pdf->Output();			 			 
	}	
	/* === Centre's(Clinic,Medical and Hospital) Edit Method === */
	public function getedithospdocdetails(){
		if($_POST){		
			$id = $_POST['id'];
			$template['singlesubdoc_result'] = $this->Welcome_Model->getsinglesubhospdoc($id);	
			$template['states'] =$this->Welcome_Model->get_states();
			$template['cities'] =$this->Home_Model->pull_cities();
			$template['countries'] =$this->Welcome_Model->get_countries();		
			$this->load->view('sublistingdoc_hospitals',$template);			
		}
	}
	public function getedithospdocclinicdetails(){
		if($_POST){		
			$id = $_POST['id'];
			$template['singlesubdoc_result'] = $this->Welcome_Model->getsinglesubhospdoc($id);	
			$template['states'] =$this->Welcome_Model->get_states();
			$template['cities'] =$this->Home_Model->pull_cities();
			$template['countries'] =$this->Welcome_Model->get_countries();		
			$this->load->view('sublistingdoc_hospitals',$template);			
		}
	}
	public function getedithospdocmedicaldetails(){
		if($_POST){		
			$id = $_POST['id'];
			$template['singlesubdoc_result'] = $this->Welcome_Model->getsinglesubhospdoc($id);	
			$template['states'] =$this->Welcome_Model->get_states();
			$template['cities'] =$this->Home_Model->pull_cities();
			$template['countries'] =$this->Welcome_Model->get_countries();		
			$this->load->view('sublistingdoc_hospitals',$template);			
		}
	}
	public function getedithospdetails(){
		if($_POST){		
			$id = $_POST['id'];
			$template['singlesub_result'] = $this->Welcome_Model->getsinglesubhosp($id);	
			$template['states'] =$this->Welcome_Model->get_states();
			$template['cities'] =$this->Home_Model->pull_cities();
			$template['countries'] =$this->Welcome_Model->get_countries();		
			$this->load->view('sublisting_hospitals',$template);			
		}
	}
	public function getedithospclinicdetails(){
		if($_POST){		
			$id = $_POST['id'];
			$template['singlesub_result'] = $this->Welcome_Model->getsinglesubhospclinic($id);	
			$template['states'] =$this->Welcome_Model->get_states();
			$template['cities'] =$this->Home_Model->pull_cities();
			$template['countries'] =$this->Welcome_Model->get_countries();		
			$this->load->view('sublisting_clinic',$template);			
		}
	}
	public function getedithospmedicaldetails(){
		if($_POST){		
			$id = $_POST['id'];
			$template['singlesub_result'] = $this->Welcome_Model->getsinglesubhospmedical($id);	
			$template['states'] =$this->Welcome_Model->get_states();
			$template['cities'] =$this->Home_Model->pull_cities();
			$template['countries'] =$this->Welcome_Model->get_countries();		
			$this->load->view('sublisting_medical',$template);			
		}
	}
	/* === Centre's(Clinic,Medical and Hospital) Delete Method === */
	public function deletehospdetails(){
		if($_POST){
			$id= $_POST["id"];
			$result = $this->Welcome_Model->deletesinglesubhosp($id);
		}
	}
	public function deletehospclinicdetails(){
		if($_POST){
			$id= $_POST["id"];
			$result = $this->Welcome_Model->deletesinglesubhospclinic($id);
		}
	}
	public function deletehospmedicaldetails(){
		if($_POST){
			$id= $_POST["id"];
			$result = $this->Welcome_Model->deletesinglesubhospmedical($id);
		}
	}
	/* === Centre's(Clinic,Medical and Hospital) Gallery Remove Method === */
	public function doctor_gallery_remove(){
		if($_POST){
			$id= $_POST["id"];
			$result = $this->Welcome_Model->doctor_gallery_remove($id);
		}
	}
	public function hospital_gallery_remove(){
		if($_POST){
			$id= $_POST["id"];
			$result = $this->Welcome_Model->hospital_gallery_remove($id);
		}
	}
	public function clinic_gallery_remove(){
		if($_POST){
			$id= $_POST["id"];
			$result = $this->Welcome_Model->clinic_gallery_remove($id);
		}
	}
	public function medical_gallery_remove(){
		if($_POST){
			$id= $_POST["id"];
			$result = $this->Welcome_Model->medical_gallery_remove($id);
		}
	}
	/* === Centre's(Clinic,Medical and Hospital) Paypal payment Method === */
	public function buy_package($id=null){
		if ($this->session->userdata('super_person') == 1){	        
			$returnURL = base_url().'Welcome/success'; //payment success url
			$cancelURL = base_url().'Welcome/cancel'; //payment cancel url
			$notifyURL = base_url().'Welcome/success'; //ipn url
			//get particular product data
			$product = $this->Welcome_Model->getRowsemail($id);					
			$paypalID = get_icon()->paypalid;
			$userID=$this->session->userdata['frontend_logged_in']['id'];            
			$this->paypal_lib->add_field('business', $paypalID);
			$this->paypal_lib->add_field('return', $returnURL);
			$this->paypal_lib->add_field('cancel_return', $cancelURL);
			$this->paypal_lib->add_field('notify_url', $notifyURL);
			$this->paypal_lib->add_field('item_name', $product['doctor_firstname']);
			$this->paypal_lib->add_field('custom', $userID);
			$this->paypal_lib->add_field('item_number',  $product['id']);
			$this->paypal_lib->add_field('amount',  $product['package_price']);
			$this->paypal_lib->add_field('currency_code',  get_currency()->currency_code);		
			$this->paypal_lib->paypal_auto_form();
		}elseif ($this->session->userdata('super_person') == 2){
			 //Set variables for paypal form
			$returnURL = base_url().'Welcome/success_center'; //payment success url
			$cancelURL = base_url().'Welcome/cancel'; //payment cancel url
			$notifyURL = base_url().'Welcome/success_center'; //ipn url
			//get particular product data
			$product = $this->Welcome_Model->getRowsemailclinic($id);					
			$paypalID = get_icon()->paypalid;
			$userID=$this->session->userdata['frontend_logged_in']['id'];       
			$this->paypal_lib->add_field('business', $paypalID);
			$this->paypal_lib->add_field('return', $returnURL);
			$this->paypal_lib->add_field('cancel_return', $cancelURL);
			$this->paypal_lib->add_field('notify_url', $notifyURL);
			$this->paypal_lib->add_field('item_name', $product['clinic_name']);
			$this->paypal_lib->add_field('custom', $userID);
			$this->paypal_lib->add_field('item_number',  $product['id']);
			$this->paypal_lib->add_field('amount',  $product['package_price']); 
			$this->paypal_lib->add_field('currency_code',  get_currency()->currency_code);        
			$this->paypal_lib->paypal_auto_form();
		}elseif ($this->session->userdata('super_person') == 3){
			//Set variables for paypal form
			$returnURL = base_url().'Welcome/success_center'; //payment success url
			$cancelURL = base_url().'Welcome/cancel'; //payment cancel url
			$notifyURL = base_url().'Welcome/success_center'; //ipn url
			//get particular product data
			$product = $this->Welcome_Model->getRowsemailmedical($id);					
			$paypalID = get_icon()->paypalid;
			$userID=$this->session->userdata['frontend_logged_in']['id'];              
			$this->paypal_lib->add_field('business', $paypalID);
			$this->paypal_lib->add_field('return', $returnURL);
			$this->paypal_lib->add_field('cancel_return', $cancelURL);
			$this->paypal_lib->add_field('notify_url', $notifyURL);
			$this->paypal_lib->add_field('item_name', $product['medical_name']);
			$this->paypal_lib->add_field('custom', $userID);
			$this->paypal_lib->add_field('item_number',  $product['id']);
			$this->paypal_lib->add_field('amount',  $product['package_price']);  
			$this->paypal_lib->add_field('currency_code',  get_currency()->currency_code);	       
			$this->paypal_lib->paypal_auto_form();
		}elseif ($this->session->userdata('super_person') == 4){
			 //Set variables for paypal form
			$returnURL = base_url().'Welcome/success_center'; //payment success url
			$cancelURL = base_url().'Welcome/cancel'; //payment cancel url
			$notifyURL = base_url().'Welcome/success_center'; //ipn url
			//get particular product data
			$product = $this->Welcome_Model->getRowsemailhospital($id);					
			$paypalID = get_icon()->paypalid;
			$userID=$this->session->userdata['frontend_logged_in']['id'];     
			$this->paypal_lib->add_field('business', $paypalID);
			$this->paypal_lib->add_field('return', $returnURL);
			$this->paypal_lib->add_field('cancel_return', $cancelURL);
			$this->paypal_lib->add_field('notify_url', $notifyURL);
			$this->paypal_lib->add_field('item_name', $product['hospital_name']);
			$this->paypal_lib->add_field('custom', $userID);
			$this->paypal_lib->add_field('item_number',  $product['id']);
			$this->paypal_lib->add_field('amount',  $product['package_price']); 
			$this->paypal_lib->add_field('currency_code',  get_currency()->currency_code);	        
			$this->paypal_lib->paypal_auto_form();
		}
	}
	/* === Centre's(Clinic,Medical and Hospital) Paypal payment Cancel Method === */
	public function cancel(){
        $this->load->view('paypal/cancel');
	}	
	/* === Centre's(Clinic,Medical and Hospital) Paypal payment Success Method === */
	public function success(){		
		$paypalInfo	= $this->input->post();
		if (!empty($paypalInfo)){
			$data['doctor_id'] = $paypalInfo['custom'];
			$data['id']	= $paypalInfo["item_number"];
			$data['txn_id']	= $paypalInfo["txn_id"];
			$data['payment_gross'] = $paypalInfo["payment_gross"];
			$data['currency_code'] = $paypalInfo["mc_currency"];
			$data['client_email'] = $paypalInfo["payer_email"];
			$data['payment_status']	= $paypalInfo["payment_status"];
			$data['payment_date'] =date('Y-m-d H:i:s', strtotime ($paypalInfo["payment_date"]));;		
			$this->Welcome_Model->insertTransaction($data);
			$this->load->view('paypal/success',$data);
		}		
    }
	public function success_center(){	
		$paypalInfo	= $this->input->post();
		if (!empty($paypalInfo)){
			$data['hospital_id'] = $paypalInfo['custom'];
			$data['id']	= $paypalInfo["item_number"];
			$data['txn_id']	= $paypalInfo["txn_id"];
			$data['payment_gross'] = $paypalInfo["payment_gross"];
			$data['currency_code'] = $paypalInfo["mc_currency"];
			$data['client_email'] = $paypalInfo["payer_email"];
			$data['payment_status']	= $paypalInfo["payment_status"];
			$data['payment_date'] =date('Y-m-d H:i:s', strtotime ($paypalInfo["payment_date"]));;		
			if ($this->session->userdata('super_person') == 2){		   
				$this->Welcome_Model->insertTransactionclinic($data);
			}elseif ($this->session->userdata('super_person') == 3){
				$this->Welcome_Model->insertTransactionmedical($data);
			}elseif ($this->session->userdata('super_person') == 4){
				$this->Welcome_Model->insertTransactionhospital($data);
			}
			$this->load->view('paypal/success',$data);			
		}
	}
	
}
?>