<?php 
class Img_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function imgdetails_add($data){
		$result = $this->db->insert('affilliated_hospitals', $data);
		return $result;
	}
}