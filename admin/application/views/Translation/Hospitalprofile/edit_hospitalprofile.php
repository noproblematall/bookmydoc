<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Hospital Profile  
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Hospitalprofile_Translation/view_Hospitalprofile"> Hospital Profile Translation </a></li>
         <li class="active">Edit Hospital Profile </li>
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
					if(in_array('hospitalprofile_lang.php',$lang_directory)):				
						$final_lang = 'hospitalprofile_lang';
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
	<form role="form"  method="post" id="hospitalprofile_edit">
		<input type="hidden" name="created_by" value="<?php echo $id; ?>">
		<input type="hidden" name="created_date" value="<?php echo date('Y-m-d  H:i:s'); ?>" >
	 <input  type="hidden" name="lang['home_lang']" value="home_lang" >
	 <input  type="hidden" name="lang['login_lang']" value="login_lang" >
	 <input  type="hidden" name="lang['search_lang']" value="search_lang" >
	 <input  type="hidden" name="lang['doctorfilter_lang']" value="doctorfilter_lang" >
	 <input  type="hidden" name="lang['clinicfilter_lang']" value="clinicfilter_lang" >
    <input  type="hidden" name="lang['medicalfilter_lang']" value="medicalfilter_lang" >
	 <input  type="hidden" name="lang['hospitalfilter_lang']" value="hospitalfilter_lang" >
	 <input  type="hidden" name="lang['doctorprofile_lang']" value="doctorprofile_lang" >
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
                  <h3 class="box-title">Edit Hospital Profile</h3>
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
                            
					  <input class="form-control  required regcom sample"   placeholder="Page Name" value="hospitalprofile_lang" name="lang['page_name']"  type="hidden">

              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Rate Us</label>
                             <input class="form-control  required regcom sample" placeholder="Rate Us"  name="lang['hospitalprofile_slide_A1']" value="<?php if(!empty($lang['hospitalprofile_slide_A1'])): echo $lang['hospitalprofile_slide_A1']; endif;?>" type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
                         <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gallery </label>
                             <input class="form-control  required regcom sample" placeholder="Gallery" name="lang['hospitalprofile_slide_A2']"  type="text"  required=""  value="<?php if(!empty($lang['hospitalprofile_slide_A2'])): echo $lang['hospitalprofile_slide_A2']; endif;?>">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About</label>
                            <input type="text" name="lang['hospitalprofile_slide_A3']" placeholder="About" class="form-control required regcom" required="" value="<?php if(!empty($lang['hospitalprofile_slide_A3'])): echo $lang['hospitalprofile_slide_A3']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialities</label>
                            <input type="text" name="lang['hospitalprofile_slide_A4']" placeholder="Specialities" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['hospitalprofile_slide_A4'])): echo $lang['hospitalprofile_slide_A4']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Amenities</label>
                            <input type="text" name="lang['hospitalprofile_slide_A7']" placeholder="Amenities" class="form-control required regcom"  required="" value="<?php if(!empty($lang['hospitalprofile_slide_A7'])): echo $lang['hospitalprofile_slide_A7']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance Partner </label>
                            <input type="text" name="lang['hospitalprofile_slide_A8']" placeholder="Insurance Partner" class="form-control required regcom"  required="" value="<?php if(!empty($lang['hospitalprofile_slide_A8'])): echo $lang['hospitalprofile_slide_A8']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>  
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Affiliations</label>
                            <input type="text" name="lang['hospitalprofile_slide_A5']" placeholder="Affiliations" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['hospitalprofile_slide_A5'])): echo $lang['hospitalprofile_slide_A5']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Memberships</label>
                            <input type="text" name="lang['hospitalprofile_slide_A6']" placeholder="Memberships" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['hospitalprofile_slide_A6'])): echo $lang['hospitalprofile_slide_A6']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Awards</label>
                            <input type="text" name="lang['hospitalprofile_slide_A14']" placeholder="Awards" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['hospitalprofile_slide_A14'])): echo $lang['hospitalprofile_slide_A14']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select a Speciality Doctor</label>
                            <input type="text" name="lang['hospitalprofile_slide_A15']" value="<?php if(!empty($lang['hospitalprofile_slide_A15'])): echo $lang['hospitalprofile_slide_A15']; endif;?>" placeholder="Select a Speciality Doctor" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View Profile</label>
                            <input type="text" name="lang['hospitalprofile_slide_A9']" value="<?php if(!empty($lang['hospitalprofile_slide_A9'])): echo $lang['hospitalprofile_slide_A9']; endif;?>" placeholder="View Profile" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Book Online</label>
                            <input type="text" name="lang['hospitalprofile_slide_A10']" value="<?php if(!empty($lang['hospitalprofile_slide_A10'])): echo $lang['hospitalprofile_slide_A10']; endif;?>" placeholder="Book Online" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sorry, No records found. Please try with different keywords.</label>
                            <input type="text" name="lang['hospitalprofile_slide_A11']" value="<?php if(!empty($lang['hospitalprofile_slide_A11'])): echo $lang['hospitalprofile_slide_A11']; endif;?>" placeholder="Sorry, No records found. Please try with different keywords." class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Details</label>
                            <input type="text" name="lang['hospitalprofile_slide_A12']" value="<?php if(!empty($lang['hospitalprofile_slide_A12'])): echo $lang['hospitalprofile_slide_A12']; endif;?>" placeholder="Appointment Details" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Close</label>
                            <input type="text" name="lang['hospitalprofile_slide_A13']" value="<?php if(!empty($lang['hospitalprofile_slide_A13'])): echo $lang['hospitalprofile_slide_A13']; endif;?>" placeholder="Close" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
         <!--Home page Tab 3-->
           
				 </div>
			</div>
			<div class="box">			
			   <div class="form-group has-feedback">                                       
                    <input type="button" class="btn btn-primary" value="Submit"   id="hospitalprofileedit">
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
	 