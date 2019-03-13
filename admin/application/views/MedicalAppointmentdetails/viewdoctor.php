
 
 <label>Doctor Name</label>
  <select class="form-control select2 js-example-basic-multiple" style="width: 100%;" name="doctor_id" id="doctor_firstname">
							
								  				<?php foreach ($datasingle as $single) {?>						  
									  <option value="<?php echo $single->id;?>"><?php echo $single->doctor_firstname;?></option>	
												<?php }
												?>
									  
								  
								   
                            </select>
					       
