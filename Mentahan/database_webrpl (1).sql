-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 04:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_webrpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `NIP` int(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tempat_lahir` varchar(25) NOT NULL,
  `Tanggal_lahir` varchar(25) NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `Marital` varchar(25) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Nama_pt` varchar(30) NOT NULL,
  `Ijazah` varchar(25) NOT NULL,
  `Lulus` varchar(20) NOT NULL,
  `Golongan` varchar(25) NOT NULL,
  `Ket` varchar(20) NOT NULL,
  `Jenis_Kelamin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`NIP`, `Nama`, `Tempat_lahir`, `Tanggal_lahir`, `Agama`, `Marital`, `Alamat`, `Nama_pt`, `Ijazah`, `Lulus`, `Golongan`, `Ket`, `Jenis_Kelamin`) VALUES
(202234, 'pak rizky', '', '', '', '', '', '', '', '', '', '', 'Option');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `Tahun` varchar(20) NOT NULL,
  `Kelas` varchar(20) NOT NULL,
  `NIS` int(25) NOT NULL,
  `Semester` varchar(25) NOT NULL,
  `Pemrograman_dasar` varchar(30) NOT NULL,
  `Basis_data` varchar(20) NOT NULL,
  `DDG` varchar(20) NOT NULL,
  `Informatika` varchar(20) NOT NULL,
  `IOT` varchar(20) NOT NULL,
  `PBO` varchar(20) NOT NULL,
  `PKK` varchar(20) NOT NULL,
  `PWEB` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_registeradmn`
--

CREATE TABLE `tb_registeradmn` (
  `Email` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_registeradmn`
--

INSERT INTO `tb_registeradmn` (`Email`, `Password`) VALUES
('putri23@gmail.com', '123'),
('uti@gmail.com', 't234'),
('mediana@gmail.com', 'wdas'),
('mediana@gmail.com', 'wdas'),
('putri23@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `NIS` int(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tempat_lahir` varchar(30) NOT NULL,
  `Tanggal_lahir` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Agama` varchar(15) NOT NULL,
  `Ayah` varchar(20) NOT NULL,
  `Ibu` varchar(25) NOT NULL,
  `Pekerjaan_ayah` varchar(30) NOT NULL,
  `Pekerjaan_ibu` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'administrator', 'administrator', '123', 'administrator'),
(2, 'siswa', 'siswa', '456', 'siswa'),
(3, 'guru', 'guru', '678', 'guru'),
(4, 'orangtua', 'orangtua', '345', 'orangtua'),
(5, 'staff', 'staff', '567', 'staff'),
(6, 'admin_sekolah', 'admin_sekolah', '456', 'admin_sekolah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`NIS`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `NIP` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202235;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `NIS` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `NIS` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21092929;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
