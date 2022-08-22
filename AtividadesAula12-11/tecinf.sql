-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Nov-2020 às 01:05
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alunos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecinf`
--

CREATE TABLE `tecinf` (
  `Nome` varchar(9) DEFAULT NULL,
  `Idade` int(2) DEFAULT NULL,
  `Sexo` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tecinf`
--

INSERT INTO `tecinf` (`Nome`, `Idade`, `Sexo`) VALUES
('João', 20, 'M'),
('Pedro', 30, 'M'),
('Benedito', 25, 'M'),
('Marta', 18, 'F'),
('Joana', 16, 'F'),
('Vicente', 19, 'M'),
('Anastácia', 20, 'F'),
('Márcia', 20, 'F'),
('Paulo', 32, 'M'),
('José', 33, 'M'),
('Viviane', 19, 'F'),
('Aline', 17, 'F'),
('Ana ', 34, 'F'),
('Caroline', 21, 'F'),
('Arthur', 23, 'M'),
('Beanor', 44, 'M'),
('Bianca', 32, 'F'),
('Alfredo', 16, 'M'),
('Bruno', 23, 'M'),
('Carla', 19, 'F'),
('Carlos', 17, 'M'),
('Daiane', 20, 'F'),
('Diego', 22, 'M');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
