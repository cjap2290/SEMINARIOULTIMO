-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2013 a las 16:55:16
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
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`idComentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

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
(24, 'GGGGGG', 'GGGG@HOTMAIL.COM', 'FFFFFFFF'),
(25, 'WALTER', 'CJAP@GMAIL.COM', 'CJAP'),
(26, '', '', ''),
(27, 'CHRISTIAN', 'CJAP@GMAIL.COM', 'HPP;A ADDS'),
(28, '', '', ''),
(29, '', '', ''),
(30, 'GGGGGG', 'CJAP25@GMAIL.COM', 'POJDKJLGLDFGHDJG'),
(31, '', '', ''),
(32, '', '', ''),
(33, '', '', ''),
(34, 'CCCCCC', 'CJAP_15_2006@HOTMAIL.COM', 'FGDGD'),
(35, 'CHRSTIAN AMBROSIO', 'CHRISTIAN@HOTMAIL.COM', 'HOLA SOY CHRISTIAN'),
(36, 'CHRISTIAN AMBROSIO', 'CJAP_15_2006@HOTMAIL.COM', 'HOLA SOY EL ADMINISTRADOR DE ESTA PAGINA'),
(37, 'CHRISTIAN AMBROSIO', 'CJAP25@GMAIL.COM', 'HOLA SOY CHRISTIAN AMBROSIO EL NUEVO ADMIN DE ESTA PAGINA'),
(38, 'CHRISTIAN JONATAN AMBROSIO P.', 'ADMIN@MAXUY.COM', 'HOLA SOY EL NUEVO ADMINISTRADOR DE ESTA PAGINA WEB. SALUDOS'),
(39, 'CHRISTIAN AMBROSIO P.', 'ADMINEMPLOYEE@UCV.EDU.PE', 'SOY EL ADMIN DE ESTA WEB'),
(40, 'HGFHGFHFH', 'GGGGGGG@GMAIL.COM', 'HOLA SOY GGGGGGGG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE IF NOT EXISTS `contenido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `descripcion` longtext NOT NULL,
  `principal` int(1) NOT NULL DEFAULT '0',
  `mostrar` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `titulo`, `subtitulo`, `descripcion`, `principal`, `mostrar`) VALUES
(4, 'ING.SISTEMAS', 'UCV', 'HOLA....', 0, 1),
(5, 'Cable maxuy', 'casa grande', 'cable maxuy ....', 0, 1),
(6, 'CABLE MAXUY', 'CASA GRANDE', 'CABLE MAXUY es una empresa con sede en el distrito de CASA GRANDE, que brinda el servicio de televisión por cable, una empresa joven y en constante crecimiento, que desde el inicio de sus operaciones se dirigió a ese gran público (Ausente para otras grandes compañias) que no contaba con el servicio de TV por suscripción.\r\n\r\nBrindándole lo mejor en Películas, Series, Internacional, Documentales, Novelas, Nacionales, Deportes, Noticias, Farándula, Religiosos, Musicales y más...', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezado`
--

CREATE TABLE IF NOT EXISTS `encabezado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `principal` int(1) NOT NULL DEFAULT '0',
  `mostrar` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `encabezado`
--

INSERT INTO `encabezado` (`id`, `titulo`, `subtitulo`, `principal`, `mostrar`) VALUES
(4, 'CABLE MAXUY', 'VALLE CHICAMA', 0, 1),
(5, 'CABLE MAXUY', 'EMPRESA DE TV POR CABLE', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `principal` int(11) NOT NULL DEFAULT '1',
  `mostrar` int(11) NOT NULL DEFAULT '1',
  `embed` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `titulo` (`titulo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `dia`, `mes`, `lugar`, `principal`, `mostrar`, `embed`) VALUES
(1, 'NOTICIA1', 'ESTA ES KA DESCRIPCION DE LA NOTICIA1', 31, 'OCTUBRE', 'CASA GRANDE', 1, 1, '//www.youtube.com/embed/1w7OgIMMRc4'),
(2, 'noticia2', 'descripcio noticia 2', 31, 'octubre', 'chicope', 1, 1, ''),
(3, 'noticia3', 'descripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia... descripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia... descripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia...', 31, 'octubre', 'chocope', 1, 1, ''),
(4, 'noticia 4', 'descripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia... descripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia... descripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia...\r\ndescripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia... descripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia... descripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia...\r\ndescripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia... descripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia... descripcion de la noticia numero 3 esto es una prueba para ver como se vera la futura noticia...', 31, 'octubre', 'chocope', 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pie`
--

CREATE TABLE IF NOT EXISTS `pie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` longtext NOT NULL,
  `principal` int(1) NOT NULL DEFAULT '0',
  `mostrar` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `pie`
--

INSERT INTO `pie` (`id`, `descripcion`, `principal`, `mostrar`) VALUES
(2, 'christian ambrosio', 0, 1),
(3, 'christian ambrosio', 0, 1),
(4, 'UNIVERSIDAD CESAR VALLEJO', 0, 1),
(5, 'CURSO DE SEMINARIO I', 0, 1),
(6, 'CABLE MAXUY</BR>\r\nTODOS LOS DERECHOS RESERVADOS</BR>\r\nTRUJILLO-PERU</BR>\r\n2013\r\n', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE IF NOT EXISTS `publicidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen1` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'anuncie_aqui.gif',
  `imagen2` varchar(100) NOT NULL DEFAULT 'anuncie_aqui.gif',
  `imagen3` varchar(100) NOT NULL DEFAULT 'anuncie_aqui.gif',
  `imagen4` varchar(100) NOT NULL DEFAULT 'anuncie_aqui.gif',
  `imagen5` varchar(100) NOT NULL DEFAULT 'anuncie_aqui.gif',
  `imagen6` varchar(100) NOT NULL DEFAULT 'anuncie_aqui.gif',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `publicidad`
--

INSERT INTO `publicidad` (`id`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `imagen5`, `imagen6`) VALUES
(1, 'canal5.jpg', 'canal4.jpg', 'anuncie_aqui.gif', 'anuncie_aqui.gif', 'anuncie_aqui.gif', 'anuncie_aqui.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen1` varchar(100) NOT NULL DEFAULT 'sinimagen.jpg',
  `imagen2` varchar(100) NOT NULL DEFAULT 'sinimagen.jpg',
  `imagen3` varchar(100) NOT NULL DEFAULT 'sinimagen.jpg',
  `imagen4` varchar(100) NOT NULL DEFAULT 'sinimagen.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `imagen1`, `imagen2`, `imagen3`, `imagen4`) VALUES
(1, 'banner1.jpg', 'banner2.jpg', 'banner3.jpg', 'banner4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `usuario`, `clave`) VALUES
(1, 'YOSIP URQUIZO GOMEZ', 'yosip', 'yosip1'),
(2, 'USUARIO INVITADO', 'invitado', 'invitado1'),
(3, 'Christian Ambrosio', 'cjap90', '123456'),
(5, 'Adrian Ambrosio Vargas', 'adrians', '123456'),
(6, 'mery violeta', 'mery163y', '123456'),
(7, 'jeampierre ambrosio', 'cgena2006', '123456'),
(8, 'alexis anchez', 'draco07', '123456'),
(9, 'felix bernal', 'fbernal', '123456'),
(10, 'erika mariela', 'emaa02', '123456'),
(11, 'christian ambrosio', 'xyz', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
