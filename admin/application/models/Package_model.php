<?php 
class Package_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function add_package($data){
		$result = $this->db->insert('packages',$data);
		return $result;
	}
	function add_hospital_package($data){
		$result = $this->db->insert('center_packages',$data);
		return $result;
	}
	function add_packagedetails($data){
		$result = $this->db->insert('booking',$data);
		return $result;
	}
	function get_doctor(){
		$query = $this->db->get('doctor');
		$result = $query->result();
		return $result;
	}
	function get_package(){
		$query = $this->db->get('packages');
		$result = $query->result();
		return $result;
	}
	function get_hospital_package(){
		$query = $this->db->get('center_packages');
		$result = $query->result();
		return $result;
	}
	function get_package1($id){
		$this->db->where('id', $id);
		$query = $this->db->get('booking');
		$result = $query->row();
		return $result;
	}
	function get_price(){
		$query = $this->db->get('packages');
		$result = $query->result();
		return $result;
	}
	function get_period(){
		$query = $this->db->get('packages');
		$result = $query->result();
		return $result;
	}
	function get_booking(){
		 $this->db->select('booking.id as id,doctor_firstname,package_name');
		 $this->db->from('booking');
		 $this->db->join('packages', 'packages.id = booking.package_id','left');
		 $this->db->join('doctor', 'doctor.id = booking.doctor_id','left');
		 $query = $this->db->get();
		 $result = $query->result();
		 return $result;
	}
	function package_delete($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('packages');
		if($result){
			return "Success";
		}
		else{
			return "Error";
		}
	}
	function package_hospital_delete($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('center_packages');
		if($result){
			return "Success";
		}
		else{
			return "Error";
		}
	}
	function booking_delete($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('booking');
		if($result){
			return "Success";
		}
		else{
			return "Error";
		}
	}
	function get_single_package($id){
		$this->db->where('id', $id);
		$query = $this->db->get('packages');
		$result = $query->row();
		return $result;
	}
	function get_single_hospital_package($id){
		$this->db->where('id', $id);
		$query = $this->db->get('center_packages');
		$result = $query->row();
		return $result;
	}
	function packagedetails_edit($data, $id){
		$this->db->where('id', $id);
		$result = $this->db->update('packages',$data);
		return $result;
	}
	function packagedetails_edit_hospital($data, $id){
		$this->db->where('id', $id);
		$result = $this->db->update('center_packages',$data);
		return $result;
	}
}