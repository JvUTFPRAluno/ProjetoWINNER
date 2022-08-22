-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Ago-2022 às 02:19
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `winner`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordemservico`
--

CREATE TABLE `ordemservico` (
  `id` int(11) NOT NULL,
  `nomeRequisitante` varchar(80) NOT NULL,
  `setor` varchar(20) NOT NULL,
  `linhaProducao` varchar(25) DEFAULT NULL,
  `dataRequisicao` datetime NOT NULL,
  `nomeManutencao` varchar(50) NOT NULL,
  `dataInicio` datetime NOT NULL,
  `dataTermino` datetime NOT NULL,
  `parteProblema` varchar(50) NOT NULL,
  `descricaoRequisicao` text NOT NULL,
  `solucao` int(11) NOT NULL,
  `tempo_parada` time NOT NULL,
  `nomeTerceiros` int(11) DEFAULT NULL,
  `concluido` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ordemservico`
--

INSERT INTO `ordemservico` (`id`, `nomeRequisitante`, `setor`, `linhaProducao`, `dataRequisicao`, `nomeManutencao`, `dataInicio`, `dataTermino`, `parteProblema`, `descricaoRequisicao`, `solucao`, `tempo_parada`, `nomeTerceiros`, `concluido`) VALUES
(1, 'joao santos', 'Produção', '01-Arla antiga', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'algo aconteceu', 0, '00:00:00', 0, 0),
(2, 'joana', 'Produção', '12-Terco 1', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'algo aconteceu novamente', 0, '00:00:00', 0, 0),
(3, 'pedro', 'Administrativo', '01-Arla antiga', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'mais algo ocorreu', 0, '00:00:00', NULL, 0),
(4, 'cleber', 'Produção', '12-Terco 1', '2022-08-21 23:47:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'alguma coisa a mais', 0, '00:00:00', NULL, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ordemservico`
--
ALTER TABLE `ordemservico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ordemservico`
--
ALTER TABLE `ordemservico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
