-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Jan-2021 às 02:20
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
  `dataEntrega` date DEFAULT NULL,
  `recebidor` varchar(50) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `controlecartao`
--

INSERT INTO `controlecartao` (`id`, `nomeEmpresa`, `codEnvelope`, `dataEntrega`, `recebidor`, `imagem`) VALUES
(1, 'TESTE', '01', '2021-01-17', '', 'Jesko.jfif'),
(3, 'teste2', '2', '2021-01-18', 'aaa', 'Jesko.jfif'),
(4, 'fsdfsfs', '1', '2021-01-18', 'abc', 'Jesko.jfif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
