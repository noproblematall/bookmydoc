		<div class="row">
            <div class="col-md-6">
              <div class="box box-primary">
				<div class="box-header with-border">
         <h3 class="box-title">View Medical Center Appoinment Details</h3>
         <div class="box-tools pull-right">
            <button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
            <i class="fa fa-minus"></i>
            </button>
         </div>
      </div>

                <div class="box-body">
                  <dl>
					 <dt>Patient Name</dt>
                      <dd><?php echo $data->patient_firstname; ?></dd>  
					  
					  <dt>Medical center Name</dt>
                      <dd><?php echo $data->medical_name; ?></dd>  
					  
					  <dt>Doctor Name</dt>
                      <dd><?php echo $data->doctor_firstname; ?></dd> 
                      
					  <dt>Appoinment Date</dt>
                      <dd><?php echo $data->appointment_date; ?></dd> 
					  
					  <dt>Doctor Appoinment Time</dt>
                      <dd><?php echo $data->start_time; ?></dd> 
					  
					  <dt>Reason</dt>
                      <dd><?php echo $data->ill_reason; ?></dd> 
 	
                  </dl>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- ./col -->
            
            <div class="col-md-6">
              <div class="box box-primary">
               <div class="box-header with-border">
         <h3 class="box-title">View Medical Center Appoinment Details</h3>
         <div class="box-tools pull-right">
            <button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
            <i class="fa fa-minus"></i>
            </button>
         </div>
      </div>
                <div class="box-body">
                  <dl>	
                     
					  
					  
					  
					  
					  <dt>Status</dt>
					  <?php if($data->status == '1')
			{
			echo "enable";
			}
			else
			{ 
			echo "disable"; 
			}
			?>
					  
                      <dd><?php //echo $data->status; ?></dd> 
					  
					  <dt>Reason</dt>
                      <dd><?php echo $data->ill_reason; ?></dd> 
                      

                  </dl>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- ./col -->
          </div>  
			
		
		 
		  
		 