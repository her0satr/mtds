<?php
	$array_news = $this->News_model->get_array(array('limit' => 25));
?>
<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	<div id="rightContent">
		<h3>News</h3>
		
		<a href="<?php echo base_url('panel/news/edit/0'); ?>" class="button">Tambah News</a>
		<table class="data"><tbody>
			<tr class="data">
				<th class="data">Title</th>
				<th class="data">Desc</th>
				<th class="data">Date</th>
				<th class="data">Aksi</th></tr>
			<?php foreach ($array_news as $news) { ?>
				<tr class="data">
					<td class="data"><a href="<?php echo $news['news_link']; ?>"><?php echo $news['news_title']; ?></a></td>		
					<td class="data"><?php echo GetLengthChar(strip_tags($news['news_desc_simple']), 300, ' ...'); ?></td>		
					<td class="data"><?php echo $news['news_date']; ?></td>
					<td class="data center" style="width: 50px;">
						<?php unset($news['news_desc']); ?>
						<?php unset($news['news_desc_simple']); ?>
						<span class="hide"><?php echo json_encode($news); ?></span>
						<a href="<?php echo base_url('panel/news/edit/'.$news['news_id']); ?>"><img title="edit data" src="<?php echo base_url(); ?>static/image/edit.png"></a> |
						<a class="cursor"><img title="hapus data" src="<?php echo base_url(); ?>static/image/delete.png" class="news_delete"></a></td>
					</tr>
			<?php } ?>
		</tbody></table>
		<div class="red message pad"><?php echo flashmsg_get(); ?></div>
		<script type="text/javascript">
			$('.news_delete').click(function() {
				var raw = $(this).parent('a').parent('td').find('span').text();
				eval('var record = ' + raw);
				
				$('#rightContent .message').hide().html('');
				Site.ajax({ url: Site.Host + 'panel/news/action', param: { action: 'Delete', news_id: record.news_id }, callback: function(result) {
					if (result.QueryStatus == 1) {
						window.location = Site.Host + 'panel/news';
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