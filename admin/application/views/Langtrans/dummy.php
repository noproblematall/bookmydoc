<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Language Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="#">Language Translation Details</a></li>
         <li class="active">Add Language Translation</li>
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
		 <form role="form"  method="post" id="taxi_reg">
         <div class="col-md-12">
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Add General Homepage Details</h3>
				  <div class="edituser" tabindex='1'></div>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">	
			   
                  <div class="box-body">                 
                     <div class="col-md-6">
					  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Language</label>
                                           <input class="form-control  required regcom sample" placeholder="Add Language" name="languages"  type="text">
                                       <span class="glyphicon  form-control-feedback"></span>
                          </div>
					 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Home</label>
                            <input type="text" name="lghome" placeholder="Home" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">AboutUs</label>
                            <input type="text" name="lgaboutus" placeholder="AboutUs" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Careers</label>
                            <input type="text" name="lgcareers" placeholder="Careers" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 		
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Terms</label>
                            <input type="text" name="lgterms" placeholder="Terms" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">FAQ</label>
                            <input type="text" name="lgfaq" placeholder="FAQ" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Blog</label>
                            <input type="text" name="lgnlog" placeholder="Blog" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Blog</label>
                            <input type="text" name="lgdoctorblog" placeholder="Doctor Blog" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signup</label>
                            <input type="text" name="lgsignup" placeholder="Signup" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signin</label>
                            <input type="text" name="lgsignin" placeholder="Signin" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Scrolldown</label>
                            <input type="text" name="lgscrolldown" placeholder="Scrolldown" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Features</label>
                            <input type="text" name="lgfeatures" placeholder="Features" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Keep Your</label>
                            <input type="text" name="lgl1" placeholder="Keep Your" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Family More Healthy</label>
                            <input type="text" name="lgl2" placeholder="Family More Healthy" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">General Description</label>
                            <input type="text" name="lgl3" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Read more</label>
                            <input type="text" name="lgl4" placeholder="Read more" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">HEALTHCARE AT YOUR DEMAND !</label>
                            <input type="text" name="lgl5" placeholder="HEALTHCARE AT YOUR DEMAND !" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find a nearby doctor or dentist and book an appointment instantly. And</label>
                            <input type="text" name="lgl6" placeholder="Find a nearby doctor or dentist and book an appointment instantly. And" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">it's free !</label>
                            <input type="text" name="lgl7" placeholder="it's free !" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View a map of doctors in your insurance network.</label>
                            <input type="text" name="lgl8" placeholder="View a map of doctors in your insurance network." class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Read patient reviews to help you choose the right doctor</label>
                            <input type="text" name="lgl9" placeholder="Read patient reviews to help you choose the right doctor" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">See any doctor's available times and click to book!</label>
                            <input type="text" name="lgl10" placeholder="See any doctor's available times and click to book!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">GET THE APP</label>
                            <input type="text" name="lgl11" placeholder="GET THE APP" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Make appointments on the go, right from your smartphone, with our top-rated mobile app</label>
                            <input type="text" name="lgl12" placeholder="Make appointments on the go, right from your smartphone, with our top-rated mobile app" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Get it on!</label>
                            <input type="text" name="lgl13" placeholder="Get it on!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">OUR LOCATION</label>
                            <input type="text" name="lgl14" placeholder="OUR LOCATION" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">SEARCH BY</label>
                            <input type="text" name="lgl15" placeholder="SEARCH BY" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">CITIES</label>
                            <input type="text" name="lgl16" placeholder="CITIES" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Make appointments on the go, right from your smartphone, with our top-rated mobile app.</label>
                            <input type="text" name="lgl17" placeholder="Make appointments on the go, right from your smartphone, with our top-rated mobile app." class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> By E-mail</label>
                            <input type="text" name="lgl18" placeholder=" By E-mail" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email: info@Bookmydoc.com</label>
                            <input type="text" name="lgl19" placeholder="info@Bookmydoc.com" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> By Phone</label>
                            <input type="text" name="lgl20" placeholder=" By Phone" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Phone :+000 -12601</label>
                            <input type="text" name="lgl21" placeholder=" +000 -12601" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="lgl22" placeholder="Get it on!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address :121, honey Street, Home City, USA</label>
                            <input type="text" name="lgl23" placeholder="121, honey Street, Home City, USA" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Copyright © 2015-2016</label>
                            <input type="text" name="lgl24" placeholder="Copyright © 2015-2016" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Copyright:Techware Solution.</label>
                            <input type="text" name="lgl25" placeholder="Techware Solution." class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				 </div>
			</div>				   
		</div>
				<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Add Signin Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-6">
				   	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email Placeholder</label>
                            <input type="text" name="lgsemailp" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Password Placeholder</label>
                            <input type="text" name="lgspasswordp" placeholder="Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>				   
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Forgot your Password?</label>
                            <input type="text" name="lgsforgotp" placeholder="Forgot your Password?" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm new in Bookmydoc</label>
                            <input type="text" name="lgsd1p" placeholder="I'm new in Bookmydoc" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign up for a book my doc account to book an appoiment right now!</label>
                            <input type="text" name="lgsd2p" placeholder="Sign up for a book my doc account to book an appoiment right now!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign up Now!</label>
                            <input type="text" name="lgsd3p" placeholder="Sign up Now!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>				   
				  </div>
               </form>
            </div>
				
				<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Add Signup Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-6">
				   	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a new Patient</label>
                            <input type="text" name="lgsupat" placeholder="I'm a new Patient" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find a doctor and book an appointment </label>
                             <input type="text" name="lgsupatd" placeholder="Find a doctor and book an appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Join now</label>
                            <input type="text" name="lgsuj" placeholder="Join now" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a Doctor / health care provider </label>
                            <input type="text" name="lgsuhc" placeholder="I'm a Doctor / health care provider " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">online for free! </label>
                            <input type="text" name="lgsuof" placeholder="online for free! " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>										
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Quicker way for your patient to schedule an appointment</label>
                            <input type="text" name="lgsuhcd" placeholder="Quicker way for your patient to schedule an appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>	
				   </div>
				   
				  </div>
               </form>
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Add Patient & Healthcare Signup Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-6">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Join Now</label>
                            <input type="text" name="lgpsjoinnow" placeholder="Join Now" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
							<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="lgpsfirstname" placeholder="First Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="lgpslastname" placeholder="Last Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lgpsemail" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Create a Password</label>
                            <input type="text" name="lgpscpassword" placeholder="Create a Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex</label>
                            <input type="text" name="lgpssex" placeholder="Sex" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lgpsmale" placeholder="Male" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
                            <input type="text" name="lgpsfemale" placeholder="Female" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I Agree to the Terms and Conditions</label>
                            <input type="text" name="lgpsterms" placeholder="I Agree to the Terms and Conditions" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Continue</label>
                            <input type="text" name="lgpscontinue" placeholder="Continue" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love</label>
                            <input type="text" name="lgpsdes1" placeholder="You’ll love" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">being on Bookmydoc</label>
                            <input type="text" name="lgpsdes2" placeholder=" being on Bookmydoc" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Access Bookmydoc network of more than 5 million patients</label>
                            <input type="text" name="lgpsdes4" placeholder="Access Bookmydoc network of more than 5 million patients" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Let patients schedule appointments with you instantly, 24-7, from Bookmydoc and from your practice website.</label>
                            <input type="text" name="lgpsdes3" placeholder="Let patients schedule appointments with you instantly, 24-7, from Bookmydoc and from your practice website." class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">HealthCare Provider Name(Hospital, Medical Center Or Clinic Name)</label>
                            <input type="text" name="lgpshc1" placeholder="HealthCare Provider Name(Hospital, Medical Center Or Clinic Name)" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Practice Or Office Location ZIP Code</label>
                            <input type="text" name="lgpshc2" placeholder="Practice Or Office Location ZIP Code" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Type</label>
                            <input type="text" name="lgpshc3" placeholder="Type" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>						 
				   </div>
				   
				  </div>
               </form>
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Filter Navigation Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-6">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor</label>
                            <input type="text" name="lgfndoctor" placeholder="Doctor" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Clinic</label> 
                            <input type="text" name="lgfnclinic" placeholder="Clinic" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Center</label>
                            <input type="text" name="lgfnmedical" placeholder="Medical Center" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital</label>
                            <input type="text" name="lgfnhospital" placeholder="Hospital" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Doctors</label>
                            <input type="text" name="lgfndes1" placeholder="Find Doctors" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Clinics</label>
                            <input type="text" name="lgfndes2" placeholder="Find Clinics" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Medical Centers</label>
                            <input type="text" name="lgfndes3" placeholder="Find Medical Centers" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Hospitals</label>
                            <input type="text" name="lgfndes4" placeholder="Find Hospitals" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Select country</label>
                            <input type="text" name="lgfndes5" placeholder="Find Hospitals" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Select country</label>
                            <input type="text" name="lgfndes6" placeholder="Select country" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Select State</label>
                            <input type="text" name="lgfndes7" placeholder="Select state" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Select City</label>
                            <input type="text" name="lgfndes8" placeholder="Select city" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Insurance</label>
                            <input type="text" name="lgfndes9" placeholder="Insurance" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Language</label>
                            <input type="text" name="lgfndes10" placeholder="Language" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Gender</label>
                            <input type="text" name="lgfndes11" placeholder="Gender" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Select reason</label>
                            <input type="text" name="lgfndes12" placeholder="Select reason" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
               </form>
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Filter Doctor Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-6">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Doctors near by You</label>
                            <input type="text" name="lgfddnby" placeholder="Doctors near by You" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Select a Speciality Doctor </label>
                            <input type="text" name="lgfdsasd" placeholder="Select a Speciality Doctor " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> View Profile</label>
                            <input type="text" name="lgfdviewprofile" placeholder="View Profile" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Book Online</label>
                            <input type="text" name="lgfdbookonline" placeholder="Book Online" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View More</label>
                            <input type="text" name="lgfdviewmore" placeholder="View More" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Details</label>
                            <input type="text" name="lgfdapdetails" placeholder="Appointment Details" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Close</label>
                            <input type="text" name="lgfdapclose" placeholder="Close" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
               </form>
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Doctor Profile Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-6">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Qualification & Booking Appointment</label>
                            <input type="text" name="lgdpqbapp1" placeholder="Qualification & Booking Appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital Affiliations</label>
                            <input type="text" name="lgdpqbapp2" placeholder="Hospital Affiliations" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Work Experience</label>
                            <input type="text" name="lgdpqbapp3" placeholder="Work Experience" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Awards and Publications</label>
                            <input type="text" name="lgdpqbapp4" placeholder="Awards and Publications" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Professional Memberships</label>
                            <input type="text" name="lgdpqbapp5" placeholder="Professional Memberships" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Reviews for</label>
                            <input type="text" name="lgdpqbapp6" placeholder="Qualification & Booking Appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">No Reviews Found </label>
                            <input type="text" name="lgdpqbapp7" placeholder="No Reviews Found " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
               </form>
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Hospitals Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-6">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Clinics near by You</label>
                            <input type="text" name="lghostdes1" placeholder="Clinics near by You" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Centers near by You</label>
                            <input type="text" name="lghostdes2" placeholder="Medical Centers near by You" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospitals near by You</label>
                            <input type="text" name="lghostdes3" placeholder="Hospitals near by You" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select a Clinic</label>
                            <input type="text" name="lghostdes4" placeholder="Select a Clinic" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select a Medical Center</label>
                            <input type="text" name="lghostdes5" placeholder="Select a Medical Center" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select a Hospital</label>
                            <input type="text" name="lghostdes6" placeholder="Select a Hospital" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View</label>
                            <input type="text" name="lghostdes7" placeholder="View" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gallery</label>
                            <input type="text" name="lghostdes8" placeholder="Gallery" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About</label>
                            <input type="text" name="lghostdes9" placeholder="About" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialities</label>
                            <input type="text" name="lghostdes10" placeholder="Specialities" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Amenities</label>
                            <input type="text" name="lghostdes11" placeholder="Amenities" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance Partner</label>
                            <input type="text" name="lghostdes12" placeholder="Insurance Partner" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Affiliations</label>
                            <input type="text" name="lghostdes13" placeholder="Affiliations" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Memberships</label>
                            <input type="text" name="lghostdes14" placeholder="Memberships" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Awards</label>
                            <input type="text" name="lghostdes15" placeholder="Awards" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">                                       
                                        <input type="button" class="btn btn-primary" value="Submit"  name="Save" id="useradd">
                                        <button type="reset" class="btn btn-primary">Reset </button>
                                        </div> 
				   </div>
				   
				  </div>
               </form>
            </div>						
			
			
            <!-- /.box -->
         </div>
		 </form>
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>

    <script type="text/javascript">
