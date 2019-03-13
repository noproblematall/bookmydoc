<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Package
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-language" aria-hidden="true"></i>Home</a></li>
         <li><a href="#">Package Details</a></li>
         <li class="active">Add Package</li>
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
                  <h3 class="box-title"> Add Package Details</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
			   
                  <div class="box-body">                 
                     <div class="col-md-12">
					 <div class="form-group has-feedback">
                           <label> Select Doctor</label></br>
                            <div class="form-group" id="">
                          
							
						 <select class="form-control" name="doctor_id" onchange="" style="width: 100%;" >
							 
							
								   <?php
									foreach($doctor as $doc){									
								   ?>
						<option value="<?php echo $doc->id;?>"><?php echo $doc->doctor_firstname;?></option>
								   <?php
								  }
								   ?>
                            </select>
							 </div>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					      <div class="form-group has-feedback">
                           <label> Select Package</label></br>
                            <div class="form-group">
                          
							
						 <select class="form-control" name="package_id"  style="width: 100%;" id="package" >
							
								   <?php
								   
									foreach($package as $pack){									
								   ?>
						<option value="<?php echo $pack->id;?>"><?php echo $pack->package_name;?></option>
								   <?php
								  }
								   ?>
                            </select>
							 </div>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 
						   
						
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
				   </div>
				   
				</div>
			</div>
			
			<div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">View Package Details</h3>
               </div>	   
				 <div class="box-body">    
				    <div class="col-md-12">
					
					<table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
						   <th>Doctor Name</th>
                           <th>Package Name</th>
						   
						     
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           foreach($booking as $book) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $book->id; ?></td>
						   <td class="center"><?php echo $book->doctor_firstname; ?></td>
                           <td class="center"><?php echo $book->package_name; ?></td>
                           
						  
			                  <td class="center">
							  <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>Package_ctrl/edit_bookingdetailsdval/<?php echo $book->id; ?>">
                              <i class="fa fa-fw fa-edit"></i>Edit</a>
							  
							   <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Package_ctrl/delete_booking/<?php echo $book->id; ?>" onClick="return doconfirm()">
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
                           <th>Package Name</th>
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

