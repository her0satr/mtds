<?php
	$array_config = $this->Config_model->init();
?>

<?php $this->load->view( 'website/common/meta.php', array('title' => 'Hubungi Kami') ); ?>
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
					<div class="poounder">Hubungi Kami</div>
					<?php echo $array_config['hubungi-kami']['config_content']; ?>
				</div>
				
				<div class="roundedbox">
					<div class="space-top">
						<form id="moreinfo" action="sendscript/findoutmore.php" method="post" class="form-more">
							<label class="qlabell">Nama Lengkap :</label>
							<label class="qlabelr">Email :</label>
							<div class="fl"><input type="text" class="findoutmorefield" name="name" /></div>
							<div class="fr"><input type="text" class="findoutmorefield" name="email" /></div>
							<div class="clear"></div>
							<label class="qlabell">Telepon :</label>
							<label class="qlabelr">Website :</label>        
							<div class="fl"><input type="text" class="findoutmorefield" name="phone" /></div>
							<div class="fr"><input type="text" class="findoutmorefield" name="website" /></div>
							<div class="clear"></div>
							<label class="qlabell">Permintaan :</label>
							<label class="qlabelr">Dari mana anda mengetahui kami ?</label>        
							<div class="fl"><select class="findoutmorefield select" name="request">
								<option>--- Silahkan pilih ---</option>
								<option value="Kerjasama">Kerjasama</option>
								<option value="Recruitment">Recruitment</option>
								<option value="Permintaan Umum">Permintaan Umum</option>
								<option value="Permintaan Website">Permintaan Website</option>
							</select></div>
							<div class="fr"><select class="findoutmorefield select" name="notice_from">
								<option>--- Silahkan pilih ---</option>
								<option value="Google">Google</option>
								<option value="Yahoo">Yahoo</option>
								<option value="Bing">Bing</option>
								<option value="Referred website">Referred website</option>
								<option value="Rekomendasi">Rekomendasi</option>
								<option value="Berita / Artikel">Berita / Artikel</option>
							</select></div>
							<div class="clear"></div>
							<label class="qlabell">Tambahan Informasi:</label>
							<div class="clear"></div>
							<div class="row"><textarea class="textarea" name="message"></textarea></div>
							<div class="clear"></div>
							<div class="button2 fl"><a class="cursor submit-form">Submit</a></div>
							<div class="clear"></div>
						</form>                                  
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