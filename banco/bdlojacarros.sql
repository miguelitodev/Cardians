-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 02/11/2019 às 00:41
-- Versão do servidor: 10.4.6-MariaDB
-- Versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlojacarros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(100) NOT NULL,
  `cpfCliente` varchar(20) NOT NULL,
  `cnhCliente` varchar(50) NOT NULL,
  `enderecoCliente` varchar(100) NOT NULL,
  `numeroCliente` varchar(10) NOT NULL,
  `complementoCliente` varchar(10) NOT NULL,
  `bairroCliente` varchar(50) NOT NULL,
  `cidadeCliente` varchar(50) NOT NULL,
  `cepCliente` varchar(20) NOT NULL,
  `ufCliente` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblocacao`
--

CREATE TABLE `tblocacao` (
  `idLocacao` int(11) NOT NULL,
  `dataInicial` date NOT NULL,
  `dataFinal` date NOT NULL,
  `valorTotal` double NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idVeiculo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmarca`
--

CREATE TABLE `tbmarca` (
  `idMarca` int(11) NOT NULL,
  `nomeMarca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tbmarca`
--

INSERT INTO `tbmarca` (`idMarca`, `nomeMarca`) VALUES
(1, 'tesla'),
(2, 'bmw'),
(3, 'volkswagen'),
(4, 'volkswagen'),
(5, 'mercedez'),
(6, 'honda');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `loginUsuario` varchar(30) NOT NULL,
  `senhaUsuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbveiculo`
--

CREATE TABLE `tbveiculo` (
  `idVeiculo` int(11) NOT NULL,
  `anoVeiculo` int(4) NOT NULL,
  `corVeiculo` varchar(25) NOT NULL,
  `modeloVeiculo` varchar(100) NOT NULL,
  `valorDiariaVeiculo` decimal(5,2) NOT NULL,
  `idMarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tbveiculo`
--

INSERT INTO `tbveiculo` (`idVeiculo`, `anoVeiculo`, `corVeiculo`, `modeloVeiculo`, `valorDiariaVeiculo`, `idMarca`) VALUES
(1, 2017, 'branca', 'model s', '600.00', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tblocacao`
--
ALTER TABLE `tblocacao`
  ADD PRIMARY KEY (`idLocacao`),
  ADD KEY `FK_idCliente` (`idCliente`),
  ADD KEY `FK_idVeiculo` (`idVeiculo`),
  ADD KEY `FK_idUsuario` (`idUsuario`);

--
-- Índices de tabela `tbmarca`
--
ALTER TABLE `tbmarca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Índices de tabela `tbveiculo`
--
ALTER TABLE `tbveiculo`
  ADD PRIMARY KEY (`idVeiculo`),
  ADD KEY `FK_idMarca` (`idMarca`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblocacao`
--
ALTER TABLE `tblocacao`
  MODIFY `idLocacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmarca`
--
ALTER TABLE `tbmarca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbveiculo`
--
ALTER TABLE `tbveiculo`
  MODIFY `idVeiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tblocacao`
--
ALTER TABLE `tblocacao`
  ADD CONSTRAINT `tblocacao_ibfk_1` FOREIGN KEY (`idVeiculo`) REFERENCES `tbveiculo` (`idVeiculo`),
  ADD CONSTRAINT `tblocacao_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tblocacao_ibfk_3` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Restrições para tabelas `tbveiculo`
--
ALTER TABLE `tbveiculo`
  ADD CONSTRAINT `tbveiculo_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `tbmarca` (`idMarca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
