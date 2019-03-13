<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">View Appoinment Details</h3>
				<div class="box-tools pull-right">
					<button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
					<i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<div class="box-body">
				<dl>
					<dt>Doctor Name</dt>
					<dd><?php echo $data->doctor_firstname; ?></dd>  					  
					<dt>Patient Name</dt>
					<dd><?php echo $data->patient_firstname; ?></dd>                      
					<dt>Appoinment Date</dt>
					<dd><?php echo $data->appointment_date; ?></dd> 					  
					<dt>Doctor Appoinment Time</dt>
					<dd><?php echo $data->appointment_time; ?></dd> 	
				</dl>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- ./col -->           
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">View Appoinment Details</h3>
				<div class="box-tools pull-right">
				<button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
				<i class="fa fa-minus"></i>
				</button>
				</div>
			</div>
			<div class="box-body">
				<dl>	

					<dt>Reason</dt>
					<dd><?php echo $data->reason; ?></dd> 
				</dl>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- ./col -->
</div>  