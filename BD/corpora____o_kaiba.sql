-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05/12/2019 às 13:32
-- Versão do servidor: 10.4.8-MariaDB
-- Versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `corporação_kaiba`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cards`
--

CREATE TABLE `cards` (
  `id` int(2) NOT NULL,
  `imagem` char(255) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `preço` float NOT NULL,
  `raridade` int(2) NOT NULL,
  `descriçao` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cards`
--

INSERT INTO `cards` (`id`, `imagem`, `nome`, `preço`, `raridade`, `descriçao`) VALUES
(21, 'https://vignette.wikia.nocookie.net/yugioh/images/b/b3/BlueEyesWhiteDragon-CT13-PT-UR-LE.jpg/revision/latest/scale-to-width-down/300?cb=20170411155840&path-prefix=pt', 'Dragão branco', 1000, 8, 'Este lendário dragão é uma poderosa máquina de destruição. Praticamente invencível, muito poucos enfrentaram essa magnifica criatura e viveram para contar a história.'),
(23, 'https://vignette.wikia.nocookie.net/yugioh/images/7/76/SlifertheSkyDragon-CT13-PT-ScR-LE.jpg/revision/latest/scale-to-width-down/300?cb=20170411160410&path-prefix=pt', 'Slifer', 2000, 10, 'Requer 3 Tributos para ser Invocado por Invocação-Normal (não pode ser Baixado Normalmente).'),
(24, 'https://i.pinimg.com/originals/d8/12/fd/d812fd051d928451c15cb7f0160be154.jpg', 'Fusão', 45, 0, 'Usada para fazer fusão de cards.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Gabriel Bernardo', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'silva', 'ga', '12'),
(3, 'Henrique', 'gabr@gmail.com', 'ghsb1535'),
(4, 'Lucas', 'Adm2', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'carlitos', 'ghs', '202cb962ac59075b964b07152d234b70'),
(6, 'TERES', 'teste@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Gabriel B.', 'ghsb11@gmail.com', 'a19030db8ad74befbcdac5adb13bb142'),
(8, 'Lucas', 'lucas@gmail.com', 'a19030db8ad74befbcdac5adb13bb142'),
(10, 'CAROL', 'ADMINADMIN', 'a19030db8ad74befbcdac5adb13bb142'),
(11, 'ghsb11@outlook.com', 'po', 'a19030db8ad74befbcdac5adb13bb142'),
(12, 'TESTe', 'kk@gmail.com', 'a19030db8ad74befbcdac5adb13bb142'),
(13, 'YOU', 'you@gmail.com', 'a19030db8ad74befbcdac5adb13bb142');

-- --------------------------------------------------------

--
-- Estrutura para tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `Id_clientes` int(11) NOT NULL,
  `id_cards` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `favoritos`
--

INSERT INTO `favoritos` (`Id_clientes`, `id_cards`) VALUES
(13, 21);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD KEY `Id_clientes` (`Id_clientes`),
  ADD KEY `id_cards` (`id_cards`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`Id_clientes`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`id_cards`) REFERENCES `cards` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
