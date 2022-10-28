-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Out-2022 às 11:14
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
  `descricaoRequisicao` text NOT NULL,
  `concluido` int(1) NOT NULL DEFAULT 0,
  `id_relatorioTecnico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ordemservico`
--

INSERT INTO `ordemservico` (`id`, `nomeRequisitante`, `setor`, `linhaProducao`, `dataRequisicao`, `descricaoRequisicao`, `concluido`, `id_relatorioTecnico`) VALUES
(28, 'João', 'Formulação', '', '2022-10-26 16:52:00', 'Algo ocorreu', 1, NULL),
(30, 'Cleber', 'Produção', 'Linha 5 (LPB)', '2022-10-26 19:07:00', 'Algo quebrou', 1, 22),
(31, 'Pedro', 'Produção', 'Linha 5 (LPB)', '2022-10-26 19:48:00', 'Maquina não liga ', 1, 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatoriotecnico`
--

CREATE TABLE `relatoriotecnico` (
  `id` int(11) NOT NULL,
  `id_requisicao` int(11) NOT NULL,
  `tipoManutencao` varchar(30) NOT NULL,
  `nomeManutencao` text NOT NULL,
  `dataInicio` datetime NOT NULL,
  `dataTermino` datetime NOT NULL,
  `parteProblema` varchar(100) NOT NULL,
  `motivoProblema` text NOT NULL,
  `solucao` text NOT NULL,
  `tempoParada` time DEFAULT NULL,
  `nomeTerceiros` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relatoriotecnico`
--

INSERT INTO `relatoriotecnico` (`id`, `id_requisicao`, `tipoManutencao`, `nomeManutencao`, `dataInicio`, `dataTermino`, `parteProblema`, `motivoProblema`, `solucao`, `tempoParada`, `nomeTerceiros`) VALUES
(1, 28, 'C. emergencial', 'João', '2022-10-26 00:05:00', '2022-10-26 20:05:00', 'Maquina', 'Vazando', 'Vazamento consertado', '00:00:00', ''),
(2, 28, 'C. emergencial', 'João', '2022-10-26 00:00:00', '2022-10-26 00:00:00', 'Maquina', 'Vazando', 'Apertado cano', '00:00:00', ''),
(3, 28, 'C. emergencial', 'João', '2022-10-26 00:00:00', '2022-10-26 00:00:00', 'Maquina', 'Vazamento', 'Apertado cano', '00:00:00', ''),
(22, 30, 'C. programada', 'Rafael', '2022-10-26 19:10:00', '2022-10-26 20:10:00', 'maquina', 'Qebrada', 'consertada', '00:00:00', ''),
(23, 31, 'C. emergencial', 'Rafael', '2022-10-26 19:50:00', '2022-10-26 20:10:00', 'Maquina', 'Quebrado', 'consertado', '00:00:00', '');

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
-- Índices para tabela `relatoriotecnico`
--
ALTER TABLE `relatoriotecnico`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `relatoriotecnico`
--
ALTER TABLE `relatoriotecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
