<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Doctordegree_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();	
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Doctordegree_model');		
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	public function add_degreedetail(){
		$template['page'] = "Degreedetails/add-doctor-degree";
		$template['page_title'] = "View Degree"; 
		if($_POST){		  
			$data = $_POST;
			$result = $this->Doctordegree_model->add_degredetails($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Add Degree Details successfully','class' => 'success'));
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
		}
		$template['data'] = $this->Doctordegree_model->get_degreedetails();
		$this->load->view('template',$template);
	}
	public function delete_degree(){
		$id = $this->uri->segment(3);
		$result= $this->Doctordegree_model->degree_delete($id);
		$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		redirect(base_url().'Doctordegree_ctrl/add_degreedetail');
	}
	 public function edit_degreesval(){
		$template['page'] = "Degreedetails/edit-doctor-degree";
		$template['page_title'] = "Edit Degree";
		$id = $this->uri->segment(3); 
		$template['data'] = $this->Doctordegree_model->get_single_degree($id);
		if($_POST){
			$data = $_POST;
			$result = $this->Doctordegree_model->decreedetails_edit($data, $id);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Edit Degree Details Updated successfully','class' => 'success'));
				redirect(base_url().'Doctordegree_ctrl/add_degreedetail');
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
				redirect(base_url().'Doctordegree_ctrl/add_degreedetail');
			}
		}	
		$this->load->view('template',$template); 	
	 }
}