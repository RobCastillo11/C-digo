-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2023 a las 19:24:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ps1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliados`
--

CREATE TABLE `afiliados` (
  `ID` int(11) NOT NULL,
  `NO_EMPLEADO` varchar(255) NOT NULL,
  `ACH` varchar(255) NOT NULL,
  `AD` varchar(255) NOT NULL,
  `DAS` varchar(255) NOT NULL,
  `PQL` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `afiliados`
--

INSERT INTO `afiliados` (`ID`, `NO_EMPLEADO`, `ACH`, `AD`, `DAS`, `PQL`, `fecha_registro`) VALUES
(1, '123456', 'Sí', 'No', 'No', 'Sí', '2023-09-24 03:23:27'),
(2, '789012', 'No', 'Sí', 'Sí', 'No', '2023-09-24 03:23:27'),
(3, '456789', 'Sí', 'Sí', 'Sí', 'Sí', '2023-09-24 03:23:27'),
(4, '345678', 'No', 'No', 'Sí', 'No', '2023-09-24 03:23:27'),
(5, '901234', 'Sí', 'No', 'No', 'Sí', '2023-09-24 03:23:27'),
(6, '123456', 'Sí', 'No', 'No', 'Sí', '2023-09-24 03:23:48'),
(7, '789012', 'No', 'Sí', 'Sí', 'No', '2023-09-24 03:23:48'),
(8, '456789', 'Sí', 'Sí', 'Sí', 'Sí', '2023-09-24 03:23:48'),
(9, '345678', 'No', 'No', 'Sí', 'No', '2023-09-24 03:23:48'),
(10, '901234', 'Sí', 'No', 'No', 'Sí', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorizacion`
--

