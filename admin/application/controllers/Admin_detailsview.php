<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_detailsview extends CI_Controller {
	public function __construct() {
		parent::__construct();
		 date_default_timezone_set("Asia/Kolkata");
		 $this->load->model('Admin_model');
		 if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		 }
    }
	    public function Admin_change_password(){
			$template['page'] = 'Viewadmindetails/View-admin-profile';
			$template['page_title'] = "View Admin profile";					
			$id = $this->session->userdata('logged_in')['id'];
			if(isset($_POST) and !empty($_POST)) {
				if(isset($_POST['reset_pwd'])) {
				$data = $_POST;
					if($data['n_password'] !== $data['c_password']) {
						$this->session->set_flashdata('message', array('message' => 'Password doesn\'t match', 'title' => 'Error !', 'class' => 'danger'));
						redirect(base_url().'Admin_detailsview/Admin_profile_view');
					}
					else {
						unset($data['c_password']);						
						$result = $this->Admin_model->update_admin_passwords($data, $id);
						if($result) {
							if($result === "notexist") {
								$this->session->set_flashdata('message', array('message' => 'Invalid Password', 'title' => 'Warning !', 'class' => 'warning'));
								redirect(base_url().'Admin_detailsview/Admin_profile_view');
							}
							else {
								$this->session->set_flashdata('message', array('message' => 'Password updated successfully', 'title' => 'Success !', 'class' => 'success'));
								redirect(base_url().'Admin_detailsview/Admin_profile_view');
							}
						}
						else {
							$this->session->set_flashdata('message', array('message' => 'Sorry, Error Occurred', 'title' => 'Error !', 'class' => 'danger'));
							redirect(base_url().'Admin_detailsview/Admin_profile_view');
						}
					}
				}
			}
		$this->load->view('template', $template);
	}
	   public function Admin_profile_view() {
			$template['page'] = 'Viewadmindetails/View-admin-profile';
			$template['page_title'] = "View Admin profile";			
			$id = $this->session->userdata('logged_in')['id'];
			if(isset($_POST['picturechecker']) && !empty($_POST['picturechecker'])){	
				if(isset($_FILES['profile_picture'])) {
				$config = set_upload_profilepic('assets/uploads/profile_pic/admin');
				$this->load->library('upload');
				$new_name = time()."_".$_FILES["profile_picture"]['name'];
				$config['file_name'] = $new_name;
				$this->upload->initialize($config);
				if ( ! $this->upload->do_upload('profile_picture')) {
						unset($data['profile_picture']);
				}
				else{
					$upload_data = $this->upload->data();
					$data['username'] = $this->session->userdata('logged_in')['username'];
					$data['profile_picture'] =$config['upload_path']."/".$upload_data['file_name'];
					if($id == $this->session->userdata('logged_in')['id']) {
							$this->session->set_userdata('profile_picture',$data['profile_picture']);	
					}
				}
				$result = $this->Admin_model->update_admin_profile($data, $id);							
			}
			}
			$template['data'] = $this->Admin_model->get_admin_profile_details($id);
			$this->load->view('template', $template);
	   }		  
}	