-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2021 pada 16.53
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `register_login`
--

CREATE TABLE `register_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `register_login`
--

INSERT INTO `register_login` (`id`, `username`, `email`, `password`) VALUES
(1, 'satu', 'mikaelsaragi29@gmail.com', '$2y$10$LbhV9eYdvh3cpUlwFQD2Ju5N9T9y5zl7m60okGTAPr8C2EgOEAOuW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_ktp`
--

CREATE TABLE `tab_ktp` (
  `id` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `golongan` varchar(4) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(15) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(10) NOT NULL,
  `berlaku` date NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_ktp`
--

INSERT INTO `tab_ktp` (`id`, `nik`, `nama`, `tempat`, `jenis`, `golongan`, `alamat`, `rt`, `kelurahan`, `kecamatan`, `agama`, `status`, `pekerjaan`, `kewarganegaraan`, `berlaku`, `foto`) VALUES
(13, 123, 'Dooley', 'guest1/21 September 2003', 'Laki-Laki', 'O', 'ukraina', '000/000', 'ukraine', 'ukraine', 'Buddha', 'Lajang', 'pengangguran', 'WNI', '2021-01-04', 'ian-dooley-d1UPkiFd04A-unsplash.jpg'),
(15, 789, 'matheus', 'Philiphina/20 januari 1995', 'Laki-Laki', 'AB', 'philiphines', '111/111', 'philiph', 'philiph', 'Islam', 'Lajang', 'pengangguran', 'WNA', '2024-06-11', 'matheus-ferrero-W7b3eDUb_2I-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `register_login`
--
ALTER TABLE `register_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_ktp`
--
ALTER TABLE `tab_ktp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `register_login`
--
ALTER TABLE `register_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tab_ktp`
--
ALTER TABLE `tab_ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
