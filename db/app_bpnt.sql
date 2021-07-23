-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2021 at 11:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_bpnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'kurniati', '$2y$10$kmuGNjCZPgPKqFcvAoX1mumjwtlx.NBs0/ODFcRH3lESI8BCzMdeC'),
(4, 'admin', '$2y$10$hX2hQ0U6Bwb1i5zQ/ayFd.uh6sKPqVi.SPfO0ymw6EuiTCo8HSkZa');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alt` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL,
  `c8` int(11) NOT NULL,
  `c9` int(11) NOT NULL,
  `c10` int(11) NOT NULL,
  `c11` int(11) NOT NULL,
  `c12` int(11) NOT NULL,
  `c13` int(11) NOT NULL,
  `c14` int(11) NOT NULL,
  `c15` int(11) NOT NULL,
  `c16` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alt`, `nama`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`, `c13`, `c14`, `c15`, `c16`) VALUES
(1, 'Nurmina', 3, 7, 10, 12, 17, 22, 27, 32, 38, 41, 50, 52, 57, 61, 65, 70),
(2, 'Kiki Sebriana', 4, 6, 10, 14, 17, 23, 27, 35, 38, 41, 43, 51, 56, 62, 67, 71),
(3, 'Sadiyah', 3, 5, 10, 12, 17, 23, 27, 35, 38, 41, 43, 52, 56, 63, 67, 72),
(4, 'Norsiah', 3, 7, 8, 12, 17, 23, 27, 33, 38, 39, 43, 53, 56, 63, 67, 72),
(5, 'Rasimah', 1, 7, 9, 12, 16, 24, 27, 35, 38, 41, 43, 53, 57, 63, 67, 72),
(6, 'Sukiah Asnah', 3, 7, 10, 12, 17, 23, 27, 33, 38, 42, 47, 53, 56, 63, 67, 72),
(7, 'Muhammad Sholeh', 4, 7, 8, 12, 20, 24, 27, 35, 38, 41, 46, 53, 56, 63, 67, 71),
(8, 'La Seha', 3, 7, 10, 14, 18, 23, 27, 33, 38, 41, 45, 53, 56, 62, 66, 71),
(9, 'Marniyah', 4, 6, 8, 11, 17, 23, 25, 33, 38, 39, 43, 51, 56, 62, 65, 71),
(10, 'Sularmi', 2, 7, 10, 12, 16, 23, 27, 35, 38, 41, 47, 53, 56, 62, 67, 71),
(11, 'Yusuf Masri', 3, 6, 9, 12, 17, 23, 27, 35, 38, 41, 43, 53, 57, 63, 67, 72),
(12, 'Zuraidah', 4, 6, 10, 12, 18, 23, 27, 32, 38, 41, 50, 52, 56, 62, 66, 70),
(13, 'Sukirno', 2, 7, 9, 12, 16, 23, 27, 35, 38, 41, 45, 52, 56, 63, 67, 72),
(14, 'Wa Handa', 4, 7, 9, 12, 17, 23, 27, 34, 38, 41, 43, 53, 56, 63, 67, 72),
(15, 'Trisnawati', 3, 6, 10, 12, 17, 23, 27, 35, 38, 41, 50, 52, 58, 63, 67, 72),
(16, 'Sukarpan', 3, 7, 9, 12, 20, 23, 27, 31, 38, 41, 43, 53, 56, 63, 67, 72),
(17, 'Sukiman', 3, 5, 9, 12, 17, 23, 27, 35, 38, 41, 49, 52, 56, 62, 67, 72),
(18, 'Saniah', 3, 7, 10, 14, 20, 24, 27, 34, 37, 41, 47, 52, 56, 63, 67, 72),
(19, 'Kumala Mera', 3, 5, 9, 12, 17, 23, 27, 34, 38, 42, 50, 52, 56, 63, 65, 71),
(20, 'Juma\'iyah', 3, 5, 10, 12, 17, 23, 27, 35, 38, 41, 47, 53, 56, 63, 67, 72),
(21, 'Poniem', 3, 7, 9, 12, 20, 24, 27, 34, 38, 41, 47, 52, 56, 63, 67, 72),
(22, 'Endang Lestari', 3, 7, 9, 12, 16, 23, 27, 34, 38, 41, 43, 53, 56, 63, 67, 72),
(23, 'Kito', 4, 7, 9, 12, 16, 24, 27, 34, 38, 41, 46, 53, 56, 63, 65, 71),
(24, 'Indam', 1, 7, 8, 12, 18, 23, 27, 34, 38, 41, 43, 53, 56, 63, 67, 72),
(25, 'Hamna', 3, 7, 10, 13, 17, 23, 27, 34, 38, 41, 46, 53, 56, 63, 65, 71),
(26, 'Fitriati', 3, 7, 10, 12, 16, 24, 26, 33, 38, 39, 46, 53, 56, 63, 67, 72),
(27, 'Andi Thomas', 4, 7, 9, 11, 18, 23, 27, 34, 38, 41, 45, 53, 56, 63, 67, 72),
(28, 'Dinar', 4, 7, 8, 12, 18, 23, 27, 35, 38, 39, 43, 52, 56, 63, 67, 72),
(29, 'Tuinem', 2, 7, 10, 12, 18, 23, 27, 35, 38, 41, 43, 53, 55, 63, 65, 71),
(30, 'Anita', 3, 7, 9, 12, 20, 24, 27, 34, 38, 41, 47, 53, 56, 63, 67, 72),
(31, 'Bainah', 2, 7, 10, 12, 18, 23, 27, 35, 38, 41, 47, 53, 57, 63, 67, 72),
(32, 'Pusarawati', 4, 7, 10, 13, 17, 23, 28, 34, 38, 41, 46, 53, 56, 63, 67, 72),
(33, 'Suriyadi', 4, 7, 9, 12, 17, 23, 27, 35, 38, 41, 43, 52, 56, 62, 65, 70),
(34, 'Panut Sutomo', 2, 6, 8, 11, 16, 24, 27, 34, 38, 41, 43, 54, 56, 63, 67, 72),
(35, 'Supian', 1, 7, 10, 12, 17, 23, 27, 35, 38, 41, 47, 53, 56, 63, 67, 72),
(36, 'Entjik Asmuransyah', 1, 7, 8, 15, 17, 23, 27, 34, 38, 41, 43, 53, 57, 63, 67, 72),
(37, 'Yuniyati', 3, 6, 10, 12, 17, 23, 27, 35, 38, 41, 47, 52, 56, 62, 67, 72),
(38, 'Bahruddin', 1, 7, 10, 13, 20, 23, 29, 35, 38, 41, 49, 53, 57, 63, 67, 72),
(39, 'Yohana Ratte D', 2, 7, 10, 13, 18, 23, 27, 34, 38, 41, 43, 53, 56, 63, 67, 72),
(40, 'Samsul Bahri', 2, 5, 10, 13, 17, 23, 27, 35, 38, 41, 50, 52, 56, 63, 65, 70),
(41, 'Gusnawati', 3, 7, 10, 12, 16, 24, 27, 35, 38, 41, 43, 53, 56, 63, 67, 72),
(42, 'Nurdini', 1, 7, 9, 13, 18, 23, 27, 34, 38, 41, 47, 54, 57, 63, 67, 72),
(43, 'Sumarni', 3, 7, 8, 11, 17, 23, 27, 35, 38, 41, 47, 53, 56, 63, 67, 72),
(44, 'Hasnah Wati', 3, 5, 9, 12, 17, 23, 27, 34, 38, 41, 48, 53, 56, 62, 67, 72),
(45, 'Hariani', 3, 7, 10, 12, 18, 23, 27, 35, 38, 41, 43, 53, 56, 63, 67, 72),
(46, 'Tommo', 3, 5, 10, 12, 17, 23, 27, 32, 38, 41, 47, 52, 56, 63, 67, 72),
(47, 'Andi Zainal Assagaf', 2, 7, 10, 13, 18, 23, 27, 35, 38, 41, 43, 53, 56, 63, 67, 72),
(48, 'Sri Wahyuni', 3, 7, 10, 12, 17, 23, 27, 35, 38, 41, 47, 53, 56, 60, 64, 70),
(49, 'Ikati', 1, 7, 9, 12, 18, 23, 27, 35, 38, 41, 49, 52, 56, 61, 66, 70),
(50, 'Kurdi', 1, 7, 8, 12, 17, 23, 27, 34, 38, 41, 43, 53, 57, 63, 67, 72),
(51, 'Hamiyah', 4, 7, 9, 12, 17, 23, 27, 35, 38, 41, 43, 53, 57, 63, 67, 72),
(52, 'Djaleha', 3, 7, 8, 12, 17, 23, 27, 35, 38, 41, 43, 53, 56, 63, 67, 72),
(53, 'Kasmawati', 3, 5, 10, 14, 18, 23, 27, 35, 38, 41, 43, 53, 56, 61, 65, 70),
(54, 'Wa Isaiji', 3, 7, 10, 11, 18, 23, 27, 33, 38, 41, 46, 53, 56, 63, 67, 72),
(55, 'M Ali', 3, 7, 10, 12, 16, 24, 27, 34, 38, 39, 44, 52, 55, 62, 65, 71),
(56, 'Mugni', 1, 5, 9, 13, 17, 23, 29, 34, 38, 41, 43, 52, 56, 63, 67, 72),
(57, 'Periman', 2, 5, 10, 12, 17, 23, 27, 34, 38, 41, 47, 52, 56, 63, 67, 72),
(58, 'Maskanah', 3, 7, 10, 12, 17, 23, 27, 32, 38, 41, 43, 53, 56, 61, 65, 70),
(59, 'Jaria', 1, 7, 9, 12, 18, 23, 27, 35, 38, 41, 47, 54, 57, 63, 67, 72),
(60, 'Karmini', 2, 5, 10, 12, 17, 23, 27, 35, 38, 41, 47, 53, 56, 63, 67, 72),
(61, 'Maria Mandaun', 3, 7, 10, 12, 19, 24, 27, 34, 38, 39, 43, 53, 57, 62, 67, 72),
(62, 'Sutaji', 4, 5, 10, 12, 18, 23, 27, 34, 38, 41, 45, 53, 56, 61, 65, 71),
(63, 'Jariah', 3, 7, 9, 12, 17, 23, 28, 33, 38, 41, 50, 53, 57, 63, 67, 72),
(64, 'Masruni', 4, 7, 10, 14, 18, 24, 27, 34, 38, 41, 47, 53, 56, 63, 67, 71),
(65, 'Hafsah', 3, 5, 10, 13, 17, 23, 27, 35, 38, 41, 50, 52, 56, 61, 65, 70),
(66, 'Sarie Fransiska', 4, 7, 10, 13, 17, 23, 27, 34, 38, 41, 43, 53, 56, 63, 67, 72),
(67, 'Asmiati', 3, 6, 10, 13, 17, 23, 27, 34, 38, 41, 43, 52, 56, 63, 66, 71),
(68, 'Isnawati', 4, 6, 10, 12, 18, 23, 29, 35, 38, 41, 50, 52, 56, 63, 67, 72),
(69, 'Ijam', 2, 5, 8, 11, 17, 23, 27, 35, 38, 41, 43, 53, 56, 63, 67, 70),
(70, 'Mohammad Siri', 2, 7, 10, 12, 17, 23, 27, 35, 37, 41, 43, 53, 57, 63, 67, 72),
(71, 'Almaidah', 4, 7, 10, 12, 18, 23, 27, 34, 38, 39, 43, 53, 55, 63, 65, 71),
(72, 'Noerlina', 3, 6, 10, 14, 18, 23, 27, 34, 38, 41, 45, 53, 57, 63, 67, 72),
(73, 'Timang', 3, 7, 9, 12, 18, 23, 27, 35, 37, 41, 49, 52, 56, 63, 67, 71),
(74, 'Rodah', 3, 7, 10, 12, 17, 23, 27, 35, 38, 41, 43, 53, 55, 63, 67, 72),
(75, 'Bungah', 3, 7, 9, 11, 17, 23, 27, 35, 37, 41, 46, 52, 56, 63, 67, 71),
(76, 'Waratuu', 4, 7, 10, 11, 17, 23, 27, 33, 38, 39, 46, 52, 56, 63, 67, 71),
(77, 'Muhammad Rusli', 2, 7, 10, 14, 20, 23, 29, 35, 38, 41, 47, 53, 57, 63, 67, 72),
(78, 'Darmiah', 4, 7, 8, 11, 17, 23, 27, 34, 38, 40, 43, 52, 55, 63, 67, 72),
(79, 'Didit', 4, 5, 10, 12, 20, 24, 29, 34, 38, 41, 43, 53, 55, 63, 67, 71),
(80, 'Misransyah', 2, 6, 10, 12, 17, 23, 29, 34, 38, 41, 47, 52, 55, 60, 64, 70),
(81, 'Nurul Huda', 4, 7, 10, 12, 20, 23, 27, 35, 38, 41, 43, 53, 56, 63, 67, 72),
(82, 'Syaililah', 3, 6, 10, 12, 20, 24, 29, 34, 38, 41, 43, 52, 57, 63, 67, 72),
(83, 'Mamad', 2, 7, 10, 13, 17, 23, 27, 35, 38, 41, 49, 53, 56, 63, 67, 72),
(84, 'Suhartadi', 4, 5, 10, 12, 17, 23, 27, 34, 38, 41, 45, 52, 55, 63, 67, 72),
(85, 'Bustani', 3, 7, 10, 12, 18, 23, 28, 34, 38, 41, 50, 53, 57, 63, 67, 72),
(86, 'Adi Sutrisno', 4, 6, 10, 13, 20, 23, 27, 34, 38, 40, 45, 53, 56, 62, 67, 72),
(87, 'La Tea', 2, 7, 8, 12, 17, 23, 27, 35, 38, 41, 47, 53, 56, 63, 67, 72),
(88, 'Aslina', 2, 5, 10, 12, 17, 23, 27, 35, 38, 41, 50, 52, 56, 62, 67, 72),
(89, 'Siti Rohana', 2, 7, 9, 12, 18, 23, 27, 35, 38, 41, 43, 53, 56, 63, 67, 72),
(90, 'Herpah Yulia Sinyal', 3, 7, 9, 13, 18, 23, 27, 34, 38, 42, 43, 53, 56, 63, 67, 72),
(91, 'Tuti Ary', 3, 7, 10, 12, 20, 24, 29, 35, 38, 41, 47, 53, 56, 63, 67, 72),
(92, 'Sukri', 2, 7, 9, 12, 17, 23, 27, 35, 38, 41, 43, 52, 57, 63, 67, 72),
(93, 'Abd.Gani', 3, 7, 9, 13, 18, 23, 27, 35, 38, 40, 49, 53, 55, 63, 66, 70),
(94, 'Kusen', 2, 6, 9, 12, 16, 23, 27, 34, 38, 41, 43, 53, 57, 63, 67, 72),
(95, 'Novi Septia', 2, 7, 10, 13, 20, 24, 27, 35, 38, 41, 47, 53, 56, 63, 67, 72),
(96, 'Yeni Rahmawati', 1, 7, 10, 14, 16, 24, 27, 35, 38, 41, 50, 53, 56, 63, 67, 72),
(97, 'Norsam', 2, 7, 9, 12, 16, 24, 29, 35, 38, 41, 43, 53, 57, 63, 67, 72),
(98, 'Maisaroh', 3, 5, 10, 14, 18, 23, 27, 35, 38, 41, 50, 51, 56, 63, 67, 72),
(99, 'Ngatiyem', 2, 7, 8, 12, 16, 23, 27, 33, 38, 39, 43, 53, 56, 62, 67, 72),
(100, 'Wagiran', 3, 7, 8, 12, 17, 23, 27, 33, 36, 39, 46, 51, 56, 60, 64, 70);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_ktr` int(11) NOT NULL,
  `nama_ktr` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_bk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_ktr`, `nama_ktr`, `nilai_bk`) VALUES
(1, 'Jumlah Anggota Keluarga', 0.1),
(2, 'Status Bangunan', 0.1),
(3, 'Umur Kepala Keluarga', 0.1),
(4, 'Pendidikan Kepala Keluarga', 0.05),
(5, 'Jenis Lantai', 0.05),
(6, 'Jenis Dinding', 0.05),
(7, 'Jenis Atap', 0.05),
(8, 'Sumber Air Minum', 0.05),
(9, 'Sumber Penerangan', 0.05),
(10, 'Bahan Bakar Memasak', 0.05),
(11, 'Pekerjaan Kepala Keluarga', 0.1),
(12, 'Jumlah Aset', 0.05),
(13, 'Jumlah Kamar', 0.05),
(14, 'Fasilitas Buang Air Besar', 0.05),
(15, 'Jenis Kloset', 0.05),
(16, 'Tempat Pembuangan Akhir Tinja', 0.05);

-- --------------------------------------------------------

--
-- Table structure for table `pivot_ktr_sub`
--

CREATE TABLE `pivot_ktr_sub` (
  `id_ktr` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pivot_ktr_sub`
