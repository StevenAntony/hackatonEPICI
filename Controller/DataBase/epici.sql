-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2019 a las 18:08:11
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epici`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE `ambiente` (
  `IdAmb` int(11) NOT NULL,
  `TipoAmb` varchar(50) NOT NULL,
  `DescripcionAmb` char(5) NOT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `IdCiclo` int(11) NOT NULL,
  `DescripcionCiclo` varchar(50) NOT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curgrup`
--

CREATE TABLE `curgrup` (
  `IdCurGrup` int(11) NOT NULL,
  `Estado` int(2) DEFAULT NULL,
  `IdCurso` int(11) NOT NULL,
  `IdGrupo` int(11) NOT NULL,
  `IdDoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `IdCurso` int(11) NOT NULL,
  `CodigoCurso` char(5) NOT NULL,
  `DescripcionCurso` varchar(50) NOT NULL,
  `CreditoCurso` int(11) NOT NULL,
  `Estado` int(2) DEFAULT NULL,
  `IdCiclo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursorequisito`
--

CREATE TABLE `cursorequisito` (
  `IdCurReq` int(11) NOT NULL,
  `Estado` int(2) DEFAULT NULL,
  `IdCurso` int(11) NOT NULL,
  `IdReq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `IdDoc` int(11) NOT NULL,
  `DNIDoc` char(8) NOT NULL,
  `NombreDoc` varchar(50) NOT NULL,
  `ApPaternoDoc` varchar(50) NOT NULL,
  `ApMaternoDoc` varchar(50) NOT NULL,
  `TelefonoDoc` varchar(9) DEFAULT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`IdDoc`, `DNIDoc`, `NombreDoc`, `ApPaternoDoc`, `ApMaternoDoc`, `TelefonoDoc`, `Estado`) VALUES
(1, '77665335', 'Lucia', 'Fernandez', 'Perez', NULL, NULL),
(2, '81999981', 'Pedro', 'Juarez', 'Rodriguez', '999765432', NULL),
(3, '71909015', 'Juan', 'Lopez', 'Lopez', NULL, NULL),
(4, '17627257', 'Jessie', 'Castillo', 'Rojas', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `IdGrupo` int(11) NOT NULL,
  `DescripcionGrupo` char(5) NOT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora`
--

CREATE TABLE `hora` (
  `IdHora` int(11) NOT NULL,
  `HoraInicio` char(20) NOT NULL,
  `HoraFin` char(20) NOT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `IdHorario` int(11) NOT NULL,
  `Dia` int(11) NOT NULL,
  `HoraTotal` int(11) NOT NULL,
  `Estado` int(2) DEFAULT NULL,
  `IdHora` int(11) NOT NULL,
  `IdAmb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horariodispo`
--

CREATE TABLE `horariodispo` (
  `IdHD` int(11) NOT NULL,
  `DiaHD` varchar(20) NOT NULL,
  `Estado` int(2) DEFAULT NULL,
  `IdHora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisito`
--

CREATE TABLE `requisito` (
  `IdReq` int(11) NOT NULL,
  `CodigoReq` mediumint(5) NOT NULL,
  `DescripcionReq` varchar(50) NOT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `IdSem` int(11) NOT NULL,
  `DescripcionSem` int(11) NOT NULL,
  `Estado` int(2) DEFAULT NULL,
  `IdCurGrup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contrasenia` varchar(20) NOT NULL,
  `TipoUsuario` varchar(50) NOT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Usuario`, `Contrasenia`, `TipoUsuario`, `Estado`) VALUES
(1, '73977192', '12345', 'Admin', NULL),
(2, '77665335', '12345', 'Doc', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`IdAmb`);

--
-- Indices de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  ADD PRIMARY KEY (`IdCiclo`);

