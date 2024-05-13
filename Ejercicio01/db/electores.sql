-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2024 a las 06:36:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elecciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electores`
--

CREATE TABLE `electores` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `DNI` varchar(10) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `boolVoto` int(1) DEFAULT NULL,
  `candidatoVoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `electores`
--

INSERT INTO `electores` (`ID`, `Nombre`, `DNI`, `Direccion`, `FechaNacimiento`, `boolVoto`, `candidatoVoto`) VALUES
(441, 'Juan', '1234567890', 'Calle 123', '1975-06-15', 1, ''),
(442, 'Maria', '0987654321', 'Avenida Principal', '1982-09-20', 0, ''),
(443, 'Carlos', '4567890124', 'Calle 456', '1990-03-10', 0, ''),
(444, 'Laura', '3210987654', 'Avenida Central', '1978-12-05', 0, ''),
(445, 'Pedro', '5678901224', 'Calle Principal', '1985-04-30', 0, ''),
(446, 'Ana', '2345658901', 'Avenida 5 de Mayo', '1992-07-25', 0, ''),
(447, 'Luis', '6789312345', 'Calle 789', '1980-11-18', 0, ''),
(448, 'Sofia', '3426789012', 'Avenida Juarez', '1973-08-08', 0, ''),
(449, 'Diego', '7890124456', 'Calle 890', '1995-01-12', 0, ''),
(450, 'Carmen', '4567890113', 'Avenida Independencia', '1987-06-22', 0, ''),
(451, 'Roberto', '8911234567', 'Calle 901', '1970-02-28', 0, ''),
(452, 'Elena', '5678901244', 'Avenida 10 de Octubre', '1983-05-17', 0, ''),
(453, 'Javier', '1123456789', 'Calle 1234', '1998-09-03', 0, ''),
(454, 'Raquel', '6749012345', 'Avenida 15 de Septiembre', '1976-11-29', 0, ''),
(455, 'Fernando', '1234567831', 'Calle 4567', '1991-04-06', 0, ''),
(456, 'Luisa', '2345676901', 'Calle 8910', '1986-07-15', 0, ''),
(457, 'Andres', '8901534567', 'Avenida Bolivar', '1974-10-25', 0, ''),
(458, 'Carolina', '4567890923', 'Calle 1112', '1993-03-18', 0, ''),
(459, 'Roberto', '6789042345', 'Avenida Libertador', '1981-12-08', 0, ''),
(460, 'Julia', '2123456789', 'Calle 1314', '1979-05-30', 0, ''),
(461, 'Mateo', '5278901234', 'Avenida Simon Bolivar', '1990-09-12', 0, ''),
(462, 'Camila', '1234567895', 'Calle 1516', '1987-02-04', 0, ''),
(463, 'Gabriel', '7890113456', 'Avenida Miranda', '1984-08-22', 0, ''),
(464, 'Valentina', '6456789012', 'Calle 1718', '1995-01-17', 0, ''),
(465, 'Juan', '9012335678', 'Avenida Boyaca', '1982-06-09', 0, ''),
(466, 'Lucas', '4567813123', 'Calle 1920', '1978-03-15', 0, ''),
(467, 'Ana', '7890123316', 'Avenida Francisco de Miranda', '1983-11-28', 0, ''),
(468, 'Miguel', '2345648901', 'Calle 2122', '1996-05-02', 0, ''),
(469, 'Elena', '4123456789', 'Avenida Libertadores', '1989-08-14', 0, ''),
(470, 'David', '6781012345', 'Calle 2324', '1971-01-07', 0, ''),
(471, 'Sara', '9012345578', 'Avenida Los Proceres', '1980-09-19', 0, ''),
(472, 'Diego', '3456389012', 'Calle 2526', '1992-04-23', 0, ''),
(473, 'Alejandra', '5648901234', 'Avenida 27 de Febrero', '1977-07-11', 0, ''),
(474, 'Victoria', '8901234567', 'Calle 2829', '1994-10-05', 0, ''),
(475, 'Andrea', '1234167890', 'Avenida 3031', '1985-12-30', 0, ''),
(476, 'Jorge', '6789512345', 'Calle 3233', '1988-02-18', 0, ''),
(477, 'Marcela', '3455789012', 'Avenida 3435', '1991-06-22', 0, ''),
(478, 'Daniel', '9812345678', 'Calle 3637', '1984-09-14', 0, ''),
(479, 'Juliana', '5628901234', 'Avenida 3839', '1973-12-07', 0, ''),
(480, 'Gustavo', '1234267890', 'Calle 4041', '1997-03-30', 0, ''),
(481, 'Natalia', '7890123456', 'Avenida 4243', '1982-08-12', 0, ''),
(482, 'Mariano', '2345678901', 'Calle 4445', '1976-11-25', 0, ''),
(483, 'Isabella', '5123456789', 'Avenida 4647', '1990-04-18', 0, ''),
(484, 'Martina', '6789012355', 'Calle 4849', '1985-07-01', 0, ''),
(485, NULL, NULL, NULL, NULL, 1, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `electores`
--
ALTER TABLE `electores`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `electores`
--
ALTER TABLE `electores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=486;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
