-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 03:48 PM
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
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absensi`, `id_user`, `keterangan`, `id_jadwal`) VALUES
(1, 4, 'hadir', 4),
(2, 5, 'hadir', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_achievement`
--

CREATE TABLE `tbl_achievement` (
  `id_achiev` int(11) NOT NULL,
  `img_achiev` varchar(250) DEFAULT NULL,
  `desc_achiev` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_achievement`
--

INSERT INTO `tbl_achievement` (`id_achiev`, `img_achiev`, `desc_achiev`, `created_at`, `updated_at`) VALUES
(16, '1619190265.jpg', 'Hai Ayo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_costume`
--
-- Error reading structure for table sanggar.tbl_costume: #1932 - Table 'sanggar.tbl_costume' doesn't exist in engine
-- Error reading data for table sanggar.tbl_costume: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `sanggar`.`tbl_costume`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id_event` int(11) NOT NULL,
  `name_event` varchar(150) NOT NULL,
  `date_event` date NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id_event`, `name_event`, `date_event`, `created_at`) VALUES
(10, 'Istighosah', '2021-01-01', '0000-00-00 00:00:00'),
(11, 'Sholawatan', '2021-01-01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` varchar(10) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `kategori` varchar(50) DEFAULT NULL,
  `arsip` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `hari`, `tanggal`, `waktu`, `tempat`, `deskripsi`, `kategori`, `arsip`) VALUES
