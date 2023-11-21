-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2023 at 12:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servicios`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `producto`, `tipo`, `descripcion`, `precio`) VALUES
(28, 'Postales', 1, 'Postales, flyers y volantes.\r\nEstandar: A6 (10,5x14,8cm)\r\nAfiche/Postal: A4 (21,59x27,94cm)', '16.000'),
(29, 'Afiches', 1, 'Afiches para boletines.\r\nTamaño: A3 (27,94x43,18 cm).', '18.000'),
(30, 'Folletos', 1, 'Dípticos y trípticos.\r\nTamaño: A5 (14,8x21,0cm). ', '20.000'),
(31, 'Landing Page', 2, 'Toda la información de tu sitio en una sola pantalla.', '30.000'),
(32, 'E-commerce', 2, 'Carro de ventas autogestionable. 4 secciones:\r\n-Inicio\r\n-Productos o Servicios\r\n-Noticias, Galería o Productos destacados\r\n-Contacto', '80.000'),
(33, 'Página personalizada', 2, 'Diseño personalizado adaptado a tus gustos y necesidades.', '60.000'),
(34, 'Ilustración (Simple)', 3, 'Ilustracion digital, \r\n1 persona o personaje, busto o medio cuerpo.\r\nColor simple.\r\n\r\n\r\n*Consultar por más personas o fondo.\r\n\r\n ', '15.000'),
(35, 'Ilustración (Full color)', 3, 'Ilustracion digital, \r\n1 persona o personaje, busto o medio cuerpo.\r\nFull color.\r\n\r\n\r\n*Consultar por más personas o fondo.', '20.000'),
(36, 'Ilustración (B&N)', 3, 'Ilustracion digital, \r\n1 persona o personaje, busto o medio cuerpo.\r\nBlanco y Negro.\r\n\r\n\r\n*Consultar por más personas o fondo.', '10.000'),
(46, 'TEST1', 3, 'Ilustracion digital, \r\n1 persona o personaje, busto o medio cuerpo.\r\nBlanco y Negro.\r\n\r\n\r\n*Consultar por más personas o fondo.', '10.000'),
(47, 'TEST2', 3, 'Ilustracion digital, \r\n1 persona o personaje, busto o medio cuerpo.\r\nBlanco y Negro.\r\n\r\n\r\n*Consultar por más personas o fondo.', '10.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
