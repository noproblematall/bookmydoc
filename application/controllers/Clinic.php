<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clinic extends CI_Controller {	
	public function __construct() {
		parent::__construct();	
		check_installer();	
		$this->load->model('Clinic_Model');
		$this->load->model('Doctor_Model');
 	}	
	/*public function index(){		
		$data = array();
		if(isset($_POST) and !empty($_POST)){
			$data = $_POST;				
			$result=$this->Clinic_Model->getall_clinicfiltermap($data);						   
			$this->load->library('googlemaps');	
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';		
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<img  class="img-mp-section" src= '.$row->display_image.' >'."".'<h2>'.$row->clinic_name.'</h2>';				
						$this->googlemaps->add_marker($marker);
					}
				}
			}
			$template['map'] = $this->googlemaps->create_map();				 
		}else{			 
			$result = $this->Clinic_Model->get_latlang();		 
			$this->load->library('googlemaps');	
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';		
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<img  class="img-mp-section" src= '.$row->display_image.' >'."".'<h2>'.$row->clinic_name.'</h2>';				
						$this->googlemaps->add_marker($marker);
					}
				}
			}	
			$template['map'] = $this->googlemaps->create_map();		
		}
		$template['post_data'] = $data;
		if(isset($data['country'])) {
			$template['states'] =$this->loadData($data['country'], 'state');
		}
		if(isset($data['state'])) {
			$template['cities'] =$this->loadData($data['state'], 'city');
		}	
		if(isset($data['specialty'])) {
			$template['reasons'] =$this->loadDataReason($data['specialty'], 'reason');
		}
		$template['clinics'] =$this->Clinic_Model->getall_clinicconven($data);						
		$template['countries'] =$this->Clinic_Model->get_countries();		
		$template['specialties'] =$this->Clinic_Model->get_specialties();
		$template['insurance'] =$this->Clinic_Model->get_insurance();				
		$template['page'] = "filter_clinic";			
		$template['page_title'] = "clinic Page";
		$template['data'] = "clinic page";
		$this->load->view('template', $template);
	}	
	public function loadData($loadId = '', $loadType = ''){		
		if(empty($loadId) and empty($loadType)) {
			$loadType=$_POST['loadType'];
			$loadId=$_POST['loadId'];
		}
		$result=$this->Clinic_Model->getData($loadType,$loadId);		
		return $result->result();
	}		
	public function filterclinic(){
		if(isset($_POST)){
			$data = $_POST;			  
			$template['clinics']=$this->Clinic_Model->getall_clinicfilter($data);
			$result=$this->Clinic_Model->getall_clinicfiltermap($data);			  
			$map_data = array();
			$this->load->library('googlemaps');		
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){  	   
						$map_data[] = '{ "DisplayText": "'.$row->clinic_name.'", "Location": "'.$row->clinic_address.'", "LatitudeLongitude": "'.$row->latitude.','.$row->longitude.'"}';
					}
				}
			}
			$maps = '['.implode(",", $map_data).']';		 
			$temp = $this->load->view('filterresults_clinic',$template,true);
		}		 		  
		foreach($template['clinics'] as $rs){
			$last_id = $rs->id;
		}
		if(count($template['clinics'])==0){
			$last_id =0;
		}		 
		print json_encode(array('total'=>count($template['clinics']),'temp'=>$temp,'last_id'=>$last_id,'map_data'=>$maps));
	}	
	public function loadmore_clinic(){		
		if(isset($_POST)){				  
			$data = $_POST;			 
			$template['clinics']=$this->Clinic_Model->getall_clinicload($data);			
			$this->load->view('loadmore_clinic',$template);	
		}		
	}			
    public function loadmore_clinicdoctor(){
		$id = $this->uri->segment(3);
		if(isset($_POST)){				  
			$data = $_POST;			 
			$template['doctors']=$this->Clinic_Model->getall_clinicdoctorload($data,$id);			
			$this->load->view('loadmore_clinicdoctor',$template);	
		}		
	} */
	/* Clinic Search Pool Method */
	public function Search(){
		if($_POST){
			if(isset($_POST) && !empty($_POST)){
				$data = $_POST;
				$map_template['clinics']=$this->Clinic_Model->pushfilter_clinicsearch($data);
				foreach($map_template['clinics'] as $row){
					if($row->latitude != ""){		
						if($row->longitude != ""){       
							$this->googlemaps->center = $row->latitude.",". $row->longitude;
							$config['zoom'] = 'auto';
							$config['apiKey'] = pull_settings()[0]->api_key;
							$this->googlemaps->initialize();		
							$marker = array();		
							$marker['position'] = $row->latitude.",". $row->longitude;
							$marker['infowindow_content']= '<h2>'.$row->clinic_name.'</h2>'.'<h5>'.$row->clinic_address.'</h5>';
							$this->googlemaps->add_marker($marker);
						}
					}
				}
				$map_template['map'] = $this->googlemaps->create_map();
				if(isset($data['specialty'])) {
					$map_template['reasons'] =$this->loadDataReason($data['specialty'], 'reason');
				}
				$single_city=$this->Doctor_Model->pull_city($data['latitude'],$data['longitude']);
				$data['main_city'] = $single_city->id;					
			}
		}else{
			$data['cities_id'] = '-1';
			$map_template['clinics']=$this->Clinic_Model->pushfilter_afterclinicsearch($data);
			foreach($map_template['clinics'] as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';
						$config['apiKey'] = pull_settings()[0]->api_key;
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<h2>'.$row->clinic_name.'</h2>'.'<h5>'.$row->clinic_address.'</h5>';
						$this->googlemaps->add_marker($marker);
					}
				}
			}
			$map_template['map'] = $this->googlemaps->create_map();
		}
		$this->load->model('Home_Model');
		$map_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);
		$map_template['cities'] = $this->Doctor_Model->pull_cities();		
		$map_template['specialties'] = $this->Clinic_Model->get_specialties();
		$map_template['insurance'] = $this->Clinic_Model->get_insurance();				
		$map_template['page'] = "filter_clinic";			
		$map_template['page_title'] = "clinic Page";
		$map_template['data'] = "clinic page";
		$map_template['post_data'] = $data;
		$this->load->view('map_template', $map_template);	
	}
	/* Clinic Filter Search Pool Method */	
	public function filtersearch_clinic(){
		if($_POST){
			if(isset($_POST) && !empty($_POST)){
				$data = $_POST;			  
				$map_template['clinics']=$this->Clinic_Model->pushfilter_afterclinicsearch($data);				 
				$map_data = array();
				$this->load->library('googlemaps');		
				foreach($map_template['clinics'] as $row){
					if($row->latitude != ""){		
						if($row->longitude != ""){  	   
							$map_data[] = '{ "DisplayText": "'.$row->clinic_name.'", "Location": "'.$row->clinic_address.'", "LatitudeLongitude": "'.$row->latitude.','.$row->longitude.'"}';
						}
					}
				}
				$maps = '['.implode(",", $map_data).']';		 
				$temp = $this->load->view('filterresults_clinic',$map_template,true);		 								
				print json_encode(array('total'=>count($map_template['clinics']),'temp'=>$temp,'map_data'=>$maps));
			}
		}	
	}
	/* === Clinic Profile Page === */
	public function Search_doctor(){
		$id = $this->uri->segment(3);				
		$map_template['view_clinic'] =$this->Clinic_Model->get_singleclinic($id);
		if(isset($map_template['view_clinic'])&!empty($map_template['view_clinic'])){						
			$result = $this->Clinic_Model->get_latlang_clinic($id);		
			$this->load->library('googlemaps');			
			if($result->latitude != ""){		
				if($result->longitude != ""){       
					$this->googlemaps->center = $result->latitude.",". $result->longitude;
					$config['zoom'] = 'auto';		
					$this->googlemaps->initialize();		
					$marker = array();		
					$marker['position'] = $result->latitude.",". $result->longitude;
					$marker['infowindow_content']= '<h2>'.$result->clinic_name.'</h2>'.'<h5>'.$result->clinic_address.'</h5>';$this->googlemaps->add_marker($marker);
				}
			}
			$map_template['view_clinicgallery'] =$this->Clinic_Model->get_singleclinicgallery($id);	
			$map_template['doctors'] =$this->Clinic_Model->get_clinicdoctors($id);
			$map_template['map'] = $this->googlemaps->create_map();	
			$this->load->model('Home_Model');
			$map_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);
			$map_template['page'] = "clinic_doctor";
			$map_template['page_title'] = "clinic doctor Page";
			$map_template['data'] = "clinic doctor page";
			$this->load->view('map_template', $map_template);			
		}	
	}
	public function loadDataReason($loadId = '', $loadType = ''){
		if(empty($loadId) and empty($loadType)) {
			$loadType=$_POST['loadType'];
			$loadId=$_POST['loadId'];
        }
		$result=$this->Clinic_Model->getDataReason($loadType,$loadId);
		return $result->result();		
	}		
}
?>