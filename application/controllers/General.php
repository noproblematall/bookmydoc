<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class General extends CI_Controller {
	public function __construct() {
		parent::__construct();
		check_installer();
		$this->load->model('Home_Model');
 	}	
	public function aboutus(){		
		$search_template['cities'] =$this->Home_Model->pull_cities();			
		$search_template['languages'] =$this->Home_Model->get_languages();
		$search_template['specialties'] =$this->Home_Model->get_specialties();
		$search_template['insurance'] =$this->Home_Model->get_insurance();
		$search_template['page'] = "about_us";
		$search_template['page_title'] = "Aboutus Page";
		$search_template['data'] = "Aboutus page";		
		$this->load->view('search_template', $search_template);
	}
	public function careers(){
		$search_template['cities'] =$this->Home_Model->pull_cities();			
		$search_template['languages'] =$this->Home_Model->get_languages();
		$search_template['specialties'] =$this->Home_Model->get_specialties();
		$search_template['insurance'] =$this->Home_Model->get_insurance();
		$search_template['page'] = "career";
		$search_template['page_title'] = "Career Page";
		$search_template['data'] = "Career page";		
		$this->load->view('search_template', $search_template);
	}
	public function contact(){
		$search_template['cities'] =$this->Home_Model->pull_cities();			
		$search_template['languages'] =$this->Home_Model->get_languages();
		$search_template['specialties'] =$this->Home_Model->get_specialties();
		$search_template['insurance'] =$this->Home_Model->get_insurance();
		$search_template['page'] = "contact";
		$search_template['page_title'] = "Contact Page";
		$search_template['data'] = "Contact page";			
		$this->load->view('search_template', $search_template);
	}
	public function terms(){
		$search_template['cities'] =$this->Home_Model->pull_cities();			
		$search_template['languages'] =$this->Home_Model->get_languages();
		$search_template['specialties'] =$this->Home_Model->get_specialties();
		$search_template['insurance'] =$this->Home_Model->get_insurance();
		$search_template['page'] = "terms";
		$search_template['page_title'] = "Terms Page";
		$search_template['data'] = "Terms page";			
		$this->load->view('search_template', $search_template);
	}
}
?>