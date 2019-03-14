<?php
class Login_Model extends CI_Model{
	public function _construct(){
		parent::_construct();
	}			
	public function Insert_hospital($data){
		if ($this->db->insert("hospital", $data)){
			return true;
		}
	}
	public function Insert_medical($data){			
		if ($this->db->insert("medical_center", $data)){
			return true;
		}
	}
	public function Insert_clinic($data){				
		if ($this->db->insert("clinic", $data)){
			return true;
		}
	}
	public function Insert_doctor($data){			
		if ($this->db->insert("doctor", $data)){
			return true;
		}
	}
	public function Insert_patient($data){			
		if ($this->db->insert("patient", $data)){
			return true;
		}
	}		
	public function isEmailExistDoctor($email){			
		$this->db->select('*');		
		$this->db->where('email', $email);
		$query = $this->db->get('patient');
		if ($query->num_rows() > 0){
			return true;
		}else{
			$this->db->select('*');		
			$this->db->where('email', $email);
			$query = $this->db->get('doctor');
			if ($query->num_rows() > 0){
				return true;
			}else{
				$this->db->select('*');		
				$this->db->where('email', $email);
				$query = $this->db->get('clinic');
				if ($query->num_rows() > 0){
					return true;
				}else{
					$this->db->select('*');		
					$this->db->where('email', $email);
					$query = $this->db->get('hospital');
					if ($query->num_rows() > 0){
						return true;
					}else{
						$this->db->select('*');		
						$this->db->where('email', $email);
						$query = $this->db->get('medical_center');
						if ($query->num_rows() > 0){
							return true;
						}else{
							return false;
						}
					}
				}
			}
		}		
	}	
	public function get_practices(){
		$this->db->select('*');
		$this->db->from('specialty_categories');
		$query = $this->db->get();
		return $practices = $query->result();
	}
	public function Role_login($email, $password){
		$this->db->select('*,doctor_firstname as username');
		$this->db->from('doctor');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->where('status', 1);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1){
			$result = $query->row();
			$result->super_person = 1;
			return $result;
		}else{
			$this->db->select('*,clinic_name as username');
			$this->db->from('clinic');
			$this->db->where('email', $email);
			$this->db->where('password', $password);
			$this->db->where('status', 1);
			$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() == 1){
				$result = $query->row();
				$result->super_person = 2;
				return $result;
			}else{
				$this->db->select('*,medical_name as username');
				$this->db->from('medical_center');
				$this->db->where('email', $email);
				$this->db->where('password', $password);
				$this->db->where('status', 1);
				$this->db->limit(1);
				$query = $this->db->get();
				if ($query->num_rows() == 1){
					$result = $query->row();
					$result->super_person = 3;
					return $result;
				}else{
					$this->db->select('*,hospital_name as username');
					$this->db->from('hospital');
					$this->db->where('email', $email);
					$this->db->where('password', $password);
					$this->db->where('status', 1);
					$this->db->limit(1);
					$query = $this->db->get();
					if ($query->num_rows() == 1){
						$result = $query->row();
						$result->super_person = 4;
						return $result;
					}else{
						$this->db->select('*,patient_firstname as username');
						$this->db->from('patient');
						$this->db->where('email', $email);
						$this->db->where('password', $password);
						$this->db->where('status', 1);
						$this->db->limit(1);
						$query = $this->db->get();
						if ($query->num_rows() == 1){
							$result = $query->row();
							$result->super_person = 0;
							return $result;
						}else{
							return false;
						}
					}
				}
			}
		}
	}						
	public function forgetpassword($email){      		
		$this->db->where('email',$email);
		$query=$this->db->get('doctor');		
		$query=$query->row();
		$settings = get_icon();
		if($query){         
			$username=$query->username;
			$from_email=$settings->admin_email;
			$this->load->helper('string');
			$rand_pwd= random_string('alnum', 8);
			$password=array('password'=>md5($rand_pwd));                 
			$this->db->where('email',$email);
			$query=$this->db->update('doctor',$password);
			if($query){
				// $configs = array(
				// 	'protocol'=>'smtp',
				// 	'smtp_host'=>$settings->smtp_host,
				// 	'smtp_user'=>$settings->smtp_username,
				// 	'smtp_pass'=>$settings->smtp_password,
				// 	'smtp_port'=>'587'
				// 	);             
				// $this->load->library('email');
				// $this->email->initialize($configs);
                // $this->email->from($from_email, $username);
                // $this->email->to($email);
                // $this->email->subject('Forget Password');
                // $this->email->message('New Password is '.$rand_pwd.' ');
				// $this->email->send();        
				$this->load->library('phpmailer_lib');
				$mail = $this->phpmailer_lib->load();
				$mail->isSMTP();
				$mail->Host = $settings->smtp_host;
				$mail->SMTPAuth = true;
				$mail->Username = $settings->smtp_username;
				$mail->Password = $settings->smtp_password;
				$mail->SMTPSecure = 'ssl';
				$mail->Port = 465;
				$mail->setFrom($from_email, $username);				
				// Add a recipient
				$mail->addAddress($email);
				$mail->Subject = 'Forget Password';
				$mail->isHTML(true);
				$mailContent = "<h1>New Password is</h1> ".$rand_pwd;
				$mail->Body = $mailContent;
				// Send email
				if($mail->send()){
					return "EmailSend";
				}else{
					return 'EmailNotExist';
				}
				// return "EmailSend";
			}
		}else{
			$this->db->where('email',$email);
			$query=$this->db->get('patient');		
			$query=$query->row();
			$settings = get_icon();
			if($query){         
				$username=$query->username;
				$from_email=$settings->admin_email;
				$this->load->helper('string');
				$rand_pwd= random_string('alnum', 8);
				$password=array('password'=>md5($rand_pwd));                 
				$this->db->where('email',$email);
				$query=$this->db->update('patient',$password);
				if($query){				  
					// $configs = array(
					// 	'protocol'=>'smtp',
					// 	'smtp_host'=>$settings->smtp_host,
					// 	'smtp_user'=>$settings->smtp_username,
					// 	'smtp_pass'=>$settings->smtp_password,
					// 	'smtp_port'=>'587'
					// 	);             
					// $this->load->library('email');
					// $this->email->initialize($configs);
					// $this->email->from($from_email, $username);
					// $this->email->to($email);
					// $this->email->subject('Forget Password');
					// $this->email->message('New Password is '.$rand_pwd.' ');
					// $this->email->send();        
					// return "EmailSend";
					$this->load->library('phpmailer_lib');
					$mail = $this->phpmailer_lib->load();
					$mail->isSMTP();
					$mail->Host = $settings->smtp_host;
					$mail->SMTPAuth = true;
					$mail->Username = $settings->smtp_username;
					$mail->Password = $settings->smtp_password;
					$mail->SMTPSecure = 'ssl';
					$mail->Port = 465;
					$mail->setFrom($from_email, $username);				
					// Add a recipient
					$mail->addAddress($email);
					$mail->Subject = 'Forget Password';
					$mail->isHTML(true);
					$mailContent = "<h1>New Password is</h1> ".$rand_pwd;
					$mail->Body = $mailContent;
					// Send email
					if($mail->send()){
						return "EmailSend";
					}else{
						return 'EmailNotExist';
					}
				}
			}else{
				$this->db->where('email',$email);
				$query=$this->db->get('hospital');		
				$query=$query->row();
				$settings = get_icon();
				if($query){         
					$username=$query->username;
					$from_email=$settings->admin_email;
					$this->load->helper('string');
					$rand_pwd= random_string('alnum', 8);
					$password=array('password'=>md5($rand_pwd));                 
					$this->db->where('email',$email);
					$query=$this->db->update('hospital',$password);
					if($query){
						$this->load->library('phpmailer_lib');
						$mail = $this->phpmailer_lib->load();
						$mail->isSMTP();
						$mail->Host = $settings->smtp_host;
						$mail->SMTPAuth = true;
						$mail->Username = $settings->smtp_username;
						$mail->Password = $settings->smtp_password;
						$mail->SMTPSecure = 'ssl';
						$mail->Port = 465;
						$mail->setFrom($from_email, $username);				
						// Add a recipient
						$mail->addAddress($email);
						$mail->Subject = 'Forget Password';
						$mail->isHTML(true);
						$mailContent = "<h1>New Password is</h1> ".$rand_pwd;
						$mail->Body = $mailContent;
						// Send email
						if($mail->send()){
							return "EmailSend";
						}else{
							return 'EmailNotExist';
						}
					}
				}else{
					$this->db->where('email',$email);
					$query=$this->db->get('medical_center');		
					$query=$query->row();
					$settings = get_icon();
					if($query){         
						$username=$query->username;
						$from_email=$settings->admin_email;
						$this->load->helper('string');
						$rand_pwd= random_string('alnum', 8);
						$password=array('password'=>md5($rand_pwd));                 
						$this->db->where('email',$email);
						$query=$this->db->update('medical_center',$password);
						if($query){
							$this->load->library('phpmailer_lib');
							$mail = $this->phpmailer_lib->load();
							$mail->isSMTP();
							$mail->Host = $settings->smtp_host;
							$mail->SMTPAuth = true;
							$mail->Username = $settings->smtp_username;
							$mail->Password = $settings->smtp_password;
							$mail->SMTPSecure = 'ssl';
							$mail->Port = 465;
							$mail->setFrom($from_email, $username);				
							// Add a recipient
							$mail->addAddress($email);
							$mail->Subject = 'Forget Password';
							$mail->isHTML(true);
							$mailContent = "<h1>New Password is</h1> ".$rand_pwd;
							$mail->Body = $mailContent;
							// Send email
							if($mail->send()){
								return "EmailSend";
							}else{
								return 'EmailNotExist';
							}
						}
					}else{
						$this->db->where('email',$email);
						$query=$this->db->get('clinic');		
						$query=$query->row();
						$settings = get_icon();
						if($query){         
							$username=$query->username;
							$from_email=$settings->admin_email;
							$this->load->helper('string');
							$rand_pwd= random_string('alnum', 8);
							$password=array('password'=>md5($rand_pwd));                 
							$this->db->where('email',$email);
							$query=$this->db->update('clinic',$password);
							if($query){				               
								// $configs = array(
								// 	'protocol'=>'smtp',
								// 	'smtp_host'=>$settings->smtp_host,
								// 	'smtp_user'=>$settings->smtp_username,
								// 	'smtp_pass'=>$settings->smtp_password,
								// 	'smtp_port'=>'587'
								// 	);             
								// $this->load->library('email');
								// $this->email->initialize($configs);
								// $this->email->from($from_email, $username);
								// $this->email->to($email);
								// $this->email->subject('Forget Password');
								// $this->email->message('New Password is '.$rand_pwd.' ');
								// $this->email->send();        
								// return "EmailSend";
								$this->load->library('phpmailer_lib');
								$mail = $this->phpmailer_lib->load();
								$mail->isSMTP();
								$mail->Host = $settings->smtp_host;
								$mail->SMTPAuth = true;
								$mail->Username = $settings->smtp_username;
								$mail->Password = $settings->smtp_password;
								$mail->SMTPSecure = 'ssl';
								$mail->Port = 465;
								$mail->setFrom($from_email, $username);				
								// Add a recipient
								$mail->addAddress($email);
								$mail->Subject = 'Forget Password';
								$mail->isHTML(true);
								$mailContent = "<h1>New Password is</h1> ".$rand_pwd;
								$mail->Body = $mailContent;
								// Send email
								if($mail->send()){
									return "EmailSend";
								}else{
									return 'EmailNotExist';
								}
							}
						}else{
							return "EmailNotExist";
						}
					}
				}
			}
		}
    } 	
	
}
?>