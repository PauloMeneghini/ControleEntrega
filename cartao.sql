-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Jan-2021 às 01:29
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cartao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `controlecartao`
--

DROP TABLE IF EXISTS `controlecartao`;
CREATE TABLE IF NOT EXISTS `controlecartao` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nomeEmpresa` varchar(50) DEFAULT NULL,
  `codEnvelope` varchar(10) DEFAULT NULL,
  `qtdeCartao` int(5) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `dataEntrega` datetime DEFAULT NULL,
  `recebidor` varchar(50) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `controlecartao`
--

INSERT INTO `controlecartao` (`id`, `nomeEmpresa`, `codEnvelope`, `qtdeCartao`, `cidade`, `dataCadastro`, `dataEntrega`, `recebidor`, `imagem`) VALUES
(1, 'Teste', '1', 2, 'Itapira', '2021-01-28 22:21:45', '2021-01-22 20:17:41', '1', 'IMG_0537 (Copy).JPG'),
(2, 'teste2', '2', 1, NULL, '2021-01-28 22:21:55', NULL, NULL, NULL),
(3, 'Seicon', '3', 1, NULL, '2021-01-28 22:22:09', NULL, NULL, NULL),
(4, 'abc', '4', 1, 'Itapira', '2021-01-24 20:15:20', NULL, NULL, NULL),
(5, 'teste', '5', 3, 'Mogi Mirim', '2021-01-28 21:36:37', NULL, NULL, NULL),
(6, 'aaa', '6', 1, 'MOGI GUAÃ‡U', '2021-01-28 22:26:41', NULL, NULL, NULL),
(7, 'bbb', '7', 2, 'MOGI GUAÃ‡U', '2021-01-28 22:26:50', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
