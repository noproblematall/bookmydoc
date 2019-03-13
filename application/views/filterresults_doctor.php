<?php   $settings = get_icon();
		$id = $settings->languages;
		$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;  ?>
<?php 
if(!empty($doctors)) {
	if(isset($doctors)) {		
			?>
			<div class="col-lg-6" style="padding-right: 0px;">	
			<?php foreach($doctors as $doctor_detail){ ?>
				<div class="evt-br doctor">					
					<div class="left-events left-img-ph">
						<?php if($doctor_detail->display_image != ""){ ?>
						<img src= "<?php echo base_url().'admin/'.$doctor_detail->display_image;?>" >
						<?php }else{ ?>
						<img src="<?php echo base_url(); ?>assets/images/home/man.png">
						<?php  }?>
					</div>
                    <div class="left-events">
                        <h5>Dr. <?php echo $doctor_detail->doctor_firstname;?> <?php echo $doctor_detail->doctor_lastname;?></h5>
						<div class="gc-ratting" data-rate="<?php echo $doctor_detail->avg_rating; ?>" ></div> 
                        <div class="pt-ent">
							<div class="row">
								<div class="col-lg-1">
                                    <img src="<?php echo base_url(); ?>assets/images/patient-login/13.png" />
                                </div>
                                <div class="col-lg-4">
                                    <h6> <?php echo $doctor_detail->city_name;?>,<?php echo $doctor_detail->state_name;?>, <?php echo $doctor_detail->country_name;?> <?php echo $doctor_detail->doctor_office_zip;?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-prf">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo base_url(); ?>assets/images/patient-login/14.png" />
                                <h6><a href ="<?php echo base_url(); ?>Doctor/Profile/<?php echo $doctor_detail->id; ?>"><?php if($lgfdviewprofile){ echo $lgfdviewprofile; }else { ?>View Profile<?php } ?></a></h6>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?php echo base_url(); ?>assets/images/patient-login/15.png" />
                                <h6><a class ="modalbookapp" href ="javascript:void(0);" id="<?php echo $doctor_detail->id; ?>" ><?php if($lgfdbookonline){ echo $lgfdbookonline; }else { ?>Book Online<?php } ?></a></h6>
                            </div>
                        </div>
					</div>
                </div>
			<?php } ?>
			</div>
			<div class="col-lg-5 evt-br-1" id="calendar_blk">
				<?php foreach($doctors as $doctor_detail){ 
				pull_doccalendar($doctor_detail->id);  } ?>								 
			</div>
		<?php  } } else { ?>
			<div class="error"><h1><?php if($lgfderror){ echo $lgfderror; }else { ?>Sorry, No records found. Please try with different keywords.<?php } ?> </h1></div>
			<div class="clearfix"></div>												
		<?php  }	?>

       