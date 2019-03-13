<!-----------------slider---------------->
<div class="share animated zoomIn hvr-grow">
	<img src="<?php echo base_url(); ?>assets/images/home/share.png"  alt=""/>
</div>
<div class="find-main col-lg-6 nopadding">
    <div class="find col-lg-1 nopadding">
        <img class="hvr-grow" src="<?php echo base_url(); ?>assets/images/home/find.png"  alt=""/>
    </div>
    <div class="container find-div col-lg-11 nopadding col-lg-offset-1">
		<div class="col-lg-12 nopadding">
            <div class="find-sub col-lg-1 nopadding">
                <img class="hvr-grow" src="<?php echo base_url(); ?>assets/images/home/find.png" alt=""/>
            </div>
            <div class="col-lg-12 tab-find ">
                <ul class="nav nav-tabs nav-tab-find">
                    <li class="active"><a data-toggle="tab" href="#home"><span><img src="<?php echo base_url(); ?>assets/images/home/form-1.png" /> </span><?php if($this->lang->line('search_tab_A1')){ ?><?php echo $this->lang->line('search_tab_A1'); }else{ ?>Doctor<?php } ?></a></li>
                    <li><a data-toggle="tab" href="#menu1"><span><img src="<?php echo base_url(); ?>assets/images/home/form-2.png" /> </span><?php if($this->lang->line('search_tab_B1')){ ?><?php echo $this->lang->line('search_tab_B1'); }else{ ?> Clinic<?php } ?></a></li>
                    <li><a data-toggle="tab" href="#menu2"><span><img src="<?php echo base_url(); ?>assets/images/home/form-3.png" /> </span><?php if($this->lang->line('search_tab_C1')){ ?><?php echo $this->lang->line('search_tab_C1'); }else{ ?> Medical Center<?php } ?></a></li>
                    <li><a data-toggle="tab" href="#menu3"><span><img src="<?php echo base_url(); ?>assets/images/home/form-4.png" /> </span><?php if($this->lang->line('search_tab_D1')){ ?><?php echo $this->lang->line('search_tab_D1'); }else{ ?>Hospital<?php } ?></a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                       <form role="form" action="<?php echo base_url();?>Doctor/Search" method="post"   class="animated fadeIn" enctype="multipart/form-data"> 
                            <div class="form-group">							
                                <div class="row">
                                    <div class="col-lg-2"></div>								
                                    <div class="col-lg-8">
										<div id="locality_finder_Doc"> 
											<input type="text" class="form-control autocompleteDoc" name="address" required id="exampleSelect1" placeholder="search city">
											<input type="hidden" class="lat_perfect" id="lat_doc" name="latitude">
											<input type="hidden" class="lon_perfect" id="lon_doc" name="longitude">
										</div>	
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>												
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select   onchange="selectReasonSearchbar(this.options[this.selectedIndex].value)" name="specialty" class="form-control" id="exampleSelect1"  >		
											<option selected="selected" value="-1"><?php if($this->lang->line('search_tab_A3')){ ?><?php echo $this->lang->line('search_tab_A3'); }else{ ?>Select specialty<?php } ?></option>
											<?php foreach($specialties as $row_specialty){  ?>
											<option value="<?php echo $row_specialty->id;?>"><?php echo $row_specialty->specialty_name;?></option>
											<?php  }   ?>
										</select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
							<div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select    name="visitation" class="form-control" id="reason_Searchbar_dropdown"  >
											<option selected="selected" value="-1"><?php if($this->lang->line('search_tab_A4')){ ?><?php echo $this->lang->line('search_tab_A4'); }else{ ?>Select reason<?php } ?></option>                               
										</select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select name="insurance" class="form-control" id="exampleSelect1"  >
											<option selected="selected" value=""><?php if($this->lang->line('search_tab_A6')){ ?><?php echo $this->lang->line('search_tab_A6'); }else{ ?>Insurance<?php } ?></option>
											<?php foreach($insurance as $row_insurance){  ?>
											<option value="<?php echo $row_insurance->id;?>"><?php echo $row_insurance->insurance_name;?></option>
											<?php  }   ?>
										</select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select    name="language" class="form-control" id="exampleSelect1"  >
											<option selected="selected" value=""><?php if($this->lang->line('search_tab_A7')){ ?><?php echo $this->lang->line('search_tab_A7'); }else{ ?>Language<?php } ?></option>
											<?php foreach($languages as $row_language){  ?>
											<option value="<?php echo $row_language->id;?>"><?php echo $row_language->language_name;?></option>
											<?php  }   ?>
										</select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>						
							<div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
										<select class="form-control" id="exampleSelect1" name="gender" >  
											<option selected="selected" value=""><?php if($this->lang->line('search_tab_A8')){ ?><?php echo $this->lang->line('search_tab_A8'); }else{ ?>Gender<?php } ?></option>
											<option ><?php if($this->lang->line('search_tab_A11')){ ?><?php echo $this->lang->line('search_tab_A11'); }else{ ?>Female<?php } ?></option>
											<option><?php if($this->lang->line('search_tab_A10')){ ?><?php echo $this->lang->line('search_tab_A10'); }else{ ?>Male<?php } ?></option>
										</select>
									</div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>				                            
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8" style="padding:0;">
                                    <button type="submit" class="btn btn-default btn-form"><i class="fa fa-search"></i><?php if($this->lang->line('search_tab_A9')){ ?><?php echo $this->lang->line('search_tab_A9'); }else{ ?> Find Doctors<?php } ?></button>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </form>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <form role="form" action="<?php echo base_url();?>Clinic/Search" method="post"   class="animated fadeIn" enctype="multipart/form-data"> 
							<div class="form-group">							
                                <div class="row">
                                    <div class="col-lg-2"></div>								
                                    <div class="col-lg-8">
										<div id="locality_finder_Clinic"> 
											<input type="text" class="form-control autocompleteClinic" name="address" required id="exampleSelect1" placeholder="search city">
											<input type="hidden" class="lat_perfect" id="lat_clinic" name="latitude">
											<input type="hidden" class="lon_perfect" id="lon_clinic" name="longitude">
										</div>	
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select   onchange="selectReasonClinic(this.options[this.selectedIndex].value)" name="specialty" class="form-control" id="exampleSelect1"  >
											<option selected="selected" value="-1"><?php if($this->lang->line('search_tab_A3')){ ?><?php echo $this->lang->line('search_tab_A3'); }else{ ?>Select specialty<?php } ?></option> 
											<?php foreach($specialties as $row_specialty){  ?>
											<option value="<?php echo $row_specialty->id;?>"><?php echo $row_specialty->specialty_name;?></option>
											<?php  }   ?>
										</select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
							<div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select    name="visitation" class="form-control" id="reason_dropdown_clinic" >
											<option selected="selected" value="-1"><?php if($this->lang->line('search_tab_A4')){ ?><?php echo $this->lang->line('search_tab_A4'); }else{ ?>Select reason<?php } ?></option> 
                                 		</select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div> 
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select    name="insurance" class="form-control" id="exampleSelect1"  >
											<option selected="selected" value=""><?php if($this->lang->line('search_tab_A6')){ ?><?php echo $this->lang->line('search_tab_A6'); }else{ ?>Insurance<?php } ?></option>
											<?php foreach($insurance as $row_insurance){  ?>
											<option value="<?php echo $row_insurance->id;?>"><?php echo $row_insurance->insurance_name;?></option>
											<?php  }   ?>
										</select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>                                                       
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8" style="padding:0;">
                                    <button type="submit" class="btn btn-default btn-form"><i class="fa fa-search"></i><?php if($this->lang->line('search_tab_B2')){ ?><?php echo $this->lang->line('search_tab_B2'); }else{ ?>  Find Clinics<?php } ?></button>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </form>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                       <form role="form" action="<?php echo base_url();?>Medical/Search" method="post"   class="animated fadeIn" enctype="multipart/form-data"> 
							<div class="form-group">							
                                <div class="row">
                                    <div class="col-lg-2"></div>								
                                    <div class="col-lg-8">
										<div id="locality_finder_Medical"> 
											<input type="text" class="form-control autocompleteMedical" name="address" required id="exampleSelect1" placeholder="search city">						
											<input type="hidden" class="lat_perfect" id="lat_medical" name="latitude">
											<input type="hidden" class="lon_perfect" id="lon_medical" name="longitude">
										</div>	
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select   onchange="selectReasonMedical(this.options[this.selectedIndex].value)" name="specialty" class="form-control" id="exampleSelect1"  >
											<option selected="selected" value="-1"><?php if($this->lang->line('search_tab_B4')){ ?><?php echo $this->lang->line('search_tab_B4'); }else{ ?>Select specialty<?php } ?></option>
											<?php foreach($specialties as $row_specialty){  ?>
											<option value="<?php echo $row_specialty->id;?>"><?php echo $row_specialty->specialty_name;?></option>
											<?php  }   ?>
										</select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
							<div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select    name="visitation" class="form-control" id="reason_dropdown_medical" required =" " >
										<option selected="selected" value="-1"><?php if($this->lang->line('search_tab_B5')){ ?><?php echo $this->lang->line('search_tab_B5'); }else{ ?>Select reason<?php } ?></option>                                  
						              </select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select    name="insurance" class="form-control" id="exampleSelect1"  >
										<option selected="selected" value=""><?php if($this->lang->line('search_tab_B6')){ ?><?php echo $this->lang->line('search_tab_B6'); }else{ ?>Insurance<?php } ?></option>
                                  <?php foreach($insurance as $row_insurance){  ?>
                             <option value="<?php echo $row_insurance->id;?>"><?php echo $row_insurance->insurance_name;?></option>
                                  <?php  }   ?>
						              </select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8" style="padding:0;">
                                    <button type="submit" class="btn btn-default btn-form"><i class="fa fa-search"></i><?php if($this->lang->line('search_tab_C2')){ ?><?php echo $this->lang->line('search_tab_C2'); }else{ ?> Find Medical Centers<?php } ?></button>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </form>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <form role="form" action="<?php echo base_url();?>Hospital/Search" method="post"   class="animated fadeIn" enctype="multipart/form-data"> 
							<div class="form-group">							
                                <div class="row">
                                    <div class="col-lg-2"></div>								
                                    <div class="col-lg-8">
										<div id="locality_finder_Hospital"> 
											<input type="text" class="form-control autocompleteHospital" required name="address" id="exampleSelect1" placeholder="search city">
											<input type="hidden" class="lat_perfect" id="lat_hospital" name="latitude">
											<input type="hidden" class="lon_perfect" id="lon_hospital" name="longitude">
										</div>	
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select   onchange="selectReasonHospital(this.options[this.selectedIndex].value)" name="specialty" class="form-control" id="exampleSelect1"  >
											<option selected="selected" value="-1"><?php if($this->lang->line('search_tab_D4')){ ?><?php echo $this->lang->line('search_tab_D4'); }else{ ?>Select specialty<?php } ?></option>
											<?php foreach($specialties as $row_specialty){  ?>
											<option value="<?php echo $row_specialty->id;?>"><?php echo $row_specialty->specialty_name;?></option>
										<?php  }   ?>
						              </select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
							<div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select    name="visitation" class="form-control" id="reason_dropdown_hospital"  >
										<option selected="selected" value="-1"><?php if($this->lang->line('search_tab_D5')){ ?><?php echo $this->lang->line('search_tab_D5'); }else{ ?>Select reason<?php } ?></option>                                 
						              </select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <select    name="insurance" class="form-control" id="exampleSelect1"  >
										<option selected="selected" value=""><?php if($this->lang->line('search_tab_D6')){ ?><?php echo $this->lang->line('search_tab_D6'); }else{ ?>Insurance<?php } ?></option>
										<?php foreach($insurance as $row_insurance){  ?>
										 <option value="<?php echo $row_insurance->id;?>"><?php echo $row_insurance->insurance_name;?></option>
										<?php  }   ?>
						              </select> 
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8" style="padding:0;">
                                    <button type="submit" class="btn btn-default btn-form"><i class="fa fa-search"></i><?php if($this->lang->line('search_tab_D2')){ ?><?php echo $this->lang->line('search_tab_D2'); }else{ ?> Find Hospitals<?php } ?></button>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<body onload="initialize()">