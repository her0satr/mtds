<?php
	$array_config = $this->Config_model->init();
	$array_product = $this->Product_model->get_array(array('limit' => 1));
	$array_portofolio = $this->Portofolio_model->get_array(array('start' => 4, 'limit' => 8));
	
	$param_testimony = array( 'filter' => '[{"type":"numeric","comparison":"eq","value":"Testimony","field":"config_category"}]' );
	$array_testimony = $this->Config_model->get_array($param_testimony);
	
	$param_fitur = array( 'filter' => '[{"type":"numeric","comparison":"eq","value":"Fitur Standart","field":"config_category"}]' );
	$array_fitur = $this->Config_model->get_array($param_fitur);
?>

<?php $this->load->view( 'website/common/meta.php', array('title' => 'Home') ); ?>
<body>
<div class="template">
	<?php $this->load->view( 'website/common/template_fix.php') ; ?>
	
	<div class="fix-width">
		<?php $this->load->view( 'website/common/header.php') ; ?>
		
		<div class="pom">
			<div class="pom-left">
				<?php $this->load->view( 'website/common/cnt_left.php') ; ?>
			</div>
			
			<div class="pom-right">
				<div id="headerslide">
					<div id="vertical-slide">
						<ol>
							<li>
								<h2 id="slidepink"><span>Bespoke Web Design</span></h2>
								<div><a href="#"><img src="static/upload/website-design-services.jpg" width="506" height="298" alt="Website Designs from only 95 - Free No Obligation Quotation" /></a></div>
							</li>
							<li>
								<h2 id="slideblue"><span>View Our Portfolio</span></h2>
								<div><a href="#"><img src="static/upload/website-design-portfolio.jpg" width="506" height="298" alt="Website Design Portfolio" title="Website Design Portfolio" /></a></div>
							</li>
							<li>
								<h2 id="slidegrey"><span>Instant Quote Generator</span></h2>
								<div><a href="#"><img src="static/upload/web-quote-gen.jpg" width="506" height="298" alt="Web design quotation genertaor" title="Web design quotation generator" /></a></div>
							</li>
							<li>
								<h2 id="slideorange"><span>FREE Content Management</span></h2>
								<div><a href="#"><img src="static/upload/free-content-management-system.jpg" width="506" height="298" alt="FREE content management with every web design" /></a></div>
							</li>
							<li>
								<h2 id="slidegreen"><span>Price Match Guarantee</span></h2>
								<div><a href="#"><img src="static/upload/website-quote-price-match.jpg" width="506" height="298" alt="Website Design Price Match Guarantee" /></a></div>
							</li>                                                
						</ol>
					</div>
				</div>
				<div class="clear"></div>
				
				<div class="template-left">
					<div class="roundedbox">
						<div class="box_skitter">
							<ul>
								<li><img src="static/upload/jasa pembuatan website.jpg" class="random" /></li>
								<li><img src="static/upload/jasa pembuatan website murah.jpg" class="random"  alt="Jasa Pembuatan Website Murah" title="Jasa Pembuatan Website Murah" /></li>
								<li><img src="static/upload/jasa pembuatan website murah profesional.jpg" class="random"  alt="Jasa Pembuatan Website Murah Profesional" title="Jasa Pembuatan Website Murah Profesional" /></li>
							</ul>
						</div>
					</div>
					
					<div class="roundedbox">
						<div id="iconScreen"><h2>Web Design</h2> <span class="bluesixteen">Showcase</span></div>
						<ul id="showcase">
							<?php for ($i = 0; $i < 8; $i++) { ?>
								<li>
									<div class="showcaseitem"><img src="<?php echo $array_portofolio[$i]['portofolio_image_link']; ?>" width="225" height="192" alt="<?php echo $array_portofolio[$i]['portofolio_title']; ?>" title="<?php echo $array_portofolio[$i]['portofolio_title']; ?>" /></div>
									<div class="showcaseitem"><img src="<?php echo $array_portofolio[++$i]['portofolio_image_link']; ?>" width="225" height="192" alt="<?php echo $array_portofolio[$i]['portofolio_image_link']; ?>" title="<?php echo $array_portofolio[$i]['portofolio_title']; ?>" /></div>
									<div class="clear"></div>
								</li>
							<?php } ?>
						</ul>
						<div class="clear"></div>
						<div class="button2 fr space-left"><a href="<?php echo base_url('contact'); ?>">Penawaran</a></div>
						<div class="button fr"><a href="<?php echo base_url('portofolio'); ?>">Portofolio</a></div>        
						<div class="clear"></div>
					</div>
					
					<div class="roundedbox">
						<?php echo $array_config['home-webdesain']['config_content']; ?>
						<div class="clear"></div>
					</div>
					
					<div class="roundedbox">
						<div class="poounder">Ingin mengetahui tentang produk unggulan kami ?</div>
						<div id="product_list">
							<div class="noborder">
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
								<div class="pagination">
									<a href="<?php echo base_url('product'); ?>">More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="template-right">
					<div class="roundedbox">
						<h3 class="blueback">Fitur Standard</h3>
						<div class="standardlist">
							<?php foreach ($array_fitur as $key => $array) { ?>
								<?php $array_class = explode(' ', $array['config_name'], 2); ?>
								<a class="cursor <?php echo $array_class[1]; ?>" title="<?php echo $array['config_content_clean']; ?>"><?php echo $array['config_title']; ?></a>
							<?php } ?>
							<div class="clear"></div> 
						</div>           
					</div>
					
					<div class="roundedbox">
						<h3 class="blueback">Testimonial</h3>
						<div class="testimonaials">
							<ul id="testimonials">
								<?php foreach ($array_testimony as $testimony) { ?>
									<li><?php echo $testimony['config_content']; ?></li> 
								<?php } ?>
							</ul>             
						</div>
						<!-- <div class="button fl"><a href="#">read more</a></div> -->
						<div class="clear"></div>
					</div>
					
					<div class="roundedbox">
						<p><span class="dbluesixteen">Content Management</span> <span class="orangesixteen">Gratis</span></p>
						<div class="f-11"><img src="<?php echo base_url(); ?>static/image/free-content-management.png" align="right" /><?php echo $array_config['config-content-management']['config_content_clean']; ?></div>
						<div class="button2 fr space-top"><a href="<?php echo base_url('contact'); ?>">Penawaran</a></div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		
		<?php $this->load->view( 'website/common/footer.php') ; ?>
	</div>
</div>
</body>
</html>