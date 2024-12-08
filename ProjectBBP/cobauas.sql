-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 07:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobauas`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `kategori` enum('fasilitas','tendik','keamanan') DEFAULT NULL,
  `lokasi` enum('fst','gkt','fsh','fishum','sc') DEFAULT NULL,
  `tingkat` enum('berat','sedang','ringan') DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `solusi` varchar(500) DEFAULT NULL,
  `penyelesaian` enum('menunggu','proses','selesai') DEFAULT NULL,
  `status` enum('pending','approved') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `kategori`, `lokasi`, `tingkat`, `deskripsi`, `solusi`, `penyelesaian`, `status`) VALUES
(18, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(19, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(20, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(21, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(22, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(23, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(24, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(25, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(26, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(27, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(28, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(29, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(30, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(31, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending'),
(32, NULL, NULL, NULL, 'deskripsi', NULL, NULL, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
