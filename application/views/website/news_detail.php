<?php
	preg_match('/news\/([a-z0-9\_]+)/i', $_SERVER['REQUEST_URI'], $match);
	$news_name = (empty($match[1])) ? '' : $match[1];
	$news = $this->News_model->get_by_id(array('news_name' => $news_name));
	
	if (count($news) == 0) {
		show_404();
		exit;
	}
	
	$array_news = $this->News_model->get_array( array( 'limit' => 5 ) );
	
	$param_meta = array(
		'title' => 'News - '.$news['news_title'],
		'meta_keyword' => $news['news_meta_keyword'],
		'meta_desc' => $news['news_meta_desc']
	);
?>

<?php $this->load->view( 'website/common/meta.php', $param_meta ); ?>
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
					<h1 class="poounder">News</h1>
					<div id="product_list">
						<div class="noborder">
							<div class="productItem">
								<div class="desc">
									<div class="title"><a href="<?php echo $news['news_link']; ?>"><?php echo $news['news_title']; ?></a></div>
									<div class="date"><?php echo GetFormatDate($news['news_date'], array('FormatDate' => 'Y M d')); ?></div>
									<div class="brief"><?php echo $news['news_desc']; ?></div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="roundedbox">
					<h1 class="poounder">List News</h1>
					<div id="priceinfo">
						<div class="tabcontent2">
							<ul>
								<?php foreach ($array_news as $array) { ?>
									<li><a href="<?php echo $array['news_link']; ?>"><?php echo $array['news_title']; ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<?php $this->load->view( 'website/common/footer.php'); ?>
	</div>
</div>
</body>
</html>