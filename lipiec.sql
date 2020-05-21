-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 21, 2020 at 02:50 PM
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
-- Database: `lipiec`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmy`
--

DROP TABLE IF EXISTS `filmy`;
CREATE TABLE IF NOT EXISTS `filmy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tytul` text,
  `Okladka` text NOT NULL,
  `Dlugosc` time DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `filmy`
--

INSERT INTO `filmy` (`ID`, `Tytul`, `Okladka`, `Dlugosc`) VALUES
(1, 'Joker', 'joker.jpg', '02:02:00'),
(2, 'Bogowie', 'bogowie.jpg', '02:00:00'),
(3, 'Kapitan Ameryka: Zimowy Żołnierz', 'kapitan_ameryka_zimowy_zolnierz.jpg', '02:16:00'),
(4, 'Avengers: Czas Ultrona', 'avengers_czas_ultrona.jpg', '02:22:00'),
(5, 'Avengers: Wojna Bez Granic', 'avengers_wojna_bez_granic.jpg', '02:40:00'),
(6, 'Król Lew', 'krol_lew.jpg', '01:58:00'),
(7, 'Avengers: Koniec Gry', 'avengers_koniec_gry.jpg', '03:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `klienci`
--

DROP TABLE IF EXISTS `klienci`;
CREATE TABLE IF NOT EXISTS `klienci` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Imie` text,
  `Nazwisko` text,
  `Numer_telefonu` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `klienci`
--

INSERT INTO `klienci` (`ID`, `Imie`, `Nazwisko`, `Numer_telefonu`) VALUES
(1, 'Andrzej', 'Skowron', '636137324'),
(2, 'Marcel', 'Kryk', '518393132'),
(3, 'Marek', 'Czyż', '612629522'),
(4, 'Ada', 'Jasińska', '534961632'),
(5, 'Agata', 'Urbańska', '622325983');

-- --------------------------------------------------------

--
-- Table structure for table `wypozyczone_filmy`
--

DROP TABLE IF EXISTS `wypozyczone_filmy`;
CREATE TABLE IF NOT EXISTS `wypozyczone_filmy` (
  `ID_wypozyczenia` int(11) NOT NULL AUTO_INCREMENT,
  `ID_klienta` int(11) DEFAULT NULL,
  `ID_filmu` int(11) DEFAULT NULL,
  `Data_wypozyczenia` date DEFAULT NULL,
  `Termin_oddania` date DEFAULT NULL,
  PRIMARY KEY (`ID_wypozyczenia`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wypozyczone_filmy`
--

INSERT INTO `wypozyczone_filmy` (`ID_wypozyczenia`, `ID_klienta`, `ID_filmu`, `Data_wypozyczenia`, `Termin_oddania`) VALUES
(1, 2, 4, '2020-05-15', '2020-06-15'),
(2, 2, 5, '2020-05-17', '2020-06-17'),
(3, 2, 7, '2020-05-20', '2020-06-20'),
(4, 4, 1, '2020-05-19', '2020-06-19'),
(5, 1, 1, '2020-05-12', '2020-06-12'),
(6, 1, 3, '2020-05-12', '2020-06-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
