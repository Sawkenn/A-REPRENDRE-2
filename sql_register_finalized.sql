-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           10.4.25-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour chat_evan
CREATE DATABASE IF NOT EXISTS `chat_evan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `chat_evan`;

-- Listage de la structure de table chat_evan. chattesla
CREATE TABLE IF NOT EXISTS `chattesla` (
  `ID_chattesla` int(11) NOT NULL AUTO_INCREMENT,
  `Time_ChatTesla` datetime DEFAULT NULL,
  `Message_chattesla` text DEFAULT NULL,
  `ID_login_chattesla` int(11) NOT NULL,
  PRIMARY KEY (`ID_chattesla`) USING BTREE,
  KEY `Time_ChatTesla` (`Time_ChatTesla`),
  KEY `ID_login_chattesla` (`ID_login_chattesla`),
  CONSTRAINT `FK_chattesla_login` FOREIGN KEY (`ID_login_chattesla`) REFERENCES `login` (`ID_login`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table chat_evan. login
CREATE TABLE IF NOT EXISTS `login` (
  `ID_login` int(11) NOT NULL AUTO_INCREMENT,
  `username_login` varchar(100) NOT NULL,
  `email_login` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imgprofiles_login` longblob DEFAULT NULL,
  `password_login` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_login`) USING BTREE,
  UNIQUE KEY `email_login` (`email_login`),
  UNIQUE KEY `username_login` (`username_login`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
