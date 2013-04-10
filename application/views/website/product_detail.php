<?php
	preg_match('/product\/([a-z0-9\_]+)/i', $_SERVER['REQUEST_URI'], $match);
	$product_name = (empty($match[1])) ? '' : $match[1];
	$product = $this->Product_model->get_by_id(array('product_name' => $product_name));
	
	$product_detail_param = array(
		'product_id' => $product['product_id'],
		'filter' => '[{"type":"numeric","comparison":"eq","value":"1","field":"is_show"}]'
	);
	$product_detail = $this->Product_Detail_model->get_array($product_detail_param);
	if (count($product) == 0) {
		show_404();
		exit;
	}
?>

<?php $this->load->view( 'website/common/meta.php', array('title' => 'Produk - '.$product['product_title']) ); ?>
<body>
<div class="template">
	<?php $this->load->view( 'website/common/template_fix.php'); ?>
	
	<div class="fix-width">
		<?php $this->load->view( 'website/common/header.php'); ?>
		
		<div class="pom">
			<div class="pom-left">
				<?php $this->load->view( 'website/common/cnt_left.php'); ?>
			</div>
			
			<div class="pom-right">
				<div class="roundedbox">
					<h1 class="poounder">Product Detail - <?php echo $product['product_title']; ?></h1>
					<div id="product_list">
						<div class="noborder">
							<div class="productItem <?php echo $product['product_category_name']; ?>">
								<div class="thumb">
									<a href="<?php echo $product['product_link']; ?>" title="<?php echo $product['product_title']; ?>">
										<img src="<?php echo $product['product_image_link']; ?>" ></a>
								</div>
								<div class="desc">
									<div class="title"><a href="<?php echo $product['product_link']; ?>"><?php echo $product['product_title']; ?></a></div>
									<div class="brief"><?php echo $product['product_desc']; ?></div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php $show_tab = 0; ?>
				<?php foreach ($product_detail as $detail) { ?>
					<?php if ($detail['display_type_name'] == 'top') { ?>
						<div class="roundedbox">
							<h1 class="poounder"><?php echo $detail['product_detail_title']; ?></h1>
							<?php echo $detail['product_detail_desc']; ?>
							<div class="clear"></div>
						</div>
					<?php } else { ?>
						<?php $show_tab = 1; ?>
					<?php } ?>
				<?php } ?>
				
				<?php if ($show_tab == 1) { ?>
					<div class="roundedbox">
						<div id="pricescont">
							<ul id="pricestab">
								<?php $counter = 0; ?>
								<?php foreach ($product_detail as $detail) { ?>
									<?php if ($detail['display_type_name'] == 'tab') { ?>
										<?php $select = ($counter == 0) ? 'selected' : ''; ?>
										<li><a class="<?php echo $select; ?>" style="cursor: pointer;" rel="tap_<?php echo $counter; ?>"><?php echo $detail['product_detail_title']; ?></a></li>
										<?php $counter++; ?>
									<?php } ?>
								<?php } ?>
							</ul>
							<div class="clear"></div>
						</div>
						
						<div id="priceinfo">
							<?php $counter = 0; ?>
							<?php foreach ($product_detail as $detail) { ?>
								<?php if ($detail['display_type_name'] == 'tab') { ?>
									<?php $display = ($counter == 0) ? '' : 'hide'; ?>
									<div class="tabcontent2 <?php echo $display; ?>" id="tap_<?php echo $counter; ?>">
										<?php echo $detail['product_detail_desc']; ?>
										<div class="clear"></div>
									</div>
									<?php $counter++; ?>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="clear"></div>
						<div class="poounderpad"></div>
						
						<div id="extras">
							<?php foreach ($product_detail as $detail) { ?>
								<?php if ($detail['display_type_name'] == 'column') { ?>
									<div class="extras">
										<h3><?php echo $detail['product_detail_title']; ?></h3>
										<?php echo $detail['product_detail_desc']; ?>
									</div>
								<?php } ?>
							<?php } ?>
							<div class="clear"></div>
							
							<?php foreach ($product_detail as $detail) { ?>
								<?php if ($detail['display_type_name'] == 'bottom') { ?>
									<h1 class="poounder"><?php echo $detail['product_detail_title']; ?></h1>
									<?php echo $detail['product_detail_desc']; ?>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</div>
		
		<?php $this->load->view( 'website/common/footer.php'); ?>
	</div>
</div>
</body>
</html>