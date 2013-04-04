<?php
	$array_portofolio = $this->Portofolio_model->get_array();
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
					<?php foreach ($array_portofolio as $portofolio) { ?>
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
					
					<!--
					<div id="product_list">
						<div class="pagination">
							<a href="#" class="">1</a>
							<a href="#" class="selected">2</a>
							<a href="#" class="">3</a>
							<a href="#" class="bold">Next</a>
						</div>
					</div>
					-->
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<?php $this->load->view( 'website/common/footer.php'); ?>
	</div>
</div>
</body>
</html>