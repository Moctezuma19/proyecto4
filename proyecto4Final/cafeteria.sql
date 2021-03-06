-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-06-2016 a las 14:07:00
-- Versión del servidor: 5.7.13-log
-- Versión de PHP: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `password` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`password`) VALUES
('lolo');

-- --------------------------------------------------------
CREATE TABLE `pagos` (
 `id` varchar(10) DEFAULT NULL,
 `fecha` varchar(255) DEFAULT NULL,
 `cantidad` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id` varchar(10) NOT NULL DEFAULT '',
  `nombre` varchar(255) DEFAULT 'nombre',
  `apellido` varchar(255) DEFAULT 'apellido'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id`, `nombre`, `apellido`) VALUES
('abcdefghij', 'mike', 'miko'),
('asdfghjkll', 'pl', 'pl'),
('qwertyuiop', 'lolo', 'lale'),
('sdfghjklop', 'mike', 'miko'),
('zxcvbnmyui', 'po', 'pl'),
('zxcvfdswer', 'mike', 'moko');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `nombre` varchar(255) NOT NULL DEFAULT 'p',
  `precio` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`nombre`, `precio`) VALUES
('cafe_americano', 16),
('cafe_capuccino', 20),
('cafe_espresso', 14),
('chocolate', 20),
('crepas_de_tortilla_de_harina', 11),
('crepas_de_tortilla_de_maiz', 15),
('licuado_de_fresa', 17),
('licuado_de_guayaba', 15),
('licuado_de_platano', 15),
('pastel_de_elote', 30),
('pastel_de_limon', 33),
('pastel_imposible', 40),
('te_de_canela', 11),
('te_de_limon', 10),
('te_helado', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `id` varchar(10) NOT NULL DEFAULT '',
  `fecha` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`id`, `fecha`) VALUES
('1234567890', '13-11-1023'),
('asdfghjkll', '14-09-2016'),
('qwertyuiop', '14-09-2016'),
('zxcvbnmyui', '14-09-2016');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
