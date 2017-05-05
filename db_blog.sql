-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jan 2016 pada 06.13
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Andi', '21232f297a57a5a743894a0e4a801fc3'),
(2, '', '0'),
(3, '', '0'),
(4, '', '0'),
(5, 'aha', '0'),
(6, 'haha', 'ahahaha'),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, 'ad', 'kdjak'),
(11, '', ''),
(12, 'adh', 'hdaj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbgambar`
--

CREATE TABLE IF NOT EXISTS `tbgambar` (
`no_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(200) NOT NULL,
  `lokasi_gambar` text NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbgambar`
--

INSERT INTO `tbgambar` (`no_gambar`, `nama_gambar`, `lokasi_gambar`, `id_artikel`) VALUES
(3, '28rek2h (1).jpg', 'img/28rek2h (1).jpg', 1),
(4, '29fwlqu.jpg', 'img/29fwlqu.jpg', 2),
(5, '102t9uu.jpg', 'img/102t9uu.jpg', 3),
(6, 'Surya_Paloh3.jpg', 'img/Surya_Paloh3.jpg', 4),
(10, '12.22.06-davidlaserscanner.jpg', 'img/12.22.06-davidlaserscanner.jpg', 5),
(11, 'A.png', 'img/A.png', 6),
(12, '28rek2h (1).jpg', 'img/28rek2h (1).jpg', 8),
(13, '102t9uu.jpg', 'img/102t9uu.jpg', 9),
(14, '51f5.jpg', 'img/51f5.jpg', 10),
(15, 'dapa lallu.jpg', 'img/dapa lallu.jpg', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkategori`
--

CREATE TABLE IF NOT EXISTS `tbkategori` (
`id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkategori`
--

INSERT INTO `tbkategori` (`id_kategori`, `nama_kategori`) VALUES
(4, 'Toturial'),
(5, 'HTML'),
(6, 'Info');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkomentar`
--

CREATE TABLE IF NOT EXISTS `tbkomentar` (
`id_komentar` int(5) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal_komentar` varchar(50) NOT NULL,
  `url_gambar` text NOT NULL,
  `refid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkomentar`
--

INSERT INTO `tbkomentar` (`id_komentar`, `id_artikel`, `nama`, `komentar`, `tanggal_komentar`, `url_gambar`, `refid`) VALUES
(1, 1, 'Andi', 'Ini komentar :)', 'Jun 18, 2015 at 06:06 pm', '', 0),
(2, 1, 'Admin', 'Ini komentar admin :)', 'Jun 18, 2015 at 06:06 pm', '', 1),
(3, 1, 'Admin', 'ini komentar admin :)', 'Jun 18, 2015 at 06:06 pm', '', 0),
(4, 1, 'Andi', 'Iya pa admin :)', 'Jun 18, 2015 at 06:06 pm', '', 1),
(5, 1, 'Andi', 'Iya pak admin :v', 'Jun 18, 2015 at 06:06 pm', '', 3),
(6, 1, 'Admin', 'Apaan sih an', 'Jun 18, 2015 at 06:06 pm', '', 3),
(7, 1, 'Admin', 'Hahaha', 'Sep 28, 2015 at 06:09 pm', '', 1),
(8, 3, 'zzzz', 'Bagus', '1-1-2001', '', 0),
(9, 3, 'Nah', 'Nahhhhh', 'Nov 27, 2015 at 08:11 pm', '', 8),
(10, 3, 'hhh', 'ii', 'Nov 27, 2015 at 08:11 pm', '', 8),
(11, 3, 'jjj', 'kkkkkk', 'Nov 27, 2015 at 08:11 pm', '', 8),
(12, 3, 'kkkaa', 'jjaijdiaji', 'Nov 27, 2015 at 08:11 pm', '', 8),
(13, 3, 'ahau', 'huaudua', 'Nov 27, 2015 at 08:51 pm', '', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblartikel`
--

CREATE TABLE IF NOT EXISTS `tblartikel` (
`id_artikel` int(5) NOT NULL,
  `judul_artikel` text COLLATE latin1_general_ci NOT NULL,
  `isi_artikel` text COLLATE latin1_general_ci NOT NULL,
  `tgl_artikel` datetime NOT NULL,
  `id_kategori` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tblartikel`
--

INSERT INTO `tblartikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `tgl_artikel`, `id_kategori`) VALUES
(1, 'RAYMOND KROC MCDONALD', '<p>Pada tahun 1954, seorang salesman mesin susu kocok berumur lima puluh dua tahun melihat kios hamburger di San Bernardino, California, dan membayangkan sebuah industri baru yang besar: fast food. Dalam apa yang seharusnya menjadi tahun emasnya, Raymond Kroc, pendiri dan pembangun McDonald s Corporation, membuktikan dirinya sebagai seorang pelopor industri yang tidak kalah kemampuannya dengan Henry Ford. Dia merevolusikan industri restoran dengan memberlakukan disiplin atas produksi hamburger, kentang goreng, dan susu kocok. Dengan mengembangkan sistem operasi dan antaran yang maju, dia memastikan bahwa kentang goreng yang dibeli oleh pelanggan di Topeka akan sama dengan yang dibeli di New York City. Konsistensi seperti ini menjadikan McDonald s nama mereka yang mendefinisikan fast food Amerika. Pada tahun 1960, terdapat lebih dari 200 saluran McDonald s di seluruh Amerika, perluasan cepat yang dikobarkan oleh biaya franchise yang rendah. Ray Kroc telah menciptakan salah satu merek yang paling kuat sepanjang masa. Tetapi dia nyaris tidak mendapat keuntungan. Akhirnya, dia memutuskan untuk menggunakan real estate sebagai pendukung keuangan yang menyebabkan McDonald s menjadi operasi yang menguntungkan.</p>\r\n<p>&nbsp;</p>\r\n<p>Pada tahun 1956, Kroc mendirikan Franchise Realty Corporation, membeli tanah dan bertindak selaku pemilik restoran bagi pembeli franchise yang penuh minat. Dengan langkah ini, McDonald s mulai memperoleh penghasilan yang sesungguhnya, dan perusahaan pun lepas landas. Kroc kemudian memperkenalkan program periklanan nasional untuk mendukung franchise yang tersebar dengan cepat; dan setelah tampak bahwa pertumbuhan di wilayah asal perusahaan ini melambat pada awal tahun 1970-an, dia memulai dorongan yang penuh semangat dan sukses untuk membuat kehadiran global bagi McDonald s. Sepanjang pertumbuhan perusahaan yang spektakuler, Kroc melakukan akrobat keseimbangan berjalan di atas rentangan tali yang sulit, memberlakukan standar yang keras di seluruh sistem sementara mendorong semangat wirausaha yang menyambut baik gagasan dari semua tingkat. Banyak gagasan ini yang memberikan sumbangan kepada keberhasilan perusahaan yang menakjubkan. Dalam mengumpulkan kekayaan sebesar $500 juta, raja hamburger ini mengubah lansekap budaya bangsa dan menempa sebuah industri yang termasuk di kalangan ekspor Amerika yang terbesar. Keberhasilan McDonald s yang ditiru secara meluas menawarkan contoh yang baik sekali bagi manajer dan eksekutif zaman sekarang yang berusaha mencari efisiensi produksi yang lebih besar. Dengan menempatkan hamburger yang bersahaja di atas jalur perakitan, Kroc menunjukkan kepada seluruh dunia bagaimana cara menerapkan pross manajemen yang maju pada usaha yang paling membosankan. Supaya bisa maju dengan cara McDonald s, perusahaan-perusahaan harus menetapkan prinsip dasar pelayanan yang mereka tawarkan, memecah-mecah pekerjaan menjadi bagian-bagian, dan kemudian terus-menerus merakitnya kembali dan menyempurnakan banyak langkah sampai sistem berjalan tanpa kekangan.</p>', '2015-06-07 00:00:00', 6),
(2, 'WALT DISNEY', '<p>Kehidupan Walt Disney dapat diringkas dalam pedoman yang diikuti oleh semua orang kaya. Barang siapa ingin suskes, harus bekerja berat, pantang menyerah, dan lebih mengikuti kegandrungan. Walter Elias Disney dilahirkan di Chicago pada tanggal 5 Desember 1901. Ibunya, Flora Call, adalah wanita Jerman, sedangkan ayahnya, Elias Disney, seorang keturunan Irlandia Kanada. Namun ada satu gagasan yang selalu mengusik pikiran Walt Disney gagasan bekerja sendiri terutama karena ia telah mendengar bahwa sebagian karyawan akan tidak diperlukan bila musim sibuk berlalu. Ia gembira dengan prospek itu karena dua hal. Pertama, ia ingin berdiri sendiri, dan kedua, ia sangat ingin melakukan sesuatu yang baru dan orisinil, tidak hanya memenuhi keinginan bos dan para pelanggan.</p>\r\n<p>&nbsp;</p>\r\n<p>Disney, bersama dengan seorang teman, Ube Iwerks, mendirikan agen seni periklanannya yang pertama. Pelanggannya yang pertama adalah suatu rangkaian restoran. Disney dan temannya berhasil membuat kesepakatan dengan restoran untuk membangun bengkel kerjanya di bangunan restoran baru itu tanpa 84 membayar sedikit pun. Sebagai imbalan, mereka harus membuat poster-poster iklan untuk restoran itu. Di samping bekerja untuk memenuhi kontrak ini, mereka bebas untuk mengerjakan proyek lain. Untuk menarik pelanggan, Walt merancang suatu rencana khusus. Ia akan pergi ke suatu toko atau perusahaan dan mencari tahu apakah mereka mempunyai suatu bagian seni. Orang yang memegang pimpinan mungkin menjawab bahwa bagian itu tidak diperlukan. Lalu Walt akan menawarkan jasanya atas dasar freelance, hubungan lepas. Kalau perusahaan itu tidak mempunyai pekerjaan yang harus dikerjakannya, tidak apa-apa. Tetapi kapan pun ada pekerjaan semacam itu yang harus dikerjakan, Walt dan temannya siap memberikan jasanya. Dalam waktu singkat, cara kerja semacam itu memungkinkan Walt dan temannya menabung cukup banyak uang yang tak mungkin dikumpulkannya andaikan mereka bekerja pada satu perusahaan saja.<br /> Bisnis ini tampak memberikan harapan besar, tetapi pada suatu hari Walt menemukan suatu iklan dalam koran yangmenyatakan bahwa Kansas City Film Ad Company memerlukan seorang kartunis. Ia menghadapi dilema: Apakah ia akan mempertahankan bisnisnya dengan Ube atau akan mencoba memenuhi impian sejak masa kanak-kanaknya untuk membuat animasi kartun? Sekali ia telah menguasai kemahiran baru, tak ada yang akan menghalangi dia memulai usahanya sendiri kembali.</p>\r\n<p>&nbsp;</p>\r\n<p>The Wonderful World of Disney dan merupakan gambaran seseorang yang telah berhasil mencapai segala sasaran cita-citanya. Kehidupan Walt Disney dapat diringkas dalam pedoman yang diikuti oleh semua orang kaya. Barang siapa ingin suskes, harus bekerja berat, pantang menyerah, dan lebih mengikuti kegandrungan. Walter Elias Disney dilahirkan di Chicago pada tanggal 5 Desember 1901. Ibunya, Flora Call, adalah wanita Jerman, sedangkan ayahnya, Elias Disney, seorang keturunan Irlandia Kanada Namun ada satu gagasan yang selalu mengusik pikiran Walt Disney gagasan bekerja sendiri terutama karena ia telah mendengar bahwa sebagian karyawan akan tidak diperlukan bila musim sibuk berlalu. Ia gembira dengan prospek itu karena dua hal. Pertama, ia ingin berdiri sendiri, dan kedua, ia sangat ingin melakukan sesuatu yang baru dan orisinil, tidak hanya memenuhi keinginan bos dan para pelanggan.</p>\r\n<p>&nbsp;</p>\r\n<p>Disney, bersama dengan seorang teman, Ube Iwerks, mendirikan agen seni periklanannya yang pertama. Pelanggannya yang pertama adalah suatu rangkaian restoran. Disney dan temannya berhasil membuat kesepakatan dengan restoran untuk membangun bengkel kerjanya di bangunan restoran baru itu tanpa 84 membayar sedikit pun. Sebagai imbalan, mereka harus membuat poster-poster iklan untuk restoran itu. Di samping bekerja untuk memenuhi kontrak ini, mereka bebas untuk mengerjakan proyek lain. Untuk menarik pelanggan, Walt merancang suatu rencana khusus. Ia akan pergi ke suatu toko atau perusahaan dan mencari tahu apakah mereka mempunyai suatu bagian seni. Orang yang memegang pimpinan mungkin menjawab bahwa bagian itu tidak diperlukan. Lalu Walt akan menawarkan jasanya atas dasar freelance, hubungan lepas. Kalau perusahaan itu tidak mempunyai pekerjaan yang harus dikerjakannya, tidak apa-apa. Tetapi kapan pun ada pekerjaan semacam itu yang harus dikerjakan, Walt dan temannya siap memberikan jasanya. Dalam waktu singkat, cara kerja semacam itu memungkinkan Walt dan temannya menabung cukup banyak uang yang tak mungkin dikumpulkannya andaikan mereka bekerja pada satu perusahaan saja.</p>\r\n<p>&nbsp;</p>\r\n<p>Bisnis ini tampak memberikan harapan besar, tetapi pada suatu hari Walt menemukan suatu iklan dalam koran yangmenyatakan bahwa Kansas City Film Ad Company memerlukan seorang kartunis. Ia menghadapi dilema: Apakah ia akan mempertahankan bisnisnya dengan Ube atau akan mencoba memenuhi impian sejak masa kanak-kanaknya untuk membuat animasi kartun? Sekali ia telah menguasai kemahiran baru, tak ada yang akan menghalangi dia memulai usahanya sendiri kembali. mereka tidak mau membiarkan dia mencoba suatu teknik baru untk menyempurnakan kartunkartunnya. Ia mempunyai gagasan cemerlang membuat beberapa lukisan dan seluloid, lalu memotretnya dan menumpuknya dan akhirnya memfilmkannya. Pimpinan tidak mau mendengar hal semacam itu. Mereka merasa bahwa cara kerja mereka yang lama sudah cukup memberikan hasil sampai saat itu. Mereka tidak melihat alasan untuk mengubah teknik-teknik mereka, karena dengan cara itu pun para pelanggan sudah puas. Walt Disney tahu bahwa dia benar. Setelah berbulan-bulan membujuk bosnya, Walt akhirnya diperbolehkan membawa pulang salah satu kamera perusahaan untuk melakukan beberapa 86 percobaan. Sejak saat itu, Walt Disney tidak pernah lagi berpaling ke belakang. Di sebuah garasi kosong yang sudah dirombak jadi studio, ia mulai membuat film-film animasi pendek dengan menggunakan teknik hasil rekaannya. Ia kemudian memperlihatkan hasilnya kepada seorang pemimpin bisokop terkenal. Orang itu sangat terkesan. Sketsa-sketsa dan teknik film Walt sangat berbeda dengan yang sudah-sudah.</p>\r\n<p>&nbsp;</p>\r\n<p>Film kartunnya yang pertama segera diputar di bioskop-bioskop. Pada mulanya kartun-kartun ini dimaksudkan untuk menggantikan iklan-iklan agar penonton terus menikmati apa yang muncul di layar selama selang waktu. Walt menyebut film-film itu Laugh-O-Grams. Film-film kartun Walt disenangi penonton dan sejak itu di Kansas City Walt Disney tidak lagi diejek sebagai si orang muda eksentrik tetapi disegani. Gajinya naik. Dalam waktu singkat Disney menjadi orang terkenal di kota itu. Ia mengembalikan kamera yang dipinjamnya dan membeli kamera sendiri dengan uang simpanannya. Film-film kartun menjadi semakin populer. Walt Disney menyewa ruang kantor yang lebih luas untuk usaha kecilnya, Laugh-O-Grams Corporation dengan modal awal sebesar $15.000. Ia mempekerjakan beberapa magang dan seorang salesman untuk mempromosikan Laugh-O-Grams di New York City. Impiannya untuk mandiri menjadi kenyataan pada waktu ia baru berumur 20 tahun. Ia kemudian memutuskan untuk keluar dari KC Film untuk bekerja sendiri sepenuhnya. Tetapi sukses tidak terjadi dengan sendirinya. Biaya produksi tinggi dan sikap perfeksionis Walt Disney (yang membuat dia menanamkan kembali semua uang hasilnya untuk memperbaiki hasilnya), disamping pasaran yang sangat terbatas, segera mengakibatkan kebangkrutan. Ini merupakan masa suram dalam hidupnya; ia telah beranggapan bahwa masa sulitnya akhirnya berlalu. Ia tidak beruang sedikitpun dan terpaksa tinggal di bengkel dengan makan dan tidur di sebuah bangku kecil, satu-satunya perabot yang dia miliki. Lebih jelek lagi, sekali seminggu ia harus pergi ke stasiun kereta api untuk mandi. Akhirnya ia berhasil mendapatkan kontrak pembuatan kartun animasi untuk mendidik anak-anak pentingnya menyikat gigi.</p>\r\n<p>&nbsp;</p>\r\n<p>Pada suatu malam, dokter gigi yang memesan kartun ini datang menemuinya dan mengajak dia ke kantornya. Tidak bisa, jawab Disney. Mengapa? tanya dokter itu. Karena saya tidak punya sepatu. Satu-satunya sepatuku ada di tempat tukang sepatu untuk direparasi, dan saya tidak punya uang untuk mengambilnya. Walaupun menghadapi keadaan yang serba menyusahkan. Walt Disney tidak putus asa. Ada sebuah gagasan di otaknya. Pada suatu malam bulan Juli 1923, dengan membawa semua uang di dalam saku baju setelan tuanya dari kain minyak berwarna abu-abu, pemuda kurus kering ini naik kereta api menuju Hollywood. Ia bertekad kuat untuk menjadi orang penting dalam dunia perfilman.</p>\r\n<p>&nbsp;</p>\r\n<p>Ketika tiba di Hollywood, Walt Disney hanyalah satu di antara banyak orang yang mengharapkan mewujudkan cita-citanya. Kakaknya Ray telah tinggal di California beberapa waktu lamanya, dan ia dengan senang hati mengundang adiknya tinggal di rumahnya. Walt mulai mengunjungi studio-studio film satu per satu. Ia bersedia bekerja apa saja asal ada hubunganya dengan berfilman. Untuk maju dalam suatu bidang keahlian khusus, orang harus masuk ke dalamnya apa pun pengorbanannya. Disney segera menyadari betapa sulitnya masuk ke studio-studio film Hollywood. Banyak orang lain sebelum dia telah melamar kerja, tetapi ditolak. Walt Disney tidak menjadi patah semangat karenanya. Kalau ada orang lain yang berhasil masuk, mengapa ia tidak? Di matanya, ada dua macam orang: Mereka yang merasa kalah dan terlantar bila mereka tak dapat menemukan pekerjaan dan mereka yang dapat mencari penghasilan dengan cara apa pun dalam masa sulit. Disney selalu berusaha keras agar termasuk dalam golongan kedua.<br /> Pengalaman mengajar dia bahwa orang harus sepenuhnya mengandalkan diri sendiri. Ia kembali ke papan gambar dengan kemauan keras untuk mencari tempat bagi dirinya. Ia menggambar filmfilm komik dengan maksud dijual kepada pengusaha bioskop. Ia hanya menggunakan kembali pengalaman yang sudah diperolehnya di Kansas City dengan Laugh-O-Grams. Ada seorang pemilik gedung bioskop yang begitu tertarik sehingga ia membeli berseri-seri film komik. Ia bahkan memesan rangkaian cerita Alice in Wonderland yang telah mulai dibuat oleh Walt Disney di Kansas. Kepada Disney ditawarkan uang $1.500. Jumlah sebesar itu jauh lebih besar daripada yang diharapkan. Rangkaian seri Alice in Wonderland ini diputar berurutan sampai tiga tahun. Dengan hasil enjualannya Walt Disney bisa membeli rumah dan bahkan membangun studio filmnya sendiri. Sesudah film-film Alice in Wonderland, Walt ingin menciptakan sesuatu yang baru dan yang benar-benar orisinil. Maka lahirlah makhluk kecil cerdik yang disebutnya Mickey Mouse , nama yang diberikan oleh istri Disney, Lillian Bounds. Mickey Mouse dengan cepat menjadi bintang tenar di seluruh dunia, dan bahkan lebih terkenal daripada banyak bintang Hollywood. Walaupun demikian, pada mulanya para produser menyambut kedatangan Mickey dengan kurang bersemangat. Kira-kira pada waktu itu, film berbicara mulai muncul dan orang mulai memboikot film bisu. Disney pun bereaksi. Dengan kelompok pembantunya, ia memperkenalkan suatu metode baru untuk mensikronkan suara dan animasi. Walt terus mencari teknik-teknik baru untuk memperbaiki kemahirannya. Ia menerapkan pula proses: teknikolor yang baru. Dengan teknik baru ini ia tidak perlu lagi menggunakan kombinasi dua warna. Dalam film Bambi, ia menggunakan 46 rona warna hijau untuk hutannya. Kartun berwarnanya yang pertama, Silly Symphony, membuat para penggemar film kegirangan. Disney makin menyadari bahwa kalau ia mau terus berkarya dengan skala yang lebih besar, ia harus membangun suatu kelompok berotak cerdar, artinya ia harus mengelilingi dirinya dengan asisten-asisten orang pintar yang mampu menawarkan produk bermutu. Untuk memantapkan diri, kami tahu bahwa kami harus melatih sendiri para asisten. Disney merasa bahwa para kartunis yang bekerja padanya terlalu sering menggunakan cara-cara tipu daya kuno. Ia tahu bahwa satu-satunya cara mengubah keadaan ini adalah dengan mengadakan kursus-kursus latihan bagi mereka. Tujuannya sederhana: memperbaiki mutu lukisan dan teknik animasi.</p>\r\n<p>&nbsp;</p>\r\n<p>Ketika perusahaannya terus bertambah besar, ia memutuskan pada tahun 1930 untuk mendirikan sekolahnya sendiri, tempat ia akan mengajarkan segala teknik animasi kartun kepada calon-calon kartunis. Sekolah itu segera mulai tampak seperti kebun binatang. Soalnya, untuk membuat tokoh-tokoh kartunnya lebih realistic Disney telah mengubah ruang kelasnya menjadi laboratorium biologi kehidupan nyata dengan berbagai binatang yang diamati oleh para siswa dalam aneka perilaku dan sikapnya selagi tidur, jaga, makan, dan lainlain. Pengamatan ini akan membantu dia pula untuk membuat film-film dokumenter tentang keajaiban alam pada waktu yang akan datang. Pada tahun 1938, Disney memperkenalkan film animasi panjang tajuk karangannya yang pertama, Snow white. Untuk membuat film ini ia membutuhkan waktu dua tahun penuh kerja keras. Film tersebut merupakan salah satu karya besarnya. Tidak lama sesudah itu, ia membangun studio film modern di Burbank, California. Di tempat itu ia akan mempekerjakan sebanyak 1.500 orang. Sampai di situ ia tampaknya telah mencapai apa yang diimpikannya. Setahap demi tahap ia menjadi apa yang diinginkannya dahulu. Saya hanya bekerja dengan baik kalau ada hambatanm yang harus kuatasi. Saya khawatir bila segala sesuatu 91 berjalan dengan terlalu lancar karena saya takut terjadinya perubahan mendadak dalam situasi ini. Setelah Perang Duinia II, Ray dan Walt Disney menerima beberapa kontrak dari ketentaraan untuk membuat film dokumenter dan poster perang. Begitu perang selesai, bisnis makin sibuk bagi Disney Studios, dan Walt semakin mencurahkan perhatiannya pada keahlian seninya. Ia sering bekerja sampai larut malam. Konon, ia sering membongkar-bongkar keranjang sampah kertasnya untuk melihat isinya. Pada keesokan harinya ia akan menyuruh aistennya untuk meneliti apa yang ditemukannya; katanya, potongan-potongan kertas ini sering kali mengandung gagasan besar.</p>\r\n<p>&nbsp;</p>\r\n<p>Pada masa itulah Walt Disney menciptakan kebanyakan film besarnya, antara lain Cinderella, Peter Pan dan Bambi. Pada tahun 1950-an, impian fantasmagorik Walt Disney-Disneyland mulai berkembang. Pada waktu itu, semua temannya, terutama bankir-bankirnya, menyatakan bahwa proyek ini gila-gilaan. Sekali lagi, Disney akan menunjukkan bahwa impian manusia dapat menjadi kenyataan. Gagasan menciptakan Disneyland muncul, ketika ia berjalan-jalan di taman dengan kedua putrinya, Sharon dan Diana. Ia membayangkan sebuah taman wisata sangat luas tempat anakanak dapat bertemu dengan tokoh kartun yang mereka sayangi. Ketika Walt Disney akhirnya memutuskan untuk proyek tersebut, tidak ada seorang pun atau apa pun dapat mengubah keputusannya.</p>\r\n<p>Disneyland akhirnya terwujud di Anaheim, California, pada tahun 1955. Hari itu hari besar bagi Walt Disney. Ia berkata: Andaikata saya mendengarkan saya sendiri, tamanku ini tidak akan selesai. Inilah, akhirnya, sesuatu yang dapat saya sempurnakan terus-menerus. Pada tahun 1985, Disneyland menyambut pengunjungnya yang ke-250 juta. Ketika Walt Disney meninggal pada tahun 1966, bioskop kehilangan salah seorang penciptanya yang paling besar. Dua prinsip penting telah memotivasi seluruh hidupnya: melakukan apa yang dia nikmati dan percaya akan gagasan-gagasannya. Tanpa prinsip-prinsip ini, ia tak akan pernah menjadi Walt Disney yang besar: penerima 900 tanda kehormatan, 32 Oscar, lima Emmy, dan lima doktor honoris causa, perintis sejarah animasi dan salah seorang manusia terkaya di dunia. Ia telah mewujudkan impian-impiannya jauh melebihi harapannya yang paling muluk. Dapatkan koleksi ebook-ebook lain yang tak kalah menariknya</p>', '2015-06-07 00:00:00', 6),
(3, 'SOICHIRO HONDA BOS INDUSTRI MOBIL JEPANG', '<p>Soichiro Honda lahir tanggal 17 November 1906 di Iwatagun (kini Tenrryu City) yang terpencil di Shizuoka prefecture. Daerah Chubu di antara Tokyo, Kyoto, dan Nara di Pulau Honshu yang awalnya penuh tanaman teh yang rapi, yang disela-selanya ditanami arbei yang lezat. Namun kini daerah kelahiran Honda sudah ditelan Hamamatsu yaitu kota terbesar di provinsi itu. Ayahnya bernama Gihei Honda seorang tukang besi yang beralih menjadi pengusaha bengkel sepeda, sedangkan ibunya bernama Mika, Soichiro anak sulung dari sembilan bersaudara, namun hanya empat yang berhasil mencapai umur dewasa. Yang lain meninggal semasa kanak-kanak akibat kekurangan obat dan juga<br /> akibat lingkungan yang kumuh.</p>\r\n<p>&nbsp;</p>\r\n<p>Walaupun Gihei Honda miskin, namun ia suka pembaharuan. Ketika muncul pipa sigaret modal Barat, ia tidak ragu-ragu mengganti pipa cigaret tradisionalnya yang bengkok, tidak peduli para tetangganya menganggapnya aneh. Rupanya sifat itu dan juga keterampilannya menangani mesin menurun pada anak sulungnya. Sebelum masuk sekolah pun Soichiro sudah senang, membantu ayahnya di bengkel besi. Ia juga sangat terpesona melihat dan mendengar dengum mesin penggiling padi yang terletak beberapa kilometer dari desanya. Di sekolah prestasinya rendah. Honda mengaku ulangan-ulangannya buruk. Ia tidak suka membaca, sedangkan mengarang dirasakannya sangat sulit. Tidak jarang ia bolos. Sampai sekarang pun saya lebih efisien belajar dari TV daripada dari membaca. Kalau saya membaca, tidak ada yang menempel di otak, katanya. Ketika sudah kelas lima dan enam, bakat Soichiro tampak menonjol di bidang sains. Walaupun saat itu baru belasan tahun, namun dalam kelas-kelas sains di Jepang sudah dimunculkan benda-benda seperti baterai, timbangan, tabung reaksi dan mesin. Dengan mudah Soichiro menangkap keterangan guru dan dengan mudah ia menjawab pertanyaan guru. Beberapa waktu sebelum itu, untuk pertama kalinya Soichiro melihat mobil. Ketika itu saya lupa segalanya. Saya kejar mobil itu dan berhasil bergayut sebentar di belakangnya. Ketika mobil itu berhenti, pelumas menetes ke tanah. Saya cium tanah yang dibasahinya. Barangkali kelakuan saya persis seperti anjing. Lalu pelumas itu saya usapkan ke tangan dan lengan. Mungkin pada saat itulah di dalam hati saya timbul keinginan untuk kelak membuat mobil sendiri. Sejak saat itu kadang-kadang ada mobil datang ke kampung kami. Setiap kali mendengar deru mobil, saya berlari ke jalan, tidak peduli pada saat itu saya sedang menggendong adik.</p>\r\n<p>&nbsp;</p>\r\n<p>Soichiro hanya mengalami duduk di bangku sekolah selama sepuluh tahun. Sesudah lulus SD, anak nakal itu dikirim ke sekolah menengah pertama di Futumata yang tidak jauh dari kediamannya. Lulus dari sekolah menengah itu ia pulang ke rumah ayahnya. Gihei Honda sudah beralih dari pandai besi menjadi pengusaha bengkel sepeda. Gihei Honda memiliki majalah The World of Wheels yang dibaca Soichiro dengan penuh minat. Di majalah itu sebuah bengkel mobil dari Tokyo memasang iklan mencari karyawan. Soichiro buru-buru melamar dan ia diterima. Walaupun ayahnya khawatir, namun Soichiro diantar juga ke kota besar itu. Honda hampir tidak percaya pada telinganya Honda merasa saat menunggu dipanggil belajar menjadi montir itu benar-benar merupakan ujian ketabahan yang paling berat, yang pernah dihadapinya seumur hidupnya. Di masa-masa setelah itu ia sudah tidak takut lagi menghadapi rintangan apa pun berkat ketabahan yang diperolehnya selama menjadi kacung. Honda yang selama kariernya tidak tahu banyak mengenai uang, Cuma mendapat keuntungan sedikit sekali tahun pertama itu. Tetapi Honda merasa beruntung karena bengkelnya sukses. Ia memutuskan untuk menabung dan memperkirakan selama masa kerjanya akan mampu mengumpulkan sampai 1.000 yen.</p>\r\n<p>&nbsp;</p>\r\n<p>Selama hidupnya Honda terkenal sebagai penemu. Ia memegang hal paten lebih dari 100 penemuan pribadi. Yang pertama, ditemukannya ialah teknik pembuatan jari-jari mobil dari logam. Ketika itu mobil-mobil di Jepang memakai jari-jari kayu yang mudah terbakar. Perusahaan-perusahaan Jepang segera mengekspor jari-jari logam itu sampai ke India. Pada umur 25 tahun ia memperoleh keuntungan 1.000 yen sebulan. Perusahaan juga menghargai orang-orang muda dan selalu merekrut orang-orang muda untuk memberi darah baru dan gagasan segar. Ketika Honda mengundurkan diri tahun 1973, yang dipilihnya sebagai pengganti ialah Kyoshi Kawashima, kepala bagian riset perusahaan Honda. Selama sejarahnya, perusahaan Honda hanya pernah mengalami pemogokan sekali pada tahun 1954. Ketika itu Honda dan manajemen di satu pihak menghadapi pekerja-pekerja dan<br /> adik Honda di Pihak lain. Tetapi sebagai layaknya perusahaan di Jepang semuanya itu diselesaikan dengan musyawarah.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class="MsoNormal" style="line-height: 150%;">Sejak tahun 1973 Honda pindah ke pasaran kendaraan beroda empat untuk bisa tetap mengembangkan jumlah penghasilan perusahaan. Stafnya yang pada masa Honda bertambah 10% setiap tahun. Kalau mereka bertambah tua, artinya beban perusahaan akan bertambah berat. Padahal Honda menghadapi persaingan berat di pasaran dalam negeri dan luar negeri. Untuk bisa tetap menciptakan pasaran baru mereka harus selalu mencari teknik yang unik dan efisien serta menjual produk dengan harga bersaing. Namun ketika Honda dan Fujisawa mengundurkan diri pada musim gugur tahun 1973, Honda berkata, Saya bisa mundur tanpa perasaan khawatir, karena saya yakin perusahaan akan terus maju dengan penuh semangat, menanggulangi pelbagai kesulitan dan luwes, tanpa kehilangan kesegarannya. Terus terang saya merasa muda dalam hal mental maupun fisik, kata Honda. Saya kira kalian tidak bisa menang dari saya. Namun saya mesti mengakui sekarang saya sering merasa iri hati pada orang muda. Saya diberi tahu bahwa di Amerika pemimpin umum perusahaan berumur 40-an dan perusahaan yang dipimpin orang berusia 60-an tahun sering mengalami stagnasi.</p>', '2015-06-07 00:00:00', 6),
(4, 'Surya Paloh â€“ Pendiri Partai NasDem', 'Surya Dharma Paloh&nbsp;atau&nbsp;Surya Paloh. Pastinya kita semua sudah tak asing lagi dengan tokoh yang satu ini. Beliau adalah pendiri dan pemilik televisi swasta nasional terkenal &ldquo;Metro TV&rdquo; dan juga pemilik jaringan koran Harian Indonesia.<br /><br />\r\nNamanya juga sering mencuat beriringan dengan nama partai politik baru yaitu Partai Nasional Demokrat atau partai NasDem.<br /><br />\r\nSurya Paloh bukanlah nama baru dalam lingkaran tokoh Indonesia. Sejak jaman Orde Lama nama Surya Paloh sudah diidentikkan dengan seorang pengusaha dan juga pemimpin pergerakan mahasiswa.<>Berikut ini adalah uraian tentang profil, dan biografi Surya Paloh. Tak ketinggalan penulis juga akan mengulas tentang kerajaan bisnis serta partai politik yang dilahirkannya.</p>\r\n\r\n<h2>Biografi Surya Paloh</h2>\r\nSurya Paloh terlahir dengan nama Surya Dharma Paloh. Ia dilahirkan pada tanggal 16 Juli 1951 di Kutaraja, Banda Aceh, Aceh, Indonesia. Ayah Surya Paloh bernama Daud Paloh seorang polisi dann ibunya bernama Nursiah.<br /><br />Sejak kecil Surya Paloh sudah tinggal di asrama polisi. Jika sang ayah dipindah tugaskan maka Surya Paloh dan ibunya juga ikut pindah. Ketika SMA, Surya Paloh pindah ke Medan.Mulai Sma itulah Surya Paloh mengenal bisnis. Awalnya ia berkenalan dengan Sofyan dan A Gu. Dua teman Paloh inilah yang kemudian mngajarinya berbisnis. Awalnya mereka berbisnis teh, ikan asin, tembakau dan minyak goreng yang disuplainya untuk kebutuhan warga perkebunan.<br /><br />\r\nBisnis ini kemudian berkembang dan menghasilkan keuntungan yang banyak bagi Paloh. Ia kemudian mlirik bisnis karoseri yang kemudian mengantarnya menjadi distributor mobil Volkswagen dan Ford untuk wilayah Sumatra Utara dan Aceh.<br /><br />Selain berbisnis, Surya Paloh juga gemar berorganisasi. Ini dilakukannya ketika ia berkuliah di Fakultas Hukum Univrsitas Sumatra Utara. Surya Paloh menjadi pimpinan Kesatuan Aksi Pemuda Pelajar Indonesia (KAPPI). Hampir tiap hari ada saja yang dilakukan Surya Paloh bersama teman KAPPI nya. Entah itu berdemo mengkritisi kebijakan pemerintah yang menyimpang, rapat terbuka atau sekedar koordinasi. Karena kesibukannya inilah Surya Paloh sempat keteteran meneruskan kuliahnya. Akhirnya ia memilih untuk pindah ke Universitas Islam Sumatra Utara dan berhasil menamatkannya.<br /><br />Surya Paloh yang bertempat di asrama ABRI atau waktu itu terkenal anak kolong juga berinisiatif mendirikan organisasi yang bernama PP-ABRI (organisasi Putra Putri ABRI). Ini dilakukannya karena ia melihat para anak ABRI didaerahnya sering terpancing perilaku premanisme. Untuk mencegah hal itu meluas dan mmebudaya akhirnya mereka semua diwadahi dalam PP-ABRI dimana Surya Paloh yang mendirikan dan memimpin.\r\n<h3>Hijrah ke Jakarta | Mendirikan Bisnis Pers</h3>\r\nPanggilan hati Surya Paloh untuk brorganisasi dan brpolitik semakin menjadi ketika dirinya sudah lulus kuliah. Inilah yang kmudian mndorong Surya Paloh memutuskan pindah ke Jakarta.<br /><br />Ketika sampai di Jakarta. Surya brfikir bahwa brorganisasi dan berpolitik itu pastinya butuh uang dan pengaruh. Surya Paloh pun akhirnya mmutuskan untuk berbisnis terlebih dahulu.<br /><br />Usaha pertama yang dilakoninya adalah mendirikan catering. Catering Surya Paloh ini kemudian berkembang menjadi catering terbesar di Jakarta. Dari sinilah pundi-pundi uang Surya Paloh semakin tebal.<br /><br />\r\nSurya Paloh kemudian melirik bisnis media karena menurutnya media adalah bisnis yang sangat strategis. Karena selain laba yang diterima pasti besar, media juga sangat praktis dalam memobilisasi massa serta membuat opini publik dan itu sangat dibuthkan dikancah perpolitikan.<br /><br />\r\nSurya Paloh pun memutuskan menerjuni bisnis media. Ia tak gentar walaupun sebenarnya ia belum punya ilmu serta pengalaman dibisnis itu. Ia juga tak gentar walau prsaingan di bisnis media ktika itu sudah sangat ketat oleh pemain besar. Surya Paloh maju terus.<br /><br />\r\nSurya Paloh pun akhirnya mendirikan Surat Kabar Harian Prioritas. Untukmemenangkan persaingan, Harian Prioritas dibuat berwarna di halaman depan dan belakangnya. Surya Paloh juga memilih bahasa yang tegas dan cenderung blak-blakan dalam menyampaikan narasinya di Harian Prioritas.<br /><br />\r\nGayung pun bersambut. Masyarakat sangat antusias dengan surat kabar Prioritas. Per harinya terus mningkat. Namun sepertinya pemerintah kurang menyukai gaya Surat Kabar Prioritas dalam menulis yang akhirnya pemerintah mencabut SIUPP nya. Di usia yang masih belia yaitu 13 bulan Prioritas dicabut izin terbitnya.<br /><br />\r\nSurya Paloh pun menulis surat permohonan ke pemerintah agar diterbitkan SIUPP lagi untuk Prioritas akan tetapi hal itu tak dikabulkan pemerintah.\r\nDari sinilah semangat Surya Paloh semakin menjadi-jadi untuk memiliki kuasa di negeri ini melalui pers. Karena menurut Surya Paloh, pemerintah tak boleh mengekng kebebasan pers jika ingin demokrasi benar-benar diterapkan.<br /><br />\r\nSurya Paloh kemudian mencari akal untuk bekerja sama dengan pemilik Harian Media Indonesia, Drs T Yously Syah. Surya Paloh pun kemudian diam-diam menjadi pemilik dari Media Indonesia dan menerapkan gaya pers &ldquo;Prioritas &ldquo; yang blak-blakan dan apa adanya pada Media Indonesia.<br /><br />\r\nMengingat pengalaman yang lalu, Surya Paloh kemudian memiliki ide untuk bisa menguasai pasar daerah. Surya Paloh kemudian bekerja sama dengan 10 koran daerah. Surya Paloh kemudian menerbitkan tulisan tentang demokrasi di korann &ndash;koran daerah tersebut dengan berharap agar orang daerah juga melek apa itu demokrasi.<br /><br />\r\nPerjuangan Suryua Paloh dalam menuntut kebebasan pers sebagai perwujudan demokrasi pun akhirnya terwujud ketika Menpen Yunus Yosfiah mencabut&nbsp;<span lang="EN-US">Permenpen Nomor 1/Per/Menpen/1984</span>&nbsp;di tahun reformasi yaitu 1998.\r\n&nbsp;\r\n<h3>Mendirikan Metro TV</h3>\r\nI<span lang="EN-US">dealisme Surya Paloh menjadi memuncak untuk memberi penguatan baru kepada demokrasi melalui peran media yang dimiliki. Keinginannya untuk benar-benar memperoleh pengakuan sebagai publisher sejati tak lagi terbendung tatkala pada 18 November 2000, dia berhasil mengundang&nbsp;</span><span lang="EN-US">Presiden RI&nbsp;Abdurrahman Wahid untuk meresmikan pendirian Metro TV sebagai sebuah stasiun televisi berita pertama di Indonesia. Lambang kepala burung rajawali putih mulai muncul pada dua entitas media yang berpengaruh miliknya: koran Media Indonesia dan stasiun televisi Metro TV.<br /><br />Seminggu kemudian tepatnya pada 25 November 2000 Metro TV mulai on air pertama kali, menyajikan siaran berita selama 18 jam setiap hari dengan dukungan teknologi yang fully digital. Ini adalah sebuah pencapaian yang luar biasa. Baik dari sisi pilihan teknologi maupun konten siaran yang sepenuhnya berita. Kemudian, persis tanggal 1 April 2001 Metro TV siaran non stop selama 24 jam setiap hari. Kehadiran Metro TV menjadi sebuah terobosan terbesar dalam dunia pertelevisian nasional.<br /><br />Eksistensi Surya Paloh sebagai peublisher terkemuka, sebagai tokoh pers yang selalu menyuarakan suara masa depan tak lagi diragukan. Termasuk oleh mereka para insan pers yang sebelumnya lebih mau mengakui dia sebagai pengusaha ketimbang insan pers.&nbsp;</span><br /><span lang="EN-US"><br /></span>\r\nSepak terjang Surya Paloh pun semakin lincah. Surya Paloh kemudian bergabung dengan Golongan Karya atau Golkar guna mngimbangi usaha PKI yang kala itu berusaha menancapkan kukunya kembali di INdonesia melalui &nbsp;organisasi topengnya yaitu KBKB.<br /><br />\r\nJika dilihat kartu anggota Surya Paloh maka itu akan terlihat bahwa Surya Paloh sudah menjadi kader Golkar jauh seblum Akbar Tanjung (mantan ketua umum Golkar) masuk ke Golkar.\r\n<h3>Mendirikan Partai NasDem</h3>\r\nDalam perjalanannya, Surya Paloh mrasa bahwa dirinya sudah tak se visi lagi dengan Golkar. Akhirnya Surya Paloh memilih untuk keluar dari Golkar&nbsp; pada 009 lalu. Surya Paloh pun akhirnya mendirikan suatu gerakan restorasi menuju INdonesia baru yang lebih bersih , bermartabat dan maju yaitu gerakan Nasional Demokrat yang kmudian beruibah menjadi partai politi NasDem.<br /><br />\r\nNasDem awalnya didukung oleh beberapa tokoh dan usahawan seperti Sri Sultan HB X dan Hari Tanoe Sodibjo. Namun dalam perjalanan, Hari Tanoe Soedibjo sang pemilik MNC Group tersebut memilih keluar dari Nas Dem dan lebih memilih merapat ke Hanura besutan Wiranto.<br /><br />\r\nPada pemilu 2014 kelak, Partai NasDem yang sudah positif ikut pemilu mengangkat Surya Paloh sebagai Capres 2014.\r\n', '2015-06-08 00:00:00', 6),
(5, 'Membuat WEB Programming', '<p>Pernah dengarin WEB PROGRAMMING ? pastinya yang bagian anak IT gak asing lagi tuh dengan yang nama itu. lalu apakah kalian tahu bagaimana kerjanya si Adminnya ?</p>', '2015-06-26 00:00:00', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbweb`
--

CREATE TABLE IF NOT EXISTS `tbweb` (
`no` int(11) NOT NULL,
  `nama_web` varchar(100) NOT NULL,
  `url_web` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbweb`
--

INSERT INTO `tbweb` (`no`, `nama_web`, `url_web`) VALUES
(1, 'SEKOLAH-LAGI.COM', 'http://localhost/indonesia-baru/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbgambar`
--
ALTER TABLE `tbgambar`
 ADD PRIMARY KEY (`no_gambar`);

--
-- Indexes for table `tbkategori`
--
ALTER TABLE `tbkategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbkomentar`
--
ALTER TABLE `tbkomentar`
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tblartikel`
--
ALTER TABLE `tblartikel`
 ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbweb`
--
ALTER TABLE `tbweb`
 ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbgambar`
--
ALTER TABLE `tbgambar`
MODIFY `no_gambar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbkategori`
--
ALTER TABLE `tbkategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbkomentar`
--
ALTER TABLE `tbkomentar`
MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tblartikel`
--
ALTER TABLE `tblartikel`
MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbweb`
--
ALTER TABLE `tbweb`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
