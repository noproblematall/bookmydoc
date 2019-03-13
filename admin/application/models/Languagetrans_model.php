<?php 
class Languagetrans_model extends CI_Model {	
	public function _consruct(){
		parent::_construct();
 	}
	function insertlanguage($data){
		print_r($data);
		if(isset($data['languages']) && !empty($data['languages'])){
			$this->db->where('languages',$data['languages']);
			$query = $this->db->get('language_set');
			$result = $query->row();
			if($result){
				$updated_id =  $data['languages'];
				unset($data['id']);	
			}		
		  }	
		  
		$textFile= $data['languages'];
		$extension = ".php";
		$filename='includes/'.$textFile.$extension;
		$myfile = fopen($filename, "wb") or die("Unable to open file!"); 
		$txt = '<?php ';
		foreach($data as $key=>$value){
			$txt .='$'.$key.' = "'.$value.'";'."\r\n";
		}
		$txt .=' ?>';
		fwrite($myfile, $txt);
		fclose($myfile);
		$user = array(
			'languages' => $textFile
		);
		if(isset($updated_id)){
			$id =  $updated_id;		
			$user1 = array(
				'languages' => $textFile
			);
			$this->db->where('id', $id);
			$result = $this->db->update('language_set',$user1);
			$this->db->last_query();
			if($result){
				return 2;
			}
			else{
				return 0;
			}
		}else{
			if($this->db->insert('language_set',$user)){
				return 1;
			}
			else{
				return 0;
			}
		}
	}
	public function get_languages(){
		$query = $this->db->get('language_set');
		return $query->result();
	}
	public function get_single_language($id){
		$this->db->where("id",$id);
		$query = $this->db->get("language_set");
		return $query->row();
	}
	function delete_langauge($data){
		$id = $data['id'];
		$this->db->where('id', $id);
		if($this->db->delete('language_set')){
			echo 1;
		}
		else{
			echo 0;
		}
	}
}
?>