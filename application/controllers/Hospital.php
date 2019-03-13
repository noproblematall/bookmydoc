<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hospital extends CI_Controller {	
	public function __construct() {
		parent::__construct();
		check_installer();				
		$this->load->model('Doctor_Model');
		$this->load->model('Hospital_Model');		
 	}	
	/*public function index(){					
		$data = array();
		if(isset($_POST) and !empty($_POST)){
			$data = $_POST;		
			$result=$this->Hospital_Model->getall_hospitalfiltermap($data);			
			$this->load->library('googlemaps');	
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';		
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<img  class="img-mp-section" src= '.$row->display_image.' >'."".'<h2>'.$row->hospital_name.'</h2>';				
						$this->googlemaps->add_marker($marker);
					}
				}
			}
			$template['map'] = $this->googlemaps->create_map();			 
		}else{			 
			$result = $this->Hospital_Model->get_latlang();		 
			$this->load->library('googlemaps');	
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';		
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<img  class="img-mp-section" src= '.$row->display_image.' >'."".'<h2>'.$row->hospital_name.'</h2>';				
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
		$template['hospital'] =$this->Hospital_Model->getall_hospitalconven($data);						
		$template['countries'] =$this->Hospital_Model->get_countries();		
		$template['specialties'] =$this->Hospital_Model->get_specialties();
		$template['insurance'] =$this->Hospital_Model->get_insurance();				
		$template['page'] = "filter_hospital";			
		$template['page_title'] = "hospital Page";
		$template['data'] = "hospital page";
		$this->load->view('template', $template);
	}	
	public function loadData($loadId = '', $loadType = ''){		
		if(empty($loadId) and empty($loadType)) {
			$loadType=$_POST['loadType'];
			$loadId=$_POST['loadId'];
		}
		$result=$this->Hospital_Model->getData($loadType,$loadId);		
		return $result->result();
	}	
	public function filterhospital(){
		if(isset($_POST)){
			$data = $_POST;			  
			$template['hospital']=$this->Hospital_Model->getall_hospitalfilter($data);
			$result=$this->Hospital_Model->getall_hospitalfiltermap($data);			  
			$map_data = array();
			$this->load->library('googlemaps');		
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){  	   
						$map_data[] = '{ "DisplayText": "'.$row->hospital_name.'", "Location": "'.$row->hospital_address.'", "LatitudeLongitude": "'.$row->latitude.','.$row->longitude.'"}';
					}
				}
			}
			$maps = '['.implode(",", $map_data).']';		 
			$temp = $this->load->view('filterresults_hospital',$template,true);
		}		 		 
		foreach($template['hospital'] as $rs){
			$last_id = $rs->id;
		}
		if(count($template['hospital'])==0){
			$last_id =0;
		}		 
		print json_encode(array('total'=>count($template['hospital']),'temp'=>$temp,'last_id'=>$last_id,'map_data'=>$maps));
	}	
	public function loadmore_hospital(){		
		if(isset($_POST)){				  
			$data = $_POST;			 
				$template['hospital']=$this->Hospital_Model->getall_hospitalload($data);			
				$this->load->view('loadmore_hospital',$template);	
		}		
	}
	
	public function loadmore_hospitaldoctor(){
		$id = $this->uri->segment(3);
		if(isset($_POST)){				  
			$data = $_POST;			 
			$template['doctors']=$this->Hospital_Model->getall_hospitaldoctorload($data,$id);			
			$this->load->view('loadmore_hospitaldoctor',$template);	
		}		
	} */
	/* Hospital Search Pool Method */
	public function Search(){
		if($_POST){
			if(isset($_POST) && !empty($_POST)){
				$data = $_POST;
				$map_template['hospital']=$this->Hospital_Model->pushfilter_hospitalsearch($data);
				foreach($map_template['hospital'] as $row){
					if($row->latitude != ""){		
						if($row->longitude != ""){       
							$this->googlemaps->center = $row->latitude.",". $row->longitude;
							$config['zoom'] = 'auto';
							$config['apiKey'] = pull_settings()[0]->api_key;
							$this->googlemaps->initialize();		
							$marker = array();		
							$marker['position'] = $row->latitude.",". $row->longitude;
							$marker['infowindow_content']= '<h2>'.$row->hospital_name.'</h2>'.'<h5>'.$row->hospital_address.'</h5>';
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
			$map_template['hospital']=$this->Hospital_Model->pushfilter_afterhospitalsearch($data);	
			foreach($map_template['hospital'] as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';
						$config['apiKey'] = pull_settings()[0]->api_key;
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<h2>'.$row->hospital_name.'</h2>'.'<h5>'.$row->hospital_address.'</h5>';
						$this->googlemaps->add_marker($marker);
					}
				}
			}
			$map_template['map'] = $this->googlemaps->create_map();
		}	
		$map_template['cities'] = $this->Doctor_Model->pull_cities();		
		$map_template['specialties'] = $this->Hospital_Model->get_specialties();
		$map_template['insurance'] = $this->Hospital_Model->get_insurance();	
		$this->load->model('Home_Model');
		$map_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);
		$map_template['page'] = "filter_hospital";			
		$map_template['page_title'] = "hospital Page";
		$map_template['data'] = "hospital page";
		$map_template['post_data'] = $data;
		$this->load->view('map_template', $map_template);
	}
	/* Hospital Filter Search Pool Method */
	public function filtersearchhospital(){
		if($_POST){
			if(isset($_POST) && !empty($_POST)){
				$data = $_POST;			  
				$map_template['hospital']=$this->Hospital_Model->pushfilter_afterhospitalsearch($data);				 
				$map_data = array();
				$this->load->library('googlemaps');		
				foreach($map_template['hospital'] as $row){
					if($row->latitude != ""){		
						if($row->longitude != ""){  	   
							$map_data[] = '{ "DisplayText": "'.$row->hospital_name.'", "Location": "'.$row->hospital_address.'", "LatitudeLongitude": "'.$row->latitude.','.$row->longitude.'"}';
						}
					}
				}
				$maps = '['.implode(",", $map_data).']';		 
				$temp = $this->load->view('filterresults_hospital',$map_template,true);		 							
				print json_encode(array('total'=>count($map_template['hospital']),'temp'=>$temp,'map_data'=>$maps));
			}
		}	
	}
	/* === Hospital Profile Page === */
	public function Search_doctor(){
		$id = $this->uri->segment(3);	
		$map_template['view_hospitalgallery'] =$this->Hospital_Model->get_singlehospitalgallery($id);
		$map_template['view_hospital'] =$this->Hospital_Model->get_singlehospital($id);
		if(isset($map_template['view_hospital'])&!empty($map_template['view_hospital'])){		
			$map_template['doctors'] =$this->Hospital_Model->get_hospitaldoctors($id);	
			$result = $this->Hospital_Model->get_latlang_hospital($id);		
			$this->load->library('googlemaps');			
			if($result->latitude != ""){		
				if($result->longitude != ""){       
					$this->googlemaps->center = $result->latitude.",". $result->longitude;
					$config['zoom'] = 'auto';		
					$this->googlemaps->initialize();		
					$marker = array();		
					$marker['position'] = $result->latitude.",". $result->longitude;
					$marker['infowindow_content']= '<h2>'.$result->hospital_name.'</h2>'.'<h5>'.$result->hospital_address.'</h5>';				
					$this->googlemaps->add_marker($marker);
				}
			}	
			$map_template['map'] = $this->googlemaps->create_map();	
			$this->load->model('Home_Model');
			$map_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);
			$map_template['page'] = "hospital_doctor";
			$map_template['page_title'] = "hospital doctor Page";
			$map_template['data'] = "hospital doctor page";
			$this->load->view('map_template', $map_template);			
		}	
	}
	public function loadDataReason($loadId = '', $loadType = ''){
		if(empty($loadId) and empty($loadType)) {
			$loadType=$_POST['loadType'];
			$loadId=$_POST['loadId'];
        }
		$result=$this->Hospital_Model->getDataReason($loadType,$loadId);
		return $result->result();		
	}	
}
?>