-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2022 pada 11.27
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
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nama_ketos` varchar(30) DEFAULT NULL,
  `nama_waketos` varchar(30) DEFAULT NULL,
  `visi_misi` text DEFAULT NULL,
  `no_grup` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_ketos`, `nama_waketos`, `visi_misi`, `no_grup`) VALUES
(1, 'Ucup', 'Rani', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rerum obcaecati deleniti ab! Quos cum, debitis, aspernatur eos magnam eveniet iure dicta vel ab incidunt ipsam modi sed porro voluptatem tempora nulla ea perspiciatis fugit aliquid quo ex temporibus totam? Ratione nesciunt dignissimos aut asperiores a quo voluptatum voluptatem quasi! Inventore omnis neque nam molestiae minus consequatur eveniet! Quas, vitae voluptates voluptatem asperiores quae reprehenderit. Eligendi neque repellat quibusdam eos et perspiciatis quasi ea rerum eaque architecto corporis obcaecati porro, voluptatum doloribus, iusto iste voluptatibus magnam doloremque corrupti fugit. Ratione, provident. Cupiditate unde voluptatum voluptatem, libero deleniti commodi quae est!', '1'),
(2, 'Ujang', 'Tutung', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rerum obcaecati deleniti ab! Quos cum, debitis, aspernatur eos magnam eveniet iure dicta vel ab incidunt ipsam modi sed porro voluptatem tempora nulla ea perspiciatis fugit aliquid quo ex temporibus totam? Ratione nesciunt dignissimos aut asperiores a quo voluptatum voluptatem quasi! Inventore omnis neque nam molestiae minus consequatur eveniet! Quas, vitae voluptates voluptatem asperiores quae reprehenderit. Eligendi neque repellat quibusdam eos et perspiciatis quasi ea rerum eaque architecto corporis obcaecati porro, voluptatum doloribus, iusto iste voluptatibus magnam doloremque corrupti fugit. Ratione, provident. Cupiditate unde voluptatum voluptatem, libero deleniti commodi quae est!', '2');

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
(9, 'ridho@gmail.com', 'XI', '1'),
(13, 'dudung@gmail.com', 'XI', '2'),
(26, 'patir@gmail.com', 'XI', '1'),
(27, 'kanny@gmail.com', 'XI', '1'),
(28, 'asep@gmail.com', 'XII', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `kelas` varchar(12) DEFAULT NULL,
  `pass` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `username`, `nama`, `kelas`, `pass`) VALUES
(1, 'ridho@gmail.com', 'Ridho Rizqi Pambudi', 'XI ', 'ridho1234'),
(2, 'admin', '', NULL, '1234'),
(3, 'patir@gmail.com', 'Fathir Akmal Burhanudin', 'XI', 'patir1234'),
(4, 'kanny@gmail.com', 'Kanny Indira Baihaqi', 'XI', 'kanny1234'),
(5, 'bambang@gmail.com', 'Bambang', 'XI', '1234'),
(6, 'ucup@gmail.com', 'Ucup', 'X', 'ucup1234'),
(7, 'asep@gmail.com', 'Asep', 'XII', 'asep1234'),
(8, 'dudung@gmail.com', 'Dudung', 'XI', 'dudung1234');

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
