<?php
	$news = $this->News_model->get_by_id(array('news_id' => $news_id));
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	
	<div id="rightContent">
		<h3>News</h3>
		
		<input type="hidden" name="news_id" value="<?php echo @$news['news_id']; ?>" />
		<table class="common" id="FormEntry"><tbody>
			<tr>
				<td width="70">Title</td>
				<td><input type="text" name="news_title" value="<?php echo @$news['news_title']; ?>" /></td></tr>
			<tr>
				<td width="70">Desc</td>
				<td><textarea name="news_desc" class="tinymce"><?php echo @$news['news_desc']; ?></textarea></td></tr>
			<tr>
				<td width="70">Date</td>
				<td><input type="text" name="news_date" value="<?php echo @$news['news_date']; ?>" class="datepicker" /></td></tr>
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
				Site.ajax({ url: Site.Host + 'panel/news/action', param: param, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/news';
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