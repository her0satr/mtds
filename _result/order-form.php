<?php include 'common/meta.php'; ?>
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
					<div class="poounder">Order #1 [Pilih Domain]</div>
					
<style>
.order-form { color: #666666; }
.order-form .title { background: #055789; border-bottom: 4px solid #0985CB; padding: 10px; color: #FFFFFF; margin: 0 0 25px 0; }
.order-form .left { float: left; width: 200px; text-align: right; padding: 3px 0 75px 0; }
.order-form .right { float: left; width: 400px; padding: 0 0 0 25px; }
.order-form .right .domain { padding: 0 0 15px 0; }
.order-form .right .text { width: 250px; }
.order-form .right .select { color: #666666; }
</style>
					
					<div class="order-form">
						<div class="title">Jika Anda belum mempunyai Domain</div>
						<div class="left">Nama Domain</div>
						<div class="right">
							<div class="domain">
								www.
								<input type="text" class="text" />
								.
								<select class="select">
									<option>com</option>
									<option>net</option>
									<option>org</option>
									<option>co.id</option>
								</select>
							</div>
							<div class="button"><img src="static/image/button-next.png" /></div>
						</div>
						<div class="clear"></div>
						<div class="title">Jika Anda sudah mempunyai Domain</div>
						<div class="left">Nama Domain</div>
						<div class="right">
							<div class="domain">
								www.
								<input type="text" class="text" />
							</div>
							<div class="button"><img src="static/image/button-next.png" /></div>
						</div>
						<div class="clear"></div>
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