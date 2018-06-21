-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Jun-2018 às 03:44
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--
CREATE DATABASE IF NOT EXISTS `portfolio_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `portfolio_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `monitoria`
--

DROP TABLE IF EXISTS `monitoria`;
CREATE TABLE IF NOT EXISTS `monitoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `feedback` text,
  `id_usuario` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_monitoria_usuario_idx` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `monitoria`
--

INSERT INTO `monitoria` (`id`, `descricao`, `feedback`, `id_usuario`, `data_cadastro`) VALUES
(3, 'Agora Vai erer', 'Vamos lÃ¡ cara', 1, '2018-06-21 03:28:14'),
(4, 'Monitoria de Estrutura da MatÃ©ria', 'Torcia para que ninguÃ©m apa', 1, '2018-06-21 03:28:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `email`) VALUES
(1, 'Christian Reis', '123', '12345678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voluntariado`
--

DROP TABLE IF EXISTS `voluntariado`;
CREATE TABLE IF NOT EXISTS `voluntariado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `feedback` text,
  `id_usuario` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `voluntariado`
--

INSERT INTO `voluntariado` (`id`, `descricao`, `feedback`, `id_usuario`, `data_cadastro`) VALUES
(2, 'jsskksmsmsm', 'jzksksksksk', 1, '2018-06-21 03:36:04');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `monitoria`
--
ALTER TABLE `monitoria`
  ADD CONSTRAINT `fk_monitoria_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