(4, 'Sabtu', '2021-06-12', '15:00', 'Sanggar Citra Budaya', 'Latihan Remo ya gaes yak', 'semua', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifikasi`
--

CREATE TABLE `tbl_notifikasi` (
  `id_notif` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `keterangan` text,
  `waktu` varchar(25) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notifikasi`
--

INSERT INTO `tbl_notifikasi` (`id_notif`, `id_user`, `keterangan`, `waktu`, `status`) VALUES
(1, 3, 'Penyewaan anda telah dikonfirmasi dan telah diterima silahkan ambil kostum ke sanggar kami', '2021-06-05 04:22:23pm', '2'),
(2, 3, 'Terimakasi telah berlangganan', '06/06/2021 09:46', '2'),
(3, 4, 'Penyewaan anda telah dikonfirmasi dan telah diterima silahkan ambil kostum ke sanggar kami', '2021-06-06 08:37:32am', '2'),
(4, 4, 'anda akan mengikuti event terdekat silahkan untuk mengikuti latihan untuk kegiatan event', '2021-06-09 04:21:26pm', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyewaan`
--

CREATE TABLE `tbl_penyewaan` (
  `id_penyewaan` varchar(50) NOT NULL,
  `id_costume` int(11) DEFAULT NULL,
  `tanggal_sewa` varchar(25) DEFAULT NULL,
  `tanggal_kembali` varchar(25) DEFAULT NULL,
  `total_kostum` varchar(5) DEFAULT NULL,
  `total_pembayaran` varchar(20) DEFAULT NULL,
  `metode_pembayaran` varchar(20) DEFAULT NULL,
  `foto_tf` varchar(500) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penyewaan`
--

INSERT INTO `tbl_penyewaan` (`id_penyewaan`, `id_costume`, `tanggal_sewa`, `tanggal_kembali`, `total_kostum`, `total_pembayaran`, `metode_pembayaran`, `foto_tf`, `id_user`, `status`) VALUES
('11062021-190', 2, '12/Juni/2021', '13/Juni/2021', '3', '90000', 'BCA 009201901920', 'contoh.jpg', 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id_profile` int(11) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `gender` varchar(35) NOT NULL,
  `image_profile` varchar(250) DEFAULT NULL,
  `age_category` varchar(35) NOT NULL,
  `user_status` varchar(35) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site`
--

CREATE TABLE `tbl_site` (
  `id_site` int(11) NOT NULL,
  `name_site` varchar(150) NOT NULL,
  `since_site` year(4) DEFAULT NULL,
  `owner_site` varchar(150) NOT NULL,
  `address_site` text,
  `email_site` varchar(50) DEFAULT NULL,
  `logo_site` varchar(65) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site`
--

INSERT INTO `tbl_site` (`id_site`, `name_site`, `since_site`, `owner_site`, `address_site`, `email_site`, `logo_site`, `created_at`, `updated_at`) VALUES
(1, 'SANGGAR TARI CITRA BUDAYA', 2000, 'Chusnul Chowatini S.Sn', 'Jember, Mangli Lingk. Tanjung', 'citrabudaya123@gmail.com', NULL, '2021-04-26 02:00:00', '2021-04-26 01:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainer`
--

CREATE TABLE `tbl_trainer` (
  `id_trainer` int(11) NOT NULL,
  `name_trainer` varchar(150) NOT NULL,
  `image_trainer` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trainer`
--

INSERT INTO `tbl_trainer` (`id_trainer`, `name_trainer`, `image_trainer`, `created_at`, `updated_at`) VALUES
(2, 'Ushul Fiqih', '1619479784.jpg', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE `tbl_training` (
  `id_training` int(11) NOT NULL,
  `date_training` date NOT NULL,
  `hour_training` time NOT NULL,
  `type_training` enum('event','routine') NOT NULL,
  `type_age` enum('adult','childern') NOT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_training`
--

INSERT INTO `tbl_training` (`id_training`, `date_training`, `hour_training`, `type_training`, `type_age`, `event_id`) VALUES
(13, '2021-04-23', '18:33:00', 'event', 'adult', 10),
(14, '2021-06-12', '19:00:00', 'event', 'adult', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(10) NOT NULL,
  `is_active` int(11) NOT NULL,
  `type` enum('user','admin') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `is_active`, `type`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'adminsanggar@gmail.com', 'password', 1, 'admin', '2021-04-22 00:00:00', '2021-04-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_costume`
--
-- Error reading structure for table sanggar.tb_costume: #1932 - Table 'sanggar.tb_costume' doesn't exist in engine
-- Error reading data for table sanggar.tb_costume: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `sanggar`.`tb_costume`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_tari`
--

CREATE TABLE `tb_jenis_tari` (
  `id` int(11) NOT NULL,
  `jenis_tari` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_tari`
--

INSERT INTO `tb_jenis_tari` (`id`, `jenis_tari`) VALUES
(1, 'Tari Tradisi'),
(2, 'Tari Kreasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kostume`
--

CREATE TABLE `tb_kostume` (
  `id_costume` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_sewa` varchar(55) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kostume`
--

INSERT INTO `tb_kostume` (`id_costume`, `nama`, `foto`, `deskripsi`, `harga_sewa`, `id`) VALUES
(2, 'Tari Reog', '1622465599.jpg', 'Celana, Topeng', '30000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_sts` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_sts`, `status`) VALUES
(1, 'Anggota Sanggar'),
(2, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `tb_token`
--

CREATE TABLE `tb_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `token` varchar(128) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_trans_sewa`
--
-- Error reading structure for table sanggar.tb_trans_sewa: #1932 - Table 'sanggar.tb_trans_sewa' doesn't exist in engine
-- Error reading data for table sanggar.tb_trans_sewa: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `sanggar`.`tb_trans_sewa`' at line 1

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
  `aktif` varchar(2) NOT NULL,
  `date_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `email`, `alamat`, `no_telepon`, `jenis_kelamin`, `kategori`, `status`, `password`, `aktif`, `date_created`) VALUES
(3, 'Deny Fajar Indra', 'deny', 'denyfajar12@gmail.com', 'jl sparman no 1 jember', '082132881252', 'pria', 'Dewasa-Remaja', 'umum', 'ardiyan16', '1', '00:00:00'),
(4, 'skyline', 'skylinee', 'skylineardi@gmail.com', 'Jember Jawa Timur', '082132881000', 'pria', 'Anak-Anak', 'anggota sanggar', 'abc', '1', '00:00:00'),
(5, 'Ega Kustian', 'ega', 'egakustian12@gmail.com', 'jenggawah', '081213666791', 'pria', 'Dewasa-Remaja', 'anggota sanggar', '123', '1', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `tbl_achievement`
--
ALTER TABLE `tbl_achievement`
  ADD PRIMARY KEY (`id_achiev`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_notifikasi`
--
ALTER TABLE `tbl_notifikasi`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `tbl_penyewaan`
--
ALTER TABLE `tbl_penyewaan`
  ADD PRIMARY KEY (`id_penyewaan`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tbl_trainer`
--
ALTER TABLE `tbl_trainer`
  ADD PRIMARY KEY (`id_trainer`);

--
-- Indexes for table `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`id_training`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_jenis_tari`
--
ALTER TABLE `tb_jenis_tari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kostume`
--
ALTER TABLE `tb_kostume`
  ADD PRIMARY KEY (`id_costume`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_sts`);

--
-- Indexes for table `tb_token`
--
ALTER TABLE `tb_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_achievement`
--
ALTER TABLE `tbl_achievement`
  MODIFY `id_achiev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_notifikasi`
--
ALTER TABLE `tbl_notifikasi`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_trainer`
--
ALTER TABLE `tbl_trainer`
  MODIFY `id_trainer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jenis_tari`
--
ALTER TABLE `tb_jenis_tari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kostume`
--
ALTER TABLE `tb_kostume`
  MODIFY `id_costume` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_sts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
