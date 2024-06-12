-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Jun 2024 pada 17.56
-- Versi server: 8.2.0
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_septicemia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_basispengetahuan`
--

CREATE TABLE `tbl_basispengetahuan` (
  `id` int NOT NULL,
  `kode_gejala` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_gejala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_penyakit` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_penyakit` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_basispengetahuan`
--

INSERT INTO `tbl_basispengetahuan` (`id`, `kode_gejala`, `nama_gejala`, `kode_penyakit`, `nama_penyakit`, `nilai`) VALUES
(6, 'G01', 'Sering merasa haus atau sangat lapar', 'P001', 'Diabetes Meliutus ', 0.33),
(7, 'G02', 'Sering buang air kecil, terutama pada malam hari', 'P001', 'Diabetes Meliutus ', 0.33),
(8, 'G03', 'Penurunan berat badan', 'P001', 'Diabetes Meliutus ', 1),
(9, 'G04', 'Penurunan massa otot', 'P001', 'Diabetes Meliutus ', 0.33),
(10, 'G05', 'Pandangan kabur', 'P001', 'Diabetes Meliutus ', 0.6),
(11, 'G06', 'Urine mengandung keton', 'P001', 'Diabetes Meliutus ', 0.33),
(12, 'G07', 'Tubuh mudah lelah dan lemas', 'P001', 'Diabetes Meliutus ', 1),
(13, 'G08', 'Luka menjadi lebih sulit sembuh', 'P001', 'Diabetes Meliutus ', 0.33),
(14, 'G09', 'Kesulitan tidur', 'P001', 'Diabetes Meliutus ', 1),
(15, 'G03', 'Penurunan berat badan', 'P002', 'Hipertiroid ', 1),
(18, 'G10', 'Detak jantung yang cepat atau tidak teratur', 'P002', 'Hipertiroid ', 0.27),
(19, 'G11', 'Merasa gugup atau mudah tersinggung', 'P002', 'Hipertiroid ', 0.27),
(20, 'G07', 'Tubuh mudah lelah dan lemas', 'P002', 'Hipertiroid ', 1),
(21, 'G12', 'Tremor tangan, kelemahan otot', 'P002', 'Hipertiroid ', 0.27),
(22, 'G13', 'Mudah kepanasan', 'P002', 'Hipertiroid ', 0.27),
(23, 'G14', 'Sering buang air besar', 'P002', 'Hipertiroid ', 0.27),
(24, 'G05', 'Pandangan kabur', 'P002', 'Hipertiroid ', 0.6),
(25, 'G09', 'Kesulitan tidur', 'P002', 'Hipertiroid ', 1),
(26, 'G03', 'Penurunan berat badan', 'P003', 'Akromegali', 1),
(27, 'G15', 'Pembengkakan pada tangan dan kaki', 'P003', 'Akromegali', 0.4),
(28, 'G09', 'Kesulitan tidur', 'P003', 'Akromegali', 1),
(29, 'G07', 'Tubuh mudah lelah dan lemas', 'P003', 'Akromegali', 1),
(30, 'G16', 'Mendengkur', 'P003', 'Akromegali', 0.4),
(31, 'G17', 'Perubahan pada tampilan wajah , seperti alis, rahang bawah, dan hidung menjadi semakin besar, dan sela gigi menjadi lebih lebar', 'P003', 'Akromegali', 0.4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `kode_gejala` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_gejala` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G01', 'Gejala 01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int NOT NULL DEFAULT '0',
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `role`, `name`) VALUES
(1, 'admin', '$2y$10$l6DTnLT9rK5Xjb2d8.Zu7e.uyhrl2h6YuGvZkdkOQr3o.bzMQTqd.', 'Admin', 'Leonardi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usia` int NOT NULL,
  `jenis_kelamin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `username`, `password`, `fullname`, `usia`, `jenis_kelamin`, `alamat`) VALUES
(8, 'leo130', '$2y$10$C1bYll7.D5E4k.d56qqfGe2fi80832bIqHK5SW2GGjrObR29NU0Pe', 'Leonardi Sidabutar', 24, 'Laki-laki', 'Marendal I'),
(9, 'depanripurba', '$2y$10$I0Y8Iwf.hjbhFaSoZnhbDea8kFrMLgTQ.LB2nq1mpmkGZkQP7fQQa', 'Depanri Purba', 24, 'Laki-laki', 'Jl. PDAM Tirtanadi'),
(10, 'tes', '$2y$10$JfrnHt3xHhd8c1gSrmFw0ePq.5J8WfIF0cZmJ/vrbIafG9t8rSM.6', 'tes', 24, 'Laki-laki', 'teadfasdfa'),
(12, 'hery', '$2y$10$BeJakY1OyvDzBNoCyaCxlO5EVri44LOZGVCprYA78rFQqJTANzem6', 'Hery Sanjaya Ginting', 22, 'Laki-laki', 'Jln. Prof T. Zulkarnain No. 9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `kode_penyakit` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_penyakit` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `solusi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`kode_penyakit`, `nama_penyakit`, `solusi`) VALUES
('P001', 'Penyakit 01', '+ solusi 0101\r\n+ solusi 0102\r\n+ solusi 0103'),
('P002', 'Penyakit 02', '+ solusi 0201\r\n+ solusi 0202\r\n+ solusi 0203'),
('P003', 'Penyakit 03', '+ solusi 0301\r\n+ solusi 0302\r\n+ solusi 0103');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_basispengetahuan`
--
ALTER TABLE `tbl_basispengetahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_basispengetahuan`
--
ALTER TABLE `tbl_basispengetahuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
