-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3315
-- Waktu pembuatan: 20 Nov 2022 pada 14.58
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom_bagas_table`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul3`
--

CREATE TABLE `modul3` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `modul3`
--

INSERT INTO `modul3` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(853626789, 'fwefw', 'fwef', 'weff', '2022-11-24', 'fewnlnlnjljjllllllllllllllll', 'Ferrari 458.jpg', 'Belum Lunas'),
(1653199546, 'DF', 'TRH', 'HTR', '0000-00-00', 'RGERGE', 'Toyota Supra.jpg', 'Lunas'),
(2141678981, 'WEF', 'GREG', 'WFFG', '2022-11-16', 'FWHHHHHHHHHHHHHOE OHJFIOSDJJJJJJJJJJJJJJJJJJJJJJJJJJJJ OIEFSVHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHD', 'Alphardd.png', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `modul3`
--
ALTER TABLE `modul3`
  ADD PRIMARY KEY (`id_mobil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
