<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Home Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Home_Translation/view_home"> Home Translation </a></li>
         <li class="active">Add Home Translation</li>
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
	<form role="form"  method="post" id="home_reg" data-parsley-validate="" class="validate">
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
	 <input  type="hidden" name="lang['about_lang']" value="about_lang" >
 <input  type="hidden" name="lang['terms_lang']" value="terms_lang" >
         <div class="col-md-12">
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Add General Home Details</h3>
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
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">WEB NAME</label>
                             <input class="form-control  required regcom sample" placeholder="Web Name" name="lang['webname']"  type="text"   required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
				<!-------Home page Header------->
                       <input class="form-control  required regcom sample"   placeholder="Page Name" value="home_lang" name="lang['page_name']"  type="hidden">
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Home</label>
                             <input class="form-control  required regcom sample" placeholder="Home" name="lang['home_header_home']"  type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About Us</label>
                            <input type="text" name="lang['home_header_aboutus']" placeholder="About Us" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Careers</label>
                            <input type="text" name="lang['home_header_careers']" placeholder="Careers" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Contact</label>
                            <input type="text" name="lang['home_header_contact']" placeholder="Contact" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Terms</label>
                            <input type="text" name="lang['home_header_terms']" placeholder="Terms" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">FAQ </label>
                            <input type="text" name="lang['home_header_faq']" placeholder="FAQ" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Blog</label>
                            <input type="text" name="lang['home_header_blog']" placeholder="Blog" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Blog</label>
                            <input type="text" name="lang['home_header_doctorblog']" placeholder="Doctor Blog" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signup</label>
                            <input type="text" name="lang['home_header_signup']" placeholder="Signup" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signin</label>
                            <input type="text" name="lang['home_header_signin']" placeholder="Signin" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					<!-------Home page Slide A------->  
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Family More Healthy</label>
                            <input type="text" name="lang['home_common_A1']" placeholder="Family More Healthy" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Family More Healthy subtitle</label>
							<textarea name="lang['home_common_A2']" class="form-control required regcom"  placeholder="Family More Healthy subtitle" required=""></textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Read more</label>
                            <input type="text" name="lang['home_common_A3']" placeholder="Read more" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Scroll Down</label>
                            <input type="text" name="lang['home_common_A4']" placeholder="Scroll Down" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<!-------Home page Slide B------->  
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">HEALTHCARE AT YOUR DEMAND !</label>
                            <input type="text" name="lang['home_common_B1']" placeholder="HEALTHCARE AT YOUR DEMAND !" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find a nearby doctor or dentist and book an appointment instantly. And it's free !</label>
                            <input type="text" name="lang['home_common_B2']" placeholder="Find a nearby doctor or dentist and book an appointment instantly. And it's free !" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">FEATURES</label>
                            <input type="text" name="lang['home_common_B3']" placeholder="FEATURES" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View a map of doctors in your insurance network.</label>
                            <input type="text" name="lang['home_common_B4']" placeholder="View a map of doctors in your insurance network." class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Read patient reviews to help you choose the right doctor</label>
                            <input type="text" name="lang['home_common_B5']" placeholder="Read patient reviews to help you choose the right doctor" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">See any doctor's available times and click to book!</label>
                            <input type="text" name="lang['home_common_B6']" placeholder="See any doctor's available times and click to book!" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				<!-------Home page Slide C------->  
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">GET THE APP</label>
                            <input type="text" name="lang['home_common_C1']" placeholder="GET THE APP" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">GET THE APP subtitle</label>
                            <input type="text" name="lang['home_common_C2']" placeholder="GET THE APP subtitle" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Get it on</label>
                            <input type="text" name="lang['home_common_C3']" placeholder="Get it on" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				<!-------Home page Footer D-------> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">OUR LOCATION</label>
                            <input type="text" name="lang['home_common_D1']" placeholder="OUR LOCATION" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">OUR LOCATION subtitle</label>
                            <input type="text" name="lang['home_common_D2']" placeholder="OUR LOCATION subtitle" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">By E-mail: </label>
                            <input type="text" name="lang['home_common_D3']" placeholder="By E-mail: " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">info@Bookmydoc.com </label>
                            <input type="text" name="lang['home_common_D4']" placeholder="info@Bookmydoc.com" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> By Phone: </label>
                            <input type="text" name="lang['home_common_D5']" placeholder=" By Phone:" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address: 121, honey Street, Home City, USA</label>
                            <input type="text" name="lang['home_common_D6']" placeholder=" Address: 121, honey Street, Home City, USA" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">All rights reserved.</label>
                            <input type="text" name="lang['home_common_D7']" placeholder="All rights reserved" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>	
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Copyright © 2015-2016 Techware Solution.</label>
                            <input type="text" name="lang['home_common_D8']" placeholder="Copyright © 2015-2016 Techware Solution" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>	
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Keep your</label>
                            <input type="text" name="lang['home_common_D9']" placeholder="Keep your" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">How It Works ?</label>
                            <input type="text" name="lang['home_common_D10']" placeholder="How It Works ?" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">How Bookmydoc Works</label>
                            <input type="text" name="lang['home_common_D11']" placeholder="How Bookmydoc Works" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Bookmydoc in Safety</label>
                            <input type="text" name="lang['home_common_D12']" placeholder="Bookmydoc in Safety" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Terms & Conditions</label>
                            <input type="text" name="lang['home_common_D13']" placeholder="Terms & Conditions" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Contact Us</label>
                            <input type="text" name="lang['home_common_D14']" placeholder="Contact Us" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Policies</label>
                            <input type="text" name="lang['home_common_D15']" placeholder="Policies" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Faqs</label>
                            <input type="text" name="lang['home_common_D16']" placeholder="Faqs" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About Us</label>
                            <input type="text" name="lang['home_common_D17']" placeholder="About Us" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Bookmydoc For Business</label>
                            <input type="text" name="lang['home_common_D18']" placeholder="Bookmydoc For Business" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Bookmydoc Premium</label>
                            <input type="text" name="lang['home_common_D19']" placeholder="Bookmydoc Premium" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Careers@Bookmydoc</label>
                            <input type="text" name="lang['home_common_D20']" placeholder="Careers@Bookmydoc" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Bookmydoc Team</label>
                            <input type="text" name="lang['home_common_D21']" placeholder="Bookmydoc Team" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Bookmydoc Blog</label>
                            <input type="text" name="lang['home_common_D22']" placeholder="Bookmydoc Blog" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Support</label>
                            <input type="text" name="lang['home_common_D23']" placeholder="Support" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">CITIES</label>
                            <input type="text" name="lang['home_common_D24']" placeholder="CITIES" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
				    </div>
			  </div>				   

		   </div>
			<div class="box">
				 <div class="box-body">
				   <div class="col-md-12">
					 <div class="form-group has-feedback">                                       
                            <input type="button" class="btn btn-primary" value="Submit"  name="Save" id="useradd">
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


	 