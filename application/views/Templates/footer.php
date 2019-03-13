<?php
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;
?>
<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <div class="menu-footer">
                    <ul>
                        <li class="active"><a href="<?php echo base_url(); ?>"><?php if($this->lang->line('home_header_home')){ ?><?php echo $this->lang->line('home_header_home'); }else{ ?>Home<?php } ?></a>  </li>
                        <li> <a href = "<?php echo base_url(); ?>General/aboutus"><?php if($this->lang->line('home_header_aboutus')){ ?><?php echo $this->lang->line('home_header_aboutus'); }else{ ?>About Us<?php } ?></a> </li>
						 <li><a href = "<?php echo base_url(); ?>General/terms"><?php if($this->lang->line('home_header_terms')){ ?><?php echo $this->lang->line('home_header_terms'); }else{ ?>Terms <?php } ?></a></li>
                        <li><a href = "<?php echo base_url(); ?>General/careers"><?php if($this->lang->line('home_header_careers')){ ?><?php echo $this->lang->line('home_header_careers'); }else{ ?>Careers <?php } ?></a></li>
                        <li><a href = "<?php echo base_url(); ?>General/contact"><?php if($this->lang->line('home_header_contact')){ ?><?php echo $this->lang->line('home_header_contact'); }else{ ?>Contact <?php } ?> </a></li>
						<li><a href="javascript:void(0);"><?php if($this->lang->line('home_header_faq')){ ?><?php echo $this->lang->line('home_header_faq'); }else{ ?>FAQ <?php } ?></a></li>
                        <li><a href="javascript:void(0);"><?php if($this->lang->line('home_header_blog')){ ?><?php echo $this->lang->line('home_header_blog'); }else{ ?>Blog <?php } ?> </a></li>
                        <li><a href="javascript:void(0);"><?php if($this->lang->line('home_header_doctorblog')){ ?><?php echo $this->lang->line('home_header_doctorblog'); }else{ ?>Doctor Blog <?php } ?> </a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="footer-text">
                    <h3><?php if($this->lang->line('home_common_D1')){ ?><?php echo $this->lang->line('home_common_D1'); }else{ ?>OUR LOCATION<?php } ?></h3>
                    <p><?php if($this->lang->line('home_common_D2')){ ?><?php echo $this->lang->line('home_common_D2'); }else{ ?>Make appointments on the go, right from your smartphone, with our top-rated mobile app.<?php } ?></p>
                    <h6><span><i class="fa fa-envelope"></i> </span><?php if($this->lang->line('home_common_D3')){ ?><?php echo $this->lang->line('home_common_D3'); }else{ ?>By E-mail:<?php } ?> <?php if($this->lang->line('home_common_D4')){ ?><?php echo $this->lang->line('home_common_D4'); }else{ ?>info@Bookmydoc.com<?php } ?></h6>
                    <h6><span><i class="fa fa-phone"></i> </span><?php if($this->lang->line('home_common_D5')){ ?><?php echo $this->lang->line('home_common_D5'); }else{ ?>By Phone:+000 -12601<?php } ?></h6>
                    <h6><span><i class="fa fa-map-marker"></i> </span><?php if($this->lang->line('home_common_D6')){ ?><?php echo $this->lang->line('home_common_D6'); }else{ ?>Address:121, honey Street, Home City, USA<?php } ?></h6>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="footer-text ">
                    <h3><?php if($this->lang->line('home_common_D10')){ ?><?php echo $this->lang->line('home_common_D10'); }else{ ?>How It Works ?<?php } ?></h3>
                    <ul>
                        <li><?php if($this->lang->line('home_common_D11')){ ?><?php echo $this->lang->line('home_common_D11'); }else{ ?>How Bookmydoc Works<?php } ?></li>
						<li><?php if($this->lang->line('home_common_D12')){ ?><?php echo $this->lang->line('home_common_D12'); }else{ ?>Bookmydoc in Safety<?php } ?></li>
						<li><?php if($this->lang->line('home_common_D13')){ ?><?php echo $this->lang->line('home_common_D13'); }else{ ?>Terms & Conditions<?php } ?></li>
						<li><?php if($this->lang->line('home_common_D14')){ ?><?php echo $this->lang->line('home_common_D14'); }else{ ?>Contact Us<?php } ?></li>
						<li><?php if($this->lang->line('home_common_D15')){ ?><?php echo $this->lang->line('home_common_D15'); }else{ ?>Policies<?php } ?></li>																		
						<li><?php if($this->lang->line('home_common_D16')){ ?><?php echo $this->lang->line('home_common_D16'); }else{ ?>Faqs<?php } ?></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix hidden-lg hidden-md hidden-sm"></div>
            <div class="col-lg-3 col-xs-6">
                <div class="footer-text">
                    <h3><?php if($this->lang->line('home_common_D17')){ ?><?php echo $this->lang->line('home_common_D17'); }else{ ?>About Us<?php } ?></h3>
                    <ul>
						<li><?php if($this->lang->line('home_common_D18')){ ?><?php echo $this->lang->line('home_common_D18'); }else{ ?>Bookmydoc For Business<?php } ?></li>                         
						<li><?php if($this->lang->line('home_common_D19')){ ?><?php echo $this->lang->line('home_common_D19'); }else{ ?>Bookmydoc Premium<?php } ?></li>
						<li><?php if($this->lang->line('home_common_D20')){ ?><?php echo $this->lang->line('home_common_D20'); }else{ ?>Careers@Bookmydoc<?php } ?></li>	
						<li><?php if($this->lang->line('home_common_D21')){ ?><?php echo $this->lang->line('home_common_D21'); }else{ ?>Bookmydoc Team<?php } ?></li>  
						<li><?php if($this->lang->line('home_common_D22')){ ?><?php echo $this->lang->line('home_common_D22'); }else{ ?>Bookmydoc Blog<?php } ?></li>	
						<li><?php if($this->lang->line('home_common_D23')){ ?><?php echo $this->lang->line('home_common_D23'); }else{ ?>Support<?php } ?></li>
                    </ul>                    
                </div>
            </div>
			<?php if(isset($footer_cities) && !empty($footer_cities)): ?>
            <div class="col-lg-3 col-xs-6">
                <div class="footer-text last-footer-text">
                    <h3><?php if($this->lang->line('home_common_D24')){ ?><?php echo $this->lang->line('home_common_D24'); }else{ ?>CITIES<?php } ?></h3>
                    <ul>
						<?php foreach($footer_cities as $cities): ?>
                        <a href="<?php echo base_url();?>Doctor/Search/<?php echo $cities->id; ?>" ><li><?php echo $cities->city; ?></li></a>
						<?php endforeach; ?>	
                    </ul>                   
                </div>
            </div>
			<?php endif; ?>	
            <div class="col-lg-12">
                <div class="copy-right">
				<h4><?php if($this->lang->line('home_common_D8')){ ?><?php echo $this->lang->line('home_common_D8'); }else{ ?>Copyright &copy; 2015-2017 Techware Solution.<?php } ?></h4> <?php if($this->lang->line('home_common_D7')){ ?><?php echo $this->lang->line('home_common_D7'); }else{ ?>All rights reserved. <?php } ?>                  
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer-->
<a href="#" id="back-to-top" title="Back to top"><img src="<?php echo base_url(); ?>assets/images/home/btp.png"></a>