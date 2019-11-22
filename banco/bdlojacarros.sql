-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 22/11/2019 às 14:06
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
(2, 'Raimundo Oliver Arthur Figueiredo', '301.031.077-38', '16861801454', 'Rua Parque Nacional de Abrolhos', '491', '', 'Esperança', 'Londrina', '08490-515', 'PR'),
(3, 'Benício Roberto Ramos', '369.048.428-65', '17138127338', 'CL 106 ', '920', 'Bloco B', 'Santa Maria', 'Brasília', '72506-202', 'DF'),
(4, 'Elisa Marina Mariana Freitas', '653.851.358-10', '60896939041', 'Rua Vítor do Amaral', '642', '', 'Jardim Alvorada', 'Maringá', '87035-230', 'PR');

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
(1, '2019-08-23', '2019-11-15', 100, 2, 48, 3, 'Concluida'),
(2, '2019-11-19', '2019-12-27', 200, 4, 50, 3, 'Em processo');

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
(1, 'Miguel Riquelme', 'miguelr@gmail.com', 'miguelmiguel'),
(2, 'Gabriel Teodoro', 'gabrielt@gmail.com', 'gabrielgabriel'),
(3, 'Tabata Fernanda', 'tabataf@gmail.com', '123456');

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
  `statusVeiculo` varchar(255) NOT NULL,
  `idMarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tbveiculo`
--

INSERT INTO `tbveiculo` (`idVeiculo`, `anoVeiculo`, `corVeiculo`, `modeloVeiculo`, `valorDiariaVeiculo`, `imgVeiculo`, `statusVeiculo`, `idMarca`) VALUES
(48, 2019, 'Preto', 'Model S', '200.00', '../../img/veiculos/48.jpg', 'Disponível', 1),
(49, 2019, 'Branco', 'Model Z', '400.00', '../../img/veiculos/49.png', 'Disponível', 1),
(50, 2019, 'Branco', 'BMW Série X3', '700.00', '../../img/veiculos/50.jpg', 'Disponível', 2),
(51, 2018, 'Vermelho', 'Model 3', '500.00', '../../img/veiculos/51.png', 'Disponível', 1),
(60, 2018, 'Vermelho', 'Model 3', '400.00', '5dd7ce110f579.png', 'Disponível', 1),
(61, 2018, 'Vermelho', 'Model 3', '400.00', '../../img/veiculos/61.png', 'Disponível', 1);

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
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tblocacao`
--
ALTER TABLE `tblocacao`
  MODIFY `idLocacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbmarca`
--
ALTER TABLE `tbmarca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbveiculo`
--
ALTER TABLE `tbveiculo`
  MODIFY `idVeiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
