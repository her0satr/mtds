<?php
	$array_product_detail = $this->Product_Detail_model->get_array(array('product_id' => $product_id));
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	<div id="rightContent">
		<h3>Product Detail</h3>
		<input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
		
		<a href="<?php echo base_url('panel/product_detail/edit/'.$product_id.'/0'); ?>" class="button">Tambah Product Detail</a>
		<table class="data"><tbody>
			<tr class="data">
				<th class="data">Display</th>
				<th class="data">Title</th>
				<th class="data">Desc</th>
				<th class="data" style="width: 50px;">Aksi</th></tr>
			<?php foreach ($array_product_detail as $product_detail) { ?>
				<tr class="data">
					<td class="data center"><?php echo $product_detail['display_type_name']; ?></td>
					<td class="data"><?php echo $product_detail['product_detail_title']; ?></td>		
					<td class="data"><?php echo GetLengthChar(strip_tags($product_detail['product_detail_desc']), 300, ' ...'); ?></td>		
					<td class="data center">
						<?php unset($product_detail['product_detail_desc']); ?>
						<span class="hide"><?php echo json_encode($product_detail); ?></span>
						<a href="<?php echo base_url('panel/product_detail/edit/'.$product_detail['product_id'].'/'.$product_detail['product_detail_id']); ?>"><img title="edit data" src="<?php echo base_url(); ?>static/image/edit.png"></a> |
						<a class="cursor"><img title="hapus data" src="<?php echo base_url(); ?>static/image/delete.png" class="product_detail_delete"></a></td>
					</tr>
			<?php } ?>
		</tbody></table>
		<div class="red message pad"><?php echo flashmsg_get(); ?></div>
		<script type="text/javascript">
			var product_id = $('input[name="product_id"]').val();
			$('.product_detail_delete').click(function() {
				var raw = $(this).parent('a').parent('td').find('span').text();
				eval('var record = ' + raw);
				
				$('#rightContent .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/product_detail/action', param: { action: 'Delete', product_detail_id: record.product_detail_id }, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/product_detail/index/' + product_id;
					} else {
						$('#rightContent .message').show().html(result.Message);
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