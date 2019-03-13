	<?php
  $settings = get_icon();
        $id = $settings->languages;
        $query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;
       
?>
<!--career-main-->
<div class="container">
<div class="row search-main-find">
    <div class="col-lg-2">
    <div class="search-find">
        <img src="<?php echo base_url(); ?>assets/images/career/1.png"  class="img-responsive" alt=""/>
    </div>
    </div>
    <div class="col-lg-10">
        <div class="search-find-text">
            <h3><?php if($lgcareers){ echo $lgcareers; }else { ?>Careers<?php } ?></h3>
            <p><?php if($lgcareersmodel1){ echo $lgcareersmodel1; }else { ?>To achieve our vision, we are always looking out for talented, learnable individuals who are ambitious, who love challenges and who have a passion to excel! Apart from experienced candidates we also invite fresher’s, who have a good idea of various technologies and marketing skills. If you feel that you are a competent candidate.<?php } ?></p>

            </div>
    </div>
</div>
</div>

<div class="container-fluid bac-career">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mail-career">
                    <h4><?php if($lgcareersmodel2){ echo $lgcareersmodel2; }else { ?>If you think you match Book my Doc requirements, get in touch with:<?php } ?><span><?php if($lgcareersmodel3){ echo $lgcareersmodel3; }else { ?>mail@bookmydoc.in<?php } ?></span> </h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-custom">
                        <thead>
                        <tr>
                            <th><?php if($lgcareersmodel4){ echo $lgcareersmodel4; }else { ?>SL. No<?php } ?></th>
                            <th><?php if($lgcareersmodel5){ echo $lgcareersmodel5; }else { ?>Job Title<?php } ?></th>
                            <th><?php if($lgcareersmodel6){ echo $lgcareersmodel6; }else { ?>Vacancies<?php } ?></th>
                            <th><?php if($lgcareersmodel7){ echo $lgcareersmodel7; }else { ?>Location<?php } ?></th>
                            <th><?php if($lgcareersmodel8){ echo $lgcareersmodel8; }else { ?>Education<?php } ?></th>
                            <th><?php if($lgcareersmodel9){ echo $lgcareersmodel9; }else { ?>Experiance<?php } ?></th>
                            <th><?php if($lgcareersmodel10){ echo $lgcareersmodel10; }else { ?>Salary<?php } ?></th>
                            <th><?php if($lgcareersmodel11){ echo $lgcareersmodel11; }else { ?>Candidate<?php } ?></th>
							<th><?php if($lgcareersmodel12){ echo $lgcareersmodel12; }else { ?>Status<?php } ?></th>                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><?php if($lgcareersmodel13){ echo $lgcareersmodel13; }else { ?>Marketing<?php } ?></td>
                            <td>2</td>
                            <td><?php if($lgcareersmodel14){ echo $lgcareersmodel14; }else { ?>Kochi<?php } ?></td>
                            <td><?php if($lgcareersmodel16){ echo $lgcareersmodel16; }else { ?>Any Degree<?php } ?></td>
                            <td>2<?php if($lgcareersmodel17){ echo $lgcareersmodel17; }else { ?>Years<?php } ?></td>
                            <td><?php if($lgcareersmodel19){ echo $lgcareersmodel19; }else { ?>Best In the
                                Industry<?php } ?></td>
                            <td><?php if($lgcareersmodel20){ echo $lgcareersmodel20; }else { ?>male<?php } ?></td>
                            <td><span><i class="fa fa-check-circle" aria-hidden="true"></i> </span><?php if($lgcareersmodel21){ echo $lgcareersmodel21; }else { ?>Apply<?php } ?></td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td><?php if($lgcareersmodel13){ echo $lgcareersmodel13; }else { ?>Marketing<?php } ?></td>
                            <td>1</td>
                            <td><?php if($lgcareersmodel15){ echo $lgcareersmodel15; }else { ?>Chennai<?php } ?></td>
                            <td><?php if($lgcareersmodel16){ echo $lgcareersmodel16; }else { ?>Any Degree<?php } ?></td>
                            <td>1<?php if($lgcareersmodel18){ echo $lgcareersmodel18; }else { ?>Year<?php } ?></td>
                            <td><?php if($lgcareersmodel19){ echo $lgcareersmodel19; }else { ?>Best In the
                                Industry<?php } ?></td>
                            <td><?php if($lgcareersmodel20){ echo $lgcareersmodel20; }else { ?>male<?php } ?></td>
                            <td><span><i class="fa fa-check-circle" aria-hidden="true"></i> </span><?php if($lgcareersmodel21){ echo $lgcareersmodel21; }else { ?>Apply<?php } ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<!--about-main-->
