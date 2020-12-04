-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2020 a las 04:54:44
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `micafecito`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `admin_change` (IN `user` VARCHAR(50))  IF (select admin from usuario WHERE username=user) = 0 THEN
	UPDATE usuario SET admin = 1 WHERE username=user AND admin = 0;
ELSE
	UPDATE usuario SET admin = 0 WHERE username=user AND admin = 1;
END IF$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(11) NOT NULL,
  `usernameC` varchar(50) DEFAULT NULL,
  `platilloC` int(11) DEFAULT NULL,
  `asunto` enum('sugerencia','queja','platillo','otro') DEFAULT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idComentario`, `usernameC`, `platilloC`, `asunto`, `mensaje`) VALUES
(3, '19310150', 1, 'platillo', 'asd'),
(4, '19310150', NULL, 'queja', 'ttyt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillo`
--

CREATE TABLE `platillo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `porcion` int(11) NOT NULL,
  `precio` float NOT NULL,
  `categoria` enum('caliente','frio','bebida','reposteria') DEFAULT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platillo`
--

INSERT INTO `platillo` (`id`, `nombre`, `porcion`, `precio`, `categoria`, `descripcion`, `imagen`) VALUES
(1, 'Cafe ingles', 300, 80, 'caliente', 'Café clásico americano recien hecho', '../img/plat/americano.jpg'),
(2, 'Café frapuchino', 300, 90, 'caliente', 'Café con leche molido con hielo', '../img/plat/frapuchino.jpg'),
(3, 'Chocolate', 150, 60, 'caliente', 'Chocolate méxicano recien hecho', '../img/plat/chocolate.jpg'),
(4, 'Malteada', 500, 150, 'bebida', 'Malteada de fresa estilo americana', '../img/plat/malteada.jpg'),
(5, 'Café de Olla', 300, 80, 'caliente', 'Café de olla con especias aromatizantes', '../img/plat/olla.jpg'),
(6, 'Café expresso', 150, 50, 'caliente', 'Café concentrado listo extra caliente', '../img/plat/expresso.jpg'),
(7, 'Cold Brew', 300, 90, 'frio', 'Café con leche sobre hielo', '../img/plat/cold.jpg'),
(8, 'Café capuchino', 80, 300, 'caliente', 'Café clásico con leche y espuma', '../img/plat/capuchino.jpg'),
(9, 'Galletas de Corazón', 100, 50, 'reposteria', 'Ricas galletas rellenas de mermelada', '../img/plat/galletas.jpg'),
(10, 'Galletas de Chispas de Chocolate', 250, 100, 'reposteria', 'La especialidad de la casa', '../img/plat/galletas_chispas.png'),
(11, 'Pastel Napolitano', 250, 150, 'reposteria', 'Pastel de fresa, vainilla y chocolate', '../img/plat/napolitano.jpg'),
(12, 'Té', 150, 30, 'bebida', 'Verde, negro o de frutos rojos', '../img/plat/te.jpg'),
(13, 'Pastel de Chocolate', 500, 250, 'reposteria', 'Rico pastel de chocolate', '../img/plat/pchocolate.jpg'),
(14, 'Limonada', 250, 30, 'bebida', 'Rica y fresca limonada', '../img/plat/limonada.jpg'),
(15, 'Pay de Queso', 150, 50, 'reposteria', 'Rico pay de queso', '../img/plat/578E5F9F-6DD7-44B5-BCFE-F4B0D0177382.jpg'),
(16, 'Agua', 500, 10, 'bebida', 'Agua natural refrescante', '../img/plat/agua.jpeg'),
(17, 'Juego Verde', 300, 20, 'bebida', 'Rico Jugo', '../img/plat/verde.jpg'),
(18, 'Jugo de Naranja', 300, 15, 'bebida', 'Fresco y natural', '../img/plat/NARANJA.jpg'),
(19, 'dsa', 23, 213, 'reposteria', 'asd', '../img/plat/64298a42c0cb1494e76493bd4d019289.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `username` varchar(50) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`username`, `correo`, `contraseña`, `admin`) VALUES
('19310150', 'a@hotmail.com', '1234', 1),
('fghfghfgh', 'dfsdfsd', 'sdfsdfsd', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vercomentario`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vercomentario` (
`usernameC` varchar(50)
,`asunto` enum('sugerencia','queja','platillo','otro')
,`nombre` varchar(50)
,`mensaje` text
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vercomentario`
--
DROP TABLE IF EXISTS `vercomentario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vercomentario`  AS  select `comentario`.`usernameC` AS `usernameC`,`comentario`.`asunto` AS `asunto`,`platillo`.`nombre` AS `nombre`,`comentario`.`mensaje` AS `mensaje` from (`comentario` left join `platillo` on((`comentario`.`platilloC` = `platillo`.`id`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `usernameC` (`usernameC`),
  ADD KEY `platilloC` (`platilloC`);

--
-- Indices de la tabla `platillo`
--
ALTER TABLE `platillo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `platillo`
--
ALTER TABLE `platillo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`usernameC`) REFERENCES `usuario` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`platilloC`) REFERENCES `platillo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
