-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 02:45 PM
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
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(50) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `fk_user`, `photo`, `judul`, `deskripsi`, `id_kategori`) VALUES
(2, 2, 'Croft8954_By_Pater_J_Hosey_Landscape_Photography.jpg', 'Croft8954', 'Landscape Photography By Pater J Hosey (Photographer)', 2),
(4, 2, 'Kingfisher_feeding_By_martinlawrence1.PNG', 'Kingfisher feeding', 'Wildlife Photography By Martin Lawrence (Photographer)', 3),
(5, 2, 'Karl_Loxley_1_By_Pater_J_Hosey_Performing1.jpg', 'Performing Karl Loxley 1', 'Stage By Pater J Hosey (Photographer)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Stage'),
(2, 'Landscape'),
(3, 'Wildlife');

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
(3, 'rose', 'fcdc7b4207660a1372d0cd5491ad856e', 'user', 'Rose Park', 'rose@gmail.com'),
(8, 'hasna', 'b83ba8dc98c5fee2a3e5906752d48e31', 'user', 'Hasna Bararah Mufida', 'hasna@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `idx_fotouser` (`fk_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `foto_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  ADD CONSTRAINT `tabelkomentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `tabelkomentar_ibfk_2` FOREIGN KEY (`id_foto`) REFERENCES `foto` (`id_foto`);

--
-- Constraints for table `tabeltips`
--
ALTER TABLE `tabeltips`
  ADD CONSTRAINT `tabeltips_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
