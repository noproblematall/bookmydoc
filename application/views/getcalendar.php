<!-- /.box-header -->
               <div class="box-body">
			   <div class="errresult"></div>
			   <div class="sucresult"></div>
                  <table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th><?php if($this->lang->line('doctor_tab_A3')){ ?><?php echo $this->lang->line('doctor_tab_A3'); }else{ ?>Patient Name<?php } ?></th>                                                                             
                           <th><?php if($this->lang->line('doctor_tab_A4')){ ?><?php echo $this->lang->line('doctor_tab_A4'); }else{ ?>Appointment Time<?php } ?></th>                                                                             
                           <th><?php if($this->lang->line('doctor_tab_A5')){ ?><?php echo $this->lang->line('doctor_tab_A5'); }else{ ?>Patient Sex<?php } ?></th>                                                                             
                           <th><?php if($this->lang->line('doctor_tab_A6')){ ?><?php echo $this->lang->line('doctor_tab_A6'); }else{ ?>Insurance<?php } ?></th>                                                                             
                           <th><?php if($this->lang->line('doctor_tab_A7')){ ?><?php echo $this->lang->line('doctor_tab_A7'); }else{ ?>Reason<?php } ?></th>                                                                             
                              <th>Status</th>
							 <th>Action</th>       
                        </tr>
                     </thead> 
                     <tbody>
                        <?php
                           foreach($data as $doctors) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $doctors->id; ?></td>
                           <td class="center"><?php echo $doctors->patient_firstname; ?></td>                         
                           <td class="center"><?php echo $doctors->appointment_time; ?></td>
                           <td class="center"><?php echo $doctors->patient_sex; ?></td>
                           <td class="center"><?php echo $doctors->insurance; ?></td>
                           <td class="center"><?php echo $doctors->reason.''.$doctors->final_status;?></td>
                              <td  <span class="center  calendarmod  <?php if($doctors->status == '1')
							{
							echo "label-success";
							}else
							{ 
							echo "label-warning"; 
							}
							?>"><?php if($doctors->status == '1')
							{
							echo "Approved";
							}else
							{ 
							echo "Cancelled"; 
							}
							?></span> </td>

             <td class="center"> 
			 <button value="doctorcancel" type="submit" name="doctorcancel" id="cancelappoinment"  onClick="cancelappoinment(this,<?php echo $doctors->id; ?>)" data-id="<?php echo $doctors->id; ?>" class="btn btn-default"><span></span>Cancel</button>
		       <button value="doctorcancel" type="submit" name="doctorcancel"   onClick="approveappoinment(this,<?php echo $doctors->id; ?>)" data-id="<?php echo $doctors->id; ?>" class="btn btn-default"><span></span>Approve</button></td>
                        </tr>
						
                        <?php
                           }
                           ?>
                     </tbody>
					
                     <tfoot>
                        <tr>
                                  <th class="hidden">ID</th>
                           <th><?php if($this->lang->line('doctor_tab_A3')){ ?><?php echo $this->lang->line('doctor_tab_A3'); }else{ ?>Patient Name<?php } ?></th>                                                                             
                           <th><?php if($this->lang->line('doctor_tab_A4')){ ?><?php echo $this->lang->line('doctor_tab_A4'); }else{ ?>Appointment Time<?php } ?></th>                                                                             
                           <th><?php if($this->lang->line('doctor_tab_A5')){ ?><?php echo $this->lang->line('doctor_tab_A5'); }else{ ?>Patient Sex<?php } ?></th>                                                                             
                           <th><?php if($this->lang->line('doctor_tab_A6')){ ?><?php echo $this->lang->line('doctor_tab_A6'); }else{ ?>Insurance<?php } ?></th>                                                                             
                           <th><?php if($this->lang->line('doctor_tab_A7')){ ?><?php echo $this->lang->line('doctor_tab_A7'); }else{ ?>Reason<?php } ?></th>  
						  <th>Action</th>     
                        </tr>
                     </tfoot>
					
                  </table>
               </div>