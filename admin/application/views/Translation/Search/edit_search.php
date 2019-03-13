<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Search Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Search_Translation/view_search"> Search Translation </a></li>
         <li class="active">Edit Search Translation</li>
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
					if(in_array('search_lang.php',$lang_directory)):				
						$final_lang = 'search_lang';
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
	<form role="form"  method="post" id="search_edit">
		<input type="hidden" name="created_by" value="<?php echo $id; ?>">
		<input type="hidden" name="created_date" value="<?php echo date('Y-m-d  H:i:s'); ?>" >
	 <input  type="hidden" name="lang['home_lang']" value="home_lang" >
	 <input  type="hidden" name="lang['login_lang']" value="login_lang" >
	 <input  type="hidden" name="lang['medicalfilter_lang']" value="medicalfilter_lang" >
	 <input  type="hidden" name="lang['doctorfilter_lang']" value="doctorfilter_lang" >
	 <input  type="hidden" name="lang['clinicfilter_lang']" value="clinicfilter_lang" >
	 <input  type="hidden" name="lang['hospitalfilter_lang']" value="hospitalfilter_lang" >
	 <input  type="hidden" name="lang['hospitalprofile_lang']" value="hospitalprofile_lang" >
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
                  <h3 class="box-title">Edit General Search Details</h3>
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
                            
					  <input class="form-control  required regcom sample"   placeholder="Page Name" value="search_lang" name="lang['page_name']"  type="hidden">

					  <!-------Home page Tab 1------->
			  
                <div class="box-header with-border">
                  <h3 class="box-title">Doctor Search</h3>
				</div>
			  
			  
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor</label>
                             <input class="form-control  required regcom sample" value="<?php if(!empty($lang['search_tab_A1'])): echo $lang['search_tab_A1']; endif;?>"placeholder="Doctor" name="lang['search_tab_A1']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">search city</label>
                            <input type="text" name="lang['search_tab_A2']" value="<?php if(!empty($lang['search_tab_A2'])): echo $lang['search_tab_A2']; endif;?>" placeholder="search city" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select specialty</label>
                            <input type="text" name="lang['search_tab_A3']" value="<?php if(!empty($lang['search_tab_A3'])): echo $lang['search_tab_A3']; endif;?>" placeholder="Select specialty" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select reason</label>
                            <input type="text" name="lang['search_tab_A4']" value="<?php if(!empty($lang['search_tab_A4'])): echo $lang['search_tab_A4']; endif;?>" placeholder="Select reason" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['search_tab_A6']" value="<?php if(!empty($lang['search_tab_A6'])): echo $lang['search_tab_A6']; endif;?>" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Language </label>
                            <input type="text" name="lang['search_tab_A7']" value="<?php if(!empty($lang['search_tab_A7'])): echo $lang['search_tab_A7']; endif;?>" placeholder="Language" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gender</label>
                            <input type="text" name="lang['search_tab_A8']" value="<?php if(!empty($lang['search_tab_A8'])): echo $lang['search_tab_A8']; endif;?>" placeholder="Gender" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Doctors</label>
                            <input type="text" name="lang['search_tab_A9']" value="<?php if(!empty($lang['search_tab_A9'])): echo $lang['search_tab_A9']; endif;?>" placeholder="Find Doctors" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lang['search_tab_A10']" value="<?php if(!empty($lang['search_tab_A10'])): echo $lang['search_tab_A10']; endif;?>" placeholder="Male" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
                            <input type="text" name="lang['search_tab_A11']" value="<?php if(!empty($lang['search_tab_A11'])): echo $lang['search_tab_A11']; endif;?>" placeholder="Female" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
							</div>
				<!-------Home page Tab 2------->
				  <div class="box-header with-border">
                  <h3 class="box-title">Clinic Search</h3>
				</div>
			    
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Clinic</label>
                            <input type="text" name="lang['search_tab_B1']" value="<?php if(!empty($lang['search_tab_B1'])): echo $lang['search_tab_B1']; endif;?>" placeholder="Clinic" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Clinics</label>
                            <input type="text" name="lang['search_tab_B2']" value="<?php if(!empty($lang['search_tab_B2'])): echo $lang['search_tab_B2']; endif;?>" placeholder="Find Clinics" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">search city</label>
                            <input type="text" name="lang['search_tab_B3']" value="<?php if(!empty($lang['search_tab_B3'])): echo $lang['search_tab_B3']; endif;?>" placeholder="search city" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select specialty</label>
                            <input type="text" name="lang['search_tab_B4']" value="<?php if(!empty($lang['search_tab_B4'])): echo $lang['search_tab_B4']; endif;?>" placeholder="Select specialty" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select reason</label>
                            <input type="text" name="lang['search_tab_B5']" value="<?php if(!empty($lang['search_tab_B5'])): echo $lang['search_tab_B5']; endif;?>" placeholder="Select reason" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['search_tab_B6']" value="<?php if(!empty($lang['search_tab_B6'])): echo $lang['search_tab_B6']; endif;?>" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				 	
				 <!-------Home page Tab 3------->
				 <div class="box-header with-border">
                  <h3 class="box-title">Medical Search</h3>
				</div>
			   
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Center</label>
                            <input type="text" name="lang['search_tab_C1']" value="<?php if(!empty($lang['search_tab_C1'])): echo $lang['search_tab_C1']; endif;?>" placeholder="Medical Center" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Medical Centers</label>
                            <input type="text" name="lang['search_tab_C2']" value="<?php if(!empty($lang['search_tab_C2'])): echo $lang['search_tab_C2']; endif;?>" placeholder="Find Medical Centers" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">search city</label>
                            <input type="text" name="lang['search_tab_C3']" value="<?php if(!empty($lang['search_tab_C3'])): echo $lang['search_tab_C3']; endif;?>" placeholder="search city" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select specialty</label>
                            <input type="text" name="lang['search_tab_C4']" value="<?php if(!empty($lang['search_tab_C4'])): echo $lang['search_tab_C4']; endif;?>" placeholder="Select specialty" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select reason</label>
                            <input type="text" name="lang['search_tab_C5']" value="<?php if(!empty($lang['search_tab_C5'])): echo $lang['search_tab_C5']; endif;?>" placeholder="Select reason" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['search_tab_C6']" value="<?php if(!empty($lang['search_tab_C6'])): echo $lang['search_tab_C6']; endif;?>" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
			 <div class="box-header with-border">
                  <h3 class="box-title">Hospital Search</h3>
				</div>
			    
					<!-------Home page Tab 4------->  
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital</label>
                            <input type="text" name="lang['search_tab_D1']" value="<?php if(!empty($lang['search_tab_D1'])): echo $lang['search_tab_D1']; endif;?>" placeholder="Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Hospital</label>
							<input type="text" name="lang['search_tab_D2']" value="<?php if(!empty($lang['search_tab_D2'])): echo $lang['search_tab_D2']; endif;?>" placeholder="Find Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">search city</label>
                            <input type="text" name="lang['search_tab_D3']" value="<?php if(!empty($lang['search_tab_D3'])): echo $lang['search_tab_D3']; endif;?>" placeholder="search city" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select specialty</label>
                            <input type="text" name="lang['search_tab_D4']" value="<?php if(!empty($lang['search_tab_D4'])): echo $lang['search_tab_D4']; endif;?>" placeholder="Select specialty" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select reason</label>
                            <input type="text" name="lang['search_tab_D5']" value="<?php if(!empty($lang['search_tab_D5'])): echo $lang['search_tab_D5']; endif;?>" placeholder="Select reason" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['search_tab_D6']" value="<?php if(!empty($lang['search_tab_D6'])): echo $lang['search_tab_D6']; endif;?>"placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				 </div>
			</div>
			<div class="box">			
			   <div class="form-group has-feedback">                                       
                    <input type="button" class="btn btn-primary" value="Submit"   id="searchedit">
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
	 