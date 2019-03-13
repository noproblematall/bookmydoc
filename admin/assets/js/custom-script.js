$( "form.validate" ).submit(function( event ) {
	var access = true;
	$(this).find('.required').each(function() {
		var v = $(this).val();
		if((v.replace(/\s+/g, '')) == '') {
			access = false;
			$(this).parents(".form-group").addClass("has-error");
		}
		else {
			$(this).parents(".form-group").removeClass("has-error");
		}
	});
	if(access) {
		return;
	}
	else {
		$("body").animate({ scrollTop: $('.has-error').offset().top - 50 }, "slow");
	}
	event.preventDefault();
});

// View Shop Details
$(function() {
$('.view-shop').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'shop/view_single_shop';
	var result = post_ajax(url, data);
	if(result != 'error') {
	$('#myModal .modal-body').html(result);
	remove_shop_service();
	}
});
$('.view-review').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'review/view_shop_review';
	var result = post_ajax(url, data);
	if(result != 'error') {
	$('#myModal .modal-body').html(result);
	rating();
	}
});
$('.thumbnails').on('click', '.gallery-delete', function (e) {
    e.preventDefault();
    //get image id
    var id = $(this).parents('.thumbnail').data("id");
	var data = {id:id};
	var url = config_url+'Doctor_ctrl/delete_gallery_image';
	var result = post_ajax(url, data);
	if(result != 'error') {
		$(this).parents('.thumbnail').fadeOut();
	}
   });
  $('.thumbnails').on('click', '.gallery-delete', function (e) {
    e.preventDefault();
    //get image id
    var id = $(this).parents('.thumbnail').data("id");
	var data = {id:id};
	var url = config_url+'Clinic_ctrl/delete_clinicgallery';
	var result = post_ajax(url, data);
	if(result != 'error') {
		$(this).parents('.thumbnail').fadeOut();
	}
   });
    $('.thumbnails').on('click', '.gallery-delete', function (e) {
    e.preventDefault();
    //get image id
    var id = $(this).parents('.thumbnail').data("id");
	var data = {id:id};
	var url = config_url+'Medical_ctrl/delete_medicalgallery';
	var result = post_ajax(url, data);
	if(result != 'error') {
		$(this).parents('.thumbnail').fadeOut();
	}
   });
    $('.thumbnails').on('click', '.gallery-delete', function (e) {
    e.preventDefault();
    //get image id
    var id = $(this).parents('.thumbnail').data("id");
	var data = {id:id};
	var url = config_url+'Hospital_ctrl/delete_hospitalgallery';
	var result = post_ajax(url, data);
	if(result != 'error') {
		$(this).parents('.thumbnail').fadeOut();
	}
   }); 
 $('.view-customer').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'customer/view_single_customer';
	var result = post_ajax(url, data);
	$('#myModal .modal-body').html(result);
	reload_gallery();
});

$('.view-bookings').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'booking/view_booking_details';
	var result = post_ajax(url, data);
	$('#myModal .modal-body').html(result);
});

 $('.view-user').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'user/view_single_user';
	var result = post_ajax(url, data);
	$('#myModal .modal-body').html(result);
	reload_gallery();
	
});

 $('.view-trend').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'trend/view_single_trend';
	var result = post_ajax(url, data);
	$('#myModal .modal-body').html(result);
	reload_gallery();
});

$('.view-slider').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'settings/view_single_slider';
	var result = post_ajax(url, data);
	$('#myModal .modal-body').html(result);
	reload_gallery();
});

$('.view-whats-new').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'settings/view_whats_new';
	var result = post_ajax(url, data);
	$('#myModal .modal-body').html(result);
	reload_gallery();
});

$('.view-ad').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'ad/view_single_ad';
	var result = post_ajax(url, data);
	$('#myModal .modal-body').html(result);
	reload_gallery();
});

$('.view-offers').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'offers/view_single_offers';
	var result = post_ajax(url, data);
	$('#myModal .modal-body').html(result);
	reload_gallery();
});

