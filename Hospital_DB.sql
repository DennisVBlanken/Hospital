-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.4.0.5165
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van hospital wordt geschreven
CREATE DATABASE IF NOT EXISTS `hospital` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hospital`;

-- Structuur van  tabel hospital.clients wordt geschreven
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_firstname` varchar(50) DEFAULT NULL,
  `client_lastname` varchar(50) DEFAULT NULL,
  `client_phone` varchar(50) DEFAULT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel hospital.clients: ~2 rows (ongeveer)
DELETE FROM `clients`;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`client_id`, `client_firstname`, `client_lastname`, `client_phone`, `client_email`) VALUES
	(1, 'Jane', 'Doe', '0687654321', 'janedoe@hermail.com'),
	(2, 'John', 'Doe', '0612345678', 'johndoe@hismail.com');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Structuur van  tabel hospital.patients wordt geschreven
CREATE TABLE IF NOT EXISTS `patients` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(50) DEFAULT NULL,
  `species_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `patient_status` text,
  PRIMARY KEY (`patient_id`),
  KEY `species_id` (`species_id`),
  KEY `client_id` (`client_id`),
  CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`species_id`) REFERENCES `species` (`species_id`),
  CONSTRAINT `patients_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel hospital.patients: ~3 rows (ongeveer)
DELETE FROM `patients`;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` (`patient_id`, `patient_name`, `species_id`, `client_id`, `patient_status`) VALUES
	(1, 'Bobbie', 1, 1, 'Koorts, eet slecht, blaft veel te veel'),
	(2, 'Minoes', 2, 2, 'Drinkt niet, haaruitval, mager'),
	(3, 'Kees', 1, 2, 'Eet te veel, vetzucht, jankt en kotst');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;

-- Structuur van  tabel hospital.species wordt geschreven
CREATE TABLE IF NOT EXISTS `species` (
  `species_id` int(11) NOT NULL AUTO_INCREMENT,
  `species_description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`species_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel hospital.species: ~2 rows (ongeveer)
DELETE FROM `species`;
/*!40000 ALTER TABLE `species` DISABLE KEYS */;
INSERT INTO `species` (`species_id`, `species_description`) VALUES
	(1, 'Hond'),
	(2, 'Kat');
/*!40000 ALTER TABLE `species` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
