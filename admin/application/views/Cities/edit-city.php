<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit City
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-language" aria-hidden="true"></i>Home</a></li>
         <li><a href="<?php echo base_url();?>Cities/add_cities">City </a></li>
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
                  <h3 class="box-title">Edit City Details</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-6">
					<div id="test2"> 
							<div class="form-group has-feedback">
								<label for="exampleInputEmail1">Address</label>
								<input type="text" class="form-control required autocomplete"  name="city" placeholder="Address"  value="<?php echo $data->city.' ,'.$data->state.' ,'.$data->country;?>"required ="">
								<span class="glyphicon  form-control-feedback"></span>
							</div>	
							<input type="hidden" class="locality" name="city" value="<?php echo $data->city?>" >
							<input type="hidden" class="field administrative_area_level_1" name="state"  disabled="true" value="<?php echo $data->state?>" >
							<input type="hidden" class="field country"   disabled="true" name="country" value="<?php echo $data->country?>" >
							<input type="hidden" class="field postal_code"  disabled="true" name="zip" value="<?php echo $data->zip?>" >
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
			</div>
            </div>
            <!-- /.box -->
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
<body onload="initialize()">