<?php
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;       
?>
<?php 
	if(!empty($clinics)) {
		if(isset($clinics)) {
			foreach($clinics as $clinic_detail){
			?>
				<div class="row">
					<div class="col-lg-8 evt-br">						
						<div class="left-events left-img-ph left-img-ph-2">
									<?php if(isset($clinic_detail->display_image) && !empty($clinic_detail->display_image)): ?>	
                                  <img src= "<?php echo base_url().'admin/'.$clinic_detail->display_image;?>" >
								  <?php else: ?>
								  <img src= "<?php echo base_url(); ?>assets/images/sel-clinic/1.jpg" >
								  <?php endif; ?>
                                </div>
						<div class="left-events">
							<h5 class="lft-h5"><?php echo $clinic_detail->clinic_name;?></h5>							
							<div class="gc-ratting" data-rate="<?php echo $clinic_detail->avg_rating; ?>" ></div> 
							<div class="pt-ent">
								<div class="row">
									<div class="col-lg-1">
										<img src="<?php echo base_url(); ?>assets/images/patient-login/13.png"  > 
									</div>
									<div class="col-lg-4">
												<h6><?php if(!empty($clinic_detail->city_name)): echo $clinic_detail->city_name.','; endif;?><?php if(!empty($clinic_detail->state_name)):  echo $clinic_detail->state_name.','; endif;?><?php echo $clinic_detail->country_name;?> <?php echo $clinic_detail->clinic_zip;?></h6>
											</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 evt-br-1 view-cln-1">
						<div class="view-clinic">
							<a href ="<?php echo base_url(); ?>Clinic/Search_doctor/<?php echo $clinic_detail->id; ?>"><h4><span><img src="<?php echo base_url(); ?>assets/images/patient-login/eye.png"  /> </span><?php if($lgfdviewmore){ echo $lgfdviewmore; }else { ?>View More<?php } ?> </h4></a>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>				
	<?php   } }	} else { ?>						
				<div class="error"><h1><?php if($lgfderror){ echo $lgfderror; }else { ?>Sorry, No records found. Please try with different keywords.<?php } ?> </h1></div>			       												
<?php  } ?>											