$('.view-testimonials').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#myModal .modal-body').html(loader);
	$('#myModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'testimonials/view_single_testimonials';
	var result = post_ajax(url, data);
	$('#myModal .modal-body').html(result);
	reload_gallery();
});
	
//popup view for Hospital Appoinment Details page by Reshma	
$('.show-hospitalappoinmentdetails').on("click", function() {
	
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#popup-appoinmentModal .modal-appoinmentbody').html(loader);
	$('#popup-appoinmentModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'HospitalAppoinment_ctrl/appoinment_viewpopup';
	var result = post_ajax(url, data);
	$('#popup-appoinmentModal .modal-appoinmentbody').html(result);	
});		
	//Popup view for Clinic Appoinment Details page by Reshma
$('.show-clinicappoinment').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#popup-appoinmentModal .modal-appoinmentbody').html(loader);
	$('#popup-appoinmentModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'ClinicAppoinment_ctrl/appoinment_viewpopup';
	var result = post_ajax(url, data);
	$('#popup-appoinmentModal .modal-appoinmentbody').html(result);
});	
//		Popup view for Medical Center Appoinment Details page by Reshma
$('.show-medicalappoinment').on("click", function() {
	var loader = '<p class="text-center"><img src="'+config_url+'/assets/images/ajax-loader-4.gif" /></p>';
	$('#popup-appoinmentModal .modal-appoinmentbody').html(loader);
	$('#popup-appoinmentModal').modal({show:true});
	var id = $(this).data('id');
	var data = {id:id};
	var url = config_url+'MedicalAppoinment_ctrl/appoinment_viewpopup';
	var result = post_ajax(url, data);
	$('#popup-appoinmentModal .modal-appoinmentbody').html(result);
});				
});

function post_ajax(url, data) {
	var result = '';
	$.ajax({
        type: "POST",
        url: url,
		data: data,
		success: function(response) {
			result = response;
		},
		error: function(response) {
			result = 'error';
		},
		async: false
		});
		
		return result;
}

function reload_gallery() {
	$('.thumbnail a').colorbox({
        rel: 'thumbnail a',
        transition: "elastic",
        maxWidth: "95%",
        maxHeight: "95%",
        slideshow: true
    });
	
}

function remove_shop_service() {
	$('.remove_services').on("click", function() {
		var id = $(this).data("id");
		var data = {id:id};
		var url = config_url+'shop/remove_shop_service';
		var result = post_ajax(url, data);
		if(result != 'Error') {
			$(this).parents('.row').first().remove();
		}
	});
}

$('#profile_pic').on("change", function() {
	readURL(this);
});


