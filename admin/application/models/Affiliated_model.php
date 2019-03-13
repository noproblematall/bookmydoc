<?php 
class Affiliated_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
 	function add_affiliatedetails($data){
         if($this->db->insert('affilliated_hospitals', $data)):
			return true;
		endif;	
 	}
 	function get_affiliatedetails(){
         $query = $this->db->get('affilliated_hospitals');
         $result = $query->result();
         return $result;
 	}
 	function affliated_delete($id){
 		 $this->db->where('id', $id);
 		 $result = $this->db->delete('affilliated_hospitals');
 		 if($result) {
 		 	return "Success";
 		 }
 		 else{
 		 	return "Error";
 		 }
 	}	
	function get_single_affiliate($id){
		$this->db->where('id',$id);
		$query = $this->db->get('affilliated_hospitals');
		$result = $query->row();
		return $result;
	}
	function affiliatedetails_edit($data,$id){
		$this->db->where('id', $id);
		$result = $this->db->update('affilliated_hospitals', $data);
		return $result;
	}
 }