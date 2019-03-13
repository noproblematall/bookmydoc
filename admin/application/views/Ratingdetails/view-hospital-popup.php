		<div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
				<div class="box-header with-border">
         <h3 class="box-title">View Hospital Rating </h3>
         <div class="box-tools pull-right">
            <button class="btn btn-info btn-sm" title="" data-toggle="tooltip" data-widget="collapse" data-original-title="Collapse">
            <i class="fa fa-minus"></i>
            </button>
         </div>
      </div>		

				   <div class="box-body">
                   <table id="" class="table table-bordered table-striped datatable">
                    <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Patient Name</th> 						                    				   
                           <th>Comment</th> 						                    				   
                           <th>Rating</th> 				   
                        </tr>
                    </thead>
                  <tbody>

				  <?php
				  foreach($data as $hosrating){
				  ?>
				  <tr>
				    <td class="center"><?php echo $hosrating->patient_firstname; ?></td>
				    <td class="center"><?php echo $hosrating->review; ?></td>
				    <td class="center"><?php echo $hosrating->rating; ?></td>
				    		
					<td class="center">	                         
                    </td>
				  </tr>
				  
				  <?php
				  }
				  ?>
				  </tbody>
				  
		         	</table>
                </div><!-- /.box-body -->
				
				
				
				
				
				
				
				
				
				
              </div><!-- /.box -->
            </div><!-- ./col -->
          </div>  
			
		
		 
		  
		 