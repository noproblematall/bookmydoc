<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Currency 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-language" aria-hidden="true"></i>Home</a></li>
         <li class="active">Add Currency</li>
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
                  <h3 class="box-title"> Add Currency </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-12">
					      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Country Name</label>
                            <input type="text" class="form-control required" required="" name="name"  placeholder="Country Name">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
							 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Currency Code</label>
                            <input type="text" class="form-control required" required="" name="currency_code"  placeholder="Currency Code">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Currency Symbol</label>
                            <input type="text" class="form-control required" required="" name="currrency_symbol"  placeholder="Currency Symbol">
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
                  <h3 class="box-title">View Currency Details</h3>
               </div>	   
				 <div class="box-body">    
				    <div class="col-md-12">
					
					<table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Country Name</th>
						   <th>Currency Code</th>
						   <th>Currency Symbol</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           foreach($data as $currency) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $currency->id_countries; ?></td>
                           <td class="center"><?php echo $currency->name; ?></td>
						   <td class="center"><?php echo $currency->currency_code; ?></td>
						   <td class="center"><?php echo $currency->currrency_symbol; ?></td>
                           <td class="center">	
			                  
							  <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>Currency_ctrl/edit_currency/<?php echo $currency->id_countries; ?>">
                              <i class="fa fa-fw fa-edit"></i>Edit</a>
							  
							   <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Currency_ctrl/delete_currencies/<?php echo $currency->id_countries; ?>" onClick="return doconfirm()">
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
                            <th>Currency Code</th>
						   <th>Currency Symbol</th>
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

