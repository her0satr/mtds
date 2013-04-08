-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2013 at 02:37 AM
-- Server version: 5.1.68-cll
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mitrades_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `config_category` varchar(100) NOT NULL,
  `config_name` varchar(255) NOT NULL,
  `config_title` varchar(255) NOT NULL,
  `config_content` longtext NOT NULL,
  `config_hide` tinyint(4) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_id`, `config_category`, `config_name`, `config_title`, `config_content`, `config_hide`) VALUES
(5, 'Our Process', 'no 1', 'Research', '<p><span>Mendengarkan dan memahami semua keinginan dan kebutuhan Anda untuk menghasilkan solusi yang maksimal.</span></p>', 0),
(6, 'Why Choose', 'no 1', 'left', '<p>Dapat menyesuaikan dengan hosting server pilihan client.</p>', 0),
(7, 'Payment', 'no 1', 'Transfer BCA', '<p><span>No Rek : 8160683733</span></p>\n<p><span>an: Moch Wahib Dariyadi</span></p>\n<p><span>BCA Borobudur</span></p>', 0),
(12, 'Company Profile', 'no 1', 'Company Profile', '<p>PT. Mitra Desain adalah sebuah penyelenggara JASA PEMBUTAN WEBSITE yang didirikan di JAKARTA pada 17 Januari 2004 dengan layanan utama pembuatan website untuk keperluan company profileperusahaan. Seiring waktu kami tumbuh dan berkembang dengan memberikan pelayanan tambahan berupa toko online, web lembaga, web sekolah, web pribadi, web blog, web portal dll.</p>\n<p>&nbsp;</p>\n<p>PT. Mitra Desain memiliki VISI untuk berbagi kepada para perusahaan dan ukm untuk dapat meningkatkan penjualan dan memajukan bisnisnya dengan bantuan website, oleh karenanya kami memberikan jasa layanan pembuatan website dengan harga terjangkau.</p>', 0),
(13, 'Company Profile', 'no 3', 'Profisional Website Design & Development', '<p>PT. Mitra Desain merupakan penyedia jasa pembuatan website (web design), SEO &amp; SEM dan web development. Dengan tim yang berisi profesional berpengalaman di bidangnya, kami berkomitmen memberikan layanan terbaik yang berfokus pada kebutuhan, keinginan dan kesuksesan brand klien kami.</p>', 0),
(14, 'Company Profile', 'no 2', 'Visi', '<p>PT. Mitra Desain memiliki VISI untuk berbagi kepada para perusahaan dan ukm untuk dapat meningkatkan penjualan dan memajukan bisnisnya dengan bantuan website, oleh karenanya kami memberikan jasa layanan pembuatan website dengan harga terjangkau.</p>', 0),
(15, '', 'hubungi-kami', 'Hubungi Kami', '<p>Untuk mendiskusikan kebutuhan Anda dengan salah satu produk kami jangan ragu untuk menghubungi kami di 0845 2577 187 atau lengkapi formulir di bawah dan kami akan menelepon atau email Anda langsung kembali.</p>', 0),
(16, '', 'footer-address', 'Footer Address', '<p><span>Hak Cipta 2010 Mitra Desain Team. All rights reserved</span><br /><span>Alamat: CV. Mitra Desain, Jl. Vila Bukit Tidar A2 041 Malang</span><br /><strong>Telp</strong><span>: 0341 576 477 Hp: 081 333 199 119, 081 333 991 883</span><br /><span>Email:&nbsp;</span><span class="email">mitra@desain@yahoo.com</span><span>,&nbsp;</span><span class="email">admin@mitradesain.com</span></p>', 0),
(20, 'Contact Us', 'Contact 1', 'Contact 11', '<p>Contact 111</p>', 0),
(21, '', 'hotline', 'Hotline', '<p><span>021 - 3377 9000</span><br /><span>0274 - 415 585</span><br /><span style="font-size: 11px;">sms 085741 444 520</span></p>', 0),
(22, 'Cara Pemesanan', 'no 1', 'Pilih paket website', '<p>Jika Anda membutuhkan website dengan spesifikasi yang profesional. Kami beberapa paket website yang sudah dirancang khusus memenuhi kebutuhan Anda. Misal Anda pedagang maka kami memiliki website toko online, jika Anda pengusaha maka kami memiliki website profil usaha, begitu juga dengan kebutuhan lain seperti website sekolah. website universitas. website portal berita, iklan baris. dll. Silahkan mellhat penjelasan product website yang kami miliki di halaman <span style="color: #ff6600;">Service</span>.</p>', 0),
(23, 'Cara Pemesanan', 'no 2', 'Menunggu Tagihan Website + Melakukan pembayaran DP', '<p>Setelah Anda memastikan ingin membuat website dengan spesifikasi sesuai kebutuhan Anda. silahkan isi <span style="color: #ff6600;">form pemesanan</span> website. Kemudian tunggu email tagihan DP dari team billing kami. Tagihan akan dikirim lewat Email dan SMS. Silahkan melakukan pembayaran ke salah satu no <span style="color: #ff6600;">rekening kami</span> dan melakukan <span style="color: #ff6600;">konfirmasi pembayaran</span>.</p>', 0),
(24, 'Cara Pemesanan', 'no 3', 'Mengirim Data', '<p><span>Setelah Anda melakukan konfirmasi pembayaran. maka kami akan mengirim permintaan data - data yang dibutuhkan untuk membuat website. kami akan pandu Anda menyiapkan data-data yang dibutuhkan. Data website seperti : profil usaha, contact us, product, dll. Sedangkan untuk design website, kami akan meminta Anda memilih design website yang kami miliki atau menunjukan sebuah referensi website yang Anda inginkan.</span></p>', 0),
(25, 'Cara Pemesanan', 'no 4', 'Proses Pengerjaan Website', '<p><span>Setelah data website dan konsep design kami terima, maka kami akan segera mengerjakan website Anda. Kami juga memberikan jadwal deadline. no hp programer. dan email programer untuk bisa Anda hubungi kapan saja. Sampai disini, kewajiban kami adalah mengerjakan website sesuai pesanan Anda. Sedangkan sampai proses ini. hal &mdash; hal yang bisa Anda lakukan adalah menunggu proses pengerjaan website team programer kami. Kami memberikan kesempatan revisi dalam pembuatan website sebanyak 2 kali.</span></p>', 0),
(26, 'Cara Pemesanan', 'no 5', 'Pelunasan dan Penyerahan Website', '<p><span>Setelah website jadi dan dilakukan revisi di tahap pengerjaan. maka kewajiban Anda adalah melakukan pelunasan kekurangan pembayaran website. Kami akan memberikan lagihan pelunasan website melaui SMS dan juga EMAIL. Jika website Anda sudah lunas, maka kami akan memberikan username dan password website. Anda bisa mengelola website. baik mengapdate artikel, menambah gambar menambah halaman, dan lain&mdash;lain. 100% website milik Anda.</span></p>', 0),
(27, 'Company Profile', 'no 4', 'Our Work', '<p>PT. Mitra Desain bekerja dengan prinsip service-oriented, selalu berusaha memahami kebutuhan dan kepentingan klien, mencari solusi dan ide-ide segar yang diaplikasikan dalam bentuk web design, strategi marketing dan rencana sistematis yang menguntungkan brand/bisnis klien.</p>', 0),
(28, 'Company Profile', 'no 5', 'Our Team', '<table border="0">\n<tbody>\n<tr>\n<td>Direktur&nbsp;&nbsp;&nbsp;&nbsp; Utama&nbsp;&nbsp;</td>\n<td>: Moch Wahib Dariyadi M.Pd</td>\n</tr>\n<tr>\n<td>Wakil Direktur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\n<td>\n<p>: Betric Feriandika S.Pd</p>\n</td>\n</tr>\n<tr>\n<td>Marketing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\n<td>: Naylul Maghfiroh</td>\n</tr>\n<tr>\n<td>Desainer &amp; Progammer</td>\n<td>: Faiqul Ihsan S.Kom</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>: Andi Galih Zulkarnain S.Sn</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>: Hery Santoso S.Kom</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>: Dendy Tri Indra Wijaya</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>: Umam</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>\n<p>: Ahmad Zidan</p>\n</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>: Eko Latif Hidayat</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>: Dyah</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>: Indra</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>: Rhomadhona</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>: Fahmi R</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>: Dina Rahma</td>\n</tr>\n</tbody>\n</table>', 0),
(29, 'Our Process', 'no 2', 'Design', '<p><span>Merancang strategi SEO &amp; SEM sesuai kepentingan bisnis Anda untuk mencapai potensi keuntungan yang diharapkan.</span></p>', 0),
(30, 'Our Process', 'no 3', 'Develop', '<p>Menciptakan sarana dan alat bantu pemasaran bisnis yang kreatif, unik dan bermutu untuk mengkomunikasikan bisnis dan brand Anda.</p>', 0),
(31, 'Our Process', 'no 4', 'Deliver', '<p><span>Kami hanya memberikan layanan kreatif yang bermutu. Kreativitas yang akan selalu diingat konsumen dan berdaya jual tinggi.</span></p>', 0),
(32, 'Why Choose', 'no 2', 'left', '<p>Dunia-Online bekerjasama dengan hosting server yang stabil.</p>', 0),
(33, 'Why Choose', 'no 3', 'left', '<p>Desain template menarik, unik dan mudah dikuasai pengunjung (user friendly).</p>', 0),
(34, 'Why Choose', 'no 4', 'left', '<p>First Impression adalah yang paling penting ketika pengunjung masuk ke website anda, dan kami memberikan website dengan tampilan yang profesional dan elegan sesuai bisnis anda.</p>', 0),
(35, 'Why Choose', 'no 5', 'right', '<p>Memberikan bantuan kepada klien dalam mengoperasikan situs.</p>', 0),
(36, 'Why Choose', 'no 6', 'right', '<p>Hasil desain dioptimasi lebih ringan &amp; menghemat bandwith server.</p>', 0),
(37, 'Why Choose', 'no 7', 'right', '<p>Desain template (tampilan grafis) original dan profesional disesuaikan dengan profil dan kebutuhan customer.</p>', 0),
(38, 'Why Choose', 'no 8', 'right', '<p>Garansi sistem. Setiap masalah dan kerusakan sistem yang terjadi pada website klien akan kami perbaiki tanpa biaya tambahan.</p>', 0),
(39, 'Payment', 'no 2', 'Transfer BNI', '<p>No Rek : 0132257978</p>\n<p>an: Moch Wahib Dariyadi</p>\n<p>Cab Univ. Negeri Malang</p>', 0),
(40, 'Payment', 'no 3', 'Transfer Mandiri', '<p>No Rek : 1440010419270</p>\n<p>an: Moch Wahib Dariyadi</p>\n<p>Cab. Wahid Hasyim Malang</p>', 0),
(41, 'Payment', 'no 4', 'Transfer Paypal', '<p>Account :</p>\n<p>mitradesain@yahoo.com</p>\n<p>Paypal.com</p>', 0),
(42, '', 'footer-info', 'Footer Info', '<p>Tertarik menggunakan layanan kami dan ingin berkonsultasi lebih lanjut?. Silahkan Menghubungi Kami atau add kami di Facebook.</p>', 0),
(43, '', 'footer-info', 'Footer Info', '<p>Tertarik menggunakan layanan kami dan ingin berkonsultasi lebih lanjut?. Silahkan Menghubungi Kami atau add kami di Facebook.</p>', 0),
(44, '', 'meta-keyword', 'Meta Keyword', '<p>jasa pembuatan website,pembuatan,website,toko online,company profile,sekolah,iklan,portal</p>', 0),
(45, '', 'meta-desc', 'Meta Description', '<p>Kami adalah jasa pembuatan website, seperti E-profile, toko online (online store), profile perusahaan (company profile), portal, iklan baris</p>', 0),
(46, '', 'meta-title', 'Meta Title', '<p>Mitra Desain -</p>', 0),
(47, 'Fitur Standart', '01 sfdomain', 'Gratis Nama Domain', '<p>1 tahun pendaftaran nama domain sebagai standar.</p>', 0),
(48, 'Fitur Standart', '02 sfvoucher', 'Gratis Google Adwords Voucher', '<p>GRATIS Google Adword voucher.</p>', 0),
(49, 'Fitur Standart', '03 sfhosting', '1 Tahun Hosting Gratis', '<p>Cepat, handal &amp; aman dikelola hosting selama 1 tahun.</p>', 0),
(50, 'Fitur Standart', '04 sfemail', 'Account Email Pribadi', '<p>Dapat diakses melalui webmail, POP3 dan IMAP koneksi. Sepenuhnya didukung oleh semua ponsel dan email client.</p>', 0),
(51, 'Fitur Standart', '05 sfsupport', 'Ahli Dukungan Teknis', '<p>Dukungan teknis dari orang-orang yang berpengalaman dengan tahun pengalaman dalam desain web &amp; layanan terkait pengelolaan.</p>', 0),
(52, 'Fitur Standart', '06 sfseo', 'Search Engine Optimisation & Submission', '<p>Bersih web desain kode dengan solid di tempat SEO dan registrasi / sitemap diserahkan kepada semua mesin pencari utama.</p>', 0),
(53, 'Fitur Standart', '07 sfstats', 'Pengunjung Statistik & Pemasaran Laporan', '<p>Cari tahu yang mengunjungi website Anda, kapan dan untuk berapa lama melalui integrasi Google Analytics.</p>', 0),
(54, 'Fitur Standart', '08 sflogo', 'Logo Desain & Branding', '<p>Desain logo gratis, disediakan di semua format utama siap pakai</p>', 0),
(55, 'Fitur Standart', '09 sfphoto', 'Professional Photography', '<p>Akses ke pilihan lebih dari profesional Foto fotografi, ilustrasi, video dan audio</p>', 0),
(56, 'Fitur Standart', '10 sfcms', 'Content Management', '<p>Mengelola konten Anda dari koneksi internet, tidak ada pengalaman teknis yang diperlukan &amp; tidak ada download atau menginstal</p>', 0),
(57, '', 'config-content-management', 'Content Management', '<p>Semua klien kami menikmati kemampuan untuk memperbarui isi situs Web mereka kapan pun mereka suka, secara gratis, selamanya ...</p>', 0),
(58, '', 'admin-email', 'Admin Email', '<p>Mitra &lt;her0satr@yahoo.com&gt;, Mitra &lt;her0satr@gmail.com&gt;</p>', 0),
(59, '', 'home-webdesain-old', 'Home Web Desain', '<h2>Website Design <span class="bluesixteen">Services</span></h2>\n<p>We understand that your online presence is the forefront of communicating your companies persona to an online audience. Our <strong>website developers</strong> have an in depth understanding of the constantly changing online landscape and the behaviours of Internet users. Our web design team have expert knowledge of <strong>search engine optimisation</strong> and <strong>search engine marketing</strong> as well as payment gateway options for our <a href="../../../e-commerce.php">online shop</a> developments. Your website design can be integrated with all leading <strong>social media </strong>applications. With Pom Design web design you have all the knowledge and expertise needed for an excellent online presence in one place, at an unbeatable price.</p>\n<div id="listleft">\n<ul class="poolist">\n<li>Custom, bespoke website design &amp; development</li>\n<li>No ongoing payments</li>\n<li>Content Management for ALL websites</li>\n<li>Logo design / branding</li>\n<li>Unlimited web design revisions</li>\n<li>Free hosting, updates and support</li>\n</ul>\n</div>\n<div id="listright">\n<ul class="poolist">\n<li>Free domain name</li>\n<li>Free professional stock photography</li>\n<li>Email accounts</li>\n<li>Website visitor statistics</li>\n<li>Search Engine Optimisation</li>\n<li>Expert technical support</li>\n</ul>\n</div>', 0),
(60, '', 'home-webdesain', 'Home Web Desain', '<h2><span class="bluesixteen">Layanan</span> Desain Website</h2>\n<p>Kami memahami bahwa kehadiran website online adalah garis depan mengkomunikasikan perusahaan Anda. Pengembang website memiliki pemahaman mendalam tentang terus perubahaan gaya komunikasi dan perilaku dari pengguna internet. Tim desain web kami memiliki pengetahuan ahli dalam optimasi mesin pencari dan pemasaran serta pilihan gateway pembayaran untuk pengembangan toko online kami. Desain website Anda dapat diintegrasikan dengan semua aplikasi media sosial terkemuka. Dengan Mitra Desain, Anda dapat memiliki semua pengetahuan dan keahlian yang diperlukan untuk kehadiran online yang sangat baik di satu tempat, dengan harga tak terkalahkan.</p>\n<div id="listleft">\n<ul class="poolist">\n<li>Kustom, desain website dipesan lebih dahulu &amp; pengembangan.</li>\n<li>Tidak ada pembayaran yang sedang berlangsung</li>\n<li>Content Management untuk semua situs</li>\n<li>Desain logo / merek</li>\n<li>Revisi desain web tak terbatas</li>\n<li>Hosting gratis, update dan dukungan</li>\n</ul>\n</div>\n<div id="listright">\n<ul class="poolist">\n<li>Nama domain gratis</li>\n<li>Gratis fotografi profesional</li>\n<li>Email account</li>\n<li>Situs statistik pengunjung</li>\n<li>Search Engine Optimisation</li>\n<li>Dukungan teknis ahli</li>\n</ul>\n</div>', 0),
(61, 'Testimony', 'no 1', 'Testimony', '<p>Bantuan dan dukungan website dari Mitra Desain telah sangat baik. Saya jauh dari melek IT tapi semuanya dengan jelas dan tidak ada terlalu banyak kesulitan. Saya kehilangan hitungan jumlah perubahan saya buat karena saya terus berubah pikiran.</p>\n<p>&nbsp;</p>\n<p>Saya pasti akan merekomendasikan untuk orang yang mencari sebuah perusahaan web design.</p>\n<p>&nbsp;</p>\n<p><span style="color: #ff6600;">Majalah Selangkah</span></p>', 0),
(62, 'Testimony', 'no 2', 'Testimony', '<p>Setelah mengambil keputusan untuk mendirikan bisnis sendiri itu penting bagi saya untuk menemukan orang-orang terbaik dengan harga yang tepat untuk membantu saya membuat situs web semua penting. Saya tidak bisa melakukan lebih baik daripada menemukan Mitra Desain. Saya melihat banyak desainer web dan memiliki kutipan dari orang-orang yang saya pikir punya kemampuan yang diperlukan dan bakat desain untuk memberikan apa yang saya cari.</p>\n<p><span style="color: #ff6600;">PT Taman Emas</span></p>', 0),
(63, 'Testimony', 'no 3', 'Testimony', '<p>Saya baru saja mendirikan sebuah bisnis Advser Keuangan baru dan meminta Mitra Desain untuk merancang website saya.</p>\n<p>&nbsp;</p>\n<p>Saya telah sepenuhnya puas dengan layanan dan timnya disediakan dan saya tidak bisa merekomendasikan mereka sangat cukup. Pertanyaan mereka sangat kompetitif. Saya pelanggan sangat senang.</p>\n<p>&nbsp;</p>\n<p><span style="color: #ff6600;">Armina Nurkarima</span></p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `display_type`
--

CREATE TABLE IF NOT EXISTS `display_type` (
  `display_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `display_type_name` varchar(50) NOT NULL,
  `display_type_order` tinyint(4) NOT NULL,
  PRIMARY KEY (`display_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `display_type`
--

INSERT INTO `display_type` (`display_type_id`, `display_type_name`, `display_type_order`) VALUES
(1, 'top', 1),
(2, 'tab', 2),
(3, 'column', 3),
(4, 'bottom', 4);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE IF NOT EXISTS `portofolio` (
  `portofolio_id` int(11) NOT NULL AUTO_INCREMENT,
  `portofolio_name` varchar(100) NOT NULL,
  `portofolio_title` varchar(255) NOT NULL,
  `portofolio_desc` varchar(255) NOT NULL,
  `portofolio_link` varchar(255) NOT NULL,
  `portofolio_image` varchar(255) NOT NULL,
  `portofolio_date` date NOT NULL,
  KEY `portofolio_id` (`portofolio_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`portofolio_id`, `portofolio_name`, `portofolio_title`, `portofolio_desc`, `portofolio_link`, `portofolio_image`, `portofolio_date`) VALUES
