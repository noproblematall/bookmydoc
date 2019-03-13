<?php 
class Currency_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function add_currencydetails($data){
		$result = $this->db->insert('countries',$data);
		return $result;
	}
	function get_curencydetails(){
		$query = $this->db->get('countries');
		$result = $query->result();
		return $result;
	}
	function currencies_delete($id){
		$this->db->where('id_countries', $id);
		$result = $this->db->delete('countries');
		if($result){
			return "Success";
		}
		else{
			return "Error";
		}
	}
	function get_single_currency($id){
		$this->db->where('id_countries', $id);
		$query = $this->db->get('countries');
		$result = $query->row();
		return $result;
	}
	function currencydetails_edit($data, $id){
		$this->db->where('id_countries', $id);
		$result = $this->db->update('countries',$data);
		return $result;
	}
}