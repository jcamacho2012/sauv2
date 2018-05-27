-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2018 a las 22:08:20
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sau`
--

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `TimeDiffUnits` (`old` DATETIME, `new` DATETIME) RETURNS CHAR(50) CHARSET latin1 NO SQL
    DETERMINISTIC
BEGIN
DECLARE diff INTEGER;
SET diff = UNIX_TIMESTAMP(new) - UNIX_TIMESTAMP(old);
CASE
WHEN (diff < 3600) THEN
RETURN CONCAT(FLOOR(diff / 60) , ' Minutos');
WHEN (diff < 86400) THEN
RETURN CONCAT(FLOOR(diff / 3600), ' Horas');
WHEN (diff < 604800) THEN
RETURN CONCAT(FLOOR(diff / 86400), ' Dias');
WHEN (diff < 2592000) THEN
RETURN CONCAT(FLOOR(diff / 604800), ' Semanas');
WHEN (diff < 31536000) THEN
RETURN CONCAT(FLOOR(diff / 2592000), ' Meses');
ELSE
RETURN CONCAT(FLOOR(diff / 31536000), ' Años');
END CASE;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities_instances`
--

CREATE TABLE `activities_instances` (
  `id` int(11) NOT NULL,
  `name` varchar(132) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `state` varchar(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_take` timestamp NULL DEFAULT NULL,
  `date_finish` timestamp NULL DEFAULT NULL,
  `date_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `user_option` int(11) NOT NULL,
  `observation` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `process_instances_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `activities_instances`
--

INSERT INTO `activities_instances` (`id`, `name`, `state`, `date_create`, `date_take`, `date_finish`, `date_modify`, `user_id`, `user_option`, `observation`, `process_instances_id`) VALUES
(1, 'REVISION GENERAL', 'FINISH', '2016-07-19 01:23:00', NULL, NULL, '2016-07-26 15:06:33', 3, 0, NULL, 1),
(10, 'REVISION GENERAL', 'FINISH', '2016-07-21 20:51:58', NULL, NULL, '2016-07-26 15:24:53', 6, 0, NULL, 2),
(11, 'REVISION GENERAL', 'FINISH', '2016-07-21 20:52:08', NULL, NULL, '2016-07-26 19:17:59', 3, 0, NULL, 3),
(12, 'REVISION GENERAL', 'FINISH', '2016-07-21 20:52:13', NULL, NULL, '2016-08-05 14:32:06', 3, 0, NULL, 4),
(13, 'REVISION GENERAL', 'FINISH', '2016-07-21 20:52:17', NULL, NULL, '2016-07-26 19:39:36', 3, 0, NULL, 5),
(14, 'REVISION GENERAL', 'FINISH', '2016-07-21 20:52:23', NULL, NULL, '2016-07-26 20:33:06', 3, 0, NULL, 6),
(16, 'REVISION FINAL', 'FINISH', '2016-07-26 15:24:53', NULL, NULL, '2016-07-26 17:37:09', 7, 0, NULL, 2),
(17, 'REVISION FINAL', 'FINISH', '2016-07-26 19:17:59', NULL, NULL, '2016-07-27 20:41:12', 5, 0, NULL, 3),
(18, 'REVISION FINAL', 'FINISH', '2016-07-26 19:39:36', NULL, NULL, '2016-07-26 20:11:35', 5, 0, NULL, 5),
(20, 'REVISION FINAL', 'FINISH', '2016-07-26 20:33:06', NULL, NULL, '2016-07-26 20:42:53', 5, 0, NULL, 6),
(21, 'REVISION GENERAL', 'FINISH', '2016-07-27 21:04:56', NULL, NULL, '2016-08-05 15:20:27', 6, 0, NULL, 8),
(22, 'REVISION FINAL', 'FINISH', '2016-08-05 14:32:06', NULL, NULL, '2016-08-05 14:38:12', 5, 0, NULL, 4),
(23, 'REVISION FINAL', 'FINISH', '2016-08-05 15:20:28', NULL, NULL, '2016-08-05 15:25:46', 7, 0, NULL, 8),
(30, 'REVISION GENERAL', 'FINISH', '2016-08-17 20:33:42', NULL, NULL, '2016-08-18 20:07:51', 3, 0, NULL, 17),
(31, 'REVISION GENERAL', 'FINISH', '2016-08-17 20:33:42', NULL, NULL, '2016-08-18 20:08:37', 13, 0, NULL, 18),
(32, 'REVISION FINAL', 'FINISH', '2016-08-18 20:07:51', NULL, NULL, '2016-08-18 20:34:39', 5, 0, NULL, 17),
(33, 'REVISION FINAL', 'FINISH', '2016-08-18 20:08:37', NULL, NULL, '2016-08-18 20:35:10', 7, 0, NULL, 18),
(37, 'REVISION CALIFICADO', 'FINISH', '2016-08-18 21:22:12', NULL, NULL, '2018-05-27 03:22:15', 9, 0, NULL, 22),
(38, 'REVISION CALIFICADO', 'READY', '2018-05-01 21:22:12', NULL, NULL, '2018-05-27 18:24:17', 0, 0, NULL, 23),
(39, 'REVISION CALIFICADO', 'FINISH', '2016-08-18 21:22:12', NULL, NULL, '2016-08-19 20:13:45', 9, 0, NULL, 24),
(40, 'REVISION FINAL', 'READY', '2016-08-19 20:11:42', NULL, NULL, '2018-05-27 21:49:34', 0, 0, NULL, 22),
(41, 'REVISION FINAL', 'READY', '2016-08-19 20:13:45', NULL, NULL, '2018-05-27 19:01:40', 0, 0, NULL, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `idcomment` int(11) NOT NULL,
  `comment` text,
  `post` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `datecomment` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documents`
--

CREATE TABLE `documents` (
  `req_no` varchar(50) COLLATE utf8_bin NOT NULL,
  `dcm_cd` varchar(15) COLLATE utf8_bin NOT NULL,
  `co_nm` varchar(100) COLLATE utf8_bin NOT NULL,
  `req_city_cd` varchar(3) COLLATE utf8_bin NOT NULL,
  `process_instances_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `documents`
--

INSERT INTO `documents` (`req_no`, `dcm_cd`, `co_nm`, `req_city_cd`, `process_instances_id`) VALUES
('01009988201500001967P', '130-021', 'UNCORP S.A.', 'GYE', 24),
('01009988201500002629P', '130-019', 'UNCORP S.A.', 'GYE', 22),
('01009988201500002684P', '130-032', 'TECOPESCA', 'MEC', 8),
('01009988201600000097P', '130-016', 'UNCORP S.A.', 'GYE', 23),
('01009988201600000100P', '130-001', 'INDUSTRIA CONSERVERA DE LA PESCA INCOPES CIA. LTDA.', 'GYE', 1),
('01009988201600000101P', '130-004', 'PESPESCA', 'MEC', 2),
('01009988201600000102P', '130-006', 'SANTA PRISCILA', 'GYE', 3),
('01009988201600000103P', '130-040', 'SONGA', 'GYE', 4),
('01009988201600000104P', '130-010', 'PROEXPO', 'GYE', 5),
('01009988201600000106P', '130-014', 'ENVASUR', 'GYE', 6),
('01009988201600000111P', '130-001', 'INDUSTRIA CONSERVERA DE LA PESCA INCOPES CIA. LTDA.', 'GYE', 17),
('01009988201600000112P', '130-004', 'UNCORP S.A.', 'MEC', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `followers`
--

CREATE TABLE `followers` (
  `idfollow` int(11) NOT NULL,
  `friend` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `datefollow` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `idpost` int(11) NOT NULL,
  `post` text,
  `userpost` int(11) DEFAULT NULL,
  `datepost` date DEFAULT NULL,
  `permalink` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `process_instances`
--

CREATE TABLE `process_instances` (
  `id` int(11) NOT NULL,
  `name` varchar(132) COLLATE utf8_bin NOT NULL,
  `state` varchar(32) COLLATE utf8_bin NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `process_instances`
--

INSERT INTO `process_instances` (`id`, `name`, `state`, `date_create`, `date_modify`, `time`) VALUES
(1, 'FLUJO GENERAL', 'READY', '2016-07-18 20:21:00', '2016-07-21 15:10:42', 0),
(2, 'FLUJO GENERAL', 'READY', '2016-07-21 20:43:28', '2016-07-22 19:46:16', 0),
(3, 'FLUJO GENERAL', 'FINISH', '2016-07-21 20:43:37', '2016-07-27 20:41:12', 0),
(4, 'FLUJO GENERAL', 'FINISH', '2016-07-21 20:43:40', '2016-08-05 14:38:12', 0),
(5, 'FLUJO GENERAL', 'FINISH', '2016-07-21 20:43:44', '2016-07-26 20:11:35', 0),
(6, 'FLUJO GENERAL', 'FINISH', '2016-07-21 20:43:47', '2016-07-26 20:42:53', 0),
(8, 'FLUJO GENERAL', 'FINISH', '2016-07-27 21:02:47', '2016-08-05 15:25:46', 0),
(17, 'FLUJO GENERAL', 'FINISH', '2016-08-17 20:33:42', '2016-08-18 20:34:39', 0),
(18, 'FLUJO GENERAL', 'FINISH', '2016-08-17 20:33:42', '2016-08-18 20:35:10', 0),
(22, 'FLUJO GENERAL', 'READY', '2016-08-18 21:22:12', '2016-08-18 21:22:12', 0),
(23, 'FLUJO GENERAL', 'READY', '2016-08-18 21:22:12', '2016-08-18 21:22:12', 0),
(24, 'FLUJO GENERAL', 'READY', '2016-08-18 21:22:12', '2016-08-18 21:22:12', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(2) NOT NULL,
  `nombre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'General'),
(2, 'Admin'),
(3, 'Calificado'),
(4, 'Aprobador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sau`
--

CREATE TABLE `sau` (
  `sau` int(11) NOT NULL DEFAULT '0',
  `maintenance` int(11) DEFAULT NULL,
  `message_maintenance` varchar(250) DEFAULT NULL,
  `style` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sau`
--

INSERT INTO `sau` (`sau`, `maintenance`, `message_maintenance`, `style`) VALUES
(1, 1, 'El sistema esta en mantenimiento momentaneo', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subsanacion`
--

CREATE TABLE `subsanacion` (
  `id` int(11) NOT NULL,
  `req_no` varchar(21) NOT NULL,
  `iduser` int(2) NOT NULL,
  `observacion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite`
--

CREATE TABLE `tramite` (
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
  `mdf_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tramite`
--

INSERT INTO `tramite` (`req_no`, `dcm_no`, `empresa`, `ciudad`, `receptor_asignado`, `receptor_revisado`, `certificador_asignado`, `certificador_revisado`, `estado`, `rgs_dt`, `mdf_dt`) VALUES
('01009988201500002050P', '130-045', 'UNCORP S.A.', 'GYE', 3, 'f', 0, 'f', 't', '2016-06-27 10:37:00', '0000-00-00 00:00:00'),
('01009988201500002684P', '130-032', 'UNCORP S.A.', 'GYE', 3, 'f', 0, 'f', 't', '2016-06-27 10:37:00', '0000-00-00 00:00:00'),
('01009988201500002707P', '130-010', 'EMPRESA 1', 'GYE', 3, 'f', 3, 'f', 't', '2016-06-27 10:37:00', '0000-00-00 00:00:00'),
('01009988201600000049P', '130-039', 'UNCORP S.A.', 'GYE', 3, 'f', 0, 'f', 't', '2016-06-27 10:37:00', '2016-06-27 15:17:03'),
('01009988201600000082P', '130-001', 'INDUSTRIA CONSERVERA DE LA PESCA INCOPES CIA. LTDA.', 'GYE', 3, 'f', 0, 'f', 't', '2016-06-27 10:37:00', '0000-00-00 00:00:00'),
('01009994201400000723P', '130-016', 'SOCIEDAD NACIONAL DE GALAPAGOS C.A.', 'GYE', 3, 't', 0, 'f', 't', '2016-06-27 10:37:00', '0000-00-00 00:00:00'),
('16009084201600000988P', '130-001', 'EMPRESA 2', 'GYE', 3, 't', 5, 'f', 't', '2016-06-27 10:37:00', '2016-06-27 15:17:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `identity_card` varchar(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `profile` varchar(250) DEFAULT NULL,
  `public` int(11) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  `city` varchar(3) NOT NULL,
  `state` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`iduser`, `name`, `lastname`, `username`, `password`, `identity_card`, `email`, `profile`, `public`, `rank`, `city`, `state`) VALUES
(0, '', '', 'unassigned', '', '', '', '', 0, 2, '', ''),
(2, 'Admin', '', 'admin', '$2y$12$P3AmVAsIgxfOWhgQNMLPJuZTntp5srCwRWHvQGrTwJ8u/EnhZwFGm', '', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 2, 'GYE', 'HABILITADO'),
(3, 'Nidia', 'Plaza', 'nidia.plaza', '$2y$12$KKarZ6eLvt7WK3Pp9hFg4.w.nnLcnyKfHFoKR7cpwAqb6d8mjoATy', '', 'user@mail.com', 'cb4bf00cf261e0f354e4fbcf2e0c0a89', 1, 1, 'GYE', 'HABILITADO'),
(5, 'Glenda', 'Pin', 'glenda.pin', '$2y$12$YTEjj6GeuD/U7NHNxyagvuUTmlSDj/iGptFPw/8qe1jwJSD81oSJm', '1201140918', 'aprobador1@mail.com', '50b0bc46507320e134441c6dfda3679e', 1, 4, 'GYE', 'HABILITADO'),
(6, 'Ivana', 'Alava', 'ivana.alava', '$2y$12$aWKxAk8PdylwvrDiELF40OUL0mWwHhJXVWLT7y60uDVsdEVyJCdtO', '', 'calificado@mail.com', '84b9920869f1eb9a79906b24260710aa', NULL, 1, 'MEC', 'DESHABILITADO'),
(7, 'Joilan', 'Arcentales', 'joilan.arcentales', '$2y$12$xf6UtDHBtz1udHhqTWa.quZCOFMbJz1nBpvj6lTHiPsaImML.y7zS', '1309154696', 'aprobador2@mail.com', '0e9efed48aff228e17a70c0b5d754c02', NULL, 4, 'MEC', 'HABILITADO'),
(9, 'Felicita', 'Villamar', 'felicita.villamar', '$2y$12$SFteIbX/6Qy.SmwQFisO8uiFE1MvPzXYv3Y6kI5e6IQgY.5H.RGHq', '', 'calificado2@mail.com', '157de10a6d42b28558ad3fe696a76655', NULL, 3, 'GYE', 'HABILITADO'),
(10, 'David', 'Parrales', 'david.parrales', '$2y$12$6GNQT10OJhM3BxRzGdO4o.GEIgBN0K3J2Dow35J.EdZv41m6p7.Fq', '', 'calificado2@mail.com', '464e07afc9e46359fb480839150595c5', NULL, 3, 'GYE', 'DESHABILITADO'),
(11, 'Rocio', 'Rivera', 'rocio.rivera', '$2y$12$hF7JQcjpQC2cAPKRPrVpdeqZVKSIh0iFYVWzBHH2a8ZhB01Fo63fW', '0911122133', 'mail@mail.com', '8202749081de3f6e80b013b81a657294', 1, 4, 'GYE', 'HABILITADO'),
(12, 'Consuelo', 'Lara', 'consuelo.lara', '$2y$12$3NLOpWgkBQJQSw2vLBHtD.u0N9loMtIH2VneaGnr6vf4WuByq90ZW', '', 'mail@mail.com', '9933d13e54de63d5ec041f0945af6010', 1, 1, 'GYE', 'HABILITADO'),
(13, 'Sandra', 'Alonso', 'sandra.alonso', '$2y$12$6BvYTfwS.Y.g4Az0OLE.LuuRU7V4Xz.skjA8tg6V0NUQxDXx8VOfm', '', 'mail@mail.com', 'd41219060e0c16c228ed4682cade6379', 1, 1, 'MEC', 'HABILITADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variables`
--

CREATE TABLE `variables` (
  `id` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activities_instances_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activities_instances`
--
ALTER TABLE `activities_instances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `process_instances_id` (`process_instances_id`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idcomment`);

--
-- Indices de la tabla `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`req_no`),
  ADD UNIQUE KEY `process_instances_id` (`process_instances_id`);

--
-- Indices de la tabla `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`idfollow`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idpost`);

--
-- Indices de la tabla `process_instances`
--
ALTER TABLE `process_instances`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sau`
--
ALTER TABLE `sau`
  ADD PRIMARY KEY (`sau`);

--
-- Indices de la tabla `subsanacion`
--
ALTER TABLE `subsanacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tramite` (`req_no`);

--
-- Indices de la tabla `tramite`
--
ALTER TABLE `tramite`
  ADD PRIMARY KEY (`req_no`),
  ADD KEY `fk_receptor` (`receptor_asignado`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `fk_rol` (`rank`);

--
-- Indices de la tabla `variables`
--
ALTER TABLE `variables`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `activities_instances_id` (`activities_instances_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activities_instances`
--
ALTER TABLE `activities_instances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `followers`
--
ALTER TABLE `followers`
  MODIFY `idfollow` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `process_instances`
--
ALTER TABLE `process_instances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `subsanacion`
--
ALTER TABLE `subsanacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `variables`
--
ALTER TABLE `variables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activities_instances`
--
ALTER TABLE `activities_instances`
  ADD CONSTRAINT `activities_instances_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`iduser`),
  ADD CONSTRAINT `activities_instances_ibfk_2` FOREIGN KEY (`process_instances_id`) REFERENCES `process_instances` (`id`);

--
-- Filtros para la tabla `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `process_to_documents` FOREIGN KEY (`process_instances_id`) REFERENCES `process_instances` (`id`);

--
-- Filtros para la tabla `subsanacion`
--
ALTER TABLE `subsanacion`
  ADD CONSTRAINT `fk_tramite` FOREIGN KEY (`req_no`) REFERENCES `tramite` (`req_no`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`rank`) REFERENCES `rol` (`id`);

--
-- Filtros para la tabla `variables`
--
ALTER TABLE `variables`
  ADD CONSTRAINT `activities_to_variables` FOREIGN KEY (`activities_instances_id`) REFERENCES `activities_instances` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
