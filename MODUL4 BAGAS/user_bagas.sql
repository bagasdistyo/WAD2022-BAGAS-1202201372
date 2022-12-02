-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3315
-- Generation Time: Dec 01, 2022 at 04:43 PM
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
-- Database: `wad_modul4_bagas`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_bagas`
--

CREATE TABLE `user_bagas` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_bagas`
--

INSERT INTO `user_bagas` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1027006953, 'Rafi', 'chanxstep@gmail.com', '123', '2434'),
(1439822209, 'Ario', 'ario@gmail', 'bagas', '08616161'),
(1683353633, 'Bagas', 'bagas@gmail', 'fsvcd', '08616161');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_bagas`
--
ALTER TABLE `user_bagas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
