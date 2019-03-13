<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Currency_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Currency_model');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	 public function add_currencies(){
		$template['page'] = "Currency/add-currency";
		$template['page_title'] = "Add Currency";
		if($_POST){		  
			$data = $_POST;
			$result = $this->Currency_model->add_currencydetails($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Currency Details Added Successfully','class' => 'success'));
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
		}
		$template['data'] = $this->Currency_model->get_curencydetails();
		$this->load->view('template',$template);
	 }
	 public function delete_currencies(){
		  $id = $this->uri->segment(3);
		  $result= $this->Currency_model->currencies_delete($id);
		  $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		  redirect(base_url().'Currency_ctrl/add_currencies');
	 }
	 public function edit_currency(){
		$template['page'] = "Currency/edit-currency";
		$template['page_title'] = "Edit Currency";
		$id = $this->uri->segment(3); 
		$template['data'] = $this->Currency_model->get_single_currency($id);
		if($_POST){
			$data = $_POST;
			$result = $this->Currency_model->currencydetails_edit($data, $id);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Edit Currency Details Updated successfully','class' => 'success'));
				redirect(base_url().'Currency_ctrl/add_currencies');
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
				redirect(base_url().'Currency_ctrl/add_currencies');
			}
		}	
		$this->load->view('template',$template); 	
	 }	
}