<div class="content-wrapper" id="doctor_edit_wrapper" target="<?php //echo $data->id;?>" onreadystatechange="test();">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Edit Doctors Working Time <small>Edit</small></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="<?php echo base_url();?>index.php/doctor">Doctors</a></li>
				<li class="active"><a href="">Edit</a></li>
			  </ol>
	</section>
        <!-- Main content -->
	<section class="content">	  
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Working Time</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->									
				<form role="form" class="form-horizontal" name="doc_work_time"  id="doc_work_time" method="post" action="<?php echo base_url();?>Doctor_ctrl/edit_doctorworking/<?php echo $data->id;?>">						 
				<div class="box-body">
					<?php $working_time = (!empty($data->working_time)) ? json_decode($data->working_time,true) : array();?>
					<?php foreach ($Days as $key => $value) { ?>
					<div class="form-group work_group">          	      
						<label class="col-sm-2 control-label" for="inputEmail3"><?php echo $value;?></label>
						<div class="col-sm-4">
							<input type="text" placeholder="Start Time" id="<?php echo $value . '_working_start';?>" required value="<?php echo (!empty($data->working_time)) ? isset($working_time[ $days[$key]]['start']) ? $working_time[ $days[$key]]['start'] :'' : '';?>" name="work[<?php echo $days[$key];?>][start]" class="form-control timepicker start abc">
						</div>
						<div class="col-sm-4">
							<input type="text" placeholder="End Time" id="<?php echo $value . '_working_end';?>" required value="<?php echo (!empty($data->working_time)) ? isset($working_time[ $days[$key]]['end']) ? $working_time[ $days[$key]]['end'] :'' : '';?>"  name="work[<?php echo $days[$key];?>][end]" class="form-control timepicker end abc">
						</div>
						<label class="col-sm-1 control-label" for="inputEmail3">
						<input type="checkbox" name="<?php echo $value;?>" class="check_work_day">
						</label>
					</div>
					<?php } ?>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">				                
					<button class="btn btn-info pull-right form_submit" target="#doc_work_time" type="submit">Submit</button>
				</div>
				<!-- /.box-footer -->
				</form>							
				<?php if(empty($data->id)){ ?>
				<div class="overlay"><p>sorry you need to fill user details first</p></div>
				<?php } ?>
			</div>
		</div>										
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Break Time</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form class="form-horizontal" name="doctor_break_time"  id="doctor_break_time"  method="post" action="<?php echo base_url();?>Doctor_ctrl/edit_doctorbreaketime/<?php echo $data->id;?>">
				<div class="box-body">
					<?php $break_time = (!empty($data->break_time)) ? json_decode($data->break_time,true) : array('mon'=>array(array('start'=>'','end'=>'')),'tue'=>array(array('start'=>'','end'=>'')),'wed'=>array(array('start'=>'','end'=>'')),'thu'=>array(array('start'=>'','end'=>'')),'fri'=>array(array('start'=>'','end'=>'')),'sat'=>array(array('start'=>'','end'=>'')),'sun'=>array(array('start'=>'','end'=>'')));?>
					<?php foreach ($Days as $key => $value) { ?>
						<?php foreach ($break_time[$days[$key]] as $br_key => $breaktime) { ?>		
							<div class="form-group break_group <?php echo $value;?>">
								<label class="col-sm-2 control-label" for="inputEmail3"><?php echo $value;?></label>
								<div class="col-sm-3">
									<input type="text"  placeholder="Start Time" id="<?php echo $value . '_break_start';?>" <?php echo  (empty($data->break_time)) ? 'disabled' :'';?> value="<?php echo (!empty($data->break_time) && !empty($data->break_time)) ? isset($breaktime['start']) ? $breaktime['start'] :'' : '';?>"  name="break[<?php echo $days[$key];?>][start][]" class="form-control timepicker start abc <?php echo $days[$key] . '_break';?>">
								</div>
								<div class="col-sm-3">
									<input type="text"  placeholder="End Time" id="<?php echo $value . '_break_end';?>" <?php echo  (empty($data->break_time)) ? 'disabled' :'';?> value="<?php echo (!empty($data->break_time) && !empty($data->break_time)) ? isset($breaktime['end']) ? $breaktime['end'] :'' : '';?>" name="break[<?php echo $days[$key];?>][end][]" class="form-control timepicker end  abc <?php echo $days[$key] . '_break';?>">
								</div>
								<label class="col-sm-1 control-label" for="inputEmail3">
								<input type="checkbox" name="<?php echo $value;?>" class="check_break_day">
								</label>
								<label class="col-sm-3 control-label" for="inputEmail3">
								<div class="btn-group">
									<button class="btn btn-info clone_break" target=".<?php echo $value;?>" title="Add Row" type="button"><i class="fa fa-plus"></i></button>
									<button class="btn btn-info remove_break" target=".<?php echo $value;?>" title="Remove Row" type="button"><i class="fa fa-times"></i></button>
								</div>
								</label>
							</div>													
							<?php } ?>
						<?php }?>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<button class="btn btn-info pull-right " type="submit" target="doctor_break_time">Submit</button>
				</div>
				<!-- /.box-footer -->
				</form>							
				<?php if(empty($data->id)){ ?>
				<div class="overlay"><p>sorry you need to fill user details first</p></div>
				<?php } ?>				           
			</div>
		</div>				
		<!-- vacation details -->
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="box box-info">
		            <div class="box-header with-border">
						<h3 class="box-title">Vacation Period</h3>
		            </div>
		            <!-- /.box-header -->
		            <!-- form start -->
					<form role="form" name="doctor_vacation_time"  id="doctor_vacation_time"  method="post" action="<?php echo base_url();?>Doctor_ctrl/add_vacationtime/<?php echo $data->id;?>">
						<div class="box-body">
							<?php $vacation_time = (!empty($data->vacation_time)) ? json_decode($data->vacation_time,true) : array(array('startdate'=>'','enddate'=>'','starttime'=>'','endtime'=>''));?>
							<?php foreach ($vacation_time as $key => $value) { ?>
							<div class="row vacation_group">								              	
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group ">
											<label for="exampleInputEmail1">Start Date</label>
											<input type="text"  data-inputmask="'alias': 'yyyy-mm-dd'" data-mask=""  placeholder="Start Date" required name="startdate[]" id="exampleInputEmail1" value="<?php echo $value['startdate'];?>" class="form-control start_date dpd1" data-parsley-pattern="date" data-parsley-trigger="change" >
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
											<label for="exampleInputEmail1">End Date</label>
											<input type="text"  data-inputmask="'alias': 'yyyy-mm-dd'" data-mask=""  placeholder="End Date" required name="enddate[]"  id="exampleInputEmail1" value="<?php echo $value['enddate'];?>"  class="form-control end_date dpd1">
										</div>
									</div>
								</div>														
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="exampleInputEmail1">Action</label>
										<div class="btn-group">
											<button class="btn btn-info save_vacation" title="Save" type="button"><i class="fa fa-floppy-o "></i></button>
											<button class="btn btn-info clone_vacation" title="New Row" type="button"><i class="fa fa-plus"></i></button>
											<button class="btn btn-info remove_vacation"  title="Remove" type="button"><i class="fa fa-times"></i></button>						  
										</div>
									</div>
								</div>
							</div>
				        <?php } ?>
		              </div>
		              <!-- /.box-body -->
		              <div class="box-footer" style="display:none">
		                <button id="save_vacation" class="btn btn-info pull-right form_submit" target="#doctor_vacation_time" type="submit">Submit</button>
		              </div>
		            </form>					
					<?php if(empty($data->id)){ ?>
						<div class="overlay"><p>sorry you need to fill user details first</p></div>
					<?php } ?>							           
		          </div>
			        </div>
			    </div>				 
		</section><!-- /.content -->
<!-- Row Close -->
 </div>
 <!-- /.tab-pane -->
            