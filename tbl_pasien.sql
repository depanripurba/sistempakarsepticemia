-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 24 Bulan Mei 2024 pada 14.18
-- Versi server: 8.2.0
-- Versi PHP: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pakarendokrin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

DROP TABLE IF EXISTS `tbl_pasien`;
CREATE TABLE IF NOT EXISTS `tbl_pasien` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `usia` int NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `username`, `password`, `fullname`, `usia`, `jenis_kelamin`, `alamat`) VALUES
(8, 'leo130', '$2y$10$C1bYll7.D5E4k.d56qqfGe2fi80832bIqHK5SW2GGjrObR29NU0Pe', 'Leonardi Sidabutar', 24, 'Laki-laki', 'Marendal I');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
