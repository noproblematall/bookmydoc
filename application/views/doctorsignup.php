<?php
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;
	$location_humdrum = get_practice_location();
	?>
<div class="container">
	<div class="row">
		<div class="col-lg-7">
			<div class="join-now-doc">
				<h3><?php if($this->lang->line('login_sigup_A4')){ ?><?php echo $this->lang->line('login_sigup_A4'); }else{ ?>JOIN NOW<?php } ?></h3>
			</div>
			<div class="row">
			<?php   if($this->session->flashdata('message')) {
					$message = $this->session->flashdata('message'); ?>
				<div class="alert alert-<?php echo $message['class']; ?>">
					<button class="close" data-dismiss="alert" type="button">×</button>
					<?php echo $message['message']; ?>
				</div>
			<?php }	?>
				<div class="join-now-doc-1">
					<form role="form"  action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data" >
						<div class="col-lg-6">
							<input type="hidden" name="status" id="status" value="1">
							<div class="form-group">
								<label for="exampleSelect1"><?php if($this->lang->line('login_sigup_B3')){ ?><?php echo $this->lang->line('login_sigup_B3'); }else{ ?>Type<?php } ?></label>								
								<select class="form-control" class="selectmedtype" id="exampleSelect1" name="type"  onchange="changemedtype(this);" >
									<option class="docfirstinnings"  disabled  selected ><?php if($this->lang->line('login_patient_sigup_A26')){ ?><?php echo $this->lang->line('login_patient_sigup_A26'); }else{ ?>Select type<?php } ?></option>
									<option class="docfirstinnings"  value="doctor"><?php if($this->lang->line('login_patient_sigup_A27')){ ?><?php echo $this->lang->line('login_patient_sigup_A27'); }else{ ?>Doctor<?php } ?></option>
									<option class="hosfirstinnings" value="clinic"><?php if($this->lang->line('login_patient_sigup_A28')){ ?><?php echo $this->lang->line('login_patient_sigup_A28'); }else{ ?>Clinic<?php } ?></option>
									<option class="hosfirstinnings"  value="medical"><?php if($this->lang->line('login_patient_sigup_A29')){ ?><?php echo $this->lang->line('login_patient_sigup_A29'); }else{ ?>Medical Center<?php } ?></option>
									<option class="hosfirstinnings"  value="hospital"><?php if($this->lang->line('login_patient_sigup_A30')){ ?><?php echo $this->lang->line('login_patient_sigup_A30'); }else{ ?>Hospital<?php } ?></option>
								</select>			   								                                 
							</div>
							<div class="clearfix"></div>
							<div class="first_innings">
								<div class="form-group">
									<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B4')){ ?><?php echo $this->lang->line('login_sigup_B4'); }else{ ?>First Name<?php } ?></label>
									<input type="text" class="form-control" id="exampleInputPassword1" name="doctor_firstname" data-parsley-pattern="^[a-zA-Z\  \/]+$" placeholder="<?php if($this->lang->line('login_sigup_B13')){ ?><?php echo $this->lang->line('login_sigup_B13'); }else{ ?>"Enter firstname"<?php } ?>" data-parsley-minlength="3" data-parsley-maxlength="25">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B5')){ ?><?php echo $this->lang->line('login_sigup_B5'); }else{ ?>Last Name<?php } ?></label>
									<input type="text" class="form-control" id="exampleInputPassword1" name="doctor_lastname" data-parsley-pattern="^[a-zA-Z\  \/]+$" placeholder="<?php if($this->lang->line('login_sigup_B14')){ ?><?php echo $this->lang->line('login_sigup_B14'); }else{ ?>"Enter lastname"<?php } ?>" data-parsley-minlength="3" data-parsley-maxlength="25">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B6')){ ?><?php echo $this->lang->line('login_sigup_B6'); }else{ ?>Sex<?php } ?></label>
									<div class="radio">
										<label><input type="radio" name="doctor_sex" value="Male" ><?php if($this->lang->line('login_sigup_B15')){ ?><?php echo $this->lang->line('login_sigup_B15'); }else{ ?>Male<?php } ?></label>
									</div>
									<div class="radio">
										<label><input type="radio" name="doctor_sex" value="Female" ><?php if($this->lang->line('login_sigup_B16')){ ?><?php echo $this->lang->line('login_sigup_B16'); }else{ ?>Female<?php } ?></label>
									</div>
								</div>
							</div>
							<div class="second_innings">
								<div class="form-group">
									<label for="exampleInputPassword1"><?php if($this->lang->line('login_patient_sigup_A25')){ ?><?php echo $this->lang->line('login_patient_sigup_A25'); }else{ ?>HealthCare Provider Name(Hospital, Medical Center Or Clinic Name)<?php } ?></label>
									<input type="text" class="form-control" id="exampleInputPassword1" name="health_provider" placeholder="<?php if($this->lang->line('login_patient_sigup_A31')){ ?><?php echo $this->lang->line('login_patient_sigup_A31'); }else{ ?>" Enter Health ProviderName "<?php } ?>" data-parsley-minlength="3" >
								</div>
							</div>                            
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B7')){ ?><?php echo $this->lang->line('login_sigup_B7'); }else{ ?>Email<?php } ?></label>
								<input type="text" class="form-control" id="exampleInputPassword1" name="email" data-parsley-trigger="change" data-parsley-type="email" required="" >
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B8')){ ?><?php echo $this->lang->line('login_sigup_B8'); }else{ ?>Create a Password<?php } ?></label>
								<input type="password" class="form-control" id="exampleInputPassword1" name="password" data-parsley-minlength="6" required="">
							</div>							                              
							<div class="form-group">
								<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B9')){ ?><?php echo $this->lang->line('login_sigup_B9'); }else{ ?>Select Your Location <?php } ?></label>
								<select class="form-control" id="exampleSelect1" name="cities_id" required="" >
									<option  disabled  selected ><?php if($this->lang->line('login_sigup_B17')){ ?><?php echo $this->lang->line('login_sigup_B17'); }else{ ?>Select Location<?php } ?></option>
									<?php if(isset($location_humdrum) && !empty($location_humdrum)): ?>	
									<?php foreach($location_humdrum as $loc): ?>
									<option  value="<?php echo $loc->id; ?>" ><?php echo $loc->city; ?></option>
									<?php endforeach; ?>
									<?php endif; ?>
								</select>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="agreed" name="terms" required><?php if($this->lang->line('login_sigup_B10')){ ?><?php echo $this->lang->line('login_sigup_B10'); }else{ ?>I Agree to the Terms and Conditions<?php } ?></label>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-default btn-continue"><?php if($this->lang->line('login_sigup_B11')){ ?><?php echo $this->lang->line('login_sigup_B11'); }else{ ?>Continue<?php } ?></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="bac-right-login-2">
				<h3><?php if($this->lang->line('login_patient_sigup_A18')){ ?><?php echo $this->lang->line('login_patient_sigup_A18'); }else{ ?><span>You’ll love</span> being on Bookmydoc<?php } ?></h3>
				<ul>
					<li><?php if($this->lang->line('login_patient_sigup_A19')){ ?><?php echo $this->lang->line('login_patient_sigup_A19'); }else{ ?>Access Bookmydoc network of more than 5 million patients.<?php } ?></li>
					<li><?php if($this->lang->line('login_patient_sigup_A20')){ ?><?php echo $this->lang->line('login_patient_sigup_A20'); }else{ ?>Let patients schedule appointments with you instantly, 24-7, from Bookmydoc and from your practice website. <?php } ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>