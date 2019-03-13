<?php
  $settings = get_icon();
        $id = $settings->languages;
        $query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;
       
?>


<div class="form-hospital-dash inhospitaladd" >
													 <form method="post" data-parsley-validate="" enctype="multipart/form-data">
                                                            <div class="upload-hospital">
                                                                <input type="hidden" name="subid" value="<?php echo $singlesub_result->id;?>">
																<img src= "<?php echo base_url().'admin/'.$singlesub_result->display_image; ?>" />

                                                                <div class="upload-section-tag">
																<input type="file" id="display_image" value="" name="display_image" style="visibility: hidden; width: 1px; height: 1px"  />
                                                                    <h5><a href=""  Onclick="document.getElementById('display_image').click(); return false" id="upload_link-hosp"><?php if($this->lang->line('hospital_tab_B21')){ ?><?php echo $this->lang->line('hospital_tab_B21'); }else{ ?>Browse Photo<?php } ?></a></h5>

                                                                   <!-- <h5><a  class="hosp-photodune" href="">Upload Photo</a></h5>-->
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>

                                                            <div class="form-group hos-frm-grp">
                                                                <div class="col-lg-10">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-left-hsp">
                                                                                <h6><?php if($this->lang->line('hospital_tab_B22')){ ?><?php echo $this->lang->line('hospital_tab_B22'); }else{ ?>Medical Name<?php } ?></h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
         <input type="text" class="form-control"  placeholder="Hospital Name" value="<?php echo $singlesub_result->medical_name; ?>" name="medical_name" id="medical_name" data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" " >
                                                                        </div>
                                                                    </div>
																	
																	

                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-left-hsp">
                                                                                <h6><?php if($this->lang->line('hospital_tab_B23')){ ?><?php echo $this->lang->line('hospital_tab_B23'); }else{ ?>Established in<?php } ?></h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control"  placeholder="Date" name="medical_established_date" id="medical_established_date" value="<?php echo $singlesub_result->medical_established_date;?>"  required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-left-hsp">
                                                                                <h6><?php if($this->lang->line('hospital_tab_B24')){ ?><?php echo $this->lang->line('hospital_tab_B24'); }else{ ?>Zip Code<?php } ?></h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control"  placeholder="1234" value="<?php echo $singlesub_result->medical_zip;?>" name="medical_zip" id="medical_zip" data-parsley-type="digits" data-parsley-type-message="only numbers" data-parsley-maxlength="7" required =" ">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-left-hsp">
                                                                                <h6><?php if($this->lang->line('hospital_tab_B25')){ ?><?php echo $this->lang->line('hospital_tab_B25'); }else{ ?>Website<?php } ?> </h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control"  placeholder="www.example.com" name="medical_website"  id="medical_website" value="<?php echo $singlesub_result->medical_website;?>" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-left-hsp">
                                                                                <h6><?php if($this->lang->line('hospital_tab_B26')){ ?><?php echo $this->lang->line('hospital_tab_B26'); }else{ ?>Phone <?php } ?> </h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control" id="example" value="<?php echo $singlesub_result->phone;?>" placeholder="Phone" name="phone" id="phone"  data-parsley-type="digits" data-parsley-type-message="only numbers" data-parsley-maxlength="16" required =" ">
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    
																	 
																	 <div class="row">
															<div class="col-lg-3">
																<div class="text-left-hsp">
																	<h6><?php if($this->lang->line('hospital_tab_B29')){ ?><?php echo $this->lang->line('hospital_tab_B29'); }else{ ?>city <?php } ?> </h6>
																</div>
															</div>
															<div class="col-lg-8">
																<select    name="cities_id" class="form-control" id="city_dropdown_docsubcenter"  required="">
																	<?php foreach($cities as $city): ?>
																	<option  value="<?php echo $city->id; ?>" <?php if($city->id == $singlesub_result->cities_id ){ ?> selected ="selected" <?php } ?>><?php echo $city->city; ?></option>
																	<?php endforeach; ?>
																</select>
															</div>
														</div> 
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-left-hsp">
                                                                                <h6><?php if($this->lang->line('hospital_tab_B210')){ ?><?php echo $this->lang->line('hospital_tab_B210'); }else{ ?>Address <?php } ?>  </h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control" value="<?php echo $singlesub_result->medical_address;?>" placeholder="Address here" id="medical_address" name="medical_address" required="">
                                                                        </div>
                                                                    </div>
																	

                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                            <div class="row">
                                                        <div class="col-lg-10">
                                                            <h4 class="h4-sub-mn"><button type="submit" name="hospital_updation" value="hospital_updation" class="btn btn-default bfn-sve update_subhosp"><?php if($this->lang->line('hospital_tab_B211')){ ?><?php echo $this->lang->line('hospital_tab_B211'); }else{ ?>Update<?php } ?><span><img src="<?php echo base_url(); ?>assets/images/dashboard/15.png" /></span></button></h4>
                                                        </div>
                                                    </div>
</form>
													
													</div>
													
													
												

