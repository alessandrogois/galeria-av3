-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jul-2017 às 04:27
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galeria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id_foto` int(11) NOT NULL DEFAULT '0000',
  `nome_foto` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(99) NOT NULL
  `imagem` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
