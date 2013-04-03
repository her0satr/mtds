<?php
	$config_category = (isset($_GET['config_category'])) ? $_GET['config_category'] : '';
	$config_title = (empty($config_category)) ? 'Config' : $config_category;
	
	$param_config = array( 'filter' => '[{"type":"numeric","comparison":"eq","value":"'.$config_category.'","field":"config_category"}]' );
	$array_config = $this->Config_model->get_array($param_config);
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<input type="hidden" name="config_category" value="<?php echo $config_category; ?>" />
	
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	<div id="rightContent">
		<h3><?php echo $config_title; ?></h3>
		
		<a href="<?php echo base_url('panel/config/edit/0/?config_category='.$config_category); ?>" class="button">Tambah <?php echo $config_title; ?></a>
		<table class="data"><tbody>
			<tr class="data">
				<th class="data">Name</th>
				<th class="data">Title</th>
				<th class="data">Content</th>
				<th class="data">Aksi</th></tr>
			<?php foreach ($array_config as $config) { ?>
				<tr class="data">
					<td class="data"><?php echo $config['config_name']; ?></td>
					<td class="data"><?php echo $config['config_title']; ?></td>
					<td class="data"><?php echo GetLengthChar(strip_tags($config['config_content']), 300, ' ...'); ?></td>
					<td class="data center">
						<?php unset($config['config_content']); ?>
						<span class="hide"><?php echo json_encode($config); ?></span>
						<a href="<?php echo base_url('panel/config/edit/'.$config['config_id']); ?>"><img title="edit data" src="<?php echo base_url(); ?>static/image/edit.png"></a> |
						<a class="cursor"><img title="hapus data" src="<?php echo base_url(); ?>static/image/delete.png" class="config_delete"></a></td>
					</tr>
			<?php } ?>
		</tbody></table>
		<div class="red message pad"><?php echo flashmsg_get(); ?></div>
		<script type="text/javascript">
			$('.config_delete').click(function() {
				var raw = $(this).parent('a').parent('td').find('span').text();
				eval('var record = ' + raw);
				
				$('#rightContent .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/config/action', param: { action: 'Delete', config_id: record.config_id }, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/config/?config_category=' + $('input[name="config_category"]').val();
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