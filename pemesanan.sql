-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 06:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libur_kecil`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesanan` varchar(255) NOT NULL,
  `hp_pemesan` varchar(15) NOT NULL,
  `waktu_wisata` date NOT NULL,
  `hari_wisata` int(11) NOT NULL,
  `paket_inap` int(11) NOT NULL,
  `paket_transport` int(11) NOT NULL,
  `paket_makan` int(11) NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `total_tagihan` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesanan`, `hp_pemesan`, `waktu_wisata`, `hari_wisata`, `paket_inap`, `paket_transport`, `paket_makan`, `jumlah_peserta`, `total_tagihan`, `is_deleted`, `created_at`) VALUES
(0, 'asd', 'asda', '2024-12-23', 1, 0, 1, 0, 12, 14400000, 0, '2024-12-23 16:57:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
