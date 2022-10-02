-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2022 a las 15:50:17
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendajuego`
--
CREATE DATABASE IF NOT EXISTS `tiendajuego` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tiendajuego`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(255) NOT NULL,
  `rut_user` varchar(15) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `total_pre` int(11) NOT NULL,
  `fec_compra` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_prod` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `rut_user`, `cantidad`, `total_pre`, `fec_compra`, `id_prod`) VALUES
(4, '20.999.999.9', 1, 30000, '2022-10-02 07:51:57', 1),
(5, '20.999.999.9', 1, 54000, '2022-10-02 07:52:52', 3),
(6, '18.999.999.9', 1, 64000, '2022-10-02 09:06:26', 6),
(9, '20.999.999.9', 1, 22000, '2022-10-02 10:26:50', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(255) NOT NULL,
  `nom_prod` varchar(100) NOT NULL,
  `pre_prod` varchar(10) NOT NULL,
  `categ_prod` varchar(20) NOT NULL,
  `desc_prod` varchar(150) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `nom_prod`, `pre_prod`, `categ_prod`, `desc_prod`, `img`) VALUES
(1, 'Dark Souls ps4', '30.000', 'Juegos ps4', 'Desarrollado por FromSoftware Inc., permite a los jugadores explorar, como nunca hasta ahora, la retorcida tierra antigua de Lordran en el primer títu', 'darksouls.jpg'),
(2, 'Mortal Combat 11', '25.000', 'Juegos ps4', 'Mortal Kombat 11 es la última entrega de la franquicia aclamada por la crítica, que brinda una experiencia más profunda y más personalizada que nunca ', 'mortal11.jpg'),
(3, 'God of war:Ragnarok', '54.000', 'Juegos ps4', 'Juntos, Kratos y Atreus se aventuran en cada uno de los nueve reinos en busca de respuestas mientras las fuerzas de Asgard se preparan para la guerr', 'ragnarok.jpg'),
(4, 'Resident Evil: Village', '22.000', 'Juegos ps4', 'Ambientado unos pocos años después de los eventos horribles del Resident Evil 7: Biohazard, aclamado por la crítica, la nueva historia comienza con Et', 'village.jpg'),
(5, 'Little Nightmares II ', '12.000', 'Juegos ps4', 'Little Nightmares II es un juego de aventura de suspense en el que juegas como Mono, un joven chico atrapado en un mundo que ha sido tergiversado por ', 'nightmares2.jpg'),
(6, 'Super Smash Bros', '64.000', 'Juegos consola', 'Luchadores y mundos de juego míticos colisionan en el enfrentamiento definitivo: ¡una nueva entrada de la serie Super Smash Bros. para Nintendo Switch', 'smash.jpg'),
(7, 'Super Mario Party Switch', '55.000', 'Juegos ps4', '¡La serie Mario Party llega al sistema Nintendo Switch con diversión súper cargada para todos! El estilo original del juego de mesa ha sido mejorado c', 'marioparty.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `rut_user` varchar(15) NOT NULL,
  `pass_user` varchar(12) NOT NULL,
  `nom_user` varchar(30) NOT NULL,
  `ape_user` varchar(30) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `tel_user` varchar(14) NOT NULL,
  `dom_user` varchar(50) NOT NULL,
  `id_historial` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`rut_user`, `pass_user`, `nom_user`, `ape_user`, `email_user`, `tel_user`, `dom_user`, `id_historial`) VALUES
('18.999.999.9', '123', 'Patricio ', 'Castillo Gutierrez', 'patriciocastillo@examenweb.com', '+56999999999', 'Santiago de chile', 2),
('20.999.999.9', '123', 'felipe enrique', 'salinas riveros', 'felipesalinas@examenweb.com', '+56999999999', 'Santiago de chile', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `rut_user` (`rut_user`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`rut_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `productos` (`id_prod`) ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_3` FOREIGN KEY (`rut_user`) REFERENCES `users` (`rut_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
