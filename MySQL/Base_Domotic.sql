-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 12 Mars 2017 à 14:24
-- Version du serveur: 5.5.54
-- Version de PHP: 5.4.45-0+deb7u7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `Base_Domotic`
--

-- --------------------------------------------------------

--
-- Structure de la table `Autonome`
--

CREATE TABLE IF NOT EXISTS `Autonome` (
  `Autonome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Auto_Cron_Prises`
--

CREATE TABLE IF NOT EXISTS `Auto_Cron_Prises` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `N_Prise` text NOT NULL,
  `Heure_Debut` int(11) NOT NULL,
  `Heure_Fin` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Structure de la table `Position_prise`
--

CREATE TABLE IF NOT EXISTS `Position_prise` (
  `N_Prise` text NOT NULL,
  `Valeur_Prise` text NOT NULL,
  `ID_Prise` int(11) NOT NULL AUTO_INCREMENT,
  `AUTO` text NOT NULL,
  PRIMARY KEY (`ID_Prise`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
