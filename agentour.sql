-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 08:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agentour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` char(32) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `fasilitas` varchar(300) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `judul`, `fasilitas`, `harga`) VALUES
(1, 'Tour Jepang', 'Hotel/penginapan berbintang tiga atau setaraf. Makan tiga kali sehari sembari mencicipi menu masakan khas Jepang. Transportasi (bus/kereta) selama perjalanan. Tiket masuk lokasi wisata sesuai itinerary. Tour guide berpengalaman dan fasih berbahasa Jepang', '700'),
(4, 'Tour China', 'Hotel/penginapan berbintang tiga atau setaraf. Makan tiga kali sehari sembari mencicipi menu masakan khas China. Transportasi (bus/kereta) selama perjalanan. Tiket masuk lokasi wisata sesuai itinerary. Tour guide berpengalaman dan fasih berbahasa China', '100'),
(5, 'Tour Korea', 'Hotel/penginapan berbintang tiga atau setaraf.\r\nMakan tiga kali sehari sembari mencicipi menu masakan khas Korea.\r\nTransportasi (bus/kereta) selama perjalanan.\r\nTiket masuk lokasi wisata sesuai itinerary.\r\nTour guide berpengalaman dan fasih berbahasa Korea', '1800');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
