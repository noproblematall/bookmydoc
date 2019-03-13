<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Visitation_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Visitation_model');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	 public function add_visitations(){
		  $template['page'] = "Visitationdetails/add-visitation";
		  $template['page_title'] = "Add Visitaion";
		  if($_POST){		  
			  $data = $_POST;
			  $result = $this->Visitation_model->add_visitationdetails($data);
			  if($result) {
					/* Set success message */
				 $this->session->set_flashdata('message',array('message' => 'Visitation Added Successfully','class' => 'success'));
			  }
			  else {
					/* Set error message */
					$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			  }
		  }
		  $template['speciality'] = $this->Visitation_model->get_specialitydetails();
		  $template['data1'] = $this->Visitation_model->view_speciality();
		  $this->load->view('template',$template);
	 }
	 public function delete_visitation(){
		      $id = $this->uri->segment(3);
		      $result= $this->Visitation_model->visitation_delete($id);
		      $this->session->set_flashdata('message', array('message' => 'Requested Visitation Deleted Successfully','class' => 'success'));
	          redirect(base_url().'Visitation_ctrl/add_visitations');
	 }
	 public function edit_visitdetailsdval(){
		 $template['page'] = "Visitationdetails/edit-visitation";
		 $template['page_title'] = "Edit Visitaion";
		 $id = $this->uri->segment(3); 
		 $template['data'] = $this->Visitation_model->get_single_visits($id);
		 if($_POST){
			$data = $_POST;
			  	$result = $this->Visitation_model->visitdetails_edit($data, $id);
				if($result) {
					 $this->session->set_flashdata('message',array('message' => 'Requested Visitation Updated successfully','class' => 'success'));
					  redirect(base_url().'Visitation_ctrl/add_visitations');
				}
				else {
					 $this->session->set_flashdata('message', array('message' => 'Reason for this Speciality Already Exist Please Choose Another One','class' => 'error')); 
					 redirect(base_url().'Visitation_ctrl/add_visitations');
				}
		  }	
		  $template['speciality'] = $this->Visitation_model->get_specialitydetails();
	      $this->load->view('template',$template); 	
	 }
}