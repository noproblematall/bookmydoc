<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add City 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i>Home</a></li>
         <li><a href="<?php echo base_url();?>Country_ctrl/add_cityname">City </a></li>
         <li class="active">Add City</li>
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
                  <h3 class="box-title">Add City </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-12">
						    <div class="form-group">
                            <label>Country Name</label>
					        <select class="form-control select2 js-example-basic-multiple" style="width: 100%;" name="country_id" id="country_id">
								   <?php
									  foreach($dataaddcountry as $countrycities){									
								   ?>
						    <option value="<?php echo $countrycities->id;?>"><?php echo $countrycities->country_name;?></option>
								   <?php
								   }
								   ?>
                            </select>
                            </div>
				            <div class="form-group">
                            <label>State Name</label>
					        <select class="form-control select2 js-example-basic-multiple subcatcountry" style="width: 100%;" name="state_id" id="state_id">
								   <?php
									  foreach($addstatesval as $addstatedetails){									
								   ?>
						    <option value="<?php echo $addstatedetails->id;?>"><?php echo $addstatedetails->state_name;?></option>
								   <?php
								   }
								   ?>
                            </select>
                            </div>
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">City Name</label>
                            <input type="text" class="form-control required" data-parsley-trigger="change" data-parsley-minlength="2"  data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="city_name"  placeholder="city_name">
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
                  <h3 class="box-title">View City Details</h3>
               </div>	   
				 <div class="box-body">    
				    <div class="col-md-12">
					<table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Country Name</th>
                           <th>State Name</th>
                           <th>City Name</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php
                           foreach($datacity as $city) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $city->id; ?></td>
                           <td class="center"><?php echo $city->country_name; ?></td>
                           <td class="center"><?php echo $city->state_name; ?></td>
                           <td class="center"><?php echo $city->city_name; ?></td>
                           <td class="center">	
							  <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>Country_ctrl/edit_citysdetails/<?php echo $city->id; ?>">
                              <i class="fa fa-fw fa-edit"></i>Edit</a>
							  <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Country_ctrl/delete_citys/<?php echo $city->id; ?>" onClick="return doconfirm()">
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
                           <th>Country Name</th>
                           <th>State Name</th>
                           <th>City Name</th>
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