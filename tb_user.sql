-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 03:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanggar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(120) DEFAULT NULL,
  `no_telepon` char(13) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `kategori` varchar(35) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto_profile` varchar(500) NOT NULL,
  `aktif` varchar(2) NOT NULL,
  `date_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `email`, `alamat`, `no_telepon`, `jenis_kelamin`, `kategori`, `status`, `password`, `foto_profile`, `aktif`, `date_created`) VALUES
(1, 'Deny Fajar', 'deny', 'denyfajar12@gmail.com', 'jember', '081213666791', 'pria', 'Dewasa-Remaja', 'umum', '123', 'agung.jpg', '1', '00:00:00'),
(2, 'skylineee', 'sky', 'skylineardi@gmail.com', 'Puger jember', '082132881252', 'pria', 'Dewasa-Remaja', 'anggota sanggar', 'abc', 'user.png', '1', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
