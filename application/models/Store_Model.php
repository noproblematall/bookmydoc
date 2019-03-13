<?php
class Store_Model extends CI_Model

	{
	public

	function _construct()
		{
		parent::_construct();
		}

		public function getData($loadType,$loadId){
		if($loadType=="state"){
			$fieldList='id,state_name as name';
			$table='state_categories';
			$fieldName='country_id';
			$orderByField='state_name';						
		}else{
			$fieldList='id,city_name as name';
			$table='city_categories';
			$fieldName='state_id';
			$orderByField='city_name';	
		}
		
		$this->db->select($fieldList);
		$this->db->from($table);
		$this->db->where($fieldName, $loadId);
		$this->db->order_by($orderByField, 'asc');
		$query=$this->db->get();
		return $query; 
	}
		public function getDataReason($loadType,$loadId){
			$loadType=="reason";
			$fieldList='id,reason as name';
			$table='visit_categories';
			$fieldName='specialty_id';
			$orderByField='reason';						
		
		
		$this->db->select($fieldList);
		$this->db->from($table);
		$this->db->where($fieldName, $loadId);
		$this->db->order_by($orderByField, 'asc');
		$query=$this->db->get();
		return $query; 
			
			
		}
	}
	?>