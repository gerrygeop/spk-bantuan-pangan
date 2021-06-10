-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2021 pada 13.12
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'kurniati', '$2y$10$kmuGNjCZPgPKqFcvAoX1mumjwtlx.NBs0/ODFcRH3lESI8BCzMdeC'),
(4, 'admin', '$2y$10$hX2hQ0U6Bwb1i5zQ/ayFd.uh6sKPqVi.SPfO0ymw6EuiTCo8HSkZa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
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
  `c12` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alt`, `nama`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`) VALUES
(1, 'Nurmina', 3, 7, 10, 12, 17, 22, 27, 32, 38, 41, 50, 52),
(2, 'Kiki Sebriana', 4, 6, 10, 14, 17, 23, 27, 35, 38, 41, 43, 51),
(3, 'Sadiyah', 3, 5, 10, 12, 17, 23, 27, 35, 38, 41, 43, 52),
(4, 'Norsiah', 3, 7, 8, 12, 17, 23, 27, 33, 38, 39, 43, 53),
(5, 'Rasimah', 1, 7, 9, 12, 16, 24, 27, 35, 38, 41, 43, 53),
(6, 'Sukiah Asnah', 3, 7, 10, 12, 17, 23, 27, 33, 38, 42, 47, 53),
(7, 'Muhammad Sholeh', 4, 7, 8, 12, 20, 24, 27, 35, 38, 41, 46, 53),
(8, 'La Seha', 3, 7, 10, 14, 18, 23, 27, 33, 38, 41, 45, 53),
(9, 'Marniyah', 4, 6, 8, 11, 17, 23, 25, 33, 38, 39, 43, 51),
(10, 'Sularmi', 2, 7, 10, 12, 16, 23, 27, 35, 38, 41, 47, 53),
(11, 'Yusuf Masri', 3, 6, 9, 12, 17, 23, 27, 35, 38, 41, 43, 53),
(12, 'Zuraidah', 4, 6, 10, 12, 18, 23, 27, 32, 38, 41, 50, 52),
(13, 'Sukirno', 2, 7, 9, 12, 16, 23, 27, 35, 38, 41, 45, 52),
(14, 'Wa Handa', 4, 7, 9, 12, 17, 23, 27, 34, 38, 41, 43, 53),
(15, 'Trisnawati', 3, 6, 10, 12, 17, 23, 27, 35, 38, 41, 50, 52),
(16, 'Sukarpan', 3, 7, 9, 12, 20, 23, 27, 31, 38, 41, 43, 53),
(17, 'Sukiman', 3, 5, 9, 12, 17, 23, 27, 35, 38, 41, 49, 52),
(18, 'Saniah', 3, 7, 10, 14, 20, 24, 27, 34, 37, 41, 47, 52),
(19, 'Kumala Mera', 3, 5, 9, 12, 17, 23, 27, 34, 38, 42, 50, 52),
(20, 'Juma\'iyah', 3, 5, 10, 12, 17, 23, 27, 35, 38, 41, 47, 53),
(21, 'Poniem', 3, 7, 9, 12, 20, 24, 27, 34, 38, 41, 47, 52),
(22, 'Endang Lestari', 3, 7, 9, 12, 16, 23, 27, 34, 38, 41, 43, 53),
(23, 'Kito', 4, 7, 9, 12, 16, 24, 27, 34, 38, 41, 46, 53),
(24, 'Indam', 1, 7, 8, 12, 18, 23, 27, 34, 38, 41, 43, 53),
(25, 'Hamna', 3, 7, 10, 13, 17, 23, 27, 34, 38, 41, 46, 53),
(26, 'Fitriati', 3, 7, 10, 12, 16, 24, 26, 33, 38, 39, 46, 53),
(27, 'Andi Thomas', 4, 7, 9, 11, 18, 23, 27, 34, 38, 41, 45, 53),
(28, 'Dinar', 4, 7, 8, 12, 18, 23, 27, 35, 38, 39, 43, 52),
(29, 'Tuinem', 2, 7, 10, 12, 18, 23, 27, 35, 38, 41, 43, 53),
(30, 'Anita', 3, 7, 9, 12, 20, 24, 27, 34, 38, 41, 47, 53),
(31, 'Bainah', 2, 7, 10, 12, 18, 23, 27, 35, 38, 41, 47, 53),
(32, 'Pusarawati', 4, 7, 10, 13, 17, 23, 28, 34, 38, 41, 46, 53),
(33, 'Suriyadi', 4, 7, 9, 12, 17, 23, 27, 35, 38, 41, 43, 52),
(34, 'Panut Sutomo', 2, 6, 8, 11, 16, 24, 27, 34, 38, 41, 43, 51),
(35, 'Supian', 1, 7, 10, 12, 17, 23, 27, 35, 38, 41, 47, 53),
(36, 'Entjik Asmuransyah', 1, 7, 8, 13, 17, 23, 27, 34, 38, 41, 43, 53),
(37, 'Yuniyati', 3, 6, 10, 12, 17, 23, 27, 35, 38, 41, 47, 52),
(38, 'Bahruddin', 1, 7, 10, 13, 20, 23, 29, 35, 38, 41, 49, 53),
(39, 'Yohana Ratte D', 2, 7, 10, 13, 18, 23, 27, 34, 38, 41, 43, 53),
(40, 'Samsul Bahri', 2, 5, 10, 13, 17, 23, 27, 35, 38, 41, 50, 52),
(41, 'Gusnawati', 3, 7, 10, 12, 16, 24, 27, 35, 38, 41, 43, 53),
(42, 'Nurdini', 1, 7, 9, 13, 18, 23, 27, 34, 38, 41, 47, 54),
(43, 'Sumarni', 3, 7, 8, 11, 17, 23, 27, 35, 38, 41, 47, 53),
(44, 'Hasnah Wati', 3, 5, 9, 12, 17, 23, 27, 34, 38, 41, 48, 53),
(45, 'Hariani', 3, 7, 10, 12, 18, 23, 27, 35, 38, 41, 43, 53),
(46, 'Tommo', 3, 5, 10, 13, 17, 23, 27, 32, 38, 41, 47, 52),
(47, 'Andi Zainal Assagaf', 2, 7, 10, 13, 18, 23, 27, 35, 38, 41, 43, 53),
(48, 'Sri Wahyuni', 3, 7, 10, 12, 17, 23, 27, 35, 38, 41, 47, 53),
(49, 'Ikati', 1, 7, 9, 12, 18, 23, 27, 35, 38, 41, 49, 52),
(50, 'Kurdi', 1, 7, 8, 12, 17, 23, 27, 34, 38, 41, 43, 53),
(51, 'Hamiyah', 4, 7, 9, 12, 17, 23, 27, 35, 38, 41, 43, 53),
(52, 'Djaleha', 3, 7, 8, 12, 17, 23, 27, 35, 38, 41, 43, 53),
(53, 'Kasmawati', 3, 5, 10, 14, 18, 23, 27, 35, 38, 41, 43, 53),
(54, 'Wa Isaiji', 3, 7, 10, 11, 18, 23, 27, 33, 38, 41, 46, 53),
(55, 'M Ali', 3, 7, 10, 12, 16, 24, 27, 34, 38, 39, 44, 52),
(56, 'Mugni', 1, 5, 9, 13, 17, 23, 29, 34, 38, 41, 43, 52),
(57, 'Periman', 2, 5, 10, 12, 17, 23, 27, 34, 38, 41, 47, 52),
(58, 'Maskanah', 3, 7, 10, 12, 17, 23, 27, 32, 38, 41, 43, 53),
(59, 'Jaria', 1, 7, 9, 12, 18, 23, 27, 35, 38, 41, 47, 54),
(60, 'Karmini', 2, 5, 10, 12, 17, 23, 27, 35, 38, 41, 47, 53),
(61, 'Maria Mandaun', 3, 7, 10, 12, 19, 24, 27, 34, 38, 39, 43, 53),
(62, 'Sutaji', 4, 5, 10, 12, 18, 23, 27, 34, 38, 41, 45, 53),
(63, 'Jariah', 3, 7, 9, 12, 17, 23, 28, 33, 38, 41, 50, 53),
(64, 'Masruni', 4, 7, 10, 14, 18, 24, 27, 34, 38, 41, 47, 53),
(65, 'Hafsah', 3, 5, 10, 13, 17, 23, 27, 35, 38, 41, 50, 52),
(66, 'Sarie Fransiska', 4, 7, 10, 13, 17, 23, 27, 34, 38, 41, 43, 53),
(67, 'Asmiati', 3, 6, 10, 13, 17, 23, 27, 34, 38, 41, 43, 52),
(68, 'Isnawati', 4, 6, 10, 12, 18, 23, 29, 35, 38, 41, 50, 52),
(69, 'Ijam', 2, 5, 8, 11, 17, 23, 27, 35, 38, 41, 43, 53),
(70, 'Mohammad Siri', 2, 7, 10, 12, 17, 23, 27, 35, 37, 41, 43, 53),
(71, 'Almaidah', 4, 7, 10, 12, 18, 23, 27, 34, 38, 39, 43, 53),
(72, 'Noerlina', 3, 6, 10, 14, 18, 23, 27, 34, 38, 41, 45, 53),
(73, 'Timang', 3, 7, 9, 12, 18, 23, 27, 35, 37, 41, 49, 52),
(74, 'Rodah', 3, 7, 10, 12, 17, 23, 27, 35, 38, 41, 43, 53),
(75, 'Bungah', 3, 7, 9, 11, 17, 23, 27, 35, 37, 41, 46, 52),
(76, 'Waratuu', 4, 7, 10, 11, 17, 23, 27, 33, 38, 39, 46, 52),
(77, 'Muhammad Rusli', 2, 7, 10, 14, 20, 23, 29, 35, 38, 41, 47, 53),
(78, 'Darmiah', 4, 7, 8, 11, 17, 23, 27, 34, 38, 40, 43, 52),
(79, 'Didit', 4, 5, 10, 12, 20, 24, 29, 34, 38, 41, 43, 53),
(80, 'Misransyah', 2, 6, 10, 12, 17, 23, 29, 34, 38, 41, 47, 52),
(81, 'Nurul Huda', 4, 7, 10, 12, 20, 23, 27, 35, 38, 41, 43, 53),
(82, 'Syaililah', 3, 6, 10, 12, 20, 24, 29, 34, 38, 41, 43, 52),
(83, 'Mamad', 2, 7, 10, 13, 17, 23, 27, 35, 38, 41, 49, 53),
(84, 'Suhartadi', 4, 5, 10, 12, 17, 23, 27, 34, 38, 41, 45, 52),
(85, 'Bustani', 3, 7, 10, 12, 18, 23, 28, 34, 38, 41, 50, 53),
(86, 'Adi Sutrisno', 4, 6, 10, 13, 20, 23, 27, 34, 38, 40, 45, 53),
(87, 'La Tea', 2, 7, 8, 12, 17, 23, 27, 35, 38, 41, 47, 53),
(88, 'Aslina', 2, 5, 10, 12, 17, 23, 27, 35, 38, 41, 50, 52),
(89, 'Siti Rohana', 2, 7, 9, 12, 18, 23, 27, 35, 38, 41, 43, 53),
(90, 'Herpah Yulia Sinyal', 3, 7, 9, 13, 18, 23, 27, 34, 38, 42, 43, 53),
(91, 'Tuti Ary', 3, 7, 10, 12, 20, 24, 29, 35, 38, 41, 47, 53),
(92, 'Sukri', 2, 7, 9, 12, 17, 23, 27, 35, 38, 41, 43, 52),
(93, 'Abd.Gani', 3, 7, 9, 13, 18, 23, 27, 35, 38, 40, 49, 53),
(94, 'Kusen', 2, 6, 9, 12, 16, 23, 27, 34, 38, 41, 43, 53),
(95, 'Novi Septia', 2, 7, 10, 13, 20, 24, 27, 35, 38, 41, 47, 53),
(96, 'Yeni Rahmawati', 1, 7, 10, 14, 16, 24, 27, 35, 38, 41, 50, 53),
(97, 'Norsam', 2, 7, 9, 12, 16, 24, 29, 35, 38, 41, 43, 53),
(98, 'Maisaroh', 3, 5, 10, 14, 18, 23, 27, 35, 38, 41, 50, 51),
(99, 'Ngatiyem', 2, 7, 8, 12, 16, 23, 27, 33, 38, 39, 43, 53),
(100, 'Wagiran', 3, 7, 8, 12, 17, 23, 27, 33, 36, 39, 46, 51);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_ktr` int(11) NOT NULL,
  `nama_ktr` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_bk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_ktr`, `nama_ktr`, `nilai_bk`) VALUES
