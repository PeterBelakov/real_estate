-- --------------------------------------------------------
-- Хост:                         localhost
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for real_estate
CREATE DATABASE IF NOT EXISTS `real_estate` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `real_estate`;


-- Dumping structure for table real_estate.advertisman
CREATE TABLE IF NOT EXISTS `advertisman` (
  `advertisman_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`advertisman_id`),
  KEY `advertisman_property_id_index` (`property_id`),
  KEY `advertisman_id_index` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table real_estate.advertisman: ~0 rows (approximately)
/*!40000 ALTER TABLE `advertisman` DISABLE KEYS */;
/*!40000 ALTER TABLE `advertisman` ENABLE KEYS */;


-- Dumping structure for table real_estate.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table real_estate.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2016_08_08_174706_create_property_table', 1),
	('2016_08_09_071324_create_advartisman_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table real_estate.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table real_estate.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table real_estate.property
CREATE TABLE IF NOT EXISTS `property` (
  `property_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `property_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quadrature` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `floor` int(11) NOT NULL,
  `floors` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `panella` int(11) NOT NULL,
  `brick` int(11) NOT NULL,
  `epk` int(11) NOT NULL,
  `pk` int(11) NOT NULL,
  `beams` int(11) NOT NULL,
  `date_of_construction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `under_construction` int(11) NOT NULL,
  `with_transition` int(11) NOT NULL,
  `elevator` int(11) NOT NULL,
  `central` int(11) NOT NULL,
  `parking` int(11) NOT NULL,
  `garage` int(11) NOT NULL,
  `mortgaged` int(11) NOT NULL,
  `internet` int(11) NOT NULL,
  `furnished` int(11) NOT NULL,
  `cctv` int(11) NOT NULL,
  `access_control` int(11) NOT NULL,
  `security` int(11) NOT NULL,
  `renovated` int(11) NOT NULL,
  `property_discription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `validity_of_the_notice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `gsm` int(11) NOT NULL,
  `e_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coordinates_x` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coordinates_y` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table real_estate.property: ~0 rows (approximately)
/*!40000 ALTER TABLE `property` DISABLE KEYS */;
/*!40000 ALTER TABLE `property` ENABLE KEYS */;


-- Dumping structure for table real_estate.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table real_estate.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Peter', 'p_e_t_i_o_1989@abv.bg', '$2y$10$Pz.cYBf9zaz/ZECsFrbgiOmfUzISx3jlYtK/sHcgsdgWqtZTCx2Xy', 'oN6NH42tCNmzAakklCz3tOZZhmHgE2BKLoffTYWoR5qAdF4WfucM9HaMPJnx', '2016-08-19 12:43:44', '2016-08-22 08:44:16');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
