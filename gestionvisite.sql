-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 mars 2024 à 11:04
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
-- Base de données : `gestionvisite`
--

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

DROP TABLE IF EXISTS `famille`;
CREATE TABLE IF NOT EXISTS `famille` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`id`, `libelle`) VALUES
(1, 'Antalgiques'),
(2, 'Antipyrétiques'),
(3, 'Antibiotiques'),
(4, 'Antihypertenseurs'),
(5, 'Antidiabétiques');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

DROP TABLE IF EXISTS `medecin`;
CREATE TABLE IF NOT EXISTS `medecin` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(60) NOT NULL,
  `tel` int(11) NOT NULL,
  `specialiteComplementaire` varchar(30) NOT NULL,
  `departement` varchar(25) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`, `nom`, `prenom`, `adresse`, `tel`, `specialiteComplementaire`, `departement`, `cp`, `ville`) VALUES
(1, 'Dupont', 'Jean', '12 Rue de la Santé', 123456789, 'Cardiologie', 'Paris', 75001, 'Paris'),
(2, 'Martin', 'Sophie', '8 Avenue de la République', 234567890, 'Pédiatrie', 'Marseille', 13001, 'Marseille'),
(3, 'Lefevre', 'Pierre', '45 Boulevard des Sciences', 345678901, 'Rhumatologie', 'Lyon', 69001, 'Lyon'),
(4, 'Dubois', 'Marie', '21 Rue de la Médecine', 456789012, 'Dermatologie', 'Lille', 59000, 'Lille'),
(5, 'Rousseau', 'Philippe', '33 Avenue de la Santé', 567890123, 'Ophtalmologie', 'Toulouse', 31000, 'Toulouse');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

DROP TABLE IF EXISTS `medicament`;
CREATE TABLE IF NOT EXISTS `medicament` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomCommercial` varchar(30) NOT NULL,
  `idFamille` int(11) NOT NULL,
  `composition` text NOT NULL,
  `effets` text NOT NULL,
  `contreindications` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idFamille` (`idFamille`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`id`, `nomCommercial`, `idFamille`, `composition`, `effets`, `contreindications`) VALUES
(1, 'Ibuprofène', 1, 'Ibuprofène', 'Anti-inflammatoire non stéroïdien', 'Ulcères gastro-intestinaux, insuffisance rénale'),
(2, 'Ranitidine', 2, 'Ranitidine', 'Antagoniste des récepteurs H2', 'Allergie à la ranitidine, insuffisance rénale sévère'),
(3, 'Atorvastatine', 3, 'Atorvastatine', 'Inhibiteur de la HMG-CoA réductase', 'Maladie hépatique active, grossesse'),
(4, 'Ciprofloxacine', 4, 'Ciprofloxacine', 'Antibiotique fluoroquinolone', 'Myasthénie grave, trouble du rythme cardiaque'),
(5, 'Metformine', 5, 'Metformine', 'Antidiabétique oral', 'Insuffisance rénale sévère, acidose lactique'),
(6, 'Aspirine', 1, 'Acide acétylsalicylique', 'Réduit la douleur et l inflammation', 'Allergie à l aspirine, ulcères gastro-intestinaux'),
(7, 'Paracétamol', 2, 'Paracétamol', 'Réduit la fièvre et la douleur', 'Insuffisance hépatique'),
(8, 'Amoxicilline', 3, 'Amoxicilline', 'Antibiotique à large spectre', 'Allergie à la pénicilline'),
(9, 'Lisinopril', 4, 'Lisinopril', 'Inhibiteur de l\'enzyme de conversion', 'Grossesse, insuffisance rénale sévère'),
(10, 'Omeprazole', 5, 'Omeprazole', 'Inhibiteur de la pompe à protons', 'Réaction allergique sévère');

-- --------------------------------------------------------

--
-- Structure de la table `offrir`
--

DROP TABLE IF EXISTS `offrir`;
CREATE TABLE IF NOT EXISTS `offrir` (
  `idRapport` int(11) NOT NULL,
  `idMedicament` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  KEY `idRapport` (`idRapport`),
  KEY `idMedicament` (`idMedicament`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offrir`
--

INSERT INTO `offrir` (`idRapport`, `idMedicament`, `quantite`) VALUES
(0, 2, 3),
(9, 4, 1),
(10, 4, 1),
(11, 4, 1),
(12, 4, 1),
(13, 3, 3),
(14, 4, 4),
(15, 4, 4),
(16, 4, 4),
(17, 1, 4),
(18, 2, 4),
(19, 3, 3),
(20, 3, 3),
(21, 3, 3),
(22, 3, 3),
(23, 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `motif` varchar(50) NOT NULL,
  `bilan` longtext NOT NULL,
  `idVisiteur` int(11) DEFAULT NULL,
  `idMedecin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idMedecin` (`idMedecin`),
  KEY `idVisiteur` (`idVisiteur`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`id`, `date`, `motif`, `bilan`, `idVisiteur`, `idMedecin`) VALUES
(14, '2023-11-03', 'consultation medical 3', 'celui la', 0, 3),
(13, '2023-11-12', 'consultation medical', 'g55', 0, 1),
(12, '2023-11-12', 'consultation medical', 'g55', 1, 1),
(11, '2023-11-12', 'consultation medical', 'g55', 1, 1),
(10, '2023-11-12', 'consultation medical', 'ggg', 1, 1),
(9, '2023-11-03', 'consultation medical', 'ffff', 1, 3),
(15, '2023-11-04', 'finalement', 'luilui', 0, 5),
(16, '2023-11-04', 'finalement', 'luilui', 0, 5),
(17, '2023-11-04', 'finalement', 'luilui', 0, 5),
(18, '2023-11-11', 'consultation medical x', 'lolol', 1, 3),
(19, '2023-11-04', 'consultation medical y', 'jhhjh', 2, 2),
(20, '2023-11-03', 'consultation medical', 'gf', 3, 2),
(21, '2023-11-04', 'finalement', 'fsfs', 3, 4),
(22, '2023-11-04', 'finalement', 'fsfs', 3, 4),
(23, '2023-11-04', 'finalement', 'qdqdqdq', 1, 4),
(24, '2023-07-21', 'FiÃ¨vre', 'Mot de tÃªte', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL,
  `dateEmbauche` date NOT NULL,
  `premiere_connexion` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`id`, `nom`, `prenom`, `login`, `mdp`, `adresse`, `ville`, `cp`, `dateEmbauche`, `premiere_connexion`) VALUES
(1, 'catala', 'luigi', 'lcatala', 'test', '160 Avenue du GÃ©nÃ©ral Leclerc', 'Gif-sur-Yvette', 91190, '2023-11-17', 0),
(2, 'vitze', 'keke', 'kvitze', 'test', 'oui', 'jsp', 78520, '2023-11-17', 0),
(3, 'bouziane', 'mehdi', 'mbouziane', 'test', 'tkt', '', 56203, '2023-11-17', 0),
(4, 'bouziane', 'mehdi', 'mbouziane', 'test', 'tkt', 'fg', 56203, '2023-11-17', 0),
(5, 'EL MHAMDI', 'Sofiane', 'selmhamdi', 'soleil', '3 rue Benjamin Franklin', 'Montigny-le-Bretonneux', 78180, '2023-11-17', 1),
(6, 'VERT', 'Jean-franÃ§ois', 'jfvert', 'jfvert', '3 rue Benjamin Franklin', 'Montigny-le-Bretonneux', 78180, '2023-11-17', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
