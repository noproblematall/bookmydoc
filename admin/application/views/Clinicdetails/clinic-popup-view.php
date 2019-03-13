<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">View Clinic Details</h3>
				<div class="box-tools pull-right">
				<button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
				<i class="fa fa-minus"></i>
				</button>
				</div>
			</div>
			<div class="box-body">
				<dl>
					<dt>Clinic Name</dt>
					<dd><?php echo $data->clinic_name; ?></dd>       
					<dt>Clinic Address</dt>
					<dd><?php echo $data->clinic_address; ?></dd>   
					<dt>Clinic Country</dt>
					<dd><?php echo $data->country_name; ?></dd> 
					<dt>Clinic State</dt>
					<dd><?php echo $data->state_name; ?></dd> 
					<dt>Clinic City</dt>
					<dd><?php echo $data->city_name; ?></dd> 
					<dt>Clinic Zip</dt>
					<dd><?php echo $data->clinic_zip; ?></dd> 
					<dt>Specialty</dt>
					<dd><?php echo $data->specialty_name; ?></dd> 
					<dt>Insurance</dt>
					<dd><?php echo $data->insurance_name; ?></dd>                      
					<dt>visitation</dt>
					<dd><?php echo $data->reason; ?></dd>                    
					<dt>Email</dt>
					<dd><?php echo $data->email; ?></dd> 
					<dt>Clinic Languages</dt>
					<dd><?php echo $data->language_name; ?></dd> 
				</dl>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- ./col -->
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
			<h3 class="box-title">View Clinic Details</h3>
			<div class="box-tools pull-right">
			<button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
			<i class="fa fa-minus"></i>
			</button>
			</div>
		</div>
		<div class="box-body">
			<dl>	
				<dt>Clinic Awards</dt>
				<dd><?php echo $data->clinic_awards; ?></dd> 
				<dt>Clinic Memberships</dt>
				<dd><?php echo $data->clinic_memberships ; ?></dd> 				  
				<dt>Terms</dt>
				<dd><?php echo $data->terms; ?></dd> 
				<dt>Status</dt>
				<dd><?php //echo $data->status; ?></dd> 
				<?php if($data->status == '1'){
				echo "enable";
				}
				else{ 
				echo "disable"; 
				}
				?>
				<dt>Latitude</dt>
				<dd><?php echo $data->latitude; ?></dd> 
				<dt>Longitude</dt>	
				<dd><?php echo $data->longitude; ?></dd>
				<dt>Type</dt>
				<dd><?php echo $data->type_selection; ?></dd>
				<?php if(!empty($data->parent_id)){ ?>
				<dt>Sub Clinic</dt>
				<dd><?php echo $res->clinic_name; ?></dd> </dd><?php } ?>
				<dt>About US</dt>	
				<dd><?php echo $data->longitude; ?></dd>
				<dt>Aminities</dt>	
				<dd><?php echo $data->facility_name; ?></dd>
				<dt>Affilliations</dt>	
				<dd><?php echo $data->hospital_name; ?></dd>
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