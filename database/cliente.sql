-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Set-2022 às 23:20
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(20) NOT NULL,
  `mensagem` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `telefone`, `mensagem`) VALUES
(37, 'Toto', 'rafa.casarini@gmail.com', 123321, 'asd'),
(38, 'Toto', 'rafa.casarini@gmail.com', 123321, 'asd'),
(39, 'Toto', 'rafa.casarini@gmail.com', 123321, 'asd'),
(40, 'Toto', 'rafa.casarini@gmail.com', 123321, 'asd'),
(41, 'Toto', 'rafa.casarini@gmail.com', 123321, 'asd'),
(42, 'Rapahel', 'rafa.casarini@gmail.com', 2147483647, 'asd'),
(43, 'Rapahel', 'thulles@gmail.com', 123321, 'dfs'),
(44, 'Rapahel', 'thulles@gmail.com', 123321, 'dfs'),
(45, 'Rapahel', 'rafa.casarini@gmail.com', 123321, 'sdfsdf'),
(46, 'Rapahel', 'rafa.casarini@gmail.com', 123321, 'sdfsdf'),
(47, 'Rapahel', 'rafa.casarini@gmail.com', 123321, 'sdfsdf'),
(48, 'Rapahel', 'thulles@gmail.com', 123321, 'w'),
(49, 'Rapahel', 'thulles@gmail.com', 123321, 'w'),
(50, 'Rapahel', 'thulles@gmail.com', 123321, 'w');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
