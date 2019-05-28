-- --------------------------------------------------------
-- Host:                         koenroosa.nl
-- Server versie:                10.2.22-MariaDB-cll-lve - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Versie:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van information_schema wordt geschreven

-- Databasestructuur van u46656p43174_examen wordt geschreven
CREATE DATABASE IF NOT EXISTS `u46656p43174_examen` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `u46656p43174_examen`;

-- Structuur van  tabel u46656p43174_examen.bestelling wordt geschreven
CREATE TABLE IF NOT EXISTS `bestelling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_itemcode_id` int(11) NOT NULL,
  `tafel` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tijd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aantal` int(11) NOT NULL,
  `prijs` decimal(5,2) NOT NULL,
  `klaar` int(3) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `IDX_3114F830EC7217` (`menu_itemcode_id`),
  CONSTRAINT `FK_3114F830EC7217` FOREIGN KEY (`menu_itemcode_id`) REFERENCES `menu_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumpen data van tabel u46656p43174_examen.bestelling: ~36 rows (ongeveer)
DELETE FROM `bestelling`;
/*!40000 ALTER TABLE `bestelling` DISABLE KEYS */;
INSERT INTO `bestelling` (`id`, `menu_itemcode_id`, `tafel`, `datum`, `tijd`, `aantal`, `prijs`, `klaar`) VALUES
	(33, 5, '22', '2019-05-23', '1558614227', 2, 7.90, 0),
	(34, 5, '22', '2019-05-24', '1558677146', 4, 15.80, 1),
	(35, 3, '22', '2019-05-24', '1558677146', 3, 29.85, 0),
	(36, 4, '22', '2019-05-24', '1558677146', 3, 8.85, 0),
	(37, 5, '22', '2019-05-24', '1558682359', 1, 3.95, 0),
	(38, 7, '22', '2019-05-24', '1558682359', 1, 4.95, 0),
	(39, 8, '22', '2019-05-24', '1558682359', 1, 4.95, 0),
	(40, 9, '22', '2019-05-24', '1558682359', 1, 3.95, 0),
	(41, 6, '22', '2019-05-24', '1558682359', 1, 5.95, 0),
	(42, 11, '22', '2019-05-24', '1558682359', 1, 5.95, 0),
	(43, 3, '22', '2019-05-24', '1558682359', 1, 9.95, 0),
	(44, 16, '22', '2019-05-24', '1558682359', 1, 2.95, 0),
	(45, 19, '22', '2019-05-24', '1558682359', 1, 2.45, 0),
	(46, 20, '22', '2019-05-24', '1558682359', 1, 2.45, 0),
	(47, 21, '22', '2019-05-24', '1558682359', 1, 2.95, 0),
	(48, 22, '22', '2019-05-24', '1558682359', 1, 2.45, 0),
	(49, 23, '22', '2019-05-24', '1558682359', 1, 2.75, 0),
	(50, 4, '22', '2019-05-24', '1558682359', 1, 2.95, 0),
	(51, 26, '22', '2019-05-24', '1558682359', 1, 3.95, 0),
	(52, 27, '22', '2019-05-24', '1558682359', 1, 2.95, 0),
	(53, 28, '22', '2019-05-24', '1558682359', 1, 3.60, 0),
	(54, 29, '22', '2019-05-24', '1558682360', 1, 3.95, 0),
	(55, 30, '22', '2019-05-24', '1558682360', 1, 17.95, 0),
	(56, 31, '22', '2019-05-24', '1558682360', 1, 2.95, 0),
	(57, 5, '22', '2019-05-24', '1558683984', 1, 3.95, 0),
	(58, 7, '22', '2019-05-24', '1558683984', 1, 4.95, 0),
	(59, 3, '22', '2019-05-24', '1558683984', 1, 9.95, 0),
	(60, 5, '33', '2019-05-27', '1558945312', 1, 3.95, 0),
	(61, 7, '33', '2019-05-27', '1558945312', 2, 9.90, 1),
	(62, 3, '33', '2019-05-27', '1558945312', 2, 19.90, 0),
	(63, 5, '22', '2019-05-28', '1559027699', 4, 15.80, 1),
	(64, 21, '22', '2019-05-28', '1559027699', 1, 2.95, 1),
	(65, 28, '22', '2019-05-28', '1559027699', 1, 3.60, 1),
	(66, 29, '22', '2019-05-28', '1559027699', 1, 3.95, 0),
	(67, 30, '22', '2019-05-28', '1559027699', 1, 17.95, 0),
	(68, 31, '22', '2019-05-28', '1559027699', 1, 2.95, 0);
/*!40000 ALTER TABLE `bestelling` ENABLE KEYS */;

-- Structuur van  tabel u46656p43174_examen.bon wordt geschreven
CREATE TABLE IF NOT EXISTS `bon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tafel_id` int(11) NOT NULL,
  `datum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tijd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wijze_van_betaling` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FC7DFD6B77647B1` (`tafel_id`),
  CONSTRAINT `FK_FC7DFD6B77647B1` FOREIGN KEY (`tafel_id`) REFERENCES `bestelling` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumpen data van tabel u46656p43174_examen.bon: ~0 rows (ongeveer)
DELETE FROM `bon`;
/*!40000 ALTER TABLE `bon` DISABLE KEYS */;
/*!40000 ALTER TABLE `bon` ENABLE KEYS */;

-- Structuur van  tabel u46656p43174_examen.gerecht wordt geschreven
CREATE TABLE IF NOT EXISTS `gerecht` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gerechtcode` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gerecht` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumpen data van tabel u46656p43174_examen.gerecht: ~0 rows (ongeveer)
DELETE FROM `gerecht`;
/*!40000 ALTER TABLE `gerecht` DISABLE KEYS */;
/*!40000 ALTER TABLE `gerecht` ENABLE KEYS */;

-- Structuur van  tabel u46656p43174_examen.klant wordt geschreven
CREATE TABLE IF NOT EXISTS `klant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `klantid` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klantnaam` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefoon` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumpen data van tabel u46656p43174_examen.klant: ~0 rows (ongeveer)
DELETE FROM `klant`;
/*!40000 ALTER TABLE `klant` DISABLE KEYS */;
/*!40000 ALTER TABLE `klant` ENABLE KEYS */;

