<?php 
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;		
	$cal_date = str_replace('%20','-',$this->uri->segment(4));
	$cal_time = str_replace('%20','-',$this->uri->segment(5));
?>
<style>
.disabledbutton {
    pointer-events: none;
    opacity: 0.4;
}
</style>
<input type="hidden" id="cal_date" value="<?php echo $cal_date;?> ">
<input type="hidden" id="cal_time" value="<?php echo $cal_time;?> ">
<input type="hidden" id="doctor_id" value="<?php echo $this->uri->segment(3);?> ">
	<div class="container-fluid ">
		<?php
		if($this->session->flashdata('messagebookdoc')) {
		$messagebookdoc = $this->session->flashdata('messagebookdoc');
		?>
		<div class="alert alert-<?php echo $messagebookdoc['class']; ?>">
			<button class="close" data-dismiss="alert" type="button">×</button>
			<?php echo $messagebookdoc['messagebookdoc']; ?>
		</div>
		<?php }	?>
		<div class="tab-cnt-search">
			<div class="container">
				<div class="col-lg-offset-2 col-lg-8">
					<ul class="nav nav-tabs  nav-tb tab-online">
						<li class="active" id="menuspatinitial">
							<a data-toggle="tab" href="#homes">
							<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/n-1.png" /> </span></h5>
							<h4><?php if($this->lang->line('booking_A31')){ ?><?php echo $this->lang->line('booking_A31'); }else{ ?>Appointment<?php } ?></h4></a>
						</li>
						<li class="patdetailsbooking"><a data-toggle="tab" href="#menus1" id="menuspat1">
							<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/n-2.png" /> </span></h5>
							<h4><?php if($this->lang->line('booking_A34')){ ?><?php echo $this->lang->line('booking_A34'); }else{ ?>Patient Details<?php } ?></h4></a>
						</li>
						<li><a data-toggle="tab" href="#menus2" id="menuspat2">
							<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/n-3.png" /></h5> </span>
							<h4><?php if($this->lang->line('booking_A33')){ ?><?php echo $this->lang->line('booking_A33'); }else{ ?>Check-In Details<?php } ?></h4></a></li>
						<li><a data-toggle="tab" href="#menus3" id="menuspat3">
							<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/n-4.png" /></h5> </span>
							<h4><?php if($this->lang->line('booking_A51')){ ?><?php echo $this->lang->line('booking_A51'); }else{ ?> Finished<?php } ?></h4></a></li>
					</ul>
				</div>
			</div>
			<div class="container-fluid tab-fluid" style="border-top:none;">
				<div class="container">
					<div class="tab-content tb-patient">
						<div id="homes" class="tab-pane fade in active">
							<div class="row">
								<div class="col-lg-offset-1 col-lg-11">
									<div class="col-lg-6 br-patient-1">
										<div class="left-events left-img-ph">
											<?php if($book_doctor->display_image != ""){ ?>
											<img src= "<?php echo base_url().'admin/'.$book_doctor->display_image;?>" /> 
											<?php }else{ ?>
											<img src="<?php echo base_url(); ?>assets/images/home/man.png">
											<?php  }?>
										</div>
										<div class="left-events">
											<h5><?php if($this->lang->line('booking_A1')){ ?><?php echo $this->lang->line('booking_A1'); }else{ ?>Dr.<?php } ?> <?php echo $book_doctor->doctor_firstname; ?> <?php echo $book_doctor->doctor_lastname;?></h5>
											<div class="gc-ratting" data-rate="<?php echo $book_doctor->avg_rating; ?>" ></div> 
											<div class="pt-ent">
												<div class="row">
													<div class="col-lg-1">
														<img src="<?php echo  base_url(); ?>assets/images/patient-login/13.png" />
													</div>
													<div class="col-lg-4">
														<h6><?php echo $book_doctor->doctor_office_address; ?>, <?php echo $book_doctor->city_name; ?>,<?php echo $book_doctor->state_name; ?>, <?php echo $book_doctor->country_name; ?> <?php echo $book_doctor->doctor_office_zip; ?></h6>
													</div>
												</div>
											</div>
											<div class="appointment">
												<h4><?php if($this->lang->line('booking_A2')){ ?><?php echo $this->lang->line('booking_A2'); }else{ ?>Appointment time<?php } ?></h4>
												<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/calender.png" /> </span> <?php echo $cal_date;?></h5>
												<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/clock.png" /> </span><?php echo $cal_time;?></h5>
											</div>
										</div>
									</div>
									<div class="col-lg-6 br-pad">
										<div class="patient-info">
											<h4><?php if($this->lang->line('booking_A3')){ ?><?php echo $this->lang->line('booking_A3'); }else{ ?>Patient Registration<?php } ?></h4>							   
											<div class="row">
												<div class="errormsgpat"></div>							   
												<?php if ($this->session->userdata('frontend_logged_in')){
												if($this->session->userdata('super_person') == 0){ 
												$id=$this->session->userdata['frontend_logged_in']['id']; ?>
												<div class="col-lg-8">
													<form  role="form"  action="" id="formpatreg"   data-parsley-validate="" class="validate" enctype="multipart/form-data">
														<input type="hidden" value="<?php echo $id;?>" id="log-id">
														<div class="form-group">
															<label for="exampleSelect1"><?php if($this->lang->line('booking_A4')){ ?><?php echo $this->lang->line('booking_A4'); }else{ ?>Insurance<?php } ?></label>
															<select name="insurance" id="insuranceapp" required="" class="form-control" id="bkinsurance"  >
																<option selected="selected" value=""><?php if($this->lang->line('booking_A5')){ ?><?php echo $this->lang->line('booking_A5'); }else{ ?>Insurance<?php } ?></option>
																<?php foreach($insurance as $row_insurance){  ?>
																<option value="<?php echo $row_insurance->id;?>"><?php echo $row_insurance->insurance_name;?></option>
																<?php  }   ?>
															</select>
														</div>
														<div class="form-group">
															<label for="exampleSelect1"><?php if($this->lang->line('booking_A6')){ ?><?php echo $this->lang->line('booking_A6'); }else{ ?>What's the reason for your visit?<?php } ?></label>
															<select name="visitation" id="visitationapp" required="" class="form-control" id="bkvisitation"  >
																<option selected="selected" value=""><?php if($this->lang->line('booking_A7')){ ?><?php echo $this->lang->line('booking_A7'); }else{ ?>Visitation<?php } ?></option>
																<?php foreach($visitation as $row_visitation){  ?>
																<option value="<?php echo $row_visitation->id;?>"><?php echo $row_visitation->reason;?></option>
																<?php }   ?>
															</select>
														</div>										   
														<div class="form-group">
														</div>
													</form>
													<div class="pat-continue-reg">
														<h4><button type="submit"   class="btn btn-default btn-continue pat-continue"><?php if($this->lang->line('booking_A8')){ ?><?php echo $this->lang->line('booking_A8'); }else{ ?>Click Here To Continue<?php } ?></button></h4>
													</div>
												</div>										 
												<?php }else{ ?>
												<h3><?php if($this->lang->line('booking_A36')){ ?><?php echo $this->lang->line('booking_A36'); }else{ ?>Please Login as patient to continue . Only patients can book appointment. <?php } ?></h3> </br>
												<?php  } }?>
												<?php if (!$this->session->userdata('frontend_logged_in')){ ?>   
												<div class="col-lg-8">
													<label for="exampleInputPassword1"><?php if($this->lang->line('booking_A37')){ ?><?php echo $this->lang->line('booking_A37'); }else{ ?>Check New / Existing Account<?php } ?></label>
													<div class="form-group">									 
														<input type="radio"  name="check" class="newdocchecker1" > <label for="exampleSelect1"><?php if($this->lang->line('booking_A38')){ ?><?php echo $this->lang->line('booking_A38'); }else{ ?>I'm New to Bookmydoc<?php } ?></label></br>
														<input type="radio"  name="check" class="newdocchecker2" > <label for="exampleSelect1"><?php if($this->lang->line('booking_A39')){ ?><?php echo $this->lang->line('booking_A39'); }else{ ?>I've used Bookmydoc Before<?php } ?></label>
													</div>
												</div><?php } ?>
												<div class="col-lg-8">
													<div class="newdoccheckin" >
														<div class="errormsg1"></div>
															<form  role="form"  action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
																<input type="hidden" name="status" value="1" >
																<div class="form-group">
																	<label for="exampleInputPassword1"><?php if($this->lang->line('booking_A40')){ ?><?php echo $this->lang->line('booking_A40'); }else{ ?>First Name<?php } ?></label>
																	<input type="text" name="patient_firstname" class="form-control" id="bkfname" data-parsley-pattern="^[a-zA-Z\  \/]+$" placeholder="<?php if($lgbookingmod7){ echo $lgbookingmod7; }else { echo "enter firstname"; }?>" data-parsley-minlength="3" data-parsley-maxlength="25"required =" ">
																</div>
																<div class="form-group">
																	<label for="exampleInputPassword1"><?php if($this->lang->line('booking_A52')){ ?><?php echo $this->lang->line('booking_A52'); }else{ ?>Last Name<?php } ?></label>
																	<input type="text" name="patient_lastname" class="form-control" id="bklname" data-parsley-pattern="^[a-zA-Z\  \/]+$" placeholder="<?php if($lgbookingmod8){ echo $lgbookingmod8; }else { echo "enter firstname"; }?>" data-parsley-minlength="3" data-parsley-maxlength="25"required =" ">
																</div>
																<div class="form-group">
																	<label for="exampleInputPassword1"><?php if($this->lang->line('booking_A41')){ ?><?php echo $this->lang->line('booking_A41'); }else{ ?>Email<?php } ?></label>
																	<input type="text" name="email" class="form-control" id="bkemail" data-parsley-trigger="change" data-parsley-type="email" required="">
																</div>
																<div class="form-group">
																	<label for="exampleInputPassword1"><?php if($this->lang->line('booking_A42')){ ?><?php echo $this->lang->line('booking_A42'); }else{ ?>Create a Password<?php } ?></label>
																	<input type="password" name="password" class="form-control" id="bkpassword" data-parsley-minlength="6" required="">
																</div>                                                 
																<div class="form-group">
																	<label for="exampleInputPassword1"><?php if($this->lang->line('booking_A43')){ ?><?php echo $this->lang->line('booking_A43'); }else{ ?>Sex<?php } ?></label>
																	<div class="radio">
																		<label><input type="radio" value="male" name="patient_sex" id="bksex" required=""><?php if($this->lang->line('booking_A44')){ ?><?php echo $this->lang->line('booking_A44'); }else{ ?>Male<?php } ?></label>
																	</div>
																	<div class="radio">
																		<label><input type="radio" id="bksex" value="female" name="patient_sex" required=""><?php if($this->lang->line('booking_A45')){ ?><?php echo $this->lang->line('booking_A45'); }else{ ?>Female<?php } ?></label>
																	</div>
																</div>
																<div class="clearfix"></div>                             
																<div class="form-group">                              
																	<div class="checkbox">
																		<label><input type="checkbox" value="agreed" id="bkterms" name="terms" required><?php if($this->lang->line('booking_A46')){ ?><?php echo $this->lang->line('booking_A46'); }else{ ?>I Agree to the Terms and Conditions<?php } ?></label>
																	</div>
																</div>
																<div class="form-group">
																	<h4> <button type="submit" value="formdocsignup" name="formdocsignup"  class="btn btn-default btn-continue btn-continue-signupbook"><?php if($lgbookingmod16){ echo $lgbookingmod16; }else { ?>Signup to continue<?php } ?></button></h4>
																</div>
															</form>
														</div>
														<div class="newdoccheckout" >
															<div class="errormsg2p"></div>
															<form id="formdocsignin" role="form"  action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
																<div class="form-group">
																	<div class="col-lg-12">
																		<label for="email"><?php if($this->lang->line('booking_A48')){ ?><?php echo $this->lang->line('booking_A48'); }else{ ?>Email<?php } ?></label>
																		<input type="email" name="email" class="form-control" id="email-booking" placeholder="<?php if($lgbookingmod7){ echo $lgbookingmod7; }else { echo "enter email"; }?>" data-parsley-trigger="change" data-parsley-type="email" required="">
																	</div>
																</div>
																<div class="form-group">
																	<div class="col-lg-12">
																		<label for="password"><?php if($this->lang->line('booking_A53')){ ?><?php echo $this->lang->line('booking_A53'); }else{ ?>Password<?php } ?></label>
																		<input type="password" name="password" class="form-control" id="password-booking" placeholder="<?php if($lgbookingmod21){ echo $lgbookingmod21; }else { echo "enter password"; }?>" data-parsley-minlength="6" required="">
																	</div>
																</div>
																<div class="form-group">
																	<div class="col-lg-12">
																		<div class="forget-pass">                   
																			<h4><button type="submit" name="formdocsignin"  class=" btn btn-default btn-continue log-in-a formdocsignin"><?php if($this->lang->line('booking_A49')){ ?><?php echo $this->lang->line('booking_A49'); }else{ ?>Signin to continue<?php } ?></button></h4>
																		</div>
																	</div>
																</div>
															</form>
														</div>									
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<h5 class="pad-center"><img src="<?php echo base_url(); ?>assets/images/patient-login/clock.png" src="img/patient-login/tick.png"/> </h5>
									</div>
								</div>
							</div>
							<div id="menus1" class="tab-pane fade">
								<div class="row ">
									<div class="col-lg-offset-1 col-lg-11 menus1up">
										<div class="col-lg-6 br-patient-1 menus1down">
											<div class="left-events left-img-ph">
												<?php if($book_doctor->display_image != ""){ ?>
												<img src= "<?php echo base_url().'admin/'.$book_doctor->display_image;?>" /> 
												<?php }else{ ?>
												<img src="<?php echo base_url(); ?>assets/images/home/man.png">
												<?php  }?>
											</div>
											<div class="left-events">
												<h5>Dr. <?php echo $book_doctor->doctor_firstname; ?> <?php echo $book_doctor->doctor_lastname;?></h5>
												<div class="gc-ratting" data-rate="<?php echo $book_doctor->avg_rating; ?>" ></div>
												<div class="pt-ent">
													<div class="row">
														<div class="col-lg-1">
															<img src="<?php echo base_url(); ?>assets/images/patient-login/13.png" />
														</div>
														<div class="col-lg-4">
															<h6><?php echo $book_doctor->doctor_office_address; ?>, <?php echo $book_doctor->city_name; ?>,<?php echo $book_doctor->state_name; ?>, <?php echo $book_doctor->country_name; ?> <?php echo $book_doctor->doctor_office_zip; ?></h6>
														</div>
													</div>
												</div>
												<div class="appointment">
													<h4><?php if($this->lang->line('booking_A50')){ ?><?php echo $this->lang->line('booking_A50'); }else{ ?>Appointment time<?php } ?></h4>
													<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/calender.png" /> </span> <?php echo $cal_date;?></h5>
													<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/clock.png" /> </span><?php echo $cal_time;?></h5>
												</div>
											</div>
										</div>
										<?php $date_cal= $this->uri->segment(4);
											$cal_date = str_replace('%20','-',$this->uri->segment(4));
											$cal_time = str_replace('%20','-',$this->uri->segment(5));
											$arrdate = explode("%20",$date_cal);
											$arrtime = explode("-",$cal_time);
											$futureDate =$arrdate[1]. ' ' .$arrtime[0]. ' ' .$arrtime[1];
											$currentDatecal = strtotime($futureDate);
											$futureDateanother = $currentDatecal+(60*15);
											$formatDate = date("Y-m-d H:i A", $futureDateanother);
											$end_time = explode(' ',$formatDate);									  
										  ?>
										<input type="hidden" value="<?php echo $end_time[1]. ' ' .$end_time[2];?>" name="end_time" id="end_time" >
										<input type="hidden" value="1" name="status" id="status" >
										<div class="col-lg-6 br-pad">
											<div class="col-lg-12">
												<div class="appoin-det">
													<h5><?php if($this->lang->line('booking_A9')){ ?><?php echo $this->lang->line('booking_A9'); }else{ ?>Appointment Details<?php } ?></h5>
													<h6>Dr.<?php echo $book_doctor->doctor_firstname; ?> <?php echo $book_doctor->doctor_lastname;?> <?php if($lgbookingmod30){ echo $lgbookingmod30; }else { ?>accepts patient check-in
													forms online. No more papers to fill out!<?php } ?></h6>
												</div>
												<div class="row">
													<div class="col-lg-6">
														<div class="pat-det-1">
															<h4><?php if($this->lang->line('booking_A10')){ ?><?php echo $this->lang->line('booking_A10'); }else{ ?>Patiant Name<?php } ?></h4>
															<h4><?php if($this->lang->line('booking_A11')){ ?><?php echo $this->lang->line('booking_A11'); }else{ ?>General Insurance<?php } ?></h4>
															<h4><?php if($this->lang->line('booking_A12')){ ?><?php echo $this->lang->line('booking_A12'); }else{ ?>General Reason<?php } ?></h4>
															<h4><?php if($this->lang->line('booking_A13')){ ?><?php echo $this->lang->line('booking_A13'); }else{ ?>Gender<?php } ?></h4>
															<h4><?php if($this->lang->line('booking_A15')){ ?><?php echo $this->lang->line('booking_A15'); }else{ ?>Appointment Time<?php } ?></h4>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="pat-det-2">
															<h4><?php echo $patientinfo->patient_firstname; ?> <?php echo $patientinfo->patient_lastname;?></h4>
															<h4 id="checkinsurancetext"><?php if($patientinfo->insurance_title != ""){ echo $patientinfo->insurance_title;}else{ echo "none";} ?> </h4>
															<input type="hidden" value="<?php echo $patientinfo->insurance_title; ?>" id="visitationapporiginal" >
															<input type="hidden" value="<?php echo $patientinfo->visit_title; ?>" id="insuranceapporiginal" >
															<h4 id="checkvisittext"><?php if($patientinfo->visit_title != ""){ echo $patientinfo->visit_title; }else{ echo "none";}?></h4> 
															<h4><?php echo $patientinfo->patient_sex; ?></h4>
															<h4><?php echo $cal_date;?> <?php echo $cal_time;?></h4>
														</div>
														<div class="form-group">
															<h4><button type="submit" class="btn btn-default btn-continue pat-continue-reg1"><?php if($this->lang->line('booking_A16')){ ?><?php echo $this->lang->line('booking_A16'); }else{ ?>Continue<?php } ?></button></h4>
														</div>
													</div>											 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="menus2" class="tab-pane fade">
								<div class="checkinfirst">
									<div class="row " >
										<div class="col-lg-offset-1 col-lg-11 menus2up">
											<div class="col-lg-6 br-patient-1 menus2down">
												<div class="left-events left-img-ph">
													<?php if($book_doctor->display_image != ""){ ?>
													<img src= "<?php echo base_url().'admin/'.$book_doctor->display_image;?>" /> 
													<?php }else{ ?>
													<img src="<?php echo base_url(); ?>assets/images/home/man.png">
													<?php  }?>
												</div>
												<div class="left-events">
													<h5>Dr. <?php echo $book_doctor->doctor_firstname; ?> <?php echo $book_doctor->doctor_lastname;?></h5>
													<div class="gc-ratting" data-rate="<?php echo $book_doctor->avg_rating; ?>" ></div> 								
													<div class="pt-ent">
														<div class="row">
															<div class="col-lg-1">
																<img src="<?php echo base_url(); ?>assets/images/patient-login/13.png" />
															</div>
															<div class="col-lg-4">
																<h6><?php echo $book_doctor->doctor_office_address; ?>, <?php echo $book_doctor->city_name; ?>,<?php echo $book_doctor->state_name; ?>, <?php echo $book_doctor->country_name; ?> <?php echo $book_doctor->doctor_office_zip; ?></h6>
															</div>
														</div>	
													</div>
													<div class="appointment">
														<h4><?php if($this->lang->line('booking_A2')){ ?><?php echo $this->lang->line('booking_A2'); }else{ ?>Appointment time<?php } ?></h4>
														<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/calender.png" /> </span> <?php echo $cal_date;?></h5>
														<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/clock.png" /> </span><?php echo $cal_time;?></h5>
													</div>
												</div>
											</div>
											<div class="col-lg-6 br-pad ">
												<div class="ck-online">
													<h4 class="checkonline-box1" ><span><img src="<?php echo base_url(); ?>assets/images/patient-login/tck-1.png" /></span><?php if($this->lang->line('booking_A17')){ ?><?php echo $this->lang->line('booking_A17'); }else{ ?>Check in Online<?php } ?></h4>
													<button type="submit" class="btn checkonline-box2" name="formcheckdummy" value="formcheckdummy"> <h4  ><span><img src="<?php echo base_url(); ?>assets/images/patient-login/tick.png" /></span> <?php if($this->lang->line('booking_A18')){ ?><?php echo $this->lang->line('booking_A18'); }else{ ?> No Thanks<?php } ?></h4></button>
												</div>
											</div>
										</div>
									</div>
								</div>												
								<div class="checkinsecond">
									<div class="row " >
										<div class="col-lg-offset-1 col-lg-11">
											<form  role="form"  action="" id="formdocrsch" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
												<div class="col-lg-6 br-patient-1">
													<input type="hidden" value="<?php echo $id;?>" id="pat_id">
													<div class="form-group">
														<label for="exampleInputPassword1"><?php if($this->lang->line('booking_A19')){ ?><?php echo $this->lang->line('booking_A19'); }else{ ?>First Name<?php } ?></label>
														<input type="text" name="patient_firstname" value="<?php echo $patientinfo->patient_firstname;?>" class="form-control black_control" id="ufname-n" data-parsley-pattern="^[a-zA-Z\  \/]+$" placeholder="<?php if($this->lang->line('booking_A19')){ ?><?php echo $this->lang->line('booking_A19'); }else { echo "enter firstname"; } ?>" data-parsley-minlength="3" data-parsley-maxlength="25"required =" ">
													</div>
													<div class="form-group">
														<label for="exampleInputPassword1"><?php if($this->lang->line('booking_A20')){ ?><?php echo $this->lang->line('booking_A20'); }else{ ?>Last Name<?php } ?></label>
														<input type="text" name="patient_lastname" value="<?php echo $patientinfo->patient_lastname;?>" class="form-control black_control" id="ulname-n" data-parsley-pattern="^[a-zA-Z\  \/]+$" placeholder="<?php if($this->lang->line('booking_A20')){ ?><?php echo $this->lang->line('booking_A20'); }{ echo "enter lastname"; } ?>" data-parsley-minlength="3" data-parsley-maxlength="25"required =" ">
													</div>
													<div class="form-group">
														<label for="exampleInputPassword1"><?php if($this->lang->line('booking_A21')){ ?><?php echo $this->lang->line('booking_A21'); }else{ ?>Sex<?php } ?></label>
														<div class="radio">
															<label><input type="radio" value="male" <?php if ($patientinfo->patient_sex == "male"){?>checked <?php } ?> name="patient_sex" id="usex-n" required=""><?php if($this->lang->line('booking_A22')){ ?><?php echo $this->lang->line('booking_A22'); }else { ?>Male<?php } ?></label>
														</div>
														<div class="radio">
															<label><input type="radio" id="usex-n" <?php if ($patientinfo->patient_sex == "female"){?>checked <?php } ?> value="female" name="patient_sex" required=""><?php if($this->lang->line('booking_A23')){ ?><?php echo $this->lang->line('booking_A23'); }else { ?>Female<?php } ?></label>
														</div>
													</div>
												</div>
												<div class="col-lg-6 br-pad checkinone">
													<div class="ck-online">
														<div class="form-group">
															<label for="exampleSelect1"><?php if($this->lang->line('booking_A24')){ ?><?php echo $this->lang->line('booking_A24'); }else{ ?>Insurance<?php } ?></label>
															<select name="insurance" id="uinsurance-n" required="" class="form-control black_control"   >
																<option selected="selected" value=""><?php if($this->lang->line('booking_A24')){ ?><?php echo $this->lang->line('booking_A24'); }else{ ?>Insurance<?php } ?></option>
																<?php foreach($insurance as $row_insurance){  ?>
																<option value="<?php echo $row_insurance->id;?>" <?php if($row_insurance->id ==$patientinfo->insurance ){ ?>selected="selected" <?php } ?>><?php echo $row_insurance->insurance_name;?></option>
																<?php  }   ?>
															</select>
														</div>
														<div class="form-group">
															<label for="exampleSelect1"><?php if($this->lang->line('booking_A25')){ ?><?php echo $this->lang->line('booking_A25'); }else{ ?>What's the reason for your visit?<?php } ?></label>
															<select    name="visitation" id="uvisitation-n" required="" class="form-control black_control"   >
																<option selected="selected" value=""><?php if($this->lang->line('booking_A7')){ ?><?php echo $this->lang->line('booking_A7'); }else{ ?>Visitation<?php } ?></option>
																<?php foreach($visitation as $row_visitation){  ?>
																<option value="<?php echo $row_visitation->id;?>" <?php if($row_visitation->id ==$patientinfo->visitation ){ ?> selected="selected" <?php } ?>><?php echo $row_visitation->reason;?></option>
																<?php }   ?>
															</select>
														</div>
														<div class="forget-pass">
															<h4><a href="javascript:void(0);" class=" btn btn-default btn-continue log-in-a formdocrsch btn-continue-patreg-pat"><?php if($this->lang->line('booking_A28')){ ?><?php echo $this->lang->line('booking_A28'); }else{ ?>Update & Reappointment<?php } ?></a></h4>
														</div>
													</div> 
												</div>														 
											</form>
										</div>
									</div>
								</div>
							</div>
							<div id="menus3" class="tab-pane fade">
								<div class="row">
									<div class="col-lg-offset-1 col-lg-11 menus3up">
										<div class="col-lg-6 br-patient-1 menus3down">
											<div class="left-events left-img-ph">
												<?php if($book_doctor->display_image != ""){ ?>
												<img src= "<?php echo base_url().'admin/'.$book_doctor->display_image;?>" /> 
												<?php }else{ ?>
												<img src="<?php echo base_url(); ?>assets/images/home/man.png">
												<?php  }?>
											</div>
											<div class="left-events">
												<h5>Dr. <?php echo $book_doctor->doctor_firstname; ?> <?php echo $book_doctor->doctor_lastname;?></h5>
												<div class="gc-ratting" data-rate="<?php echo $book_doctor->avg_rating; ?>" ></div> 								 
												<div class="pt-ent">
													<div class="row">
														<div class="col-lg-1">
															<img src="<?php echo base_url(); ?>assets/images/patient-login/13.png" />
														</div>
														<div class="col-lg-4">
															<h6><?php echo $book_doctor->doctor_office_address; ?>, <?php echo $book_doctor->city_name; ?>,<?php echo $book_doctor->state_name; ?>, <?php echo $book_doctor->country_name; ?> <?php echo $book_doctor->doctor_office_zip; ?></h6>
														</div>
													</div>
												</div>
												<div class="appointment">
													<h4><?php if($this->lang->line('booking_A2')){ ?><?php echo $this->lang->line('booking_A2'); }else{ ?>Appointment time<?php } ?></h4>
													<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/calender.png" /> </span> <?php echo $cal_date;?></h5>
													<h5><span><img src="<?php echo base_url(); ?>assets/images/patient-login/clock.png" /> </span><?php echo $cal_time;?></h5>
												</div>
											</div>
										</div>
										<div class="col-lg-6 br-pad">
											<div class="ck-online-1">
												<h4><span><img src="<?php echo base_url(); ?>assets/images/patient-login/green-ticket.png" /></span><?php if($lgbookingmod38){ echo $lgbookingmod38; }else { ?>Your appointment booked successfully!<?php } ?>
												</h4>
												<a href = "<?php echo base_url(); ?>Welcome"><span><?php if($this->lang->line('booking_A29')){ ?><?php echo $this->lang->line('booking_A29'); }else{ ?>Click here<?php } ?></span> <?php if($this->lang->line('booking_A30')){ ?><?php echo $this->lang->line('booking_A30'); }else{ ?>to proceed.<?php } ?></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>