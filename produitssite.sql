-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 juin 2022 à 17:57
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
-- Base de données : `produitssite`
--

-- --------------------------------------------------------

--
-- Structure de la table `tabclients`
--

DROP TABLE IF EXISTS `tabclients`;
CREATE TABLE IF NOT EXISTS `tabclients` (
  `Nom` varchar(50) NOT NULL,
  `Prénom` varchar(50) NOT NULL,
  `Animal` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tabclients`
--

INSERT INTO `tabclients` (`Nom`, `Prénom`, `Animal`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('dd', '', 'Chien'),
('dd', '', 'Chien'),
('dd', '', 'Chien'),
('dd', '', 'Chien'),
('dd', 'ff', 'chat'),
('dd', 'ff', 'Chien'),
('s', 'd', 'Chien'),
('lolo', '', 'Chien'),
('lolo', 'eee', 'Chien'),
('lolo', 'eee', 'Chien'),
('eer', 'rrr', 'Chien'),
('', '', ''),
('rr', 'rr', 'Chien'),
('rr', 'rr', 'Chien'),
('ed', 'dddd', 'Chien'),
('rrr', 'ttt', 'Chien'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('Sicot', 'Olivier', 'Chien'),
('Sicot', 'Olivier', 'Chien'),
('Sicot', 'Olivier', 'Chien'),
('Sicot', 'Olivier', 'Chien'),
('Sicot', 'Olivier', 'Chien'),
('Sicot', 'Olivier', 'Chien'),
('Sicot', 'Emilie', 'Chien'),
('Sicot', 'Emilie', 'Chien'),
('Sicot', 'Emilie', 'Chien'),
('zzz', 'zz', 'Chien'),
('zzz', 'zz', 'Chien'),
('zzz', 'zz', 'Chien'),
('zzz', 'zz', 'Chien'),
('zzz', 'zz', 'Chien'),
('zzz', 'zz', 'Chien'),
('', '', ''),
('rezaz', 'rreeetyy', 'Poisson'),
('', '', ''),
('zzz', 'zz', 'Chien'),
('', '', ''),
('fling', 'flint', 'Autres'),
('Gauthier', 'Aurélien', 'Poisson'),
('Fahssi', 'Braham', 'Poisson'),
('coco', 'loulou', 'Poisson'),
('coco', 'loulou', 'Autres'),
('juju lulu', 'lulu', 'Chat');

-- --------------------------------------------------------

--
-- Structure de la table `tabproduits`
--

DROP TABLE IF EXISTS `tabproduits`;
CREATE TABLE IF NOT EXISTS `tabproduits` (
  `ID` varchar(8) DEFAULT NULL,
  `Designation` varchar(50) NOT NULL,
  `Prix` decimal(10,2) DEFAULT NULL,
  `Quantite` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tabproduits`
--

INSERT INTO `tabproduits` (`ID`, `Designation`, `Prix`, `Quantite`) VALUES
('1234', 'miam-miam', '23.00', 50),
('1235', 'bidoubidou', '12.34', 38),
('1236', 'Woua Woua Mix', '6.36', 74),
('1237', 'Miaou Mix', '7.62', 38),
('1238', 'Cui Cui Mix', '4.32', 31),
('1239', 'Pouet Pouet Dog', '2.99', 12),
('1240', 'Laisse Grande Taille', '9.34', 10),
('1241', 'Litière 5 litres', '3.63', 89);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
