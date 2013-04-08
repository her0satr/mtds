<?php $this->load->view( 'website/common/meta.php', array('title' => 'Domain') ); ?>
<body>
<div class="template">
	<?php $this->load->view( 'website/common/template_fix' ); ?>
	
	<div class="fix-width">
		<?php $this->load->view( 'website/common/header' ); ?>
		
		<div class="pom">
			<div class="pom-left">
				<?php $this->load->view( 'website/common/cnt_left' ); ?>
			</div>
			
			<div class="pom-right">
				<div class="roundedbox">
					<div class="poounder">Order #1 [Pilih Domain]</div>
					
					<div class="order-form">
						<div class="title">Jika Anda belum mempunyai Domain</div>
						<div class="left">Nama Domain</div>
						<div class="right">
							<div class="domain">
								www.
								<input type="text" class="text" name="domain" />
								.
								<select class="select" name="extension" >
									<option value="com">com</option>
									<option value="info">info</option>
									<option value="net">net</option>
									<option value="name">name</option>
									<option value="org">org</option>
									<option value="biz">biz</option>
									<option value="tv">tv</option>
								</select>
							</div>
							<div class="button check-domain cursor"><img src="static/image/button-submit.png" /></div>
						</div>
						<div class="clear"></div>
						<div class="cnt-domain"></div>
						<div class="title">Jika Anda sudah mempunyai Domain</div>
						<div class="left">Nama Domain</div>
						<div class="right">
							<div class="domain">
								www.
								<input type="text" class="text" />
							</div>
							<div class="button penawaran cursor"><img src="static/image/button-submit.png" /></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<script type="text/javascript">
			$('.check-domain').click(function() {
				if ($('input[name="domain"]').val().length == 0) {
					alert('Silakan memasukan nama domain dulu.');
					return;
				}
				
				var param = {
					'action': 'CheckDomain',
					'domain': $('input[name="domain"]').val(),
					'extension': $('select[name="extension"]').val()
				}
				$('.cnt-domain').html('<div class="center"><img src="' + web.host + '/static/image/ajax_loader.gif" style="width: 75px;" /></div>');
				$.post(web.host + 'ajax', param, function(raw) {
					eval('var result = ' + raw);
					
					var content = '';
					for (var i = 0; i < result.length; i++) {
						var class_name = (result[i].avaliable == 1) ? 'avaliable' : 'taken';
						content += '<div class="box"><span class="' + class_name + '">' + ucfirst(class_name) + '</span> ' + result[i].message + '</div>';
					}
					$('.cnt-domain').html(content);
				});
				
				$('.penawaran').click(function() {
					window.location = web.host + '/contact';
				});
			});
		</script>
		
		<?php $this->load->view( 'website/common/footer' ); ?>
	</div>
</div>
</body>
</html>