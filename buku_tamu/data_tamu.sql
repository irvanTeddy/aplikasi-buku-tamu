-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 05:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `alamat`, `keperluan`, `tanggal`) VALUES
(13, 'Shin tae Yong', 'indonesia', 'TC', '2023-02-28 04:04:00'),
(14, 'Husna Dita Rahmah, S.Pd.', 'gunungkidul', 'mampir', '2023-03-02 10:35:00'),
(15, 'Rika Latina Laras, S.Pd.', 'gunungkidul', 'mencari istrinya', '2023-03-02 20:19:00'),
(16, 'Husna Dita Rahmah, S.Pd.', 'gunungkidul', 'rapat', '2023-03-02 20:20:00'),
(17, 'Rika Latina Laras, S.Pd.', 'gunungkidul', 'mampir', '2023-03-23 20:21:00'),
(18, 'Jokowi', 'gunungkidul', 'meet', '2023-03-10 20:21:00'),
(19, 'Erik Tohir', 'gunungkidul', 'meet', '2023-03-31 20:22:00'),
(20, 'Prabowo', 'indonesia', 'mampir', '2023-03-18 20:24:00'),
(21, 'Rika Latina Laras, S.Pd.', 'gunungkidul', 'meet', '2023-03-02 20:25:00'),
(22, 'Irvan setiawan teddy', 'gunungkidul', 'meet', '2023-03-02 20:25:00'),
(23, 'Zulfa Fathussalma Khoerunnisa, S.Pd.', 'gunungkidul', 'meet', '2023-03-02 20:26:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
