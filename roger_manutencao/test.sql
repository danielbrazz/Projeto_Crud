-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2022 às 14:30
-- Versão do servidor: 10.1.39-MariaDB
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(100) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `cpf_cliente` varchar(100) NOT NULL,
  `email_cliente` varchar(100) NOT NULL,
  `telefone` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `cpf_cliente`, `email_cliente`, `telefone`) VALUES
(1, 'Caio ', '999999999999', 'caio@gmail.com', 919235620),
(2, 'Rick', '10298565201', 'daniel.brazz02@gmail.com', 2147483647),
(3, 'Rick', '10298565201', 'daniel.brazz02@gmail.com', 2147483647),
(4, 'JoÃ£o Pedro', '12345678999', 'joao_angelico@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem_servico`
--

CREATE TABLE `ordem_servico` (
  `id_os` int(100) NOT NULL,
  `tipo_servico` varchar(100) NOT NULL,
  `status_os` varchar(100) NOT NULL,
  `nome_tecnico` varchar(100) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `nome_tag` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ordem_servico`
--

INSERT INTO `ordem_servico` (`id_os`, `tipo_servico`, `status_os`, `nome_tecnico`, `nome_cliente`, `nome_tag`) VALUES
(1, 'montagem', 'fechado', 'gabriel', 'Daniel Braz', '75QL21'),
(2, 'montagem', 'fechado', 'daniel', 'Rick', '78PQ10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_os`
--

CREATE TABLE `status_os` (
  `status_os` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status_os`
--

INSERT INTO `status_os` (`status_os`) VALUES
('Aberto'),
('Em andamento'),
('Fechado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

CREATE TABLE `tecnico` (
  `id_tecnico` int(100) NOT NULL,
  `nome_tecnico` varchar(100) NOT NULL,
  `cpf_tecnico` varchar(100) NOT NULL,
  `email_tecnico` varchar(100) NOT NULL,
  `telefone_tecnico` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tecnico`
--

INSERT INTO `tecnico` (`id_tecnico`, `nome_tecnico`, `cpf_tecnico`, `email_tecnico`, `telefone_tecnico`) VALUES
(1, 'Daniel', '13471455599', 'daniel@gmail.com', 98912044),
(2, 'Pedro', '68503212322', 'pedro@gmail.com', 2147483647),
(3, 'Rogerio Silva', '12345678999', 'rogerio@hotmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_servco`
--

CREATE TABLE `tipo_servco` (
  `tipo_servicos` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_servco`
--

INSERT INTO `tipo_servco` (`tipo_servicos`) VALUES
('montagem'),
('Revisão'),
('Limpeza'),
('Backup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `ordem_servico`
--
ALTER TABLE `ordem_servico`
  ADD PRIMARY KEY (`id_os`);

--
-- Indexes for table `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`id_tecnico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ordem_servico`
--
ALTER TABLE `ordem_servico`
  MODIFY `id_os` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `id_tecnico` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
