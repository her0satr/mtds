<?php
	$portofolio_per_page = 15;
	$portofolio_param = array('start' => ($page_active * $portofolio_per_page) - $portofolio_per_page, 'limit' => $portofolio_per_page);
	$portofolio_array = $this->Portofolio_model->get_array($portofolio_param);
	$portofolio_count = $this->Portofolio_model->get_count();
	$portofolio_page = ceil($portofolio_count / $portofolio_per_page);
?>

<?php $this->load->view( 'website/common/meta.php', array('title' => 'Portofolio') ); ?>
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
				<!--
				<div class="roundedbox">
					<div class="poounder">Portofolio</div>
					<div id="portfolio">
						<div class="left"><img src="static/upload/portfolio.png" /></div>
						<div class="right">
							<div class="title">SSS & CO. Law and Business Consultants</div>
							<div class="desc">
								Kami adalah Konsultan Hukum dan Bisnis yang berkedudukan di Jakarta yang selalu berusaha untuk memahami serta mengutamakan jasa kami untuk kepentingan serta kepuasan Klien dalam pelayan serta membantu Klien  sesuai dengan kebutuhan.<br /><br />
								Perusahaan kami menyediakan secara profesional suatu kualitas hasil kerja yang tinggi. Kami juga selalu memelihara hubungan yang kuat antara partners dan sumber daya manusia kami, sehingga kami dapat menghasilkan suatu hasil kerja yang berstandart tinggi baik secara lokal maupun internasional.<br /><br />
								<strong>Web development :</strong> Multi Language, Content Management System<br />
								<strong>Launcher :</strong> March 2013<br />
								<strong>Category :</strong> Company Profile<br />
								<strong>Website :</strong> www.ssslawbusiness.com<br />
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				-->
				
				<div id="list-port" class="roundedbox">
					<div class="poounder">Portofolio</div>
					<?php foreach ($portofolio_array as $portofolio) { ?>
						<div class="item">
							<div class="title"><?php echo $portofolio['portofolio_title']; ?></div>
							<div class="link"><?php echo $portofolio['portofolio_link']; ?></div>
							<div class="image">
								<a href="<?php echo $portofolio['portofolio_name_link']; ?>">
									<img src="<?php echo $portofolio['portofolio_image_link']; ?>" />
								</a>
							</div>
						</div>
					<?php } ?>
					<div class="clear"></div>
					
					<div id="product_list">
						<div class="pagination">
							<?php if ($page_active > 1) { ?>
								<?php $page_prev = $page_active - 1; ?>
								<a href="<?php echo base_url('portofolio/page_'.$page_prev); ?>" class="bold">Prev</a>
							<?php } ?>
							<?php for ($i = -4; $i < 4; $i++) { ?>
								<?php $page_counter = $i + $page_active; ?>
								<?php if ($page_counter > 0 && $page_counter <= $portofolio_page) { ?>
									<?php $class = ($i == 0) ? 'selected' : ''; ?>
									<a href="<?php echo base_url('portofolio/page_'.$page_counter); ?>" class="<?php echo $class; ?>"><?php echo $page_counter; ?></a>
								<?php } ?>
							<?php } ?>
							<?php if ($page_active < $portofolio_page) { ?>
								<?php $page_next = $page_active + 1; ?>
								<a href="<?php echo base_url('portofolio/page_'.$page_next); ?>" class="bold">Next</a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<?php $this->load->view( 'website/common/footer.php'); ?>
	</div>
</div>
</body>
</html>