<?php 
class Speciality_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
 	public function get_uniquespecialty(){
 	    $this->db->from('specialty_categories');
    	$query = $this->db->get();
		$result = $query->result();
		return $result;
 	}
	/**Get**/
   public function get_specialitydetails()
 	{
		$query = $this->db->get('specialty_categories');
		$result = $query->result();
		return $result;
 	}
	/**Add**/
	public function add_specialitydetails($data)
 	{
		$this->db->where('specialty_name', $data['specialty_name']);
		$query = $this->db->get('specialty_categories');
		if( $query->num_rows() > 0 ){ 
			return false;
		} 
		else{
         $result = $this->db->insert('specialty_categories', $data);
         return $result;
		}
 	}
	/**Get Single**/
	function get_single_speciality($id){
		  
		       $this->db->where('id',$id);
			   $query = $this->db->get('specialty_categories');
			   $result = $query->row();
			   return $result;  
	}
	/**Edit**/
	function speclitydetails_edit($data, $id){
		    
		$this->db->where('specialty_name', $data['specialty_name']);
		$this->db->where('id<>', $id);
		$query = $this->db->get('specialty_categories');
		if( $query->num_rows() > 0 ){ 
			return false;
		} 
		else{
			   $this->db->where('id', $id);
			   $result = $this->db->update('specialty_categories', $data); 
			   return $result;
		}
	 }
	 /**Delete**/
     public function speciality_delete($id){ 
		 $this->db->where('id',$id);
		 $result = $this->db->delete('specialty_categories');
		 if($result) {
			return "success"; 
		 }
		 else {
			 return "error";
		 }
	 }
}