-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 29 avr. 2019 à 16:36
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ece_amazon`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `Id_acheteur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_ach` varchar(255) NOT NULL,
  `Prenom_ach` varchar(255) NOT NULL,
  `Adresse_1` varchar(255) NOT NULL,
  `Adresse_2` varchar(255) DEFAULT NULL,
  `Ville` varchar(255) NOT NULL,
  `CodePostal` int(11) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Num_Tel` int(11) NOT NULL,
  `Type_Carte` int(11) NOT NULL,
  `Num_Carte` int(11) NOT NULL,
  `Date_Exp_Carte` date NOT NULL,
  `Code_Exp_Carte` int(11) NOT NULL,
  PRIMARY KEY (`Id_acheteur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Pseudo` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `Id_item` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_item` varchar(255) NOT NULL,
  `Prix_unite` int(11) NOT NULL,
  `Quantité_item` int(11) NOT NULL,
  `Quantité_vendu` int(11) NOT NULL,
  `Id_vendeur` int(11) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  PRIMARY KEY (`Id_item`),
  KEY `Id_admin` (`Id_admin`),
  KEY `Id_vendeur` (`Id_vendeur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `Id_item` int(11) NOT NULL,
  `Id_acheteur` int(11) NOT NULL,
  KEY `Id_acheteur` (`Id_acheteur`),
  KEY `Id_item` (`Id_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `Id_vendeur` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo_vend` varchar(255) NOT NULL,
  `Email_vend` varchar(255) NOT NULL,
  `Mdp_vend` varchar(255) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  PRIMARY KEY (`Id_vendeur`),
  KEY `Id_admin` (`Id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `admin` (`Id_admin`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`Id_vendeur`) REFERENCES `vendeur` (`Id_vendeur`);

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`Id_acheteur`) REFERENCES `acheteur` (`Id_acheteur`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`Id_item`) REFERENCES `item` (`Id_item`);

--
-- Contraintes pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD CONSTRAINT `vendeur_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `admin` (`Id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
