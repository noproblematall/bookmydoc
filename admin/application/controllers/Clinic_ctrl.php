<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clinic_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Clinic_model');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	   public function view_clinicdetails(){
			$template['page'] = "Clinicdetails/view-clinic";
			$template['page_title'] = "View Clinic Details";
			$template['data'] = $this->Clinic_model->get_clinicdetails();
			$this->load->view('template',$template);
	  }

		public function add_clinicdetailsget(){
			if($_POST){		  
				$data = $_POST;
				$id=$_POST['value'];
				$result = $this->Clinic_model->get_clinicsstatdetails($id);
				$template['clinicstatedetails'] = '';
				foreach($result as $am){ 
					$template['clinicstatedetails'] .= '<option value="'.$am->id.'">'. $am->state_name.' </option>';
				}							
				echo $template['clinicstatedetails'];
			}
		}
		public function add_cliniccitydetailsget() { 
	          if($_POST){		  
				  $data = $_POST;
				  $id=$_POST['value'];
				  $result = $this->Clinic_model->getclinic_citydetails($id);
				  $template['citydetails'] = '';
				  foreach($result as $ams){  
						$template['citydetails'] .= '<option value="'.$ams->id.'">'. $ams->city_name.' </option>';
				  }							
				   echo $template['citydetails'];
	          }
	     }
	  	public function Clinic_status(){
			  $data1 = array(
							"status" => '0'
						 );
			  $id = $this->uri->segment(3);		   
			  $s=$this->Clinic_model->update_clinic_status($id, $data1);
			  $this->session->set_flashdata('message', array('message' => 'Clinic Disable','class' => 'warning'));
			  redirect(base_url().'Clinic_ctrl/view_clinicdetails');	
	    }
		public function clinic_active(){
			  $data1 = array(
							"status" => '1'
						 );
			  $id = $this->uri->segment(3);		   
			  $s=$this->Clinic_model->update_clinic_status($id, $data1);
			  $this->session->set_flashdata('message', array('message' => 'Clinic Enable Successfully','class' => 'success'));
			  redirect(base_url().'Clinic_ctrl/view_clinicdetails');	
	    }
        public function delete_clinic(){      
			  $id = $this->uri->segment(3);
			  $result= $this->Clinic_model->clinic_delete($id);
			  $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
			  redirect(base_url().'Clinic_ctrl/view_clinicdetails');
	    }
		public function clinic_viewpopup(){
			$id=$_POST['clinicdetailsval'];
			$template['res'] = $this->Clinic_model->get_subclinic($id);
			$template['data'] = $this->Clinic_model->view_popup_clinic($id);
			$this->load->view('Clinicdetails/clinic-popup-view',$template);
		}
		public function add_clinicgallery() {
			$template['page'] = 'Clinicdetails/clinic-gallery';
			$template['page_title'] = 'Add gallery';
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
					$config = upload_clinic_image('uploads/hospital');
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
						$result = $this->Clinic_model->clinicgallery_add($data);  
						if($result) {
							$this->session->set_flashdata('message',array('message' => 'Add Gallery Details successfully','class' => 'success'));
						}
						else  {
							$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
						}
					}	
				}
			}				  
			  $template['clinicresult'] = $this->Clinic_model->get_clinicgallery();
			  $template['data'] = $this->Clinic_model->getclinic_gallery();
			  $this->load->view('template',$template);
		 }
	    function view_clinicgallery() {
			$id = $this->uri->segment(3);
			$template['page'] = 'Clinicdetails/view-clinic-gallery';
			$template['page_title'] = 'View gallery';
			$template['data'] = $this->Clinic_model->get_clinic_gallery($id);
			if(!empty($template['data'])) {
				$this->load->view('template',$template);
			}
			else {
				$this->session->set_flashdata('message', array('message' => "You don't have permission to access.",'class' => 'danger'));
				redirect(base_url().'Clinic_ctrl/add_clinicgallery');
			 }
		 }
		function delete_clinicgallery(){
			$id = $_POST['id'];
			$result = $this->Clinic_model->clinicgallery_delete($id);
			return  $result;
		 }
}