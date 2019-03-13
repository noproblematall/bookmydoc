<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Login Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Login_Translation/view_login"> Login Translation </a></li>
         <li class="active">Edit Login Translation</li>
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
		 <?php 	
				$final_lang = '';
				$textFile = $language_name;
				$location = '../application/language/'.$textFile.'/'.'';
				$lang_directory = directory_map($location, FALSE);	
				if(is_bool($lang_directory ) === false):	
					if(in_array('login_lang.php',$lang_directory)):				
						$final_lang = 'login_lang';
					else:
						$this->load->view('error_trans');
						exit();
					endif;
				else:
					$this->load->view('error_trans');
					exit();
				endif;			
				if($final_lang):	
					$extension = ".php";       					
					include '../application/language/'.''.$textFile.'/'.$final_lang.$extension;
				endif;
				?>
	<form role="form"  method="post" id="login_edit">
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
                  <h3 class="box-title">Edit General Login Details</h3>
				  <div class="edituser" tabindex='1'></div>
               </div>
               <!-- /.box-header -->
               <!-- form start -->               
			   
			    <div class="box-body">                 
                     <div class="col-md-12">
					 <input  name="id"  id="id" class="form-control  required regcom sample" value="<?php echo $textFile; ?>" type="hidden">
					 	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Language Name</label>
                             <input class="form-control  required regcom sample" placeholder="Language Name" name="lang['language']"  type="text" value="<?php if(!empty($lang['language'])): echo $lang['language']; endif;?>" >
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					  <input class="form-control  required regcom sample"   placeholder="Page Name" value="login_lang" name="lang['page_name']"  type="hidden">
					  <!-------Home page 1------->
				    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">SIGN IN page </label>
                             <input class="form-control  required regcom sample" value="<?php if(!empty($lang['login_sigin_A1'])): echo $lang['login_sigin_A1']; endif;?>"placeholder="SIGN IN" name="lang['login_sigin_A1']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lang['login_sigin_A2']" value="<?php if(!empty($lang['login_sigin_A2'])): echo $lang['login_sigin_A2']; endif;?>" placeholder="Email" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" name="lang['login_sigin_A3']" value="<?php if(!empty($lang['login_sigin_A3'])): echo $lang['login_sigin_A3']; endif;?>" placeholder="Password" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Forgot your Password?</label>
                            <input type="text" name="lang['login_sigin_A4']" value="<?php if(!empty($lang['login_sigin_A4'])): echo $lang['login_sigin_A4']; endif;?>"placeholder="Forgot your Password?" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signin button</label>
                            <input type="text" name="lang['login_sigin_A5']" value="<?php if(!empty($lang['login_sigin_A5'])): echo $lang['login_sigin_A5']; endif;?>" placeholder="Signin" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm new in Bookmydoc</label>
                            <input type="text" name="lang['login_sigin_A6']" value="<?php if(!empty($lang['login_sigin_A6'])): echo $lang['login_sigin_A6']; endif;?>" placeholder="I'm new in Bookmydoc" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign up Now !</label>
                            <input type="text" name="lang['login_sigin_A8']" value="<?php if(!empty($lang['login_sigin_A6'])): echo $lang['login_sigin_A6']; endif;?>"placeholder="Sign up Now !" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					<!-------Home page  2------->
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signup</label>
                            <input type="text" name="lang['login_sigup_A1']" value="<?php if(!empty($lang['login_sigup_A1'])): echo $lang['login_sigup_A1']; endif;?>"placeholder="Signup" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a new Patient</label>
                            <input type="text" name="lang['login_sigup_A2']" value="<?php if(!empty($lang['login_sigup_A2'])): echo $lang['login_sigup_A2']; endif;?>"placeholder="I'm a new Patient" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a new Patient subtitle </label>
							<textarea name="lang['login_sigup_A3']" class="form-control required regcom"  placeholder="I'm a new Patient" required=""><?php if(!empty($lang['login_sigup_A3'])): echo $lang['login_sigup_A3']; endif;?> </textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Join now</label>
                            <input type="text" name="lang['login_sigup_A4']" value="<?php if(!empty($lang['login_sigup_A4'])): echo $lang['login_sigup_A4']; endif;?>" placeholder="Join now" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
