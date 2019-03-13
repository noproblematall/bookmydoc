<?php	$settings = get_icon();
		$id = $settings->languages;
		$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
		$kk = $query->row();
		$textFile = $kk->languages;
		$extension = ".php"; 
		require 'admin/includes/'.$textFile.$extension;	?>
<div class="container">
	<div class="row">
		<div class="col-lg-7">
			<div class="join-now-doc">
				<h3><?php if($this->lang->line('login_sigup_A4')){ ?><?php echo $this->lang->line('login_sigup_A4'); }else{ ?>JOIN NOW<?php } ?></h3>
			</div>
			<div class="row">
				<?php 	if($this->session->flashdata('message')) {
						$message = $this->session->flashdata('message'); ?>
				<div class="alert alert-<?php echo $message['class']; ?>">
					<button class="close" data-dismiss="alert" type="button">×</button>
					<?php echo $message['message']; ?>
				</div>
				<?php }	?>
				<div class="join-now-doc-1">
					<form role="form"  action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data" >
						<div class="col-lg-6">
							<div class="form-group">
								<input type="hidden" name="status" id="status" value="1">
								<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B4')){ ?><?php echo $this->lang->line('login_sigup_B4'); }else{ ?>First Name<?php } ?></label>
								<input type="text" name="patient_firstname" class="form-control" id="exampleInputPassword1" data-parsley-pattern="^[a-zA-Z\  \/]+$" placeholder="<?php if($this->lang->line('login_sigup_B13')){ ?><?php echo $this->lang->line('login_sigup_B13'); }else{ ?>"Enter firstname"<?php } ?>" data-parsley-minlength="3" data-parsley-maxlength="25"required =" ">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B5')){ ?><?php echo $this->lang->line('login_sigup_B5'); }else{ ?>Last Name<?php } ?></label>
								<input type="text" name="patient_lastname" class="form-control" id="exampleInputPassword1" data-parsley-pattern="^[a-zA-Z\  \/]+$" placeholder="<?php if($this->lang->line('login_sigup_B14')){ ?><?php echo $this->lang->line('login_sigup_B14'); }else{ ?>"Enter lastname"<?php } ?>" data-parsley-minlength="3" data-parsley-maxlength="25"required =" ">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B7')){ ?><?php echo $this->lang->line('login_sigup_B7'); }else{ ?>Email<?php } ?></label>
								<input type="text" name="email" class="form-control" id="exampleInputPassword1" data-parsley-trigger="change" data-parsley-type="email" required="">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B8')){ ?><?php echo $this->lang->line('login_sigup_B8'); }else{ ?>Create a Password<?php } ?></label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1" data-parsley-minlength="6" required="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputPassword1"><?php if($this->lang->line('login_sigup_B6')){ ?><?php echo $this->lang->line('login_sigup_B6'); }else{ ?>Sex<?php } ?></label>
								<div class="radio">
									<label><input type="radio" value="male" name="patient_sex" required ><?php if($this->lang->line('login_sigup_B15')){ ?><?php echo $this->lang->line('login_sigup_B15'); }else{ ?>Male<?php } ?></label>
								</div>
								<div class="radio">
									<label><input type="radio" value="female" name="patient_sex" required ><?php if($this->lang->line('login_sigup_B16')){ ?><?php echo $this->lang->line('login_sigup_B16'); }else{ ?>Female<?php } ?></label>
								</div>
							</div>
							<div class="clearfix"></div>                             
							<div class="form-group">                              
								<div class="checkbox">
									<label><input type="checkbox" value="agreed" name="terms" required><?php if($this->lang->line('login_sigup_B10')){ ?><?php echo $this->lang->line('login_sigup_B10'); }else{ ?>I Agree to the Terms and Conditions<?php } ?></label>
								</div>
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
				<h3><?php if($this->lang->line('login_patient_sigup_A8')){ ?><?php echo $this->lang->line('login_patient_sigup_A8'); }else{ ?><span>You’ll love</span> being on Bookmydoc<?php } ?></h3>
				<ul>
					<li><?php if($this->lang->line('login_patient_sigup_A9')){ ?><?php echo $this->lang->line('login_patient_sigup_A9'); }else{ ?>Access Bookmydoc network of more than 5 million patients.<?php } ?></li>
					<li><?php if($this->lang->line('login_patient_sigup_A10')){ ?><?php echo $this->lang->line('login_patient_sigup_A10'); }else{ ?>Let patients schedule appointments with you instantly, 24-7, from Bookmydoc and from your practice website. <?php } ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>