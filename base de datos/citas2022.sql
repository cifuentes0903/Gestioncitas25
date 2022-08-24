-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2022 a las 23:39:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `CodCita` int(11) NOT NULL,
  `TipoCita` varchar(100) NOT NULL,
  `FechaC` date NOT NULL,
  `HoraC` time NOT NULL,
  `EstadoC` varchar(10) NOT NULL,
  `Observaciones` varchar(100) DEFAULT NULL,
  `Cconsultorio` int(11) NOT NULL,
  `Cmedico` int(11) NOT NULL,
  `Cpaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorios`
--

CREATE TABLE `consultorios` (
  `NumeroC` int(11) NOT NULL,
  `NombreC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultorios`
--

INSERT INTO `consultorios` (`NumeroC`, `NombreC`) VALUES
(103, 'Laboratorio '),
(104, 'Medicina general 1'),
(105, 'Medicina general 2'),
(107, 'Ortopedista'),
(108, 'Medicina interna'),
(109, 'Neurologia'),
(110, 'Neurocirugía '),
(111, 'Laboratorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `CodEspe` int(11) NOT NULL,
  `NombreEs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `DocumentoM` int(11) NOT NULL,
  `NombreM` varchar(100) NOT NULL,
  `ApellidoM` varchar(100) NOT NULL,
  `EmailM` varchar(100) NOT NULL,
  `Especialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `DocumentoP` int(11) NOT NULL,
  `NombreP` varchar(100) NOT NULL,
  `ApellidoP` varchar(100) NOT NULL,
  `EmailP` varchar(100) NOT NULL,
  `FechaNac` date NOT NULL,
  `GeneroP` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`CodCita`),
  ADD KEY `Cconsultorio` (`Cconsultorio`),
  ADD KEY `Cmedico` (`Cmedico`),
  ADD KEY `Cpaciente` (`Cpaciente`);

--
-- Indices de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`NumeroC`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`CodEspe`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`DocumentoM`),
  ADD KEY `Especialidad` (`Especialidad`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`DocumentoP`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `CodCita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `CodEspe` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`Cconsultorio`) REFERENCES `consultorios` (`NumeroC`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`Cmedico`) REFERENCES `medicos` (`DocumentoM`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`Cpaciente`) REFERENCES `pacientes` (`DocumentoP`);

--
-- Filtros para la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `medicos_ibfk_1` FOREIGN KEY (`Especialidad`) REFERENCES `especialidad` (`CodEspe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
