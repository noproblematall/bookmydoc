<?php 
class Language_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function add_languagedetails($data){
		$result = $this->db->insert('language_categories',$data);
		return $result;
	}
	function get_languagedetails(){
		$query = $this->db->get('language_categories');
		$result = $query->result();
		return $result;
	}
	function languages_delete($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('language_categories');
		if($result){
			return "Success";
		}
		else{
			return "Error";
		}
	}
	function get_single_language($id){
		$this->db->where('id', $id);
		$query = $this->db->get('language_categories');
		$result = $query->row();
		return $result;
	}
	function languagedetails_edit($data, $id){
		$this->db->where('id', $id);
		$result = $this->db->update('language_categories',$data);
		return $result;
	}
}