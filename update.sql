ALTER TABLE  `portofolio` ADD  `portofolio_name` VARCHAR( 100 ) NOT NULL AFTER  `portofolio_id`;



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

INSERT INTO `config` (`config_id`, `config_category`, `config_name`, `config_title`, `config_content`, `config_hide`) VALUES
(39, 'Payment', 'no 2', 'Transfer BNI', '<p>No Rek : 0132257978</p>\n<p>an: Moch Wahib Dariyadi</p>\n<p>Cab Univ. Negeri Malang</p>', 0),
(40, 'Payment', 'no 3', 'Transfer Mandiri', '<p>No Rek : 1440010419270</p>\n<p>an: Moch Wahib Dariyadi</p>\n<p>Cab. Wahid Hasyim Malang</p>', 0),
(41, 'Payment', 'no 4', 'Transfer Paypal', '<p>Account :</p>\n<p>mitradesain@yahoo.com</p>\n<p>Paypal.com</p>', 0),
(42, '', 'footer-info', 'Footer Info', '<p>Tertarik menggunakan layanan kami dan ingin berkonsultasi lebih lanjut?. Silahkan Menghubungi Kami atau add kami di Facebook.</p>', 0),
(43, '', 'meta-keyword', 'Meta Keyword', '<p>jasa pembuatan website,pembuatan,website,toko online,company profile,sekolah,iklan,portal</p>', 0),
(44, '', 'meta-desc', 'Meta Description', '<p>Kami adalah jasa pembuatan website, seperti E-profile, toko online (online store), profile perusahaan (company profile), portal, iklan baris</p>', 0),
(45, '', 'meta-title', 'Meta Title', '<p>Mitra Desain -</p>', 0);