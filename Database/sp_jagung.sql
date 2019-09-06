-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 03:32 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_jagung`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Annas Al Amin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` char(3) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  `tingkat_kepercayaan` float NOT NULL,
  `jawaban_ya` char(3) DEFAULT NULL,
  `jawaban_tidak` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`, `tingkat_kepercayaan`, `jawaban_ya`, `jawaban_tidak`) VALUES
('G01', 'Warna putih seperti tepung pada permukaan atas maupun bagian bawah daun.', 0.7, '', 'G06'),
('G02', 'Terdapat garis-garis berwarna putih sampai kekuningan pada permukaan daun.', 0.8, 'G01', 'G06'),
('G03', 'Daun-daun menggulung serta terpuntir.', 0.6, 'G02', 'G06'),
('G04', 'Tanaman jagung kerdil.', 0.9, 'G03', 'G06'),
('G05', 'Ukuran tongkol kecil.', 0.7, 'G04', 'G06'),
('G06', 'Permukaan daun atas dan bawah terdapat bercak kecil, bulat sampai oval.', 0.8, '', 'G66'),
('G07', 'Bercak berwarna coklat kemerahan pada daun.', 0.7, 'G06', 'G66'),
('G08', 'Terdapat bisul pada daun.', 0.7, 'G07', 'G66'),
('G09', 'Daun menjadi mengering.', 0.8, 'G08', 'G66'),
('G10', 'Daun berbecak berwarna hijau keabu-abuan atau coklat.', 0.6, 'G66', 'G77'),
('G11', 'Bercak memanjang dan berbentuk elips.', 0.7, 'G10', 'G77'),
('G12', 'Tanaman cepat mati atau mengering.', 0.8, 'G11', 'G77'),
('G13', 'Bercak berbentuk kumparan memanjang dan teratur.', 0.9, 'G77', 'G61'),
('G14', 'Biji jagung rusak/busuk.', 0.7, 'G13', 'G61'),
('G15', 'Tongkol jagung gugur.', 0.6, 'G14', 'G61'),
('G16', 'Tanaman jagung tampak layu atau mati.', 0.9, 'G15', 'G61'),
('G17', 'Bagian dalam batang busuk.', 0.8, 'G61', 'G22'),
('G18', 'Tanaman mudah rebah.', 0.6, 'G17', 'G22'),
('G19', 'Pangkal batang yang terinfeksi berwarna merah jambu sampai kemerahan.', 0.7, 'G18', 'G22'),
('G20', 'Isi batang terbelah-belah berongga.', 0.9, 'G19', 'G22'),
('G21', 'Daun berwarna hijau keabu-abuan pudar.', 0.7, 'G20', 'G22'),
('G22', 'Bercak berwarna agak kemerahan atau abu-abu pada pelepah daun.', 0.8, '', 'G24'),
('G23', 'Bercak berkembang dan terpisah-pisah seperti gejala panu.', 0.8, 'G22', 'G24'),
('G24', 'Terdapat bercak coklat dan kelayuan pada akar.', 0.7, '', 'G27'),
('G25', 'Buku-buku batang bawah membelah.', 0.8, 'G24', 'G27'),
('G26', 'Bagian dalam batang terutama serabut berwarna hitam.', 0.7, 'G25', 'G27'),
('G27', 'Pembengkakan pada biji-biji tongkol.', 0.8, '', 'G30'),
('G28', 'Bengkakan biji-biji tongkol ditutupi jaringan kehijauan, putih perak dan berkilau.', 0.9, 'G27', 'G30'),
('G29', 'Bagian dalam  bengkakan biji tongkol berwarna gelap.', 0.8, 'G28', 'G30'),
('G30', 'Pangkal kelobot tongkol yang terinfeksi tampat memucat.', 0.7, '', 'G44'),
('G31', 'Kelobot yang terinfeksi berwarna coklat.', 0.75, 'G30', 'G44'),
('G32', 'Biji berubah menjadi coklat, kisut, dan busuk.', 0.85, 'G31', 'G44'),
('G33', 'Pangkal biji terlihat jamur putih.', 0.75, 'G32', 'G44'),
('G34', 'Daun berwarna mosaik dan hijau dengan diselingi garis-garis kuning.', 0.65, 'G55', 'G01'),
('G35', 'Tanaman tampak lebih kekuningan.', 0.74, 'G34', 'G01'),
('G44', 'Tanaman jagung kerdil ', 0.68, '', 'G01'),
('G55', 'Ukuran tongkol kecil ', 0.79, 'G44', 'G01'),
('G61', 'Tanaman jagung tampak layu atau mati ', 0.66, '', 'G22'),
('G66', 'Permukaan daun atas dan bawah terdapat bercak kecil, bulat sampai oval', 0.77, '', 'G77'),
('G77', 'Bercak berwarna coklat kemerahan pada daun ', 0.69, '', 'G61');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_diagnosa`
--

