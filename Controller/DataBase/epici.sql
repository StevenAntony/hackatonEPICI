-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2019 a las 19:43:16
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

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`IdAmb`, `TipoAmb`, `DescripcionAmb`, `Estado`) VALUES
(1, 'Aula', '5', NULL),
(2, 'Aula', '6', NULL),
(3, 'Aula', '7', NULL),
(4, 'Aula', '8', NULL),
(5, 'Lab', '1', NULL),
(6, 'Lab', '2', NULL),
(7, 'Lab', '3', NULL),
(8, 'Lab', '4', NULL),
(9, 'Lab', '5', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `IdCiclo` int(11) NOT NULL,
  `DescripcionCiclo` varchar(50) NOT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciclo`
--

INSERT INTO `ciclo` (`IdCiclo`, `DescripcionCiclo`, `Estado`) VALUES
(1, 'PRIMERO', NULL),
(2, 'SEGUNDO', NULL),
(3, 'TERCERO', NULL),
(4, 'CUARTO', NULL),
(5, 'QUINTO', NULL),
(6, 'SEXTO', NULL),
(7, 'SEPTIMO', NULL),
(8, 'OCTAVO', NULL),
(9, 'NOVENO', NULL),
(10, 'DECIMO', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curgrup`
--

CREATE TABLE `curgrup` (
  `IdCurGrup` int(11) NOT NULL,
  `Estado` int(2) DEFAULT NULL,
  `IdCurso` int(11) NOT NULL,
  `IdGrupo` int(11) NOT NULL,
  `IdDoc` int(11) NOT NULL,
  `IdSem` int(11) NOT NULL
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
  `HoraP` char(11) NOT NULL,
  `HoraT` char(11) NOT NULL,
  `TipoCur` varchar(2) NOT NULL,
  `Estado` int(2) DEFAULT NULL,
  `IdCiclo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`IdCurso`, `CodigoCurso`, `DescripcionCurso`, `CreditoCurso`, `HoraP`, `HoraT`, `TipoCur`, `Estado`, `IdCiclo`) VALUES
(1, 'CL101', 'INFORMATICA BASICA', 4, '32', '48', 'E', NULL, 1),
(2, 'IA105', 'GEOMETRIA DESCRPTIVA', 4, '32', '48', 'G', NULL, 1),
(3, 'MM107', 'MATEMATICA BASICA', 4, '64', '32', 'G', NULL, 1),
(4, 'HU133', 'METODOLOGIA DEL ESTUDIO Y COMUNICACION', 3, '32', '32', 'G', NULL, 1),
(5, 'CL121', 'TECNICAS DE PROGRAMACION', 4, '32', '48', 'E', NULL, 1),
(8, 'CL164', 'ALGORITMO Y ESTRUCTURA DE DATOS I', 4, '32', '48', 'E', NULL, 2),
(9, 'MM185', 'CALCULO I', 4, '64', '32', 'G', NULL, 2),
(10, 'MM180', 'LOGICA MATEMATICA', 4, '32', '48', 'E', NULL, 2),
(11, 'CL169', 'DISEÑO ASISTIDO POR COMPUTADORA', 4, '32', '48', 'E', NULL, 2),
(12, 'CL186', 'DISEÑO GRAFICO', 3, '32', '32', 'ES', NULL, 2),
(13, 'CL187', 'TOPICOS DE INTERNET', 3, '32', '32', 'ES', NULL, 2);

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

--
-- Volcado de datos para la tabla `cursorequisito`
--

INSERT INTO `cursorequisito` (`IdCurReq`, `Estado`, `IdCurso`, `IdReq`) VALUES
(1, NULL, 8, 1),
(2, NULL, 9, 2),
(3, NULL, 10, 2),
(4, NULL, 11, 3);

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
(4, '17627257', 'Jessie', 'Castillo', 'Rojas', NULL, NULL),
(5, '17627256', 'Doris', 'Vasquez', 'Ramos', NULL, NULL),
(6, '15151615', 'Matias', 'Santisteban', 'Facundo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `IdGrupo` int(11) NOT NULL,
  `DescripcionGrupo` char(5) NOT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`IdGrupo`, `DescripcionGrupo`, `Estado`) VALUES
(1, 'A', NULL),
(2, 'B', NULL);

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

--
-- Volcado de datos para la tabla `hora`
--

INSERT INTO `hora` (`IdHora`, `HoraInicio`, `HoraFin`, `Estado`) VALUES
(1, '07:30', '08:20', NULL),
(2, '08:20', '09:10', NULL),
(3, '09:10', '10:00', NULL),
(4, '10:00', '10:50', NULL),
(5, '10:50', '11:40', NULL),
(6, '11:40', '12:30', NULL),
(7, '12:30', '13:20', NULL),
(8, '13:20', '14:10', NULL),
(9, '14:10', '15:00', NULL),
(10, '15:00', '15:50', NULL),
(11, '15:50', '16:40', NULL),
(12, '16:40', '17:30', NULL),
(13, '17:30', '18:20', NULL),
(14, '18:20', '19:10', NULL),
(15, '19:10', '20:00', NULL);

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
  `IdHora` int(11) NOT NULL,
  `IdDoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisito`
--

CREATE TABLE `requisito` (
  `IdReq` int(11) NOT NULL,
  `CodigoReq` char(5) NOT NULL,
  `DescripcionReq` varchar(50) NOT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requisito`
--

INSERT INTO `requisito` (`IdReq`, `CodigoReq`, `DescripcionReq`, `Estado`) VALUES
(1, 'CL121', 'TECNICAS DE PROGRAMACION', NULL),
(2, 'MM107', 'MATEMATICA BASICA', NULL),
(3, 'IA105', 'GEOMETRIA DESCRIPTIVA', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `IdSem` int(11) NOT NULL,
  `DescripcionSem` varchar(11) NOT NULL,
  `Estado` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`IdSem`, `DescripcionSem`, `Estado`) VALUES
(2, '2019-I', NULL);

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
(2, '77665335', '12345', 'Doc', NULL),
(3, '819999981', '12345', 'Doc', NULL),
(4, '71909015', '12345', 'Doc', NULL);

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
  ADD KEY `IdGrupo` (`IdGrupo`),
  ADD KEY `IdSem` (`IdSem`);

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
  ADD KEY `IdHora` (`IdHora`),
  ADD KEY `IdDoc` (`IdDoc`);

--
-- Indices de la tabla `requisito`
--
ALTER TABLE `requisito`
  ADD PRIMARY KEY (`IdReq`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`IdSem`);

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
  MODIFY `IdAmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  MODIFY `IdCiclo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `curgrup`
--
ALTER TABLE `curgrup`
  MODIFY `IdCurGrup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `IdCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cursorequisito`
--
ALTER TABLE `cursorequisito`
  MODIFY `IdCurReq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `IdDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `IdGrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hora`
--
ALTER TABLE `hora`
  MODIFY `IdHora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `IdReq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `IdSem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `curgrup_ibfk_6` FOREIGN KEY (`IdGrupo`) REFERENCES `grupo` (`IdGrupo`),
  ADD CONSTRAINT `curgrup_ibfk_7` FOREIGN KEY (`IdSem`) REFERENCES `semestre` (`IdSem`);

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
  ADD CONSTRAINT `horariodispo_ibfk_1` FOREIGN KEY (`IdHora`) REFERENCES `hora` (`IdHora`),
  ADD CONSTRAINT `horariodispo_ibfk_2` FOREIGN KEY (`IdDoc`) REFERENCES `docente` (`IdDoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
