<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Amenities_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Amenities_model');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	 public function add_amenitiesdetails(){
		  $template['page'] = "Amenitiesdetails/add-amenities";
		  $template['page_title'] = "Add Amenities";
		  if($_POST){		  
			$data = $_POST;
			$result = $this->Amenities_model->add_amenitiesdetails($data);
			if($result) {
				 $this->session->set_flashdata('message',array('message' => 'Add Amenities Details successfully','class' => 'success'));
			}
			else {
				 $this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
		}
		 $template['data'] = $this->Amenities_model->get_amenitiesdetails();
		 $this->load->view('template',$template);
	 }
	 public function delete_amenities() {
		  $id = $this->uri->segment(3);
		  $result= $this->Amenities_model->amenities_delete($id);
		  $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		  redirect(base_url().'Amenities_ctrl/add_amenitiesdetails');
	 }
	 public function edit_amenitiesval(){
		  $template['page'] = "Amenitiesdetails/edit-amenities";
		  $template['page_title'] = "Edit Amenities";
		  $id = $this->uri->segment(3); 
		  $template['data'] = $this->Amenities_model->get_single_amenities($id);
		  if($_POST){
			  $data = $_POST;
			  $result = $this->Amenities_model->amenitiesdetails_edit($data, $id);
			  if($result) {
					$this->session->set_flashdata('message',array('message' => 'Edit Amenities Details Updated successfully','class' => 'success'));
					redirect(base_url().'Amenities_ctrl/add_amenitiesdetails');
			  }
			  else {
					 $this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
					 redirect(base_url().'Amenities_ctrl/add_amenitiesdetails');
			  }
		  }	
	  $this->load->view('template',$template); 	
	 }
}