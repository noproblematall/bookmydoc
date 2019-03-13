<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MedicalAppoinment_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();		
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('MedicalAppoinment_model');		
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	public function view_appointmentdetails(){
		$template['page'] = "MedicalAppointmentdetails/view_appointmentdetails";
		$template['page_title'] = "View Appoinmentdetails";
		$template['data'] = $this->MedicalAppoinment_model->get_appoinmentdetails();
		$this->load->view('template',$template);
	}
	public function add_medicalappointmentdetails(){
		$template['page'] = "MedicalAppointmentdetails/add_Medicalappointment";
		$template['page_title'] = "View MedicalAppoinmentdetails";
		$sessid=$this->session->userdata('logged_in');
		if($_POST){
			$data = $_POST;	
			$result = $this->MedicalAppoinment_model->medicalappointmentsinfo_add($data);
			if($result) {
				$this->session->set_flashdata('message',array('message' => 'Add Appoinment Details successfully','class' => 'success'));
				redirect(base_url().'MedicalAppoinment_ctrl/view_appointmentdetails');
			}
			else 
			{
				$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));
				redirect(base_url().'MedicalAppoinment_ctrl/view_appointmentdetails');
			}
		}
		$template['patientnamedetails'] = $this->MedicalAppoinment_model->get_patientname();			
		$template['medicaldetails'] = $this->MedicalAppoinment_model->get_medicalname();				 
		$template['doctornamedetails'] = $this->MedicalAppoinment_model->get_doctorname();	
		$this->load->view('template',$template); 
	}
	public function edit_appointmentdetails(){
		$id = $this->uri->segment(3); 
		$template['page'] = "MedicalAppointmentdetails/edit-Medicalappointment";
		$template['page_title'] = "View view_appointmentdetails";
		$template['data'] = $this->MedicalAppoinment_model->get_appoinment_medical($id);
		if(!empty($template['data'])) {						 
			if($_POST){
				$data = $_POST;				
				$result = $this->MedicalAppoinment_model->appoinmentsinfo_edit($data, $id);
				$this->session->set_flashdata('message',array('message' => 'Edit Appoinment Information Updated successfully','class' => 'success'));
				redirect(base_url().'MedicalAppoinment_ctrl/view_appointmentdetails');		
			}
		}else{
			$this->session->set_flashdata('message', array('message' => "You don't have permission to access.",'class' => 'danger'));		
			redirect(base_url().'MedicalAppoinment_ctrl/view_appointmentdetails');		  
		}
		$template['patientnamedetails'] = $this->MedicalAppoinment_model->get_patientname();	
		$template['medicaldetails'] = $this->MedicalAppoinment_model->get_medicalname();				 
		$template['doctornamedetails'] = $this->MedicalAppoinment_model->get_doctornameindividual($id);
		$template['doctornametotaldetails'] = $this->MedicalAppoinment_model->get_doctortotalindividual($id);
		$this->load->view('template',$template); 
	}
	public function delete_appointment(){	   
		$id = $this->uri->segment(3);
		$result= $this->MedicalAppoinment_model->appointment_delete($id);
		$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		redirect(base_url().'MedicalAppoinment_ctrl/view_appointmentdetails');	
	}
	public function appointment_status(){
		$data1 = array(
						"status" => '0'
						);
		$id = $this->uri->segment(3);		   
		$s=$this->MedicalAppoinment_model->update_appoinment_status($id, $data1);
		$this->session->set_flashdata('message', array('message' => 'Appoinment Disable','class' => 'warning'));
		redirect(base_url().'MedicalAppoinment_ctrl/view_appointmentdetails');	
	}
	public function appoinment_active(){
		$data1 = array(
						"status" => '1'
						);
		$id = $this->uri->segment(3);		   
		$s=$this->MedicalAppoinment_model->update_appoinment_status($id, $data1);
		$this->session->set_flashdata('message', array('message' => 'Appoinment Enable Successfully','class' => 'success'));
		redirect(base_url().'MedicalAppoinment_ctrl/view_appointmentdetails');	
	}
	public function appoinment_viewpopup(){
		$id=$_POST['id'];
		$template['data'] = $this->MedicalAppoinment_model->view_appoinmentpopup($id);
		$this->load->view('MedicalAppointmentdetails/medicalappoinment-popup-view',$template);
	}
	public function viewdoctor(){
		$id=$_POST['id'];
		$template['datasingle'] = $this->MedicalAppoinment_model->view_doctor($id);
		$this->load->view('MedicalAppointmentdetails/viewdoctor',$template);
	}
}