-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 19 déc. 2022 à 12:22
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd dream-gym`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `idAbonnement` int(5) NOT NULL AUTO_INCREMENT,
  `typeAbonnement` varchar(50) DEFAULT NULL,
  `duréeAbonnement` int(11) DEFAULT NULL,
  `prixAbonnement` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAbonnement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

DROP TABLE IF EXISTS `coach`;
CREATE TABLE IF NOT EXISTS `coach` (
  `idCoach` int(11) NOT NULL AUTO_INCREMENT,
  `nomCoach` varchar(20) DEFAULT NULL,
  `prénomCoach` varchar(20) DEFAULT NULL,
  `sexeCoach` varchar(15) DEFAULT NULL,
  `dateDeNaissanceCoach` int(11) DEFAULT NULL,
  `téléphoneCoach` int(11) DEFAULT NULL,
  `adresseCoach` varchar(50) DEFAULT NULL,
  `villeCoach` varchar(50) DEFAULT NULL,
  `codePostalCoach` int(10) DEFAULT NULL,
  `mailCoach` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCoach`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

DROP TABLE IF EXISTS `date`;
CREATE TABLE IF NOT EXISTS `date` (
  `dateDébut` int(11) NOT NULL AUTO_INCREMENT,
  `dateFin` int(11) DEFAULT NULL,
  PRIMARY KEY (`dateDébut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `idMembre` int(5) NOT NULL AUTO_INCREMENT,
  `nomMembre` varchar(20) DEFAULT NULL,
  `prénomMembre` varchar(20) DEFAULT NULL,
  `sexeMembre` varchar(15) DEFAULT NULL,
  `dateDeNaissanceMembre` int(11) DEFAULT NULL,
  `téléphoneMembre` int(15) DEFAULT NULL,
  `adresseMembre` varchar(50) DEFAULT NULL,
  `villeMembre` varchar(50) DEFAULT NULL,
  `codePostalMembre` int(10) DEFAULT NULL,
  `mailMembre` varchar(50) DEFAULT NULL,
  `idAbonnement` int(5) DEFAULT NULL,
  `idCoach` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMembre`),
  KEY `FK_Membre_idAbonnement` (`idAbonnement`),
  KEY `FK_Membre_idCoach` (`idCoach`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `membre` (`idMembre`, `nomMembre`, `prénomMembre`, `sexeMembre`, `dateDeNaissanceMembre`, `téléphoneMembre`, `adresseMembre`, `villeMembre`, `codePostalMembre`, `mailMembre`, `idAbonnement`, `idCoach`) VALUES ('1', 'Trs', 'Eddy', 'Homme', '23', '06', 'rue du charpentier', 'Paris', '75013', 'efehgue', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

DROP TABLE IF EXISTS `programme`;
CREATE TABLE IF NOT EXISTS `programme` (
  `idProgramme` int(11) NOT NULL AUTO_INCREMENT,
  `nomProgramme` varchar(50) DEFAULT NULL,
  `dateDébut` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProgramme`),
  KEY `FK_Programme_dateDébut` (`dateDébut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `suit`
--

DROP TABLE IF EXISTS `suit`;
CREATE TABLE IF NOT EXISTS `suit` (
  `idMembre` int(5) NOT NULL AUTO_INCREMENT,
  `idProgramme` int(11) NOT NULL,
  PRIMARY KEY (`idMembre`,`idProgramme`),
  KEY `FK_suit_idProgramme` (`idProgramme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_Membre_idAbonnement` FOREIGN KEY (`idAbonnement`) REFERENCES `abonnement` (`idAbonnement`),
  ADD CONSTRAINT `FK_Membre_idCoach` FOREIGN KEY (`idCoach`) REFERENCES `coach` (`idCoach`);

--
-- Contraintes pour la table `programme`
--
ALTER TABLE `programme`
  ADD CONSTRAINT `FK_Programme_dateDébut` FOREIGN KEY (`dateDébut`) REFERENCES `date` (`dateDébut`);

--
-- Contraintes pour la table `suit`
--
ALTER TABLE `suit`
  ADD CONSTRAINT `FK_suit_idMembre` FOREIGN KEY (`idMembre`) REFERENCES `membre` (`idMembre`),
  ADD CONSTRAINT `FK_suit_idProgramme` FOREIGN KEY (`idProgramme`) REFERENCES `programme` (`idProgramme`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
