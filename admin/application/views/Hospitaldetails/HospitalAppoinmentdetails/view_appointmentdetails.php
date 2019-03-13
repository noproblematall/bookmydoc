	
	
	<div class="content-wrapper" >
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
        View Hospital Appoinment Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i>Home</a></li>
         <li><a href="#">Hospital Appoinment Details</a></li>
         <li class="active">View Hospital Appoinment Details</li>
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
                  <h3 class="box-title">View Hospital Appoinment Details</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
						   <th>Patient Name</th> 
                           <th>Hospital Name</th>                                                                             
                           <th>Doctor name</th>                                                                             
                           <th>appointment Date</th>                     
                           <th>Status</th>                                                                             
                           <th width="">Action</th>
                        </tr>
                     </thead> 
                     <tbody>
                        <?php
                           foreach($data as $appoin) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $appoin->id; ?></td>
						    <td class="center"><?php echo $appoin->patient_firstname; ?></td>  
                           <td class="center"><?php echo $appoin->hospital_name; ?></td>                         
                           <td class="center"><?php echo $appoin->doctor_firstname; ?></td>
                           <td class="center"><?php echo $appoin->appointment_date; ?></td>
                 


            <td><span class="center label  <?php if($appoin->status == '1')
			{
			echo "label-success";
			}
			else
			{ 
			echo "label-warning"; 
			}
			?>"><?php if($appoin->status == '1')
			{
			echo "enable";
			}
			else
			{ 
			echo "disable"; 
			}
			?></span> 				                                                                                            
                           <td class="center">	                         
                           		  
                              <a class="btn btn-sm bg-olive show-hospitalappoinmentdetails"  id="view-hospapp"  href="javascript:void(0);"  data-id="<?php echo $appoin->id; ?>">
                              <i class="fa fa-fw fa-eye"></i> View </a>		
							  
                              <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>HospitalAppoinment_ctrl/edit_appointmentdetails/<?php echo $appoin->id; ?>">
                              <i class="fa fa-fw fa-edit"></i>Edit</a>
							  
                              <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>HospitalAppoinment_ctrl/delete_appointment/<?php echo $appoin->id; ?>" onClick="return doconfirm()">
                              <i class="fa fa-fw fa-trash"></i>Delete</a>	
							  
							 <?php if( $appoin->status){?>
                              <a class="btn btn-sm label-warning" href="<?php echo base_url();?>HospitalAppoinment_ctrl/appointment_status/<?php echo $appoin->id; ?>"> 
                              <i class="fa fa-folder-open"></i> Disable </a>           
                              <?php
                                 }
                                 
                                 else
                                 {
                                 ?>
                              <a class="btn btn-sm label-success" href="<?php echo base_url();?>HospitalAppoinment_ctrl/appoinment_active/<?php echo $appoin->id; ?>"> 
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
                           <th>Hospital name</th>                                                                             
                           <th>Doctor name</th>                                                                             
                           <th>appointment Date</th>                     
                           <th>Status</th>  					   
                           <th width="">Action</th>
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

<div class="modal fade modal-wide" id="popup-appoinmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">View Hospital Appoinment Details</h4>
         </div>
         <div class="modal-appoinmentbody">
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
 