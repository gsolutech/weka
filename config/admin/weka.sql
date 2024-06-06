-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2024 at 01:27 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tavis`
--

DROP TABLE IF EXISTS `tavis`;
CREATE TABLE IF NOT EXISTS `tavis` (
  `idAvis` int NOT NULL AUTO_INCREMENT,
  `nomSalle` varchar(50) NOT NULL,
  `nombreAvis` int NOT NULL,
  `commentaire` text,
  PRIMARY KEY (`idAvis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tclient`
--

DROP TABLE IF EXISTS `tclient`;
CREATE TABLE IF NOT EXISTS `tclient` (
  `idClient` int NOT NULL AUTO_INCREMENT,
  `nom` int NOT NULL,
  `prenom` int NOT NULL,
  `email` int DEFAULT NULL,
  `phone` int DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinfosalle`
--

DROP TABLE IF EXISTS `tinfosalle`;
CREATE TABLE IF NOT EXISTS `tinfosalle` (
  `idInfo` int NOT NULL AUTO_INCREMENT,
  `nomSalle` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `prix1` decimal(10,0) NOT NULL,
  `prix2` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `taille` int NOT NULL,
  `equipement` text NOT NULL,
  `idAvis` int NOT NULL,
  PRIMARY KEY (`idInfo`),
  KEY `fk_avis` (`idAvis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tphoto`
--

DROP TABLE IF EXISTS `tphoto`;
CREATE TABLE IF NOT EXISTS `tphoto` (
  `idPhoto` int NOT NULL AUTO_INCREMENT,
  `nomSalle` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`idPhoto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `treservation`
--

DROP TABLE IF EXISTS `treservation`;
CREATE TABLE IF NOT EXISTS `treservation` (
  `idReservation` int NOT NULL AUTO_INCREMENT,
  `idClient` int NOT NULL,
  `datePrevu` date NOT NULL,
  `delais` int NOT NULL,
  `etatReservation` varchar(50) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `serviceAutres` text NOT NULL,
  `idAvis` int NOT NULL,
  PRIMARY KEY (`idReservation`),
  KEY `fk_clientid` (`idClient`),
  KEY `fk_avisId` (`idAvis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tsalle`
--

DROP TABLE IF EXISTS `tsalle`;
CREATE TABLE IF NOT EXISTS `tsalle` (
  `idSalle` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `idInfo` int NOT NULL,
  PRIMARY KEY (`idSalle`),
  KEY `fk_idInfo` (`idInfo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
