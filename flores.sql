-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2017 a las 07:00:38
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `id_Country` int(11) NOT NULL,
  `detailCountry` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`id_Country`, `detailCountry`) VALUES
(1, 'ECUADOR'),
(2, 'ESPAÑA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `state`
--

CREATE TABLE `state` (
  `id_State` int(11) NOT NULL,
  `detailState` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `state`
--

INSERT INTO `state` (`id_State`, `detailState`) VALUES
(1, 'ACTIVO'),
(2, 'PASIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_User` int(11) NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `id_country` int(11) NOT NULL,
  `city` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `business` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `phone` varchar(17) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_state` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_User`, `email`, `name`, `pass`, `id_country`, `city`, `business`, `phone`, `id_state`) VALUES
(1, 'kevin.carlo@hotmail.com', 'KEVIN CARLO SANCHEZ QUINCHE', '855efeb981e560636a23bf7a1eedc95c16124d05', 1, 'GUAYAQUIL', 'CONSEJO', '+111-111-111-1111', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id_Country`);

--
-- Indices de la tabla `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id_State`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_User`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `country`
--
ALTER TABLE `country`
  MODIFY `id_Country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `state`
--
ALTER TABLE `state`
  MODIFY `id_State` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
