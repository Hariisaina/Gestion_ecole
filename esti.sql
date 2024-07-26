-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 juin 2023 à 09:37
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
-- Base de données : `esti`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `pdp` varchar(50) NOT NULL,
  `diplome` varchar(50) NOT NULL,
  `genre` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `birthdate`, `telephone`, `email`, `fb`, `pdp`, `diplome`, `genre`) VALUES
(12, 'LAHATRINIAINA', 'Koloina', '2001-04-02', 345217859, 'koloina@esti.mg', 'Rakotonirina Fandresena', '../../assets/images/fandresena.jpg', 'BACC', 'male'),
(22, 'LOVANIAINA', 'Anjarasoa Navalona', '2001-07-12', 342518653, 'anjarasoa@esti.mg', 'Anjarasoa Navalona', '../../assets/images/eliot.jpg', 'BACC', 'male'),
(23, 'RAKOTOARIMANANA', 'Mahery Harisaina', '2005-03-12', 340127065, 'harisaina@esti.mg', 'Mahery Harisaina', '../../assets/images/itokiana.jpg', 'BACC', 'male'),
(24, 'RABEZANANY ', 'Ambinintsoa Marc', '2003-05-27', 322256551, 'ambinintsoa@esti.mg', 'Ambinintsoa Rabe', '../../assets/images/vina.jpg', 'BACC', 'male'),
(25, 'ANDRIANASOLO', 'Ny Ando', '2004-08-08', 322636848, 'nyando@esti.mg', 'Ny Ando Andrianasolo', '../../assets/images/djamil.jpg', 'BACC', 'male'),
(29, 'RAKOTOARIVELO', 'Miranto', '2004-04-02', 322263445, 'Miranto@esti.mg', 'Jay Jo', '../../assets/images/kanto.jpg', 'BACC', 'male');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `heure` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `code`, `nom`, `heure`) VALUES
(1, 'INFO_140', 'Introduction au systeme informatique', 30),
(2, 'INFO_150', 'Introduction aux base de données', 45),
(3, 'INFO_160', 'Structures de données et Algorithmes fondamentaux', 39),
(4, 'INFO_110', 'Introduction au systeme informatique', 39),
(9, 'ENTR_120', 'Fonctionnement des organisation', 30),
(10, 'INFO_130', 'Architecture des ordinateurs', 39),
(12, 'MATH_120', 'Recherche opérationnelle', 30),
(14, 'INFO_120', 'Administration windows', 40);

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

DROP TABLE IF EXISTS `prof`;
CREATE TABLE IF NOT EXISTS `prof` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`id`, `nom`, `prenom`, `email`, `telephone`) VALUES
(1, 'RANDRIAMISY', 'Hasimbola', 'hasimbola.randriamisy@esti.mg', 123456),
(10, 'RAKOTONIRINA', 'Hariniony', 'hariniony.rakotonirina@esti.mg', 2022457896),
(11, 'RAKOTONDRAMANANA', 'Sitraka ', 'sitraka.rakotondramanana@esti.mg', 2147483647),
(12, 'RALAIMANISA', 'Ndrina', 'ndrina.ralaimanisa@esti.mg', 2147483647),
(15, 'Andrianarimbahy', 'Dinalalaniony', 'dinalalaniony.andrianarimbahy@esti.mg', 321476253),
(16, 'ANTILAHY', 'Chrystelle', 'herimpitia.antilahy@esti.mg', 332569863);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
