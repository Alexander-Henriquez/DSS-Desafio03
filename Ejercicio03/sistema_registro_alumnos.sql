-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-05-2024 a las 02:41:57
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_registro_alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_grupo` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_grupo` (`id_grupo`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `telefono`, `email`, `id_grupo`) VALUES
(1, 'Usuario1', 'Apellido1', '123456789', 'usuario1@example.com', 1),
(2, 'Usuario2', 'Apellido2', '123456789', 'usuario2@example.com', 1),
(3, 'Usuario3', 'Apellido3', '123456789', 'usuario3@example.com', 1),
(4, 'Usuario4', 'Apellido4', '123456789', 'usuario4@example.com', 1),
(5, 'Usuario5', 'Apellido5', '123456789', 'usuario5@example.com', 1),
(6, 'Usuario6', 'Apellido6', '123456789', 'usuario6@example.com', 1),
(7, 'Usuario7', 'Apellido7', '123456789', 'usuario7@example.com', 1),
(8, 'Usuario8', 'Apellido8', '123456789', 'usuario8@example.com', 1),
(9, 'Usuario9', 'Apellido9', '123456789', 'usuario9@example.com', 1),
(10, 'Usuario10', 'Apellido10', '123456789', 'usuario10@example.com', 1),
(11, 'Usuario11', 'Apellido11', '123456789', 'usuario11@example.com', 1),
(12, 'Usuario12', 'Apellido12', '123456789', 'usuario12@example.com', 1),
(13, 'Usuario13', 'Apellido13', '123456789', 'usuario13@example.com', 1),
(14, 'Usuario14', 'Apellido14', '123456789', 'usuario14@example.com', 1),
(15, 'Usuario15', 'Apellido15', '123456789', 'usuario15@example.com', 1),
(16, 'Usuario16', 'Apellido16', '123456789', 'usuario16@example.com', 1),
(17, 'Usuario17', 'Apellido17', '123456789', 'usuario17@example.com', 1),
(18, 'Usuario18', 'Apellido18', '123456789', 'usuario18@example.com', 1),
(19, 'Usuario19', 'Apellido19', '123456789', 'usuario19@example.com', 1),
(20, 'Alumno1', 'Apellido1', '123456789', 'alumno1@example.com', 3),
(21, 'Alumno2', 'Apellido2', '123456789', 'alumno2@example.com', 3),
(22, 'Alumno3', 'Apellido3', '123456789', 'alumno3@example.com', 3),
(23, 'Alumno4', 'Apellido4', '123456789', 'alumno4@example.com', 3),
(24, 'Alumno5', 'Apellido5', '123456789', 'alumno5@example.com', 3),
(25, 'Alumno6', 'Apellido6', '123456789', 'alumno6@example.com', 3),
(26, 'Alumno7', 'Apellido7', '123456789', 'alumno7@example.com', 3),
(27, 'Alumno8', 'Apellido8', '123456789', 'alumno8@example.com', 3),
(28, 'Alumno9', 'Apellido9', '123456789', 'alumno9@example.com', 3),
(29, 'Alumno1', 'Apellido1', '123456789', 'alumno1@example.com', 2),
(30, 'Alumno2', 'Apellido2', '123456789', 'alumno2@example.com', 2),
(31, 'Alumno1', 'Apellido1', '123456789', 'alumno1@example.com', 4),
(32, 'Alumno2', 'Apellido2', '123456789', 'alumno2@example.com', 4),
(33, 'Alumno3', 'Apellido3', '123456789', 'alumno3@example.com', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_grupo` varchar(50) NOT NULL,
  `id_horario` int NOT NULL,
  `tipo_horario` enum('teorico','practico') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_horario` (`id_horario`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre_grupo`, `id_horario`, `tipo_horario`) VALUES
(1, 'Teórico Lunes 10am - 12pm', 1, 'teorico'),
(2, 'Teórico Miércoles 10am - 12pm', 2, 'teorico'),
(3, 'Práctico Lunes 8am - 10am', 1, 'practico'),
(4, 'Práctico Lunes 10am - 12pm', 2, 'practico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios_practicos`
--

DROP TABLE IF EXISTS `horarios_practicos`;
CREATE TABLE IF NOT EXISTS `horarios_practicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dia_semana` varchar(2) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `max_alumnos` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `horarios_practicos`
--

INSERT INTO `horarios_practicos` (`id`, `dia_semana`, `hora_inicio`, `hora_fin`, `max_alumnos`) VALUES
(1, 'L', '08:00:00', '10:00:00', 10),
(2, 'L', '10:00:00', '12:00:00', 10),
(3, 'L', '14:00:00', '16:00:00', 10),
(4, 'L', '16:00:00', '18:00:00', 10),
(5, 'M', '08:00:00', '10:00:00', 10),
(6, 'M', '10:00:00', '12:00:00', 10),
(7, 'M', '14:00:00', '16:00:00', 10),
(8, 'M', '16:00:00', '18:00:00', 10),
(9, 'V', '08:00:00', '10:00:00', 10),
(10, 'V', '10:00:00', '12:00:00', 10),
(11, 'V', '14:00:00', '16:00:00', 10),
(12, 'V', '16:00:00', '18:00:00', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios_teoricos`
--

DROP TABLE IF EXISTS `horarios_teoricos`;
CREATE TABLE IF NOT EXISTS `horarios_teoricos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dia_semana` varchar(2) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `max_alumnos` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `horarios_teoricos`
--

INSERT INTO `horarios_teoricos` (`id`, `dia_semana`, `hora_inicio`, `hora_fin`, `max_alumnos`) VALUES
(1, 'L', '10:00:00', '12:00:00', 20),
(2, 'M', '10:00:00', '12:00:00', 20),
(3, 'V', '10:00:00', '12:00:00', 20),
(4, 'L', '16:00:00', '18:00:00', 20),
(5, 'M', '16:00:00', '18:00:00', 20),
(6, 'V', '16:00:00', '18:00:00', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
