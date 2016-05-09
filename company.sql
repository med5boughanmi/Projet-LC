-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Lun 22 Février 2016 à 22:01
-- Version du serveur: 5.5.46
-- Version de PHP: 5.3.10-1ubuntu3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `company`
--

-- --------------------------------------------------------

--
-- Structure de la table `aluboat`
--

CREATE TABLE IF NOT EXISTS `aluboat` (
  `idwd` int(11) NOT NULL AUTO_INCREMENT,
  `numbal` int(11) NOT NULL,
  `heial` double NOT NULL,
  `weial` double NOT NULL,
  `lenal` double NOT NULL,
  PRIMARY KEY (`idwd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fibboat`
--

CREATE TABLE IF NOT EXISTS `fibboat` (
  `idfb` int(11) NOT NULL AUTO_INCREMENT,
  `nbfb` int(11) NOT NULL,
  `heifb` double NOT NULL,
  `weifb` double NOT NULL,
  `lenfb` double NOT NULL,
  PRIMARY KEY (`idfb`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fishingses`
--

CREATE TABLE IF NOT EXISTS `fishingses` (
  `idfis` int(11) NOT NULL AUTO_INCREMENT,
  `season` varchar(5) NOT NULL,
  `maincatch` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `usedeng` varchar(20) NOT NULL,
  `impl` varchar(20) NOT NULL,
  PRIMARY KEY (`idfis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `idmem` int(11) NOT NULL AUTO_INCREMENT,
  `namemem` varchar(30) NOT NULL,
  `phonemem` int(8) NOT NULL,
  PRIMARY KEY (`idmem`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `otherengine`
--

CREATE TABLE IF NOT EXISTS `otherengine` (
  `ideng` int(11) NOT NULL AUTO_INCREMENT,
  `hpeng` int(11) NOT NULL,
  `qteeng` int(11) NOT NULL,
  `priceeng` int(11) NOT NULL,
  PRIMARY KEY (`ideng`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tohatsu`
--

CREATE TABLE IF NOT EXISTS `tohatsu` (
  `idto` int(11) NOT NULL AUTO_INCREMENT,
  `hptu` double NOT NULL,
  `qtetu` double NOT NULL,
  `pricetu` double NOT NULL,
  PRIMARY KEY (`idto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `login` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `login`, `motdepasse`, `statut`, `fonction`, `date`) VALUES
(1, 'nourhenne', 'sahli', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'Gerant', '2016-02-22 21:00:24');

-- --------------------------------------------------------

--
-- Structure de la table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `idvis` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `tel` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `site` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `datevis` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idvis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `woodboat`
--

CREATE TABLE IF NOT EXISTS `woodboat` (
  `idw` int(11) NOT NULL AUTO_INCREMENT,
  `numb` int(11) NOT NULL,
  `hei` double NOT NULL,
  `wei` double NOT NULL,
  `len` double NOT NULL,
  PRIMARY KEY (`idw`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `idwrk` int(11) NOT NULL AUTO_INCREMENT,
  `numwork` int(11) NOT NULL,
  `idmem` int(11) NOT NULL,
  PRIMARY KEY (`idwrk`),
  KEY `idmem` (`idmem`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `yamaha`
--

CREATE TABLE IF NOT EXISTS `yamaha` (
  `idyam` int(11) NOT NULL AUTO_INCREMENT,
  `hpyam` double NOT NULL,
  `qteyam` double NOT NULL,
  `priceyam` double NOT NULL,
  PRIMARY KEY (`idyam`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
