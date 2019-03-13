<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cities extends CI_Controller {
	public function __construct() {
	parent::__construct();	
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Cities_model');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	 public function add_cities(){
		$template['page'] = "Cities/add-city";
		$template['page_title'] = "Add Cities";	  
		if($_POST){		  
			$data = $_POST;
			$result = $this->Cities_model->add_city($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => ' City Added  successfully','class' => 'success'));
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
		}
		$template['data'] = $this->Cities_model->get_city();
		$this->load->view('template',$template);
	}
	 public function delete_cities() {
		  $id = $this->uri->segment(3);
		  $result= $this->Cities_model->city_delete($id);
		  $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		  redirect(base_url().'Cities/add_cities');
	 } 
	 public function edit_cities(){
		$template['page'] = "Cities/edit-city";
		$template['page_title'] = "Edit Cities";
		$id = $this->uri->segment(3); 
		$template['data'] = $this->Cities_model->get_single_city($id);		 
		if($_POST){
			$data = $_POST;
			$result = $this->Cities_model->city_edit($data, $id);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Requested City  Updated successfully','class' => 'success'));
				redirect(base_url().'Cities/add_cities');
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
				redirect(base_url().'Cities/add_cities');
			}
		}	
		$this->load->view('template',$template); 	
	 }
}