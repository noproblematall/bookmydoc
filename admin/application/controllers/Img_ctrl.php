<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Img_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();	
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Img_model');	
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	public function add_imgdetails(){
		$template['page'] = "Imguploading/img-upload";
		$template['page_title'] = "img upload";
		$sessid=$this->session->userdata('logged_in');
		if($_POST){
			$data = $_POST;			
			$config = set_hospital_image('assets/uploads/hospital');
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
				$result = $this->Img_model->imgdetails_add($data);
				if($result) {			
					$this->session->set_flashdata('message',array('message' => 'Add Hospital Information Details successfully','class' => 'success'));
					redirect(base_url().'Hospital_ctrl/view_hospitals');
				}
				else {
					$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));
					redirect(base_url().'Hospital_ctrl/view_hospitals');
				}
			}
		}    
		$this->load->view('template',$template); 	 
	}
}