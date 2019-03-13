<?php
	class Createpdf extends CI_Controller {
		function index(){
			$this->load->helper('pdf_helper');
			$this->load->view('pdfreport', $data);
		}	
	}
?>