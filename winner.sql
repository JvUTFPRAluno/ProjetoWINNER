-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Set-2022 às 16:44
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
  `linhaProducao` varchar(40) DEFAULT NULL,
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
(2, 'joana', 'Produção', '12-Terco 1', '2022-05-11 16:28:45', 'C. emergencial', 'rafael', '2022-09-08 15:56:00', '2022-09-08 19:32:00', 'rotuladeria', '', 'algo aconteceu novamente', 'parafuso apertado', '00:15:00', '', 1),
(5, 'Diego', 'Produção', '01-Arla antiga', '2022-08-23 18:45:00', 'C. emergencial', 'cleber', '2022-09-07 16:09:00', '2022-09-07 17:05:00', 'chacoalhadeira', 'vazamento', 'uma maquina quebrou', 'apertado junta', '00:00:00', '', 1),
(7, 'joana', 'Produção', '01-Arla antiga', '2022-07-23 23:14:00', 'Ajuste operacional', 'rafael', '2022-09-06 19:43:00', '2022-09-07 20:15:00', 'chacoalhadeira', 'parafuso solto', 'algo ocorreu', 'apertado parafuso', '00:00:00', '', 1),
(8, 'pedro', 'Produção', '01-Arla antiga', '2022-08-24 04:15:00', 'Melhoria', 'rafael', '2022-09-06 19:00:00', '2022-08-24 04:16:00', 'chacoalhadeira', 'parafuso solto', 'algum problema', 'parafuso apertado', '00:00:00', 'null', 1),
(9, 'Joao santos', 'Produção', '01-Arla antiga', '2022-08-27 01:27:00', 'C. emergencial', 'Luis', '2022-09-07 12:25:00', '2022-09-06 18:52:00', 'chacoalhadeira', 'vazamento', 'alguma coisa esta vazando', 'apertado cano', '00:00:00', '', 1),
(10, 'joana', 'Produção', '12-Terco 1', '2022-08-29 15:48:00', 'C. emergencial', 'cleber', '2022-09-06 19:12:00', '2022-09-06 19:12:00', 'rotuladeria', 'parafuso solto', 'algo esta vazando', 'algo ocorreu', '00:00:00', '', 1),
(12, 'joao santos', 'Administrativo', '', '2022-09-03 17:27:00', 'Predial', 'Luis', '2022-09-06 15:27:00', '2022-09-07 17:30:00', 'Cadeira', 'quebrou a perna', 'quebrou a cadeira', 'soldado perna', '00:00:00', '', 1),
(16, 'joao santos', 'Administrativo', '', '2022-09-07 13:01:00', 'C. emergencial', 'rafael', '2022-09-07 15:30:00', '2022-09-07 18:00:00', 'algo', 'quebrou', 'algo quebrou', 'algo foi consertado', '00:00:00', '', 1),
(17, 'joana', 'Administrativo', '', '2022-09-07 14:59:00', 'C. emergencial', 'rafael', '2022-09-07 15:29:00', '2022-09-07 15:45:00', 'algo', 'quebrou', 'algo aconteceu', 'algo foi consertado', '00:00:00', '', 1),
(18, 'joana', 'Administrativo', '', '2022-09-07 15:00:00', 'C. emergencial', 'rafael', '2022-09-07 15:31:00', '2022-09-07 16:00:00', 'algo', 'quebrou', 'algo aconteceu', 'algo foi consertado', '00:00:00', '', 1),
(19, 'Joao Santos', 'Produção', '12-Terco 1', '2022-09-07 15:04:00', 'C. emergencial', 'cleber', '2022-09-07 20:05:00', '2022-09-08 18:20:00', 'algo', 'quebrou', 'algo quebrou', 'alguma coisa', '00:00:00', '', 1),
(20, 'joao santos', 'Administrativo', '', '2022-09-07 15:05:00', 'C. emergencial', 'cleber', '2022-09-07 16:05:00', '2022-09-07 17:05:00', 'algo', 'quebrou', 'algo aconteceu', 'algo foi consertado', '00:00:00', '', 1),
(21, 'joao santos', 'Administrativo', '', '2022-09-07 15:05:00', 'C. emergencial', 'rafael', '2022-09-07 20:10:00', '2022-09-07 20:50:00', 'algo', 'quebrou', 'algo aconteceu', 'algo foi consertado', '00:00:00', '', 1),
(22, 'joao santos', 'Administrativo', '', '2022-09-07 15:06:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'mais alguma coisa', '', '00:00:00', NULL, 0),
(23, 'joao', 'Administrativo', '', '2022-09-07 20:50:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'algo aconteceu', '', '00:00:00', NULL, 0),
(24, 'Joao Santos', 'Produção', '12-Terco 1', '2022-09-07 20:51:00', 'C. emergencial', 'rafael', '2022-09-07 20:50:00', '2022-09-07 21:00:00', 'chacoalhadeira', 'emenda solta', 'algo esta vazando', 'apertado emenda', '00:00:00', '', 1),
(26, 'pedro', 'Expedição', '', '2022-09-11 10:31:00', 'C. emergencial', 'rafael', '2022-09-11 10:35:00', '2022-09-11 10:50:00', 'rotuladeria', 'quebrou', 'O caminhão quebrou', 'algo foi feito', '00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `codigo` int(6) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `previlegio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `codigo`, `senha`, `previlegio`) VALUES
(1, 123456, '123456', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ordemservico`
--
ALTER TABLE `ordemservico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ordemservico`
--
ALTER TABLE `ordemservico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
