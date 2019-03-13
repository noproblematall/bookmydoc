	
	
	<div class="content-wrapper" >
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
        View Language Translation
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-user-md"></i>Home</a></li>
         <li class="active">View Language Translation Details</li>
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
                  <h3 class="box-title">View Language Translation Details</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th>Languages </th>                                           
                           <th>Created Date</th>
                           <th>Action</th>
                        </tr>
                     </thead> 
                     <tbody>
                        <?php
                           foreach($query1 as $langtrans) {			 
                           ?>
                        <tr>
                           <td class="center"><?php echo $langtrans->languages; ?></td>
                           <td class="center"><?php echo $langtrans->created_date; ?></td> 
							<td class="center">
							 <?php if($langtrans->languages != 'default'){ ?>
							<a href="<?php echo base_url();?>Language_translation/edit_language/<?php echo $langtrans->id;?>">
							<i class="fa fa-pencil-square-o"></i>
							</a>&nbsp;&nbsp;
							<a href="#" title="<?php echo $langtrans->id;?>" class="delete">
							<i class="fa fa-trash-o "></i>
							</a>
							<?php } ?>
							</td> 
						   
							
                        </tr>
                        <?php
                           }
                           ?>
                     </tbody>
                     <tfoot>
                        <tr>
                             <th>Languages </th>                                           
                           <th>Created Date</th>
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
<script>
	
	base_url = "<?php echo base_url(); ?>";
	config_url = "<?php echo base_url(); ?>";
	
	</script>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pace.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/js/select2.full.min.js"></script>
    
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
    
    <!-- FastClick 
    <script src="../../plugins/fastclick/fastclick.min.js"></script>-->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/custom-script.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.colorbox-min.js"></script>
    	
	<script src="<?php echo base_url(); ?>assets/js/backend-script.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/charisma.js"></script>
    <!-- CK Editor -->
	 <script src="<?php echo base_url(); ?>assets/js/config.js"></script>
	 <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
	 
	 
	<script src="<?php echo base_url(); ?>assets/js/input-mask/jquery.inputmask.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/input-mask/jquery.inputmask.extensions.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/jquery.timepicker.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/jquery.timepicker.js"></script>
	
	<!--<script src="http://192.168.138.31/arun/thiago/assets/js/config.js"></script>-->
	<!--<script src="http://192.168.138.31/Immanuel/BMD/CI-admin-structure-adminLTE/assets/js/config.js"></script>-->
	
		
	<!--[validation js]-->
		
		<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
	<!--time picker-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-timepicker.min.js"></script>
	
	<script src="<?php echo base_url();?>assets/js/parsley.min.js"></script>
	<script>
   $(function () {
	   $(document).on('click',"#example1 .delete",function(){	
							
			var r = confirm("Are you sure want to delete the Language ");
			if (r == true) {
				var th=$(this);			
				var id = $(this).attr('title');
				
				
				$.ajax({
					url:'<?php echo base_url();?>Language_translation/languages_delete',
					type:'post',
					data:{'id':id},
					success:function(cancel){
					console.log(cancel);
					if(cancel==1){
					th.hide();
					location.reload();
					
					
					
					}
					else{
					alert("err");
					}
					}
				});  								
			}
						   
});				
    });
    </script>
 