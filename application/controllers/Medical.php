<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Medical extends CI_Controller {	
	public function __construct() {
		parent::__construct();	
		check_installer();	
		$this->load->model('Doctor_Model');
		$this->load->model('Medical_Model');		
 	}	
	/* public function index(){						
		$data = array();
		if(isset($_POST) and !empty($_POST)){
			$data = $_POST;			 
			$result=$this->Medical_Model->getall_medicalfiltermap($data);			
			$this->load->library('googlemaps');	
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';		
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<img  class="img-mp-section" src= '.$row->display_image.' >'."".'<h2>'.$row->medical_name.'</h2>';				
						$this->googlemaps->add_marker($marker);
					}
				}
			}
			$template['map'] = $this->googlemaps->create_map();			 
		}else{			
			$result = $this->Medical_Model->get_latlang();		 
			$this->load->library('googlemaps');	
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';		
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<img  class="img-mp-section" src= '.$row->display_image.' >'."".'<h2>'.$row->medical_name.'</h2>';				
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
		$template['medical'] =$this->Medical_Model->getall_medicalconven($data);						
		$template['countries'] =$this->Medical_Model->get_countries();		
		$template['specialties'] =$this->Medical_Model->get_specialties();
		$template['insurance'] =$this->Medical_Model->get_insurance();				
		$template['page'] = "filter_medical";			
		$template['page_title'] = "medical Page";
		$template['data'] = "medical page";
		$this->load->view('template', $template);
	}	
	public function loadData($loadId = '', $loadType = ''){		
		if(empty($loadId) and empty($loadType)) {
			$loadType=$_POST['loadType'];
			$loadId=$_POST['loadId'];
		}
		$result=$this->Medical_Model->getData($loadType,$loadId);		
		return $result->result();
	}
	
	public function filtermedical(){
		if(isset($_POST)){
			$data = $_POST;			  
			$template['medical']=$this->Medical_Model->getall_medicalfilter($data);
			$result=$this->Medical_Model->getall_medicalfiltermap($data);			  
			$map_data = array();
			$this->load->library('googlemaps');		
			foreach($result as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){  	   
						$map_data[] = '{ "DisplayText": "'.$row->medical_name.'", "Location": "'.$row->medical_address.'", "LatitudeLongitude": "'.$row->latitude.','.$row->longitude.'"}';
					}
				}
			}
			$maps = '['.implode(",", $map_data).']';		 
			$temp = $this->load->view('filterresults_medical',$template,true);
		}		 		 
		foreach($template['medical'] as $rs){
			$last_id = $rs->id;
		}
		if(count($template['medical'])==0){
			$last_id =0;
		}		 
		print json_encode(array('total'=>count($template['medical']),'temp'=>$temp,'last_id'=>$last_id,'map_data'=>$maps));
	}	
	public function loadmore_medical(){		
		if(isset($_POST)){				  
			$data = $_POST;			 
			$template['medical']=$this->Medical_Model->getall_medicalload($data);			
			$this->load->view('loadmore_medical',$template);	
		}		
	}	
	
	public function loadmore_medicaldoctor(){
		$id = $this->uri->segment(3);
		if(isset($_POST)){				  
			$data = $_POST;			 
			$template['doctors']=$this->Medical_Model->getall_medicaldoctorload($data,$id);			
			$this->load->view('loadmore_medicaldoctor',$template);	
		}		
	} */
	/* Medical Search Pool Method */
	public function Search(){
		if($_POST){
			if(isset($_POST) && !empty($_POST)){
				$data = $_POST;
				$map_template['medical']=$this->Medical_Model->pushfilter_medicalsearch($data);
				foreach($map_template['medical'] as $row){
					if($row->latitude != ""){		
						if($row->longitude != ""){       
							$this->googlemaps->center = $row->latitude.",". $row->longitude;
							$config['zoom'] = 'auto';
							$config['apiKey'] = pull_settings()[0]->api_key;
							$this->googlemaps->initialize();		
							$marker = array();		
							$marker['position'] = $row->latitude.",". $row->longitude;
							$marker['infowindow_content']= '<h2>'.$row->medical_name.'</h2>'.'<h5>'.$row->medical_address.'</h5>';				
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
			$map_template['medical']=$this->Medical_Model->pushfilter_aftermedicalsearch($data);	
			foreach($map_template['medical'] as $row){
				if($row->latitude != ""){		
					if($row->longitude != ""){       
						$this->googlemaps->center = $row->latitude.",". $row->longitude;
						$config['zoom'] = 'auto';
						$config['apiKey'] = pull_settings()[0]->api_key;
						$this->googlemaps->initialize();		
						$marker = array();		
						$marker['position'] = $row->latitude.",". $row->longitude;
						$marker['infowindow_content']= '<h2>'.$row->medical_name.'</h2>'.'<h5>'.$row->medical_address.'</h5>';				
						$this->googlemaps->add_marker($marker);
					}
				}
			}
			$map_template['map'] = $this->googlemaps->create_map();
		}
		$map_template['cities'] = $this->Doctor_Model->pull_cities();		
		$map_template['specialties'] = $this->Medical_Model->get_specialties();
		$map_template['insurance'] = $this->Medical_Model->get_insurance();	
		$this->load->model('Home_Model');
		$map_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);	
		$map_template['page'] = "filter_medical";			
		$map_template['page_title'] = "medical Page";
		$map_template['data'] = "medical page";
		$map_template['post_data'] = $data;
		$this->load->view('map_template', $map_template);	
	}
	/* Medical Filter Search Pool Method */	
	public function filtersearch_medical(){
		if($_POST){
			if(isset($_POST) && !empty($_POST)){
				$data = $_POST;			  
				$map_template['medical']=$this->Medical_Model->pushfilter_aftermedicalsearch($data);				 
				$map_data = array();
				$this->load->library('googlemaps');		
				foreach($map_template['medical'] as $row){
					if($row->latitude != ""){		
						if($row->longitude != ""){  	   
							$map_data[] = '{ "DisplayText": "'.$row->medical_name.'", "Location": "'.$row->medical_address.'", "LatitudeLongitude": "'.$row->latitude.','.$row->longitude.'"}';
						}
					}
				}
				$maps = '['.implode(",", $map_data).']';		 
				$temp = $this->load->view('filterresults_medical',$map_template,true);		 								
				print json_encode(array('total'=>count($map_template['medical']),'temp'=>$temp,'map_data'=>$maps));
			}
		}	
	}
	/* === Medical Profile Page === */
	public function Search_doctor(){
		$id = $this->uri->segment(3);
        $map_template['view_medicalgallery'] =$this->Medical_Model->get_singlemedicalgallery($id);		
		$map_template['view_medical'] =$this->Medical_Model->get_singlemedical($id);
		if(isset($map_template['view_medical'])&!empty($map_template['view_medical'])){		
			$map_template['doctors'] =$this->Medical_Model->get_medicaldoctors($id);	
			$result = $this->Medical_Model->get_latlang_medical($id);		
			$this->load->library('googlemaps');			
			if($result->latitude != ""){		
				if($result->longitude != ""){       
					$this->googlemaps->center = $result->latitude.",". $result->longitude;
					$config['zoom'] = 'auto';		
					$this->googlemaps->initialize();		
					$marker = array();		
					$marker['position'] = $result->latitude.",". $result->longitude;
					$marker['infowindow_content']= '<h2>'.$result->medical_name.'</h2>'.'<h5>'.$result->medical_address.'</h5>';				
					$this->googlemaps->add_marker($marker);
				}
			}
			$map_template['map'] = $this->googlemaps->create_map();	
			$this->load->model('Home_Model');
			$map_template['footer_cities'] = $this->Home_Model->pull_footer_cities(6);
			$map_template['page'] = "medical_doctor";
			$map_template['page_title'] = "medical doctor Page";
			$map_template['data'] = "medical doctor page";
			$this->load->view('map_template', $map_template);			
		}	
	}
	public function loadDataReason($loadId = '', $loadType = ''){
		if(empty($loadId) and empty($loadType)) {
			$loadType=$_POST['loadType'];
			$loadId=$_POST['loadId'];
        }
		$result=$this->Medical_Model->getDataReason($loadType,$loadId);
		return $result->result();		
	}
}
?>