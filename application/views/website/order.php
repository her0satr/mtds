<?php
	$param_order = array( 'filter' => '[{"type":"numeric","comparison":"eq","value":"Cara Pemesanan","field":"config_category"}]' );
	$array_order = $this->Config_model->get_array($param_order);
?>

<?php $this->load->view( 'website/common/meta.php', array('title' => 'Cara Pemesanan') ); ?>
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
					<div class="poounder">Cara Pemesanan</div>
					
					<div id="order-step">
						<ul class="navigation">
							<?php foreach ($array_order as $counter => $order) { ?>
								<li><a href="#order<?php echo ++$counter; ?>"><?php echo $counter; ?></a></li>
							<?php } ?>
						</ul>
						<div class="scroll">
							<div class="scrollContainer">
								<?php foreach ($array_order as $counter => $order) { ?>
									<div class="panel" id="order<?php echo ++$counter; ?>">
										<div class="panel_title"><?php echo $counter.'. '.$order['config_title']; ?></div>
										<hr />
										<?php echo $order['config_content']; ?>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				
				<div id="ordering" class="roundedbox">
					<div style="color: #F79E19; font-size: 16px; text-align: center; font-weight: bold; padding: 0 0 20px 0;">Penjelasan Cara Pemesanan</div>
					<div style="line-height: 20px;">
						<?php foreach ($array_order as $counter => $order) { ?>
							<strong><?php echo ++$counter; ?>. <?php echo $order['config_title']; ?> :</strong> <?php echo $order['config_content']; ?><br />
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