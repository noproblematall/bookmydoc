<?php
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;				
	?>
	<!--patient-login-->
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<div class="profile-head">
						<div class="patient_personal">
							<img src= "<?php if(!empty($patient_personal->patient_display_image)): echo base_url().'admin/'.$patient_personal->patient_display_image; else: ?> <?php echo base_url()?>assets/images/login/patient.png<?php endif; ?>" /> 
						</div>				
					</div>
					<div class="profile-head">
						<h3><span><?php if($this->lang->line('patient_tab_A')){ ?><?php echo $this->lang->line('patient_tab_A'); }else{ ?>Welcome<?php } ?>,</span> <?php if(!empty($patient_personal->patient_firstname)){ ?> <?php echo $patient_personal->patient_firstname; ?> <?php } else{ ?> User <?php } ?></h3>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-offset-1 col-lg-10">
					<div class="col-lg-12">
						<div class="serch-main">
							<div class="col-lg-8">
								<h4><?php if($this->lang->line('patient_tab_B')){ ?><?php echo $this->lang->line('patient_tab_B'); }else{ ?>More than 5 million patients use bookmydoc to find doctors  every month.Let them book appointments with use instanly<?php } ?></h4>
							</div>
							<div class="col-lg-4">
								<a href = "<?php echo base_url(); ?>Doctor/Search">
									<div class="search-lg-mn">
										<img src="<?php echo base_url(); ?>assets/images/patient-login/sr.png"  />
										<span><?php if($this->lang->line('patient_tab_C')){ ?><?php echo $this->lang->line('patient_tab_C'); }else{ ?>Search now<?php } ?></span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- RATTING-MODEL -->
	<div id="rateit" class="modal fade" role="dialog">
		<div class="modal-dialog gc-rate-modal">
			<div class="modal-content gc-rate-modal-content">
				<div class="modal-body gc-rate-modal-body">
					<div class="gc-hw-it">
						<?php if($this->lang->line('patient_tab_I')){ ?><?php echo $this->lang->line('patient_tab_I'); }else{ ?>USER REVIEWS FOR DOCTOR<?php } ?>
					</div>
					<div class="gc-review-rate-wrap">
						<form role="form"  action="" id="reviewform" method="post"  data-parsley-validate="" class="validate"  >
							<div class="finder-lid">
								<input type="hidden" name="rating_doctor" value="rating_doctor" >
								<input  class="gc-client-input" name="doctor_id" type="hidden" id="finder-for-doctor">
							</div>
								<h4><?php if($this->lang->line('patient_tab_I1')){ ?><?php echo $this->lang->line('patient_tab_I1'); }else{ ?>How much will you rate ?<?php } ?></h4>
								<div id="gc-ratting1"   ></div> 														
									<h4><?php if($this->lang->line('patient_tab_I2')){ ?><?php echo $this->lang->line('patient_tab_I2'); }else{ ?>Write an Review<?php } ?></h4>
									<textarea class="gc-enquiry-input1" rows="5" cols="50" required="" name="review" ></textarea>
									<button class="gc-update-btn"  style="float:inherit;"><?php if($this->lang->line('patient_tab_I3')){ ?><?php echo $this->lang->line('patient_tab_I3'); }else{ ?>SUBMIT<?php } ?></button>
									<div class="clearfix"></div>
						</form>
					</div>
				</div>    
			</div>
		</div>
	</div>
	<!---- end check---->
	<div class="container-fluid ">
		<div class="tab-cnt-search">
			<div class="container">
				<ul class="nav nav-tabs  nav-tb">
					<li class="active"><a data-toggle="tab" href="#homes"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/2.png" /> </span><?php if($this->lang->line('patient_tab_D')){ ?><?php echo $this->lang->line('patient_tab_D'); }else{ ?>Medical Team<?php } ?></a></li>
					<li><a data-toggle="tab" href="#menus1"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/2.1.png" /> </span><?php if($this->lang->line('patient_tab_E')){ ?><?php echo $this->lang->line('patient_tab_E'); }else{ ?>Past Appointment<?php } ?></a></li>
					<li><a data-toggle="tab" href="#menus2"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/2.2.png" /> </span><?php if($this->lang->line('patient_tab_F')){ ?><?php echo $this->lang->line('patient_tab_F'); }else{ ?>Notifications<?php } ?></a></li>
					<li><a data-toggle="tab" href="#menus3"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/2.3.png" /> </span><?php if($this->lang->line('patient_tab_G')){ ?><?php echo $this->lang->line('patient_tab_G'); }else{ ?>Settings<?php } ?></a></li>
				</ul>
			</div>
			<div class="container-fluid tab-fluid">
				<div class="container">
					<div class="tab-content tb-patient">
						<div id="homes" class="tab-pane fade in active">
							<div class="row">
								<?php  	if($this->session->flashdata('messageratedoc')) {
										$messageratedoc = $this->session->flashdata('messageratedoc');  ?>
								<div class="alert alert-<?php echo $messageratedoc['class']; ?>">
									<button class="close" data-dismiss="alert" type="button">×</button>
									<?php echo $messageratedoc['messageratedoc']; ?>
								</div>
								<?php  }  ?>
								<div class="errormsgap" > </div>								 
								<div class="col-lg-9">
									<?php if(!empty($patient_history)){ ?>
									<?php foreach($patient_history as $pat_detail){ ?>
									<div class="left-events left-img-ph">
										<?php if(!empty($pat_detail->display_image)){ ?>
										<img src= "<?php echo base_url().'admin/'.$pat_detail->display_image;?>" >
										<?php }else{ ?>
										<img src="<?php echo base_url(); ?>assets/images/home/man.png">
										<?php  }?>                                             
									</div>
									<div class="left-events">
										<h4><?php if($this->lang->line('patient_tab_D1')){ ?><?php echo $this->lang->line('patient_tab_D1'); }else{ ?>Book a primary care physican<?php } ?></h4>
										<h5>Dr. <?php echo $pat_detail->doctor_firstname; ?> <?php echo $pat_detail->doctor_lastname;?></h5>
										<div class="gc-ratting" data-rate="<?php echo $pat_detail->avg_rating; ?>" ></div>
									</div>
									<div class="row book-mn">
										<div class="col-lg-4">
											<div class="rated show-ratingreview" data-id='<?php echo $pat_detail->id; ?>' >
												<h3><span> <img src="<?php echo base_url(); ?>assets/images/patient-login/3.png"  alt="" /></span><?php if($this->lang->line('patient_tab_D7')){ ?><?php echo $this->lang->line('patient_tab_D7'); }else{ ?>Rate Physician<?php } ?></h3>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="rated">
												<h3><span><img src="<?php echo base_url(); ?>assets/images/patient-login/4.png"  alt="" /></span><?php echo $pat_detail->email;?></h3>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="rated">
												<a href ="<?php echo base_url(); ?>Doctor/Profile/<?php echo $pat_detail->id; ?>">
												<h3><span><img src="<?php echo base_url(); ?>assets/images/patient-login/5.png"   alt="" /></span><?php if($this->lang->line('patient_tab_D5')){ ?><?php echo $this->lang->line('patient_tab_D5'); }else{ ?>Book again<?php } ?></h3></a>
											</div>
										</div>
									</div>
									<div class="row book-mn">
										<div class="col-lg-4">
											<div class="rated">
												<h3><span> <img src="<?php echo base_url(); ?>assets/images/patient-login/6.png"  alt="" /></span><?php echo $pat_detail->total;?> <?php if($this->lang->line('patient_tab_D4')){ ?><?php echo $this->lang->line('patient_tab_D4'); }else{ ?>Appointments<?php } ?></h3>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="rated">
												<h3><span><img src="<?php echo base_url(); ?>assets/images/patient-login/7.png"   alt="" /></span><?php echo $pat_detail->doctor_office_address;?>, <?php echo $pat_detail->city_name;?>
												<?php echo $pat_detail->state_name;?>, <?php echo $pat_detail->country_name;?> <?php echo $pat_detail->city_zip;?>
												</h3>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="rated">
												<a href="javascript:void(0);"  class="removedochistory" id="<?php echo $pat_detail->id;?>">
												<h3><span><img src="<?php echo base_url(); ?>assets/images/patient-login/8.png"  alt="" /></span><?php if($this->lang->line('patient_tab_D6')){ ?><?php echo $this->lang->line('patient_tab_D6'); }else{ ?>Remove<?php } ?></h3></a>
											</div>
										</div>
									</div>
									<div class="br-new"></div>
									<div class="row submit-book">
										<div class="col-lg-12">
											<form>
												<div class="form-group">
												</div>
											</form>
										</div>
									</div>
								<?php }  } else{  ?>
									<div class="notification">
										<h4><img src="<?php echo base_url(); ?>assets/images/patient-login/noti.png" /> </h4>
										<h5>You don't have medical teams </h5>
									</div>								
								<?php } ?>
								</div>								 
								<div class="col-lg-3">
									<div class="upcoming-events">										
										<img src="<?php echo base_url(); ?>assets/images/patient-login/9.png"   class="up-img" />
										<h3><?php if($this->lang->line('patient_tab_D2')){ ?><?php echo $this->lang->line('patient_tab_D2'); }else{ ?>Upcoming Events<?php } ?></h3>
										<div class="clearfix"></div>
											<?php if(isset($an_patientc_history) && !empty($an_patientc_history)): ?>
											<?php foreach($an_patientc_history as $pat_check_an_detail){ ?>
											<div class="row">
												<div class="col-lg-3">
													<div class="right-events ">				 
														<?php if(!empty($pat_check_an_detail->display_image)){ ?>
														<img src= "<?php echo base_url().'admin/'.$pat_check_an_detail->display_image;?>" class="ph-img"/>
														<?php }else{ ?>
														<img src="<?php echo base_url(); ?>assets/images/home/man.png" class="ph-img"/>
														<?php  }?>                                              
													</div>
												</div>
												<div class="col-lg-9">
													<div class="right-events-1">
														<h4>Dr. <?php echo $pat_check_an_detail->doctor_firstname; ?><?php echo $pat_check_an_detail->doctor_lastname; ?></h4>
														<h5><?php echo $pat_check_an_detail->degree_name; ?></h5>
														<h6><?php echo $pat_check_an_detail->appointment_date; ?><span><?php echo $pat_check_an_detail->appointment_time; ?></span></h6>
														<p><?php echo $pat_check_an_detail->reason; ?></p>
													</div>
												</div>
											</div>
											<div class="br-new"></div>
											<?php } else:?>
											<div class="notification">
												<h5><?php if($this->lang->line('patient_tab_D3')){ ?><?php echo $this->lang->line('patient_tab_D3'); }else{ ?>No Upcoming Events <?php } ?></h5>
											</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
							<div id="menus1" class="tab-pane fade">
								<?php if(!empty($an_patient_history)){ ?>
								<div class="col-lg-12">								
									<div class="table-responsive">									 
										<?php foreach($an_patient_history as $pat_an_detail){ ?>
                                         <table class="table table-custom table-cus">
											<thead>
												<tr>
													<th><?php if($this->lang->line('patient_tab_E1')){ ?><?php echo $this->lang->line('patient_tab_E1'); }else{ ?>Doctor Name<?php } ?></th>
													 <th><?php if($this->lang->line('patient_tab_E2')){ ?><?php echo $this->lang->line('patient_tab_E2'); }else{ ?>Illness<?php } ?></th>
													 <th><?php if($this->lang->line('patient_tab_E3')){ ?><?php echo $this->lang->line('patient_tab_E3'); }else{ ?>Appointment Date<?php } ?></th>
													 <th><?php if($this->lang->line('patient_tab_E4')){ ?><?php echo $this->lang->line('patient_tab_E4'); }else{ ?>Action<?php } ?></th>
													 <th><?php if($this->lang->line('patient_tab_E5')){ ?><?php echo $this->lang->line('patient_tab_E5'); }else{ ?>Download<?php } ?></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><?php if(!empty($pat_an_detail->display_image)){ ?><img src= "<?php echo base_url().'admin/'.$pat_an_detail->display_image;?>" class="pat-img-nw"/><?php }else{ ?><img src="<?php echo base_url(); ?>assets/images/home/man.png" class="pat-img-nw"/><?php  }?> <h3>Dr. <?php echo $pat_an_detail->doctor_firstname;?> <?php echo $pat_an_detail->doctor_lastname;?></h3></td>
													<td><h4><?php if(!empty($pat_an_detail->reason)){ ?><?php echo $pat_an_detail->reason;?><?php }else{ ?> Not Specified<?php } ?></h4></td>
													<td><h5><?php echo $pat_an_detail->appointment_date.' '.$pat_an_detail->appointment_time;?></h5></td>
													<td><a href="javascript:void(0);"  class="removedochistoryanother" id="<?php echo $pat_an_detail->app_id;?>" ><img class="del-patient" src="<?php echo base_url(); ?>assets/images/patient-login/del.png"  /> </a></td>
													<td><a href="<?php echo base_url(); ?>Welcome/pdf/<?php echo $pat_an_detail->app_id;?>"  target="_blank" class="dwd"><?php if($this->lang->line('patient_tab_E6')){ ?><?php echo $this->lang->line('patient_tab_E6'); }else{ ?>Download Pdf<?php } ?></a></td>
												</tr>                                            
											</tbody>
										</table>
									<?php } ?>									
									</div>								
								</div>
							<?php } else{  ?>
								<div class="notification">
										<h4><img src="<?php echo base_url(); ?>assets/images/patient-login/noti.png" /> </h4>
										<h5>You don't have past appointments</h5>
								</div>															
							<?php } ?>
							</div>
							<div id="menus2" class="tab-pane fade">
								<?php if($an_patientc_history != NULL){ ?>
								<div class="col-lg-12">
									<div class="table-responsive">
									<?php foreach($an_patientc_history as $pat_check_an_detailk){ ?>
										<table class="table table-custom table-cus">
											<thead>
												<tr>
													<th><?php if($this->lang->line('patient_tab_H')){ ?><?php echo $this->lang->line('patient_tab_H'); }else{ ?>Message<?php } ?></th>
													<th><?php if($this->lang->line('patient_tab_H1')){ ?><?php echo $this->lang->line('patient_tab_H1'); }else{ ?>Doctor Name<?php } ?></th>
													<th><?php if($this->lang->line('patient_tab_H2')){ ?><?php echo $this->lang->line('patient_tab_H2'); }else{ ?>Ill Reason<?php } ?></th>
													<th><?php if($this->lang->line('patient_tab_H3')){ ?><?php echo $this->lang->line('patient_tab_H3'); }else{ ?>Appointment Date<?php } ?></th>
													<th><?php if($this->lang->line('patient_tab_H4')){ ?><?php echo $this->lang->line('patient_tab_H4'); }else{ ?>Appointment Time<?php } ?></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><?php if($this->lang->line('patient_tab_E7')){ ?><?php echo $this->lang->line('patient_tab_E7'); }else{ ?>You have appointment Today<?php } ?> </td>
													<td> <?php if(!empty($pat_check_an_detailk->display_image)){ ?><img src= "<?php echo base_url().'admin/'.$pat_check_an_detailk->display_image;?>" class="pat-img-nw"/><?php }else{ ?><img src="<?php echo base_url(); ?>assets/images/home/man.png" class="pat-img-nw"/><?php  }?> <h3>Dr. <?php echo $pat_check_an_detailk->doctor_firstname;?> <?php echo $pat_check_an_detailk->doctor_lastname;?></h3></td>
													<td><h4><?php if(!empty($pat_check_an_detailk->reason)){ ?><?php echo $pat_check_an_detailk->reason;?><?php }else{ ?> Not Specified<?php } ?></h4></td><td><h5><?php echo $pat_check_an_detailk->appointment_date;?></h5></td><td><h5><?php echo $pat_check_an_detailk->appointment_time;?></h5></td>
												</tr>                                            
											</tbody>
										</table>
									<?php } ?>									 
									</div>
								</div>
							<?php }else{ ?>
								<div class="notification">
									<h4><img src="<?php echo base_url(); ?>assets/images/patient-login/noti.png" /> </h4>
									<h5><?php if($this->lang->line('patient_tab_F1')){ ?><?php echo $this->lang->line('patient_tab_F1'); }else{ ?>You don’t have any Notifications<?php } ?></h5>
								</div>
							<?php } ?>
							</div>
							<div id="menus3" class="tab-pane fade">
								<div class="row">
									<div class="col-lg-offset-2 col-lg-10">							
									<?php   if($this->session->flashdata('messagepatient1')) {
											$messagepatient1 = $this->session->flashdata('messagepatient1'); ?>
										<div class="alert alert-<?php echo $messagepatient1['class']; ?>">
											<button class="close" data-dismiss="alert" type="button">×</button>
												<?php echo $messagepatient1['messagepatient1']; ?>
										</div>
									<?php } ?>						 						 
									<div class="col-lg-6">
										<div class="edit-scn">
											<div class="col-lg-12">
												<h4><?php if($this->lang->line('patient_tab_G1')){ ?><?php echo $this->lang->line('patient_tab_G1'); }else{ ?>Edit Profile<?php } ?></h4>
												<div class="patient_personal-edit">
													<img src = "<?php if(!empty($patient_personal->patient_display_image)){ echo base_url().'admin/'.$patient_personal->patient_display_image; }else{ ?><?php echo base_url()?>assets/images/login/patient.png<?php } ?>" /> 
												</div>
												<form method="post" id="patient_imagefirst" enctype="multipart/form-data">
													<input type="hidden" name="submitpatient1" value="submitpatient1" id="submitpatient1" >
													<label><input type="file" name="patient_display_image" id="patient_image" style="opacity: 0;"><img src="<?php echo base_url(); ?>assets/images/patient-login/edit.png" />  </label>
												</form>
											</div>
											<form method="post" data-parsley-validate="" enctype="multipart/form-data">
												<div class="form-group">
													<div class="col-lg-12">
														<label for="example"><?php if($this->lang->line('patient_tab_G11')){ ?><?php echo $this->lang->line('patient_tab_G11'); }else{ ?>First Name<?php } ?></label>
														<input type="text" name="patient_firstname" value="<?php echo $patient_personal->patient_firstname; ?>" class="form-control" id="example" data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" " >
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-12">
														<label for="example"><?php if($this->lang->line('patient_tab_G12')){ ?><?php echo $this->lang->line('patient_tab_G12'); }else{ ?>Last Name<?php } ?></label>
														<input type="text" name="patient_lastname" value="<?php echo $patient_personal->patient_lastname; ?>" class="form-control" id="example" data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" " >
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-12">
														<label for="example"><?php if($this->lang->line('patient_tab_G13')){ ?><?php echo $this->lang->line('patient_tab_G13'); }else{ ?>E mail<?php } ?></label>
														<input type="email" name="email" class="form-control" value="<?php echo $patient_personal->email; ?>" id="example" data-parsley-trigger="change" data-parsley-type="email" required="">
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-12">
														<button type="submit"  name="submitpatient2"  value="submitpatient2" class="btn btn-default"><span><i class="fa fa-refresh"></i> </span><?php if($this->lang->line('patient_tab_G14')){ ?><?php echo $this->lang->line('patient_tab_G14'); }else{ ?>Update<?php } ?></button>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="edit-scn">
											<div class="col-lg-12">
												<h4><?php if($this->lang->line('patient_tab_G2')){ ?><?php echo $this->lang->line('patient_tab_G2'); }else{ ?>Change Password<?php } ?></h4>
												<h6><?php if($this->lang->line('patient_tab_G21')){ ?><?php echo $this->lang->line('patient_tab_G21'); }else{ ?>The Password Advice<?php } ?></h6>
												<ul>
													<li><span><?php if($this->lang->line('patient_tab_G22')){ ?><?php echo $this->lang->line('patient_tab_G22'); }else{ ?>Has 6 Characters, Minimum<?php } ?></span></li>
												</ul>
											</div>
											<form method="post" id="patient_imagefirst" enctype="multipart/form-data" data-parsley-validate="">
												<div class="form-group">
													<div class="col-lg-12">
														<label for="example"><?php if($this->lang->line('patient_tab_G23')){ ?><?php echo $this->lang->line('patient_tab_G23'); }else{ ?>Current Pasword<?php } ?></label>
														<input type="password" name="old_password" class="form-control" id="example" data-parsley-minlength="6" required="">
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-12">
														<label for="example"><?php if($this->lang->line('patient_tab_G24')){ ?><?php echo $this->lang->line('patient_tab_G24'); }else{ ?>New Pssword<?php } ?></label>
														<input type="password" name="new_password" class="form-control" id="example" data-parsley-minlength="6" required="">
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-12">
														<label for="example"><?php if($this->lang->line('patient_tab_G25')){ ?><?php echo $this->lang->line('patient_tab_G25'); }else{ ?>Re-type New Password<?php } ?></label>
														<input type="password" name="re_password" class="form-control" id="example" data-parsley-minlength="6" required="">
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-12">
														<button type="submit"  value="submitpatient3" name="submitpatient3" class="btn btn-default"><span><i class="fa fa-refresh"></i> </span><?php if($this->lang->line('patient_tab_G26')){ ?><?php echo $this->lang->line('patient_tab_G26'); }else{ ?>Update<?php } ?></button>
													</div>
												</div>
											</form>
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
<!--patient-login-->