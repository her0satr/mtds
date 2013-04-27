<?php
	preg_match('/page_([0-9]+)/i', $_SERVER['REQUEST_URI'], $link_data);
	$page_active = (!empty($link_data[1])) ? $link_data[1] : 1;
	
	$news_per_page = 10;
	$news_param = array('start' => ($page_active * $news_per_page) - $news_per_page, 'limit' => $news_per_page);
	$news_array = $this->News_model->get_array($news_param);
	$news_count = $this->News_model->get_count();
	$news_page = ceil($news_count / $news_per_page);
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
					<div class="poounder">News</div>
					<div id="product_list">
						<?php foreach ($news_array as $key => $news) { ?>
							<div class="productItem">
								<div class="desc">
									<div class="title">
										<a href="<?php echo $news['news_link']; ?>" title="<?php echo $news['news_title']; ?>">
											<?php echo $news['news_title']; ?></a></div>
									<div class="date"><?php echo GetFormatDate($news['news_date'], array('FormatDate' => 'Y M d')); ?></div>
									<div class="brief"><?php echo $news['news_desc_simple']; ?></div>
									<div class="buttons">
										<a href="<?php echo $news['news_link']; ?>"><input type="image" src="<?php echo base_url(); ?>static/image/button-detail.gif" /></a>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						<?php } ?>
						
						<div class="pagination" style="margin: 15px 0 0 0;">
							<?php if ($page_active > 1) { ?>
								<?php $page_prev = $page_active - 1; ?>
								<a href="<?php echo base_url('news/page_'.$page_prev); ?>" class="bold">Prev</a>
							<?php } ?>
							<?php for ($i = -4; $i < 4; $i++) { ?>
								<?php $page_counter = $i + $page_active; ?>
								<?php if ($page_counter > 0 && $page_counter <= $news_page) { ?>
									<?php $class = ($i == 0) ? 'selected' : ''; ?>
									<a href="<?php echo base_url('news/page_'.$page_counter); ?>" class="<?php echo $class; ?>"><?php echo $page_counter; ?></a>
								<?php } ?>
							<?php } ?>
							<?php if ($page_active < $news_page) { ?>
								<?php $page_next = $page_active + 1; ?>
								<a href="<?php echo base_url('news/page_'.$page_next); ?>" class="bold">Next</a>
							<?php } ?>
						</div>
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