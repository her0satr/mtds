<?php
	$product = $this->Product_model->get_array();
?>

<div id="header"><img src="<?php echo base_url(); ?>static/image/header-logo.jpg" style="width: 100%;" /></div>

<div id="cssmenu">
	<ul>
		<li class="main active"><a href="<?php echo base_url(); ?>"><span class="home">Home</span></a></li>
		<li class="main"><a href="<?php echo base_url('product'); ?>"><span class="product">Produk Jasa</span></a></li>
		<li class="main"><a href="<?php echo base_url('about'); ?>"><span class="profile">About Us</span></a></li>
		<li class="main"><a href="<?php echo base_url('order'); ?>"><span class="payment">How to Order</span></a></li>
		<li class="main"><a href="<?php echo base_url('portofolio'); ?>"><span class="porto">Portofolio</span></a></li>
		<li class="main"><a href="<?php echo base_url('domain'); ?>"><span class="news">Domain</span></a></li>
		<li class="main"><a href="<?php echo base_url('contact'); ?>"><span class="mail">Hubungi Kami</span></a></li>
		
		<!--
		<li class="main has-sub">
			<a href="service"><span class="news">Service</span></a>
			<ul>
				<li class="has-sub"><a href="#"><span>Product 1</span></a>
					<ul>
					   <li><a href="#"><span>Sub Product</span></a></li>
					   <li class="last"><a href="#"><span>Sub Product</span></a></li>
					</ul>
				</li>
				<li class="has-sub"><a href="#"><span>Product 2</span></a>
					<ul>
					   <li><a href="#"><span>Sub Product</span></a></li>
					   <li class="last"><a href="#"><span>Sub Product</span></a></li>
					</ul>
				</li>
			</ul>
		</li>
		-->
	</ul>
</div>

<div id="menu">
	<div class="wk-slideset wk-slideset-revista" data-widgetkit="slideset" data-options='{"style":"revista","width":"auto","height":"auto","effect":"zoom","index":0,"autoplay":1,"interval":5000,"items_per_set":5,"navigation":0,"buttons":1,"title":0,"duration":300}'>
		<div>
			<div class="sets">
				<ul class="set">
					<?php for ($i = 0; $i < 5; $i++) { ?>
						<li>
							<article class="wk-content" title="<?php echo $product[$i]['product_title']; ?>">
								<a href="<?php echo $product[$i]['product_link']; ?>">
									<img src="<?php echo $product[$i]['product_image_link']; ?>" border="0" alt="<?php echo $product[$i]['product_title']; ?>" width="140" height="140" title="<?php echo $product[$i]['product_title']; ?>" />
								</a>
								<div class="title"><?php echo $product[$i]['product_title']; ?></div>
							</article>
						</li>
					<?php } ?>
				</ul>
				
				<ul class="set">
					<?php for ($i = 5; $i < 10; $i++) { ?>
						<li>
							<article class="wk-content" title="<?php echo $product[$i]['product_title']; ?>">
								<a href="<?php echo $product[$i]['product_link']; ?>">
									<img src="<?php echo $product[$i]['product_image_link']; ?>" border="0" alt="<?php echo $product[$i]['product_title']; ?>" width="140" height="140" title="<?php echo $product[$i]['product_title']; ?>" />
								</a>
								<div class="title"><?php echo $product[$i]['product_title']; ?></div>
							</article>
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="next"></div>
			<div class="prev"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
