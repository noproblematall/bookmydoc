  <?php
  $settings = get_icon();
        $id = $settings->languages;
        $query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;
       
?>
  <div class="form-hospital-dash">
 <form method="post" data-parsley-validate="" enctype="multipart/form-data">
 <input type="hidden" name="subid" value="<?php echo $singlesubdoc_result->id;?>">
                                                            <div class="upload-hospital">
                                                                <img src="<?php echo base_url().'admin/'.$singlesubdoc_result->display_image; ?>"  />

                                                                <div class="upload-section-tag">
																<input type="file" id="uploadhospdocanot" name="display_image" style="visibility: hidden; width: 1px; height: 1px"  />
                                                                    <h5><a href=""  Onclick="document.getElementById('uploadhospdocanot').click(); return false" id="upload_link_doc_another"><?php if($lghosmod19){ echo $lghosmod19; }else { ?><?php if($this->lang->line('hospital_tab_B21')){ ?><?php echo $this->lang->line('hospital_tab_B21'); }else{ ?>Browse Photo<?php } ?><?php } ?></a></h5>

                                                                   <!-- <h5><a  class="hosp-photodune" href="">Upload Photo</a></h5>-->
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>

                                                            <div class="form-group hos-frm-grp">
                                                                <div class="col-lg-10">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-left-hsp">
                                                                                <h6><?php if($this->lang->line('hospital_tab_B22')){ ?><?php echo $this->lang->line('hospital_tab_B22'); }else{ ?>Doctor Firstname<?php } ?></h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control" placeholder="<?php if($this->lang->line('hospital_tab_B22')){ ?><?php echo $this->lang->line('hospital_tab_B22'); }else{ ?>Doctor Firstname<?php } ?>" name="doctor_firstname"  value="<?php echo $singlesubdoc_result->doctor_firstname;?>" data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" ">
                                                                        </div>
                                                                    </div>
																	<div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-left-hsp">
                                                                                <h6><?php if($this->lang->line('hospital_tab_B23')){ ?><?php echo $this->lang->line('hospital_tab_B23'); }else{ ?>Doctor Lastname<?php } ?></h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control"  placeholder="<?php if($this->lang->line('hospital_tab_B23')){ ?><?php echo $this->lang->line('hospital_tab_B23'); }else{ ?>Doctor Lastname<?php } ?>" name="doctor_lastname" data-parsley-pattern="^[a-zA-Z\  \/]+$" data-parsley-minlength="3" data-parsley-maxlength="25"required =" "  value="<?php echo $singlesubdoc_result->doctor_lastname;?>">
                                                                        </div>
                                                                    </div>
															
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-left-hsp">
                                                                                <h6><?php if($this->lang->line('hospital_tab_B24')){ ?><?php echo $this->lang->line('hospital_tab_B24'); }else{ ?>Zip Code<?php } ?></h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control"  placeholder="<?php if($this->lang->line('hospital_tab_B24')){ ?><?php echo $this->lang->line('hospital_tab_B24'); }else{ ?>Zip Code<?php } ?>" name="doctor_office_zip" data-parsley-type="digits" data-parsley-type-message="only numbers" data-parsley-maxlength="7" required =" " value="<?php echo $singlesubdoc_result->doctor_office_zip;?>">
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-left-hsp">
                                                                                <h6><?php if($this->lang->line('hospital_tab_B26')){ ?><?php echo $this->lang->line('hospital_tab_B26'); }else{ ?>Phone <?php } ?> </h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control" id="example" placeholder="<?php if($this->lang->line('hospital_tab_B26')){ ?><?php echo $this->lang->line('hospital_tab_B26'); }else{ ?>Phone <?php } ?>" name="phone"  data-parsley-type="digits" data-parsley-type-message="only numbers" data-parsley-maxlength="16" required =" " value="<?php echo $singlesubdoc_result->phone;?>">
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
																	<option  value="<?php echo $city->id; ?>" <?php if($city->id == $singlesubdoc_result->cities_id ){ ?> selected ="selected" <?php } ?>><?php echo $city->city; ?></option>
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
                                                                            <input type="text" value="<?php echo $singlesubdoc_result->doctor_office_address;?>"class="form-control" placeholder="Address here" name="doctor_office_address" required="">
																			
                                                                        </div>
                                                                    </div>
																	

                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                             <div class="row">
                                                        <div class="col-lg-10">
                                                            <h4 class="h4-sub-mn"><button type="submit" name="hospital-doc_updation" value="hospital-doc_updation" class="btn btn-default bfn-sve"><?php if($this->lang->line('hospital_tab_B211')){ ?><?php echo $this->lang->line('hospital_tab_B211'); }else{ ?>Update<?php } ?><span><img src="<?php echo base_url(); ?>assets/images/dashboard/15.png" /></span></button></h4>
                                                        </div>
                                                    </div>
													</form>
                                                        </div>