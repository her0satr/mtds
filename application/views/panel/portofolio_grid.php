<?php
	$array_portofolio = $this->Portofolio_model->get_array();
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	<div id="rightContent">
		<h3>Portofolio</h3>
		
		<a href="<?php echo base_url('panel/portofolio/edit/0'); ?>" class="button">Tambah Portofolio</a>
		<table class="data"><tbody>
			<tr class="data">
				<th class="data">Title</th>
				<th class="data">Desc</th>
				<th class="data">Date</th>
				<th class="data">Aksi</th></tr>
			<?php foreach ($array_portofolio as $portofolio) { ?>
				<tr class="data">
					<td class="data"><a href="<?php echo $portofolio['portofolio_link']; ?>"><?php echo $portofolio['portofolio_title']; ?></a></td>		
					<td class="data"><?php echo GetLengthChar(strip_tags($portofolio['portofolio_desc']), 300, ' ...'); ?></td>		
					<td class="data"><?php echo $portofolio['portofolio_date']; ?></td>
					<td class="data center">
						<?php unset($portofolio['portofolio_desc']); ?>
						<span class="hide"><?php echo json_encode($portofolio); ?></span>
						<a href="<?php echo base_url('panel/portofolio/edit/'.$portofolio['portofolio_id']); ?>"><img title="edit data" src="<?php echo base_url(); ?>static/image/edit.png"></a> |
						<a class="cursor"><img title="hapus data" src="<?php echo base_url(); ?>static/image/delete.png" class="portofolio_delete"></a></td>
					</tr>
			<?php } ?>
		</tbody></table>
		<div class="red message pad"><?php echo flashmsg_get(); ?></div>
		<script type="text/javascript">
			$('.portofolio_delete').click(function() {
				var raw = $(this).parent('a').parent('td').find('span').text();
				eval('var record = ' + raw);
				
				$('#rightContent .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/portofolio/action', param: { action: 'Delete', portofolio_id: record.portofolio_id }, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/portofolio';
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