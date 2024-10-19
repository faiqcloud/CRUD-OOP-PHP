-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 08:02 PM
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
-- Database: `db_php0060`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users0060`
--

CREATE TABLE `tb_users0060` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users0060`
--

INSERT INTO `tb_users0060` (`id`, `nama`, `alamat`, `nohp`, `jenis_kelamin`, `foto`) VALUES
(29, 'M Faiq', 'Batang', '085836377450', 'Laki-laki', ''),
(30, 'Ilmi', 'Pemalang', '087735487650', 'Perempuan', ''),
(31, 'Arif', 'Pekalongan', '087735487651', 'Laki-laki', ''),
(32, 'DAPA', 'Pekalongan', '087735487650', 'Laki-laki', 'profil.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users0060`
--
ALTER TABLE `tb_users0060`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users0060`
--
ALTER TABLE `tb_users0060`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
