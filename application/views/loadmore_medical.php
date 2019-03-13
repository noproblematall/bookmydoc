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
			if(!empty($medical)) {
			if(isset($medical)) {
			          
			foreach($medical as $medical_detail){
				?>
                        <div class="row">
                            <div class="col-lg-8 evt-br">						
                                <div class="left-events left-img-ph left-img-ph-2">
                                  <img src= "<?php echo $medical_detail->display_image;?>" >
                                </div>
                                <div class="left-events">
                                    <h5 class="lft-h5"><?php echo $medical_detail->medical_name;?></h5>
                                   <!-- <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>-->
								   <div class="gc-ratting" data-rate="<?php echo $medical_detail->avg_rating; ?>" ></div> 
                                    <div class="pt-ent">
                                        <div class="row">
                                            <div class="col-lg-1">
                                               <img src="<?php echo base_url(); ?>assets/images/patient-login/13.png"  > 
                                            </div>
                                            <div class="col-lg-4">
                                                <h6><?php echo $medical_detail->city_name;?>,<?php echo $medical_detail->state_name;?>, <?php echo $medical_detail->country_name;?> <?php echo $medical_detail->medical_zip;?></h6>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>
                            <div class="col-lg-3 evt-br-1 view-cln-1">
                            <div class="view-clinic">
                                <a href ="<?php echo base_url(); ?>Medical/Search_doctor/<?php echo $medical_detail->id; ?>"><h4><span><img src="<?php echo base_url(); ?>assets/images/patient-login/eye.png"  /> </span><?php if($lghostdes7){ echo $lghostdes7; }else { ?>View<?php } ?> </h4></a>
                            </div>
                            </div>
                        </div>
						<div class="clearfix"></div>
						<!------------ before row ----->
						<?php   
						$last_id = $medical_detail->id;
						} 
			}				
			        } else {
						?>
						
			       <div class="error"><h1><?php if($lgfderror){ echo $lgfderror; }else { ?>Sorry, No records found. Please try with different keywords. <?php } ?> </h1></div>
			       
									
			
			<?php  }
				
?>
						<!----end--->
						<div class="clearfix"></div>
        <?php		
         if(!empty($medical)) {
				   ?>
        <div class="view-more loadmore">
		<div id="moremedical<?php echo $medical_detail->id; ?>" class="moreboxmedical">
              <a href="javascript:void(0);" id="<?php  echo $medical_detail->id; ?>" onclick="call_filtermoremedical(<?php echo $last_id; ?>)" class="filterloadmore_medical" ><h3><span><img src="<?php echo base_url(); ?>assets/images/patient-login/vmore.png" /> </span><?php if($lgfdviewmore){ echo $lgfdviewmore; }else { ?>View More<?php } ?></h3></a>           
            
        </div>            
        </div>
		<?php } ?>