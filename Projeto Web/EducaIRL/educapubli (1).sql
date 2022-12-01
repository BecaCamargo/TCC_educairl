-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Nov-2022 às 18:18
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `educapubli`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacos`
--

CREATE TABLE `avaliacos` (
  `id` int(11) NOT NULL,
  `qnt_estrela` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacos`
--

INSERT INTO `avaliacos` (`id`, `qnt_estrela`, `created`, `modified`) VALUES
(1, 2, '2022-11-01 14:37:11', '2022-11-01 14:37:11'),
(2, 2, '2022-11-01 14:37:13', '2022-11-01 14:37:13'),
(3, 1, '2022-11-03 15:35:10', '2022-11-03 15:35:10'),
(4, 5, '2022-11-03 16:29:43', '2022-11-03 16:29:43'),
(5, 1, '2022-11-03 17:16:56', NULL),
(6, 1, '2022-11-08 13:43:22', NULL),
(7, 4, '2022-11-08 13:51:19', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `id_escola` int(11) NOT NULL,
  `nome_escola` varchar(250) NOT NULL,
  `endereco_escola` varchar(255) NOT NULL,
  `telefone_escola` varchar(17) NOT NULL,
  `id_grupo_de_whatsapp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`id_escola`, `nome_escola`, `endereco_escola`, `telefone_escola`, `id_grupo_de_whatsapp`) VALUES
(1, 'Fernando De B Pinto, E E Dr-Ef', 'R. Pedro Pescador, 405', ' (43) 3356-0622', 1),
(2, 'Escola Estadual Professor José Carlos Pinotti', 'R. Carlos Bergossi, 360', ' (43) 3328-4020', 2),
(3, 'Colégio Estadual Cívico-Militar Professora Adelia Dionisia Barbosa', 'R. Jubilino Barbosa Cabral, 670 ', ' (43) 3348-7557', 3),
(4, 'Escola Estadual Professora Beahir Edna Mendonça-Ensino de 1º Grau', 'R. Perdizes, 65', ' (43) 3337-3812', 4),
(5, 'Escola Estadual do Conjunto Habitacional Farid Libos', 'R. Dr. Gervásio Mourão Morales ', ' (43) 3321-2810', 5),
(6, 'Olympia M Tormenta, C E Prof-Ef M Profis', 'Rua Rudolf Keilhold 173 C Hab', ' (43) 3329-2744', 6),
(7, 'Josemaria Escriva, E E Mons-Ef', 'R. Luís Vicente Amadeu Gongôra, 95 ', ' (43) 3339-0999', 7),
(8, 'Ubedulha C Oliveira, C E Profa-Ef M P', 'R. Júlio Farináceo, 110', ' (43) 3337-0325', 8),
(9, 'Colégio Estadual Professor Doutor Heber Soares Vargas', 'R. Maria de Oliveira Melo, 285', ' (43) 3326-2460', 9),
(10, 'Colégio Estadual José de Anchieta', 'R. Riachuelo, 89', ' (43) 3324-2625', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_de_whatsapp`
--

CREATE TABLE `grupo_de_whatsapp` (
  `id_grupo_whatsapp` int(11) NOT NULL,
  `id_escola` int(11) NOT NULL,
  `link_grupo_whatsapp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `grupo_de_whatsapp`
--

INSERT INTO `grupo_de_whatsapp` (`id_grupo_whatsapp`, `id_escola`, `link_grupo_whatsapp`) VALUES
(1, 1, ''),
(2, 2, ''),
(3, 3, ''),
(4, 4, ''),
(5, 5, ''),
(6, 6, ''),
(7, 7, ''),
(8, 8, ''),
(9, 9, ''),
(10, 10, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_de_usuario`
--

CREATE TABLE `tipo_de_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `desc_tipo_usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_de_usuario`
--

INSERT INTO `tipo_de_usuario` (`id_tipo_usuario`, `desc_tipo_usuario`) VALUES
(1, 'usuario comum'),
(2, 'adm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Thalita', '$2y$10$y76/MSKZVTp6gtUaHfQtsOGB0l.owqJ24vMvOU/yPP8ANaZoH8xzu', '2022-11-03 17:13:55'),
(2, 'lorenzo', '$2y$10$SuhuDRO4pPGFoNz277fWsOz3pcBtHBywxXAwpaONH7deyS6SmAg4K', '2022-11-08 13:51:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_grupo`
--

CREATE TABLE `usuario_grupo` (
  `id_usuario` int(11) NOT NULL,
  `id_grupo_de_whatsapp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avaliacos`
--
ALTER TABLE `avaliacos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`id_escola`),
  ADD KEY `fk_escola_grupo_whatsapp` (`id_grupo_de_whatsapp`);

--
-- Índices para tabela `grupo_de_whatsapp`
--
ALTER TABLE `grupo_de_whatsapp`
  ADD PRIMARY KEY (`id_grupo_whatsapp`);

--
-- Índices para tabela `tipo_de_usuario`
--
ALTER TABLE `tipo_de_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Índices para tabela `usuario_grupo`
--
ALTER TABLE `usuario_grupo`
  ADD PRIMARY KEY (`id_grupo_de_whatsapp`),
  ADD KEY `fk_grupos_usuarios` (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacos`
--
ALTER TABLE `avaliacos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `escolas`
--
ALTER TABLE `escolas`
  ADD CONSTRAINT `fk_escola_grupo_whatsapp` FOREIGN KEY (`id_grupo_de_whatsapp`) REFERENCES `grupo_de_whatsapp` (`id_grupo_whatsapp`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
