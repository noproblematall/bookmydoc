<?php 
class Appoinment_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function get_appoinmentdetails(){
			$this->db->select('appointment.id as id, appointment.*, doctor.doctor_firstname, patient.patient_firstname');     
			$this->db->from('appointment' );
			$this->db->join('doctor', 'doctor.id = appointment.doctor_id','left');
			$this->db->join('patient', 'patient.id = appointment.patient_id','left');
			$this->db->group_by('appointment.id'); 
			$query = $this->db->get();
			$result = $query->result();
			return $result;	
	}
	function appoinmentsinfo_add($data){
		$result = $this->db->insert('appointment', $data);
		return $result;
	}
	public function get_doctorname(){
		$query = $this->db->get('doctor');
		$result = $query->result();
		return $result;	
	}
	public function get_patientname(){  
		$query = $this->db->get('patient');
		$result = $query->result();
		return $result;	
	}
	function get_appoinment_doctor($id){
		$this->db->where('id', $id);
		$query = $this->db->get('appointment');
		$result = $query->row();
		return $result;	
	}
	function appoinmentsinfo_edit($data, $id){
		$this->db->where('id', $id);
		$result = $this->db->update('appointment', $data);
		return $result;
	}
	function appoinment_delete($id){
		 $this->db->where('id',$id);
		 $result = $this->db->delete('appointment');
		 if($result) {
			return "success"; 
		 }
		 else{
			 return "error";
		 }
	}
	function update_appoinment_status($data , $data1){
		         $this->db->where('id',$data);
				 $result = $this->db->update('appointment',$data1);
				 return $result; 
	}
	function view_appoinmentpopup($id){
		    $this->db->select('appointment.id as id, appointment.*, doctor.doctor_firstname, patient.patient_firstname,visit_categories.reason');        
			$this->db->from('appointment' );
			$this->db->join('doctor', 'doctor.id = appointment.doctor_id','left');
			$this->db->join('patient', 'patient.id = appointment.patient_id','left');
			$this->db->join('visit_categories', 'visit_categories.id = appointment.ill_reason','left');
			$this->db->group_by('appointment.id'); 
			$this->db->where('appointment.id',$id);
			$query = $this->db->get();
			$result = $query->row();
			return $result;	
	}
	function get_reason(){
		$query = $this->db->get('visit_categories');
		$result = $query->result();
		return $result;
	}
}