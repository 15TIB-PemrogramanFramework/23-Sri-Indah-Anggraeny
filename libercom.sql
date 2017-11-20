-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 10:25 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libercom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL,
  `gambar_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `deskripsi_barang` varchar(150) NOT NULL,
  `harga_barang` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `gambar_barang`, `nama_barang`, `deskripsi_barang`, `harga_barang`) VALUES
(11, '1510989530.jpg', 'acer one happy ', 'notebook ini di lengkapi dengan hardisk 320 gb, ram 1 gb, prosesor intel atom. di jual dengan kelengkapan fullset. pastinya bergaransi. ', 'Rp.1.600.000'),
(12, '1510989538.jpg', 'acer E1 431 ', 'Spesifikasi intel celeron prosesor, ram 2 gb , hdd 320 gb. ', 'Rp.2.400.000'),
(13, '1510989547.jpg', 'asus', 'Spesifikasi intel celeron prosesor, ram 2 gb , hdd 320 gb. ', 'Rp.2.400.000'),
(14, '1510989557.jpg', 'toshiba c640', 'Spesifikasi intel celeron prosesor, ram 2 gb , hdd 320 gb. ', 'Rp.2.400.000');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_pesan`, `id_member`, `gambar`) VALUES
(5, 98, 14, '1510742303.jpg'),
(8, 109, 17, '1511009113.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `email`, `alamat`, `username`, `password`) VALUES
(22, 'iwan', 'iwantamsil24@gmail.com', 'rowosari', 'iwan', 'iwan'),
(17, 'Rifad Andrian Saragih', 'rifad@gmail.com', 'Panam', 'rifad', '260311'),
(21, 'Sri Indah Anggraeny', 'sri15ti@mahasiswa.pcr.ac.id', 'Jl. Umban Sari Atas 1', 'anggry', '260311'),
(19, 'Cut Febrianti', 'cut15ti@mahasiswa.pcr.ac.id', 'Kulim', 'cute', 'cut'),
(20, 'Raja Putri Annisa', 'raja15ti@mahasiswa.pcr.ac.id', 'Jl. Yos Sudarso', 'raja', 'raja'),
(23, 'Risya Listya Rizalni', 'risya15ti@mahasiswa.pcr.ac.id', 'USA', 'risyalr', '12feb');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_member`, `id_barang`, `jumlah`, `status`) VALUES
(98, 14, 11, 5, 'Sedang dikirim'),
(102, 12, 11, 6, 'Sedang diproses'),
(108, 14, 11, 78, 'Dibatalkan'),
(109, 17, 11, 1, 'Sedang diproses'),
(110, 18, 13, 5, 'Sedang dikirim'),
(111, 18, 12, 4, 'Dibatalkan'),
(112, 18, 11, 234, ''),
(113, 18, 11, 100, ''),
(115, 22, 13, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD UNIQUE KEY `id_pesan` (`id_pesan`),
  ADD UNIQUE KEY `id_member` (`id_member`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
