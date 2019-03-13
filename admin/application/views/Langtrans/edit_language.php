<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Language Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="#">Language Translation Details</a></li>
         <li class="active">Edit Language Translation</li>
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
		 <?php 	$textFile = $data->languages;
				$extension = ".php";       
				include 'includes/'.$textFile.$extension; 	?>
		 <form role="form"  method="post" id="taxi_reg">
         <div class="col-md-12">
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Edit General Homepage Details</h3>
				  <div class="edituser" tabindex='1'></div>
               </div>
               <!-- /.box-header -->
               <!-- form start -->               
			   
                  <div class="box-body">                 
                     <div class="col-md-12">
					 <input  name="id"  id="id" value="<?php echo $data->id; ?>" type="hidden">
					  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Language</label>
                                           <input class="form-control  required regcom sample" placeholder="Add Language" name="languages" value="<?php echo $data->languages ?>" type="text">
                                       <span class="glyphicon  form-control-feedback"></span>
                          </div>
					 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Home</label>
                            <input type="text" name="lghome" value="<?php echo $lghome; ?>" placeholder="Home" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">AboutUs</label>
                            <input type="text" name="lgaboutus" value="<?php echo $lgaboutus; ?>" placeholder="AboutUs" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Careers</label>
                            <input type="text" name="lgcareers" value="<?php echo $lgcareers; ?>" placeholder="Careers" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Contact</label>
                            <input type="text" name="lgcontact" value="<?php echo $lgcontact; ?>" placeholder="Contact" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 							  
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Terms</label>
                            <input type="text" name="lgterms" value="<?php echo $lgterms; ?>" placeholder="Terms" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">FAQ</label>
                            <input type="text" name="lgfaq" value="<?php echo $lgfaq; ?>" placeholder="FAQ" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Blog</label>
                            <input type="text" name="lgnlog" value="<?php echo $lgnlog; ?>" placeholder="Blog" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Blog</label>
                            <input type="text" name="lgdoctorblog" value="<?php echo $lgdoctorblog; ?>" placeholder="Doctor Blog" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signup</label>
                            <input type="text" name="lgsignup" value="<?php echo $lgsignup; ?>" placeholder="Signup" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signin</label>
                            <input type="text" name="lgsignin" value="<?php echo $lgsignin; ?>" placeholder="Signin" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Scrolldown</label>
                            <input type="text" name="lgscrolldown" value="<?php echo $lgscrolldown; ?>" placeholder="Scrolldown" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Features</label>
                            <input type="text" name="lgfeatures" value="<?php echo $lgfeatures; ?>" placeholder="Features" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Keep Your</label>
                            <input type="text" name="lgl1" value="<?php echo $lgl1; ?>" placeholder="Keep Your" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Family More Healthy</label>
                            <input type="text" name="lgl2" value="<?php echo $lgl2; ?>" placeholder="Family More Healthy" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">General Description</label>
                            <input type="text" name="lgl3" value="<?php echo $lgl3; ?>" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Read more</label>
                            <input type="text" name="lgl4" value="<?php echo $lgl4; ?>" placeholder="Read more" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">HEALTHCARE AT YOUR DEMAND !</label>
                            <input type="text" name="lgl5" value="<?php echo $lgl5; ?>" placeholder="HEALTHCARE AT YOUR DEMAND !" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find a nearby doctor or dentist and book an appointment instantly. And</label>
                            <input type="text" name="lgl6" value="<?php echo $lgl6; ?>" placeholder="Find a nearby doctor or dentist and book an appointment instantly. And" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">it's free !</label>
                            <input type="text" name="lgl7" value="<?php echo $lgl7; ?>" placeholder="it's free !" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View a map of doctors in your insurance network.</label>
                            <input type="text" name="lgl8" value="<?php echo $lgl8; ?>" placeholder="View a map of doctors in your insurance network." class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Read patient reviews to help you choose the right doctor</label>
                            <input type="text" name="lgl9" value="<?php echo $lgl9; ?>" placeholder="Read patient reviews to help you choose the right doctor" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">See any doctor's available times and click to book!</label>
                            <input type="text" name="lgl10" value="<?php echo $lgl10; ?>" placeholder="See any doctor's available times and click to book!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">GET THE APP</label>
                            <input type="text" name="lgl11" value="<?php echo $lgl11; ?>" placeholder="GET THE APP" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Make appointments on the go, right from your smartphone, with our top-rated mobile app</label>
                            <input type="text" name="lgl12" value="<?php echo $lgl12; ?>" placeholder="Make appointments on the go, right from your smartphone, with our top-rated mobile app" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Get it on!</label>
                            <input type="text" name="lgl13" value="<?php echo $lgl13; ?>" placeholder="Get it on!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">OUR LOCATION</label>
                            <input type="text" name="lgl14" value="<?php echo $lgl14; ?>" placeholder="OUR LOCATION" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">SEARCH BY</label>
                            <input type="text" name="lgl15" value="<?php echo $lgl15; ?>" placeholder="SEARCH BY" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">CITIES</label>
                            <input type="text" name="lgl16" value="<?php echo $lgl16; ?>" placeholder="CITIES" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Make appointments on the go, right from your smartphone, with our top-rated mobile app.</label>
                            <input type="text" name="lgl17" value="<?php echo $lgl17; ?>" placeholder="Make appointments on the go, right from your smartphone, with our top-rated mobile app." class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> By E-mail</label>
                            <input type="text" name="lgl18" value="<?php echo $lgl18;?>" placeholder=" By E-mail" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email: info@Bookmydoc.com</label>
                            <input type="text" name="lgl19" value="<?php echo $lgl19; ?>" placeholder="info@Bookmydoc.com" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> By Phone</label>
                            <input type="text" name="lgl20" value="<?php echo $lgl20; ?>" placeholder=" By Phone" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Phone :+000 -12601</label>
                            <input type="text" name="lgl21" value="<?php echo $lgl21; ?>" placeholder=" +000 -12601" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="lgl22" value="<?php echo $lgl22; ?>" placeholder="Get it on!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address :121, honey Street, Home City, USA</label>
                            <input type="text" name="lgl23" value="<?php echo $lgl23; ?>" placeholder="121, honey Street, Home City, USA" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Copyright © 2015-2016</label>
                            <input type="text" name="lgl24" value="<?php echo $lgl24; ?>" placeholder="Copyright © 2015-2016" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Copyright:Techware Solution.</label>
                            <input type="text" name="lgl25" value="<?php echo $lgl25; ?>" placeholder="Techware Solution." class="form-control required regcom" >
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
				   <div class="col-md-12">
				   	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email Placeholder</label>
                            <input type="text" name="lgsemailp" value="<?php echo $lgsemailp; ?>" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Password Placeholder</label>
                            <input type="text" name="lgspasswordp" value="<?php echo $lgspasswordp; ?>" placeholder="Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>				   
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Forgot your Password?</label>
                            <input type="text" name="lgsforgotp" value="<?php echo $lgsforgotp; ?>" placeholder="Forgot your Password?" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Forgot Password</label>
                            <input type="text" name="lgsforgotp2" placeholder="Forgot Password" value="<?php echo $lgsforgotp2; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Submit</label>
                            <input type="text" name="lgsforgotsubmit" placeholder="Submit" value="<?php echo $lgsforgotsubmit; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm new in Bookmydoc</label>
                            <input type="text" name="lgsd1p" value="<?php echo $lgsd1p; ?>" placeholder="I'm new in Bookmydoc" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign up for a book my doc account to book an appoiment right now!</label>
                            <input type="text" name="lgsd2p" value="<?php echo $lgsd2p; ?>" placeholder="Sign up for a book my doc account to book an appoiment right now!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign up Now!</label>
                            <input type="text" name="lgsd3p" value="<?php echo $lgsd3p; ?>" placeholder="Sign up Now!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>				   
				  </div>
               
            </div>
				
				<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Add Signup Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a new Patient</label>
                            <input type="text" name="lgsupat" value="<?php echo $lgsupat;?>" placeholder="I'm a new Patient" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find a doctor and book an appointment </label>
                             <input type="text" name="lgsupatd" value="<?php echo $lgsupatd; ?>" placeholder="Find a doctor and book an appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Join now</label>
                            <input type="text" name="lgsuj" value="<?php echo $lgsuj; ?>" placeholder="Join now" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm a Doctor / health care provider </label>
                            <input type="text" name="lgsuhc" value="<?php echo $lgsuhc; ?>" placeholder="I'm a Doctor / health care provider " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">online for free! </label>
                            <input type="text" name="lgsuof" value="<?php echo $lgsuof; ?>" placeholder="online for free! " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>										
					<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Quicker way for your patient to schedule an appointment</label>
                            <input type="text" name="lgsuhcd" value="<?php echo $lgsuhcd; ?>" placeholder="Quicker way for your patient to schedule an appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>	
				   </div>
				   
				  </div>
               
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Add Patient & Healthcare Signup Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Join Now</label>
                            <input type="text" name="lgpsjoinnow" value="<?php echo $lgpsjoinnow; ?>" placeholder="Join Now" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
							<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="lgpsfirstname" value="<?php echo $lgpsfirstname; ?>" placeholder="First Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="lgpslastname" value="<?php echo $lgpslastname; ?>" placeholder="Last Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lgpsemail" value="<?php echo $lgpsemail; ?>" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Create a Password</label>
                            <input type="text" name="lgpscpassword" value="<?php echo $lgpscpassword; ?>" placeholder="Create a Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex</label>
                            <input type="text" name="lgpssex" value="<?php echo $lgpssex; ?>" placeholder="Sex" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lgpsmale" value="<?php echo $lgpsmale; ?>" placeholder="Male" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
                            <input type="text" name="lgpsfemale" value="<?php echo $lgpsfemale; ?>" placeholder="Female" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I Agree to the Terms and Conditions</label>
                            <input type="text" name="lgpsterms" value="<?php echo $lgpsterms; ?>" placeholder="I Agree to the Terms and Conditions" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Continue</label>
                            <input type="text" name="lgpscontinue" value="<?php echo $lgpscontinue; ?>" placeholder="Continue" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You’ll love</label>
                            <input type="text" name="lgpsdes1" value="<?php echo $lgpsdes1; ?>" placeholder="You’ll love" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">being on Bookmydoc</label>
                            <input type="text" name="lgpsdes2" value="<?php echo $lgpsdes2;?>" placeholder=" being on Bookmydoc" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Access Bookmydoc network of more than 5 million patients</label>
                            <input type="text" name="lgpsdes4" value="<?php echo $lgpsdes4; ?>" placeholder="Access Bookmydoc network of more than 5 million patients" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Let patients schedule appointments with you instantly, 24-7, from Bookmydoc and from your practice website.</label>
                            <input type="text" name="lgpsdes3" value="<?php echo $lgpsdes3; ?>"placeholder="Let patients schedule appointments with you instantly, 24-7, from Bookmydoc and from your practice website." class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">HealthCare Provider Name(Hospital, Medical Center Or Clinic Name)</label>
                            <input type="text" name="lgpshc1" value="<?php echo $lgpshc1; ?>" placeholder="HealthCare Provider Name(Hospital, Medical Center Or Clinic Name)" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Practice Or Office Location ZIP Code</label>
                            <input type="text" name="lgpshc2" value="<?php echo $lgpshc2; ?>" placeholder="Practice Or Office Location ZIP Code" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Type</label>
                            <input type="text" name="lgpshc3" value="<?php echo $lgpshc3; ?>" placeholder="Type" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>						 
				   </div>
				   
				  </div>
               
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Filter Navigation Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Country</label>
                            <input type="text" name="lgfncountry" placeholder="Country" value="<?php echo $lgfncountry; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">state</label>
                            <input type="text" name="lgfnstate" placeholder="state" value="<?php echo $lgfnstate; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">city</label>
                            <input type="text" name="lgfncity" placeholder="city" value="<?php echo $lgfncity; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">specialty</label>
                            <input type="text" name="lgfnspecialty" placeholder="specialty" value="<?php echo $lgfnspecialty; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lgfninsurance" placeholder="Insurance" value="<?php echo $lgfninsurance; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Language</label>
                            <input type="text" name="lgfnlanguage" placeholder="Language" value="<?php echo $lgfnlanguage; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gender</label>
                            <input type="text" name="lgfngender" placeholder="Gender" value="<?php echo $lgfngender; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Reason</label>
                            <input type="text" name="lgfnreason" placeholder="Reason" value="<?php echo $lgfnreason; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor</label>
                            <input type="text" name="lgfndoctor" value="<?php echo $lgfndoctor; ?>" placeholder="Doctor" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Clinic</label> 
                            <input type="text" name="lgfnclinic" value="<?php echo $lgfnclinic; ?>" placeholder="Clinic" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Center</label>
                            <input type="text" name="lgfnmedical" value="<?php echo $lgfnmedical; ?>" placeholder="Medical Center" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital</label>
                            <input type="text" name="lgfnhospital" value="<?php echo $lgfnhospital;?>"  placeholder="Hospital" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Doctors</label>
                            <input type="text" name="lgfndes1" value="<?php echo $lgfndes1; ?>" placeholder="Find Doctors" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Clinics</label>
                            <input type="text" name="lgfndes2" value="<?php echo $lgfndes2;?>" placeholder="Find Clinics" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Medical Centers</label>
                            <input type="text" name="lgfndes3" value="<?php echo $lgfndes3; ?>" placeholder="Find Medical Centers" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Find Hospitals</label>
                            <input type="text" name="lgfndes4" value="<?php echo $lgfndes4; ?>" placeholder="Find Hospitals" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Select country</label>
                            <input type="text" name="lgfndes5" value="<?php echo $lgfndes5; ?>" placeholder="Find Hospitals" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Select Specialty</label>
                            <input type="text" name="lgfndes6" value="<?php echo $lgfndes6; ?>" placeholder="Select Specialty" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Select State</label>
                            <input type="text" name="lgfndes7" value="<?php echo $lgfndes7; ?>" placeholder="Select state" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Select City</label>
                            <input type="text" name="lgfndes8" value="<?php echo $lgfndes8; ?>" placeholder="Select city" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Insurance</label>
                            <input type="text" name="lgfndes9" value="<?php echo $lgfndes9; ?>" placeholder="Insurance" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Language</label>
                            <input type="text" name="lgfndes10" value="<?php echo $lgfndes10; ?>" placeholder="Language" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Gender</label>
                            <input type="text" name="lgfndes11" value="<?php echo $lgfndes11; ?>" placeholder="Gender" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Select reason</label>
                            <input type="text" name="lgfndes12" value="<?php echo $lgfndes12; ?>" placeholder="Select reason" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
               
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Filter Doctor Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">  Sorry, No records found. Please try with different keywords</label>
                            <input type="text" name="lgfderror" value="<?php echo $lgfderror; ?>" placeholder=" Sorry, No records found. Please try with different keywords" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Doctors near by You</label>
                            <input type="text" name="lgfddnby" value="<?php echo $lgfddnby; ?>" placeholder="Doctors near by You" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Select a Speciality Doctor </label>
                            <input type="text" name="lgfdsasd" value="<?php echo $lgfdsasd; ?>" placeholder="Select a Speciality Doctor " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> View Profile</label>
                            <input type="text" name="lgfdviewprofile" value="<?php echo $lgfdviewprofile; ?>" placeholder="View Profile" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Book Online</label>
                            <input type="text" name="lgfdbookonline" value="<?php echo $lgfdbookonline; ?>" placeholder="Book Online" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View More</label>
                            <input type="text" name="lgfdviewmore" value="<?php echo $lgfdviewmore; ?>" placeholder="View More" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Details</label>
                            <input type="text" name="lgfdapdetails" value="<?php echo $lgfdapdetails; ?>" placeholder="Appointment Details" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Close</label>
                            <input type="text" name="lgfdapclose" value="<?php echo $lgfdapclose; ?>" placeholder="Close" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
               
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Doctor Profile Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Qualification & Booking Appointment</label>
                            <input type="text" name="lgdpqbapp1" value="<?php echo $lgdpqbapp1; ?>" placeholder="Qualification & Booking Appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital Affiliations</label>
                            <input type="text" name="lgdpqbapp2" value="<?php echo $lgdpqbapp2; ?>" placeholder="Hospital Affiliations" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Work Experience</label>
                            <input type="text" name="lgdpqbapp3" value="<?php echo $lgdpqbapp3; ?>" placeholder="Work Experience" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Awards and Publications</label>
                            <input type="text" name="lgdpqbapp4" value="<?php echo $lgdpqbapp4; ?>" placeholder="Awards and Publications" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Professional Memberships</label>
                            <input type="text" name="lgdpqbapp5" value="<?php echo $lgdpqbapp5; ?>" placeholder="Professional Memberships" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Reviews for</label>
                            <input type="text" name="lgdpqbapp6" value="<?php echo $lgdpqbapp6; ?>" placeholder="Qualification & Booking Appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">No Reviews Found </label>
                            <input type="text" name="lgdpqbapp7" value="<?php echo $lgdpqbapp7; ?>" placeholder="No Reviews Found " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">By </label>
                            <input type="text" name="lgdpby" placeholder="By " value="<?php echo $lgdpby; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Rating </label>
                            <input type="text" name="lgdprating" placeholder="Rating " value="<?php echo $lgdprating; ?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Comments </label>
                            <input type="text" name="lgdpcomments" placeholder="Comments " value="<?php echo $lgdpcomments; ?>"  class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
               
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Hospitals Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Clinics near by You</label>
                            <input type="text" name="lghostdes1" value="<?php echo $lghostdes1; ?>" placeholder="Clinics near by You" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Centers near by You</label>
                            <input type="text" name="lghostdes2" value="<?php echo $lghostdes2; ?>" placeholder="Medical Centers near by You" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospitals near by You</label>
                            <input type="text" name="lghostdes3" value="<?php echo $lghostdes3; ?>" placeholder="Hospitals near by You" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select a Clinic</label>
                            <input type="text" name="lghostdes4" value="<?php echo $lghostdes4; ?>" placeholder="Select a Clinic" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select a Medical Center</label>
                            <input type="text" name="lghostdes5" value="<?php echo $lghostdes5; ?>" placeholder="Select a Medical Center" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select a Hospital</label>
                            <input type="text" name="lghostdes6" value="<?php echo $lghostdes6; ?>" placeholder="Select a Hospital" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View</label>
                            <input type="text" name="lghostdes7" value="<?php echo $lghostdes7; ?>" placeholder="View" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gallery</label>
                            <input type="text" name="lghostdes8" value="<?php echo $lghostdes8; ?>" placeholder="Gallery" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About</label>
                            <input type="text" name="lghostdes9" value="<?php echo $lghostdes9; ?>" placeholder="About" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialities</label>
                            <input type="text" name="lghostdes10" value="<?php echo $lghostdes10; ?>" placeholder="Specialities" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Amenities</label>
                            <input type="text" name="lghostdes11" value="<?php echo $lghostdes11; ?>" placeholder="Amenities" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance Partner</label>
                            <input type="text" name="lghostdes12" value="<?php echo $lghostdes12; ?>" placeholder="Insurance Partner" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Affiliations</label>
                            <input type="text" name="lghostdes13" value="<?php echo $lghostdes13; ?>" placeholder="Affiliations" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Memberships</label>
                            <input type="text" name="lghostdes14" value="<?php echo $lghostdes14; ?>" placeholder="Memberships" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Awards</label>
                            <input type="text" name="lghostdes15" value="<?php echo $lghostdes15; ?>" placeholder="Awards" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>						 
				   </div>
				   
				  </div>
              
            </div>						
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Aboutus Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">AboutDescription</label>
                            <textarea name="lgautmodel1"  class="form-control required regcom" >							
							<?php echo $lgautmodel1;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">AboutDescription Details</label>
                            <textarea name="lgautmodel2" class="form-control required regcom" >					 
							<?php echo $lgautmodel2;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Read More</label>
                            <input type="text" name="lgautmodel3" value="<?php echo $lgautmodel3;?>" placeholder="Readmore" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Easy to Find</label>
                            <input type="text" name="lgautmodel4" value="<?php echo $lgautmodel4;?>" placeholder="Easy to Find" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Instant Booking</label>
                            <input type="text" name="lgautmodel5" value="<?php echo $lgautmodel5;?>" placeholder="Instant Booking" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">24 Hours Service</label>
                            <input type="text" name="lgautmodel6" value="<?php echo $lgautmodel6;?>" placeholder="24 Hours Service" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
                
            </div>	
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Careers Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Careers Description</label>
                            <textarea name="lgcareersmodel1"  class="form-control required regcom" >							
							<?php echo $lgcareersmodel1;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">If you think you match Book my Doc requirements, get in touch with:</label>
                            <input type="text" name="lgcareersmodel2" value="<?php echo $lgcareersmodel2;?>" placeholder="If you think you match Book my Doc requirements, get in touch with:" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">mail@bookmydoc.in</label>
                            <input type="text" name="lgcareersmodel3" value="<?php echo $lgcareersmodel3;?>" placeholder="mail@bookmydoc.in" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">SL. No</label>
                            <input type="text" name="lgcareersmodel4" value="<?php echo $lgcareersmodel4;?>" placeholder="SL. No" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Job Title</label>
                            <input type="text" name="lgcareersmodel5" value="<?php echo $lgcareersmodel5;?>" placeholder="Job Title" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Vacancies</label>
                            <input type="text" name="lgcareersmodel6" value="<?php echo $lgcareersmodel6;?>" placeholder="Vacancies" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="lgcareersmodel7" value="<?php echo $lgcareersmodel7;?>" placeholder="Location" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Education</label>
                            <input type="text" name="lgcareersmodel8" value="<?php echo $lgcareersmodel8;?>" placeholder="Education" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Salary</label>
                            <input type="text" name="lgcareersmodel9" value="<?php echo $lgcareersmodel9;?>" placeholder="Salary" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Experiance</label>
                            <input type="text" name="lgcareersmodel10" value="<?php echo $lgcareersmodel10;?>" placeholder="Experiance" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Candidate</label>
                            <input type="text" name="lgcareersmodel11" value="<?php echo $lgcareersmodel11;?>" placeholder="Candidate" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" name="lgcareersmodel12" value="<?php echo $lgcareersmodel12;?>" placeholder="Status" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Marketing</label>
                            <input type="text" name="lgcareersmodel13" value="<?php echo $lgcareersmodel13;?>" placeholder="Marketing" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Kochi</label>
                            <input type="text" name="lgcareersmodel14" value="<?php echo $lgcareersmodel14;?>" placeholder="Kochi" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Chennai</label>
                            <input type="text" name="lgcareersmodel15" value="<?php echo $lgcareersmodel15;?>" placeholder="Chennai" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Any Degree</label>
                            <input type="text" name="lgcareersmodel16" value="<?php echo $lgcareersmodel16;?>" placeholder="Any Degree" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Years</label>
                            <input type="text" name="lgcareersmodel17" value="<?php echo $lgcareersmodel17;?>" placeholder="Years" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Year</label>
                            <input type="text" name="lgcareersmodel18" value="<?php echo $lgcareersmodel18;?>" placeholder="Year" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Best in the Inductry</label>
                            <input type="text" name="lgcareersmodel19" value="<?php echo $lgcareersmodel19;?>" placeholder="Best in the Inductry" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lgcareersmodel20" value="<?php echo $lgcareersmodel20;?>" placeholder="Male" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Apply</label>
                            <input type="text" name="lgcareersmodel21" value="<?php echo $lgcareersmodel21;?>" placeholder="Apply" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
                
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Contact</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Getting back to</label>
                            <input type="text" name="lgcontactmodel1" value="<?php echo $lgcontactmodel1;?>" placeholder="Getting back to" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Us</label>
                            <input type="text" name="lgcontactmodel2" value="<?php echo $lgcontactmodel2;?>" placeholder="Us" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="lgcontactmodel3" value="<?php echo $lgcontactmodel3;?>" placeholder="Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lgcontactmodel4" value="<?php echo $lgcontactmodel4;?>" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="lgcontactmodel5" value="<?php echo $lgcontactmodel5;?>" placeholder="Phone" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Comments</label>
                            <input type="text" name="lgcontactmodel6" value="<?php echo $lgcontactmodel6;?>" placeholder="Comments" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Send</label>
                            <input type="text" name="lgcontactmodel7" value="<?php echo $lgcontactmodel7;?>" placeholder="Send" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
                
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Terms Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Terms and conditions</label>
                            <input type="text" name="lgtermsmodel1" value="<?php echo $lgtermsmodel1;?>" placeholder="Terms and conditions" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Terms Description 1</label>
                            <textarea name="lgtermsmodel2"  class="form-control required regcom" >
							<?php echo $lgtermsmodel2;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Terms Description 2</label>
                            <textarea name="lgtermsmodel3"  class="form-control required regcom" >							
							<?php echo $lgtermsmodel3;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Terms Description 3</label>
                            <input type="text" name="lgtermsmodel4" value="<?php echo $lgtermsmodel4;?>" placeholder="We are delighted to welcome her to the Acumen team." class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
                
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Footer Extras Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Name</label>
                            <input type="text" name="lgextras1" value="<?php echo $lgextras1;?>" placeholder="Doctor Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Practice Name</label>
                            <input type="text" name="lgextras2" value="<?php echo $lgextras2;?>" placeholder="Practice Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Procedure</label>
                            <input type="text" name="lgextras3" value="<?php echo $lgextras3;?>" placeholder="Procedure" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Language</label>
                            <input type="text" name="lgextras4" value="<?php echo $lgextras4;?>" placeholder="Language" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="lgextras5" value="<?php echo $lgextras5;?>" placeholder="Location" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital</label>
                            <input type="text" name="lgextras6" value="<?php echo $lgextras6;?>" placeholder="Hospital" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lgextras7" value="<?php echo $lgextras7;?>" placeholder="Insurance" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Kochi</label>
                            <input type="text" name="lgextras8" value="<?php echo $lgextras8;?>" placeholder="Kochi" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Chennai</label>
                            <input type="text" name="lgextras9" value="<?php echo $lgextras9;?>" placeholder="Chennai" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Salem</label>
                            <input type="text" name="lgextras10" value="<?php echo $lgextras10;?>" placeholder="Salem" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Coimbatore</label>
                            <input type="text" name="lgextras11" value="<?php echo $lgextras11;?>" placeholder="Coimbatore" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Bangalore</label>
                            <input type="text" name="lgextras12" value="<?php echo $lgextras12;?>" placeholder="Bangalore" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">show more</label>
                            <input type="text" name="lgextras13" value="<?php echo $lgextras13;?>" placeholder="show more" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>						  
						  
				   </div>
				   
				  </div>
                
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Booking Page Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment</label>
                            <input type="text" name="lgbookingmod1" value="<?php echo $lgbookingmod1;?>" placeholder="show more" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>		
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Time</label>
                            <input type="text" name="lgbookingmod2" value="<?php echo $lgbookingmod2;?>" placeholder="Appointment Time" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>		
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Registration</label>
                            <input type="text" name="lgbookingmod3" value="<?php echo $lgbookingmod3;?>" placeholder="Patient Registration" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>		
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Check New / Existing Account</label>
                            <input type="text" name="lgbookingmod4" value="<?php echo $lgbookingmod4;?>" placeholder="Check New / Existing Account" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>		
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I'm New to Bookmydoc</label>
                            <input type="text" name="lgbookingmod5" value="<?php echo $lgbookingmod5;?>" placeholder="I'm New to Bookmydoc" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
							<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="lgbookingmod6" value="<?php echo $lgbookingmod6;?>" placeholder="First Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>	
							<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter FirstName</label>
                            <input type="text" name="lgbookingmod7" value="<?php echo $lgbookingmod7;?>" placeholder="Enter FirstName" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter Last Name</label>
                            <input type="text" name="lgbookingmod8" value="<?php echo $lgbookingmod8;?>" placeholder="Enter Last Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="lgbookingmod9" value="<?php echo $lgbookingmod9;?>" placeholder="Last Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lgbookingmod10" value="<?php echo $lgbookingmod10;?>"  placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Create a Password</label>
                            <input type="text" name="lgbookingmod11" value="<?php echo $lgbookingmod11;?>" placeholder="Create a Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sex</label>
                            <input type="text" name="lgbookingmod12" value="<?php echo $lgbookingmod12;?>" placeholder="Sex" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lgbookingmod13" value="<?php echo $lgbookingmod13;?>" placeholder="Male" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
                            <input type="text" name="lgbookingmod14" value="<?php echo $lgbookingmod14;?>" placeholder="Female" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I Agree to the Terms and Conditions</label>
                            <input type="text" name="lgbookingmod15" value="<?php echo $lgbookingmod15;?>" placeholder="I Agree to the Terms and Conditions" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signup to continue</label>
                            <input type="text" name="lgbookingmod16" value="<?php echo $lgbookingmod16;?>" placeholder="Signup to continue" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">I've used Bookmydoc Before</label>
                            <input type="text" name="lgbookingmod17" value="<?php echo $lgbookingmod17;?>" placeholder="I've used Bookmydoc Before" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lgbookingmod18" value="<?php echo $lgbookingmod18;?>" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter Email</label>
                            <input type="text" name="lgbookingmod19" value="<?php echo $lgbookingmod19;?>" placeholder="Enter Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" name="lgbookingmod20" value="<?php echo $lgbookingmod20;?>" placeholder="Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter Password</label>
                            <input type="text" name="lgbookingmod21" value="<?php echo $lgbookingmod21;?>" placeholder="Enter Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Signin to Continue</label>
                            <input type="text" name="lgbookingmod22" value="<?php echo $lgbookingmod22;?>" placeholder="Signin to Continue" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lgbookingmod25" value="<?php echo $lgbookingmod25;?>" placeholder="Insurance" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Enter Insurance</label>
                            <input type="text" name="lgbookingmod26" value="<?php echo $lgbookingmod26;?>" placeholder="Enter Insurance" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">What's the reason for your visit?</label>
                            <input type="text" name="lgbookingmod27" value="<?php echo $lgbookingmod27;?>" placeholder="What's the reason for your visit?" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Visitation</label>
                            <input type="text" name="lgbookingmod28" value="<?php echo $lgbookingmod28;?>" placeholder="Visitation" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Details</label>
                            <input type="text" name="lgbookingmod29" value="<?php echo $lgbookingmod29;?>" placeholder="Appointment Details" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Description</label>
                            <input type="text" name="lgbookingmod30" value="<?php echo $lgbookingmod30;?>" placeholder="accepts patient check-in forms online. No more papers to fill out!" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Name</label>
                            <input type="text" name="lgbookingmod31" value="<?php echo $lgbookingmod31;?>" placeholder="Patient Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">General Insurance</label>
                            <input type="text" name="lgbookingmod32" value="<?php echo $lgbookingmod32;?>" placeholder="General Insurance" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">General Reason</label>
                            <input type="text" name="lgbookingmod33" value="<?php echo $lgbookingmod33;?>" placeholder="General Reason" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gender</label>
                            <input type="text" name="lgbookingmod34" value="<?php echo $lgbookingmod34;?>" placeholder="Gender" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Check in Online</label>
                            <input type="text" name="lgbookingmod35" value="<?php echo $lgbookingmod35;?>" placeholder="Check in Online" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">No,thanks</label>
                            <input type="text" name="lgbookingmod36" value="<?php echo $lgbookingmod36;?>" placeholder="No,thanks" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update & Reappointment</label>
                            <input type="text" name="lgbookingmod37" value="<?php echo $lgbookingmod37;?>" placeholder="Update & Reappointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Your appointment booked successfully! </label>
                            <input type="text" name="lgbookingmod38" value="<?php echo $lgbookingmod38;?>" placeholder="Your appointment booked successfully! " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">click here</label>
                            <input type="text" name="lgbookingmod39" value="<?php echo $lgbookingmod39;?>" placeholder="click here" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">to proceed</label>
                            <input type="text" name="lgbookingmod40" value="<?php echo $lgbookingmod40;?>" placeholder="to proceed" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Continue</label>
                            <input type="text" name="lgbookingmod41" placeholder="Continue" value="<?php echo $lgbookingmod41;?>" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Click Here To Continue</label>
                            <input type="text" name="lgbookingmodmessage1" value="<?php echo $lgbookingmodmessage1;?>"  placeholder="Click Here To Continue" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Please Login as patient to continue . Only patients can book appointment.</label>
                            <input type="text" name="lgbookingmodmessage2" value="<?php echo $lgbookingmodmessage2;?>" placeholder="Please Login as patient to continue . Only patients can book appointment." class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Details</label>
                            <input type="text" name="lgbookingmodmessage3" value="<?php echo $lgbookingmodmessage3;?>" placeholder="Patient Details" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Check-In Details</label>
                            <input type="text" name="lgbookingmodmessage4" value="<?php echo $lgbookingmodmessage4;?>" placeholder="Check-In Details" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Finished</label>
                            <input type="text" name="lgbookingmodmessage5" value="<?php echo $lgbookingmodmessage5;?>" placeholder="Finished" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
				   </div>
				   
				  </div>
                
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Welcome Patient Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Welcome</label>
                            <input type="text" name="lgpatientmod1" value="<?php echo $lgpatientmod1;?>" placeholder="Welcome" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">More than 5 million patients use bookmydoc to find doctors every month. Let them book appointments with use instanly</label>
                            <input type="text" name="lgpatientmod2" value="<?php echo $lgpatientmod2;?>" placeholder="More than 5 million patients use bookmydoc to find doctors every month. Let them book appointments with use instanly" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Search Now</label>
                            <input type="text" name="lgpatientmod3" value="<?php echo $lgpatientmod3;?>" placeholder="Search Now" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Team</label>
                            <input type="text" name="lgpatientmod4" value="<?php echo $lgpatientmod4;?>" placeholder="Medical Team" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Book a primary care physican</label>
                            <input type="text" name="lgpatientmod5" value="<?php echo $lgpatientmod5;?>" placeholder="Book a primary care physican" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Rate Physician</label>
                            <input type="text" name="lgpatientmod6" value="<?php echo $lgpatientmod6;?>" placeholder="Rate Physician" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointments</label>
                            <input type="text" name="lgpatientmod7" value="<?php echo $lgpatientmod7;?>" placeholder="Appointments" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Book again</label>
                            <input type="text" name="lgpatientmod8" value="<?php echo $lgpatientmod8;?>" placeholder="Book again" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Remove</label>
                            <input type="text" name="lgpatientmod9" value="<?php echo $lgpatientmod9;?>" placeholder="Remove" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">USER REVIEWS FOR DOCTOR </label>
                            <input type="text" name="lgpatientmod10" value="<?php echo $lgpatientmod10;?>" placeholder="USER REVIEWS FOR DOCTOR " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">How much will you rate ?</label>
                            <input type="text" name="lgpatientmod11" value="<?php echo $lgpatientmod11;?>" placeholder="How much will you rate ?" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Write an Review</label>
                            <input type="text" name="lgpatientmod12" value="<?php echo $lgpatientmod12;?>" placeholder="Write an Review" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Submit</label>
                            <input type="text" name="lgpatientmod13" value="<?php echo $lgpatientmod13;?>" placeholder="Submit" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Upcoming Events</label>
                            <input type="text" name="lgpatientmod14" value="<?php echo $lgpatientmod14;?>" placeholder="Upcoming Events" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Name</label>
                            <input type="text" name="lgpatientmod15" value="<?php echo $lgpatientmod15;?>" placeholder="Doctor Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Illness</label>
                            <input type="text" name="lgpatientmod16" value="<?php echo $lgpatientmod16;?>" placeholder="Illness" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Date</label>
                            <input type="text" name="lgpatientmod17" value="<?php echo $lgpatientmod17;?>" placeholder="Appointment Date" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div><div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Action</label>
                            <input type="text" name="lgpatientmod18" value="<?php echo $lgpatientmod18;?>" placeholder="Action" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Download</label>
                            <input type="text" name="lgpatientmod19" value="<?php echo $lgpatientmod19;?>" placeholder="Download" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Download PDF</label>
                            <input type="text" name="lgpatientmod20" value="<?php echo $lgpatientmod20;?>" placeholder="Download PDF" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Message</label>
                            <input type="text" name="lgpatientmod21" value="<?php echo $lgpatientmod21;?>" placeholder="Message" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Date</label>
                            <input type="text" name="lgpatientmod22" value="<?php echo $lgpatientmod22;?>" placeholder="Appointment Date" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Time</label>
                            <input type="text" name="lgpatientmod23" value="<?php echo $lgpatientmod23;?>" placeholder="Appointment Time" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Edit Profile</label>
                            <input type="text" name="lgpatientmod24" value="<?php echo $lgpatientmod24;?>" placeholder="Edit Profile" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="lgpatientmod25" value="<?php echo $lgpatientmod25;?>" placeholder="First Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>						 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="lgpatientmod27" value="<?php echo $lgpatientmod27;?>" placeholder="Last Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>						   
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lgpatientmod29" value="<?php echo $lgpatientmod29;?>" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 						 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update</label>
                            <input type="text" name="lgpatientmod31" value="<?php echo $lgpatientmod31;?>" placeholder="Update" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Change Password</label>
                            <input type="text" name="lgpatientmod32" value="<?php echo $lgpatientmod32;?>" placeholder="Change Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">The Password Advice</label>
                            <input type="text" name="lgpatientmod33" value="<?php echo $lgpatientmod33;?>" placeholder="The Password Advice" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Has 6 Characters, Minimum</label>
                            <input type="text" name="lgpatientmod34" value="<?php echo $lgpatientmod34;?>" placeholder="Has 6 Characters, Minimum" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Current Pasword</label>
                            <input type="text" name="lgpatientmod35" value="<?php echo $lgpatientmod35;?>" placeholder="Current Pasword" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">New Pssword</label>
                            <input type="text" name="lgpatientmod36" value="<?php echo $lgpatientmod36;?>" placeholder="New Pssword" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Re-type New Password</label>
                            <input type="text" name="lgpatientmod37" value="<?php echo $lgpatientmod37;?>" placeholder="Re-type New Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You don’t have any Notifications</label>
                            <input type="text" name="lgpatientmod38" value="<?php echo $lgpatientmod38;?>" placeholder="You don’t have any Notifications" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">You have appointment Today</label>
                            <input type="text" name="lgpatientmod39" value="<?php echo $lgpatientmod39;?>" placeholder="You have appointment Today" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Past Appointment</label>
                            <input type="text" name="lgpatientmod40" value="<?php echo $lgpatientmod40;?>" placeholder="Past Appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Notifications</label>
                            <input type="text" name="lgpatientmod41" value="<?php echo $lgpatientmod41;?>" placeholder="Notifications" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Settings</label>
                            <input type="text" name="lgpatientmod42" value="<?php echo $lgpatientmod42;?>" placeholder="Settings" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						  
				   </div>
				   
				  </div>
                
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Welcome Doctor Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment</label>
                            <input type="text" name="lgdoctormod1" value="<?php echo $lgdoctormod1;?>" placeholder="Appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Calendar Setting</label>
                            <input type="text" name="lgdoctormod2" value="<?php echo $lgdoctormod2;?>" placeholder="Calendar Setting" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Settings</label>
                            <input type="text" name="lgdoctormod3" value="<?php echo $lgdoctormod3;?>" placeholder="Settings" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Work plan</label>
                            <input type="text" name="lgdoctormod4" value="<?php echo $lgdoctormod4;?>" placeholder="Work plan" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">checkall</label>
                            <input type="text" name="lgdoctormod5" value="<?php echo $lgdoctormod5;?>" placeholder="checkall" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">day</label>
                            <input type="text" name="lgdoctormod6" value="<?php echo $lgdoctormod6;?>" placeholder="day" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">start</label>
                            <input type="text" name="lgdoctormod7" value="<?php echo $lgdoctormod7;?>" placeholder="start" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">end</label>
                            <input type="text" name="lgdoctormod8" value="<?php echo $lgdoctormod8;?>" placeholder="end" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">checkall</label>
                            <input type="text" name="lgdoctormod9" value="<?php echo $lgdoctormod9;?>" placeholder="checkall" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">actions</label>
                            <input type="text" name="lgdoctormod10" value="<?php echo $lgdoctormod10;?>" placeholder="actions" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 						
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">update</label>
                            <input type="text" name="lgdoctormod18" value="<?php echo $lgdoctormod18;?>" placeholder="update" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">start date</label>
                            <input type="text" name="lgdoctormod19" value="<?php echo $lgdoctormod19;?>" placeholder="start date" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">end date</label>
                            <input type="text" name="lgdoctormod20" value="<?php echo $lgdoctormod20;?>" placeholder="end date" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">my details</label>
                            <input type="text" name="lgdoctormod21" value="<?php echo $lgdoctormod21;?>" placeholder="my details" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">update profile</label>
                            <input type="text" name="lgdoctormod22" value="<?php echo $lgdoctormod22;?>" placeholder="update profile" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">update password</label>
                            <input type="text" name="lgdoctormod23" value="<?php echo $lgdoctormod23;?>" placeholder="update" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">update</label>
                            <input type="text" name="lgdoctormod24" value="<?php echo $lgdoctormod24;?>" placeholder="update" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">upload image</label>
                            <input type="text" name="lgdoctormod25" value="<?php echo $lgdoctormod25;?>" placeholder="update" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">packages</label>
                            <input type="text" name="lgdoctormod26" value="<?php echo $lgdoctormod26;?>" placeholder="update" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="lgdoctormod27" value="<?php echo $lgdoctormod27;?>" placeholder="First Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 						  
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="lgdoctormod29" value="<?php echo $lgdoctormod29;?>" placeholder="Last Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lgdoctormod31" value="<?php echo $lgdoctormod31;?>" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Gender</label>
                            <input type="text" name="lgdoctormod32" value="<?php echo $lgdoctormod32;?>" placeholder="Gender" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Male</label>
                            <input type="text" name="lgdoctormod33" value="<?php echo $lgdoctormod33;?>" placeholder="Male" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Female</label>
                            <input type="text" name="lgdoctormod34" value="<?php echo $lgdoctormod34;?>" placeholder="Female" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Degree</label>
                            <input type="text" name="lgdoctormod35" value="<?php echo $lgdoctormod35;?>" placeholder="Degree" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>  
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialty</label>
                            <input type="text" name="lgdoctormod36" value="<?php echo $lgdoctormod36;?>" placeholder="Specialty" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Reasons</label>
                            <input type="text" name="lgdoctormod37" value="<?php echo $lgdoctormod37;?>" placeholder="Reasons" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Awards</label>
                            <input type="text" name="lgdoctormod38" value="<?php echo $lgdoctormod38;?>" placeholder="Awards" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Professional Memberships</label>
                            <input type="text" name="lgdoctormod39" value="<?php echo $lgdoctormod39;?>" placeholder="Professional Memberships" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Languages Spoken</label>
                            <input type="text" name="lgdoctormod40" value="<?php echo $lgdoctormod40;?>" placeholder="Languages Spoken" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lgdoctormod41" value="<?php echo $lgdoctormod41;?>" placeholder="Insurance" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Office Address</label>
                            <input type="text" name="lgdoctormod42" value="<?php echo $lgdoctormod42;?>" placeholder="Office Address" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Office Country</label>
                            <input type="text" name="lgdoctormod43" value="<?php echo $lgdoctormod43;?>" placeholder="Office Country" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select country</label>
                            <input type="text" name="lgdoctormod44" value="<?php echo $lgdoctormod44;?>" placeholder="Select country" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select state</label>
                            <input type="text" name="lgdoctormodalso" value="<?php echo $lgdoctormodalso;?>" placeholder="Select state" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select city</label>
                            <input type="text" name="lgdoctormod45" value="<?php echo $lgdoctormod45;?>" placeholder="Select city" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">if your country not found</label>
                            <input type="text" name="lgdoctormod46" value="<?php echo $lgdoctormod46;?>" placeholder="f your country not found" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">if your state not found</label>
                            <input type="text" name="lgdoctormod47" value="<?php echo $lgdoctormod47;?>" placeholder="if your state not found" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">if your city not found</label>
                            <input type="text" name="lgdoctormod48" value="<?php echo $lgdoctormod48;?>" placeholder="if your city not found" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>  
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Please Click here to add country </label>
                            <input type="text" name="lgdoctormod49" value="<?php echo $lgdoctormod49;?>" placeholder="Please Click here to add country " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Please Click here to add state </label>
                            <input type="text" name="lgdoctormod50" value="<?php echo $lgdoctormod50;?>" placeholder="Please Click here to add state " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Please Click here to add city </label>
                            <input type="text" name="lgdoctormod51" value="<?php echo $lgdoctormod51;?>" placeholder="Please Click here to add city " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Pick from map</label>
                            <input type="text" name="lgdoctormod52" value="<?php echo $lgdoctormod52;?>" placeholder="Pick from map" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Longitude</label>
                            <input type="text" name="lgdoctormod53" value="<?php echo $lgdoctormod53;?>" placeholder="Longitude" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Latitude</label>
                            <input type="text" name="lgdoctormod54" value="<?php echo $lgdoctormod54;?>" placeholder="Latitude" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Experience</label>
                            <input type="text" name="lgdoctormod55" value="<?php echo $lgdoctormod55;?>" placeholder="Experience" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About Yourself (This will be displayed to patient)</label>
                            <input type="text" name="lgdoctormod56" value="<?php echo $lgdoctormod56;?>" placeholder="About Yourself (This will be displayed to patient)" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About yourself</label>
                            <input type="text" name="lgdoctormod57" value="<?php echo $lgdoctormod57;?>" placeholder="About yourself" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 						 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Current Pasword</label>
                            <input type="text" name="lgdoctormod59" value="<?php echo $lgdoctormod59;?>" placeholder="Current Pasword" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">New Pssword</label>
                            <input type="text" name="lgdoctormod60" value="<?php echo $lgdoctormod60;?>" placeholder="New Pssword" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Re-type New Password</label>
                            <input type="text" name="lgdoctormod61" value="<?php echo $lgdoctormod61;?>" placeholder="Re-type New Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">The Password Advice</label>
                            <input type="text" name="lgdoctormod62" value="<?php echo $lgdoctormod62;?>" placeholder="The Password Advice" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Has 12 Characters, Minimum</label>
                            <input type="text" name="lgdoctormod63" value="<?php echo $lgdoctormod63;?>" placeholder="Has 12 Characters, Minimum" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Includes Numbers and Symbols</label>
                            <input type="text" name="lgdoctormod64" value="<?php echo $lgdoctormod64;?>" placeholder="Includes Numbers and Symbols" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business name</label>
                            <input type="text" name="lgdoctormod65" value="<?php echo $lgdoctormod65;?>" placeholder="Business name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business description</label>
                            <input type="text" name="lgdoctormod66" value="<?php echo $lgdoctormod66;?>" placeholder="Business description" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="lgdoctormod67" value="<?php echo $lgdoctormod67;?>" placeholder="Location" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Working hours</label>
                            <input type="text" name="lgdoctormod68" value="<?php echo $lgdoctormod68;?>" placeholder="Working hours" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" name="lgdoctormod69" value="<?php echo $lgdoctormod69;?>" placeholder="Phone Number" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Link to all social media accounts</label>
                            <input type="text" name="lgdoctormod70" value="<?php echo $lgdoctormod70;?>" placeholder="Link to all social media accounts" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Website link (touch enabled)</label>
                            <input type="text" name="lgdoctormod71" value="<?php echo $lgdoctormod71;?>" placeholder="Website link (touch enabled)" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Business Email (touch enabled)</label>
                            <input type="text" name="lgdoctormod72" value="<?php echo $lgdoctormod72;?>" placeholder="Business Email (touch enabled)" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Package</label>
                            <input type="text" name="lgdoctormod73" value="<?php echo $lgdoctormod73;?>" placeholder="Select Package" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Alert Message</label>
                            <input type="text" name="lgdoctormod74" value="<?php echo $lgdoctormod74;?>" placeholder="Alert Message" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Message1</label>
                            <textarea name="lgdoctormod75"  class="form-control required regcom" >							
							<?php echo $lgdoctormod75;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Message 2</label>
                            <textarea name="lgdoctormod76"  class="form-control required regcom" >							
							<?php echo $lgdoctormod76;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Message 3</label>
                            <textarea name="lgdoctormod77" class="form-control required regcom" >							
							<?php echo $lgdoctormod77;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="text" name="lgdoctormod78" value="<?php echo $lgdoctormod78;?>" placeholder="Age" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Breaks</label>
                            <input type="text" name="lgdoctormod79" value="<?php echo $lgdoctormod79;?>" placeholder="Breaks" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Vacation</label>
                            <input type="text" name="lgdoctormod80" value="<?php echo $lgdoctormod80;?>" placeholder="Vacation" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Affiliation</label>
                            <input type="text" name="lgdoctormod81" value="<?php echo $lgdoctormod81;?>" placeholder="Affiliation" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Office Zip</label>
                            <input type="text" name="lgdoctormod82" value="<?php echo $lgdoctormod82;?>" placeholder=" Office Zip" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Select Your office Country</label>
                            <input type="text" name="lgdoctormod83" value="<?php echo $lgdoctormod83;?>" placeholder="Select Your office Country" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Select Your office state</label>
                            <input type="text" name="lgdoctormod84" value="<?php echo $lgdoctormod84;?>" placeholder="Select Your office state" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Add</label>
                            <input type="text" name="lgdoctormod85" value="<?php echo $lgdoctormod85;?>" placeholder="Add" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Your state</label>
                            <input type="text" name="lgdoctormod86" value="<?php echo $lgdoctormod86;?>" placeholder="Add Your state" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Your Country</label>
                            <input type="text" name="lgdoctormod87" value="<?php echo $lgdoctormod87;?>" placeholder="Add Your Country" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Add Your office city</label>
                            <input type="text" name="lgdoctormod88" value="<?php echo $lgdoctormod88;?>" placeholder="Add Your office city" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 		
						  
						  
						  
						  
				   </div>
				   
				  </div>
                
            </div>
			
			<div class="box">
				 <div class="box-header with-border">
                  <h3 class="box-title">Welcome Hospitals Translation</h3>
				</div>
				 <div class="box-body">
				   <div class="col-md-12">
				   	   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Dashboard Menu</label>
                            <input type="text" name="lghosmod1" value="<?php echo $lghosmod1;?>" placeholder="Dashboard Menu" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">My listings(Manage)</label>
                            <input type="text" name="lghosmod2" value="<?php echo $lghosmod2;?>" placeholder="My listings(Manage)" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Listing</label>
                            <input type="text" name="lghosmod3" value="<?php echo $lghosmod3;?>" placeholder="Add Listing" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment</label>
                            <input type="text" name="lghosmod4" value="<?php echo $lghosmod4;?>" placeholder="Appointment" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Past Appointments</label>
                            <input type="text" name="lghosmod5" value="<?php echo $lghosmod5;?>" placeholder="Past Appointments" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Location Settings</label>
                            <input type="text" name="lghosmod6" value="<?php echo $lghosmod6;?>" placeholder="Location Settings" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update Features</label>
                            <input type="text" name="lghosmod7" value="<?php echo $lghosmod7;?>" placeholder="Update Features" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Gallery</label>
                            <input type="text" name="lghosmod8" value="<?php echo $lghosmod8;?>" placeholder="Add Gallery" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Settings</label>
                            <input type="text" name="lghosmod9" value="<?php echo $lghosmod9;?>" placeholder="Settings" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Packages</label>
                            <input type="text" name="lghosmod10" value="<?php echo $lghosmod10;?>" placeholder="Packages" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospitals under </label>
                            <input type="text" name="lghosmod11" value="<?php echo $lghosmod11;?>" placeholder="Hospitals under " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Clinics under </label>
                            <input type="text" name="lghosmod12" value="<?php echo $lghosmod12;?>" placeholder="Clinics under " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Centers under </label>
                            <input type="text" name="lghosmod13" value="<?php echo $lghosmod13;?>" placeholder="Medical Centers under " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Edit</label>
                            <input type="text" name="lghosmod14" value="<?php echo $lghosmod14;?>" placeholder="Edit" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Published</label>
                            <input type="text" name="lghosmod15" value="<?php echo $lghosmod15;?>" placeholder="Published" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hits</label>
                            <input type="text" name="lghosmod16" value="<?php echo $lghosmod16;?>" placeholder="Hits" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Remove</label>
                            <input type="text" name="lghosmod17" value="<?php echo $lghosmod17;?>" placeholder="Remove" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div><div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Hospital</label>
                            <input type="text" name="lghosmod18" value="<?php echo $lghosmod18;?>" placeholder="Add Hospital" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Browse Photo</label>
                            <input type="text" name="lghosmod19" value="<?php echo $lghosmod19;?>" placeholder="Browse Photo" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital Name</label>
                            <input type="text" name="lghosmod20" value="<?php echo $lghosmod20;?>" placeholder="Hospital Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lghosmod21" value="<?php echo $lghosmod21;?>" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div><div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" name="lghosmod22" value="<?php echo $lghosmod22;?>" placeholder="Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div><div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Established in</label>
                            <input type="text" name="lghosmod23" value="<?php echo $lghosmod23;?>" placeholder="Established in" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Zip Code</label>
                            <input type="text" name="lghosmod24" value="<?php echo $lghosmod24;?>" placeholder="Zip Code" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="text" name="lghosmod25" value="<?php echo $lghosmod25;?>" placeholder="Website" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="lghosmod26" value="<?php echo $lghosmod26;?>" placeholder="Phone" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Country</label>
                            <input type="text" name="lghosmod27" value="<?php echo $lghosmod27;?>" placeholder="Country" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div><div class="form-group has-feedback">
                            <label for="exampleInputEmail1">state</label>
                            <input type="text" name="lghosmod28" value="<?php echo $lghosmod28;?>" placeholder="state" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div><div class="form-group has-feedback">
                            <label for="exampleInputEmail1">city</label>
                            <input type="text" name="lghosmod29" value="<?php echo $lghosmod29;?>" placeholder="city" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div><div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="text" name="lghosmod30" value="<?php echo $lghosmod30;?>" placeholder="Website" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="lghosmod31" value="<?php echo $lghosmod31;?>" placeholder="Address" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Latitude</label>
                            <input type="text" name="lghosmod32" value="<?php echo $lghosmod32;?>" placeholder="Latitude" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Longitude</label>
                            <input type="text" name="lghosmod33" value="<?php echo $lghosmod33;?>" placeholder="Longitude" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">If your state not found Use location settings to add your state </label>
                            <input type="text" name="lghosmod34" value="<?php echo $lghosmod34;?>" placeholder="If your state not found Use location settings to add your state " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">If your country not found .Use location settings to add your country</label>
                            <input type="text" name="lghosmod35" value="<?php echo $lghosmod35;?>" placeholder="If your country not found .Use location settings to add your country" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">If your city not found . Use location settings to add your city </label>
                            <input type="text" name="lghosmod36" value="<?php echo $lghosmod36;?>" placeholder="If your city not found . Use location settings to add your city " class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Pick from map</label>
                            <input type="text" name="lghosmod37" value="<?php echo $lghosmod37;?>" placeholder="Pick from map" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add</label>
                            <input type="text" name="lghosmod38" value="<?php echo $lghosmod38;?>" placeholder="Add" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Edit</label>
                            <input type="text" name="lghosmod39" value="<?php echo $lghosmod39;?>" placeholder="Edit" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Firstname</label>
                            <input type="text" name="lghosmod40" value="<?php echo $lghosmod40;?>" placeholder="Doctor Firstname" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Lastname</label>
                            <input type="text" name="lghosmod41" value="<?php echo $lghosmod41;?>" placeholder="Doctor Lastname" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder:Doctor Firstname</label>
                            <input type="text" name="lghosmod42" value="<?php echo $lghosmod42;?>" placeholder="Doctor Lastname" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder :Doctor Lastname</label>
                            <input type="text" name="lghosmod43" value="<?php echo $lghosmod43;?>" placeholder="Doctor Lastname" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Hospital Name</label>
                            <input type="text" name="lghosmod44" value="<?php echo $lghosmod44;?>" placeholder="Hospital Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div><div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Email</label>
                            <input type="text" name="lghosmod45" value="<?php echo $lghosmod45;?>" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Email</label>
                            <input type="text" name="lghosmod49" value="<?php echo $lghosmod49;?>" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: YYYY/MM/DD</label>
                            <input type="text" name="lghosmod46" value="<?php echo $lghosmod46;?>" placeholder="YYYY/MM/DD" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder: Zipcode</label>
                            <input type="text" name="lghosmod47" value="<?php echo $lghosmod47;?>" placeholder="Doctor Lastname" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
							<div class="form-group has-feedback">
                            <label for="exampleInputEmail1"> Hospital Name</label>
                            <input type="text" name="lghosmod48" value="<?php echo $lghosmod48;?>" placeholder="Hospital Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Placeholder address</label>
                            <input type="text" name="lghosmod51" value="<?php echo $lghosmod51;?>" placeholder="address" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Doctor Name</label>
                            <input type="text" name="lghosmod52" value="<?php echo $lghosmod52;?>" placeholder="Doctor Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Total Appointments</label>
                            <input type="text" name="lghosmod53" value="<?php echo $lghosmod53;?>" placeholder="Total Appointments" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appointment Upto</label>
                            <input type="text" name="lghosmod54" value="<?php echo $lghosmod54;?>" placeholder="Appointment Upto" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Download</label>
                            <input type="text" name="lghosmod55" value="<?php echo $lghosmod55;?>" placeholder="Download" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Office City</label>
                            <input type="text" name="lghosmod56" value="<?php echo $lghosmod56;?>" placeholder="Add Office City" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Office State</label>
                            <input type="text" name="lghosmod57" value="<?php echo $lghosmod57;?>" placeholder="Add Office State" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Office Country</label>
                            <input type="text" name="lghosmod58" value="<?php echo $lghosmod58;?>" placeholder="Add Office Country" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add country</label>
                            <input type="text" name="lghosmod59" value="<?php echo $lghosmod59;?>" placeholder="Add country" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add state</label>
                            <input type="text" name="lghosmod60" value="<?php echo $lghosmod60;?>" placeholder="Add state" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add city</label>
                            <input type="text" name="lghosmod61" value="<?php echo $lghosmod61;?>" placeholder="Add city" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Affiliations</label>
                            <input type="text" name="lghosmod61another" value="<?php echo $lghosmod61another;?>" placeholder="Affiliations" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Amenities</label>
                            <input type="text" name="lghosmod62" value="<?php echo $lghosmod62;?>" placeholder="Amenities" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Languages</label>
                            <input type="text" name="lghosmod63" value="<?php echo $lghosmod63;?>" placeholder="Languages" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialty</label>
                            <input type="text" name="lghosmod64" value="<?php echo $lghosmod64;?>" placeholder="Specialty" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lghosmod65" value="<?php echo $lghosmod65;?>" placeholder="Insurance" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Visitation</label>
                            <input type="text" name="lghosmod66" value="<?php echo $lghosmod66;?>" placeholder="Visitation" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">add gallery images</label>
                            <input type="text" name="lghosmod67" value="<?php echo $lghosmod67;?>" placeholder="add gallery images" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">profile settings</label>
                            <input type="text" name="lghosmod68" value="<?php echo $lghosmod68;?>" placeholder="profile settings" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">change security</label>
                            <input type="text" name="lghosmod69" value="<?php echo $lghosmod69;?>" placeholder="change security" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Hospital</label>
                            <input type="text" name="lghosmod70" value="<?php echo $lghosmod70;?>" placeholder="Hospital" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="text" name="lghosmod71" value="<?php echo $lghosmod71;?>" placeholder="Website" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Website placeholder</label>
                            <input type="text" name="lghosmod72" value="<?php echo $lghosmod72;?>" placeholder="Website" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="lghosmod73" value="<?php echo $lghosmod73;?>" placeholder="Phone" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Phone placeholder</label>
                            <input type="text" name="lghosmod74" value="<?php echo $lghosmod74;?>" placeholder="Phone" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">PO BOX</label>
                            <input type="text" name="lghosmod75" value="<?php echo $lghosmod75;?>" placeholder="PO BOX" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">about</label>
                            <input type="text" name="lghosmod76" value="<?php echo $lghosmod76;?>" placeholder="about" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Memberships</label>
                            <input type="text" name="lghosmod77" value="<?php echo $lghosmod77;?>" placeholder="Memberships" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Memberships awards</label>
                            <input type="text" name="lghosmod78" value="<?php echo $lghosmod78;?>" placeholder="Memberships awards" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Update</label>
                            <input type="text" name="lghosmod79" value="<?php echo $lghosmod79;?>" placeholder="Update" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="lghosmod80" value="<?php echo $lghosmod80;?>" placeholder="Email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Current Password</label>
                            <input type="text" name="lghosmod81" value="<?php echo $lghosmod81;?>" placeholder="Current Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">New Password</label>
                            <input type="text" name="lghosmod82" value="<?php echo $lghosmod82;?>" placeholder="New Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Confirm New Pasword</label>
                            <input type="text" name="lghosmod83" value="<?php echo $lghosmod83;?>" placeholder="Update" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Email placeholder</label>
                            <input type="text" name="lghosmod84" value="<?php echo $lghosmod84;?>" placeholder="email" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Current Password placeholder</label>
                            <input type="text" name="lghosmod85" value="<?php echo $lghosmod85;?>" placeholder="current password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Confirm New Pasword placeholder</label>
                            <input type="text" name="lghosmod86" value="<?php echo $lghosmod86;?>" placeholder="Confirm New Pasword" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">New Password placeholder</label>
                            <input type="text" name="lghosmod87" value="<?php echo $lghosmod87;?>" placeholder="New Password" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">choose package</label>
                            <input type="text" name="lghosmod88" value="<?php echo $lghosmod88;?>" placeholder="choose package" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Package</label>
                            <input type="text" name="lghosmod89" value="<?php echo $lghosmod89;?>" placeholder="Select Package" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Patient Name</label>
                            <input type="text" name="lghosmod90" value="<?php echo $lghosmod90;?>" placeholder="Patient Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appt Date</label>
                            <input type="text" name="lghosmod91" value="<?php echo $lghosmod91;?>" placeholder="Appt Date" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Appt Time</label>
                            <input type="text" name="lghosmod92" value="<?php echo $lghosmod92;?>" placeholder="Appt Time" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign out</label>
                            <input type="text" name="lghosmod93" value="<?php echo $lghosmod93;?>" placeholder="Sign out" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Save</label>
                            <input type="text" name="lghosmod94" value="<?php echo $lghosmod94;?>" placeholder="Save" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Doctor</label>
                            <input type="text" name="lghosmod95" value="<?php echo $lghosmod95;?>" placeholder="Add Doctor" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add New Hospital</label>
                            <input type="text" name="lghosmod96" value="<?php echo $lghosmod96;?>" placeholder="Add New Hospital" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View Hospitals</label>
                            <input type="text" name="lghosmod97" value="<?php echo $lghosmod97;?>" placeholder="View Hospitals" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About</label>
                            <input type="text" name="lghosmod98" value="<?php echo $lghosmod98;?>" placeholder="About" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add New Doctor</label>
                            <input type="text" name="lghosmod99" value="<?php echo $lghosmod99;?>" placeholder="Add New Doctor" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View Doctors</label>
                            <input type="text" name="lghosmod100" value="<?php echo $lghosmod100;?>" placeholder="View Doctors" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Alert Message</label>
                            <input type="text" name="lghosmod101" value="<?php echo $lghosmod101;?>" placeholder="Alert Message" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Message 1</label>
                            <textarea name="lghosmod102"  class="form-control required regcom" >							
							<?php echo $lghosmod102;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Message 2</label>
                            <textarea name="lghosmod103"  class="form-control required regcom" >							
							<?php echo $lghosmod103;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Message 3</label>
                            <textarea name="lghosmod104" class="form-control required regcom" >							
							<?php echo $lghosmod104;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Message 4</label>
                            <textarea name="lghosmod105"  class="form-control required regcom" >							
							<?php echo $lghosmod105;?>
							</textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Clinic Name</label>
                            <input type="text" name="lghosmod106" value="<?php echo $lghosmod106;?>" placeholder="Clinic Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Medical Center Name</label>
                            <input type="text" name="lghosmod107" value="<?php echo $lghosmod107;?>" placeholder="Medical Center Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Clinic</label>
                            <input type="text" name="lghosmod108" value="<?php echo $lghosmod108;?>" placeholder="Add Clinic" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add Medical Center</label>
                            <input type="text" name="lghosmod109" value="<?php echo $lghosmod109;?>" placeholder="Medical Center Name" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add New Clinic</label>
                            <input type="text" name="lghosmod110" value="<?php echo $lghosmod110;?>" placeholder="Add New Clinic" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View Clinics</label>
                            <input type="text" name="lghosmod111" value="<?php echo $lghosmod111;?>" placeholder="View Clinics" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Add New Medical</label>
                            <input type="text" name="lghosmod112" value="<?php echo $lghosmod112;?>" placeholder="Add New Medical" class="form-control required regcom" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View Medicals</label>
                            <input type="text" name="lghosmod113" value="<?php echo $lghosmod113;?>" placeholder="View Medicals" class="form-control required regcom" >
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
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pace.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/js/select2.full.min.js"></script>
    
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
    
    <!-- FastClick 
    <script src="../../plugins/fastclick/fastclick.min.js"></script>-->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/custom-script.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.colorbox-min.js"></script>
    	
	<script src="<?php echo base_url(); ?>assets/js/backend-script.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/charisma.js"></script>
    <!-- CK Editor -->
	 <script src="<?php echo base_url(); ?>assets/js/config.js"></script>
	 <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
	 
	 
	<script src="<?php echo base_url(); ?>assets/js/input-mask/jquery.inputmask.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/input-mask/jquery.inputmask.extensions.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/jquery.timepicker.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/jquery.timepicker.js"></script>
	
	<!--<script src="http://192.168.138.31/arun/thiago/assets/js/config.js"></script>-->
	<!--<script src="http://192.168.138.31/Immanuel/BMD/CI-admin-structure-adminLTE/assets/js/config.js"></script>-->
	
		
	<!--[validation js]-->
		
		<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
	<!--time picker-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-timepicker.min.js"></script>
	
	<script src="<?php echo base_url();?>assets/js/parsley.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
	   
						   
