<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Affiliate_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Affiliated_model');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	 public function add_affiliatedetails(){	
		if($_POST){		  
			$data = $_POST; 
			$result = $this->Affiliated_model->add_affiliatedetails($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Add Affiliated Details successfully','class' => 'success'));
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
	  }
	  $template['page'] = "Affiliateddetails/add-affiliate";
		$template['page_title'] = "Add affiliate";
	  $template['data'] = $this->Affiliated_model->get_affiliatedetails();
	  $this->load->view('template',$template);
	 }
	 public function delete_affiliation() {
		  $id = $this->uri->segment(3);
		  $result= $this->Affiliated_model->affliated_delete($id);
		  $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		  redirect(base_url().'Affiliate_ctrl/add_affiliatedetails');
	 }
	 public function edit_affiliatedval(){
		  $template['page'] = "Affiliateddetails/edit-affiliate";
		  $template['page_title'] = "Edit affiliate";
		  $id = $this->uri->segment(3); 
		  $template['data'] = $this->Affiliated_model->get_single_affiliate($id);
		  if($_POST){
			$data = $_POST;
			$result = $this->Affiliated_model->affiliatedetails_edit($data, $id);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Edit Affiliated Details Updated successfully','class' => 'success'));
				redirect(base_url().'Affiliate_ctrl/add_affiliatedetails');
			}
			else {
				 $this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
				 redirect(base_url().'Affiliate_ctrl/add_affiliatedetails');
			}
		}	
	  $this->load->view('template',$template); 	
    }
}	