<?php $this->load->view( 'panel/common/meta' ); ?>

<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="wrapper">
	<?php $this->load->view( 'panel/common/content_left' ); ?>
	<div id="rightContent">
		<h3>Dashboard</h3>
		
		<a href="media.php?modul=agenda&amp;act=tambah" class="button">Tambah Agenda</a>
		<table class="data"><tbody>
			<tr class="data">
				<th class="data">No</th>
				<th class="data">Agenda</th>
				<th class="data">Isi</th>
				<th class="data">Tanggal</th>
				<th class="data">Jam</th>
				<th class="data">Aksi</th></tr>
			<tr class="data">
				<td class="data">1</td>
				<td class="data">Pembentukan Panitia PILKADES</td>
				<td class="data">BPD Desa Adipura Kencana Akan Segera Membentuk Panitia PILKADES</td>				
				<td class="data">20 Maret  2013</td>				
				<td class="data"></td>
				<td class="data"><a href="media.php?modul=agenda&amp;act=edit&amp;id=3"><img title="edit data" src="<?php echo base_url(); ?>static/image/edit.png"> | 
					</a><a href="agenda_aksi.php?modul=agenda&amp;act=hapus&amp;id=3"><img title="hapus data" src="<?php echo base_url(); ?>static/image/delete.png"></a></td>
				</tr>
			<tr class="data"><td class="data">2</td>
				<td class="data">MusrenBangDes</td>
				<td class="data">Penetapan program usulan </td>				
				<td class="data">19 Januari  2013</td>				
				<td class="data"></td>
				<td class="data"><a href="media.php?modul=agenda&amp;act=edit&amp;id=3"><img title="edit data" src="<?php echo base_url(); ?>static/image/edit.png"> | 
					</a><a href="agenda_aksi.php?modul=agenda&amp;act=hapus&amp;id=3"><img title="hapus data" src="<?php echo base_url(); ?>static/image/delete.png"></a></td>
				</tr>
			<tr class="data"><td class="data">3</td>
				<td class="data">Serah Terima  Proyek PPIP-APBN-P 2012</td>
				<td class="data">Dinas PU,OMS DAN KPP</td>				
				<td class="data">22 Januari 2013</td>				
				<td class="data"></td>
				<td class="data"><a href="media.php?modul=agenda&amp;act=edit&amp;id=3"><img title="edit data" src="<?php echo base_url(); ?>static/image/edit.png"> | 
					</a><a href="agenda_aksi.php?modul=agenda&amp;act=hapus&amp;id=3"><img title="hapus data" src="<?php echo base_url(); ?>static/image/delete.png"></a></td>
				</tr>
		</tbody></table>
		
		<table><tbody>
			<tr>
				<td width="70">Agenda</td>
				<td><input type="text" value="MusrenBangDes" size="70" name="agenda"></td></tr>
			<tr>
				<td width="70">Deskripsi</td>
				<td><input type="text" value="" size="70" name="deskripsi"></td></tr>
			<tr>
				<td width="70">Keyword</td>
				<td><input type="text" value="APBDES 2013" size="70" name="keyword"></td></tr>
			<tr>
				<td>Isi Agenda</td>
				<td> <textarea style="width: 80%" name="isi" class="tinymce">Penetapan program usulan </textarea></td></tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="text" value="19 Januari  2013" size="70" name="tanggal"></td></tr>
			<tr>
				<td>Jam</td>
				<td><input type="text" value="" size="70" name="jam"></td></tr>
			<tr>
				<td colspan="2"><input type="submit" value="Update" class="button">
				<input type="button" onclick="self.history.back()" value="Batal" class="button"></td></tr>
		</tbody></table>
	</div>
	<div class='clear'></div>
</div>
<div class="clear"></div>

<?php $this->load->view( 'panel/common/footer' ); ?>

<!-- Load TinyMCE -->
<script type="text/javascript">
	Site.Form.tinymce();
</script>
</body>
</html>