$('#profileimg-form').change(function() {
	$('form#profilepic-form-img').submit();
});
    
   function selectStatedoctor(country_id){
	if(country_id!="-1"){
		loadDatadoctor('state',country_id);
		$("#city_dropdown").html("<option value='-1'>Select city</option>");	
	}else{
		$("#state_dropdown").html("<option value='-1'>Select state</option>");
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}

function selectCitydoctor(state_id){
	if(state_id!="-1"){
		loadDatadoctor('city',state_id);
	}else{
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}

function loadDatadoctor(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$.ajax({
		type: "POST",
		  url: base_url+"Doctor_Ctrl/loadData",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");  
			$("#"+loadType+"_dropdown").append(result);  
		},
		error: function() {
			alert("error");
		}
	});
}
   //select sub hospital
   $(document).ready(function(){
	  $("#hos1edit").show();
	   $("#hos").hide();
		$( ".subhos" ).click(function() {
		 $("#hos").show();
		       })
		$( "#indivi" ).click(function() {
		 $("#hos").hide();
	   })
	  $("#hos1").hide();
		$( "#indiv" ).click(function() {
		 $("#hos1").hide();
		  $("#hos1edit").hide();
	   })
		$( "#hosp" ).click(function() {
		 $("#hos1").show();
	   })
});



//sub doctor

$(document).ready(function(){
	
	
		  $("#clinic").hide();
		  $("#hospital").hide();
		  $("#medical").hide();
		  
		$( ".indiv" ).click(function() {
		//alert("hi");
		  $("#clinic").hide();
		  $("#hospital").hide();
		  $("#medical").hide();
		   $("#clinicedit").hide();
		    $("#hospitaledit").hide();
			 $("#medicaledit").hide();
		 
	   })
	   //clinic
	   $( ".cli" ).click(function() {
		//alert("clinic");
		$("#clinic").show();
		 $("#medical").hide();
		  $("#hospital").hide();
		 $("#clinicedit").hide();
		    $("#hospitaledit").hide();
			 $("#medicaledit").hide();
	   })
	   //hospital
	    $( ".hospit" ).click(function() {
		//alert("hospital");
		$("#hospital").show();
		 $("#clinic").hide();
		  $("#medical").hide();
		  $("#clinicedit").hide();
		    $("#hospitaledit").hide();
			 $("#medicaledit").hide();
	   })
	   //medical center
	    $( ".medi" ).click(function() {
		//alert("medical");
		$("#medical").show();
		 $("#clinic").hide();
		  $("#hospital").hide();
		  $("#clinicedit").hide();
		    $("#hospitaledit").hide();
			 $("#medicaledit").hide();
		 
	   })
	   
	 
});
		$('.abc').attr('readonly','readonly');	
 $('.check_work_day').click(function(){
	var target = $(this).parent().parent();
	if($(this).prop("checked")==true){
		$(this).parent().parent().find('input[type=text]').removeAttr('readonly');
		$(this).parent().parent().find('input[type=text]').attr('required','required');
	}else{
		$(this).parent().parent().find('input[type=text]').attr('readonly','readonly');
		$(this).parent().parent().find('input[type=text]').removeAttr('required');
	}
});  
   
$('.check_break_day').click(function(){
	
	var target = $(this).parent().parent();
	
	if($(this).prop("checked")==true){
		$(this).parent().parent().find('input[type=text]').removeAttr('disabled');
		$(this).parent().parent().find('input[type=text]').attr('required','required');
	}else{
		$(this).parent().parent().find('input[type=text]').attr('disabled','disabled');
		$(this).parent().parent().find('input[type=text]').removeAttr('required');
	}
});

$(document).on('click','.clone_break',function(){
	var target = $(this).parent().parent().parent();
	var start_date = $(target).find('.start').val();
	var end_date = $(target).find('.end').val();
	if(start_date=='' || end_date=="" ){
		alert('Sorry you can\'t append new row.Because empty field exist');
	}else{
		var html = $(target).clone();
		$(target).after(html);
		var target_class = $(this).attr('target');
		$(target_class).last().find('input[type=text]').val('');
	}
});

$(document).on('click','.remove_break',function(){
	var primary_target = $(this).parent().parent().parent().parent();
	var target_filed = $(this).attr('target');
	var target_length = primary_target.find(target_filed).length;
	var target = $(this).parent().parent().parent();
	if(target_length > 1){
		$(target).remove();
	}else{
		alert('Sorry You Can\'t Remove This Row. ');
	}
});

$(document).on('click','.remove_vacation',function(){
	 
	 var target = $(this).parent().parent().parent().parent();
	 $(target).remove();
	  
});

$(document).on('click','.save_vacation',function(){
	$('#save_vacation').click();
});

$(document).on('click','.clone_vacation',function(){
	var target = $(this).parent().parent().parent().parent();
	var start_date = $(target).find('.start_date').val();
	var end_date = $(target).find('.end_date').val();
	var start_time = $(target).find('.start_time').val();
	var end_time = $(target).find('.end_time').val();
	if(start_date=='' || end_date=="" || start_time=='' || end_time==''){
		alert('Sorry you can\'t append new row.Because empty field exist');
	}else{
		var html = $(target).clone();
		$(target).parent().append(html);
		$('.dpd1').datepicker();
		$('.vacation_group').last().find('input[type=text]').val('');
	}
});
 
function initBreakLeveldoctor(id){
	$.ajax({
		url : 'Doctor_Ctrl/get_doctors/'+id,
		method : 'get',
		success : function(res){
			var res = JSON.parse(res);
			if(typeof res.mon!='undefined'){
				$('.mon_break').timepicker({
				    'minTime': res.mon.start,
				    'maxTime': res.mon.end,
				    'showDuration': true
				});
			}
			if(typeof res.tue!='undefined'){
				$('.tue_break').timepicker({
				    'minTime': res.tue.start,
				    'maxTime': res.tue.end,
				    'showDuration': true
				});
			}
			if(typeof res.wed!='undefined'){
				$('.wed_break').timepicker({
				    'minTime': res.wed.start,
				    'maxTime': res.wed.end,
				    'showDuration': true
				});
			}
			if(typeof res.thu!='undefined'){
				$('.thu_break').timepicker({
				    'minTime': res.thu.start,
				    'maxTime': res.thu.end,
				    'showDuration': true
				});
			}
			if(typeof res.fri!='undefined'){
				$('.fri_break').timepicker({
				    'minTime': res.fri.start,
				    'maxTime': res.fri.end,
				    'showDuration': true
				});
			}
			if(typeof res.sat!='undefined'){
				$('.sat_break').timepicker({
				    'minTime': res.sat.start,
				    'maxTime': res.sat.end,
				    'showDuration': true
				});
			}
			if(typeof res.sun!='undefined'){
				$('.sun_break').timepicker({
				    'minTime': res.sun.start,
				    'maxTime': res.sun.end,
				    'showDuration': true
				});
			}
			//console.log(res);
		}
	});
}

var autocomplete = {};
		var autocompletesWraps = ['test2'];
		var test2_form = { street_number: 'short_name', route: 'long_name', locality: 'long_name', administrative_area_level_1: 'long_name', 
		                   country: 'long_name', postal_code: 'short_name',latitude: 'long_name' };
		function initialize() {
			$.each(autocompletesWraps, function(index, name) {
				if($('#'+name).length == 0) {
					return;
				}
				autocomplete[name] = new google.maps.places.Autocomplete($('#'+name+' .autocomplete')[0], { types: ['geocode'] });	
				google.maps.event.addListener(autocomplete[name], 'place_changed', function() {
					
					var place = autocomplete[name].getPlace();
					document.getElementById('lat').value = place.geometry.location.lat();
					document.getElementById('lon').value = place.geometry.location.lng();

					var form = eval(name+'_form');

					for (var component in form) {
						$('#'+name+' .'+component).val('');
						$('#'+name+' .'+component).attr('disabled', false);
					}
					for (var i = 0; i < place.address_components.length; i++) {
						var addressType = place.address_components[i].types[0];
						if (typeof form[addressType] !== 'undefined') {
						  var val = place.address_components[i][form[addressType]];
						  $('#'+name+' .'+addressType).val(val);
						}
					}
				});
			});
		}
  /**Add Home Lanaguage translation**/
  $(document).ready(function(){			   
	$("#useradd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#home_reg").serialize();			
		$.ajax({				
			url:base_url+"Home_Translation/insert_home",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/**Edit Home Lanaguage translation**/
$("#useradd1").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else { 
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {	
	var value =$("#home_edit").serialize();	
    $.ajax({				
		url:base_url+"Home_Translation/insert_home",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Search Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#searchadd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#search_reg").serialize();			
		$.ajax({				
			url:base_url+"Search_Translation/insert_search",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Search Lanaguage translation===*/
$("#searchedit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#search_edit").serialize();	
    $.ajax({				
		url:base_url+"Search_Translation/insert_search",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Login Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#loginadd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#login_reg").serialize();			
		$.ajax({				
			url:base_url+"Login_Translation/insert_login",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit login Lanaguage translation===*/
$("#loginedit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#login_edit").serialize();	
    $.ajax({				
		url:base_url+"Login_Translation/insert_login",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Doctor filter Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#doctorfilteradd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#doctorfilter_add").serialize();			
		$.ajax({				
			url:base_url+"Doctorfilter_Translation/insert_doctorfilter",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Doctor filter Lanaguage translation===*/
$("#doctorfilteredit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#doctorfilter_edit").serialize();	
    $.ajax({				
		url:base_url+"Doctorfilter_Translation/insert_doctorfilter",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Clinic filter Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#clinicfilteradd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#clinicfilter_add").serialize();			
		$.ajax({				
			url:base_url+"Clinicfilter_Translation/insert_clinicfilter",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Clinic filter Lanaguage translation===*/
$("#clinicfilteredit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#clinicfilter_edit").serialize();	
    $.ajax({				
		url:base_url+"Clinicfilter_Translation/insert_clinicfilter",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Medical filter Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#medicalfilteradd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#medicalfilter_add").serialize();			
		$.ajax({				
			url:base_url+"Medicalfilter_Translation/insert_medicalfilter",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Medical filter Lanaguage translation===*/
$("#medicalfilteredit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#medicalfilter_edit").serialize();	
    $.ajax({				
		url:base_url+"Medicalfilter_Translation/insert_medicalfilter",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Hospital filter Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#hospitalfilteradd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#hospitalfilter_add").serialize();			
		$.ajax({				
			url:base_url+"Hospitalfilter_Translation/insert_hospitalfilter",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Hospital filter Lanaguage translation===*/
$("#hospitalfilteredit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#hospitalfilter_edit").serialize();	
    $.ajax({				
		url:base_url+"Hospitalfilter_Translation/insert_hospitalfilter",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Doctorprofile filter Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#doctorprofileadd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#dosctorprofile_add").serialize();			
		$.ajax({				
			url:base_url+"Doctorprofile_Translation/insert_doctorprofile",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Doctorprofile  Lanaguage translation===*/
$("#doctorprofileedit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#doctorprofile_edit").serialize();	
    $.ajax({				
		url:base_url+"Doctorprofile_Translation/insert_doctorprofile",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Hospitalprofile filter Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#hospitalprofileadd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#hospitalprofile_add").serialize();			
		$.ajax({				
			url:base_url+"Hospitalprofile_Translation/insert_hospitalprofile",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Hospitalprofile  Lanaguage translation===*/
$("#hospitalprofileedit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#hospitalprofile_edit").serialize();	
    $.ajax({				
		url:base_url+"Hospitalprofile_Translation/insert_hospitalprofile",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Clinicprofile  Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#clinicprofileadd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#clinicprofile_add").serialize();			
		$.ajax({				
			url:base_url+"Clinicprofile_Translation/insert_clinicprofile",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Hospitalprofile  Lanaguage translation===*/
$("#clinicprofileedit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#clinicprofile_edit").serialize();	
    $.ajax({				
		url:base_url+"Clinicprofile_Translation/insert_clinicprofile",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Medical profile  Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#medicalprofileadd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#medicalprofile_add").serialize();			
		$.ajax({				
			url:base_url+"Medicalprofile_Translation/insert_medicalprofile",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Medical profile  Lanaguage translation===*/
$("#medicalprofileedit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#medicalprofile_edit").serialize();	
    $.ajax({				
		url:base_url+"Medicalprofile_Translation/insert_medicalprofile",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Patient  Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#patientadd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#patient_add").serialize();			
		$.ajax({				
			url:base_url+"Patient_Translation/insert_patient",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Patient  Lanaguage translation===*/
$("#patientedit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#patient_edit").serialize();	
    $.ajax({				
		url:base_url+"Patient_Translation/insert_patient",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Patient  Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#doctoradd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#doctor_add").serialize();			
		$.ajax({				
			url:base_url+"Doctor_Translation/insert_doctor",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Patient  Lanaguage translation===*/
$("#doctoredit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#patient_edit").serialize();	
    $.ajax({				
		url:base_url+"Doctor_Translation/insert_doctor",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add Hospital  Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#hospitaladd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#doctor_add").serialize();			
		$.ajax({				
			url:base_url+"Hospital_Translation/insert_hospital",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Hospital  Lanaguage translation===*/
$("#hospitaledit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#hospital_edit").serialize();	
    $.ajax({				
		url:base_url+"Hospital_Translation/insert_hospital",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add About  Lanaguage translation ===*/
  $(document).ready(function(){		   
	$("#aboutadd").click(function(e){alert("hi");	
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#about_add").serialize();			
		$.ajax({				
			url:base_url+"About_Translation/insert_about",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit About  Lanaguage translation===*/
$("#aboutedit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#about_edit").serialize();	
    $.ajax({				
		url:base_url+"About_Translation/insert_about",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
  /*=== Add About  Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#termsadd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#terms_add").serialize();			
		$.ajax({				
			url:base_url+"Terms_Translation/insert_terms",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit About  Lanaguage translation===*/
$("#termsedit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#terms_edit").serialize();	
    $.ajax({				
		url:base_url+"Terms_Translation/insert_terms",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});
/*=== Add Booking  Lanaguage translation ===*/
  $(document).ready(function(){			   
	$("#bookingadd").click(function(e){
		var data = {};
		  var isValid = true;
		$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
        $('input[type="text"]').each(function() {           
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
			$(this).css({
				"border": "",
				"background": ""
			});
			
			var name = $(this).attr('name');			
			data[name] = $(this).val(); 
			}
        });
		var data_new ={};
		$("textarea").each(function(){
			var name = $(this).attr('name');
			data[name] = $(this).val();
		});
		
		$data = JSON.stringify(data);
		if (isValid == false) {
            e.preventDefault();
		 }
        else {		
		var value =$("#booking_add").serialize();			
		$.ajax({				
			url:base_url+"Booking_Translation/insert_booking",
			type: 'post',
			dataType: 'json',
			data:JSON.stringify(data),
			success:function(res){
				$(".edituser").show();
				console.log(res);
				if(res==0){
					$(".edituser").focus();
					$(".edituser").html('<p class="error">Error</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
				else if(res==1){
					$(".edituser").focus();
					$(".edituser").html('<p class="success"> Language Saved Successfully</p>');
				}
				else if(res==2){
					$(".edituser").focus();
					$(".edituser").html('<p class="error"> Updated Successfully</p>');
					setTimeout(function(){$(".edituser").hide(); }, 3000);
				}
			}
		});	  
		}		
	});
  
});
/*=== Edit Booking  Lanaguage translation===*/
$("#bookingedit").click(function(e){
	var id = $('#id').val();
	var data = {};
	  var isValid = true;
	$('input[type="hidden"]').each(function() {           
			$(this).css({
				"border": "",
				"background": ""
			});
			var name = $(this).attr('name');			
			data[name] = $(this).val();           
        });
    $('input[type="text"]').each(function() {           
		if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",   
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
	var name = $(this).attr('name');			
	data[name] = $(this).val();
			}	
    });
	$("textarea").each(function(){
			if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",  
                });
				$(this).focus();
				return false;
            }
            else {  /* valid */
		$(this).css({
			"border": "",
			"background": ""
		});
			var name = $(this).attr('name');
			data[name] = $(this).val();
			}
		});
  	var data_new ={};	
	data['id'] = id;
	$data = JSON.stringify(data);
		/* change work */
		if (isValid == false) {
            e.preventDefault();
		 }
        else {
		/* change work */	
	var value =$("#booking_edit").serialize();	
    $.ajax({				
		url:base_url+"Booking_Translation/insert_booking",
		type: 'post',
		dataType: 'json',
		data:JSON.stringify(data),
		success:function(res){
			$(".edituser").show();
			console.log(res);
			if(res==0){
				$(".edituser").focus();
				$(".edituser").html('<p class="error">Error</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);	
			}
			else if(res==2){
				$(".edituser").focus();
				$(".edituser").html('<p class="error"> Updated Successfully</p>');
				setTimeout(function(){$(".edituser").hide(); }, 3000);
			}
		}
	});	
}
});