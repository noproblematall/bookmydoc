	<script>
	
	base_url = "<?php echo base_url(); ?>";
	config_url = "<?php echo base_url(); ?>";
	
	</script>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pace.js"></script>
    
    
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
    
    <!-- FastClick 
    <script src="../../plugins/fastclick/fastclick.min.js"></script>-->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/custom-script.js"></script>
    
    	
	<script src="<?php echo base_url(); ?>assets/js/backend-script.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.colorbox-min.js"></script>
    <!-- CK Editor -->
	<script src="<?php echo base_url(); ?>assets/js/charisma.js"></script>
	 <script src="<?php echo base_url(); ?>assets/js/config.js"></script>
	 <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
	 <script src="<?php echo base_url(); ?>assets/js/jquery.timepicker.js"></script>
	 
	<script src="<?php echo base_url(); ?>assets/js/input-mask/jquery.inputmask.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/input-mask/jquery.inputmask.extensions.js"></script>
	<!--[validation js]-->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAPkwBOzGBH1V1sRBzmCWQS-7XoTgPghT0&libraries=places"></script>
		<!-- Select2 -->
    
		<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/parsley.min.js"></script>
    
	
	
	<script>
$(function() {
	$('#datepicker').datepicker({
		autoclose: true,
		format: 'dd-mm-yyyy'
				
    });
});


var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
 
var checkin = $('#dpd1').datepicker({
  onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
  }
})/*.on('changeDate', function() {
  if (date.valueOf() > checkout.date.valueOf()) {
  /*  var newDate = new Date(date)
    newDate.setDate(newDate.getDate() + 1);
    checkout.setValue(newDate);
  }
  //checkin.hide();
  //$('#dpd2')[0].focus();
}).data('datepicker');*/


var checkin = $('.dpd1').datepicker({
  onRender: function(date) {
    //return date.valueOf() < now.valueOf() ? 'disabled' : '';
  }
})





</script>

    <script>
      $(function () {
        //Initialize Select2 Elements
       // $(".select2").select2();
		
		$('.datatable').DataTable({
			"ordering" : $(this).data("ordering"),
			"order": [[ 0, "desc" ]]
        });
		
	  });
	</script>
	<script>
	     $(function () {
		$(".datemask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
		$("[data-mask]").inputmask();
	  });
	  </script>
	  <script>
	 $(function () {
      	$(".timepicker").timepicker({
      		'minTime': '00:00am',
    		'maxTime': '24:00pm',
	      showInputs: false
	    });
        
		
	  });
	</script>
	
		 <script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
     if(job!=true)
    {
        return false;
    }
}
</script>
