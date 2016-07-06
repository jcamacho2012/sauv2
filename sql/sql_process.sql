-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.26 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla sau2.activities_instances
CREATE TABLE IF NOT EXISTS `activities_instances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(132) COLLATE utf8_bin NOT NULL,
  `state` varchar(32) COLLATE utf8_bin NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `process_instances_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  KEY `process_to_activities` (`process_instances_id`),
  CONSTRAINT `process_to_activities` FOREIGN KEY (`process_instances_id`) REFERENCES `process_instances` (`id`),
  CONSTRAINT `users_to_activities` FOREIGN KEY (`user_id`) REFERENCES `users` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla sau2.activities_instances: ~0 rows (aproximadamente)
DELETE FROM `activities_instances`;
/*!40000 ALTER TABLE `activities_instances` DISABLE KEYS */;
/*!40000 ALTER TABLE `activities_instances` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `idcomment` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `post` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `datecomment` date DEFAULT NULL,
  PRIMARY KEY (`idcomment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla sau2.comments: ~0 rows (aproximadamente)
DELETE FROM `comments`;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.documents
CREATE TABLE IF NOT EXISTS `documents` (
  `req_no` varchar(50) COLLATE utf8_bin NOT NULL,
  `ctft_no` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dcm_cd` varchar(32) COLLATE utf8_bin NOT NULL,
  `process_instances_id` int(11) NOT NULL,
  PRIMARY KEY (`req_no`),
  UNIQUE KEY `process_instances_id` (`process_instances_id`),
  CONSTRAINT `process_to_documents` FOREIGN KEY (`process_instances_id`) REFERENCES `process_instances` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla sau2.documents: ~0 rows (aproximadamente)
DELETE FROM `documents`;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.followers
CREATE TABLE IF NOT EXISTS `followers` (
  `idfollow` int(11) NOT NULL AUTO_INCREMENT,
  `friend` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `datefollow` date DEFAULT NULL,
  PRIMARY KEY (`idfollow`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla sau2.followers: ~0 rows (aproximadamente)
DELETE FROM `followers`;
/*!40000 ALTER TABLE `followers` DISABLE KEYS */;
/*!40000 ALTER TABLE `followers` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `post` text,
  `userpost` int(11) DEFAULT NULL,
  `datepost` date DEFAULT NULL,
  `permalink` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idpost`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla sau2.posts: ~0 rows (aproximadamente)
DELETE FROM `posts`;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.process_instances
CREATE TABLE IF NOT EXISTS `process_instances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(132) COLLATE utf8_bin NOT NULL,
  `state` varchar(32) COLLATE utf8_bin NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla sau2.process_instances: ~0 rows (aproximadamente)
DELETE FROM `process_instances`;
/*!40000 ALTER TABLE `process_instances` DISABLE KEYS */;
/*!40000 ALTER TABLE `process_instances` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla sau2.rol: ~4 rows (aproximadamente)
DELETE FROM `rol`;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`id`, `nombre`) VALUES
	(1, 'General'),
	(2, 'Admin'),
	(3, 'Calificado'),
	(4, 'Aprobador');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.sau
CREATE TABLE IF NOT EXISTS `sau` (
  `sau` int(11) NOT NULL DEFAULT '0',
  `maintenance` int(11) DEFAULT NULL,
  `message_maintenance` varchar(250) DEFAULT NULL,
  `style` int(11) DEFAULT NULL,
  PRIMARY KEY (`sau`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla sau2.sau: ~1 rows (aproximadamente)
DELETE FROM `sau`;
/*!40000 ALTER TABLE `sau` DISABLE KEYS */;
INSERT INTO `sau` (`sau`, `maintenance`, `message_maintenance`, `style`) VALUES
	(1, 1, 'El sistema esta en mantenimiento momentaneo', 1);
