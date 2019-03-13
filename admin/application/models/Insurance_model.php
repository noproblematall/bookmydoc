<?php 
class Insurance_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function get_insurdetails(){
		$query = $this->db->get('insurance_categories');
		$result = $query->result();
		return $result;
	}
	function add_insurdetails($data){
		$result = $this->db->insert('insurance_categories', $data);
		return $result;
	}
	function insurance_delete($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('insurance_categories');
		if($result) {
			return "success"; 
		 }
		 else{
			 return "error";
		 }
	}
	function get_single_insurance($id){
		$this->db->where('id', $id);
		$query = $this->db->get('insurance_categories');
		$result = $query->row();
		return $result;
	}
	function insurancedetails_edit($data, $id){
		$this->db->where('id', $id);
		$result = $this->db->update('insurance_categories', $data);
		return $result;
	}
}