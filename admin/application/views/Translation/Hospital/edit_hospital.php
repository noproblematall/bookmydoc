<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Hospital Translation
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Clinicfilter_Translation/view_Clinicfilter"> Hospital Translation </a></li>
         <li class="active">Edit Hospital Translation</li>
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
					if(in_array('hospital_lang.php',$lang_directory)):				
						$final_lang = 'hospital_lang';
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
	<form role="form"  method="post" id="hospital_edit">
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
                  <h3 class="box-title">Edit Hospital Translation</h3>
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
                            
					  <input class="form-control  required regcom sample"   placeholder="Page Name" value="hospital_lang" name="lang['page_name']"  type="hidden">

              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Dashboard Menu</label>
                             <input class="form-control  required regcom sample" placeholder="Dashboard Menu" name="lang['hospital_tab_A']"  value="<?php if(!empty($lang['hospital_tab_A'])): echo $lang['hospital_tab_A']; endif;?>" type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
                         <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">My Listings </label>
                             <input class="form-control  required regcom sample" placeholder="My Listings" name="lang['hospital_tab_B']" value="<?php if(!empty($lang['hospital_tab_B'])): echo $lang['hospital_tab_B']; endif;?>"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Listings under</label>
                            <input type="text" name="lang['hospital_tab_B1']" value="<?php if(!empty($lang['hospital_tab_B1'])): echo $lang['hospital_tab_B1']; endif;?>" placeholder="Listings under" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
			<div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Edit</label>
                            <input type="text" name="lang['hospital_tab_B2']" value="<?php if(!empty($lang['hospital_tab_B2'])): echo $lang['hospital_tab_B2']; endif;?>" placeholder="Edit" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Browse Photo</label>
                            <input type="text" name="lang['hospital_tab_B21']" value="<?php if(!empty($lang['hospital_tab_B21'])): echo $lang['hospital_tab_B21']; endif;?>" placeholder="Browse Photo" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Hospital Name</label>
                            <input type="text" name="lang['hospital_tab_B22']" value="<?php if(!empty($lang['hospital_tab_B22'])): echo $lang['hospital_tab_B22']; endif;?>" placeholder="Hospital Name" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Established in</label>
                            <input type="text" name="lang['hospital_tab_B23']" value="<?php if(!empty($lang['hospital_tab_B23'])): echo $lang['hospital_tab_B23']; endif;?>" placeholder="Established in" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Zip Code</label>
                            <input type="text" name="lang['hospital_tab_B24']" value="<?php if(!empty($lang['hospital_tab_B24'])): echo $lang['hospital_tab_B24']; endif;?>" placeholder="Zip Code" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="text" name="lang['hospital_tab_B25']" value="<?php if(!empty($lang['hospital_tab_B25'])): echo $lang['hospital_tab_B25']; endif;?>" placeholder="Website" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="lang['hospital_tab_B26']" value="<?php if(!empty($lang['hospital_tab_B26'])): echo $lang['hospital_tab_B26']; endif;?>" placeholder="Phone" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Country</label>
                            <input type="text" name="lang['hospital_tab_B27']" value="<?php if(!empty($lang['hospital_tab_B27'])): echo $lang['hospital_tab_B27']; endif;?>"placeholder="Country" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">state</label>
                            <input type="text" name="lang['hospital_tab_B28']" value="<?php if(!empty($lang['hospital_tab_B28'])): echo $lang['hospital_tab_B28']; endif;?>" placeholder="state" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">city</label>
                            <input type="text" name="lang['hospital_tab_B29']" value="<?php if(!empty($lang['hospital_tab_B29'])): echo $lang['hospital_tab_B29']; endif;?>" placeholder="city" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="lang['hospital_tab_B210']" value="<?php if(!empty($lang['hospital_tab_B210'])): echo $lang['hospital_tab_B210']; endif;?>" placeholder="Address" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update</label>
                            <input type="text" name="lang['hospital_tab_B211']" value="<?php if(!empty($lang['hospital_tab_B211'])): echo $lang['hospital_tab_B211']; endif;?>" placeholder="Update" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
			<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Published</label>
                            <input type="text" name="lang['hospital_tab_B3']" value="<?php if(!empty($lang['hospital_tab_B3'])): echo $lang['hospital_tab_B3']; endif;?>" placeholder="Published" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						
	             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hits - 0</label>
                            <input type="text" name="lang['hospital_tab_B4']" value="<?php if(!empty($lang['hospital_tab_B4'])): echo $lang['hospital_tab_B4']; endif;?>" placeholder="Hits - 0" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Remove</label>
                            <input type="text" name="lang['hospital_tab_B5']" value="<?php if(!empty($lang['hospital_tab_B5'])): echo $lang['hospital_tab_B5']; endif;?>" placeholder="Remove" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
			 <!---Welcome page Tab  Add Listing-->
			      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Add Listing</label>
                            <input type="text" name="lang['hospital_tab_C']" value="<?php if(!empty($lang['hospital_tab_C'])): echo $lang['hospital_tab_C']; endif;?>" placeholder="Add Listing" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				 <!--Home page Tab 3-->
				    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Hospital</label>
                            <input type="text" name="lang['hospital_tab_C1']" value="<?php if(!empty($lang['hospital_tab_C1'])): echo $lang['hospital_tab_C1']; endif;?>" placeholder="Add Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add New Hospital</label>
                            <input type="text" name="lang['hospital_tab_C11']" value="<?php if(!empty($lang['hospital_tab_C11'])): echo $lang['hospital_tab_C11']; endif;?>" placeholder="Add New Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital Name </label>
                            <input type="text" name="lang['hospital_tab_C111']" value="<?php if(!empty($lang['hospital_tab_C111'])): echo $lang['hospital_tab_C111']; endif;?>" placeholder="Hospital Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email </label>
                            <input type="text" name="lang['hospital_tab_C112']" value="<?php if(!empty($lang['hospital_tab_C112'])): echo $lang['hospital_tab_C112']; endif;?>" placeholder="Email" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Password </label>
                            <input type="text" name="lang['hospital_tab_C113']" value="<?php if(!empty($lang['hospital_tab_C113'])): echo $lang['hospital_tab_C113']; endif;?>" placeholder="Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Established in </label>
                            <input type="text" name="lang['hospital_tab_C114']" value="<?php if(!empty($lang['hospital_tab_C114'])): echo $lang['hospital_tab_C114']; endif;?>" placeholder="Established in" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">YYYY/MM/DD</label>
                            <input type="text" name="lang['hospital_tab_C115']" value="<?php if(!empty($lang['hospital_tab_C115'])): echo $lang['hospital_tab_C115']; endif;?>" placeholder="YYYY/MM/DD" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="text" name="lang['hospital_tab_C116']" value="<?php if(!empty($lang['hospital_tab_C116'])): echo $lang['hospital_tab_C116']; endif;?>" placeholder="Website" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">www.example.com</label>
                            <input type="text" name="lang['hospital_tab_C117']" value="<?php if(!empty($lang['hospital_tab_C117'])): echo $lang['hospital_tab_C117']; endif;?>" placeholder="www.example.com" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">select city</label>
                            <input type="text" name="lang['hospital_tab_C118']" value="<?php if(!empty($lang['hospital_tab_C118'])): echo $lang['hospital_tab_C118']; endif;?>" placeholder="select city" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address here</label>
                            <input type="text" name="lang['hospital_tab_C119']" value="<?php if(!empty($lang['hospital_tab_C119'])): echo $lang['hospital_tab_C119']; endif;?>" placeholder="Address here" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Latitude</label>
                            <input type="text" name="lang['hospital_tab_C1110']" value="<?php if(!empty($lang['hospital_tab_C1110'])): echo $lang['hospital_tab_C1110']; endif;?>" placeholder="Latitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Longitude</label>
                            <input type="text" name="lang['hospital_tab_C1111']" value="<?php if(!empty($lang['hospital_tab_C1111'])): echo $lang['hospital_tab_C1111']; endif;?>" placeholder="Longitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add</label>
                            <input type="text" name="lang['hospital_tab_C1112']" value="<?php if(!empty($lang['hospital_tab_C1112'])): echo $lang['hospital_tab_C1112']; endif;?>" placeholder="Add" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Pick from map</label>
                            <input type="text" name="lang['hospital_tab_C1113']" value="<?php if(!empty($lang['hospital_tab_C1113'])): echo $lang['hospital_tab_C1113']; endif;?>" placeholder="Pick from map" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="lang['hospital_tab_C1114']" value="<?php if(!empty($lang['hospital_tab_C1114'])): echo $lang['hospital_tab_C1114']; endif;?>" placeholder="Phone" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">City</label>
                            <input type="text" name="lang['hospital_tab_C1115']" value="<?php if(!empty($lang['hospital_tab_C1115'])): echo $lang['hospital_tab_C1115']; endif;?>" placeholder="City" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About</label>
                            <input type="text" name="lang['hospital_tab_C1116']" value="<?php if(!empty($lang['hospital_tab_C1116'])): echo $lang['hospital_tab_C1116']; endif;?>"  placeholder="About" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="lang['hospital_tab_C1117']" value="<?php if(!empty($lang['hospital_tab_C1117'])): echo $lang['hospital_tab_C1117']; endif;?>" placeholder="Address" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View Hospitals</label>
                            <input type="text" name="lang['hospital_tab_C12']" value="<?php if(!empty($lang['hospital_tab_C12'])): echo $lang['hospital_tab_C12']; endif;?>" placeholder="View Hospitals" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Doctor</label>
                            <input type="text" name="lang['hospital_tab_C2']" value="<?php if(!empty($lang['hospital_tab_C2'])): echo $lang['hospital_tab_C2']; endif;?>" placeholder="Add Doctor" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add New Doctor</label>
                            <input type="text" name="lang['hospital_tab_C21']" value="<?php if(!empty($lang['hospital_tab_C21'])): echo $lang['hospital_tab_C21']; endif;?>" placeholder="Add New Doctor" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Firstname</label>
                            <input type="text" name="lang['hospital_tab_C211']" value="<?php if(!empty($lang['hospital_tab_C211'])): echo $lang['hospital_tab_C211']; endif;?>" placeholder="Doctor Firstname" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Lastname</label>
                            <input type="text" name="lang['hospital_tab_C212']" value="<?php if(!empty($lang['hospital_tab_C212'])): echo $lang['hospital_tab_C212']; endif;?>" placeholder="Doctor Lastname" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View Doctor</label>
                            <input type="text" name="lang['hospital_tab_C22']" value="<?php if(!empty($lang['hospital_tab_C22'])): echo $lang['hospital_tab_C22']; endif;?>" placeholder="View Doctor" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  
						  
						  
						  
						  
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment</label>
                            <input type="text" name="lang['hospital_tab_D']" value="<?php if(!empty($lang['hospital_tab_D'])): echo $lang['hospital_tab_D']; endif;?>" placeholder="Appointment" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Name</label>
                            <input type="text" name="lang['hospital_tab_D1']" value="<?php if(!empty($lang['hospital_tab_D1'])): echo $lang['hospital_tab_D1']; endif;?>" placeholder="Doctor Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Total Appointments</label>
                            <input type="text" name="lang['hospital_tab_D2']" value="<?php if(!empty($lang['hospital_tab_D2'])): echo $lang['hospital_tab_D2']; endif;?>" placeholder="Total Appointments" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Past Appointments</label>
                            <input type="text" name="lang['hospital_tab_E']" value="<?php if(!empty($lang['hospital_tab_E'])): echo $lang['hospital_tab_E']; endif;?>" placeholder="Past Appointments" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Upto</label>
                            <input type="text" name="lang['hospital_tab_E1']" value="<?php if(!empty($lang['hospital_tab_E1'])): echo $lang['hospital_tab_E1']; endif;?>" placeholder="Appointment Upto" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Download</label>
                            <input type="text" name="lang['hospital_tab_E2']" value="<?php if(!empty($lang['hospital_tab_E2'])): echo $lang['hospital_tab_E2']; endif;?>" placeholder="Download" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Dr</label>
                            <input type="text" name="lang['hospital_tab_E3']" value="<?php if(!empty($lang['hospital_tab_E3'])): echo $lang['hospital_tab_E3']; endif;?>" placeholder="Dr" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Name</label>
                            <input type="text" name="lang['hospital_tab_E4']" value="<?php if(!empty($lang['hospital_tab_E4'])): echo $lang['hospital_tab_E4']; endif;?>" placeholder="Patient Name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appt Date</label>
                            <input type="text" name="lang['hospital_tab_E5']" value="<?php if(!empty($lang['hospital_tab_E5'])): echo $lang['hospital_tab_E5']; endif;?>" placeholder="Appt Date" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appt Time </label>
                            <input type="text" name="lang['hospital_tab_E6']" value="<?php if(!empty($lang['hospital_tab_E6'])): echo $lang['hospital_tab_E6']; endif;?>" placeholder="Appt Time" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update Features</label>
                            <input type="text" name="lang['hospital_tab_F']" value="<?php if(!empty($lang['hospital_tab_F'])): echo $lang['hospital_tab_F']; endif;?>" placeholder="Update Features" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Affiliations</label>
                            <input type="text" name="lang['hospital_tab_F1']" value="<?php if(!empty($lang['hospital_tab_F1'])): echo $lang['hospital_tab_F1']; endif;?>" placeholder="Affiliations" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Amenities</label>
                            <input type="text" name="lang['hospital_tab_F2']" value="<?php if(!empty($lang['hospital_tab_F2'])): echo $lang['hospital_tab_F2']; endif;?>" placeholder="Amenities" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Languages</label>
                            <input type="text" name="lang['hospital_tab_F3']" value="<?php if(!empty($lang['hospital_tab_F3'])): echo $lang['hospital_tab_F3']; endif;?>" placeholder="Languages" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialty</label>
                            <input type="text" name="lang['hospital_tab_F4']" value="<?php if(!empty($lang['hospital_tab_F4'])): echo $lang['hospital_tab_F4']; endif;?>" placeholder="Specialty" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['hospital_tab_F5']" value="<?php if(!empty($lang['hospital_tab_F5'])): echo $lang['hospital_tab_F5']; endif;?>" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Visitation</label>
                            <input type="text" name="lang['hospital_tab_F6']" value="<?php if(!empty($lang['hospital_tab_F6'])): echo $lang['hospital_tab_F6']; endif;?>" placeholder="Visitation" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  
						  
						  	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Add Gallery</label>
                            <input type="text" name="lang['hospital_tab_G']" value="<?php if(!empty($lang['hospital_tab_G'])): echo $lang['hospital_tab_G']; endif;?>" placeholder=" Add Gallery" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Gallery Images</label>
                            <input type="text" name="lang['hospital_tab_G1']" value="<?php if(!empty($lang['hospital_tab_G1'])): echo $lang['hospital_tab_G1']; endif;?>" placeholder="Add Gallery Images" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Choose File</label>
                            <input type="text" name="lang['hospital_tab_G2']" value="<?php if(!empty($lang['hospital_tab_G2'])): echo $lang['hospital_tab_G2']; endif;?>" placeholder="Choose File" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">No File chosen</label>
                            <input type="text" name="lang['hospital_tab_G3']" value="<?php if(!empty($lang['hospital_tab_G3'])): echo $lang['hospital_tab_G3']; endif;?>" placeholder="No File chosen" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  
						  
						  	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Settings</label>
                            <input type="text" name="lang['hospital_tab_H']" value="<?php if(!empty($lang['hospital_tab_H'])): echo $lang['hospital_tab_H']; endif;?>" placeholder="Settings" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Profile Settings</label>
                            <input type="text" name="lang['hospital_tab_H1']" value="<?php if(!empty($lang['hospital_tab_H1'])): echo $lang['hospital_tab_H1']; endif;?>" placeholder="Profile Settings" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital</label>
                            <input type="text" name="lang['hospital_tab_H2']" value="<?php if(!empty($lang['hospital_tab_H2'])): echo $lang['hospital_tab_H2']; endif;?>" placeholder="Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">PO Box</label>
                            <input type="text" name="lang['hospital_tab_H3']" value="<?php if(!empty($lang['hospital_tab_H3'])): echo $lang['hospital_tab_H3']; endif;?>" placeholder="PO Box" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Awards</label>
                            <input type="text" name="lang['hospital_tab_H4']" value="<?php if(!empty($lang['hospital_tab_H4'])): echo $lang['hospital_tab_H4']; endif;?>" placeholder="Awards" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Memberships</label>
                            <input type="text" name="lang['hospital_tab_H5']" value="<?php if(!empty($lang['hospital_tab_H5'])): echo $lang['hospital_tab_H5']; endif;?>" placeholder="Memberships" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Established in</label>
                            <input type="text" name="lang['hospital_tab_H6']" value="<?php if(!empty($lang['hospital_tab_H6'])): echo $lang['hospital_tab_H6']; endif;?>" placeholder="Established in" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">YYYY/MM/DD</label>
                            <input type="text" name="lang['hospital_tab_H7']" value="<?php if(!empty($lang['hospital_tab_H7'])): echo $lang['hospital_tab_H7']; endif;?>" placeholder="YYYY/MM/DD" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">website</label>
                            <input type="text" name="lang['hospital_tab_H8']" value="<?php if(!empty($lang['hospital_tab_H8'])): echo $lang['hospital_tab_H8']; endif;?>" placeholder="website" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="lang['hospital_tab_H9']" value="<?php if(!empty($lang['hospital_tab_H9'])): echo $lang['hospital_tab_H9']; endif;?>" placeholder="Phone" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">City</label>
                            <input type="text" name="lang['hospital_tab_H10']" value="<?php if(!empty($lang['hospital_tab_H10'])): echo $lang['hospital_tab_H10']; endif;?>" placeholder="City" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="lang['hospital_tab_H11']" value="<?php if(!empty($lang['hospital_tab_H11'])): echo $lang['hospital_tab_H11']; endif;?>" placeholder="Address" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About</label>
                            <input type="text" name="lang['hospital_tab_H12']" value="<?php if(!empty($lang['hospital_tab_H12'])): echo $lang['hospital_tab_H12']; endif;?>" placeholder="About" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Latitude</label>
                            <input type="text" name="lang['hospital_tab_H13']" value="<?php if(!empty($lang['hospital_tab_H13'])): echo $lang['hospital_tab_H13']; endif;?>" placeholder="Latitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Longitude</label>
                            <input type="text" name="lang['hospital_tab_H14']" value="<?php if(!empty($lang['hospital_tab_H14'])): echo $lang['hospital_tab_H14']; endif;?>" placeholder="Longitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update</label>
                            <input type="text" name="lang['hospital_tab_H15']" value="<?php if(!empty($lang['hospital_tab_H15'])): echo $lang['hospital_tab_H15']; endif;?>" placeholder="Update" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  
						    <!---Home page Tab Profile Change Security--> 
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Change Security</label>
                            <input type="text" name="lang['hospital_tab_I']" value="<?php if(!empty($lang['hospital_tab_I'])): echo $lang['hospital_tab_I']; endif;?>" placeholder="Change Security" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Current Password</label>
                            <input type="text" name="lang['hospital_tab_I1']" value="<?php if(!empty($lang['hospital_tab_I1'])): echo $lang['hospital_tab_I1']; endif;?>" placeholder="Current Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">New Password</label>
                            <input type="text" name="lang['hospital_tab_I2']" value="<?php if(!empty($lang['hospital_tab_I2'])): echo $lang['hospital_tab_I2']; endif;?>" placeholder="New Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Confirm New Pasword</label>
                            <input type="text" name="lang['hospital_tab_I3']" value="<?php if(!empty($lang['hospital_tab_I3'])): echo $lang['hospital_tab_I3']; endif;?>" placeholder="Confirm New Pasword" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Save</label>
                            <input type="text" name="lang['hospital_tab_I4']" value="<?php if(!empty($lang['hospital_tab_I4'])): echo $lang['hospital_tab_I4']; endif;?>" placeholder="Save" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lang['hospital_tab_I5']" value="<?php if(!empty($lang['hospital_tab_I5'])): echo $lang['hospital_tab_I5']; endif;?>" placeholder="Email" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <!---Home page Tab Packages--> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Packages</label>
                            <input type="text" name="lang['hospital_tab_J']" value="<?php if(!empty($lang['hospital_tab_J'])): echo $lang['hospital_tab_J']; endif;?>" placeholder="Packages" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign out</label>
                            <input type="text" name="lang['hospital_tab_k']" value="<?php if(!empty($lang['hospital_tab_k'])): echo $lang['hospital_tab_k']; endif;?>" placeholder="Sign out" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business name</label>
                            <input type="text" name="lang['hospital_tab_J1']" value="<?php if(!empty($lang['hospital_tab_J1'])): echo $lang['hospital_tab_J1']; endif;?>" placeholder="Business name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business description</label>
                            <input type="text" name="lang['hospital_tab_J2']" value="<?php if(!empty($lang['hospital_tab_J2'])): echo $lang['hospital_tab_J2']; endif;?>" placeholder="Business description" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="lang['hospital_tab_J3']" value="<?php if(!empty($lang['hospital_tab_J3'])): echo $lang['hospital_tab_J3']; endif;?>" placeholder="Location" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Working hours</label>
                            <input type="text" name="lang['hospital_tab_J4']" value="<?php if(!empty($lang['hospital_tab_J4'])): echo $lang['hospital_tab_J4']; endif;?>" placeholder="Working hours" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" name="lang['hospital_tab_J5']" value="<?php if(!empty($lang['hospital_tab_J5'])): echo $lang['hospital_tab_J5']; endif;?>" placeholder="Phone Number" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				 </div>
			</div>
			<div class="box">			
			   <div class="form-group has-feedback">                                       
                    <input type="button" class="btn btn-primary" value="Submit"   id="hospitaledit">
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
	 