<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Booking Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Booking_Translation/view_booking"> Booking Translation </a></li>
         <li class="active">Edit Booking Translation</li>
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
					if(in_array('booking_lang.php',$lang_directory)):				
						$final_lang = 'booking_lang';
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
	<form role="form"  method="post" id="booking_edit">
	  <input type="hidden" name="created_by" value="<?php echo $id; ?>">
	 <input type="hidden" name="created_date" value="<?php echo date('Y-m-d  H:i:s'); ?>" >
	 <input  type="hidden" name="lang['clinicfilter_lang']" value="clinicfilter_lang" >
	 <input  type="hidden" name="lang['login_lang']" value="login_lang" >
	 <input  type="hidden" name="lang['search_lang']" value="search_lang" >
	 <input  type="hidden" name="lang['doctorfilter_lang']" value="doctorfilter_lang" >
	 <input  type="hidden" name="lang['hospitalprofile_lang']" value="hospitalprofile_lang" >
     <input  type="hidden" name="lang['medicalfilter_lang']" value="medicalfilter_lang" >
	 <input  type="hidden" name="lang['hospitalfilter_lang']" value="hospitalfilter_lang" >
	 <input  type="hidden" name="lang['doctorprofile_lang']" value="doctorprofile_lang" >
	 <input  type="hidden" name="lang['clinicprofile_lang']" value="clinicprofile_lang" >
	 <input  type="hidden" name="lang['medicalprofile_lang']" value="medicalprofile_lang" >
	 <input  type="hidden" name="lang['hospital_lang']" value="hospital_lang" >
	 <input  type="hidden" name="lang['doctor_lang']" value="doctor_lang" >
	 <input  type="hidden" name="lang['patient_lang']" value="patient_lang" >
	 <input  type="hidden" name="lang['home_lang']" value="home_lang" >
	 <input  type="hidden" name="lang['about_lang']" value="about_lang" >
	 <input  type="hidden" name="lang['terms_lang']" value="terms_lang" >
         <div class="col-md-12">
		 
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Edit General Booking Details</h3>
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
                            
					  <input class="form-control  required regcom sample"   placeholder="Page Name" value="booking_lang" name="lang['page_name']"  type="hidden">
			<!-------About page ------->
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Dr.</label>
                            <input type="text" name="lang['booking_A1']" value="<?php if(!empty($lang['booking_A1'])): echo $lang['booking_A1']; endif;?>" placeholder="Dr" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment time</label>
							  <input type="text" name="lang['booking_A2']" value="<?php if(!empty($lang['booking_A2'])): echo $lang['booking_A2']; endif;?>" placeholder=">Appointment time" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Registration.</label>
                            <input type="text" name="lang['booking_A3']" value="<?php if(!empty($lang['booking_A3'])): echo $lang['booking_A3']; endif;?>" placeholder="Patient Registration" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance.</label>
                            <input type="text" name="lang['booking_A4']" value="<?php if(!empty($lang['booking_A4'])): echo $lang['booking_A4']; endif;?>" placeholder="Insurance" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance.</label>
                            <input type="text" name="lang['booking_A5']" value="<?php if(!empty($lang['booking_A5'])): echo $lang['booking_A5']; endif;?>" placeholder="Insurance" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">What's the reason for your visit?.</label>
                            <input type="text" name="lang['booking_A6']" value="<?php if(!empty($lang['booking_A6'])): echo $lang['booking_A6']; endif;?>" placeholder="What's the reason for your visit?" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Visitation.</label>
                            <input type="text" name="lang['booking_A7']" value="<?php if(!empty($lang['booking_A7'])): echo $lang['booking_A7']; endif;?>" placeholder="Visitation" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Click Here To Continue</label>
							<input type="text" name="lang['booking_A8']"  value="<?php if(!empty($lang['booking_A8'])): echo $lang['booking_A8']; endif;?>" placeholder="Click Here To Continue" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Details</label>
                            <input type="text" name="lang['booking_A9']"  value="<?php if(!empty($lang['booking_A9'])): echo $lang['booking_A9']; endif;?>" placeholder="Appointment Details" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patiant Name.</label>
                            <input type="text" name="lang['booking_A10']"  value="<?php if(!empty($lang['booking_A10'])): echo $lang['booking_A10']; endif;?>"placeholder="Patiant Name" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">General Insurance.</label>
                            <input type="text" name="lang['booking_A11']"  value="<?php if(!empty($lang['booking_A11'])): echo $lang['booking_A11']; endif;?>" placeholder="General Insurance" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">General Reason.</label>
                            <input type="text" name="lang['booking_A12']"  value="<?php if(!empty($lang['booking_A12'])): echo $lang['booking_A12']; endif;?>" placeholder="General Reason" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gender.</label>
                            <input type="text" name="lang['booking_A13']"  value="<?php if(!empty($lang['booking_A13'])): echo $lang['booking_A13']; endif;?>" placeholder="Gender" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female.</label>
                            <input type="text" name="lang['booking_A14']"  value="<?php if(!empty($lang['booking_A14'])): echo $lang['booking_A14']; endif;?>" placeholder="Female" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Time.</label>
                            <input type="text" name="lang['booking_A15']"  value="<?php if(!empty($lang['booking_A15'])): echo $lang['booking_A15']; endif;?>" placeholder="Appointment Time" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Continue.</label>
                            <input type="text" name="lang['booking_A16']"  value="<?php if(!empty($lang['booking_A16'])): echo $lang['booking_A16']; endif;?>" placeholder="Continue" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Check in Online.</label>
                            <input type="text" name="lang['booking_A17']"  value="<?php if(!empty($lang['booking_A17'])): echo $lang['booking_A17']; endif;?>" placeholder="Check in Online" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">No Thanks.</label>
                            <input type="text" name="lang['booking_A18']"  value="<?php if(!empty($lang['booking_A18'])): echo $lang['booking_A18']; endif;?>" placeholder="No Thanks" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name.</label>
                            <input type="text" name="lang['booking_A19']"  value="<?php if(!empty($lang['booking_A19'])): echo $lang['booking_A19']; endif;?>" placeholder="First Name" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name.</label>
                            <input type="text" name="lang['booking_A20']"  value="<?php if(!empty($lang['booking_A20'])): echo $lang['booking_A20']; endif;?>" placeholder="Last Name" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex.</label>
                            <input type="text" name="lang['booking_A21']"  value="<?php if(!empty($lang['booking_A21'])): echo $lang['booking_A21']; endif;?>" placeholder="Sex" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male.</label>
                            <input type="text" name="lang['booking_A22']"  value="<?php if(!empty($lang['booking_A22'])): echo $lang['booking_A22']; endif;?>" placeholder="Male" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female.</label>
                            <input type="text" name="lang['booking_A23']"  value="<?php if(!empty($lang['booking_A23'])): echo $lang['booking_A23']; endif;?>" placeholder="Female" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance.</label>
                            <input type="text" name="lang['booking_A24']"  value="<?php if(!empty($lang['booking_A24'])): echo $lang['booking_A24']; endif;?>" placeholder="Insurance" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">What's the reason for your visit?.</label>
                            <input type="text" name="lang['booking_A25']"  value="<?php if(!empty($lang['booking_A25'])): echo $lang['booking_A25']; endif;?>" placeholder="What's the reason for your visit?" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update & Reappointment.</label>
                            <input type="text" name="lang['booking_A26']"  value="<?php if(!empty($lang['booking_A26'])): echo $lang['booking_A26']; endif;?>" placeholder="Update & Reappointment" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Your appointment booked successfully!</label>
                            <input type="text" name="lang['booking_A27']"  value="<?php if(!empty($lang['booking_A27'])): echo $lang['booking_A27']; endif;?>" placeholder="Your appointment booked successfully!" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update & Reappointment.</label>
                            <input type="text" name="lang['booking_A28']"  value="<?php if(!empty($lang['booking_A28'])): echo $lang['booking_A28']; endif;?>" placeholder="Update & Reappointment" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Click here</label>
                            <input type="text" name="lang['booking_A29']"  value="<?php if(!empty($lang['booking_A29'])): echo $lang['booking_A29']; endif;?>" placeholder="Click here" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">to proceed.</label>
                            <input type="text" name="lang['booking_A30']"  value="<?php if(!empty($lang['booking_A30'])): echo $lang['booking_A30']; endif;?>" placeholder="to proceed." class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment.</label>
                            <input type="text" name="lang['booking_A31']" value="<?php if(!empty($lang['booking_A31'])): echo $lang['booking_A31']; endif;?>" placeholder="Appointment" class="form-control required regcom" required="">
                            <span>
		
						  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Check-In Details.</label>
                            <input type="text" name="lang['booking_A33']" value="<?php if(!empty($lang['booking_A33'])): echo $lang['booking_A33']; endif;?>" placeholder="Check-In Details" class="form-control required regcom" required="">
                            <span>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Details.</label>
                            <input type="text" name="lang['booking_A34']" value="<?php if(!empty($lang['booking_A34'])): echo $lang['booking_A34']; endif;?>" placeholder="Patient Details" class="form-control required regcom" required="">
                            <span>
						  
			
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Finished.</label>
                            <input type="text" name="lang['booking_A51']" value="<?php if(!empty($lang['booking_A51'])): echo $lang['booking_A51']; endif;?>" placeholder="Finished" class="form-control required regcom" required="">
                            <span>
						  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Please Login as patient to continue . Only patients can book appointment.</label>
                            <input type="text" name="lang['booking_A36']" value="<?php if(!empty($lang['booking_A36'])): echo $lang['booking_A36']; endif;?>" placeholder="Please Login as patient to continue . Only patients can book appointment" class="form-control required regcom" required="">
                            <span>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Check New / Existing Account.</label>
                            <input type="text" name="lang['booking_A37']" value="<?php if(!empty($lang['booking_A37'])): echo $lang['booking_A37']; endif;?>"  placeholder="Check New / Existing Account" class="form-control required regcom" required="">
                            <span>
						  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm New to Bookmydoc.</label>
                            <input type="text" name="lang['booking_A38']" value="<?php if(!empty($lang['booking_A38'])): echo $lang['booking_A38']; endif;?>" placeholder="I'm New to Bookmydoc" class="form-control required regcom" required="">
                            <span>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I've used Bookmydoc Before.</label>
                            <input type="text" name="lang['booking_A39']" value="<?php if(!empty($lang['booking_A39'])): echo $lang['booking_A39']; endif;?>" placeholder="I've used Bookmydoc Before" class="form-control required regcom" required="">
                            <span>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="lang['booking_A40']" value="<?php if(!empty($lang['booking_A40'])): echo $lang['booking_A40']; endif;?>" placeholder="First Name" class="form-control required regcom" required="">
                            <span>
						  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name.</label>
                            <input type="text" name="lang['booking_A52']" value="<?php if(!empty($lang['booking_A52'])): echo $lang['booking_A52']; endif;?>" placeholder="Last Name" class="form-control required regcom" required="">
                            <span>
									  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lang['booking_A41']" value="<?php if(!empty($lang['booking_A41'])): echo $lang['booking_A41']; endif;?>" placeholder="Email" class="form-control required regcom" required="">
                            <span>
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Create a Password</label>
                            <input type="text" name="lang['booking_A42']" value="<?php if(!empty($lang['booking_A42'])): echo $lang['booking_A42']; endif;?>" placeholder="First Name" class="form-control required regcom" required="">
                            <span>
							 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex</label>
                            <input type="text" name="lang['booking_A43']" value="<?php if(!empty($lang['booking_A43'])): echo $lang['booking_A43']; endif;?>" placeholder="Sex" class="form-control required regcom" required="">
                            <span>
							
							 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lang['booking_A44']" value="<?php if(!empty($lang['booking_A44'])): echo $lang['booking_A44']; endif;?>" placeholder="Male" class="form-control required regcom" required="">
                            <span>
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
                            <input type="text" name="lang['booking_A45']" value="<?php if(!empty($lang['booking_A45'])): echo $lang['booking_A45']; endif;?>" placeholder="Female" class="form-control required regcom" required="">
                            <span>
							
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I Agree to the Terms and Conditions</label>
                            <input type="text" name="lang['booking_A46']" value="<?php if(!empty($lang['booking_A46'])): echo $lang['booking_A46']; endif;?>" placeholder="I Agree to the Terms and Conditions" class="form-control required regcom" required="">
                            <span>
							
							 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signup to continue</label>
                            <input type="text" name="lang['booking_A47']" value="<?php if(!empty($lang['booking_A47'])): echo $lang['booking_A47']; endif;?>" placeholder="Signup to continue" class="form-control required regcom" required="">
                            <span>
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lang['booking_A48']" value="<?php if(!empty($lang['booking_A48'])): echo $lang['booking_A48']; endif;?>" placeholder="Email" class="form-control required regcom" required="">
                            <span>
							
							
							 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signin to continue</label>
                            <input type="text" name="lang['booking_A49']" value="<?php if(!empty($lang['booking_A49'])): echo $lang['booking_A49']; endif;?>" placeholder="Signin to continue" class="form-control required regcom" required="">
                            <span>
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment time</label>
                            <input type="text" name="lang['booking_A50']" value="<?php if(!empty($lang['booking_A50'])): echo $lang['booking_A50']; endif;?>" placeholder="Appointment time" class="form-control required regcom" required="">
                            <span>
							 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signin to continue</label>
                            <input type="text" name="lang['booking_A49']" value="<?php if(!empty($lang['booking_A49'])): echo $lang['booking_A49']; endif;?>" placeholder="Signin to continue" class="form-control required regcom" required="">
                            <span>
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">password</label>
                            <input type="text" name="lang['booking_A53']" value="<?php if(!empty($lang['booking_A53'])): echo $lang['booking_A53']; endif;?>" placeholder="password" class="form-control required regcom" required="">
                            <span>
				 </div>
			</div>
			<div class="box">			
			   <div class="form-group has-feedback">                                       
                    <input type="button" class="btn btn-primary" value="Submit"   id="bookingedit">
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
	 