/*!40000 ALTER TABLE `sau` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.subsanacion
CREATE TABLE IF NOT EXISTS `subsanacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `req_no` varchar(21) NOT NULL,
  `iduser` int(2) NOT NULL,
  `observacion` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tramite` (`req_no`),
  CONSTRAINT `fk_tramite` FOREIGN KEY (`req_no`) REFERENCES `tramite` (`req_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla sau2.subsanacion: ~0 rows (aproximadamente)
DELETE FROM `subsanacion`;
/*!40000 ALTER TABLE `subsanacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `subsanacion` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.tramite
CREATE TABLE IF NOT EXISTS `tramite` (
  `req_no` varchar(21) NOT NULL,
  `dcm_no` varchar(7) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `ciudad` varchar(3) NOT NULL,
  `receptor_asignado` int(2) NOT NULL,
  `receptor_revisado` char(1) NOT NULL,
  `certificador_asignado` int(2) NOT NULL,
  `certificador_revisado` char(1) NOT NULL,
  `estado` char(1) NOT NULL,
  `rgs_dt` datetime NOT NULL,
  `mdf_dt` datetime NOT NULL,
  PRIMARY KEY (`req_no`),
  KEY `fk_receptor` (`receptor_asignado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla sau2.tramite: ~2 rows (aproximadamente)
DELETE FROM `tramite`;
/*!40000 ALTER TABLE `tramite` DISABLE KEYS */;
INSERT INTO `tramite` (`req_no`, `dcm_no`, `empresa`, `ciudad`, `receptor_asignado`, `receptor_revisado`, `certificador_asignado`, `certificador_revisado`, `estado`, `rgs_dt`, `mdf_dt`) VALUES
	('16009084201600000987P', '130-001', 'EMPRESA 1', 'GYE', 3, 'f', 3, 'f', 't', '2016-06-27 10:37:00', '0000-00-00 00:00:00'),
	('16009084201600000988P', '130-001', 'EMPRESA 2', 'GYE', 3, 't', 5, 'f', 't', '2016-06-27 10:37:00', '2016-06-27 15:17:03');
/*!40000 ALTER TABLE `tramite` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.users
CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `profile` varchar(250) DEFAULT NULL,
  `public` int(11) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  `ciudad` varchar(3) NOT NULL,
  PRIMARY KEY (`iduser`),
  KEY `fk_rol` (`rank`),
  CONSTRAINT `fk_rol` FOREIGN KEY (`rank`) REFERENCES `rol` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla sau2.users: ~5 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`iduser`, `name`, `password`, `email`, `profile`, `public`, `rank`, `ciudad`) VALUES
	(2, 'admin', 'b9b928c2ba3554b8cd0aa4db782710e7a17f9040', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 2, 'GYE'),
	(3, 'usuario', 'b9b928c2ba3554b8cd0aa4db782710e7a17f9040', 'user@mail.com', 'f8032d5cae3de20fcec887f395ec9a6a', 1, 1, 'GYE'),
	(5, 'aprobador1', 'b9b928c2ba3554b8cd0aa4db782710e7a17f9040', 'aprobador1@mail.com', 'f8032d5cae3de20fcec887f395ec9a6a', 1, 4, 'GYE'),
	(6, 'calificado', 'b9b928c2ba3554b8cd0aa4db782710e7a17f9040', 'calificado@mail.com', '84b9920869f1eb9a79906b24260710aa', NULL, 3, 'GYE'),
	(7, 'aprobador2', 'b9b928c2ba3554b8cd0aa4db782710e7a17f9040', 'aprobador2@mail.com', '0e9efed48aff228e17a70c0b5d754c02', NULL, 4, 'MNT');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Volcando estructura para tabla sau2.variables
CREATE TABLE IF NOT EXISTS `variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activities_instances_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `activities_instances_id` (`activities_instances_id`),
  CONSTRAINT `activities_to_variables` FOREIGN KEY (`activities_instances_id`) REFERENCES `activities_instances` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla sau2.variables: ~0 rows (aproximadamente)
DELETE FROM `variables`;
/*!40000 ALTER TABLE `variables` DISABLE KEYS */;
/*!40000 ALTER TABLE `variables` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
