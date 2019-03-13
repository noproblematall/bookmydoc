<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Package_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();	
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Package_model');		
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	public function hospital_package(){
		$template['page'] = "Packagedetails/hospitaladd-package";
		$template['page_title'] = "Add Packages";
		if($_POST){		  
			$data = $_POST;
			$result = $this->Package_model->add_hospital_package($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Add Package Details successfully','class' => 'success'));
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
		}	
		$template['package'] = $this->Package_model->get_hospital_package();
		$this->load->view('template',$template);
	}
	public function add_package(){
		$template['page'] = "Packagedetails/add-package";
		$template['page_title'] = "Add Packages";
		if($_POST){		  
			$data = $_POST;
			$result = $this->Package_model->add_package($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Add Package Details successfully','class' => 'success'));
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
		}
		$template['package'] = $this->Package_model->get_package();
		$this->load->view('template',$template);
	}
	public function add_packagedetails(){
		$template['page'] = "Packagedetails/add-packagedetails";
		$template['page_title'] = "Add Packages";
		if(isset($_POST) & !empty($_POST)){	
			$data = $_POST;
			$result = $this->Package_model->add_packagedetails($data);
			if($result) {
			$this->session->set_flashdata('message',array('message' => 'Add Package Details successfully','class' => 'success'));
			}
			else {
			$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
		}
		$template['package'] = $this->Package_model->get_package();
		$template['doctor'] = $this->Package_model->get_doctor();
		$template['price'] = $this->Package_model->get_price();
		$template['period'] = $this->Package_model->get_period();
		$template['booking'] = $this->Package_model->get_booking();		 
		$this->load->view('template',$template);
	}
	public function delete_package(){
		$id = $this->uri->segment(3);
		$result= $this->Package_model->package_delete($id);
		$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		redirect(base_url().'Package_ctrl/add_package');
	}
	 public function delete_hospital_package() {
		  $id = $this->uri->segment(3);
		  $result= $this->Package_model->package_hospital_delete($id);
		  $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		  redirect(base_url().'Package_ctrl/hospital_package');
	 }
	  public function delete_booking() {
		  $id = $this->uri->segment(3);
		  $result= $this->Package_model->booking_delete($id);
		  $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		  redirect(base_url().'Package_ctrl/add_packagedetails');
	 }
	public function edit_hospital_packagedetailsdval(){
		$template['page'] = "Packagedetails/edit_hospital-package";
		$template['page_title'] = "Edit Package";
		$id = $this->uri->segment(3); 
		$template['data'] = $this->Package_model->get_single_hospital_package($id);
		if($_POST){
			$data = $_POST;
			$result = $this->Package_model->packagedetails_edit_hospital($data, $id);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Edit Package Details Updated successfully','class' => 'success'));
				redirect(base_url().'Package_ctrl/hospital_package');
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
				redirect(base_url().'Package_ctrl/hospital_package');
			}
		}	
		$this->load->view('template',$template); 	
	}
	public function edit_packagedetailsdval(){
		$template['page'] = "Packagedetails/edit-package";
		$template['page_title'] = "Edit Package";
		$id = $this->uri->segment(3); 
		$template['data'] = $this->Package_model->get_single_package($id);			 
		if($_POST){
			$data = $_POST;
			$result = $this->Package_model->packagedetails_edit($data, $id);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Edit Package Details Updated successfully','class' => 'success'));
				redirect(base_url().'Package_ctrl/add_package');
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
				redirect(base_url().'Package_ctrl/add_package');
			}
		}	
		$this->load->view('template',$template); 	
	}
	public function edit_bookingdetailsdval(){
		$template['page'] = "Packagedetails/edit-packagedetails";
		$template['page_title'] = "Edit Package";
		$id = $this->uri->segment(3); 
		$template['data'] = $this->Package_model->get_single_package($id);
		if($_POST){
			$data = $_POST;
			$result = $this->Package_model->packagedetails_edit($data, $id);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Edit Package Details Updated successfully','class' => 'success'));
				redirect(base_url().'Package_ctrl/add_packagedetails');
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
				redirect(base_url().'Package_ctrl/add_packagedetails');
			}
		}
		$template['package'] = $this->Package_model->get_package();
		$template['doctor'] = $this->Package_model->get_doctor(); 
		$template['data1'] = $this->Package_model->get_package1($id);
		$template['price'] = $this->Package_model->get_price();
		$template['period'] = $this->Package_model->get_period();
		$template['booking'] = $this->Package_model->get_booking();
		$this->load->view('template',$template); 	
	}
}