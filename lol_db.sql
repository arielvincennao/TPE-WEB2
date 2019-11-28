-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2019 a las 01:19:37
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lol_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chars`
--

CREATE TABLE `chars` (
  `id_char` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `id_role` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chars`
--

INSERT INTO `chars` (`id_char`, `name`, `description`, `id_role`) VALUES
(2, 'Yi Fking 1', 'Yi player', 11),
(9, 'Borga', 'Yasuo player', 4),
(12, 'Scyraz', 'Braum player', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(4) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `content` varchar(140) NOT NULL,
  `id_char` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id_comment`, `rating`, `content`, `id_char`) VALUES
(64, 1, 'SOY ADMIN!', 2),
(68, 3, 'Muy piola', 2),
(69, 4, 'Casi perfecta', 2),
(70, 1, 'Ejemplo', 9),
(71, 3, 'Ejemplo', 9),
(72, 5, 'Ejemplo', 9),
(75, 4, 'Hola gente', 12),
(84, 1, 'Ejemplo3', 9),
(85, 1, 'seeee', 2),
(86, 5, 'Ejemplo5', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id_img` int(4) NOT NULL,
  `id_char` int(4) NOT NULL,
  `img_path` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id_img`, `id_char`, `img_path`) VALUES
(30, 9, 'img/uploaded/5bf9c39be4c14.jpg'),
(31, 2, 'img/uploaded/5bf9c3a2f315c.jpg'),
(32, 2, 'img/uploaded/5bf9c3ad0319f.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_role` int(4) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_role`, `name`) VALUES
(4, 'Retador'),
(9, 'Maestro'),
(10, 'Diamante'),
(11, 'Platino'),
(12, 'Oro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `clearance` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `clearance`) VALUES
(2, 'admin@admin', '$2y$10$3qWnugPtXDjnpUqkyL53H.3l7pr41Gprz7hVRIN70j/3rna8OnVya', 'admin'),
(22, 'reg@reg', '$2y$10$TCnOcfyjx0c8MXy8BdQ28OpSLclOJaiy6EGCFYCpFzHfrEYEDWR8S', 'admin'),
(23, 'member@member', '$2y$10$ajAx6s2kuztMmWxdt5dh/u8.//ROR2QCzbQmiaYs2/1pLooFpl/GC', 'member'),
(24, 'root@root', '$2y$10$qwNkAaDzxmKehaUQpJSyYuPXcX5STzaC.r1MJts7WqFhw0VCUtkHa', 'admin'),
(26, 'vincen2222nao@hotmail.com', '$2y$10$IG2HfqoTHmliXuoyBjW2rOeFmD7V6VqQTE80MF.mgo9q2mwBzhRnW', 'member');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chars`
--
ALTER TABLE `chars`
  ADD PRIMARY KEY (`id_char`),
  ADD KEY `id_role` (`id_role`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_char` (`id_char`) USING BTREE;

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_char` (`id_char`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chars`
--
ALTER TABLE `chars`
  MODIFY `id_char` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id_img` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chars`
--
ALTER TABLE `chars`
  ADD CONSTRAINT `chars_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_char`) REFERENCES `chars` (`id_char`) ON DELETE CASCADE;

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_char`) REFERENCES `chars` (`id_char`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
