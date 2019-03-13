<?php
$this->load->view('Templates/header-script');
?>
<div class="gc-payment">
<div class="success">
<img src="<?php echo base_url(); ?>assets/images/success.png">
</div>
<h1>Payment Successful</h1>
<p>Your payment has been successful,<br>
Thank you for your purchase</p>
<ul>
<li>Item number</li>
<li><?php echo $id; ?></li>
<div class="clearfix"></div>
</ul>
<ul>
<li>TXN ID</li>
<li><?php echo $txn_id; ?></li>
<div class="clearfix"></div>
</ul>
<ul>
<li>Amount Paid</li>
<li>$<?php echo $payment_gross.' '.$currency_code; ?></li>
<div class="clearfix"></div>
</ul>
<ul>
<li>Payment Status</li>
<li><?php echo $payment_status; ?></li>
<div class="clearfix"></div>
</ul>
<h3><a class="gc-update-btn2" style="width:100px;margin:0 auto;text-align:center;" href="<?php echo base_url(); ?>">Go Home</a></h3>
</div>