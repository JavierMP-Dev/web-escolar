-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2020 a las 20:01:28
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `musica_edm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `idAdministrador` varchar(15) COLLATE utf32_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `correo` varchar(40) COLLATE utf32_spanish2_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf32_spanish2_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `pais` varchar(11) COLLATE utf32_spanish2_ci NOT NULL,
  PRIMARY KEY (`idAdministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdministrador`, `nombre`, `correo`, `direccion`, `cargo`, `pais`) VALUES
('121', 'Javier Montoya', 'montoya.javier.15@hotmail.com', 'Morelos Mexico', 'CEO', 'Mexico'),
('122', 'Eduardo Nieto', 'eduardo_nopA@hotmail.com', 'Atotonilco', 'Programador', 'Mexico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` varchar(15) COLLATE utf32_spanish2_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf32_spanish2_ci NOT NULL,
  `correo` varchar(40) COLLATE utf32_spanish2_ci NOT NULL,
  `asunto` varchar(60) COLLATE utf32_spanish2_ci NOT NULL,
  `mensaje` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `correo`, `asunto`, `mensaje`) VALUES
('001', 'Marcos', 'marcos_kong@hhotmail.com', 'Informacion de la pagina', 'Buenos dias, me gustaria conocer mas sobre lo que '),
('002', 'Miguel', 'miguel_arriaga@hhotmail.com', 'Informacion ', 'Me gustaria conocer un poco mas'),
('003', 'Mario', 'mario.mir@hotmail.com', 'Informacion ', 'Cuanto duran los cursos?'),
('004', 'Gustavo', 'guz_small@hotmail.com', 'Info.', 'Que se hace en marketing?'),
('005', 'Miguel de Jesus', 'jos_mi@hotmail.com', 'Asuntos', 'La informacion que se manda es privada?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
