-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-07-2024 a las 23:56:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajoPractico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombreCompleto` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `fechaDeCreacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombreCompleto`, `correo`, `contraseña`, `fechaDeCreacion`) VALUES
(1, 'Ivan leguiza', 'leguizaivan@hotmail.com', '$2y$10$nhgP4jbRdFKYSrANSdhFReJP7MMLvqgkjlFqxtSHGY4o2Xtk2tV8C', '2024-07-12 03:41:04'),
(2, 'Ivan leguizas', '12@hotmai.com', '$2y$10$CvZWWzncBGs7VWEumI7Zi.oe2s7lkTRjx3FyOnIQbpQqWYmxa1Uxe', '2024-07-12 03:43:12'),
(3, 'Ivan leguizasa', '12@hotmail.com', '$2y$10$n1zdiUrhMmw5XtWlc7ASgOZONHt3lDirGMy7mDAhx728gC4Fxdz3a', '2024-07-12 03:46:11'),
(4, 'Ivan Leguiza Prueba', 'leguizaivanprueba@gmail.com', '$2y$10$e.FTpcb.xPVFUI/CPN98u.XENQdOjxL847XIwRhXXFAfLuvJBtKQG', '2024-07-12 21:15:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
