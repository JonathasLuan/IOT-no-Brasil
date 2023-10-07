-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2023 às 20:31
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetosalao`


-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina`
--

CREATE TABLE `pagina` (
  `id_pagina` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pagina`
--

INSERT INTO `paginas` (`id_pagina`, `url`, `titulo`) VALUES
(1, 'sobre.php', 'Sobre'),
(3, 'home.php', 'Home'),
(4, 'oque-é-iot.php', 'O que é IoT?'),
(5, 'contato.php', 'Contato'),
(6, 'artigos.php', 'Artigos'),
(7, 'objetos-conectados.php', 'Objetos Conectados'),
(8, 'arduino.php', 'Arduino'),
(9, 'conectores.php', 'Conectores'),
(10, 'topologia.php', 'Tinkerked'),
(11, 'lgpd.php', 'LGPD'),
(12, 'aplicacoescotidianas.php', 'Aplicações da Iot na Vida Cotidiana'),
(13, 'artigos-referenciados.php', 'Artigos Referenciados');

-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
