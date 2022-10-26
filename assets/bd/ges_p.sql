-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Juin 2022 à 01:21
-- Version du serveur :  5.5.39
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ges_p`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
`id_admin` int(150) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `telephone` varchar(150) NOT NULL,
  `mot_de_pass` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom`, `prenom`, `telephone`, `mot_de_pass`, `email`) VALUES
(1, 'choupo', 'chencelin', '650621704', 'tresor2', 'stephane2004@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(150) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `statut` varchar(150) NOT NULL,
  `telephone` int(255) NOT NULL,
  `code_client` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `statut`, `telephone`, `code_client`) VALUES
(3, 'stephane', 'kamga', 'iregulier', 671506217, 'cl2'),
(4, 'stephane', 'kamga', 'favorie', 671506217, 'cl2'),
(5, 'stephane', 'kamga', 'favorie', 671506217, 'cl2');

-- --------------------------------------------------------

--
-- Structure de la table `depots`
--

CREATE TABLE IF NOT EXISTS `depots` (
`id_depot` int(150) NOT NULL,
  `code_depot` varchar(150) NOT NULL,
  `nom_client` varchar(150) NOT NULL,
  `type_article` varchar(150) NOT NULL,
  `article` varchar(150) NOT NULL,
  `prestation` varchar(150) NOT NULL,
  `couleur` varchar(150) NOT NULL,
  `date_depot` varchar(150) NOT NULL,
  `date_retrait` varchar(150) NOT NULL,
  `montant_unique` int(150) NOT NULL,
  `quantite` int(150) NOT NULL,
  `montant_total` int(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `depots`
--

INSERT INTO `depots` (`id_depot`, `code_depot`, `nom_client`, `type_article`, `article`, `prestation`, `couleur`, `date_depot`, `date_retrait`, `montant_unique`, `quantite`, `montant_total`) VALUES
(1, 'clt01', 'kamga', 'culote', 'culote', 'laver et repasser', 'rouge', 'Wed/06/2022', '2022-06-18', 3000, 2, 6000),
(2, 'clt03', 'kamga', 'autres', 'autres', 'laver', 'blanck', 'Thu/06/2022', '2022-06-18', 2000, 5, 10000),
(3, 'clt04', 'KAMGA', 'autres', 'autres', 'repasser', 'bleu', 'Thu/06/2022', '2022-06-25', 1500, 2, 3000),
(6, 'clt01', 'kamga  stephane', 'culote', 'culote', 'laver et repasser', 'roge', 'Fri/06/2022', '2022-06-18', 1200, 2, 2400),
(7, 'clt05', 'stephane  kamga', 'culote', 'culote', 'laver et repasser', 'blanck', 'Tue/06/2022', '2022-06-25', 2400, 2, 4800);

-- --------------------------------------------------------

--
-- Structure de la table `facturation`
--

CREATE TABLE IF NOT EXISTS `facturation` (
`id_facturation` int(150) NOT NULL,
  `code_facture` varchar(150) NOT NULL,
  `nom_client` varchar(150) NOT NULL,
  `nom_editeur` varchar(150) NOT NULL,
  `type_article` varchar(150) NOT NULL,
  `article` varchar(150) NOT NULL,
  `date_edition_facture` varchar(150) NOT NULL,
  `prestation` varchar(150) NOT NULL,
  `couleur` varchar(150) NOT NULL,
  `montant_unique` int(150) NOT NULL,
  `quantite` int(150) NOT NULL,
  `montant_total` int(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `facturation`
--

INSERT INTO `facturation` (`id_facturation`, `code_facture`, `nom_client`, `nom_editeur`, `type_article`, `article`, `date_edition_facture`, `prestation`, `couleur`, `montant_unique`, `quantite`, `montant_total`) VALUES
(8, 'clt04', 'kamga', 'stephane', 'chaussure', 'chaussure', 'Thu/06/2022', 'laver et repasser', 'blanck', 1400, 2, 2800),
(10, '54', 'kamga  stephane', 'stephane', 'chaussure', 'chaussure', 'Thu/06/2022', 'laver et repasser', 'blanck', 2000, 2, 4000),
(12, '145', 'stephane  kamga', 'stephane', 'culote', 'culote', 'Sat/06/2022', 'laver et repasser', 'vert', 500, 5, 2500),
(13, '145', 'choupo  chancel', 'stephane', 'chaussure', 'chaussure', 'Mon/06/2022', 'laver et repasser', 'rouge', 5200, 10, 52000);

-- --------------------------------------------------------

--
-- Structure de la table `gerant`
--

CREATE TABLE IF NOT EXISTS `gerant` (
`id_gerant` int(150) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `telephone` int(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `situation` varchar(160) NOT NULL,
  `age` int(160) NOT NULL,
  `mot_de_pass` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `gerant`
--

INSERT INTO `gerant` (`id_gerant`, `nom`, `prenom`, `telephone`, `email`, `situation`, `age`, `mot_de_pass`) VALUES
(1, 'kamga', 'stephane', 671506217, 'stephane@gmail.com', 'marier', 11, 'tresor'),
(11, 'choupo', 'kamga', 111521453, 'stephane2004@gmail.com', 'marier', 17, 'sdfghjk');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
 ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depots`
--
ALTER TABLE `depots`
 ADD PRIMARY KEY (`id_depot`);

--
-- Index pour la table `facturation`
--
ALTER TABLE `facturation`
 ADD PRIMARY KEY (`id_facturation`);

--
-- Index pour la table `gerant`
--
ALTER TABLE `gerant`
 ADD PRIMARY KEY (`id_gerant`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
MODIFY `id_admin` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `depots`
--
ALTER TABLE `depots`
MODIFY `id_depot` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `facturation`
--
ALTER TABLE `facturation`
MODIFY `id_facturation` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `gerant`
--
ALTER TABLE `gerant`
MODIFY `id_gerant` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
