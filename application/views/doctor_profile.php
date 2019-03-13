	<?php
		$settings = get_icon();
        $id = $settings->languages;
        $query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;
		echo $map['js']; ?>
<!--viewprofile-->
<div class="container-fluid">
    <div class="col-lg-12 col-pad">
        <div class="view-head">
            <div class="col-lg-1"></div>
            <div class="col-lg-5" style="padding: 0;">
                <div class="left-view-main">
					<div class="row">
						<div class="col-lg-3">
							<div class="img-pat-view">
								<?php if($view_doctor->display_image != ""){ ?>
								<img src= "<?php echo base_url(); ?>admin/<?php echo $view_doctor->display_image;?>" alt=""/>
								<?php }else{ ?>
								<img src="<?php echo base_url(); ?>assets/images/home/man.png" alt="" />
								<?php  }?>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="pat-view-text">
								<h3>Dr. <?php echo $view_doctor->doctor_firstname; ?> <?php echo $view_doctor->doctor_lastname;?></h3>
								<h4><?php if($view_doctor->degree_name != ""){ echo $view_doctor->degree_name; }else{ echo "No Details Found"; } ?> , <?php if($view_doctor->specialty_name != ""){  echo $view_doctor->specialty_name; }else{ echo "No Details Found"; }?></h4>
								<div class="gc-ratting" data-rate="<?php echo $view_doctor->avg_rating; ?>" ></div>
							</div>
						</div>
					</div>
                    <div class="row">
                        <div class="col-lg-3 col-xs-4 col-sm-3">
							<div class="slider-qualification">
                                <div class="col-lg-12">
                                    <div id="myCarousel" class="carousel slide vertical">
										<div class="carousel-inner sl-slider">
                                            <div class="active item">
												<?php if(! empty ($view_galpic[0] )){ ?>
												<img src= "<?php echo base_url(); ?>admin/<?php echo $view_galpic[0]->image;?>" />
												<?php }else{ ?>
												<img src="<?php echo base_url(); ?>assets/images/patient-login/sl-1.png">
												<?php } ?>
												<?php if(! empty ($view_galpic[1] )){ ?>
												<img src= "<?php echo base_url(); ?>admin/<?php echo $view_galpic[1]->image;?>" />
												<?php }else{ ?>
                                                <img src="<?php echo base_url(); ?>assets/images/patient-login/sl-1.png">
												<?php } ?>
												<?php if(! empty ($view_galpic[2] )){ ?>
												<img src= "<?php echo base_url(); ?>admin/<?php echo $view_galpic[2]->image;?>" />
												<?php }else{ ?>
                                                <img src="<?php echo base_url(); ?>assets/images/patient-login/sl-1.png">
												<?php } ?>
                                            </div>
                                            <div class="item">
												<?php if(! empty ($view_galpic[3] )){ ?>
												<img src= "<?php echo base_url(); ?>admin/<?php echo $view_galpic[3]->image;?>" />
												<?php }else{ ?>
												<img src="<?php echo base_url(); ?>assets/images/patient-login/sl-1.png">
												<?php } ?>
												<?php if(! empty ($view_galpic[4] )){ ?>
												<img src= "<?php echo base_url(); ?>admin/<?php echo $view_galpic[4]->image;?>" />
												<?php }else{ ?>
												<img src="<?php echo base_url(); ?>assets/images/patient-login/sl-1.png">
												<?php } ?>
												<?php if(! empty ($view_galpic[5] )){ ?>
												<img src= "<?php echo base_url(); ?>admin/<?php echo $view_galpic[5]->image;?>" />
												<?php }else{ ?>
												<img src="<?php echo base_url(); ?>assets/images/patient-login/sl-1.png">
												<?php } ?>
											</div>
											<div class="item">
												<?php if(! empty ($view_galpic[6] )){ ?>
												<img src= "<?php echo base_url(); ?>admin/<?php echo $view_galpic[6]->image;?>" />
												<?php }else{ ?>
												<img src="<?php echo base_url(); ?>assets/images/patient-login/sl-1.png">
												<?php } ?>
												<?php if(! empty ($view_galpic[7] )){ ?>
												<img src= "<?php echo base_url(); ?>admin/<?php echo $view_galpic[7]->image;?>" />
												<?php }else{ ?>
												<img src="<?php echo base_url(); ?>assets/images/patient-login/sl-1.png">
												<?php } ?>
												<?php if(! empty ($view_galpic[8] )){ ?>
												<img src= "<?php echo base_url(); ?>admin/<?php echo $view_galpic[8]->image;?>" />
												<?php }else{ ?>
												<img src="<?php echo base_url(); ?>assets/images/patient-login/sl-1.png">
												<?php } ?>
											</div>
										</div>
										<!-- Carousel nav -->
                                        <a class="carousel-control " href="#myCarousel" data-slide="prev"><img class="pre-pos" src="<?php echo base_url(); ?>assets/images/patient-login/pre.png" /> </a>
                                        <a class="carousel-control " href="#myCarousel" data-slide="next"><img class="next-pos" src="<?php echo base_url(); ?>assets/images/patient-login/next.png" /></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="quali-main">
								<h4><?php if($this->lang->line('doctorprofile_slide_A1')){ ?><?php echo $this->lang->line('doctorprofile_slide_A1'); }else{ ?>Qualification & Booking Appointment<?php } ?></h4>
								<?php $arry_select = explode(",", $view_doctor->specialty); ?>
								<h5><?php if($view_doctor->degree_name != ""){ echo $view_doctor->degree_name; }else { echo "No Details Found"; }?> , <?php  foreach($specialtydetails as $detailsspecialty){ if (in_array($detailsspecialty->id, $arry_select)) {   echo $detailsspecialty->specialty_name;  ?>, <?php  }}  ?> </h5>								
								<p><?php if(!empty($view_doctor->about_doctor )){ echo $view_doctor->about_doctor; }else { echo "No Details Found"; }?> </p>
							</div>						
						</div>						
					</div>
				</div>
			</div>
			<div class="col-lg-6" id="canvas1">
				<?php echo $map['html']; ?>
			</div>           
		</div>
	</div>
