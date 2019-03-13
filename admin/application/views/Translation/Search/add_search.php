<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Search Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Search_Translation/view_search"> Search Translation </a></li>
         <li class="active">Add Search Translation</li>
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
	<form role="form"  method="post" id="search_reg" data-parsley-validate="" class="validate">
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
                  <h3 class="box-title">Add General Search Details</h3>
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
				<!-------Home page Tab 1------->
				  <div class="box-header with-border">
                  <h3 class="box-title">Doctor Search</h3>
				</div>
                       <input class="form-control  required regcom sample"   placeholder="Page Name" value="search_lang" name="lang['page_name']"  type="hidden">
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor</label>
                             <input class="form-control  required regcom sample" placeholder="Doctor" name="lang['search_tab_A1']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">search city</label>
                            <input type="text" name="lang['search_tab_A2']" placeholder="search city" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select specialty</label>
                            <input type="text" name="lang['search_tab_A3']" placeholder="Select specialty" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select reason</label>
                            <input type="text" name="lang['search_tab_A4']" placeholder="Select reason" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['search_tab_A6']" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Language </label>
                            <input type="text" name="lang['search_tab_A7']" placeholder="Language" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gender</label>
                            <input type="text" name="lang['search_tab_A8']" placeholder="Gender" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Doctors</label>
                            <input type="text" name="lang['search_tab_A9']" placeholder="Find Doctors" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lang['search_tab_A10']" placeholder="Male" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
                            <input type="text" name="lang['search_tab_A11']" placeholder="Female" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				<!-------Home page Tab 2------->
				  <div class="box-header with-border">
                  <h3 class="box-title">Clinic Search</h3>
				</div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Clinic</label>
                            <input type="text" name="lang['search_tab_B1']" placeholder="Clinic" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Clinics</label>
                            <input type="text" name="lang['search_tab_B2']" placeholder="Find Clinics" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">search city</label>
                            <input type="text" name="lang['search_tab_B3']" placeholder="search city" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select specialty</label>
                            <input type="text" name="lang['search_tab_B4']" placeholder="Select specialty" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select reason</label>
                            <input type="text" name="lang['search_tab_B5']" placeholder="Select reason" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['search_tab_B6']" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				 <!-------Home page Tab 3------->
				   <div class="box-header with-border">
                  <h3 class="box-title">Medical Search</h3>
				</div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Center</label>
                            <input type="text" name="lang['search_tab_C1']" placeholder="Medical Center" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Medical Centers</label>
                            <input type="text" name="lang['search_tab_C2']" placeholder="Find Medical Centers" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">search city</label>
                            <input type="text" name="lang['search_tab_C3']" placeholder="search city" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select specialty</label>
                            <input type="text" name="lang['search_tab_C4']" placeholder="Select specialty" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select reason</label>
                            <input type="text" name="lang['search_tab_C5']" placeholder="Select reason" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['search_tab_C6']" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					<!-------Home page Tab 4------->  
					  <div class="box-header with-border">
                  <h3 class="box-title">Hospital Search</h3>
				</div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital</label>
                            <input type="text" name="lang['search_tab_D1']" placeholder="Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Hospital</label>
							 <input type="text" name="lang['search_tab_D2']" placeholder="Find Hospital" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">search city</label>
                            <input type="text" name="lang['search_tab_D3']" placeholder="search city" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select specialty</label>
                            <input type="text" name="lang['search_tab_D4']" placeholder="Select specialty" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select reason</label>
                            <input type="text" name="lang['search_tab_D5']" placeholder="Select reason" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['search_tab_D6']" placeholder="Insurance" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				    </div>
			  </div>				   
		   </div>
			<div class="box">
				 <div class="box-body">
				   <div class="col-md-12">
					 <div class="form-group has-feedback">                                       
                            <input type="button" class="btn btn-primary" value="Submit"  name="Save" id="searchadd">
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


	 