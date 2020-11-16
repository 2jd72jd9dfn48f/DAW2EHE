-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2020 a las 23:10:50
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tours`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'categoria1'),
(2, 'categoria2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201116201746', '2020-11-16 21:30:51', 74),
('DoctrineMigrations\\Version20201116211137', '2020-11-16 22:11:56', 214);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tour`
--

INSERT INTO `tour` (`id`, `titulo`, `imagen`, `description`, `date`, `days`, `price`, `categoria_id`) VALUES
(1, 'Proin Gravida Nibhvel Lorem Quis Bind', 'tours-03.jpg', 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.', '0000-00-00', 'Duration: 8 days', '$2,200', 1),
(2, 'Proin Gravida Nibhvel Lorem Quis Bind', 'tours-04.jpg', 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.', '0000-00-00', 'Duration: 9 days', '$1,800', 1),
(3, '>Proin Gravida Nibhvel Lorem Quis Bind', 'tours-05.jpg', 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.', '0000-00-00', 'Duration: 8 days', '$1,600', 1),
(4, '>Proin Gravida Nibhvel Lorem Quis Bind', 'tours-06.jpg', 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.', '0000-00-00', 'Duration: 5 days', '$1,200', 1),
(5, '>Proin Gravida Nibhvel Lorem Quis Bind', 'index-03.jpg', 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.', '0000-00-00', 'Duration: 4 days', '$1,700', 2),
(6, '>Proin Gravida Nibhvel Lorem Quis Bind', 'index-04.jpg', 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.', '0000-00-00', 'Duration: 7 days', '$1,400', 2),
(7, '>Proin Gravida Nibhvel Lorem Quis Bind', 'index-05.jpg', 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.', '0000-00-00', 'Duration: 9 days', '$1,800', 2),
(8, '>Proin Gravida Nibhvel Lorem Quis Bind', 'index-06.jpg', 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.', '0000-00-00', 'Duration: 4 days', '$1,200', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6AD1F9693397707A` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `FK_6AD1F9693397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;