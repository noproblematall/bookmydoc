<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Booking Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Booking_Translation/view_booking"> Booking Translation </a></li>
         <li class="active">Add Booking Translation</li>
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
	<form role="form"  method="post" id="booking_add" data-parsley-validate="" class="validate">
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
                  <h3 class="box-title">Add Booking Details</h3>
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
				<!-------About page ------->
                       <input class="form-control  required regcom sample"   placeholder="Page Name" value="booking_lang" name="lang['page_name']"  type="hidden">

					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Dr.</label>
                            <input type="text" name="lang['booking_A1']" placeholder="Dr" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment time</label>
							<input type="text" name="lang['booking_A2']" placeholder="Appointment time" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Registration.</label>
                            <input type="text" name="lang['booking_A3']" placeholder="Patient Registration" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance.</label>
                            <input type="text" name="lang['booking_A4']" placeholder="Insurance" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance.</label>
                            <input type="text" name="lang['booking_A5']" placeholder="Insurance" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">What's the reason for your visit?.</label>
                            <input type="text" name="lang['booking_A6']" placeholder="What's the reason for your visit?" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Visitation.</label>
                            <input type="text" name="lang['booking_A7']" placeholder="Visitation" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Click Here To Continue</label>
							<input type="text" name="lang['booking_A8']" placeholder="Click Here To Continue" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Details</label>
                            <input type="text" name="lang['booking_A9']" placeholder="Appointment Details" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patiant Name.</label>
                            <input type="text" name="lang['booking_A10']" placeholder="Patiant Name" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">General Insurance.</label>
                            <input type="text" name="lang['booking_A11']" placeholder="General Insurance" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">General Reason.</label>
                            <input type="text" name="lang['booking_A12']" placeholder="General Reason" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gender.</label>
                            <input type="text" name="lang['booking_A13']" placeholder="Gender" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female.</label>
                            <input type="text" name="lang['booking_A14']" placeholder="Female" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Time.</label>
                            <input type="text" name="lang['booking_A15']" placeholder="Appointment Time" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Continue.</label>
                            <input type="text" name="lang['booking_A16']" placeholder="Continue" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Check in Online.</label>
                            <input type="text" name="lang['booking_A17']" placeholder="Check in Online" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">No Thanks.</label>
                            <input type="text" name="lang['booking_A18']" placeholder="No Thanks" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name.</label>
                            <input type="text" name="lang['booking_A19']" placeholder="First Name" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name.</label>
                            <input type="text" name="lang['booking_A20']" placeholder="Last Name" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex.</label>
                            <input type="text" name="lang['booking_A21']" placeholder="Sex" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male.</label>
                            <input type="text" name="lang['booking_A22']" placeholder="Male" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female.</label>
                            <input type="text" name="lang['booking_A23']" placeholder="Female" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance.</label>
                            <input type="text" name="lang['booking_A24']" placeholder="Insurance" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">What's the reason for your visit?.</label>
                            <input type="text" name="lang['booking_A25']" placeholder="What's the reason for your visit?" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update & Reappointment.</label>
                            <input type="text" name="lang['booking_A26']" placeholder="Update & Reappointment" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Your appointment booked successfully!</label>
                            <input type="text" name="lang['booking_A27']" placeholder="Your appointment booked successfully!" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update & Reappointment.</label>
                            <input type="text" name="lang['booking_A28']" placeholder="Update & Reappointment" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Click here</label>
                            <input type="text" name="lang['booking_A29']" placeholder="Click here" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">to proceed.</label>
                            <input type="text" name="lang['booking_A30']" placeholder="to proceed." class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment.</label>
                            <input type="text" name="lang['booking_A31']" placeholder="Appointment" class="form-control required regcom" required="">
                            <span>
						
						  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Check-In Details.</label>
                            <input type="text" name="lang['booking_A33']" placeholder="Check-In Details" class="form-control required regcom" required="">
                            <span>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Details.</label>
                            <input type="text" name="lang['booking_A34']" placeholder="Patient Details" class="form-control required regcom" required="">
                            <span>
						  
						   
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Finished.</label>
                            <input type="text" name="lang['booking_A3']" placeholder="Finished" class="form-control required regcom" required="">
                            <span>
						  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Please Login as patient to continue . Only patients can book appointment.</label>
                            <input type="text" name="lang['booking_A36']" placeholder="Please Login as patient to continue . Only patients can book appointment" class="form-control required regcom" required="">
                            <span>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Check New / Existing Account.</label>
                            <input type="text" name="lang['booking_A37']" placeholder="Check New / Existing Account" class="form-control required regcom" required="">
                            <span>
						  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm New to Bookmydoc.</label>
                            <input type="text" name="lang['booking_A38']" placeholder="I'm New to Bookmydoc" class="form-control required regcom" required="">
                            <span>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I've used Bookmydoc Before.</label>
                            <input type="text" name="lang['booking_A39']" placeholder="I've used Bookmydoc Before" class="form-control required regcom" required="">
                            <span>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="lang['booking_A40']" placeholder="First Name" class="form-control required regcom" required="">
                            <span>
						  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name.</label>
                            <input type="text" name="lang['booking_A3']" placeholder="Last Name" class="form-control required regcom" required="">
                            <span>
									  
						     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lang['booking_A41']" placeholder="Email" class="form-control required regcom" required="">
                            <span>
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Create a Password</label>
                            <input type="text" name="lang['booking_A42']" placeholder="First Name" class="form-control required regcom" required="">
                            <span>
							 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex</label>
                            <input type="text" name="lang['booking_A43']" placeholder="Sex" class="form-control required regcom" required="">
                            <span>
							
							 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lang['booking_A44']" placeholder="Male" class="form-control required regcom" required="">
                            <span>
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
                            <input type="text" name="lang['booking_A45']" placeholder="Female" class="form-control required regcom" required="">
                            <span>
							
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I Agree to the Terms and Conditions</label>
                            <input type="text" name="lang['booking_A46']" placeholder="I Agree to the Terms and Conditions" class="form-control required regcom" required="">
                            <span>
							
							 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signup to continue</label>
                            <input type="text" name="lang['booking_A47']" placeholder="Signup to continue" class="form-control required regcom" required="">
                            <span>
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lang['booking_A48']" placeholder="Email" class="form-control required regcom" required="">
                            <span>
							
							
							 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signin to continue</label>
                            <input type="text" name="lang['booking_A49']" placeholder="Signin to continue" class="form-control required regcom" required="">
                            <span>
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment time</label>
                            <input type="text" name="lang['booking_A50']" placeholder="Appointment time" class="form-control required regcom" required="">
                            <span>
							
							  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" name="lang['booking_A53']" placeholder="Password" class="form-control required regcom" required="">
                            <span>
				    </div>
			  </div>				   

		   </div>
			<div class="box">
				 <div class="box-body">
				   <div class="col-md-12">
					 <div class="form-group has-feedback">                                       
                            <input type="button" class="btn btn-primary" value="Submit"  name="Save" id="bookingadd">
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


	 