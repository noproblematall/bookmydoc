<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Language_translation extends CI_Controller {
	public function __construct() {
	parent::__construct();	
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Languagetrans_model');		
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	public function add_language(){
		$template['page'] = "Langtrans/add_language";
		$template['page_title'] = "Add Language Translation";
		$this->load->view('template',$template);		 
	}
	public function insert_language(){
		$data= json_decode(file_get_contents("php://input"));
		$data =(array) $data;
        $role=$this->Languagetrans_model->insertlanguage($data);
        echo $role;
	}
	public function view_language(){
		$template['page'] = "Langtrans/view_language";
		$template['page_title'] = "View Language Translation";
		$template['query1'] = $this->Languagetrans_model->get_languages();
		$this->load->view('template',$template);		
	}
	public function edit_language(){
		$id = $this->uri->segment(3);
		$template['page'] = "Langtrans/edit_language";
		$template['page_title'] = "edit Language Translation";
		$template['data'] = $this->Languagetrans_model->get_single_language($id);
		$this->load->view('template',$template);
	}
	public function languages_delete(){
		$data=$_POST;   
        $user=$this->Languagetrans_model->delete_langauge($data);      
        echo $user;
	}
} 
?>