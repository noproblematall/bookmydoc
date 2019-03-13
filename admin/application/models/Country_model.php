<?php 
class Country_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
/////////////////////////////////////////////////
////////*******COUNTR ADD*************///////////	
	function addcountry_details($data){
		$result = $this->db->insert('country_categories', $data);
		return $result;
	}
	function get_countrydetails(){
		        $query = $this->db->get('country_categories');
			    $result = $query->result();
			    return $result;
	}
	function get_single_country($id){
		$this->db->where('id', $id);
		$query = $this->db->get('country_categories');
		$result = $query->row();
		return $result;
	}
	function countrydetails_edit($data, $id){
		$this->db->where('id', $id);
		$result = $this->db->update('country_categories',$data);
		return $result;
	}
	function country_delete($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('country_categories');
		if($result){
			return "Success";
		}
		else{
			return "Error";
		}
	}
////////////////////////////////////////////////////
////**************STATE ADD*******************//////
      function add_statesedetails($data)  {
		  $result = $this->db->insert('state_categories', $data);
		  return $result; 
	  }	  
	  function get_singlecountrysdetails(){
		        $query = $this->db->get('country_categories');
			    $result = $query->result();
			    return $result;
	  }
	  function get_singlestatesdetails(){
				 $this->db->select('state_categories.id as id, state_categories.state_name, country_categories.country_name');
			     $this->db->from('state_categories');
			     $this->db->join('country_categories', 'country_categories.id = state_categories.country_id','left');
				 $this->db->group_by("id"); 
				 $query = $this->db->get();
			     $result = $query->result();
			     return $result;	
	  }
	  function get_single_states($id){
		  $this->db->where('id', $id);
		  $query = $this->db->get('state_categories');
		  $result = $query->row();
		  return $result;
	  }
	  function statesdetails_edit($data, $id) {
				$this->db->where('id', $id);
				$result = $this->db->update('state_categories', $data);
				return $result;
	  }
	  function get_singlecountryvals() {
		        $query = $this->db->get('country_categories');
			    $result = $query->result();
			    return $result;
	  }
	  function states_delete($id){
		  $this->db->where('id', $id);
		  $result = $this->db->delete('state_categories');
		  if($result){
			  return "Success";
		  }
		  else{
			  return "Error"; 
		  }
	  }
     function add_citydetails($data){
		 $result = $this->db->insert('city_categories', $data);
		 return $result;
	 }
	 function get_singlecitysdetails(){
		        $query = $this->db->get('country_categories');
			    $result = $query->result();
			    return $result;
	 }
	 function get_addsinglestatesval() {
		        $query = $this->db->get('state_categories');
			    $result = $query->result();
			    return $result;
	 }
	 public function get_statsdetails($id) {
		$this->db->where('country_id', $id);
		$query = $this->db->get('state_categories');
		$result = $query->result();				
		return $result;
	   } 	   
	   function get_citysval() {
				 $this->db->select('city_categories.id as id, city_categories.city_name, country_categories.country_name, state_categories.state_name ');
			     $this->db->from('city_categories');
			     $this->db->join('country_categories', 'country_categories.id = city_categories.country_id','left');
			     $this->db->join('state_categories', 'state_categories.id = city_categories.state_id','left');
				 $this->db->group_by("id"); 
				 $query = $this->db->get();
			     $result = $query->result();
			     return $result;
	   }
	   function get_single_citys($id){
		        $this->db->where('id', $id);
				$query = $this->db->get('city_categories');
			    $result = $query->row();
                return $result;
	   }
	   function citysdetails_edit($data, $id) {
		   $this->db->where('id', $id);
		   $result = $this->db->update('city_categories', $data);
		   return $result;
	   } 
	    function get_cityspoint() {
				$id=$_POST['value'];
				$this->db->where('country_id', $id);
				$query = $this->db->get('state_categories');
			    $result = $query->result();
				foreach($result as $editrouteget){
					echo '<option value="'.$editrouteget->id.'">'. $editrouteget->state_name.' </option>';
				}
				    return $result; 	
	     } 
		 function citys_delete($id){
			 $this->db->where('id', $id);
			 $result = $this->db->delete('city_categories');
			 if($result){
				 return "Success";
			 }
			 else {
				 return "Error";
			 } 
		 }
}