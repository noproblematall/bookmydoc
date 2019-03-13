<?php 
class Rating_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function get_rtaing_val(){
	    $this->db->select('clinic.id as id, clinic.clinic_name,  rating_clinic.rating, AVG( rating_clinic.rating) as average');
		$this->db->from(' rating_clinic as  rating_clinic');
		$this->db->join('clinic',' clinic.id =  rating_clinic.clinic_id','left');
		$this->db->group_by("clinic.id");
		$query = $this->db->get();
		$result = $query->result();
		return $result	;
	}
	function view_clinicpopup($id){
		$this->db->select('rating_clinic.id as id,  
		                   rating_clinic.clinic_id,
		                   rating_clinic.patient_id,
						   rating_clinic.rating,
						   rating_clinic.review,
						   patient.patient_firstname');
		$this->db->from('rating_clinic');
		$this->db->join('patient','patient.id =  rating_clinic.patient_id','left');
		$this->db->where('rating_clinic.clinic_id',$id);
		$query = $this->db->get();
		$result = $query->result();
		return $result	;
	}
	function get_doctorrating_val(){
		$this->db->select('doctor.id as id, doctor.doctor_firstname, rating_doctor.rating, AVG( rating_doctor.rating) as average');
		$this->db->from('rating_doctor as  rating_doctor');
		$this->db->join('doctor',' doctor.id = rating_doctor.doctor_id','left');
		$this->db->group_by("doctor.id");
		$query = $this->db->get();
		$result = $query->result();
		return $result;		
	}
	function get_docdetails($id){
		$this->db->select('rating_doctor.id as id,
		                   rating_doctor.review,
		                   rating_doctor.rating,
		                   rating_doctor.doctor_id,
		                   rating_doctor.patient_id,
						   patient.patient_firstname'
                          );
		$this->db->from('rating_doctor');
		$this->db->join('patient',' patient.id = rating_doctor.patient_id','left');
		$this->db->where('rating_doctor.doctor_id', $id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;		
	}
	function get_hospitalrating_val(){
		$this->db->select('hospital.id as id, hospital.hospital_name, rating_hospital.rating, AVG(rating_hospital.rating) as average');
		$this->db->from('rating_hospital as  rating_hospital');
		$this->db->join('hospital',' hospital.id = rating_hospital.hospital_id','left');
		$this->db->group_by("hospital.id");
		$query = $this->db->get();
		$result = $query->result();
		return $result;		
	}
	function get_hospitaldetails($id){
		$this->db->select('rating_hospital.id as id, 
		                   rating_hospital.review, 
						   rating_hospital.rating, 
						   rating_hospital.hospital_id, 
						   rating_hospital.patient_id,
						   patient.patient_firstname');
		$this->db->from('rating_hospital');
		$this->db->join('patient',' patient.id = rating_hospital.patient_id','left');
		$this->db->where('rating_hospital.hospital_id', $id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;		
	}
	function get_medicalrating_val(){
		$this->db->select('medical_center.id as id, medical_center.medical_name,  rating_medical.id as rating_medical_id,rating_medical.rating, AVG(rating_medical.rating) as average');
		$this->db->from('rating_medical as  rating_medical');
		$this->db->join('medical_center',' medical_center.id = rating_medical.medical_id','left');
		$this->db->group_by("medical_center.id");
		$query = $this->db->get();
		$result = $query->result();
		return $result;		
	}
	function get_medicaldetails($id){
		$this->db->select('rating_medical.id as id,  
		                   rating_medical.review,  
						   rating_medical.rating,  
						   rating_medical.medical_id,
						   rating_medical.patient_id,
						   patient.patient_firstname');
		$this->db->from('rating_medical');
		$this->db->join('patient',' patient.id = rating_medical.patient_id');
		$this->db->where('rating_medical.medical_id', $id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;			
	}
	 public function rating_delete($id){
		 $this->db->where('clinic_id',$id);
		 $result = $this->db->delete('rating_clinic');
		 if($result) {
			return "success"; 
		 }
		 else{
			 return "error";
		 }
	 }
	public function docrating_delete($id){ 
		 $this->db->where('doctor_id',$id);
		 $result = $this->db->delete('rating_doctor');
		 if($result){
			return "success"; 
		 }
		 else {
			 return "error";
		 }
	 }
	public function hosrating_delete($id){
		 $this->db->where('hospital_id',$id);
		 $result = $this->db->delete('rating_hospital');
		 if($result) {
			return "success"; 
		 }
		 else{
			 return "error";
		 }
	 }
	 public function medrating_delete($id){
		 $this->db->where('medical_id',$id);
		 $result = $this->db->delete('rating_medical');
		 if($result) {
			return "success"; 
		 }
		 else {
			 return "error";
		 }
	 }
}