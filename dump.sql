-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 15-06-2014 a las 17:15:36
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `dokifytest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresas`
--

CREATE TABLE `Empresas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `sector` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `Empresas`
--

INSERT INTO `Empresas` (`id`, `nombre`, `sector`) VALUES
(1, 'Empresa uno', 'Informática'),
(2, 'Empresa dos', 'Construcción'),
(4, 'Empresa cuatro', 'Tecnologías'),
(5, 'Empresa cinco', 'Telecomunicaciones'),
(6, 'Empresa seis', 'Automoción'),
(7, 'Empresa siete', 'Energéticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Providers`
--

CREATE TABLE `Providers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `Providers`
--

INSERT INTO `Providers` (`id`, `empresa_id`, `cliente_id`) VALUES
(1, 1, 2),
(10, 5, 1),
(11, 1, 4),
(13, 7, 1),
(15, 7, 6);
