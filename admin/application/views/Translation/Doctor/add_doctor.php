<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Doctor Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Doctor_Translation/view_doctor"> Doctor Translation </a></li>
         <li class="active">Add Doctor Translation</li>
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
	<form role="form"  method="post" id="doctor_add" data-parsley-validate="" class="validate">
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
	 <input  type="hidden" name="lang['patient_lang']" value="patient_lang" >
	 <input  type="hidden" name="lang['hospital_lang']" value="hospital_lang" >
	 <input  type="hidden" name="lang['about_lang']" value="about_lang" >
 <input  type="hidden" name="lang['terms_lang']" value="terms_lang" >
         <div class="col-md-12">
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Add Doctor Translation</h3>
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
			
                       <input class="form-control  required regcom sample"   placeholder="Page Name" value="doctor_lang" name="lang['page_name']"  type="hidden">
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Welcome</label>
                             <input class="form-control  required regcom sample" placeholder="Welcome" name="lang['doctor_slide_A1']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
                         <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Age </label>
                             <input class="form-control  required regcom sample" placeholder="Age" name="lang['doctor_slide_A2']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">More than 5 million patients use bookmydoc to find doctors every month. Let them book appointments with use instantly</label>
                            <input type="text" name="lang['doctor_slide_A3']" placeholder="More than 5 million patients use bookmydoc to find doctors every month. Let them book appointments with use instantly" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Search now</label>
                            <input type="text" name="lang['doctor_slide_A4']" placeholder="Search now" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
  <!-- Welcome page Tab 1 -->
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment</label>
                            <input type="text" name="lang['doctor_tab_A1']" placeholder="Appointment" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Details </label>
                            <input type="text" name="lang['doctor_tab_A2']" placeholder="Appointment Details" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
	             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Name</label>
                            <input type="text" name="lang['doctor_tab_A3']" placeholder="Patient Name" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Time</label>
                            <input type="text" name="lang['doctor_tab_A4']" placeholder="Appointment Time" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Patient Sex</label>
                            <input type="text" name="lang['doctor_tab_A5']" placeholder="Patient Sex" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['doctor_tab_A6']" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Reason </label>
                            <input type="text" name="lang['doctor_tab_A7']" placeholder="Reason " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">close </label>
                            <input type="text" name="lang['doctor_tab_A8']" placeholder="close " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					<!---Welcome page Tab 2 B1-->  
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Calender Setting </label>
                            <input type="text" name="lang['doctor_tab_B1']" placeholder=" Calender Setting " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Work Plan </label>
                            <input type="text" name="lang['doctor_tab_B2']" placeholder=" Work Plan " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Checkall </label>
                            <input type="text" name="lang['doctor_tab_B21']" placeholder="Checkall " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Day </label>
                            <input type="text" name="lang['doctor_tab_B22']" placeholder="Day " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Start </label>
                            <input type="text" name="lang['doctor_tab_B23']" placeholder="Starts " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">End </label>
                            <input type="text" name="lang['doctor_tab_B24']" placeholder="End " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Actions </label>
                            <input type="text" name="lang['doctor_tab_B25']" placeholder="Actions " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                          <!---Welcome page Tab 2 b2-->  
                 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Breaks </label>
                            <input type="text" name="lang['doctor_tab_B3']" placeholder="Breaks " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                           <!---Welcome page Tab 2 B3-->  
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Vacations </label>
                            <input type="text" name="lang['doctor_tab_B4']" placeholder=" Vacations " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Checkall </label>
                            <input type="text" name="lang['doctor_tab_B41']" placeholder="Checkall " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">  Start Date </label>
                            <input type="text" name="lang['doctor_tab_B42']" placeholder="  Start Date " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">  End Date </label>
                            <input type="text" name="lang['doctor_tab_B43']" placeholder="  End Date " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">  Actions </label>
                            <input type="text" name="lang['doctor_tab_B45']" placeholder="  Actions" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
    <!---Welcome page Tab 2 C1-->  


      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">   Settings </label>
                            <input type="text" name="lang['doctor_tab_C1']" placeholder="   Settings" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
              <!---Welcome page Tab  C2-->  
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">  My Details</label>
                            <input type="text" name="lang['doctor_tab_C2']" placeholder="  Start Date " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <!---Welcome page Tab  C22-->  
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="lang['doctor_tab_C21']" placeholder="Update Profile" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                        <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="lang['doctor_tab_C22']" placeholder="Update Profile" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                        <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="text" name="lang['doctor_tab_C23']" placeholder="E-mail" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gender</label>
                            <input type="text" name="lang['doctor_tab_C24']" placeholder="Gender" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                        <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="text" name="lang['doctor_tab_C25']" placeholder="Age" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lang['doctor_tab_C26']" placeholder="Male" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
                            <input type="text" name="lang['doctor_tab_C27']" placeholder="Female" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
   <!---Welcome page Tab  C3-->  
                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update Profile</label>
                            <input type="text" name="lang['doctor_tab_C3']" placeholder="Update Profile" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 


                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Degree</label>
                            <input type="text" name="lang['doctor_tab_C31']" placeholder="Degree" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialty</label>
                            <input type="text" name="lang['doctor_tab_C32']" placeholder="Specialty" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Reasons</label>
                            <input type="text" name="lang['doctor_tab_C33']" placeholder="Reasons" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Awards</label>
                            <input type="text" name="lang['doctor_tab_C34']" placeholder="Awards" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                    

                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Languages Spoken</label>
                            <input type="text" name="lang['doctor_tab_C35']" placeholder="Languages Spoken" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['doctor_tab_C36']" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Languages Spoken</label>
                            <input type="text" name="lang['doctor_tab_C37']" placeholder="Languages Spoken" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                          
                    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Affiliation</label>
                            <input type="text" name="lang['doctor_tab_C38']" placeholder="Affiliation" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Office Address</label>
                            <input type="text" name="lang['doctor_tab_C39']" placeholder="Office Address" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                    
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Office City</label>
                            <input type="text" name="lang['doctor_tab_C310']" placeholder="Office City" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     
                    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Latitude</label>
                            <input type="text" name="lang['doctor_tab_C311']" placeholder="Latitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Pick from map</label>
                            <input type="text" name="lang['doctor_tab_C312']" placeholder="Pick from map" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                         
                    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Longitude</label>
                            <input type="text" name="lang['doctor_tab_C313']" placeholder="Longitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                             
                    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Experience</label>
                            <input type="text" name="lang['doctor_tab_C314']" placeholder="Experience" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                         
                  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About Yourself (This will be displayed to patient)</label>
                            <input type="text" name="lang['doctor_tab_C315']" placeholder="About Yourself (This will be displayed to patient)" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

				<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select City</label>
                            <input type="text" name="lang['doctor_tab_C316']" placeholder="Select City" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Professional Memberships</label>
                            <input type="text" name="lang['doctor_tab_C317']" placeholder="Professional Memberships" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
          <!---Welcome page Tab  C4-->  
           <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Update Password</label>
                            <input type="text" name="lang['doctor_tab_C4']" placeholder=" Update Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
           <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Current Pasword</label>
                            <input type="text" name="lang['doctor_tab_C41']" placeholder=" Current Pasword" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

           <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">New Pssword</label>
                            <input type="text" name="lang['doctor_tab_C42']" placeholder="New Pssword" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

           <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Re-type New Password</label>
                            <input type="text" name="lang['doctor_tab_C43']" placeholder="Re-type New Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
          <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">The Password Advice</label>
                            <input type="text" name="lang['doctor_tab_C44']" placeholder="The Password Advice" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

          <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Has 12 Characters, Minimum</label>
                            <input type="text" name="lang['doctor_tab_C45']" placeholder="Has 12 Characters, Minimum" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

          <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Includes Numbers and Symbols</label>
                            <input type="text" name="lang['doctor_tab_C46']" placeholder="Includes Numbers and Symbols" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 




             <!---Welcome page Tab  C5--> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Upload Image</label>
                            <input type="text" name="lang['doctor_tab_C5']" placeholder="Upload Image" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Choose File</label>
                            <input type="text" name="lang['doctor_tab_C51']" placeholder="Choose File" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">No file chosen</label>
                            <input type="text" name="lang['doctor_tab_C52']" placeholder="No file chosen" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 



                <!---Welcome page Tab  C6--> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Packages</label>
                            <input type="text" name="lang['doctor_tab_C6']" placeholder="Packages" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business name</label>
                            <input type="text" name="lang['doctor_tab_C61']" placeholder="Business name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business description</label>
                            <input type="text" name="lang['doctor_tab_C62']" placeholder="Business description" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="lang['doctor_tab_C63']" placeholder="Location" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Working hours</label>
                            <input type="text" name="lang['doctor_tab_C64']" placeholder="Working hours" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" name="lang['doctor_tab_C65']" placeholder="Phone Number" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select</label>
                            <input type="text" name="lang['doctor_tab_C66']" placeholder="Select" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

 <!---Welcome page Tab  C6 end--> 

                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update</label>
                            <input type="text" name="lang['doctor_tab_D']" placeholder="Update" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
					





						   

			<div class="box">
				 <div class="box-body">
				   <div class="col-md-12">
					 <div class="form-group has-feedback">                                       
                            <input type="button" class="btn btn-primary" value="Submit"  name="Save" id="doctoradd">
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


	 