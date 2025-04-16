-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2025 pada 08.45
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

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
-- Struktur dari tabel `tbl_domisili`
--

CREATE TABLE `tbl_domisili` (
  `id` int(11) NOT NULL,
  `id_domisili` varchar(20) NOT NULL,
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
  `ktp_file` varchar(100) DEFAULT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_domisili`
--

INSERT INTO `tbl_domisili` (`id`, `id_domisili`, `nik`, `name`, `tgl_lahir`, `tempat_lahir`, `jk`, `alamat`, `rt`, `rw`, `ayah`, `ibu`, `tgl_buat`, `pengantar_file`, `ktp_file`, `kk_file`, `status`, `catatan`, `ttd_file`, `qrcode_file`) VALUES
(1, '472.11/1/438.7.9.14/', '2147483647', 'bill', '2001-08-18', 'Jakarta', 'L', 'JL.KAMERA I NO.14', 6, 1, 'toni', 'lisa', '2025-01-18 15:04:58', './assets/img/surat/domisili/3207451234500023-1737187498-pengantar_file.png', './assets/img/surat/domisili/3207451234500023-1737187498-ktp_file.png', './assets/img/surat/domisili/3207451234500023-1737187498-kk_file.png', -1, 'tidak valid', '', ''),
(2, '472.11/1/438.7.9.14/', '3297051789061789', 'Dimas Arsy', '2025-03-12', 'Jakarta', 'L', 'JL Rinjani', 6, 3, 'Komeng', 'Sinta', '2025-03-12 01:58:37', './assets/img/surat/domisili/3297051789061789-1741719517-pengantar_file.pdf', './assets/img/surat/domisili/3297051789061789-1741719517-ktp_file.pdf', './assets/img/surat/domisili/3297051789061789-1741719517-kk_file.pdf', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id` int(11) NOT NULL,
  `id_kelahiran` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_kelahiran`
--

INSERT INTO `tbl_kelahiran` (`id`, `id_kelahiran`, `nik`, `name`, `hubungan`, `anak`, `tgl_lahir`, `tempat_lahir`, `jk`, `alamat`, `rt`, `rw`, `ayah`, `ibu`, `pengantar_file`, `ket_file`, `kk_file`, `ktp_file`, `tgl_buat`, `status`, `catatan`, `ttd_file`, `qrcode_file`) VALUES
(1, '472.11/1/438.7.9.14/', '2147483647', NULL, 'anak', 'Sanusi', '2025-02-28', 'Jakarta', 'L', '', 6, 2, 'Juminten', 'Komang', './assets/img/surat/kelahiran/3297051789061789-1741639264-pengantar_file.pdf', './assets/img/surat/kelahiran/3297051789061789-1741639264-ket_file.pdf', './assets/img/surat/kelahiran/3297051789061789-1741639264-kk_file.pdf', './assets/img/surat/kelahiran/3297051789061789-1741639264-ktp_file.pdf', '2025-03-11 03:41:04', 0, NULL, '', ''),
(2, '472.11/2/438.7.9.14/', '3297051789061789', NULL, 'orang_tua', 'Sanusi', '2025-02-28', 'Jakarta', 'P', '', 6, 3, 'Komeng', 'Sfitri', './assets/img/surat/kelahiran/3297051789061789-1741719721-pengantar_file.pdf', './assets/img/surat/kelahiran/3297051789061789-1741719721-ket_file.pdf', './assets/img/surat/kelahiran/3297051789061789-1741719721-kk_file.pdf', './assets/img/surat/kelahiran/3297051789061789-1741719721-ktp_file.pdf', '2025-03-12 02:02:01', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kematian`
--

CREATE TABLE `tbl_kematian` (
  `id` int(11) NOT NULL,
  `id_kematian` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_kematian`
--

INSERT INTO `tbl_kematian` (`id`, `id_kematian`, `nik`, `name`, `hubungan`, `mayit`, `tgl_lahir`, `tempat_lahir`, `tgl_meninggal`, `tempat_meninggal`, `jk`, `alamat`, `rt`, `rw`, `tgl_buat`, `pengantar_file`, `kk_file`, `ktp_file`, `keterangan_file`, `status`, `catatan`, `ttd_file`, `qrcode_file`) VALUES
(1, '472.11/1/438.7.9.14/', '3297051789061789', 'Dimas Arsy', 'saudara', 'guntur', '2025-03-06', 'Jakarta', '2025-02-27', 'Jakarta', 'P', 'JL Margasatwa', 6, 3, '2025-03-12 02:03:07', './assets/img/surat/kematian/3297051789061789-1741719787-pengantar_file.pdf', './assets/img/surat/kematian/3297051789061789-1741719787-kk_file.pdf', './assets/img/surat/kematian/3297051789061789-1741719787-ktp_file.pdf', './assets/img/surat/kematian/3297051789061789-1741719787-keterangan_file.pdf', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kk`
--

CREATE TABLE `tbl_kk` (
  `id` int(11) NOT NULL,
  `id_kk` varchar(20) NOT NULL,
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
  `ktp_file` varchar(100) DEFAULT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `tambahan_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_kk`
--

INSERT INTO `tbl_kk` (`id`, `id_kk`, `nik`, `name`, `tgl_lahir`, `tempat_lahir`, `jk`, `alamat`, `rt`, `rw`, `ayah`, `ibu`, `tgl_buat`, `pengantar_file`, `ktp_file`, `kk_file`, `tambahan_file`, `status`, `catatan`, `ttd_file`, `qrcode_file`) VALUES
(5, '472.12/1/438.7.9.14/', '2147483647', 'Dimas Arsy', '2025-03-01', 'Jakarta', 'L', 'JL Jatayu 4 Kamp.Dukuh Gandaria 1', 6, 2, 'Pandi', 'Komang', '2025-03-11 23:11:01', './assets/img/surat/kk/3297051789061789-1741709461-pengantar_file.pdf', './assets/img/surat/kk/3297051789061789-1741709461-ktp_file.pdf', './assets/img/surat/kk/3297051789061789-1741709461-kk_file.pdf', './assets/img/surat/kk/3297051789061789-1741709461-tambahan_file.pdf', 0, NULL, '', ''),
(8, '472.12/2/438.7.9.14/', '2147483647', 'Dimas Arsy', '2025-02-28', 'Jakarta', 'L', 'JL Margasatwa', 6, 2, 'Komeng', 'Sfitri', '2025-03-11 23:25:59', './assets/img/surat/kk/3297051789061789-1741710359-pengantar_file.pdf', './assets/img/surat/kk/3297051789061789-1741710359-ktp_file.pdf', './assets/img/surat/kk/3297051789061789-1741710359-kk_file.pdf', './assets/img/surat/kk/3297051789061789-1741710359-tambahan_file.pdf', 0, NULL, '', ''),
(9, '472.12/3/438.7.9.14/', '2147483647', 'Dimas Arsy', '2025-03-01', 'Jakarta', 'L', 'JL Margasatwa', 6, 2, 'Komeng', 'Sinta', '2025-03-11 23:27:27', './assets/img/surat/kk/3297051789061789-1741710447-pengantar_file.pdf', './assets/img/surat/kk/3297051789061789-1741710447-ktp_file.pdf', './assets/img/surat/kk/3297051789061789-1741710447-kk_file.pdf', './assets/img/surat/kk/3297051789061789-1741710447-tambahan_file.pdf', 0, NULL, '', ''),
(10, '472.12/4/438.7.9.14/', '2147483647', 'Dimas Arsy', '2025-03-01', 'Jakarta', 'L', 'JL Jatayu 4 Kamp.Dukuh Gandaria 1', 6, 2, 'Komeng', 'Sinta', '2025-03-12 01:27:57', './assets/img/surat/ktp/3297051789061789-1741717677-pengantar_file.pdf', './assets/img/surat/ktp/3297051789061789-1741717677-ktp_file.pdf', './assets/img/surat/ktp/3297051789061789-1741717677-kk_file.pdf', './assets/img/surat/ktp/3297051789061789-1741717677-tambahan_file.pdf', 0, NULL, '', ''),
(11, '472.12/5/438.7.9.14/', '6', 'Dimas Arsy', '2025-03-08', 'Jakarta', 'L', 'JL Jatayu 4 Kamp.Dukuh Gandaria 1', 6, 3, 'Komeng', 'Sfitri', '2025-03-12 01:42:38', './assets/img/surat/ktp/-1741718558-pengantar_file.pdf', './assets/img/surat/ktp/-1741718558-ktp_file.pdf', './assets/img/surat/ktp/-1741718558-kk_file.pdf', './assets/img/surat/ktp/-1741718558-tambahan_file.pdf', 0, NULL, '', ''),
(12, '472.12/6/438.7.9.14/', '6', 'Dimas Arsy', '2025-03-01', 'Jakarta', 'L', 'JL Margasatwa', 2147483647, 3, 'Komeng', 'Komang', '2025-03-12 01:44:17', './assets/img/surat/ktp/-1741718657-pengantar_file.pdf', './assets/img/surat/ktp/-1741718657-ktp_file.pdf', './assets/img/surat/ktp/-1741718657-kk_file.pdf', './assets/img/surat/ktp/-1741718657-tambahan_file.pdf', 0, NULL, '', ''),
(13, '472.12/7/438.7.9.14/', '3297051789061789', 'Dimas Arsy', '2025-03-01', 'Jakarta', 'L', 'JL Margasatwa', 6, 2, 'Snusi', 'Sfitri', '2025-03-12 01:51:48', './assets/img/surat/ktp/3297051789061789-1741719107-pengantar_file.pdf', './assets/img/surat/ktp/3297051789061789-1741719107-ktp_file.pdf', './assets/img/surat/ktp/3297051789061789-1741719107-kk_file.pdf', './assets/img/surat/ktp/3297051789061789-1741719108-tambahan_file.pdf', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ktp`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_ktp`
--

INSERT INTO `tbl_ktp` (`id`, `id_ktp`, `nik`, `name`, `tgl_lahir`, `tempat_lahir`, `jk`, `alamat`, `rt`, `rw`, `ayah`, `ibu`, `tgl_buat`, `pengantar_file`, `kk_file`, `akte_file`, `foto_file`, `tambahan_file`, `status`, `catatan`, `ttd_file`, `qrcode_file`) VALUES
(2, '472.11/1/438.7.9.14/', '3207451234500023', 'Warga Baru', '2005-02-20', 'Banten', 'L', 'JL Margasatwa', 6, 3, 'Paijo', 'Isna', '2023-03-20 01:54:51', './assets/img/surat/ktp/3207451234500023-1679252091-pengantar_file.jpg', './assets/img/surat/ktp/3207451234500023-1679252091-kk_file.jpg', './assets/img/surat/ktp/3207451234500023-1679252091-akte_file.jpg', './assets/img/surat/ktp/3207451234500023-1679252091-foto_file.jpg', './assets/img/surat/ktp/3207451234500023-1679252091-tambahan_file.jpg', 2, NULL, '', ''),
(3, '472.11/2/438.7.9.14/', '3207451234500023', 'Warga Baru', '2001-09-14', 'Jakarta', 'L', 'jl.kamera 1', 1, 2, 'hamid', 'dewi', '2023-03-21 15:43:41', './assets/img/surat/ktp/3207451234500023-1679388221-pengantar_file.jpg', './assets/img/surat/ktp/3207451234500023-1679388221-kk_file.jpg', './assets/img/surat/ktp/3207451234500023-1679388221-akte_file.jpg', './assets/img/surat/ktp/3207451234500023-1679388221-foto_file.jpg', './assets/img/surat/ktp/3207451234500023-1679388221-tambahan_file.jpg', 2, NULL, '', ''),
(4, '472.11/1/438.7.9.14/', '3207451234500023', 'Warga', '2006-02-02', 'Jakarta', 'L', 'JL.KAMERA I NO.14', 2, 2, 'jono', 'susi', '2024-10-30 11:50:10', './assets/img/surat/ktp/3207451234500023-1730263810-pengantar_file.jpg', './assets/img/surat/ktp/3207451234500023-1730263810-kk_file.jpg', './assets/img/surat/ktp/3207451234500023-1730263810-akte_file.jpg', './assets/img/surat/ktp/3207451234500023-1730263810-foto_file.jpg', './assets/img/surat/ktp/3207451234500023-1730263810-tambahan_file.png', 1, NULL, '', ''),
(5, '472.11/1/438.7.9.14/', '3207451234500023', 'Warga', '2000-09-14', 'Jakarta', 'L', 'JL.KAMERA I NO.8', 1, 1, 'jono', 'Sumarni', '2025-01-16 23:07:35', './assets/img/surat/ktp/3207451234500023-1737043655-pengantar_file.jpeg', './assets/img/surat/ktp/3207451234500023-1737043655-kk_file.jpeg', './assets/img/surat/ktp/3207451234500023-1737043655-akte_file.jpeg', './assets/img/surat/ktp/3207451234500023-1737043655-foto_file.jpg', './assets/img/surat/ktp/3207451234500023-1737043655-tambahan_file.jpg', 1, NULL, '', ''),
(6, '472.11/2/438.7.9.14/', '3207451234500023', 'bill', '2002-06-12', 'Surabaya', 'L', 'JL Palmerah', 6, 1, 'toni', 'Ami', '2025-01-18 15:20:12', './assets/img/surat/ktp/3207451234500023-1737188412-pengantar_file.png', './assets/img/surat/ktp/3207451234500023-1737188412-kk_file.png', './assets/img/surat/ktp/3207451234500023-1737188412-akte_file.png', './assets/img/surat/ktp/3207451234500023-1737188412-foto_file.png', './assets/img/surat/ktp/3207451234500023-1737188412-tambahan_file.png', 1, NULL, '', ''),
(7, '472.11/3/438.7.9.14/', '3173071409010006', 'Muhammad Rizky', '2001-01-12', 'Jakarta', 'L', 'JL Palmerah', 6, 1, 'toni', 'Afi', '2025-01-18 15:36:55', './assets/img/surat/ktp/3173071409010006-1737189415-pengantar_file.jpg', './assets/img/surat/ktp/3173071409010006-1737189415-kk_file.jpg', './assets/img/surat/ktp/3173071409010006-1737189415-akte_file.jpg', './assets/img/surat/ktp/3173071409010006-1737189415-foto_file.jpg', './assets/img/surat/ktp/3173071409010006-1737189415-tambahan_file.jpg', 1, NULL, '', ''),
(8, '472.11/4/438.7.9.14/', '3207451234500023', 'Warga Baru', '2025-03-01', 'Jakarta', 'L', 'JL Jatayu 4 Kamp.Dukuh Gandaria 1', 6, 1, 'Pandi', 'Sfitri', '2025-03-11 03:09:34', './assets/img/surat/ktp/3207451234500023-1741637374-pengantar_file.pdf', './assets/img/surat/ktp/3207451234500023-1741637374-kk_file.pdf', './assets/img/surat/ktp/3207451234500023-1741637374-akte_file.pdf', './assets/img/surat/ktp/3207451234500023-1741637374-foto_file.pdf', './assets/img/surat/ktp/3207451234500023-1741637374-tambahan_file.pdf', 0, NULL, '', ''),
(9, '472.11/5/438.7.9.14/', '3297051789061789', 'Dimas Arsy', '2025-02-28', 'Jakarta', 'L', 'JL Jatayu 4 Kamp.Dukuh Gandaria 1', 6, 1, 'Snusi', 'Komang', '2025-03-11 03:12:06', './assets/img/surat/ktp/3297051789061789-1741637526-pengantar_file.pdf', './assets/img/surat/ktp/3297051789061789-1741637526-kk_file.pdf', './assets/img/surat/ktp/3297051789061789-1741637526-akte_file.pdf', './assets/img/surat/ktp/3297051789061789-1741637526-foto_file.pdf', './assets/img/surat/ktp/3297051789061789-1741637526-tambahan_file.pdf', 2, NULL, '', ''),
(10, '472.11/6/438.7.9.14/', '3297051789061789', 'Dimas Arsy', '2025-02-28', 'Jakarta', 'L', 'JL Kenari', 6, 3, 'Snusi', 'Sfitri', '2025-03-12 02:12:42', './assets/img/surat/ktp/3297051789061789-1741720362-pengantar_file.pdf', './assets/img/surat/ktp/3297051789061789-1741720362-kk_file.pdf', './assets/img/surat/ktp/3297051789061789-1741720362-akte_file.pdf', './assets/img/surat/ktp/3297051789061789-1741720362-foto_file.pdf', './assets/img/surat/ktp/3297051789061789-1741720362-tambahan_file.pdf', 0, NULL, '', ''),
(11, '472.11/7/438.7.9.14/', '3297051789061789', 'Dimas Arsy', '2025-02-26', 'Jakarta', 'L', 'JL Margasatwa', 6, 1, 'Pandi', 'Komang', '2025-03-12 02:21:20', './assets/img/surat/ktp/3297051789061789-1741720880-pengantar_file.pdf', './assets/img/surat/ktp/3297051789061789-1741720880-kk_file.pdf', './assets/img/surat/ktp/3297051789061789-1741720880-akte_file.pdf', './assets/img/surat/ktp/3297051789061789-1741720880-foto_file.pdf', './assets/img/surat/ktp/3297051789061789-1741720880-tambahan_file.pdf', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pindah`
--

CREATE TABLE `tbl_pindah` (
  `id` int(11) NOT NULL,
  `id_pindah` varchar(20) NOT NULL,
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
  `ktp_file` varchar(100) DEFAULT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_pindah`
--

INSERT INTO `tbl_pindah` (`id`, `id_pindah`, `nik`, `name`, `tgl_lahir`, `tempat_lahir`, `jk`, `alamat`, `rt`, `rw`, `ayah`, `ibu`, `tgl_buat`, `pengantar_file`, `ktp_file`, `kk_file`, `status`, `catatan`, `ttd_file`, `qrcode_file`) VALUES
(1, '472.11/1/438.7.9.14/', '3297051789061789', 'Dimas Arsy', '2025-03-12', 'Jakarta', 'L', 'JL Rinjani', 6, 3, 'Komeng', 'Sfitri', '2025-03-12 02:00:23', './assets/img/surat/pindah/3297051789061789-1741719623-pengantar_file.pdf', './assets/img/surat/pindah/3297051789061789-1741719623-ktp_file.pdf', './assets/img/surat/pindah/3297051789061789-1741719623-kk_file.pdf', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_skck`
--

CREATE TABLE `tbl_skck` (
  `id` int(11) NOT NULL,
  `id_skck` varchar(20) NOT NULL,
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
  `ktp_file` varchar(100) DEFAULT NULL,
  `foto_file` varchar(100) DEFAULT NULL,
  `tambahan_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_skck`
--

INSERT INTO `tbl_skck` (`id`, `id_skck`, `nik`, `name`, `tgl_lahir`, `tempat_lahir`, `jk`, `alamat`, `rt`, `rw`, `ayah`, `ibu`, `tgl_buat`, `pengantar_file`, `kk_file`, `ktp_file`, `foto_file`, `tambahan_file`, `status`, `catatan`, `ttd_file`, `qrcode_file`) VALUES
(1, '472.11/1/438.7.9.14/', '3297051789061789', 'Dimas Arsy', '2025-02-24', 'Jakarta', 'P', 'JL Rinjani', 6, 2, 'Juminten', 'Komang', '2025-03-12 01:59:32', './assets/img/surat/skck/3297051789061789-1741719571-pengantar_file.pdf', './assets/img/surat/skck/3297051789061789-1741719571-kk_file.pdf', './assets/img/surat/skck/3297051789061789-1741719571-ktp_file.pdf', './assets/img/surat/skck/3297051789061789-1741719571-foto_file.pdf', './assets/img/surat/skck/3297051789061789-1741719571-tambahan_file.pdf', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sktm`
--

CREATE TABLE `tbl_sktm` (
  `id` int(11) NOT NULL,
  `id_sktm` varchar(20) NOT NULL,
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
  `ktp_file` varchar(100) DEFAULT NULL,
  `kk_file` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `catatan` varchar(255) DEFAULT NULL,
  `ttd_file` varchar(255) NOT NULL,
  `qrcode_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_sktm`
--

INSERT INTO `tbl_sktm` (`id`, `id_sktm`, `nik`, `name`, `tgl_lahir`, `tempat_lahir`, `jk`, `alamat`, `rt`, `rw`, `ayah`, `ibu`, `tgl_buat`, `pengantar_file`, `ktp_file`, `kk_file`, `status`, `catatan`, `ttd_file`, `qrcode_file`) VALUES
(4, '472.11/1/438.7.9.14/', '3297051789061789', 'Dimas Arsy', '2025-03-12', 'Jakarta', 'L', 'JL Kenari', 6, 2, 'Komeng', 'Sinta', '2025-03-12 01:57:17', './assets/img/surat/sktm/3297051789061789-1741719436-pengantar_file.pdf', './assets/img/surat/sktm/3297051789061789-1741719437-ktp_file.pdf', './assets/img/surat/sktm/3297051789061789-1741719437-kk_file.pdf', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_terbaru`
--

CREATE TABLE `tbl_terbaru` (
  `penulis` varchar(30) DEFAULT NULL,
  `id_terbaru` int(5) NOT NULL,
  `judul_seo` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_terbaru`
--

INSERT INTO `tbl_terbaru` (`penulis`, `id_terbaru`, `judul_seo`, `judul`, `gambar`, `deskripsi`, `created_at`) VALUES
('Admin', 1, 'berbagi-sembako-murah', 'Berbagi Sembako Murah', '6062108732579495101.jpg', 'Pda hari ini kamis, akan diadakan buka puasa bersama di kelurahan palmerah. acara ini akan dihadiri oleh lurah palmerah Bapak Dimas Arsy.', '2025-03-22 00:00:00'),
('Admin', 8, 'jakarta-kebanjiran', 'Jakarta Kebanjiran', '—Pngtree—aesthetic_golden_islamic_frame_or_9034933.png', 'Hari ini banjir besar melanda jabodetabek, salah satu nya di kelurahan palmerah.', '2025-03-28 20:25:20'),
('Admin', 9, 'bukber-pegawai-kelurahan', 'Buka Bersama Lurah di Kelurahan Palmerah', '-1743189829-gambar.jpg', 'Pda hari ini kamis, akan diadakan buka puasa bersama di kelurahan palmerah. acara ini akan dihadiri oleh lurah palmerah Bapak Dimas Arsy.', '2025-03-28 20:23:49'),
('Admin', 12, 'BAGUS', 'dshs', 'Rumah_Kami.png', 'Pada hari ini, akan diadakn buber sekaligus penjualan sembako murah kepada warga Palmerah', '2025-03-29 03:09:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_warga`
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
  `ktp_file` varchar(100) NOT NULL,
  `kk_file` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_warga`
--

INSERT INTO `tbl_warga` (`id`, `nik`, `name`, `tempat_lahir`, `tgl_lahir`, `no_telp`, `alamat`, `rt`, `rw`, `jk`, `goldar`, `agama`, `pendidikan`, `pekerjaan`, `kawin`, `ktp_file`, `kk_file`, `image`) VALUES
(2, '3207451234500023', 'bill', 'Jakarta', '2001-08-18', '089789013547', 'JL Palmerah', 6, 2, 'L', 'a', 'islam', 'slta', 'swasta', 'sudah', '5__TOEFL_7__FOTO1.png', 'Contact_(6).jpg', 'default.jpg'),
(3, '3173071409010006', 'Muhammad Rizky', '', NULL, '', '', 0, 0, '', '', '', '', '', '', '', '', 'default.jpg'),
(4, '3297051789061789', 'Dimas Arsy', 'Jakarta', '2025-03-12', '08561757065', 'JL Jatayu 4 Kamp.Dukuh Gandaria 1', 6, 2, 'L', 'a', 'islam', 'sd', 'swasta', 'belum', 'surat_bukan_perokok.pdf', 'foto_rumah.pdf', '6127545922293449881.jpg'),
(5, '3297051789061745', 'Nabil', 'Jakarta', '2025-03-01', '089789013547', 'JL Jatayu 4 Kamp.Dukuh Gandaria 1', 0, 2, 'L', 'ab', 'islam', 'd2', 'petani', 'belum', 'foto_rumah1.pdf', 'surat_bukan_perokok1.pdf', '—Pngtree—aesthetic_golden_islamic_frame_or_9034933_(1)1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nik` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `name`, `email`, `image`, `password`, `role_id`, `status`, `date_created`) VALUES
('3173071409010006', 'Muhammad Rizky', 'warga2@gmail.com', 'default.jpg', '$2y$10$fY40DM.jI88OM18DBXOCWuOI..c05E3MylCOTP4R/lX806UVa3F1G', 2, 0, 1702485054),
('3174150112340012', 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$mS4FtZeNoowBF82HAyLo2es9v2rzGGjj4dSXE4paFJH1nn0OanJPq', 1, 0, 1679251543),
('3207451234500023', 'bill', 'warga@gmail.com', 'default.jpg', '$2y$10$2MkaYFdtyTPbduJ/WKWcS.ThQyGBt9eACtrz6/.9CpTFjtM4Taix.', 2, 0, 1679251745),
('3297051789061745', 'Nabil', 'nabil@gmail.com', 'default.jpg', '$2y$10$4ohV5r61chS5X4nwaHoE8eCc3m9TOdUYWWLOr7ZRTyMy98hkMlkSO', 2, 0, 1741634794),
('3297051789061789', 'Dimas Arsy', 'dimas@gmail.com', 'default.jpg', '$2y$10$kvLhoTxgG.3fYURMIOGVkusXKfwLTQRmM.x3saRD89/sbvwIviXhu', 2, 0, 1741633913);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tbl_kk`
--
ALTER TABLE `tbl_kk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tbl_ktp`
--
ALTER TABLE `tbl_ktp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tbl_skck`
--
ALTER TABLE `tbl_skck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tbl_terbaru`
--
ALTER TABLE `tbl_terbaru`
  ADD PRIMARY KEY (`id_terbaru`);

--
-- Indeks untuk tabel `tbl_warga`
--
ALTER TABLE `tbl_warga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_kk`
--
ALTER TABLE `tbl_kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_ktp`
--
ALTER TABLE `tbl_ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_skck`
--
ALTER TABLE `tbl_skck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_terbaru`
--
ALTER TABLE `tbl_terbaru`
  MODIFY `id_terbaru` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_warga`
--
ALTER TABLE `tbl_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
