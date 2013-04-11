<?php
	$array_news = $this->News_model->get_array();
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
						<?php foreach ($array_news as $key => $news) { ?>
							<div class="productItem">
								<div class="desc">
									<div class="title">
										<a href="<?php echo $news['news_link']; ?>" title="<?php echo $news['news_title']; ?>">
											<?php echo $news['news_title']; ?></a></div>
									<div class="date"><?php echo GetFormatDate($news['news_date'], array('FormatDate' => 'Y M d')); ?></div>
									<div class="brief"><?php echo $news['news_desc_simple']; ?></div>
									<div class="buttons">
										<a href="<?php echo $news['news_link']; ?>"><input type="image" src="static/image/button-detail.gif" /></a>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						<?php } ?>
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