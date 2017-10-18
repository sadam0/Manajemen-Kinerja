-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Sep 2017 pada 07.38
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ish_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `attachment`
--

CREATE TABLE `attachment` (
  `id` int(11) NOT NULL,
  `kartu_id` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `attachment`
--

INSERT INTO `attachment` (`id`, `kartu_id`, `file`, `ukuran`, `url`) VALUES
(1, '50', '20170520_170521_0008.jpg', '177114', 'file/20170520_170521_0008.jpg'),
(2, '51', 'BAB II LANDASAN TEORI.docx', '461966', 'file/BAB II LANDASAN TEORI.docx'),
(3, '53', 'Client dan UKM BISA.pptx', '133203', 'file/Client dan UKM BISA.pptx'),
(4, '51', '20170520_170521_0008.jpg', '177114', 'file/20170520_170521_0008.jpg'),
(5, '52', 'Bahan_Panduan_Tata_Tulis_Metlit_D3_MIF.doc', '181760', 'file/Bahan_Panduan_Tata_Tulis_Metlit_D3_MIF.doc'),
(6, '53', 'BAB II LANDASAN TEORI.docx', '461966', 'file/BAB II LANDASAN TEORI.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `duedate`
--

CREATE TABLE `duedate` (
  `id` int(11) NOT NULL,
  `kartu_id` int(100) NOT NULL,
  `tanggal_tempo` date NOT NULL,
  `tanggal_sekarang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `duedate`
--

INSERT INTO `duedate` (`id`, `kartu_id`, `tanggal_tempo`, `tanggal_sekarang`) VALUES
(4, 34, '2017-08-31', '0000-00-00'),
(5, 54, '2017-09-30', '0000-00-00'),
(6, 51, '2017-08-26', '0000-00-00'),
(7, 53, '2017-08-31', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_utama`
--

CREATE TABLE `kartu_utama` (
  `id` int(11) NOT NULL,
  `entry_id` int(10) NOT NULL,
  `judul_kartu` varchar(50) NOT NULL,
  `pemilik_kartu` varchar(50) NOT NULL,
  `rank_value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu_utama`
--

INSERT INTO `kartu_utama` (`id`, `entry_id`, `judul_kartu`, `pemilik_kartu`, `rank_value`) VALUES
(12, 0, 'sdsds', 'cepi', 0),
(23, 2, 'ffdf', 'cepi', 1),
(27, 6, 'asdasdsaf', 'cepi', 2),
(28, 7, 'nadya medina', 'cepi', 3),
(29, 8, 'hello my friend', 'cepi', 4),
(50, 9, 'rekruter CITYLINK', 'wina', 0),
(51, 10, 'REPORT INTERVIEW', 'budi', 0),
(52, 11, 'DATA INTERVIEW USER', 'gina', 0),
(53, 12, 'REPORT BJPS', 'review', 0),
(54, 13, 'PSIKOTES REPORT', 'done', 0),
(55, 14, 'bpjs', 'revi', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_kartu`
--

CREATE TABLE `list_kartu` (
  `id` int(11) NOT NULL,
  `kartu_utama_id` int(11) NOT NULL,
  `sub_kartu` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_kartu`
--

INSERT INTO `list_kartu` (`id`, `kartu_utama_id`, `sub_kartu`, `status`) VALUES
(1, 2, 'asdas', '0'),
(2, 1, 'asdas', '0'),
(3, 3, 'wefwef', '0'),
(4, 3, 'asdas', '0'),
(5, 3, 'dddsdsds', '0'),
(6, 2, 'asdassad', '0'),
(7, 4, 'asdasdasd', '0'),
(8, 4, 'hujh', '0'),
(9, 4, 'hujh', '0'),
(10, 2, 'asd', '0'),
(11, 3, 'fdf', '0'),
(12, 5, 'asdas', '0'),
(13, 1, 'asdasdsa', '0'),
(14, 1, 'asdas', '0'),
(15, 2, 'asdasasfdsaf', '0'),
(16, 2, 'fasfsa', '0'),
(17, 2, 'asfasfasfsaf', '0'),
(18, 6, 'asdsadasdsa', '0'),
(19, 1, 'dasdasd', '0'),
(20, 1, 'sadasdasdasd', '0'),
(21, 1, 'asdasdas', '0'),
(22, 1, 'asdasd', '0'),
(23, 1, 'dcsd', '0'),
(24, 1, 'sadasd', '0'),
(25, 7, 'adasd', '0'),
(26, 8, 'asdasdas', '0'),
(27, 1, 'asdasd', '0'),
(28, 1, 'asdasdkolk', '0'),
(29, 9, 'sdfsdfsd', '0'),
(30, 9, 'sdfsdf', '0'),
(31, 9, 'safasfas', '0'),
(32, 1, 'asdasdsa', '0'),
(33, 10, 'sdfsdf', '0'),
(34, 10, 'sdfsdf', '0'),
(35, 4, 'asdfdsafsdf', '0'),
(36, 1, 'asdasd', '0'),
(37, 2, 'asdas', '0'),
(38, 2, 'asdasdasfasf', '0'),
(39, 2, '', '0'),
(40, 4, 'asdasdasd', '0'),
(41, 12, 'sadasd', '0'),
(42, 12, 'asdasd', '0'),
(43, 28, 'sayang nadya', '0'),
(44, 26, 'hello', 'finish'),
(45, 29, 'hello ', '0'),
(46, 32, 'asdsa', '0'),
(47, 32, 'sdfs', '0'),
(48, 24, 'asdas', '0'),
(49, 35, 'fghfghf', ''),
(50, 30, 'jejak', 'checked'),
(51, 41, 'asdas', 'finish'),
(52, 30, 'asdasdasfasf', 'checked'),
(53, 43, 'checked', ''),
(54, 33, 'sdsadas', ''),
(55, 44, 'test 1 ', ''),
(56, 44, 'asdasd', 'finish'),
(57, 47, 'main dota', ''),
(58, 47, 'asdasdasd', 'finish'),
(59, 34, 'bermain bola', 'finish'),
(60, 51, 'data test rekruitment', ''),
(61, 53, 'pasien yang koid', 'finish'),
(62, 52, 'main ps', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `email`, `password`) VALUES
(1, 'gina@ish.com', '12345'),
(2, 'cepi@a.com', '12345'),
(3, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duedate`
--
ALTER TABLE `duedate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kartu_utama`
--
ALTER TABLE `kartu_utama`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entry_id` (`entry_id`);

--
-- Indexes for table `list_kartu`
--
ALTER TABLE `list_kartu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `duedate`
--
ALTER TABLE `duedate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kartu_utama`
--
ALTER TABLE `kartu_utama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `list_kartu`
--
ALTER TABLE `list_kartu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
