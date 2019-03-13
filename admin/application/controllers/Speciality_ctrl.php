<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Speciality_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Speciality_model');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	 public function add_speciality(){
			  $template['page'] = "Specialitydetails/add-speciality";
			  $template['page_title'] = "Add Speciality";
		      if($_POST){		  
				  $data = $_POST;
				  $result = $this->Speciality_model->add_specialitydetails($data);
				  if($result) {
					 $this->session->set_flashdata('message',array('message' => 'Add Specialty Details successfully','class' => 'success'));
				  }
				  else {
					 $this->session->set_flashdata('message', array('message' => 'Specialty Already Exist','class' => 'error'));  
				  }
			  }
			  $template['data'] = $this->Speciality_model->get_specialitydetails();
			  $this->load->view('template',$template);
	 }
	 public function delete_speciality() {
		 $id = $this->uri->segment(3);
		 $result= $this->Speciality_model->speciality_delete($id);
		 $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
	     redirect(base_url().'Speciality_ctrl/add_speciality');
	 }
	 public function edit_speciality(){
		$template['page'] = "Specialitydetails/edit-speciality";
	    $template['page_title'] = "Edit Speciality";
		$id = $this->uri->segment(3); 
		$template['data'] = $this->Speciality_model->get_single_speciality($id);
	    if($_POST){
			$data = $_POST;
			$result = $this->Speciality_model->speclitydetails_edit($data, $id);
			if($result) {
				 $this->session->set_flashdata('message',array('message' => ' Requested Specialty Updated successfully','class' => 'success'));
				  redirect(base_url().'Speciality_ctrl/add_speciality');
			}
			else {
				 $this->session->set_flashdata('message', array('message' => 'Specialty Already Exist','class' => 'error')); 
				 redirect(base_url().'Speciality_ctrl/add_speciality');
			}
		 }	
		 $this->load->view('template',$template); 	
	 }
}