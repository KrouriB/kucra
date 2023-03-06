-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour landing_page_brice
CREATE DATABASE IF NOT EXISTS `landing_page_brice` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `landing_page_brice`;

-- Listage de la structure de la table landing_page_brice. pricing
CREATE TABLE IF NOT EXISTS `pricing` (
  `id_pricing` int NOT NULL AUTO_INCREMENT,
  `nom_pricing` varchar(50) NOT NULL,
  `prix_pricing` float NOT NULL,
  `pourcentage_reduction_pricing` int NOT NULL,
  `bandwidth_pricing` int NOT NULL,
  `onlinespace_pricing` int NOT NULL,
  `support_pricing` tinyint NOT NULL,
  `domain_pricing` int NOT NULL,
  `hidden_fees_pricing` tinyint NOT NULL,
  PRIMARY KEY (`id_pricing`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table landing_page_brice.pricing : ~3 rows (environ)
/*!40000 ALTER TABLE `pricing` DISABLE KEYS */;
INSERT INTO `pricing` (`id_pricing`, `nom_pricing`, `prix_pricing`, `pourcentage_reduction_pricing`, `bandwidth_pricing`, `onlinespace_pricing`, `support_pricing`, `domain_pricing`, `hidden_fees_pricing`) VALUES
	(1, 'Starter', 9, 0, 1, 500, 0, 1, 0),
	(2, 'Advanced', 19, 20, 2, 1000, 1, 3, 1),
	(3, 'Professional', 29, 0, 3, 2000, 1, -1, 1);
/*!40000 ALTER TABLE `pricing` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
