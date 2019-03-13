<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clinicfilter_Translation extends CI_Controller {
	public function __construct() {
	parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('ClinicfilterTranslation_model');
		$this->load->helper('directory');
		if(!$this->session->userdata('logged_in')) { 
			redirect(base_url());
		}
    }
	public function add_clinicfilter()
	{
		$template['page'] = "Translation/Clinicfilter/add_clinicfilter";
		$template['page_title'] = "Add Language Translation";
		$this->load->view('template',$template);
	}
	public function insert_clinicfilter()
	{
		$data= json_decode(file_get_contents("php://input"));
		$data =(array) $data;
        $role=$this->ClinicfilterTranslation_model->inserthome($data);
        echo $role;die;
	}
	public function view_clinicfilter()
	{		
		$textFile ='clinicfilter_lang.php';
		$textFile = str_replace(" ", "_", $textFile); 
        $textFile = strtolower($textFile);
		$trimmed_lang = array();
		$location = '../application/language/'.'';
		$lang_directory = directory_map($location, TRUE);		
		foreach($lang_directory as $key => $value):
			$trimmed_lang[] = trim($value , " \."); 				
		endforeach; 
		$avoid_final_lang=array(); $template['final_lang']=array();
		foreach($trimmed_lang as $single_lang):		
			$locationfiles = '../application/language/'.$single_lang.'/'.'';		
			if(!file_exists($locationfiles.$textFile) && !is_dir($locationfiles.$textFile)): 
				$avoid_final_lang[] = $single_lang;				
			else:
				$template['final_lang'][] = trim($single_lang , "\/"); 
			endif;
		endforeach;
		$template['final_lang'];
		$template['page'] = "Translation/Clinicfilter/view_clinicfilter";
		$template['page_title'] = "View Language Translation";		
		$this->load->view('template',$template);	
	}
	public function edit_clinicfilter()
	{
		$template['language_name'] = $this->uri->segment(3);
		$template['page'] = "Translation/Clinicfilter/edit_clinicfilter";
		$template['page_title'] = "edit Language Translation";
		$this->load->view('template',$template);
			
	}
	public function clinicfilter_delete()
	{
		$textFile ='clinicfilter_lang.php';
		$language_name = $this->uri->segment(3);	
		$locationfiles = '../application/language/'.$language_name.'/'.$textFile;
		$language_location = '../application/language/'.$language_name.'';
		if(unlink($locationfiles)):
			$lang_directory = directory_map($language_location, TRUE);
			if(is_bool($lang_directory ) === false):
				rmdir($language_location);
				$result = $this->ClinicfilterTranslation_model->delete_language($language_name);				
				if($result):
					$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
					redirect(base_url().'Clinicfilter_Translation/view_clinicfilter');
				endif;		
			else:
				$this->session->set_flashdata('message', array('message' => 'Deleted Successfully','class' => 'success'));
				redirect(base_url().'Clinicfilter_Translation/view_clinicfilter');	
			endif;
		else:			
			$this->session->set_flashdata('message', array('message' => 'Request went wrong.Contact Administrator.','class' => 'danger'));
			redirect(base_url().'Clinicfilter_Translation/view_clinicfilter');
		endif;
	}	
} 
?>