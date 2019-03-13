<?php
	if ($this->session->userdata('frontend_logged_in')){
		$session_user_email=$this->session->userdata['frontend_logged_in']['email'];
		$match_user_details = get_login_userDetails($session_user_email);
		$match_username = $match_user_details ->username; 
	}	
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;       
?>
<nav class="navbar navbar-default nav-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xs-4 col-sm-12 logo-col">
                <div class="logo animated fadeInLeft">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>admin/<?php echo $settings->logo;?>"  class="img-responsive col-lg-12 col-xs-12 col-sm-3" alt=""/></a>
                </div>
            </div>
            <div class="col-lg-9 col-xs-8 col-sm-12 header-sgnin">
                <div class="signin">
                    <ul>
					    <?php if ($this->session->userdata('frontend_logged_in')){								
							?>
							<li><a href = "<?php echo base_url(); ?>Welcome"><img src="<?php echo base_url(); ?>assets/images/patient-login/m-1.png" />Hi,<?php if(!empty($match_username)){ echo $match_username; }else{ ?> User <?php } ?> </a></li>
							<li><a href = "<?php echo base_url(); ?>Logout"><img src="<?php echo base_url(); ?>assets/images/home/2.png" />Logout </a></li>
						<?php } else{ ?>
							<li ><a href = "<?php echo base_url(); ?>Login/presignup"><img src="<?php echo base_url(); ?>assets/images/home/1.png" /><?php if($this->lang->line('home_header_signup')): ?><?php echo $this->lang->line('home_header_signup'); else: ?>Signup<?php endif; ?></a></li>
							<li onclick="mysigninFunction()" data-toggle="modal" class="log-index" data-target="#myModal"><img src="<?php echo base_url(); ?>assets/images/home/2.png" /><?php if($this->lang->line('home_header_signin')): ?><?php echo $this->lang->line('home_header_signin'); else: ?>Signin<?php endif; ?></li>
						<?php } ?>						
					</ul>
                </div>
                <div class="clearfix hidden-xs"></div>
                <div class="navbar-header navbar-header-resp">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav nav-head animated fadeInDown">
                        <li class="active m-1"><a href="<?php echo base_url(); ?>"><?php if($this->lang->line('home_header_home')){ ?><?php echo $this->lang->line('home_header_home'); }else{ ?>Home<?php } ?><span class="sr-only">(current)</span></a></li>
                        <li><a href = "<?php echo base_url(); ?>General/aboutus"><?php if($this->lang->line('home_header_aboutus')){ ?><?php echo $this->lang->line('home_header_aboutus'); }else{ ?>About Us<?php }?></a></li>
						<li><a href = "<?php echo base_url(); ?>General/terms"><?php if($this->lang->line('home_header_terms')){ ?><?php echo $this->lang->line('home_header_terms'); }else{ ?>Terms<?php }?> </a></li>
                        <li><a href = "<?php echo base_url(); ?>General/careers"><?php if($this->lang->line('home_header_careers')){ ?><?php echo $this->lang->line('home_header_careers'); }else{ ?>Careers<?php }?> </a></li>
                        <li><a href = "<?php echo base_url(); ?>General/contact"><?php if($this->lang->line('home_header_contact')){ ?><?php echo $this->lang->line('home_header_contact'); }else{ ?>Contact <?php }?> </a></li>
						<li><a href="javascript:void(0);"><?php if($this->lang->line('home_header_faq')){ ?><?php echo $this->lang->line('home_header_faq'); }else{ ?>FAQ<?php }?> </a></li>
                        <li><a href="javascript:void(0);"><?php if($this->lang->line('home_header_blog')){ ?><?php echo $this->lang->line('home_header_blog'); }else{ ?>Blog<?php }?>  </a></li>
                        <li><a href="javascript:void(0);"><?php if($this->lang->line('home_header_doctorblog')){ ?><?php echo $this->lang->line('home_header_doctorblog'); }else{ ?>Doctor Blog<?php }?>  </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <!-- Modal -->
    <div class="modal fade bac-modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content login-modal">
                <button type="button"  onclick="mysigninclickFunction()" class="btn btn-default close-mdl" data-dismiss="modal"><img src="<?php echo base_url(); ?>assets/images/login/2.png" /> </button>
				<div class="row">
					<div class="col-lg-6">
						<div class="errormsg"> </div>
						<div class="login-top">                                            
						<div class="main-lg-new active" id="signinlist">
							<form id="form_login" action="" method="post" data-parsley-validate="" class="validate">
								<div class="col-lg-12">
									<h3><span><img src="<?php echo base_url(); ?>assets/images/home/1.png" /></span><?php if($this->lang->line('login_sigin_A1')){ ?><?php echo $this->lang->line('login_sigin_A1'); }else{ ?>SIGN IN<?php } ?></h3>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="email" name="email" class="form-control" id="email" placeholder="<?php if($this->lang->line('login_sigin_A2')){ echo $this->lang->line('login_sigin_A2'); }else{ echo "Email"; } ?>" data-parsley-trigger="change" data-parsley-type="email" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="password" name="password" class="form-control" id="password" placeholder="<?php if($this->lang->line('login_sigin_A3')){ echo $this->lang->line('login_sigin_A3'); }else{ echo "Password"; } ?>" data-parsley-minlength="6" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<div class="forget-pass">
											<h4><a href="javascript:void(0);" class="frgt-pass"><?php if($this->lang->line('login_sigin_A4')){ ?><?php echo $this->lang->line('login_sigin_A4'); }else{ ?>Forgot your Password?<?php } ?></a></h4>
											<h4><button type="submit" class="log-in-a"><?php if($this->lang->line('login_sigin_A5')){ ?><?php echo $this->lang->line('login_sigin_A5'); }else{ ?>Signin<?php } ?></button></h4>
										</div>
									</div>							  	
								</div>
							</form>
						</div>						
						<!---- new --->
						<div class="main-lg-reset">
							<form id="form_forgot" action="" method="post" data-parsley-validate="" class="validate">
								<div class="col-lg-12">
									<h3><span><img src="<?php echo base_url(); ?>assets/images/home/2.png" /></span><?php if($this->lang->line('login_patient_sigup_A22')){ ?><?php echo $this->lang->line('login_patient_sigup_A22'); }else{ ?>Forgot Password<?php } ?></h3>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="email" name="email" id="femail" class="form-control"  placeholder="<?php if($this->lang->line('login_patient_sigup_A23')){ ?><?php echo $this->lang->line('login_patient_sigup_A23'); }else{ ?><?php echo "Email"; ?><?php } ?>" >
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<div class="forget-pass">
											<h4><button type="submit" class="log-in-a"><?php if($this->lang->line('login_patient_sigup_A24')){ ?><?php echo $this->lang->line('login_patient_sigup_A24'); }else{ ?>Submit<?php } ?></button></h4>
										</div>
									</div>
								</div>
							</form>
						</div>					
					</div>
				</div>			  			  
				<div class="col-lg-6">
					<div class="bac-right-login">
						<h4><?php if($this->lang->line('login_sigin_A6')){ ?><?php echo $this->lang->line('login_sigin_A6'); }else{ ?>I'm new in Bookmydoc<?php } ?></h4>
						<h5>Sign up for a book my doc account to book an appointment right now!</h5>
						<a href = "<?php echo base_url(); ?>Login/presignup"><?php if($this->lang->line('login_sigin_A8')){ ?><?php echo $this->lang->line('login_sigin_A8'); }else{ ?>Sign up Now !<?php } ?></a>
					</div>
				</div>
			</div>
		</div>
        </div>
    </div>
</div>