<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Appoinment_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Appoinment_model');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	   public function view_appoinmentdetails(){  
		  $template['page'] = "Appoinmentdetails/view-appoinment";
		  $template['page_title'] = "View Appoinmentdetails";
		  $template['data'] = $this->Appoinment_model->get_appoinmentdetails();
		  $this->load->view('template',$template);
	  }
        public function delete_appoinment(){      
			$id = $this->uri->segment(3);
			$result= $this->Appoinment_model->appoinment_delete($id);
			$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
			redirect(base_url().'Appoinment_ctrl/view_appoinmentdetails');	
	    }

	    public function appoinment_viewpopup() {
	    	  $id=$_POST['appoinmentdetailsval'];
		      $template['data'] = $this->Appoinment_model->view_appoinmentpopup($id);
		      $this->load->view('Appoinmentdetails/appoinment-popup-view',$template);
	    }
		public function appoinment_status(){
			  $data1 = array(
							"status" => '0'
						 );
			  $id = $this->uri->segment(3);		   
			  $s=$this->Appoinment_model->update_appoinment_status($id, $data1);
			  $this->session->set_flashdata('message', array('message' => 'Successfully Cancelled','class' => 'warning'));
			  	redirect(base_url().'Appoinment_ctrl/view_appoinmentdetails');	
	    }
		public function appoinment_active(){
			  $data1 = array(
							"status" => '1'
						 );
			  $id = $this->uri->segment(3);		   
			  $s=$this->Appoinment_model->update_appoinment_status($id, $data1);
			  $this->session->set_flashdata('message', array('message' => ' Successfully Approved','class' => 'success'));
			 	redirect(base_url().'Appoinment_ctrl/view_appoinmentdetails');	
	    }
		
		
		
		
		
		
		
}