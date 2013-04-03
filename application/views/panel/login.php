<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
	<div id="header">
		<div class="inHeaderLogin"></div>
	</div>

	<div id="loginForm">
		<div class="headLoginForm">Login Administrator</div>
		<div class="fieldLogin">
			<form name="login" method="POST">
				<label>Username</label><br>
				<input type="text" class="login" name="user_name"><br>
				<label>Password</label><br>
				<input type="password" class="login" name="user_pass"><br>
				<input type="submit" class="button" name="button" value="Login">
			</form>
			<div class="message red"></div>
		</div>
	</div>
	<script type="text/javascript">
$(document).ready(function() {
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
		
		$('#loginForm .message').html('');
		Site.ajax({ url: Site.Host + 'panel/user/action', param: param, callback: function(result) {
			if (result.status) {
				window.location = result.redirect;
			} else {
				$('#loginForm .message').html(result.message);
			}
		} });
		
		return false;
	});
	$('input[name="user_name"]').focus();
});
	</script>
</body>
</html>