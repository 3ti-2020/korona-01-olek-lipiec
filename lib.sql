-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 28, 2020 at 08:10 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `autorzy`
--

DROP TABLE IF EXISTS `autorzy`;
CREATE TABLE IF NOT EXISTS `autorzy` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `imie` text,
  `nazwisko` text,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `krzyzowa`
--

DROP TABLE IF EXISTS `krzyzowa`;
CREATE TABLE IF NOT EXISTS `krzyzowa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_autor` int(11) DEFAULT NULL,
  `id_tytul` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `autor` (`id_autor`),
  KEY `tytul` (`id_tytul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tytuly`
--

DROP TABLE IF EXISTS `tytuly`;
CREATE TABLE IF NOT EXISTS `tytuly` (
  `id_tytul` int(11) NOT NULL AUTO_INCREMENT,
  `tytul` text,
  `ISBN` text,
  PRIMARY KEY (`id_tytul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `krzyzowa`
--
ALTER TABLE `krzyzowa`
  ADD CONSTRAINT `autor` FOREIGN KEY (`id_autor`) REFERENCES `autorzy` (`id_autor`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `tytul` FOREIGN KEY (`id_tytul`) REFERENCES `tytuly` (`id_tytul`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
