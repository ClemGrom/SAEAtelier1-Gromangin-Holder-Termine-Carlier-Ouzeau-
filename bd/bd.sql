-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 23 oct. 2023 à 14:31
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nrv`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_scene` varchar(255) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

DROP TABLE IF EXISTS `billet`;
CREATE TABLE IF NOT EXISTS `billet` (
  `uuid` int NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int,
  `id_tarif` int NOT NULL,
  `id_soiree` int NOT NULL,
  PRIMARY KEY (`uuid`) USING BTREE,
  FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur`(`uuid`),
  FOREIGN KEY (`id_tarif`) REFERENCES `tarifs`(`id`),
  FOREIGN KEY (`id_soiree`) REFERENCES `soiree`(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `illustration_lieu`
--

DROP TABLE IF EXISTS `illustration_lieu`;
CREATE TABLE IF NOT EXISTS `illustration_lieu` (
  `id_image` int NOT NULL,
  `id_lieu` int NOT NULL,
  FOREIGN KEY (`id_image`) REFERENCES `media`(`id`),
  FOREIGN KEY (`id_lieu`) REFERENCES `lieu`(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `illustration_spectacle`
--

DROP TABLE IF EXISTS `illustration_spectacle`;
CREATE TABLE IF NOT EXISTS `illustration_spectacle` (
  `id_image` int NOT NULL,
  `id_spectacle` int NOT NULL,
  FOREIGN KEY (`id_image`) REFERENCES `media`(`id`), 
  FOREIGN KEY (`id_spectacle`) REFERENCES `spectacle`(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

DROP TABLE IF EXISTS `lieu`;
CREATE TABLE IF NOT EXISTS `lieu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `nb_place_assises` int NOT NULL,
  `nb_place_debout` int NOT NULL,
  `id_image` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  FOREIGN KEY (`id_image`) REFERENCES `media`(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lien` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

DROP TABLE IF EXISTS `participation`;
CREATE TABLE IF NOT EXISTS `participation` (
  `id_artiste` int NOT NULL,
  `id_spectacle` int NOT NULL,
  FOREIGN KEY (`id_artiste`) REFERENCES `artiste`(`id`),
  FOREIGN KEY (`id_spectacle`) REFERENCES `spectacle`(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `soiree`
--

DROP TABLE IF EXISTS `soiree`;
CREATE TABLE IF NOT EXISTS `soiree` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `theme` int NOT NULL,
  `date` timestamp NOT NULL,
  `lieu` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  FOREIGN KEY (`lieu`) REFERENCES `lieu`(`id`),
  FOREIGN KEY (`theme`) REFERENCES `theme`(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `spectacle`
--

DROP TABLE IF EXISTS `spectacle`;
CREATE TABLE IF NOT EXISTS `spectacle` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_soiree` int NOT NULL,
  `id_theme` int NOT NULL,
  `video` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  FOREIGN KEY (`id_soiree`) REFERENCES `soiree`(`id`),
  FOREIGN KEY (`id_theme`) REFERENCES `theme`(`id`),
  FOREIGN KEY (`video`) REFERENCES `media`(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarifs`
--

DROP TABLE IF EXISTS `tarifs`;
CREATE TABLE IF NOT EXISTS `tarifs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `soiree` int NOT NULL,
  `Tarif_normal` int NOT NULL,
  `tarif_reduit` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `uuid` int NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `admin` int NOT NULL,
  PRIMARY KEY (`uuid`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
