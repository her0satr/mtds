<?php
	$array_config = $this->Config_model->init();
	$array_portofolio = $this->Portofolio_model->get_array(array('limit' => 4));
?>

<div class="roundedbox" id="latestbox">
	<h3 class="blueback">Portofolio Terbaru</h3>
	<ul id="latest">
		<?php foreach ($array_portofolio as $portofolio) { ?>
			<li>
				<a href="<?php echo $portofolio['portofolio_name_link']; ?>">
					<img src="<?php echo $portofolio['portofolio_image_link']; ?>" alt="<?php echo $portofolio['portofolio_title']; ?>" title="<?php echo $portofolio['portofolio_title']; ?>" />
				</a>
				<?php echo $portofolio['portofolio_title']; ?>
				<p><a href="<?php echo $portofolio['portofolio_name_link']; ?>"><?php echo $portofolio['portofolio_link']; ?></a></p>
				<div class="button2 fr"><a href="<?php echo base_url('contact'); ?>">Penawaran</a></div>
				<div class="button fl"><a href="<?php echo base_url('portofolio'); ?>">Portofolio</a></div>
				<div class="clear"></div>
			</li>
		<?php } ?>             
	</ul>
</div>

<div id="service">
	<!--
	<div class="search">
		<form action="http://jogjacamp.com/index.php?action=search.main" method="get" name="searchForm">
			<input type="text" placeholder="Search keyword..." class="searchText" id="search_input" name="keyword">		
		</form>
	</div>
	-->
	<div class="support">
		<div class="title">Customer Support</div>
		<div class="live">
			<a href="javascript:void(window.open('http://mitradesain.com/livezilla/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))">
				<img src="<?php echo base_url(); ?>static/upload/live.png" />
			</a>
		</div>
		<div class="sales">
			<div class="left">Sales <span>:</span></div>
			<div class="right">
				<div class="row">
					<div class="name">Mitra</div>
					<div class="widget">
						<a href="ymsgr:sendIM?mitradesain&amp;m=hello+Mitra Desain+:+">
							<img src="http://opi.yahoo.com/online?u=mitradesain&amp;m=g&amp;t=1" /></a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="row">
					<div class="name">Wahib</div>
					<div class="widget">
						<a href="ymsgr:sendIM?wahib_dr&amp;m=hello+Mitra Desain+:+">
							<img src="http://opi.yahoo.com/online?u=wahib_dr&amp;m=g&amp;t=1" /></a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="hotline">
			<div class="left">Hotline</div>
			<div class="right">
				<div class="phone">
					<?php echo $array_config['hotline']['config_content']; ?>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

<div class="login-jogja" id="loginForm">
	<div class="login">
		<div class="loginCell">
			<h2 class="title">User Login</h2>
			<form method="post">
				<p><input type="text" class="loginText" name="user_name" value="Username" /></p>
				<p><input type="password" class="loginText" name="user_pass" value="Password" /></p>
				<p><input type="submit" class="loginButton" name="button" value="Login"></p>
			</form>
			<div class="loginLink"><a href="index.php?action=chpasswd.forgotpass">Forgot Password?</a></div>
			<div class="clear"></div>
		</div>
	</div>
	<script type="text/javascript">
		$('#loginForm form').submit(function() {
			if ($('input[name="user_name"]').val().length == 0) {
				alert("Anda belum mengisikan Username.");
				$('input[name="user_name"]').focus();
				return false;
			}
			if ($('input[name="user_pass"]').val().length == 0) {
				alert("Anda belum mengisikan Password.");
				$('input[name="user_pass"]').focus();
				return false;
			}
			
			var param = Site.Form.GetValue('loginForm');
			param.action = 'Login';
			delete param.button;
			
			Site.ajax({ url: Site.Host + 'panel/user/action', param: param, callback: function(result) {
				if (result.status) {
					window.location = result.redirect;
				} else {
					alert(result.message);
				}
			} });
			
			return false;
		});
	</script>
</div>

<div class="roundedbox">
	<div id="getquote">
		<h3 class="bluebacktwo">Penawaran Web Desain Gratis</h3>        	
		<p class="sizeeleven">Masukkan rincian Anda di bawah ini :</p>

		<div id="formcontainer">
			<form method="post" action="sendscript/sidebar.php" name="quickcontact" id="quickcontact">
				<p><input name="name" type="text" class="freequotefield" placeholder="Nama Lengkap" /></p>
				<p><input name="email" type="text" class="freequotefield" placeholder="Email" /></p>
				<p><input name="phone" type="text" class="freequotefield" placeholder="Telepon" /></p>
				<p><input name="website" type="text" class="freequotefield" placeholder="Website" /></p>
				<!--
				<div class="promocheck"><input name="mailing" type="checkbox" id="mailing" value="Yes" checked="checked" /></div>
				<div class="promotext">Keep me updated with promotions &amp; special offers from Pom Design</div>
				-->
				<div class="clear"></div>
				<div class="button2 fl space"><a class="cursor submit-form">Submit</a></div>
				<div class="clear"></div>
			</form>
		</div>
	</div>
</div>
<div class="center"><img src="<?php echo base_url(); ?>static/image/pricematch.png" /></div>