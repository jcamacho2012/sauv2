-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2016 a las 06:55:41
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sau`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities_instances`
--

CREATE TABLE `activities_instances` (
  `id` int(11) NOT NULL,
  `name` varchar(132) COLLATE utf8_bin NOT NULL,
  `state` varchar(32) COLLATE utf8_bin NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `process_instances_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `process_instances_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
('01009994201400000723P', '130-016', 'SOCIEDAD NACIONAL DE GALAPAGOS C.A.', 'GYE', 3, 't', 5, 'f', 't', '2016-06-27 10:37:00', '0000-00-00 00:00:00'),
('16009084201600000988P', '130-001', 'EMPRESA 2', 'GYE', 3, 't', 5, 'f', 't', '2016-06-27 10:37:00', '2016-06-27 15:17:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `profile` varchar(250) DEFAULT NULL,
  `public` int(11) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  `ciudad` varchar(3) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`iduser`, `name`, `password`, `email`, `profile`, `public`, `rank`, `ciudad`, `estado`) VALUES
(2, 'admin', '$2y$12$eCK4iS8SXvLDoEOkq2/Mb./3ZEx6geSEpKWRceNXBNXKnWc0oA6iy', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 2, 'GYE', 'HABILITADO'),
(3, 'usuario', '$2y$12$ezt.G.0Zm266zERLt1Dx7ep7UmW9LecdtHfF4znrt6/WJpnnCoaD6', 'user@mail.com', 'f8032d5cae3de20fcec887f395ec9a6a', 1, 1, 'GYE', 'HABILITADO'),
(5, 'aprobador1', '$2y$12$sGosck9wJPxthaxAjjHTD.gTMUso2gLn7MajVN/lYGnGRlYXPjAji', 'aprobador1@mail.com', 'f8032d5cae3de20fcec887f395ec9a6a', 1, 4, 'GYE', 'HABILITADO'),
(6, 'calificado', '$2y$12$e7psAflReYon.K/Lia02xulJFClq0Wq11oRD4hGncfgzbCnbdpXDa', 'calificado@mail.com', '84b9920869f1eb9a79906b24260710aa', NULL, 3, 'GYE', 'HABILITADO'),
(7, 'aprobador2', '$2y$12$kOBFCIvm59VBqAvKYm2HMe0iWngzZ/5SORrdGLrgXpU790qdhtEae', 'aprobador2@mail.com', '0e9efed48aff228e17a70c0b5d754c02', NULL, 4, 'MNT', 'HABILITADO'),
(9, 'calificado2', '$2y$12$d0eKBcQiSssKYczHCKaudeH9HPtwwnmB8KdFFCHthiKLzSaTMjsYG', 'calificado2@mail.com', '157de10a6d42b28558ad3fe696a76655', NULL, 3, 'GYE', 'HABILITADO');

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
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `process_to_activities` (`process_instances_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  ADD CONSTRAINT `process_to_activities` FOREIGN KEY (`process_instances_id`) REFERENCES `process_instances` (`id`),
  ADD CONSTRAINT `users_to_activities` FOREIGN KEY (`user_id`) REFERENCES `users` (`iduser`);

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
