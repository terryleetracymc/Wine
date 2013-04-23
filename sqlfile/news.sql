-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.20 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-04-23 16:23:16
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for winesite
CREATE DATABASE IF NOT EXISTS `winesite` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `winesite`;


-- Dumping structure for table winesite.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `news_title` char(255) DEFAULT NULL,
  `news_type` char(30) DEFAULT NULL,
  `news_content` varchar(5000) DEFAULT NULL,
  `news_time` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='新闻表格';

-- Dumping data for table winesite.news: ~1 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `news_title`, `news_type`, `news_content`, `news_time`) VALUES
	(1, 'dsdasdas', 'dsadsad', 'dasdsadsdasdasd', 'dadasdasd');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
