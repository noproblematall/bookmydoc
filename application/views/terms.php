	<?php
  $settings = get_icon();
        $id = $settings->languages;
        $query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;
       
?>
<!--Terms -main-->
<div class="container">
    <div class="row">
        <div class="terms">
            <div class="col-lg-8">
               <div class="head-terms">
                   <img  src="<?php echo base_url(); ?>assets/images/terms/2.png"  />
                   <h2><?php if($this->lang->line('terms_A1')){ ?><?php echo $this->lang->line('terms_A1'); }else{ ?>Terms and conditions<?php } ?></h2>
               </div>
                <div class="clearfix"></div>
              <ul>
                  <li><span><?php if($this->lang->line('terms_A2')){ ?><?php echo $this->lang->line('terms_A2'); }else{ ?>We recently welcomed a new Chief Operating Officer to the team. Carlyle Singer brings over 30 years of executive, management, operational and corporate finance experience, most recently serving as President and CEO of a $280M private equity-owned global distribution company for printing and copier products.<?php } ?></span></li>
             <li><span><?php if($this->lang->line('terms_A3')){ ?><?php echo $this->lang->line('terms_A3'); }else{ ?>With experience living and working across Europe and South America, Carlyle brings energy, flexibility and interest in exploring the geographies in which Acumen operates. In close collaboration with the Management Committee, Carlyle is overseeing our overall strategic direction and has direct responsibility for Acumen's core operating activities, supporting our ambitious 2013 goals and the next chapter in our history.<?php } ?></span></li>
              </ul>
                <h4><?php if($this->lang->line('terms_A4')){ ?><?php echo $this->lang->line('terms_A4'); }else{ ?>We are delighted to welcome her to the Acumen team.<?php } ?></h4>

            </div>
            <div class="col-lg-4">
             <div class="terms-img animated zoomIn">
                 <img src="<?php echo base_url(); ?>assets/images/terms/1.png"  class="img-responsive" />
             </div>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="terms-back">
<img src="<?php echo base_url(); ?>assets/images/about/bac.png"  class="img-responsive"/>
    </div>
</div>

<!--Terms -main-->