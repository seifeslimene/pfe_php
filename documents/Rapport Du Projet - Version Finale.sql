-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 13 Mai 2016 à 21:57
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestiondeffectif`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(5) NOT NULL AUTO_INCREMENT,
  `MATRICULEFISCALE` varchar(30) NOT NULL,
  `REFPERSONNE` int(5) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `MATRICULEFISCALE`, `REFPERSONNE`) VALUES
(18, '184221/T/Y/E/000', 15),
(19, '125951/K/D/G/000', 16),
(20, '871598/E/R/F/001', 17),
(21, '125459/L/D/R/000', 18),
(22, '264589/J/D/F/000', 19),
(23, '155525/G/Z/G/001', 20);

-- --------------------------------------------------------

--
-- Structure de la table `compte_rendu`
--

CREATE TABLE IF NOT EXISTS `compte_rendu` (
  `ID_compterendu` int(11) NOT NULL AUTO_INCREMENT,
  `texte` varchar(255) COLLATE utf8_bin NOT NULL,
  `Etat` int(1) NOT NULL,
  `REFEMPLOYE` varchar(255) COLLATE utf8_bin NOT NULL,
  `REFTACHE` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID_compterendu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=46 ;

--
-- Contenu de la table `compte_rendu`
--

INSERT INTO `compte_rendu` (`ID_compterendu`, `texte`, `Etat`, `REFEMPLOYE`, `REFTACHE`) VALUES
(33, '1', 1, '10', '3'),
(34, '2', 1, '10', '6'),
(35, '3', 2, '10', '8'),
(36, '10', 1, '10', '12'),
(37, '11', 1, '10', '13'),
(38, '12', 1, '10', '14'),
(39, '13', 1, '10', '15'),
(40, 'gfdgdfgfdsgfd', 1, '10', '6'),
(41, 'seif', 1, '10', '6'),
(42, 'gdfgfdgfd', 1, '10', '6'),
(43, 'xcvcxvcxv', 0, '10', '10'),
(44, 'fuck you', 0, '10', '10'),
(45, 'ffff', 0, '10', '8');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Emeteur` varchar(200) NOT NULL,
  `Destinataire` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `objet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `REFPERSONNE` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`ID`, `Emeteur`, `Destinataire`, `Date`, `objet`, `message`, `REFPERSONNE`) VALUES
(4, 'Admin', 'Nawfel Youssef', '2016-05-08 03:07:12', 'Réclamation', 'Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation.', 0),
(5, 'Admin', 'Saâd Bguir', '2016-05-08 03:08:26', 'Réclamation', 'Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation Réclamation.', 0),
(6, 'Admin', 'Anis Thabet', '2016-05-08 03:08:52', 'Recrutement', 'Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement.', 0),
(7, 'Admin', 'Ramzi El Haj', '2016-05-08 03:11:41', 'Recrutement', 'Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement.', 0),
(8, 'Admin', 'Bilel Ben Masaoud', '2016-05-08 03:13:24', 'Recrutement', 'Hello!!', 0),
(9, 'Admin', 'Bilel Ben Masaoud', '2016-05-08 03:15:59', 'Recrutement', 'Hello!!', 0),
(10, 'Admin', 'Nawfel Youssef', '2016-05-08 03:16:12', 'Recrutement', 'Hello!!', 0),
(11, 'Admin', 'Amira Sanaâ', '2016-05-08 03:17:25', 'Test', 'Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test.', 0),
(12, 'Admin', 'Samir Ben Hassin', '2016-05-08 03:22:00', 'Demande projet', 'Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet Demande projet.', 0),
(13, 'Admin', 'Ramzi El Haj', '2016-05-08 03:30:03', 'dsfds', 'fdsfsdfsdfs', 0),
(14, 'Admin', 'Amira Sanaâ', '2016-05-08 03:45:15', 'Recrutement', 'Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement Recrutement.', 0),
(15, 'Admin', 'Samir Ben Hassin', '2016-05-08 03:46:00', 'Demande Projet', 'Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet Demande Projet.', 0),
(16, 'Admin', 'Anissa Bolbol', '2016-05-08 03:47:00', 'Demande Projet', 'Demande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande Projet.', 0),
(17, 'Admin', 'Meriem Ben Ammar', '2016-05-08 03:47:51', 'Demande Projet', 'Demande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande ProjetDemande Projet.', 0),
(18, 'Admin', 'Ramzi El Haj', '2016-05-08 03:48:42', 'dfsdfsdf', 'dsfdsfsdfsdfs', 0),
(33, 'sdfsd@dsfsd.fd', 'Admin', '2016-05-08 16:18:51', 'ffff', '1', 0),
(34, 'sdfsd@dsfsd.fd', 'Admin', '2016-05-08 16:18:57', 'ffff', '2', 0),
(35, 'sdfsd@dsfsd.fd', 'Admin', '2016-05-08 16:19:02', 'ffff', '3', 0),
(36, 'sdfsd@dsfsd.fd', 'Admin', '2016-05-08 16:19:08', 'ffff', '4', 0),
(37, 'sdfsd@dsfsd.fd', 'Admin', '2016-05-08 16:19:15', 'ffff', '5', 0),
(38, 'sdfsd@dsfsd.fd', 'Admin', '2016-05-08 16:19:24', 'ffff', '6', 0),
(39, 'sdfsd@dsfsd.fd', 'Admin', '2016-05-08 16:19:32', 'ffff', '7', 0),
(40, 'sdfsd@dsfsd.fd', 'Admin', '2016-05-08 16:19:38', 'ffff', '8', 0),
(41, 'Admin', 'Samir Ben Hassin', '2016-05-08 22:01:42', 'Message', 'Message Message Message Message ', 0),
(42, 'Admin', 'Samir Ben Hassin', '2016-05-08 22:01:47', 'Message', 'Message Message Message Message ', 0),
(43, 'Admin', 'Samir Ben Hassin', '2016-05-08 22:01:51', 'Message', 'Message Message Message Message ', 0),
(44, 'Admin', 'Samir Ben Hassin', '2016-05-08 22:01:56', 'Message', 'Message Message Message Message ', 0),
(45, 'Admin', 'Samir Ben Hassin', '2016-05-08 22:02:02', 'Message', 'Message Message Message Message ', 0),
(46, 'Admin', 'Samir Ben Hassin', '2016-05-08 22:02:07', 'Message', 'Message Message Message Message ', 0),
(47, 'Admin', 'Samir Ben Hassin', '2016-05-08 22:02:13', 'Message', 'Message Message Message Message ', 0),
(48, 'benhassinsamir@gmail.com', 'Admin', '2016-05-09 04:07:19', 'hgfh', 'fghgfhfg', 16),
(49, 'Admin', 'Meriem Ben Ammar', '2016-05-09 04:28:19', 'kj', 'jlkljkl', 0),
(50, 'Admin', 'Meriem Ben Ammar', '2016-05-09 04:28:26', 'kj', '447', 0),
(51, 'Admin', 'Meriem Ben Ammar', '2016-05-09 04:32:01', 'kj', '888', 0),
(52, 'Admin', 'Meriem Ben Ammar', '2016-05-09 04:32:12', 'kj', '999', 0),
(53, 'Admin', 'Meriem Ben Ammar', '2016-05-09 04:32:30', 'kllkj', 'll568', 0),
(54, 'Admin', 'Meriem Ben Ammar', '2016-05-09 04:32:38', 'kllkj', 'jlkjk75', 0),
(55, 'Admin', 'Meriem Ben Ammar', '2016-05-09 04:33:16', '7457', ',lkjljl', 0),
(56, 'benammarmeriem@outlook.fr', 'Admin', '2016-05-09 04:36:20', 'kjlkj', 'lkjljk', 10),
(57, 'benammarmeriem@outlook.fr', 'Admin', '2016-05-09 04:36:24', 'kjlkj', 'lkjljk', 10),
(58, 'benammarmeriem@outlook.fr', 'Admin', '2016-05-09 04:36:32', 'kjlkj', '88', 10),
(59, 'benammarmeriem@outlook.fr', 'Admin', '2016-05-09 04:36:38', 'kjlkj', '99999', 10),
(60, 'benhassinsamir@gmail.com', 'Admin', '2016-05-09 06:13:09', 'fgdfg', 'fdgfdgfdgfd', 16),
(61, 'benhassinsamir@gmail.com', 'Admin', '2016-05-09 06:13:16', 'fgdfg', '1', 16),
(62, 'benhassinsamir@gmail.com', 'Admin', '2016-05-09 06:13:22', 'fgdfg', '85', 16),
(63, 'benhassinsamir@gmail.com', 'Admin', '2016-05-09 06:13:29', 'fgdfg', '858', 16),
(64, 'benhassinsamir@gmail.com', 'Admin', '2016-05-09 06:13:36', 'fgdfg', '452', 16),
(65, 'benhassinsamir@gmail.com', 'Admin', '2016-05-09 06:13:45', 'fgdfg', 'b5fg', 16),
(66, 'benhassinsamir@gmail.com', 'Admin', '2016-05-09 06:27:15', 'fsdfsdf', 'sdfsdfsd', 16),
(67, 'benhassinsamir@gmail.com', 'Admin', '2016-05-09 06:50:02', 'dsfsdfsd', 'fsdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfsdfdsfsdqdfsdfdsfsdqd', 16),
(68, 'benhassinsamir@gmail.com', 'Admin', '2016-05-09 06:59:54', 'J''ai une robe rouge avec talon noir fuck l''eminem', 'J''ai une robe rouge avec talon noir fuck l''eminem J''ai une robe rouge avec talon noir fuck l''eminem J''ai une robe rouge avec talon noir fuck l''eminem J''ai une robe rouge avec talon noir fuck l''eminem', 16),
(69, 'benammarmeriem@outlook.fr', 'Admin', '2016-05-09 07:17:49', 'qsdsq', 'dddddddddddddddddddddddddddddddddddddddsqdsqdsdqdqsdsq', 10),
(70, 'benammarmeriem@outlook.fr', 'Admin', '2016-05-09 07:17:57', 'qsdsq', 'dddddddddddddddddddddddddddddddddddddddsqdsqdsdqdqsdsq', 10),
(71, 'benammarmeriem@outlook.fr', 'Admin', '2016-05-09 07:18:04', 'qsdsq', '			<?php if($_GET[''s'']==''cli'') { ?><a href="Contact_Client.php<?php if(($_GET[''f''])==''message_reçus'') { echo ''?f=message_reçus&p=''.$_GET[''p'']; } elseif ($_GET[''f'']==''message_envoyés'') { echo ''?f=message_envoyés&p=''.$_GET[''p'']; } ?>" class="btn btn-primary">Retour</a><?php } ?>', 10);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `id_employe` int(5) NOT NULL AUTO_INCREMENT,
  `MATRICULE` varchar(30) NOT NULL,
  `REFPERSONNEE` int(5) NOT NULL,
  PRIMARY KEY (`id_employe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `employe`
