-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-01-2022 a las 23:38:16
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aridosSoftware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `ID` int(5) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`ID`, `Nombre`, `descripcion`) VALUES
(1, 'Grupo1', 'Deposito'),
(2, 'Grupo2', 'Tesoreria'),
(3, 'Grupo3', 'Administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lvAcceso`
--

CREATE TABLE `lvAcceso` (
  `ID` int(1) NOT NULL,
  `Lectura` int(5) NOT NULL,
  `Escritura` int(5) NOT NULL,
  `Administrador` int(5) NOT NULL,
  `Propietario` int(5) NOT NULL,
  `IDuss` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lvAcceso`
--

INSERT INTO `lvAcceso` (`ID`, `Lectura`, `Escritura`, `Administrador`, `Propietario`, `IDuss`) VALUES
(1, 1, 1, 1, 1, 1),
(31, 1, 1, 0, 0, 132),
(32, 1, 1, 1, 0, 133),
(33, 1, 0, 0, 0, 134);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ussSeguridad`
--

CREATE TABLE `ussSeguridad` (
  `ID` int(2) NOT NULL,
  `IDgrupo` int(2) NOT NULL,
  `IDacceso` int(2) NOT NULL,
  `IDusuario` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ussSeguridad`
--

INSERT INTO `ussSeguridad` (`ID`, `IDgrupo`, `IDacceso`, `IDusuario`) VALUES
(1, 3, 1, 1),
(10, 2, 31, 132),
(11, 3, 32, 133),
(12, 1, 33, 134);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(5) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `fechaHora` date NOT NULL,
  `Estado` tinyint(1) NOT NULL,
  `IDgrupo` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Password`, `fechaHora`, `Estado`, `IDgrupo`) VALUES
(1, 'OwnerA', '12345', '2022-01-23', 1, 3),
(132, 'test1', '1234', '2027-01-22', 1, 2),
(133, 'test2', '12345', '2027-01-22', 2, 3),
(134, 'new', 'qwer', '2027-01-22', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `lvAcceso`
--
ALTER TABLE `lvAcceso`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ussSeguridad`
--
ALTER TABLE `ussSeguridad`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lvAcceso`
--
ALTER TABLE `lvAcceso`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `ussSeguridad`
--
ALTER TABLE `ussSeguridad`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
