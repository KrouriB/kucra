-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour landing_page_brice
CREATE DATABASE IF NOT EXISTS `landing_page_brice` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `landing_page_brice`;

-- Listage de la structure de la table landing_page_brice. email
CREATE TABLE IF NOT EXISTS `email` (
  `id_email` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table landing_page_brice.email : ~0 rows (environ)
/*!40000 ALTER TABLE `email` DISABLE KEYS */;
/*!40000 ALTER TABLE `email` ENABLE KEYS */;

-- Listage de la structure de la table landing_page_brice. pricing
CREATE TABLE IF NOT EXISTS `pricing` (
  `id_pricing` int(11) NOT NULL AUTO_INCREMENT,
  `nom_pricing` varchar(50) NOT NULL,
  `prix_pricing` float NOT NULL,
  `pourcentage_reduction_pricing` int(11) NOT NULL,
  `bandwidth_pricing` int(11) NOT NULL,
  `onlinespace_pricing` int(11) NOT NULL,
  `support_pricing` tinyint(4) NOT NULL,
  `domain_pricing` int(11) NOT NULL,
  `hidden_fees_pricing` tinyint(4) NOT NULL,
  `compte_pricing` int(11) NOT NULL,
  PRIMARY KEY (`id_pricing`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Listage des données de la table landing_page_brice.pricing : ~3 rows (environ)
/*!40000 ALTER TABLE `pricing` DISABLE KEYS */;
INSERT INTO `pricing` (`id_pricing`, `nom_pricing`, `prix_pricing`, `pourcentage_reduction_pricing`, `bandwidth_pricing`, `onlinespace_pricing`, `support_pricing`, `domain_pricing`, `hidden_fees_pricing`, `compte_pricing`) VALUES
	(1, 'Starter', 9, 0, 1, 500, 1, 1, 1, 12),
	(2, 'Advanced', 19, 20, 2, 1000, 0, 3, 0, 7),
	(3, 'Professional', 29, 0, 3, 2000, 0, -1, 0, 4);
/*!40000 ALTER TABLE `pricing` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
