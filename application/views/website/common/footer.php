<?php
	$array_config = $this->Config_model->init();
?>

<div id="notice">
	<div class="padding">
		<div class="left">
			<div class="cnt">
				<span class="text"><?php echo $array_config['footer-info']['config_content_clean']; ?><br /></span>
			</div>
		</div>
		<div class="right">
			<div class="cnt">
				<img src="<?php echo base_url(); ?>static/image/logo bank desain web.png" alt="logo bank desain website" title="logo bank desain website" />
			</div>
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="top hide"><a href="#header" ><img src="static/image/back-top.png"></a></div>
</div>

<div id="footer">
	<img class="logo" src="<?php echo base_url(); ?>static/image/logo desain website.png" alt="logo desain website" title="logo desain website" />
	<?php echo $array_config['footer-address']['config_content']; ?>
</div>