<!-------Home page 3------->						  
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a Doctor / health care provider</label>
                            <input type="text" name="lang['login_sigup_B1']" value="<?php if(!empty($lang['login_sigup_B1'])): echo $lang['login_sigup_B1']; endif;?>" placeholder="I'm a Doctor / health care provider" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a Doctor / health care provider subtitle</label>
							<textarea name="lang['login_sigup_B2']"  class="form-control required regcom"  placeholder="I'm a Doctor / health care provider " required=""><?php if(!empty($lang['login_sigup_B2'])): echo $lang['login_sigup_B2']; endif;?></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <!-------Home patient signup------->	
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
							<input type="text" name="lang['login_patient_sigup_A1']" value="<?php if(!empty($lang['login_patient_sigup_A1'])): echo $lang['login_patient_sigup_A1']; endif;?>" placeholder="First Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
							<input type="text" name="lang['login_patient_sigup_A2']" value="<?php if(!empty($lang['login_patient_sigup_A2'])): echo $lang['login_patient_sigup_A2']; endif;?>" placeholder="Last Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex</label>
							<input type="text" name="lang['login_patient_sigup_A3']" value="<?php if(!empty($lang['login_patient_sigup_A3'])): echo $lang['login_patient_sigup_A3']; endif;?>" placeholder="Sex" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
							<input type="text" name="lang['login_patient_sigup_A4']" value="<?php if(!empty($lang['login_patient_sigup_A4'])): echo $lang['login_patient_sigup_A4']; endif;?>" placeholder="Male" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  	 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
							<input type="text" name="lang['login_patient_sigup_A5']" value="<?php if(!empty($lang['login_patient_sigup_A5'])): echo $lang['login_patient_sigup_A5']; endif;?>" placeholder="Female" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I Agree to the Terms and Conditions</label>
							<input type="text" name="lang['login_patient_sigup_A6']" value="<?php if(!empty($lang['login_patient_sigup_A6'])): echo $lang['login_patient_sigup_A6']; endif;?>" placeholder="I Agree to the Terms and Conditions" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Continue</label>
							<input type="text" name="lang['login_patient_sigup_A7']" value="<?php if(!empty($lang['login_patient_sigup_A7'])): echo $lang['login_patient_sigup_A7']; endif;?>" placeholder="Continue" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc</label>
							<input type="text" name="lang['login_patient_sigup_A8']" value="<?php if(!empty($lang['login_patient_sigup_A8'])): echo $lang['login_patient_sigup_A8']; endif;?>" placeholder="You’ll love being on Bookmydoc" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc subtitle one</label>
							<textarea name="lang['login_patient_sigup_A9']"  class="form-control required regcom"  placeholder="You’ll love being on Bookmydoc subtitle one" required=""><?php if(!empty($lang['login_patient_sigup_A9'])): echo $lang['login_patient_sigup_A9']; endif;?></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc subtitle two</label>
							<textarea name="lang['login_patient_sigup_A10']"  class="form-control required regcom"  placeholder="You’ll love being on Bookmydoc subtitle two" required=""><?php if(!empty($lang['login_patient_sigup_A10'])): echo $lang['login_patient_sigup_A10']; endif;?></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign up for a book my doc account to book an appointment right now!</label>
							<textarea name="lang['login_patient_sigup_A11']" class="form-control required regcom"  placeholder="Sign up for a book my doc account to book an appointment right now!" required=""><?php if(!empty($lang['login_patient_sigup_A11'])): echo $lang['login_patient_sigup_A11']; endif;?></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">JOIN NOW</label>
							<input type="text" name="lang['login_sigup_B2']" value="<?php if(!empty($lang['login_sigup_B2'])): echo $lang['login_sigup_B2']; endif;?>" placeholder="JOIN NOW" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Type</label>
							<input type="text" name="lang['login_sigup_B3']" value="<?php if(!empty($lang['login_sigup_B3'])): echo $lang['login_sigup_B3']; endif;?>" placeholder="Type" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
							<input type="text" name="lang['login_sigup_B4']" value="<?php if(!empty($lang['login_sigup_B4'])): echo $lang['login_sigup_B4']; endif;?>" placeholder="First Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
							<input type="text" name="lang['login_sigup_B5']" value="<?php if(!empty($lang['login_sigup_B5'])): echo $lang['login_sigup_B5']; endif;?>" placeholder="Last Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex</label>
							<input type="text" name="lang['login_sigup_B6']" value="<?php if(!empty($lang['login_sigup_B6'])): echo $lang['login_sigup_B6']; endif;?>" placeholder="Sex" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
							<input type="text" name="lang['login_sigup_B7']" value="<?php if(!empty($lang['login_sigup_B7'])): echo $lang['login_sigup_B7']; endif;?>" placeholder="Email" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Create a Password</label>
							<input type="text" name="lang['login_sigup_B8']" value="<?php if(!empty($lang['login_sigup_B8'])): echo $lang['login_sigup_B8']; endif;?>" placeholder="Create a Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Your Location</label>
							<input type="text" name="lang['login_sigup_B9']" value="<?php if(!empty($lang['login_sigup_B9'])): echo $lang['login_sigup_B9']; endif;?>" placeholder="Select Your Location" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I Agree to the Terms and Conditions</label>
							<input type="text" name="lang['login_sigup_B10']" value="<?php if(!empty($lang['login_sigup_B10'])): echo $lang['login_sigup_B10']; endif;?>" placeholder="I Agree to the Terms and Conditions" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Continue</label>
							<input type="text" name="lang['login_sigup_B11']" value="<?php if(!empty($lang['login_sigup_B11'])): echo $lang['login_sigup_B11']; endif;?>" placeholder="Continue" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Type</label>
							<input type="text" name="lang['login_sigup_B12']" value="<?php if(!empty($lang['login_sigup_B12'])): echo $lang['login_sigup_B12']; endif;?>" placeholder="Select Type" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter firstname</label>
							<input type="text" name="lang['login_sigup_B13']" value="<?php if(!empty($lang['login_sigup_B13'])): echo $lang['login_sigup_B13']; endif;?>" placeholder="Enter firstname" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter lastname</label>
							<input type="text" name="lang['login_sigup_B14']" value="<?php if(!empty($lang['login_sigup_B14'])): echo $lang['login_sigup_B14']; endif;?>" placeholder="Enter lastname" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
							<input type="text" name="lang['login_sigup_B15']" value="<?php if(!empty($lang['login_sigup_B15'])): echo $lang['login_sigup_B15']; endif;?>" placeholder="Male" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
							<input type="text" name="lang['login_sigup_B16']" value="<?php if(!empty($lang['login_sigup_B16'])): echo $lang['login_sigup_B16']; endif;?>" placeholder="Female" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Location</label>
							<input type="text" name="lang['login_sigup_B17']" value="<?php if(!empty($lang['login_sigup_B17'])): echo $lang['login_sigup_B17']; endif;?>" placeholder="Select Location" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc</label>
							<input type="text" name="lang['login_patient_sigup_A18']" value="<?php if(!empty($lang['login_patient_sigup_A18'])): echo $lang['login_patient_sigup_A18']; endif;?>" placeholder="You’ll love being on Bookmydoc" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc subtitle one</label>
							<textarea name="lang['login_patient_sigup_A19']"  class="form-control required regcom"  placeholder="You’ll love being on Bookmydoc subtitle one" required=""><?php if(!empty($lang['login_patient_sigup_A19'])): echo $lang['login_patient_sigup_A19']; endif;?></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love being on Bookmydoc subtitle two</label>
							<textarea name="lang['login_patient_sigup_A20']"  class="form-control required regcom"  placeholder="You’ll love being on Bookmydoc subtitle two" required=""><?php if(!empty($lang['login_patient_sigup_A20'])): echo $lang['login_patient_sigup_A20']; endif;?></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign up for a book my doc account to book an appointment right now!</label>
							<textarea name="lang['login_patient_sigup_A21']" class="form-control required regcom"  placeholder="Sign up for a book my doc account to book an appointment right now!" required=""><?php if(!empty($lang['login_patient_sigup_A21'])): echo $lang['login_patient_sigup_A21']; endif;?></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Forgot Password</label>
							<input type="text" name="lang['login_patient_sigup_A22']"  value="<?php if(!empty($lang['login_patient_sigup_A22'])): echo $lang['login_patient_sigup_A22']; endif;?>" placeholder="Forgot Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
							<input type="text" name="lang['login_patient_sigup_A23']"  value="<?php if(!empty($lang['login_patient_sigup_A23'])): echo $lang['login_patient_sigup_A23']; endif;?>" placeholder="Email" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Submit</label>
							<input type="text" name="lang['login_patient_sigup_A24']" value="<?php if(!empty($lang['login_patient_sigup_A24'])): echo $lang['login_patient_sigup_A24']; endif;?>"  placeholder="Submit" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">HealthCare Provider Name(Hospital, Medical Center Or Clinic Name)</label>
							<input type="text" name="lang['login_patient_sigup_A25']"  value="<?php if(!empty($lang['login_patient_sigup_A25'])): echo $lang['login_patient_sigup_A25']; endif;?>" placeholder="HealthCare Provider Name(Hospital, Medical Center Or Clinic Name)" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Type</label>
							<input type="text" name="lang['login_patient_sigup_A26']" value="<?php if(!empty($lang['login_patient_sigup_A26'])): echo $lang['login_patient_sigup_A26']; endif;?>"  placeholder="Select Type" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor</label>
							<input type="text" name="lang['login_patient_sigup_A27']"  value="<?php if(!empty($lang['login_patient_sigup_A27'])): echo $lang['login_patient_sigup_A27']; endif;?>" placeholder="Doctor" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Clinic</label>
							<input type="text" name="lang['login_patient_sigup_A28']"  value="<?php if(!empty($lang['login_patient_sigup_A28'])): echo $lang['login_patient_sigup_A28']; endif;?>" placeholder="Clinic" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Center</label>
							<input type="text" name="lang['login_patient_sigup_A29']"  value="<?php if(!empty($lang['login_patient_sigup_A29'])): echo $lang['login_patient_sigup_A29']; endif;?>" placeholder="Medical Center" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital</label>
							<input type="text" name="lang['login_patient_sigup_A30']"  value="<?php if(!empty($lang['login_patient_sigup_A30'])): echo $lang['login_patient_sigup_A30']; endif;?>" placeholder="Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter Health Provider Name</label>
							<input type="text" name="lang['login_patient_sigup_A31']"   value="<?php if(!empty($lang['login_patient_sigup_A31'])): echo $lang['login_patient_sigup_A31']; endif;?>" placeholder="Enter Health Provider Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				 </div>
			</div>
			<div class="box">			
			   <div class="form-group has-feedback">                                       
                    <input type="button" class="btn btn-primary" value="Submit"   id="loginedit">
                     <button type="reset" class="btn btn-primary">Reset </button>
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
    <script type="text/javascript">
</script>	 