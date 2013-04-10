<?php
	$array_product = $this->Product_model->get_array();
?>

<?php $this->load->view( 'website/common/meta.php', array('title' => 'Produk') ); ?>
<body>
<div class="template">
	<?php include 'common/template_fix.php'; ?>
	
	<div class="fix-width">
		<?php include 'common/header.php'; ?>
		
		<div class="pom">
			<div class="pom-left">
				<?php include 'common/cnt_left.php'; ?>
			</div>
			
			<div class="pom-right">
				<div class="roundedbox">
					<div class="poounder">Produk Jasa</div>
					<div id="product_list">
						<?php foreach ($array_product as $key => $product) { ?>
							<div class="productItem <?php echo $product['product_category_name']; ?>">
								<div class="thumb">
									<a href="<?php echo $product['product_link']; ?>" title="<?php echo $product['product_title']; ?>">
										<img src="<?php echo $product['product_image_link']; ?>" /></a>
								</div>
								<div class="desc">
									<div class="title">
										<a href="<?php echo $product['product_link']; ?>" title="<?php echo $product['product_title']; ?>">
											<?php echo $product['product_title']; ?></a></div>
									<div class="brief"><?php echo $product['product_desc_simple']; ?></div>
									<div class="buttons">
										<a href="<?php echo $product['product_link']; ?>"><input type="image" src="static/image/button-detail.gif" /></a>
										<a href="<?php echo base_url('contact'); ?>"><input type="image" src="static/image/button-buy.gif" /></a>
										<!-- <a href="<?php echo base_url('contact'); ?>"><input type="image" src="static/image/button-demo.gif" /></a> -->
									</div>
									<div class="clear"></div>
								</div>
							</div>
						<?php } ?>
						
						<!--
						<div class="pagination service">
							<a href="#" class="">1</a>
							<a href="#" class="selected">2</a>
							<a href="#" class="">3</a>
							<a href="#" class="bold">Next</a>
						</div>
						-->
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<?php include 'common/footer.php'; ?>
	</div>
</div>
</body>
</html>