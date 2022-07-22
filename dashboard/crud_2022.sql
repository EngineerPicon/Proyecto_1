-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2022 a las 01:04:26
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solic`
--

CREATE TABLE `solic` (
  `id` int(11) NOT NULL,
  `ci` varchar(200) CHARACTER SET latin1 NOT NULL,
  `nombre_solic` varchar(200) CHARACTER SET latin1 NOT NULL,
  `nombre_equipo` varchar(200) CHARACTER SET latin1 NOT NULL,
  `serial_equipo` varchar(200) CHARACTER SET latin1 NOT NULL,
  `averia` varchar(200) CHARACTER SET latin1 NOT NULL,
  `cargo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_tec` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ci_tec` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `cod_solic` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_solic` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `solic`
--

INSERT INTO `solic` (`id`, `ci`, `nombre_solic`, `nombre_equipo`, `serial_equipo`, `averia`, `cargo`, `nombre_tec`, `ci_tec`, `cod_solic`, `fecha_solic`) VALUES
(7, 'V-10.993.442', 'Hector Farias', 'Impresora Laser HP', '$r333r3', 'No carga papel', 'Jefe Mantenimiento', 'Freddy Restrepo', 'V-12.435.678', '#0002', '2022-07-07'),
(10, 'V-33.245.677', 'Hector Fray', 'Cartucho tonner', '$d35325', 'VACIO', 'Secretaria', 'Maria Perez', 'V-23.443.112', '#0008', '2022-07-10'),
(13, 'V-25.767.554', 'Hillary PeÃ±a', 'Monitor LCD 12\"', '#222100', 'No enciende', 'Suplente encargado', 'Hector Lopez', 'V-22.554.221', '#0003', '2022-07-10'),
(14, 'V-33.667.532', 'Gaby Arellano', 'Monitor LED 20 \"', '#ew2424', 'No enciende', 'Suplente encargado', 'Hector Lopez', 'V-22.554.221', '#0004', '2022-07-10'),
(15, 'V-34.443.241', 'Julio Guevara', 'Monitor LCD 25\"', '#77574', 'No enciende', 'Suplente Encargado', 'Hector Lopez', 'V-22.554.221', '#0006', '10/07/2022'),
(16, 'V-19.324.307', 'Vannesa Carrero', 'monitor LED 22\"', '#XJ2000', 'No Prende', 'Suplente Encargado', 'Hector Lopez', 'V-22.554.221', '#0007', '11/07/2022'),
(17, 'V-12.345.678', 'Raul Gomez', 'Router ', '#5436', 'No funcia', 'Suplente mantenimiento', 'Mauricio Lopez', 'V-18.420.601', '#0009', '2022-07-16'),
(18, 'V-18.432.101', 'Carolina BriceÃ±o', 'Mouse optico', '#2131', 'No funciona', 'Suplente de mantenimiento', 'Victor Jerez', 'V17.234.332', '#0010', '2022-07-16'),
(19, 'V-24.456.443', 'Jose Heredia', 'Pantalla LED', '#210i999', 'No enciende', 'Secretaria', 'Francis Morillo', 'V-14.335.897', '#0001', '2022-07-16'),
(20, 'V-26.443.112', 'Solmary Rondon', 'Laptop', '#2141', 'No enciende', 'Secretaria', 'Fernanda Malvina', 'V-18.002.114', '#0011', '2022-07-17'),
(21, 'V-33.221.456', 'Eduardo Montes', 'Teclado USB', '#233232', 'No funciona', 'Secretaria', 'Esteffany Mora', 'V-22.221.221', '#0012', '2022-07-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `solic`
--
ALTER TABLE `solic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `solic`
--
ALTER TABLE `solic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