CREATE TABLE `hasil_diagnosa` (
  `id_konsultasi` int(11) NOT NULL,
  `id_penyakit` char(3) NOT NULL,
  `tingkat_kepercayaan` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hasil_diagnosa`
--

INSERT INTO `hasil_diagnosa` (`id_konsultasi`, `id_penyakit`, `tingkat_kepercayaan`, `id_pengguna`, `tanggal`) VALUES
(9, 'P04', 0, 1, '2019-06-16 00:44:17'),
(10, 'P05', 0, 1, '2019-06-16 00:45:03'),
(11, 'P06', 0, 1, '2019-06-16 00:45:35'),
(12, 'P07', 0, 1, '2019-06-16 00:46:13'),
(13, 'P08', 0, 1, '2019-06-16 00:47:26'),
(14, 'P09', 0, 1, '2019-06-16 00:48:26'),
(15, 'P10', 0, 1, '2019-06-16 00:49:20'),
(16, 'P01', 0, 1, '2019-06-16 00:52:10'),
(17, 'P02', 0, 1, '2019-06-16 00:52:24'),
(32, 'P01', 72, 3, '2019-07-01 07:06:08'),
(33, 'P01', 56, 3, '2019-07-01 07:07:05'),
(34, 'P01', 56, 3, '2019-07-01 07:07:19'),
(35, 'P01', 56, 3, '2019-07-01 07:07:59'),
(36, 'P01', 56, 3, '2019-07-01 07:08:03'),
(37, 'P01', 48, 3, '2019-07-01 07:09:16'),
(38, 'P01', 24, 3, '2019-07-01 07:11:57'),
(39, 'P02', 21, 3, '2019-07-01 07:16:26'),
(40, 'P01', 56, 3, '2019-07-01 10:28:20'),
(41, 'P01', 1, 3, '2019-07-02 10:00:06'),
(42, 'P01', 58, 3, '2019-07-02 10:02:28'),
(45, 'P01', 19, 3, '2019-07-27 21:20:01'),
(46, 'P01', 29, 3, '2019-07-27 21:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_penyakit` char(3) NOT NULL,
  `id_gejala` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id_penyakit`, `id_gejala`) VALUES
('P01', 'G01'),
('P01', 'G02'),
('P01', 'G03'),
('P01', 'G04'),
('P01', 'G05'),
('P02', 'G06'),
('P02', 'G07'),
('P02', 'G08'),
('P02', 'G09'),
('P03', 'G66'),
('P03', 'G10'),
('P03', 'G11'),
('P03', 'G12'),
('P04', 'G77'),
('P04', 'G13'),
('P04', 'G14'),
('P04', 'G15'),
('P04', 'G16'),
('P05', 'G61'),
('P05', 'G17'),
('P05', 'G18'),
('P05', 'G19'),
('P05', 'G20'),
('P05', 'G21'),
('P06', 'G22'),
('P06', 'G23'),
('P07', 'G24'),
('P07', 'G25'),
('P07', 'G26'),
('P08', 'G27'),
('P08', 'G28'),
('P08', 'G29'),
('P09', 'G30'),
('P09', 'G31'),
('P09', 'G32'),
('P09', 'G33'),
('P10', 'G44'),
('P10', 'G55'),
('P10', 'G34'),
('P10', 'G35');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `email`, `username`, `password`) VALUES
(1, 'Annas Al Amin', 'annasinside@gmail.com', 'a3isagod', '1234annas'),
(3, 'z', 'z@gmail.com', 'z', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` char(3) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `faktor_kepastian` float NOT NULL,
  `definisi` text DEFAULT NULL,
  `solusi` text DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `faktor_kepastian`, `definisi`, `solusi`, `foto1`, `foto2`, `foto3`) VALUES