--
-- Indices de la tabla `curgrup`
--
ALTER TABLE `curgrup`
  ADD PRIMARY KEY (`IdCurGrup`),
  ADD KEY `IdCurso` (`IdCurso`),
  ADD KEY `IdDoc` (`IdDoc`),
  ADD KEY `IdGrupo` (`IdGrupo`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`IdCurso`),
  ADD KEY `IdCiclo` (`IdCiclo`);

--
-- Indices de la tabla `cursorequisito`
--
ALTER TABLE `cursorequisito`
  ADD PRIMARY KEY (`IdCurReq`),
  ADD KEY `IdReq` (`IdReq`),
  ADD KEY `IdCurso` (`IdCurso`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`IdDoc`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`IdGrupo`);

--
-- Indices de la tabla `hora`
--
ALTER TABLE `hora`
  ADD PRIMARY KEY (`IdHora`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`IdHorario`),
  ADD KEY `IdAmb` (`IdAmb`),
  ADD KEY `IdHora` (`IdHora`);

--
-- Indices de la tabla `horariodispo`
--
ALTER TABLE `horariodispo`
  ADD PRIMARY KEY (`IdHD`),
  ADD KEY `IdHora` (`IdHora`);

--
-- Indices de la tabla `requisito`
--
ALTER TABLE `requisito`
  ADD PRIMARY KEY (`IdReq`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`IdSem`),
  ADD KEY `IdCurGrup` (`IdCurGrup`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `IdAmb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  MODIFY `IdCiclo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curgrup`
--
ALTER TABLE `curgrup`
  MODIFY `IdCurGrup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `IdCurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursorequisito`
--
ALTER TABLE `cursorequisito`
  MODIFY `IdCurReq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `IdDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `IdGrupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hora`
--
ALTER TABLE `hora`
  MODIFY `IdHora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `IdHorario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horariodispo`
--
ALTER TABLE `horariodispo`
  MODIFY `IdHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `requisito`
--
ALTER TABLE `requisito`
  MODIFY `IdReq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `IdSem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curgrup`
--
ALTER TABLE `curgrup`
  ADD CONSTRAINT `curgrup_ibfk_1` FOREIGN KEY (`IdDoc`) REFERENCES `docente` (`IdDoc`),
  ADD CONSTRAINT `curgrup_ibfk_2` FOREIGN KEY (`IdGrupo`) REFERENCES `grupo` (`IdGrupo`),
  ADD CONSTRAINT `curgrup_ibfk_3` FOREIGN KEY (`IdCurso`) REFERENCES `curso` (`IdCurso`),
  ADD CONSTRAINT `curgrup_ibfk_4` FOREIGN KEY (`IdCurso`) REFERENCES `curso` (`IdCurso`),
  ADD CONSTRAINT `curgrup_ibfk_5` FOREIGN KEY (`IdDoc`) REFERENCES `docente` (`IdDoc`),
  ADD CONSTRAINT `curgrup_ibfk_6` FOREIGN KEY (`IdGrupo`) REFERENCES `grupo` (`IdGrupo`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`IdCiclo`) REFERENCES `ciclo` (`IdCiclo`);

--
-- Filtros para la tabla `cursorequisito`
--
ALTER TABLE `cursorequisito`
  ADD CONSTRAINT `cursorequisito_ibfk_1` FOREIGN KEY (`IdReq`) REFERENCES `requisito` (`IdReq`),
  ADD CONSTRAINT `cursorequisito_ibfk_2` FOREIGN KEY (`IdCurso`) REFERENCES `curso` (`IdCurso`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`IdAmb`) REFERENCES `ambiente` (`IdAmb`),
  ADD CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`IdHora`) REFERENCES `hora` (`IdHora`);

--
-- Filtros para la tabla `horariodispo`
--
ALTER TABLE `horariodispo`
  ADD CONSTRAINT `horariodispo_ibfk_1` FOREIGN KEY (`IdHora`) REFERENCES `hora` (`IdHora`);

--
-- Filtros para la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD CONSTRAINT `semestre_ibfk_1` FOREIGN KEY (`IdCurGrup`) REFERENCES `curgrup` (`IdCurGrup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
