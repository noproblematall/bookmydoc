<div class="content-wrapper" >
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Clinic Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-h-square"></i>Home</a></li>
         <li class="active">View Clinic Details</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
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
         <div class="col-xs-12">
            <!-- /.box -->
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title">View Clinic </h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Clinic Name</th>
                           <th>Clinic Country</th>
                           <th>Languages</th>
                           <th>Email</th>	 						   
                           <th>Status</th>	 						   
                           <th>Action</th>
                        </tr>
                     </thead> 
                     <tbody>
                        <?php
                           foreach($data as $clinics) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $clinics->id; ?></td>
                           <td class="center"><?php echo $clinics->clinic_name; ?></td>                         
                           <td class="center"><?php echo $clinics->country_name; ?></td>                         
                           <td class="center"><?php echo $clinics->language_name; ?></td>                         
                           <td class="center"><?php echo $clinics->email; ?></td>                         
						   <td><span class="center label  <?php if($clinics->status == '1'){
							echo "label-success";
							}
							else{ 
							echo "label-warning"; 
							}
							?>"><?php if($clinics->status == '1'){
							echo "enable";
							}
							else{ 
							echo "disable"; 
							}
							?></span>				
                            <td class="center">	                                                  		  
                              <a class="btn btn-sm bg-olive show-clinicdetails"  href="javascript:void(0);"  data-id="<?php echo $clinics->id; ?>">
                              <i class="fa fa-fw fa-eye"></i> View </a>							
                              <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Clinic_ctrl/delete_clinic/<?php echo $clinics->id; ?>" onClick="return doconfirm()">
                              <i class="fa fa-fw fa-trash"></i>Delete</a>	
							  <?php if( $clinics->status){?>
                              <a class="btn btn-sm label-warning" href="<?php echo base_url();?>Clinic_ctrl/Clinic_status/<?php echo $clinics->id; ?>"> 
                              <i class="fa fa-folder-open"></i> Disable </a>           
                              <?php
                                 }
                                 else
                                 {
                                 ?>
                              <a class="btn btn-sm label-success" href="<?php echo base_url();?>Clinic_ctrl/clinic_active/<?php echo $clinics->id; ?>"> 
                              <i class="fa fa-folder-o"></i> Enable </a>
                              <?php
                                 }
                                 ?>
                           </td>
                        </tr>
                        <?php
                           }
                           ?>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Clinic Name</th>
						   <th>Clinic Country</th>
                           <th>Languages</th>
                           <th>Email</th>							   
                           <th>Status</th>							   
                          <th>Action</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
<div class="modal fade modal-wide" id="popup-clinicModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">View Clinic Details</h4>
         </div>
         <div class="modal-clinicbody">
         </div>
         <div class="business_info">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
 