<?php 
class Visitation_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function get_specialitydetails(){
		 $query = $this->db->get('specialty_categories');
	     $result = $query->result();
	     return $result;
	}
	function add_visitationdetails($data){
		$this->db->where('specialty_id', $data['specialty_id']);
		$this->db->where('reason', $data['reason']);
		$query = $this->db->get('visit_categories');
		if( $query->num_rows() > 0 ){ 
			return false;
		} 
		else{
		$result = $this->db->insert('visit_categories', $data);
		return $result;
		}
	}
	 public function view_speciality(){
		$this->db->select('visit_categories.id as id,reason,specialty_id,specialty_categories.specialty_name');
        $this->db->from('visit_categories');
	    $this->db->join('specialty_categories', 'specialty_categories.id = specialty_id');
		$this->db->order_by("specialty_id", "desc"); 
		$query = $this->db->get();
	    $result = $query->result();
		
		return $result;	 
 	}
	function visitation_delete($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('visit_categories');
		if($result){
			return "Success";
		}
		else{
			return "Error";
		}
	}
	function get_single_visits($id){
		$this->db->where('id', $id);
		$query = $this->db->get('visit_categories');
		$result = $query->row();
		return $result;
	}
	function visitdetails_edit($data, $id){
		$this->db->where('specialty_id', $data['specialty_id']);
		$this->db->where('reason', $data['reason']);
		$this->db->where('id<>', $id);
		$query = $this->db->get('visit_categories');
		if( $query->num_rows() > 0 ){ 
			return false;
		} 
		else{
		$this->db->where('id', $id);
		$result = $this->db->update('visit_categories', $data);
		return $result;
		}
	}
}