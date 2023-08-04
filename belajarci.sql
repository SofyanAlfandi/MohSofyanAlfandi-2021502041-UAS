-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2023 pada 06.40
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
-- Database: `belajarci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `KD_anggota` int(11) NOT NULL,
  `NM_anggota` varchar(50) NOT NULL,
  `foto_anggota` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`KD_anggota`, `NM_anggota`, `foto_anggota`, `status`, `alamat`) VALUES
(1001, 'Moh Alfan Jamil', 'img4.jpg', 'Mahasiswa', 'jelbuk-Jember'),
(1002, 'Moh Atfal Nurafil', 'img3.jpg', 'Mahasiswa', 'wongsorejo-Banyuwangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kd_buku` int(25) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(15) NOT NULL,
  `tahun_terbit` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kd_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES
(250, 'Pengenalan Sistem Informmasi', 'Abdul Kadir', 'Andi Yogyakarta', '2014'),
(251, 'Konsep Sistem Informasi', 'Dedy Rahman Prehanto, S.Kom., M.Kom.', 'Scopindo Media ', '2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `nama_peminjam` varchar(50) NOT NULL,
  `alamat_peminjam` varchar(50) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`nama_peminjam`, `alamat_peminjam`, `jenis_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
('Rohman', 'Situbondo', 'buku pengetahuan', '15-july-2023', '30-july-2023'),
('Sholeh', 'Bondowoso', 'Majalah', '23-mei-2024', '27-mei-2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `kdpetugas` varchar(6) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`kdpetugas`, `nama_petugas`, `jabatan`, `password`) VALUES
('22222', 'sofyan', 'koordinator', '$2y$10$J4gxWtsD26xy43YbVVUmj.emqKPrLwFNSi/yJaXVCmKA9QKIAXsNy'),
('4444', 'Ramadhani', 'anggota', '$2y$10$.nrPSrhwHU6IvVfgLL6hDODDn5KKHc.XO.ExhFaGQJnNG37weFgke');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`KD_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`nama_peminjam`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`kdpetugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