// $('.regcom').on('change', function (){
// var a = $(this).val();
// if(a != '') {
// $(this).removeClass('error-admin');

// } else {
// $(this).addClass('error-admin');
// return false;
// }
 // });						   
// $(".sample").on("keydown", function (e) {
        // return e.which !== 32;
	    // });  
	
        // $('.regcom').keyup(function()
	     // {
			// var yourInput = $(this).val();
			// re = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
			// var isSplChar = re.test(yourInput);
			// if(isSplChar)
			// {
				// var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
				// $(this).val(no_spl_char);
			// }
		// });							   
						   
 $("#useradd").click(function(e){
	 var id = $('#id').val();
var data = {};
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
				var name = $(this).attr('name');
				data[name] = $(this).val();
            }
			
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		data['id'] = id;
		//alert(JSON.stringify(data_new));
		//return false;
		$data = JSON.stringify(data);

		 if (isValid == false) {
            e.preventDefault();
		 }
        else {
            
	          var value =$("#taxi_reg").serialize() ;

$.ajax({
url:'<?php echo base_url();?>Language_translation/insert_language',
type: 'post',
dataType: 'json',
data:JSON.stringify(data),
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
//setTimeout(function(){$(".edituser").hide(); }, 1500);
//$('#taxi_reg')[0].reset();
}
}
}); 
		}
	            
                                       
 
});
});

</script>
	 