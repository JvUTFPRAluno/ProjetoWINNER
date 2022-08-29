-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Ago-2022 às 23:08
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
  `tipoManutencao` varchar(20) NOT NULL,
  `nomeManutencao` varchar(50) NOT NULL,
  `dataInicio` datetime NOT NULL,
  `dataTermino` datetime NOT NULL,
  `parteProblema` varchar(50) NOT NULL,
  `motivoProblema` text NOT NULL,
  `descricaoRequisicao` text NOT NULL,
  `solucao` text NOT NULL,
  `tempo_parada` time NOT NULL,
  `nomeTerceiros` varchar(30) DEFAULT NULL,
  `concluido` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ordemservico`
--

INSERT INTO `ordemservico` (`id`, `nomeRequisitante`, `setor`, `linhaProducao`, `dataRequisicao`, `tipoManutencao`, `nomeManutencao`, `dataInicio`, `dataTermino`, `parteProblema`, `motivoProblema`, `descricaoRequisicao`, `solucao`, `tempo_parada`, `nomeTerceiros`, `concluido`) VALUES
(1, 'joao santos', 'Produção', '01-Arla antiga', '0000-00-00 00:00:00', 'C. emergencial', 'cleber', '2022-08-23 22:50:00', '2022-08-23 19:04:00', 'rotuladeria', '', 'algo aconteceu', '0', '01:00:00', '0', 1),
(2, 'joana', 'Produção', '12-Terco 1', '0000-00-00 00:00:00', 'C. emergencial', 'rafael', '2022-08-23 22:34:00', '2022-08-23 19:32:00', 'rotuladeria', '', 'algo aconteceu novamente', 'parafuso apertado', '00:15:00', '0', 1),
(4, 'cleber', 'Produção', '12-Terco 1', '2022-08-21 23:47:00', 'C. emergencial', 'rafael', '2022-08-23 22:49:00', '2022-08-23 19:07:00', 'rotuladeria', '', 'alguma coisa a mais', '0', '00:10:00', '0', 1),
(5, 'Diego', 'Produção', '01-Arla antiga', '2022-08-23 18:45:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'uma maquina quebrou', '0', '00:00:00', NULL, 0),
(6, 'joao santos', 'Produção', '12-Terco 1', '2022-08-23 20:17:00', 'C. emergencial', 'antonio', '2022-08-23 22:54:00', '2022-08-23 20:18:00', 'chacoalhadeira', 'parafuso solto', 'algo quebrou', 'parafuso trocado', '00:30:00', '', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