$(document).ready(function(){
	   
						   
$('.regcom').on('change', function (){
var a = $(this).val();
if(a != '') {
$(this).removeClass('error-admin');

} else {
$(this).addClass('error-admin');
return false;
}
 });						   
$(".sample").on("keydown", function (e) {
        return e.which !== 32;
	    });  
	
        $('.regcom').keyup(function()
	     {
			var yourInput = $(this).val();
			re = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
			var isSplChar = re.test(yourInput);
			if(isSplChar)
			{
				var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
				$(this).val(no_spl_char);
			}
		});							   
						   
 $("#useradd").click(function(e){

  var isValid = true;
        $('input[type="text"]').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",
                    
                });
				$(this).focus();
				return false;
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });
		 if (isValid == false) {
            e.preventDefault();
		 }
        else {
            
	          var value =$("#taxi_reg").serialize() ;

$.ajax({
url:'<?php echo base_url();?>Language_translation/insert_language',
method:'post',
data:value,
success:function(res){
$(".edituser").show();
console.log(res);
if(res==0){
	 $(".edituser").focus();
	$(".edituser").html('<p class="error">Error</p>');
	setTimeout(function(){$(".edituser").hide(); }, 3000);
	
}else if(res==2){
	
	$(".edituser").focus();
	$(".edituser").html('<p class="error">Language Exists</p>');
	setTimeout(function(){$(".edituser").hide(); }, 3000);
}
else{
$(".edituser").focus();
$(".edituser").html('<p class="success">Add Language Saved Successfully</p>');
setTimeout(function(){$(".edituser").hide(); }, 1500);
$('#taxi_reg')[0].reset();
}
}
}); 
		}
	            
                                       
 
});
});

</script>
	 