--

INSERT INTO `pivot_ktr_sub` (`id_ktr`, `id_sub`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(2, 7),
(3, 8),
(3, 9),
(3, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(5, 16),
(5, 17),
(5, 18),
(5, 19),
(5, 20),
(6, 21),
(6, 22),
(6, 23),
(6, 24),
(7, 25),
(7, 26),
(7, 27),
(7, 28),
(7, 29),
(7, 30),
(8, 31),
(8, 32),
(8, 33),
(8, 34),
(8, 35),
(9, 36),
(9, 37),
(9, 38),
(10, 39),
(10, 40),
(10, 41),
(10, 42),
(11, 43),
(11, 44),
(11, 45),
(11, 46),
(11, 47),
(11, 48),
(11, 49),
(11, 50),
(12, 51),
(12, 52),
(12, 53),
(12, 54),
(13, 55),
(13, 56),
(13, 57),
(13, 58),
(13, 59),
(14, 60),
(14, 61),
(14, 62),
(14, 63),
(15, 64),
(15, 65),
(15, 66),
(15, 67),
(16, 68),
(16, 69),
(16, 70),
(16, 71),
(16, 72);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_sub` int(11) NOT NULL,
  `nama_sub` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_sub` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_sub`, `nama_sub`, `bobot_sub`) VALUES
(1, 'Di atas 7 orang', '4'),
(2, '5 - 6 orang', '3'),
(3, '3 - 4 orang', '2'),
(4, '1 - 2 orang', '1'),
(5, 'Sewa/Kontrak', '10'),
(6, 'Menumpang', '7'),
(7, 'Milik Sendiri', '4'),
(8, 'Di atas 70 tahun', '10'),
(9, '60 - 69 tahun', '7'),
(10, 'Di bawah 60 tahun', '4'),
(11, 'Tidak Sekolah', '10'),
(12, 'SD/Sederajat', '8'),
(13, 'SMP/Sederajat', '6'),
(14, 'SMA/Sederajat', '4'),
(15, 'Perguruan Tinggi', '2'),
(16, 'Batu/Tanah', '10'),
(17, 'Kayu', '8'),
(18, 'Ulin', '6'),
(19, 'Ubin', '4'),
(20, 'Keramik', '2'),
(21, 'Anyaman Bambu/Kayu', '4'),
(22, 'Versaboard', '3'),
(23, 'Kayu', '2'),
(24, 'Tembok', '1'),
(25, 'Daunan', '10'),
(26, 'Tanah Liat', '8'),
(27, 'Seng/Metal', '6'),
(28, 'Sirap', '5'),
(29, 'Asbes', '4'),
(30, 'Beton', '3'),
(31, 'Air Hujan', '10'),
(32, 'Air Sungai', '8'),
(33, 'Air Sumur', '6'),
(34, 'Air Ledeng', '4'),
(35, 'Air Isi Ulang', '2'),
(36, 'Bukan Listrik', '10'),
(37, 'Listrik Non PLN', '7'),
(38, 'Listrik PLN', '4'),
(39, 'Kayu Bakar', '4'),
(40, 'Minyak Tanah', '3'),
(41, 'Gas 3 Kg', '2'),
(42, 'Gas > 3 Kg', '1'),
(43, 'Tidak Bekerja', '10'),
(44, 'Pemulung', '8'),
(45, 'Kuli Bangunan', '7'),
(46, 'Petani/Berkebun/Peternak', '6'),
(47, 'Pedagang', '5'),
(48, 'Jasa Pendidikan', '3'),
(49, 'Ojek Online/Non Online', '2'),
(50, 'Karyawan Swasta', '1'),
(51, 'Tidak Memiliki Aset', '4'),
(52, '1 - 2 Aset', '3'),
(53, '3 - 5 Aset', '2'),
(54, 'Di atas 6 Aset', '1'),
(55, 'Tidak Memiliki Kamar', '10'),
(56, '1 - 2 Kamar', '8'),
(57, '3 - 4 Kamar', '6'),
(58, '5 - 6 Kamar', '4'),
(59, 'Lebih dari 7 Kamar', '2'),
(60, 'Tidak Ada', '4'),
(61, 'Umum', '3'),
(62, 'Bersama', '2'),
(63, 'Sendiri', '1'),
(64, 'Tidak Pakai', '4'),
(65, 'Cemplung/Cubluk', '3'),
(66, 'Plengsengan', '2'),
(67, 'Leher Angsa', '1'),
(68, 'Tidak Ada', '10'),
(69, 'Pantai/Tanah Lapang', '8'),
(70, 'Kolam/Sawah/Sungai', '6'),
(71, 'Lubang Tanah', '4'),
(72, 'Tangki/SPAL', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$5TxZoMFTKCeiX58hcfIX2..Z/ydYf82vSKkI29h3hL3TRemO/1PT2', 'superadmin'),
(2, 'lutfi', '$2y$10$2mnm7IvZ904HNWWAiPIdg.RVLbjixCrNMOZQ3kALsIgj3XZBex.6y', 'guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alt`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_ktr`);

--
-- Indexes for table `pivot_ktr_sub`
--
ALTER TABLE `pivot_ktr_sub`
  ADD KEY `id_ktr` (`id_ktr`) USING BTREE,
  ADD KEY `id_sub` (`id_sub`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_ktr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pivot_ktr_sub`
--
ALTER TABLE `pivot_ktr_sub`
  ADD CONSTRAINT `pivot_ktr_sub_ibfk_1` FOREIGN KEY (`id_ktr`) REFERENCES `kriteria` (`id_ktr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pivot_ktr_sub_ibfk_2` FOREIGN KEY (`id_sub`) REFERENCES `subkriteria` (`id_sub`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
