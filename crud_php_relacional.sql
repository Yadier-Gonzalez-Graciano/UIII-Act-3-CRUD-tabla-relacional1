-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 18:25:36
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_php_relacional`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(10) NOT NULL,
  `categoriaId` int(10) NOT NULL,
  `marcaId` int(10) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `descripcionProducto` varchar(500) NOT NULL,
  `precioProducto` varchar(100) NOT NULL,
  `fechaProducto` varchar(100) NOT NULL,
  `almProducto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `categoriaId`, `marcaId`, `nombreProducto`, `descripcionProducto`, `precioProducto`, `fechaProducto`, `almProducto`) VALUES
(5, 8, 10, 'Sabritas de Adobadas', 'Rojas', '21', '16/11/2023', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedores`
--

CREATE TABLE `provedores` (
  `idCategoria` int(10) NOT NULL,
  `nombreCategoria` varchar(100) NOT NULL,
  `EstadoCategoria` varchar(100) NOT NULL DEFAULT '',
  `socProvedores` varchar(100) NOT NULL,
  `tipProvedores` varchar(100) NOT NULL,
  `dirProvedores` varchar(100) NOT NULL,
  `telProvedores` varchar(100) NOT NULL,
  `emaProvedores` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provedores`
--

INSERT INTO `provedores` (`idCategoria`, `nombreCategoria`, `EstadoCategoria`, `socProvedores`, `tipProvedores`, `dirProvedores`, `telProvedores`, `emaProvedores`) VALUES
(8, 'Sabritas', 'sab12311', 'Sabritas Sa de Cv', 'Papitas', 'puerto calaiz 1241', '6567809797', 'yadierglez1@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `idMarca` int(10) NOT NULL,
  `nombreMarca` varchar(100) NOT NULL,
  `estadoMarca` varchar(100) NOT NULL DEFAULT '',
  `empSuc` int(11) NOT NULL,
  `telSuc` varchar(100) NOT NULL,
  `proSuc` varchar(100) NOT NULL,
  `tamSuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`idMarca`, `nombreMarca`, `estadoMarca`, `empSuc`, `telSuc`, `proSuc`, `tamSuc`) VALUES
(10, 'Lomas Turbas 1241', '411', 30, '6566990253', '100', 'Grande'),
(11, 'Praderas 4546', '6', 70, '655878009', '100', 'Chico'),
(13, 'Puerto Calaiz 1241', '41', 100, '6567809797', '100', 'Grande');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `categoriaId` (`categoriaId`),
  ADD KEY `marcaId` (`marcaId`);

--
-- Indices de la tabla `provedores`
--
ALTER TABLE `provedores`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`idMarca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `provedores`
--
ALTER TABLE `provedores`
  MODIFY `idCategoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `idMarca` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoriaId`) REFERENCES `provedores` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`marcaId`) REFERENCES `sucursales` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
