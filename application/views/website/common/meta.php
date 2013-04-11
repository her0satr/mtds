<?php
	$array_config = $this->Config_model->init();
	
	if (empty($title_override)) {
		$title = (isset($title)) ? $array_config['meta-title']['config_content_clean'].' '.$title : $array_config['meta-title']['config_content_clean'];
	}
	
	$meta_keyword = (isset($meta_keyword) && !empty($meta_keyword)) ? $meta_keyword : $array_config['meta-keyword']['config_content_clean'];
	$meta_desc = (isset($meta_desc) && !empty($meta_desc)) ? $meta_desc : $array_config['meta-desc']['config_content_clean'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Keywords" content="<?php echo $meta_keyword; ?>">
	<meta name="Description" content="<?php echo $meta_desc; ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/jquery-ui-1.8.5.custom.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/widgetkit-fe4f0cde.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css" type="text/css" />
	<script type="text/javascript">var web = { host: '<?php echo base_url(); ?>' }</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-ui-1.8.5.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/widgetkit-d1b5525b.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.skitter.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.qtip.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.blackandwhite.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/liteaccordion.jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.scrollTo-1.3.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.serialScroll-1.2.1.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/coda-slider.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/tabcontent.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/common.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.public.js"></script>
</head>