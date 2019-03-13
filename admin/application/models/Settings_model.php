<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Settings_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
   }
	  function get_currencies(){
		  $query = $this->db->get('countries');
		  return $result = $query->result();
	  }
	 function settings_viewing(){
		  $query = $this->db->query(" SELECT * FROM `settings` order by id DESC ")->row();
		  return $query ;
	 }
	 public function update_settings($data){
		   $result = $this->db->update('settings', $data); 
		   return $result;
	 }
	 public function get_languages(){
		 $query = $this->db->get("language_set");
		 return $query->result();
	 }
  
}
?>