--

INSERT INTO `employe` (`id_employe`, `MATRICULE`, `REFPERSONNEE`) VALUES
(19, '256485/L/M/Q/001', 7),
(20, '895158/Q/E/Z/000', 8),
(21, '236597/J/F/S/002', 9),
(22, '982151/A/Q/C/000', 10),
(23, '256682/J/E/B/001', 11),
(24, '269745/J/B/R/001', 12);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(15) NOT NULL,
  `Prenom` varchar(15) NOT NULL,
  `datenaissance` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `adresse` varchar(30) CHARACTER SET utf8 NOT NULL,
  `cin` int(8) unsigned zerofill NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`ID`, `Nom`, `Prenom`, `datenaissance`, `email`, `mdp`, `adresse`, `cin`, `image`) VALUES
(7, 'Nawfel', 'Youssef', '1978-05-17', 'youssefnawfel@hotmail.com', '06951602', 'Rue De L''amitié', 06951602, '1 (1).gif'),
(8, 'Souha', 'Rzig', '1982-11-28', 'rzigsouha@hotmail.fr', '04895514', 'Rue De L''amérique', 04895514, 'Employé'),
(9, 'Amira', 'Sanaâ', '1991-12-08', 'sanaaamira@yahoo.fr', '07512654', 'Rue De La Chine', 07512654, 'Employé'),
(10, 'Meriem', 'Ben Ammar', '1990-02-28', 'benammarmeriem@outlook.fr', '07564160', 'Rue De L\\''inde', 07564160, 'Employé'),
(11, 'Saâd', 'Bguir', '1996-10-18', 'bguirsaad@hotmail.com', '10561245', 'Rue De La Liberté', 10561245, 'Employé'),
(12, 'Anis', 'Thabet', '1992-01-12', 'thabetanis@aol.fr', '08651276', 'Rue De Tunis', 08651276, '1 (39).jpg'),
(15, 'Hsen', 'Nouri', '1988-08-25', 'nourihsen@hotmail.com', '05648458', 'Rue De Mali', 05648458, 'Client'),
(16, 'Samir', 'Ben Hassin', '1988-08-12', 'benhassinsamir@gmail.com', '05987412', 'Rue De Gabon', 05987412, '1 (16).jpg'),
(17, 'Ramzi', 'El Haj', '1997-01-08', 'elhajramzi@gmail.com', '06913651', 'Rue El Ghazali', 06913651, 'Client'),
(18, 'Mohamed ', 'Cherni', '1990-12-08', 'chernimohamed@hotmail.fr', '07892365', 'Rue De Lybie', 07892365, 'Client'),
(20, 'Sana', 'Soussi', '1991-12-28', 'soussisana@outlook.com', '05986151', 'Rue De Maroc', 05986151, 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int(5) NOT NULL AUTO_INCREMENT,
  `Nom_Proj` varchar(50) NOT NULL,
  `Description_Proj` text NOT NULL,
  `Refclient` int(11) NOT NULL,
  PRIMARY KEY (`id_projet`),
  KEY `Refclient` (`Refclient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `Nom_Proj`, `Description_Proj`, `Refclient`) VALUES
(3, 'Application Android', 'Application Android Application Android Application Android Application Android Application Android Application Android Application Android Application Android Application Android Application Android Application Android Application Android Application Android Application Android Application Android Application Android Application Android.', 16),
(4, 'Application Java', 'Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java Application Java.', 17),
(7, 'Site Web D''une Magazin', 'Site Web D''une Magazin Site Web D''une Magazin Site Web D''une Magazin Site Web D''une Magazin Site Web D''une Magazin Site Web D''une Magazin Site Web D''une Magazin Site Web D''une Magazin Site Web D''une Magazin Site Web D''une Magazin Site Web D''une Magazin Site Web D''une Magazin.', 20);

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE IF NOT EXISTS `tache` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Desc_Tache` text CHARACTER SET utf8 NOT NULL,
  `pourcentage` int(11) NOT NULL,
  `etat_negoc` int(1) NOT NULL,
  `etat_aff` int(1) NOT NULL,
  `Nbr_Heurs` int(11) NOT NULL,
  `REFEMPLOYE` int(11) NOT NULL,
  `REFPROJET` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `tache`
--

INSERT INTO `tache` (`ID`, `Nom`, `Desc_Tache`, `pourcentage`, `etat_negoc`, `etat_aff`, `Nbr_Heurs`, `REFEMPLOYE`, `REFPROJET`) VALUES
(3, 'XML', 'XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML XML.', 100, 0, 1, 10, 10, 3),
(4, 'Conception Du L''application', 'Conception Du L''application Conception Du L''application Conception Du L''application Conception Du L''application Conception Du L''application Conception Du L''application Conception Du L''application Conception Du L''application Conception Du L''application Conception Du L''application.', 0, 1, 0, 5, 10, 3),
(5, 'Java - Code du partie 1 Java', 'Java - Code du partie 1 Java - Code du partie 1 Java - Code du partie 1 Java - Code du partie 1 Java - Code du partie 1 Java - Code du partie 1 Java - Code du partie 1 Java - Code du partie 1 Java - Code du partie 1 Java - Code du partie 1.', 0, 0, 0, 3, 0, 3),
(6, 'Java - Code du parti', 'Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2 Java - Code du partie 2.', 100, 0, 1, 2, 10, 3),
(7, 'Java - Code du parti', 'Java - Code du partie 3 Java - Code du partie 3 Java - Code du partie 3 Java - Code du partie 3 Java - Code du partie 3 Java - Code du partie 3 Java - Code du partie 3 Java - Code du partie 3 Java - Code du partie 3 Java - Code du partie 3 Java - Code du partie 3.', 0, 0, 0, 4, 0, 3),
(8, 'Java - Code du parti', 'Java - Code du partie 4 Java - Code du partie 4 Java - Code du partie 4 Java - Code du partie 4 Java - Code du partie 4 Java - Code du partie 4 Java - Code du partie 4 Java - Code du partie 4 Java - Code du partie 4 Java - Code du partie 4 Java - Code du partie 4.', 0, 0, 1, 6, 10, 3),
(10, 'Java - Code du Derni', 'Java - Code du Dernier Partie Java - Code du Dernier Partie Java - Code du Dernier Partie Java - Code du Dernier Partie Java - Code du Dernier Partie Java - Code du Dernier Partie Java - Code du Dernier Partie Java - Code du Dernier Partie Java - Code du Dernier Partie Java - Code du Dernier Partie Java - Code du Dernier Partie Java - Code du Dernier Partie.', 0, 0, 0, 11, 0, 3),
(12, 'CSS', 'CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS CSS.', 100, 0, 1, 15, 10, 7),
(13, 'HTML', 'HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML.', 100, 0, 1, 20, 10, 7),
(14, 'PHP & MYSQL', 'PHP & MYSQL PHP & MYSQL PHP & MYSQL PHP & MYSQL PHP & MYSQL PHP & MYSQL PHP & MYSQL PHP & MYSQL PHP & MYSQL PHP & MYSQL PHP & MYSQL PHP & MYSQL PHP & MYSQL.', 100, 0, 1, 14, 10, 7),
(15, 'AJAX & JQUERY & JAVA', 'AJAX & JQUERY & JAVASCRIPT AJAX & JQUERY & JAVASCRIPT AJAX & JQUERY & JAVASCRIPT AJAX & JQUERY & JAVASCRIPTAJAX & JQUERY & JAVASCRIPT AJAX & JQUERY & JAVASCRIPTAJAX & JQUERY & JAVASCRIPT AJAX & JQUERY & JAVASCRIPTAJAX & JQUERY & JAVASCRIPT AJAX & JQUERY & JAVASCRIPTAJAX & JQUERY & JAVASCRIPT AJAX & JQUERY & JAVASCRIPTAJAX & JQUERY & JAVASCRIPT AJAX & JQUERY & JAVASCRIPTAJAX & JQUERY & JAVASCRIPT AJAX & JQUERY & JAVASCRIP.', 100, 0, 1, 30, 10, 7);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `hh` FOREIGN KEY (`Refclient`) REFERENCES `personne` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
