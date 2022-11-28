-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 09:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ant`
--

-- --------------------------------------------------------

--
-- Table structure for table `ggj`
--

CREATE TABLE `ggj` (
  `id` int(11) NOT NULL,
  `ggj_user` text DEFAULT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `confirm` int(10) DEFAULT 0,
  `transfer` text DEFAULT NULL,
  `register_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ggj`
--

INSERT INTO `ggj` (`id`, `ggj_user`, `fullname`, `email`, `password`, `confirm`, `transfer`, `register_date`) VALUES
(2, '', 'Banyapon Poolsawas', 'banyapon@daydev.com', '35af4bf130805f0b86b1b13e49c8101e', 1, 'ไม่มีชื่อ (630 × 500px).png', '2022-11-28 11:21:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ggj`
--
ALTER TABLE `ggj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ggj`
--
ALTER TABLE `ggj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
