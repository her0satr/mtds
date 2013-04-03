<?php
	$array_product = $this->Product_model->get_array();
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	<div id="rightContent">
		<h3>Product</h3>
		
		<a href="<?php echo base_url('panel/product/edit/0'); ?>" class="button">Tambah Product</a>
		<table class="data"><tbody>
			<tr class="data">
				<th class="data">Title</th>
				<th class="data">Desc</th>
				<th class="data" style="width: 70px;">Date</th>
				<th class="data" style="width: 50px;">Aksi</th></tr>
			<?php foreach ($array_product as $product) { ?>
				<tr class="data">
					<td class="data"><?php echo $product['product_title']; ?></td>		
					<td class="data"><?php echo GetLengthChar(strip_tags($product['product_desc']), 300, ' ...'); ?></td>		
					<td class="data center"><?php echo $product['product_date']; ?></td>
					<td class="data center">
						<?php unset($product['product_desc']); ?>
						<span class="hide"><?php echo json_encode($product); ?></span>
						<a href="<?php echo base_url('panel/product/edit/'.$product['product_id']); ?>"><img title="edit data" src="<?php echo base_url(); ?>static/image/edit.png"></a> |
						<a class="cursor"><img title="hapus data" src="<?php echo base_url(); ?>static/image/delete.png" class="product_delete"></a></td>
					</tr>
			<?php } ?>
		</tbody></table>
		<div class="red message pad"><?php echo flashmsg_get(); ?></div>
		<script type="text/javascript">
			$('.product_delete').click(function() {
				var raw = $(this).parent('a').parent('td').find('span').text();
				eval('var record = ' + raw);
				
				$('#rightContent .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/product/action', param: { action: 'Delete', product_id: record.product_id }, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/product';
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