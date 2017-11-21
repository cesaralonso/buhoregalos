-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2017 a las 21:48:11
-- Versión del servidor: 5.5.51-38.2
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `wwwbuhor_buhoregalos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `idarticulo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `categoria_idcategoria` int(11) DEFAULT NULL,
  `precio_min` float DEFAULT NULL,
  `precio_max` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `nombre`, `categoria_idcategoria`, `precio_min`, `precio_max`) VALUES
(71, 'Playeras', NULL, 250, 300),
(72, 'Tazas', NULL, 250, 300),
(73, 'Gorras', NULL, 250, 300),
(77, 'Carteras', NULL, 250, 300),
(78, 'Pashmina', NULL, 250, 300),
(79, 'Tarros para Chela', NULL, 250, 300),
(80, 'Suéter', NULL, 250, 300),
(81, 'Blusas', NULL, 250, 300),
(82, 'Audífonos Diadema', NULL, 250, 300),
(83, 'Cosas Frikis', NULL, 250, 300),
(84, 'algun articulo de pokémon(wobbuffet)', NULL, 250, 300),
(85, 'Audifonos Diadema Bluetooth Manos Libres ', NULL, 250, 300),
(86, 'Funko Pop star wars', NULL, 250, 300),
(87, 'Backpack', NULL, 250, 300),
(88, 'Mascara anti contaminación negra para bici ', NULL, 250, 250),
(90, 'Libro Véndele a la mente, no a la gente de Jü', NULL, 250, 300),
(91, 'Libro Padre Rico, Padre Pobre de Robert Kiyos', NULL, 250, 300),
(92, 'Cartera', NULL, 250, 300),
(93, 'Libro de Paco Ignacio Taibo II (cualquiera)', NULL, 250, 300),
(94, 'algun articulo de Princess Peach o Bowser', NULL, 250, 300),
(95, 'Backpack laptop', NULL, 250, 300),
(96, 'Fragancia de bath & body Works', NULL, 250, 300),
(97, 'pantunflas de hello kitty', NULL, 250, 300),
(100, 'body  de bath & body works', NULL, 250, 300),
(101, 'sudarera color negro', NULL, 250, 300),
(102, 'funko pop minion or tazmania or mickey', NULL, 250, 300),
(103, 'Tarjeta de Regalo Steam o PaysafeCard', NULL, 250, 300),
(104, 'Monedero electronico de Zara', NULL, 250, 300),
(105, 'Ventilador para Laptop Thermaltake', NULL, 250, 300),
(106, 'NFL - Steelers', NULL, 250, 300),
(107, 'Joyeria de Plata', NULL, 250, 300),
(108, 'Bolsa de mano', NULL, 250, 300),
(109, 'Camisa estilo polo (negra o roja)', NULL, 250, 300),
(110, 'Funda para celular (galaxy j7)', NULL, 250, 300),
(111, 'mouse inalambrico capitan america y usb capit', NULL, 250, 300),
(112, 'Gorra NFL (Raiders)', NULL, 250, 300),
(113, 'Pelicula (Deadpool)', NULL, 250, 300),
(114, 'Balon de futbol americano', NULL, 250, 300),
(115, 'Bolsa Negra Mediana ', NULL, 250, 300),
(116, 'Playera negra', NULL, 250, 300),
(118, 'Cartera negra con varios compartimientos', NULL, 250, 300),
(119, 'Termo para café fashion', NULL, 250, 300),
(120, 'bocinas bluetooth', NULL, 250, 300),
(121, 'libro LOS AÑOS DE PEREGRINACION DEL CHICO SIN', NULL, 280, 300),
(122, 'Tarjeta de Regalo Zara', NULL, 250, 300),
(123, 'Tarjeta de regalo Liverpool', NULL, 250, 300),
(124, 'Lonchera', NULL, 250, 300),
(125, 'Thermo Fresón', NULL, 250, 300),
(126, 'Tarro de madera para Cerveza', NULL, 250, 300),
(127, 'Tarro de madera estilo medieval para Cerveza', NULL, 250, 300),
(128, 'Cartera negra o cafe sin estampados ', NULL, 250, 300),
(129, 'Bolsa Blanca, Sin estampados', NULL, 250, 300),
(130, 'Bolsa blanca media, sin estampados ', NULL, 250, 300),
(131, 'Funko pop breaking bad (NO HEISENBERG ESE YA ', NULL, 250, 300),
(132, 'USB', NULL, 250, 300),
(133, 'Pashmina de color rojo larga sin brillos  ', NULL, 250, 300),
(134, 'Cartera de Dama grande con varios compartimen', NULL, 250, 300),
(135, 'sueter negro cuello V talla grande', NULL, 250, 300),
(136, 'Bolsa negra mediana (No estoperoles, No brill', NULL, 250, 300),
(141, 'Botella de WHISKEY JACK DANIEL`S HONEY', NULL, 250, 300),
(143, 'CD Korn - The serenity of suffering', NULL, 250, 300),
(144, 'Camisa deportiva Barcelona o Real Madrid', NULL, 250, 300),
(145, 'Botella tequila Corralejo', NULL, 250, 300),
(146, 'Reproductor de USB para Automovil (transmisió', NULL, 250, 300),
(147, 'Libro Pequeño Cerdo Capitalista de Sofía Mací', NULL, 250, 300),
(148, 'un libro', NULL, 250, 300),
(149, 'Pantunflas de animalito, de preferencia de pu', NULL, 250, 300),
(150, 'Bolsa  negra  mediana sin estampados', NULL, 280, 300),
(151, 'cobija', NULL, 250, 300),
(152, 'orejeras', NULL, 250, 300),
(153, 'Audifonos', NULL, 250, 300),
(154, 'Mouse Inalambrico', NULL, 250, 300),
(155, 'Rompecabezas de 1000 piezas ', NULL, 250, 300),
(156, 'Suéter sin estampados', NULL, 250, 300),
(157, 'licor de almendra frangelico', NULL, 250, 300),
(158, 'Ay muchas cosas... Wuuuuuuuuuuu!', NULL, 250, 300),
(159, 'Libro Artificial Intelligence: A Modern Appro', NULL, 250, 300),
(162, 'Libro de Inteligencia Artificial', NULL, 250, 300),
(167, 'Libro de Robert Kiyosaki (menos "El cuadrante', NULL, 250, 300),
(170, 'Pashminas de un color parejo café, roja o azu', NULL, 250, 300),
(171, 'Funko Pop Minion, Dragon Ball o Tazmania', NULL, 250, 300),
(172, 'Guantes negros', NULL, 10, 50),
(173, 'Chocolate Ferrero ', NULL, 10, 50),
(174, 'Bufanda', NULL, 10, 50),
(175, '3 kinder felices n.n', NULL, 10, 50),
(176, 'Libreta', NULL, 100, 200),
(177, 'Agenda', NULL, 100, 200),
(178, 'Skin Galio', NULL, 10, 200),
(179, 'Skin syndra', NULL, 10, 200),
(180, 'Skin elise', NULL, 10, 200),
(181, 'Skin gnar', NULL, 10, 200),
(182, 'Cofres :3 ', NULL, 10, 200),
(183, 'camisa', NULL, 100, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `idequipo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio_min` float DEFAULT NULL,
  `precio_max` float DEFAULT NULL,
  `intercambio_idintercambio` int(11) NOT NULL,
  `code` varchar(12) NOT NULL,
  `articulos_max` int(2) DEFAULT NULL,
  `baja` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idequipo`, `nombre`, `precio_min`, `precio_max`, `intercambio_idintercambio`, `code`, `articulos_max`, `baja`) VALUES
(18, 'Intercambio Guadalajara', 200, 250, 11, 'csw', 3, 0),
(19, 'INTERCAMBIO GUADALAJARA 2017', 250, 300, 12, '', 3, 0),
(20, 'INTERCAMBIO CDMX 2017', 250, 300, 13, '', 3, 0),
(21, 'Easy English 7-9', 10, 50, 14, '', 5, 0),
(22, 'Desarrollo', 100, 300, 15, '2946151294', 2, 0),
(23, 'X', 0, 5000, 15, '7121158075', 1, 1),
(24, 'Mi equipo prueba', 0, 1000, 16, '7382161915', 3, 1),
(25, 'Desarrolladores', 0, 100, 17, '1293172157', 5, 1),
(26, 'Test', 100, 200, 12, '', 2, 1),
(27, 'Newpi a lolear', 10, 200, 14, '3879147877', NULL, 0),
(28, 'TEST', 100, 200, 12, '7878127875', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intercambiando`
--

CREATE TABLE IF NOT EXISTS `intercambiando` (
  `idintercambiando` int(11) NOT NULL,
  `articulo_idarticulo` int(11) NOT NULL,
  `idusuario_has_equipo_da` int(11) NOT NULL,
  `idusuario_has_equipo_recibe` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `intercambiando`
--

INSERT INTO `intercambiando` (`idintercambiando`, `articulo_idarticulo`, `idusuario_has_equipo_da`, `idusuario_has_equipo_recibe`) VALUES
(63, 177, 200, 201),
(64, 176, 201, 200),
(65, 177, 219, 220),
(66, 176, 220, 219);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intercambio`
--

CREATE TABLE IF NOT EXISTS `intercambio` (
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `intercambio`
--

INSERT INTO `intercambio` (`idintercambio`, `nombre`, `fecha_ini`, `fecha_fin`, `estatus`, `usuario_idusuario`, `baja`, `lugar`, `direccion`, `fecha`, `hora`) VALUES
(11, 'Qualtop Group 2016', '2016-12-01', '2016-12-16', 'CREADO', 71, 0, NULL, NULL, NULL, NULL),
(12, 'INTERCAMBIOS QUALTOP GROUP GDL', '2017-11-17', '2017-12-08', 'CREADO', 74, 0, NULL, NULL, NULL, NULL),
(13, 'INTERCAMBIOS QUALTOP GROUP CDMX', '2017-11-17', '2017-12-15', 'CREADO', 74, 0, NULL, NULL, NULL, NULL),
(14, 'Easy English', '2017-11-09', '2017-11-30', 'CREADO', 212, 0, NULL, NULL, NULL, NULL),
(15, 'Navidad 2016', '2017-11-15', '2017-11-30', 'CREADO', 215, 0, NULL, NULL, NULL, NULL),
(16, 'Intercambio prueba 2017', '2017-11-15', '2017-11-30', 'CREADO', 220, 1, NULL, NULL, NULL, NULL),
(17, 'Intercambio 2017', '2017-11-07', '2017-11-30', 'CREADO', 268, 1, NULL, NULL, NULL, NULL),
(18, 'Test', '2017-11-14', '2017-12-08', 'CREADO', 74, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
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

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `avatar` varchar(45) DEFAULT NULL,
  `rol_idrol` varchar(45) NOT NULL,
  `estatus` varchar(45) DEFAULT NULL COMMENT 'CREADO\nVALIDADO\nACTIVO\nINACTIVO'
) ENGINE=InnoDB AUTO_INCREMENT=291 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `email`, `password`, `nombres`, `apellidos`, `avatar`, `rol_idrol`, `estatus`) VALUES
(71, 'aide@gmail.com', 'csw', 'Aide', NULL, NULL, 'LIDER', 'CREADO'),
(74, 'aide.yunis@qualtop.com', 'yunisaide', 'AIDE CAROLINA YUNIS DÍAZ', NULL, NULL, 'LIDER', 'CREADO'),
(75, 'racosta@syesoftware.com', '1445740511', 'ACOSTA ASCENCIO RA ALBERTO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(76, 'aagredano@syesoftware.com', '', 'AGREDANO MARTINEZ CARLOS ALEJANDRO', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(83, 'kanguis@syesoftware.com', '3325749042', 'ANGUIS MURILLO KARLA VERONICA', NULL, NULL, 'MIEMBRO', 'CREADO'),
(84, 'raponte@syesoftware.com', '2190748941', 'APONTE MELCHOR RAUL IGNACIO ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(85, 'marreola@qualtop.com', '1607741616', 'ARREOLA GONZALEZ MAURICIO RODOLFO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(86, 'ebarba@syesoftware.com', '6731744823', 'BARBA PEREZ EDGAR GERMAN', NULL, NULL, 'MIEMBRO', 'CREADO'),
(87, 'dielmagluis.mb@gmail.com', '0567748832', 'BARCENA SANCHEZ LUIS MAGDIEL', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(88, 'mbarcena@qualtop.com', '7035743843', 'BARCENA SANCHEZ MIRIAM', NULL, NULL, 'MIEMBRO', 'CREADO'),
(89, 'berenice.barocio@qualtop.com', '8335744923', 'BAROCIO RAMÍREZ BERENICE ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(90, 'rbonilla@qualtop.com', '2148743940', 'BONILLA GARAY ROSA MARIA', NULL, NULL, 'MIEMBRO', 'CREADO'),
(91, 'oborden@syesoftware.com', '8462747008', 'BORDEN ANGLES OSCAR', NULL, NULL, 'MIEMBRO', 'CREADO'),
(92, 'fcamacho@qualtop.com', '0475741886', 'CAMACHO TRUJILLO FATIMA GUADALUPE ', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(97, 'icastro@syesoftware.com', '0801741999', 'CASTRO SÁNCHEZ ÍCARO RAMSES ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(99, 'acontreras@qualtop.com', '0050742687', 'CONTRERAS CAMACHO DAN ALAN', NULL, NULL, 'MIEMBRO', 'CREADO'),
(100, 'hdelatorre@qualtop.com', '9052741288', 'DE LA TORRE ACEVEDO HARIM', NULL, NULL, 'MIEMBRO', 'CREADO'),
(102, 'jflores@qualtop.com', '', 'FLORES DE LA CRUZ JOSÉ', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(107, 'agarcia@qualtop.com', '6615745169', 'GARCÍA TRUJILLO ARMANDO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(108, 'lgaribaldo@syesoftware.com', '3382744495', 'GARIBALDO TORRES NORMA LILIANA ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(110, 'lgomezs@syesoftware.com', '2433740448', 'GOMEZ SANTOSCOY LEOPOLDO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(112, 'amgonzalez@syesoftware.com', '7620745433', 'GONZALEZ CASTAÑEDA AGAR MARGARITA	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(115, 'ggonzalez@qualtop.com', '3366746193', 'GONZALEZ RAMOS ANA GABRIELA	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(116, 'legracia@syesoftware.com', '', 'GRACIA ORTEGA LUZ ESTHELA ', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(119, 'agutierrez@syesoftware.com', '6994748355', 'GUTIERREZ GUTIERREZ MIGUEL ALEJANDRO', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(120, 'bgutierrez@syesoftware.com', '1452740830', 'GUTIERREZ PRADO LEONARDO	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(122, 'ghernandez@qualtop.com', '4953749611', 'HERNANDEZ CARRILLO MARIA GUADALUPE	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(126, 'fleanos@syesoftware.com', '5396746408', 'LEAÑOS HUERTA FERNANDO JESSE	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(130, 'jmacedo@syesoftware.com', '1234567890', 'MACEDO TEJEDA JESUS	', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(132, 'vmarquez@qualtop.com', '3194744507', 'MARQUEZ VARGAS VERONICA	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(137, 'emartinez@syesoftware.com', '6020747609', 'MARTINEZ MENDOZA MARIA ELENA	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(138, 'amayon@syesoftware.com', '8946744209', 'MAYON VILLALOBOS ARMANDO 	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(139, 'amelchor@syesoftware.com', '1009745936', 'MELCHOR CENTENO ABRAHAM', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(141, 'mramos@qualtop.com', '0270748163', 'MÉNDEZ RAMOS MAYTE	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(142, 'fmero@syesoftware.com', '3800746312', 'MERO RAMIREZ FABIOLA	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(143, 'rmorales@qualtop.com', '2582749295', 'MORALES VILLA RAFAEL	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(149, 'sortiz@qualtop.com', '1607742129', 'ORTIZ SALDIVAR SUSANA GUADALUPE	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(151, 'jperales@syesoftware.com', '6852742969', 'PERALES RIOS JORGE	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(152, 'mpimentel@syesoftware.com', '1941748307', 'PIMENTEL BECERRA MIGUEL ANGEL	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(154, 'rpulido@qualtop.com', '4228746419', 'PULIDO MARTINEZ RENE	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(159, 'ireynoso@qualtop.com', '1897744017', 'REYNOSO CRUZ  IXCHEL	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(163, 'krojas@syesoftware.com', '2612743798', 'ROJAS SALAS KALY MANUEL	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(164, 'iromero@syesoftware.com', '7257749862', 'ROMERO TORRES IAN ALBERTO	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(165, 'druiz@syesoftware.com', '2668748040', 'RUIZ CONTRERAS DAISY ARELY	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(167, 'snavarro@syesoftware.com', '7855749307', 'SALVADOR NAVARRO TZINTZUN	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(168, 'gsanchez@syesoftware.com', '6920742123', 'SANCHEZ DE TAGLE GARCIA CESAR 	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(169, 'asanchez@qualtop.com', '7921749424', 'SANCHEZ PLASCENCIA MARIA ANGELICA	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(170, 'rsanchez@syesoftware.com', '2522741992', 'SÁNCHEZ VAZQUEZ RAMÓN DE JESUS	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(171, 'csantos@syesoftware.com', '3704741839', 'SANTOS GARCÍA CHRISTIAN 	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(172, 'fsierra@qualtop.com', '8441743607', 'SIERRA GRACIA FELIPE DE JESUS	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(173, 'jsilva@syesoftware.com', '7200741110', 'SILVA FIGUEROA JONATHAN 	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(174, 'asosa@qualtop.com', '6232742416', 'SOSA QUEZADA ARIANA NAYELI	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(175, 'rtoledo@qualtop.com', '9281743295', 'TOLEDO ESPINOZA RODRIGO	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(177, 'lvaldez@qualtop.com', '4587742232', 'VALDEZ FELIX LILIANA ELIZABETH	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(179, 'rvalle@qualtop.com', '3526747299', 'VALLE HERNANDEZ LAURA ROCIO	', NULL, NULL, 'MIEMBRO', 'CREADO'),
(180, 'mvazquez@syesoftware.com', '4896748044', 'VAZQUEZ GUERRERO MARCO ANTONIO', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(186, 'rzuniga@syesoftware.com', '', 'ZUÑIGA DURÁN RAYMUNDO', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(187, 'ayunis@qualtop.com', '4805748467', 'YUNIS DIAZ AIDE CAROLINA ', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(188, 'cesar@x.com', '123', 'cesar', NULL, NULL, 'MIEMBRO', 'CREADO'),
(192, 'lnhaux@qualtop.com', '0929745026', 'LEONARDO N´HAUX', NULL, NULL, 'MIEMBRO', 'CREADO'),
(193, 'ajatuff@syesoftware.com', '3831740048', 'ARIEL JATUFF', NULL, NULL, 'MIEMBRO', 'CREADO'),
(209, 'cesar@gmail.com', '84f742a5a84aea478bf0689cd02cbe706ff1c9fb', 'Gabriela Tamayo', NULL, NULL, 'LIDER', 'CREADO'),
(211, 'gabriela.tamayo@hotmail.com', 'gabrielathdo', 'Gabriela Tamayo', NULL, NULL, 'LIDER', 'CREADO'),
(212, 'cox.06@hotmail.com', 'juanca06', 'Juan Carlos Barragan Reyes', NULL, NULL, 'LIDER', 'CREADO'),
(214, 'coxxer.06@gmail.com', '44592125755', 'Juan Carlos', NULL, NULL, 'MIEMBRO', 'MODIFICADO'),
(215, 'cesar@softwareinsightsl.com', '123456', 'César', NULL, NULL, 'LIDER', 'CREADO'),
(216, 'cesar.desarrollo.web@gmail.com', '42812154761', 'Cesar', NULL, NULL, 'MIEMBRO', 'CREADO'),
(220, 'cmagana@syesoftware.com', '123456', 'César Repetido 2', NULL, NULL, 'LIDER', 'CREADO'),
(226, 'sagosto@syesoftware.com', '4785742166', 'AGOSTO ENRIQUEZ SERGIO ALFREDO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(227, 'calonso@syesoftware.com', '8514748841', 'Alonso Barba Christian Francisco ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(228, 'aarango@syesoftware.com', '7665743929', 'ARANGO LOPEZ ANTONIO FELICIANO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(229, 'earritola@syesoftware.com', '8216740563', 'ARRITOLA URIARTE EMMANUEL', NULL, NULL, 'MIEMBRO', 'CREADO'),
(230, 'ecardenas@syesoftware.com', '3459748725', 'CARDENAS NISHIKAWA EMMANUEL', NULL, NULL, 'MIEMBRO', 'CREADO'),
(231, 'ecaro@syesoftware.com', '7842747817', 'CARO GUERRERA LORENA ELIZABETH', NULL, NULL, 'MIEMBRO', 'CREADO'),
(232, 'vcastillo@qualtop.com', '0071746550', 'CASTILLO ZENTENO VIANEY CLAUDIA ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(233, 'acontrerasl@syesoftware.com', '8787742422', 'CONTRERAS LOPEZ ARCADIO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(234, 'jfrias@syesoftware.com', '1708748692', 'FRIAS FERNANDEZ JOSE ALEJANDRO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(235, 'lfgarcia@syesoftware.com', '3416747373', 'García Acosta Luis Felipe ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(236, 'rgarcia@syesoftware.com', '9485748495', 'GARCIA DURAN ROBERTO ISAAC', NULL, NULL, 'MIEMBRO', 'CREADO'),
(237, 'rgarciar@syesoftware.com', '1660748475', 'GARCIA RECENDEZ ROCIO ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(238, 'lgarduno@qualtop.com', '2631744421', 'GARDUÑO LEON LOURDES LIVIER', NULL, NULL, 'MIEMBRO', 'CREADO'),
(239, 'bhernadez@syesoftware.com', '9464745859', 'HERNANDEZ ROSALES BERENICE ELIZABETH', NULL, NULL, 'MIEMBRO', 'CREADO'),
(240, 'lkurmen@syesoftware.com', '4277747416', 'KURMEN HUERTA LUIS ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(241, 'dluna@syesoftware.com', '5847746990', 'LUNA FLORES DIANA YVONNE', NULL, NULL, 'MIEMBRO', 'CREADO'),
(242, 'marodriguez@syesoftware.com', '7176746317', 'MARCO ANTONIO RODRIGUEZ TORRES', NULL, NULL, 'MIEMBRO', 'CREADO'),
(243, 'msilva@syesoftware.com', '1196744290', 'MARIA TERESA SILVA LARA', NULL, NULL, 'MIEMBRO', 'CREADO'),
(244, 'amartinez@syesoftware.com', '2382745619', 'MARTINEZ GONZALEZ ARTURO TONATHIU', NULL, NULL, 'MIEMBRO', 'CREADO'),
(245, 'jnevarez@syesoftware.com', '7593741964', 'NEVAREZ HERNANDEZ JOSE RAMON', NULL, NULL, 'MIEMBRO', 'CREADO'),
(246, 'cnhaux@qualtop.com', '4761740695', 'NHAUX CATALINA ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(247, 'oimartinez@syesoftware.com', '1329742294', 'ONOFRE MARTINEZ OSCAR IVAN', NULL, NULL, 'MIEMBRO', 'CREADO'),
(248, 'montiveros@syesoftware.com', '3795749831', 'ONTIVEROS LEAL MANUEL ALEJANDRO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(249, 'jparedes@syesoftware.com', '3525748947', 'PAREDES HERNANDEZ JULIO CESAR', NULL, NULL, 'MIEMBRO', 'CREADO'),
(250, 'dpascual@syesoftware.com', '4974744463', 'PASCUAL MARTINEZ DAVID', NULL, NULL, 'MIEMBRO', 'CREADO'),
(251, 'epresa@syesoftware.com', '8644741686', 'PRESA CORDERO EDGAR DANIEL', NULL, NULL, 'MIEMBRO', 'CREADO'),
(252, 'aramos@syesoftware.com', '1539746673', 'RAMOS QUEZADA ANDREA', NULL, NULL, 'MIEMBRO', 'CREADO'),
(253, 'pruiz@qualtop.com', '3272746282', 'RUIZ ZUÑIGA PAUL', NULL, NULL, 'MIEMBRO', 'CREADO'),
(254, 'etorres@qualtop.com', '8638743673', 'TORRES FELIPE EZEQUIEL', NULL, NULL, 'MIEMBRO', 'CREADO'),
(255, 'mvargas@syesoftware.com', '3624747723', 'VARGAS MAGAÑA  MARY CARMEN TERESITA', NULL, NULL, 'MIEMBRO', 'CREADO'),
(257, 'diego_z_g@hotmail.com', '95082120871', 'Diego', NULL, NULL, 'MIEMBRO', 'CREADO'),
(258, 'abrahamfran97@gmail.com', '63182125454', 'Abraham', NULL, NULL, 'MIEMBRO', 'CREADO'),
(259, 'medinaalma97@yahoo.com', '20022126870', 'Alma', NULL, NULL, 'MIEMBRO', 'CREADO'),
(260, 'morej8@gmail.com', '87032124158', 'Teacher Daniel', NULL, NULL, 'MIEMBRO', 'CREADO'),
(261, 'dianaeli97g@hotmail.com', '28592120399', 'Diana ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(262, 'eldelfinkevin@outlook.com', '42652120532', 'Kevin ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(263, 'laribarrgan@gmail.com', '47232121277', 'Lari', NULL, NULL, 'MIEMBRO', 'CREADO'),
(264, 'fresa1683@hotmail.com', '19732121422', 'Mariana', NULL, NULL, 'MIEMBRO', 'CREADO'),
(265, 'keruben12@gmail.com', '06522129567', 'Monse', NULL, NULL, 'MIEMBRO', 'CREADO'),
(266, 'chvz.mendonza.1009621@gmail.com', '34732123392', 'Ana', NULL, NULL, 'MIEMBRO', 'CREADO'),
(268, 'cesar_alonso_m_g@hotmail.com', '123456', 'César Alonso', NULL, NULL, 'LIDER', 'CREADO'),
(270, 'aide.yunis@gmail.com', '9518740518', 'Aide Yunis', NULL, NULL, 'MIEMBRO', 'CREADO'),
(271, 'a18k-rol_30diaz@hotmail.com', '9231748351', 'Aide Yunis Díaz', NULL, NULL, 'MIEMBRO', 'CREADO'),
(272, 'rdiazr@qualtop.com', '0342742195', 'ROSA DIAZ ROSALES', NULL, NULL, 'MIEMBRO', 'CREADO'),
(273, 'lrivas@qualtop.com', '5838748213', 'LESLYE DENISSE RIVAS ARREDONDO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(274, 'psrangel@qualtop.com', '4035743172', 'PAULINA SARAI RANGEL HERAS', NULL, NULL, 'MIEMBRO', 'CREADO'),
(275, 'acastro@qualtop.com', '0250743416', 'JORGE ARMANDRO CASTRO HERNANDEZ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(276, 'orocha@qualtop.com', '3715745507', 'OSCAR EDUARDO ROCHA ORNELAS ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(277, 'alozada@qualtop.com', '2020742626', 'ARACELI OLIVIA LOZADA AGUILAR', NULL, NULL, 'MIEMBRO', 'CREADO'),
(278, 'duribe@qualtop.com', '2687747304', 'DAMIAN URIBE PICHARDO', NULL, NULL, 'MIEMBRO', 'CREADO'),
(279, 'acastelor@qualtop.com', '0048748285', 'ALMA LILIA CASTELO ROBLES', NULL, NULL, 'MIEMBRO', 'CREADO'),
(280, 'vcardenas@qualtop.com', '5091746757', 'VIRIDIANA CARDENAS PEREZ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(281, 'wtrochez@qualtop.com', '9590743746', 'WILDER BLADIMIR TROCHEZ MUÑOZ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(282, 'cdevesa@qualtop.com', '3658740096', 'DIANA CAROLINA DEVESA MARTINEZ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(283, 'hballesteros@qualtop.com', '0498745450', 'HECTOR MANUEL BALLESTEROS HERNANDEZ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(284, 'vgarciav@qualtop.com', '6518749208', 'VALENTE GARCIA VENTURA ', NULL, NULL, 'MIEMBRO', 'CREADO'),
(285, 'ivandsg0@gmail.com', '90932129410', 'Diego (kayend)', NULL, NULL, 'MIEMBRO', 'CREADO'),
(286, 'ing.barraganreyes@gmail.com', '08572122984', 'juank', NULL, NULL, 'MIEMBRO', 'CREADO'),
(287, 'alejandro_96_30@hotmail.com', '54912122183', 'Alex (ondraude)', NULL, NULL, 'MIEMBRO', 'CREADO'),
(288, 'ezek_2209@hotmail.com', '20232123281', 'ezequiel (chirunda)', NULL, NULL, 'MIEMBRO', 'CREADO'),
(289, 'aide.yunis@gmail.com', '0681748908', 'Aide Yunis Díaz', NULL, NULL, 'MIEMBRO', 'CREADO'),
(290, 'etorres@qualtop.com', '6770741860', 'Ezequiel Torres', NULL, NULL, 'MIEMBRO', 'CREADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_articulo`
--

CREATE TABLE IF NOT EXISTS `usuario_has_articulo` (
  `idusuario_has_articulo` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `articulo_idarticulo` int(11) NOT NULL,
  `promedio` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_has_articulo`
--

INSERT INTO `usuario_has_articulo` (`idusuario_has_articulo`, `usuario_idusuario`, `articulo_idarticulo`, `promedio`) VALUES
(65, 163, 83, 5),
(74, 170, 90, 5),
(75, 107, 91, 5),
(76, 170, 85, 5),
(80, 163, 84, 5),
(81, 170, 93, 5),
(82, 163, 94, 5),
(83, 97, 85, 5),
(84, 97, 95, 5),
(92, 173, 103, 5),
(93, 141, 104, 5),
(94, 173, 105, 5),
(95, 154, 73, 5),
(96, 154, 106, 5),
(97, 154, 104, 5),
(98, 142, 77, 5),
(99, 142, 107, 5),
(100, 142, 108, 5),
(101, 167, 109, 5),
(104, 167, 112, 5),
(105, 167, 114, 5),
(115, 90, 104, 5),
(116, 112, 85, 5),
(117, 112, 120, 5),
(118, 112, 104, 5),
(120, 137, 122, 5),
(121, 137, 123, 5),
(124, 138, 125, 5),
(125, 138, 105, 5),
(131, 138, 127, 5),
(132, 88, 107, 5),
(139, 92, 130, 5),
(140, 90, 107, 5),
(143, 92, 133, 5),
(144, 92, 134, 5),
(146, 179, 136, 5),
(150, 179, 118, 5),
(155, 107, 147, 5),
(156, 192, 148, 5),
(159, 108, 150, 5),
(160, 108, 118, 5),
(164, 126, 153, 5),
(165, 126, 154, 5),
(166, 177, 155, 5),
(167, 177, 156, 5),
(168, 88, 157, 5),
(173, 87, 123, 5),
(175, 173, 162, 5),
(176, 87, 109, 5),
(177, 87, 141, 5),
(178, 119, 167, 5),
(179, 187, 150, 5),
(182, 187, 95, 5),
(183, 187, 170, 5),
(184, 97, 171, 5),
(189, 214, 172, 5),
(190, 214, 173, 5),
(191, 214, 174, 5),
(192, 214, 175, 5),
(193, 270, 176, 5),
(194, 270, 177, 5),
(195, 286, 178, 5),
(196, 286, 179, 5),
(197, 286, 180, 5),
(198, 286, 181, 5),
(199, 286, 182, 5),
(200, 289, 176, 5),
(201, 290, 183, 5),
(202, 290, 177, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_equipo`
--

CREATE TABLE IF NOT EXISTS `usuario_has_equipo` (
  `idusuario_has_equipo` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `equipo_idequipo` int(11) NOT NULL,
  `estatus_encuesta` varchar(45) DEFAULT NULL COMMENT 'INICIALIZADA\nFINALIZADA'
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_has_equipo`
--

INSERT INTO `usuario_has_equipo` (`idusuario_has_equipo`, `usuario_idusuario`, `equipo_idequipo`, `estatus_encuesta`) VALUES
(33, 75, 19, 'NOPARTICIPA'),
(34, 76, 19, 'NOPARTICIPA'),
(41, 83, 19, 'NOPARTICIPA'),
(42, 84, 19, 'NOPARTICIPA'),
(43, 85, 19, 'NOPARTICIPA'),
(44, 86, 19, 'NOPARTICIPA'),
(45, 87, 19, 'NOPARTICIPA'),
(46, 88, 19, 'NOPARTICIPA'),
(47, 89, 19, 'NOPARTICIPA'),
(48, 90, 19, 'NOPARTICIPA'),
(49, 91, 19, 'NOPARTICIPA'),
(50, 92, 19, 'NOPARTICIPA'),
(55, 97, 19, 'NOPARTICIPA'),
(57, 99, 19, 'NOPARTICIPA'),
(58, 100, 19, 'NOPARTICIPA'),
(60, 102, 19, 'NOPARTICIPA'),
(65, 107, 19, 'NOPARTICIPA'),
(66, 108, 19, 'NOPARTICIPA'),
(68, 110, 19, 'NOPARTICIPA'),
(70, 112, 19, 'NOPARTICIPA'),
(73, 115, 19, 'NOPARTICIPA'),
(74, 116, 19, 'NOPARTICIPA'),
(77, 119, 19, 'NOPARTICIPA'),
(78, 120, 19, 'NOPARTICIPA'),
(79, 122, 19, 'NOPARTICIPA'),
(83, 126, 19, 'NOPARTICIPA'),
(87, 130, 19, 'NOPARTICIPA'),
(89, 132, 19, 'NOPARTICIPA'),
(94, 137, 19, 'NOPARTICIPA'),
(95, 138, 19, 'NOPARTICIPA'),
(96, 139, 19, 'NOPARTICIPA'),
(98, 141, 19, 'NOPARTICIPA'),
(99, 142, 19, 'NOPARTICIPA'),
(100, 143, 19, 'NOPARTICIPA'),
(106, 149, 19, 'NOPARTICIPA'),
(108, 151, 19, 'NOPARTICIPA'),
(109, 152, 19, 'NOPARTICIPA'),
(111, 154, 19, 'NOPARTICIPA'),
(116, 159, 19, 'NOPARTICIPA'),
(120, 163, 19, 'NOPARTICIPA'),
(121, 164, 19, 'NOPARTICIPA'),
(122, 165, 19, 'NOPARTICIPA'),
(124, 167, 19, 'NOPARTICIPA'),
(125, 168, 19, 'NOPARTICIPA'),
(126, 169, 19, 'NOPARTICIPA'),
(127, 170, 19, 'NOPARTICIPA'),
(128, 171, 19, 'NOPARTICIPA'),
(129, 172, 19, 'NOPARTICIPA'),
(130, 173, 19, 'NOPARTICIPA'),
(131, 174, 19, 'NOPARTICIPA'),
(132, 175, 19, 'NOPARTICIPA'),
(134, 177, 19, 'NOPARTICIPA'),
(136, 179, 19, 'NOPARTICIPA'),
(137, 180, 19, 'NOPARTICIPA'),
(143, 186, 19, 'NOPARTICIPA'),
(144, 187, 19, 'NOPARTICIPA'),
(148, 192, 19, 'NOPARTICIPA'),
(149, 193, 19, 'NOPARTICIPA'),
(152, 214, 21, 'PARTICIPA'),
(153, 216, 22, 'CREADO'),
(157, 226, 19, 'NOPARTICIPA'),
(158, 227, 19, 'NOPARTICIPA'),
(159, 228, 19, 'NOPARTICIPA'),
(160, 229, 19, 'NOPARTICIPA'),
(161, 230, 19, 'NOPARTICIPA'),
(162, 231, 19, 'NOPARTICIPA'),
(163, 232, 19, 'NOPARTICIPA'),
(164, 233, 19, 'NOPARTICIPA'),
(165, 234, 19, 'NOPARTICIPA'),
(166, 235, 19, 'NOPARTICIPA'),
(167, 236, 19, 'NOPARTICIPA'),
(168, 237, 19, 'NOPARTICIPA'),
(169, 238, 19, 'NOPARTICIPA'),
(170, 239, 19, 'NOPARTICIPA'),
(171, 240, 19, 'NOPARTICIPA'),
(172, 241, 19, 'NOPARTICIPA'),
(173, 242, 19, 'NOPARTICIPA'),
(174, 243, 19, 'NOPARTICIPA'),
(175, 244, 19, 'NOPARTICIPA'),
(176, 245, 19, 'NOPARTICIPA'),
(177, 246, 19, 'NOPARTICIPA'),
(178, 247, 19, 'NOPARTICIPA'),
(179, 248, 19, 'NOPARTICIPA'),
(180, 249, 19, 'NOPARTICIPA'),
(181, 250, 19, 'NOPARTICIPA'),
(182, 251, 19, 'NOPARTICIPA'),
(183, 252, 19, 'NOPARTICIPA'),
(184, 253, 19, 'NOPARTICIPA'),
(185, 254, 19, 'NOPARTICIPA'),
(186, 255, 19, 'NOPARTICIPA'),
(188, 257, 21, 'CREADO'),
(189, 258, 21, 'CREADO'),
(190, 259, 21, 'CREADO'),
(191, 260, 21, 'CREADO'),
(192, 261, 21, 'CREADO'),
(193, 262, 21, 'CREADO'),
(194, 263, 21, 'CREADO'),
(195, 264, 21, 'CREADO'),
(196, 265, 21, 'CREADO'),
(197, 266, 21, 'CREADO'),
(200, 270, 26, 'PARTICIPA'),
(201, 271, 26, 'PARTICIPA'),
(202, 272, 20, 'CREADO'),
(203, 273, 20, 'CREADO'),
(204, 274, 20, 'CREADO'),
(205, 275, 20, 'CREADO'),
(206, 276, 20, 'CREADO'),
(207, 277, 20, 'CREADO'),
(208, 278, 20, 'CREADO'),
(209, 279, 20, 'CREADO'),
(210, 280, 20, 'CREADO'),
(211, 281, 20, 'CREADO'),
(212, 282, 20, 'CREADO'),
(213, 283, 20, 'CREADO'),
(214, 284, 20, 'CREADO'),
(215, 285, 27, 'CREADO'),
(216, 286, 27, 'PARTICIPA'),
(217, 287, 27, 'CREADO'),
(218, 288, 27, 'CREADO'),
(219, 289, 28, 'PARTICIPA'),
(220, 290, 28, 'PARTICIPA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_like_usuario_articulo`
--

CREATE TABLE IF NOT EXISTS `usuario_like_usuario_articulo` (
  `idusuario_like_usuario_articulo` int(11) NOT NULL,
  `usuario_idusuario_vota` int(11) NOT NULL,
  `usuario_idusuario_votado` int(11) NOT NULL,
  `articulo_idarticulo` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_like_usuario_articulo`
--

INSERT INTO `usuario_like_usuario_articulo` (`idusuario_like_usuario_articulo`, `usuario_idusuario_vota`, `usuario_idusuario_votado`, `articulo_idarticulo`, `created_at`) VALUES
(78, 170, 187, 78, '2016-12-01 23:34:13'),
(87, 138, 90, 119, '2016-12-02 18:04:52'),
(88, 138, 97, 95, '2016-12-02 18:04:52'),
(90, 138, 112, 85, '2016-12-02 18:04:52'),
(93, 138, 137, 122, '2016-12-02 18:04:52'),
(94, 138, 138, 127, '2016-12-02 18:04:52'),
(95, 138, 142, 107, '2016-12-02 18:04:52'),
(97, 138, 154, 106, '2016-12-02 18:04:53'),
(99, 138, 163, 83, '2016-12-02 18:04:53'),
(100, 138, 167, 112, '2016-12-02 18:04:53'),
(101, 138, 170, 90, '2016-12-02 18:04:53'),
(102, 138, 173, 105, '2016-12-02 18:04:53'),
(103, 138, 179, 115, '2016-12-02 18:04:53'),
(104, 138, 187, 80, '2016-12-02 18:04:53'),
(107, 170, 97, 102, '2016-12-02 22:20:40'),
(108, 170, 107, 147, '2016-12-02 22:20:40'),
(109, 170, 108, 118, '2016-12-02 22:20:40'),
(111, 170, 112, 120, '2016-12-02 22:20:40'),
(114, 170, 126, 153, '2016-12-02 22:20:41'),
(115, 170, 192, 148, '2016-12-02 22:20:41'),
(118, 170, 138, 125, '2016-12-02 22:20:41'),
(119, 170, 163, 83, '2016-12-02 22:20:41'),
(122, 97, 87, 141, '2016-12-02 23:43:10'),
(123, 97, 88, 107, '2016-12-02 23:43:10'),
(124, 97, 90, 104, '2016-12-02 23:43:10'),
(125, 97, 92, 134, '2016-12-02 23:43:10'),
(126, 97, 97, 85, '2016-12-02 23:43:11'),
(127, 97, 107, 91, '2016-12-02 23:43:11'),
(128, 97, 108, 118, '2016-12-02 23:43:11'),
(130, 97, 112, 104, '2016-12-02 23:43:11'),
(133, 97, 119, 167, '2016-12-02 23:43:11'),
(135, 97, 126, 153, '2016-12-02 23:43:12'),
(136, 97, 192, 148, '2016-12-02 23:43:12'),
(140, 97, 137, 123, '2016-12-02 23:43:12'),
(141, 97, 138, 125, '2016-12-02 23:43:12'),
(142, 97, 141, 104, '2016-12-02 23:43:12'),
(143, 97, 142, 77, '2016-12-02 23:43:12'),
(145, 97, 154, 104, '2016-12-02 23:43:13'),
(147, 97, 163, 84, '2016-12-02 23:43:13'),
(148, 97, 167, 112, '2016-12-02 23:43:13'),
(149, 97, 170, 93, '2016-12-02 23:43:13'),
(150, 97, 173, 105, '2016-12-02 23:43:13'),
(151, 97, 177, 155, '2016-12-02 23:43:13'),
(152, 97, 179, 136, '2016-12-02 23:43:13'),
(153, 97, 187, 95, '2016-12-02 23:43:13'),
(155, 214, 214, 173, '2017-11-13 05:42:13'),
(156, 286, 286, 179, '2017-11-14 21:34:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idarticulo`), ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idequipo`), ADD KEY `fk_equipo_intercambio1_idx` (`intercambio_idintercambio`);

--
-- Indices de la tabla `intercambiando`
--
ALTER TABLE `intercambiando`
  ADD PRIMARY KEY (`idintercambiando`) USING BTREE, ADD UNIQUE KEY `i0usuarios` (`idusuario_has_equipo_recibe`,`idusuario_has_equipo_da`), ADD KEY `fk_intercambiando_articulo1_idx` (`articulo_idarticulo`), ADD KEY `fk_intercambiando_usuario_has_equipo1_idx` (`idusuario_has_equipo_da`), ADD KEY `fk_intercambiando_usuario_has_equipo2_idx` (`idusuario_has_equipo_recibe`);

--
-- Indices de la tabla `intercambio`
--
ALTER TABLE `intercambio`
  ADD PRIMARY KEY (`idintercambio`), ADD UNIQUE KEY `nombre` (`nombre`), ADD KEY `fk_intercambio_usuario1_idx` (`usuario_idusuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`), ADD KEY `fk_usuario_rol_idx` (`rol_idrol`);

--
-- Indices de la tabla `usuario_has_articulo`
--
ALTER TABLE `usuario_has_articulo`
  ADD PRIMARY KEY (`idusuario_has_articulo`), ADD KEY `fk_usuario_has_articulo_articulo1_idx` (`articulo_idarticulo`), ADD KEY `fk_usuario_has_articulo_usuario1_idx` (`usuario_idusuario`);

--
-- Indices de la tabla `usuario_has_equipo`
--
ALTER TABLE `usuario_has_equipo`
  ADD PRIMARY KEY (`idusuario_has_equipo`), ADD KEY `fk_usuario_has_equipo_equipo1_idx` (`equipo_idequipo`), ADD KEY `fk_usuario_has_equipo_usuario1_idx` (`usuario_idusuario`);

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
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `intercambiando`
--
ALTER TABLE `intercambiando`
  MODIFY `idintercambiando` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de la tabla `intercambio`
--
ALTER TABLE `intercambio`
  MODIFY `idintercambio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=291;
--
-- AUTO_INCREMENT de la tabla `usuario_has_articulo`
--
ALTER TABLE `usuario_has_articulo`
  MODIFY `idusuario_has_articulo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT de la tabla `usuario_has_equipo`
--
ALTER TABLE `usuario_has_equipo`
  MODIFY `idusuario_has_equipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=221;
--
-- AUTO_INCREMENT de la tabla `usuario_like_usuario_articulo`
--
ALTER TABLE `usuario_like_usuario_articulo`
  MODIFY `idusuario_like_usuario_articulo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=157;
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
