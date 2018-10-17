-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 08:23 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rspelindo_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
`id` int(11) NOT NULL,
  `kecepatan` int(11) NOT NULL,
  `warna_bg` varchar(20) NOT NULL,
  `warna_teks` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `kecepatan`, `warna_bg`, `warna_teks`) VALUES
(1, 10, 'Black', 'White');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `tgl_siap` date NOT NULL,
  `image` text NOT NULL,
  `flag` int(1) NOT NULL COMMENT '0=default, 1=event',
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `nama`, `keterangan`, `tanggal`, `tgl`, `tgl_siap`, `image`, `flag`, `status`) VALUES
(50, 'RS PHCM', 'SELAMAT DATANG DI RS PHCM', '2018-09-24', '2018-09-04 - 2018-09-21', '0000-00-00', '26b9e0d8e06b773ff3714094dd06c3749b6869cb-1sjpeJdx9jGWr9MPEfZIZJg.jpeg', 0, 1),
(51, 'HARI RAYA IDUL FITRI', 'SELAMAT HARI RAYA IDUL FITRI', '2018-09-24', '2018-09-04 - 2018-09-28', '0000-00-00', 'd1c24ca7a8479401d2067b2454be410112fe6b84-beverage-3157395_960_720.jpg', 0, 1),
(52, 'Tahun Baru', 'Selamat Tahun Baru', '2018-10-17', '2018-10-18 - 2018-10-27', '0000-00-00', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teks_berjalan`
--

CREATE TABLE IF NOT EXISTS `teks_berjalan` (
`id` int(11) NOT NULL,
  `teks` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(1) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `teks_berjalan`
--

INSERT INTO `teks_berjalan` (`id`, `teks`, `tanggal`, `status`, `flag`) VALUES
(1, 'SELAMAT DATANG DI RS PELINDO', '2018-09-01', 1, 0),
(2, 'RS Pelindo Mengadakan Event sunat massal', '2018-09-22', 1, 1),
(5, 'SSS', '2018-09-06', 0, 0),
(6, 'ASSALAMUALAIKUM', '2018-10-26', 1, 0),
(12, 'ALHAMDULILLAH', '2018-09-28', 1, 0),
(13, 'Nama Saya Melli', '2018-09-07', 1, 0),
(14, 'Haloooo', '2018-10-31', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teks_berjalan`
--
ALTER TABLE `teks_berjalan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `teks_berjalan`
--
ALTER TABLE `teks_berjalan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
