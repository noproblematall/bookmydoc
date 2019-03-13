<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Doctor Profile Filter 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Doctorprofile_Translation/view_doctorprofile"> Doctor Profile Translation </a></li>
         <li class="active">Edit Doctor Profile Filter</li>
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
					if(in_array('doctorprofile_lang.php',$lang_directory)):				
						$final_lang = 'doctorprofile_lang';
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
	<form role="form"  method="post" id="clinicfilter_edit">
		<input type="hidden" name="created_by" value="<?php echo $id; ?>">
		<input type="hidden" name="created_date" value="<?php echo date('Y-m-d  H:i:s'); ?>" >
	 <input  type="hidden" name="lang['home_lang']" value="home_lang" >
	 <input  type="hidden" name="lang['login_lang']" value="login_lang" >
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
                  <h3 class="box-title">Edit Clinic Filter</h3>
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
                            
					  <input class="form-control  required regcom sample"   placeholder="Page Name" value="doctorprofile_lang" name="lang['page_name']"  type="hidden">

              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Qualification & Booking Appointment</label>
                             <input class="form-control  required regcom sample" placeholder="Qualification & Booking Appointment"  name="lang['doctorprofile_slide_A1']" value="<?php if(!empty($lang['doctorprofile_slide_A1'])): echo $lang['doctorprofile_slide_A1']; endif;?>" type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
                         <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital Affiliations </label>
                             <input class="form-control  required regcom sample" placeholder="Hospital Affiliations" name="lang['doctorprofile_slide_A2']"  type="text"  required=""  value="<?php if(!empty($lang['doctorprofile_slide_A2'])): echo $lang['doctorprofile_slide_A2']; endif;?>">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Work Experience</label>
                            <input type="text" name="lang['doctorprofile_slide_A3']" placeholder="Work Experience" class="form-control required regcom" required="" value="<?php if(!empty($lang['doctorprofile_slide_A3'])): echo $lang['doctorprofile_slide_A3']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Awards and Publications</label>
                            <input type="text" name="lang['doctorprofile_slide_A4']" placeholder="Awards and Publications" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['doctorprofile_slide_A4'])): echo $lang['doctorprofile_slide_A4']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Professional Memberships</label>
                            <input type="text" name="lang['doctorprofile_slide_A7']" placeholder="Professional Memberships" class="form-control required regcom"  required="" value="<?php if(!empty($lang['doctorprofile_slide_A7'])): echo $lang['doctorprofile_slide_A7']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Reviews for </label>
                            <input type="text" name="lang['doctorprofile_slide_A8']" placeholder="Patient Reviews for" class="form-control required regcom"  required="" value="<?php if(!empty($lang['doctorprofile_slide_A8'])): echo $lang['doctorprofile_slide_A8']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>  
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">By</label>
                            <input type="text" name="lang['doctorprofile_slide_A5']" placeholder="By" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['doctorprofile_slide_A5'])): echo $lang['doctorprofile_slide_A5']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Rating</label>
                            <input type="text" name="lang['doctorprofile_slide_A6']" placeholder="Rating" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['doctorprofile_slide_A6'])): echo $lang['doctorprofile_slide_A6']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Comments</label>
                            <input type="text" name="lang['doctorprofile_slide_A12']" placeholder="Comments" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['doctorprofile_slide_A12'])): echo $lang['doctorprofile_slide_A12']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
         <!--Home page Tab 3-->
           
				 </div>
			</div>
			<div class="box">			
			   <div class="form-group has-feedback">                                       
                    <input type="button" class="btn btn-primary" value="Submit"   id="doctorprofileedit">
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
	 