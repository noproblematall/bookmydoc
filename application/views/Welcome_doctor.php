<?php   $trial_date=$this->session->userdata['frontend_logged_in']['trial_date'];  
		$end_date=$this->session->userdata['frontend_logged_in']['end_date'];  
		$current_date = date('Y-m-d'); 
		$tab_languages = $languages;
		$settings = get_icon();
        $id = $settings->languages;
        $query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;   
		$docto_image =$match_user_details->display_image;
		?>
	<!--patient-login-->
	<div class="container">
		<div class="col-lg-12">
		<?php if($end_date == '' & $trial_date >= $current_date  ){?>					
			<div class="alert">
				<button class="close" data-dismiss="alert" type="button">×</button>
				<h3><?php if($lgdoctormod74){ echo $lgdoctormod74; }else { ?>Alert Message<?php } ?>:</h3>
				<h4> <?php if($lgdoctormod75){ echo $lgdoctormod75; }else { ?>You are using 15 days free trial version.Once the trial period is expired , your details listing will be removed from Search Filter. Select any package to extend your service under Bookmydoc.<?php } ?>
				</h4>
			</div>								                                   
		<?php } elseif($end_date < $current_date) { ?>							
			<div class="alert">
				<button class="close" data-dismiss="alert" type="button">×</button>
				<h3><?php if($lgdoctormod74){ echo $lgdoctormod74; }else { ?>Alert Message<?php } ?>:</h3>
				<h4>  <?php if($lgdoctormod76){ echo $lgdoctormod76; }else { ?>Your Package period is expired . Kindly Select any package to list your details under Bookmydoc.<?php } ?>
				</h4>
			</div>								                                         
		<?php } else{ ?>
		<?php } ?>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<div class="profile-head">
						<div class="doctor_personal" >
							<img src= "<?php if(!empty($doctor_personal->display_image)){ ?> <?php echo base_url().'admin/'.$doctor_personal->display_image; ?> <?php }else{ ?> <?php echo base_url(); ?>assets/images/login/doctor.png <?php } ?>" />	
						</div>
						<form method="post" id="doctor_imagefirst" enctype="multipart/form-data">
							<input type="hidden" name="submitpatient1" value="submitpatient1" id="submitpatient1" >
							<label><input type="file" name="display_image"  id="doctor_image" value="" style="opacity: 0;"><img class="docimg_img" src="<?php echo base_url(); ?>assets/images/patient-login/edit.png" />  </label>
						</form>
					</div>
					<div class="profile-head">
						<h3><span><?php if($this->lang->line('doctor_slide_A1')){ ?><?php echo $this->lang->line('doctor_slide_A1'); }else{ ?>Welcome<?php } ?>,</span> <?php echo $doctor_personal->doctor_firstname;?> <?php echo $doctor_personal->doctor_lastname;?></h3>
						<h4><span><?php if($this->lang->line('doctor_slide_A2')){ ?><?php echo $this->lang->line('doctor_slide_A2'); }else{ ?>Age<?php } ?>:</span> <?php echo $doctor_personal->doctor_age;?></h4>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-offset-1 col-lg-10">
					<div class="col-lg-12">
						<div class="serch-main">
							<div class="col-lg-8">
								<h4><?php if($this->lang->line('doctor_slide_A3')){ ?><?php echo $this->lang->line('doctor_slide_A3'); }else{ ?>More than 5 million patients use bookmydoc to find doctors  every month.
								Let them book appointments with use instantly<?php } ?></h4>
							</div>
							<div class="col-lg-4">
								<a href = "<?php echo base_url(); ?>Doctor/Search">
									<div class="search-lg-mn">
										<img src="<?php echo base_url(); ?>assets/images/patient-login/sr.png"  />
										<span><?php if($this->lang->line('doctor_slide_A4')){ ?><?php echo $this->lang->line('doctor_slide_A4'); }else{ ?>Search now<?php } ?></span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid ">
		<div class="tab-cnt-search">
			<div class="container">
				<ul class="nav nav-tabs  nav-tb dct-tab">
					<li class="active"><a data-toggle="tab" href="#homes"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/2.1.png" /> </span><?php if($this->lang->line('doctor_tab_A1')){ ?><?php echo $this->lang->line('doctor_tab_A1'); }else{ ?>Appointment<?php } ?></a></li>
					<li><a data-toggle="tab" href="#menus1"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/calen.png" /> </span><?php if($this->lang->line('doctor_tab_B1')){ ?><?php echo $this->lang->line('doctor_tab_B1'); }else{ ?>Calender Setting<?php } ?></a></li>
					<li><a data-toggle="tab" href="#menus2"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/2.3.png" /> </span><?php if($this->lang->line('doctor_tab_C1')){ ?><?php echo $this->lang->line('doctor_tab_C1'); }else{ ?>Settings<?php } ?></a></li>
				</ul>
			</div>
			<div class="container-fluid tab-fluid">
				<div class="container">
					<div class="tab-content tb-patient">				
					<!-- --calendar- -->
						<div id="homes" class="tab-pane fade in active">
							<div class="row">
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div id="my-calendar">											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>							 							 		
					<!-- Modal -->
							<div class="modal calendar fade" id="myModal-calendar" role="dialog">
								<div class="modal-dialog modal-lg">    
							<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title"><?php if($this->lang->line('doctor_tab_A2')){ ?><?php echo $this->lang->line('doctor_tab_A2'); }else{ ?>Appointment Details<?php } ?></h4>
										</div>
										<div class="modal-body" id="calendarmodal" >
											<p>Some text in the modal.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal"><?php if($this->lang->line('doctor_tab_A8')){ ?><?php echo $this->lang->line('doctor_tab_A8'); }else{ ?>Close<?php } ?></button>
										</div>
									</div>
								</div>
							</div>													 	
						<!----calendar- -->										 							 
							<div id="menus1" class="tab-pane fade">
								<div class="tab-cnt-search">
									<div class="container">
										<div class="row">
											<div class="col-lg-offset-2 col-lg-8">
												<ul class="nav nav-tabs  nav-tb dct-inner-tab  dct-inner-tab-1">
													<li class="active"><a data-toggle="tab" href="#homess"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/nw-c.png" /> </span><?php if($this->lang->line('doctor_tab_B2')){ ?><?php echo $this->lang->line('doctor_tab_B2'); }else{ ?>Work Plan<?php } ?></a></li>
													<li><a data-toggle="tab" href="#menuss1"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/break.png" /> </span><?php if($this->lang->line('doctor_tab_B3')){ ?><?php echo $this->lang->line('doctor_tab_B3'); }else{ ?>Breaks<?php } ?></a></li>
													<li><a data-toggle="tab" href="#menuss2"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/vacation.png" /> </span><?php if($this->lang->line('doctor_tab_B4')){ ?><?php echo $this->lang->line('doctor_tab_B4'); }else{ ?>Vacations<?php } ?></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="container-fluid ">
										<div class="container">
											<div class="tab-content tb-patient">
												<div id="homess" class="tab-pane fade in active">
													<?php   if($this->session->flashdata('messagework')) {
															$messagework = $this->session->flashdata('messagework'); ?>
													<div class="alert alert-<?php echo $messagework['class']; ?>">
														<button class="close" data-dismiss="alert" type="button">×</button>
														<?php echo $messagework['messagework']; ?>
													</div>
													<?php }	?>
													<div class="col-lg-offset-1 col-lg-10">
														<form  method="post" action="">
															<div class="table-responsive">
																<table class="table table-custom table-calender checkcalworktable">
																	<thead>
																		<tr>
																			<th><input type="checkbox" class="checkall" value="" /><?php if($this->lang->line('doctor_tab_B21')){ ?><?php echo $this->lang->line('doctor_tab_B21'); }else{ ?>Checkall<?php } ?></th>
																			<th><?php if($this->lang->line('doctor_tab_B22')){ ?><?php echo $this->lang->line('doctor_tab_B22'); }else{ ?>Day<?php } ?></th>
																			<th><?php if($this->lang->line('doctor_tab_B23')){ ?><?php echo $this->lang->line('doctor_tab_B23'); }else{ ?>Start<?php } ?></th>
																			<th><?php if($this->lang->line('doctor_tab_B24')){ ?><?php echo $this->lang->line('doctor_tab_B24'); }else{ ?>End<?php } ?></th>
																			<th><?php if($this->lang->line('doctor_tab_B25')){ ?><?php echo $this->lang->line('doctor_tab_B25'); }else{ ?>Actions<?php } ?></th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php $working_time = (!empty($doctor_schedule['working_time'])) ? json_decode($doctor_schedule['working_time'],true) : array();?>				 	
																		<?php foreach ($Days as $key => $value) { ?>
																		<tr>
																			<td ><input type="checkbox" /></td>
																			<td><ul><li><span><?php echo $value;?></span></li></ul></td>
																			<div class="timecal1">
																			<td><h4><input  style="width: 70px;" type="text" class="timepicker pickwkt" onkeypress="return false;"  name="work[<?php echo $days[$key];?>][start]" value="<?php echo (!empty($working_time)) ? isset($working_time[ $days[$key]]['start']) ? $working_time[ $days[$key]]['start'] :'' : '';?>" readonly></h4></td>
																			<td><h4><input   style="width: 70px;" type="text"   class="timepicker pickwkt"  onkeypress="return false;"  name="work[<?php echo $days[$key];?>][end]" value="<?php echo (!empty($working_time)) ? isset($working_time[ $days[$key]]['end']) ? $working_time[ $days[$key]]['end'] :'' : '';?>" readonly></h4></td>
																			</div>
																			<td><a href="javascript:void(0);" class="checkcalworkedit">
                                                                             <i class="fa fa-pencil edit-link"></i>
																			</a> </td>
																		</tr>
																	<?php } ?>
																	</tbody>
																</table>
															</div>
															<button value="doctorsubmitwork" type="submit" name="doctorsubmitwork" id="checkcalworkbutton" class="btn btn-default checkcalworkbutton"><span><i class="fa fa-refresh"></i> </span><?php if($this->lang->line('doctor_tab_D')){ ?><?php echo $this->lang->line('doctor_tab_D'); }else{ ?>Update<?php } ?></button>
														</form>
													</div>
													<div class="col-lg-12">
														<h5 class="pad-center pad-center-1"><img src="<?php echo base_url(); ?>assets/images/patient-login/tick.png" > </h5>
													</div>
												</div>
												<div id="menuss1" class="tab-pane fade">
												<?php   if($this->session->flashdata('messagebreak')) {
														$messagebreak = $this->session->flashdata('messagebreak'); ?>
													<div class="alert alert-<?php echo $messagebreak['class']; ?>">
														<button class="close" data-dismiss="alert" type="button">×</button>
														<?php echo $messagebreak['messagebreak']; ?>
													</div>
												<?php }	?>
													<div class="col-lg-offset-1 col-lg-10">
														<form  method="post" action="">
															<div class="table-responsive">
																<table class="table table-custom table-calender checkcalbreaktable" >
																	<thead>
																		<tr>
																			<th><input type="checkbox" class="checkallbreak" value="" /><?php if($this->lang->line('doctor_tab_B21')){ ?><?php echo $this->lang->line('doctor_tab_B21'); }else{ ?>Checkall<?php } ?></th>
																			<th><?php if($this->lang->line('doctor_tab_B22')){ ?><?php echo $this->lang->line('doctor_tab_B22'); }else{ ?>Day<?php } ?></th>
																			<th><?php if($this->lang->line('doctor_tab_B23')){ ?><?php echo $this->lang->line('doctor_tab_B23'); }else{ ?>Start<?php } ?></th>
																			<th><?php if($this->lang->line('doctor_tab_B24')){ ?><?php echo $this->lang->line('doctor_tab_B24'); }else{ ?>End<?php } ?></th>
																			<th><?php if($this->lang->line('doctor_tab_B25')){ ?><?php echo $this->lang->line('doctor_tab_B25'); }else{ ?>Actions<?php } ?></th>
																		</tr>
																	</thead>
																	<?php $break_time = (!empty($doctor_schedule['break_time'])) ? json_decode($doctor_schedule['break_time'],true) : array('mon'=>array(array('start'=>'','end'=>'')),'tue'=>array(array('start'=>'','end'=>'')),'wed'=>array(array('start'=>'','end'=>'')),'thu'=>array(array('start'=>'','end'=>'')),'fri'=>array(array('start'=>'','end'=>'')),'sat'=>array(array('start'=>'','end'=>'')),'sun'=>array(array('start'=>'','end'=>'')));?>
																	<tbody class="parent_class">
																		<?php foreach ($Days as $key => $value) { ?>
																		<?php if (isset($break_time[$days[$key]])){ ?>
																		<?php  foreach ($break_time[$days[$key]] as $br_key => $breaktime) {?>
																		<div target=".<?php echo $value;?>" >
																			<tr class="clone_break" id="dummy">
																				<td ><input type="checkbox" class="daycheckone"name="<?php echo $value;?>"/></td>
																				<td><ul><li><span><?php echo $value;?></span></li></ul></td>
																				<td><h4><input  style="width: 70px;" type="text" class="timepicker start"  name="break[<?php echo $days[$key];?>][start][]" value="<?php echo (!empty($break_time)) ? isset($breaktime['start']) ? $breaktime['start'] :'' : '';?>" onkeypress="return false;" readonly></h4></td>
																				<td><h4><input   style="width: 70px;" type="text" class="timepicker end" name="break[<?php echo $days[$key];?>][end][]" value="<?php echo (!empty($break_time)) ? isset($breaktime['end']) ? $breaktime['end'] :'' : '';?>" onkeypress="return false;" readonly></h4></td>
																				<td><a href="javascript:void(0);" class="checkcalbreakedit"  ><i class="fa fa-pencil edit-link"></i></a> <a href="javascript:void(0);" class="add_calbreak" ><i class="fa fa-plus edit-link-1"></i></a><a href="javascript:void(0);" class="remove_calbreak"><i class="fa fa-times edit-link-1"></i></a></td>
																			</tr>
																		</div>
																	<?php } } } ?> 
																	</tbody>
																</table>
															</div>
															<button value="doctorsubmitbreak" type="submit" name="doctorsubmitbreak" id="checkcalbreakbutton" class="btn btn-default checkcalbreakbutton"><span><i class="fa fa-refresh"></i> </span><?php if($this->lang->line('doctor_tab_D')){ ?><?php echo $this->lang->line('doctor_tab_D'); }else{ ?>Update<?php } ?></button>
														</form>
													</div>
													<div class="col-lg-12">
														<h5 class="pad-center pad-center-1"><img src="<?php echo base_url(); ?>assets/images/patient-login/tick.png" > </h5>
													</div>
												</div>
												<div id="menuss2" class="tab-pane fade">
												<?php   if($this->session->flashdata('messagevacation')) {
														$messagevacation = $this->session->flashdata('messagevacation'); ?>
													<div class="alert alert-<?php echo $messagevacation['class']; ?>">
														<button class="close" data-dismiss="alert" type="button">×</button>
														<?php echo $messagevacation['messagevacation']; ?>
													</div>
												<?php }	?>
												<div class="col-lg-offset-1 col-lg-10">
													<form  method="post" action="">
														<div class="table-responsive">
															<table class="table table-custom table-calender checkcalvacationtable">
																<thead>
																	<tr>
																		<th><input type="checkbox" class="checkallvacation" value="" /><?php if($this->lang->line('doctor_tab_B41')){ ?><?php echo $this->lang->line('doctor_tab_B41'); }else{ ?>Checkall<?php } ?></th>
																		<th><?php if($this->lang->line('doctor_tab_B42')){ ?><?php echo $this->lang->line('doctor_tab_B42'); }else{ ?>Start Date<?php } ?></th>
																		<th><?php if($this->lang->line('doctor_tab_B43')){ ?><?php echo $this->lang->line('doctor_tab_B43'); }else{ ?>End Date<?php } ?></th>       
																		<th><?php if($this->lang->line('doctor_tab_B45')){ ?><?php echo $this->lang->line('doctor_tab_B45'); }else{ ?>Actions<?php } ?></th>
																	</tr>
																</thead>
																<?php $vacation_time = (!empty($doctor_schedule['vacation_time'])) ? json_decode($doctor_schedule['vacation_time'],true) : array(array('startdate'=>'','enddate'=>''));?>
																<tbody class="parent_class2">
																<?php foreach ($vacation_time as $key => $value) { ?>
																	<div target=".<?php echo $value['startdate'];?><?php echo $value['enddate'];?>" >
																	<tr>
																		<td ><input type="checkbox" name="<?php echo $value['startdate'];?><?php echo $value['enddate'];?>"/></td>
																		<td><h6><input  required type="text" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="" id="dpd1" class="start_date dpd1" placeholder="yyyy-mm-dd" required  name="startdate[]" onkeypress="return false;"  value="<?php echo $value['startdate'];?>" readonly></h6></td>
																		<td><h6><input required type="text"  data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="" id="dpd1" class="end_date dpd1" placeholder="yyyy-mm-dd" required name="enddate[]"  onkeypress="return false;"  value="<?php echo $value['enddate'];?>" readonly></h6></td>
																		<td><a href="javascript:void(0);" class="checkcalvacationedit"  ><i class="fa fa-pencil edit-link"></i></a><a href="javascript:void(0);" class="add_calvacation"><i class="fa fa-plus edit-link-1"></i></a><a href="javascript:void(0);" class="remove_calvacation-vacation"><i class="fa fa-times edit-link-1"></i></a></td>
																	</tr> </div>
																	<?php } ?>
																</tbody>
															</table>
														</div>
														<button value="doctorsubmitvacation" type="submit" name="doctorsubmitvacation" id="checkcalvacationbutton" class="btn btn-default checkcalvacationbutton"><span><i class="fa fa-refresh"></i> </span><?php if($this->lang->line('doctor_tab_D')){ ?><?php echo $this->lang->line('doctor_tab_D'); }else{ ?>Update<?php } ?></button>
													</div>
												</form>
												<div class="col-lg-12">
													<h5 class="pad-center pad-center-1"><img src="<?php echo base_url(); ?>assets/images/patient-login/tick.png"> </h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<!-- services-->
						<div id="menus2" class="tab-pane fade">
							<div class="tab-cnt-search my-tab-kj">
								<div class="container">
									<div class="row">
										<div class="col-lg-offset-1 col-lg-10 ">
											<ul class="nav nav-tabs  nav-tb dct-inner-tab-2">
												<li class="active"><a data-toggle="tab" href="#homesss"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/m-1.png" /> </span><?php if($this->lang->line('doctor_tab_C2')){ ?><?php echo $this->lang->line('doctor_tab_C2'); }else{ ?>My Details<?php } ?></a></li>
												<li><a data-toggle="tab" href="#menusss1"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/m-2.png"/> </span><?php if($this->lang->line('doctor_tab_C3')){ ?><?php echo $this->lang->line('doctor_tab_C3'); }else{ ?>Update Profile<?php } ?></a></li>
												<li><a data-toggle="tab" href="#menusss2"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/m-3.png"/> </span><?php if($this->lang->line('doctor_tab_C4')){ ?><?php echo $this->lang->line('doctor_tab_C4'); }else{ ?>Update Password<?php } ?></a></li>
												<li><a data-toggle="tab" href="#menusss3"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/m-4.png"/> </span><?php if($this->lang->line('doctor_tab_C5')){ ?><?php echo $this->lang->line('doctor_tab_C5'); }else{ ?>Upload Image<?php } ?></a></li>
												<li><a data-toggle="tab" href="#menusss4"><span><img src="<?php echo base_url(); ?>assets/images/patient-login/2.3.png"/> </span><?php if($this->lang->line('doctor_tab_C6')){ ?><?php echo $this->lang->line('doctor_tab_C6'); }else{ ?>Packages<?php } ?></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="container-fluid ">
									<div class="container">
										<div class="tab-content tb-patient">
											<div id="homesss" class="tab-pane fade in active">
												<div class="col-lg-offset-1 col-lg-10">
													<div class="my-details">
													<?php   if($this->session->flashdata('message1')) {
															$message1 = $this->session->flashdata('message1'); ?>
														<div class="alert alert-<?php echo $message1['class']; ?>">
															<button class="close" data-dismiss="alert" type="button">×</button>
															<?php echo $message1['message1']; ?>
														</div>
														<?php }	?>
														<div class="row">
															<div class="col-lg-4"></div>
																<div class="col-lg-4">
																	<form action="" method="post" data-parsley-validate="" class="validate" enctype="multipart/form-data">
																		<div class="my-det">
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C21')){ ?><?php echo $this->lang->line('doctor_tab_C21'); }else{ ?>First Name<?php } ?></label>
																					<input type="text" class="form-control" value="<?php echo $doctor_personal->doctor_firstname;?>" id="doctor_firstname" name="doctor_firstname"  data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" " >
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C22')){ ?><?php echo $this->lang->line('doctor_tab_C22'); }else{ ?>Last Name<?php } ?></label>
																					<input type="text" class="form-control" id="doctor_lastname" value="<?php echo $doctor_personal->doctor_lastname;?>" name="doctor_lastname" data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" "  >
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C23')){ ?><?php echo $this->lang->line('doctor_tab_C23'); }else{ ?>E-mail<?php } ?></label>
																					<input type="text" class="form-control" id="email" name="email" value="<?php echo $doctor_personal->email;?>" data-parsley-trigger="change" data-parsley-type="email" required="">
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C24')){ ?><?php echo $this->lang->line('doctor_tab_C24'); }else{ ?>Gender<?php } ?></label>
																					<select class="form-control" id="exampleSelect1" value="<?php echo $doctor_personal->doctor_sex;?>" name="doctor_sex" required =" "> 
																						<option  <?php if($doctor_personal->doctor_sex == 'Female'):?>selected<?php endif; ?> ><?php if($this->lang->line('doctor_tab_C27')){ ?><?php echo $this->lang->line('doctor_tab_C27'); }else{ ?>Female<?php } ?></option>
																						<option <?php if($doctor_personal->doctor_sex == 'Male'):?>selected<?php endif; ?> ><?php if($this->lang->line('doctor_tab_C26')){ ?><?php echo $this->lang->line('doctor_tab_C26'); }else{ ?>Male<?php } ?></option>
																					</select>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C25')){ ?><?php echo $this->lang->line('doctor_tab_C25'); }else{ ?>Age<?php } ?></label>
																					<input type="text" class="form-control" id="doctor_age" name="doctor_age" value="<?php echo $doctor_personal->doctor_age;?>" required="" >
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<button value="doctorsubmit1" type="submit" name="doctorsubmit1" class="btn btn-default"><span><i class="fa fa-refresh"></i> </span><?php if($this->lang->line('doctor_tab_D')){ ?><?php echo $this->lang->line('doctor_tab_D'); }else{ ?>Update<?php } ?></button>
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
																<div class="col-lg-4"></div>
															</div>
														</div>
													</div>
												</div>
												<div id="menusss1" class="tab-pane fade">
													<div class="col-lg-offset-1 col-lg-10">
														<div class="my-details">
														<?php   if($this->session->flashdata('message2')) {
																$message2 = $this->session->flashdata('message2');  ?>
															<div class="alert alert-<?php echo $message2['class']; ?>">
																<button class="close" data-dismiss="alert" type="button">×</button>
																<?php echo $message2['message2']; ?>
															</div>
														<?php }	?>
														<div class="row">
															<div class="col-lg-1"></div>
																<div class="col-lg-10">
																	<form action="" method="post" data-parsley-validate="" class="validate" enctype="multipart/form-data">
																		<div class="my-det">
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C31')){ ?><?php echo $this->lang->line('doctor_tab_C31'); }else{ ?>Degree<?php } ?></label>
																					<select  name="doctor_degree[]" class="form-control select2" id="doctor_degree" multiple data-parsley-minSelect="1" required="">
																					<?php $arry_select = explode(",",$doctor_personal->doctor_degree);foreach($degree as $row_degree){ ?>
																						<option value="<?php echo $row_degree->id;?>" <?php if (in_array($row_degree->id, $arry_select))echo 'selected';  ?>><?php echo $row_degree->degree_name;?></option> 
																					<?php } ?>
																					</select>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C32')){ ?><?php echo $this->lang->line('doctor_tab_C32'); }else{ ?>Specialty<?php } ?></label>
																					<select   name="specialty[]" class="form-control select2" id="exampleSelect1"  multiple="multiple" data-parsley-minSelect="1" required="">
																					<?php $arry_select = explode(",", $doctor_personal->specialty); foreach($specialties as $row_specialty){ ?>
																						<option value="<?php echo $row_specialty->id;?>" <?php if (in_array($row_specialty->id, $arry_select)) echo 'selected';  ?>	>
																						<?php echo $row_specialty->specialty_name;?></option> 
																					<?php }?>
																					</select>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C33')){ ?><?php echo $this->lang->line('doctor_tab_C33'); }else{ ?>Reasons<?php } ?></label>
																					<select    name="visitation[]" class="form-control select2" id="reason_dropdown" multiple="multiple" data-parsley-minSelect="1" required="" ><?php $arry_select = explode(",", $doctor_personal->visitation); foreach($visitation as $row_reason){?>
																						<option value="<?php echo $row_reason->id;?>"
																						<?php if (in_array($row_reason->id, $arry_select)) echo 'selected';  ?> ><?php echo $row_reason->reason;?></option> <?php }?>
																					</select> 
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C34')){ ?><?php echo $this->lang->line('doctor_tab_C34'); }else{ ?>Awards<?php } ?></label>
																					<input type="text" name="doctor_awards" value="<?php echo $doctor_personal->doctor_awards;?>" class="form-control" id="example" required="" >
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C317')){ ?><?php echo $this->lang->line('doctor_tab_C317'); }else{ ?>Professional Memberships<?php } ?></label>
																					<input type="text" name=	"doctor_memberships" value="<?php echo $doctor_personal->doctor_memberships;?>" class="form-control" id="example" required="">
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-6">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C35')){ ?><?php echo $this->lang->line('doctor_tab_C35'); }else{ ?>Languages Spoken<?php } ?></label>
																					<select    name="doctor_languages[]" class="form-control select2" id="exampleSelect1" multiple="multiple" data-parsley-minSelect="1" required="" >
																					<?php $arry_select = explode(",", $doctor_personal->doctor_languages);foreach($tab_languages as $row_language){ ?>
																						<option value="<?php echo $row_language->id;?>" 
																						<?php if (in_array($row_language->id, $arry_select))
																						echo 'selected';  ?>><?php echo $row_language->language_name;?></option> 
																					<?php }?>  
																					</select> 
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-6">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C36')){ ?><?php echo $this->lang->line('doctor_tab_C36'); }else{ ?>Insurance<?php } ?></label>
                                                                                    <select    name="insurance[]" class="form-control select2" id="exampleSelect1" multiple="multiple" data-parsley-minSelect="1" required="" ><?php $arry_select = explode(",", $doctor_personal->doctor_languages);foreach($insurance as $row_insurance){ ?>
																						<option value="<?php echo $row_insurance->id;?>" 
																						<?php if (in_array($row_insurance->id, $arry_select))echo 'selected';  ?>><?php echo $row_insurance->insurance_name;?></option> 
																					<?php } ?>
																					</select> 
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-6">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C38')){ ?><?php echo $this->lang->line('doctor_tab_C38'); }else{ ?>Affiliation<?php } ?></label>
																					<select    name="doctor_affiliations[]" class="form-control select2" id="exampleSelect1" multiple="multiple" data-parsley-minSelect="1" required="" >
																					<?php $arry_select = explode(",", $doctor_personal->doctor_affiliations);foreach($affilliation as $row_affilliation){ ?>
																						<option value="<?php echo $row_affilliation->id;?>" 
																						<?php if (in_array($row_affilliation->id, $arry_select)) echo 'selected';  ?>><?php echo $row_affilliation->hospital_name;?></option> 
																					<?php } ?>	
																					</select> 
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C39')){ ?><?php echo $this->lang->line('doctor_tab_C39'); }else{ ?>Office Address<?php } ?></label>
                                                                                     <input type="text" name="doctor_office_address" value="<?php echo $doctor_personal->doctor_office_address;?>" class="form-control" id="example" required="" >
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C310')){ ?><?php echo $this->lang->line('doctor_tab_C310'); }else{ ?>Office City<?php } ?></label>
                                                                                     <select    name="cities_id" class="form-control"  required="" >
																						<option selected="selected" value="-1">
																						<?php ?>Select city<?php ?></option> 
																						<?php foreach($cities as $city){ ?>
																						<option value="<?php echo $city->id;?>" <?php if ($city->id == $doctor_personal->cities_id){ ?> selected = "selected" <?php } ?> > <?php echo $city->city; ?> </option><?php }  ?>
																					</select>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C311')){ ?><?php echo $this->lang->line('doctor_tab_C311'); }else{ ?>Latitude<?php } ?></label>
																					<input type="text" name="latitude" value="<?php echo $doctor_personal->latitude;?>" class="form-control" id="latitude" required="" ><br/>
																					<span><a href="#" id='pick-map'><?php if($this->lang->line('doctor_tab_C312')){ ?><?php echo $this->lang->line('doctor_tab_C312'); }else{ ?>Pick from map<?php } ?></a></span>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C313')){ ?><?php echo $this->lang->line('doctor_tab_C313'); }else{ ?>Longitude<?php } ?></label>
																					<input type="text" name="longitude" value="<?php echo $doctor_personal->longitude;?>" class="form-control" id="longitude" required="" >
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C314')){ ?><?php echo $this->lang->line('doctor_tab_C314'); }else{ ?>Experience<?php } ?></label>
																					<input type="text" name="doctor_experience" value="<?php echo $doctor_personal->doctor_experience;?>" class="form-control" id="example" required="" >
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<label for="example"><?php if($this->lang->line('doctor_tab_C315')){ ?><?php echo $this->lang->line('doctor_tab_C315'); }else{ ?>About Yourself (This will be displayed to patient)<?php } ?></label>
																					<textarea rows="4"  style="width: 100%;" class="form-control" name="about_doctor" id="about_doctor" required =" " maxlength="1000"><?php echo $doctor_personal->about_doctor;?></textarea>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-12">
																					<button type="submit" value="doctorsubmit2" name="doctorsubmit2" class="btn btn-default"><span><i class="fa fa-refresh"></i> </span><?php if($this->lang->line('doctor_tab_D')){ ?><?php echo $this->lang->line('doctor_tab_D'); }else{ ?>Update<?php } ?></button>
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
																<div class="col-lg-1"></div>
															</div>
														</div>
													</div>
													<div class="col-lg-12">
														<h5 class="pad-center pad-center-1"><img src="<?php echo base_url(); ?>assets/images/patient-login/tick.png" > </h5>
													</div>
													</div>
													<div id="menusss2" class="tab-pane fade">
														<div class="col-lg-offset-1 col-lg-10">
															<div class="my-details">
															<?php if($this->session->flashdata('message3')) {
																$message3 = $this->session->flashdata('message3'); ?>
																<div class="alert alert-<?php echo $message3['class']; ?>">
																	<button class="close" data-dismiss="alert" type="button">×</button>
																	<?php echo $message3['message3']; ?>
																</div>
															<?php }	?>
															<div class="row">
																<div class="col-lg-1"></div>
																	<div class="col-lg-10">
																		<form action="" method="post" data-parsley-validate="" class="validate" enctype="multipart/form-data">
																			<div class="my-det">
																				<div class="row">
																					<div class="col-lg-6">
																						<div class="form-group">
																							<div class="col-lg-12">
																								<label for="example"><?php if($this->lang->line('doctor_tab_C41')){ ?><?php echo $this->lang->line('doctor_tab_C41'); }else{ ?>Current Pasword<?php } ?></label>
																								<input type="password" name="old_password" class="form-control" id="example" data-parsley-minlength="6" required="">
																							</div>
																						</div>
																						<div class="form-group">
																							<div class="col-lg-12">
																								<label for="example"><?php if($this->lang->line('doctor_tab_C42')){ ?><?php echo $this->lang->line('doctor_tab_C42'); }else{ ?>New Pssword<?php } ?></label>
																								<input type="password" name="new_password" class="form-control" id="example" data-parsley-minlength="6" required="">
																							</div>
																						</div>
																						<div class="form-group">
																							<div class="col-lg-12">
																								<label for="example"><?php if($this->lang->line('doctor_tab_C43')){ ?><?php echo $this->lang->line('doctor_tab_C43'); }else{ ?>Re-type New Password<?php } ?></label>
																								<input type="password" name="re_password" class="form-control" id="example" data-parsley-minlength="6" required="">
																							</div>
																						</div>
																						<div class="form-group">
																							<div class="col-lg-12">
																								<button type="submit" value="doctorsubmit3"  name="doctorsubmit3" class="btn btn-default"><span><i class="fa fa-refresh"></i> </span><?php if($this->lang->line('doctor_tab_D')){ ?><?php echo $this->lang->line('doctor_tab_D'); }else{ ?>Update<?php } ?></button>
																							</div>
																						</div>
																					</div>
																					<div class="col-lg-6">
																						<div class="pass-advice">
																							<h6><?php if($this->lang->line('doctor_tab_C44')){ ?><?php echo $this->lang->line('doctor_tab_C44'); }else{ ?>The Password Advice<?php } ?></h6>
																							<ul>
																								<li><?php if($this->lang->line('doctor_tab_C45')){ ?><?php echo $this->lang->line('doctor_tab_C45'); }else{ ?>Has 12 Characters, Minimum<?php } ?></li>
																								<li><?php if($this->lang->line('doctor_tab_C46')){ ?><?php echo $this->lang->line('doctor_tab_C46'); }else{ ?>Includes Numbers and Symbols<?php } ?></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</form>
																	</div>
																	<div class="col-lg-1"></div>
																</div>
															</div>
														</div>
													</div>
													<div id="menusss3" class="tab-pane fade">
														<div >
															<div class="my-details">
																<div class="row">
																	<div class="col-lg-1"></div>
																	<div class="col-lg-10">
																		<div class="row  ">
																		<?php if(!empty($doctor_pictures)){ ?>
																		<?php foreach ($doctor_pictures as $doc_gallery){ ?>
																			<div class="col-lg-3">
																				<div class="form-group">
																					<button class="close forimageclose"  id="<?php echo $doc_gallery->id; ?>" type="button">×</button>
																					<img src= "<?php echo base_url().'admin/'.$doc_gallery->image;?>" alt="" class="img-responsive round-mn"/>
																				</div>
																			</div>
																			<?php } ?>
																			<?php }else{ ?>
																			<div class="col-lg-3">
																				<div class="form-group">
																				<img src= "<?php echo base_url(); ?>assets/images/dashboard/11.png" alt="" class="img-responsive round-mn"/>
																				</div>
																			</div>
																			<?php } ?>
																			<form method="post" id="gallery_imagefirst" enctype="multipart/form-data">
																				<div class="inputimage" ><input type="file" name="image" id="gallery_image1" class="custom-file-input">
																					<input type="hidden" name="doctorsubmitgallery1" value="doctorsubmitgallery1" id="doctorsubmitgallery1" class="custom-file-input">
																				</div>
																			</form>
																		</div>
																		<div class="col-lg-1"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!---- menu ----->
													<div id="menusss4" class="tab-pane fade">
														<div class="col-lg-offset-1 col-lg-10">
															<div class="my-details">
															<?php if($this->session->flashdata('message_package')) {  $message_package = $this->session->flashdata('message_package'); ?>
																<div class="alert alert-<?php echo $message_package['class']; ?>">
																	<button class="close" data-dismiss="alert" type="button">×</button>
																	<?php echo $message_package['message_package']; ?>
																</div>
															<?php }	?>
																<div class="row">
																	<div class="col-lg-1"></div>
																	<div class="col-lg-10">
																		<div class="row">
																		<?php foreach ($all_package as $packs){ ?>
																			<div class="col-lg-4 right_pad">
																				<div class="form-group">
																					<div class="first_pack">
																						<?php if($packs->package_name == 'silver'){ ?>
																						<img src="<?php echo base_url(); ?>assets/images/packages/noti_pic1.png" alt="" class=""/>
																						<?php }elseif($packs->package_name == 'gold'){ ?>
																						<img src="<?php echo base_url(); ?>assets/images/packages/noti_pic2.png"  alt="" class=""/>
																						<?php }elseif($packs->package_name == 'diamond'){ ?>
																						<img src="<?php echo base_url(); ?>assets/images/packages/noti_pic3.png"  alt="" class=""/>
																						<?php }else{ ?>
																						<img src="<?php echo base_url(); ?>assets/images/packages/noti_pic1.png" alt="" class=""/>
																						<?php } ?>
																						<h3><?php echo $packs->package_name;?><span class="pack_price"><?php echo get_currency()->currrency_symbol;?> <?php echo $packs->package_price; ?></span></h3>
																						<h5><?php echo $packs->package_period; ?></h5><hr>
																						<p><?php if($this->lang->line('doctor_tab_C61')){ ?><?php echo $this->lang->line('doctor_tab_C61'); }else{ ?>Business name<?php } ?></p>
																						<p><?php if($this->lang->line('doctor_tab_C62')){ ?><?php echo $this->lang->line('doctor_tab_C62'); }else{ ?>Business description<?php } ?></p>
																						<p><?php if($this->lang->line('doctor_tab_C63')){ ?><?php echo $this->lang->line('doctor_tab_C63'); }else{ ?>Location<?php } ?></p>
																						<p><?php if($this->lang->line('doctor_tab_C64')){ ?><?php echo $this->lang->line('doctor_tab_C64'); }else{ ?>Working hours<?php } ?></p>
																						<p><?php if($this->lang->line('doctor_tab_C65')){ ?><?php echo $this->lang->line('doctor_tab_C65'); }else{ ?>Phone Number<?php } ?></p>
																						<form method="post" action="" enctype="multipart/form-data">
																							<input type="hidden" name="status" value="0" >
																							<button class="first_pack_btn buy_now" name="package_id" value="<?php echo $packs->id;?>" ><?php if($this->lang->line('doctor_tab_C66')){ ?><?php echo $this->lang->line('doctor_tab_C66'); }else{ ?>Select<?php } ?></button>
																					</div>
																				</div>
																			</div>
																		<?php } ?>
																		</form>
																		</div>
																		<div class="col-lg-1"></div>
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
							</div>
						</div>
					</div>
				</div>
			</div>
<!--patient-login-->
	<div class="modal fade modal-wide" id="myModalmapbmd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Select location</h4>
				</div>
				<div class="modal-body" id="canvas1">
					<div id='map_canvas' ></div>
					<div id="current">Nothing yet...</div>
					<input type="hidden" id="pick-lat" />
					<input type="hidden" id="pick-lng" />                    
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-custom select-location">Select Location</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div>					