<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Packages for Doctor
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-language" aria-hidden="true"></i>Home</a></li>
         <li><a href="#">Package Details</a></li>
         <li class="active">Edit Packages for Doctor</li>
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
                  <h3 class="box-title"> Edit Package Details for Doctor</h3>
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
						<option value="<?php echo $doc->id;?>"<?php if ($doc->id == $data1->doctor_id){ ?>
						selected = "selected" <?php } ?>><?php echo $doc->doctor_firstname;?></option>
								   <?php
								  }
								   ?>
                            </select>
							 </div>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					      <div class="form-group has-feedback">
                           <label> Select Package</label></br>
                            <div class="form-group" id="">						
						 <select class="form-control" name="package_id"  style="width: 100%;" >
								   <?php
									foreach($package as $pack){									
								   ?>
						<option value="<?php echo $pack->id;?>"<?php if ($pack->id == $data1->package_id){ ?>
						selected = "selected" <?php } ?>><?php echo $pack->package_name;?></option>
								   <?php
								  }
								   ?>
                            </select>
							 </div>
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