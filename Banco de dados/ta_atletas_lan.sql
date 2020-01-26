-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 26-Jan-2020 às 12:12
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syscob`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_atletas_lan`
--

CREATE TABLE `ta_atletas_lan` (
  `id` int(11) NOT NULL,
  `id_competicao` int(11) DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `lan1` float NOT NULL,
  `lan2` float NOT NULL,
  `lan3` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ta_atletas_lan`
--

INSERT INTO `ta_atletas_lan` (`id`, `id_competicao`, `nome`, `lan1`, `lan2`, `lan3`, `total`) VALUES
(27, 22, 'JOSE EDILEUSON', 0, 0, 0, 0),
(28, 23, 'Jose', 0, 0, 0, 0),
(29, 23, 'edileison', 0, 0, 0, 0),
(30, 23, 'Jose edi silva', 0, 0, 0, 0),
(31, 23, 'silva', 3, 4, 6, 0),
(32, 24, 'sss', 22, 1, 22, 0),
(33, 25, 'Jose', 3, 6, 2, 0),
(34, 25, 'Jose', 3, 6, 22, 22),
(35, 25, 'fff', 1, 0, 0, 1),
(36, 25, 'gggg', 3, 2, 1, 3),
(37, 26, 'final', 2, 4, 3, 4),
(38, 26, 'finalizando', 3, 2, 6, 6),
(39, 26, 'ttt', 2, 2, 3, 3),
(40, 26, 'eee', 8, 7, 9, 9),
(41, 27, 'eee', 4, 5, 6, 6),
(42, 28, 'rr', 3, 4, 6, 6),
(43, 28, 'kk', 8, 7, 6, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ta_atletas_lan`
--
ALTER TABLE `ta_atletas_lan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_competicao_id` (`id_competicao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ta_atletas_lan`
--
ALTER TABLE `ta_atletas_lan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