</div>
<!--viewprofile-->
<div class="container-fluid cont-hospital">
	<div class="container">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-5">
				<div class="hospital-left">
					<h3><?php if($this->lang->line('doctorprofile_slide_A2')){ ?><?php echo $this->lang->line('doctorprofile_slide_A2'); }else{ ?>Hospital Affiliations<?php } ?></h3>
					<h5><?php echo $view_doctor->hospital_name;?> </h5>
				</div>
				<div class="hospital-left">
					<h3><?php if($this->lang->line('doctorprofile_slide_A3')){ ?><?php echo $this->lang->line('doctorprofile_slide_A3'); }else{ ?>Work Experience<?php } ?></h3>
					<h5><?php echo $view_doctor->doctor_experience;?>  </h5>
				</div>
				<div class="hospital-left">
					<h3><?php if($this->lang->line('doctorprofile_slide_A4')){ ?><?php echo $this->lang->line('doctorprofile_slide_A4'); }else{ ?>Awards and Publications<?php } ?></h3>
					<h5><?php echo $view_doctor->doctor_awards;?> </h5>
				</div>
				<div class="hospital-left">
					<h3><?php if($this->lang->line('doctorprofile_slide_A7')){ ?><?php echo $this->lang->line('doctorprofile_slide_A7'); }else{ ?>Professional Memberships<?php } ?></h3>
					<h5><?php echo $view_doctor->doctor_memberships;?>  </h5>
				</div>
			</div>
			<div class="col-lg-6">				
				<div class="hospital-right">
					<h3>Book Appointment</h3>
					<div class="col-lg-10 evt-br-1" id="calendar_blk">
						<?php pull_doccalendar($view_doctor->id); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6">				
				<div class="hospital-right">											
					<h3><?php if($this->lang->line('doctorprofile_slide_A8')){ ?><?php echo $this->lang->line('doctorprofile_slide_A8'); }else{ ?>Patient Reviews for <?php } ?><span>Dr. <?php echo $view_doctor->doctor_firstname; ?> <?php echo $view_doctor->doctor_lastname;?></span></h3>
					<div class="row review-page-docto">
						<?php   if(!empty($review_doctor)){
						foreach ($review_doctor as $review){  ?>
						<div class="col-lg-3">
							<div class="img-ph-hospital">
								<img src= "<?php echo base_url(); ?>admin/<?php echo $review->patient_display_image;?>" / >  
							</div>
						</div></br>
						<div class="clearfix"></div>
						<div class="col-lg-9">
							<div class="right-patient">
								<h4><span class="by-span"><?php if($this->lang->line('doctorprofile_slide_A5')){ ?><?php echo $this->lang->line('doctorprofile_slide_A5'); }else{ ?>By<?php } ?></span> <?php echo $review->patient_firstname; ?> <span class="date-spn"><?php echo $review->date;?></span> </h4>
								<div class="row">
									<div class="col-lg-5">
										<h5><?php if($this->lang->line('doctorprofile_slide_A6')){ ?><?php echo $this->lang->line('doctorprofile_slide_A6'); }else{ ?>Rating<?php } ?></h5>
									</div>
									<div class="col-lg-6">
										<div class="gc-ratting" data-rate="<?php echo $review->rating; ?>" ></div>  
									</div>
								</div>
								<div class="row">
									<div class="col-lg-5">
										<h5><?php if($this->lang->line('doctorprofile_slide_A12')){ ?><?php echo $this->lang->line('doctorprofile_slide_A12'); }else{ ?>Comments<?php } ?></h5>
									</div>
									<div class="col-lg-6">
										<span><?php echo $review->review;?></span>
									</div>
								</div>
							</div>
						</div>					
						<div class="clearfix"></div>					
						<?php } }else{
							if($lgdpqbapp7){ echo $lgdpqbapp7; }else { 
								?>
								<div class="col-lg-6">
										<span>No Reviews Found</span>
									</div>
							<?php } ?>
						<?php } ?>
					</div>					
				</div>		
			</div>
			<div class="clearfix"></div><div class="col-lg-1"></div>
		</div>
	</div>
</div>		
<!----- for modal ---->
<div class="modal bookingdoc fade" id="myModal-calendar" role="dialog">
	<div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($this->lang->line('search_tab_A3')){ ?><?php echo $this->lang->line('search_tab_A3'); }else{ ?>Appointment Details<?php } ?></h4>
			</div>
			<div class="modal-body" id="bookingdoc" >
				<p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php if($this->lang->line('search_tab_A3')){ ?><?php echo $this->lang->line('search_tab_A3'); }else{ ?>Close<?php } ?></button>
			</div>
		</div>
	</div>
</div>
<!----- for modal ---->	 