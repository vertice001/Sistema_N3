-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2012 a las 13:48:16
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `campeonato`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arbitros`
--

CREATE TABLE IF NOT EXISTS `arbitros` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `fecha_nac` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `arbitros`
--

INSERT INTO `arbitros` (`id`, `nombre`, `apellido`, `rut`, `fecha_nac`) VALUES
(3, 'd', 'd', '12', '10-05-2003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dt`
--

CREATE TABLE IF NOT EXISTS `dt` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `equipo` varchar(20) NOT NULL,
  `fecha_nac` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Volcar la base de datos para la tabla `dt`
--

INSERT INTO `dt` (`id`, `nombre`, `apellido`, `rut`, `equipo`, `fecha_nac`) VALUES
(100, 'Omar ', 'Labruna', '111', 'Colo Colo', '111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `equipo` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `fundacion` varchar(20) NOT NULL,
  `fono` varchar(20) NOT NULL,
  `sitio_web` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `equipo`, `direccion`, `fundacion`, `fono`, `sitio_web`) VALUES
(1, 'Colo Colo', 'Maraton', '19-04-1925', '111111', 'www.colocolo.cl'),
(6, '1', '1', '1', '10-07-2012', '1'),
(7, '1', '1', '1', '10-06-2012', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadios`
--

CREATE TABLE IF NOT EXISTS `estadios` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `ubicacion` varchar(20) NOT NULL,
  `capacidad` varchar(20) NOT NULL,
  `fundacion` varchar(20) NOT NULL,
  `equipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Volcar la base de datos para la tabla `estadios`
--

INSERT INTO `estadios` (`id`, `nombre`, `ubicacion`, `capacidad`, `fundacion`, `equipo`) VALUES
(100, 'Monumental', 'Maraton 1111', '45000', '1990', 'Colo Colo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE IF NOT EXISTS `estadisticas` (
  `pos` int(3) NOT NULL AUTO_INCREMENT,
  `jugador` varchar(30) NOT NULL,
  `equipo` varchar(20) NOT NULL,
  `pj` int(3) NOT NULL,
  `goles` int(3) NOT NULL,
  `ta` int(3) NOT NULL,
  `tr` int(3) NOT NULL,
  PRIMARY KEY (`pos`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `estadisticas`
--

INSERT INTO `estadisticas` (`pos`, `jugador`, `equipo`, `pj`, `goles`, `ta`, `tr`) VALUES
(1, 'Esteban Paredes', 'Colo Colo', 11, 11, 11, 11),
(2, 'Carlos Muños', 'Colo Colo', 5, 5, 5, 5),
(3, 'Milton Caraglio', 'Rangers', 6, 4, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `informacion` varchar(50000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `info`
--

INSERT INTO `info` (`id`, `informacion`) VALUES
(1, 'Campeonato \r\n  \r\nInformacion  \r\nEl Campeonato Nacional Petrobras de Apertura de Primera División del Fútbol Profesional 2012, o simplemente Torneo de Apertura 2012, es el primer torneo de la temporada 2012 de la primera division del futbol chileno. El torneo comenzó el 27 de enero y finalizará el 23 de junio. Acerca de su modalidad, se jugará una Fase Clasificatoria, donde se enfrentarán todos contra todos en una sola rueda. Los 8 primeros de la tabla de posiciones general accederán a los play-offs o sistema de eliminación directa, en donde los equipos jugarán en cuartos de final, semifinal y final (partidos de ida y vuelta). En la presente edicion participaran 18 equipos. \r\n \r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE IF NOT EXISTS `jugadores` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `fecha_nac` varchar(20) NOT NULL,
  `equipo` varchar(20) NOT NULL,
  `posicion` varchar(20) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1003 ;

--
-- Volcar la base de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre`, `apellido`, `rut`, `fecha_nac`, `equipo`, `posicion`, `nacionalidad`) VALUES
(1000, 'Esteban', 'Paredes', '111', '111', 'Colo Colo', 'Delantero', 'Chileno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presidentes`
--

CREATE TABLE IF NOT EXISTS `presidentes` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `fecha_nac` varchar(20) NOT NULL,
  `equipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `presidentes`
--

INSERT INTO `presidentes` (`id`, `nombre`, `apellido`, `rut`, `fecha_nac`, `equipo`) VALUES
(1, 'Carlos ', 'Tapia', '111', '111', 'Colo Colo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion`
--

CREATE TABLE IF NOT EXISTS `programacion` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(15) NOT NULL,
  `hora` varchar(15) NOT NULL,
  `estadio` varchar(20) NOT NULL,
  `arbitro` varchar(20) NOT NULL,
  `local` varchar(20) NOT NULL,
  `visita` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `programacion`
--

INSERT INTO `programacion` (`id`, `fecha`, `hora`, `estadio`, `arbitro`, `local`, `visita`) VALUES
(1, '10-14-2012', '15:30', 'Monumental', 'Ladron Osses', 'Colo Colo', 'U del Chiste'),
(3, '10-14-2012', '16:00', 'Nacional', 'Claudio Puga', 'Palestino', 'Cobreloa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaposiciones`
--

CREATE TABLE IF NOT EXISTS `tablaposiciones` (
  `pos` int(3) NOT NULL AUTO_INCREMENT,
  `equipo` varchar(20) NOT NULL,
  `pts` int(3) NOT NULL,
  `pj` int(3) NOT NULL,
  `pg` int(3) NOT NULL,
  `pe` int(3) NOT NULL,
  `pp` int(3) NOT NULL,
  `gf` int(3) NOT NULL,
  `gc` int(3) NOT NULL,
  `dif` int(4) NOT NULL,
  PRIMARY KEY (`pos`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `tablaposiciones`
--

INSERT INTO `tablaposiciones` (`pos`, `equipo`, `pts`, `pj`, `pg`, `pe`, `pp`, `gf`, `gc`, `dif`) VALUES
(1, 'Colo Colo', 9, 0, 0, 0, 0, 0, 0, 0),
(2, 'Palestino', 6, 3, 2, 0, 1, 3, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Moderador'),
(3, 'Visita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `clave` int(20) NOT NULL,
  `tipo` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Rut` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `tipo` (`tipo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `usuario`, `clave`, `tipo`, `Nombre`, `Apellido`, `Rut`) VALUES
(1, 'isaac', 123, 1, 'Isaac', 'Arambarri', '17523741-0'),
(2, 'mirko', 123, 2, 'mirko', 'poblete', '11111111-1'),
(3, 'lacra', 321, 3, 'lio', 'messi', '10101010-1'),
(16, '1', 1, 1, '1', '1', '1'),
(17, 'admin', 123, 1, 'Mario', 'Toro', '12345678-9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
