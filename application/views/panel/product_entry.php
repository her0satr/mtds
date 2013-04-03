<?php
	$array_product_category = $this->Product_Category_model->get_array();
	$product = $this->Product_model->get_by_id(array('product_id' => $product_id));
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	
	<div id="rightContent">
		<h3>Product</h3>
		
		<input type="hidden" name="product_id" value="<?php echo @$product['product_id']; ?>" />
		<table class="common" id="FormEntry"><tbody>
			<tr>
				<td width="70">Title</td>
				<td><input type="text" name="product_title" value="<?php echo @$product['product_title']; ?>" /></td></tr>
			<tr>
				<td width="70">Category</td>
				<td><select name="product_category_id">
					<?php echo ShowOption(array('Array' => $array_product_category, 'ArrayID' => 'product_category_id', 'ArrayTitle' => 'product_category_name')) ?>
				</select></td></tr>
			<tr>
				<td width="70">Desc</td>
				<td><textarea name="product_desc" class="tinymce"><?php echo @$product['product_desc']; ?></textarea></td></tr>
			<tr>
				<td width="70">Date</td>
				<td><input type="text" name="product_date" value="<?php echo @$product['product_date']; ?>" class="datepicker" /></td></tr>
			<tr>
				<td width="70">Image</td>
				<td>
					<div class="upload_left"><input type="text" name="product_image" value="<?php echo @$product['product_image']; ?>" class="image" /></div>
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
			var image_callback = function(p) { $('input[name="product_image"]').val(p.filename); }			
			
			$('input[name="FormUpdate"]').click(function() {
				var param = Site.Form.GetValue('rightContent');
				param.action = 'Update';
				delete param.FormUpdate;
				delete param.FormReset;
				
				$('#FormEntry .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/product/action', param: param, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/product';
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