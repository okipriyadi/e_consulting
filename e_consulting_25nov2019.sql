-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2019 pada 22.30
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_consulting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `area_perubahan`
--

CREATE TABLE `area_perubahan` (
  `id_area_perubahan` int(11) NOT NULL,
  `area_perubahan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `send_to` int(5) NOT NULL,
  `send_by` int(3) NOT NULL,
  `message` tinytext NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_judul_chat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`chat_id`, `send_to`, `send_by`, `message`, `time`, `id_judul_chat`) VALUES
(1, 1, 2, 'hallo', '2019-11-09 00:03:27', 0),
(2, 1, 2, 'dinda ', '2019-11-09 00:03:27', 0),
(3, 1, 2, 'dimanakah kau berada', '2019-11-09 00:03:27', 0),
(4, 1, 2, 'tes', '2019-11-09 00:03:27', 0),
(5, 1, 2, 'tes', '2019-11-09 00:03:27', 0),
(6, 1, 2, 'tos', '2019-11-09 00:03:27', 0),
(7, 1, 2, 'hei hei', '2019-11-09 00:03:27', 0),
(8, 1, 2, 'ja', '2019-11-09 00:03:27', 0),
(9, 3, 2, 'helo ahmad', '2019-11-09 00:03:27', 0),
(10, 1, 4, 'hallo Dida', '2019-11-09 00:03:27', 0),
(11, 1, 4, 'jkl', '2019-11-09 00:03:27', 0),
(12, 2, 4, 'vvv', '2019-11-09 00:03:27', 0),
(13, 4, 5, 'hallo cuk', '2019-11-09 00:03:27', 0),
(14, 4, 7, 'hai sleman', '2019-11-09 00:03:27', 0),
(15, 2, 7, 'hai oki', '2019-11-09 00:03:27', 0),
(16, 7, 8, 'halo karim', '2019-11-09 00:03:27', 0),
(17, 8, 7, 'hai po', '2019-11-09 00:03:27', 0),
(18, 8, 7, 'po kabare', '2019-11-09 00:03:27', 0),
(19, 5, 10, 'survei1', '2019-11-09 00:03:27', 0),
(20, 2, 12, 'selesai ?', '2019-11-09 00:03:27', 0),
(21, 2, 12, 'mohon diisi survei', '2019-11-09 00:03:27', 0),
(22, 3, 1, 'piw', '2019-11-09 00:03:27', 0),
(23, 3, 11, 'jkh', '2019-11-09 00:03:27', 0),
(24, 4, 11, 'jhbkj', '2019-11-09 00:03:27', 0),
(25, 4, 11, '', '2019-11-09 00:03:27', 0),
(26, 3, 11, 'asd', '2019-11-09 00:03:27', 0),
(27, 12, 3, 'hallo ji', '2019-11-09 00:03:27', 0),
(28, 3, 11, 'poi', '2019-11-09 00:03:27', 0),
(29, 11, 3, 'kjh', '2019-11-09 00:03:27', 0),
(30, 3, 11, 'mm', '2019-11-09 00:03:27', 0),
(31, 4, 11, ',.', '2019-11-09 00:03:27', 0),
(32, 4, 11, '', '2019-11-09 00:03:27', 0),
(33, 4, 11, '.', '2019-11-09 00:03:27', 0),
(34, 4, 11, '', '2019-11-09 00:03:27', 0),
(35, 4, 11, 'sdf', '2019-11-09 00:03:27', 0),
(36, 4, 11, '', '2019-11-09 00:03:27', 0),
(37, 4, 11, 'asd', '2019-11-09 00:03:27', 0),
(38, 4, 11, '', '2019-11-09 00:03:27', 0),
(39, 3, 11, 'll', '2019-11-09 00:03:27', 0),
(40, 4, 11, 'pp', '2019-11-09 00:03:27', 0),
(41, 4, 11, '', '2019-11-09 00:03:27', 0),
(42, 4, 11, 'yu', '2019-11-09 00:03:27', 0),
(43, 4, 11, 'poi', '2019-11-09 00:03:27', 0),
(44, 7, 11, 'ghg', '2019-11-09 00:03:27', 0),
(45, 7, 11, 'hkj', '2019-11-09 00:03:27', 0),
(46, 4, 11, 'hg', '2019-11-09 00:03:27', 0),
(47, 4, 11, '', '2019-11-09 00:03:27', 0),
(48, 8, 11, 'mm', '2019-11-09 00:03:27', 0),
(49, 4, 11, 'lk', '2019-11-09 00:03:27', 0),
(50, 4, 11, '', '2019-11-09 00:03:27', 0),
(51, 4, 11, '', '2019-11-09 00:03:27', 0),
(52, 4, 11, '', '2019-11-09 00:03:27', 0),
(53, 4, 11, 'mn', '2019-11-09 00:03:27', 0),
(54, 4, 11, '', '2019-11-09 00:03:27', 0),
(55, 7, 11, '', '2019-11-09 00:03:27', 0),
(56, 7, 11, 'hjgj', '2019-11-09 00:03:27', 0),
(57, 4, 11, 'tes', '2019-11-09 00:03:27', 0),
(58, 1, 11, 'hallo ji', '2019-11-09 00:03:27', 0),
(59, 1, 11, 'ya ada yang bisa dibantu', '2019-11-09 00:03:27', 0),
(60, 1, 11, '', '2019-11-09 00:03:27', 0),
(61, 2, 1, 'aa', '2019-11-09 00:03:27', 0),
(62, 3, 2, 'test', '2019-11-09 00:03:27', 0),
(63, 3, 2, 'halo', '2019-11-09 00:03:27', 0),
(64, 3, 2, 'hallo mas fikri', '2019-11-09 00:03:27', 0),
(65, 2, 3, 'konsul ', '2019-11-09 00:03:27', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `jawaban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `skor` float DEFAULT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pilihan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `jawaban`, `id_pertanyaan`, `skor`, `file`, `id_pilihan`, `id_user`, `tanggal`, `status`, `keterangan`) VALUES
(57, 'Deputi Bidang Kelembagaan dan Tata Laksana', 227, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(58, 'Konsultasi SAKIP', 228, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(59, 'Geni Indah Oktapiani', 229, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(60, 'Ya', 230, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(61, 'Ya', 231, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(62, 'Ya', 232, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(63, 'Tidak', 233, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(64, 'Tidak', 234, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(65, 'dasd', 245, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(66, 'Deputi Bidang Kelembagaan dan Tata Laksana', 227, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(67, 'Konsultasi RB', 228, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(68, 'Azizah Try Wulandari', 229, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(69, 'Ya', 230, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(70, 'Ya', 231, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(71, 'Tidak', 232, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(72, 'Ya', 233, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(73, 'Ya', 234, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(74, 'adsd', 245, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(75, 'Deputi Bidang Kelembagaan dan Tata Laksana', 227, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(76, 'Deputi Bidang Kelembagaan dan Tata Laksana', 227, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(77, '5', 0, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(78, '1', 0, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(79, '2', 0, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(80, '3', 0, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(81, '4', 0, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(82, '5', 0, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(83, 'Deputi Bidang Reformasi Birokrasi, Akuntabilitas Aparatur, dan Pengawasan', 227, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(84, 'Geni Indah Oktapiani', 229, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(85, 'Tidak', 230, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(86, 'Deputi Bidang Reformasi Birokrasi, Akuntabilitas Aparatur, dan Pengawasan', 227, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(87, 'Biro Sumber Daya Manusia dan Umum', 227, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL),
(88, 'Deputi Bidang Kelembagaan dan Tata Laksana', 227, NULL, '', 0, 0, '2019-11-09 00:03:28', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul_chat`
--

CREATE TABLE `judul_chat` (
  `id_judul_chat` int(11) NOT NULL,
  `judul_chat` text NOT NULL,
  `jenis_konsultasi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `judul_chat`
--

INSERT INTO `judul_chat` (`id_judul_chat`, `judul_chat`, `jenis_konsultasi`) VALUES
(1, 'poi', 'LHKASN'),
(2, 'poi', 'LHKASN'),
(3, 'poi', 'LHKASN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `id_survei` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pertanyaan`, `kategori`, `type`, `id_parent`, `id_survei`) VALUES
(227, 'Unit Kerja', '1', 'radio', NULL, 3),
(228, 'Jenis pelayanan konsultasi (consulting) yang diterima oleh unit kerja', '1', 'multiple_select', NULL, 3),
(229, 'Auditor yang memberikan pelayanan konsultasi (consulting)', '1', 'radio', NULL, 3),
(230, 'Menurut anda, apakah tersedia tempat dan waktu konsultasi yang memadai? *', '2', 'radio', NULL, 3),
(231, 'Menurut anda, apakah unit kerja memperoleh pelayanan konsultasi dengan mudah? *', '3', 'radio', 230, 3),
(232, 'Menurut anda, apakah auditor mampu memberikan informasi dan saran yang dibutuhkan oleh unit kerja? *', '4', '', NULL, 3),
(233, 'Menurut anda, apakah auditor mampu bersikap sopan dan ramah dalam memberikan pelayanan konsultasi? ', '5', '', NULL, 3),
(234, 'Menurut anda, apakah unit kerja merasa terbantu atas informasi dan saran yang diberikan oleh auditor? *', '5', 'radio', NULL, 3),
(239, 'Alasan anda menjawab tidak', '', 'input', 230, 3),
(240, 'Alasan anda menjawab tidak', '', 'input', 231, 3),
(241, 'Alasan anda menjawab tidak', '', 'input', 232, 3),
(242, 'Alasan anda menjawab tidak', '', 'input', 233, 3),
(243, 'Alasan anda menjawab tidak', '', 'input', 234, 3),
(245, 'Kritik dan saran anda untuk meningkatkan mutu pelayanan Inspektorat', '', 'input', NULL, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE `pilihan` (
  `id_pilihan` int(11) NOT NULL,
  `pilihan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor` int(11) DEFAULT NULL,
  `id_pertanyaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pilihan`
--

INSERT INTO `pilihan` (`id_pilihan`, `pilihan`, `skor`, `id_pertanyaan`) VALUES
(691, 'Konsultasi SAKIP', NULL, 228),
(692, 'Konsultasi Manajemen Resiko', NULL, 228),
(693, 'Konsultasi RB', NULL, 228),
(694, 'Konsultasi ZI', NULL, 228),
(695, 'Deputi Bidang Reformasi Birokrasi, Akuntabilitas Aparatur, dan Pengawasan', NULL, 227),
(696, 'Deputi Bidang Kelembagaan dan Tata Laksana', NULL, 227),
(697, 'Deputi Bidang Sumber Daya Manusia Aparatur', NULL, 227),
(698, 'Deputi Bidang Pelayanan Publik', NULL, 227),
(699, 'Biro Manajemen Kinerja, Organisasi, dan Kerja Sama', NULL, 227),
(700, 'Biro Hukum, Komunikasi, dan Informasi Publik', NULL, 227),
(701, 'Biro Sumber Daya Manusia dan Umum', NULL, 227),
(703, 'Geni Indah Oktapiani', NULL, 229),
(704, 'Azizah Try Wulandari', NULL, 229),
(705, 'Ref Fitri Yenti Z.', NULL, 229),
(706, 'Buono Aji Santoso', NULL, 229),
(707, 'Ayudya Naomi Niswandari', NULL, 229),
(708, 'Bagas Adhi Pamungkas', NULL, 229),
(709, 'Dian Ismiarti', NULL, 229),
(710, 'Hesti Setianingsih', NULL, 229),
(711, 'Dani Triatmajaya', NULL, 229),
(712, 'Devinta Endhira Ika Lestari', NULL, 229),
(713, 'Viony Septilika Abigail\r\n', NULL, 229),
(714, 'Fikri Azardy', NULL, 229),
(715, 'Hiasinta Florentina Br Sembiring', NULL, 229),
(716, 'Widayati Kusumaningrum', NULL, 229),
(717, 'Ya', NULL, 230),
(718, 'Tidak', NULL, 230),
(719, 'Ya', NULL, 231),
(720, 'Tidak', NULL, 231),
(721, 'Ya', NULL, 232),
(722, 'Tidak', NULL, 232),
(723, 'Ya', NULL, 233),
(724, 'Tidak', NULL, 233),
(725, 'Ya', NULL, 234),
(726, 'Tidak', NULL, 234),
(727, 'isi_sendiri', NULL, 239),
(728, 'isi_sendiri', NULL, 240),
(729, 'isi_sendiri', NULL, 241),
(730, 'isi_sendiri', NULL, 242),
(731, 'isi_sendiri', NULL, 243),
(732, 'isi_sendiri', NULL, 245);

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei`
--

CREATE TABLE `survei` (
  `id_survei` int(11) NOT NULL,
  `survei` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `instansi` text DEFAULT NULL,
  `jenis_konsultasi` text DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL COMMENT '1 untuk kemenpan, 2 untuk tamu',
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `instansi`, `jenis_konsultasi`, `hp`, `role`, `foto`) VALUES
(1, 'Buono Aji', 'aji', '098F6BCD4621D373CADE4E832627B4F6', NULL, NULL, NULL, NULL, 0, 'aji22.jpg'),
(2, 'Oki Priyadi', 'oki', '5c33ac5a54d19c225ba33f333539dce9', 'oki.priyadi2@menpan.go.id', NULL, NULL, NULL, 0, 'oki2.jpg'),
(3, 'Fikri Azardi', 'fikri', '5c33ac5a54d19c225ba33f333539dce9', NULL, NULL, NULL, NULL, 0, 'fikri2.jpg'),
(4, 'Sinta', 'sinta', NULL, 'oki.priyadi@menpan.go.id', '', '', '', 2, 'sinta.jpg'),
(5, 'naomi', 'naomi', NULL, 'tu.inspektorat@menpan.go.id', 'inspektorat kemendagri', 'konsultasi rutin', '08990801932', 2, 'naomi.jpg'),
(7, 'Vioni', 'vioni', NULL, 'isy_karim@karim.com', 'karimun', 'blabla', '085220902022', 2, 'vioni.jpeg'),
(8, 'Azizah', 'azizah', NULL, 'opp@asda.com', '', '', '', 2, 'azizah.jpg'),
(9, 'Bagas', 'bagas', NULL, 'asd@asd.com', 'asd', 'asd', '1231231', 2, 'bagas.jpg'),
(10, 'Dani', 'Asasdas@sd.com', NULL, 'Asasdas@sd.com', '', '', '', 2, 'dani.jpeg'),
(11, 'Dian', 'dian@gmail.com', NULL, 'dian@gmail.com', '', '', '', 2, 'dian.jpg'),
(12, 'Geni', 'bass_of_ncreep@yahoo.com', NULL, 'bass_of_ncreep@yahoo.com', 'ngawi', 'manajemen resiko', '085209020221', 2, 'geni.jpg'),
(13, 'oki2', 'oki.priyadi07@gmail.com', NULL, 'oki.priyadi07@gmail.com', 'ewq', 'sadas', 'sdas', 2, ''),
(14, '', 'dasd@sda.com', NULL, 'dasd@sda.com', '', '', '', 2, ''),
(15, 'oi', 'oi@oi.com', NULL, 'oi@oi.com', 'sada', 'asd', '0923824', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `area_perubahan`
--
ALTER TABLE `area_perubahan`
  ADD PRIMARY KEY (`id_area_perubahan`);

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `sent_to` (`send_to`),
  ADD KEY `send_by` (`send_by`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `judul_chat`
--
ALTER TABLE `judul_chat`
  ADD PRIMARY KEY (`id_judul_chat`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indeks untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id_pilihan`);

--
-- Indeks untuk tabel `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id_survei`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `foto` (`foto`),
  ADD KEY `foto_2` (`foto`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `area_perubahan`
--
ALTER TABLE `area_perubahan`
  MODIFY `id_area_perubahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `judul_chat`
--
ALTER TABLE `judul_chat`
  MODIFY `id_judul_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=733;

--
-- AUTO_INCREMENT untuk tabel `survei`
--
ALTER TABLE `survei`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`send_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
