-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 05:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scinnotia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kota` varchar(225) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kota`, `images`) VALUES
(1, 'Sidoarjo', '\r\n'),
(2, 'Sidoarjo', 'toko1.jpg'),
(3, 'Blitar', 'toko3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`login_id`, `username`, `password`) VALUES
(1, 'admin', 123456),
(2, 'balkis', 150606);

-- --------------------------------------------------------

--
-- Table structure for table `tb_toko`
--

CREATE TABLE `tb_toko` (
  `id` int(11) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `namaToko` varchar(100) NOT NULL,
  `jamOperasional` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alamatLengkap` text NOT NULL,
  `instagram` text NOT NULL,
  `noHp` varchar(14) NOT NULL,
  `gmap` text NOT NULL,
  `produkbrand` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_toko`
--

INSERT INTO `tb_toko` (`id`, `id_kategori`, `namaToko`, `jamOperasional`, `alamat`, `alamatLengkap`, `instagram`, `noHp`, `gmap`, `produkbrand`, `images`) VALUES
(4, 0, 'Mitufaya', '09.00-10.00', 'MOG-KAWI', 'jl. kawi nomor 55 atas ', '@mitufaya.store', '08912345678', 'https//pppppp.', 'mitufaya, n pure, scarlett, garnier, implora, emina, viva, maybelline, wardah.', 'toko3.jpg'),
(5, 0, 'toko 1', '22222', 'dinoyo', 'dinoyo pride', 'qqqqqqq', '086661111', 'aaaaaa', 'pad,iajggg,sss', 'toko1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unnggulan`
--

CREATE TABLE `tb_unnggulan` (
  `id` int(11) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `namaToko` varchar(100) NOT NULL,
  `jamOperasional` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alamatLengkap` text NOT NULL,
  `instagram` text NOT NULL,
  `noHp` varchar(14) NOT NULL,
  `gmap` text NOT NULL,
  `produkbrand` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_unnggulan`
--
ALTER TABLE `tb_unnggulan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_toko`
--
ALTER TABLE `tb_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
