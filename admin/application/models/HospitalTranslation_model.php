<?php 
class HospitalTranslation_model extends CI_Model {	
	public function _consruct(){
		parent::_construct();
 	}	
	function inserthome($data){
		/* additional page wamp ==start== */
		$homedata["lang['language']"] = $data["lang['language']"];
		$homedata["lang['home_lang']"] = $data["lang['home_lang']"];unset($data["lang['home_lang']"]);
		$logindata["lang['language']"] = $data["lang['language']"];
		$logindata["lang['login_lang']"] = $data["lang['login_lang']"];unset($data["lang['login_lang']"]);
		$searchdata["lang['language']"] = $data["lang['language']"];
		$searchdata["lang['search_lang']"] = $data["lang['search_lang']"];unset($data["lang['search_lang']"]);
		$doctorfilterdata["lang['language']"] = $data["lang['language']"];
		$doctorfilterdata["lang['doctorfilter_lang']"] = $data["lang['doctorfilter_lang']"];unset($data["lang['doctorfilter_lang']"]);
		$medicalfilterdata["lang['language']"] = $data["lang['language']"];
		$medicalfilterdata["lang['medicalfilter_lang']"] = $data["lang['medicalfilter_lang']"];unset($data["lang['medicalfilter_lang']"]);
		$hospitalfilterdata["lang['language']"] = $data["lang['language']"];
		$hospitalfilterdata["lang['hospitalfilter_lang']"] = $data["lang['hospitalfilter_lang']"];unset($data["lang['hospitalfilter_lang']"]);
		$clinicfilterdata["lang['language']"] = $data["lang['language']"];
		$clinicfilterdata["lang['clinicfilter_lang']"] = $data["lang['clinicfilter_lang']"];unset($data["lang['clinicfilter_lang']"]);
		$hospitalprofiledata["lang['language']"] = $data["lang['language']"];
		$hospitalprofiledata["lang['hospitalprofile_lang']"] = $data["lang['hospitalprofile_lang']"];unset($data["lang['hospitalprofile_lang']"]);
		$clinicprofiledata["lang['language']"] = $data["lang['language']"];
		$clinicprofiledata["lang['clinicprofile_lang']"] = $data["lang['clinicprofile_lang']"];unset($data["lang['clinicprofile_lang']"]);
		$doctorprofiledata["lang['language']"] = $data["lang['language']"];
		$doctorprofiledata["lang['doctorprofile_lang']"] = $data["lang['doctorprofile_lang']"];unset($data["lang['doctorprofile_lang']"]);
		$doctordata["lang['language']"] = $data["lang['language']"];
		$doctordata["lang['doctor_lang']"] = $data["lang['doctor_lang']"];unset($data["lang['doctor_lang']"]);
		$patientdata["lang['language']"] = $data["lang['language']"];
		$patientdata["lang['patient_lang']"] = $data["lang['patient_lang']"];unset($data["lang['patient_lang']"]);
		$ternsdata["lang['language']"] = $data["lang['language']"];
		$ternsdata["lang['terms_lang']"] = $data["lang['terms_lang']"];unset($data["lang['terms_lang']"]);
		$aboutdata["lang['language']"] = $data["lang['language']"];
		$aboutdata["lang['doctor_lang']"] = $data["lang['about_lang']"];unset($data["lang['about_lang']"]);
		/* ==end== additional page wamp */
		$date =  $data['created_date'];
		unset($data['created_date']);
		$createdby =  $data['created_by'];
	    unset($data['created_by']);
		unset($data['q']);		
		if(isset($data["lang['language']"]) && !empty($data["lang['language']"])){
			$this->db->where('languages',$data["lang['language']"]);
			$query = $this->db->get('languages');
			$result = $query->row();
			if($result){
				$updated_id =  $data["lang['language']"];
				unset($data['id']);	
			}		
		  }			
		$page_name = $data["lang['page_name']"];			
		$textFile= $data["lang['language']"];
		$extension = ".php";
		$location = '../application/language/'.'';
		$folderName = $textFile;
		$folderName = str_replace(" ", "_", $folderName); 
        $folderName = strtolower($folderName);
		if(!file_exists($location.$folderName) && !is_dir($location.$folderName)){   
			mkdir($location.$folderName, 0777, TRUE);				
		}
		$filename=$location.$folderName.'/'.$page_name.$extension;
		$myfile = fopen($filename, "wb") or die("Unable to open file!");
		$txt = '<?php ';
		foreach($data as $key=>$value){
			$txt .='$'.$key.' = "'.$value.'";'."\r\n";
		}
		$txt .=' ?>';
		fwrite($myfile, $txt);
		fclose($myfile);
				$final_data = array( 
							'languages' => $textFile,
							'created_date' =>  $date,
							'created_by' => $createdby
				);
		if(isset($updated_id)){
			$this->db->where('languages', $updated_id);
			$query = $this->db->get('languages');
			if( $query->num_rows() == 1 ){ 
				$final_data2 = array( 
								'updated_date' =>  $date,
								'updated_by' => $createdby
					);
					$this->db->where("languages",$updated_id);
					$this->db->update('languages',$final_data2);
					return 2;
			}
		}else{
			/*  for page wamp ===start===*/
			$home_lang=$location.$folderName.'/'.'home_lang'.$extension;
			$home_file = fopen($home_lang, "wb") or die("Unable to open file!");				
			$home_txt = '<?php ';
			foreach($homedata as $key=>$value){
				$home_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$home_txt .=' ?>';
			fwrite($home_file, $home_txt);
			fclose($home_file);
			$login_lang=$location.$folderName.'/'.'login_lang'.$extension;
			$login_file = fopen($login_lang, "wb") or die("Unable to open file!");				
			$login_txt = '<?php ';
			foreach($logindata as $key=>$value){
				$login_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$login_txt .=' ?>';
			fwrite($login_file, $login_txt);
			fclose($login_file);
		
			$search_lang=$location.$folderName.'/'.'search_lang'.$extension;
			$search_file = fopen($search_lang, "wb") or die("Unable to open file!");				
			$search_txt = '<?php ';
			foreach($homedata as $key=>$value){
				$search_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$search_txt .=' ?>';
			fwrite($search_file, $search_txt);
			fclose($search_file);
			
			$doctorfilter_lang=$location.$folderName.'/'.'doctorfilter_lang'.$extension;
			$doctorfilter_file = fopen($doctorfilter_lang, "wb") or die("Unable to open file!");				
			$doctorfilter_txt = '<?php ';
			foreach($doctorfilterdata as $key=>$value){
				$doctorfilter_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$doctorfilter_txt .=' ?>';
			fwrite($doctorfilter_file, $doctorfilter_txt);
			fclose($doctorfilter_file);
			
			$clinicfilter_lang=$location.$folderName.'/'.'clinicfilter_lang'.$extension;
			$clinicfilter_file = fopen($clinicfilter_lang, "wb") or die("Unable to open file!");				
			$clinicfilter_txt = '<?php ';
			foreach($clinicfilterdata as $key=>$value){
				$clinic_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$clinicfilter_txt .=' ?>';
			fwrite($clinicfilter_file, $clinicfilter_txt);
			fclose($clinicfilter_file);
			
			$medicalfilter_lang=$location.$folderName.'/'.'medicalfilter_lang'.$extension;
			$medicalfilter_file = fopen($medicalfilter_lang, "wb") or die("Unable to open file!");				
			$medicalfilter_txt = '<?php ';
			foreach($medicalfilterdata as $key=>$value){
				$medicalfilter_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$medicalfilter_txt .=' ?>';
			fwrite($medicalfilter_file, $medicalfilter_txt);
			fclose($medicalfilter_file);
			
			$hospitalfilter_lang=$location.$folderName.'/'.'hospitalfilter_lang'.$extension;
			$hospitalfilter_file = fopen($hospitalfilter_lang, "wb") or die("Unable to open file!");				
			$hospitalfilter_txt = '<?php ';
			foreach($hospitalfilterdata as $key=>$value){
				$hospitalfilter_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$hospitalfilter_txt .=' ?>';
			fwrite($hospitalfilter_file, $hospitalfilter_txt);
			fclose($hospitalfilter_file);
			
			$hospitalprofile_lang=$location.$folderName.'/'.'hospitalprofile_lang'.$extension;
			$hospitalprofile_file = fopen($hospitalprofile_lang, "wb") or die("Unable to open file!");				
			$hospitalprofile_txt = '<?php ';
			foreach($hospitalprofiledata as $key=>$value){
				$hospitalprofile_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$hospitalprofile_txt .=' ?>';
			fwrite($hospitalprofile_file, $hospitalprofile_txt);
			fclose($hospitalprofile_file);
			
			$clinicprofile_lang=$location.$folderName.'/'.'clinicprofile_lang'.$extension;
			$clinicprofile_file = fopen($clinicprofile_lang, "wb") or die("Unable to open file!");				
			$clinicprofile_txt = '<?php ';
			foreach($clinicprofiledata as $key=>$value){
				$clinicprofile_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$clinicprofile_txt .=' ?>';
			fwrite($clinicprofile_file, $clinicprofile_txt);
			fclose($clinicprofile_file);
			
			$doctorprofile_lang=$location.$folderName.'/'.'doctorprofile_lang'.$extension;
			$doctorprofile_file = fopen($doctorprofile_lang, "wb") or die("Unable to open file!");				
			$doctorprofile_txt = '<?php ';
			foreach($doctorprofiledata as $key=>$value){
				$doctorprofile_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$doctorprofile_txt .=' ?>';
			fwrite($doctorprofile_file, $doctorprofile_txt);
			fclose($doctorprofile_file);
			
			$doctor_lang=$location.$folderName.'/'.'doctor_lang'.$extension;
			$doctor_file = fopen($doctor_lang, "wb") or die("Unable to open file!");				
			$doctor_txt = '<?php ';
			foreach($doctordata as $key=>$value){
				$doctor_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$doctor_txt .=' ?>';
			fwrite($doctor_file, $doctor_txt);
			fclose($doctor_file);
			
			$patient_lang=$location.$folderName.'/'.'patient_lang'.$extension;
			$patient_file = fopen($patient_lang, "wb") or die("Unable to open file!");				
			$patient_txt = '<?php ';
			foreach($patientdata as $key=>$value){
				$patient_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$patient_txt .=' ?>';
			fwrite($patient_file, $patient_txt);
			fclose($patient_file);
			
			$terms_lang=$location.$folderName.'/'.'terms_lang'.$extension;
			$terms_file = fopen($terms_lang, "wb") or die("Unable to open file!");				
			$terms_txt = '<?php ';
			foreach($termstdata as $key=>$value){
				$terms_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$terms_txt .=' ?>';
			fwrite($terms_file, $terms_txt);
			fclose($terms_file);
			
			$about_lang=$location.$folderName.'/'.'about_lang'.$extension;
			$about_file = fopen($about_lang, "wb") or die("Unable to open file!");				
			$about_txt = '<?php ';
			foreach($aboutdata as $key=>$value){
				$about_txt .='$'.$key.' = "'.$value.'";'."\r\n";
			}
			$about_txt .=' ?>';
			fwrite($about_file, $about_txt);
			fclose($about_file);
			$result = $this->db->insert('languages',$final_data);
			if($result){
				return 1;
			}else{
				return 0;
			}
		}		
	}
	public function get_languages(){
		$this->db->select('languages.*,role.rolename');
		$this->db->from('languages' );
		$this->db->join('role', 'role.id = languages.created_by','left');
		$this->db->group_by("languages.id");			
		$query = $this->db->get();
		return $query->result();
	}
	public function get_single_language($id){
		$this->db->where("id",$id);
		$query = $this->db->get("languages");
		return $query->row();
	}
	public function delete_language($language_name){
		$this->db->where('languages',$language_name);
		$result = $this->db->delete('languages');
		if($result){
			return true; 
		}
		else{
			 return false;
		}
	}
}
?>