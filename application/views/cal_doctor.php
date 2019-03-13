<div class="date-head">
					<div class="previouscalapp" id="<?php echo $doctor_detail->id; ?>" data-selected="true">
				<img id="previouscalapp" src="<?php echo base_url(); ?>assets/images/career/cal-left.png" />
				</div>
				<div class="dttime">
                        <ul>
						<div class="dttime-list">
                            <li> <h5><?php echo $date= date('D Y-m-d');?></h5>
                                
                            </li>
							</div>
						<div class="dttime-list">
                            <li> <h5><?php echo date('D Y-m-d', strtotime($date. ' + 1 days')) ?></h5>
                                
                            </li>
							</div>
						<div class="dttime-list">	
                            <li> <h5><?php echo date('D Y-m-d', strtotime($date. ' + 2 days')) ?></h5>
                                
                            </li>
							</div>
                        </ul>
						</div>
						<div class="nextcalapp " id="<?php echo $doctor_detail->id; ?>" data-selected="true">
					<img id="nextcalapp" src="<?php echo base_url(); ?>assets/images/career/cal-right.png" />
				</div>
                        <div class="clearfix"></div>
                    </div>
					
                    <div class="date-inner-mn">
					<div class="date-inner-mn-list">
                        
						</div>
						<div class="date-inner-mn-list">
                        
						</div>
						<div class="date-inner-mn-list">
                        <ul>
                            <li>9 : 00 am</li>
                            <li>9 : 00 am</li>
                            <li>Break</li>
                            <li>Break</li>
                            <li>Break</li>
                            <li>Break</li>
                            <li>Break</li>
                            <li>Break</li>
                            <li>Break</li>
                            <li>Break</li>

                        </ul>
							</div>
                    </div>