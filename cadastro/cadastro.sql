-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Nov-2022 às 21:09
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` int(15) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `tel` int(12) DEFAULT NULL,
  `email` varchar(110) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `numcasa` int(10) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `nascimento`, `tel`, `email`, `senha`, `cep`, `rua`, `numcasa`, `cidade`, `estado`) VALUES
(3, 'felipe', 123456789, '2022-11-01', 123456789, 'felipe@hotmail.com', '123456', 123456789, 'local casa', 171, 'por ai', 'por ai'),
(4, 'jefferson', 123456789, '2022-11-01', 123456789, 'jefferson@hotmail.com', '12345', 123456789, 'local casa', 171, 'por ai', 'por ai'),
(5, 'nicole', 123456789, '2022-11-01', 123456789, 'nicole@hotmail.com', '12345', 123456789, 'local casa', 171, 'por ai', 'por ai'),
(6, 'gustavo', 123456789, '2022-11-01', 123456789, 'gustavo@hotmail.com', '12345', 123456789, 'local casa', 171, 'por ai', 'por ai');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
