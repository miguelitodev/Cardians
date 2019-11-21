-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21/11/2019 às 02:03
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

--
-- Despejando dados para a tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idCliente`, `nomeCliente`, `cpfCliente`, `cnhCliente`, `enderecoCliente`, `numeroCliente`, `complementoCliente`, `bairroCliente`, `cidadeCliente`, `cepCliente`, `ufCliente`) VALUES
(1, 'sad', 'asd', 'asd', '', '', '', '', '', '08455780', ''),
(2, 'rick', '', '', '', '', '', '', '', '', '');

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
  `idUsuario` int(11) NOT NULL,
  `statusLocacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tblocacao`
--

INSERT INTO `tblocacao` (`idLocacao`, `dataInicial`, `dataFinal`, `valorTotal`, `idCliente`, `idVeiculo`, `idUsuario`, `statusLocacao`) VALUES
(1, '1987-08-08', '1987-09-09', 900, 1, 43, 3, 'Concluida'),
(2, '1987-08-08', '1987-09-09', 900, 1, 43, 3, 'Concluida'),
(3, '1234-12-12', '1234-12-13', 1234, 2, 42, 3, 'Trancada'),
(4, '2019-11-14', '2019-12-14', 1234, 2, 42, 3, 'Concluida'),
(5, '2019-12-14', '2019-12-15', 900, 2, 45, 3, 'Trancada'),
(6, '1987-08-08', '1987-09-09', 1234, 2, 45, 1, 'Concluida'),
(7, '1987-08-08', '1987-09-09', 1234, 2, 45, 1, 'Em processo'),
(8, '1987-08-08', '1987-09-09', 1234, 2, 45, 1, ''),
(9, '1987-08-08', '1987-09-09', 1234, 2, 45, 1, ''),
(10, '1987-08-08', '1987-09-09', 1234, 2, 45, 1, ''),
(11, '1920-12-12', '1920-12-15', 400, 2, 45, 3, 'Em processo'),
(12, '1920-12-12', '1920-12-15', 400, 2, 45, 3, 'Em processo'),
(13, '1920-12-12', '1920-12-15', 400, 2, 45, 3, 'Em processo');

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

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `loginUsuario`, `senhaUsuario`) VALUES
(1, 'dsa', 'ads@ads.com', 'das'),
(3, 'Joana Alice da Cunha', 'joana@hotmail.com', '123');

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
  `imgVeiculo` varchar(255) NOT NULL,
  `idMarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tbveiculo`
--

INSERT INTO `tbveiculo` (`idVeiculo`, `anoVeiculo`, `corVeiculo`, `modeloVeiculo`, `valorDiariaVeiculo`, `imgVeiculo`, `idMarca`) VALUES
(42, 2019, 'Branco', 'BMW Série X3', '600.00', '../../img/veiculos/42.jpg', 2),
(43, 2019, 'Azul', 'BMW M8', '720.00', '../../img/veiculos/43.jpg', 2),
(44, 2019, 'Branco', 'Teste', '400.00', '../../img/veiculos/44.jpg', 1),
(45, 2017, 'branco', 'model s', '900.00', '../../img/veiculos/45.jpg', 1);

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
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblocacao`
--
ALTER TABLE `tblocacao`
  MODIFY `idLocacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbmarca`
--
ALTER TABLE `tbmarca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbveiculo`
--
ALTER TABLE `tbveiculo`
  MODIFY `idVeiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
