<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit City 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i>Home</a></li>
         <li><a href="<?php echo base_url();?>Country_ctrl/add_cityname">City </a></li>
         <li class="active">Edit City</li>
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
                  <h3 class="box-title">Edit City </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-6">
				         <div class="form-group">
                        <label>Country Name</label>
					      <select class="form-control select2 js-example-basic-multiple" style="width: 100%;" name="country_id"  id="country_namecity">
							   <?php
							   if($dataaddcountry) {
								  foreach($dataaddcountry as $countdetails){
									  $s = ($countdetails->id == $data->country_id) ? "selected" : "";  
							   ?>
								<option <?php echo $s; ?> value="<?php echo $countdetails->id;?>"> <?php echo $countdetails->country_name;?></option>
							   <?php
							   }
							   }
							   ?>
                            </select>
                        </div>
						<div class="form-group">
							<label>State Name</label>
							<select class="form-control select2 js-example-basic-multiple subcatsedit"  style="width: 100%;" id="state_id" name="state_id">
							   <?php
							   if($addstatesval) {
								  foreach($addstatesval as $countstatedetails){
									  $s = ($countstatedetails->id == $data->state_id) ? "selected" : "";  
							   ?>
							   
							<option <?php echo $s; ?> value="<?php echo $countstatedetails->id;?>"> <?php echo $countstatedetails->state_name;?></option>
							   <?php
							   }
							   }
							   ?>
                            </select>
                        </div>	
					      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">City Name</label>
                            <input type="text" class="form-control required" value="<?php echo $data->city_name; ?>" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="city_name"  placeholder="City Name">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				     </div>
				  </div>
				    <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
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