-- Structuur van  tabel u46656p43174_examen.menu_item wordt geschreven
CREATE TABLE IF NOT EXISTS `menu_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gerechtcode` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subgerecht_code` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_itemcode` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_item` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prijs` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumpen data van tabel u46656p43174_examen.menu_item: ~32 rows (ongeveer)
DELETE FROM `menu_item`;
/*!40000 ALTER TABLE `menu_item` DISABLE KEYS */;
INSERT INTO `menu_item` (`id`, `gerechtcode`, `subgerecht_code`, `menu_itemcode`, `menu_item`, `prijs`) VALUES
	(1, '1', '2', '2', 'Biefstuk in chapingonsaus', 12.05),
	(2, '2', '1', '2', 'Mosselen uit de pan', 10.00),
	(3, '3', '2', '2', 'Wienerschintzel', 10.05),
	(4, '4', '0', '5', 'Pils', 3.10),
	(5, '5', '1', '1', 'Groentesoep', 4.00),
	(6, '6', '2', '1', 'Zalmsalade', 6.05),
	(7, '7', '1', '1', 'Tomatensoep', 5.00),
	(8, '8', '1', '1', 'Aspergesoep', 5.00),
	(9, '9', '1', '1', 'Uiensoep', 4.00),
	(10, '10', '2', '1', 'Salade met geitenkaas', 5.05),
	(11, '11', '2', '1', 'Tonijnsalade', 6.05),
	(12, '12', '1', '2', 'Gebakken makreel', 9.00),
	(13, '13', '3', '2', 'Bonengerecht met diverse groen', 12.00),
	(14, '14', '3', '2', 'Gebakken banaan', 11.00),
	(15, '15', '1', '3', 'Black lady', 5.05),
	(16, '16', '1', '3', 'Vruchtenijs', 3.05),
	(17, '17', '2', '3', 'Chocoaldemousse', 4.95),
	(18, '18', '2', '3', 'Vanillemousse', 3.95),
	(19, '19', '1', '4', 'Koffie', 2.50),
	(20, '20', '1', '4', 'Thee', 2.50),
	(21, '21', '1', '4', 'Chocolademelk', 3.00),
	(22, '22', '1', '4', 'Espresso', 2.50),
	(23, '23', '1', '4', 'Cappuccino', 2.80),
	(24, '24', '1', '4', 'Koffie verkeerd', 3.00),
	(25, '25', '1', '4', 'Latte macchiato', 4.00),
	(26, '26', '1', '5', 'Weizen', 4.10),
	(27, '27', '1', '5', 'Stender', 3.10),
	(28, '28', '1', '5', 'Palm', 3.75),
	(29, '29', '1', '6', 'Glas', 3.95),
	(30, '30', '1', '6', 'Fles', 17.95),
	(31, '31', '1', '7', 'Tonic', 2.95);
/*!40000 ALTER TABLE `menu_item` ENABLE KEYS */;

-- Structuur van  tabel u46656p43174_examen.migration_versions wordt geschreven
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumpen data van tabel u46656p43174_examen.migration_versions: ~2 rows (ongeveer)
DELETE FROM `migration_versions`;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
	('20190520071207', '2019-05-20 07:12:28'),
	('20190523091923', '2019-05-23 09:19:34');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;

-- Structuur van  tabel u46656p43174_examen.reservering wordt geschreven
CREATE TABLE IF NOT EXISTS `reservering` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tafel` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tijd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klant_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aantal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumpen data van tabel u46656p43174_examen.reservering: ~3 rows (ongeveer)
DELETE FROM `reservering`;
/*!40000 ALTER TABLE `reservering` DISABLE KEYS */;
INSERT INTO `reservering` (`id`, `tafel`, `datum`, `tijd`, `klant_id`, `aantal`) VALUES
	(1, '33', '01-02-05', '12:00', '1', '12'),
	(2, '22', '21-05-2019', '19:00', '2', '5'),
	(3, 'q7', '21-05-2019', '19:00', '3', '2');
/*!40000 ALTER TABLE `reservering` ENABLE KEYS */;

-- Structuur van  tabel u46656p43174_examen.subgerecht wordt geschreven
CREATE TABLE IF NOT EXISTS `subgerecht` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gerechtcode_id` int(11) NOT NULL,
  `gerecht_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subgerecht_code` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subgerecht` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FF110E5E8D4232BE` (`gerechtcode_id`),
  CONSTRAINT `FK_FF110E5E8D4232BE` FOREIGN KEY (`gerechtcode_id`) REFERENCES `gerecht` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumpen data van tabel u46656p43174_examen.subgerecht: ~0 rows (ongeveer)
DELETE FROM `subgerecht`;
/*!40000 ALTER TABLE `subgerecht` DISABLE KEYS */;
/*!40000 ALTER TABLE `subgerecht` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
