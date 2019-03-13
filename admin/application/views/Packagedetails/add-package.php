<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Doctor Package 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-language" aria-hidden="true"></i>Home</a></li>
         <li><a href="<?php echo base_url();?>Package_ctrl/add_package"> Package </a></li>
         <li class="active"> Add Doctor Package</li>
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
                  <h3 class="box-title">  Add Doctor Package </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">			   
                  <div class="box-body">                 
                     <div class="col-md-12">					 
					      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Package Name</label>
                            <input type="text" class="form-control required" data-parsley-trigger="change" data-parsley-minlength="2"  required="" name="package_name"  placeholder="Package_name">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Package Price</label>
                            <input type="text" class="form-control required" data-parsley-trigger="change" data-parsley-minlength="2"   required="" name="package_price"  placeholder="Package_price">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Package Period</label>
                            <input type="text" class="form-control required" data-parsley-trigger="change" data-parsley-minlength="2"   required="" name="package_period"  placeholder="Package_period">
                            <b>Examples:1 day, 10 days, 1 month, 10 months, 1 year, 10 years<b>
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
                  <h3 class="box-title">View Packages</h3>
               </div>	   
				 <div class="box-body">    
				    <div class="col-md-12">
					
					<table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Package Name</th>
						     <th>Package Price</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           foreach($package as $pack) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $pack->id; ?></td>
                           <td class="center"><?php echo $pack->package_name; ?></td>
                           <td class="center"><?php echo $pack->package_price; ?></td>
						   <td class="center"><?php echo $pack->package_period; ?></td>
			                  <td class="center">
							  <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>Package_ctrl/edit_packagedetailsdval/<?php echo $pack->id; ?>">
                              <i class="fa fa-fw fa-edit"></i>Edit</a>
							  
							   <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Package_ctrl/delete_package/<?php echo $pack->id; ?>" onClick="return doconfirm()">
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