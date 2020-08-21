-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 03:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `istana-maimun`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `admins_id` int(11) NOT NULL,
  `admins_nama` varchar(50) DEFAULT NULL,
  `admins_jenkel` varchar(2) DEFAULT NULL,
  `admins_username` varchar(30) DEFAULT NULL,
  `admins_password` varchar(35) DEFAULT NULL,
  `admins_email` varchar(50) DEFAULT NULL,
  `admins_nohp` varchar(20) DEFAULT NULL,
  `admins_status` int(2) DEFAULT 1,
  `admins_level` varchar(3) DEFAULT NULL,
  `admins_register` timestamp NULL DEFAULT current_timestamp(),
  `admins_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`admins_id`, `admins_nama`, `admins_jenkel`, `admins_username`, `admins_password`, `admins_email`, `admins_nohp`, `admins_status`, `admins_level`, `admins_register`, `admins_photo`) VALUES
(3, 'M Haviz ', 'L', 'aishasibuan', '585bbbc78e5d0c0b9ddaa12195e9597c', 'mhavishasibuan@gmail.com', '082134489030', 1, '1', '2020-07-10 12:32:59', '24e4ded1c99a0c152ff131fbf0e1ddc5.jpg'),
(5, 'agus', 'L', 'agus', 'fdf169558242ee051cca1479770ebac3', 'agus@gmail.com', 'agus', 1, '1', '2020-08-13 14:11:08', 'd9f5d00e5809405506a4731486e36cf5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_halaman`
--

CREATE TABLE `tbl_halaman` (
  `id` int(2) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(12, 'Bambang Soesatyo', 'bams@gmail.com', '088866996996', 'Selamat siang bapak admin !', '2020-08-07 16:23:33', 0),
(13, 'Edy Rahman ', 'edyrahman@gmail.com', '081309080765', 'Halo, kamu wisuda tahun ini ya !', '2020-08-17 07:59:40', 0),
(14, 'M Haviz Hasibuan', 'mhavishasibuan@gmail.com', '082134489030', 'Assalamualaikum', '2020-08-18 04:15:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status`) VALUES
(25, 'OPEN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tiket`
--

CREATE TABLE `tbl_tiket` (
  `tiket_id` int(11) NOT NULL,
  `tiket_golongan` varchar(20) DEFAULT NULL,
  `harga_tiket` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tiket`
--

INSERT INTO `tbl_tiket` (`tiket_id`, `tiket_golongan`, `harga_tiket`) VALUES
(1, 'dewasa', 10000),
(2, 'pelajar/anak-anak', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_tiket`
--

CREATE TABLE `tbl_transaksi_tiket` (
  `transaksi_id` int(11) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `kontak` varchar(15) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `harga_tiket` double DEFAULT NULL,
  `jumlah_tiket` int(3) NOT NULL DEFAULT 0,
  `dewasa` int(2) NOT NULL DEFAULT 0,
  `pelajar` int(2) NOT NULL DEFAULT 0,
  `bukti_pembayaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`admins_id`);

--
-- Indexes for table `tbl_halaman`
--
ALTER TABLE `tbl_halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  ADD PRIMARY KEY (`tiket_id`);

--
-- Indexes for table `tbl_transaksi_tiket`
--
ALTER TABLE `tbl_transaksi_tiket`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `admins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_halaman`
--
ALTER TABLE `tbl_halaman`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  MODIFY `tiket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tbl_transaksi_tiket`
--
ALTER TABLE `tbl_transaksi_tiket`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;