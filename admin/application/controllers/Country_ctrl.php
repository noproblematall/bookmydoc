<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Country_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();	
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Country_model');		
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }	
	public function add_countryname(){
		$template['page'] = "Countrydetails/add-country";
		$template['page_title'] = "Add Country";
		if($_POST){		  
			$data = $_POST;
			$result = $this->Country_model->addcountry_details($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Add Country Details successfully','class' => 'success'));
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
		}
		$template['data'] = $this->Country_model->get_countrydetails();
		$this->load->view('template',$template);
	}
	public function edit_countrydetails(){
		$template['page'] = "Countrydetails/edit-country";
		$template['page_title'] = "Edit Country";
		$id = $this->uri->segment(3); 
		$template['data'] = $this->Country_model->get_single_country($id);
		if($_POST){
			$data = $_POST;
			$result = $this->Country_model->countrydetails_edit($data, $id);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Edit Country Details Updated successfully','class' => 'success'));
				redirect(base_url().'Country_ctrl/add_countryname');
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
				redirect(base_url().'Country_ctrl/add_countryname');
			}
		}	
		$this->load->view('template',$template); 	
	}
	 public function delete_countries(){
		  $id = $this->uri->segment(3);
		  $result= $this->Country_model->country_delete($id);
		  $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		  redirect(base_url().'Country_ctrl/add_countryname');
	 }
	 public function add_statename(){
		$template['page'] = "Countrydetails/add-state";
		$template['page_title'] = "Add State";
		if($_POST){		  
			$data = $_POST;
			$result = $this->Country_model->add_statesedetails($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Add State Details successfully','class' => 'success'));
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
		}
		$template['datacountry'] = $this->Country_model->get_singlecountrysdetails();
		$template['datastate'] = $this->Country_model->get_singlestatesdetails();
		$this->load->view('template',$template);
	} 
	public function edit_statesdetails(){
		$template['page'] = "Countrydetails/edit-states";
		$template['page_title'] = "Edit State";
		$id = $this->uri->segment(3); 
		$template['data'] = $this->Country_model->get_single_states($id);
		if($_POST){
			$data = $_POST;
			$result = $this->Country_model->statesdetails_edit($data, $id);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Edit State Details Updated successfully','class' => 'success'));
				redirect(base_url().'Country_ctrl/add_statename');
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
				redirect(base_url().'Country_ctrl/add_statename');
			}
		}	
		$template['countrydata'] = $this->Country_model->get_singlecountryvals();
		$this->load->view('template',$template); 	
	} 
	 public function delete_states(){
		  $id = $this->uri->segment(3);
		  $result= $this->Country_model->states_delete($id);
		  $this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		  redirect(base_url().'Country_ctrl/add_statename');
	 }	
	 public function add_cityname(){
		$template['page'] = "Countrydetails/add-city";
		$template['page_title'] = "Add City";
		if($_POST){		  
			$data = $_POST;
			$result = $this->Country_model->add_citydetails($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Add City Details successfully','class' => 'success'));
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
			}
		}
		$template['dataaddcountry'] = $this->Country_model->get_singlecitysdetails();
		$template['addstatesval'] = $this->Country_model->get_addsinglestatesval();
		$template['datacity'] = $this->Country_model->get_citysval();
		$this->load->view('template',$template);
	 }
	 public function add_countrygetval() { 
		if($_POST){		  
			$data = $_POST;
			$id=$_POST['value'];
			$result = $this->Country_model->get_statsdetails($id);
			$template['addstatesval'] = '';
			foreach($result as $am){
				$template['addstatesval'] .= '<option value="'.$am->id.'">'. $am->state_name.' </option>';
			}							
			echo $template['addstatesval'];
		}
	}
	public function edit_citysdetails(){
		$template['page'] = "Countrydetails/edit-city";
		$template['page_title'] = "Edit City";
		$id = $this->uri->segment(3); 
		$template['data'] = $this->Country_model->get_single_citys($id);
		if($_POST){
			$data = $_POST;
			$result = $this->Country_model->citysdetails_edit($data, $id);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Edit City Details Updated successfully','class' => 'success'));
				redirect(base_url().'Country_ctrl/add_cityname');
			}
			else {
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error')); 
				redirect(base_url().'Country_ctrl/add_cityname');
			}
		}	
		$template['dataaddcountry'] = $this->Country_model->get_singlecitysdetails();
		$template['addstatesval'] = $this->Country_model->get_addsinglestatesval();
		$this->load->view('template',$template); 	
	}	 	  
	public function edit_citydetailsval(){
		if($_POST){		  
			$data = $_POST;
			$template['resultsget'] = $this->Country_model->get_cityspoint();
		}
	}	
	public function delete_citys(){
		$id = $this->uri->segment(3);
		$result= $this->Country_model->citys_delete($id);
		$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		redirect(base_url().'Country_ctrl/add_cityname');
	 }	 
}