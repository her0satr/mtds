<?php
	$callback = (!empty($_GET['callback'])) ? $_GET['callback'] : 'callback';
	$FileUpload = Upload('document', $this->config->item('base_path') . '/static/upload');
	
	$filename = '';
	if ($FileUpload['Result'] == 1) {
		$filename = $FileUpload['FileDirName'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<style>
		body, form { margin: 0px; padding: 0px; overflow: hidden; }
		.line { text-align: center; padding: 5px 0; }
		.hide { display: none; }
	</style>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.1.7.2.min.js"></script>
	<script type="text/javascript">var callback = window.parent.<?php echo $callback; ?></script>
</head>
<body>
	<input type="hidden" name="Callback" value="<?php echo (strlen($filename) == 0) ? 0 : 1; ?>">
	<input type="hidden" name="FileName" value="<?php echo $filename; ?>">
	
	<form method="post" enctype="multipart/form-data">
		<div><input type="button" name="browse" value="Select File" /></div>
		<div class="hide">
			<div class="line"><input type="file" name="document" size="15" /></div>
			<div class="line"><input type="submit" name="Submit" value="Ganti Foto" /></div>
		</div>
	</form>
	<script type="text/javascript">
		jQuery('input[name="browse"]').click(function() { jQuery('input[name="document"]').click(); });
		jQuery('input[name="document"]').change(function() { jQuery('input[name="Submit"]').click(); });
		
		if (jQuery('input[name="Callback"]').val() == 1) {
			if (callback != null) {
				callback({ filename: jQuery('input[name="FileName"]').val() });
			}
		}
	</script>
</body>
</html>