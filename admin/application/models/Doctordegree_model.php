<?php 
class Doctordegree_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	public function get_degreedetails(){
 		         $query = $this->db->get('degree_categories');
			     $result = $query->result();
			     return $result;
 	}
	public function add_degredetails($data){	         
                 $result = $this->db->insert('degree_categories', $data);
                 return $result;
 	}
	public function degree_delete($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('degree_categories');
		if($result){
			return "success"; 
		 }
		 else {
			 return "error";
		 }
	}
	function get_single_degree($id){
		$this->db->where('id', $id);
		$query = $this->db->get('degree_categories');
		$result = $query->row();
		return $result;
	}
	function decreedetails_edit($data, $id){
		$this->db->where('id', $id);
		$result = $this->db->update('degree_categories',$data);
		return $result;
	}	
}