CREATE TABLE `categorizacion` (
  `ID` int(11) NOT NULL,
  `NO_EMPLEADO` varchar(255) NOT NULL,
  `PUESTO` varchar(255) DEFAULT NULL,
  `FUNCION` varchar(255) DEFAULT NULL,
  `ACTIVIDADES` varchar(255) DEFAULT NULL,
  `DESCRIPCION_ESTATUS` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorizacion`
--

INSERT INTO `categorizacion` (`ID`, `NO_EMPLEADO`, `PUESTO`, `FUNCION`, `ACTIVIDADES`, `DESCRIPCION_ESTATUS`, `fecha_registro`) VALUES
(1, '123456', 'Analista de Recursos Humanos', 'Gestión de Personal', 'Administración de Personal', 'Eficiente', '2023-09-24 03:23:48'),
(2, '789012', 'Representante de Ventas', 'Ventas', 'Venta de Productos', 'Sobresaliente', '2023-09-24 03:23:48'),
(3, '456789', 'Desarrollador de Software', 'Tecnología', 'Desarrollo de Aplicaciones', 'Competente', '2023-09-24 03:23:48'),
(4, '345678', 'Contador', 'Contabilidad', 'Registro Contable', 'Sobresaliente', '2023-09-24 03:23:48'),
(5, '901234', 'Gerente de Logística', 'Logística', 'Gestión de Almacenamiento', 'Eficiente', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comisiones`
--

CREATE TABLE `comisiones` (
  `ID` int(11) NOT NULL,
  `NO_EMPLEADO` varchar(255) NOT NULL,
  `CELP` varchar(255) DEFAULT NULL,
  `PERIODO` varchar(255) DEFAULT NULL,
  `FDIDC` varchar(255) DEFAULT NULL,
  `FDCDC` varchar(255) DEFAULT NULL,
  `OF_COMISION` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comisiones`
--

INSERT INTO `comisiones` (`ID`, `NO_EMPLEADO`, `CELP`, `PERIODO`, `FDIDC`, `FDCDC`, `OF_COMISION`, `fecha_registro`) VALUES
(1, '123456', 'No', NULL, NULL, NULL, NULL, '2023-09-24 03:23:48'),
(2, '789012', 'Sí', '2023-03', '2023-03-10', '2023-03-15', 'Sucursal A', '2023-09-24 03:23:48'),
(3, '456789', 'No', NULL, NULL, NULL, NULL, '2023-09-24 03:23:48'),
(4, '345678', 'No', NULL, NULL, NULL, NULL, '2023-09-24 03:23:48'),
(5, '901234', 'Sí', '2023-02', '2023-02-05', '2023-02-10', 'Sucursal B', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_reconocimiento_cuerso`
--

CREATE TABLE `cursos_reconocimiento_cuerso` (
  `id` int(11) NOT NULL,
  `NO_EMPLEADO_14` varchar(255) NOT NULL,
  `GA` varchar(255) NOT NULL,
  `BLOQUE` varchar(255) NOT NULL,
  `CMI` varchar(255) DEFAULT NULL,
  `rpet` varchar(255) DEFAULT NULL,
  `CSPA` varchar(255) DEFAULT NULL,
  `JAC` varchar(255) DEFAULT NULL,
  `NDE` varchar(255) DEFAULT NULL,
  `FECHA1` date DEFAULT NULL,
  `CURSO` varchar(255) DEFAULT NULL,
  `QE` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos_reconocimiento_cuerso`
--

INSERT INTO `cursos_reconocimiento_cuerso` (`id`, `NO_EMPLEADO_14`, `GA`, `BLOQUE`, `CMI`, `rpet`, `CSPA`, `JAC`, `NDE`, `FECHA1`, `CURSO`, `QE`, `fecha_registro`) VALUES
(1, '123456', 'Sí', 'Bloque A', 'No', 'Sí', 'No', 'Sí', 'No', '2023-01-15', 'Curso de Introducción', 'Sí', '2023-09-24 03:23:48'),
(2, '789012', 'No', '', 'Sí', 'No', 'Sí', 'No', 'Sí', '2023-02-20', 'Curso de Ventas', 'No', '2023-09-24 03:23:48'),
(3, '456789', 'Sí', 'Bloque B', 'No', 'No', 'No', 'No', 'Sí', '2023-03-25', 'Curso de Desarrollo Web', 'Sí', '2023-09-24 03:23:48'),
(4, '345678', 'No', '', 'No', 'No', 'No', 'No', 'No', NULL, NULL, 'No', '2023-09-24 03:23:48'),
(5, '901234', 'Sí', 'Bloque C', 'Sí', 'Sí', 'Sí', 'Sí', 'Sí', '2023-04-30', 'Curso de Logística', 'Sí', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_del_empleado`
--

CREATE TABLE `datos_del_empleado` (
  `id` int(11) NOT NULL,
  `NO_EMPLEADO_7` varchar(255) DEFAULT NULL,
  `DIRECCION_ACTUAL` varchar(255) DEFAULT NULL,
  `AREA1` varchar(255) DEFAULT NULL,
  `FUNCION` varchar(255) DEFAULT NULL,
  `DDE` varchar(255) DEFAULT NULL,
  `PQCBDLC` varchar(255) DEFAULT NULL,
  `PERIODO` varchar(255) DEFAULT NULL,
  `OBSERVACIONES` text DEFAULT NULL,
  `ID_EMPLEADO` varchar(255) DEFAULT NULL,
  `CLASIF` varchar(255) DEFAULT NULL,
  `FECHA_DE_INGRESO` date DEFAULT NULL,
  `CUIP` varchar(255) DEFAULT NULL,
  `CUP` varchar(255) DEFAULT NULL,
  `NO_CLASIFICACION` varchar(255) DEFAULT NULL,
  `CLASIFICACION` varchar(255) DEFAULT NULL,
  `SINDICALIZADO` varchar(255) DEFAULT NULL,
  `ADSCRITO` varchar(255) DEFAULT NULL,
  `DDOM` varchar(255) DEFAULT NULL,
  `IMSS` varchar(255) DEFAULT NULL,
  `CCLOC` varchar(255) DEFAULT NULL,
  `VENCIMIENTO_CREDENCIAL` date DEFAULT NULL,
  `FOLIO_CREDENCIAL` varchar(255) DEFAULT NULL,
  `UBICACION_FISICA` varchar(255) DEFAULT NULL,
  `ZONA` varchar(255) DEFAULT NULL,
  `FECHA_DE_INGRESO_2` date DEFAULT NULL,
  `FECHA_CONCLUSION` date DEFAULT NULL,
  `FECHA_REINGRESO` date DEFAULT NULL,
  `CAMBIO_DE_APOYO` varchar(255) DEFAULT NULL,
  `SUELDO_BASE` decimal(10,2) DEFAULT NULL,
  `PRESTACIONES` decimal(10,2) DEFAULT NULL,
  `COMPENSACION` decimal(10,2) DEFAULT NULL,
  `NO_COMP` varchar(255) DEFAULT NULL,
  `ANTIGUEDAD_GRADO` varchar(255) DEFAULT NULL,
  `COLUMNA_TEMPORAL` varchar(255) DEFAULT NULL,
  `PROMOCION_2005` varchar(255) DEFAULT NULL,
  `RFC` varchar(255) DEFAULT NULL,
  `HOMOCLAVE` varchar(255) DEFAULT NULL,
  `NO_CUENTA_BANCO` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_del_empleado`
--

INSERT INTO `datos_del_empleado` (`id`, `NO_EMPLEADO_7`, `DIRECCION_ACTUAL`, `AREA1`, `FUNCION`, `DDE`, `PQCBDLC`, `PERIODO`, `OBSERVACIONES`, `ID_EMPLEADO`, `CLASIF`, `FECHA_DE_INGRESO`, `CUIP`, `CUP`, `NO_CLASIFICACION`, `CLASIFICACION`, `SINDICALIZADO`, `ADSCRITO`, `DDOM`, `IMSS`, `CCLOC`, `VENCIMIENTO_CREDENCIAL`, `FOLIO_CREDENCIAL`, `UBICACION_FISICA`, `ZONA`, `FECHA_DE_INGRESO_2`, `FECHA_CONCLUSION`, `FECHA_REINGRESO`, `CAMBIO_DE_APOYO`, `SUELDO_BASE`, `PRESTACIONES`, `COMPENSACION`, `NO_COMP`, `ANTIGUEDAD_GRADO`, `COLUMNA_TEMPORAL`, `PROMOCION_2005`, `RFC`, `HOMOCLAVE`, `NO_CUENTA_BANCO`, `fecha_registro`) VALUES
(1, '123456', 'Calle Principal 123', 'Recursos Humanos', 'Analista de Recursos Humanos', 'Departamento de Personal', 'Sí', '2023-01', 'Ninguna', 'EM123', 'A', '2021-05-15', '123456789', '987654321', 'A001', 'Administrativo', 'Sí', 'No', 'Oficina 101', '1234567890', 'CDMX', '2023-05-15', 'CR2023001', 'Oficina 1', 'Zona 1', '2021-05-15', '2023-05-15', NULL, 'No', 45000.00, 5000.00, 2000.00, 'Comp001', '10 años', 'Temp001', 'Prom001', 'PERJ012345HDFXYZA', 'A1', '1234567890', '2023-09-24 03:23:48'),
(2, '789012', 'Avenida Secundaria 456', 'Ventas', 'Representante de Ventas', 'Ventas Regionales', 'Sí', '2023-02', 'Ninguna', 'EM789', 'B', '2020-03-20', '987654321', '123456789', 'B001', 'Operativo', 'Sí', 'No', 'Oficina 201', '9876543210', 'CDMX', '2023-03-20', 'CR2023002', 'Oficina 2', 'Zona 2', '2020-03-20', '2023-03-20', NULL, 'Sí', 40000.00, 4500.00, 1800.00, 'Comp002', '3 años', 'Temp002', 'Prom002', 'LOPG850320HDFXYZB', 'B2', '9876543210', '2023-09-24 03:23:48'),
(3, '456789', 'Calle de la Paz 789', 'Tecnología', 'Desarrollador de Software', 'Desarrollo de Aplicaciones', 'No', NULL, 'Ninguna', 'EM456', 'A', '2022-07-10', '123456789', '987654321', 'A002', 'Técnico', 'No', 'Sí', 'Oficina 301', '1234567891', 'CDMX', '2023-07-10', 'CR2023003', 'Oficina 3', 'Zona 3', '2022-07-10', NULL, NULL, 'Sí', 42000.00, 4800.00, 1900.00, 'Comp003', '1 año', 'Temp003', 'Prom003', 'MELP920710HDFXYZC', 'C3', '1234567891', '2023-09-24 03:23:48'),
(4, '345678', 'Boulevard Principal 101', 'Contabilidad', 'Contador', 'Contabilidad General', 'Sí', '2023-03', 'Ninguna', 'EM345', 'B', '2019-01-25', '987654321', '123456789', 'B002', 'Administrativo', 'No', 'No', 'Oficina 401', '9876543212', 'CDMX', '2023-01-25', 'CR2023004', 'Oficina 4', 'Zona 4', '2019-01-25', '2023-01-25', NULL, 'No', 42000.00, 4800.00, 1900.00, 'Comp004', '4 años', 'Temp004', 'Prom004', 'GOFF801225HDFXYZD', 'D4', '9876543212', '2023-09-24 03:23:48'),
(5, '901234', 'Calle de los Sueños 567', 'Logística', 'Gerente de Logística', 'Logística de Almacenamiento', 'Sí', '2023-04', 'Ninguna', 'EM901', 'A', '2020-11-05', '123456789', '987654321', 'A003', 'Gerencial', 'Sí', 'No', 'Oficina 501', '1234567892', 'CDMX', '2023-11-05', 'CR2023005', 'Oficina 5', 'Zona 5', '2020-11-05', '2023-11-05', NULL, 'Sí', 55000.00, 6500.00, 2500.00, 'Comp005', '2 años', 'Temp005', 'Prom005', 'HETL950605HDFXYZE', 'E5', '1234567892', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_del_empleo`
--

CREATE TABLE `datos_del_empleo` (
  `ID` int(11) NOT NULL,
  `NO_EMPLEADO` varchar(255) NOT NULL,
  `NO` varchar(255) DEFAULT NULL,
  `NA` varchar(255) DEFAULT NULL,
  `NIVEL` varchar(255) DEFAULT NULL,
  `CATEGORIA` varchar(255) DEFAULT NULL,
  `GRADO_HOMOLOGADO` varchar(255) DEFAULT NULL,
  `GRADO` varchar(255) DEFAULT NULL,
  `NUMERO_ANTERIOR` varchar(255) DEFAULT NULL,
  `NUMERO_NUEVO` varchar(255) DEFAULT NULL,
  `CCLA` varchar(255) DEFAULT NULL,
  `ACTUALIZACION` varchar(255) DEFAULT NULL,
  `VETTING` varchar(255) DEFAULT NULL,
  `OFICIALIA_MAYOR` varchar(255) DEFAULT NULL,
  `RNPSP` varchar(255) DEFAULT NULL,
  `AREA` varchar(255) DEFAULT NULL,
  `AGRUPAMIENTOS` varchar(255) DEFAULT NULL,
  `DESCRIPCION` varchar(255) DEFAULT NULL,
  `POM` varchar(255) DEFAULT NULL,
  `PGNP` varchar(255) DEFAULT NULL,
  `FOLIO` varchar(255) DEFAULT NULL,
  `CHYJ` varchar(255) DEFAULT NULL,
  `BECARIOS` varchar(255) DEFAULT NULL,
  `METROPOLITANA` varchar(255) DEFAULT NULL,
  `GDOT` varchar(255) DEFAULT NULL,
  `sdC` varchar(255) DEFAULT NULL,
  `FDPDE` date DEFAULT NULL,
  `FDC` date DEFAULT NULL,
  `FECB` date DEFAULT NULL,
  `FDED` date DEFAULT NULL,
  `FDE` date DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_del_empleo`
--

INSERT INTO `datos_del_empleo` (`ID`, `NO_EMPLEADO`, `NO`, `NA`, `NIVEL`, `CATEGORIA`, `GRADO_HOMOLOGADO`, `GRADO`, `NUMERO_ANTERIOR`, `NUMERO_NUEVO`, `CCLA`, `ACTUALIZACION`, `VETTING`, `OFICIALIA_MAYOR`, `RNPSP`, `AREA`, `AGRUPAMIENTOS`, `DESCRIPCION`, `POM`, `PGNP`, `FOLIO`, `CHYJ`, `BECARIOS`, `METROPOLITANA`, `GDOT`, `sdC`, `FDPDE`, `FDC`, `FECB`, `FDED`, `FDE`, `fecha_registro`) VALUES
(1, '123456', '123', '01', 'Ejecutivo', 'A', 'A1', 'A1', 'E123', 'N123', 'CLA1', '2023-03-01', '2023-03-02', 'Sí', '12345', 'RH', 'G001', 'General', '1234', '567', 'CR001', 'CHYJ001', 'Sí', 'No', 'Sí', 'Sí', '2023-04-01', '2023-04-02', '2023-04-03', '2023-04-04', '2023-04-05', '2023-09-24 03:23:48'),
(2, '789012', '456', '02', 'Ejecutivo', 'B', 'B2', 'B2', 'E456', 'N456', 'CLA2', '2023-03-03', '2023-03-04', 'Sí', '23456', 'Ventas', 'G002', 'Especializado', '2345', '678', 'CR002', 'CHYJ002', 'No', 'No', 'Sí', 'No', '2023-05-01', '2023-05-02', '2023-05-03', '2023-05-04', '2023-05-05', '2023-09-24 03:23:48'),
(3, '456789', '789', '03', 'Técnico', 'A', 'A3', 'A3', 'E789', 'N789', 'CLA3', '2023-03-05', '2023-03-06', 'No', '34567', 'Tecnología', 'G003', 'General', '3456', '789', 'CR003', 'CHYJ003', 'Sí', 'No', 'No', 'Sí', '2023-06-01', '2023-06-02', '2023-06-03', '2023-06-04', '2023-06-05', '2023-09-24 03:23:48'),
(4, '345678', '012', '04', 'Ejecutivo', 'C', 'C1', 'C1', 'E012', 'N012', 'CLA4', '2023-03-07', '2023-03-08', 'No', '45678', 'Contabilidad', 'G004', 'Especializado', '4567', '890', 'CR004', 'CHYJ004', 'No', 'Sí', 'No', 'No', '2023-07-01', '2023-07-02', '2023-07-03', '2023-07-04', '2023-07-05', '2023-09-24 03:23:48'),
(5, '901234', '234', '05', 'Gerente', 'A', 'A5', 'A5', 'E234', 'N234', 'CLA5', '2023-03-09', '2023-03-10', 'Sí', '56789', 'Logística', 'G005', 'General', '5678', '901', 'CR005', 'CHYJ005', 'No', 'Sí', 'No', 'Sí', '2023-08-01', '2023-08-02', '2023-08-03', '2023-08-04', '2023-08-05', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_de_estudio`
--

CREATE TABLE `datos_de_estudio` (
  `ID` int(11) NOT NULL,
  `NO_EMPLEADO` varchar(255) NOT NULL,
  `TDE` date NOT NULL,
  `ESTUDIOS` varchar(255) NOT NULL,
  `ESPECIALIDAD` varchar(255) NOT NULL,
  `DOCUMENTO` varchar(255) NOT NULL,
  `CCAC` varchar(255) NOT NULL,
  `CFME` varchar(255) DEFAULT NULL,
  `GRUPO` varchar(255) DEFAULT NULL,
  `GENERACION` varchar(255) DEFAULT NULL,
  `TdG` varchar(255) DEFAULT NULL,
  `DURACION` varchar(255) NOT NULL,
  `TDS` varchar(255) NOT NULL,
  `CDAPT` varchar(255) NOT NULL,
  `CPAF` varchar(255) NOT NULL,
  `TallasDomicilios` varchar(255) NOT NULL,
  `NDC` varchar(255) DEFAULT NULL,
  `REPROBO_EXAMEN` varchar(255) NOT NULL,
  `EDLC` varchar(255) NOT NULL,
  `PEAG` varchar(255) NOT NULL,
  `CPC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO datos_de_estudio (NO_EMPLEADO, TDE, ESTUDIOS, ESPECIALIDAD, DOCUMENTO, INSTITUTO, CFME, GRUPO, CCAC, GENERACION, TdG, DURACION, TDS, CDAPT, CPAF, TallasDomicilios, NDC, REPROBO_EXAMEN, EDLC, PEAG, CPC)
VALUES ('123456', '10-10-2023', 'Licenciatura en Informática', 'Informática', 'Diploma de Licenciatura', 'Universidad XYZ', 'Curso A', 'Grupo 1', 'OPERATIVA', 'Generación 2020', 'A', '4 años', '8 años', 'Aprobado', 'Aprobado', 'Sí', '123', 'No', 'Sí', 'Sí', 'Curso X');


INSERT INTO datos_de_estudio (NO_EMPLEADO, TDE, ESTUDIOS, ESPECIALIDAD, DOCUMENTO, INSTITUTO, CFME, GRUPO, CCAC, GENERACION, TdG, DURACION, TDS, CDAPT, CPAF, TallasDomicilios, NDC, REPROBO_EXAMEN, EDLC, PEAG, CPC)
VALUES ('789012', '2023-09-15', 'Ingeniería Eléctrica', 'Electrónica', 'Título de Ingeniero', 'Universidad ABC', 'Curso B', 'Grupo 2', 'ADMINISTRATIVA', 'Generación 2019', 'B', '5 años', '10 años', 'Aprobado', 'Aprobado', 'No', '456', 'Sí', 'No', 'No', 'Curso Y');


INSERT INTO datos_de_estudio (NO_EMPLEADO, TDE, ESTUDIOS, ESPECIALIDAD, DOCUMENTO, INSTITUTO, CFME, GRUPO, CCAC, GENERACION, TdG, DURACION, TDS, CDAPT, CPAF, TallasDomicilios, NDC, REPROBO_EXAMEN, EDLC, PEAG, CPC)
VALUES ('456789', '2022-05-20', 'Licenciatura en Economía', 'Economía', 'Diploma de Licenciatura', 'Universidad DEF', 'Curso C', 'Grupo 3', 'NO_CURSADA', 'Generación 2018', 'C', '4 años', '6 años', 'Aprobado', 'No aplica', 'Sí', '789', 'No', 'Sí', 'No', 'Curso Z');


INSERT INTO datos_de_estudio (NO_EMPLEADO, TDE, ESTUDIOS, ESPECIALIDAD, DOCUMENTO, INSTITUTO, CFME, GRUPO, CCAC, GENERACION, TdG, DURACION, TDS, CDAPT, CPAF, TallasDomicilios, NDC, REPROBO_EXAMEN, EDLC, PEAG, CPC)
VALUES ('345678', '2021-12-03', 'Licenciatura en Derecho', 'Derecho', 'Diploma de Licenciatura', 'Universidad GHI', 'Curso D', 'Grupo 4', 'NO CUENTA', 'Generación 2017', 'D', '4 años', '5 años', 'Aprobado', 'No aplica', 'No', '654', 'Sí', 'Sí', 'No', 'Curso W');


INSERT INTO datos_de_estudio (NO_EMPLEADO, TDE, ESTUDIOS, ESPECIALIDAD, DOCUMENTO, INSTITUTO, CFME, GRUPO, CCAC, GENERACION, TdG, DURACION, TDS, CDAPT, CPAF, TallasDomicilios, NDC, REPROBO_EXAMEN, EDLC, PEAG, CPC)
VALUES ('901234', '2020-08-10', 'Licenciatura en Psicología', 'Psicología', 'Diploma de Licenciatura', 'Universidad JKL', 'Curso E', 'Grupo 5', 'OPERATIVA', 'Generación 2016', 'E', '4 años', '7 años', 'Aprobado', 'Aprobado', 'Sí', '987', 'No', 'No', 'No', 'Curso V');





-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_familia`
--

CREATE TABLE `datos_familia` (
  `id` int(11) NOT NULL,
  `NO_EMPLEADO_2` varchar(10) NOT NULL,
  `TEL_CAS` varchar(255) DEFAULT NULL,
  `TEL_CEL` varchar(255) DEFAULT NULL,
  `TS` varchar(255) DEFAULT NULL,
  `IDIOMA` varchar(255) DEFAULT NULL,
  `ESCRITURA` varchar(255) DEFAULT NULL,
  `LECTURA` varchar(255) DEFAULT NULL,
  `DICCION` varchar(255) DEFAULT NULL,
  `DIALECTO` varchar(255) DEFAULT NULL,
  `NDE` varchar(255) DEFAULT NULL,
  `NES` varchar(255) DEFAULT NULL,
  `APEA` varchar(255) DEFAULT NULL,
  `AMEA` varchar(255) DEFAULT NULL,
  `NHS` varchar(255) DEFAULT NULL,
  `NDH` varchar(255) DEFAULT NULL,
  `APDH` varchar(255) DEFAULT NULL,
  `AMDH` varchar(255) DEFAULT NULL,
  `SEXOH` varchar(255) DEFAULT NULL,
  `FNH` date DEFAULT NULL,
  `EDADH` varchar(255) DEFAULT NULL,
  `LDR` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_familia`
--

INSERT INTO `datos_familia` (`id`, `NO_EMPLEADO_2`, `TEL_CAS`, `TEL_CEL`, `TS`, `IDIOMA`, `ESCRITURA`, `LECTURA`, `DICCION`, `DIALECTO`, `NDE`, `NES`, `APEA`, `AMEA`, `NHS`, `NDH`, `APDH`, `AMDH`, `SEXOH`, `FNH`, `EDADH`, `LDR`, `fecha_registro`) VALUES
(1, '123456', '555-1234', '555-5678', 'Español', 'Inglés', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Padrastro', 'Madrastra', 'Masculino', '1960-01-15', '63', 'No', '2023-09-24 03:19:48'),
(2, '789012', '555-4321', '555-8765', 'Español', 'Francés', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Abuelo', 'Abuela', 'Masculino', '1955-03-20', '68', 'Sí', '2023-09-24 03:19:48'),
(3, '456789', '555-5678', '555-9876', 'Español', 'Alemán', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Abuelo', 'Abuela', 'Masculino', '1968-08-10', '55', 'No', '2023-09-24 03:19:48'),
(4, '345678', '555-6789', '555-8765', 'Español', 'Italiano', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Tío', 'Tía', 'Masculino', '1950-12-25', '72', 'No', '2023-09-24 03:19:48'),
(5, '901234', '555-7890', '555-7654', 'Español', 'Portugués', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Primo', 'Prima', 'Masculino', '1975-06-05', '67', 'No', '2023-09-24 03:19:48'),
(6, '123456', '555-1234', '555-5678', 'Español', 'Inglés', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Padrastro', 'Madrastra', 'Masculino', '1960-01-15', '63', 'No', '2023-09-24 03:20:22'),
(7, '789012', '555-4321', '555-8765', 'Español', 'Francés', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Abuelo', 'Abuela', 'Masculino', '1955-03-20', '68', 'Sí', '2023-09-24 03:20:22'),
(8, '456789', '555-5678', '555-9876', 'Español', 'Alemán', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Abuelo', 'Abuela', 'Masculino', '1968-08-10', '55', 'No', '2023-09-24 03:20:22'),
(9, '345678', '555-6789', '555-8765', 'Español', 'Italiano', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Tío', 'Tía', 'Masculino', '1950-12-25', '72', 'No', '2023-09-24 03:20:22'),
(10, '901234', '555-7890', '555-7654', 'Español', 'Portugués', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Primo', 'Prima', 'Masculino', '1975-06-05', '67', 'No', '2023-09-24 03:20:22'),
(11, '123456', '555-1234', '555-5678', 'Español', 'Inglés', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Padrastro', 'Madrastra', 'Masculino', '1960-01-15', '63', 'No', '2023-09-24 03:21:50'),
(12, '789012', '555-4321', '555-8765', 'Español', 'Francés', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Abuelo', 'Abuela', 'Masculino', '1955-03-20', '68', 'Sí', '2023-09-24 03:21:50'),
(13, '456789', '555-5678', '555-9876', 'Español', 'Alemán', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Abuelo', 'Abuela', 'Masculino', '1968-08-10', '55', 'No', '2023-09-24 03:21:50'),
(14, '345678', '555-6789', '555-8765', 'Español', 'Italiano', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Tío', 'Tía', 'Masculino', '1950-12-25', '72', 'No', '2023-09-24 03:21:50'),
(15, '901234', '555-7890', '555-7654', 'Español', 'Portugués', 'Sí', 'Sí', 'Sí', 'No', 'No', 'Sí', 'Padre', 'Madre', 'Hermano', 'Hermana', 'Primo', 'Prima', 'Masculino', '1975-06-05', '67', 'No', '2023-09-24 03:21:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_laborales_personal_c`
--

CREATE TABLE `dato_laborales_personal_c` (
  `ID` int(11) NOT NULL,
  `NO_EMPLEADO` varchar(255) NOT NULL,
  `AREA_ADSCRIPCION` varchar(255) DEFAULT NULL,
  `TEL_OFICINA` varchar(255) DEFAULT NULL,
  `DOMICILIO_OFICINA` varchar(255) DEFAULT NULL,
  `CARGO_FUNCION` varchar(255) DEFAULT NULL,
  `JEFE_INMEDIATO` varchar(255) DEFAULT NULL,
  `ACTUALIZACION` date DEFAULT NULL,
  `CVE_DIRECCION` varchar(255) DEFAULT NULL,
  `DIRECCION` varchar(255) DEFAULT NULL,
  `CVE_AREA` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dato_laborales_personal_c`
--

INSERT INTO `dato_laborales_personal_c` (`ID`, `NO_EMPLEADO`, `AREA_ADSCRIPCION`, `TEL_OFICINA`, `DOMICILIO_OFICINA`, `CARGO_FUNCION`, `JEFE_INMEDIATO`, `ACTUALIZACION`, `CVE_DIRECCION`, `DIRECCION`, `CVE_AREA`, `fecha_registro`) VALUES
(1, '123456', 'Recursos Humanos', '555-1010', 'Oficina 101', 'Analista de Recursos Humanos', 'Supervisor RH', '2023-03-01', 'CD001', 'Calle Principal 123', 'RH001', '2023-09-24 03:23:48'),
(2, '789012', 'Ventas', '555-2020', 'Oficina 201', 'Representante de Ventas', 'Gerente de Ventas', '2023-03-02', 'CD002', 'Avenida Secundaria 456', 'V001', '2023-09-24 03:23:48'),
(3, '456789', 'Tecnología', '555-3030', 'Oficina 301', 'Desarrollador de Software', 'Líder de Desarrollo', '2023-03-03', 'CD003', 'Calle de la Paz 789', 'T001', '2023-09-24 03:23:48'),
(4, '345678', 'Contabilidad', '555-4040', 'Oficina 401', 'Contador', 'Contador Jefe', '2023-03-04', 'CD004', 'Boulevard Principal 101', 'C001', '2023-09-24 03:23:48'),
(5, '901234', 'Logística', '555-5050', 'Oficina 501', 'Gerente de Logística', 'Gerente General', '2023-03-05', 'CD005', 'Calle de los Sueños 567', 'L001', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generales`
--

CREATE TABLE `generales` (
  `ID` int(11) NOT NULL,
  `NO_EMPLEADO` varchar(10) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL,
  `AP` varchar(255) NOT NULL,
  `AM` varchar(255) NOT NULL,
  `FN` date NOT NULL,
  `EDAD` int(11) DEFAULT NULL,
  `SEXO` varchar(2) NOT NULL,
  `CORREO` varchar(255) NOT NULL,
  `EC` varchar(255) NOT NULL,
  `SMN` varchar(9) NOT NULL,
  `LICENCIA` varchar(255) NOT NULL,
  `INEF` varchar(255) NOT NULL,
  `INEA` varchar(255) NOT NULL,
  `LN` varchar(255) NOT NULL,
  `CALLE` varchar(255) NOT NULL,
  `No_int` varchar(255) DEFAULT NULL,
  `No_ext` varchar(255) DEFAULT NULL,
  `COLONIA` varchar(255) NOT NULL,
  `MUNICIPIO` varchar(255) NOT NULL,
  `ESTADO` varchar(255) NOT NULL,
  `CP` varchar(5) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `CONSIDERACIONES` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generales`
--

INSERT INTO `generales` (`ID`, `NO_EMPLEADO`, `NOMBRE`, `AP`, `AM`, `FN`, `EDAD`, `SEXO`, `CORREO`, `EC`, `SMN`, `LICENCIA`, `INEF`, `INEA`, `LN`, `CALLE`, `No_int`, `No_ext`, `COLONIA`, `MUNICIPIO`, `ESTADO`, `CP`, `CURP`, `fecha_registro`, `CONSIDERACIONES`) VALUES
(1, '123456', 'Juan', 'Pérez', 'Gómez', '1990-05-15', 33, 'M', 'juan.perez@example.com', 'Soltero', '123456789', 'Licencia A', 'INEF001', 'INEA002', 'LN003', 'Calle 123', '12', '34', 'Centro', 'Ciudad', 'Estado', '12345', 'PERR900515HDFXYZA', '2023-09-24 03:19:48', 'Soy un aguacate y que como que escuchas a 2pack negros... negros'),
(2, '789012', 'Ana', 'López', 'García', '1985-03-20', 38, 'F', 'ana.lopez@example.com', 'Casada', '987654321', 'Licencia B', 'INEF003', 'INEA004', 'LN005', 'Avenida 456', '56', '78', 'Residencial', 'Pueblo', 'Estado', '67890', 'LOPG850320HDFXYZB', '2023-09-24 03:19:48', NULL),
(3, '456789', 'Pedro', 'Rodríguez', 'Martínez', '1992-08-10', 31, 'M', 'pedro.rodriguez@example.com', 'Soltero', '456789012', 'Licencia C', 'INEF005', 'INEA006', 'LN007', 'Calle 789', '34', '56', 'Colina', 'Villa', 'Estado', '23456', 'ROPM920810HDFXYZC', '2023-09-24 03:19:48', NULL),
(4, '345678', 'María', 'González', 'Fernández', '1980-12-25', 42, 'F', 'maria.gonzalez@example.com', 'Casada', '345678901', 'Licencia A', 'INEF002', 'INEA003', 'LN004', 'Boulevard 567', '78', '90', 'Montaña', 'Pueblo', 'Estado', '34567', 'GOFF801225HDFXYZD', '2023-09-24 03:19:48', NULL),
(5, '901234', 'Luis', 'Hernández', 'Torres', '1995-06-05', 28, 'M', 'luis.hernandez@example.com', 'Soltero', '901234567', 'Licencia B', 'INEF004', 'INEA005', 'LN006', 'Callejón 678', '56', '78', 'Oasis', 'Ciudad', 'Estado', '45678', 'HETL950605HDFXYZE', '2023-09-24 03:19:48', NULL),
(6, '123456', 'Juan', 'Pérez', 'Gómez', '1990-05-15', 33, 'M', 'juan.perez@example.com', 'Soltero', '123456789', 'Licencia A', 'INEF001', 'INEA002', 'LN003', 'Calle 123', '12', '34', 'Centro', 'Ciudad', 'Estado', '12345', 'PERR900515HDFXYZA', '2023-09-24 03:20:22', 'Soy un aguacate y que como que escuchas a 2pack negros... negros'),
(7, '789012', 'Ana', 'López', 'García', '1985-03-20', 38, 'F', 'ana.lopez@example.com', 'Casada', '987654321', 'Licencia B', 'INEF003', 'INEA004', 'LN005', 'Avenida 456', '56', '78', 'Residencial', 'Pueblo', 'Estado', '67890', 'LOPG850320HDFXYZB', '2023-09-24 03:20:22', NULL),
(8, '456789', 'Pedro', 'Rodríguez', 'Martínez', '1992-08-10', 31, 'M', 'pedro.rodriguez@example.com', 'Soltero', '456789012', 'Licencia C', 'INEF005', 'INEA006', 'LN007', 'Calle 789', '34', '56', 'Colina', 'Villa', 'Estado', '23456', 'ROPM920810HDFXYZC', '2023-09-24 03:20:22', NULL),
(9, '345678', 'María', 'González', 'Fernández', '1980-12-25', 42, 'F', 'maria.gonzalez@example.com', 'Casada', '345678901', 'Licencia A', 'INEF002', 'INEA003', 'LN004', 'Boulevard 567', '78', '90', 'Montaña', 'Pueblo', 'Estado', '34567', 'GOFF801225HDFXYZD', '2023-09-24 03:20:22', NULL),
(10, '901234', 'Luis', 'Hernández', 'Torres', '1995-06-05', 28, 'M', 'luis.hernandez@example.com', 'Soltero', '901234567', 'Licencia B', 'INEF004', 'INEA005', 'LN006', 'Callejón 678', '56', '78', 'Oasis', 'Ciudad', 'Estado', '45678', 'HETL950605HDFXYZE', '2023-09-24 03:20:22', NULL),
(11, '123456', 'Juan', 'Pérez', 'Gómez', '1990-05-15', 33, 'M', 'juan.perez@example.com', 'Soltero', '123456789', 'Licencia A', 'INEF001', 'INEA002', 'LN003', 'Calle 123', '12', '34', 'Centro', 'Ciudad', 'Estado', '12345', 'PERR900515HDFXYZA', '2023-09-24 03:21:50', 'Soy un aguacate y que como que escuchas a 2pack negros... negros'),
(12, '789012', 'Ana', 'López', 'García', '1985-03-20', 38, 'F', 'ana.lopez@example.com', 'Casada', '987654321', 'Licencia B', 'INEF003', 'INEA004', 'LN005', 'Avenida 456', '56', '78', 'Residencial', 'Pueblo', 'Estado', '67890', 'LOPG850320HDFXYZB', '2023-09-24 03:21:50', NULL),
(13, '456789', 'Pedro', 'Rodríguez', 'Martínez', '1992-08-10', 31, 'M', 'pedro.rodriguez@example.com', 'Soltero', '456789012', 'Licencia C', 'INEF005', 'INEA006', 'LN007', 'Calle 789', '34', '56', 'Colina', 'Villa', 'Estado', '23456', 'ROPM920810HDFXYZC', '2023-09-24 03:21:50', NULL),
(14, '345678', 'María', 'González', 'Fernández', '1980-12-25', 42, 'F', 'maria.gonzalez@example.com', 'Casada', '345678901', 'Licencia A', 'INEF002', 'INEA003', 'LN004', 'Boulevard 567', '78', '90', 'Montaña', 'Pueblo', 'Estado', '34567', 'GOFF801225HDFXYZD', '2023-09-24 03:21:50', NULL),
(15, '901234', 'Luis', 'Hernández', 'Torres', '1995-06-05', 28, 'M', 'luis.hernandez@example.com', 'Soltero', '901234567', 'Licencia B', 'INEF004', 'INEA005', 'LN006', 'Callejón 678', '56', '78', 'Oasis', 'Ciudad', 'Estado', '45678', 'HETL950605HDFXYZE', '2023-09-24 03:21:50', NULL),
(16, '00001', 'Juan', 'López', 'Gómez', '1990-05-15', 32, 'M', 'juan.lopez@email.com', 'Casado', '123456789', 'Licencia A', 'INEF001', 'INEA001', 'Lenguas', 'Calle 123', '4A', '', 'Centro', 'Ciudad', 'Estado', '12345', 'LOPJ900515HCMNXX01', '2023-09-25 23:49:22', NULL),
(17, '00002', 'Ana', 'Martínez', 'Sánchez', '1985-08-22', 37, 'F', 'ana.martinez@email.com', 'Soltera', '987654321', 'Licencia B', 'INEF002', 'INEA002', 'Literatura', 'Avenida 456', '', '56', 'Norte', 'Pueblo', 'Estado', '54321', 'MASA850822MCMNSN02', '2023-09-25 23:49:22', NULL),
(18, '00003', 'Pedro', 'García', 'Rodríguez', '1993-03-10', 29, 'M', 'pedro.garcia@email.com', 'Casado', '567891234', 'Licencia C', 'INEF003', 'INEA003', 'Historia', 'Calle Principal', '22', '8', 'Sur', 'Villa', 'Estado', '67890', 'GARP930310HCMRRD03', '2023-09-25 23:49:22', NULL),
(19, '00004', 'María', 'Díaz', 'Pérez', '1980-11-05', 42, 'F', 'maria.diaz@email.com', 'Casada', '234567890', 'Licencia A', 'INEF004', 'INEA004', 'Matemáticas', 'Calle Secundaria', '15', '10', 'Oeste', 'Pueblo', 'Estado', '12345', 'DIPM801105HCMRRR04', '2023-09-25 23:49:22', NULL),
(20, '00005', 'Carlos', 'Sánchez', 'López', '1995-09-20', 27, 'M', 'carlos.sanchez@email.com', 'Soltero', '345678901', 'Licencia B', 'INEF005', 'INEA005', 'Arte', 'Avenida 789', '', '23', 'Este', 'Ciudad', 'Estado', '98765', 'SALC950920HCMRRL05', '2023-09-25 23:49:22', NULL),
(21, '00006', 'Laura', 'Ramírez', 'González', '1991-04-12', 31, 'F', 'laura.ramirez@email.com', 'Soltera', '456789012', 'Licencia C', 'INEF006', 'INEA006', 'Ciencias', 'Calle de la Montaña', '8', '', 'Norte', 'Pueblo', 'Estado', '23456', 'RAGL910412HCMGNN06', '2023-09-25 23:49:22', NULL),
(22, '00007', 'Javier', 'Torres', 'Hernández', '1988-07-30', 34, 'M', 'javier.torres@email.com', 'Casado', '678901234', 'Licencia A', 'INEF007', 'INEA007', 'Física', 'Calle de los Pinos', '12', '', 'Sur', 'Villa', 'Estado', '34567', 'TOHJ880730HCMRNN07', '2023-09-25 23:49:22', NULL),
(23, '00008', 'Isabel', 'Pérez', 'Fernández', '1982-01-18', 40, 'F', 'isabel.perez@email.com', 'Casada', '789012345', 'Licencia B', 'INEF008', 'INEA008', 'Química', 'Avenida de los Laureles', '7', '', 'Oeste', 'Ciudad', 'Estado', '45678', 'PIFI820118MCMRNN08', '2023-09-25 23:49:22', NULL),
(24, '00009', 'Miguel', 'Gómez', 'López', '1990-06-25', 32, 'M', 'miguel.gomez@email.com', 'Soltero', '890123456', 'Licencia C', 'INEF009', 'INEA009', 'Biología', 'Calle de las Flores', '5', '15', 'Este', 'Pueblo', 'Estado', '56789', 'GOLM900625HCMRZZ09', '2023-09-25 23:49:22', NULL),
(25, '00010', 'Rosa', 'Hernández', 'Martínez', '1987-12-03', 35, 'F', 'rosa.hernandez@email.com', 'Casada', '123456789', 'Licencia A', 'INEF010', 'INEA010', 'Geografía', 'Calle de las Palmeras', '16', '', 'Norte', 'Villa', 'Estado', '67890', 'HEMR871203MCMRZZ10', '2023-09-25 23:49:22', NULL),
(26, '00011', 'Fernando', 'Rodríguez', 'Sánchez', '1994-02-17', 28, 'M', 'fernando.rodriguez@email.com', 'Soltero', '234567890', 'Licencia B', 'INEF011', 'INEA011', 'Economía', 'Avenida del Sol', '3', '', 'Sur', 'Ciudad', 'Estado', '12345', 'ROSF940217HCMRRZ11', '2023-09-25 23:49:22', NULL),
(27, '00012', 'Elena', 'López', 'García', '1983-10-29', 39, 'F', 'elena.lopez@email.com', 'Soltera', '345678901', 'Licencia C', 'INEF012', 'INEA012', 'Psicología', 'Calle de la Luna', '18', '', 'Oeste', 'Pueblo', 'Estado', '98765', 'LOGE831029MCMRNN12', '2023-09-25 23:49:22', NULL),
(28, '00013', 'Roberto', 'Martínez', 'Torres', '1989-09-14', 33, 'M', 'roberto.martinez@email.com', 'Casado', '456789012', 'Licencia A', 'INEF013', 'INEA013', 'Sociología', 'Avenida de las Estrellas', '22', '', 'Este', 'Villa', 'Estado', '23456', 'MART890914HCMRZB13', '2023-09-25 23:49:22', NULL),
(29, '00014', 'Sofía', 'Hernández', 'Pérez', '1992-07-07', 30, 'F', 'sofia.hernandez@email.com', 'Soltera', '567890123', 'Licencia B', 'INEF014', 'INEA014', 'Historia del Arte', 'Calle del Arte', '6', '', 'Norte', 'Ciudad', 'Estado', '34567', 'HEPS920707MCMRZF14', '2023-09-25 23:49:22', NULL),
(30, '00015', 'Luis', 'González', 'Díaz', '1986-04-04', 36, 'M', 'luis.gonzalez@email.com', 'Casado', '678901234', 'Licencia C', 'INEF015', 'INEA015', 'Filosofía', 'Avenida de las Letras', '11', '13', 'Sur', 'Pueblo', 'Estado', '45678', 'GODL860404HCMRZZ15', '2023-09-25 23:49:22', NULL),
(31, '00016', 'Carmen', 'Sánchez', 'Ramírez', '1981-03-19', 41, 'F', 'carmen.sanchez@email.com', 'Casada', '789012345', 'Licencia A', 'INEF016', 'INEA016', 'Arqueología', 'Calle de las Ruinas', '10', '', 'Oeste', 'Villa', 'Estado', '56789', 'SACR810319MCMRZZ16', '2023-09-25 23:49:22', NULL),
(32, '00017', 'Jorge', 'Pérez', 'Gómez', '1997-11-11', 25, 'M', 'jorge.perez@email.com', 'Soltero', '890123456', 'Licencia B', 'INEF017', 'INEA017', 'Antropología', 'Avenida de los Fósiles', '9', '', 'Este', 'Ciudad', 'Estado', '67890', 'PEGJ971111HCMRZZ17', '2023-09-25 23:49:22', NULL),
(33, '00018', 'Martha', 'García', 'Martínez', '1984-08-01', 38, 'F', 'martha.garcia@email.com', 'Casada', '123456789', 'Licencia C', 'INEF018', 'INEA018', 'Arquitectura', 'Calle del Diseño', '7', '', 'Norte', 'Pueblo', 'Estado', '12345', 'GAMM840801MCMRZZ18', '2023-09-25 23:49:22', NULL),
(34, '00019', 'Ricardo', 'López', 'Torres', '1991-05-08', 31, 'M', 'ricardo.lopez@email.com', 'Soltero', '234567890', 'Licencia A', 'INEF019', 'INEA019', 'Derecho', 'Avenida de la Justicia', '14', '11', 'Sur', 'Villa', 'Estado', '98765', 'LOTR910508HCMRZZ19', '2023-09-25 23:49:22', NULL),
(35, '00020', 'Silvia', 'Martínez', 'Sánchez', '1988-02-28', 34, 'F', 'silvia.martinez@email.com', 'Casada', '345678901', 'Licencia B', 'INEF020', 'INEA020', 'Medicina', 'Calle de la Salud', '5', '', 'Oeste', 'Ciudad', 'Estado', '23456', 'MASL880228MCMRZZ20', '2023-09-25 23:49:22', NULL),
(36, '00021', 'Alejandro', 'Gómez', 'Hernández', '1994-01-15', 28, 'M', 'alejandro.gomez@email.com', 'Casado', '456789012', 'Licencia C', 'INEF021', 'INEA021', 'Ingeniería', 'Avenida de la Tecnología', '8', '', 'Este', 'Pueblo', 'Estado', '34567', 'GOAH940115HCMRZZ21', '2023-09-25 23:49:22', NULL),
(37, '00022', 'Ana', 'Sánchez', 'Díaz', '1990-12-20', 32, 'F', 'ana.sanchez@email.com', 'Soltera', '567890123', 'Licencia A', 'INEF022', 'INEA022', 'Literatura', 'Calle de las Letras', '19', '', 'Norte', 'Villa', 'Estado', '45678', 'SADA901220MCMRZZ22', '2023-09-25 23:49:22', NULL),
(38, '00023', 'Carlos', 'Pérez', 'Ramírez', '1983-09-05', 39, 'M', 'carlos.perez@email.com', 'Casado', '678901234', 'Licencia B', 'INEF023', 'INEA023', 'Historia', 'Avenida de la Historia', '7', '', 'Oeste', 'Ciudad', 'Estado', '56789', 'PERC830905HCMRZZ23', '2023-09-25 23:49:22', NULL),
(39, '00024', 'Laura', 'González', 'Martínez', '1986-06-10', 36, 'F', 'laura.gonzalez@email.com', 'Casada', '789012345', 'Licencia C', 'INEF024', 'INEA024', 'Biología', 'Calle de la Ciencia', '15', '', 'Sur', 'Pueblo', 'Estado', '12345', 'GOLM860610MCMRZZ24', '2023-09-25 23:49:22', NULL),
(40, '00025', 'Javier', 'Torres', 'Gómez', '1995-03-25', 27, 'M', 'javier.torres@email.com', 'Soltero', '890123456', 'Licencia A', 'INEF025', 'INEA025', 'Física', 'Avenida de la Física', '12', '', 'Este', 'Villa', 'Estado', '67890', 'TOGJ950325HCMRZZ25', '2023-09-25 23:49:22', NULL),
(41, '00026', 'Isabel', 'Sánchez', 'Hernández', '1981-02-14', 41, 'F', 'isabel.sanchez@email.com', 'Casada', '123456789', 'Licencia B', 'INEF026', 'INEA026', 'Química', 'Calle de la Química', '22', '', 'Norte', 'Ciudad', 'Estado', '34567', 'SIHS810214MCMRZZ26', '2023-09-25 23:49:22', NULL),
(42, '00027', 'Miguel', 'Gómez', 'Pérez', '1992-07-07', 30, 'M', 'miguel.gomez@email.com', 'Soltero', '234567890', 'Licencia C', 'INEF027', 'INEA027', 'Matemáticas', 'Avenida de las Matemáticas', '10', '', 'Oeste', 'Pueblo', 'Estado', '23456', 'GOPM920707HCMRZZ27', '2023-09-25 23:49:22', NULL),
(43, '00028', 'Rosa', 'Martínez', 'García', '1987-04-04', 35, 'F', 'rosa.martinez@email.com', 'Casada', '345678901', 'Licencia A', 'INEF028', 'INEA028', 'Psicología', 'Calle de la Psicología', '18', '', 'Sur', 'Villa', 'Estado', '98765', 'ROMG870404MCMRZZ28', '2023-09-25 23:49:22', NULL),
(44, '00029', 'Fernando', 'López', 'Sánchez', '1993-11-11', 29, 'M', 'fernando.lopez@email.com', 'Soltero', '456789012', 'Licencia B', 'INEF029', 'INEA029', 'Economía', 'Avenida de la Economía', '5', '', 'Este', 'Ciudad', 'Estado', '12345', 'FOLS931111HCMRZZ29', '2023-09-25 23:49:22', NULL),
(45, '00030', 'Elena', 'Hernández', 'Torres', '1989-08-01', 33, 'F', 'elena.hernandez@email.com', 'Casada', '567890123', 'Licencia C', 'INEF030', 'INEA030', 'Sociología', 'Calle de la Sociología', '14', '', 'Norte', 'Pueblo', 'Estado', '67890', 'EHTM890801MCMRZZ30', '2023-09-25 23:49:22', NULL),
(46, '00031', 'Roberto', 'Ramírez', 'López', '1990-05-08', 32, 'M', 'roberto.ramirez@email.com', 'Soltero', '678901234', 'Licencia A', 'INEF031', 'INEA031', 'Arte', 'Calle del Arte', '19', '', 'Oeste', 'Villa', 'Estado', '23456', 'RRLM900508HCMRZZ31', '2023-09-25 23:49:22', NULL),
(47, '00032', 'Sofía', 'Sánchez', 'Martínez', '1984-02-28', 38, 'F', 'sofia.sanchez@email.com', 'Casada', '789012345', 'Licencia B', 'INEF032', 'INEA032', 'Historia del Arte', 'Avenida del Arte', '7', '', 'Sur', 'Ciudad', 'Estado', '34567', 'SASH840228MCMRZZ32', '2023-09-25 23:49:22', NULL),
(48, '00033', 'Luis', 'Pérez', 'González', '1997-01-15', 25, 'M', 'luis.perez@email.com', 'Soltero', '890123456', 'Licencia C', 'INEF033', 'INEA033', 'Filosofía', 'Calle de la Filosofía', '22', '', 'Este', 'Villa', 'Estado', '56789', 'LOGP970115HCMRZZ33', '2023-09-25 23:49:22', NULL),
(49, '00034', 'Carmen', 'Martínez', 'López', '1981-12-20', 41, 'F', 'carmen.martinez@email.com', 'Casada', '123456789', 'Licencia A', 'INEF034', 'INEA034', 'Arqueología', 'Avenida de la Arqueología', '10', '', 'Norte', 'Pueblo', 'Estado', '12345', 'MALC811220MCMRZZ34', '2023-09-25 23:49:22', NULL),
(50, '00035', 'Jorge', 'Torres', 'Gómez', '1994-09-05', 28, 'M', 'jorge.torres@email.com', 'Casado', '234567890', 'Licencia B', 'INEF035', 'INEA035', 'Antropología', 'Calle de la Antropología', '18', '', 'Sur', 'Villa', 'Estado', '98765', 'TOJG940905HCMRZZ35', '2023-09-25 23:49:22', NULL),
(51, '00036', 'Laura', 'García', 'Martínez', '1995-07-15', 27, 'F', 'laura.garcia@email.com', 'Soltera', '567890123', 'Licencia C', 'INEF036', 'INEA036', 'Ciencias', 'Calle de las Ciencias', '15', '', 'Oeste', 'Ciudad', 'Estado', '23456', 'GALM950715MCMRZZ36', '2023-09-26 01:34:45', NULL),
(52, '00037', 'Javier', 'Sánchez', 'Gómez', '1989-03-20', 33, 'M', 'javier.sanchez@email.com', 'Casado', '678901234', 'Licencia A', 'INEF037', 'INEA037', 'Física', 'Calle de la Física', '22', '', 'Norte', 'Pueblo', 'Estado', '34567', 'SAGJ890320HCMRZZ37', '2023-09-26 01:34:45', NULL),
(53, '00038', 'Isabel', 'Torres', 'Pérez', '1986-02-05', 36, 'F', 'isabel.torres@email.com', 'Soltera', '789012345', 'Licencia B', 'INEF038', 'INEA038', 'Química', 'Calle de la Química', '7', '', 'Sur', 'Villa', 'Estado', '56789', 'TOPM860205MCMRZZ38', '2023-09-26 01:34:45', NULL),
(54, '00039', 'Miguel', 'Martínez', 'López', '1992-11-11', 30, 'M', 'miguel.martinez@email.com', 'Soltero', '890123456', 'Licencia C', 'INEF039', 'INEA039', 'Matemáticas', 'Calle de las Matemáticas', '16', '', 'Este', 'Ciudad', 'Estado', '67890', 'MALG921111HCMRZZ39', '2023-09-26 01:34:45', NULL),
(55, '00040', 'Rosa', 'Pérez', 'Sánchez', '1988-08-01', 34, 'F', 'rosa.perez@email.com', 'Casada', '123456789', 'Licencia A', 'INEF040', 'INEA040', 'Psicología', 'Calle de la Psicología', '9', '', 'Oeste', 'Pueblo', 'Estado', '12345', 'PERS880801MCMRZZ40', '2023-09-26 01:34:45', NULL),
(56, '00041', 'Fernando', 'Gómez', 'Torres', '1993-05-08', 29, 'M', 'fernando.gomez@email.com', 'Soltero', '234567890', 'Licencia B', 'INEF041', 'INEA041', 'Economía', 'Calle de la Economía', '18', '', 'Norte', 'Villa', 'Estado', '23456', 'FOGT930508HCMRZZ41', '2023-09-26 01:34:45', NULL),
(57, '00042', 'Elena', 'Hernández', 'López', '1990-12-20', 32, 'F', 'elena.hernandez@email.com', 'Soltera', '345678901', 'Licencia C', 'INEF042', 'INEA042', 'Sociología', 'Calle de la Sociología', '21', '', 'Sur', 'Ciudad', 'Estado', '34567', 'HEHL901220MCMRZZ42', '2023-09-26 01:34:45', NULL),
(58, '00043', 'Roberto', 'Ramírez', 'Martínez', '1984-09-05', 38, 'M', 'roberto.ramirez@email.com', 'Casado', '456789012', 'Licencia A', 'INEF043', 'INEA043', 'Arte', 'Calle del Arte', '11', '', 'Oeste', 'Pueblo', 'Estado', '45678', 'RARM840905HCMRZZ43', '2023-09-26 01:34:45', NULL),
(59, '00044', 'Sofía', 'Sánchez', 'García', '1991-07-07', 31, 'F', 'sofia.sanchez@email.com', 'Soltera', '567890123', 'Licencia B', 'INEF044', 'INEA044', 'Historia del Arte', 'Calle del Arte', '19', '', 'Norte', 'Pueblo', 'Estado', '56789', 'SASG910707MCMRZZ44', '2023-09-26 01:34:45', NULL),
(60, '00045', 'Luis', 'Pérez', 'Gómez', '1986-04-04', 36, 'M', 'luis.perez@email.com', 'Casado', '678901234', 'Licencia C', 'INEF045', 'INEA045', 'Filosofía', 'Calle de la Filosofía', '6', '', 'Sur', 'Villa', 'Estado', '12345', 'LUPG860404HCMRZZ45', '2023-09-26 01:34:45', NULL),
(61, '00046', 'Carmen', 'Martínez', 'López', '1981-03-19', 41, 'F', 'carmen.martinez@email.com', 'Casada', '789012345', 'Licencia A', 'INEF046', 'INEA046', 'Arqueología', 'Calle de la Arqueología', '15', '', 'Oeste', 'Ciudad', 'Estado', '23456', 'CAMR810319MCMRZZ46', '2023-09-26 01:34:45', NULL),
(62, '00047', 'Jorge', 'Torres', 'Sánchez', '1997-11-11', 25, 'M', 'jorge.torres@email.com', 'Soltero', '890123456', 'Licencia B', 'INEF047', 'INEA047', 'Antropología', 'Calle de la Antropología', '8', '', 'Este', 'Pueblo', 'Estado', '34567', 'JOTS971111HCMRZZ47', '2023-09-26 01:34:45', NULL),
(63, '00048', 'Martha', 'García', 'Hernández', '1984-08-01', 38, 'F', 'martha.garcia@email.com', 'Casada', '123456789', 'Licencia C', 'INEF048', 'INEA048', 'Arquitectura', 'Calle de la Arquitectura', '12', '', 'Norte', 'Villa', 'Estado', '12345', 'MAGH840801MCMRZZ48', '2023-09-26 01:34:45', NULL),
(64, '00049', 'Ricardo', 'López', 'Gómez', '1991-05-08', 31, 'M', 'ricardo.lopez@email.com', 'Soltero', '234567890', 'Licencia A', 'INEF049', 'INEA049', 'Derecho', 'Calle de la Justicia', '14', '', 'Sur', 'Ciudad', 'Estado', '23456', 'RILG910508HCMRZZ49', '2023-09-26 01:34:45', NULL),
(65, '00050', 'Silvia', 'Martínez', 'Sánchez', '1988-02-28', 34, 'F', 'silvia.martinez@email.com', 'Casada', '345678901', 'Licencia B', 'INEF050', 'INEA050', 'Medicina', 'Calle de la Medicina', '7', '', 'Oeste', 'Pueblo', 'Estado', '56789', 'SIMS880228MCMRZZ50', '2023-09-26 01:34:45', NULL),
(66, '00051', 'Alejandro', 'Gómez', 'Hernández', '1994-01-15', 28, 'M', 'alejandro.gomez@email.com', 'Casado', '456789012', 'Licencia C', 'INEF051', 'INEA051', 'Ingeniería', 'Calle de la Ingeniería', '8', '', 'Este', 'Ciudad', 'Estado', '34567', 'AGOH940115HCMRZZ51', '2023-09-26 01:36:17', NULL),
(67, '00052', 'Ana', 'Sánchez', 'Díaz', '1990-12-20', 32, 'F', 'ana.sanchez@email.com', 'Soltera', '567890123', 'Licencia A', 'INEF052', 'INEA052', 'Literatura', 'Calle de la Literatura', '19', '', 'Norte', 'Villa', 'Estado', '45678', 'ASAD901220MCMRZZ52', '2023-09-26 01:36:17', NULL),
(68, '00053', 'Carlos', 'Pérez', 'Ramírez', '1983-09-05', 39, 'M', 'carlos.perez@email.com', 'Casado', '678901234', 'Licencia B', 'INEF053', 'INEA053', 'Historia', 'Calle de la Historia', '21', '', 'Sur', 'Ciudad', 'Estado', '34567', 'CAPR830905HCMRZZ53', '2023-09-26 01:36:17', NULL),
(69, '00054', 'Laura', 'González', 'Martínez', '1986-06-10', 36, 'F', 'laura.gonzalez@email.com', 'Casada', '789012345', 'Licencia C', 'INEF054', 'INEA054', 'Biología', 'Calle de la Biología', '5', '', 'Oeste', 'Pueblo', 'Estado', '12345', 'LAGM860610MCMRZZ54', '2023-09-26 01:36:17', NULL),
(70, '00055', 'Javier', 'Torres', 'Gómez', '1995-03-25', 27, 'M', 'javier.torres@email.com', 'Soltero', '890123456', 'Licencia A', 'INEF055', 'INEA055', 'Física', 'Calle de la Física', '12', '', 'Este', 'Villa', 'Estado', '67890', 'JTGJ950325HCMRZZ55', '2023-09-26 01:36:17', NULL),
(71, '00056', 'Isabel', 'Sánchez', 'Hernández', '1981-02-14', 41, 'F', 'isabel.sanchez@email.com', 'Casada', '123456789', 'Licencia B', 'INEF056', 'INEA056', 'Química', 'Calle de la Química', '22', '', 'Norte', 'Ciudad', 'Estado', '34567', 'ISHS810214MCMRZZ56', '2023-09-26 01:36:17', NULL),
(72, '00057', 'Miguel', 'Gómez', 'Pérez', '1992-07-07', 30, 'M', 'miguel.gomez@email.com', 'Soltero', '234567890', 'Licencia C', 'INEF057', 'INEA057', 'Matemáticas', 'Calle de las Matemáticas', '9', '', 'Oeste', 'Pueblo', 'Estado', '23456', 'MGOP920707HCMRZZ57', '2023-09-26 01:36:17', NULL),
(73, '00058', 'Rosa', 'Martínez', 'García', '1987-04-04', 35, 'F', 'rosa.martinez@email.com', 'Casada', '345678901', 'Licencia A', 'INEF058', 'INEA058', 'Psicología', 'Calle de la Psicología', '18', '', 'Sur', 'Villa', 'Estado', '98765', 'RMAG870404MCMRZZ58', '2023-09-26 01:36:17', NULL),
(74, '00059', 'Fernando', 'López', 'Sánchez', '1993-11-11', 29, 'M', 'fernando.lopez@email.com', 'Soltero', '456789012', 'Licencia B', 'INEF059', 'INEA059', 'Economía', 'Calle de la Economía', '8', '', 'Este', 'Ciudad', 'Estado', '12345', 'FLSL931111HCMRZZ59', '2023-09-26 01:36:17', NULL),
(75, '00060', 'Elena', 'Hernández', 'Torres', '1989-08-01', 33, 'F', 'elena.hernandez@email.com', 'Casada', '567890123', 'Licencia C', 'INEF060', 'INEA060', 'Sociología', 'Calle de la Sociología', '5', '', 'Norte', 'Pueblo', 'Estado', '67890', 'EHTL890801MCMRZZ60', '2023-09-26 01:36:17', NULL),
(76, '00061', 'Roberto', 'Ramírez', 'López', '1990-05-08', 32, 'M', 'roberto.ramirez@email.com', 'Soltero', '678901234', 'Licencia A', 'INEF061', 'INEA061', 'Arte', 'Calle de las Artes', '16', '', 'Sur', 'Ciudad', 'Estado', '23456', 'RRLM900508HCMRZZ61', '2023-09-26 01:36:17', NULL),
(77, '00062', 'Sofía', 'Sánchez', 'Martínez', '1984-02-28', 38, 'F', 'sofia.sanchez@email.com', 'Casada', '789012345', 'Licencia B', 'INEF062', 'INEA062', 'Historia del Arte', 'Calle del Arte', '9', '', 'Oeste', 'Pueblo', 'Estado', '12345', 'SSSM840228MCMRZZ62', '2023-09-26 01:36:17', NULL),
(78, '00063', 'Luis', 'Pérez', 'Gómez', '1997-01-15', 25, 'M', 'luis.perez@email.com', 'Soltero', '890123456', 'Licencia C', 'INEF063', 'INEA063', 'Filosofía', 'Calle de la Filosofía', '20', '', 'Este', 'Villa', 'Estado', '56789', 'LPLG970115HCMRZZ63', '2023-09-26 01:36:17', NULL),
(79, '00064', 'Carmen', 'Martínez', 'López', '1981-12-20', 41, 'F', 'carmen.martinez@email.com', 'Casada', '123456789', 'Licencia A', 'INEF064', 'INEA064', 'Arqueología', 'Calle de la Arqueología', '11', '', 'Norte', 'Pueblo', 'Estado', '45678', 'CAML811220MCMRZZ64', '2023-09-26 01:36:17', NULL),
(80, '00065', 'Jorge', 'Torres', 'Sánchez', '1994-09-05', 28, 'M', 'jorge.torres@email.com', 'Casado', '234567890', 'Licencia B', 'INEF065', 'INEA065', 'Antropología', 'Calle de la Antropología', '19', '', 'Sur', 'Villa', 'Estado', '98765', 'JOTS940905HCMRZZ65', '2023-09-26 01:36:17', NULL),
(81, '00066', 'Martha', 'García', 'Hernández', '1984-08-01', 38, 'F', 'martha.garcia@email.com', 'Casada', '345678901', 'Licencia C', 'INEF066', 'INEA066', 'Arquitectura', 'Calle de la Arquitectura', '6', '', 'Oeste', 'Ciudad', 'Estado', '34567', 'MAGH840801MCMRZZ66', '2023-09-26 01:36:17', NULL),
(82, '00067', 'Ricardo', 'López', 'Gómez', '1991-05-08', 31, 'M', 'ricardo.lopez@email.com', 'Soltero', '456789012', 'Licencia A', 'INEF067', 'INEA067', 'Derecho', 'Calle de la Justicia', '17', '', 'Este', 'Pueblo', 'Estado', '23456', 'RILG910508HCMRZZ67', '2023-09-26 01:36:17', NULL),
(83, '00068', 'Silvia', 'Martínez', 'Sánchez', '1988-02-28', 34, 'F', 'silvia.martinez@email.com', 'Casada', '567890123', 'Licencia B', 'INEF068', 'INEA068', 'Medicina', 'Calle de la Medicina', '8', '', 'Norte', 'Villa', 'Estado', '56789', 'SIMS880228MCMRZZ68', '2023-09-26 01:36:17', NULL),
(84, '00069', 'Alejandro', 'Gómez', 'Hernández', '1994-01-15', 28, 'M', 'alejandro.gomez@email.com', 'Casado', '678901234', 'Licencia C', 'INEF069', 'INEA069', 'Ingeniería', 'Calle de la Ingeniería', '15', '', 'Sur', 'Ciudad', 'Estado', '12345', 'AGOH940115HCMRZZ69', '2023-09-26 01:36:17', NULL),
(85, '00070', 'Ana', 'Sánchez', 'Díaz', '1990-12-20', 32, 'F', 'ana.sanchez@email.com', 'Soltera', '789012345', 'Licencia A', 'INEF070', 'INEA070', 'Literatura', 'Calle de la Literatura', '10', '', 'Oeste', 'Pueblo', 'Estado', '23456', 'ASAD901220MCMRZZ70', '2023-09-26 01:36:17', NULL),
(86, '00071', 'Carlos', 'Pérez', 'Ramírez', '1983-09-05', 39, 'M', 'carlos.perez@email.com', 'Casado', '890123456', 'Licencia B', 'INEF071', 'INEA071', 'Historia', 'Calle de la Historia', '21', '', 'Norte', 'Villa', 'Estado', '34567', 'CAPR830905HCMRZZ71', '2023-09-26 01:36:17', NULL),
(87, '00072', 'Laura', 'González', 'Martínez', '1986-06-10', 36, 'F', 'laura.gonzalez@email.com', 'Casada', '123456789', 'Licencia C', 'INEF072', 'INEA072', 'Biología', 'Calle de la Biología', '7', '', 'Sur', 'Ciudad', 'Estado', '45678', 'LAGM860610MCMRZZ72', '2023-09-26 01:36:17', NULL),
(88, '00073', 'Javier', 'Torres', 'Gómez', '1995-03-25', 27, 'M', 'javier.torres@email.com', 'Soltero', '234567890', 'Licencia A', 'INEF073', 'INEA073', 'Física', 'Calle de la Física', '18', '', 'Este', 'Pueblo', 'Estado', '98765', 'JTGJ950325HCMRZZ73', '2023-09-26 01:36:17', NULL),
(89, '00074', 'Isabel', 'Sánchez', 'Hernández', '1981-02-14', 41, 'F', 'isabel.sanchez@email.com', 'Casada', '345678901', 'Licencia B', 'INEF074', 'INEA074', 'Química', 'Calle de la Química', '11', '', 'Oeste', 'Villa', 'Estado', '12345', 'ISHS810214MCMRZZ74', '2023-09-26 01:36:17', NULL),
(90, '00075', 'Miguel', 'Gómez', 'Pérez', '1992-07-07', 30, 'M', 'miguel.gomez@email.com', 'Soltero', '456789012', 'Licencia C', 'INEF075', 'INEA075', 'Matemáticas', 'Calle de las Matemáticas', '20', '', 'Norte', 'Ciudad', 'Estado', '23456', 'MGOP920707HCMRZZ75', '2023-09-26 01:36:17', NULL),
(91, '00076', 'Rosa', 'Martínez', 'García', '1987-04-04', 35, 'F', 'rosa.martinez@email.com', 'Casada', '567890123', 'Licencia A', 'INEF076', 'INEA076', 'Psicología', 'Calle de la Psicología', '19', '', 'Sur', 'Pueblo', 'Estado', '34567', 'RMAG870404MCMRZZ76', '2023-09-26 01:38:34', NULL),
(92, '00077', 'Fernando', 'López', 'Sánchez', '1993-11-11', 29, 'M', 'fernando.lopez@email.com', 'Soltero', '678901234', 'Licencia B', 'INEF077', 'INEA077', 'Economía', 'Calle de la Economía', '9', '', 'Este', 'Villa', 'Estado', '12345', 'FLSL931111HCMRZZ77', '2023-09-26 01:38:34', NULL),
(93, '00078', 'Elena', 'Hernández', 'Torres', '1989-08-01', 33, 'F', 'elena.hernandez@email.com', 'Casada', '789012345', 'Licencia C', 'INEF078', 'INEA078', 'Sociología', 'Calle de la Sociología', '16', '', 'Norte', 'Ciudad', 'Estado', '67890', 'EHTL890801MCMRZZ78', '2023-09-26 01:38:34', NULL),
(94, '00079', 'Roberto', 'Ramírez', 'López', '1990-05-08', 32, 'M', 'roberto.ramirez@email.com', 'Soltero', '890123456', 'Licencia A', 'INEF079', 'INEA079', 'Arte', 'Calle del Arte', '8', '', 'Sur', 'Villa', 'Estado', '23456', 'RRLM900508HCMRZZ79', '2023-09-26 01:38:34', NULL),
(95, '00080', 'Sofía', 'Sánchez', 'Martínez', '1984-02-28', 38, 'F', 'sofia.sanchez@email.com', 'Casada', '123456789', 'Licencia B', 'INEF080', 'INEA080', 'Historia del Arte', 'Calle del Arte', '17', '', 'Oeste', 'Ciudad', 'Estado', '34567', 'SSSM840228MCMRZZ80', '2023-09-26 01:38:34', NULL),
(96, '00081', 'Luis', 'Pérez', 'Gómez', '1997-01-15', 25, 'M', 'luis.perez@email.com', 'Soltero', '234567890', 'Licencia C', 'INEF081', 'INEA081', 'Filosofía', 'Calle de la Filosofía', '5', '', 'Este', 'Pueblo', 'Estado', '12345', 'LPLG970115HCMRZZ81', '2023-09-26 01:38:34', NULL),
(97, '00082', 'Carmen', 'Martínez', 'López', '1981-12-20', 41, 'F', 'carmen.martinez@email.com', 'Casada', '345678901', 'Licencia A', 'INEF082', 'INEA082', 'Arqueología', 'Calle de la Arqueología', '14', '', 'Norte', 'Villa', 'Estado', '45678', 'CAML811220MCMRZZ82', '2023-09-26 01:38:34', NULL),
(98, '00083', 'Jorge', 'Torres', 'Sánchez', '1994-09-05', 28, 'M', 'jorge.torres@email.com', 'Casado', '456789012', 'Licencia B', 'INEF083', 'INEA083', 'Antropología', 'Calle de la Antropología', '7', '', 'Sur', 'Ciudad', 'Estado', '98765', 'JOTS940905HCMRZZ83', '2023-09-26 01:38:34', NULL),
(99, '00084', 'Martha', 'García', 'Hernández', '1984-08-01', 38, 'F', 'martha.garcia@email.com', 'Casada', '567890123', 'Licencia C', 'INEF084', 'INEA084', 'Arquitectura', 'Calle de la Arquitectura', '18', '', 'Oeste', 'Pueblo', 'Estado', '23456', 'MAGH840801MCMRZZ84', '2023-09-26 01:38:34', NULL),
(100, '00085', 'Ricardo', 'López', 'Gómez', '1991-05-08', 31, 'M', 'ricardo.lopez@email.com', 'Soltero', '678901234', 'Licencia A', 'INEF085', 'INEA085', 'Derecho', 'Calle de la Justicia', '12', '', 'Norte', 'Ciudad', 'Estado', '34567', 'RILG910508HCMRZZ85', '2023-09-26 01:38:34', NULL),
(101, '00086', 'Silvia', 'Martínez', 'Sánchez', '1988-02-28', 34, 'F', 'silvia.martinez@email.com', 'Casada', '789012345', 'Licencia B', 'INEF086', 'INEA086', 'Medicina', 'Calle de la Medicina', '5', '', 'Este', 'Villa', 'Estado', '56789', 'SIMS880228MCMRZZ86', '2023-09-26 01:38:34', NULL),
(102, '00087', 'Alejandro', 'Gómez', 'Hernández', '1994-01-15', 28, 'M', 'alejandro.gomez@email.com', 'Casado', '890123456', 'Licencia C', 'INEF087', 'INEA087', 'Ingeniería', 'Calle de la Ingeniería', '14', '', 'Sur', 'Pueblo', 'Estado', '12345', 'AGOH940115HCMRZZ87', '2023-09-26 01:38:34', NULL),
(103, '00088', 'Ana', 'Sánchez', 'Díaz', '1990-12-20', 32, 'F', 'ana.sanchez@email.com', 'Soltera', '123456789', 'Licencia A', 'INEF088', 'INEA088', 'Literatura', 'Calle de la Literatura', '22', '', 'Oeste', 'Ciudad', 'Estado', '23456', 'ASAD901220MCMRZZ88', '2023-09-26 01:38:34', NULL),
(104, '00089', 'Carlos', 'Pérez', 'Ramírez', '1983-09-05', 39, 'M', 'carlos.perez@email.com', 'Casado', '234567890', 'Licencia B', 'INEF089', 'INEA089', 'Historia', 'Calle de la Historia', '6', '', 'Norte', 'Villa', 'Estado', '34567', 'CAPR830905HCMRZZ89', '2023-09-26 01:38:34', NULL),
(105, '00090', 'Laura', 'González', 'Martínez', '1986-06-10', 36, 'F', 'laura.gonzalez@email.com', 'Casada', '345678901', 'Licencia C', 'INEF090', 'INEA090', 'Biología', 'Calle de la Biología', '15', '', 'Este', 'Ciudad', 'Estado', '67890', 'LAGM860610MCMRZZ90', '2023-09-26 01:38:34', NULL),
(106, '00091', 'Javier', 'Torres', 'Gómez', '1995-03-25', 27, 'M', 'javier.torres@email.com', 'Soltero', '456789012', 'Licencia A', 'INEF091', 'INEA091', 'Física', 'Calle de la Física', '10', '', 'Sur', 'Pueblo', 'Estado', '12345', 'JTGJ950325HCMRZZ91', '2023-09-26 01:38:34', NULL),
(107, '00092', 'Isabel', 'Sánchez', 'Hernández', '1981-02-14', 41, 'F', 'isabel.sanchez@email.com', 'Casada', '567890123', 'Licencia B', 'INEF092', 'INEA092', 'Química', 'Calle de la Química', '21', '', 'Norte', 'Villa', 'Estado', '23456', 'ISHS810214MCMRZZ92', '2023-09-26 01:38:34', NULL),
(108, '00093', 'Miguel', 'Gómez', 'Pérez', '1992-07-07', 30, 'M', 'miguel.gomez@email.com', 'Soltero', '678901234', 'Licencia C', 'INEF093', 'INEA093', 'Matemáticas', 'Calle de las Matemáticas', '7', '', 'Oeste', 'Ciudad', 'Estado', '34567', 'MGOP920707HCMRZZ93', '2023-09-26 01:38:34', NULL),
(109, '00094', 'Rosa', 'Martínez', 'García', '1987-04-04', 35, 'F', 'rosa.martinez@email.com', 'Casada', '789012345', 'Licencia A', 'INEF094', 'INEA094', 'Psicología', 'Calle de la Psicología', '18', '', 'Este', 'Pueblo', 'Estado', '98765', 'RMAG870404MCMRZZ94', '2023-09-26 01:38:34', NULL),
(110, '00095', 'Fernando', 'López', 'Sánchez', '1993-11-11', 29, 'M', 'fernando.lopez@email.com', 'Soltero', '890123456', 'Licencia B', 'INEF095', 'INEA095', 'Economía', 'Calle de la Economía', '12', '', 'Sur', 'Villa', 'Estado', '23456', 'FLSL931111HCMRZZ95', '2023-09-26 01:38:34', NULL),
(111, '00096', 'Elena', 'Hernández', 'Torres', '1989-08-01', 33, 'F', 'elena.hernandez@email.com', 'Casada', '123456789', 'Licencia C', 'INEF096', 'INEA096', 'Sociología', 'Calle de la Sociología', '13', '', 'Norte', 'Ciudad', 'Estado', '67890', 'EHTL890801MCMRZZ96', '2023-09-26 01:38:48', NULL),
(112, '00097', 'Roberto', 'Ramírez', 'López', '1990-05-08', 32, 'M', 'roberto.ramirez@email.com', 'Soltero', '234567890', 'Licencia A', 'INEF097', 'INEA097', 'Arte', 'Calle del Arte', '10', '', 'Sur', 'Pueblo', 'Estado', '12345', 'RRLM900508HCMRZZ97', '2023-09-26 01:38:48', NULL),
(113, '00098', 'Sofía', 'Sánchez', 'Martínez', '1984-02-28', 38, 'F', 'sofia.sanchez@email.com', 'Casada', '345678901', 'Licencia B', 'INEF098', 'INEA098', 'Historia del Arte', 'Calle del Arte', '20', '', 'Oeste', 'Villa', 'Estado', '23456', 'SSSM840228MCMRZZ98', '2023-09-26 01:38:48', NULL),
(114, '00099', 'Luis', 'Pérez', 'Gómez', '1997-01-15', 25, 'M', 'luis.perez@email.com', 'Soltero', '456789012', 'Licencia C', 'INEF099', 'INEA099', 'Filosofía', 'Calle de la Filosofía', '8', '', 'Este', 'Ciudad', 'Estado', '34567', 'LPLG970115HCMRZZ99', '2023-09-26 01:38:48', NULL),
(115, '00100', 'Carmen', 'Martínez', 'López', '1981-12-20', 41, 'F', 'carmen.martinez@email.com', 'Casada', '567890123', 'Licencia A', 'INEF100', 'INEA100', 'Arqueología', 'Calle de la Arqueología', '16', '', 'Norte', 'Pueblo', 'Estado', '45678', 'CAML811220MCMRZZ10', '2023-09-26 01:38:48', NULL),
(116, '23232', 'Pedro', 'Casas', 'Paclas', '1997-07-08', 26, 'M', 'asdfa@gmail.com', 'Casada', 'C-4545641', 'asxd361a5', 'ASD41AS', 'ASD54A', 'SLP', 'Estrella', '0', '301', 'Jaral', 'San Felipe', 'GTO', '54522', 'asdjnjn5asD41', '2023-09-30 02:20:46', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incapacida`
--

CREATE TABLE `incapacida` (
  `id` int(11) NOT NULL,
  `NO_EMPLEADO_15` varchar(255) NOT NULL,
  `FECHA_INICIO_PERSONAL_INCAPACITADO` date DEFAULT NULL,
  `OBSERVACIONES` text DEFAULT NULL,
  `FECHA_TERMINACION_PERSONAL_INCAPACITADO` date DEFAULT NULL,
  `INCAPACIDAD_PENDIENTE_GUARDIA_GENERAL` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `incapacida`
--

INSERT INTO `incapacida` (`id`, `NO_EMPLEADO_15`, `FECHA_INICIO_PERSONAL_INCAPACITADO`, `OBSERVACIONES`, `FECHA_TERMINACION_PERSONAL_INCAPACITADO`, `INCAPACIDAD_PENDIENTE_GUARDIA_GENERAL`, `fecha_registro`) VALUES
(1, '123456', '2023-03-01', 'Lesión en la pierna', '2023-03-15', 'No', '2023-09-24 03:23:48'),
(2, '789012', '2023-03-03', 'Dolor de espalda', '2023-03-10', 'Sí', '2023-09-24 03:23:48'),
(3, '456789', '2023-03-05', 'Gripe', '2023-03-07', 'No', '2023-09-24 03:23:48'),
(4, '345678', '2023-03-07', 'Fractura en el brazo', '2023-03-20', 'Sí', '2023-09-24 03:23:48'),
(5, '901234', '2023-03-10', 'Accidente automovilístico', '2023-03-14', 'No', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indumentaria`
--

CREATE TABLE `indumentaria` (
  `ID` int(11) NOT NULL,
  `NO_EMPLEADO` varchar(255) NOT NULL,
  `PLAYERA` varchar(255) DEFAULT NULL,
  `CAMISA` varchar(255) DEFAULT NULL,
  `PANTALON` varchar(255) DEFAULT NULL,
  `CALZADO` varchar(255) DEFAULT NULL,
  `CHAMARRA` varchar(255) DEFAULT NULL,
  `MC_ARTHUR` varchar(255) DEFAULT NULL,
  `KEPI` varchar(255) DEFAULT NULL,
  `SOMBRERO` varchar(255) DEFAULT NULL,
  `FALDA` varchar(255) DEFAULT NULL,
  `FILIPINA` varchar(255) DEFAULT NULL,
  `OVEROL` varchar(255) DEFAULT NULL,
  `BATA` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `indumentaria`
--

INSERT INTO `indumentaria` (`ID`, `NO_EMPLEADO`, `PLAYERA`, `CAMISA`, `PANTALON`, `CALZADO`, `CHAMARRA`, `MC_ARTHUR`, `KEPI`, `SOMBRERO`, `FALDA`, `FILIPINA`, `OVEROL`, `BATA`, `fecha_registro`) VALUES
(1, '123456', 'M', 'S', '32', '7', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '2023-09-24 03:23:48'),
(2, '789012', 'L', 'M', '34', '9', 'Sí', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '2023-09-24 03:23:48'),
(3, '456789', 'S', 'XS', '30', '6', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '2023-09-24 03:23:48'),
(4, '345678', 'XL', 'L', '36', '8', 'No', 'Sí', 'No', 'No', 'No', 'No', 'No', 'No', '2023-09-24 03:23:48'),
(5, '901234', 'L', 'S', '32', '7', 'Sí', 'Sí', 'No', 'No', 'No', 'No', 'No', 'No', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `militares`
--

CREATE TABLE `militares` (
  `ID` int(11) NOT NULL,
  `NO_EMPLEADO` varchar(255) NOT NULL,
  `EXMILITARES` varchar(255) NOT NULL,
  `EXMILITAR` varchar(255) NOT NULL,
  `GAS` varchar(255) NOT NULL,
  `FADS` date NOT NULL,
  `FRBL` varchar(255) DEFAULT NULL,
  `MB` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `militares`
--

INSERT INTO `militares` (`ID`, `NO_EMPLEADO`, `EXMILITARES`, `EXMILITAR`, `GAS`, `FADS`, `FRBL`, `MB`, `fecha_registro`) VALUES
(1, '123456', 'Sí', 'Ejército', 'Capitán', '2005-05-10', '2008-08-15', 'Sí', '2023-09-24 03:23:27'),
(2, '789012', 'No', '', '', '0000-00-00', NULL, NULL, '2023-09-24 03:23:27'),
(3, '456789', 'Sí', 'Marina', 'Sargento', '2010-12-20', '2015-06-30', 'No', '2023-09-24 03:23:27'),
(4, '345678', 'No', '', '', '0000-00-00', NULL, NULL, '2023-09-24 03:23:27'),
(5, '901234', 'Sí', 'Fuerza Aérea', 'Teniente', '2008-03-25', '2012-11-30', 'Sí', '2023-09-24 03:23:27'),
(6, '123456', 'Sí', 'Ejército', 'Capitán', '2005-05-10', '2008-08-15', 'Sí', '2023-09-24 03:23:48'),
(7, '789012', 'No', '', '', '0000-00-00', NULL, NULL, '2023-09-24 03:23:48'),
(8, '456789', 'Sí', 'Marina', 'Sargento', '2010-12-20', '2015-06-30', 'No', '2023-09-24 03:23:48'),
(9, '345678', 'No', '', '', '0000-00-00', NULL, NULL, '2023-09-24 03:23:48'),
(10, '901234', 'Sí', 'Fuerza Aérea', 'Teniente', '2008-03-25', '2012-11-30', 'Sí', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_por_cambio_asdc`
--

CREATE TABLE `movimiento_por_cambio_asdc` (
  `ID` int(11) NOT NULL,
  `NO_EMPLEADO` varchar(255) NOT NULL,
  `fdr` date DEFAULT NULL,
  `fdcc` date DEFAULT NULL,
  `pdc` varchar(255) DEFAULT NULL,
  `ADC` varchar(255) DEFAULT NULL,
  `ASS` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `movimiento_por_cambio_asdc`
--

INSERT INTO `movimiento_por_cambio_asdc` (`ID`, `NO_EMPLEADO`, `fdr`, `fdcc`, `pdc`, `ADC`, `ASS`, `fecha_registro`) VALUES
(1, '123456', '2023-04-01', '2023-04-02', 'Cambio de Área', 'Recursos Humanos', 'Tecnología', '2023-09-24 03:23:48'),
(2, '789012', '2023-05-01', '2023-05-02', 'Cambio de Área', 'Ventas', 'Contabilidad', '2023-09-24 03:23:48'),
(3, '456789', '2023-06-01', '2023-06-02', 'Cambio de Área', 'Tecnología', 'Contabilidad', '2023-09-24 03:23:48'),
(4, '345678', '2023-07-01', '2023-07-02', 'Cambio de Área', 'Contabilidad', 'Logística', '2023-09-24 03:23:48'),
(5, '901234', '2023-08-01', '2023-08-02', 'Cambio de Área', 'Logística', 'Recursos Humanos', '2023-09-24 03:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recordados`
--

CREATE TABLE `recordados` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restablecimiento_contrasena`
--

CREATE TABLE `restablecimiento_contrasena` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `fecha_solicitud` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_token_expiration` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `pass`, `reset_token`, `reset_token_expiration`) VALUES
(1, 'Roberto', 'Castillo', 'rob.kztillo117@gmail.com', 'Admin', '$2y$10$9VGYomyknuedHNh98iscZeEua3PqtXa/diB5UJfHpKEa0fCs01Azu', NULL, NULL),
(2, 'Pepe', 'Castillo', 'robertocarloscastillorojas@gmail.com', 'Add', '$2y$10$Vjv5nVBWxC6UShyFi8DGROp6kvvIHaiKBK9h4PZFvNAN16364XI7S', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valucion_anual_desempeño`
--

CREATE TABLE `valucion_anual_desempeño` (
  `id` int(11) NOT NULL,
  `NO_EMPLEADO_3` varchar(10) NOT NULL,
  `FUNCION` varchar(255) NOT NULL,
  `FE2022` date NOT NULL,
  `CRP` varchar(255) NOT NULL,
  `CPD` varchar(255) NOT NULL,
  `ccap` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `valucion_anual_desempeño`
--

INSERT INTO `valucion_anual_desempeño` (`id`, `NO_EMPLEADO_3`, `FUNCION`, `FE2022`, `CRP`, `CPD`, `ccap`, `fecha_registro`) VALUES
(1, '123456', 'Administrativo', '2022-12-31', 'Cumple', 'Cumple', 'Cumple', '2023-09-24 03:19:48'),
(2, '789012', 'Técnico', '2022-12-31', 'Cumple', 'Cumple', 'No Cumple', '2023-09-24 03:19:48'),
(3, '456789', 'Gerente', '2022-12-31', 'Cumple', 'Cumple', 'Cumple', '2023-09-24 03:19:48'),
(4, '345678', 'Analista', '2022-12-31', 'No Cumple', 'Cumple', 'Cumple', '2023-09-24 03:19:48'),
(5, '901234', 'Operario', '2022-12-31', 'Cumple', 'No Cumple', 'No Cumple', '2023-09-24 03:19:48'),
(6, '123456', 'Administrativo', '2022-12-31', 'Cumple', 'Cumple', 'Cumple', '2023-09-24 03:20:22'),
(7, '789012', 'Técnico', '2022-12-31', 'Cumple', 'Cumple', 'No Cumple', '2023-09-24 03:20:22'),
(8, '456789', 'Gerente', '2022-12-31', 'Cumple', 'Cumple', 'Cumple', '2023-09-24 03:20:22'),
(9, '345678', 'Analista', '2022-12-31', 'No Cumple', 'Cumple', 'Cumple', '2023-09-24 03:20:22'),
(10, '901234', 'Operario', '2022-12-31', 'Cumple', 'No Cumple', 'No Cumple', '2023-09-24 03:20:22'),
(11, '123456', 'Administrativo', '2022-12-31', 'Cumple', 'Cumple', 'Cumple', '2023-09-24 03:21:50'),
(12, '789012', 'Técnico', '2022-12-31', 'Cumple', 'Cumple', 'No Cumple', '2023-09-24 03:21:50'),
(13, '456789', 'Gerente', '2022-12-31', 'Cumple', 'Cumple', 'Cumple', '2023-09-24 03:21:50'),
(14, '345678', 'Analista', '2022-12-31', 'No Cumple', 'Cumple', 'Cumple', '2023-09-24 03:21:50'),
(15, '901234', 'Operario', '2022-12-31', 'Cumple', 'No Cumple', 'No Cumple', '2023-09-24 03:21:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afiliados`
--
ALTER TABLE `afiliados`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `categorizacion`
--
ALTER TABLE `categorizacion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `comisiones`
--
ALTER TABLE `comisiones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `cursos_reconocimiento_cuerso`
--
ALTER TABLE `cursos_reconocimiento_cuerso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_del_empleado`
--
ALTER TABLE `datos_del_empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_del_empleo`
--
ALTER TABLE `datos_del_empleo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `datos_de_estudio`
--
ALTER TABLE `datos_de_estudio`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `datos_familia`
--
ALTER TABLE `datos_familia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dato_laborales_personal_c`
--
ALTER TABLE `dato_laborales_personal_c`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `generales`
--
ALTER TABLE `generales`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `incapacida`
--
ALTER TABLE `incapacida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `indumentaria`
--
ALTER TABLE `indumentaria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `militares`
--
ALTER TABLE `militares`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `movimiento_por_cambio_asdc`
--
ALTER TABLE `movimiento_por_cambio_asdc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `recordados`
--
ALTER TABLE `recordados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `restablecimiento_contrasena`
--
ALTER TABLE `restablecimiento_contrasena`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `valucion_anual_desempeño`
--
ALTER TABLE `valucion_anual_desempeño`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afiliados`
--
ALTER TABLE `afiliados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categorizacion`
--
ALTER TABLE `categorizacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `comisiones`
--
ALTER TABLE `comisiones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cursos_reconocimiento_cuerso`
--
ALTER TABLE `cursos_reconocimiento_cuerso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `datos_del_empleado`
--
ALTER TABLE `datos_del_empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `datos_del_empleo`
--
ALTER TABLE `datos_del_empleo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `datos_de_estudio`
--
ALTER TABLE `datos_de_estudio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_familia`
--
ALTER TABLE `datos_familia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `dato_laborales_personal_c`
--
ALTER TABLE `dato_laborales_personal_c`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `generales`
--
ALTER TABLE `generales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de la tabla `incapacida`
--
ALTER TABLE `incapacida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `indumentaria`
--
ALTER TABLE `indumentaria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `militares`
--
ALTER TABLE `militares`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `movimiento_por_cambio_asdc`
--
ALTER TABLE `movimiento_por_cambio_asdc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `recordados`
--
ALTER TABLE `recordados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `restablecimiento_contrasena`
--
ALTER TABLE `restablecimiento_contrasena`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `valucion_anual_desempeño`
--
ALTER TABLE `valucion_anual_desempeño`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recordados`
--
ALTER TABLE `recordados`
  ADD CONSTRAINT `recordados_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
