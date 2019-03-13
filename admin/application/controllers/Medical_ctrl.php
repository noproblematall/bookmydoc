<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Medical_ctrl extends CI_Controller {
	public function __construct() {
	parent::__construct();		
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Medical_model');		
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	public function view_medicaldetails(){
		$template['page'] = "Medicalcenter/view-medicalcenter";
		$template['page_title'] = "View Medical Details";
		$template['data'] = $this->Medical_model->get_medicaldetails();
		$this->load->view('template',$template);
	}
	public function get_medicaldetailsstate(){
		if($_POST){		  
			$data = $_POST;
			$id=$_POST['value'];
			$result = $this->Medical_model->get_medicalsvaldetails($id);
			$template['medicalstatedetails'] = '';
			foreach($result as $am){ 
				$template['medicalstatedetails'] .= '<option value="'.$am->id.'">'. $am->state_name.' </option>';
			}							
			echo $template['medicalstatedetails'];
		}
	}
	public function add_medicalcitydetails() { 
		if($_POST){		  
			$data = $_POST;
			$id=$_POST['value'];
			$result = $this->Medical_model->getmedical_citydetails($id);
			$template['medicalcitydetailsval'] = '';
			foreach($result as $ams){
				$template['medicalcitydetailsval'] .= '<option value="'.$ams->id.'">'. $ams->city_name.' </option>';
			}							
			echo $template['medicalcitydetailsval'];
		}
	}	
	public function delete_medical(){
		$id = $this->uri->segment(3);
		$result = $this->Medical_model->medical_delete($id);	
		$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
		redirect(base_url().'Medical_ctrl/view_medicaldetails');	
	}
	public function medical_status(){
		$data1 = array(
						"status" => '0'
						);
		$id = $this->uri->segment(3);		   
		$s=$this->Medical_model->update_medical_status($id, $data1);
		$this->session->set_flashdata('message', array('message' => 'Medical Disable','class' => 'warning'));
		redirect(base_url().'Medical_ctrl/view_medicaldetails');
	}
	public function medical_active(){
		$data1 = array(
						"status" => '1'
						);
		$id = $this->uri->segment(3);		   
		$s=$this->Medical_model->update_medical_status($id, $data1);
		$this->session->set_flashdata('message', array('message' => 'Medical Enable Successfully','class' => 'success'));
		redirect(base_url().'Medical_ctrl/view_medicaldetails');
	}		
	public function medical_viewpopup(){
		$id=$_POST['medicaldetailsval'];
		$template['res'] = $this->Medical_model->get_submedical($id);
		$template['data'] = $this->Medical_model->view_popup_medical($id);
		$this->load->view('Medicalcenter/medical-popup-view',$template);
	}
	public function add_medicalgallery() {
		$template['page'] = "Medicalcenter/medical-gallery";
		$template['page_title'] = "View Gallery"; 
		$userdetails=$this->session->userdata('logged_in');
		$userid=$userdetails['id'];				   
		if($_POST) {				  
			$data = $_POST;
			$data['user_id']=$userid;	
			$files = $_FILES;
			$cpt = count($_FILES['image']['name']);
			for($i=0; $i<$cpt; $i++) {           
				$_FILES['image']['name']= $data['user_id']."-".$files['image']['name'][$i];
				$_FILES['image']['type']= $files['image']['type'][$i];
				$_FILES['image']['tmp_name']= $files['image']['tmp_name'][$i];
				$_FILES['image']['error']= $files['image']['error'][$i];
				$_FILES['image']['size']= $files['image']['size'][$i];				  
				$config = upload_medical_image('uploads/hospital');
				$this->load->library('upload');
				$new_name = time()."_".$_FILES["image"]['name'];
				$config['file_name'] = $new_name;
				$this->upload->initialize($config);
				if ( ! $this->upload->do_upload('image')) {
					$this->session->set_flashdata('message', array('message' => "Display Picture : ".$this->upload->display_errors(), 'title' => 'Error !', 'class' => 'danger'));
				}
				else {					
					$upload_data = $this->upload->data();
					$data['image'] = $config['upload_path']."/".$upload_data['file_name']; 
					$result = $this->Medical_model->medicalgallery_add($data);
					if($result) {
						$this->session->set_flashdata('message',array('message' => 'Add Gallery Details successfully','class' => 'success'));
					}
					else {
						$this->session->set_flashdata('message', array('message' => 'Error','class' => 'error'));  
					}
				}	
			}
		}				  
		$template['medicalresult'] = $this->Medical_model->get_medicalgallery();
		$template['data'] = $this->Medical_model->getmedical_gallery();
		$this->load->view('template',$template);
	}
	function view_medicalgallery()
	{
		$id = $this->uri->segment(3);
		$template['page'] = "Medicalcenter/view-medical-gallery";
		$template['page_title'] = "View Gallery";
		$template['data'] = $this->Medical_model->get_medical_gallery($id);
		if(!empty($template['data'])) {
			$this->load->view('template',$template);
		}
		else {
			$this->session->set_flashdata('message', array('message' => "You don't have permission to access.",'class' => 'danger'));
			redirect(base_url().'Medical_ctrl/add_medicalgallery');
		}
	}
	 function delete_medicalgallery(){
		$id = $_POST['id'];
		$result = $this->Medical_model->medicalgallery_delete($id);
		return  $result;
	 }
}