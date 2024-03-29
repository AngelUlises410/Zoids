-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-11-2023 a las 06:19:51
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zoids`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido_paterno` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido_materno` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `sexo`, `correo`, `telefono`) VALUES
(1, 'tomas raquelino', 'preuss', 'grande ', 'hombre', 'prehistoricos@hotmail.com', '5511111111'),
(2, 'leon ', 'larregui', 'martinez', 'hombre', 'leon@hotmail.com', '5522222222'),
(3, 'angel ', 'jimenez', 'carrales', 'hombre', 'angel@hotmail.com', '5533333333'),
(4, 'Gerard ', 'arthur', 'way', 'hombre', 'mychemical@hotmail.com', '5544444444'),
(5, 'avril', 'ramona', 'levigne', 'Femenino', 'avril@hotmail.com', '5555555555'),
(6, 'Deryck ', 'jayson', 'whibley', 'Hombre', 'deryck@hotmail.com', '5566666666'),
(7, 'william', 'beckket', 'nose', 'Hombre', 'about@hotmail.com', '5577777777'),
(8, 'julian', 'fernando', 'casablancas', 'Hombre', 'thestrokes@hotmail.com', '5588888888'),
(9, 'nick', 'valensi', 'desconocido', 'Hombre', 'guitar@hotmail.com', '5599999999'),
(10, 'james', 'paul', 'Mcartney', 'Hombre', 'beatle@hotmail.com', '5510101010'),
(12, 'justine', 'drew', 'bieberg', 'Hombre', 'justin@hotmail.com', '5566121212'),
(13, 'Katheryn ', 'Elizabeth', 'hudson', 'femenino', 'katy@hotmail.com', '5523232323'),
(14, 'Taylor ', 'alison', 'swift', 'Femenino', 'taylor@hotmaial.com', '5571717173'),
(15, 'Courtney', 'Elizabeth', 'Jines', 'Femenino', 'monkyti@hotmail.com', '5561616161'),
(18, 'Jorge', 'Teillier', 'Sandoval', 'hombre', 'teillier@hotmail.com', '5561611214'),
(20, 'lobo', 'americano', 'americano', 'man', 'man@hotmail.com', '5512122323'),
(22, 'lobo', 'europeo', 'europeo', 'Hombre', 'man@hotmail.com', '5512122322'),
(23, 'lobito', 'asiatico', 'asiatico', 'man', 'icloud@icloud.com', '4412121212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido_paterno` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido_materno` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `edad` int DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(244) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `correo`, `usuario`, `contrasena`) VALUES
(1, 'angel', 'jimenez', 'carrales', 31, 'oyiye_mexicano_gipo@hotmail.com', 'angel', '12345'),
(2, 'ester', 'martinez', 'cianca', 28, 'abby@hotmail.com', 'tete', 'hola');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
