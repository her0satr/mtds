<?php
	$array_user = $this->User_model->get_array();
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	<div id="rightContent">
		<h3>User</h3>
		
		<a href="<?php echo base_url('panel/user/edit/0'); ?>" class="button">Tambah User</a>
		<table class="data"><tbody>
			<tr class="data">
				<th class="data">User Name</th>
				<th class="data">Full Name</th>
				<th class="data">Email</th>
				<th class="data">Aksi</th></tr>
			<?php foreach ($array_user as $user) { ?>
				<tr class="data">
					<td class="data"><?php echo $user['user_name']; ?></td>
					<td class="data"><?php echo $user['user_display']; ?></td>
					<td class="data"><?php echo $user['user_email']; ?></td>
					<td class="data center">
						<span class="hide"><?php echo json_encode($user); ?></span>
						<a href="<?php echo base_url('panel/user/edit/'.$user['user_id']); ?>"><img title="edit data" src="<?php echo base_url(); ?>static/image/edit.png"></a> |
						<a class="cursor"><img title="hapus data" src="<?php echo base_url(); ?>static/image/delete.png" class="user_delete"></a></td>
					</tr>
			<?php } ?>
		</tbody></table>
		<div class="red message pad"><?php echo flashmsg_get(); ?></div>
		<script type="text/javascript">
			$('.user_delete').click(function() {
				var raw = $(this).parent('a').parent('td').find('span').text();
				eval('var record = ' + raw);
				
				$('#rightContent .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/user/action', param: { action: 'Delete', user_id: record.user_id }, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/user';
					} else {
						$('#rightContent .message').show().html(result.Message);
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