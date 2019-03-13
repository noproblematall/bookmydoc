<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add City
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-language" aria-hidden="true"></i>Home</a></li>
         <li class="active"> City</li>
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
                  <h3 class="box-title"> Add City </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-12">
					<div id="test2"> 
							<div class="form-group has-feedback">
								<label for="exampleInputEmail1">Address</label>
								<input type="text" class="form-control required autocomplete"  name="city" placeholder="Address"  required ="">
								<span class="glyphicon  form-control-feedback"></span>
							</div>	
							<input type="hidden" class="locality" name="city" >
							<input type="hidden" class="field administrative_area_level_1" name="state"  disabled="true">
							<input type="hidden" class="field country"   disabled="true" name="country" >
							<input type="hidden" class="field postal_code"  disabled="true" name="zip" >
								<input type="hidden"  id="lat"  name="latitude"  >
								<input type="hidden"  id="lon"  name="longitude" >
						</div> 
						</div>
					</div>

				  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
				</form>
			</div>
			<div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">View City Details</h3>
               </div>	   
				 <div class="box-body">    
				    <div class="col-md-12">
					<table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>City</th>
						   <th>State</th>
						   <th>Country</th>
						     <th>Zip</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           foreach($data as $visit) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $visit->id; ?></td>
                           <td class="center"><?php echo $visit->city; ?></td>
						    <td class="center"><?php echo $visit->state; ?></td>
							 <td class="center"><?php echo $visit->country; ?></td>
							  <td class="center"><?php echo $visit->zip; ?></td>
                           <td class="center">	
							  <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>Cities/edit_cities/<?php echo $visit->id; ?>">
                              <i class="fa fa-fw fa-edit"></i>Edit</a>
							   <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Cities/delete_cities/<?php echo $visit->id; ?>" onClick="return doconfirm()">
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
                          <th>City</th>
						   <th>State</th>
						   <th>Country</th>
						     <th>Zip</th>
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
<body onload="initialize()">