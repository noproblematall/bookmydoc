<div class="row">
	<div class="col-md-6">
		  <div class="box box-primary">
			<div class="box-header with-border">
			 <h3 class="box-title">View Patient Details</h3>
			 <div class="box-tools pull-right">
				<button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
				<i class="fa fa-minus"></i>
				</button>
			 </div>
			</div>
		   <div class="box-body">
			  <dl>
				 <dt>Patient Firstname</dt>
				 <dd><?php echo $data->patient_firstname; ?></dd>  					 
				 <dt>Patient Lastname</dt>
				 <dd><?php echo $data->patient_lastname; ?></dd>
				 <dt>Email</dt>
				 <dd><?php echo $data->email; ?></dd>	

			  </dl>
			</div><!-- /.box-body -->
		  </div><!-- /.box -->
      </div><!-- ./col -->         
	<div class="col-md-6">
	  <div class="box box-primary">
	   <div class="box-header with-border">
		 <h3 class="box-title">View Patient Details</h3>
		 <div class="box-tools pull-right">
			<button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
			<i class="fa fa-minus"></i>
			</button>
		 </div>
	  </div>
		<div class="box-body">
		  <dl>	
			 <dt>Gender</dt>
			 <dd><?php echo $data->patient_sex; ?></dd>
			 <dt>Terms</dt>
			 <dd><?php echo $data->terms;?></dd>
			 <dt>Language</dt>
			 <dd><?php echo $data->language_name;?></dd>					 
			  <dt>Insurance</dt>
			  <dd><?php echo $data->insurance_name; ?></dd> 				 
			 <dt>Image</dt>
			  <?php if($data->patient_display_image != NULL){ ?>
			 <img src="<?php echo base_url().$data->patient_display_image; ?>" width="100px" height="100px" alt="Picture Not Found" />
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