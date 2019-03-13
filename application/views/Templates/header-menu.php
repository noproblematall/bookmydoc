<?php
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
								$session_data = $this->session->userdata('frontend_logged_in');
								$username=$this->session->userdata['frontend_logged_in']['username'];
							?>
							<li><a href = "<?php echo base_url(); ?>Welcome"><img src="<?php echo base_url(); ?>assets/images/patient-login/m-1.png" />Hi,<?php echo $username; ?> </a></li>
							<li><a href = "<?php echo base_url(); ?>Logout"><img src="<?php echo base_url(); ?>assets/images/home/2.png" />Logout </a></li>
						<?php } else{ ?>
							<li ><a href = "<?php echo base_url(); ?>Login/presignup"><img src="<?php echo base_url(); ?>assets/images/home/1.png" /><?php if($lgsignup){ echo $lgsignup; }else { ?>Signup<?php } ?> </a></li>
							<li onclick="mysigninFunction()" data-toggle="modal" class="log-index" data-target="#myModal"><img src="<?php echo base_url(); ?>assets/images/home/2.png" /><?php if($lgsignin){ echo $lgsignin; }else { ?>Signin<?php } ?> </li>
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
                        <li class="active m-1"><a href="<?php echo base_url(); ?>"><?php if($lghome){ echo $lghome; }else { ?>Home<?php }?>     <span class="sr-only">(current)</span></a></li>
                        <li><a href = "<?php echo base_url(); ?>General/aboutus"><?php if($lgaboutus){ echo $lgaboutus; }else { ?>About Us<?php }?></a></li>
                        <li><a href = "<?php echo base_url(); ?>General/careers"><?php if($lgcareers){ echo $lgcareers; }else { ?>Careers<?php }?> </a></li>
                        <li><a href = "<?php echo base_url(); ?>General/contact"> <?php if($lgcontact){ echo $lgcontact; }else { ?> Contact <?php }?> </a></li>
                        <li><a href = "<?php echo base_url(); ?>General/terms"><?php if($lgterms){ echo $lgterms; }else { ?>Terms<?php }?> </a></li>
                        <li><a href="javascript:void(0);"><?php if($lgfaq){ echo $lgfaq; }else { ?> FAQ<?php }?> </a></li>
                        <li><a href="javascript:void(0);"><?php if($lgnlog){ echo $lgnlog; }else { ?> Blog<?php }?>  </a></li>
                        <li><a href="javascript:void(0);"><?php if($lgdoctorblog){ echo $lgdoctorblog; }else { ?>  Doctor Blog<?php }?>  </a></li>
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
									<h3><span><img src="<?php echo base_url(); ?>assets/images/home/1.png" /></span><?php if($lgsignin){ echo $lgsignin; }else { ?>SIGN IN<?php } ?></h3>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="email" name="email" class="form-control" id="email" placeholder="<?php if($lgsemailp){ echo $lgsemailp; }else { echo "Email"; } ?>" data-parsley-trigger="change" data-parsley-type="email" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="password" name="password" class="form-control" id="password" placeholder="<?php if($lgspasswordp){ echo $lgspasswordp; }else { echo "Password"; } ?>" data-parsley-minlength="6" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<div class="forget-pass">
											<h4><a href="javascript:void(0);" class="frgt-pass"><?php if($lgsforgotp){ echo $lgsforgotp; }else { ?>Forgot your Password?<?php } ?></a></h4>
											<h4><button type="submit" class="log-in-a"><?php if($lgsignin){ echo $lgsignin; }else { ?>Signin<?php } ?></button></h4>
										</div>
									</div>							  	
								</div>
							</form>
						</div>						
						<!---- new --->
						<div class="main-lg-reset">
							<form id="form_forgot" action="" method="post" data-parsley-validate="" class="validate">
								<div class="col-lg-12">
									<h3><span><img src="<?php echo base_url(); ?>assets/images/home/2.png" /></span><?php if($lgsforgotp2){ echo $lgsforgotp2; }else { ?>Forgot Password<?php } ?></h3>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="email" name="email" id="femail" class="form-control"  placeholder="<?php if($lgsemailp){ echo $lgsemailp; }else { echo "Email"; }?>" >
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<div class="forget-pass">
											<h4><button type="submit" class="log-in-a"><?php if($lgsforgotsubmit){ echo $lgsforgotsubmit; }else { ?>Submit<?php } ?></button></h4>
										</div>
									</div>
								</div>
							</form>
						</div>					
					</div>
				</div>			  			  
				<div class="col-lg-6">
					<div class="bac-right-login">
						<h4><?php if($lgsd1p){ echo $lgsd1p; }else { ?>I'm new in Bookmydoc<?php } ?></h4>
						<h5><?php if($lgsd2p){ echo $lgsd2p; }else { ?>Sign up for a book my doc account to book an appointment right now!<?php } ?></h5>
						<a href = "<?php echo base_url(); ?>Login/presignup"><?php if($lgsd3p){ echo $lgsd3p; }else { ?>Sign up Now !<?php } ?></a>
					</div>
				</div>
			</div>
		</div>
        </div>
    </div>
</div>