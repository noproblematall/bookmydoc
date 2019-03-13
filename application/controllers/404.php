<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page404 extends CI_Controller {

    public function __construct() {
        parent::__construct();
		check_installer();
        $this->load->helper('url','form');
    }

    public function index()
    {
        $template['page'] = "404_page";
        $template['page_title'] = "404 Error";
        $this->load->view('template', $template);
    }

}
?>