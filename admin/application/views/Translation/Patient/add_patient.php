<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Patient Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Patient_Translation/view_patient"> Patient Translation </a></li>
         <li class="active">Add Patient Translation</li>
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
	<form role="form"  method="post" id="patient_add" data-parsley-validate="" class="validate">
	 <input type="hidden" name="created_by" value="<?php echo $id; ?>">
	 <input type="hidden" name="created_date" value="<?php echo date('Y-m-d  H:i:s'); ?>" >
	 <input  type="hidden" name="lang['home_lang']" value="home_lang" >
	 <input  type="hidden" name="lang['login_lang']" value="login_lang" >
	 <input  type="hidden" name="lang['search_lang']" value="search_lang" >
	 <input  type="hidden" name="lang['doctorfilter_lang']" value="doctorfilter_lang" >
	 <input  type="hidden" name="lang['clinicfilter_lang']" value="clinicfilter_lang" >
	 <input  type="hidden" name="lang['hospitalprofile_lang']" value="hospitalprofile_lang" >
     <input  type="hidden" name="lang['medicalfilter_lang']" value="medicalfilter_lang" >
	 <input  type="hidden" name="lang['hospitalfilter_lang']" value="hospitalfilter_lang" >
	 <input  type="hidden" name="lang['doctorprofile_lang']" value="doctorprofile_lang" >
	 <input  type="hidden" name="lang['clinicprofile_lang']" value="clinicprofile_lang" >
	 <input  type="hidden" name="lang['medicalprofile_lang']" value="medicalprofile_lang" >
	 <input  type="hidden" name="lang['hospital_lang']" value="hospital_lang" >
	 <input  type="hidden" name="lang['doctor_lang']" value="doctor_lang" >
	 <input  type="hidden" name="lang['about_lang']" value="about_lang" >
     <input  type="hidden" name="lang['terms_lang']" value="terms_lang" >
         <div class="col-md-12">
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Add Patient Translation Details</h3>
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
				<!-- Home page Tab 1 -->
                       <input class="form-control  required regcom sample"   placeholder="Page Name" value="patient_lang" name="lang['page_name']"  type="hidden">
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Welcome</label>
                             <input class="form-control  required regcom sample" placeholder="Welcome" name="lang['patient_tab_A']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
                         <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">More than 5 million patients use bookmydoc to find doctors every month.Let them book appointments with use instanly</label>
                             <input class="form-control  required regcom sample" placeholder="More than 5 million patients use bookmydoc to find doctors every month.Let them book appointments with use instanly" name="lang['patient_tab_B']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Search now</label>
                            <input type="text" name="lang['patient_tab_C']" placeholder="Search now" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  	<!-- Welcome page Tab 1 -->
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Team</label>
                            <input type="text" name="lang['patient_tab_D']" placeholder="Medical Team" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						
							
	            
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Book a primary care physican</label>
                            <input type="text" name="lang['patient_tab_D1']" placeholder="Book a primary care physican" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Upcoming Events</label>
                            <input type="text" name="lang['patient_tab_D2']" placeholder="Upcoming Events" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				 <!--Home page Tab 3-->
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">No Upcoming Events</label>
                            <input type="text" name="lang['patient_tab_D3']" placeholder="No Upcoming Events" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointments </label>
                            <input type="text" name="lang['patient_tab_D4']" placeholder="Appointments" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Book again </label>
                            <input type="text" name="lang['patient_tab_D5']" placeholder="Book again" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Remove</label>
                            <input type="text" name="lang['patient_tab_D6']" placeholder="Remove" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Rate Physician</label>
                            <input type="text" name="lang['patient_tab_D7']" placeholder="Rate Physician" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
						  
						  
					<!---Welcome page Tab Past Appointment--> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Past Appointment</label>
                            <input type="text" name="lang['patient_tab_E']" placeholder=" Past Appointment" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 					

						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Name</label>
                            <input type="text" name="lang['patient_tab_E1']" placeholder="Doctor Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Illness</label>
                            <input type="text" name="lang['patient_tab_E2']" placeholder="Illness" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Date</label>
                            <input type="text" name="lang['patient_tab_E3']" placeholder="Appointment Date" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Action</label>
                            <input type="text" name="lang['patient_tab_E4']" placeholder="Action" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Download</label>
                            <input type="text" name="lang['patient_tab_E5']" placeholder="Download" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                        <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Download Pdf</label>
                            <input type="text" name="lang['patient_tab_E6']" placeholder="Download Pdf" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You have appointment Today</label>
                            <input type="text" name="lang['patient_tab_E7']" placeholder="You have appointment Today" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
			<!---Welcome page Tab  Notifications--> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Notifications </label>
                            <input type="text" name="lang['patient_tab_F']" placeholder=" Notifications" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> You don’t have any Notifications </label>
                            <input type="text" name="lang['patient_tab_F1']" placeholder=" You don’t have any Notifications" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

				<!---Welcome page Tab  Settings--> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Settings</label>
                            <input type="text" name="lang['patient_tab_G']" placeholder="Settings" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <!---Welcome page Tab  Settings subtitle Edit Profile--> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Edit Profile</label>
                            <input type="text" name="lang['patient_tab_G1']" placeholder="Edit Profile" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="lang['patient_tab_G11']" placeholder="First Name" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="lang['patient_tab_G12']" placeholder="Last Name" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">E mail</label>
                            <input type="text" name="lang['patient_tab_G13']" placeholder="E mail" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update</label>
                            <input type="text" name="lang['patient_tab_G14']" placeholder="Update" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				<!---Welcome page Tab  Settings subtitle Change Password--> 
				<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Change Password</label>
                            <input type="text" name="lang['patient_tab_G2']" placeholder="Change Password" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">The Password Advice</label>
                            <input type="text" name="lang['patient_tab_G21']" placeholder="The Password Advice" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Has 6 Characters, Minimum</label>
                            <input type="text" name="lang['patient_tab_G22']" placeholder="Has 6 Characters, Minimum" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Current Pasword</label>
                            <input type="text" name="lang['patient_tab_G23']" placeholder="Current Pasword" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">New Pssword</label>
                            <input type="text" name="lang['patient_tab_G24']" placeholder="New Pssword" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Re-type New Password</label>
                            <input type="text" name="lang['patient_tab_G25']" placeholder="Re-type New Password" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update</label>
                            <input type="text" name="lang['patient_tab_G26']" placeholder="Update" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Message</label>
                            <input type="text" name="lang['patient_tab_H']" placeholder="Message" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Name</label>
                            <input type="text" name="lang['patient_tab_H1']" placeholder="Doctor Name" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Ill Reason</label>
                            <input type="text" name="lang['patient_tab_H2']" placeholder="Ill Reason" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Date</label>
                            <input type="text" name="lang['patient_tab_H3']" placeholder="Appointment Date" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Time<</label>
                            <input type="text" name="lang['patient_tab_H4']" placeholder="Appointment Time<" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">USER REVIEWS FOR DOCTOR</label>
                            <input type="text" name="lang['patient_tab_I']" placeholder="USER REVIEWS FOR DOCTOR" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">How much will you rate ?</label>
                            <input type="text" name="lang['patient_tab_I1']" placeholder="How much will you rate ?" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Write an Review</label>
                            <input type="text" name="lang['patient_tab_I2']" placeholder="Write an Review" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">SUBMIT</label>
                            <input type="text" name="lang['patient_tab_I3']" placeholder="SUBMIT" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						  
						  
						  
			  </div>				   
		   </div>
			<div class="box">
				 <div class="box-body">
				   <div class="col-md-12">
					 <div class="form-group has-feedback">                                       
                            <input type="button" class="btn btn-primary" value="Submit"  name="Save" id="patientadd">
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


	 