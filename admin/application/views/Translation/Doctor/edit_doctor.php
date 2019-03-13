<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Doctor Translation
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Doctor_Translation/view_doctor"> Doctor Translation </a></li>
         <li class="active">Edit Doctor Translation</li>
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
					if(in_array('doctor_lang.php',$lang_directory)):				
						$final_lang = 'doctor_lang';
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
	<form role="form"  method="post" id="doctor_edit">
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
                  <h3 class="box-title">Edit Doctor Translation</h3>
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
                            
					  <input class="form-control  required regcom sample"   placeholder="Page Name" value="doctor_lang" name="lang['page_name']"  type="hidden">

					     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Welcome</label>
                             <input class="form-control  required regcom sample" placeholder="Welcome" name="lang['doctor_slide_A1']" value="<?php if(!empty($lang['doctor_slide_A1'])): echo $lang['doctor_slide_A1']; endif;?>" type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
                         <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Age </label>
                             <input class="form-control  required regcom sample" placeholder="Age" name="lang['doctor_slide_A2']" value="<?php if(!empty($lang['doctor_slide_A2'])): echo $lang['doctor_slide_A2']; endif;?>"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">More than 5 million patients use bookmydoc to find doctors every month. Let them book appointments with use instantly</label>
                            <input type="text" name="lang['doctor_slide_A3']" value="<?php if(!empty($lang['doctor_slide_A3'])): echo $lang['doctor_slide_A3']; endif;?>" placeholder="More than 5 million patients use bookmydoc to find doctors every month. Let them book appointments with use instantly" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Search now</label>
                            <input type="text" name="lang['doctor_slide_A4']" value="<?php if(!empty($lang['doctor_slide_A4'])): echo $lang['doctor_slide_A4']; endif;?>" placeholder="Search now" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
  <!-- Welcome page Tab 1 -->
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment</label>
                            <input type="text" name="lang['doctor_tab_A1']" value="<?php if(!empty($lang['doctor_tab_A1'])): echo $lang['doctor_tab_A1']; endif;?>" placeholder="Appointment" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Details </label>
                            <input type="text" name="lang['doctor_tab_A2']" value="<?php if(!empty($lang['doctor_tab_A2'])): echo $lang['doctor_tab_A2']; endif;?>" placeholder="Appointment Details" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
	             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Name</label>
                            <input type="text" name="lang['doctor_tab_A3']" value="<?php if(!empty($lang['doctor_tab_A3'])): echo $lang['doctor_tab_A3']; endif;?>" placeholder="Patient Name" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Time</label>
                            <input type="text" name="lang['doctor_tab_A4']" value="<?php if(!empty($lang['doctor_tab_A4'])): echo $lang['doctor_tab_A4']; endif;?>" placeholder="Appointment Time" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Patient Sex</label>
                            <input type="text" name="lang['doctor_tab_A5']" value="<?php if(!empty($lang['doctor_tab_A5'])): echo $lang['doctor_tab_A5']; endif;?>"  placeholder="Patient Sex" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['doctor_tab_A6']" value="<?php if(!empty($lang['doctor_tab_A6'])): echo $lang['doctor_tab_A6']; endif;?>" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Reason </label>
                            <input type="text" name="lang['doctor_tab_A7']" value="<?php if(!empty($lang['doctor_tab_A7'])): echo $lang['doctor_tab_A7']; endif;?>" placeholder="Reason " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">close </label>
                            <input type="text" name="lang['doctor_tab_A8']" value="<?php if(!empty($lang['doctor_tab_A8'])): echo $lang['doctor_tab_A8']; endif;?>" placeholder="close " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					<!---Welcome page Tab 2 B1-->  
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Calender Setting </label>
                            <input type="text" name="lang['doctor_tab_B1']" value="<?php if(!empty($lang['doctor_tab_B1'])): echo $lang['doctor_tab_B1']; endif;?>" placeholder=" Calender Setting " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Work Plan </label>
                            <input type="text" name="lang['doctor_tab_B2']" value="<?php if(!empty($lang['doctor_tab_B2'])): echo $lang['doctor_tab_B2']; endif;?>" placeholder=" Work Plan " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Checkall </label>
                            <input type="text" name="lang['doctor_tab_B21']" value="<?php if(!empty($lang['doctor_tab_B21'])): echo $lang['doctor_tab_B21']; endif;?>" placeholder="Checkall " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Day </label>
                            <input type="text" name="lang['doctor_tab_B22']" value="<?php if(!empty($lang['doctor_tab_B22'])): echo $lang['doctor_tab_B22']; endif;?>" placeholder="Day " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Start </label>
                            <input type="text" name="lang['doctor_tab_B23']" value="<?php if(!empty($lang['doctor_tab_B23'])): echo $lang['doctor_tab_B23']; endif;?>" placeholder="Starts " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">End </label>
                            <input type="text" name="lang['doctor_tab_B24']" value="<?php if(!empty($lang['doctor_tab_B24'])): echo $lang['doctor_tab_B24']; endif;?>" placeholder="End " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Actions </label>
                            <input type="text" name="lang['doctor_tab_B25']" value="<?php if(!empty($lang['doctor_tab_B25'])): echo $lang['doctor_tab_B25']; endif;?>" placeholder="Actions " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                          <!---Welcome page Tab 2 b2-->  
                 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Breaks </label>
                            <input type="text" name="lang['doctor_tab_B3']" value="<?php if(!empty($lang['doctor_tab_B3'])): echo $lang['doctor_tab_B3']; endif;?>" placeholder="Breaks " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                           <!---Welcome page Tab 2 B3-->  
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Vacations </label>
                            <input type="text" name="lang['doctor_tab_B4']" value="<?php if(!empty($lang['doctor_tab_B4'])): echo $lang['doctor_tab_B4']; endif;?>" placeholder=" Vacations " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Checkall </label>
                            <input type="text" name="lang['doctor_tab_B41']" value="<?php if(!empty($lang['doctor_tab_B41'])): echo $lang['doctor_tab_B41']; endif;?>" placeholder="Checkall " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">  Start Date </label>
                            <input type="text" name="lang['doctor_tab_B42']" value="<?php if(!empty($lang['doctor_tab_B42'])): echo $lang['doctor_tab_B42']; endif;?>" placeholder="  Start Date " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">  End Date </label>
                            <input type="text" name="lang['doctor_tab_B43']" value="<?php if(!empty($lang['doctor_tab_B43'])): echo $lang['doctor_tab_B43']; endif;?>" placeholder="  End Date " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">  Actions </label>
                            <input type="text" name="lang['doctor_tab_B45']" value="<?php if(!empty($lang['doctor_tab_B45'])): echo $lang['doctor_tab_B45']; endif;?>" placeholder="  Actions" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
    <!---Welcome page Tab 2 C1-->  


      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">   Settings </label>
                            <input type="text" name="lang['doctor_tab_C1']" value="<?php if(!empty($lang['doctor_tab_C1'])): echo $lang['doctor_tab_C1']; endif;?>" placeholder="   Settings" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
              <!---Welcome page Tab  C2-->  
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">  My Details</label>
                            <input type="text" name="lang['doctor_tab_C2']" value="<?php if(!empty($lang['doctor_tab_C2'])): echo $lang['doctor_tab_C2']; endif;?>"  placeholder="  Start Date " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <!---Welcome page Tab  C22-->  
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="lang['doctor_tab_C21']" value="<?php if(!empty($lang['doctor_tab_C21'])): echo $lang['doctor_tab_C21']; endif;?>" placeholder="Update Profile" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                        <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="lang['doctor_tab_C22']" value="<?php if(!empty($lang['doctor_tab_C22'])): echo $lang['doctor_tab_C22']; endif;?>" placeholder="Update Profile" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                        <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="text" name="lang['doctor_tab_C23']" value="<?php if(!empty($lang['doctor_tab_C23'])): echo $lang['doctor_tab_C23']; endif;?>" placeholder="E-mail" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gender</label>
                            <input type="text" name="lang['doctor_tab_C24']" value="<?php if(!empty($lang['doctor_tab_C24'])): echo $lang['doctor_tab_C24']; endif;?>" placeholder="Gender" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                        <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="text" name="lang['doctor_tab_C25']" value="<?php if(!empty($lang['doctor_tab_C25'])): echo $lang['doctor_tab_C25']; endif;?>" placeholder="Age" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lang['doctor_tab_C26']" value="<?php if(!empty($lang['doctor_tab_C26'])): echo $lang['doctor_tab_C26']; endif;?>" placeholder="Male" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
                            <input type="text" name="lang['doctor_tab_C27']" value="<?php if(!empty($lang['doctor_tab_C27'])): echo $lang['doctor_tab_C27']; endif;?>" placeholder="Female" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
   <!---Welcome page Tab  C3-->  
                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update Profile</label>
                            <input type="text" name="lang['doctor_tab_C3']" value="<?php if(!empty($lang['doctor_tab_C3'])): echo $lang['doctor_tab_C3']; endif;?>"  placeholder="Update Profile" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 


                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Degree</label>
                            <input type="text" name="lang['doctor_tab_C31']" value="<?php if(!empty($lang['doctor_tab_C31'])): echo $lang['doctor_tab_C31']; endif;?>" placeholder="Degree" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialty</label>
                            <input type="text" name="lang['doctor_tab_C32']" value="<?php if(!empty($lang['doctor_tab_C32'])): echo $lang['doctor_tab_C32']; endif;?>" placeholder="Specialty" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Reasons</label>
                            <input type="text" name="lang['doctor_tab_C33']" value="<?php if(!empty($lang['doctor_tab_C33'])): echo $lang['doctor_tab_C33']; endif;?>" placeholder="Reasons" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Awards</label>
                            <input type="text" name="lang['doctor_tab_C34']" value="<?php if(!empty($lang['doctor_tab_C34'])): echo $lang['doctor_tab_C34']; endif;?>" placeholder="Awards" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     

                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Languages Spoken</label>
                            <input type="text" name="lang['doctor_tab_C35']" value="<?php if(!empty($lang['doctor_tab_C35'])): echo $lang['doctor_tab_C35']; endif;?>" placeholder="Languages Spoken" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['doctor_tab_C36']" value="<?php if(!empty($lang['doctor_tab_C36'])): echo $lang['doctor_tab_C36']; endif;?>" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Languages Spoken</label>
                            <input type="text" name="lang['doctor_tab_C37']" value="<?php if(!empty($lang['doctor_tab_C37'])): echo $lang['doctor_tab_C37']; endif;?>" placeholder="Languages Spoken" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                          
                    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Affiliation</label>
                            <input type="text" name="lang['doctor_tab_C38']" value="<?php if(!empty($lang['doctor_tab_C38'])): echo $lang['doctor_tab_C38']; endif;?>" placeholder="Affiliation" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Office Address</label>
                            <input type="text" name="lang['doctor_tab_C39']" value="<?php if(!empty($lang['doctor_tab_C39'])): echo $lang['doctor_tab_C39']; endif;?>" placeholder="Office Address" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                    
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Office City</label>
                            <input type="text" name="lang['doctor_tab_C310']" value="<?php if(!empty($lang['doctor_tab_C310'])): echo $lang['doctor_tab_C310']; endif;?>" placeholder="Office City" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     
                    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Latitude</label>
                            <input type="text" name="lang['doctor_tab_C311']" value="<?php if(!empty($lang['doctor_tab_C311'])): echo $lang['doctor_tab_C311']; endif;?>" placeholder="Latitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Pick from map</label>
                            <input type="text" name="lang['doctor_tab_C312']" value="<?php if(!empty($lang['doctor_tab_C312'])): echo $lang['doctor_tab_C312']; endif;?>" placeholder="Pick from map" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                         
                    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Longitude</label>
                            <input type="text" name="lang['doctor_tab_C313']" value="<?php if(!empty($lang['doctor_tab_C313'])): echo $lang['doctor_tab_C313']; endif;?>" placeholder="Longitude" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                             
                    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Experience</label>
                            <input type="text" name="lang['doctor_tab_C314']" value="<?php if(!empty($lang['doctor_tab_C314'])): echo $lang['doctor_tab_C314']; endif;?>" placeholder="Experience" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                         
                  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About Yourself (This will be displayed to patient)</label>
                            <input type="text" name="lang['doctor_tab_C315']" value="<?php if(!empty($lang['doctor_tab_C315'])): echo $lang['doctor_tab_C315']; endif;?>" placeholder="About Yourself (This will be displayed to patient)" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

	               <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select City</label>
                            <input type="text" name="lang['doctor_tab_C316']" value="<?php if(!empty($lang['doctor_tab_C316'])): echo $lang['doctor_tab_C316']; endif;?>" placeholder="Select City" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Professional Memberships</label>
                            <input type="text" name="lang['doctor_tab_C317']" value="<?php if(!empty($lang['doctor_tab_C317'])): echo $lang['doctor_tab_C317']; endif;?>" placeholder="Professional Memberships" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
          <!---Welcome page Tab  C4-->  
           <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Update Password</label>
                            <input type="text" name="lang['doctor_tab_C4']" value="<?php if(!empty($lang['doctor_tab_C4'])): echo $lang['doctor_tab_C4']; endif;?>" placeholder=" Update Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
           <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Current Pasword</label>
                            <input type="text" name="lang['doctor_tab_C41']" value="<?php if(!empty($lang['doctor_tab_C41'])): echo $lang['doctor_tab_C41']; endif;?>" placeholder=" Current Pasword" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

           <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">New Pssword</label>
                            <input type="text" name="lang['doctor_tab_C42']" value="<?php if(!empty($lang['doctor_tab_C42'])): echo $lang['doctor_tab_C42']; endif;?>" placeholder="New Pssword" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

           <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Re-type New Password</label>
                            <input type="text" name="lang['doctor_tab_C43']" value="<?php if(!empty($lang['doctor_tab_C43'])): echo $lang['doctor_tab_C43']; endif;?>" placeholder="Re-type New Password" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
          <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">The Password Advice</label>
                            <input type="text" name="lang['doctor_tab_C44']" value="<?php if(!empty($lang['doctor_tab_C44'])): echo $lang['doctor_tab_C44']; endif;?>" placeholder="The Password Advice" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

          <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Has 12 Characters, Minimum</label>
                            <input type="text" name="lang['doctor_tab_C45']" value="<?php if(!empty($lang['doctor_tab_C45'])): echo $lang['doctor_tab_C45']; endif;?>" placeholder="Has 12 Characters, Minimum" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

          <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Includes Numbers and Symbols</label>
                            <input type="text" name="lang['doctor_tab_C46']" value="<?php if(!empty($lang['doctor_tab_C46'])): echo $lang['doctor_tab_C46']; endif;?>" placeholder="Includes Numbers and Symbols" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 




             <!---Welcome page Tab  C5--> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Upload Image</label>
                            <input type="text" name="lang['doctor_tab_C5']" value="<?php if(!empty($lang['doctor_tab_C5'])): echo $lang['doctor_tab_C5']; endif;?>" placeholder="Upload Image" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Choose File</label>
                            <input type="text" name="lang['doctor_tab_C51']" value="<?php if(!empty($lang['doctor_tab_C51'])): echo $lang['doctor_tab_C51']; endif;?>" placeholder="Choose File" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">No file chosen</label>
                            <input type="text" name="lang['doctor_tab_C52']" value="<?php if(!empty($lang['doctor_tab_C52'])): echo $lang['doctor_tab_C52']; endif;?>" placeholder="No file chosen" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 



                <!---Welcome page Tab  C6--> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Packages</label>
                            <input type="text" name="lang['doctor_tab_C6']" value="<?php if(!empty($lang['doctor_tab_C6'])): echo $lang['doctor_tab_C6']; endif;?>" placeholder="Packages" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business name</label>
                            <input type="text" name="lang['doctor_tab_C61']" value="<?php if(!empty($lang['doctor_tab_C61'])): echo $lang['doctor_tab_C61']; endif;?>" placeholder="Business name" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business description</label>
                            <input type="text" name="lang['doctor_tab_C62']" value="<?php if(!empty($lang['doctor_tab_C62'])): echo $lang['doctor_tab_C62']; endif;?>" placeholder="Business description" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                     <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="lang['doctor_tab_C63']" value="<?php if(!empty($lang['doctor_tab_C63'])): echo $lang['doctor_tab_C63']; endif;?>"  placeholder="Location" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Working hours</label>
                            <input type="text" name="lang['doctor_tab_C64']" value="<?php if(!empty($lang['doctor_tab_C64'])): echo $lang['doctor_tab_C64']; endif;?>"  placeholder="Working hours" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" name="lang['doctor_tab_C65']" value="<?php if(!empty($lang['doctor_tab_C65'])): echo $lang['doctor_tab_C65']; endif;?>" placeholder="Phone Number" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
                      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select</label>
                            <input type="text" name="lang['doctor_tab_C66']" value="<?php if(!empty($lang['doctor_tab_C66'])): echo $lang['doctor_tab_C66']; endif;?>" placeholder="Select" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 

 <!---Welcome page Tab  C6 end--> 

                       <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update</label>
                            <input type="text" name="lang['doctor_tab_D']" value="<?php if(!empty($lang['doctor_tab_D'])): echo $lang['doctor_tab_D']; endif;?>" placeholder="Update" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
			<div class="box">			
			   <div class="form-group has-feedback">                                       
                    <input type="button" class="btn btn-primary" value="Submit"   id="doctoredit">
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
	 