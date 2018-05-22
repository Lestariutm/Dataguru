-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mei 2018 pada 10.42
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataguru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guruppl`
--

CREATE TABLE `guruppl` (
  `Guruppl_id` int(11) NOT NULL,
  `Guruppl_nama` varchar(255) DEFAULT NULL,
  `Guruppl_alamat` varchar(255) DEFAULT NULL,
  `Guruppl_pengganti` varchar(255) DEFAULT NULL,
  `Guruppl_bidang` varchar(255) DEFAULT NULL,
  `Guruppl_universitas` varchar(255) DEFAULT NULL,
  `Guruppl_bulan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guruppl`
--

INSERT INTO `guruppl` (`Guruppl_id`, `Guruppl_nama`, `Guruppl_alamat`, `Guruppl_pengganti`, `Guruppl_bidang`, `Guruppl_universitas`, `Guruppl_bulan`) VALUES
(1, '', '', '', '', NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurusekolah`
--

CREATE TABLE `gurusekolah` (
  `guru_id` int(11) NOT NULL,
  `guru_nama` varchar(255) DEFAULT NULL,
  `guru_ttl` date DEFAULT NULL,
  `guru_kelas` varchar(34) DEFAULT NULL,
  `guru_alamat` varchar(255) DEFAULT NULL,
  `guru_pengajar` varchar(50) DEFAULT NULL,
  `guru_jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gurusekolah`
--

INSERT INTO `gurusekolah` (`guru_id`, `guru_nama`, `guru_ttl`, `guru_kelas`, `guru_alamat`, `guru_pengajar`, `guru_jabatan`) VALUES
(3, '', '0000-00-00', NULL, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guruppl`
--
ALTER TABLE `guruppl`
  ADD PRIMARY KEY (`Guruppl_id`);

--
-- Indexes for table `gurusekolah`
--
ALTER TABLE `gurusekolah`
  ADD PRIMARY KEY (`guru_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guruppl`
--
ALTER TABLE `guruppl`
  MODIFY `Guruppl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gurusekolah`
--
ALTER TABLE `gurusekolah`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
