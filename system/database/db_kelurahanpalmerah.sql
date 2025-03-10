-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 04:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kelurahanpalmerah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_domisili`
--

CREATE TABLE `tbl_domisili` (
  `id` int(11) NOT NULL,
  `id_domisili` varchar(20) NOT NULL,
  `nik` int(16) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(1) NOT NULL,
  `rw` int(1) NOT NULL,
  `ayah` varchar(60) NOT NULL,
  `ibu` varchar(60) NOT NULL,
  `tgl_buat` datetime NOT NULL DEFAULT current_timestamp(),
  `pengantar_file` varchar(100) NOT NULL,
  `ktp_file` varchar(100) DEFAULT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id` int(11) NOT NULL,
  `id_kelahiran` varchar(20) NOT NULL,
  `nik` int(16) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `hubungan` varchar(15) NOT NULL,
  `anak` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(1) NOT NULL,
  `rw` int(1) NOT NULL,
  `ayah` varchar(60) NOT NULL,
  `ibu` varchar(60) NOT NULL,
  `pengantar_file` varchar(100) NOT NULL,
  `ket_file` varchar(100) DEFAULT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `ktp_file` varchar(100) DEFAULT NULL,
  `tgl_buat` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kematian`
--

CREATE TABLE `tbl_kematian` (
  `id` int(11) NOT NULL,
  `id_kematian` varchar(20) NOT NULL,
  `nik` int(16) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `hubungan` varchar(15) NOT NULL,
  `mayit` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_meninggal` date DEFAULT NULL,
  `tempat_meninggal` varchar(20) DEFAULT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(1) NOT NULL,
  `rw` int(1) NOT NULL,
  `tgl_buat` datetime NOT NULL DEFAULT current_timestamp(),
  `pengantar_file` varchar(100) NOT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `ktp_file` varchar(100) DEFAULT NULL,
  `keterangan_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kk`
--

