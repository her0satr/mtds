<?php
	$user = $this->User_model->get_by_id(array('user_id' => $user_id));
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	
	<div id="rightContent">
		<h3>User</h3>
		
		<input type="hidden" name="user_id" value="<?php echo @$user['user_id']; ?>" />
		<table class="common" id="FormEntry"><tbody>
			<tr>
				<td width="70">User Name</td>
				<td><input type="text" name="user_name" value="<?php echo @$user['user_name']; ?>" /></td></tr>
			<tr>
				<td width="70">Password</td>
				<td><input type="text" name="user_pass" value="" /></td></tr>
			<tr>
				<td width="70">Fullname</td>
				<td><input type="text" name="user_display" value="<?php echo @$user['user_display']; ?>" /></td></tr>
			<tr>
				<td width="70">Email</td>
				<td><input type="text" name="user_email" value="<?php echo @$user['user_email']; ?>" /></td></tr>
			<tr>
				<td colspan="2">
					<input type="button" class="button" value="Update" name="FormUpdate" />
					<input type="button" class="button" value="Batal" name="FormReset" onclick="self.history.back()" /></td></tr>
			<tr><td colspan="2" class="hide red message">&nbsp;</td></tr>
		</tbody></table>
		
		<script type="text/javascript">
			Site.Form.Start('FormEntry');
			
			$('input[name="FormUpdate"]').click(function() {
				var param = Site.Form.GetValue('rightContent');
				param.action = 'Update';
				delete param.FormUpdate;
				delete param.FormReset;
				if (param.user_pass.length == 0)
					delete param.user_pass;
				
				$('#FormEntry .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/user/action', param: param, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/user';
					} else {
						$('#FormEntry .message').show().html(result.message);
					}
				} });
			});
		</script>
	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>

<?php $this->load->view( 'panel/common/footer' ); ?>

</body>
</html>