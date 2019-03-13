<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
          Doctor Gallery
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-hand-o-up"></i>Home</a></li>
         <li><a href="<?php echo base_url();?>Doctor_ctrl/add_gallery">Gallery</a></li>
         <li class="active">Doctor Gallery</li>
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
                  <h3 class="box-title">Add Doctor Gallery</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
			    <form role="form" action="" method="post" class="validate" enctype="multipart/form-data">
                  <div class="box-body">
                     <div class="col-md-12">                      
		                <div class="form-group">
                          <label>Select Doctor Name</label>
							<select class="form-control"  required="" style="width: 100%;" id="doctor_id" name="doctor_id">
								<option value="" disabled selected>Select Doctor Name</option>
								   <?php
									  foreach($doctorresult as $gallerydetails){
								   ?>
								   <option value="<?php echo $gallerydetails->id;?>"><?php echo $gallerydetails->doctor_firstname;?></option>
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
                  <h3 class="box-title">View Doctor Gallery </h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Doctor Name</th>
                           <th>Total Image</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           foreach($data as $doctorgallery) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $doctorgallery->doctor_id; ?></td>						 
                           <td class="center"><?php echo $doctorgallery->doctor_firstname; ?></td>
                           <td class="center"><?php echo $doctorgallery->total_images; ?></td>
                           <td class="center">	
						           <a class="btn btn-primary btn-sm view-gallery" href="<?php echo base_url(); ?>Doctor_ctrl/view_doctorgallery/<?php echo $doctorgallery->doctor_id; ?>" >
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
                           <th>Doctor Name</th>
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