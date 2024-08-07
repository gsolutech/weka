-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 03 août 2024 à 06:46
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `weka`
--

-- --------------------------------------------------------

--
-- Structure de la table `tavis`
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
-- Structure de la table `tclient`
--

DROP TABLE IF EXISTS `tclient`;
CREATE TABLE IF NOT EXISTS `tclient` (
  `idClient` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `dateToDay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tinfosalle`
--

DROP TABLE IF EXISTS `tinfosalle`;
CREATE TABLE IF NOT EXISTS `tinfosalle` (
  `idInfo` int NOT NULL AUTO_INCREMENT,
  `nomSalle` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `prix1` decimal(10,0) NOT NULL,
  `prix2` decimal(10,0) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `taille` int NOT NULL,
  `equipement` text NOT NULL,
  `idAvis` int NOT NULL,
  PRIMARY KEY (`idInfo`),
  KEY `fk_avis` (`idAvis`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tinfosalle`
--

INSERT INTO `tinfosalle` (`idInfo`, `nomSalle`, `adresse`, `prix1`, `prix2`, `photo`, `description`, `taille`, `equipement`, `idAvis`) VALUES
(2, 'hb', 'Aucun', 0, 0, 'hb-965761718.jpg', '', 0, '', 0),
(3, 'la promise', 'Aucun', 0, 0, 'la promise-760192826.jpg', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tphoto`
--

DROP TABLE IF EXISTS `tphoto`;
CREATE TABLE IF NOT EXISTS `tphoto` (
  `idPhoto` int NOT NULL AUTO_INCREMENT,
  `nomSalle` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `typePhoto` varchar(200) NOT NULL,
  `dateToDay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idPhoto`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tphoto`
--

INSERT INTO `tphoto` (`idPhoto`, `nomSalle`, `photo`, `typePhoto`, `dateToDay`) VALUES
(64, 'hb', 'hb-965761718.jpg', 'profil', '2024-08-03 08:31:09'),
(65, 'la promise', 'la promise-760192826.jpg', 'profil', '2024-08-03 08:37:36');

-- --------------------------------------------------------

--
-- Structure de la table `treservation`
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
  `servicesName` varchar(200) NOT NULL,
  `idAvis` int NOT NULL,
  PRIMARY KEY (`idReservation`),
  KEY `fk_clientid` (`idClient`),
  KEY `fk_avisId` (`idAvis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tsalle`
--

DROP TABLE IF EXISTS `tsalle`;
CREATE TABLE IF NOT EXISTS `tsalle` (
  `idSalle` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `idInfo` int NOT NULL,
  `dateToDay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idSalle`),
  KEY `fk_idInfo` (`idInfo`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tsalle`
--

INSERT INTO `tsalle` (`idSalle`, `nom`, `prenom`, `email`, `phone`, `password`, `idInfo`, `dateToDay`) VALUES
(4, 'hb', 'goma', 'hb@gmail.com', '0987654321', '$2y$10$/WV5Nvc1uDUz661CT3ra6OBYrwnZLYcqhYfh2UZTYwTFiDqmSSdPO', 0, '2024-08-03 08:25:39'),
(5, 'la promise', 'goma', 'lapromise@gmail.com', '0987654321', '$2y$10$1rQOwzNMYq3D2zFJhwBuJezXtJ6yp7bpFxWgZJLhWlk3ZhXd/CuYi', 0, '2024-08-03 08:36:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
