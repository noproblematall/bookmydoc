<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Business Information Details
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-building"></i>Home</a></li>
            <li><a href="#">Business Information</a></li>
            <li class="active">Add Business</li>
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
					<?php echo $message['message']; 
					?>
					</div>
					<?php
					}
                $sess_id=$this->session->userdata('admin_logged_in');
		        $u_id=$sess_id['id'];
            ?>
			</div>
			<div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Business Information Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" id="user_reg" method="post" data-parsley-validate="" class="validate" enctype="multipart/form-data">
                 
				 <div class="box-body">
				 <div class="col-md-6">
						       
					  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Affiliated Name</label>
                            <input type="text" class="form-control required" data-parsley-trigger="change" data-parsley-minlength="2"  required="" name="hospital_name"  placeholder="Affiliated Name">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						
					   
					   
		         </div>
		   
		         <div class="col-md-6">
					   

						
					   <div class="form-group col-md-4">
                       <label>Display Picture</label>
                       <input name="image" type="file" accept="image/*" class="required">
                       </div>
					  
					   
					   
		          </div>
                  </div><!-- /.box-body -->
                         <div class="box-footer">
                       <!--<button type="submit" class="btn btn-primary" id="useradd">Submit</button>-->
					   <input type="button" class="btn btn-primary" value="Submit"  name="Save" id="useradd">
                       </div>  
                      
                </form>
              </div><!-- /.box -->
            </div>
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
<script type="text/javascript">
$(document).ready(function(){
 
    $("#useradd").click(function(){
		
     var data =$("#user_reg").serialize() ;
 
     $.ajax({
               type:"POST",
               url:"add_imgdetails",
               data:data,
               //mimeType: "multipart/form-data",
							contentType: false,
							cache: false,
							processData: false,
							success:function(data)
                        {
                        alert(data);
                        }
       });
     });
 });	
 

/*$(document).ready(function(){
$("#useradd").click(function(){
	
var value =$("#user_reg").serialize() ;
	
$.ajax({
url:'<?php echo base_url();?>Img_ctrl/add_imgdetails',
method:'post',
data:value,
success:function(res){
$(".adminuser").show();
console.log(res);
if(res==0){
	$(".adminuser").html('<p class="error">Error</p>');
	setTimeout(function(){$(".adminuser1").hide(); }, 3000);
}else if(res==2){
	$(".adminuser").html('<p class="error">Name Exists</p>');
	setTimeout(function(){$(".adminuser1").hide(); }, 3000);
}
else{
   $(".adminuser").html('<p class="success">Airport Details Saved Successfully</p>');
   setTimeout(function(){$(".adminuser1").hide(); }, 1500);
   $('#user_reg')[0].reset();
}
}
});
});
});*/
 
</script>
