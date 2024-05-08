-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-05-2024 a las 07:09:32
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
-- Base de datos: `sistema_boletas_pago`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletas_pago`
--

DROP TABLE IF EXISTS `boletas_pago`;
CREATE TABLE IF NOT EXISTS `boletas_pago` (
  `id_boleta` int NOT NULL AUTO_INCREMENT,
  `id_empleado` int DEFAULT NULL,
  `mes_pago` varchar(20) DEFAULT NULL,
  `bonificaciones` decimal(10,2) DEFAULT NULL,
  `deducciones` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_boleta`),
  KEY `id_empleado` (`id_empleado`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `id_empleado` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `codigo_identidad` varchar(20) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `posicion` varchar(100) DEFAULT NULL,
  `tipo_contratacion` varchar(100) DEFAULT NULL,
  `sueldo_base` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `codigo_identidad`, `departamento`, `posicion`, `tipo_contratacion`, `sueldo_base`) VALUES
(1, 'Juan Pérez', '123456789', 'Ventas', 'Vendedor', 'Tiempo completo', 1500.00),
(2, 'María López', '987654321', 'Recursos Humanos', 'Gerente de RRHH', 'Tiempo completo', 2500.00),
(3, 'Carlos García', '456789123', 'Producción', 'Operario', 'Tiempo completo', 1400.00),
(4, 'Ana Martínez', '321654987', 'Contabilidad', 'Contador', 'Medio tiempo', 1800.00),
(5, 'Luis Rodríguez', '789123456', 'Marketing', 'Analista de Marketing', 'Tiempo completo', 2000.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
