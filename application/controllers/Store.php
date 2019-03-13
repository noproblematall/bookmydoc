<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Store extends CI_Controller {	
	public function __construct() {
		parent::__construct();
		check_installer();		
		$this->load->helper('url','form');	
		$this->load->model('Store_Model');		
 	}
	public function loadData(){		
		$loadType=$_POST['loadType'];
		$loadId=$_POST['loadId'];
		$result=$this->Store_Model->getData($loadType,$loadId);		
		$HTML="";		
		if($result->num_rows() > 0){
			foreach($result->result() as $list){
				$HTML.="<option value='".$list->id."'>".$list->name."</option>";
			}
		}
		echo $HTML;
	}
	public function loadDataReason(){
		$loadType=$_POST['loadType'];
		$loadId=$_POST['loadId'];
		$result=$this->Store_Model->getDataReason($loadType,$loadId);		
		$HTML="";		
		if($result->num_rows() > 0){
			foreach($result->result() as $list){
				$HTML.="<option  value='".$list->id."'>".$list->name."</option>";
			}
		}
		echo $HTML;
	}
	
}
?>