('P01', 'Penyakit Bulai (Peronosclerospora Maydis)', 0.8, 'Tanaman jagung yang terinfeksi dan tumbuh selama musim kemarau merupakan sumber inokulum pertama di Indonesia. Jamur dapat bertahan hidup sebagai miselium dalam embrio biji yang terinfeksi. Bila biji ini ditanam, jamurnya ikut berkembang dan menginfeksi bibit, selanjutnya dapat menjadi sumber inokulum (penyakit). Infeksi terjadi melalui stomata daun jagung muda (di bawah umur satu bulan) dan jamur berkembang secara lokal atau sistemik. Sporangia (konidia) dan sporangiofora dihasilkan pada permukaan daun yang basah dalam gelap. Sporangia berperan sebagai inokulum sekunder. ', '1.Tanam varietas jagung yang tahan bulai seperti Kalingga, Arjuna.\r\n2.Wiyasa, Bromo, Parikesit, dan Hibrida Cl.\r\n3.Tidak menanam benih jagung yang berasal dari tanaman sakit.\r\n4.Tanam jagung secara serempak pada awal sampai akhir musim kemarau. Penanaman jagung pada peralihan musim (marengan atau labuhan) akan menderita kerugian besar karena bulai.\r\n5.Perlakuan benih dengan fungisida sistemik seperti Ridomil 35 SD ,(5 g formulasi/kg benih Ridomil mengandung bahan aktif metalaksil 35%).\r\n', 'p1 - Copy - Copy.jpg', 'p1 - Copy.jpg', 'p1.jpg'),
('P02', 'Karat Daun (Puccinia Polysora Underw)', 0.7, 'Teliospora jamur jarang ditemukan dan tahap spora ini tidak begitu penting dalam siklus penyakit. Urediniospora berperan penting sebagai inokulum pertama dan kedua melalui penyebaran angin dan Trieng inf eksi tanaman jagung lainriya. Jamur karat ini sekurang kurangnya terdiri dari dua ras berdasarkan ukuran urediniospora. Di Bogor ditemukan berukuran (25-37) x (20-25) atau rata-rata 30 x 22,9 m, sedang di dataran tinggi di Pacet (1150 berukuran lebih besar, (2853) x (20-30) atau rata-rata 36 x 24. Di Amerika Serikat telah ditemukan 7 ras jamur karat ini.\r\n', '1.Menanam varietas tahankarat daun, seperti Lamuru, Sukmaraga, Palakka, Bima-1 atau Semar-10.\r\n2.Pemusnahan seluruh bagian tanaman sampai ke akarnya (Eradikasi tanaman) pada tanaman terinfeksi karat daun maupun gulma.\r\n3.Penyemprotan fungisida menggunakan bahan aktif benomil. Dosis/konsentrasi sesuai petunjuk  di kemasan.\r\n', 'p2 - Copy - Copy.jpg', 'p2 - Copy.jpg', 'p2.jpg'),
('P03', 'Hawar Daun Jagung (Helminthosporium Turcicum Pass)', 0.7, 'Jamur H. turcicum bertahan hidup sampai satu tahun berupa miselium dorman dalam daun, kelobot, atau bagian tanaman lainnya pada sisa-sisa tanaman di lapang. Diantara konidia yang tua dapat berubah menjadi klamidospora yang berdinding tebal sehingga dapat bertahan lama. Konidia dapat tersebar jauh oleh angin sampai menginfeksi daun jagung. Infeksi kedua terjadi di antara tanaman jagung sekitarnya dari bercakbercak yang banyak terbentuk pada daun. ', '1.Menanam varietas tahan hawar daun, seperti : Bisma, Pioner-2, pioner-14, Semar-2 dan semar-5.\r\n2.Pemusnahan seluruh bagian tanaman sampai ke akarnya (Eradikasi tanaman) pada tanaman terinfeksi bercak daun.\r\n3.Penyemprotan  fungisida  menggunakan bahan aktif mankozeb atau dithiocarbamate. Dosis sesuai petunjuk di kemasan.\r\n', 'p3 - Copy - Copy.jpg', 'p3 - Copy.jpg', 'p3.jpg'),
('P04', 'Bercak Daun (Bipolaris Maydis Syn)', 0.8, 'Jamur bertahan hidup sebagai miselium dan spora dalam sisa-sisa tanaman jagung di lapang atau pada biji simpanan di peti-peti dan gudang. Konidia terbawa angin atau percikan air hujan sampai pada tanaman jagung sehingga terjadi infeksi pertama. Sporulasi pada bercak-bercak menghasilkan tambahan inokulum pertama dan kedua. Pada keadaan yang baik, siklus lengkap penyakit oleh ras T berlangsung selama 3 sampai 4 hari. Biji jagung yang terinfeksi berperan sebagai sumber inokulum pertama dalam penyebaran penyakit ini. Biji yang terinfeksi tidak meracuni hewan ternak yang memakannya. ', '1.Gunakan varietas tahan.\r\n2.Pembajakan tanah yang bersih dapat mengurangi infeksi.\r\n3.Hindari menanam jagung terlalu rapat.\r\n4.Gunakan fungisida sistemik, terutama sejak bunga jantan muncul dengan interval 7-10 hari.\r\n5.Hindari menanam jagung yang bersitoplasma jantan mandul.\r\n', 'p4 - Copy - Copy.jpg', 'p4 - Copy.jpg', 'p4.jpg'),
('P05', 'Busuk Batang Jagung (Gibberella Roseum F.sp. Cerea', 0.5, 'Peritesia matang pada keadaan cuaca hangat dan basah/lembab. Askospora dari dalam peritesia dipancarkan keluar bila telah matang dan tersebar oleh angin ke batang dan tongkol jagung lainnya. Bila askospora berkecambah, jaringan jagung tertembus dan terjadi infeksi. Tanaman jagung sakit menghasilkan pertumbuhan miselium berwarna merah nila dan memproduksi konidia bila cuaca hangat dan lembab. Jamur bertahan hidup pada sisa-sisa tanaman jagung terutama pada batang, kelobot dan tongkol. ', '1.Melakukan pergiliran tanaman.\r\n2.Melakukan pemupukan berimbang, menghindari pemberian N tinggi dan K rendah.\r\n3.Drainase baik.\r\n4.Pengendalian penyakit busuk batang (Fusarium) secara hayati dapat dilakukan dengan cendawan   antagonis Trichodermasp.\r\n', 'p5 - Copy - Copy.jpg', 'p5 - Copy.jpg', 'p5.jpg'),
('P06', 'Busuk Pelepah (Rhizoctonia Zeae Voorhess)', 0.65, 'Rhizoctonia zeae bertahan hidup sebagai  miselium istirahat dan sklerotia, pada biji, tanah dan sisa-sisa tanaman di lapang. Bila lingkungan baik, sklerotia berkecambah/memperbanyak diri  dan menyebar melalui pelepah daun secara melompat lompat dengan hifa udaranya sampai ke tongkol. Hifa tersebut khas dengan penyempitan pada sudut percabangan yang tegak lurus. Jamur tidak memproduksi spora.', '1.Tanam varietas tahan.\r\n2.Pilih varietas dengan pelepah berkurang di bawah batang untuk menghindari perkembangan penyakit.\r\n3.Sebaiknya menanam jagung pada awal musim kemarau.\r\n', 'p6 - Copy - Copy.jpg', 'p6 - Copy.jpg', 'p6.jpg'),
('P07', 'Busuk Arang (Macrophomina Phaseoli (Mambl.) Ashby)', 0.75, 'Jamur ini bertahan hidup pada sisa-sisa tanaman di lapang dalam bentuk sklerotia. Miselia jamur menginfeksi akar dan berkembang dalam jaringan korteks batang. Bibit jagung yang ditanam timbul gejala hawar bila terserang. ', 'Lakukan pemberiaan air agar kelembaban tetap tinggi bila  tanaman jagung telah bermalai, terutama untuk daerah beririgasi pada pertanaman musim kemarau. Penyakit-penyakit Tongkol, Biji dan Malai oleh Jamur  ', 'p7 - Copy - Copy.jpg', 'p7 - Copy.jpg', 'p7.jpg'),
('P08', 'Penyakit Gosong (Ustilago Maydis (DC.) Cda', 0.85, 'Teliospora dapat bertahan hidup lama dalam tanah pada lingkungan yang kurang baik karena berdinding sel tebal. Sporidia yang dihasilkan dari teliospora yang berkecambah terbawa oleh arus angin dan percikan air dapat menginfeksi jagung muda. Miselium yang berinti dua menembus daun jagung melalui stomata, pelukaan, atau langsung melalui dinding sel yang dapat merangsang sel inang memperbanyak diri sehingga terjadi bengkakan. ', '1.Tanam varietas yang tahan.\r\n2.Buang dan bakar bagian yang terinfeksi sebelum bengkakan pecah.\r\n3.Jaga kesuburan tanah yang seimbang.\r\n', 'p8 - Copy - Copy.jpeg', 'p8 - Copy.jpeg', 'p8.jpeg'),
('P09', 'Busuk Tongkol Diplodia (Diplodia Maydis (Berk.) Sa', 0.95, 'Jamur ini bertahan hidup dengan spora dalam piknidia berdinding tebal pada sisa-sisa tanaman di lapang dan spora/miselium pada benih. Pada keadaan lembab dan hangat, spora keluar dari dalam piknidia dan tersebar oleh angin, hujan, atau oleh serangga. Infeksi pertama pada jagung terjadi melalui dasar batang, mesokotil, dan akar atau pada buku-buku di bawah tongkol sampai dasar batang. Patogen kemudian berkembang dalam batang menyebabkan busuk batang. Patogen yang terbawa dalam benih, bila ditanam timbul gejala hawar pada bibit. ', '1.Galur-galur murni umumnya tahan Diplodia.\r\n2.Lakukan panen lebih awal.\r\n3.Penyimpanan yang lebih baik dengan kandungan air tongkol di bawah 20% atau untuk biji di bawah 15%.\r\n', 'p9 - Copy - Copy.jpg', 'p9 - Copy.jpg', 'p9.jpg'),
('P10', 'Virus Mosaik Kerdil Jagung (Maize Dwarf Mosaic Vir', 0.9, 'Mula-mula pada daun muda tampak gejala belang/mosaik terang dan hijau gelap yang tidak beraturan, kemudian berkembang menjadi garis-garis sempit sepanjang tulang daun, tampak seperti pulau-pulau hijau gelap dengan latar belakang kuning (klorotik). Pada tanaman dewasa, daun menjadi hijau kekuningan, kadang-kadang diikuti gejala kerdil, anakan banyak, kuncup tongkol bertambah, dan biji-biji tongkol berkurang. Inf eksi lebih dini dapat memperlemah tanaman terhadap penyakit busuk batang/akar sehingga tanaman cepat mati. Gejala di lapang tampak pada tanaman umur satu bulan setelah tanam. Pada permukaan daun jagung banyak ditemukan vektor Aphida. Partikel virus berbentuk bulat, berukuran 12-15 x 750 nm. ', '1.Mencabut tanaman jagung terinfeksi virus seawal mungkin agar tidak menjadi sumber infeksi bagi tanaman sekitarnya ataupun pertanaman musim mendatang.\r\n2.Melakukan pergiliran tanaman, tidak menanam tanaman jagung secara terus menerus di lahan yang sama.\r\n3.Penyemprotan pestisida apabila di lapangan populasi vektor cukup tinggi. Dosis/konsentrasi tidak melebihi anjuran dalam  kemasan.\r\n4.Tidak menanam benih jagung dari tanaman terinfeksi virus.\r\n', 'p10 - Copy - Copy.jpg', 'p10 - Copy.jpg', 'p10.jpg'),
('P11', 'Gudiken', 0, 'w', 'w', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_diagnosa`
--

CREATE TABLE `tmp_diagnosa` (
  `id_pengguna` int(11) NOT NULL,
  `id_penyakit` char(3) NOT NULL,
  `id_gejala` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `id_pengguna` int(11) NOT NULL,
  `id_gejala` char(3) DEFAULT NULL,
  `status` int(3) NOT NULL,
  `cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_penyakit`
--

CREATE TABLE `tmp_penyakit` (
  `id_pengguna` int(11) NOT NULL,
  `id_penyakit` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  ADD CONSTRAINT `hasil_diagnosa_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `hasil_diagnosa_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`);

--
-- Constraints for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD CONSTRAINT `pengetahuan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`),
  ADD CONSTRAINT `pengetahuan_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
