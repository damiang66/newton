-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2022 a las 15:46:39
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id-consulta` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `consulta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id-menu` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` float NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id-menu`, `nombre`, `descripcion`, `precio`, `stock`) VALUES
(1, 'POLLO BBQ', 'INGREDIENTES\r\nPara la masa\r\n300 g de Harina de fuerza\r\n7 g de Levadura fresca\r\n1 cucharadita de Sal\r', 500, 10),
(2, 'pepperoni', 'Ingredientes\r\n-Para la masa\r\n400g de harina de trigo\r\n50g de harina de maíz\r\n250c.c. de agua tibia\r\n', 550, 10),
(3, 'margherita', 'Ingredientes\r\n220 gr. de masa de pizza italiana\r\n90 gr. de queso mozzarella\r\nHojas de albahaca fresca\r\n100 gr. de salsa de tomate natural triturado\r\nSal y pimienta negra recién molida (al gusto)\r\nAcei', 500, 0),
(4, 'prosciutto', '1 base pizza\r\nchampiñones\r\njamón dulce\r\nqueso mozzarella\r\ntomate frito\r\norégano', 550, 10),
(5, 'capricciosa', 'Ingredientes\r\nMasa de pizza\r\n1 tomate grande\r\n150 gr. queso mozzarella\r\nHojas de albahaca fresca\r\n5 corazones de alcachofa en conserva\r\n2 cda. aceitunas negras\r\n8 anchoas\r\n3 champiñones\r\n1 huevo', 500, 10),
(6, 'vegetariana', '1 base pizza\r\n1 cebolla\r\n1 pimiento verde\r\n1 pimiento rojo\r\n100 g champiñones\r\n50 g aceitunas negras\r\nqueso mozarella\r\ntomate frito\r\norégano', 550, 10),
(7, '4 stagioni', 'Masa de pizza\r\nAlcachofa en conserva (corazones)\r\n4\r\nAceitunas negras\r\n4\r\nSalami (rodajas o lonchas)\r\n4\r\nChampiñones Portobello laminados\r\n4\r\nAlbahaca (hojas)\r\n6\r\nMozzarella fresca 1 bola\r\nSalsa de to', 500, 10),
(8, 'napolitana', 'Mozzarella, jamón, pepperoni, italian sausage, choricillos, tomates, aceitunas, champiñones y cebolla.', 550, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `id-sus` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `notificaciones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id-consulta`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id-menu`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`id-sus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
