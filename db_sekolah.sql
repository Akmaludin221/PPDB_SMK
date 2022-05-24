-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2020 pada 23.22
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--
CREATE DATABASE IF NOT EXISTS `db_sekolah` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_sekolah`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
(1111, '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_siswa`
--

CREATE TABLE `biodata_siswa` (
  `id` int(11) NOT NULL,
  `NISN` varchar(15) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(125) NOT NULL,
  `kotaKabupaten` varchar(125) NOT NULL,
  `kodePos` varchar(20) NOT NULL,
  `TTG` date NOT NULL,
  `jenisKelamin` varchar(1) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `wargaNegara` varchar(5) NOT NULL,
  `email` varchar(125) NOT NULL,
  `noTelepon` varchar(15) NOT NULL,
  `noHandPhone` varchar(12) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_ijazah` date NOT NULL,
  `asal_sekolah` varchar(125) NOT NULL,
  `alamat_sekolah` varchar(150) NOT NULL,
  `nomor_ijazah` int(11) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `nama_ayah` varchar(125) NOT NULL,
  `pekerjaan_ayah` varchar(125) NOT NULL,
  `pendidikan_ayah` varchar(125) NOT NULL,
  `nomor_hp_ayah` int(11) NOT NULL,
  `nama_ibu` varchar(125) NOT NULL,
  `pekerjaan_ibu` varchar(125) NOT NULL,
  `pendidikan_ibu` varchar(125) NOT NULL,
  `nomor_hp_ibu` int(11) NOT NULL,
  `alamat_keluarga` varchar(255) NOT NULL,
  `nama_wali` varchar(125) NOT NULL,
  `pekerjaan_wali` varchar(125) NOT NULL,
  `pendidikan_wali` varchar(125) NOT NULL,
  `nomor_hp_wali` int(11) NOT NULL,
  `alamat_wali` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata_siswa`
--

INSERT INTO `biodata_siswa` (`id`, `NISN`, `nama`, `alamat`, `provinsi`, `kotaKabupaten`, `kodePos`, `TTG`, `jenisKelamin`, `agama`, `wargaNegara`, `email`, `noTelepon`, `noHandPhone`, `status`, `tgl_ijazah`, `asal_sekolah`, `alamat_sekolah`, `nomor_ijazah`, `jurusan`, `nama_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `nomor_hp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `nomor_hp_ibu`, `alamat_keluarga`, `nama_wali`, `pekerjaan_wali`, `pendidikan_wali`, `nomor_hp_wali`, `alamat_wali`) VALUES
(38, '123456789116', 'adsfad', 'adsfad', 'adsf', 'adsf', '111', '1999-12-09', '', 'islam', 'WNI', 'Akmaludin@gmail.com', '', '', '', '2019-04-21', 'asadsf', 'adf', 11999111, 'MM', 'asfd', 'adsf', 'adsf', 0, 'asdfad', 'dasf', 'adsf', 0, 'adsfadsf', '', '', '', 0, ''),
(39, '123456789117', 'asdfadsf', 'jajaja', 'asfads', 'adsfadf', '1113', '1999-05-19', 'L', 'islam', 'WNI', 'budi@gmail.com', '', '', 'baru', '2019-04-21', 'sadfas', 'asdfadsf', 0, 'MM', 'adfadf', 'adfadsf', 'dasfadsf', 0, 'adfadsf', 'adfadf', 'fadadfasd', 0, 'adfadsfads', '', '', '', 0, ''),
(40, '123455422222', 'teti', 'jonggol', 'jabar', 'bogor', '12345', '1999-03-12', 'P', 'islam', 'WNI', 'teti@apaja.com', '12345678910', '12345678889', 'baru', '2020-06-30', 'smp negri 10', 'bandung', 12345678, 'MM', 'jhjhj', 'hgfhfhg', 'SMK atau sederajat', 0, 'fhgfghfh', 'GHJGJHG', 'FCGFG', 0, 'HFHGFHGFHG', '', '', '', 0, ''),
(41, '121212121212', 'Akmaludin', 'adfadf', 'jawa barat', 'depok', '1111', '2020-12-20', 'L', 'islam', 'WNI', 'afasdf@gmail.com', '', '', 'baru', '2020-05-21', 'asfad', 'adfad', 123123, 'AP', 'asfadsf', 'asdfads', 'adsf', 0, 'adfad', 'adfadf', 'adfadsf', 0, 'adfadsfad', '', '', '', 0, ''),
(42, '191919191919', 'budi', 'adsfdaf', 'dafads', 'dafa', '1111', '1999-12-09', 'L', 'islam', 'WNI', 'budi@gmail.com', '', '', 'baru', '2019-09-21', 'dafadf', 'adfad', 12312, 'AP', 'asdfads', 'adfads', 'adfadf', 0, 'adfadsf', 'adsfads', 'adfa', 0, 'adfad', '', '', '', 0, ''),
(43, '101010101011', 'adsfadsf', 'dasfadsf', 'adsfad', 'adfads', '123', '1999-03-12', 'L', 'islam', 'WNI', 'adsfads@jkjk.com', '', '', 'baru', '2020-05-22', 'asdfad', 'dafadsf', 1213, 'AP', 'adfadsf', 'adfadsf', 'adfads', 0, 'adfadsf', 'adfads', 'adfads', 0, 'dasfadsf', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `NISN` varchar(12) NOT NULL,
  `nama_siswa` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `NISN`, `nama_siswa`, `password`) VALUES
(1, '123456789116', 'adfadf', '19991209'),
(3, '101010101011', 'adsfadsf', '19990312');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indeks untuk tabel `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
