<html>
<head>
	<title>Administrator Adipura Kencana</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/mos-style.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/lib/tinymce/jscripts/tiny_mce/jquery.tinymce.js"></script>
</head>
<body>
<div id="header">
	<div class="inHeader">
			<div class="mosAdmin">
			Hallo, Administrator <br>
			<br>
			<a href="../home">Lihat website</a> | 
			<a href="logout.php" title="Logout">keluar</a>
			</div>
		<div class="clear"></div>
	</div>
</div>
<div id="wrapper">
	<div id="leftBar">
		<ul>
			<li><a href="dashboard">Dashboard</a></li>
			<li><a href="profil">Profil Desa</a></li>
			<li><a href="download">Download</a></li>
			<li><a href="banner">Banner</a></li>
			<li><a href="agenda">Agenda</a></li>
			<li><a href="berita">Berita</a></li>
			<li><a href="komentar">Komentar</a></li>
			<li><a href="hubungi">Hubungi</a></li>
			<li><a href="suara">Suara Warga</a></li>
			<li><a href="pejabat">Pejabat</a></li>
			<li><a href="pemerintahan">Bidang</a></li>
			<li><a href="gallery">Galeri</a></li>
			<li><a href="fasilitas">Fasilitas</a></li>
			<li><a href="usaha">Dunia Usaha</a></li>
			<li><a href="potensi">Potensi</a></li>
			<li><a href="lembaga">Lembaga Adat</a></li>
			<li><a href="pelayanan">Pelayanan</a></li>
			<li><a href="user">User</a></li>
		</ul>
	</div>
	<div id="rightContent">
		<h3>Dashboard</h3>
		<h2>Selamat Datang, Administrator</h2>
		
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

<div id="footer">All Right Reserved &copy; 2013.</div>

<!-- Load TinyMCE -->
<script type="text/javascript">
	$().ready(function() {
		$('textarea.tinymce').tinymce({
			// Location of TinyMCE script
			script_url : 'http://localhost:8666/mitradesain/trunk/_result/static/lib/tinymce/jscripts/tiny_mce/tiny_mce.js',

			// General options
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

			// Theme options
			theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,
			
			// Drop lists for link/image/media/template dialogs
			template_external_list_url : "lists/template_list.js",
			external_link_list_url : "lists/link_list.js",
			external_image_list_url : "lists/image_list.js",
			media_external_list_url : "lists/media_list.js",

			// Replace values for the template plugin
			template_replace_values : {
				username : "Some User",
				staffid : "991234"
			}
		});
	});
</script>
</body>
</html>