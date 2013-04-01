<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/mos-style.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.1.7.2.min.js"></script>
</head>
<body>
	<div id="header">
		<div class="inHeaderLogin"></div>
	</div>

	<div id="loginForm">
		<div class="headLoginForm">Login Administrator</div>
		<div class="fieldLogin">
			<form name="login" method="POST" onSubmit="return validasi(this)">
			<label>Username</label><br>
			<input type="text" class="login" name="username"><br>
			<label>Password</label><br>
			<input type="password" class="login" name="password"><br>
			<input type="submit" class="button" value="Login">
			</form>
		</div>
	</div>
	<script language="javascript">
	$('input[name="username"]').focus();
	
function validasi(form) {
	if (form.username.value == ""){
		alert("Anda belum mengisikan Username.");
		form.username.focus();
		return (false);
	}
    
	if (form.password.value == ""){
		alert("Anda belum mengisikan Password.");
		form.password.focus();
		return (false);
	}
	
	return true;
}
	</script>
</body>
</html>