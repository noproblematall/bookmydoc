<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rating_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Rating_model');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	 public function view_ratingdetails(){
		 $template['page'] = "Ratingdetails/view-rating-details";
		 $template['page_title'] = "View Rating";
		 $template['data'] = $this->Rating_model->get_rtaing_val();
		 $this->load->view('template',$template);
	 }
	 public function clinic_ratingviewpopup(){
			$id=$_POST['clinicratedetailsval'];
			$template['data'] = $this->Rating_model->view_clinicpopup($id);
			$this->load->view('Ratingdetails/view-rating-popup',$template);
		}
	public function view_doctorpopup(){
		 $template['page'] = "Ratingdetails/view-ratingdoctor-details";
		 $template['page_title'] = "View Rating";
		 $template['data'] = $this->Rating_model->get_doctorrating_val();
		 $this->load->view('template',$template);
	}
	public function  doctor_ratingviewpopup(){
		$id=$_POST['doctorratedetailsval'];
		$template['data'] = $this->Rating_model->get_docdetails($id);
		$this->load->view('Ratingdetails/view-doctor-popup',$template);
	}
	public function view_hospitalpopup(){
		 $template['page'] = "Ratingdetails/view-ratinghospital-details";
		 $template['page_title'] = "View Rating";
		 $template['data'] = $this->Rating_model->get_hospitalrating_val();
		 $this->load->view('template',$template);
	}
	public function  hospital_ratingviewpopup(){
		$id=$_POST['hospitalratedetailsval'];
		$template['data'] = $this->Rating_model->get_hospitaldetails($id);
		$this->load->view('Ratingdetails/view-hospital-popup',$template);
	}
	public function view_medicalpopup(){
		 $template['page'] = "Ratingdetails/view-ratingmedical-details";
		 $template['page_title'] = "View Rating";
		 $template['data'] = $this->Rating_model->get_medicalrating_val();
		 $this->load->view('template',$template);
	}
	public function  medical_ratingviewpopup(){
		if(isset($_POST) & !empty($_POST)){
			$id=$_POST['medicalratedetailsval'];
			$template['data'] = $this->Rating_model->get_medicaldetails($id);
			$this->load->view('Ratingdetails/view-medical-popup',$template);
		}
	}
	public function delete_rating(){
		$id = $this->uri->segment(3);
		$result= $this->Rating_model->rating_delete($id);
		$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		redirect(base_url().'Rating_ctrl/view_ratingdetails');
	 }	
	 public function delete_docrating(){
		$id = $this->uri->segment(3);
		$result= $this->Rating_model->docrating_delete($id);
		$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		redirect(base_url().'Rating_ctrl/view_doctorpopup');
	 }	
	 public function delete_hosrating() {
		$id = $this->uri->segment(3);
		$result= $this->Rating_model->hosrating_delete($id);
		$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		redirect(base_url().'Rating_ctrl/view_hospitalpopup');
	 }	
	 public function delete_medrating(){
		$id = $this->uri->segment(3);
		$result= $this->Rating_model->medrating_delete($id);
		$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		redirect(base_url().'Rating_ctrl/view_medicalpopup');
	 }	
}