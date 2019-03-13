<?php $date= date('D Y-m-d'); ?>
<div class="evt-br-doc" id="evt-br-doc_<?php echo $id; ?>">
	<div class="date-head">
		<div class="previouscalapp" id="<?php echo $id; ?>" data-date="<?php echo $date;?>" data-selected="true" data-div="evt-br-doc_<?php echo $id; ?>">
			<img id="previouscalapp" src="<?php echo base_url(); ?>assets/images/career/cal-left.png" />
		</div>
		<div class="dttime">
			<ul>
				<div class="dttime-list">
					<li> <h5><?php echo $date;?></h5></li>
				</div>
				<div class="dttime-list">
					<li> <h5><?php echo date('D Y-m-d', strtotime($date. ' + 1 days')) ?></h5> </li>
				</div>
				<div class="dttime-list">	
					<li> <h5><?php echo date('D Y-m-d', strtotime($date. ' + 2 days')) ?></h5> </li>
				</div>
			</ul>
		</div>
		<div class="nextcalapp" id="<?php echo $id; ?>" data-selected="true"  data-date="<?php echo $date;?>" data-div="evt-br-doc_<?php echo $id; ?>" >
			<img id="nextcalapp" src="<?php echo base_url(); ?>assets/images/career/cal-right.png" />
		</div>
		<div class="clearfix"></div>
	</div>
	<?php $date= date('Y-m-d'); $Day = date('D'); $s = base_url(); foreach ($result as $key => $value) { 
			echo calendar_html($value,3,$Day,$date,$s,$key);
			} ?>				
</div>