-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2013 at 04:16 PM
-- Server version: 5.5.33-31.1
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `denarc_dentalapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonos`
--

CREATE TABLE IF NOT EXISTS `abonos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tratamiento_id` int(10) NOT NULL,
  `fechaTransaccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` float(11,2) NOT NULL,
  `metodoPago` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `abonos`
--

INSERT INTO `abonos` (`id`, `tratamiento_id`, `fechaTransaccion`, `cantidad`, `metodoPago`, `descripcion`, `created`, `modified`) VALUES
(1, 4, '2013-12-05', 0.00, '', 'Nada', '2013-12-05 04:04:59', '2013-12-05 04:04:59'),
(2, 4, '', 200.00, '', '555', '2013-12-05 05:32:35', '2013-12-05 05:32:35'),
(3, 4, '2013-12-19', 100.00, '', 'cien', '2013-12-05 05:34:35', '2013-12-05 05:34:35'),
(4, 4, '2013-12-26', 25.50, '', 'veinticinco cincuenta', '2013-12-05 05:45:37', '2013-12-05 05:45:37'),
(5, 4, '2013-12-05', 500.00, '', 'abono', '2013-12-05 11:11:14', '2013-12-05 11:11:14'),
(6, 8, '2013-12-14', 300.00, '', 'Ninguna', '2013-12-14 02:01:53', '2013-12-14 02:01:53'),
(7, 8, '2013-12-14', 200.00, '', 'cien', '2013-12-14 02:13:04', '2013-12-14 02:13:04'),
(8, 8, '2013-12-14', 100.00, '', 'nna', '2013-12-14 02:30:59', '2013-12-14 02:30:59'),
(9, 8, '2013-12-14', 2400.00, '', 'liqqqqqq', '2013-12-14 02:32:00', '2013-12-14 02:32:00'),
(10, 8, '2013-12-14', 0.00, '', 'fsfdfr', '2013-12-14 02:33:18', '2013-12-14 02:33:18'),
(11, 8, '2013-12-14', 0.00, '', 'jjjj', '2013-12-14 02:36:43', '2013-12-14 02:36:43'),
(12, 11, '2013-12-14', 5000.00, '', 'vcc', '2013-12-14 02:38:14', '2013-12-14 02:38:14'),
(13, 11, '2013-12-14', 1000.00, '', 'liiii', '2013-12-14 02:38:37', '2013-12-14 02:38:37'),
(14, 13, '2013-12-14', 500.00, '', 'cambio de ligas', '2013-12-14 13:20:30', '2013-12-14 13:20:30'),
(15, 14, '2013-12-13', 600.00, '', 'anticipo endodoncia', '2013-12-14 13:29:27', '2013-12-14 13:29:27'),
(16, 12, '2013-12-21', 12.00, 'Efectivo', 'Pago rapido', '2013-12-21 10:14:54', '2013-12-21 10:14:54'),
(17, 13, '2013-12-22', 4000.00, 'Cheque', 'abono', '2013-12-22 19:06:11', '2013-12-22 19:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `anexos`
--

CREATE TABLE IF NOT EXISTS `anexos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendado` tinyint(1) DEFAULT NULL,
  `tratamientoPasado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaTratamiento` date DEFAULT NULL,
  `motivoVisita` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menorEdad` tinyint(1) DEFAULT NULL,
  `tutorResponsable` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `paciente_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `anexos`
--

INSERT INTO `anexos` (`id`, `recomendado`, `tratamientoPasado`, `fechaTratamiento`, `motivoVisita`, `menorEdad`, `tutorResponsable`, `paciente_id`) VALUES
(7, NULL, NULL, NULL, NULL, 1, 'Santa', '7'),
(9, NULL, NULL, NULL, NULL, 0, '', '9'),
(10, NULL, NULL, NULL, NULL, 0, '', '10'),
(14, NULL, NULL, NULL, NULL, 0, '', '14');

-- --------------------------------------------------------

--
-- Table structure for table `antecedentespatologicos`
--

CREATE TABLE IF NOT EXISTS `antecedentespatologicos` (
  `idAntecedentesPatologicos` int(11) NOT NULL AUTO_INCREMENT,
  `maloclusion` varchar(255) DEFAULT NULL,
  `anemia` varchar(255) DEFAULT NULL,
  `diabetes` varchar(255) DEFAULT NULL,
  `hepatitis` varchar(255) DEFAULT NULL,
  `tuberculosis` varchar(255) DEFAULT NULL,
  `epilepsia` varchar(255) DEFAULT NULL,
  `efisema` varchar(255) DEFAULT NULL,
  `respiratorios` varchar(255) DEFAULT NULL,
  `coagulacion` varchar(255) DEFAULT NULL,
  `altaPresion` varchar(255) DEFAULT NULL,
  `bajaPresion` varchar(255) DEFAULT NULL,
  `marcapasos` varchar(255) DEFAULT NULL,
  `infarto` varchar(255) DEFAULT NULL,
  `anginaPecho` varchar(255) DEFAULT NULL,
  `artritis` varchar(255) DEFAULT NULL,
  `fiebreReumatica` varchar(255) DEFAULT NULL,
  `implantes` varchar(255) DEFAULT NULL,
  `herpes` varchar(255) DEFAULT NULL,
  `leucemia` varchar(255) DEFAULT NULL,
  `lesionesBoca` varchar(255) DEFAULT NULL,
  `asma` varchar(255) DEFAULT NULL,
  `cancer` varchar(255) DEFAULT NULL,
  `radiacion` varchar(255) DEFAULT NULL,
  `VIH` varchar(255) DEFAULT NULL,
  `otros` varchar(255) DEFAULT NULL,
  `paciente_idPaciente` int(11) NOT NULL,
  PRIMARY KEY (`idAntecedentesPatologicos`),
  KEY `fk_antecedentesPatologicos_paciente1_idx` (`paciente_idPaciente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=146 ;

--
-- Dumping data for table `antecedentespatologicos`
--

INSERT INTO `antecedentespatologicos` (`idAntecedentesPatologicos`, `maloclusion`, `anemia`, `diabetes`, `hepatitis`, `tuberculosis`, `epilepsia`, `efisema`, `respiratorios`, `coagulacion`, `altaPresion`, `bajaPresion`, `marcapasos`, `infarto`, `anginaPecho`, `artritis`, `fiebreReumatica`, `implantes`, `herpes`, `leucemia`, `lesionesBoca`, `asma`, `cancer`, `radiacion`, `VIH`, `otros`, `paciente_idPaciente`) VALUES
(1, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 1),
(2, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 2),
(3, 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 3),
(4, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 4),
(5, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'TAQUICARDIA', 5),
(6, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 6),
(7, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 7),
(8, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 8),
(9, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 9),
(10, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 10),
(11, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 11),
(12, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 12),
(13, 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'TIFOIDEA', 13),
(14, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 14),
(15, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 15),
(16, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 16),
(17, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 17),
(18, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 18),
(19, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 19),
(20, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 20),
(21, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 21),
(22, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 22),
(23, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 23),
(24, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 24),
(25, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 25),
(26, 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 26),
(27, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 27),
(28, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 28),
(29, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 29),
(30, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 30),
(31, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 31),
(32, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 32),
(33, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 33),
(34, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 34),
(35, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 35),
(36, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 36),
(37, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 37),
(38, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 38),
(39, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 39),
(40, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 40),
(41, 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 41),
(42, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 42),
(43, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 43),
(44, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 44),
(45, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 45),
(46, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 46),
(47, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 47),
(48, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 48),
(49, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 49),
(50, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 50),
(51, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 51),
(52, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 52),
(53, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 53),
(54, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 54),
(55, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 55),
(56, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 56),
(57, 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 57),
(58, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 58),
(59, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 59),
(60, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 60),
(61, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 61),
(62, 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 62),
(63, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 63),
(64, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 64),
(65, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 65),
(66, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 66),
(67, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 67),
(68, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 68),
(69, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 69),
(70, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 70),
(71, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 71),
(72, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 72),
(73, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 73),
(74, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 74),
(75, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'Si', 'No', '', 75),
(76, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 76),
(77, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 77),
(78, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 78),
(79, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 79),
(80, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', '', 80),
(81, 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 81),
(82, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 82),
(83, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 83),
(84, 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 84),
(85, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 85),
(86, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 86),
(87, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 87),
(88, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 88),
(89, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 89),
(90, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 90),
(91, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 91),
(92, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 92),
(93, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 93),
(94, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 94),
(95, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', '', 95),
(96, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 96),
(97, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 97),
(98, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 98),
(99, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 99),
(100, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 100),
(101, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 101),
(102, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 102),
(103, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 103),
(104, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 104),
(105, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 105),
(106, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 106),
(107, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 107),
(108, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 108),
(109, 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 109),
(110, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', '', 110),
(111, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 111),
(112, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 112),
(113, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 113),
(114, 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 114),
(115, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 115),
(116, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 116),
(117, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 117),
(118, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 118),
(119, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 119),
(120, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 120),
(121, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 121),
(122, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 122),
(123, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 123),
(124, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 124),
(125, 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 125),
(126, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 126),
(127, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 127),
(128, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 128),
(129, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'Si', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 129),
(130, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 130),
(131, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 131),
(132, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 132),
(133, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 133),
(134, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 134),
(135, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 135),
(136, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 136),
(137, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 137),
(138, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 138),
(139, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 139),
(140, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 140),
(141, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 141),
(142, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 142),
(143, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 143),
(144, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 144),
(145, 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 145);

-- --------------------------------------------------------

--
-- Table structure for table `antecedentes_patologicos`
--

CREATE TABLE IF NOT EXISTS `antecedentes_patologicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patologia_id` int(11) DEFAULT NULL,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patologia_id` (`patologia_id`),
  KEY `paciente_id` (`paciente_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `antecedentes_patologicos`
--

INSERT INTO `antecedentes_patologicos` (`id`, `patologia_id`, `paciente_id`) VALUES
(26, 37, 13),
(25, 20, 13),
(24, 16, 13),
(23, 12, 13);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `nombre`, `created`, `modified`) VALUES
(2, 'carlos', '2013-12-03 13:26:52', '2013-12-03 13:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `estado_cuenta`
--

CREATE TABLE IF NOT EXISTS `estado_cuenta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fechaTransaccion` date NOT NULL,
  `otrosTratamientos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tratamiento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doctor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pacienteCuenta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paciente_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `historia_medicas`
--

CREATE TABLE IF NOT EXISTS `historia_medicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `padecimiento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tratamientoMedico` text COLLATE utf8_unicode_ci NOT NULL,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paciente_id` (`paciente_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

--
-- Dumping data for table `historia_medicas`
--

INSERT INTO `historia_medicas` (`id`, `padecimiento`, `tratamientoMedico`, `paciente_id`) VALUES
(37, '', '', 7),
(36, '', '', 7),
(35, 'lll', '', 7),
(34, 'gfgfgf', 'fff', 7),
(33, 'grgvgv', 'gbgvgvf', 7),
(26, 'fffvg', 'hjjhngh', 7),
(25, 'bgb', 'gbgbgbf', 7),
(38, '', '', 7),
(39, '', '', 7),
(40, '', '', 7),
(41, '', '', 7),
(42, '', '', 9),
(43, '', '', 10),
(44, '', '', 10),
(45, '', '', 10),
(46, '', '', 10),
(47, '', '', 14);

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `idPaciente` int(11) NOT NULL AUTO_INCREMENT,
  `nombrePaciente` varchar(255) NOT NULL,
  `fechaAlta` date NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `nextel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fechaNacimiento` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idPaciente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=146 ;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`idPaciente`, `nombrePaciente`, `fechaAlta`, `edad`, `sexo`, `ocupacion`, `direccion`, `telefono`, `celular`, `nextel`, `email`, `fechaNacimiento`) VALUES
(1, 'MELISSA ARIAS RIVERA', '2013-09-25', 13, 'Femenino', 'ESTUDIANTE', 'CARRETERA SAN FELIPE KM 5 1/2 #530', '5637306', '6862012102', '', '', 'Año-null-Dia'),
(2, 'CESAR ACOSTA RUIZ', '2013-09-25', 15, 'Masculino', 'ESTUDIANTE', 'VILLA FLORIDA CALLE DIENTE DE LEON #4001 ', '5924989', '6861999831', '', '', 'Año-null-Dia'),
(3, 'CRISTINA JACOBO HERNANDEZ', '2013-10-04', 19, '', 'ESTUDIANTE', 'AV. RIO DE LA LOZA #3711 BUGAMBILIAS', '2512316', '6861868082', '', '', 'Año-null-Dia'),
(4, 'YARENNY JACOBO MUJIA', '2013-10-02', 27, 'Femenino', 'AMA DE CASA', 'RIO PANUCO #1774 GONZALEZ ORTEGA', '-----------------------', '6861913054', '', 'NENYS_8888@HOTMAIL.COM', 'Año-null-Dia'),
(5, 'GILARY YARENNI JUAREZ HERNANDEZ', '2012-06-14', 15, 'Femenino', 'ESTUDIANTE', 'RIO SALVADOR #1960', '5631314', '', '', '', 'Año-null-Dia'),
(6, 'SANDRA JAUREGUI LOPEZ', '2013-08-19', 52, 'Femenino', 'HOGAR', 'AV RIO VERDE #225', '--------------------', '6861512270', '-----------------', '------------', 'Año-null-Dia'),
(7, 'GUILLERMO JAUREGUI MOLINA', '2012-06-18', 40, 'Masculino', 'CARROCERO', 'RIO FUERTE #2124 GONZALEZ ORTEGA', '5621221', '8403049', '--------------', '-----------------------', 'Año-null-Dia'),
(8, 'JOSE JORGE JAIME ROMO', '2012-06-18', 66, 'Masculino', 'JUBILADO', 'RIO BALSAS #2031', '5626360', '6861848269', '---------------------------', '-----------------', 'Año-null-Dia'),
(9, 'EMILIO JACOBI VALDEZ', '2012-06-18', 59, 'Masculino', 'TRABAJADOR', 'AVALO # 68 COL. ROBLEDO', '--------------------', '6861459851', '-------------------', '-------------------', 'Año-null-Dia'),
(10, 'JEREMY JIMENEZ LUCERO', '2012-12-04', 12, 'Masculino', 'ESTUDIANTE', ' AV. VALLE DEL MEZQUITAL # 2055', '5821172', '6865781849', '----------------', '----------', 'Año-null-Dia'),
(11, 'ALVARO JUAREZ CURIEL', '2012-08-23', 23, 'Masculino', 'ESTUDIANTE', 'AV. DE LAS CALIFORNIAS #2237', '---------------', '6862032694', '----------------', '---------------', 'Año-null-Dia'),
(12, 'GISEL NAILEA JAUREGUI RIVERA', '2012-05-11', 7, 'Femenino', 'ESTUDIANTE', 'RIO FUERTE #2124 GONZALEZ ORTEGA', '5621221', '8403050', '152*177934*1', '', 'Año-null-Dia'),
(13, 'DAMARIS JIMENEZ HERNANDEZ', '2012-01-04', 43, 'Femenino', 'AMA DE CASA', 'VALLE MEXICALI EJ. GUANAJUATO', ' ----------------', '6861799117', '-------------', '---------------------------', 'Año-null-Dia'),
(14, 'NATALIA JIMENEZ CASTRO', '2012-02-03', 14, 'Femenino', 'ESTUDIANTE', 'AV. VALLE DE MEXICALI #2036 VILLA BONITA', '---------------', '6862100897', '-------------------', '------------------', 'Año-null-Dia'),
(15, 'LUIS FERNANDO JIMENEZ MORALES', '2011-10-10', 39, 'Masculino', 'PLOMERO', 'AV. PRESA DE LA VAQUILLA #1431 18 DE MARZO', '2525274', '6861501965', '------------', '------------------------', 'Año-null-Dia'),
(16, 'JOSE JUAN JIMENEZ A.', '2011-01-26', 41, 'Masculino', 'OPERADOR', 'AV. RIO BRAVO #2153', '5626988', '----------------', '----------------', '----------------', 'Año-null-Dia'),
(17, 'IRIAN MANUEL ESTRADA', '2013-10-08', 12, 'Masculino', 'ESTUDIANTE', 'AV MONTE CASTELO 845', '', '6861957854', '', '', 'Año-null-Dia'),
(18, 'ANDREA ESTRADA', '2013-10-08', 48, 'Femenino', 'CONTADOR', 'RIO ARMERIA 2125 GLZ ORTEGA', '5610963', '686226342', '', '', 'Año-null-Dia'),
(19, 'LINDA SOCORRO GALLEGOS', '2010-09-09', 27, 'Femenino', 'INGENIERA INDUSTRIAL', 'PRADERAS DEL SOL', '', '6861500454', '', '', 'Año-null-Dia'),
(20, 'CESAR DUSTINO RAMIREZ ESCOBAR', '2010-09-09', 15, 'Masculino', 'ESTUDIANTE', 'RIO AMECA 4168 FRACC MIRASOL', '5621079', '6861630712', '', '', 'Año-null-Dia'),
(21, 'NOHEMI ESPINOZA MOLINA NOHEMI', '2010-06-09', 16, 'Femenino', 'ESTUDIANTE', 'AV RIO BRAVO 1833 COL VALLE DORADO', '5687542', '6861321402', '', '', 'Año-null-Dia'),
(22, 'IRMA ERAZO', '2011-02-26', 48, 'Femenino', 'DOMESTICA', '11432 ELKWOOD ST NO HOLLYWWOOD', '8189838275', '8189838275', '', '', 'Año-null-Dia'),
(23, 'CLARISA ERAZO', '2011-02-26', 17, 'Femenino', 'ESTUDIANTE', '...', '', '8189824922', '', '', 'Año-null-Dia'),
(24, 'HECTOR M ERAZO', '2011-02-26', 55, 'Masculino', 'EMPLEADO', 'AVENIDA BRASIL 15395', '5665798', '', '', '', 'Año-null-Dia'),
(25, 'CHRISTOPHER', '2013-02-08', 20, 'Masculino', 'ESTUDIANTE', '...', '', '8189353371', '', '', 'Año-null-Dia'),
(26, 'MANUELA ENRIQUEZ RAMIREZ', '2013-05-29', 56, 'Femenino', 'HOGAR', 'AV RIO NAUTLA 1774', '5611089', '', '', '', 'Año-null-Dia'),
(27, 'NORA LIZ ESCOBAR RAMOS', '2012-04-12', 24, 'Femenino', 'ESTUDIANTE', 'AV YUCATECO 277 COL ROBLEDO', '5635470', '6861725566', '', '', 'Año-null-Dia'),
(28, 'ALMA LETICIA ESCOBAR MEZA', '2012-04-12', 29, 'Femenino', 'TRABAJADORA', 'FRANCISCO PEREZ RIOS 1764', '2518381', '6861978535', '', '', 'Año-null-Dia'),
(29, 'MARIA EUGENIA ESQUIVEL URBANO', '2012-11-12', 60, 'Femenino', 'AMA DE CASA', 'AV RIO CONCEPCION 2147', '5802901', '', '', '', 'Año-null-Dia'),
(30, 'MARTHA ALICIA ESCALANTE RENDON', '2011-05-17', 23, 'Femenino', 'OPERADORA', 'AV SUCHITE SUR 3169', '5610112', '686200592', '', '', 'Año-null-Dia'),
(31, 'JUANA ESPINOZA', '2013-01-14', 63, 'Femenino', 'HOGAR', 'JUAN 185 COL ALAMITOS', '5653486', '', '', '', 'Año-null-Dia'),
(32, 'ELOISA ESTRELLA LIZARRAGA', '2013-02-27', 69, 'Femenino', '...', 'KM 57 SONORA', '5635153755', '', '', '', 'Año-null-Dia'),
(33, 'RAMON ESPINOZA', '2013-02-22', 50, 'Masculino', 'OPERADOR DE MAQUINA', 'AV LAUREL DE LA INDIA 47', '5634292', '', '', '', 'Año-null-Dia'),
(34, 'ISELA ISABEL ESCOBAR MORENO', '2013-01-18', 28, 'Femenino', 'HOGAR', 'AV RIO LERMA 2115 PASEOS DEL SOL', '', '6861706741', '', '', 'Año-null-Dia'),
(35, 'LUIS ANTONIO ESPINAL CHACON', '2012-05-23', 24, 'Masculino', 'TRABAJA', 'AV RIO PANUCO 1714', '122 22 83', '1222283', '', '', 'Año-null-Dia'),
(36, 'FELIX ESPINO', '2012-09-25', 23, 'Masculino', '...', '84430 DA VINCI DR', '7607029330', '', '', '', 'Año-null-Dia'),
(37, 'SAEL AMIRN ESTRADA VALDEZ', '2012-07-31', 6, 'Masculino', 'ESTUDIANTE', 'COL VILLA FLOORIDA AV GAZANIAS', '', '686149314', '', '', 'Año-null-Dia'),
(38, 'ALEXIS ESPINOZA LIMON', '2012-07-11', 20, 'Masculino', 'ESTUDIANTE', 'RIO SANTA MARIA ', '5614611', '6862612771', '', '', 'Año-null-Dia'),
(39, 'LUZ MERCEDES ESPINOZA LIMON', '2012-07-11', 16, 'Masculino', 'ESTUDIANTE', 'RIO SANTA MARIA 2485', '5614611', '6862264233', '', '', 'Año-null-Dia'),
(40, 'MAYLET ONEIRIS NOTARIO GARCIA', '2013-03-26', 16, 'Femenino', 'ESTUDIANTE', 'CALLE ENCANTADAS FRACC LAS FIBRES', '', '6861428315', '', '', 'Año-null-Dia'),
(41, 'KRISTO JAVIER MERCADO ALVARADO', '2013-10-05', 13, 'Masculino', 'ESTUDIANTE', 'AV QUERETARO 3178 COL AZTECA', '5520947', '6861196044', '', '', 'Año-null-Dia'),
(42, 'DEREK GIL', '2013-08-20', 11, 'Masculino', 'ESTUDIANTE', 'ALAMO 76 COL BELLA VISTA', '5519170', '6865909811', '', '', 'Año-null-Dia'),
(43, 'BRIANT ALEJANDRO GIL', '2013-08-20', 12, 'Masculino', 'ESTUDIANTE', 'ALAMO 76 COL BELLA VISTA', '5519170', '6865909811', '', '', 'Año-null-Dia'),
(44, 'CIELO BELTRAN GOMEZ', '2013-07-22', 13, 'Femenino', 'ESTUDIANTE', 'CALLE ZORGO 439', '5637024', '', '', '', 'Año-null-Dia'),
(45, 'ANGELICA RAZO AVILA', '2012-07-10', 30, 'Femenino', 'AMA DE CASA', 'CALLE VIRIDINA #4363 VALLE DEL PEDREGAL', '8392852', '6861640076', '--------------------', 'ARAZO_AVILA@YAHOO.COM.MX', 'Año-null-Dia'),
(46, 'GRICELDA ARACELY RENTERIA VEGA', '2013-10-08', 21, 'Femenino', 'ESTUDIANTE', 'TAPICEROS #1710 COL. BUROCRATAS', '------------------', '6862164077', '152*14*21074', '----------------------------------', 'Año-null-Dia'),
(47, 'APOLINAR GARCIA', '2013-05-10', 83, 'Masculino', 'NO ESPECIFICO', 'CALLE BENITO JUAREZ 912 ISLAS AGRARIAS', '5640705', '..', '', '', 'Año-null-Dia'),
(48, 'JOCELYNNE GARCIA', '2013-06-11', 13, 'Femenino', 'ESTUDIANTE', '2104 CN PERRY AVE.', '6861881368', '', '', '', 'Año-null-Dia'),
(49, 'PAULINA GARCIA VALDEZ', '2013-07-01', 27, 'Femenino', 'INGENIERIA', 'AV DE LA AVES 1235 VOLTA 2', '', '6861645304', '', '', 'Año-null-Dia'),
(50, 'FERNANDO GARCIA MARTINEZ', '2013-09-26', 24, 'Masculino', 'NO ESPECIFICA', 'AV TABACHIA 122 COL ROBLEDO', '5639444', '6862341814', '', '', 'Año-null-Dia'),
(51, 'PAUL GARCIA', '2012-01-01', 10, 'Masculino', 'ESTUDIANTE', '51742 DOUMA ST COACHELLA', '', '7609921206', '', '', 'Año-null-Dia'),
(52, 'JOSE ALBERTO GONZALEZ RIOS', '2012-12-06', 40, 'Masculino', 'ABOGADO', 'CALLEJON NAYARIT 1991 FRACC. ORIZABA', '8571700', '6862365111', '', '', 'Año-null-Dia'),
(53, 'XOCHITL GARCIA CALDERON', '2011-01-08', 28, 'Femenino', 'NO ESPECIFICA', 'RIO AMECA 2796 VALLE DEL SOL', '1255477', '', '', '', 'Año-null-Dia'),
(54, 'BRYAN ALEXIS GONZALEZ COTA', '2013-04-01', 12, 'Masculino', 'ESTUDIANTE', 'AV CONUTILLO 1345 FRACC VILLANOVA', '', '6861198137', '', '', 'Año-null-Dia'),
(55, 'CHRIS ROBERTO GARCIA ORTEGA', '2013-08-07', 11, 'Masculino', 'NO ESPECIFICA', 'AV VILLA DE AREGON 3376', '', '6861439365', '', '', 'Año-null-Dia'),
(56, 'LAURA ESPERANZA GUTIERREZ SANTIAGO', '2012-03-23', 16, 'Femenino', 'ESTUDIANTE', 'AV MISION SANTA LUCIA', '5808564', '6861646300', '', '', 'Año-null-Dia'),
(57, 'YESENIA GUTIERREZ V.', '2013-10-14', 22, 'Femenino', '-----------------', 'AV.EJERCITO LIBERTADOR #186 COL. EMILIANO', '--------------------', '6862144088', '--------------------------', '-----------------------', 'Año-null-Dia'),
(58, 'LESLYE MICHELLE GARCIA DAGNINO', '2010-06-30', 10, 'Femenino', 'ESTUDIANTE', 'CALLEJON EBANISTAS #1540 COL. INDUSTRIAL', '5549277', '6861326655', '------------------------', '--------------', 'Año-null-Dia'),
(59, 'MARIA FERNANDA GARCIA DAGNINO', '2010-06-30', 11, 'Femenino', 'ESTUDIANTE', 'CALLEJON EBANISTAS #1540 COL. INDUSTRIAL', '5549277', '6861326655', '--------------------', '---------------------', 'Año-null-Dia'),
(60, 'MARIA CONCEPCION GOMEZ CORDERO', '2013-08-18', 50, 'Femenino', 'OPERADORA', 'RIO PIAXTLA 2723', '', '686-169-8850', '', '', 'Año-null-Dia'),
(61, 'ALICIA GARCIA ZUÑIGA', '2013-02-19', 24, 'Femenino', 'OPERADORA', 'AV EJERCITO LIVERTADOR', '5635707', '6861120112', '', '', 'Año-null-Dia'),
(62, 'JOSE SALVADOR GARCIA ZAMBRANO', '2013-07-09', 17, 'Masculino', 'ESTUDIANTE', 'RIO ARMERIA 2225', '9627986', '6862898314', '', '', 'Año-null-Dia'),
(63, 'ANA BEATRIZ GUERRERO VILLALOBOS', '2013-07-13', 22, 'Femenino', 'ESTUDIANTE', 'AV 37 # 1722', '5806118', '6862776307', '', '', 'Año-null-Dia'),
(64, 'DIEGO ANDRES GONZALEZ SIERRA', '2012-02-02', 20, 'Masculino', 'ESTUDIANTE', 'AV RIO MAZAS 982', '5613628', '6861638109', '', '', 'Año-null-Dia'),
(65, 'ESTEBAN GONZALEZ SIERRA', '2012-02-02', 16, 'Masculino', 'ESTUDIANTE', 'AV RIO NAZAS 982', '5613628', '6861638109', '', '', 'Año-null-Dia'),
(66, 'APOLINAR GARCIA RODRIGUEZ', '2013-05-27', 47, 'Masculino', 'PROFESIOONISTA', 'KUSAMOKI 10802-19 QUINTA DEL CEDRO', '6646763626', '', '', '', 'Año-null-Dia'),
(67, 'MARIA FERNANDA GARCIA DAGNINO', '2013-06-30', 11, 'Femenino', 'ESCUELA', 'NO ESPECIFICO', '', '', '', '', 'Año-null-Dia'),
(68, 'JESUS ADRIAN GONZALEZ RAMIREZ', '2013-05-27', 6, 'Masculino', 'ESTUDIANTE', 'CALLE CENTRAL #1025', '5611091', '', '', '', 'Año-null-Dia'),
(69, 'ERIKA GOMEZ DEL CASTILLO', '2013-03-29', 28, 'Femenino', 'AMA DE CASA', 'RIO FUERTE 1787', '', '6621040066', '', '', 'Año-null-Dia'),
(70, 'JUAN DE DIOS GUTIERREZ BELTRAN', '2013-05-30', 52, 'Masculino', 'PROFESOR', 'AGUA VIVA 1904', '2165765', '', '', '', 'Año-null-Dia'),
(71, 'CRISTINA GARCIA', '2013-05-11', 56, 'Femenino', 'EMPLEADA', 'GRAN HACIENDA', '', '6869459760', '', '', 'Año-null-Dia'),
(72, 'ISABEL GRACIA LOPEZ', '2013-08-31', 53, 'Femenino', 'AMA DE CASA', 'RIO RUISEENORES # 3546 FRACC. EL CONDOR ', '', '6861921881', '', '', 'Año-null-Dia'),
(73, 'LETICIA GARCIA', '2013-01-31', 45, 'Femenino', 'AUXILIAR DE LIMPIEZA', 'AV DEL CONGRESO #860', '2740990', '', '', '', 'Año-null-Dia'),
(74, 'MARIA LOURDES GUEVARA ESTRADA', '2013-03-04', 49, 'Femenino', 'MAESTRA', 'AV CERRITOS # 2498', '5687748', '6861847870', '', '', 'Año-null-Dia'),
(75, 'GILDARDO GARCIA ORTIZ', '2012-09-13', 63, 'Masculino', 'COMERCIANTE', 'RIO SAN MIGUEL #2953 GONZALEZ ORTEGA', '5619686', '686 1862849', '', '', 'Año-null-Dia'),
(76, 'BRYAN ALEXXIS GONZALEZ COTA', '2013-03-01', 12, 'Masculino', 'ESTUDIANTE', 'AV CONUTILLO #1345 FRACC VILLAPUDUA', '', '661198137', '', '', 'Año-null-Dia'),
(77, 'ANABEL GARCIA NUNEZ', '2010-08-12', 26, 'Femenino', 'HOGAR', 'COL. ABASOLO', '9056213', '6861488130', '', '', 'Año-null-Dia'),
(78, 'GLORIA GUADALUPE GONZALEZ ARANA', '2012-12-29', 34, 'Femenino', 'EMPLEADA', 'AV RIO TAMESIS # 2081', '5803728', '6861505115', '', '', 'Año-null-Dia'),
(79, 'YAEL FERNANDO GASTELM AYALA', '2012-02-01', 4, 'Femenino', '....', 'CALLE PRIMERA 276', '6585162512', '6861851159', '', '', 'Año-null-Dia'),
(80, 'KEYLA YESENNIA GARATE BENITEZ', '2012-01-26', 16, 'Femenino', 'ESTUDIANTE', 'AV JALPAN # 437 FRACC ANGERES DE PUEBLA', '6862193797', '6865738459', '', '', 'Año-null-Dia'),
(81, 'MELISSA MARLETTE GARCCIA RODRIGUEZ', '2012-03-01', 25, 'Femenino', '...', 'BREST OESTE # 2811', '9050252', '6861547621', '', '', 'Año-null-Dia'),
(82, 'DAVID GURRAL', '2012-04-10', 0, 'Masculino', '...', '...', '', '', '', '', 'Año-null-Dia'),
(83, 'LUIS ABBEL GORDILLO ALDECO', '2013-01-21', 46, 'Masculino', 'EMPLEADO', 'AV CHUBUT #82 BUENOS AIRES', '', '6862502175', '', '', 'Año-null-Dia'),
(84, 'GLORIA GARCIA', '2013-01-21', 55, 'Femenino', 'HOGAR', 'RIO BRAVO #2124', '5621397', '', '', '', 'Año-null-Dia'),
(85, 'JESLI YARELI GALLEGO MARTINEZ', '2013-06-03', 8, 'Femenino', 'NO ESPECIFICA', 'AV DE LOS CARACOLES #311, FRACC. VALLE DE PUEBLA', '6862099947', '6862099947', '', '', 'Año-null-Dia'),
(86, 'MARIA CELIA GONZALEZ MEZA', '2012-02-24', 57, 'Femenino', 'AMA DE CASA', 'AV SAN PEDRO MEZQUITAL 1122', '5822061', '6861343407', '', '', 'Año-null-Dia'),
(87, 'PRISCILA GARCIA MASCARENO', '2013-06-03', 22, 'Femenino', 'NO ESPECIFICO', 'MANGANA 1768 COL LIENZO', '', '6861168587', '', '', 'Año-null-Dia'),
(88, 'CELIA GUTIERREZ', '2013-06-03', 66, 'Femenino', 'HOGAR', '651 ZACATECAS', '5624951', '', '', '', 'Año-null-Dia'),
(89, 'FCO. ANTONIO GONZALEZ M.', '2010-02-08', 20, 'Masculino', 'ESTUDIANTE', 'CALLE RIO TECOLUTLA', '', '6862322882', '', '', 'Año-null-Dia'),
(90, 'ANTONIO DE JESUS GONZALEZ BENAVIDEZ', '2013-09-06', 19, 'Masculino', '...', 'COL BUROCRATAS FEDERALES, AV TOPOGRAFOS', '5640951', '6862234672', '', '', 'Año-null-Dia'),
(91, 'EFRAIN GARNICA MIRANDA', '2011-11-25', 16, 'Masculino', 'ESTUDIANTE', 'AV ALISOS #301', '5634389', '6862142482', '', '', 'Año-null-Dia'),
(92, 'MARTHA J. GARCIA ZUNIGA', '2011-07-05', 31, 'Femenino', 'OPERADORA', 'AV CERUSITA 1492 VALLE DEL PEDREGAL', '8399689', '', '', '', 'Año-null-Dia'),
(93, 'CARMEN ALICIA GUTIERREZ RIVERA', '2013-09-03', 15, 'Femenino', 'estudiante', 'AV VILLA DEL PASEO 3442 VILLAS DE LA RREPUBLICA', '', '6861104283', '', '', 'Año-null-Dia'),
(94, 'LUIS ALONSO GUTIERREZ RIVERA', '2013-09-03', 21, 'Masculino', 'AGENDE DE VENTAS', 'VILLA DEL PASEO 3442', '', '6861953102', '', '', 'Año-null-Dia'),
(95, 'VICTOR GARCIA DELGADO', '2012-10-03', 22, 'Masculino', '....', '....', '6865241195', '', '', '', 'Año-null-Dia'),
(96, 'ISHA CARMINA GARCIA LOBATOS', '2010-12-24', 24, 'Femenino', 'ASISTENTE DE PEDAGOGIA', 'EJIDO QUERETARO', '', '6861375571', '', '', 'Año-null-Dia'),
(97, 'ISABEL GUTIERREZ', '2013-07-20', 57, 'Femenino', 'ESTILISTA', 'HECTOR MIGUNI #207', '9058420', '', '', '', 'Año-null-Dia'),
(98, 'ANDREA LIZBETH RAZO HERNANDEZ', '2013-10-22', 19, 'Femenino', 'EMPLEADA', 'LAGUNA DE GUZMAN #998 GONZALES ORTEGA', '2533299', '6861221293', '', 'ANDREALIZBETH17@HOTMAIL.COM', '1993-11-17'),
(99, 'GILBERTO GALLEGOS', '2013-10-18', 82, 'Masculino', 'NO ESPECIFICO', 'CARRETERA SAN LUIS KM. SSJ', '5617525', '6861718308', '', '', 'Año-null-Dia'),
(100, 'BERENICE GUERRERO VILLALOBOS', '2013-01-12', 31, 'Femenino', 'EMPLEADA', 'AV 37 #1722', '5806118', '6861573852', '', '', 'Año-null-Dia'),
(101, 'MARIA GUADALUPE GARCIA', '2013-09-13', 72, 'Femenino', 'AMA DE CASA', 'AV FCO VILLA # 1712', '5540683', '6861491250', '', '', 'Año-null-Dia'),
(102, 'FERNANDA KAARINA GALAVIZ LEAL', '2013-01-07', 15, 'Femenino', 'NO ESPECIFICA', 'AV CARROCEROS SUR #1273', '...', '6861738231', '', '', 'Año-null-Dia'),
(103, 'enrique garcia', '2011-01-30', 16, 'Masculino', 'estudiante', 'ej monterrey', '', '', '', '', 'Año-null-Dia'),
(104, 'MARIA ELISA GARCIA MEDINA', '2013-07-22', 61, 'Femenino', 'JUBILADA', 'AV HILANO RUELAS 225', '5626926', '6864461422', '', '', 'Año-null-Dia'),
(105, 'DANIELA FERNANDA GOMEZ LOPEZ', '2011-11-05', 17, 'Femenino', 'ESTUDIANTE', 'AV DEL TARAY OESTE # 3819 FRACC CILLA FLORIDA', '9067055', '686120285', '', '', 'Año-null-Dia'),
(106, 'RAUL ALEJANDRO GARCIA BARRERA', '2011-12-12', 27, 'Masculino', 'EMPLEADO', 'CALLEJON SAN MIGUEL #225', '6861707573', '6861706081', '', '', 'Año-null-Dia'),
(107, 'OSCAR ESPINOZA', '2013-02-22', 22, 'Masculino', 'ESTUDIANTE', 'AV LAUREL DE LA INDIA #47', '5634292', '', '', '', 'Año-null-Dia'),
(108, 'YANI GOMEZ GARCIA', '2011-03-20', 19, 'Femenino', 'ESTUDIANTE', '2108', '', '6861389981', '', '', 'Año-null-Dia'),
(109, 'FRANCISCO JAVIER GARCIA FLORES', '2011-04-28', 22, 'Masculino', 'ESTUNDIANTE', 'AV RIO SUCHITE SUR # 3173', '5613813', '6861881481', '', '', 'Año-null-Dia'),
(110, 'ADOLFO ANTOIO GARCIA LOPEZ', '2011-10-10', 16, 'Masculino', 'ESTUDIANTE', 'LAUREL DE LA INDIA # 289 COL ROBLEDO', '5634998', '', '', '', 'Año-null-Dia'),
(111, 'ANA FABIOLA GARCIA MEDINA', '2012-11-06', 22, 'Femenino', 'NO ESPECIFICA', 'QUECHOLAC #4632', '', '6861888163', '', '', 'Año-null-Dia'),
(112, 'JOSE HECTOR GARCIA RENTERIA', '2012-06-19', 53, 'Masculino', 'EMPLEADO', 'ESTACION PASCUALITOS CASA 2B', '5614495', '6862261339', '-----------------------------', '--------------------------------------', 'Año-null-Dia'),
(113, 'SANDRA ELIZABETH GARCIA CRUZ', '2012-02-03', 29, 'Femenino', 'COMERCIANTE', 'COL. ARBOLEDA S/N QUERETARO DEL MANZANDO', '---------------------', '686107634', '-----------------', '-----------------------------', 'Año-null-Dia'),
(114, 'ELVIRA GARCIA AGUJERO', '2012-05-11', 46, 'Femenino', 'EMPLEADO', 'ACOYOCAN #584 ANGELES DE PUEBLA', '-----------------------', '6862033946', '--------------', '------------------------------', 'Año-null-Dia'),
(115, 'LIZBETH GAMEZ TAPIA', '2012-06-07', 33, 'Femenino', 'HOGAR', 'AV. CASTIBLANCO # 251 DEL PRADO', '8393829', '6862506626', '152*148163*2', 'LGAMEZ1030@HOTMAIL.COM', 'Año-null-Dia'),
(116, 'JOSE IGNACIO GASPAR', '2012-06-07', 37, 'Masculino', '---------------', 'JUSTITIN', '------------', '6862219525', '---------------------', '--------------------', 'Año-null-Dia'),
(117, 'AMPARO GARCIA L', '2013-04-10', 38, 'Femenino', 'EMPLEADA', 'ENCANTADAS 973', '6861163603', '6861428315', '', '', 'Año-null-Dia'),
(118, 'JOSE IGNACIO GASPAR', '2010-05-18', 57, 'Masculino', 'NO ESPECIFICA', 'JUSTITIA', '...', '...', '', '', 'Año-null-Dia'),
(119, 'IRMA RAQUEL GAXIOLA FLORES', '2012-06-19', 52, 'Femenino', 'HOGAR', 'CALLE 1RA Y RIO STA MARIA', '5610928', '...', '', '', 'Año-null-Dia'),
(120, 'JUAN SEBASTIAN GARZON A.', '2012-01-16', 22, 'Masculino', 'COCINERO', 'CALLE RIO FUERTE # 2000', '5921794', '6862550951', '', '', 'Año-null-Dia'),
(121, 'CARMEN GONZALEZ', '2012-09-06', 50, 'Femenino', 'AMA DE CASA', '3454 A. COLIBRIES', '...', '...', '', '', 'Año-null-Dia'),
(122, 'KARLA KARINA GARCIA MENDEZ', '2012-09-19', 21, 'Femenino', 'CAJERA', 'AV BALSAMO # 992, VILLA DEL ROBLE', '', '6862276068', '', '', 'Año-null-Dia'),
(123, 'SALVADOR GONZALEZ ARANA', '2012-08-23', 25, 'Masculino', 'DOCENTE', 'AV RIO TAMESIS #2081 COL GLEZ ORTEGA', '5803728', '6861505115', '', '', 'Año-null-Dia'),
(124, 'LEONARDO GUTIERREZ CABRALES', '2012-05-05', 8, 'Masculino', '...', 'CHIETI # 1444', '8382379', '6861888147', '', '', 'Año-null-Dia'),
(125, 'KARLA PATRICIA GUTIERREZ PEREZ', '2012-08-01', 34, 'Femenino', 'MAESTRA', 'BOSQUE CHAPULTEPEC # 801 FRACC. HDA. DEL BOSQUE', '8382714', '6861606959', '', '', 'Año-null-Dia'),
(126, 'RUBEN BRAULIO GIRON MENDOZA', '2012-08-22', 30, 'Masculino', 'ESTUDIANTE', 'FLORESITA # 645, RESIDENCIAL CASA MAGNA', '6861608741', '....', '', '', 'Año-null-Dia'),
(127, 'INGRIT YAQUELIN GOMEZ GARCIA', '2012-08-13', 8, 'Femenino', '...', 'AV PENSAMIENTOS # 348', '6861102669', '6862783405', '', '', 'Año-null-Dia'),
(128, 'KARINA MICHELLE GONZALEZ MTZ', '2012-10-30', 19, 'Femenino', '...', 'AV SAN PEDRO MEZQUITAL # 2125', '5610054', '6861002727', '', '', 'Año-null-Dia'),
(129, 'LUIS GODINEZ MORALES', '2012-11-06', 50, 'Masculino', 'CONTRATISTA', 'AV SAN GABRIEL 1698', '5676435', '6862244026', '', '', 'Año-null-Dia'),
(130, 'VIRGILIO GONZALEZ GONZALEZ', '2013-01-21', 56, 'Masculino', 'EMPLEADA GOBIERNO DEL ESTADO', 'RIO PANUCO 2978 FRACC MEXICALI', '5612386', '...', '', '', 'Año-null-Dia'),
(131, 'ANGEL JARAYC GONZALEZ RAMIREZ', '2012-11-12', 3, 'Masculino', '...', 'CALLE CENTRAL # 1025', '5611091', '...', '', '', 'Año-null-Dia'),
(132, 'VANIA YAEL GRIJALVA CASTANON', '2012-11-12', 20, 'Femenino', 'AMA DE CASA', 'ROCIOS NORTE # 3745', '6861502900', '6865258617', '', '', 'Año-null-Dia'),
(133, 'JUAN MANEL GAETA MADUENO', '2012-12-10', 51, 'Masculino', 'OPERADOR TECNICO', 'AV RIO POTOS # 3710', '5629284', '...', '', '', 'Año-null-Dia'),
(134, 'FRANCISCA GARCIA', '2013-02-18', 42, 'Femenino', '...', '83880 AVE 48 INDIO CALIFORNIA', '1608485046', '', '', '', 'Año-null-Dia'),
(135, 'DAVID GARCIA RODRIGUEZ', '2013-02-26', 29, 'Masculino', 'TECNICO MOLDEO DE PLASTICO', 'AV RIO FUERTE # 2045', '', '6861438553', '', '', 'Año-null-Dia'),
(136, 'FERNANDO GABRIEL LOPEZ', '2012-10-01', 13, 'Masculino', 'ESTUDIANTE', '2836 AV RIO SANFERNANDO', '2522029', '', '', '', 'Año-null-Dia'),
(137, 'RAQUEL GARCIA RODRIGUEZ', '2013-02-14', 48, 'Femenino', 'HOGAR', 'BENITO JUAREZ 912 ', '5640705', '6861205002', '', '', 'Año-null-Dia'),
(138, 'ELEANA NOEMI GONZALEZ', '2012-11-04', 11, 'Femenino', 'ESTUDIANTE', 'NO ESPECIFICA', '', '', '', '', 'Año-null-Dia'),
(139, 'PAOLA GARCIA ALVAREZ', '2012-02-23', 3, 'Femenino', 'BEBE', 'AV PINA DEL RIO OESTE # 3333', '', '6861626435', '', '', 'Año-null-Dia'),
(140, 'DIANA GONZALEZ ORTEGA', '2012-03-07', 30, 'Femenino', 'ESTUDIANTE', 'AV RIO CONSULADO # 3272', '6861844404', '6861844404', '', '', 'Año-null-Dia'),
(141, 'ANA MARIA GARCIA', '2012-07-13', 73, 'Femenino', 'CASA', 'AVE RIO TAMAZULA # 5', '', '', '', '', 'Año-null-Dia'),
(142, 'JESUS ABRAHAM ZAMORAN PENA', '2013-10-21', 14, 'Masculino', 'ESTUDIANTE', 'FRACCIOINAMIENTO PRADERAS DEL SOL', '5775780', '', '', '', 'Año-null-Dia'),
(143, 'JORGE ZAMUDIO', '2013-07-20', 53, 'Masculino', 'EMPLEADO', 'DEL OLIVO # 75 LOS ENCINOS', '5634110', '6862484792', '', '', 'Año-null-Dia'),
(144, 'ALEXIS JAVIER ZAMORA SERRANO', '2009-10-12', 14, 'Masculino', 'ESTUDIANTE', 'RIO ARMERIA 2419', '5928448', '', '', '', 'Año-null-Dia'),
(145, 'MARTA ZUNIGA HUERTA', '2013-06-26', 46, 'Femenino', 'AMA DE CASA', 'RIO MEZCALAPA 2031', '5928981', '6861441025', '', '', 'Año-null-Dia');

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_paterno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_materno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaAlta` date NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ocupacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nextel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `fechaAlta`, `edad`, `fechaNacimiento`, `sexo`, `ocupacion`, `direccion`, `telefono`, `celular`, `nextel`, `email`) VALUES
(13, 'Eddie', 'Ornelas', 'Saldana', '2013-12-13', 26, '1987-11-29', 'M', 'Estudiante', 'Av. La joya 2397', '5539645', '6861213049', '123*456*789', 'correo@eddornelas.com'),
(15, 'daniel', 'fernandez', 'lopez', '2013-12-04', 23, '2013-12-03', 'M', 'uabc', 'palaco', '5616895', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patologias`
--

CREATE TABLE IF NOT EXISTS `patologias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `patologias`
--

INSERT INTO `patologias` (`id`, `descripcion`) VALUES
(1, 'Maloclusion'),
(2, 'Anemia'),
(3, 'Diabetes'),
(4, 'Tuberculosis'),
(5, 'Hepatitis'),
(6, 'Epilepsia'),
(7, 'Efisema'),
(8, 'Respiratorios'),
(9, 'Coagulacion'),
(10, 'Alta Presion'),
(11, 'Baja Presion'),
(12, 'Marcapasos'),
(13, 'Infarto'),
(14, 'Angina Pecho'),
(15, 'Artritis'),
(16, 'Fiebre Reumatica'),
(17, 'Implantes'),
(18, 'Herpes'),
(19, 'Leucemia'),
(20, 'Lesiones Boca'),
(21, 'Asma'),
(22, 'Cancer'),
(23, 'Radiacion'),
(24, 'VIH'),
(25, 'Obvesidad'),
(26, 'Hipertencion'),
(27, 'Cancer'),
(28, 'Asma'),
(29, 'Salmonela'),
(30, 'Patologia Extra'),
(31, 'wxtra'),
(32, 'p1'),
(33, 'p2'),
(35, 'Lupus'),
(36, 'Gonorrea'),
(37, 'Baricela'),
(38, 'Viruela');

-- --------------------------------------------------------

--
-- Table structure for table `tratamientos`
--

CREATE TABLE IF NOT EXISTS `tratamientos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `fechaTransaccion` date NOT NULL,
  `costoTratamiento` float NOT NULL,
  `mensualidad` float NOT NULL,
  `doctor_id` int(10) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `liquidado` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `doctor_id` (`doctor_id`),
  KEY `paciente_id` (`paciente_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tratamientos`
--

INSERT INTO `tratamientos` (`id`, `descripcion`, `fechaTransaccion`, `costoTratamiento`, `mensualidad`, `doctor_id`, `paciente_id`, `categoria`, `liquidado`, `created`, `modified`) VALUES
(4, 'Ninguna', '2013-12-31', 10000, 10000, 0, 10, 'brakets', 0, '2013-12-04 15:28:00', '2013-12-04 15:28:00'),
(3, 'gfvvfdvf', '2013-12-29', 1000, 100, 0, 9, 'brakets', 0, '2013-12-04 14:09:04', '2013-12-04 14:09:04'),
(5, '', '2013-12-31', 500, 50, 0, 10, 'brakets', 0, '2013-12-04 15:32:45', '2013-12-04 15:32:45'),
(6, 'hgvvg', '2013-12-29', 555, 50, 1, 10, 'brakets', 0, '2013-12-04 15:37:09', '2013-12-04 15:37:09'),
(7, 'hhvb', '2013-12-08', 500, 60, 2, 11, 'brakets', 1, '2013-12-04 15:39:38', '2013-12-04 15:39:38'),
(8, 'Ninguna', '2013-12-13', 3000, 300, 1, 13, 'brakets', 1, '2013-12-14 01:43:59', '2013-12-14 02:36:43'),
(11, 'Ninguna', '2013-12-14', 6000, 600, 1, 13, 'brakets', 1, '2013-12-14 02:38:01', '2013-12-14 02:38:37'),
(12, 'ddds', '2013-12-14', 123, 12, 2, 13, 'brakets', 0, '2013-12-14 02:40:54', '2013-12-14 02:40:54'),
(13, 'braqets de porcela', '2013-11-20', 100000, 400, 2, 15, 'brakets', 0, '2013-12-14 13:18:47', '2013-12-14 13:18:47'),
(14, 'endodoncia', '2013-03-14', 1200, 600, 2, 15, 'otros', 0, '2013-12-14 13:26:56', '2013-12-14 13:26:56'),
(15, 'aaaaa', '2013-12-23', 1000, 100, 2, 15, 'brakets', 0, '2013-12-23 02:05:04', '2013-12-23 02:05:04'),
(16, 'bbbb', '2013-12-23', 2000, 200, 2, 15, 'otros', 0, '2013-12-23 02:05:38', '2013-12-23 02:05:38'),
(17, 'ccccc', '2013-12-23', 3000, 300, 2, 15, 'brakets', 0, '2013-12-23 02:06:19', '2013-12-23 02:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` int(5) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellidoPaterno` varchar(250) NOT NULL,
  `apellidoMaterno` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `password`, `level`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `correo`, `telefono`) VALUES
(1, 'administrador', 'contrasena', 0, '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
