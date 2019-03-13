<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Patient_details extends CI_Controller {
	public function __construct() {
	parent::__construct();		
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Patient_model');		
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
     public function view_patientdetails(){
			  $template['page'] = "Patientdetails/view-patient-details";
			  $template['page_title'] = "Patient Details";
			  $template['data'] = $this->Patient_model->get_patientdetails();
			  $this->load->view('template',$template);
	 }	
     public function delete_Patient(){		      
		  $id = $this->uri->segment(3);
		  $result= $this->Patient_model->patient_delete($id);
		  $this->session->set_flashdata('message', array('message' => 'Requested Patient Deleted Successfully','class' => 'success'));
	      redirect(base_url().'Patient_details/view_patientdetails');
	 }		 		 	 
	public function patient_viewpopup() {  
		$id=$_POST['patientdetailsval'];
		$template['data'] = $this->Patient_model->view_popup_patient($id);
		$this->load->view('Patientdetails/patient-view-popup',$template);   
	}
	public function get_patientdetails(){
		$template['data'] = $this->Patient_model->get_patientval();	
	}
	public function get_patientstates(){		 
		$template['data'] = $this->Patient_model->get_patientstateval();	 
	}
	public function get_patientcountry(){   
		$template['data'] = $this->Patient_model->get_patientcountryval();	
	}
}