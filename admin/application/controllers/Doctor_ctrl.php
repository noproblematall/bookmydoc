<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Doctor_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();	
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Doctor_model');		
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	public function view_doctordetails(){
		$template['page'] = "Doctordetails/view-doctor-details";
		$template['page_title'] = "Doctor Details";
		$template['data'] = $this->Doctor_model->get_doctordetails();
		$this->load->view('template',$template);
	  }
		
	public function add_droppointdetailsget() { 
		if($_POST){		  
			$data = $_POST;
			$id=$_POST['value'];
			$template['data'] = $this->Doctor_model->get_statdetails($id);
			$template['statedetails'] = '';
			foreach( $template['data'] as $am){  
				$template['statedetails'] .= '<option value="'.$am->id.'">'. $am->state_name.' </option>';
			}							
			echo $template['statedetails'];
		}
	}
	public function add_citydetailsget() { 
		if($_POST){		  
			$data = $_POST;
			$id=$_POST['value'];
			$template['data'] = $this->Doctor_model->get_citydetails($id);
			$template['citydetails'] = '';
			foreach($template['data'] as $ams){ 
				$template['citydetails'] .= '<option value="'.$ams->id.'">'. $ams->city_name.' </option>';
			}							
			echo $template['citydetails'];
		}
	}
	public function Edit_countrydetailsget() {
		if($_POST){		  
			$data = $_POST;
			$template['resultsget'] = $this->Doctor_model->get_countrypoint();
		}
	}
	public function Edit_citiesdetailsget(){
		if($_POST){		  
			$data = $_POST;
			$template['resultsget'] = $this->Doctor_model->get_citypoint();
		}
	}	 
       public function delete_doctor(){	      
		  $id = $this->uri->segment(3);
		  $result= $this->Doctor_model->doctors_delete($id);
		  $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
	      redirect(base_url().'Doctor_ctrl/view_doctordetails');
	    }
	public function doctor_status(){
		$data1 = array(
						"status" => '0'
		);
		$id = $this->uri->segment(3);		   
		$s=$this->Doctor_model->update_doctor_status($id, $data1);
		$this->session->set_flashdata('message', array('message' => 'Doctor Successfully Disabled','class' => 'warning'));
		redirect(base_url().'Doctor_ctrl/view_doctordetails');
	 }
		public function doctor_active(){
		  $data1 = array(
		  "status" => '1'
					 );
		  $id = $this->uri->segment(3);		   
		  $s=$this->Doctor_model->update_doctor_status($id, $data1);
		  $this->session->set_flashdata('message', array('message' => 'Doctor Successfully Enabled','class' => 'success'));
		  redirect(base_url().'Doctor_ctrl/view_doctordetails');
	    }
	    public function doctor_viewpopup() {
	    	$id=$_POST['doctordetailsval'];	
			$template['res'] = $this->Doctor_model->get_parent($id);
		    $template['data'] = $this->Doctor_model->view_popup_doctor($id);
		    $this->load->view('Doctordetails/doctor-popup-view',$template);
	    }
      public function map_view(){
		 $id=$_POST['mapdetails'];
		 $map = $this->Doctor_model->get_map($id);
		 if($map=='Novalue') {
			$template['map']="";
			$this->load->view('Doctordetails/popup-mapdetails',$template);
		 }
		 else {
			$template['map']=$map;
			$this->load->view('Doctordetails/popup-mapdetails',$template); 
		 } 
	  }
		 public function add_gallery() {		   
				   $template['page'] = "Doctordetails/doctor-gallery";
			       $template['page_title'] = "Doctor Gallery";					 
                   $userdetails=$this->session->userdata('logged_in');
				   $userid=$userdetails['id'];				   				   		   
				  if($_POST) {				  
					$data = $_POST;				  
					$data['user_id']=$userid;	
                                        $files = $_FILES;
										$cpt = count($_FILES['image']['name']);										
					 for($i=0; $i<$cpt; $i++) {           											
						 $_FILES['image']['name']= $data['user_id']."-".$files['image']['name'][$i];
						 $_FILES['image']['type']= $files['image']['type'][$i];
						 $_FILES['image']['tmp_name']= $files['image']['tmp_name'][$i];
						 $_FILES['image']['error']= $files['image']['error'][$i];
						 $_FILES['image']['size']= $files['image']['size'][$i];				  
						 $config = upload_doctor_image('uploads/doctor');
						  $this->load->library('upload');			
						  $new_name = time()."_".$_FILES["image"]['name'];
						  $config['file_name'] = $new_name;
						  $this->upload->initialize($config);
						  if ( ! $this->upload->do_upload('image')) {
							$this->session->set_flashdata('message', array('message' => "Display Picture : ".$this->upload->display_errors(), 'title' => 'Error !', 'class' => 'danger'));					
						  }
						  else {					
							  $upload_data = $this->upload->data();
							  $data['image'] = $config['upload_path']."/".$upload_data['file_name']; 						
							   $result = $this->Doctor_model->Gallery_add($data);				  
							  if($result) {
							  $this->session->set_flashdata('message',array('message' => 'Add Gallery Details successfully','class' => 'success'));
							  }
							  else {
								$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
							  }
						  }	
					   }
				  }				  
				  $template['doctorresult'] = $this->Doctor_model->get_gallerydetails();			  
				  $template['data'] = $this->Doctor_model->getdoctor_gallery();
		          $this->load->view('template',$template);
	 }
	public function view_doctorgallery() {	
		$id = $this->uri->segment(3);
		$template['page'] = "Doctordetails/view-doctor-gallery";
		$template['page_title'] = "View Gallery";
		$template['data'] = $this->Doctor_model->get_doctors_gallery($id);
		if(!empty($template['data'])) {
			$this->load->view('template',$template);
		}					
		else {
			$this->session->set_flashdata('message', array('message' => "You don't have permission to access.",'class' => 'danger'));
			redirect(base_url().'Doctor_ctrl/add_gallery');
		}
	}
	public function delete_gallery_image() {
		$id = $_POST['id'];
		$result = $this->Doctor_model->delete_gallery_images($id);
		return  $result;
	}
		 
	public function addworking_time(){
		$template['page'] = "Doctordetails/doctor-timeadd";
		$template['page_title'] = "Doctor Working Time";	
		$template['days'] = array('mon','tue','wed','thu','fri','sat','sun');
		$template['Days'] = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
		if($_POST){
			$data = $_POST;
			$result = $this->Doctor_model->update_worktime($data);
			if($result){
				$this->session->set_flashdata('message',array('message' => 'Add Doctor WorkingTime Details successfully','class' => 'success'));
			}
			else{
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));
			}	
		}
		$this->load->view('template',$template);  
	}		 
	public function addbreak_time(){
		$template['page'] = "Doctordetails/doctor-timeadd";
		$template['page_title'] = "Doctor Working Time";	
		$template['days'] = array('mon','tue','wed','thu','fri','sat','sun');
		$template['Days'] = array('Monday','Thuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
		$this->load->view('template',$template);			  		  
		if($_POST){
			$data = $_POST;				
			$result = $this->Doctor_model->doctorsbreaktime_add($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Add Doctor BreakTime Details successfully','class' => 'success'));
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));
			}	
		}
		$this->load->view('template',$template);    
	}
	public function update_worktime(){
		$template['page'] = "Doctordetails/working-timeadd";
		$template['page_title'] = "Doctor Working Time"; 
		if(!isset($id)){
			$this->session->set_flashdata('msg',false);
			redirect(base_url().'Doctor_ctrl/addworking_time');
		}else{
			$work_time['working_time'] = json_encode($_POST['work']);
			if($this->Doctor_model->update_worktime(base64_decode($id),$work_time)){
				$this->session->set_flashdata('msg',true);
				redirect(base_url().'Doctor_ctrl/addworking_time');
			}else{
				$this->session->set_flashdata('msg',false);
				redirect(base_url().'Doctor_ctrl/addworking_time');
			}
		}
	}
	public function edit_doctorworking($id){
		$template['page'] = 'Doctordetails/working-timeadd';
		$template['page_title'] = 'Edit Doctor';
		$id = $this->uri->segment(3); 
		$template['id'] = $id;
		$template['data'] = $this->Doctor_model->get_singleid($id);
		$template['days'] = array('mon','tue','wed','thu','fri','sat','sun');
		$template['Days'] = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
		if(!empty($template['data'])) {			
			if($_POST){
				$work_time['working_time'] = json_encode($_POST['work']);
				$result = $this->Doctor_model->doctorsinfo_edits($work_time, $id);
				$this->session->set_flashdata('message',array('message' => 'Edit Doctor WorkingTime Updated successfully','class' => 'success'));
				redirect(base_url('Doctor_ctrl/view_doctordetails'));
			}
			{				  
				$this->load->view('template',$template); 
			}	 
		}
		else{	 		 
			$this->session->set_flashdata('message', array('message' => "You don't have permission to access.",'class' => 'danger'));		
			redirect(base_url().'Doctor_ctrl/view_doctordetails');			  
		}
	} 
	public function edit_doctorbreaketime($id) {
		$template['page'] = 'Doctordetails/working-timeadd';
		$template['page_title'] = 'Edit Doctor';  
		$id = $this->uri->segment(3); 
		$template['id'] = $id;
		$template['data'] = $this->Doctor_model->get_singlebreakid($id);
		$break_time=array();
		$days = array('mon','tue','wed','thu','fri','sat','sun');	
		if($_POST){
			foreach ($days as $key => $value) 
			{
				if(isset($_POST['break'][$value])) {
					foreach ($_POST['break'][$value]['start'] as $key => $br_value){
					$break_time[$value][] = array('start'=>$br_value,'end'=>$_POST['break'][$value]['end'][$key]);
					}
				} 
				else {
					$break_time[$value][] = array('start'=>'','end'=>'');
				}
			}
			$breake_timeing['break_time'] = json_encode($break_time);
			$result = $this->Doctor_model->doctorbreaktime_edits($breake_timeing, $id);
			$this->session->set_flashdata('message',array('message' => 'Edit Doctor Break Updated successfully','class' => 'success'));
			redirect(base_url('Doctor_ctrl/view_doctordetails'));
		}
		else {	 
			$this->load->view('template',$template); 			  
			$this->session->set_flashdata('message', array('message' => "You don't have permission to access.",'class' => 'danger'));		
			redirect(base_url().'Doctor_ctrl/view_doctordetails');			  
		}
	}
	public function add_vacationtime($id){
		$template['page'] = 'Doctordetails/working-timeadd';
		$template['page_title'] = 'Edit Doctor';
		$id = $this->uri->segment(3); 
		$template['id'] = $id;
		$template['data'] = $this->Doctor_model->get_singleid($id);
		$work_time['vacation_time'] =array();
		foreach ($_POST['startdate'] as $key => $value) {			 
			$work_time['vacation_time'][] = array('startdate'=>$value,'enddate'=>$_POST['enddate'][$key]);
		}
		if($_POST){
			$work_time['vacation_time'] = json_encode($work_time['vacation_time']);
			$result = $this->Doctor_model->doctorsinfo_edits($work_time, $id);
			$this->session->set_flashdata('message',array('message' => 'Edit Doctor VactionTime Updated successfully','class' => 'success'));
			redirect(base_url('Doctor_ctrl/view_doctordetails'));
		}
		else{	 	
			$this->load->view('template',$template); 				  
			$this->session->set_flashdata('message', array('message' => "You don't have permission to access.",'class' => 'danger'));		
			redirect(base_url().'Doctor_ctrl/view_doctordetails');			  
		}
	}
	public function loadData($loadId = '', $loadType = ''){	
		$loadType=$_POST['loadType'];
		$loadId=$_POST['loadId'];
		$result=$this->Doctor_model->getData($loadType,$loadId);		
		$HTML="";		
		if($result->num_rows() > 0){
			foreach($result->result() as $list){
				$HTML.="<option value='".$list->id."'>".$list->name."</option>";
			}
		}
		echo $HTML;
	}  
}
?>