-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2022 pada 16.15
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakpop`
--

CREATE TABLE `datakpop` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_customer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kpop`
--

CREATE TABLE `kpop` (
  `id` int(11) NOT NULL,
  `nama_album` varchar(10) NOT NULL,
  `jumlah_album` varchar(4) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `waktu_upload` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kpop`
--

INSERT INTO `kpop` (`id`, `nama_album`, `jumlah_album`, `nama_customer`, `no_telepon`, `gambar`, `waktu_upload`) VALUES
(49, 'ode', '2', 'wati', '082158002695', 'wati.png', '07:48:05'),
(50, 'ode', '2', 'wati', '082158002695', 'wati.png', '07:51:53'),
(51, 'ode', '2', 'wati', '082158002695', 'wati.png', '07:52:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datakpop`
--
ALTER TABLE `datakpop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_customer` (`nama_customer`);

--
-- Indeks untuk tabel `kpop`
--
ALTER TABLE `kpop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_customer` (`nama_customer`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datakpop`
--
ALTER TABLE `datakpop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kpop`
--
ALTER TABLE `kpop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datakpop`
--
ALTER TABLE `datakpop`
  ADD CONSTRAINT `datakpop_ibfk_1` FOREIGN KEY (`nama_customer`) REFERENCES `kpop` (`nama_customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
