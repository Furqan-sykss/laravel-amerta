-- --------------------------------------------------------
-- Host:                         193.168.194.16
-- Server version:               10.5.20-MariaDB-cll-lve - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table u1562441_furqan.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table u1562441_furqan.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table u1562441_furqan.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table u1562441_furqan.migrations: ~4 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- Dumping structure for table u1562441_furqan.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table u1562441_furqan.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table u1562441_furqan.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table u1562441_furqan.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table u1562441_furqan.tb_daftar_article
CREATE TABLE IF NOT EXISTS `tb_daftar_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) DEFAULT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `judul2` varchar(500) DEFAULT NULL,
  `keterangan` varchar(1200) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_tb_daftar_article_tb_kategori_article` (`kategori`),
  CONSTRAINT `FK_tb_daftar_article_tb_kategori_article` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori_article` (`id_kat_article`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1113 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table u1562441_furqan.tb_daftar_article: ~22 rows (approximately)
REPLACE INTO `tb_daftar_article` (`id`, `foto`, `judul`, `judul2`, `keterangan`, `kategori`) VALUES
	(1, '48163-article2.png', 'Masa-masa Penghabisan', 'Snouck Hurgronje menimba ilmu hingga masa tuanya. Dimakamkan di kuburan Kristen.', 'Bagian muka bangunan itu terlihat sederhana tapi anggun. Bergaya klasik dengan elemen-elemen arsitektur rokoko. Daun pintu masuknya berukir dan di tengahnya tertera nama pemiliknya: Snouck Hurgronje. Rumah itu terletak di Jalan Rapenburg 61 Leiden, Belanda, tak jauh dari Universitas Leiden &ndash;universitas tertua di Belanda. Ia berada di antara deretan bangunan lainnya. Di depannya, terbentang kanal yang ditumbuhi bunga teratai selama cuaca bersahabat. Rumah ini dibangun pada 1701 oleh artistek Jacob Roman. Hiasan di tembok luar dan pintu berukir gaya rokoko baru dibubuhkan pada 1764 atas permintaan pemilik lamanya. Snouck hampir mencapai usia pensiun ketika memutuskan membeli rumah mewah yang pantas untuk kedudukannya sebagai rektor magnificus Universitas Leiden. Harga rumah mewah ini tampaknya tidak merisaukannya. Snouck membelinya tanpa uang pinjaman.', 3),
	(2, '56563-article4.png', 'Pandangan dan Tujuan Hidup dari Filosofi Nihilism', 'Apa Arti  Dari Hidup Ini', 'Nihilism atau nihilisme adalah sebuah keyakinan bahwa semua nilai-nilai (value) itu tidak berarti. Lebih jelasnya, bahwa sejatinya tidak ada makna/nilai-nilai dalam hidup ini yang berlaku bagi semua manusia, jadi ya, gak berarti.  Nihilism sering dikaitkan dengan skeptis radikal atau pesimisme ekstrim. Tokoh yang terkenal membawa nihilisme ini adalah Friedrich Nietzsche. Selain Nietzsche, ada seorang filsuf abad ke-20 bernama Hannah Arendt mengatakan bahwa kita sebaiknya tidak menganggap nihilisme sebagai pikiran yang berbahaya, tetapi sebagai risiko yang selalu ada dalam tindakan berpikir.  Maksudnya, ketika kita berpikir akan selalu ada risiko yang menantang pikiran tersebut. Dalam hal ini, pikiran itu adalah nilai-nilai yang kita percayai dalam hidup.  Put simply, ketika kamu percaya bahwa keadilan itu ada, lantas siapa sih yang nentuin itu adil atau tidak? Tuhan? Pemerintah? Pengadilan? Bingung, kan? Jadi gak penting sebenarnya. That&rsquo;s exactly what nihilism is about.', 2),
	(3, 'article1.png', 'Kemenangan dan Kegagalan di Aceh', 'Datang untuk membantu pemerintah menghadapi perlawanan Aceh. Berhasil di awal, tapi gagal di akhir.', 'PELURU meriam dari kapal Citadel van Antwerpen  menghantam benteng di tepi pantai Aceh. Tembakan itu berbalas. Saling balas tembakan meriam pada pagi 27 Maret 1873 itu menandai mula Perang Aceh. Setelah lebih dari sepekan, ribuan tentara pemerintah Hindia Belanda akhirnya mendarat dan merangsek ke pedalaman. Tapi, di depan Masjid Raya, pertempuran kembali terjadi. Bahkan pemimpin pasukan, Jenderal Kohler, tewas. Van Daalen, wakil Kohler, lekas menarik mundur pasukan.', 3),
	(4, '93450-stoic.jpg', 'Filsafat Romawi penawar Depresi', 'Stoisisme didasarkan pada ide bahwa tujuan hidup adalah hidup selaras dengan alam.', 'PELURU meriam dari kapal Citadel van Antwerpen  menghantam benteng di tepi pantai Aceh. Tembakan itu berbalas. Saling balas tembakan meriam pada pagi 27 Maret 1873 itu menandai mula Perang Aceh. Setelah lebih dari sepekan, ribuan tentara pemerintah Hindia Belanda akhirnya mendarat dan merangsek ke pedalaman. Tapi, di depan Masjid Raya, pertempuran kembali terjadi. Bahkan pemimpin pasukan, Jenderal Kohler, tewas. Van Daalen, wakil Kohler, lekas menarik mundur pasukan.', 2),
	(5, 'albert1234.jpg', 'Filosofi Kehidupan ala Albert Camus: Hidup Itu Absurd!', ' landasan seseorang setiap melakukan sesuatu dalam hidupnya.', 'Pada titik-titik tertentu dalam hidup, gak jarang orang-orang bakal merenung atau setidaknya bertanya-tanya untuk apa sih sebenarnya kita hidup selama ini. Dan hal itu buat kita jadi semakin bingung tentang filosofi kehidupan dan tujuan hidup kita sendiri.', 2),
	(6, '29969-alain.jpg', 'Filosofi Hidup Alain de Botton: Hidup Biasa Aja itu Lebih Bahagia!', ' Alain de Botton berhasil menemukan solusi atas keresahan yang kita semua rasakan.', 'Untuk menikmati hidup, beberapa menganggap bahwa lo harus mempunyai pencapaian karir bagus, pendidikan tinggi, dan materi yang melimpah. Ada tingkatan-tingkatan hidup yang wajib lo gapai dalam perjalanan lo bertumbuh dan bertambah usia. Padahal, mencapai kesuksesan yang sempurna itu lumayan susah.', 2),
	(7, '17374-epicurus.jpg', 'Filosofi Kehidupan Epicurus: Kunci Hidup Bahagia Meski Hidup Sederhana', 'Apakah kamu sudah merasa cukup bahagia dengan hidupmu saat ini?', 'Ketika neglihat judul artikel ini tentang filosofi kehidupan Epicurus (bahagia dalam kesederhanaan), kayaknya terkesan terlalu naif. Sebagian besar mungkin beranggapan kalau jadi orang yang kaya raya, sudah pasti bahagia. Kalaupun sedih, setidaknya sedih dalam kemewahan, kan?', 2),
	(8, '55883-mkna1.jpg', 'Makna Dalam Setiap Peristiwa', 'Dalam Konsep Takdir , Agama memberi ruang akan hal ini', 'ilmu hakikat artinya masuk dalam ranah yang dibicarakan', 2),
	(9, 'epicurus888.jpg', 'Belajar dari Epictetus agar Tak Menderita Terus ', 'Beberapa hal tergantung pada sikap kita, selebihnya tidak ~ Epictetus ', 'Epictetus adalah seorang budak. Awal kehidupannya tidak pernah beruntung. Dia disiksa dan dipukuli oleh majikan pertamanya hingga kakinya patah dan pincang seumur hidup. Tak cukup sampai disitu, ia juga hidup miskin, sebatang kara, dan terkekang sepanjang hidupnya. Saking miskinnya, nama &#039;Epictetus&#039; pun adalah hasil &#039;sumbangan&#039; dari majikan keduanya yang baik, Epaphroditus. ', 2),
	(10, '26373-seneca.jpg', 'Seneca dan Kebebasan Batin', 'Hidup adalah perjalanan yang penuh dengan bunga dan duri. Ini tidak dapat disangkal.', 'Hidup adalah perjalanan yang penuh dengan bunga dan duri. Ini tidak dapat disangkal. Setiap orang mengalami masa-masa gelap dalam hidupnya. Namun, disela-sela masa-masa itu, mereka pun menemukan kebahagiaan.', 2),
	(11, '36897-kindi.jpg', 'Al-Kindi Jembatan Filsafat Yunani dan Islam', 'Al-Kindi hidup sebagai cendekiawan brilian abad kesembilan di masa Abbasiyah.', 'Al-Kindi hidup sebagai cendekiawan brilian abad kesembilan ketika Dinasti Abbasiyah berkuasa di Baghdad, Irak. Ia adalah orang yang mengajarkan ilmu pengetahuan kepada putra khalifah. Dia gemar mempelajari pemikiran Aristoteles yang telah diterjemahkan.', 2),
	(12, '58994-Aristoteles.jpg', 'Aristoteles dan Pemikiran-Pemikirannya Kepada Semesta', 'Sudah 25 abad lamanya ia meninggal dunia. Tapi, dunia masih mengenal nama dan pemikirannya. Ialah Aristoteles, sang filsuf Yunani.', 'Aristoteles adalah murid dari Plato sekaligus guru dari Alexander Agung. Ia banyak menulis berbagai macam disiplin ilmu, termasuk fisika, metafisika, puisi, logika, retorika, politik, pemerintahan, etnis, biologi dan zoologi. Bersama dengan Socrates dan Plato, ia dianggap menjadi seorang di antara tiga orang filsuf yang paling berpengaruh di pemikiran Barat.', 2),
	(13, '37360-art11.jpg', 'Konsep Filsafat Cinta Menurut Para Filsuf Dunia', 'Filsafat cinta hadir untuk memberikan makna dan mencoba memahami apa arti dari cinta itu sendiri. ', 'Filsafat dan cinta adalah dua hal yang dianggap saling bertolak belakang oleh masyarakat umum. Namun, konsep filsafat cinta sendiri telah dikemukakan oleh para filsuf dunia sejak ribuan tahun yang lalu.', 2),
	(14, '82461-belajar1.jpg', 'Sejarah Pendidikan di Indonesia.', 'Sejarah Pendidikan di Indonesia', 'Sejarah Pendidikan di Indonesia', 3),
	(15, '49150-bendera1.jpg', 'Mendalami Makna Simbol Negara', ' perjalanan dari merah putih, dimana merah putih memiliki filosofi tersendiri', 'simbol negara, merah putih merupakan identitas dari NEGARA KESATUAN REPUBLIK INDONESIA ,bukan selembar kain biasa yang kita dapatkan dengan mudah tetapi memiliki makna yang dalam daripada itu.', 3),
	(16, '61143-teukudaud.jpg', 'Pemberontakan DI/TII di Aceh.', 'Pemberontakan Teuku Daud Beureueuh dan Rakyat Aceh', 'Pemberontakan DI/TII di Aceh (Pemberontakan Daud Beureueh) akibat kekecewan Daud Beureueh dan rakyat Aceh terhadap pemerintah pusat yang tidak menepati janji.', 3),
	(17, '88442-kons1.jpg', 'Jatuhnya Konstantinopel (1453).', 'Kejatuhan Konstantinopel adalah suatu peristiwa penyerbuan ke ibukota Kekaisaran Byzantine oleh tentara Ottoman pada 29 Mei 1453.', 'Kejatuhan Konstantinopel adalah suatu peristiwa penyerbuan ke ibukota Kekaisaran Byzantine oleh tentara Ottoman pada 29 Mei 1453.	', 3),
	(18, '23821-sipilwar1.jpg', 'Perang Sipil Amerika 1861 - 1865.', 'Perseturuan antar saudara', 'Perang Saudara Amerika adalah perang antara Amerika Serikat (di utara) dengan 11 negara bagian di wilayah selatan yang memisahkan diri dan membentuk Negara Konfederasi Amerika', 3),
	(19, '17047-sukarno1.jpg', 'Perintah pertama Soekarno sebagai Presiden RI.', ' Sehari setelah kemerdekaan Republik Indonesia pada 17 Agustus 1945', 'simbol negara, merah putih merupakan identitas dari NEGARA KESATUAN REPUBLIK INDONESIA ,bukan selembar kain biasa yang kita dapatkan dengan mudah tetapi memiliki makna yang dalam daripada itu.', 3),
	(20, '38399-rmph.jpg', 'Jalur rempah nusantara.', 'Jalur rempah adalah ruang bagi masyarakat Nusantara juga bangsa luar berinteraksi satu sama lain yang dipertemukan melalui perdagangan rempah.', 'Jalur rempah di Nusantara telah dikenal sejak berabad-abad lamanya di mana jalur khayal ini merupakan jalur yang biasa pada masa itu dilalui oleh para pedagang dari berbagai belahan di dunia.', 3),
	(21, 'panjaitan.jpg', 'D.I. Pandjaitan cari jodoh di tengan Perang', 'Niatnya mempersunting kekasih hati terbentur restu calon mertua. Mulai dari sentimen terhadap militer, perkara adat, hingga insiden asbak pecah.', 'Niatnya mempersunting kekasih hati terbentur restu calon mertua. Mulai dari sentimen terhadap militer, perkara adat, hingga insiden asbak pecah.', 3),
	(22, 'gerilya.jpg', 'Lima Perempuan Penerima Bintang Gerilya', 'Lima perempuan ini berperan besar dalam perjuangan kemerdekaan. Membuat mereka jadi target Belanda.', 'Perjuangan mempertahankan kemerdekaan tak hanya tanggung jawab laki-laki. Para perempuan juga terpanggil untuk turut berjuang, mulai dari dapur umum, palang merah, hingga menjadi mata-mata.', 3);

-- Dumping structure for table u1562441_furqan.tb_kategori_article
CREATE TABLE IF NOT EXISTS `tb_kategori_article` (
  `id_kat_article` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kategori` int(11) DEFAULT NULL,
  `kategori_article` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id_kat_article`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table u1562441_furqan.tb_kategori_article: ~2 rows (approximately)
REPLACE INTO `tb_kategori_article` (`id_kat_article`, `jenis_kategori`, `kategori_article`) VALUES
	(2, 1, 'filsafat'),
	(3, 2, 'sejarah');

-- Dumping structure for table u1562441_furqan.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table u1562441_furqan.tb_user: ~6 rows (approximately)
REPLACE INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`, `nohp`, `alamat`) VALUES
	(1, 'furqan', '', '202cb962ac59075b964b07152d234b70', 1, NULL, NULL),
	(2, 'sykss', '', '202cb962ac59075b964b07152d234b70', 2, NULL, NULL),
	(3, 'admin', 'admin@admin.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, NULL, NULL),
	(5, 'biasa', 'biasa@biasa.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, NULL, NULL),
	(8, 'nismar', 'nismar@mar.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '', ''),
	(9, 'ustad', 'ustad@stad.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '', '');

-- Dumping structure for table u1562441_furqan.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table u1562441_furqan.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
