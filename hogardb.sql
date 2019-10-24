-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2019 a las 17:06:20
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hogardb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopcion`
--

CREATE TABLE `adopcion` (
  `idadopcion` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencionmedica`
--

CREATE TABLE `atencionmedica` (
  `idatenciomedica` int(11) NOT NULL,
  `idveterinaria` int(11) NOT NULL,
  `idmascota` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `diagnostico` varchar(100) NOT NULL,
  `tratamiento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idciudad` int(11) NOT NULL,
  `iddepartamento` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `idcuestionario` int(11) NOT NULL,
  `preg1` date NOT NULL,
  `preg2` varchar(20) NOT NULL,
  `preg3` varchar(10) NOT NULL,
  `preg4` varchar(3) NOT NULL,
  `preg5` varchar(3) NOT NULL,
  `preg6` varchar(15) NOT NULL,
  `preg7` varchar(15) NOT NULL,
  `preg8` varchar(10) NOT NULL,
  `preg9` varchar(10) NOT NULL,
  `preg10` varchar(30) NOT NULL,
  `preg11` varchar(15) NOT NULL,
  `preg12` varchar(20) NOT NULL,
  `preg13` varchar(30) NOT NULL,
  `preg14` varchar(20) NOT NULL,
  `preg15` varchar(40) NOT NULL,
  `preg16` varchar(20) NOT NULL,
  `preg17` varchar(20) NOT NULL,
  `preg18` varchar(30) NOT NULL,
  `preg19` varchar(40) NOT NULL,
  `preg20` varchar(40) NOT NULL,
  `preg21` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `idfoto` int(11) NOT NULL,
  `idmascota` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasto`
--

CREATE TABLE `gasto` (
  `idgasto` int(11) NOT NULL,
  `idtipogasto` int(11) NOT NULL,
  `idrecurso` int(11) NOT NULL,
  `valor` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idmascota` int(11) NOT NULL,
  `idraza` int(11) NOT NULL,
  `idadopcion` int(11) NOT NULL,
  `idrefugio` int(11) NOT NULL,
  `especie` varchar(6) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `edad` varchar(2) NOT NULL,
  `tamanio` varchar(10) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `idciudad` int(11) NOT NULL,
  `idcuestionario` int(11) DEFAULT NULL,
  `rol` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `tipodocumento` varchar(15) NOT NULL,
  `documento` varchar(30) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `contraseña` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `idraza` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recurso`
--

CREATE TABLE `recurso` (
  `idrecurso` int(11) NOT NULL,
  `idrefugio` int(11) NOT NULL,
  `valor` int(11) DEFAULT NULL,
  `donacion` int(11) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refugio`
--

CREATE TABLE `refugio` (
  `idrefugio` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `capacidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciomedico`
--

CREATE TABLE `serviciomedico` (
  `idserviciomedico` int(11) NOT NULL,
  `idatencionmedica` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipogasto`
--

CREATE TABLE `tipogasto` (
  `idtipogasto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinaria`
--

CREATE TABLE `veterinaria` (
  `idveterinaria` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `funcionario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD PRIMARY KEY (`idadopcion`),
  ADD KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `atencionmedica`
--
ALTER TABLE `atencionmedica`
  ADD PRIMARY KEY (`idatenciomedica`),
  ADD KEY `idveterinaria` (`idveterinaria`),
  ADD KEY `idmascota` (`idmascota`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idciudad`),
  ADD KEY `iddepartamento` (`iddepartamento`);

--
-- Indices de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD PRIMARY KEY (`idcuestionario`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`idfoto`),
  ADD KEY `idmascota` (`idmascota`);

--
-- Indices de la tabla `gasto`
--
ALTER TABLE `gasto`
  ADD PRIMARY KEY (`idgasto`),
  ADD KEY `idtipogasto` (`idtipogasto`),
  ADD KEY `idrecurso` (`idrecurso`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idmascota`),
  ADD KEY `idraza` (`idraza`),
  ADD KEY `idadopcion` (`idadopcion`),
  ADD KEY `idrefugio` (`idrefugio`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`),
  ADD KEY `idciudad` (`idciudad`),
  ADD KEY `idcuestionario` (`idcuestionario`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`idraza`);

--
-- Indices de la tabla `recurso`
--
ALTER TABLE `recurso`
  ADD PRIMARY KEY (`idrecurso`),
  ADD KEY `idrefugio` (`idrefugio`);

--
-- Indices de la tabla `refugio`
--
ALTER TABLE `refugio`
  ADD PRIMARY KEY (`idrefugio`);

--
-- Indices de la tabla `serviciomedico`
--
ALTER TABLE `serviciomedico`
  ADD PRIMARY KEY (`idserviciomedico`),
  ADD KEY `idatencionmedica` (`idatencionmedica`);

--
-- Indices de la tabla `tipogasto`
--
ALTER TABLE `tipogasto`
  ADD PRIMARY KEY (`idtipogasto`);

--
-- Indices de la tabla `veterinaria`
--
ALTER TABLE `veterinaria`
  ADD PRIMARY KEY (`idveterinaria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  MODIFY `idadopcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `atencionmedica`
--
ALTER TABLE `atencionmedica`
  MODIFY `idatenciomedica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idciudad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  MODIFY `idcuestionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `idfoto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gasto`
--
ALTER TABLE `gasto`
  MODIFY `idgasto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idmascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `idraza` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recurso`
--
ALTER TABLE `recurso`
  MODIFY `idrecurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `refugio`
--
ALTER TABLE `refugio`
  MODIFY `idrefugio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `serviciomedico`
--
ALTER TABLE `serviciomedico`
  MODIFY `idserviciomedico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipogasto`
--
ALTER TABLE `tipogasto`
  MODIFY `idtipogasto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `veterinaria`
--
ALTER TABLE `veterinaria`
  MODIFY `idveterinaria` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD CONSTRAINT `adopcion_ibfk_1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`);

--
-- Filtros para la tabla `atencionmedica`
--
ALTER TABLE `atencionmedica`
  ADD CONSTRAINT `atencionmedica_ibfk_1` FOREIGN KEY (`idveterinaria`) REFERENCES `veterinaria` (`idveterinaria`),
  ADD CONSTRAINT `atencionmedica_ibfk_2` FOREIGN KEY (`idmascota`) REFERENCES `mascota` (`idmascota`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`);

--
-- Filtros para la tabla `gasto`
--
ALTER TABLE `gasto`
  ADD CONSTRAINT `gasto_ibfk_1` FOREIGN KEY (`idtipogasto`) REFERENCES `tipogasto` (`idtipogasto`),
  ADD CONSTRAINT `gasto_ibfk_2` FOREIGN KEY (`idrecurso`) REFERENCES `recurso` (`idrecurso`);

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`idraza`) REFERENCES `raza` (`idraza`),
  ADD CONSTRAINT `mascota_ibfk_2` FOREIGN KEY (`idrefugio`) REFERENCES `refugio` (`idrefugio`),
  ADD CONSTRAINT `mascota_ibfk_3` FOREIGN KEY (`idadopcion`) REFERENCES `adopcion` (`idadopcion`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`idcuestionario`) REFERENCES `cuestionario` (`idcuestionario`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`idciudad`) REFERENCES `ciudad` (`idciudad`);

--
-- Filtros para la tabla `recurso`
--
ALTER TABLE `recurso`
  ADD CONSTRAINT `recurso_ibfk_1` FOREIGN KEY (`idrefugio`) REFERENCES `refugio` (`idrefugio`);

--
-- Filtros para la tabla `serviciomedico`
--
ALTER TABLE `serviciomedico`
  ADD CONSTRAINT `serviciomedico_ibfk_1` FOREIGN KEY (`idatencionmedica`) REFERENCES `atencionmedica` (`idatenciomedica`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
