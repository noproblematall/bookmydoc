<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
          Hospital Gallery
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-hand-o-up"></i>Home</a></li>
         <li><a href="<?php echo base_url();?>Hospital_ctrl/add_hospitalgallery">Gallery</a></li>
         <li class="active">Hospital Gallery</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <?php
               if($this->session->flashdata('message')) {
               $message = $this->session->flashdata('message');
               ?>
            <div class="alert alert-<?php echo $message['class']; ?>">
               <button class="close" data-dismiss="alert" type="button">×</button>
               <?php echo $message['message']; ?>
            </div>
            <?php
               }
               ?>
         </div>
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-warning">
               <div class="box-header with-border">
                  <h3 class="box-title">Add Hospital Gallery</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
			    <form role="form" action="" method="post" class="validate" enctype="multipart/form-data">
                  <div class="box-body">
                     <div class="col-md-12">                      
		                <div class="form-group">
                          <label>Select Hospital Name</label>
							<select class="form-control"  required="" style="width: 100%;" id="hospital_id" name="hospital_id">
								 <option value="" disabled selected>Select Hospital Name</option>   
								   <?php
									  foreach($hospitalresult as $hosgallerydetails){
								   ?>
								   <option value="<?php echo $hosgallerydetails->id;?>"><?php echo $hosgallerydetails->hospital_name;?></option>
								   <?php
								   }
								   ?>
                            </select>
                        </div>						
							        <div class="form-group ">
									<label class="control-label" for="shopimage">Select Images</label>
									<input type="file" multiple name="image[]" size="20" required="" />
									<p class="help-block">You can upload multiple images.</p>
                                    </div>
					 		        </br>
                     </div> 
                   </div>
				   <div class="box-footer">
					 <button type="submit" class="btn btn-primary">Submit</button>
				   </div> 
				</form>
              </div>
           <div class="col-xs-12">
            <!-- /.box -->
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title">View Hospital Gallery </h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Hospital Name</th>
                           <th>Total Image</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           foreach($data as $doctorgallery) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $doctorgallery->hospital_id; ?></td>						 
                           <td class="center"><?php echo $doctorgallery->hospital_name; ?></td>
                           <td class="center"><?php echo $doctorgallery->total_images; ?></td>
                           <td class="center">	
						           <a class="btn btn-primary btn-sm view-gallery" href="<?php echo base_url(); ?>Hospital_ctrl/view_hospitalgallery/<?php echo $doctorgallery->hospital_id; ?>" >
                                   <i class="glyphicon glyphicon-picture icon-white"></i>
                                   View Gallery
                                   </a>
                           </td>
                        </tr>
                        <?php
                           }
                           ?>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Hospital Name</th>
                           <th>Total Image</th>
                           <th>Action</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
				  </div><!-- close second div--> 
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>