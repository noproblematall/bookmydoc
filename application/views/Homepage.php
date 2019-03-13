<?php
$tab_languages = $languages;
$settings = get_icon();
$id = $settings->languages;
$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
$kk = $query->row();
$textFile = $kk->languages;
$extension = ".php"; 
require 'admin/includes/'.$textFile.$extension;	
?>
<!--banner-section-->
<div class="container-fluid">
    <div class="banner">
        <div class="container">
            <div class="col-lg-12">
                <div class="banner-text animated fadeInLeft">
                    <h3><?php if($this->lang->line('home_common_D9')){ ?><?php echo $this->lang->line('home_common_D9'); }else{ ?>Keep Your<?php } ?></h3>
                    <h2><?php if($this->lang->line('home_common_A1')){ ?><?php echo $this->lang->line('home_common_A1'); }else{ ?>Family More Healthy<?php } ?></h2>
                    <p><?php if($this->lang->line('home_common_A2')){ ?><?php echo $this->lang->line('home_common_A2'); }else{ ?>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<?php } ?></p>
                    <a href=""><?php if($this->lang->line('home_common_A3')){ ?><?php echo $this->lang->line('home_common_A3'); }else{ ?>Read more<?php } ?><i class="fa fa-angle-double-right"></i> </a>
                    <div class="scroll">
                        <img class="hvr-grow" src="<?php echo base_url(); ?>assets/images/home/scroll.png" alt=""/>
                        <h3 ><?php if($this->lang->line('home_common_A4')){ ?><?php echo $this->lang->line('home_common_A4'); }else{ ?>Scroll Down<?php } ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner-section-->
<!--map-section-->
<div class="container-fluid">
    <div class="map">
        <div class="man">
            <img src="<?php echo base_url(); ?>assets/images/home/man.png" class="img-responsive animated fadeInDown" alt=""/>
        </div>
        <div class="container">
            <div class="map-text">
                <h3><?php if($this->lang->line('home_common_B1')){ ?><?php echo $this->lang->line('home_common_B1'); }else{ ?>HEALTHCARE AT YOUR DEMAND !<?php }?></h3>
                <h4><?php if($this->lang->line('home_common_B2')){ ?><?php echo $this->lang->line('home_common_B2'); }else{ ?>Find a nearby doctor or dentist and book an appointment instantly. And it's free !<?php }?></span></h4>
            </div>
        </div>
    </div>

</div>
<!--map-section-->
<div class="container-fluid features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-text">
                    <h3><?php if($this->lang->line('home_common_B3')){ ?><?php echo $this->lang->line('home_common_B3'); }else{ ?>FEATURES<?php } ?></h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-inner hvr-shrink">
                    <img src="<?php echo base_url(); ?>assets/images/home/f1.png"  class="img-responsive" alt=""/>
                    <h4><?php if($this->lang->line('home_common_B4')){ ?><?php echo $this->lang->line('home_common_B4'); }else{ ?>View a map of doctors in your
                        insurance network.<?php } ?></h4>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-inner hvr-shrink">
                    <img src="<?php echo base_url(); ?>assets/images/home/f2.png" class="img-responsive" alt=""/>
                    <h4><?php if($this->lang->line('home_common_B5')){ ?><?php echo $this->lang->line('home_common_B5'); }else{ ?>Read patient reviews to help you choose the right doctor<?php } ?></h4>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-inner hvr-shrink">
                    <img src="<?php echo base_url(); ?>assets/images/home/f3.png" class="img-responsive" alt=""/>
                    <h4><?php if($this->lang->line('home_common_B6')){ ?><?php echo $this->lang->line('home_common_B6'); }else{ ?>See any doctor's available times and click to book!<?php } ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!--get the app-->
<div class="container-fluid">
    <div class="app-banner">
        <div class="container ">
            <div class="app">
                <h3><?php if($this->lang->line('home_common_C1')){ ?><?php echo $this->lang->line('home_common_C1'); }else{ ?>GET THE APP<?php } ?></h3>
                <h4><?php if($this->lang->line('home_common_C2')){ ?><?php echo $this->lang->line('home_common_C2'); }else{ ?>Make appointments on the go, right from <br>
                    your smartphone, with our top-rated<br>
                    mobile app.<?php } ?></h4>
                <img src="<?php echo base_url(); ?>assets/images/home/line.png"  class="line-img"/>
                <div class="clearfix"></div>
                <h5><?php if($this->lang->line('home_common_C3')){ ?><?php echo $this->lang->line('home_common_C3'); }else{ ?>Get it on<?php } ?></h5>
                <a href=""><img src="<?php echo base_url(); ?>assets/images/home/ios.png" alt="" class="img-responsive hvr-grow"/> </a>
                <a href=""><img src="<?php echo base_url(); ?>assets/images/home/googleplay.png"  alt="" class="img-responsive hvr-grow"/> </a>
            </div>
        </div>
    </div>
</div>