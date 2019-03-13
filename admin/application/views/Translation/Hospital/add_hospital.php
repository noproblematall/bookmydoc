<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Hospital Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Hospital_Translation/view_hospital"> Hospital Translation </a></li>
         <li class="active">Add Hospital Translation</li>
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
	<form role="form"  method="post" id="hospital_add" data-parsley-validate="" class="validate">
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
	 <input  type="hidden" name="lang['doctor_lang']" value="doctor_lang" >
	 <input  type="hidden" name="lang['patient_lang']" value="patient_lang" >
	 <input  type="hidden" name="lang['about_lang']" value="about_lang" >
 <input  type="hidden" name="lang['terms_lang']" value="terms_lang" >
         <div class="col-md-12">
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Add Hospital Translation</h3>
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
				<!-- Welcome page -->
                       <input class="form-control  required regcom sample"   placeholder="Page Name" value="hospital_lang" name="lang['page_name']"  type="hidden">
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Dashboard Menu</label>
                             <input class="form-control  required regcom sample" placeholder="Dashboard Menu" name="lang['hospital_tab_A']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
						 <!---Welcome page Tab  My Listings-->
                         <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">My Listings </label>
                             <input class="form-control  required regcom sample" placeholder="My Listings" name="lang['hospital_tab_B']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Listings under</label>
                            <input type="text" name="lang['hospital_tab_B1']" placeholder="Listings under" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <!---Welcome page Tab  My Listings  sub edit-->
			<div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Edit</label>
                            <input type="text" name="lang['hospital_tab_B2']" placeholder="Edit" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Browse Photo</label>
                            <input type="text" name="lang['hospital_tab_B21']" placeholder="Browse Photo" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Hospital Name</label>
                            <input type="text" name="lang['hospital_tab_B22']" placeholder="Hospital Name" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Established in</label>
                            <input type="text" name="lang['hospital_tab_B23']" placeholder="Established in" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Zip Code</label>
                            <input type="text" name="lang['hospital_tab_B24']" placeholder="Zip Code" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="text" name="lang['hospital_tab_B25']" placeholder="Website" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="lang['hospital_tab_B26']" placeholder="Phone" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Country</label>
                            <input type="text" name="lang['hospital_tab_B27']" placeholder="Country" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">state</label>
                            <input type="text" name="lang['hospital_tab_B28']" placeholder="state" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">city</label>
                            <input type="text" name="lang['hospital_tab_B29']" placeholder="city" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="lang['hospital_tab_B210']" placeholder="Address" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update</label>
                            <input type="text" name="lang['hospital_tab_B211']" placeholder="Update" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
			<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Published</label>
                            <input type="text" name="lang['hospital_tab_B3']" placeholder="Published" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						
	             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hits - 0</label>
                            <input type="text" name="lang['hospital_tab_B4']" placeholder="Hits - 0" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Remove</label>
                            <input type="text" name="lang['hospital_tab_B5']" placeholder="Remove" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
		  <!---Welcome page Tab  Add Listing-->
			       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Add Listing</label>
                            <input type="text" name="lang['hospital_tab_C']" placeholder="Add Listing" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				 <!--Welcome page Tab  Add Listing subtitle Add Hospital-->
				    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Hospital</label>
                            <input type="text" name="lang['hospital_tab_C1']" placeholder="Add Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add New Hospital</label>
                            <input type="text" name="lang['hospital_tab_C11']" placeholder="Add New Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital Name </label>
                            <input type="text" name="lang['hospital_tab_C111']" placeholder="Hospital Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email </label>
                            <input type="text" name="lang['hospital_tab_C112']" placeholder="Email" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Password </label>
                            <input type="text" name="lang['hospital_tab_C113']" placeholder="Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Established in </label>
                            <input type="text" name="lang['hospital_tab_C114']" placeholder="Established in" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">YYYY/MM/DD</label>
                            <input type="text" name="lang['hospital_tab_C115']" placeholder="YYYY/MM/DD" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="text" name="lang['hospital_tab_C116']" placeholder="Website" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">www.example.com</label>
                            <input type="text" name="lang['hospital_tab_C117']" placeholder="www.example.com" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">select city</label>
                            <input type="text" name="lang['hospital_tab_C118']" placeholder="select city" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address here</label>
                            <input type="text" name="lang['hospital_tab_C119']" placeholder="Address here" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Latitude</label>
                            <input type="text" name="lang['hospital_tab_C1110']" placeholder="Latitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Longitude</label>
                            <input type="text" name="lang['hospital_tab_C1111']" placeholder="Longitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add</label>
                            <input type="text" name="lang['hospital_tab_C1112']" placeholder="Add" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Pick from map</label>
                            <input type="text" name="lang['hospital_tab_C1113']" placeholder="Pick from map" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="lang['hospital_tab_C1114']" placeholder="Phone" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">City</label>
                            <input type="text" name="lang['hospital_tab_C1115']" placeholder="City" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About</label>
                            <input type="text" name="lang['hospital_tab_C1116']" placeholder="About" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="lang['hospital_tab_C1117']" placeholder="Address" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <!--Welcome page Tab  Add Listing subtitle View Hospital-->
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View Hospitals</label>
                            <input type="text" name="lang['hospital_tab_C12']" placeholder="View Hospitals" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  <!---Home page Tab subtitle  Add Doctor--> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Doctor</label>
                            <input type="text" name="lang['hospital_tab_C2']" placeholder="Add Doctor" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add New Doctor</label>
                            <input type="text" name="lang['hospital_tab_C21']" placeholder="Add New Doctor" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Firstname</label>
                            <input type="text" name="lang['hospital_tab_C211']" placeholder="Doctor Firstname" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Lastname</label>
                            <input type="text" name="lang['hospital_tab_C212']" placeholder="Doctor Lastname" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View Doctor</label>
                            <input type="text" name="lang['hospital_tab_C22']" placeholder="View Doctor" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						 
						  <!---Home page Tab Appointment--> 
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment</label>
                            <input type="text" name="lang['hospital_tab_D']" placeholder="Appointment" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Name</label>
                            <input type="text" name="lang['hospital_tab_D1']" placeholder="Doctor Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Total Appointments</label>
                            <input type="text" name="lang['hospital_tab_D2']" placeholder="Total Appointments" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  <!---Home page Tab Past Appointments--> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Past Appointments</label>
                            <input type="text" name="lang['hospital_tab_E']" placeholder="Past Appointments" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Upto</label>
                            <input type="text" name="lang['hospital_tab_E1']" placeholder="Appointment Upto" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Download</label>
                            <input type="text" name="lang['hospital_tab_E2']" placeholder="Download" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Dr</label>
                            <input type="text" name="lang['hospital_tab_E3']" placeholder="Dr" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Name</label>
                            <input type="text" name="lang['hospital_tab_E4']" placeholder="Patient Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appt Date</label>
                            <input type="text" name="lang['hospital_tab_E5']" placeholder="Appt Date" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appt Time </label>
                            <input type="text" name="lang['hospital_tab_E6']" placeholder="Appt Time" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						    <!---Home page Tab Update Features--> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update Features</label>
                            <input type="text" name="lang['hospital_tab_F']" placeholder="Update Features" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Affiliations</label>
                            <input type="text" name="lang['hospital_tab_F1']" placeholder="Affiliations" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Amenities</label>
                            <input type="text" name="lang['hospital_tab_F2']" placeholder="Amenities" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Languages</label>
                            <input type="text" name="lang['hospital_tab_F3']" placeholder="Languages" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialty</label>
                            <input type="text" name="lang['hospital_tab_F4']" placeholder="Specialty" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['hospital_tab_F5']" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Visitation</label>
                            <input type="text" name="lang['hospital_tab_F6']" placeholder="Visitation" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  
						  <!---Home page Tab Add Gallery-->  
						  	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Add Gallery</label>
                            <input type="text" name="lang['hospital_tab_G']" placeholder=" Add Gallery" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Gallery Images</label>
                            <input type="text" name="lang['hospital_tab_G1']" placeholder="Add Gallery Images" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Choose File</label>
                            <input type="text" name="lang['hospital_tab_G2']" placeholder="Choose File" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">No File chosen</label>
                            <input type="text" name="lang['hospital_tab_G3']" placeholder="No File chosen" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
			<!---Home page Tab Settings-->   
						   
						  	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Settings</label>
                            <input type="text" name="lang['hospital_tab_H']" placeholder="Settings" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <!---Home page Tab Profile Settings--> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Profile Settings</label>
                            <input type="text" name="lang['hospital_tab_H1']" placeholder="Profile Settings" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital</label>
                            <input type="text" name="lang['hospital_tab_H2']" placeholder="Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">PO Box</label>
                            <input type="text" name="lang['hospital_tab_H3']" placeholder="PO Box" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Awards</label>
                            <input type="text" name="lang['hospital_tab_H4']" placeholder="Awards" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Memberships</label>
                            <input type="text" name="lang['hospital_tab_H5']" placeholder="Memberships" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Established in</label>
                            <input type="text" name="lang['hospital_tab_H6']" placeholder="Established in" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">YYYY/MM/DD</label>
                            <input type="text" name="lang['hospital_tab_H7']" placeholder="YYYY/MM/DD" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">website</label>
                            <input type="text" name="lang['hospital_tab_H8']" placeholder="website" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="lang['hospital_tab_H9']" placeholder="Phone" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">City</label>
                            <input type="text" name="lang['hospital_tab_H10']" placeholder="City" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="lang['hospital_tab_H11']" placeholder="Address" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About</label>
                            <input type="text" name="lang['hospital_tab_H12']" placeholder="About" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Latitude</label>
                            <input type="text" name="lang['hospital_tab_H13']" placeholder="Latitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Longitude</label>
                            <input type="text" name="lang['hospital_tab_H14']" placeholder="Longitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update</label>
                            <input type="text" name="lang['hospital_tab_H15']" placeholder="Update" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <!---Home page Tab Profile Change Security--> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Change Security</label>
                            <input type="text" name="lang['hospital_tab_I']" placeholder="Change Security" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Current Password</label>
                            <input type="text" name="lang['hospital_tab_I1']" placeholder="Current Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">New Password</label>
                            <input type="text" name="lang['hospital_tab_I2']" placeholder="New Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Confirm New Pasword</label>
                            <input type="text" name="lang['hospital_tab_I3']" placeholder="Confirm New Pasword" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Save</label>
                            <input type="text" name="lang['hospital_tab_I4']" placeholder="Save" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lang['hospital_tab_I5']" placeholder="Email" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
			 <!---Home page Tab Package--> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Packages</label>
                            <input type="text" name="lang['hospital_tab_J']" placeholder="Packages" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business name</label>
                            <input type="text" name="lang['hospital_tab_J1']" placeholder="Business name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business description</label>
                            <input type="text" name="lang['hospital_tab_J2']" placeholder="Business description" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="lang['hospital_tab_J3']" placeholder="Location" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Working hours</label>
                            <input type="text" name="lang['hospital_tab_J4']" placeholder="Working hours" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" name="lang['hospital_tab_J5']" placeholder="Phone Number" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
	<!---Home page Tab signout-->  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign out</label>
                            <input type="text" name="lang['hospital_tab_k']" placeholder="Sign out" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				

			  </div>				   
		   </div>
			<div class="box">
				 <div class="box-body">
				   <div class="col-md-12">
					 <div class="form-group has-feedback">                                       
                            <input type="button" class="btn btn-primary" value="Submit"  name="Save" id="hospitaladd">
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


	 