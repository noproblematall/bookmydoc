<?php
	class Createpdf extends CI_Controller 
	{
		function index()
		{
			check_installer();
			$this->load->helper('pdf_helper');
			$this->load->view('pdfreport', $data);
		}	
	}
	
?>