		<div class="row">
            <div class="col-md-6">
              <div class="box box-primary">
				<div class="box-header with-border">
         <h3 class="box-title">View Doctor Details</h3>
         <div class="box-tools pull-right">
            <button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
            <i class="fa fa-minus"></i>
            </button>
         </div>
      </div>

                <div class="box-body">
                  <dl>

					  <dt>Doctor Firstname</dt>
                      <dd><?php echo $data->doctor_firstname; ?></dd>  
					           
                      <dt>Doctor Lastname</dt>
                      <dd><?php echo $data->doctor_lastname; ?></dd>  
					   
					  <dt>Gender</dt>
                      <dd><?php echo $data->doctor_sex; ?></dd> 

                      <dt>Email</dt>
                      <dd><?php echo $data->email; ?></dd> 

                      <dt>Age</dt>
                      <dd><?php echo $data->doctor_age; ?></dd> 

                      <dt>Doctor Degree</dt>
                      <dd><?php echo $data->degree_name; ?></dd> 

                      <dt>Doctor Affiliation</dt>
                      <dd><?php echo $data->hospital_name	; ?></dd> 

                      <dt>Doctor Language</dt>
                      <dd><?php echo $data->language_name; ?></dd> 
                      
                      <dt>Doctor Awards</dt>
                      <dd><?php echo $data->doctor_awards; ?></dd> 
                      
                      <dt>Doctor Membership</dt>
                      <dd><?php echo $data->doctor_memberships; ?></dd> 

                      <dt>Doctor Office Address</dt>
                      <dd><?php echo $data->doctor_office_address ; ?></dd> 
					  
					<dt>Doctor Office Country</dt>
                      <dd><?php echo $data->country_name ; ?></dd> 
					  

  
                      <dt>Doctor Office State</dt>
                      <dd><?php echo $data->state_name ; ?></dd>					  


                      <dt>Doctor Office City</dt>
                      <dd><?php echo $data->city_name ; ?></dd> 
 
                  </dl>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- ./col -->
            
            <div class="col-md-6">
              <div class="box box-primary">
               <div class="box-header with-border">
         <h3 class="box-title">View Doctor Details</h3>
         <div class="box-tools pull-right">
            <button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
            <i class="fa fa-minus"></i>
            </button>
         </div>
      </div>
                <div class="box-body">
                  <dl>	

                      <dt>Doctor Office Zip</dt>
                      <dd><?php echo $data->doctor_office_zip ; ?></dd> 

                      <dt>Specialty</dt>
                      <dd><?php echo $data->specialty_name; ?></dd> 


                      <dt>Terms</dt>
                      <dd><?php echo $data->terms; ?></dd> 

                      <dt>Status</dt>
                      <dd><?php //echo $data->status; ?></dd> 
					   <?php if($data->status == '1')
			{
			echo "enable";
			}
			else
			{ 
			echo "disable"; 
			}
			?>

                      <dt>Visitation</dt>
                      <dd><?php echo $data->reason; ?></dd> 

                      <dt>Insurance</dt>
                      <dd><?php echo $data->insurance_name; ?></dd> 

                      <dt>Latitude</dt>
                      <dd><?php echo $data->latitude; ?></dd> 


                      <dt>Longitude</dt>
                      <dd><?php echo $data->longitude; ?></dd>
					  
						<dt>Type</dt>
                      <dd><?php echo $data->type_selection; ?></dd>

					  <?php if(!empty($data->hospital_id)){ ?>
					  <dt>Parent Hospital </dt>
                      <dd><?php echo $res->hospital_name; ?></dd><?php } ?>
					  
					    <?php if(!empty($data->clinic_id)){ ?>
						 <dt>Parent Clinic </dt>
                      <dd><?php echo $res->clinic_name; ?></dd><?php } ?>
					  
					   <?php if(!empty($data->medical_id)){ ?>
					    <dt>Parent Medical </dt>
                      <dd><?php echo $res->medical_name; ?></dd><?php } ?>
					  
                      <dt>Doctor Experience</dt>
                      <dd><?php echo $data->doctor_experience; ?></dd> 

                      <dt>About Doctor</dt>
                      <dd><?php echo $data->about_doctor; ?></dd> 

					 <dt>Image</dt>
					  <?php if($data->display_image != NULL){ ?>
					 <img src="<?php echo base_url().$data->display_image; ?>" width="100px" height="100px" alt="Picture Not Found" />
					  <?php }
							else{
						 ?>
						 <img src="<?php echo base_url();?>assets/images/user_avatar.jpg" width="100px" height="100px" alt="Picture Not Found" />
					  <?php } ?>
                  </dl>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- ./col -->
          </div>  
			
		
		 
		  
		 