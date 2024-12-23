-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 09:26 AM
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
  `kategori` enum('Fasilitas','Tenaga Pendidik','Keamanan') DEFAULT 'Fasilitas',
  `lokasi` enum('FST','GKT','FSH','FISHUM','SC') DEFAULT 'FST',
  `tingkat` enum('Berat','Sedang','Ringan') DEFAULT 'Berat',
  `probabilitas` enum('Jarang Terjadi','Terjadi','Sering Terjadi') NOT NULL DEFAULT 'Terjadi',
  `deskripsi` varchar(100) DEFAULT NULL,
  `solusi` varchar(500) DEFAULT NULL,
  `penyelesaian` enum('Menunggu','Proses','Selesai') DEFAULT 'Menunggu',
  `status` enum('pending','approved') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `kategori`, `lokasi`, `tingkat`, `probabilitas`, `deskripsi`, `solusi`, `penyelesaian`, `status`) VALUES
(90, 'Tenaga Pendidik', 'GKT', 'Berat', 'Sering Terjadi', 'Barang Hilang', 'Pasang CCTV', 'Selesai', 'approved');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
