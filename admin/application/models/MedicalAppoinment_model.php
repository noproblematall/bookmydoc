<?php 
class MedicalAppoinment_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function get_appoinmentdetails()
	{
		$this->db->select('appointment.id as id, appointment.*, patient.patient_firstname,medical_center.medical_name, doctor.doctor_firstname');       
		$this->db->from('appointment' );
		$this->db->join('patient', 'patient.id = appointment.patient_id');
		$this->db->join('medical_center', 'medical_center.id = appointment.medical_id');
		$this->db->join('doctor', 'doctor.id = appointment.doctor_id');
		$this->db->group_by('appointment.id'); 
		$query = $this->db->get();
		$result = $query->result();
		$this->db->last_query();
		return $result;	
	}
	function medicalappointmentsinfo_add($data){
		$result = $this->db->insert('appointment', $data);
		return $result;
	}
	public function get_patientname(){
		$query = $this->db->get('patient');
		$result = $query->result();
		return $result;	
	}
	public function get_medicalname(){
		$query = $this->db->get('medical_center');
		$result = $query->result();
		return $result;	
	}
	public function get_doctorname(){  
		$query = $this->db->get('doctor');
		$result = $query->result();
		return $result;	
	}
	function get_appoinment_medical($id){
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
	function appointment_delete($id){
		 $this->db->where('id',$id);
		 $result = $this->db->delete('appointment');
		 if($result)
		 {
			return "success"; 
		 }
		 else
		 {
			 return "error";
		 }
	}
	function update_appoinment_status($data , $data1){
		         $this->db->where('id',$data);
				 $result = $this->db->update('appointment',$data1);
				 return $result; 
	}
	function view_appoinmentpopup($id){
		    $this->db->select('appointment.id as id, appointment.*, patient.patient_firstname,medical_center.medical_name, doctor.doctor_firstname');    
			$this->db->from('appointment' );
			$this->db->join('patient', 'patient.id = appointment.patient_id');
			$this->db->join('medical_center', 'medical_center.id = appointment.medical_id');
			$this->db->join('doctor', 'doctor.id = appointment.doctor_id');
			$this->db->group_by('appointment.id'); 
			$this->db->where('appointment.id',$id);
			$query = $this->db->get();
			$result = $query->row();
			return $result;	
	}
	function view_doctor($id){
		$this->db->select('id,doctor_firstname');
		$this->db->where(sprintf("find_in_set('%d', medical_id) !=",$id), 0);
		$query = $this->db->get('doctor');
		$result = $query->result();	
		return $result;	
	}
	function get_doctornameindividual($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get('appointment');
		$result1 = $query->row();
		if($result1){
			$this->db->where('id', $result1->doctor_id);
			$query = $this->db->get('doctor');
			$result = $query->row();
			if($result){
				return $result;		
			}
			else{
				return "Error";	
			}
		}
		else{
			return "Error";	
		}
	}
	function get_doctortotalindividual($id){
		$this->db->select('*');
		$this->db->where('id', $id);
	    $query = $this->db->get('appointment');
		$result1 = $query->row();
		if($result1){
			$this->db->where(sprintf("find_in_set('%d', medical_id) !=",$result1->medical_id), 0);
			$query = $this->db->get('doctor');
			$result = $query->result();
			if($result){
				return $result;		
			}
			else{
				return "Errorin";	
			}
		}
		else{
			return "Errorout";	
		}
	}
}