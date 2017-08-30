-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 02:51 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sehari3`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `idcategory` int(10) unsigned NOT NULL,
  `title` varchar(80) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT 'web',
  `edit_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_by` varchar(80) COLLATE utf8_bin DEFAULT 'web'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idcategory`, `title`, `description`, `add_date`, `added_by`, `edit_date`, `edited_by`) VALUES
(1, 'Kampus', 'Berita Seputar Universitas Potensi Utama', '2015-08-02 07:12:51', 'system', '0000-00-00 00:00:00', 'system'),
(2, 'Nasional', 'Berita Indonesia', '2015-08-02 07:13:10', 'system', '0000-00-00 00:00:00', 'system'),
(3, 'Teknologi', 'Seputar Dunia Teknologi', '2015-08-02 07:13:34', 'System', '0000-00-00 00:00:00', 'System'),
(4, 'Seni & Budaya', 'What''s going on out there?', '2015-08-02 07:13:51', 'System', '0000-00-00 00:00:00', 'System'),
(5, 'Ekomomi & Bisnis', '', '2017-07-25 19:28:53', 'System', '0000-00-00 00:00:00', 'System');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `idpost` int(10) unsigned NOT NULL,
  `iduser` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `body` text COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `seotag` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` enum('post','page') COLLATE utf8_bin NOT NULL,
  `status` enum('publish','draft') COLLATE utf8_bin NOT NULL,
  `view` int(225) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT 'web',
  `edit_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_by` varchar(80) COLLATE utf8_bin DEFAULT 'web'
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`idpost`, `iduser`, `title`, `body`, `image`, `seotag`, `type`, `status`, `view`, `add_date`, `added_by`, `edit_date`, `edited_by`) VALUES
(25, 1, 'Pakar Kecerdasan Buatan Meminta PBB Melarang Penggunaan Robot Perang', 'Tokoh dan penggerak kecerdasan buatan lintas sektor melayangkan sebuah petisi kepada Perserikatan Bangsa Bangsa (PBB) untuk melarang penggunaan senjata otonom mematikan yang dikenal juga dengan ‘robot pembunuh’\r\n\r\nPetisi yang ikut ditandatangani oleh Elon Musk tersebut mengatakan pengembangan teknologi tersebut akan menggulirkan revolusi ketiga dalam persenjataan yang dapat menyamai penemuan bubuk mesiu dan senjata nuklir.\r\n\r\n“Sekali saja dikembangkan, (senjata otonom) akan memungkinkan konflik bersenjata tereskalasi hingga ke tingkatan yang sangat hebat dalam rentang waktu yang sulit dibayangkan manusia,” tulis petisi tersebut. “Senjata ini dapat dijadikan alat teror, yang digunakan pemimpin lalim dan teroris untuk menghabisi masyarakat tak berdosa, atau dihack untuk disalahgunakan.”\r\n\r\nTercatat ada 116 pendiri perusahaan kecerdasan buatan dan robotika dari 26 negara yang menandatangani petisi yang dipublikasikan akhir pekan lalu menjelang International Joint Conference on Artificial Intelligence (IJCAI) yang dilansir oleh The Verge \r\n\r\nPengiriman petisi dimaksudkan untuk mendorong keseriusan 123 negara di PBB untuk memberlakukan pelarangan dalam lanjutan diskusi yang mulai berkat petisi serupa pada tahun 2015.\r\n\r\nPara penandatangan menyatakan perlu segera diambil tindakan.\r\n\r\n“Ini bukan lagi skenario hipotetis, namun sebuah ancaman yang sangat mendesak yang harus secepatnya ditindaklanjuti,” jelas Ryan Gariepy, pendiri Clearpath Robotics kepada media.\r\n\r\n“Kita tidak boleh lalai kepada kenyataan bahwa meskipun masih banyak implementasi dari kecerdasan buatan masih berada di ranah sains fiksi, sistem senjata otonom telah sangat mendekati kematangan dan mempunyai potensi nyata untuk menyebabkan kesengsaraan bagi orang-orang akibat kekacauan global,” tambahnya.\r\n\r\nBeberapa negara yang tercatat mengembangkan senjata otonom mematikan di antaranya AS, China, Russia, dan Israel.\r\n\r\nPihak pendukung senjata otonom berdalih bahwa teknologi ini dapat mengurangi jumlah korban jiwa dalam perang, dan akan lebih mampu membedakan antara warga sipil dengan pihak tentara musuh.\r\n\r\nNamun pihak kontra mengatakan sikap ini hanya akan berujung kepada penggunaan yang lebih sering dari senjata tersebut, sambil menyebutkan betapa seringnya AS menggunakan pesawat nirawak untuk menyerang Timur Tengah. \r\n\r\nPada tahun 2016 saja, rezim Obama melepaskan bom hingga 26171 kali menggunakan pesawat nirawak.\r\n\r\nUntuk sekarang, nampaknya tak ada satu negara pun yang sudi memperlambat pengembangan senjata mereka karena takut negara lain akan mengungguli.\r\n\r\nPerlombaan senjata seperti inilah yang tidak diinginkan oleh para ahli kecerdasan buatan dan robotika tersebut. \r\n\r\nSeperti yang mereka katakan di petisi,” Kita tidak punya banyak waktu. Sekali saja kotak Pandora ini terbuka, akan sangat sulit untuk menutupnya kembali.”', 'a9db964b911d0db7321514e8b66d849b.gif', 'robot', 'post', 'publish', 1, '2017-08-22 13:41:27', 'web', '0000-00-00 00:00:00', 'web'),
(26, 1, 'Jadwal Pengumpulan Terakhir Skripsi', 'Tokoh dan penggerak kecerdasan buatan lintas sektor melayangkan sebuah petisi kepada Perserikatan Bangsa Bangsa (PBB) untuk melarang penggunaan senjata otonom mematikan yang dikenal juga dengan ‘robot pembunuh’\r\n\r\nPetisi yang ikut ditandatangani oleh Elon Musk tersebut mengatakan pengembangan teknologi tersebut akan menggulirkan revolusi ketiga dalam persenjataan yang dapat menyamai penemuan bubuk mesiu dan senjata nuklir.\r\n\r\n“Sekali saja dikembangkan, (senjata otonom) akan memungkinkan konflik bersenjata tereskalasi hingga ke tingkatan yang sangat hebat dalam rentang waktu yang sulit dibayangkan manusia,” tulis petisi tersebut. “Senjata ini dapat dijadikan alat teror, yang digunakan pemimpin lalim dan teroris untuk menghabisi masyarakat tak berdosa, atau dihack untuk disalahgunakan.”\r\n\r\nTercatat ada 116 pendiri perusahaan kecerdasan buatan dan robotika dari 26 negara yang menandatangani petisi yang dipublikasikan akhir pekan lalu menjelang International Joint Conference on Artificial Intelligence (IJCAI) yang dilansir oleh The Verge \r\n\r\nPengiriman petisi dimaksudkan untuk mendorong keseriusan 123 negara di PBB untuk memberlakukan pelarangan dalam lanjutan diskusi yang mulai berkat petisi serupa pada tahun 2015.\r\n\r\nPara penandatangan menyatakan perlu segera diambil tindakan.\r\n\r\n“Ini bukan lagi skenario hipotetis, namun sebuah ancaman yang sangat mendesak yang harus secepatnya ditindaklanjuti,” jelas Ryan Gariepy, pendiri Clearpath Robotics kepada media.\r\n\r\n“Kita tidak boleh lalai kepada kenyataan bahwa meskipun masih banyak implementasi dari kecerdasan buatan masih berada di ranah sains fiksi, sistem senjata otonom telah sangat mendekati kematangan dan mempunyai potensi nyata untuk menyebabkan kesengsaraan bagi orang-orang akibat kekacauan global,” tambahnya.\r\n\r\nBeberapa negara yang tercatat mengembangkan senjata otonom mematikan di antaranya AS, China, Russia, dan Israel.\r\n\r\nPihak pendukung senjata otonom berdalih bahwa teknologi ini dapat mengurangi jumlah korban jiwa dalam perang, dan akan lebih mampu membedakan antara warga sipil dengan pihak tentara musuh.\r\n\r\nNamun pihak kontra mengatakan sikap ini hanya akan berujung kepada penggunaan yang lebih sering dari senjata tersebut, sambil menyebutkan betapa seringnya AS menggunakan pesawat nirawak untuk menyerang Timur Tengah. \r\n\r\nPada tahun 2016 saja, rezim Obama melepaskan bom hingga 26171 kali menggunakan pesawat nirawak.\r\n\r\nUntuk sekarang, nampaknya tak ada satu negara pun yang sudi memperlambat pengembangan senjata mereka karena takut negara lain akan mengungguli.\r\n\r\nPerlombaan senjata seperti inilah yang tidak diinginkan oleh para ahli kecerdasan buatan dan robotika tersebut. \r\n\r\nSeperti yang mereka katakan di petisi,” Kita tidak punya banyak waktu. Sekali saja kotak Pandora ini terbuka, akan sangat sulit untuk menutupnya kembali.”', 'c6a45dd6ec0ae1bd3cd815f86c4f85e2.gif', 'terakhir', 'post', 'publish', 1, '2017-08-22 13:43:46', 'web', '0000-00-00 00:00:00', 'web'),
(27, 1, 'ESQ Leadership Training Mahasiswa', 'Itu pasti, karena kamu akan mengalami banyak hal didalamnya. Kamu akan diajak menjelajah tata surya untuk mengetahui bagaimana alam tercipta serta mengenal galaksi selain Bima sakti tempat planet bumi berada. kamu juga akan diajak untuk menyelami diri kamu sendiri untuk menyadari siapa penciptamu, untuk apa kamu diciptakan, lalu apa misi serta tugas yang harus kamu laksanakan selama kamu hidup.\r\n\r\nPenasaran ???so pasti dengan mengikuti Training ESQ sebagian dari misteri kehidupan yang mengagumkan ini akan kehidupan yang mengagumkan ini akan terjawab.Kelar mengikuti training kamu akan mengalami banya perubahan dalam berfikir dan bertindak. memiliki semangat hidup yang baru dan menjadi seseorang yang visioner, yang memiliki visi jauh kedepan dalam menata kehidupan.\r\n\r\nSound cool to you???? bagi mahasiswa baru Universitas Potensi Utama TA.2007/2008 kamu-kamu akan mendapat kesempatan untuk mengikuti training ESQ.\r\n\r\nBingung masalah biaya..?? gak perlu risau, karena biaya training sebagiannya akan disubsidi oleh Yayasan  Potensi Utama Medan dan sisanya dapat kamu cicil setiap bulannya.\r\n\r\nSemoga kelak nantinya tamatan dari Universitas Potensi Utama dapat menggabungkan kecerdasan intelektual, emosional dan spiritual, serta menjadikan kita sebagai manusia yang paripurna!', '0437f6915488b4a1a05801b2d57a929e.gif', 'esq-leadership-training-mahasiswa', 'post', 'publish', 0, '2017-08-23 07:01:49', 'web', '0000-00-00 00:00:00', 'web'),
(28, 1, 'Universitas Potensi Utama Masih Berhak Memegang Sertifikat ISO 9001:2008', 'Mempertahankan komitmen terhadap ISO 9001:2008 tidak semudah membalikkan telapak tangan, berbagai usaha dan kerja keras telah dilakukan oleh seluruh Manajemen di Universitas Potensi Utama. Semangat mereka tak pernah berhenti hingga detik ini. Setelah berhasil memperoleh sertifikat ISO 9001:2008 untuk Implementasi Sistem Manajemen Mutu (SMM) dari TUVRheinland-Germany pada tanggal 10 Februari 2009, maka seluruh manajemen selalu mendokumentasikan hasil kerja sesuai dengan klausul-klausul (aturan) yang berlaku pada ISO 9001:2008.\r\n\r\nTUVRheinland merupakan salah satu Badan Sertifikasi Internasional yang mempunyai kewenangan mengeluarkan sertifikat bagi institusi yang telah berkomitmen untuk mengimplementasikan klausul-klausul ISO (International Organization for Standarization). Selain mempunyai kewenangan untuk mengeluarkan sertifikat ISO, TUVRheinland juga mempunyai kewenangan untuk memastikan apakah seluruh klausul ISO tersebut tetap diimplementasikan dalam pelaksanaan prosedur kerja setiap harinya di institusi yang telah disertifikasi. Untuk itu TUVRheinland melakukan kegiatan Survaillance Audit (pemeriksaan) setiap 6 bulan atau 1 tahun sekali.\r\n\r\nUniversitas Potensi Utama merupakan Perguruan Tinggi yang telah disertifikasi ISO 9001:2008 dan pada tanggal 8 Agustus 2009 kembali dikunjungi oleh Tim Auditor dari TUVRheinland dalam rangka Survaillance Audit yang pertama. Tim Survaillance Audit dari TUVRheinland dipimpin langsung oleh Bapak M. Yasier Muda Hasibuan sebagai Lead Auditor dan Ibu Nyimas Yanqoritha sebagai Expert Auditor.\r\n\r\nAcara ini dibuka oleh Bapak Bob Subhan Riza, ST yang merupakan Ketua Gugus Kendali Mutu (GKM) Universitas Potensi Utama dan dihadiri oleh seluruh manajemen serta Tim Auditor. Sambutan dilanjutkan oleh M. Yasier Muda Hasibuan yang menjelaskan proses Survaillance Audit untuk melihat komitmen Universitas Potensi Utama dalam implementasi ISO 9001:2008 yang ditunjukkan melalui Kontrol Dokumen, Persyaratan Pelanggan (mahasiswa, alumni, orang tua mahasiswa, dosen, perusahaan), Prosedur Mutu dan Instruksi Kerja.\r\n\r\nDalam audit ini kami akan memastikan, apakah Universitas Potensi Utama yang sudah di sertifikasi ISO 9001:2008 masih berkomitmen terhadap klausul-klausul yang ada. Untuk itu, dalam Survaillance Audit ini jika terdapat temuan-temuan, maka digolongkan menjadi tiga, yaitu : temuan observasi yang hanya berupa saran-saran saja dan tidak membahayakan apapun, temuan minor yang bisa membahayakan proses selanjutnya dan yang terakhir temuan mayor yakni kesalahan besar yang menyimpang dari aturan atau klausul. ," ungkap Bapak Yasier Muda Hasibuan".\r\n\r\nPada Survaillance Audit ini bagian kerja yang diperiksa oleh Tim Auditor seperti : Rektor Universitas (Top Management), Ketua GKM (Management Representative), Puket 1 (Kurikulum dan Program Studi), Puket 2 (SDM, Teknisi dan Lab), Puket 3 (Kemahasiswaan dan Humas). Sedangkan bagian kerja yang lain seperti : Lembaga Penelitian dan Pengabdian Masyarakat (LPPM), Perpustakaan, Pembelian, Perawatan, Supplier, Kebersihan, Keamanan akan di Survaillance Audit 6 bulan berikutnya.\r\n\r\nSetelah diaudit oleh Tim Auditor, terdapat empat temuan minor yang ada di Universitas Potensi utama yang harus segera di perbaiki. Temuan minor tersebut terkait pada aktifitas Program Studi. Untuk temuan observasi ada sembilan yang terdapat pada masing-masing bagian kerja. Observasi yang terjadi merupakan saran yang diberikan oleh Auditor untuk improvement kegiatan Sistem Manajemen Mutu di Universitas Potensi Utama.\r\n\r\nMeski terdapat temuan minor dan beberapa temuan observasi, namun Universitas Potensi Utama yang terletak di Jl. K.L. Yos Sudarso Km 6,5 No. 3-A Medan, dinyatakan masih memegang teguh komitmen ISO 9001:2008 dan masih berhak memegang sertifikat ISO 9001:2008. Dikatakan oleh M. Yasier Muda Hasibuan, bahwa semua temuan dan obeservasi itu tidak perlu dikhawatirkan karena akan memacu mereka (Universitas Potensi Utama) dalam meningkatkan pelayanan yang lebih baik. Lebih lanjut ia mengatakan bahwa Universitas Potensi Utama sudah bagus pada Survaillance Audit ini, diharapkan untuk Survaillance Audit 6 bulan berikutnya harus mampu mempertahankan komitmen implementasi ISO 9001:2008.', '7467c7d6e1f0f05db9e8b4e4c716989f.gif', '', 'post', 'publish', 0, '2017-08-23 08:36:10', 'web', '0000-00-00 00:00:00', 'web'),
(29, 1, 'ini adalah sebuah berita', 'ini dalah isi berita', '5bcb0b1a36513c8c665f72d387300884.gif', '', 'post', 'publish', 1, '2017-08-23 08:36:41', 'web', '0000-00-00 00:00:00', 'web'),
(30, 1, 'ini adalah sebuah mereka', 'ini merupakan sebuah degan mengguajana apa yansgsfja jhsda', '1c0c1afd9415cdbde32b2d17dfa461fe.jpg', 'ini-adalah-sebuah-mereka', 'post', 'publish', 0, '2017-08-24 07:38:11', 'web', '0000-00-00 00:00:00', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE IF NOT EXISTS `post_categories` (
  `idpost_category` int(10) unsigned NOT NULL,
  `idpost` int(10) unsigned NOT NULL,
  `idcategory` int(10) unsigned NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT 'web',
  `edit_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_by` varchar(80) COLLATE utf8_bin DEFAULT 'web'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`idpost_category`, `idpost`, `idcategory`, `add_date`, `added_by`, `edit_date`, `edited_by`) VALUES
(22, 25, 3, '2017-08-22 13:41:27', '1', '0000-00-00 00:00:00', 'web'),
(23, 26, 1, '2017-08-22 13:43:47', '1', '0000-00-00 00:00:00', 'web'),
(24, 27, 1, '2017-08-23 07:01:50', '1', '0000-00-00 00:00:00', 'web'),
(25, 28, 1, '2017-08-23 08:36:11', '1', '0000-00-00 00:00:00', 'web'),
(26, 29, 1, '2017-08-23 08:36:41', '1', '0000-00-00 00:00:00', 'web'),
(27, 30, 1, '2017-08-24 07:38:12', '1', '0000-00-00 00:00:00', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE IF NOT EXISTS `post_tags` (
  `idpost_tag` int(10) unsigned NOT NULL,
  `idpost` int(10) unsigned NOT NULL,
  `idtag` int(10) unsigned NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT 'web',
  `edit_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_by` varchar(80) COLLATE utf8_bin DEFAULT 'web'
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`idpost_tag`, `idpost`, `idtag`, `add_date`, `added_by`, `edit_date`, `edited_by`) VALUES
(39, 25, 33, '2017-08-22 13:41:27', '1', '0000-00-00 00:00:00', 'web'),
(40, 25, 34, '2017-08-22 13:41:27', '1', '0000-00-00 00:00:00', 'web'),
(41, 26, 35, '2017-08-22 13:43:47', '1', '0000-00-00 00:00:00', 'web'),
(42, 26, 36, '2017-08-22 13:43:47', '1', '0000-00-00 00:00:00', 'web'),
(43, 26, 37, '2017-08-22 13:43:47', '1', '0000-00-00 00:00:00', 'web'),
(44, 27, 36, '2017-08-23 07:01:50', '1', '0000-00-00 00:00:00', 'web'),
(45, 27, 38, '2017-08-23 07:01:50', '1', '0000-00-00 00:00:00', 'web'),
(46, 27, 39, '2017-08-23 07:01:50', '1', '0000-00-00 00:00:00', 'web'),
(47, 28, 36, '2017-08-23 08:36:11', '1', '0000-00-00 00:00:00', 'web'),
(48, 28, 40, '2017-08-23 08:36:11', '1', '0000-00-00 00:00:00', 'web'),
(49, 29, 41, '2017-08-23 08:36:41', '1', '0000-00-00 00:00:00', 'web'),
(50, 29, 42, '2017-08-23 08:36:41', '1', '0000-00-00 00:00:00', 'web'),
(51, 30, 43, '2017-08-24 07:38:12', '1', '0000-00-00 00:00:00', 'web'),
(52, 30, 44, '2017-08-24 07:38:12', '1', '0000-00-00 00:00:00', 'web'),
(53, 30, 45, '2017-08-24 07:38:12', '1', '0000-00-00 00:00:00', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `idprofile` int(10) unsigned NOT NULL,
  `iduser` int(10) unsigned NOT NULL,
  `first_name` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `last_name` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT 'web',
  `edit_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_by` varchar(80) COLLATE utf8_bin DEFAULT 'web'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`idprofile`, `iduser`, `first_name`, `last_name`, `display_name`, `gravatar_email`, `add_date`, `added_by`, `edit_date`, `edited_by`) VALUES
(1, 1, 'Irfannur ', 'Diah', 'UPU', 'kangfand@gmail.com', '2015-07-31 19:51:05', 'web', '0000-00-00 00:00:00', 'web'),
(2, 2, 'John', 'Doe', 'John', 'ashiquebd@gmail.com', '2015-08-02 18:12:21', 'web', '0000-00-00 00:00:00', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `idtag` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT 'web',
  `edit_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_by` varchar(80) COLLATE utf8_bin DEFAULT 'web'
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`idtag`, `title`, `add_date`, `added_by`, `edit_date`, `edited_by`) VALUES
(33, 'kecerdasan buatan', '2017-08-22 13:41:27', '1', '0000-00-00 00:00:00', 'web'),
(34, 'robot', '2017-08-22 13:41:27', '1', '0000-00-00 00:00:00', 'web'),
(35, 'pengumuman', '2017-08-22 13:43:46', '1', '0000-00-00 00:00:00', 'web'),
(36, 'upu', '2017-08-22 13:43:46', '1', '0000-00-00 00:00:00', 'web'),
(37, 'baak', '2017-08-22 13:43:46', '1', '0000-00-00 00:00:00', 'web'),
(38, 'event', '2017-08-23 07:01:50', '1', '0000-00-00 00:00:00', 'web'),
(39, 'seminar', '2017-08-23 07:01:50', '1', '0000-00-00 00:00:00', 'web'),
(40, 'iso', '2017-08-23 08:36:11', '1', '0000-00-00 00:00:00', 'web'),
(41, 'kamu', '2017-08-23 08:36:41', '1', '0000-00-00 00:00:00', 'web'),
(42, 'dimana', '2017-08-23 08:36:41', '1', '0000-00-00 00:00:00', 'web'),
(43, 'apa', '2017-08-24 07:38:11', '1', '0000-00-00 00:00:00', 'web'),
(44, 'pun', '2017-08-24 07:38:11', '1', '0000-00-00 00:00:00', 'web'),
(45, 'itu', '2017-08-24 07:38:11', '1', '0000-00-00 00:00:00', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(10) unsigned NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `code` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `rules` varchar(255) COLLATE utf8_bin NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` varchar(80) CHARACTER SET latin1 NOT NULL DEFAULT 'web',
  `edit_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_by` varchar(80) CHARACTER SET latin1 DEFAULT 'web'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `email`, `password`, `code`, `status`, `rules`, `add_date`, `added_by`, `edit_date`, `edited_by`) VALUES
