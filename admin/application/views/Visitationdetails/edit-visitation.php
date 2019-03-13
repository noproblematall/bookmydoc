<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Visitation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-crosshairs"></i>Home</a></li>
         <li><a href="<?php echo base_url();?>Visitation_ctrl/add_visitations">Visitation </a></li>
         <li class="active">Edit Visitaion</li>
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
                  <h3 class="box-title">Edit Visitation </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-6">
					      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialty Name</label>
							 <select class="form-control" style="width: 100%;" id="Specialty_name" name="specialty_id">
							
								    <?php
									  foreach($speciality as $spec){									
								   ?>
							<option value="<?php echo $spec->id;?>"<?php if ($spec->id == $data->specialty_id)
					         echo 'selected';  ?> ><?php echo $spec->specialty_name;?></option>	
								   <?php
								   }
								   ?>
							<span class="glyphicon  form-control-feedback"></span>
							</select>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Reason</label>
                            <input type="text" class="form-control required" data-parsley-trigger="change" data-parsley-minlength="2"  required="" name="reason"   value="<?php echo $data->reason;?>" >
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