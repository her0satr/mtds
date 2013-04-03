<?php
	$portofolio = $this->Portofolio_model->get_by_id(array('portofolio_id' => $portofolio_id));
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	
	<div id="rightContent">
		<h3>Portofolio</h3>
		
		<input type="hidden" name="portofolio_id" value="<?php echo @$portofolio['portofolio_id']; ?>" />
		<table class="common" id="FormEntry"><tbody>
			<tr>
				<td width="70">Title</td>
				<td><input type="text" name="portofolio_title" value="<?php echo @$portofolio['portofolio_title']; ?>" /></td></tr>
			<tr>
				<td width="70">Desc</td>
				<td><textarea name="portofolio_desc" class="tinymce"><?php echo @$portofolio['portofolio_desc']; ?></textarea></td></tr>
			<tr>
				<td width="70">Link</td>
				<td><input type="text" name="portofolio_link" value="<?php echo @$portofolio['portofolio_link']; ?>" /></td></tr>
			<tr>
				<td width="70">Date</td>
				<td><input type="text" name="portofolio_date" value="<?php echo @$portofolio['portofolio_date']; ?>" class="datepicker" /></td></tr>
			<tr>
				<td width="70">Image</td>
				<td>
					<div class="upload_left"><input type="text" name="portofolio_image" value="<?php echo @$portofolio['portofolio_image']; ?>" class="image" /></div>
					<div class="upload_right"><iframe width="95px" height="25px" frameborder="0" src="<?php echo base_url('panel/upload?callback=image_callback'); ?>"></iframe></div>
					<div class="clear"></div>
				</td></tr>
			<tr>
				<td colspan="2">
					<input type="button" class="button" value="Update" name="FormUpdate" />
					<input type="button" class="button" value="Batal" name="FormReset" onclick="self.history.back()" /></td></tr>
			<tr><td colspan="2" class="hide red message">&nbsp;</td></tr>
		</tbody></table>
		
		<script type="text/javascript">
			Site.Form.Start('FormEntry');
			var image_callback = function(p) { $('input[name="portofolio_image"]').val(p.filename); }			
			
			$('input[name="FormUpdate"]').click(function() {
				var param = Site.Form.GetValue('rightContent');
				param.action = 'Update';
				delete param.FormUpdate;
				delete param.FormReset;
				
				$('#FormEntry .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/portofolio/action', param: param, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/portofolio';
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