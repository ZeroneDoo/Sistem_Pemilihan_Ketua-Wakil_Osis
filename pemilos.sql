-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 08:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilos`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nama_ketos` varchar(30) DEFAULT NULL,
  `nama_waketos` varchar(30) DEFAULT NULL,
  `kelas_ketos` varchar(12) DEFAULT NULL,
  `kelas_waketos` varchar(12) DEFAULT NULL,
  `visi_misi` text DEFAULT NULL,
  `no_grup` varchar(10) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_ketos`, `nama_waketos`, `kelas_ketos`, `kelas_waketos`, `visi_misi`, `no_grup`, `status`) VALUES
(1, 'Ucup', 'Budi', 'XI', 'X', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '1', 'up'),
(2, 'Ujang', 'Tutung', 'XII', 'X', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '2', 'up'),
(3, 'Dhyka', 'Fathir', 'XI', 'XI', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '3', 'up'),
(4, 'Ucupi', 'Budiii', 'XI', 'X', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '4', 'up'),
(5, 'Ucupaa', 'aaaa', 'XII', 'X', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '5', 'up'),
(6, 'Asep', 'Agung', 'XI', 'XII', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '6', 'up'),
(7, 'Kusmina', 'Sukidayo', 'XI', 'XII', 'laaaaaaaaaaaaa Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '6', 'up');

-- --------------------------------------------------------

--
-- Table structure for table `pemilihan`
--

CREATE TABLE `pemilihan` (
  `id_pemilih` int(11) NOT NULL,
  `nama_pemilih` varchar(30) DEFAULT NULL,
  `kelas` varchar(12) DEFAULT NULL,
  `no_grup` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilihan`
--

INSERT INTO `pemilihan` (`id_pemilih`, `nama_pemilih`, `kelas`, `no_grup`) VALUES
(9, 'ridho@gmail.com', 'XI', '3'),
(13, 'dudung@gmail.com', 'XI', '2'),
(26, 'patir@gmail.com', 'XI', '1'),
(27, 'kanny@gmail.com', 'XI', '1'),
(28, 'asep@gmail.com', 'XII', '2'),
(29, 'rizki@gmail.com', 'XI', '2');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `kelas` varchar(12) DEFAULT NULL,
  `pass` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `username`, `nama`, `kelas`, `pass`) VALUES
(1000, 'ridho@gmail.com', 'Ridho Rizqi Pambudi', 'XI ', 'ridho1234'),
(1001, 'admin', '', NULL, '1234'),
(1002, 'patir@gmail.com', 'Fathir Akmal Burhanudin', 'XI', 'patir1234'),
(1003, 'kanny@gmail.com', 'Kanny Indira Baihaqi', 'XI', 'kanny1234'),
(1004, 'bambang@gmail.com', 'Bambang', 'XI', '1234'),
(1005, 'ucup@gmail.com', 'Ucup', 'X', 'ucup1234'),
(1006, 'asep@gmail.com', 'Asep', 'XII', 'asep1234'),
(1007, 'dudung@gmail.com', 'Dudung', 'XI', 'dudung1234'),
(1008, 'ahmad@gmail.com', 'Ahmad', 'X', '1234'),
(1009, 'rizki@gmail.com', 'Rizki', 'XI', 'rizki1234'),
(1010, 'kipli@gmail.com', 'Kipli', 'XI', '1234'),
(1012, 'kuplu@gmail.com', 'Kuplu', 'X', 'kuplu1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `pemilihan`
--
ALTER TABLE `pemilihan`
  ADD PRIMARY KEY (`id_pemilih`),
  ADD UNIQUE KEY `nama_pemilih` (`nama_pemilih`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemilihan`
--
ALTER TABLE `pemilihan`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
