-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 31 mai 2019 à 09:20
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenus` text COLLATE utf8_bin NOT NULL,
  `date_time_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `forum_categorie`
--

DROP TABLE IF EXISTS `forum_categorie`;
CREATE TABLE IF NOT EXISTS `forum_categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cat_ordre` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_ordre` (`cat_ordre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forum_forum`
--

DROP TABLE IF EXISTS `forum_forum`;
CREATE TABLE IF NOT EXISTS `forum_forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_cat_id` mediumint(8) NOT NULL,
  `forum_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_desc` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_ordre` mediumint(8) NOT NULL,
  `forum_last_post_id` int(11) NOT NULL,
  `forum_topic` mediumint(8) NOT NULL,
  `forum_post` mediumint(8) NOT NULL,
  `auth_view` tinyint(4) NOT NULL,
  `auth_post` tinyint(4) NOT NULL,
  `auth_topic` tinyint(4) NOT NULL,
  `auth_annonce` tinyint(4) NOT NULL,
  `auth_modo` tinyint(4) NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forum_membres`
--

DROP TABLE IF EXISTS `forum_membres`;
CREATE TABLE IF NOT EXISTS `forum_membres` (
  `membre_id` int(11) NOT NULL AUTO_INCREMENT,
  `membre_pseudo` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_mdp` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_email` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_msn` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_siteweb` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_avatar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_signature` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_localisation` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_inscrit` int(11) NOT NULL,
  `membre_derniere_visite` int(11) NOT NULL,
  `membre_rang` tinyint(4) DEFAULT '2',
  `membre_post` int(11) NOT NULL,
  PRIMARY KEY (`membre_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forum_post`
--

DROP TABLE IF EXISTS `forum_post`;
CREATE TABLE IF NOT EXISTS `forum_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_createur` int(11) NOT NULL,
  `post_texte` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `post_time` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_forum_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--

DROP TABLE IF EXISTS `forum_topic`;
CREATE TABLE IF NOT EXISTS `forum_topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `topic_titre` char(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_createur` int(11) NOT NULL,
  `topic_vu` mediumint(8) NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_genre` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_post` mediumint(8) NOT NULL,
  PRIMARY KEY (`topic_id`),
  UNIQUE KEY `topic_last_post` (`topic_last_post`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `auteur` varchar(30) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `datetime` date NOT NULL,
  `texte_news` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `news2`
--

DROP TABLE IF EXISTS `news2`;
CREATE TABLE IF NOT EXISTS `news2` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(30) NOT NULL,
  `titre` text NOT NULL,
  `date` datetime NOT NULL,
  `texte_news` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tchat`
--

DROP TABLE IF EXISTS `tchat`;
CREATE TABLE IF NOT EXISTS `tchat` (
  `tchat_id` int(11) NOT NULL AUTO_INCREMENT,
  `tchat_message` text,
  `tchat_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_prenom` varchar(25) NOT NULL,
  PRIMARY KEY (`tchat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tchat`
--

INSERT INTO `tchat` (`tchat_id`, `tchat_message`, `tchat_date`, `user_id`, `user_prenom`) VALUES
(6, 'Soirée entre fille', '2019-05-30 23:22:18', 6, '23h08'),
(7, 'Bonjour', '2019-05-30 23:22:39', 6, '23h08'),
(8, 'hihihi', '2019-05-30 23:23:47', 9, '23h20'),
(9, 'Bonjour', '2019-05-30 23:44:01', 6, '23h41'),
(10, 'C \'est quand la reunion', '2019-05-31 01:28:59', 7, '00h01'),
(11, 'bonne nuit', '2019-05-31 02:16:58', 9, 'Adrien'),
(12, 'sakdfnb', '2019-05-31 02:20:20', 9, 'Adrien'),
(13, 'meteo', '2019-05-31 02:27:56', 9, 'Adrien'),
(14, 'jouet', '2019-05-31 02:28:51', 9, 'Adrien'),
(15, 'Bonjour patrice', '2019-05-31 03:30:58', 16, 'roi'),
(16, 'gang', '2019-05-31 09:31:00', 17, 'emile'),
(17, 'Soirée entre fille', '2019-05-31 10:11:03', 20, 'kaissa'),
(18, 'Soirée entre fille', '2019-05-31 10:42:21', 21, 'Victor'),
(19, 'Bonjour tout le monde', '2019-05-31 11:10:46', 22, 'Feriel');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motdepasse` text,
  `nombre_de_participation` tinyint(4) DEFAULT NULL,
  `nombre_de_followers` int(10) DEFAULT NULL,
  `certification` tinyint(1) DEFAULT NULL,
  `Photo_de_profil` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `email`, `motdepasse`, `nombre_de_participation`, `nombre_de_followers`, `certification`, `Photo_de_profil`) VALUES
(6, '23h41', 'dada', 'dada@yahoo.com', 'aqs', 0, 0, 0, NULL),
(7, '00h01', 'DEDE', 'dada@yahoo.com', 'dfg', 0, 0, 0, NULL),
(8, 'Amanda', 'Johnson', 'amanda.johnson@gmail.com', '401223', 0, 0, 0, NULL),
(9, 'Adrien', 'LE COQ', 'ado.hotmail.com', 'aze', 0, 0, 0, NULL),
(10, 'Adrien', 'LE COQ', 'ado.hotmail.com', 'az', 0, 0, 0, NULL),
(11, 'Marie', 'Voisin', 'mp@voisin.net', 'bib', 0, 0, 0, NULL),
(12, 'Marie', 'Boucher', 'marie.boucher@gmail.com', 'veau', 0, 0, 0, NULL),
(13, 'Adrien', 'LE COQ', 'adrien.lecoq@hetic.net', 'AZE', 0, 0, 0, NULL),
(14, 'Bijou', 'Or', 'bijou.or@gmail.com', 'montre', 0, 0, 0, NULL),
(15, 'Cheval', 'mulet', 'cheval.mulet@ecurie.com', 'ferme', 0, 0, 0, NULL),
(16, 'roi', 'reine', 'prince.princesse@royaume.org', 'couronnes', 0, 0, 0, NULL),
(17, 'emile', 'bergez', 'emilebergez@gmail.com', '123456', 0, 0, 0, NULL),
(18, 'wilem', 'Djennane', 'wilem.djennane19@gmail.com', 'azerty', 0, 0, 0, NULL),
(19, 'Chien', 'chat', 'chien.chat@gmail.com', 'niche', 0, 0, 0, NULL),
(20, 'kaissa', 'hamani', 'hamanikaissa@gmail.com', '15101997hk', 0, 0, 0, NULL),
(21, 'Victor', 'Balducci', 'victor.balducci@gmail.com', '12345', 0, 0, 0, NULL),
(22, 'Feriel', 'Maddi', 'feriel.maddi@gmail.com', 'coca', 0, 0, 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
