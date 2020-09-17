-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 17 sep. 2020 à 14:52
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
-- Base de données :  `myportfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(33, '', '', '', ''),
(32, 'class3', 'htrth@gmail.com', 'formation', 'rtdjyuriutiuei-r-'),
(31, 'explorer', 'ssss@kjj.com', 'formation', 'fiureogeugutegutig'),
(30, 'rida', 'ssss@kjj.com', 'formation', 'khkj:gjfkjnk:!hjkhvghfhk'),
(29, 'class3', 'abdelhaqelfakir@gmail.com', 'formation', 'kflmhuiyjhiu'),
(28, 'hgty', 'abdo@gmail.com', 'formation', 'yliutyurfyuhiuliufytfhk'),
(27, 'marwan', 'marwan@gmail.com', 'formation', 'jkmjkljlkhftfglhilmtukf'),
(26, 'livre', 'abdelhakf95@gmail.com', 'formation', 'jkglsfgjzilrgilsgzigil');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET ucs2 NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `image`, `url`, `title`, `description`) VALUES
(52, 'corona.jpg', 'https://abdelhak-f.github.io/project-youcode-covide-19/', 'covid-19', '                        LA DERNIÃˆRE INFO MÃ‰DICALE'),
(48, 'slide-1.jpg', 'http://localhost/the-perfect-cup/', 'The Perfect Cup', '                       WELCOME TO THE PERFECT CUP CAFÃ‰, THE BEST COFFEE \r\n'),
(49, 'logo.ico', 'http://localhost/kineslit/www/dashboard/index.html', 'KinÃ©Slit', '           SystÃ©me de gestion de cabinet de kinÃ©sithÃ©rapie           '),
(54, 'Alimentaire.png', 'http://localhost/Olivia-master/', 'Olivia', 'L\'huile d\'olive est un Ã©lÃ©ment clÃ© du rÃ©gime alimentaire');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
