-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2020 at 06:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(11) NOT NULL,
  `solusi_dan_pertanyaan` varchar(200) DEFAULT NULL,
  `bila_benar` int(11) DEFAULT NULL,
  `bila_salah` int(11) DEFAULT NULL,
  `mulai` char(1) DEFAULT NULL,
  `selesai` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `solusi_dan_pertanyaan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(0, 'MAAF UNTUK SEMENTARA, SISTEM INI BELUM DAPAT MENDIAGNOSA', 0, 0, 'N', 'Y'),
(1, 'Apakah Anda merasakan demam tinggi?', 2, 27, 'Y', 'N'),
(2, 'Apakah Anda merasakan kedinginan?', 3, 4, 'N', 'N'),
(3, 'Apakah Anda merasakan tubuh anda terasa sakit?', 4, 5, 'N', 'N'),
(4, 'Apakah Anda merasakan sakit kelapa?', 5, 11, 'N', 'N'),
(5, 'Apakah Anda merasakan Tenggorokan sakit saat menelan?', 6, 8, 'N', 'N'),
(6, 'Apakah Anda merasakan badan lemas dan lemah?', 7, 15, 'N', 'N'),
(7, 'Apakah pada tubuh anda muncul Bintik-bintik berwarna merah?', 22, 13, 'N', 'N'),
(8, 'Apakah Anda merasakan panas tubuh tinggi?', 26, 0, 'N', 'N'),
(9, 'Apakah tenggorokan anda sakit bila menelan?', 10, 10, 'N', 'N'),
(10, 'Apakah Anda merasakan otot anda terasa nyeri?', 11, 0, 'N', 'N'),
(11, 'Apakah nafsu makan Anda menurun?', 12, 13, 'N', 'N'),
(12, 'Apakah Anda merasa mual-mual?', 23, 16, 'N', 'N'),
(13, 'Apakah denyut nadi anda terasa lemah?', 14, 14, 'N', 'N'),
(14, 'Apakah tubuh Anda terasa ngilu?', 15, 6, 'N', 'N'),
(15, 'Apakah Anda merasakan persendian Anda membengkak?', 16, 20, 'N', 'N'),
(16, 'Apakah Anda merasakan stamina menurun?', 17, 14, 'N', 'N'),
(17, 'Apakah Anda merasakan nyeri pada persendian?', 24, 18, 'N', 'N'),
(18, 'Apakah Anda merasakan ingin muntah?', 19, 0, 'N', 'N'),
(19, 'Apakah Anda merasakan leher dan punggung terasa kaku?', 20, 0, 'N', 'N'),
(20, 'Apakah Anda sering merasa ngantuk?', 21, 0, 'N', 'N'),
(21, 'Apakah Anda mudah terangsang?', 25, 0, 'N', 'N'),
(22, 'Anda menderita PENYAKIT DEMAM BERDARAH', 0, 0, 'N', 'Y'),
(23, 'Anda menderita PENYAKIT DEMAM PENYAKIT KUNING', 0, 0, 'N', 'Y'),
(24, 'Anda menderita PENYAKIT CIKUNGUNYA', 0, 0, 'N', 'Y'),
(25, 'Anda menderita PENYAKIT ENCEPHALITIS', 0, 0, 'N', 'Y'),
(26, 'Anda menderita PENYAKIT MALARIA', 0, 0, 'N', 'Y'),
(27, 'Anda menderita DEMAM BIASA', 0, 0, 'N', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
