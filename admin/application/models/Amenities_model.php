<?php 
class Amenities_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function add_amenitiesdetails($data){
		$result = $this->db->insert('amenities_categories', $data);
		return $result;
	}
	function get_amenitiesdetails(){
		$query = $this->db->get('amenities_categories');
		$result = $query->result();
		return $result;
	}
	function get_single_amenities($id){
		$this->db->where('id', $id);
		$query = $this->db->get('amenities_categories');
		$result = $query->row();
		return $result;
	}
	function amenitiesdetails_edit($data , $id){
		$this->db->where('id', $id);
		$result = $this->db->update('amenities_categories', $data);
		return $result;
	}
	function amenities_delete($id){
		 $this->db->where('id', $id);
 		 $result = $this->db->delete('amenities_categories');
 		 if($result) {
 		 	return "Success";
 		 }
 		 else{
 		 	return "Error";
 		 }
	}
}