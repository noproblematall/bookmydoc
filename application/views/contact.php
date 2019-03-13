	<?php
  $settings = get_icon();
        $id = $settings->languages;
        $query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;
       
?>
<!--contact-main-->
<div class="container-fluid contact-banner">
<div class="container">
    <div class="col-lg-12">
        <div class="contact-form">
            <div class="col-lg-offset-6 col-lg-6 contact-form-main">
                <div class="col-lg-12">
                    <div class="getting-back">
                        <img src="<?php echo base_url(); ?>assets/images/contact/1.png" />
                        <h3><?php if($lgcontactmodel1){ echo $lgcontactmodel1; }else { ?>Getting back to<?php } ?><br>
                            <span><?php if($lgcontactmodel2){ echo $lgcontactmodel2; }else { ?>Us<?php } ?></span></h3>
                        <form class="animated fadeIn">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="name" placeholder="<?php if($lgcontactmodel3){ echo $lgcontactmodel3; }else { echo "Name"; } ?>">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="name" placeholder="<?php if($lgcontactmodel4){ echo $lgcontactmodel4; }else { echo "Email"; } ?>">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="name" placeholder="<?php if($lgcontactmodel5){ echo $lgcontactmodel5; }else { echo "Phone"; } ?>">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label for="usr" class="usr-commet"><?php if($lgcontactmodel6){ echo $lgcontactmodel6; }else { ?>Comments<?php } ?></label>
                        <textarea class="form-control text-form" style="    border: 1px solid;
    min-height: 150px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-cnt"><?php if($lgcontactmodel7){ echo $lgcontactmodel7; }else { ?>Send<?php } ?><i class="fa fa-angle-double-right"></i> </button>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!--contact-main-->
