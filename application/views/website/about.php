<?php
	$param_about = array( 'filter' => '[{"type":"numeric","comparison":"eq","value":"Company Profile","field":"config_category"}]' );
	$array_about = $this->Config_model->get_array($param_about);
	
	$param_process = array( 'filter' => '[{"type":"numeric","comparison":"eq","value":"Our Process","field":"config_category"}]' );
	$array_process = $this->Config_model->get_array($param_process);
	
	$param_choose = array( 'filter' => '[{"type":"numeric","comparison":"eq","value":"Why Choose","field":"config_category"}]' );
	$array_choose = $this->Config_model->get_array($param_choose);
	
	$param_payment = array( 'filter' => '[{"type":"numeric","comparison":"eq","value":"Payment","field":"config_category"}]' );
	$array_payment = $this->Config_model->get_array($param_payment);
?>

<?php $this->load->view( 'website/common/meta.php', array('title' => 'Profile') ); ?>
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
					<div class="poounder">About Us</div>
					
					<div class="intro_text">
						<ul class="intro_slider">
							<?php foreach ($array_about as $counter => $about) { ?>
								<li>
									<div class="bwWrapper"><img src="static/image/0<?php echo ++$counter; ?>.jpg" /></div>
									<div class="desc">
										<h4><?php echo $about['config_title']; ?></h4>
										<?php echo $about['config_content']; ?>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					
					<div class="process">
						<h4>Our Process</h4>
						<ul>
							<?php foreach ($array_process as $counter => $process) { ?>
								<li>
									<h3><span>Step <?php echo ++$counter; ?></span> <?php echo $process['config_title']; ?></h3>
									<?php echo $process['config_content']; ?>
								</li>
							<?php } ?>
						</ul>
						<div class="clear"></div>
					</div>
					
					<div class="why_choose_explore">
						<h4>Why Choose Mitra Desain ?  We'll Tell You!</h4>
						<div class="why_choose">
							<ul>
								<?php foreach ($array_choose as $choose) { ?>
									<?php if ($choose['config_title'] == 'left') { ?>
										<li><?php echo $choose['config_content_clean']; ?></li>
									<?php } ?>
								<?php } ?>
							</ul>
						</div>
						<div class="why_choose">
							<ul>
								<?php foreach ($array_choose as $choose) { ?>
									<?php if ($choose['config_title'] == 'right') { ?>
										<li><?php echo $choose['config_content_clean']; ?></li>
									<?php } ?>
								<?php } ?>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="featured_list">
						<h4>Payment</h4>
						<ul class="gallery">
							<?php foreach ($array_payment as $counter => $payment) { ?>
								<li>
									<div class="cnt"><div class="bwWrapper">
										<a class="cursor"><img src="static/image/bank<?php echo ++$counter; ?>.png" alt="" /></a>
										<p>
											<strong><a><?php echo $payment['config_title']; ?></a></strong>
											<?php echo $payment['config_content']; ?>
										</p>
									</div></div>
								</li>
							<?php } ?>
							<!--
							<li>
								<div class="cnt"><div class="bwWrapper">
									<a class="cursor"><img src="static/upload/bca.png" alt="" /></a>
									<p><strong><a>Transfer BCA</a></strong><span>No Rek : 8160683733 </span><span>an: Moch Wahib Dariyadi</span><span>BCA Borobudur</span></p>
								</div></div>
							</li>
							<li>
								<div class="cnt"><div class="bwWrapper">
									<a href="bni.png"><img src="static/upload/bni.png" alt="" /></a>
									<p><strong><a href="single_full.html">Transfer BNI</a></strong><span>No Rek : 0132257978 </span><span>an: Moch Wahib Dariyadi</span><span>Cab Universitas Negeri Malang</span></p>
								</div></div>
							</li>
							<li>
								<div class="cnt"><div class="bwWrapper">
									<a href="mandiri.png"><img src="static/upload/mandiri.png" alt="" /></a>
									<p><strong><a href="single_full.html">Transfer Mandiri</a></strong><span>No Rek : 1440010419270 </span><span>an: Moch Wahib Dariyadi</span><span>Cab. Wahid Hasyim Malang</span></p>
								</div></div>
							</li>
							<li>
								<div class="cnt"><div class="bwWrapper">
									<a href="paypal.png"><img src="static/upload/paypal.png" alt="" /></a>
									<p><strong><a href="single_full.html">Transfer Paypal</a></strong><span>Account : mitradesain@yahoo.com</span><span>Paypal.com </span></p>
								</div></div>
							</li>
							-->
						</ul>
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