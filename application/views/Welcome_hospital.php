<?php   $username=$this->session->userdata['frontend_logged_in']['username']; 
		$hos_id=$this->session->userdata['frontend_logged_in']['id']; 		
		$trial_date=$this->session->userdata['frontend_logged_in']['trial_date']; 
		$end_date=$this->session->userdata['frontend_logged_in']['end_date']; 
		$current_date = date('Y-m-d'); 	
		
		$tab_languages = $languages;
		$settings = get_icon();
        $id = $settings->languages;
        $query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;    ?>
<input type="hidden" value="hospital" id="tabtakeparser" >
<div class="share animated zoomIn hvr-grow">
	<img src="<?php echo base_url(); ?>assets/images/home/share.png"  alt=""/>
</div>
<!--patient-login search-->
<div class="container-fluid srch-patient-log srch-patient-log-clinic">
	<div class="container">
		<div class="sel-clinic-main">	
			<div class="col-lg-12 ">
				<div class="col-lg-12">
					<div class="col-lg-12 pad-zero">
						<div class="row">
							<div class="col-lg-3 pad-zero sel-cl-mn sel-dashboard">
								<div class="sel-clinic-tab dashboard-link">
									<h4><?php if($this->lang->line('hospital_tab_A')){ ?><?php echo $this->lang->line('hospital_tab_A'); }else{ ?>Dashboard Menu<?php } ?></h4>
									<ul>									
										<li data-tab="tab-manage-1" class="li-man">
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/1.png" /> </span><?php if($this->lang->line('hospital_tab_B')){ ?><?php echo $this->lang->line('hospital_tab_B'); }else{ ?>My Listings <?php } ?></h6>
										</li>
										<li data-tab="tab-manage-2" class="li-man" id="triggermap">
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/2.png" /> </span><?php if($this->lang->line('hospital_tab_C')){ ?><?php echo $this->lang->line('hospital_tab_C'); }else{ ?>Add Listing<?php } ?></h6>
										</li>										   
										<li data-tab="tab-manage-3" class="li-man">
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/3.png" /> </span><?php if($this->lang->line('hospital_tab_D')){ ?><?php echo $this->lang->line('hospital_tab_D'); }else{ ?>Appointment<?php } ?></h6>
										</li>
										<li data-tab="tab-manage-4" class="li-man">
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/4.png" /> </span><?php if($this->lang->line('hospital_tab_E')){ ?><?php echo $this->lang->line('hospital_tab_E'); }else{ ?>Past Appointments<?php } ?></h6>
										</li>																				 
										<li data-tab="tab-manage-8" class="li-man"  >
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/2.png" /> </span><?php if($this->lang->line('hospital_tab_F')){ ?><?php echo $this->lang->line('hospital_tab_F'); }else{ ?>Update Features<?php } ?></h6>
										</li>									 
										<li data-tab="tab-manage-9" class="li-man"  >
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/2.png" /> </span><?php if($this->lang->line('hospital_tab_G')){ ?><?php echo $this->lang->line('hospital_tab_G'); }else{ ?>Add Gallery<?php } ?></h6>
										</li>									 
										<li data-tab="tab-manage-5" class="li-man" id="avoidinterrupthome3">
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/5.png" /> </span><?php if($this->lang->line('hospital_tab_H')){ ?><?php echo $this->lang->line('hospital_tab_H'); }else{ ?>Settings<?php } ?></h6>
										</li>
										<li data-tab="tab-manage-10" class="li-man"  >
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/5.png" /> </span><?php if($this->lang->line('hospital_tab_J')){ ?><?php echo $this->lang->line('hospital_tab_J'); }else{ ?>Packages<?php } ?></h6>
										</li>
										<li data-tab="tab-manage-6" class="li-man">
											<a href = "<?php echo base_url(); ?>Logout"><h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/6.png" /> </span><?php if($this->lang->line('hospital_tab_k')){ ?><?php echo $this->lang->line('hospital_tab_k'); }else{ ?>Sign out <?php } ?></h6></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-9">									
								<div class="manage-ad-inner-main tab-manage-1 forhomesubhosp ">
									<div class="checkin-homesubhosp">
										<?php if($end_date == NULL && $trial_date >= $current_date  ){?>
										<div class="head-my-listing">
											<div class="alert">
												<button class="close" data-dismiss="alert" type="button">×</button>
												<h3><?php if($lghosmod101){ echo $lghosmod101; }else { ?>Alert Message<?php } ?>:</h3>
												<h4><?php if($lghosmod102){ echo $lghosmod102; }else { ?> You are using 15 days free trial version.Once the trial period is expired , your hospital listing will be removed from Search Filter. Select any package to extend your service under Bookmydoc.<?php } ?>
												</h4>
											</div>								 
										</div>
										<?php } elseif($end_date < $current_date) { ?>
										<div class="head-my-listing">
											<div class="alert">
												<button class="close" data-dismiss="alert" type="button">×</button>
												<h3><?php if($lghosmod101){ echo $lghosmod101; }else { ?>Alert Message<?php } ?>:</h3>
												<h4>  <?php if($lghosmod103){ echo $lghosmod103; }else { ?>Your Package period is expired . Kindly Select any package to list your hospital under Bookmydoc.<?php } ?>
												</h4>
											</div>								 
										</div>
										<?php } else{ ?>
										<?php } ?>										
										<?php if(isset($sub_hospitals) && !empty($sub_hospitals)) { ?>
										<div class="head-my-listing">
											<h3><?php if($this->lang->line('hospital_tab_B1')){ ?><?php echo $this->lang->line('hospital_tab_B1'); }else{ ?>Listings under <?php } ?><?php echo $username; ?></h3>
										</div>
										<div class="mn-dash-scroll">			
											<?php foreach ($sub_hospitals as $mysubhosp ){ ?>  
											<div class="col-lg-12">
												<div class="col-lg-8 evt-br">
													<div class="left-events left-img-ph left-img-ph-2">
														<img src="<?php echo base_url().'admin/'.$mysubhosp->display_image; ?>" />
													</div>
													<div class="left-events">
														<h5 class="lft-h5"><?php echo $mysubhosp->hospital_name;?></h5>
														<div class="gc-ratting" data-rate="<?php echo $mysubhosp->avg_rating; ?>" ></div>                                                       
														<div class="pt-ent">
															<div class="row">
																<div class="col-lg-1">
																	<img src="<?php echo base_url(); ?>assets/images/patient-login/13.png" />
																</div>
																<div class="col-lg-4">
																	<h6><?php echo $mysubhosp->hospital_address; ?> <?php echo $mysubhosp->city_name;?>,<?php echo $mysubhosp->state_name;?>,<?php echo $mysubhosp->country_name;?>.<?php echo $mysubhosp->hospital_zip;?></h6>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-2 evt-br-1 view-cln-1">
													<div class="view-clinic view-dash-mn">
														<a href="javascript:void(0);" id="<?php echo $mysubhosp->id;?>" class="hospitaljuncdoctoranother" ><h5><span><i class="fa fa-pencil"></i> </span><?php if($this->lang->line('hospital_tab_B2')){ ?><?php echo $this->lang->line('hospital_tab_B2'); }else{ ?>Edit<?php } ?></h5></a>
                                                        <h5><?php if($this->lang->line('hospital_tab_B3')){ ?><?php echo $this->lang->line('hospital_tab_B3'); }else{ ?>Published<?php } ?></h5>
                                                        <h5><?php if($this->lang->line('hospital_tab_B4')){ ?><?php echo $this->lang->line('hospital_tab_B4'); }else{ ?>Hits - 0<?php } ?></h5>
                                                        <h6><a href="javascript:void(0);" id="<?php echo $mysubhosp->id;?>" class="hospitaljuncdoctoranotherdelete" ><?php if($this->lang->line('hospital_tab_B5')){ ?><?php echo $this->lang->line('hospital_tab_B5'); }else{ ?> Remove<?php } ?></a></h6>
													</div>
												</div>
											</div>
											<?php } ?>                                             
										</div>
										<?php } else{ ?> 
										<div class="head-my-listing">
											<h1 > No Listings Found </h1>
										</div>
										<?php } ?> 
									</div>
								</div>
								<div class="manage-ad-inner-main tab-manage-2">
									<ul class="nav nav-tabs nav-hospital">                                                
										<li class="active"><a data-toggle="tab" href="#hospital_doc" id="avoidinterrupthome1"><?php if($this->lang->line('hospital_tab_C1')){ ?><?php echo $this->lang->line('hospital_tab_C1'); }else{ ?>Add Hospital<?php } ?></a></li>
										<li><a data-toggle="tab" href="#doctor" id="avoidinterrupthome2"><?php if($this->lang->line('hospital_tab_C2')){ ?><?php echo $this->lang->line('hospital_tab_C2'); }else{ ?>Add Doctor<?php } ?></a></li>
									</ul>
										<div class="tab-content hospital-tab-content">
											<!--- new start ----->
											<div id="hospital_doc" class="tab-pane fade in active">
												<div class="row">	
													<div class="col-lg-8">
														<div class="row add-mnb" >
															<ul>
																<li data-tab="tab-man-1-hosp" class="li-m-hosp">
																	<div class="col-lg-6 checkinsidehospital">
																		<div class="add-new-doc">
																			<h5><a href="javascript:void(0);"><?php if($this->lang->line('hospital_tab_C11')){ ?><?php echo $this->lang->line('hospital_tab_C11'); }else{ ?>Add New Hospital<?php } ?></a></h5>
																		</div>
																	</div>
																</li>
																<li data-tab="tab-man-2-hosp" class="li-m-hosp">
																	<div class="col-lg-6">
																		<div class="view-new-doc">
																			<h5><a href="javascript:void(0);"><?php if($this->lang->line('hospital_tab_C12')){ ?><?php echo $this->lang->line('hospital_tab_C12'); }else{ ?>View Hospitals<?php } ?></a></h5>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-lg-2"></div>
												</div>
												<div class="manage-ad-inner-mains-hosp tab-man-1-hosp subhosp-listing">
													<?php   if($this->session->flashdata('messagedash1')) {
															$messagedash1 = $this->session->flashdata('messagedash1');  ?>
													<div class="alert alert-<?php echo $messagedash1['class']; ?>">
														<button class="close" data-dismiss="alert" type="button">×</button>
														<?php echo $messagedash1['messagedash1']; ?>
													</div>
													<?php  } ?>
													<div class="form-hospital-dash outhospitaladd">
														<form method="post" data-parsley-validate="" enctype="multipart/form-data">
															<div class="upload-hospital">
																<div class="upload-section-tag">
																	<input type="file" id="uploadhosp" name="display_image" style="visibility: hidden; width: 1px; height: 1px" required="" />
																		<h5><a href=""  Onclick="document.getElementById('uploadhosp').click(); return false" id="upload_link"><?php if($this->lang->line('hospital_tab_B21')){ ?><?php echo $this->lang->line('hospital_tab_B21'); }else{ ?>Browse Photo<?php } ?></a></h5>
																</div>
															</div>
															<div class="clearfix"></div>
															<div class="form-group hos-frm-grp">
																<div class="col-lg-10">
																	<div class="row">
																		<input type="hidden" name="status" value="1">
																		<input type="hidden" name="trial_date" value="<?php echo  date("Y-m-d", strtotime("+15 days")); ?>" >
																		<input type="hidden" name="terms" value="agreed" >
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C111')){ ?><?php echo $this->lang->line('hospital_tab_C111'); }else{ ?>Hospital Name<?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control"  placeholder="Hospital Name" name="hospital_name" data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" " >
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C112')){ ?><?php echo $this->lang->line('hospital_tab_C112'); }else{ ?>Email<?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control"  placeholder="email" name="email" data-parsley-trigger="change" data-parsley-type="email" required="" >
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C113')){ ?><?php echo $this->lang->line('hospital_tab_C113'); }else{ ?>Password<?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="password" class="form-control"   name="password" data-parsley-minlength="6" required="">
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C114')){ ?><?php echo $this->lang->line('hospital_tab_C114'); }else{ ?>Established in<?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control"  placeholder="YYYY/MM/DD" name="hospital_established_date" required="">
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C116')){ ?><?php echo $this->lang->line('hospital_tab_C116'); }else{ ?>Website<?php } ?> </h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control"  placeholder="www.example.com" name="hospital_website" required="">
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_B26')){ ?><?php echo $this->lang->line('hospital_tab_B26'); }else{ ?>Phone <?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control" id="example" placeholder="123456789" name="phone" data-parsley-type="digits" data-parsley-type-message="only numbers" data-parsley-maxlength="16" required =" ">
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_B29')){ ?><?php echo $this->lang->line('hospital_tab_B29'); }else{ ?>city  <?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<select    name="cities_id" class="form-control" id="city_dropdown_docsubcenter"  required="">
																				<option selected="selected" disabled ><?php if($this->lang->line('hospital_tab_C118')){ ?><?php echo $this->lang->line('hospital_tab_C118'); }else{ ?>Select city<?php } ?></option>
																				<?php foreach($cities as $city): ?>
																				<option  value="<?php echo $city->id; ?>" ><?php echo $city->city; ?></option>
																				<?php endforeach; ?>
																			</select>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_B210')){ ?><?php echo $this->lang->line('hospital_tab_B210'); }else{ ?>Address <?php } ?> </h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<textarea class="form-control" placeholder="Address here" name="hospital_address" required=""></textarea>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C1110')){ ?><?php echo $this->lang->line('hospital_tab_C1110'); }else{ ?>Latitude <?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control" id="latitude-hosp" placeholder="Name" name="latitude" required=""><br/>
																			<span><a href="#" id='pick-map-hosp'><?php if($this->lang->line('hospital_tab_C1113')){ ?><?php echo $this->lang->line('hospital_tab_C1113'); }else{ ?>Pick from map<?php } ?></a></span>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C1111')){ ?><?php echo $this->lang->line('hospital_tab_C1111'); }else{ ?>Longitude <?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control" id="longitude-hosp"  name="longitude" required="">
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C1116')){ ?><?php echo $this->lang->line('hospital_tab_C1116'); }else{ ?>About <?php } ?> </h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<textarea class="form-control" name="about_hospital" required=""></textarea>
																		</div>
																	</div>
																</div>
															</div>
															<div class="clearfix"></div>
															<div class="row">
																<div class="col-lg-10">
																	<h4 class="h4-sub-mn"><button type="submit" name="hospital_addition" value="hospital_addition" class="btn btn-default bfn-sve"><?php if($this->lang->line('hospital_tab_C1112')){ ?><?php echo $this->lang->line('hospital_tab_C1112'); }else{ ?>Add<?php } ?><span><img src="<?php echo base_url(); ?>assets/images/dashboard/15.png" /></span></button></h4>
																</div>
															</div>
														</form>
													</div>
												</div>
												<div class="manage-ad-inner-mains-hosp tab-man-2-hosp ">
													<?php   if($this->session->flashdata('messagedash2')) {
															$messagedash2 = $this->session->flashdata('messagedash2');  ?>
													<div class="alert alert-<?php echo $messagedash2['class']; ?>">
														<button class="close" data-dismiss="alert" type="button">×</button>
														<?php echo $messagedash2['messagedash2']; ?>
													</div>
													<?php } ?>
													<div class="hospital-checkin" >
														<div class="tbn-r">
															<div class="col-lg-1"></div>
															<div class="col-lg-11 tbn-r-1">
																<?php foreach ($sub_hospitals as $subhosp){ ?>
																<div class="row">
																	<div class="col-lg-7">
																		<div class="prf-add-dct">
																			<img src="<?php echo base_url().'admin/'.$subhosp->display_image; ?>" />
																			<div class="prf-add-dct-1">
																				<h3><?php echo $subhosp->hospital_name; ?></h3>
																				<h4><?php echo $subhosp->hospital_address; ?></h4>
																				<p><?php echo $subhosp->city_name; ?>,<?php echo $subhosp->state_name; ?>,<?php echo $subhosp->country_name; ?>  <?php echo $subhosp->hospital_zip; ?>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="prf-rght-dash">
																			<a href="javascript:void(0);"  class="hospitaljuncdoctor" id="<?php echo $subhosp->id; ?>">  <i class="fa fa-pencil"></i>
																			<div class="clearfix"></div>
																			<h4><?php if($this->lang->line('hospital_tab_B2')){ ?><?php echo $this->lang->line('hospital_tab_B2'); }else{ ?>Edit<?php } ?></h4></a>
																		</div>
																	</div>
																</div>
																<?php }?>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!----new exit---->
											<div id="doctor" class="tab-pane fade">
												<div class="row">
													<div class="col-lg-8">
														<div class="row add-mnb" >
															<ul>
																<li data-tab="tab-man-1" class="li-m">
																	<div class="col-lg-6">
																		<div class="add-new-doc">
																			<h5><a href="javascript:void(0);"><?php if($this->lang->line('hospital_tab_C21')){ ?><?php echo $this->lang->line('hospital_tab_C21'); }else{ ?>Add New Doctor<?php } ?></a></h5>
																		</div>
																	</div>
																</li>
																<li data-tab="tab-man-2" class="li-m">
																	<div class="col-lg-6">
																		<div class="view-new-doc">
																			<h5><a href="javascript:void(0);"><?php if($this->lang->line('hospital_tab_B2')){ ?><?php echo $this->lang->line('hospital_tab_B2'); }else{ ?>View Doctors<?php } ?></a></h5>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-lg-2"></div>
												</div>
												<div class="manage-ad-inner-mains tab-man-1 dochosp">
													<?php   if($this->session->flashdata('messagedash3')) { 
															$messagedash3 = $this->session->flashdata('messagedash3');  ?>
													<div class="alert alert-<?php echo $messagedash3['class']; ?>">
														<button class="close" data-dismiss="alert" type="button">×</button>
														<?php echo $messagedash3['messagedash3']; ?>
													</div>
													<?php }	?>
													<div class="form-hospital-dash">
														<form method="post" data-parsley-validate="" enctype="multipart/form-data">
															<div class="upload-hospital">    
																<div class="upload-section-tag">
																	<input type="file" id="uploadhospdoc" name="display_image" style="visibility: hidden; width: 1px; height: 1px" required="" />
																	<h5><a href=""  Onclick="document.getElementById('uploadhospdoc').click(); return false" id="upload_link_doc"><?php if($this->lang->line('hospital_tab_B21')){ ?><?php echo $this->lang->line('hospital_tab_B21'); }else{ ?>Browse Photo<?php } ?></a></h5>
																</div>
															</div>
															<div class="clearfix"></div>
															<div class="form-group hos-frm-grp">
																<div class="col-lg-10">
																	<div class="row">
																		<input type="hidden" name="status" value="1">
																		<input type="hidden" name="trial_date" value="<?php echo  date("Y-m-d", strtotime("+15 days")); ?>" >
																		<input type="hidden" name="terms" value="agreed" >
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C211')){ ?><?php echo $this->lang->line('hospital_tab_C211'); }else{ ?>Doctor Firstname<?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control"  placeholder="<?php if($this->lang->line('hospital_tab_C211')){ ?><?php echo $this->lang->line('hospital_tab_C211'); }else{  echo "doctor firstname"; } ?>" name="doctor_firstname" data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" " >
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C212')){ ?><?php echo $this->lang->line('hospital_tab_C212'); }else{ ?>Doctor Lastname<?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control"  placeholder="<?php if($this->lang->line('hospital_tab_C212')){ ?><?php echo $this->lang->line('hospital_tab_C212'); }else{ echo "doctor lastname"; } ?>" name="doctor_lastname" data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" " >
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C112')){ ?><?php echo $this->lang->line('hospital_tab_C112'); }else{ ?>Email<?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control"  placeholder="<?php if($this->lang->line('hospital_tab_C112')){ ?><?php echo $this->lang->line('hospital_tab_C112'); }else{ echo "email"; } ?>" name="email" data-parsley-trigger="change" data-parsley-type="email" required="" >
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C113')){ ?><?php echo $this->lang->line('hospital_tab_C113'); }else{ ?>Password<?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="password" class="form-control"   name="password" data-parsley-minlength="6" required="">
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C113')){ ?><?php echo $this->lang->line('hospital_tab_C113'); }else{ ?>Phone <?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control" id="example" placeholder="123456789" name="phone" data-parsley-type="digits" data-parsley-type-message="only numbers" data-parsley-maxlength="16" required =" ">
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C1115')){ ?><?php echo $this->lang->line('hospital_tab_C1115'); }else{ ?>city <?php } ?> </h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<select    name="cities_id" class="form-control" id="city_dropdown_docsubcenter"  required="">
																				<option selected="selected" disabled ><?php if($this->lang->line('hospital_tab_C118')){ ?><?php echo $this->lang->line('hospital_tab_C118'); }else{ ?>Select city<?php } ?></option>
																				<?php foreach($cities as $city): ?>
																				<option  value="<?php echo $city->id; ?>" ><?php echo $city->city; ?></option>
																				<?php endforeach; ?>
																			</select>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C1117')){ ?><?php echo $this->lang->line('hospital_tab_C1117'); }else{ ?>Address <?php } ?> </h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<textarea class="form-control" placeholder="Address here" name="doctor_office_address" required=""></textarea>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C1110')){ ?><?php echo $this->lang->line('hospital_tab_C1110'); }else{ ?>Latitude <?php } ?></h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control" id="latitude-doc"  name="latitude" required=""><br/>
																			<span><a href="#" id='pick-map-doc'><?php if($this->lang->line('hospital_tab_C1113')){ ?><?php echo $this->lang->line('hospital_tab_C1113'); }else{ ?>Pick from map<?php } ?></a></span>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C1111')){ ?><?php echo $this->lang->line('hospital_tab_C1111'); }else{ ?>Longitude<?php } ?> </h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<input type="text" class="form-control" id="longitude-doc"  name="longitude" required="">
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3">
																			<div class="text-left-hsp">
																				<h6><?php if($this->lang->line('hospital_tab_C1116')){ ?><?php echo $this->lang->line('hospital_tab_C1116'); }else{ ?>About <?php } ?> </h6>
																			</div>
																		</div>
																		<div class="col-lg-8">
																			<textarea class="form-control" name="about_doctor" placeholder="" required=""></textarea>
																		</div>
																	</div>
																</div>
															</div>
															<div class="clearfix"></div>
															<div class="row">
																<div class="col-lg-10">
																	<h4 class="h4-sub-mn"><button type="submit" name="hospital-doc_addition" value="hospital-doc_addition" class="btn btn-default bfn-sve"><?php if($this->lang->line('hospital_tab_C1112')){ ?><?php echo $this->lang->line('hospital_tab_C1112'); }else{ ?>Add<?php } ?><span><img src="<?php echo base_url(); ?>assets/images/dashboard/15.png" /></span></button></h4>
																</div>
															</div>
														</form>
													</div>
												</div>
												<div class="manage-ad-inner-mains tab-man-2 dochosp">
													<?php   if($this->session->flashdata('messagedash4')) { 
															$messagedash4 = $this->session->flashdata('messagedash4');  ?>
													<div class="alert alert-<?php echo $messagedash4['class']; ?>">
														<button class="close" data-dismiss="alert" type="button">×</button>
														<?php echo $messagedash4['messagedash4']; ?>
													</div>
													<?php }	?>
													<div class="hospital-checkin-doc" >
														<div class="tbn-r">
															<div class="col-lg-1"></div>
															<div class="col-lg-11 tbn-r-1">
																<?php foreach ($mydoc_hospital as $mydoc_hospital_detail){ ?>
																<div class="row">
																	<div class="col-lg-7">
																		<div class="prf-add-dct">
																			<img src="<?php echo base_url().'admin/'.$mydoc_hospital_detail->display_image; ?>" />
																			<div class="prf-add-dct-1">
																				<h3>Dr. <?php echo $mydoc_hospital_detail->doctor_firstname;?> <?php echo $mydoc_hospital_detail->doctor_lastname;?></h3>
																				<h4><?php echo $mydoc_hospital_detail->degree_name;?> <?php echo $mydoc_hospital_detail->specialty_name;?></h4>
																				<p><?php echo $mydoc_hospital_detail->doctor_office_address;?> <?php echo $mydoc_hospital_detail->city_name;?>,
																				<?php echo $mydoc_hospital_detail->state_name;?> <?php echo $mydoc_hospital_detail->country_name;?>. 
																				<?php echo $mydoc_hospital_detail->doctor_office_zip;?>
																				</p>
																			</div>	
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="prf-rght-dash">
																			<a href="javascript:void(0);"  class="hospitaljunchospdoctor" id="<?php echo $mydoc_hospital_detail->id; ?>"><i class="fa fa-pencil"></i>
																			<div class="clearfix"></div>
																			<h4><?php if($this->lang->line('hospital_tab_B2')){ ?><?php echo $this->lang->line('hospital_tab_B2'); }else{ ?>Edit<?php } ?></h4></a>
																		</div>
																	</div>
																</div>
																<?php } ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="manage-ad-inner-main tab-manage-3">
										<div class="main-2-prof">
											<div class="row">
												<div class="col-lg-1"></div>
												<div class="col-lg-11">
													<div class="row">
														<div class="col-lg-5">
															<h4><?php if($this->lang->line('hospital_tab_D1')){ ?><?php echo $this->lang->line('hospital_tab_D1'); }else{ ?>Doctor Name<?php } ?></h4>
														</div>
														<div class="col-lg-7">
															<h4><?php if($this->lang->line('hospital_tab_D2')){ ?><?php echo $this->lang->line('hospital_tab_D2'); }else{ ?>Total Appointments<?php } ?></h4>
														</div>                                                        
													</div>
												</div>
											</div>
										</div>
										<div class="main-3-prof">											
											<?php foreach($app_doc as $app_doc_detail){ ?>
											<div class="row">
												<div class="col-lg-1"></div>
                                                <div class="col-lg-11">
													<div class="row">
														<div class="col-lg-6">
															<div class="prf-add-dct prf-add-dct-mn">
																<img src="<?php echo base_url().'admin/'.$app_doc_detail->display_image; ?>" />
																<div class="prf-add-dct-1 prf-add-dct-2">
																	<h3>Dr. <?php echo $app_doc_detail->doctor_firstname; ?>  <?php echo $app_doc_detail->doctor_lastname; ?></h3>
                                                                    <h4><?php echo $app_doc_detail->degree_name; ?>, <?php echo $app_doc_detail->specialty_name; ?></h4>
																</div>
															</div>
                                                        </div>
														<div class="col-lg-4">
															<div class="no-prf">
																<h5><?php echo $app_doc_detail->total; ?></h5>
															</div>
														</div>                                                        
													</div>
												</div>
											</div>
											<?php } ?>                                            
										</div>
									</div>
									<div class="manage-ad-inner-main tab-manage-4">
										<div class="main-2-prof">
											<div class="row">
												<div class="col-lg-1"></div>
												<div class="col-lg-11">
													<div class="row">
														<div class="col-lg-6">
															<h4 class="ap-date"><span><?php if($this->lang->line('hospital_tab_E1')){ ?><?php echo $this->lang->line('hospital_tab_E1'); }else{ ?>Appointment Upto<?php } ?></span><?php echo $current_date; ?></h4>
														</div>
														<div class="col-lg-6">
															<h4 class="ap-date-1"> <a href="<?php echo base_url(); ?>Welcome/pdf_hosp/<?php echo $current_date;?>" class="dwd"><?php if($this->lang->line('hospital_tab_E2')){ ?><?php echo $this->lang->line('hospital_tab_E2'); }else{ ?>Download<?php } ?><span><img src="<?php echo base_url(); ?>assets/images/dashboard/13.png"/> </span></a></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-3-prof">
											<?php foreach($an_patient_history as $appc_doc_detail){ ?>
											<div class="row">
												<div class="col-lg-1"></div>
                                                <div class="col-lg-11">												
													<div class="row">
														<div class="col-lg-5">
															<div class="prf-add-dct prf-add-dct-mn">
																<img src="<?php echo base_url().'admin/'.$appc_doc_detail->display_image; ?>" />
                                                                <div class="prf-add-dct-1 prf-add-dct-2">
                                                                    <h3><?php if($this->lang->line('hospital_tab_E3')){ ?><?php echo $this->lang->line('hospital_tab_E3'); }else{ ?>Dr. <?php } ?><?php echo $appc_doc_detail->doctor_firstname; ?>  <?php echo $appc_doc_detail->doctor_lastname; ?></h3>
                                                                    <h4><?php echo $appc_doc_detail->degree_name; ?>, <?php echo $appc_doc_detail->specialty_name; ?></h4>
																</div>
															</div>
														</div>
														<div class="col-lg-3">
															<div class="no-prf-1">
																<h6><?php if($this->lang->line('hospital_tab_E4')){ ?><?php echo $this->lang->line('hospital_tab_E4'); }else{ ?>Patient Name<?php } ?></h6>
                                                                <h4><?php echo $appc_doc_detail->totalanother['patient_firstname']; ?>, <?php echo $appc_doc_detail->totalanother['patient_lastname']; ?></h4>
															</div>
														</div>
														<div class="col-lg-4">
															<div class="lst-no-prf">
																<h2><?php if($this->lang->line('hospital_tab_E5')){ ?><?php echo $this->lang->line('hospital_tab_E5'); }else{ ?>Appt Date<?php } ?> <span><?php echo $appc_doc_detail->appointment_date; ?></span></h2>
                                                                <h3><?php if($this->lang->line('hospital_tab_E6')){ ?><?php echo $this->lang->line('hospital_tab_E6'); }else{ ?>Appt Time <?php } ?><span><?php echo $appc_doc_detail->appointment_time; ?></span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>									
									<!----additional features start -------------->
									<div class="manage-ad-inner-main tab-manage-8">
										<?php   if($this->session->flashdata('messagedashfeat')) {
												$messagedashfeat = $this->session->flashdata('messagedashfeat');  ?>
										<div class="alert alert-<?php echo $messagedashfeat['class']; ?>">
											<button class="close" data-dismiss="alert" type="button">×</button>
											<?php echo $messagedashfeat['messagedashfeat']; ?>
										</div>
										<?php }	?>	
										<div class="form-hospital-dash outhospitaladd">
											<form method="post" data-parsley-validate="" enctype="multipart/form-data">
												<div class="clearfix"></div>
												<div class="form-group hos-frm-grp">
													<div class="col-lg-10">
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_F1')){ ?><?php echo $this->lang->line('hospital_tab_F1'); }else{ ?>Affiliations<?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<select    name="hospital_affilliations[]" class="form-control select2" id="exampleSelect1" multiple="multiple" data-parsley-minSelect="1" required="" >
																<?php $arry_select = explode(",", $hospital_data->hospital_affilliations); foreach($affilliation as $row_affilliation){ ?>
																	<option value="<?php echo $row_affilliation->id;?>" <?php if (in_array($row_affilliation->id, $arry_select)) echo 'selected';  ?>><?php echo $row_affilliation->hospital_name;?></option> 
																<?php } ?>                            
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_F2')){ ?><?php echo $this->lang->line('hospital_tab_F2'); }else{ ?>Amenities<?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<select    name="amenities[]" class="form-control select2" id="exampleSelect1" multiple="multiple" data-parsley-minSelect="1" required="" >
																<?php $arry_select = explode(",", $hospital_data->amenities); foreach($amenities as $row_amenities){ ?>
																	<option value="<?php echo $row_amenities->id;?>" <?php if (in_array($row_amenities->id, $arry_select)) echo 'selected';  ?>><?php echo $row_amenities->facility_name;?></option> 
																<?php } ?>                            
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_F3')){ ?><?php echo $this->lang->line('hospital_tab_F3'); }else{ ?>Languages<?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<select    name="hospital_languages[]" class="form-control select2" id="exampleSelect1" multiple="multiple" data-parsley-minSelect="1" required="" >
																<?php $arry_select = explode(",", $hospital_data->hospital_languages); foreach($tab_languages as $row_languages){ ?>
																	<option value="<?php echo $row_languages->id;?>" <?php if (in_array($row_languages->id, $arry_select)) echo 'selected';  ?>><?php echo $row_languages->language_name;?></option> 
																<?php } ?>                            
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_F4')){ ?><?php echo $this->lang->line('hospital_tab_F4'); }else{ ?>Specialty<?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<select    name="specialty[]" class="form-control select2" id="exampleSelect1" multiple="multiple" data-parsley-minSelect="1" required="" >
																	<?php $arry_select = explode(",", $hospital_data->specialty); foreach($specialties as $row_specialty){ ?>
																	<option value="<?php echo $row_specialty->id;?>" <?php if (in_array($row_specialty->id, $arry_select)) echo 'selected';  ?>><?php echo $row_specialty->specialty_name;?></option> 
																	<?php } ?>                            
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_F5')){ ?><?php echo $this->lang->line('hospital_tab_F5'); }else{ ?>Insurance<?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<select    name="insurance[]" class="form-control select2" id="exampleSelect1" multiple="multiple" data-parsley-minSelect="1" required="" >
																	<?php $arry_select = explode(",", $hospital_data->insurance); foreach($insurance as $row_insurance){ ?>
																	<option value="<?php echo $row_insurance->id;?>" <?php if (in_array($row_insurance->id, $arry_select)) echo 'selected';  ?>><?php echo $row_insurance->insurance_name;?></option> 
																	<?php } ?>
																</select> 
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_F6')){ ?><?php echo $this->lang->line('hospital_tab_F6'); }else{ ?>Visitation<?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<select    name="visitation[]" class="form-control select2" id="exampleSelect1" multiple="multiple" data-parsley-minSelect="1" required="" >
																	<?php $arry_select = explode(",", $hospital_data->visitation); foreach($visitation as $row_visitation){ ?>
																	<option value="<?php echo $row_visitation->id;?>" <?php if (in_array($row_visitation->id, $arry_select)) echo 'selected';  ?>><?php echo $row_visitation->reason;?></option> 
																	<?php } ?>                            
																</select> 
															</div>
														</div>
													</div>
												</div>	
												<div class="clearfix"></div>
												<div class="row">
													<div class="col-lg-10">
														<h4 class="h4-sub-mn"><button type="submit" name="hospital_additional-feat" value="hospital_additional-feat" class="btn btn-default bfn-sve"><?php if($lghosmod38){ echo $lghosmod38; }else { ?>Add<?php } ?><span><img src="<?php echo base_url(); ?>assets/images/dashboard/15.png" /></span></button></h4>
													</div>
												</div>
											</form>
										</div>	
									</div>
									<!----additional gallery start -------------->
									<div class="manage-ad-inner-main tab-manage-9">
										<?php   if($this->session->flashdata('messagedashgallery')) {
											    $messagedashgallery = $this->session->flashdata('messagedashgallery'); ?>
										<div class="alert alert-<?php echo $messagedashgallery['class']; ?>">
											<button class="close" data-dismiss="alert" type="button">×</button>
											<?php echo $messagedashgallery['messagedashgallery']; ?>
										</div>
										<?php }	?>
										<div class="form-hospital-dash outhospitaladd">
											<div class="row  ">
												<div class="head-my-listing">								
													<h3><?php if($this->lang->line('hospital_tab_G1')){ ?><?php echo $this->lang->line('hospital_tab_G1'); }else{ ?> Add Gallery Images<?php } ?>
													</h3>
												</div>
												<?php foreach ($gallery_hospital_pictures as $doc_gallery){ ?>
												<div class="col-lg-3">
													<div class="form-group">
														<button class="close forimagecloseforhospital"  id="<?php echo $doc_gallery->id; ?>" type="button">×</button>
														<img src= "<?php echo base_url().'admin/'.$doc_gallery->image;?>" alt="" class="img-responsive round-mn"/>                
													</div>
												</div>
												<?php } ?>
												<form method="post" id="gallery_imagefirst_hospital" enctype="multipart/form-data">
													<input type="file" name="image" id="gallery_image1_hospital" class="custom-file-input">
													<input type="hidden" name="hospital_id" value="<?php echo $hos_id;?>">
													<input type="hidden" name="doctorsubmitgallery1_hospital" value="doctorsubmitgallery1_hospital" id="doctorsubmitgallery1" class="custom-file-input">
												</form>														
											</div>												
										</div>             
									</div> 
									<div class="manage-ad-inner-main tab-manage-5">
										<div class="row">
											<div class="col-lg-8">
												<div class="row add-mnb" >
													<ul>
														<li data-tab="tab-man-11" class="li-m1">
															<div class="col-lg-6">
																<div class="add-new-doc add-new-doc-1">
																	<h5><a href="javascript:void(0);"><?php if($this->lang->line('hospital_tab_H1')){ ?><?php echo $this->lang->line('hospital_tab_H1'); }else{ ?> Profile Settings<?php } ?></a></h5>
																</div>
															</div>
														</li>
														<li data-tab="tab-man-21" class="li-m1">
															<div class="col-lg-6">
																<div class="view-new-doc">
																	<h5><a href="javascript:void(0);"><?php if($this->lang->line('hospital_tab_I')){ ?><?php echo $this->lang->line('hospital_tab_I'); }else{ ?> Change Security<?php } ?></a></h5>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-2"></div>
										</div>
										<div class="manage-ad-inner-mains1 tab-man-11 ">
											<div class="form-group hos-frm-grp hos-frm-grp-1">
												<?php   if($this->session->flashdata('messagedashhogg')) {
														$messagedashhogg = $this->session->flashdata('messagedashhogg'); ?>
												<div class="alert alert-<?php echo $messagedashhogg['class']; ?>">
													<button class="close" data-dismiss="alert" type="button">×</button>
													<?php echo $messagedashhogg['messagedashhogg']; ?>
												</div>
												<?php } ?>
												<form method="post" data-parsley-validate="" enctype="multipart/form-data">
													<div class="col-lg-10">
														<div class="row">
															<div class="upload-hospital">
																<img src="<?php echo base_url().'admin/'.$hospital_data->display_image; ?>" />
																<div class="upload-section-tag">
																	<input type="file" id="uploadhosphosp" name="display_image" style="visibility: hidden; width: 1px; height: 1px"  />
                                                                    <h5><a href=""  Onclick="document.getElementById('uploadhosphosp').click(); return false" id="upload_link_hosphosp"><?php if($this->lang->line('hospital_tab_B21')){ ?><?php echo $this->lang->line('hospital_tab_B21'); }else{ ?>Browse Photo<?php } ?></a></h5>
																</div>
															</div>
														</div>                                                            
														<div class="clearfix"></div></br>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H2')){ ?><?php echo $this->lang->line('hospital_tab_H2'); }else{ ?>Hospital<?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" class="form-control" value="<?php echo $hospital_data->hospital_name; ?>" name="hospital_name" data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" " placeholder="Name">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H6')){ ?><?php echo $this->lang->line('hospital_tab_H6'); }else{ ?>Established in<?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" class="form-control" value="<?php echo $hospital_data->hospital_established_date; ?>" name="hospital_established_date" placeholder="YYYY/MM/DD" required =" ">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H3')){ ?><?php echo $this->lang->line('hospital_tab_H3'); }else{ ?>PO Box<?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" value="<?php echo $hospital_data->hospital_zip; ?>" name="hospital_zip" class="form-control" placeholder="1234" data-parsley-type="digits" data-parsley-type-message="only numbers" data-parsley-maxlength="7" required =" ">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H8')){ ?><?php echo $this->lang->line('hospital_tab_H8'); }else{ ?>Website <?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" value="<?php echo $hospital_data->hospital_website; ?>" name="hospital_website" class="form-control" placeholder="<?php if($lghosmod72){ echo $lghosmod72; }else { echo "www.example.com"; }?>" required="">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H9')){ ?><?php echo $this->lang->line('hospital_tab_H9'); }else{ ?>Phone <?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" class="form-control" value="<?php echo $hospital_data->phone; ?>" name="phone" id="example" placeholder="<?php if($lghosmod74){ echo $lghosmod74; }else { echo "123456"; }?>" data-parsley-type="digits" data-parsley-type-message="only numbers" data-parsley-maxlength="16" required =" ">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H10')){ ?><?php echo $this->lang->line('hospital_tab_H10'); }else{ ?>city <?php } ?> </h6>
																</div>
															</div>
															<div class="col-lg-8">
																<select    name="cities_id" class="form-control" id="city_dropdown_docsubcenter"  required="">
																	<?php foreach($cities as $city): ?>
																	<option  value="<?php echo $city->id; ?>" <?php if($city->id == $hospital_data->cities_id ){ ?> selected ="selected" <?php } ?>><?php echo $city->city; ?></option>
																	<?php endforeach; ?>
																</select>
															</div>
														</div>                                                    
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H11')){ ?><?php echo $this->lang->line('hospital_tab_H11'); }else{ ?>Address <?php } ?> </h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" value="<?php echo $hospital_data->hospital_address; ?>" name="hospital_address" class="form-control" placeholder="Address here" required="">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H12')){ ?><?php echo $this->lang->line('hospital_tab_H12'); }else{ ?>About <?php } ?> </h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" value="<?php echo $hospital_data->about_hospital; ?>" name="about_hospital"class="form-control" placeholder="" required="">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H13')){ ?><?php echo $this->lang->line('hospital_tab_H13'); }else{ ?>Latitude <?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" class="form-control" id="latitude-doc-own"  value="<?php echo $hospital_data->latitude; ?>" name="latitude" required=""><br/>
																<span><a href="#" id='pick-map-doc-own'><?php if($this->lang->line('hospital_tab_C1113')){ ?><?php echo $this->lang->line('hospital_tab_C1113'); }else{ ?>Pick from map<?php } ?></a></span>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H14')){ ?><?php echo $this->lang->line('hospital_tab_H14'); }else{ ?>Longitude<?php } ?> </h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" class="form-control" id="longitude-doc-own" 	value="<?php echo $hospital_data->longitude; ?>"  name="longitude" required="">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H4')){ ?><?php echo $this->lang->line('hospital_tab_H4'); }else{ ?>Awards <?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" value="<?php echo $hospital_data->hospital_awards; ?>" name="hospital_awards" class="form-control" placeholder="enter awards" required="">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_H5')){ ?><?php echo $this->lang->line('hospital_tab_H5'); }else{ ?>Memberships <?php } ?></h6>
																</div>
															</div>
															<div class="col-lg-8">
																<input type="text" value="<?php echo $hospital_data->hospital_memberships; ?>" name="hospital_memberships" class="form-control" placeholder="enter memberships" required="">
															</div>
														</div>
													</div>
													<div class="clearfix"></div>
													<div class="row">
														<div class="col-lg-10">
															<h4 class="h4-sub-mn"><button type="submit" name="hospital-self" value="hospital-self" class="btn btn-default bfn-sve"><?php if($this->lang->line('hospital_tab_B211')){ ?><?php echo $this->lang->line('hospital_tab_B211'); }else{ ?>Update<?php } ?><span><img src="<?php echo base_url(); ?>assets/images/dashboard/15.png" /></span></button></h4>
														</div>
													</div>
												</form>
											</div>
										</div>
										<div class="manage-ad-inner-mains1 tab-man-21 ">
											<div class="form-group hos-frm-grp hos-frm-grp-1">
												<?php   if($this->session->flashdata('messagedashhogg2')) {
														$messagedashhogg2 = $this->session->flashdata('messagedashhogg2'); ?>
												<div class="alert alert-<?php echo $messagedashhogg2['class']; ?>">
													<button class="close" data-dismiss="alert" type="button">×</button>
													<?php echo $messagedashhogg2['messagedashhogg2']; ?>
												</div>
												<?php }	?>
												<form method="post" data-parsley-validate="" enctype="multipart/form-data">
													<div class="col-lg-10">
														<form method="post" data-parsley-validate="" enctype="multipart/form-data">
															<div class="row">
																	<div class="col-lg-4">
																		<div class="text-left-hsp">
																			<h6><?php if($this->lang->line('hospital_tab_C112')){ ?><?php echo $this->lang->line('hospital_tab_C112'); }else{ ?>Email<?php } ?></h6>
																		</div>
																	</div>
																	<div class="col-lg-8">
																		<input type="text" class="form-control"  placeholder="email" value="<?php echo $hospital_data->email;?>" name="email" data-parsley-trigger="change" data-parsley-type="email" required="" >
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-4">
																		<div class="text-left-hsp">
																			<h6><?php if($this->lang->line('hospital_tab_I1')){ ?><?php echo $this->lang->line('hospital_tab_I1'); }else{ ?>Current Password<?php } ?></h6>
																		</div>
																	</div>
																	<div class="col-lg-8">
																		<input type="password" name="old_password" class="form-control" placeholder="Current" data-parsley-minlength="6" required="">
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-4">
																		<div class="text-left-hsp">
																			<h6><?php if($this->lang->line('hospital_tab_I2')){ ?><?php echo $this->lang->line('hospital_tab_I2'); }else{ ?>New Password<?php } ?></h6>
																		</div>
																	</div>
																	<div class="col-lg-8">
																		<input type="password" name="new_password" class="form-control" placeholder="New" data-parsley-minlength="6" required="">
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-4">
																		<div class="text-left-hsp">
																			<h6><?php if($this->lang->line('hospital_tab_I3')){ ?><?php echo $this->lang->line('hospital_tab_I3'); }else{ ?>Confirm New Pasword<?php } ?></h6>
																		</div>
																	</div>
																	<div class="col-lg-8">
																		<input type="password" name="re_password" class="form-control" placeholder="Confirm" data-parsley-minlength="6" required="">
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-10">
																		<h4 class="h4-sub-mn"><button type="submit" name="hospital-self-check" value=" "class="btn btn-default bfn-sve"><?php if($this->lang->line('hospital_tab_I4')){ ?><?php echo $this->lang->line('hospital_tab_I4'); }else{ ?>Save<?php } ?><span><img src="<?php echo base_url(); ?>assets/images/dashboard/15.png" /></span></button></h4>
																	</div>	
																</div>
															</form>
														</div>
														<div class="clearfix"></div>
													</form>
												</div>
											</div>
										</div>
										<!----additional gallery start -------------->
										<div class="manage-ad-inner-main tab-manage-10">
											<?php 	if($this->session->flashdata('messagedashpackage')) { 
													$messagedashpackage = $this->session->flashdata('messagedashpackage'); ?>
											<div class="alert alert-<?php echo $messagedashpackage['class']; ?>">
												<button class="close" data-dismiss="alert" type="button">×</button>
												<?php echo $messagedashpackage['messagedashpackage']; ?>
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
																		<h5><?php echo $packs->package_period; ?></h5>
																		<hr>
																		<p><?php if($this->lang->line('hospital_tab_J1')){ ?><?php echo $this->lang->line('hospital_tab_J1'); }else{ ?>Business name<?php } ?></p>
																		<p><?php if($this->lang->line('hospital_tab_J2')){ ?><?php echo $this->lang->line('hospital_tab_J2'); }else{ ?>Business description<?php } ?></p>
																		<p><?php if($this->lang->line('hospital_tab_J3')){ ?><?php echo $this->lang->line('hospital_tab_J3'); }else{ ?>Location<?php } ?></p>
																		<p><?php if($this->lang->line('hospital_tab_J4')){ ?><?php echo $this->lang->line('hospital_tab_J4'); }else{ ?>Working hours<?php } ?></p>
																		<p><?php if($this->lang->line('hospital_tab_J5')){ ?><?php echo $this->lang->line('hospital_tab_J5'); }else{ ?>Phone Number<?php } ?></p>
																		<form method="post" action="" enctype="multipart/form-data">
																			<input type="hidden" name="status" value="0" >
																			<input type="hidden" name="hospital_type" value="hospital" >
																			<button class="first_pack_btn buy_now" name="package_id" value="<?php echo $packs->id;?>" ><?php if($lgdoctormod73){ echo $lgdoctormod73; }else { ?>Select<?php } ?></button>
																		</div>
																	</div>
																</div>
																<?php } ?>
															</form>
														</div>
														<div class="col-lg-1"></div>
													</div>
												</div>            
												<!-----additional gallery end --------------->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--patient-login search-->
				<div class="modal fade modal-wide" id="myModalmapbmd-hosp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Select location</h4>
							</div>				  
							<div class="modal-body" id="canvas1" >
								<div id="interrupt-trick1" class="interrupt-trick1">
								</div>
								<div id="current">Nothing yet...</div>
								<input type="hidden" id="pick-lat-hosp" />
								<input type="hidden" id="pick-lng-hosp" />                    
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-custom select-location-hosp">Select Location</button>
							</div>	
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
				<div class="modal fade modal-wide" id="myModalmapbmd-doc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Select location</h4>
							</div>				  
							<div class="modal-body" id="canvas1">
								<div id="interrupt-trick2" class="interrupt-trick2">
								</div>
								<div id="current">Nothing yet...</div>
								<input type="hidden" id="pick-lat-doc" />
								<input type="hidden" id="pick-lng-doc" />                    
							</div> 
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-custom select-location-doc">Select Location</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>		
				<div class="modal fade modal-wide" id="myModalmapbmd-doc-own" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Select location</h4>
							</div>
							<div class="modal-body" id="canvas1" >
								<div id="interrupt-trick2-own" class="interrupt-trick2-own">
								</div>
								<div id="current">Nothing yet...</div>
								<input type="hidden" id="pick-lat-doc-own" />
								<input type="hidden" id="pick-lng-doc-own" />                    
							</div>                   
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-custom select-location-doc-own">Select Location</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>