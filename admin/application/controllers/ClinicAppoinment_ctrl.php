<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ClinicAppoinment_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('ClinicAppoinment_model');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	  public function view_appointmentdetails(){
		  $template['page'] = "ClinicAppointmentdetails/view_appointmentdetails";
		  $template['page_title'] = "View Appoinmentdetails";
		  $template['data'] = $this->ClinicAppoinment_model->get_appoinmentdetails();
		  $this->load->view('template',$template);
	  }
	   public function add_clinicappointmentdetails(){
			$template['page'] = "ClinicAppointmentdetails/add_clinicappointment";
			$template['page_title'] = "View ClinicAppoinmentdetails";
		    $sessid=$this->session->userdata('logged_in');
		    if($_POST){
				$data = $_POST;	
				$result = $this->ClinicAppoinment_model->clinicappointmentsinfo_add($data);
				if($result) {
					$this->session->set_flashdata('message',array('message' => 'Add Appoinment Details successfully','class' => 'success'));
					redirect(base_url().'ClinicAppoinment_ctrl/view_appointmentdetails');
				}
				else {
					$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));
					redirect(base_url().'ClinicAppoinment_ctrl/view_appointmentdetails');
				}
			}
			 $template['patientnamedetails'] = $this->ClinicAppoinment_model->get_patientname();			
			 $template['clinicnamedetails'] = $this->ClinicAppoinment_model->get_clinicname();				 
			 $this->load->view('template',$template); 
	  }
	   public function edit_appointmentdetails(){
			$id = $this->uri->segment(3); 
			$template['page'] = "ClinicAppointmentdetails/edit-clinicappointment";
			$template['page_title'] = "View view_appointmentdetails";
			$template['data'] = $this->ClinicAppoinment_model->get_appoinment_clinic($id);

			if(!empty($template['data'])) {						 
				if($_POST){
					$data = $_POST;				
					$result = $this->ClinicAppoinment_model->appoinmentsinfo_edit($data, $id);
					$this->session->set_flashdata('message',array('message' => 'Edit Appoinment Information Updated successfully','class' => 'success'));
					redirect(base_url().'ClinicAppoinment_ctrl/view_appointmentdetails');		
				}
			}else{
				$this->session->set_flashdata('message', array('message' => "You don't have permission to access.",'class' => 'danger'));		
				redirect(base_url().'ClinicAppoinment_ctrl/view_appointmentdetails');		  
			}
			$template['patientnamedetails'] = $this->ClinicAppoinment_model->get_patientname();	
			$template['clinicnamedetails'] = $this->ClinicAppoinment_model->get_clinicname();				 
			$template['doctornamedetails'] = $this->ClinicAppoinment_model->get_doctornameindividual($id);
			$template['doctornametotaldetails'] = $this->ClinicAppoinment_model->get_doctortotalindividual($id);
			$this->load->view('template',$template); 
		}
        public function delete_appointment(){		   
			$id = $this->uri->segment(3);
			$result= $this->ClinicAppoinment_model->appointment_delete($id);
			$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
			redirect(base_url().'ClinicAppoinment_ctrl/view_appointmentdetails');	
	    }
		public function appointment_status(){
			  $data1 = array(
							"status" => '0'
						 );
			  $id = $this->uri->segment(3);		   
			  $s=$this->ClinicAppoinment_model->update_appoinment_status($id, $data1);
			  $this->session->set_flashdata('message', array('message' => 'Appoinment Disable','class' => 'warning'));
			  redirect(base_url().'ClinicAppoinment_ctrl/view_appointmentdetails');	
	    }
		public function appointment_active(){
			  $data1 = array(
						"status" => '1'
						 );
			  $id = $this->uri->segment(3);		   
			  $s=$this->ClinicAppoinment_model->update_appoinment_status($id, $data1);
			  $this->session->set_flashdata('message', array('message' => 'Appoinment Enable Successfully','class' => 'success'));
			  redirect(base_url().'ClinicAppoinment_ctrl/view_appointmentdetails');	
	    }
	    public function appoinment_viewpopup() {
			$id=$_POST['id'];
			$template['data'] = $this->ClinicAppoinment_model->view_appoinmentpopup($id);
			$this->load->view('ClinicAppointmentdetails/clinicappoinment-popup-view',$template);
	    }

	    public function viewdoctor()  {	
	    	$id=$_POST['id'];
		    $template['datasingle'] = $this->ClinicAppoinment_model->view_doctor($id);
		    $this->load->view('ClinicAppointmentdetails/viewdoctor',$template);
	    }
}