<?php
	$config_category = (isset($_GET['config_category'])) ? $_GET['config_category'] : '';
	$config_title = (empty($config_category)) ? 'Config' : $config_category;
	
	$config = $this->Config_model->get_by_id(array('config_id' => $config_id));
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	
	<div id="rightContent">
		<h3><?php echo $config_title; ?></h3>
		
		<input type="hidden" name="config_id" value="<?php echo @$config['config_id']; ?>" />
		<input type="hidden" name="config_category" value="<?php echo $config_category; ?>" />
		<table class="common" id="FormEntry"><tbody>
			<tr>
				<td>Name</td>
				<td><input type="text" name="config_name" value="<?php echo @$config['config_name']; ?>" /></td></tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="config_title" value="<?php echo @$config['config_title']; ?>" /></td></tr>
			<tr>
				<td>Content</td>
				<td><textarea name="config_content" class="tinymce"><?php echo @$config['config_content']; ?></textarea></td></tr>
			<tr>
				<td colspan="2">
					<input type="button" class="button" value="Update" name="FormUpdate" />
					<input type="button" class="button" value="Batal" name="FormReset" onclick="self.history.back()" /></td></tr>
			<tr><td colspan="2" class="hide red message">&nbsp;</td></tr>
		</tbody></table>
		
		<script type="text/javascript">
			Site.Form.Start('FormEntry');
			
			$('input[name="FormUpdate"]').click(function() {
				var param = Site.Form.GetValue('rightContent');
				param.action = 'Update';
				delete param.FormUpdate;
				delete param.FormReset;
				
				$('#FormEntry .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/config/action', param: param, callback: function(result) {
					if (result.QueryStatus == 1) {
						var config_category = $('input[name="config_category"]').val();
						var link = Site.Host + 'panel/config/?config_category=' + config_category;
						window.location = link;
					} else {
						$('#FormEntry .message').show().html(result.message);
					}
				} });
			});
		</script>
	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>

<?php $this->load->view( 'panel/common/footer' ); ?>

</body>
</html>