<?php
	$settings = get_icon();
	$lang_id = $settings->languages;
	$get_langs = get_trans_language($lang_id);
	$textFile = $get_langs->languages;
	$extension = ".php";       
	include 'admin/includes/'.$textFile.$extension;
?>
<!DOCTYPE html>
	<html>
		<?php $this->load->view('Templates/header-script');?>
		<body class="hold-transition <?php echo $this->config->item("theme_color"); ?> sidebar-mini">
			<div class="wrapper">
				<?php 	$this->load->view('Templates/home_header-menu');
						$this->load->view('Searchbar');
						$this->load->view($page);
						$this->load->view('Templates/footer');   ?>    
			</div>
				<?php $this->load->view('Templates/footer-script'); ?>
		</body>
	</html>
