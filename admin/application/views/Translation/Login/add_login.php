<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Login Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Login_Translation/view_login"> Login Translation </a></li>
         <li class="active">Add Login Translation</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <?php
               if($this->session->flashdata('message')) {
               $message = $this->session->flashdata('message');
               ?>
            <div class="alert alert-<?php echo $message['class']; ?>">
               <button class="close" data-dismiss="alert" type="button">×</button>
               <?php echo $message['message']; ?>
            </div>
            <?php
               }
               ?>
         </div>
	<form role="form"  method="post" id="login_reg" data-parsley-validate="" class="validate">
	 <input type="hidden" name="created_by" value="<?php echo $id; ?>">
	 <input type="hidden" name="created_date" value="<?php echo date('Y-m-d  H:i:s'); ?>" >
	 <input  type="hidden" name="lang['home_lang']" value="home_lang" >
	 <input  type="hidden" name="lang['doctorprofile_lang']" value="doctorprofile_lang" >
	 <input  type="hidden" name="lang['search_lang']" value="search_lang" >
	 <input  type="hidden" name="lang['doctorfilter_lang']" value="doctorfilter_lang" >
	 <input  type="hidden" name="lang['clinicfilter_lang']" value="clinicfilter_lang" >
    <input  type="hidden" name="lang['medicalfilter_lang']" value="medicalfilter_lang" >
	 <input  type="hidden" name="lang['hospitalfilter_lang']" value="hospitalfilter_lang" >
	 <input  type="hidden" name="lang['hospitalprofile_lang']" value="hospitalprofile_lang" >
	 <input  type="hidden" name="lang['clinicprofile_lang']" value="clinicprofile_lang" >
	 <input  type="hidden" name="lang['medicalprofile_lang']" value="medicalprofile_lang" >
	<input  type="hidden" name="lang['hospital_lang']" value="hospital_lang" >
	 <input  type="hidden" name="lang['doctor_lang']" value="doctor_lang" >
	 <input  type="hidden" name="lang['patient_lang']" value="patient_lang" >
	 <input  type="hidden" name="lang['about_lang']" value="about_lang" >
 <input  type="hidden" name="lang['terms_lang']" value="terms_lang" >
         <div class="col-md-12">
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Add General Login Details</h3>
				  <div class="edituser" tabindex='1'></div>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
                <div class="box-body">                 
                     <div class="col-md-12">
					 	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Language Name</label>
                             <input class="form-control  required regcom sample" placeholder="Language Name" name="lang['language']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
				<!-------Home page page 1------->
                       <input class="form-control  required regcom sample"   placeholder="Page Name" value="login_lang" name="lang['page_name']"  type="hidden">
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">SIGN IN page </label>
                             <input class="form-control  required regcom sample" placeholder="SIGN IN" name="lang['login_sigin_A1']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lang['login_sigin_A2']" placeholder="Email" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" name="lang['login_sigin_A3']" placeholder="Password" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Forgot your Password?</label>
                            <input type="text" name="lang['login_sigin_A4']" placeholder="Forgot your Password?" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signin button</label>
                            <input type="text" name="lang['login_sigin_A5']" placeholder="Signin" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm new in Bookmydoc</label>
                            <input type="text" name="lang['login_sigin_A6']" placeholder="I'm new in Bookmydoc" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm new in Bookmydoc subtitle </label>
							<textarea name="lang['login_sigin_A7']" class="form-control required regcom"  placeholder="I'm new in Bookmydoc subtitle" required=""></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign up Now !</label>
                            <input type="text" name="lang['login_sigin_A8']" placeholder="Sign up Now !" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					<!-------Home page page 2------->
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signup</label>
                            <input type="text" name="lang['login_sigup_A1']" placeholder="Signup" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a new Patient</label>
                            <input type="text" name="lang['login_sigup_A2']" placeholder="I'm a new Patient" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a new Patient subtitle </label>
							<textarea name="lang['login_sigup_A3']" class="form-control required regcom"  placeholder="I'm a new Patient" required=""></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Join now</label>
                            <input type="text" name="lang['login_sigup_A4']" placeholder="Join now" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
