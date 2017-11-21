-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2017 a las 23:27:59
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intercambioschidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idarticulo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `categoria_idcategoria` int(11) DEFAULT NULL,
  `precio_min` float DEFAULT NULL,
  `precio_max` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `nombre`, `categoria_idcategoria`, `precio_min`, `precio_max`) VALUES
(71, 'playeras', NULL, 200, 250),
(72, 'tazas', NULL, 200, 240),
(73, 'X', NULL, 220, 230),
(74, 'nintendo switch', NULL, 1000, 5000),
(75, 'chamarra', NULL, 250, 400),
(76, 'pantalon', NULL, 200, 250),
(77, 'camiseta', NULL, 100, 400),
(78, 'zzzzzzz', NULL, 100, 500),
(79, 'qqqqq', NULL, 100, 400),
(80, 'wwww', NULL, 10, 490),
(81, 'zxcv', NULL, 10, 500),
(82, 'xa', NULL, 10, 500),
(83, 'cero', NULL, 0, 500),
(84, 'nadA', NULL, 0, 500),
(85, 'xcvb', NULL, 0, 500),
(87, 'qa', NULL, 0, 500),
(88, 'u', NULL, 0, 500),
(89, 'xzvzxcgzxf', NULL, 0, 500),
(90, 'nmmnmnnn', NULL, 0, 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `idequipo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio_min` float DEFAULT NULL,
  `precio_max` float DEFAULT NULL,
  `intercambio_idintercambio` int(11) NOT NULL,
  `code` varchar(12) NOT NULL,
  `articulos_max` int(2) DEFAULT NULL,
  `baja` tinyint(1) NOT NULL,
  `lugar` varchar(60) DEFAULT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idequipo`, `nombre`, `precio_min`, `precio_max`, `intercambio_idintercambio`, `code`, `articulos_max`, `baja`, `lugar`, `direccion`, `fecha`, `hora`) VALUES
(18, 'Intercambio Guadalajara', 200, 250, 13, 'csw', 3, 0, '', '', '0000-00-00', NULL),
(19, 'Test', 0, 600, 12, '0380125069', 2, 1, '', '', '0000-00-00', NULL),
(20, 'equipox', 0, 1000, 14, '5135144666', 3, 0, '', '', '0000-00-00', NULL),
(21, 'Mi equipo de prueba 1', 0, 500, 18, '4468182413', 5, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intercambiando`
--

CREATE TABLE `intercambiando` (
  `idintercambiando` int(11) NOT NULL,
  `articulo_idarticulo` int(11) NOT NULL,
  `idusuario_has_equipo_da` int(11) NOT NULL,
  `idusuario_has_equipo_recibe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intercambio`
--

CREATE TABLE `intercambio` (
  `idintercambio` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estatus` varchar(45) NOT NULL COMMENT 'CREADO\nINICIALIZADO\nPAUSADO\nFINALIZADO\nELIMINADO',
  `usuario_idusuario` int(11) NOT NULL,
  `baja` tinyint(1) NOT NULL,
  `lugar` varchar(60) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `intercambio`
--

INSERT INTO `intercambio` (`idintercambio`, `nombre`, `fecha_ini`, `fecha_fin`, `estatus`, `usuario_idusuario`, `baja`, `lugar`, `direccion`, `fecha`, `hora`) VALUES
(11, 'Qualtop Group 2016', '2016-12-01', '2016-12-16', 'CREADO', 71, 1, NULL, NULL, NULL, NULL),
(12, 'Software Insights Intercambio', '2017-10-11', '2017-10-11', 'CREADO', 71, 0, NULL, NULL, NULL, NULL),
(13, 'Nuevo', '2017-11-16', '2017-12-01', 'CREADO', 71, 1, NULL, NULL, NULL, NULL),
(14, 'Mi intercambio', '2017-11-06', '2017-11-24', 'CREADO', 74, 0, NULL, NULL, NULL, NULL),
(15, 'Intercambio Navideño 2017s', '2017-11-07', '2017-11-30', 'CREADO', 74, 0, NULL, NULL, NULL, NULL),
(16, 'Mi intercambio navideño', '2017-11-16', '2017-11-30', 'CREADO', 71, 0, NULL, NULL, NULL, NULL),
(18, 'Mi intercambio navideñox', '2017-11-15', '2017-11-30', 'CREADO', 98, 0, NULL, NULL, NULL, NULL),
(19, 'Mi intercambio nuevo', '2017-11-14', '2017-11-23', 'CREADO', 98, 0, NULL, NULL, NULL, NULL),
(20, 'otro', '2017-11-01', '2017-11-02', 'CREADO', 98, 0, 'xx', 'xx', '2017-11-04', '03:01:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` varchar(45) NOT NULL COMMENT 'LIDER\nMIEMBRO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`) VALUES
('LIDER'),
('MIEMBRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `avatar` varchar(45) DEFAULT NULL,
  `rol_idrol` varchar(45) NOT NULL,
  `estatus` varchar(45) DEFAULT NULL COMMENT 'CREADO\nVALIDADO\nACTIVO\nINACTIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `email`, `password`, `nombres`, `apellidos`, `avatar`, `rol_idrol`, `estatus`) VALUES
(71, 'aide@gmail.com', 'csw', 'Aide', NULL, NULL, 'LIDER', 'CREADO'),
(72, 'cesar@x.com', '7348711852', 'Carlos Alejandro Agredano Martinez', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(73, 'cesar_alonso_m_g@hotmail.com', '8746713689', 'cesar alonso ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(74, 'cmagana@syesoftware.com', '123456', 'Cesar repetido 7 lider', NULL, NULL, 'LIDER', 'CREADO'),
(77, 'cmagana@syeysoiuuftware.com', '123456', 'Cesar repetido 8 lider', NULL, NULL, 'LIDER', 'CREADO'),
(82, 'cmagana@syesoftwarae.com', '123456', 'Cesar repetido 8 lider', NULL, NULL, 'LIDER', 'CREADO'),
(97, 'cmagana@syesoftware.com', '9779748917', 'cesar', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(98, 'cesar_alonso_m_g@hotmail.com', '123456', 'César Alonso', NULL, NULL, 'LIDER', 'CREADO'),
(99, 'cesar@softwareinsights.com.mx', '5819980321', 'cesar', NULL, NULL, 'MIEMBRO', 'CREADO'),
(100, 'funeralelectrico@hotmail.com', '5198980016', 'Alonso', NULL, NULL, 'MIEMBRO', 'CREADO'),
(101, 'cesar.desarrollo.web@gmail.com', '5446980074', 'Magaña', NULL, NULL, 'MIEMBRO', 'CREADO'),
(102, 'cesar@softwareinsights.com.mx', '6162986416', 'x', NULL, NULL, 'MIEMBRO', 'CREADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_articulo`
--

CREATE TABLE `usuario_has_articulo` (
  `idusuario_has_articulo` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `articulo_idarticulo` int(11) NOT NULL,
  `promedio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_has_articulo`
--

INSERT INTO `usuario_has_articulo` (`idusuario_has_articulo`, `usuario_idusuario`, `articulo_idarticulo`, `promedio`) VALUES
(50, 72, 71, 5),
(51, 72, 72, 5),
(53, 73, 72, 5),
(56, 73, 76, 5),
(57, 99, 77, 5),
(64, 99, 83, 5),
(68, 99, 88, 5),
(70, 99, 90, 5),
(71, 99, 83, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_equipo`
--

CREATE TABLE `usuario_has_equipo` (
  `idusuario_has_equipo` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `equipo_idequipo` int(11) NOT NULL,
  `estatus_encuesta` varchar(45) DEFAULT NULL COMMENT 'INICIALIZADA\nFINALIZADA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_has_equipo`
--

INSERT INTO `usuario_has_equipo` (`idusuario_has_equipo`, `usuario_idusuario`, `equipo_idequipo`, `estatus_encuesta`) VALUES
(31, 72, 18, 'CREADO'),
(32, 73, 18, 'PARTICIPA'),
(34, 97, 20, 'CREADO'),
(35, 99, 21, 'NOPARTICIPA'),
(36, 100, 21, 'NOPARTICIPA'),
(37, 101, 21, 'NOPARTICIPA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_like_usuario_articulo`
--

CREATE TABLE `usuario_like_usuario_articulo` (
  `idusuario_like_usuario_articulo` int(11) NOT NULL,
  `usuario_idusuario_vota` int(11) NOT NULL,
  `usuario_idusuario_votado` int(11) NOT NULL,
  `articulo_idarticulo` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_like_usuario_articulo`
--

INSERT INTO `usuario_like_usuario_articulo` (`idusuario_like_usuario_articulo`, `usuario_idusuario_vota`, `usuario_idusuario_votado`, `articulo_idarticulo`, `created_at`) VALUES
(68, 72, 72, 72, '2016-12-01 18:02:53'),
(69, 72, 73, 73, '2016-12-01 18:02:53'),
(71, 73, 73, 73, '2016-12-01 18:02:57'),
(72, 73, 72, 72, '2017-10-16 14:25:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idarticulo`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idequipo`),
  ADD KEY `fk_equipo_intercambio1_idx` (`intercambio_idintercambio`);

--
-- Indices de la tabla `intercambiando`
--
ALTER TABLE `intercambiando`
  ADD PRIMARY KEY (`idintercambiando`) USING BTREE,
  ADD UNIQUE KEY `i0usuarios` (`idusuario_has_equipo_recibe`,`idusuario_has_equipo_da`),
  ADD KEY `fk_intercambiando_articulo1_idx` (`articulo_idarticulo`),
  ADD KEY `fk_intercambiando_usuario_has_equipo1_idx` (`idusuario_has_equipo_da`),
  ADD KEY `fk_intercambiando_usuario_has_equipo2_idx` (`idusuario_has_equipo_recibe`);

--
-- Indices de la tabla `intercambio`
--
ALTER TABLE `intercambio`
  ADD PRIMARY KEY (`idintercambio`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `fk_intercambio_usuario1_idx` (`usuario_idusuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_rol_idx` (`rol_idrol`);

--
-- Indices de la tabla `usuario_has_articulo`
--
ALTER TABLE `usuario_has_articulo`
  ADD PRIMARY KEY (`idusuario_has_articulo`),
  ADD KEY `fk_usuario_has_articulo_articulo1_idx` (`articulo_idarticulo`),
  ADD KEY `fk_usuario_has_articulo_usuario1_idx` (`usuario_idusuario`);

--
-- Indices de la tabla `usuario_has_equipo`
--
ALTER TABLE `usuario_has_equipo`
  ADD PRIMARY KEY (`idusuario_has_equipo`),
  ADD KEY `fk_usuario_has_equipo_equipo1_idx` (`equipo_idequipo`),
  ADD KEY `fk_usuario_has_equipo_usuario1_idx` (`usuario_idusuario`);

--
-- Indices de la tabla `usuario_like_usuario_articulo`
--
ALTER TABLE `usuario_like_usuario_articulo`
  ADD PRIMARY KEY (`idusuario_like_usuario_articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `intercambiando`
--
ALTER TABLE `intercambiando`
  MODIFY `idintercambiando` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de la tabla `intercambio`
--
ALTER TABLE `intercambio`
  MODIFY `idintercambio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT de la tabla `usuario_has_articulo`
--
ALTER TABLE `usuario_has_articulo`
  MODIFY `idusuario_has_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT de la tabla `usuario_has_equipo`
--
ALTER TABLE `usuario_has_equipo`
  MODIFY `idusuario_has_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `usuario_like_usuario_articulo`
--
ALTER TABLE `usuario_like_usuario_articulo`
  MODIFY `idusuario_like_usuario_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_equipo_intercambio1` FOREIGN KEY (`intercambio_idintercambio`) REFERENCES `intercambio` (`idintercambio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `intercambiando`
--
ALTER TABLE `intercambiando`
  ADD CONSTRAINT `fk_intercambiando_articulo1` FOREIGN KEY (`articulo_idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_intercambiando_usuario_has_equipo1` FOREIGN KEY (`idusuario_has_equipo_da`) REFERENCES `usuario_has_equipo` (`idusuario_has_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_intercambiando_usuario_has_equipo2` FOREIGN KEY (`idusuario_has_equipo_recibe`) REFERENCES `usuario_has_equipo` (`idusuario_has_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `intercambio`
--
ALTER TABLE `intercambio`
  ADD CONSTRAINT `fk_intercambio_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`rol_idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_has_articulo`
--
ALTER TABLE `usuario_has_articulo`
  ADD CONSTRAINT `fk_usuario_has_articulo_articulo1` FOREIGN KEY (`articulo_idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_articulo_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_has_equipo`
--
ALTER TABLE `usuario_has_equipo`
  ADD CONSTRAINT `fk_usuario_has_equipo_equipo1` FOREIGN KEY (`equipo_idequipo`) REFERENCES `equipo` (`idequipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_equipo_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
