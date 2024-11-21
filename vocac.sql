-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2024 a las 08:50:11
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
-- Base de datos: `saberes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vocac`
--

CREATE TABLE `vocac` (
  `id` int(11) NOT NULL,
  `salu1` text NOT NULL,
  `salu2` text NOT NULL,
  `salu3` text NOT NULL,
  `salu4` text NOT NULL,
  `salu5` text NOT NULL,
  `inge6` text NOT NULL,
  `inge7` text NOT NULL,
  `inge8` text NOT NULL,
  `inge9` text NOT NULL,
  `inge10` text NOT NULL,
  `arte11` text NOT NULL,
  `arte12` text NOT NULL,
  `arte13` text NOT NULL,
  `arte14` text NOT NULL,
  `arte15` text NOT NULL,
  `neec16` text NOT NULL,
  `neec17` text NOT NULL,
  `neec18` text NOT NULL,
  `neec19` text NOT NULL,
  `neec20` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vocac`
--

INSERT INTO `vocac` (`id`, `salu1`, `salu2`, `salu3`, `salu4`, `salu5`, `inge6`, `inge7`, `inge8`, `inge9`, `inge10`, `arte11`, `arte12`, `arte13`, `arte14`, `arte15`, `neec16`, `neec17`, `neec18`, `neec19`, `neec20`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 'a', 'a', 'a', 'a', 'a', '', '', '', '', 'b', 'c', 'd', 'a', 'b', 'e', 'a', 'b', 'b', 'b', 'a'),
(3, 'a', 'a', 'a', 'a', 'a', '', '', '', '', 'b', 'c', 'd', 'a', 'b', 'e', 'a', 'b', 'b', 'b', 'a'),
(4, 'e', 'e', 'e', 'e', 'e', 'a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'a', 'b', 'b', 'a', 'a', 'c', 'e', 'e', 'e', 'd', 'd', 'c', 'e', 'e', 'e', 'd', 'd', 'e', 'e', 'c'),
(7, 'a', 'b', 'b', 'a', 'a', 'c', 'e', 'e', 'e', 'd', 'd', 'c', 'e', 'e', 'e', 'd', 'd', 'e', 'e', 'c'),
(8, 'a', 'b', 'b', 'a', 'a', 'c', 'e', 'e', 'e', 'd', 'd', 'c', 'e', 'e', 'e', 'd', 'd', 'e', 'e', 'c'),
(9, 'a', 'b', 'b', 'a', 'a', 'c', 'e', 'e', 'e', 'd', 'd', 'c', 'e', 'e', 'e', 'd', 'd', 'e', 'e', 'c'),
(10, 'a', 'b', 'b', 'a', 'a', 'c', 'e', 'e', 'e', 'd', 'd', 'c', 'e', 'e', 'e', 'd', 'd', 'e', 'e', 'c'),
(11, 'a', 'b', 'b', 'a', 'a', 'c', 'e', 'e', 'e', 'd', 'd', 'c', 'e', 'e', 'e', 'd', 'd', 'e', 'e', 'c');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vocac`
--
ALTER TABLE `vocac`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vocac`
--
ALTER TABLE `vocac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