<!-------Home page page 3------->						  
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a Doctor / health care provider</label>
                            <input type="text" name="lang['login_sigup_B1']" placeholder="I'm a Doctor / health care provider" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a Doctor / health care provider subtitle</label>
							<textarea name="lang['login_sigup_B2']" class="form-control required regcom"  placeholder="I'm a Doctor / health care provider " required=""></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 
						   <!-------Home patient signup------->	
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
							<input type="text" name="lang['login_patient_sigup_A1']" placeholder="First Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
							<input type="text" name="lang['login_patient_sigup_A2']" placeholder="Last Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex</label>
							<input type="text" name="lang['login_patient_sigup_A3']" placeholder="Sex" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
							<input type="text" name="lang['login_patient_sigup_A4']" placeholder="Male" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  	 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
							<input type="text" name="lang['login_patient_sigup_A5']" placeholder="Female" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I Agree to the Terms and Conditions</label>
							<textarea name="lang['login_patient_sigup_A6']" class="form-control required regcom"  placeholder="I Agree to the Terms and Conditions" required=""></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Continue</label>
							<input type="text" name="lang['login_patient_sigup_A7']" placeholder="Continue" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc</label>
							<input type="text" name="lang['login_patient_sigup_A8']" placeholder="You’ll love being on Bookmydoc" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc subtitle one</label>
							<textarea name="lang['login_patient_sigup_A9']" class="form-control required regcom"  placeholder="You’ll love being on Bookmydoc subtitle one" required=""></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc subtitle two</label>
							<textarea name="lang['login_patient_sigup_A10']" class="form-control required regcom"  placeholder="You’ll love being on Bookmydoc subtitle two" required=""></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign up for a book my doc account to book an appointment right now!</label>
							<textarea name="lang['login_patient_sigup_A11']" class="form-control required regcom"  placeholder="Sign up for a book my doc account to book an appointment right now!" required=""></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">JOIN NOW</label>
							<input type="text" name="lang['login_sigup_B2']"  placeholder="JOIN NOW" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Type</label>
							<input type="text" name="lang['login_sigup_B3']"  placeholder="Type" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
							<input type="text" name="lang['login_sigup_B4']"  placeholder="First Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
							<input type="text" name="lang['login_sigup_B5']"  placeholder="Last Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex</label>
							<input type="text" name="lang['login_sigup_B6']"  placeholder="Sex" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
							<input type="text" name="lang['login_sigup_B7']"  placeholder="Email" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Create a Password</label>
							<input type="text" name="lang['login_sigup_B8']"  placeholder="Create a Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Your Location</label>
							<input type="text" name="lang['login_sigup_B9']"  placeholder="Select Your Location" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I Agree to the Terms and Conditions</label>
							<input type="text" name="lang['login_sigup_B10']"  placeholder="I Agree to the Terms and Conditions" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Continue</label>
							<input type="text" name="lang['login_sigup_B11']"  placeholder="Continue" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Type</label>
							<input type="text" name="lang['login_sigup_B12']"  placeholder="Select Type" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter firstname</label>
							<input type="text" name="lang['login_sigup_B13']"  placeholder="Enter firstname" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter lastname</label>
							<input type="text" name="lang['login_sigup_B14']"  placeholder="Enter lastname" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
							<input type="text" name="lang['login_sigup_B15']"  placeholder="Male" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
							<input type="text" name="lang['login_sigup_B16']"  placeholder="Female" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Location</label>
							<input type="text" name="lang['login_sigup_B17']"  placeholder="Select Location" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc</label>
							<input type="text" name="lang['login_patient_sigup_A18']"  placeholder="You’ll love being on Bookmydoc" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc subtitle one</label>
							<textarea name="lang['login_patient_sigup_A19']"  class="form-control required regcom"  placeholder="You’ll love being on Bookmydoc subtitle one" required=""></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc subtitle two</label>
							<textarea name="lang['login_patient_sigup_A20']"  class="form-control required regcom"  placeholder="You’ll love being on Bookmydoc subtitle two" required=""></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign up for a book my doc account to book an appointment right now!</label>
							<input type="text" name="lang['login_patient_sigup_A21']"  placeholder="Sign up for a book my doc account to book an appointment right now!" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Forgot Password</label>
							<input type="text" name="lang['login_patient_sigup_A22']"  placeholder="Forgot Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
							<input type="text" name="lang['login_patient_sigup_A23']"  placeholder="Email" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Submit</label>
							<input type="text" name="lang['login_patient_sigup_A24']"  placeholder="Submit" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">HealthCare Provider Name(Hospital, Medical Center Or Clinic Name)</label>
							<input type="text" name="lang['login_patient_sigup_A25']"  placeholder="HealthCare Provider Name(Hospital, Medical Center Or Clinic Name)" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Type</label>
							<input type="text" name="lang['login_patient_sigup_A26']"  placeholder="Select Type" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor</label>
							<input type="text" name="lang['login_patient_sigup_A27']"  placeholder="Doctor" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Clinic</label>
							<input type="text" name="lang['login_patient_sigup_A28']"  placeholder="Clinic" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Center</label>
							<input type="text" name="lang['login_patient_sigup_A29']"  placeholder="Medical Center" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital</label>
							<input type="text" name="lang['login_patient_sigup_A30']"  placeholder="Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter Health Provider Name</label>
							<input type="text" name="lang['login_patient_sigup_A31']"  placeholder="Enter Health Provider Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				    </div>
			  </div>				   
		   </div>
			<div class="box">
				 <div class="box-body">
				   <div class="col-md-12">
					 <div class="form-group has-feedback">                                       
                            <input type="button" class="btn btn-primary" value="Submit"  name="Save" id="loginadd">
                            <button type="reset" class="btn btn-primary">Reset </button>
                        </div> 
				   </div>
				  </div> 
            </div>	
            <!-- /.box -->
         </div>
		 </form> 
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
<script>
	base_url = "<?php echo base_url(); ?>";
	config_url = "<?php echo base_url(); ?>";
</script>