CREATE TABLE `tbl_kk` (
  `id` int(11) NOT NULL,
  `id_kk` varchar(20) NOT NULL,
  `nik` int(16) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(1) NOT NULL,
  `rw` int(1) NOT NULL,
  `ayah` varchar(60) NOT NULL,
  `ibu` varchar(60) NOT NULL,
  `tgl_buat` datetime NOT NULL DEFAULT current_timestamp(),
  `pengantar_file` varchar(100) NOT NULL,
  `ktp_file` varchar(100) DEFAULT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `tambahan_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ktp`
--

CREATE TABLE `tbl_ktp` (
  `id` int(11) NOT NULL,
  `id_ktp` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(1) NOT NULL,
  `rw` int(1) NOT NULL,
  `ayah` varchar(60) NOT NULL,
  `ibu` varchar(60) NOT NULL,
  `tgl_buat` datetime NOT NULL DEFAULT current_timestamp(),
  `pengantar_file` varchar(100) NOT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `akte_file` varchar(100) DEFAULT NULL,
  `foto_file` varchar(100) DEFAULT NULL,
  `tambahan_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ktp`
--

INSERT INTO `tbl_ktp` (`id`, `id_ktp`, `nik`, `name`, `tgl_lahir`, `tempat_lahir`, `jk`, `alamat`, `rt`, `rw`, `ayah`, `ibu`, `tgl_buat`, `pengantar_file`, `kk_file`, `akte_file`, `foto_file`, `tambahan_file`, `status`, `catatan`, `ttd_file`, `qrcode_file`) VALUES
(2, '472.11/1/438.7.9.14/', '3207451234500023', 'Warga Baru', '2005-02-20', 'Banten', 'L', 'JL Margasatwa', 6, 3, 'Paijo', 'Isna', '2023-03-20 01:54:51', './assets/img/surat/ktp/3207451234500023-1679252091-pengantar_file.jpg', './assets/img/surat/ktp/3207451234500023-1679252091-kk_file.jpg', './assets/img/surat/ktp/3207451234500023-1679252091-akte_file.jpg', './assets/img/surat/ktp/3207451234500023-1679252091-foto_file.jpg', './assets/img/surat/ktp/3207451234500023-1679252091-tambahan_file.jpg', 1, NULL, '', ''),
(3, '472.11/2/438.7.9.14/', '3207451234500023', 'Warga Baru', '2001-09-14', 'Jakarta', 'L', 'jl.kamera 1', 1, 2, 'hamid', 'dewi', '2023-03-21 15:43:41', './assets/img/surat/ktp/3207451234500023-1679388221-pengantar_file.jpg', './assets/img/surat/ktp/3207451234500023-1679388221-kk_file.jpg', './assets/img/surat/ktp/3207451234500023-1679388221-akte_file.jpg', './assets/img/surat/ktp/3207451234500023-1679388221-foto_file.jpg', './assets/img/surat/ktp/3207451234500023-1679388221-tambahan_file.jpg', 2, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pindah`
--

CREATE TABLE `tbl_pindah` (
  `id` int(11) NOT NULL,
  `id_pindah` varchar(20) NOT NULL,
  `nik` int(16) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(1) NOT NULL,
  `rw` int(1) NOT NULL,
  `ayah` varchar(60) NOT NULL,
  `ibu` varchar(60) NOT NULL,
  `tgl_buat` datetime NOT NULL DEFAULT current_timestamp(),
  `pengantar_file` varchar(100) NOT NULL,
  `ktp_file` varchar(100) DEFAULT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skck`
--

CREATE TABLE `tbl_skck` (
  `id` int(11) NOT NULL,
  `id_skck` varchar(20) NOT NULL,
  `nik` int(16) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(1) NOT NULL,
  `rw` int(1) NOT NULL,
  `ayah` varchar(60) NOT NULL,
  `ibu` varchar(60) NOT NULL,
  `tgl_buat` datetime NOT NULL DEFAULT current_timestamp(),
  `pengantar_file` varchar(100) NOT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `ktp_file` varchar(100) DEFAULT NULL,
  `foto_file` varchar(100) DEFAULT NULL,
  `tambahan_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sktm`
--

CREATE TABLE `tbl_sktm` (
  `id` int(11) NOT NULL,
  `id_sktm` varchar(20) NOT NULL,
  `nik` int(16) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(1) NOT NULL,
  `rw` int(1) NOT NULL,
  `ayah` varchar(60) NOT NULL,
  `ibu` varchar(60) NOT NULL,
  `tgl_buat` datetime NOT NULL DEFAULT current_timestamp(),
  `pengantar_file` varchar(100) NOT NULL,
  `ktp_file` varchar(100) DEFAULT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sktm`
--

INSERT INTO `tbl_sktm` (`id`, `id_sktm`, `nik`, `name`, `tgl_lahir`, `tempat_lahir`, `jk`, `alamat`, `rt`, `rw`, `ayah`, `ibu`, `tgl_buat`, `pengantar_file`, `ktp_file`, `kk_file`, `status`, `catatan`, `ttd_file`, `qrcode_file`) VALUES
(1, '472.11/1/438.7.9.14/', 2147483647, 'Nabil', '2006-04-20', 'Banten', 'l', 'jl a', 9, 2, 'pipi', 'mimi', '2023-03-30 17:49:44', './assets/img/surat/sktm/3207451234500023-1680173384-pengantar_file.jpg', './assets/img/surat/sktm/3207451234500023-1680173384-ktp_file.jpg', './assets/img/surat/sktm/3207451234500023-1680173384-kk_file.jpg', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warga`
--

CREATE TABLE `tbl_warga` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(1) NOT NULL,
  `rw` int(1) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `goldar` varchar(3) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `kawin` varchar(100) NOT NULL,
  `role` int(2) NOT NULL DEFAULT 0,
  `ktp_file` varchar(100) NOT NULL,
  `kk_file` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_warga`
--

INSERT INTO `tbl_warga` (`id`, `nik`, `name`, `tempat_lahir`, `tgl_lahir`, `no_telp`, `alamat`, `rt`, `rw`, `jk`, `goldar`, `agama`, `pendidikan`, `pekerjaan`, `kawin`, `role`, `ktp_file`, `kk_file`, `image`) VALUES
(1, '3174150112340012', 'Admin', '', NULL, '', '', 0, 0, '', '', '', '', '', '', 0, '', '', 'default.jpg'),
(2, '3207451234500023', 'Nabil', 'Banten', '2006-04-20', '089789013547', 'JL Margasatwa', 6, 1, 'l', 'a', 'islam', 'slta', 'swasta', 'sudah', 0, '5__TOEFL_7__FOTO1.png', 'Contact_(6).jpg', 'default.jpg'),
(3, '3173071409010006', 'Muhammad Rizky', '', NULL, '', '', 0, 0, '', '', '', '', '', '', 0, '', '', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(16) CHARACTER SET latin1 NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `name`, `email`, `image`, `password`, `role_id`, `status`, `date_created`) VALUES
('3173071409010006', 'Muhammad Rizky', 'warga2@gmail.com', 'default.jpg', '$2y$10$fY40DM.jI88OM18DBXOCWuOI..c05E3MylCOTP4R/lX806UVa3F1G', 2, 0, 1702485054),
('3174150112340012', 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$mS4FtZeNoowBF82HAyLo2es9v2rzGGjj4dSXE4paFJH1nn0OanJPq', 1, 0, 1679251543),
('3207451234500023', 'Nabil', 'warga@gmail.com', 'default.jpg', '$2y$10$2MkaYFdtyTPbduJ/WKWcS.ThQyGBt9eACtrz6/.9CpTFjtM4Taix.', 2, 0, 1679251745);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_kk`
--
ALTER TABLE `tbl_kk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_ktp`
--
ALTER TABLE `tbl_ktp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_skck`
--
ALTER TABLE `tbl_skck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kk`
--
ALTER TABLE `tbl_kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ktp`
--
ALTER TABLE `tbl_ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_skck`
--
ALTER TABLE `tbl_skck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
