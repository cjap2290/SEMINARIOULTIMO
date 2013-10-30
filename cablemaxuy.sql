-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2013 a las 20:25:47
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cablemaxuy`
--
CREATE DATABASE IF NOT EXISTS `cablemaxuy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cablemaxuy`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms1`
--

CREATE TABLE IF NOT EXISTS `cms1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `cuerpo` longtext CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `imagen` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'sinimagen.jpg',
  `principal` int(1) NOT NULL DEFAULT '0',
  `mostrar` int(11) NOT NULL DEFAULT '1',
  `fecha` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms1`
--

INSERT INTO `cms1` (`id`, `titulo`, `cuerpo`, `imagen`, `principal`, `mostrar`, `fecha`) VALUES
(1, 'Accidente en la panamericana', 'Hoy se registro un accidente en la panamerica norte....', 'sinimagen.jpg', 0, 1, '13/10/21'),
(2, 'cjap', 'igdfgkgfksdgfs', 'sinimagen.jpg', 0, 1, '13/10/21'),
(3, '', '', 'sinimagen.jpg', 0, 1, '13/10/21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`idComentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idComentario`, `nombre`, `email`, `comentario`) VALUES
(1, 'CHRISTIAN', 'CJAP@HOTMAILCOM', 'HOLA SOY CHRISTIAN'),
(19, 'DDDDDDDDDD', 'FFF@HOTMAIL.COM', 'HOLA SOY CHRISTIAN'),
(20, 'JOHN FLORES', 'JOHN@MICORREO.COM', 'HOLA SOY JOHN FLORES ...'),
(21, 'CHRISTIAN', 'CJAP@GMAIL.COM', 'DDDD'),
(22, 'RUTH', 'QUIROZ@GAMIL.COM', 'HOLA SOY RUTH'),
(23, 'MANUEL', 'MANU@GMAIL.COM', 'HOLA SOY MANUEL'),
(24, 'GGGGGG', 'GGGG@HOTMAIL.COM', 'FFFFFFFF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE IF NOT EXISTS `contenido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `descripcion` longtext NOT NULL,
  `principal` varchar(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `titulo`, `subtitulo`, `descripcion`, `principal`) VALUES
(1, 'Prueba', 'Prueba 001', 'Esta es una prueba para revisar el funcionamiento de la tabla contenido...', '0'),
(2, 'titulo', 'subtitulo', 'la vida es nua sola', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezado`
--

CREATE TABLE IF NOT EXISTS `encabezado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `encabezado`
--

INSERT INTO `encabezado` (`id`, `titulo`, `subtitulo`) VALUES
(1, 'seminario i', 'turno a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pie`
--

CREATE TABLE IF NOT EXISTS `pie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pie`
--

INSERT INTO `pie` (`id`, `descripcion`) VALUES
(1, 'CURSO DE SEMINARIO I\r\nTODOS LOS DERECHOS RESERVADOS\r\nCHRISTIAN AMBROSIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE IF NOT EXISTS `publicidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen1` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'sinimagen.jpg',
  `imagen2` varchar(100) NOT NULL DEFAULT 'sinimagen.jpg',
  `imagen3` varchar(100) NOT NULL DEFAULT 'sinimagen.jpg',
  `imagen4` varchar(100) NOT NULL DEFAULT 'sinimagen.jpg',
  `imagen5` varchar(100) NOT NULL DEFAULT 'sinimagen.jpg',
  `imagen6` varchar(100) NOT NULL DEFAULT 'sinimagen.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
