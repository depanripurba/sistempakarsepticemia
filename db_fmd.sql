-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Jun 2024 pada 13.39
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
  `kode_gejala` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `nama_gejala` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `kode_penyakit` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `nama_penyakit` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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
  `kode_gejala` varchar(4) COLLATE utf8mb4_bin NOT NULL,
  `nama_gejala` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G01', 'Sering merasa haus atau sangat lapar'),
('G02', 'Sering buang air kecil, terutama pada malam hari'),
('G03', 'Penurunan berat badan'),
('G04', 'Penurunan massa otot'),
('G05', 'Pandangan kabur'),
('G06', 'Urine mengandung keton'),
('G07', 'Tubuh mudah lelah dan lemas'),
('G08', 'Luka menjadi lebih sulit sembuh'),
('G09', 'Kesulitan tidur'),
('G10', 'Detak jantung yang cepat atau tidak teratur'),
('G11', 'Merasa gugup atau mudah tersinggung'),
('G12', 'Tremor tangan, kelemahan otot'),
('G13', 'Mudah kepanasan'),
('G14', 'Sering buang air besar'),
('G15', 'Pembengkakan pada tangan dan kaki'),
('G16', 'Mendengkur'),
('G17', 'Perubahan pada tampilan wajah , seperti alis, rahang bawah, dan hidung menjadi semakin besar, dan sela gigi menjadi lebih lebar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int NOT NULL DEFAULT '0',
  `username` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` text COLLATE utf8mb4_bin NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$l6DTnLT9rK5Xjb2d8.Zu7e.uyhrl2h6YuGvZkdkOQr3o.bzMQTqd.', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `password` text COLLATE utf8mb4_bin NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `usia` int NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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
  `kode_penyakit` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `nama_penyakit` varchar(35) COLLATE utf8mb4_bin NOT NULL,
  `solusi` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`kode_penyakit`, `nama_penyakit`, `solusi`) VALUES
('P001', 'Diabetes Meliutus ', '+	Tes gula darah sewaktu, pemeriksaan gula darah sewaktu, jika hasilnya di atas 200 mg/dl, maka pasien memiliki kemungkinan menderita diabetes.Untuk mengonfirmasi hasil tersebut, dokter akan meminta pasien melakukan tes lain, yaitu tes gula darah puasa atau tes toleransi glukosa oral.\r\n+	Tes gula darah puasa, Dokter biasanya melakukan pemeriksaan ini setelah 8–12 jam berpuasa. Selama itu juga pasien hanya boleh minum air putih dan wajib menghindari penggunaan suplemen atau multivitamin, alkohol, dan merokok.\r\n+	Tes toleransi glukosa Tes HbA1C (glycated haemoglobin test), Prosedur dilakukan sama seperti GDP, yaitu puasa selama 8-10 jam, kemudian sampel darah diambil dari lipatan siku dengan suntikan, dan dikirim ke laboratorium. Bedanya, setelah sampel darah diambil, petugas medis akan menginstruksikan untuk minum larutan glukosa 75 gram untuk orang dewasa dan 1,75 gram/kgBB untuk anak-anak. Setelah itu, kamu akan diminta untuk berpuasa kembali selama 2 jam.Jika sudah 2 jam, petugas akan kembali mengambil sampel darah, untuk diperiksa di laboratorium.'),
('P002', 'Hipertiroid ', '+	USG tiroid, untuk memeriksa kondisi kelenjer tiroid dan mendeteksi benjolan atau tumor kelenjar tersebut\r\n+	Thyroid scan (nuklir tiroid), untuk memindai kelenjer tiroid menggunakan kamera khusus, dengan terlebih dahulu menyuntikkan zat radioaktif ke dalam pembulu darah.\r\n+	Tes iodium radioaktif, untuk memindai kelenjer tiroid dengan terlebih dahulu meminta pasien menelan zat radioaktif yang mengandung dosis rendah.\r\n'),
('P003', 'Akromegali', '+	Tes darah, dilakukan dengan mengukur kadar GH dan IGF-I . Tujuannya adalah untuk mengetahui banyaknya hormon yang diproduksi\r\n+	Pemindaian CT scan dan MRI digunakan untuk mengetahui lokasi dan ukuran tumor pada kelenjer hifosis atau organ tubuh yang membeser .\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_basispengetahuan`
--
ALTER TABLE `tbl_basispengetahuan`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
