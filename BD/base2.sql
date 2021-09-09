-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 04:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base2`
--

-- --------------------------------------------------------

--
-- Table structure for table `trabajadores`
--

CREATE TABLE `trabajadores` (
  `ID_empleado` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `dirección` varchar(70) NOT NULL,
  `puesto` varchar(20) NOT NULL,
  `sueldos` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trabajadores`
--

INSERT INTO `trabajadores` (`ID_empleado`, `nombre`, `dirección`, `puesto`, `sueldos`) VALUES
(1, 'luis angel', 'corpal', 'ceo', '23434'),
(3, 'juana martinez', 'Juan escutia', 'Gerente', '45333'),
(4, 'oliver saul burgoa chacha', 'oregon 201', 'marketing', '2000'),
(6, 'fernando', 'Belisario Dominguez', 'Diseñador', '3000'),
(7, 'abelardo fransico', 'Canticas', 'Limpieza', '4000'),
(8, 'andres', 'naranjito ', 'programador', '5000'),
(10, 'pino', 'pedro moreno', 'seguridad', '2400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`ID_empleado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
