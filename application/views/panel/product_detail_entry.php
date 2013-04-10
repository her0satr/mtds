<?php
	$array_is_show = array( array( 'value' => '0', 'title' => 'Tidak'), array( 'value' => '1', 'title' => 'Ya') );
	$array_display_type = $this->Display_Type_model->get_array();
	$product_detail = $this->Product_Detail_model->get_by_id(array('product_detail_id' => $product_detail_id));
	$product_detail['product_id'] = (!empty($product_id)) ? $product_id : @$product_detail['product_id'];
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	
	<div id="rightContent">
		<h3>Product Detail</h3>
		
		<input type="hidden" name="product_detail_id" value="<?php echo @$product_detail['product_detail_id']; ?>" />
		<input type="hidden" name="product_id" value="<?php echo @$product_detail['product_id']; ?>" />
		<table class="common" id="FormEntry" style="width: 100%;"><tbody>
			<tr>
				<td width="70">Title</td>
				<td><input type="text" name="product_detail_title" value="<?php echo @$product_detail['product_detail_title']; ?>" /></td></tr>
			<tr>
				<td width="70">Order No</td>
				<td><input type="text" name="order_no" value="<?php echo @$product_detail['order_no']; ?>" /></td></tr>
			<tr>
				<td width="70">Ditampilkan</td>
				<td><select name="is_show">
					<?php echo ShowOption(array('Array' => $array_is_show, 'ArrayID' => 'value', 'ArrayTitle' => 'title', 'Selected' => @$product_detail['is_show'])) ?>
				</select></td></tr>
			<tr>
				<td width="70">Display</td>
				<td><select name="display_type_id">
					<?php echo ShowOption(array('Array' => $array_display_type, 'ArrayID' => 'display_type_id', 'ArrayTitle' => 'display_type_name', 'Selected' => @$product_detail['display_type_id'])) ?>
				</select></td></tr>
			<tr>
				<td width="70">Desc</td>
				<td><textarea name="product_detail_desc" class="tinymce" style="width: 100%; height: 400px;"><?php echo @$product_detail['product_detail_desc']; ?></textarea></td></tr>
			<tr>
				<td colspan="2">
					<input type="button" class="button" value="Update" name="FormUpdate" />
					<input type="button" class="button" value="Batal" name="FormReset" onclick="self.history.back()" /></td></tr>
			<tr><td colspan="2" class="hide red message">&nbsp;</td></tr>
		</tbody></table>
		
		<script type="text/javascript">
			var product_id = $('input[name="product_id"]').val();
			Site.Form.Start('FormEntry');
			
			$('input[name="FormUpdate"]').click(function() {
				var param = Site.Form.GetValue('rightContent');
				param.action = 'Update';
				delete param.FormUpdate;
				delete param.FormReset;
				
				$('#FormEntry .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/product_detail/action', param: param, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/product_detail/index/' + product_id;
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