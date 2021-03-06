-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 03:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(30) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `ruang_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `ruang_kelas`) VALUES
(1, 'TI-2A', 'RT-05'),
(2, 'TI-2B', 'RT-07');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`) VALUES
(8, 'Rahmad  Alfian Maskuri', '100234522', 'dika@gmail.comm', 'Teknik Informatika'),
(9, 'soni', '100234510', 'soni@gmail.com', 'Teknik Informatika'),
(10, 'Rahmad Alfian Maskuri', '184192432', 'jordaann43@gmail.com', 'Teknik Informatika'),
(11, 'anggista1', '184192431', 'anggista1@gmail.com', 'Teknik Informatika'),
(12, 'violet', '184192432', 'viasdk1t@gmail.com', 'Teknik Informatika'),
(13, 'Dimas', '184192434', 'Dimas@gmail.com', 'Teknik Informatika'),
(14, 'dinii', '184192436', 'Dinis@gmail.com', 'Teknik Informatika'),
(15, 'Adenaya', '184192412', 'Adenaya@gmail.com', 'Teknik Informatika'),
(16, 'Fayra Sabruna', '184192423', 'Sabrina@gmail.com', 'Teknik Informatika'),
(18, 'Ali Murtadlo', '184192409', 'jorgeo43@gmail.com', 'Teknik Informatika'),
(19, 'Dimas Aditya Nugroho', '1841720048', 'dimas123@gmail.com', 'Teknik Informatika'),
(20, 'Rahmad Alfian', '1002345111', 'dikasdada@gmail.com', 'Teknik Informatika'),
(22, 'Edy Susanto', '1841720011', 'edys@gmail.com', 'Teknik Informatika'),
(23, 'Sekarang Uts', '1831728392', 'uts@gmail.com', 'Teknik Informatika'),
(25, 'Sekarang Uts Web Lanjut', '184191229', 'uts@gmail.com', 'Teknik Informatika'),
(28, 'Mahasiswa', '12381241', 'mhs@gmail.com', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matkul` int(30) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `tahun_ajaran` varchar(100) NOT NULL,
  `hari` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matkul`, `nama_matkul`, `tahun_ajaran`, `hari`) VALUES
(1, 'Pemrograman Web Lanjut', '2020', 'Selasa'),
(2, 'Sistem Operasi', '2020', 'Rabu'),
(3, 'Sistem Manajemen Basis Data', '2020', 'Kamis'),
(4, 'Manajemen Proyek', '2020', 'Kamis'),
(5, 'Proyek 1 Ganjilu', '2020', 'Senin'),
(6, 'Basis Data Lanjut', '2020', 'Jumat'),
(12, 'Demo Web Lanjut', '2020', 'Selasa');

-- --------------------------------------------------------

--
-- Table structure for table `mengampu`
--

CREATE TABLE `mengampu` (
  `id_mengampu` int(30) NOT NULL,
  `nama_dosen` varchar(500) NOT NULL,
  `id` int(30) NOT NULL,
  `id_matkul` int(30) NOT NULL,
  `id_kelas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengampu`
--

INSERT INTO `mengampu` (`id_mengampu`, `nama_dosen`, `id`, `id_matkul`, `id_kelas`) VALUES
(1, 'Nandhika ayu', 8, 4, 1),
(2, 'Rhenaldi Kasali', 10, 3, 2),
(4, 'Rosimaawarna', 20, 5, 2),
(5, 'Roswita Nila', 23, 4, 1),
(6, 'Adi Zakaria', 11, 1, 1),
(14, 'Budi Widjaja', 12, 1, 2),
(15, 'Dony Abdul Chalid', 13, 1, 1),
(16, 'Dwi Nastiti', 14, 2, 1),
(17, 'Dwi Widiastri', 15, 3, 1),
(18, 'Budi Widjaja', 12, 5, 2),
(20, 'Eka Pria', 16, 1, 1),
(21, 'Rahmad Alfian Maskuri', 18, 5, 1),
(26, 'Subhan Widyastutik', 8, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `mengampu`
--
ALTER TABLE `mengampu`
  ADD PRIMARY KEY (`id_mengampu`),
  ADD KEY `id` (`id`,`id_matkul`,`id_kelas`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matkul` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mengampu`
--
ALTER TABLE `mengampu`
  MODIFY `id_mengampu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mengampu`
--
ALTER TABLE `mengampu`
  ADD CONSTRAINT `mengampu_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mengampu_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mengampu_ibfk_3` FOREIGN KEY (`id`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