(1, 'Jumlah Anggota Keluarga', 0.1),
(2, 'Status Bangunan', 0.05),
(3, 'Umur Kepala Keluarga', 0.05),
(4, 'Pendidikan Kepala Keluarga', 0.05),
(5, 'Jenis Lantai', 0.1),
(6, 'Jenis Dinding', 0.1),
(7, 'Jenis Atap', 0.1),
(8, 'Sumber Air Minum', 0.1),
(9, 'Sumber Penerangan', 0.1),
(10, 'Bahan Bakar Memasak', 0.1),
(11, 'Pekerjaan Kepala Keluarga', 0.1),
(12, 'Jumlah Aset', 0.05);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_ktr_sub`
--

CREATE TABLE `pivot_ktr_sub` (
  `id_ktr` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_ktr_sub`
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
(12, 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_sub` int(11) NOT NULL,
  `nama_sub` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_sub` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id_sub`, `nama_sub`, `bobot_sub`) VALUES
(1, 'Di atas 7 orang', 0.4),
(2, '5 - 6 orang', 0.3),
(3, '3 - 4 orang', 0.2),
(4, '1 - 2 orang', 0.1),
(5, 'Sewa/Kontrak', 0.8),
(6, 'Menumpang', 0.5),
(7, 'Milik Sendiri', 0.3),
(8, 'Di atas 70 tahun', 1),
(9, '60 - 69 tahun', 0.7),
(10, 'Di bawah 60 tahun', 0.4),
(11, 'Tidak Sekolah', 0.8),
(12, 'SD/Sederajat', 0.7),
(13, 'SMP/Sederajat', 0.5),
(14, 'SMA/Sederajat', 0.2),
(15, 'Perguruan Tinggi', 0.1),
(16, 'Batu/Tanah', 1),
(17, 'Kayu', 0.8),
(18, 'Ulin', 0.6),
(19, 'Ubin', 0.4),
(20, 'Keramik', 0.2),
(21, 'Anyaman Bambu/Kayu', 1),
(22, 'Versaboard', 0.7),
(23, 'Kayu', 0.4),
(24, 'Tembok', 0.2),
(25, 'Daunan', 1),
(26, 'Tanah Liat', 0.8),
(27, 'Seng/Metal', 0.6),
(28, 'Sirap', 0.5),
(29, 'Asbes', 0.4),
(30, 'Beton', 0.3),
(31, 'Air Hujan', 1),
(32, 'Air Sungai', 0.8),
(33, 'Air Sumur', 0.6),
(34, 'Air Ledeng', 0.4),
(35, 'Air Isi Ulang', 0.2),
(36, 'Bukan Listrik', 1),
(37, 'Listrik Non PLN', 0.7),
(38, 'Listrik PLN', 0.3),
(39, 'Kayu Bakar', 1),
(40, 'Minyak Tanah', 0.8),
(41, 'Gas 3 Kg', 0.6),
(42, 'Gas > 3 Kg', 0.3),
(43, 'Tidak Bekerja', 1),
(44, 'Pemulung', 0.8),
(45, 'Kuli Bangunan', 0.7),
(46, 'Petani/Berkebun/Peternak', 0.6),
(47, 'Pedagang', 0.5),
(48, 'Jasa Pendidikan', 0.3),
(49, 'Ojek Online/Non Online', 0.2),
(50, 'Karyawan Swasta', 0.1),
(51, 'Tidak Memiliki Aset', 0.4),
(52, '1 - 2 Aset', 0.3),
(53, '3 - 5 Aset', 0.2),
(54, 'Di atas 6 Aset', 0.1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alt`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_ktr`);

--
-- Indeks untuk tabel `pivot_ktr_sub`
--
ALTER TABLE `pivot_ktr_sub`
  ADD KEY `id_ktr` (`id_ktr`) USING BTREE,
  ADD KEY `id_sub` (`id_sub`);

--
-- Indeks untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_sub`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_ktr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pivot_ktr_sub`
--
ALTER TABLE `pivot_ktr_sub`
  ADD CONSTRAINT `pivot_ktr_sub_ibfk_1` FOREIGN KEY (`id_ktr`) REFERENCES `kriteria` (`id_ktr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pivot_ktr_sub_ibfk_2` FOREIGN KEY (`id_sub`) REFERENCES `subkriteria` (`id_sub`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
