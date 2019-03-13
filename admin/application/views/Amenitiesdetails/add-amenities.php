<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Amenities 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-houzz" aria-hidden="true"></i>Home</a></li>
         <li class="active">Add Amenities</li>
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
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title"> Add Amenities </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">			   
                  <div class="box-body">                 
                     <div class="col-md-12">					 
					      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Amenities Name</label>
                            <input type="text" class="form-control required" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-pattern="^[a-zA-Z\  \/]+$"  required="" name="facility_name"  placeholder="Affiliated Name">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				   </div>				   
				</div>
				  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
			</div>		
			<div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">View Amenities Details</h3>
               </div>	   
				 <div class="box-body">    
				    <div class="col-md-12">					
					<table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Amenities Name</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           foreach($data as $amenities) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $amenities->id; ?></td>
                           <td class="center"><?php echo $amenities->facility_name; ?></td>
                           <td class="center">				                  
							  <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>Amenities_ctrl/edit_amenitiesval/<?php echo $amenities->id; ?>">
                              <i class="fa fa-fw fa-edit"></i>Edit</a>							  
							   <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Amenities_ctrl/delete_amenities/<?php echo $amenities->id; ?>" onClick="return doconfirm()">
                               <i class="fa fa-fw fa-trash"></i>Delete</a> 
                           </td>
                        </tr>
                        <?php
                           }
                           ?>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Amenities Name</th>
                           <th>Action</th>
                        </tr>
                     </tfoot>
                  </table>				   
				    </div>
				   </div>
				   </div>				   
				  </div>
               </form>
            </div>
            <!-- /.box -->
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>