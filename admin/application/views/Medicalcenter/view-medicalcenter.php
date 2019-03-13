   <div class="content-wrapper" >
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Medical Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-heartbeat"></i>Home</a></li>
         <li class="active"> Medical Details</li>
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
                  <h3 class="box-title">View Medical Details</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Medical Name</th>
                           <th>Medical Country</th>                                                                              
                           <th>Visitation</th>                                                                              
                           <th>Specialty </th> 
                           <th>Email</th>						                         
                           <th>Status</th>						                         
                           <th width="300px;">Action</th>
                        </tr>
                     </thead> 
                     <tbody>
                        <?php
                           foreach($data as $medical) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $medical->id; ?></td>
                           <td class="center"><?php echo $medical->medical_name; ?></td>                         
                           <td class="center"><?php echo $medical->country_name; ?></td>
                           <td class="center"><?php echo $medical->reason; ?></td>
                           <td class="center"><?php echo $medical->specialty_name; ?></td>
                           <td class="center"><?php echo $medical->email; ?></td>
						   <td><span class="center label  <?php if($medical->status == '1')
			{
			echo "label-success";
			}
			else
			{ 
			echo "label-warning"; 
			}
			?>"><?php if($medical->status == '1')
			{
			echo "enable";
			}
			else
			{ 
			echo "disable"; 
			}
			?></span> 						   
                              <td class="center">	 
						   
						      <a class="btn btn-sm bg-olive show-medicaldetails"  href="javascript:void(0);"  data-id="<?php echo $medical->id; ?>">
                              <i class="fa fa-fw fa-eye"></i> View </a>	

                              <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Medical_ctrl/delete_medical/<?php echo $medical->id; ?>" onClick="return doconfirm()">
                              <i class="fa fa-fw fa-trash"></i>Delete</a>	


                              <?php if( $medical->status){?>
                              <a class="btn btn-sm label-warning" href="<?php echo base_url();?>Medical_ctrl/medical_status/<?php echo $medical->id; ?>"> 
                              <i class="fa fa-folder-open"></i> Disable </a>           
                              <?php
                                 }
                                 
                                 else
                                 {
                                 ?>
                              <a class="btn btn-sm label-success" href="<?php echo base_url();?>Medical_ctrl/medical_active/<?php echo $medical->id; ?>"> 
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
                           <th>Medical Name</th>
                           <th>Medical Country</th>                                                                              
                           <th>Visitation</th>                                                                              
                           <th>Specialty </th> 
                           <th>Email</th>						                         
                           <th>Status</th>						                         
                           <th width="300px;">Action</th>
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

<div class="modal fade modal-wide" id="popup-medicalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">View Medical Details</h4>
         </div>
         <div class="modal-medicalbody">
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
 