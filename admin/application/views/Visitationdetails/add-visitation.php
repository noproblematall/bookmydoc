<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Visitaion 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-crosshairs"></i>Home</a></li>
         <li class="active">Add Visitaion</li>
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
                  <h3 class="box-title">Add Visitation </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
			   <form role="form" action="" method="post" data-parsley-validate="" class="validate" enctype="multipart/form-data"> 
                  <div class="box-body">                 
                     <div class="col-md-12">
					 
					      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Speciality Name</label>
							 <select class="form-control" style="width: 100%;" id="Specialty_name" name="specialty_id">
                            <!--<input type="text" class="form-control required" data-parsley-trigger="change" data-parsley-minlength="2"  required="" name="specialty_name"  placeholder="Specialty Name">-->
								<?php
									  foreach($speciality as  $row){									
								   ?>
							<option value="<?php echo $row->id;?>"> <?php echo $row->specialty_name;?></option>
									 <?php
									  }
									 ?>
							<span class="glyphicon  form-control-feedback"></span>
							</select>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Reason</label>
                            <input type="text" class="form-control required" data-parsley-trigger="change" data-parsley-minlength="2"  required="" name="reason"  placeholder="Reason">
							<span class="glyphicon  form-control-feedback"></span>
							</select>
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
                  <h3 class="box-title">View Visitation Details</h3>
               </div>	   
				 <div class="box-body">    
				    <div class="col-md-12">
					
					<table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
						   <th>Reason</th>
                           <th>Speciality Name</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           foreach($data1 as $spelity) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $spelity->id; ?></td>
						   <td class="center"><?php echo $spelity->reason; ?></td>
                           <td class="center"><?php echo $spelity->specialty_name; ?></td>
                           <td class="center">	
							  <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>Visitation_ctrl/edit_visitdetailsdval/<?php echo $spelity->id; ?>">
                              <i class="fa fa-fw fa-edit"></i>Edit</a>
							   <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Visitation_ctrl/delete_visitation/<?php echo $spelity->id; ?>" onClick="return doconfirm()">
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
						   <th>Reason</th>
                           <th>Speciality Name</th>
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

