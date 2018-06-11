-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jun 2018 pada 06.55
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnaylin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelfoto`
--

CREATE TABLE `tabelfoto` (
  `id_foto` int(50) NOT NULL,
  `id_user` int(25) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelkomentar`
--

CREATE TABLE `tabelkomentar` (
  `id_komentar` int(50) NOT NULL,
  `id_user` int(25) NOT NULL,
  `id_foto` int(50) NOT NULL,
  `komentar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabeltips`
--

CREATE TABLE `tabeltips` (
  `id_tips` int(20) NOT NULL,
  `tips` varchar(255) NOT NULL,
  `id_user` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabeluser`
--

CREATE TABLE `tabeluser` (
  `id_user` int(25) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelfoto`
--
ALTER TABLE `tabelfoto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `idx_fotouser` (`id_user`);

--
-- Indexes for table `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `idx_komentaruser` (`id_user`),
  ADD KEY `idx_komentarfoto` (`id_foto`);

--
-- Indexes for table `tabeltips`
--
ALTER TABLE `tabeltips`
  ADD PRIMARY KEY (`id_tips`),
  ADD KEY `idx_tipsuser` (`id_user`);

--
-- Indexes for table `tabeluser`
--
ALTER TABLE `tabeluser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelfoto`
--
ALTER TABLE `tabelfoto`
  MODIFY `id_foto` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  MODIFY `id_komentar` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabeltips`
--
ALTER TABLE `tabeltips`
  MODIFY `id_tips` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabeluser`
--
ALTER TABLE `tabeluser`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabelfoto`
--
ALTER TABLE `tabelfoto`
  ADD CONSTRAINT `tabelfoto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabeluser` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  ADD CONSTRAINT `tabelkomentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabeluser` (`id_user`),
  ADD CONSTRAINT `tabelkomentar_ibfk_2` FOREIGN KEY (`id_foto`) REFERENCES `tabelfoto` (`id_foto`);

--
-- Ketidakleluasaan untuk tabel `tabeltips`
--
ALTER TABLE `tabeltips`
  ADD CONSTRAINT `tabeltips_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabeluser` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