(2, '', 'Majalah Selangkah', '<p>Majalah Selangkah</p>\n<p>Link :&nbsp;<a href="http://www.majalahselangkah.com">www.majalahselangkah.com</a></p>\n<p>&nbsp;</p>', 'www.majalahselangkah.com', '2013/04/04/20130404_200026_8322.jpg', '2013-04-01'),
(3, '', 'Adipura Kencana', '<p>Adipura Kencana</p>\n<p>Link :&nbsp;<a href="http://www.adipurakencana.com/">www.adipurakencana.com</a></p>', 'www.adipurakencana.com', '2013/04/04/20130404_200233_3536.jpg', '2013-04-04'),
(4, '', 'LP Profesional Madani', '<p>LP Profesional Madani</p>\n<p>Link : www.lppmadani.com</p>', 'www.lppmadani.com', '2013/04/04/20130404_200330_3789.jpg', '2013-03-31'),
(5, '', 'JDID Luwu Utara', '<p>JDID Luwu Utara</p>', 'www.jdih-luwuutara.com', '2013/04/04/20130404_200556_6879.jpg', '2013-03-30'),
(6, '', 'PT Taman Emas', '<p>PT Taman Emas</p>\n<p>Link :&nbsp;tamanemas.com</p>', 'tamanemas.com', '2013/04/04/20130404_200930_5055.jpg', '2013-03-29'),
(7, '', 'Karya Utama Steel', '<p>Karya Utama Steel</p>', 'konstruksibajamurah.com', '2013/04/04/20130404_201052_6482.jpg', '2013-03-28'),
(8, '', 'PT Green Development', '<p>PT Green Development</p>', 'gdindonesia.com', '2013/04/04/20130404_201131_8692.jpg', '2013-03-27'),
(9, '', 'Kendepag Penajam Paser Utara', '<p>Kendepag Penajam Paser Utara</p>', 'jasapembuatanweb.co.id', '2013/04/04/20130404_201253_7658.jpg', '2013-03-26'),
(10, '', 'Website Armina Nurkarima', '<p>Website Armina Nurkarima</p>', '', '2013/04/04/20130404_201317_4773.jpg', '2013-03-25'),
(11, '', 'Pedas News Portal Berita Nasional', '<p>Pedas News Portal Berita Nasional</p>', '', '2013/04/04/20130404_202806_7771.jpg', '2013-03-24'),
(12, '', 'Website Lisanarabi', '<p>Website Lisanarabi</p>', '', '2013/04/04/20130404_202841_6231.jpg', '2013-03-23'),
(13, '', 'MAN Model Gorontalo', '<p>MAN Model Gorontalo</p>', '', '2013/04/04/20130404_202917_9507.jpg', '2013-03-22'),
(14, '', 'Website Ustad Zaki Mirza', '<p>Website Ustad Zaki Mirza</p>', '', '2013/04/04/20130404_203005_6896.jpg', '2013-03-21'),
(15, '', 'PT Mulia Investama', '<p>PT Mulia Investama</p>', '', '2013/04/04/20130404_203116_7953.jpg', '2013-03-20'),
(16, '', 'Kuroda Electric Indoensia', '<p>Kuroda Electric Indoensia</p>', '', '2013/04/04/20130404_203213_3269.jpg', '2013-03-19'),
(17, '', 'TV Beruang Kaltim', '<p>TV Beruang Kaltim</p>', '', '2013/04/04/20130404_203352_2824.jpg', '2013-03-18'),
(18, '', 'Berita Jawinews', '<p>Berita Jawinews</p>', '', '2013/04/04/20130404_203425_5426.jpg', '2013-03-17'),
(19, '', 'BKD Muara Enim', '<p>BKD Muara Enim</p>', '', '2013/04/04/20130404_203452_8586.jpg', '2013-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_desc` longtext NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_date` date NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_category_id`, `product_name`, `product_title`, `product_desc`, `product_image`, `product_date`) VALUES
(7, 2, 'company_profile', 'Company Profile', '<p style="text-align: left;">Website sudah bukan lagi barang yang mahal di era digital ini. Dengan web maka perusahaan Anda bisa dikenal oleh pengakses di seluruh dunia, dan akan meningkatkan citra profesionalisme perusahaan di mata mitra kerja Anda.</p>\n<p><!-- pagebreak --></p>\n<p>Layaknya kartu nama, web company profile adalah identitas online perusahaan Anda. Sehingga proyek ini harus benar-benar sempurna dalam pengerjaanya. Kami siap membantu Anda untuk membuat web company profile Anda dengan harga sangat terjangkau dan layanan prima.<br />Kami akan menyiapkan keperluan-keperluan anda mulai dari Domain, Hosting sampai Scripting dan anda tinggal menunggu hasilnya saja.</p>\n<p style="text-align: left;"><br />Produk ini merupakan perpaduan antara fungsionalitas dan fleksibilitas. Kami telah menggunakan CMS (Content Management System) Custom sendiri sehingga memudahkan anda dalam mengelola website.</p>\n<p style="text-align: left;">&nbsp;</p>\n<p style="text-align: left;"><span>Price :</span><span>&nbsp;<span style="text-decoration: line-through;">Rp 2.000.000,00</span></span></p>\n<p style="text-align: left;"><span>Price :&nbsp;Rp 1.500.000,00</span></p>', '2013/04/03/20130403_200455_8406.png', '2013-04-30'),
(8, 2, 'web_akademik', 'Web Akademik', '<p>Sistem Informasi Akademik merupakan sistem yang mengolah data dan melakukan proses kegiatan akademi yang melibatkan antara mahasiswa, dosen, administrasi akademik, keuangan dan data atribut lainnya.<br />Sistem informasi Akademik melakukan kegiatan proses administrasi mahasiswa dalam melakukan kegiatan administrasi akademik, melakukan proses pada transaksi belajar-mengajar antara dosen dan mahasiswa, melakukan proses administrasi akademi baik yang menyangkut kelengkapan dokumen dan biaya yang muncul pada kegiatan registrasi ataupun kegiatan operasional harian administrasi akademik.<br />Proses pengolahan data keuangan dilakukan setiap kali terjadi transaksi keuangan yang dilakukan oleh mahasiswa, sehingga pada proses ini Sistem Informasi Akademi dapat melakukan update untuk data mahasiswa. Beberapa bagian yang bersangkutan dengan modul keuangan dapat diintegrasikan dibawah Sistem Informasi Akademik, modul keuangan dapat berupa kegiatan transaksi akutansi ataupun kegiatan transaksi kepegawaian yang merupakan proses yang terjadi pada kegiatan di Universitas ataupun Akademik.</p>', '2013/04/03/20130403_200542_3472.png', '2013-04-03'),
(9, 0, 'web_e_commerce', 'Web E Commerce', '<p>Jasa pembuatan website toko online kami bertujuan untuk mendesain dan membuat website yang memungkinkan sebuah bisnis atau perusahaan untuk menjual produk atau jasa melalui internet kepada pelanggan secara online.<br />Support pengiriman indonesia seperti TIKI JNE, sehingga anda tidak perlu menghitung manual. pada proses order akan dicantumkan tarif pengiriman ke alamat yang dituju.<br />Paket CMS Shopping Cart sangat cocok untuk anda yang ingin memasarkan produk melalui media website. Anda dengan mudah bisa mengganti maupun menambah sendiri semua produk dan informasi dalam website anda.</p>', '2013/04/03/20130403_200603_9881.png', '2013-04-03'),
(10, 2, 'portal_news', 'Portal News', '<p>Website Portal News Kadangkala disebut dengan portal atau portal internet (internet portal). Di dalam dunia internet istilah ini dimaksudkan untuk website yang menyediakan beraneka ragam informasi untuk para pengunjungnya.<br />Salah satu contohnya adalah layanan yang disediakan oleh American Online, yang beralamat di http://www.aol.com/, dimana di situs ini tersedia beraneka ragam informasi, seperti: belanja secara online (e-Commerce), breaking news, dll. Sedangkan salah satu portal dari Indonesia adalah DetikCom (http://www.detik.com)<br />Web portal berita ini dibuat dengan Design khusus berita portal layaknya. Dengan segala kemudahan mengelolanya. Website media berita informasi ini dirancang untuk Anda dengan segala kemudahan dalam update berita-berita yang sangat user friendly, kami memberikan jaminan kemudahan dalam mengelola website media informasi ini untuk Anda dan dukungan teknis after sales yang handal selama jam kerja.</p>', '2013/04/03/20130403_200632_3837.png', '2013-04-03'),
(11, 0, 'web_lembaga', 'Web Lembaga', '<p>Tuntutan masyarakat terhadap mutu pelayanan dari waktu ke waktu makin tinggi. Seiring dengan perkembangan ilmu pengetahuan dan teknologi yang semakin pesat. Menyadari hal tersebut, Kita sebagai agen perubahan di masyarakat harus senantiasa melakukan perubahan sesuai dengan derap dinamika perkembangan masyarakat dalam perkembangan IPTEK. Pelayanan yang kita berikan pada masyarakat juga harus berkembang. Maka suatu yayasan atau lembaga selayaknya memiliki media informasi seperti website.<br />Website Lembaga adalah website yang dibangun untuk profil Lembaga atau yayasana yang Anda kelola. Anda dapat memberikan informasi seputar kegiatan dan aktifitas lembaga melalui media berbasis web ini. Dilengkapi fasilitas standar Website Lembaga, bagi Anda yang mengutamakan informatif dan user friendly.<br />Website Lembaga adalah Solusi tepat untuk mengenalkan lembaga anda kehalayak dan memudahkan masyarakat dalam pelayanan. Semua aktifitas dapat terpantau dengan bantuan website ini.</p>', '2013/04/03/20130403_200651_9021.png', '2013-04-03'),
(12, 0, 'web_komunitas', 'Web Komunitas', '<p>Buat anda yg ingin memiliki website berbasis forum gak perlu mahal kok, gak sampai jutaan Kami menyediakan jasa pembuatan website berbasis forum dengan harga terjangkau.</p>\n<p>&nbsp;</p>\n<p>Script forum yg kami support : <br />1. vBulletin (lisensi)<br />2. IPB (lisensi)<br />3. phpBB (free)<br />4. myBB (free)<br />5. Simple Machine Forum (SMF)(free)</p>\n<p>&nbsp;</p>\n<p><span style="text-decoration: line-through;">Price :&nbsp;Rp 2.000.000,00</span></p>\n<p>Price :&nbsp;Rp 1.500.000,00</p>', '2013/04/03/20130403_200713_7608.png', '2013-04-03'),
(13, 0, 'web_blog', 'Web Blog', '<p>Anda ingin membukukan tulisan anda dimedia website agar banyak orang yang membacanya. maka website ini sangat cocok.<br />Paket Web ini ditujukan untuk Anda yang ingin memiliki profil pribadi di internet atau company profile sederhana. Website ini ditunjang dengan halaman blog yang bisa berupa &ldquo;news&rdquo;, &ldquo;blog&rdquo;, atau &ldquo;updates&rdquo; dan bisa diupdate sesuai selera. Cara mengupdate juga cukup mudah, kami akan memandu Anda nantinya dengan mengirimkan artikel bantuan maupun video tutorial.<br />Personal Web / Personal Blog / Website Pribadi ( namaanda.com ) adalah sarana untuk mencurahkan tulisan dan ide-ide kreatif di internet, sebagai buku harian online anda, personal web juga sebagai media promosi anda di internet. Bahkan ketika anda aktif menulis sehingga visitor web anda sudah banyak, anda bisa berpenghasilan dari web anda tersebut.<br />Dewasa ini memiliki website pribadi merupakan langkah yang tepat untuk meningkatkan image pribadi anda di mata masyarakat internet dunia . Ide&mdash;ide kreatif anda bisa di nikmati oleh seluruh pengguna internet di dunia. Selain anda memiliki website anda juga mempunyai sebuah alamat email resmi dengan domain anda sendiri (info@namaanda.com).</p>', '2013/04/03/20130403_200731_5388.png', '2013-04-03'),
(14, 1, 'iklan_baris', 'Iklan Baris', '<p>Iklan baris adalah salah satu cara promosi barang dan jasa yang umumnya ditemukan di koran. Cara ini merupakan pengembangan dari promosi iklan yang mengutamakan daya tarik dengan gambar dan dengan informasi yang lebih lengkap dan terinci.<br />Website Iklan Baris merupakan media promosi online yang efektif. Selain itu dengan memiliki Website Iklan Baris, Anda bisa mempromosikan produk-produk Anda secara online di website Anda sendiri.<br />Website Iklan Baris selain berfungsi untuk mempromosikan produk sendiri juga dapat mempromosikan produk orang lain. Dengan fasilitas yang terdapat pada Website Iklan Baris yaitu Menu Pasang Iklan Premium, Pasang Banner, Pasang Iklan Link. Anda dapat menentukan tarif sendiri dari pengunjung website yang akan memasang iklan premium, iklan banner atau iklan link, otomatis akan menambah penghasilan pemilik Website Iklan Baris.</p>', '2013/04/03/20130403_201124_6703.png', '2013-04-03'),
(15, 0, 'reservasi_hotel', 'Reservasi Hotel', '<p>Reservasi Hotel Online sudah menjadi standar bagi dunia perhotelan saat ini. Dalam sistem reservasi online ini, hotel menyediakan sistem booking yang bisa diakses melalui jaringan internet, biasanya menyatu dengan website hotel sekalian, kemudian calon kastemer melakukan proses booking cukup dari rumah atau darimana saja melalui pengisian form-form yang tersedia secara online tersebut.<br />Kemudahan layanan seperti itu tentu akan berdampak pada peningkatan jumlah kastemer dari hotel itu sendiri. Hotel yang belum menerapkan sistem revervasi online sepertinya akan tertinggal oleh hotel-hotel lebih dulu menerapkannya.</p>', '2013/04/03/20130403_201144_2016.png', '2013-04-03'),
(16, 0, 'jejaring_sosial', 'Jejaring Sosial', '<p>Website bebrbasis komunitas yang saat ini sangat populer dimayarakat seperti FaceBook dan Tweeter memudahkan dalam melakukan komunikasi, relasi antar sesama dan kelompok.</p>\n<p><br />Web komunitas memberikan berbagai fasilitas menarik untuk berbagi dalam suatu komunitas. Sangat baik untuk badan Organisasi, Sekolah maupun kalangan usaha yang menginginkan membentuk suatu wadah komunikasi.</p>\n<p>&nbsp;</p>\n<p><span style="text-decoration: line-through;">Price :&nbsp;Rp 2.000.000,00</span></p>\n<p>Price :&nbsp;Rp 1.500.000,00</p>', '2013/04/03/20130403_201244_2643.png', '2013-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `product_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`product_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `product_category_name`) VALUES
(1, 'new'),
(2, 'top');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE IF NOT EXISTS `product_detail` (
  `product_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `display_type_id` int(11) NOT NULL,
  `product_detail_title` varchar(100) NOT NULL,
  `product_detail_desc` longtext NOT NULL,
  `order_no` int(11) NOT NULL,
  PRIMARY KEY (`product_detail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`product_detail_id`, `product_id`, `display_type_id`, `product_detail_title`, `product_detail_desc`, `order_no`) VALUES
(1, 0, 0, '', '', 0),
(4, 7, 2, '1 Page', '<h1><span class="blue">1 Page Website</span> &pound;295</h1>\n<p>Our basic web design package. One page bespoke website design including all our standard features at no extra cost.:</p>\n<ul>\n<li>Entirely bespoke web designs, no templates used</li>\n<li>Unlimited design concepts and revisions</li>\n<li>Spam protected contact / enquiry forms</li>\n<li>Integration with Facebook, Twitter and other social networking websites</li>\n<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>\n<li>Free selection of millions of professional photographs</li>\n<li>Expandable websites</li>\n</ul>\n<ul>\n<li>Free hosting</li>\n<li>Free domain name</li>\n<li>Logo design</li>\n<li>On-site Search Engine Optimsation</li>\n<li>Expert technical support</li>\n<li>Free extensive content management</li>\n<li>Animation and user interaction</li>\n<li>Advanced JavaScript functionality</li>\n<li>Image galleries</li>\n<li>Embedded video support</li>\n<li>Audio player support</li>\n</ul>', 1),
(3, 7, 1, 'Website and Ecommerce Design Prices', '<p><img style="float: right;" src="http://localhost:8666/mitradesain/trunk/static/image/pricematch.png" alt="" width="210" height="167" /></p>\n<p>We have developed over four thousand website''s for clients from all sectors, industries and locations around the world.</p>\n<p>&nbsp;</p>\n<p>Here you will find a small selection of our web designs from standard brochure web sites to eCommerce solutions, online shops and bespoke web applications.</p>\n<p><br /><span style="font-size: medium;">Select a website specification from the tabs below for more information.</span></p>', 1),
(5, 7, 4, 'Interested?', '<p><span>If you would like to speak to one of our experts about your project please&nbsp;</span><span style="color: #ff6600;">click here to request an online website quotation</span>.</p>', 1),
(6, 7, 3, 'We Love Social Media', '<p>We can fully integrate your social media accounts into your website, for no extra cost.</p>\n<p>&nbsp;</p>\n<p><img src="http://localhost:8666/mitradesain/trunk/static/upload/social-media.png" alt="" /></p>', 1),
(7, 7, 3, 'FREE Google Adwords', '<p><img src="http://localhost:8666/mitradesain/trunk/static/upload/google-adwords-logo.gif" alt="Free Google AdWords vouchers with every web design" /></p>\n<p>We offer &pound;50 of FREE Google Adwords vouchers with every sale</p>', 2),
(8, 7, 3, 'Integrated Blog', '<div class="extras">\n<p>Add a fully integrated, custom designed blog to your website and keep your client up to date whilst boosting your SEO.</p>\n<p>&nbsp;</p>\n<p><span style="color: #ff6600; font-size: x-large;">&pound;150</span>&nbsp;<em>(save &pound;299)</em></p>\n</div>', 3),
(9, 7, 3, 'Advanced Gallery', '<p>Present your images with impact and take control via a custom built management system</p>\n<p>&nbsp;</p>\n<p><span style="color: #ff6600; font-size: x-large;">&pound;125</span>&nbsp;<em>(save &pound;125)</em></p>', 4),
(10, 7, 2, '2-4 Pages', '<h1><span class="blue">2-4 Page Website</span> &pound;395</h1>\n<p>Our 2-4 page website''s are ideal for start up businesses taking their first steps towards establishing an online identity. They all our standard features at no extra cost.</p>\n<ul>\n<li>Entirely bespoke web designs, no templates used</li>\n<li>Unlimited design concepts and revisions</li>\n<li>Spam protected contact / enquiry forms</li>\n<li>Integration with Facebook, Twitter and other social networking websites</li>\n<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>\n<li>Free selection of millions of professional photographs</li>\n<li>Expandable websites</li>\n</ul>\n<ul>\n<li>Free hosting</li>\n<li>Free domain name</li>\n<li>Logo design</li>\n<li>On-site Search Engine Optimsation</li>\n<li>Expert technical support</li>\n<li>Free extensive content management</li>\n<li>Animation and user interaction</li>\n<li>Advanced JavaScript functionality</li>\n<li>Image galleries</li>\n<li>Embedded video support</li>\n<li>Audio player support</li>\n</ul>', 2),
(11, 7, 2, '5-8 Pages', '<h1><span class="blue">5-8 Page Website</span> &pound;525</h1>\n<p>The 5-8 page brochure package enables you to advertise your services in more depth and detail. They $this-&gt;load-&gt;view( all our standard features at no extra cost.</p>\n<ul>\n<li>Entirely bespoke web designs, no templates used</li>\n<li>Unlimited design concepts and revisions</li>\n<li>Spam protected contact / enquiry forms</li>\n<li>Integration with Facebook, Twitter and other social networking websites</li>\n<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>\n<li>Free selection of millions of professional photographs</li>\n<li>Expandable websites</li>\n</ul>\n<ul>\n<li>Free hosting</li>\n<li>Free domain name</li>\n<li>Logo design</li>\n<li>On-site Search Engine Optimsation</li>\n<li>Expert technical support</li>\n<li>Free extensive content management</li>\n<li>Animation and user interaction</li>\n<li>Advanced JavaScript functionality</li>\n<li>Image galleries</li>\n<li>Embedded video support</li>\n<li>Audio player support</li>\n</ul>', 3),
(12, 7, 2, '9-12 Pages', '<h1><span class="blue">9-12 Page Website</span> &pound;625</h1>\n<p>Expand your site to 9-12 pages and take the opportunity to maximise your online sales and enquiries. Ideal for well established companies looking to advertise their services online through a professional, eye catching website. Our 9-12 page website''s $this-&gt;load-&gt;view( all our standard features at no extra cost.</p>\n<ul>\n<li>Entirely bespoke web designs, no templates used</li>\n<li>Unlimited design concepts and revisions</li>\n<li>Spam protected contact / enquiry forms</li>\n<li>Integration with Facebook, Twitter and other social networking websites</li>\n<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>\n<li>Free selection of millions of professional photographs</li>\n<li>Expandable websites</li>\n</ul>\n<ul>\n<li>Free hosting</li>\n<li>Free domain name</li>\n<li>Logo design</li>\n<li>On-site Search Engine Optimsation</li>\n<li>Expert technical support</li>\n<li>Free extensive content management</li>\n<li>Animation and user interaction</li>\n<li>Advanced JavaScript functionality</li>\n<li>Image galleries</li>\n<li>Embedded video support</li>\n<li>Audio player support</li>\n</ul>', 4),
(13, 7, 2, 'Premium Online Store', '<h1><span class="blue">Premium Online Store</span> &pound;975</h1>\n<p>Start trading online from only &pound;975 and enjoy a fully admin controlled, unlimited eCommerce package.</p>\n<p>&nbsp;</p>\n<h3 class="blueunder">Stock, Customer &amp; Order Management</h3>\n<ul>\n<li>Support for unlimited products.</li>\n<li>Support for unlimited categories and sub-categories.</li>\n<li>Ability to move, copy and mirror products across multiple locations.</li>\n<li>Best sellers, sales and special offer sections</li>\n<li>Brand management / categorisation</li>\n<li>Create product attributes such as size and colour with unique prices if required.</li>\n<li>Media gallery for all products supporting unlimited photographs and embedded videos</li>\n<li>Auto-resize product images including full screen popup and "zoom" function.</li>\n<li>Stock control offering various options for when stock levels reach zero (item can be purchased, item remains on site but cannot be purchased, item is temporarily disabled on the site).</li>\n<li>Low-stock alert system notifying you when stock of any product breaches a preset limit.</li>\n<li>Orders console allowing the management of orders received between numerous defined areas such as New, Dispatched and Archived.</li>\n<li>Export all customer data to CSV / Excel format</li>\n<li>Export all order data to CSV / Excel format</li>\n<li>Ability to manage customer reviews incorporating functionality to review, approve and decline submissions.</li>\n</ul>\n<h3 class="blueunder">Checkout / Postage Options</h3>\n<ul>\n<li>Support for shipping tariffs based on weight, price and quantity bands</li>\n<li>Free postage levels</li>\n<li>Support for postage options across defined zones such as UK, Europe and the rest of the world.</li>\n<li>Ability to define shipping types such as next day delivery, standard delivery, airsure etc...</li>\n<li>Option to checkout without creating account as well as logging in or creating a new account.</li>\n<li>Submit additional information on checkout</li>\n<li>"Gift wrapping" option for each product</li>\n<li>Integration with any payment gateway including but not limited to Sagepay, PayPal, Worldpay, Barclays, HSBC, PaymentSense, Secure Trading and many more.</li>\n</ul>\n<h3 class="blueunder">Product Search &amp; Filter</h3>\n<ul>\n<li>Find products by keyword, category, brand.</li>\n<li>Filter products by price, brand, colour, size etc...</li>\n<li>Sort results by price and number of results per page</li>\n</ul>\n<h3 class="blueunder">Product Display Features</h3>\n<ul>\n<li>Bespoke video / photo gallery including pop-ups and zoom functions.</li>\n<li>"Send to a friend" feature</li>\n<li>"Save for later" feature</li>\n<li>Related products / customers who bought X also bought Y.</li>\n<li>Customer reviews / rating system</li>\n</ul>\n<h3 class="blueunder">Customer Accounts</h3>\n<ul>\n<li>View saved products / wish list</li>\n<li>Previous order history</li>\n<li>Manage delivery / shipping address book</li>\n<li>Update password / password reminder system</li>\n</ul>\n<h3 class="blueunder">Other Features</h3>\n<ul>\n<li>Discount code / coupon module. Create coupons of fixed or percentage values and apply them to your entire range or just certain product, categories and users. Set start and end dates, minimum sub-total order values and number of uses per customer.</li>\n<li>Banner management to display your adverts or those of affiliate / paid advertisers.</li>\n<li>HTML Newsletter system for sending updates and offers to registered users</li>\n<li>HTML, branded emails triggered on events such as orders being placed, password reminders, order status updates and account creation</li>\n<li>Invoice created for each order and emailed to customer</li>\n<li>Support for informational pages such as About us, FAQ, Terms and Conditions etc... Includes administration functionality to manage content whenever required.</li>\n<li>Generic product / site gallery</li>\n<li>Self generating product, category and page sitemap</li>\n</ul>\n<h3 class="blueunder">Optional Extras</h3>\n<ul>\n<li>Blog system seamlessly integrated into your bespoke design.</li>\n<li>Wholesale accounts offering unique pricing system and minimum quantity limits.</li>\n</ul>\n<p>&nbsp;</p>\n<p>Alternatively please contact us or complete the form on the right hand side of this page.</p>', 5),
(14, 7, 2, 'eShopper', '<h1><span class="blue">eShopper</span> &pound;699</h1>\n<p>Our eShopper solution allows you to sell your products / virtual items via your website cost-effectively and easily through PayPal. This solution is ideal for those customers with a small, fixed range of products.</p>\n<p>&nbsp;</p>\n<h3 class="blueunder">Products / Features</h3>\n<ul>\n<li>Up to 10 products (more $this-&gt;load-&gt;view(d at additional cost)</li>\n<li>Allow customers to select from product variants such as size and colour</li>\n<li>Unlimited images and videos to support each product</li>\n<li>Unlimited supporting text and documents</li>\n</ul>\n<h3 class="blueunder">Checkout Process</h3>\n<ul>\n<li>Secure cart and checkout via PayPal</li>\n<li>Email notifications to you and the customer once payment is made</li>\n<li>Options for VAT and postage charges</li>\n</ul>', 6),
(15, 7, 2, 'Estate Agents / Property', '<h1><span class="blue">Property Rentals &amp; Sales / Estate Agency</span> &pound;1250</h1>\n<p>Our property listing developments are bursting with functionality, enabling your customers to easily locate and enquire about properties and you and your agents to manage properties from user friendly control panels. Our highly competitive prices start from &pound;1250 and $this-&gt;load-&gt;view( all our standard features along with additional functionality for the managing of properties and customer enquiries.</p>\n<ul>\n<li>Full property search / filtering system for your customers</li>\n<li>"Property Shortlist" feature for your visitors</li>\n<li>Support for unlimited properties to be added to the site</li>\n<li>Google Maps &amp; Street View integration</li>\n<li>Unlimited photo gallery for each property added</li>\n<li>Property downloads (floor plans etc...)</li>\n<li>On-page, spam protected enquiry forms for each property</li>\n<li>Entirely bespoke web designs, no templates used</li>\n<li>Unlimited design concepts and revisions</li>\n<li>Integration with Facebook, Twitter and other social networking websites</li>\n<li>Optional integration with property portals such as Rightmove and Primelocation</li>\n<li>Support for integration with property management software such as CFP and Gemini.</li>\n</ul>\n<ul>\n<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>\n<li>Free selection of millions of professional photographs</li>\n<li>Expandable websites</li>\n<li>Free hosting</li>\n<li>Free domain name</li>\n<li>Logo design</li>\n<li>On-site Search Engine Optimsation</li>\n<li>Expert technical support</li>\n<li>Free extensive content management</li>\n<li>Animation and user interaction</li>\n<li>Advanced JavaScript functionality</li>\n<li>Image galleries</li>\n<li>Embedded video support</li>\n<li>Audio player support</li>\n</ul>', 7),
(16, 7, 2, 'Blog', '<h1><span class="blue">Blog</span> &pound;395</h1>\n<p>Whether you already have a website and are seeking new way to engage your visitors, or are seeking a platform from which to tell the world about your products, services or opinions, our blogging system will arm you with all the tools you need.</p>\n<ul>\n<li>Create unlimited articles and organise by your own system of categories, tags and dates.</li>\n<li>Automated article archiving</li>\n<li>Reader commenting facility including account system</li>\n<li>Article voting / polls</li>\n<li>Audio / Video Embedding</li>\n<li>Keyword search tools</li>\n<li>Unlimited pages</li>\n<li>RSS feeds<br />And much more...</li>\n<li>Entirely bespoke web designs, no templates used</li>\n<li>Unlimited design concepts and revisions</li>\n<li>Spam protected contact / enquiry forms</li>\n<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>\n</ul>\n<ul>\n<li>Integration with Facebook, Twitter and other social networking websites.</li>\n<li>Post automatically to Facebook and Twitter every time you create a new blog post</li>\n<li>Free hosting</li>\n<li>Free domain name</li>\n<li>Logo design</li>\n<li>On-site Search Engine Optimsation</li>\n<li>Expert technical support</li>\n<li>Free extensive content management</li>\n<li>Animation and user interaction</li>\n<li>Advanced JavaScript functionality</li>\n<li>Image galleries</li>\n<li>Free selection of millions of professional photographs</li>\n<li>Expandable websites</li>\n</ul>', 8),
(17, 7, 2, 'Email Marketing', '<h1><span class="blue">Email Marketing</span> <em>from </em>&pound;0.03 p/recipient</h1>\n<p>Reach thousands of your customers instantly with our email marketing campaigns.</p>\n<p>&nbsp;</p>\n<p>Newsletter and email marketing campaigns are a proven way to reach new customers and stay in touch with existing ones, but can take hours or even days of your time in creating attractive newsletters and managing the campaigns. This is where we can help.</p>\n<p>&nbsp;</p>\n<p>We are able to create attractive and eye catching email newsletters and handle the sending to your client base, all you need are customer email addresses.</p>\n<p>&nbsp;</p>\n<p>Not only will we create the newsletter for your business and send it to your customer database, we will also supply feedback and reports including:</p>\n<ul class="full">\n<li>Who opened your email</li>\n<li>Who clicked what link, when and how many times</li>\n<li>Who subscribed / unsubscribed</li>\n<li>Who forwarded your email to a friend</li>\n<li>Bounce and spam rates</li>\n<li>And much more...</li>\n</ul>\n<div class="clear">&nbsp;</div>\n<p>In letting us handle your email campaign it takes the load away from your business allowing you to concentrate on other areas, and most importantly removes any risk of being blacklisted by spam lists - leaving it to be professionally managed and maintained by our service. You can even select send HTML and simple text based emails within each campaign in allow greater exposure to customers using mobile devices and other text based email clients.</p>\n<p>&nbsp;</p>\n<p>As a customer you will receive your own unique login from which you can chose to mange your campaigns entirely by yourself if you prefer. Some of the features $this-&gt;load-&gt;view(d are:</p>\n<ul class="full">\n<li>Start your own campaigns, use one of the templates we have created for you (or ask us to create you a new one), edit the content and send your newsletter.</li>\n<li>Define the campaign start date - set the newsletter to send whenever you like in the future.</li>\n<li>View extensive live reports and user feedback</li>\n<li>Update your customer email list manually and mass update it by uploading an excel / CSV file.</li>\n<li>Before you send your newsletter you have the option to preview it to selected email addresses and even view examples of how it will look in 15 different email clients such as Outlook, Outlook Express and Apple Mail.</li>\n</ul>\n<div class="clear">&nbsp;</div>\n<p>Prices are based around a tariff of &pound;10 per campaign and 3p per recipient, allowing you to reach a customer base of 3000 for only &pound;95.</p>\n<p>&nbsp;</p>\n<p>If you are interested in learning more about our email campaign service please contact us by email on info@pomdesign.com or by telephone on 0845 2577 187</p>\n<p>&nbsp;</p>', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_display` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_display`, `user_email`) VALUES
(1, 'admin', 'a505b4c81cbd313d706d88c54505c43b', 'Admin', ''),
(6, 'satu', '9ba4b8b01746a825e8454e2e1cead9e2', 'satu', 'satu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