(1, 'kang.fand@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '7dbff75ae15cd0ea7bfc3ca16c4f33cc', 1, '', '2015-07-31 18:48:58', 'web', '2017-08-07 16:50:35', 'user'),
(2, 'ashique.bd@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '35367ceb7f3407415758d005595402c4', 1, '', '2015-08-02 18:10:25', 'web', '2015-08-02 12:13:32', 'web'),
(3, 'a.shiquebd@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'f3e4617f035724c8876c8908f4d36d1c', 1, '', '2015-08-02 18:30:24', 'web', '2015-08-02 12:33:18', 'web'),
(4, 'kang.fjand@gmail.com', 'b752bea745fd66dfaa3045e63d57cfa1', '01e2ac430729693295a764bdf1c303fe', 0, '', '2017-07-25 08:11:54', 'web', '0000-00-00 00:00:00', 'web'),
(5, 'kangfand@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'b5c2e53c6eb50e658948c3d9214a179f', 0, '', '2017-07-25 08:12:25', 'web', '0000-00-00 00:00:00', 'web'),
(6, 'dzeuto@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'f182d8b26ffc0831283441f052e4be3a', 0, '', '2017-08-22 23:33:44', 'web', '0000-00-00 00:00:00', 'web'),
(7, 'uh@uh.com', '827ccb0eea8a706c4c34a16891f84e7b', '0b3faeb8c3feec5edcbd26af5d3f6a25', 1, '', '2017-08-22 23:44:03', 'web', '2017-08-22 18:45:02', 'web');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `FK_posts_user` (`iduser`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`idpost_category`),
  ADD KEY `FK_post_categories_post` (`idpost`),
  ADD KEY `FK_post_categories_category` (`idcategory`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`idpost_tag`),
  ADD KEY `FK_post_tags_post` (`idpost`),
  ADD KEY `FK_post_tags_tag` (`idtag`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`idprofile`),
  ADD KEY `unique_iduser` (`iduser`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`idtag`),
  ADD UNIQUE KEY `unique_title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `unique_email` (`email`),
  ADD UNIQUE KEY `unique_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idcategory` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `idpost` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `idpost_category` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `idpost_tag` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `idprofile` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `idtag` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_posts_user` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD CONSTRAINT `FK_post_categories_category` FOREIGN KEY (`idcategory`) REFERENCES `categories` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_post_categories_post` FOREIGN KEY (`idpost`) REFERENCES `posts` (`idpost`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `FK_post_tags_post` FOREIGN KEY (`idpost`) REFERENCES `posts` (`idpost`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_post_tags_tag` FOREIGN KEY (`idtag`) REFERENCES `tags` (`idtag`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `FK_profiles_users` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
