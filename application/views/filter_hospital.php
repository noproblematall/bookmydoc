<?php
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;       
?>
<?php echo $map['js']; ?>
<!--patient-login search-->
<div class="container-fluid srch-patient-log">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 srch-main">
				<form role="form" action="" method="post"  id="form_doctor_hospital" class="form_doctor_hospital formap" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-10">
							<div class="row row-frm">
								<div class="col-lg-3">							
									<div class="form-group">
										<label for="exampleSelect1"><?php if($this->lang->line('hospitalfilter_slide_A1')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A1'); }else{ ?>City<?php } ?></label>
										<select   name="cities_id" class="form-control filter-field_hospital" id="exampleSelect1" required ="" >
											<option selected="selected" value="-1"><?php if($this->lang->line('hospitalfilter_slide_A2')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A2'); }else{ ?>Select city<?php } ?> </option>
											<?php foreach($cities as $row_cities){ $selected = ($post_data['main_city'] == $row_cities->id ? "selected" : "" ); ?>
											<option value="<?php echo $row_cities->id;?>" <?php echo $selected; ?>><?php echo $row_cities->city;?></option> 
											<?php }  ?>
										</select>       
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="exampleSelect1"><?php if($this->lang->line('hospitalfilter_slide_A3')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A3'); }else{ ?>Specialty<?php } ?></label>
										<select   onchange="selectReason(this.options[this.selectedIndex].value)" name="specialty" class="form-control filter-field_hospital" id="exampleSelect1"  required =" ">										
											<option selected="selected" value="-1"><?php if($this->lang->line('hospitalfilter_slide_A4')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A4'); }else{ ?>Select specialty<?php } ?></option>                                 
											<?php if(!empty($specialties) and isset($specialties)) {
											foreach($specialties as $row_specialty){ 								  
										     $selected = ($post_data['specialty'] == $row_specialty->id ? "selected" : "" );  
											  ?>
											<option value="<?php echo $row_specialty->id;?>" <?php echo $selected; ?>><?php echo $row_specialty->specialty_name;?></option> 
											<?php }}?>                             							
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="exampleSelect1"><?php if($this->lang->line('hospitalfilter_slide_A7')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A7'); }else{ ?>Insurance<?php } ?></label>
										<select    name="insurance" class="form-control filter-field_hospital" id="exampleSelect1" required =" " >
											<option selected="selected" value=""><?php if($this->lang->line('hospitalfilter_slide_A8')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A8'); }else{ ?>Select Insurance<?php } ?></option>
											<?php if(!empty($insurance) and isset($insurance)) { foreach($insurance as $row_insurance){ 								  
										     $selected = ($post_data['insurance'] == $row_insurance->id ? "selected" : "" );  
											  ?>
											<option value="<?php echo $row_insurance->id;?>" <?php echo $selected; ?>><?php echo $row_insurance->insurance_name;?></option> 
											<?php }} ?>                            
										</select> 
									</div>
								</div>							
								<div class="col-lg-3">
									<div class="form-group">
										<label for="exampleSelect1"><?php if($this->lang->line('hospitalfilter_slide_A5')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A5'); }else{ ?>Reason<?php } ?></label>
										<select    name="visitation" class="form-control filter-field_hospital" id="reason_dropdown" required =" " >
											<option selected="selected" value="-1"><?php if($this->lang->line('hospitalfilter_slide_A6')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A6'); }else{ ?>Select reason<?php } ?></option>
											<?php if(!empty($reasons) and isset($reasons)) { foreach($reasons as $row_reason){  $selected = ($post_data['visitation'] == $row_reason->id ? "selected" : "" );  
												?>
											<option value="<?php echo $row_reason->id;?>" <?php echo $selected; ?>><?php echo $row_reason->name;?></option> 
											<?php }}?>                             
										</select> 
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-pat-newfor-hosp"><img src="<?php echo base_url(); ?>assets/images/patient-login/10.png"> </button>
							</div>
						</div>
					</div>
				</form>
            </div>
            <div class="col-lg-12">
                <div class="doctor">
                    <h4><span><img src="<?php echo base_url(); ?>assets/images/home/form-4.png" > </span><?php if($this->lang->line('hospitalfilter_slide_A12')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A12'); }else{ ?>Hospitals near by You<?php } ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!--patient-login search-->
<div class="container-fluid mapfordoctor">
    <div class="google-map-doctor">
		<div class="img-responsive " id="canvas1">
			<?php echo $map['html']; ?>			
		</div>
    </div>
</div>
<!--doctor-->
<div class="container">
    <div class="doctor-sub">
		<h3><img src="<?php echo base_url(); ?>assets/images/patient-login/12.png"  ></h3>
        <h4><?php if($this->lang->line('hospitalfilter_slide_A13')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A13'); }else{ ?>Select a Hospital<?php } ?></h4>
    </div>
    <div class="doctor-pat-srch doctor-pat-srch-1">
        <div class="row">
            <div class="evnt-mn hospital">
                <div class="col-lg-12">
                    <div class="col-lg-1"></div>
						<div class="col-lg-10 hospital">
							<?php if(!empty($hospital)) { 
									if(isset($hospital)) {
										foreach($hospital as $hospital_detail){ ?>
							<div class="row">
								<div class="col-lg-8 evt-br">						
									<div class="left-events left-img-ph left-img-ph-2">
										<?php if(isset($hospital_detail->display_image) && !empty($hospital_detail->display_image)): ?>	
										<img src= "<?php echo base_url().'admin/'.$hospital_detail->display_image;?>" >
										<?php else: ?>
								  <img src= "<?php echo base_url(); ?>assets/images/sel-clinic/1.jpg" >
								  <?php endif; ?>
									</div>
									<div class="left-events">
										<h5 class="lft-h5"><?php echo $hospital_detail->hospital_name;?></h5>             
										<div class="gc-ratting" data-rate="<?php echo $hospital_detail->avg_rating; ?>" ></div> 
										<div class="pt-ent">
											<div class="row">
												<div class="col-lg-1">
													<img src="<?php echo base_url(); ?>assets/images/patient-login/13.png"  > 
												</div>
												<div class="col-lg-4">
													<h6><?php if(!empty($hospital_detail->city_name)): echo $hospital_detail->city_name.','; endif; ?><?php if(!empty($hospital_detail->state_name)): echo $hospital_detail->state_name.','; endif;?><?php echo $hospital_detail->country_name.' ';?><?php echo $hospital_detail->hospital_zip;?></h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 evt-br-1 view-cln-1">
									<div class="view-clinic">
										<a href ="<?php echo base_url(); ?>Hospital/Search_doctor/<?php echo $hospital_detail->id; ?>"><h4><span><img src="<?php echo base_url(); ?>assets/images/patient-login/eye.png"  /> </span><?php if($this->lang->line('hospitalfilter_slide_A14')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A14'); }else{ ?>View <?php } ?> </h4></a>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>					
						<?php   } }	 } else { ?>						
							<div class="error"><h1><?php if($this->lang->line('hospitalfilter_slide_A15')){ ?><?php echo $this->lang->line('hospitalfilter_slide_A15'); }else{ ?>Sorry, No records found. Please try with different keywords.<?php } ?> </h1></div>			       
						<?php  } ?>					
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>        
    </div>
</div>
<!--doctor--><div class="col-lg-1"></div><div class="clearfix"></div> 