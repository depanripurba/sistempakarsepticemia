-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Jun 2024 pada 15.35
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
-- Database: `db_fmd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_basispengetahuan`
--

CREATE TABLE `tbl_basispengetahuan` (
  `id` int NOT NULL,
  `kode_gejala` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_gejala` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_penyakit` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_penyakit` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_basispengetahuan`
--

INSERT INTO `tbl_basispengetahuan` (`id`, `kode_gejala`, `nama_gejala`, `kode_penyakit`, `nama_penyakit`, `nilai`) VALUES
(35, 'G01', 'Gejala 1', 'P01', 'Penyakit 1', 0.2),
(36, 'G03', 'Gejala 3', 'P02', 'Penyakit 2', 0.7),
(37, 'G03', 'Gejala 3', 'P03', 'Penyakit 3', 0.3),
(38, 'G04', 'Gejala 4', 'P03', 'Penyakit 3', 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `kode_gejala` varchar(4) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_gejala` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G04', 'Gejala 4'),
('G01', 'Gejala 1'),
('G02', 'Gejala 2'),
('G03', 'Gejala 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konsultasi`
--

CREATE TABLE `tbl_konsultasi` (
  `kode_konsultasi` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `penyakit` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `solusi` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `tanggal` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `tbl_konsultasi`
--

INSERT INTO `tbl_konsultasi` (`kode_konsultasi`, `nama`, `telepon`, `alamat`, `penyakit`, `solusi`, `tanggal`) VALUES
('K05', 'Hery', '098127318247918', 'MEdan dafaskfldj', 'Penyakit 1', '+ Solusi 1\r\n+ Solusi 2\r\n+ Solusi 3\r\n+ Solusi 4', '28 / Jun / 2024'),
('K01', 'Leonardi', '089512961652', 'Medan', 'Penyakit 2', '+ solusi P1 a\r\n+ solusi P1 b\r\n+ solusi P1 c', '28 / Jun / 2024'),
('K02', 'leonarid', '1029381209', 'askjlflsaf', 'Penyakit 1', '+ Solusi 1\r\n+ Solusi 2\r\n+ Solusi 3\r\n+ Solusi 4', '28 / Jun / 2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int NOT NULL DEFAULT '0',
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `role`, `name`) VALUES
(1, 'admin', '$2y$10$l6DTnLT9rK5Xjb2d8.Zu7e.uyhrl2h6YuGvZkdkOQr3o.bzMQTqd.', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `usia` int NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `username`, `password`, `fullname`, `usia`, `jenis_kelamin`, `alamat`) VALUES
(8, 'leo130', '$2y$10$C1bYll7.D5E4k.d56qqfGe2fi80832bIqHK5SW2GGjrObR29NU0Pe', 'Leonardi Sidabutar', 24, 'Laki-laki', 'Marendal I'),
(9, 'depanripurba', '$2y$10$I0Y8Iwf.hjbhFaSoZnhbDea8kFrMLgTQ.LB2nq1mpmkGZkQP7fQQa', 'Depanri Purba', 24, 'Laki-laki', 'Jl. PDAM Tirtanadi'),
(10, 'tes', '$2y$10$JfrnHt3xHhd8c1gSrmFw0ePq.5J8WfIF0cZmJ/vrbIafG9t8rSM.6', 'tes', 24, 'Laki-laki', 'teadfasdfa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `kode_penyakit` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_penyakit` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `solusi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`kode_penyakit`, `nama_penyakit`, `solusi`) VALUES
('P01', 'Penyakit 1', '+ Solusi 1\r\n+ Solusi 2\r\n+ Solusi 3\r\n+ Solusi 4'),
('P02', 'Penyakit 2', '+ solusi P1 a\r\n+ solusi P1 b\r\n+ solusi P1 c'),
('P03', 'Penyakit 3', '+ solusi Penyakit 3\r\n+ solusi penyakit 3');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
