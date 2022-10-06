-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2022 pada 09.24
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemilos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nama_ketos` varchar(30) DEFAULT NULL,
  `nama_waketos` varchar(30) DEFAULT NULL,
  `kelas_ketos` varchar(12) DEFAULT NULL,
  `kelas_waketos` varchar(12) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `visi_misi` text DEFAULT NULL,
  `no_grup` varchar(10) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_ketos`, `nama_waketos`, `kelas_ketos`, `kelas_waketos`, `profile`, `visi_misi`, `no_grup`, `status`) VALUES
(1, 'Ucup', 'Budi', 'X', 'X', 'profile.png', 'aaaaaaaaaaaaaaaaaaaa Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '1', 'up'),
(2, 'Ujang', 'Tutung', 'XII', 'X', 'profile.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '2', 'up'),
(3, 'Dhyka', 'Fathir', 'XI', 'XI', 'profile.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '3', 'up'),
(4, 'Ucupi', 'Budiii', 'XI', 'X', 'profile.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '4', 'up'),
(5, 'Ucupaa', 'aaaa', 'XII', 'X', 'profile.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '5', 'up'),
(6, 'Asep', 'Agung', 'XI', 'XII', 'profile.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '6', 'up'),
(7, 'Kusmina', 'Sukidayo', 'XI', 'XII', 'profile.png', 'laaaaaaaaaaaaa Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, soluta rem. Necessitatibus dolor quidem quo itaque. Fuga rerum consequuntur, reprehenderit, fugit sapiente perferendis nam tempora expedita quo atque pariatur delectus?', '7', 'down');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilihan`
--

CREATE TABLE `pemilihan` (
  `id_pemilih` int(11) NOT NULL,
  `nama_pemilih` varchar(30) DEFAULT NULL,
  `kelas` varchar(12) DEFAULT NULL,
  `no_grup` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilihan`
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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `kelas` varchar(12) DEFAULT NULL,
  `pass` varchar(12) DEFAULT NULL,
  `profile` varchar(250) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `username`, `nama`, `kelas`, `pass`, `profile`, `status`) VALUES
(1000, 'ridho@gmail.com', 'Ridho Rizqi Pambudi', 'XI', 'ridho1234', '-6064632073110532466_120.jpg', 'up'),
(1002, 'patir@gmail.com', 'Fathir Akmal Burhanudin', 'XI', 'patir1234', 'profile.png', 'up'),
(1003, 'kanny@gmail.com', 'Kanny Indira Baihaqi', 'XI', 'kanny1234', 'profile.png', 'up'),
(1004, 'bambang@gmail.com', 'Bambang', 'XI', '1234', 'profile.png', 'up'),
(1005, 'ucup@gmail.com', 'Ucup', 'X', 'ucup1234', 'profile.png', 'up'),
(1006, 'asep@gmail.com', 'Asep', 'XII', 'asep1234', 'profile.png', 'up'),
(1007, 'dudung@gmail.com', 'Dudung', 'XI', 'dudung1234', 'profile.png', 'up'),
(1008, 'ahmad@gmail.com', 'Ahmad', 'X', '1234', 'profile.png', 'up'),
(1009, 'rizki@gmail.com', 'Rizki', 'XI', 'rizki1234', 'profile.png', 'up'),
(1010, 'kipli@gmail.com', 'Kipli', 'XI', '1234', 'profile.png', 'up'),
(1012, 'kuplu@gmail.com', 'Kuplu', 'X', 'kuplu1234', 'profile.png', 'up'),
(1013, 'acil@gmail.com', 'Acil', 'XI', 'acil1234', 'profile.png', 'up'),
(1014, 'abi@gmail.com', 'Abi', 'XI', 'abi1234', 'profile.png', 'up'),
(1015, 'ipin@gmail.com', 'Ipin', 'XI', 'ipin1234', 'profile.png', 'up'),
(1016, 'upin@gmail.com', 'Upin', 'XI', 'upin1234', 'profile.png', 'up'),
(1017, 'rehan@gmail.com', 'Rehan', 'XI', 'rehan1234', 'profile.png', 'up');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indeks untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  ADD PRIMARY KEY (`id_pemilih`),
  ADD UNIQUE KEY `nama_pemilih` (`nama_pemilih`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1018;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
