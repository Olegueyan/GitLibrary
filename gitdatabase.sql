-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 01 fév. 2023 à 20:14
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gitdatabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `idGame` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `price` double NOT NULL,
  PRIMARY KEY (`idGame`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`idGame`, `name`, `description`, `price`) VALUES
(1, 'LeagueOfLegends', 'League of Legends (abrégé LoL) est un jeu vidéo sorti en 2009 de type arène de bataille en ligne, free-to-play, développé et édité par Riot Games sur Windows et Mac OS.', 0),
(2, 'Hearthstone', 'Hearthstone (anciennement Hearthstone: Heroes of Warcraft) est un jeu de cartes à collectionner en ligne, développé et édité par la société Blizzard Entertainment. C\'est un jeu gratuit (free to play) s\'inspirant de l\'univers de fiction médiéval-fantastique du jeu vidéo Warcraft développé par Blizzard.', 0),
(3, 'Ark : Survival Evolved', 'ARK: Survival Evolved est un jeu vidéo d’action-aventure et de survie, développé et publié par Studio Wildcard. Son accès anticipé a débuté le 2 juin 2015 pour Windows2, le 1er juillet 2015 pour Linux et macOS3, le 16 décembre 2015 sur Xbox One dans le cadre du programme Xbox Game Preview4 et le 6 décembre 2016 sur PlayStation 45. Le jeu sort officiellement le 29 août 2017 sur Linux, Microsoft Windows, macOS, PlayStation 4, Xbox One6 et Nintendo Switch. Un second opus sobrement intitulé \"Ark II\" devrait sortir courant 2023 sur PC et Xbox series X|S7.', 19.99),
(4, 'Minecraft', 'Minecraft est un jeu vidéo de type aventure « bac à sable » (construction complètement libre) développé par le Suédois Markus Persson, alias Notch, puis par la société Mojang Studios. Il s\'agit d\'un univers composé de voxels et généré de façon procédurale, qui intègre un système d\'artisanat axé sur l\'exploitation puis la transformation de ressources naturelles (minéralogiques, fossiles, animales et végétales).', 24.99),
(5, 'Stellaris', 'Stellaris est un jeu vidéo en 4X de grande stratégie prenant place dans un univers de science-fiction développé par Paradox Development Studio et édité par Paradox Interactive, sorti le 9 mai 20161 sur Microsoft Windows, OS X et Linux. Une nouvelle version du jeu est prévue sur PlayStation 4 et Xbox One.', 39.99),
(6, 'Total War : Warhammer 3', 'Total War: Warhammer III est un jeu vidéo de stratégie au tour par tour et de tactiques en temps réel développé par Creative Assembly et édité par Sega. Il fait partie de la série Total War, et le troisième à se dérouler dans l\'univers fictif de Warhammer de Games Workshop (après Total War: Warhammer de 2016 et Total War: Warhammer II de 2017). Le jeu est sorti en février 2022.', 59.99);

-- --------------------------------------------------------

--
-- Structure de la table `library`
--

DROP TABLE IF EXISTS `library`;
CREATE TABLE IF NOT EXISTS `library` (
  `idLibrary` int NOT NULL AUTO_INCREMENT,
  `refUser` int NOT NULL,
  `refGame` int NOT NULL,
  `dateAdded` date NOT NULL,
  PRIMARY KEY (`idLibrary`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` blob,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
