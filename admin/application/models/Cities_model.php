<?php 
class Cities_model extends CI_Model {
	public function _consruct(){
		parent::_construct();
 	}
	function add_city($data){//print_r($data['city']);die;
		/*$this->db->where('city', $data['city']);
		$query = $this->db->get('cities');
		if( $query->num_rows() > 0 ){ 
			return false;
		} 
		else{*/
			$data['city']=$data['city'];
			$data['state']=$data['state'];
			$data['country']=$data['country'];
			$data['zip']=$data['zip'];
			
			$lat=explode('.',$data['latitude']);
			$data['short_lat'] = $lat[0];
			
 
				$lat=explode('.',$data['longitude']);
			$data['short_lon'] = $lat[0];
			
			
			$result = $this->db->insert('cities',$data);
			return $result;
		//}
	}
	function get_city(){
		$query = $this->db->get('cities');
		$result = $query->result();
		return $result;
	}
	function city_delete($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('cities');
		if($result){
			return "Success";
		}
		else{
			return "Error";
		}
	}
	function get_single_city($id){
		$this->db->where('id', $id);
		$query = $this->db->get('cities');
		$result = $query->row();
		return $result;
	}
	function city_edit($data, $id){
		/*$this->db->where('address', $data['address']);
		$this->db->where('id<>', $id);
		$query = $this->db->get('cities');
		if( $query->num_rows() > 0 ){ 
			return false;
		} 
		else{
			$addr=explode(',',$data['address']);
			$data['short_address'] = $addr[0];
			$lat=explode('.',$data['latitude']);
			$data['short_lat'] = $lat[0];
			$lat=explode('.',$data['longitude']);
			$data['short_lon'] = $lat[0];
			$this->db->where('id', $id);
			$result = $this->db->update('cities',$data);
			return $result;
		}*/
		$data['city']=$data['city'];
			$data['state']=$data['state'];
			$data['country']=$data['country'];
			$data['zip']=$data['zip'];
			$lat=explode('.',$data['latitude']);
			$data['short_lat'] = $lat[0];
			$lat=explode('.',$data['longitude']);
			$data['short_lon'] = $lat[0];
			$result = $this->db->update('cities',$data);
			return $result;
	}
}