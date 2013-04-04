<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	<div id="rightContent">
		<h3>Dashboard</h3>
		<div style="margin: 10px 0 0 0;">
			<div class="shortcutHome">
				<a href="<?php echo base_url('panel/product'); ?>"><img src="http://adipurakencana.com/panel/mos-css/img/Money.png"><br>Produk</a>
			</div>
			<div class="shortcutHome">
				<a href="<?php echo base_url('panel/portofolio'); ?>"><img src="http://adipurakencana.com/panel/mos-css/img/portfolio.jpg"><br>Portofolio</a>
			</div>
			<div class="shortcutHome">
				<a href="<?php echo base_url('panel/user'); ?>"><img src="http://adipurakencana.com/panel/mos-css/img/user.png"><br>User</a>
			</div>
			<div class="shortcutHome">
				<a href="<?php echo base_url('panel/config/?config_category=Company Profile'); ?>"><img src="http://adipurakencana.com/panel/mos-css/img/profile.jpg"><br>Company Profile</a>
			</div>
			<div class="shortcutHome">
				<a href="<?php echo base_url('panel/config/?config_category=Cara Pemesanan'); ?>"><img src="http://adipurakencana.com/panel/mos-css/img/template.png"><br>Cara Pemesanan</a>
			</div>
			<div class="shortcutHome">
				<a href="<?php echo base_url('panel/config/?config_category=Contact Us'); ?>"><img src="http://adipurakencana.com/panel/mos-css/img/kerjasama.jpg"><br>Contact Us</a>
			</div>
			<div class="shortcutHome">
				<a href="<?php echo base_url('panel/config'); ?>"><img src="http://adipurakencana.com/panel/mos-css/img/posting.png"><br>Config</a>
			</div>
		</div>
	</div>
	<div class='clear'></div>
</div>
<div class="clear"></div>

<?php $this->load->view( 'panel/common/footer' ); ?>

</body>
</html>