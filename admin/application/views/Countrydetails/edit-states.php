<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit State 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i>Home</a></li>
         <li><a href="<?php echo base_url();?>Country_ctrl/add_statename">State </a></li>
         <li class="active">Edit State</li>
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
                  <h3 class="box-title">Edit State </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-6">
					<div class="form-group">
                    <label>Country Name</label>
					<select class="form-control select2 js-example-basic-multiple" style="width: 100%;" name="country_id" 
					id="country_id">
							
								   <?php
								   if($countrydata) {
									  foreach($countrydata as $countrydetailsval){
										  $s = ($countrydetailsval->id == $data->country_id	) ? "selected" : "";  
								   ?>
								   
						<option <?php echo $s; ?> value="<?php echo $countrydetailsval->id;?>"> <?php echo $countrydetailsval->country_name;?></option>
								   <?php
								   }
								   }
								   ?>
                    </select>
                    </div>	
							
					 
					      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">State Name</label>
                            <input type="text" class="form-control required" value="<?php echo $data->state_name; ?>" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="state_name"  placeholder="State Name">
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

