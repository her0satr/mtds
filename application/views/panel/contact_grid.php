<?php
	$array_log = $this->Contact_Log_model->get_array(array('limit' => 25));
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	<div id="rightContent">
		<h3>Contact Log</h3>
		
		<table class="data"><tbody>
			<tr class="data">
				<th class="data">Date</th>
				<th class="data">Content</th>
				<th class="data">Aksi</th></tr>
			<?php foreach ($array_log as $log) { ?>
				<tr class="data">
					<td class="data"><?php echo $log['contact_log_date']; ?></td>
					<td class="data"><pre><?php echo $log['contact_log_desc']; ?></pre></td>
					<td class="data center" style="width: 50px;">
						<span class="hide"><?php echo json_encode($log); ?></span>
						<a class="cursor"><img title="hapus data" src="<?php echo base_url(); ?>static/image/delete.png" class="log_delete"></a></td>
					</tr>
			<?php } ?>
		</tbody></table>
		<div class="red message pad"><?php echo flashmsg_get(); ?></div>
		<script type="text/javascript">
			$('.log_delete').click(function() {
				var raw = $(this).parent('a').parent('td').find('span').text();
				eval('var record = ' + raw);
				
				$('#rightContent .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/contact/action', param: { action: 'Delete', contact_log_id: record.contact_log_id }, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/contact';
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