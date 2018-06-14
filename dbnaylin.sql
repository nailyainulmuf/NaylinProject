-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 06:22 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
-- Table structure for table `tabelfoto`
--

CREATE TABLE `tabelfoto` (
  `id_foto` int(50) NOT NULL,
  `id_user` int(25) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabelkomentar`
--

CREATE TABLE `tabelkomentar` (
  `id_komentar` int(50) NOT NULL,
  `id_user` int(25) NOT NULL,
  `id_foto` int(50) NOT NULL,
  `komentar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabeltips`
--

CREATE TABLE `tabeltips` (
  `id_tips` int(20) NOT NULL,
  `tips` varchar(255) NOT NULL,
  `id_user` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(25) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `nama`, `email`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin', 'Aulia Ika Meilinda', 'linda@gmail.com'),
(2, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin', 'Naily Ainul M.', 'naily@gmail.com'),
(3, 'rose', 'fcdc7b4207660a1372d0cd5491ad856e', 'user', 'Rose Park', 'rose@gmail.com');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabelfoto`
--
ALTER TABLE `tabelfoto`
  ADD CONSTRAINT `tabelfoto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  ADD CONSTRAINT `tabelkomentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `tabelkomentar_ibfk_2` FOREIGN KEY (`id_foto`) REFERENCES `tabelfoto` (`id_foto`);

--
-- Constraints for table `tabeltips`
--
ALTER TABLE `tabeltips`
  ADD CONSTRAINT `tabeltips_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
