-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2023 pada 06.38
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `ID_anggota` int(11) NOT NULL,
  `NM_anggota` varchar(50) NOT NULL,
  `foto_anggota` varchar(50) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`ID_anggota`, `NM_anggota`, `foto_anggota`, `tgl_lahir`, `alamat`, `status`) VALUES
(1001, 'Moh Sofyan Alfandi', 'img1.jpg', '13-Desember-200', 'Balung-JEMBER', 'Mahasiswa'),
(1002, 'Moh Atfal Nurafil', 'img2.jpg', '13-Desember-200', 'Wongsorejo-BANUWANGI', 'Mahasiswa'),
(1003, 'Moh Alfan Jamil', 'img3.jpg', '13-Desember-200', 'Jelbuk-JEMBER', 'Mahasiswa'),
(1004, 'Moh Sukron Ramadhani', 'img4.JPG', '13-Desember-200', 'Wonosari-BONDOWOSO', 'Mahasiswa'),
(1005, 'Moh Zaini Romli', 'img5.JPG', '13-Desember-200', 'Wongsorejo-BANUWANGI', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$24qas3t52/WqKijWZDVfYO7oj.Z.0SY7MVxLowpgqkXR64kwtJ0N2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID_anggota`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `ID_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
