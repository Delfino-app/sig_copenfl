-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 03:19 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `copenfl`
--

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rua_num` int(11) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia_id` int(11) NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `enfermeiro_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `bairro`, `rua`, `rua_num`, `telefone`, `email`, `provincia_id`, `municipio_id`, `enfermeiro_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Largo 1º de Maio', NULL, 8989898, 'delfinoapp@gmail.com', 1, 1, 1, '2020-09-24 15:40:01', '2020-09-24 15:40:01'),
(2, NULL, 'Largo 1º de Maio', NULL, 343434, 'delfinoapp@gmail.com', 1, 1, 2, '2020-09-24 16:19:52', '2020-09-24 16:19:52'),
(3, NULL, 'Largo 1º de Maio', NULL, 343434, 'delfinoapp@gmail.com', 1, 1, 3, '2020-09-24 16:20:10', '2020-09-24 16:20:10'),
(4, NULL, 'Largo 1º de Maio', NULL, 343434, 'delfinoapp@gmail.com', 1, 1, 4, '2020-09-24 16:20:31', '2020-09-24 16:20:31'),
(5, NULL, 'Largo 1º de Maio', NULL, 343434, 'delfinoapp@gmail.com', 1, 1, 5, '2020-09-24 16:20:53', '2020-09-24 16:20:53'),
(6, NULL, 'Largo 1º de Maio', NULL, 999999, 'delfinoapp@gmail.com', 1, 1, 6, '2020-09-24 19:55:05', '2020-09-24 19:55:05'),
(7, NULL, 'Largo 1º de Maio', NULL, 89080808, 'delfinoapp@gmail.com', 1, 1, 7, '2020-09-24 20:22:35', '2020-09-24 20:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `enderecos`
--

CREATE TABLE `enderecos` (
  `id` int(10) UNSIGNED NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `casa_num` int(11) NOT NULL,
  `rua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `predio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone_1` int(11) NOT NULL,
  `telefone_2` int(11) NOT NULL,
  `caixa_postal` int(11) DEFAULT NULL,
  `provincia_id` int(11) NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `enfermeiro_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enderecos`
--

INSERT INTO `enderecos` (`id`, `bairro`, `casa_num`, `rua`, `predio`, `email`, `telefone_1`, `telefone_2`, `caixa_postal`, `provincia_id`, `municipio_id`, `enfermeiro_id`, `created_at`, `updated_at`) VALUES
(1, 'Vila Nova', 2312, 'ewewewe', 'wewewew', 'delfinoapp@gmail.com', 997896783, 997896783, NULL, 1, 1, 1, '2020-09-24 15:40:01', '2020-09-24 15:40:01'),
(2, 'Vila Nova', 2312, 'Rua direita da Suave', 'wewewew', 'delfinoapp@gmail.com', 997896783, 997896783, NULL, 1, 1, 2, '2020-09-24 16:19:51', '2020-09-24 16:19:51'),
(3, 'Vila Nova', 2312, 'Rua direita da Suave', 'wewewew', 'delfinoapp@gmail.com', 997896783, 997896783, NULL, 1, 1, 3, '2020-09-24 16:20:10', '2020-09-24 16:20:10'),
(4, 'Vila Nova', 2312, 'Rua direita da Suave', 'wewewew', 'delfinoapp@gmail.com', 997896783, 997896783, NULL, 1, 1, 4, '2020-09-24 16:20:31', '2020-09-24 16:20:31'),
(5, 'Vila Nova', 2312, 'Rua direita da Suave', 'wewewew', 'delfinoapp@gmail.com', 997896783, 997896783, NULL, 1, 1, 5, '2020-09-24 16:20:53', '2020-09-24 16:20:53'),
(6, 'Vila Nova', 2312, 'Rua direita da Suave', 'wewewew', 'delfinoapp@gmail.com', 997896783, 997896783, NULL, 1, 1, 6, '2020-09-24 19:55:04', '2020-09-24 19:55:04'),
(7, 'Vila Nova', 2312, 'Rua direita da Suave', 'wewewew', 'delfinoapp@gmail.com', 997896783, 997896783, NULL, 1, 1, 7, '2020-09-24 20:22:35', '2020-09-24 20:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `enfermeiros`
--

CREATE TABLE `enfermeiros` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_pai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_mae` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` enum('Masculino','Femenino') COLLATE utf8_unicode_ci NOT NULL,
  `estado_civil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bi_passaport_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_emissao` date DEFAULT NULL,
  `data_validade` date DEFAULT NULL,
  `nacionalidade` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naturalidade` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pais_id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `tipo_enfermeiro` enum('Estudante','Licenciado') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enfermeiros`
--

INSERT INTO `enfermeiros` (`id`, `nome`, `nome_pai`, `nome_mae`, `data_nascimento`, `genero`, `estado_civil`, `bi_passaport_num`, `data_emissao`, `data_validade`, `nacionalidade`, `naturalidade`, `pais_id`, `provincia_id`, `municipio_id`, `tipo_enfermeiro`, `created_at`, `updated_at`) VALUES
(1, 'José Augusto', 'Bjarmess', 'Adilson Bjarmess', '2020-09-24', 'Masculino', 'Solteiro(a)', 'hdjhwjdhwjdh898jdjw', NULL, NULL, NULL, NULL, 1, 1, 1, 'Estudante', '2020-09-24 15:40:00', '2020-09-24 15:40:00'),
(2, 'Madalena Fernandes', 'Bjarmes', 'Adilson Bjarmes', '2020-09-24', 'Masculino', 'Solteiro(a)', 'hdjhwjdhwjdh898jdjw', NULL, NULL, NULL, NULL, 1, 1, 1, 'Licenciado', '2020-09-24 16:19:49', '2020-09-24 16:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `escolas`
--

CREATE TABLE `escolas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('Pública','Privada') COLLATE utf8_unicode_ci NOT NULL,
  `ano_fim` year(4) NOT NULL,
  `telefone` int(11) NOT NULL,
  `enfermeiro_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `escolas`
--

INSERT INTO `escolas` (`id`, `nome`, `tipo`, `ano_fim`, `telefone`, `enfermeiro_id`, `created_at`, `updated_at`) VALUES
(1, 'Instituto Médio Pólitecnico Smartbits', 'Privada', 2020, 8989, 1, '2020-09-24 15:40:01', '2020-09-24 15:40:01'),
(2, 'Instituto Médio Pólitecnico Smartbits', 'Privada', 2020, 34434, 2, '2020-09-24 16:19:52', '2020-09-24 16:19:52'),
(3, 'Instituto Médio Pólitecnico Smartbits', 'Privada', 2020, 34434, 3, '2020-09-24 16:20:11', '2020-09-24 16:20:11'),
(4, 'Instituto Médio Pólitecnico Smartbits', 'Privada', 2020, 34434, 4, '2020-09-24 16:20:31', '2020-09-24 16:20:31'),
(5, 'Instituto Médio Pólitecnico Smartbits', 'Privada', 2020, 34434, 5, '2020-09-24 16:20:53', '2020-09-24 16:20:53'),
(6, 'Instituto Médio Pólitecnico Smartbits', 'Privada', 2020, 9999, 6, '2020-09-24 19:55:05', '2020-09-24 19:55:05'),
(7, 'Instituto Médio Pólitecnico Smartbits', 'Privada', 2020, 8080808, 7, '2020-09-24 20:22:35', '2020-09-24 20:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2020_09_17_084158_create_enfermeiros_table', 1),
(14, '2020_09_17_084240_create_escolas_table', 1),
(15, '2020_09_17_084315_create_empresas_table', 1),
(16, '2020_09_17_084351_create_enderecos_table', 1),
(17, '2020_09_17_084425_create_telefones_table', 1),
(18, '2020_09_17_084509_create_pais_table', 1),
(19, '2020_09_17_084542_create_municipios_table', 1),
(20, '2020_09_17_084619_create_provincias_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `municipios`
--

CREATE TABLE `municipios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `municipios`
--

INSERT INTO `municipios` (`id`, `nome`, `provincia_id`, `created_at`, `updated_at`) VALUES
(1, 'Viana', 1, '2020-09-23 23:00:00', '2020-09-29 23:00:00'),
(2, 'Cazenga', 1, '2020-09-23 23:00:00', '2020-09-23 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

CREATE TABLE `pais` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Angola', '2020-09-23 23:00:00', '2020-09-29 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provincias`
--

CREATE TABLE `provincias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pais_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provincias`
--

INSERT INTO `provincias` (`id`, `nome`, `pais_id`, `created_at`, `updated_at`) VALUES
(1, 'Luanda', 1, '2020-09-23 23:00:00', '2020-09-29 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `telefones`
--

CREATE TABLE `telefones` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` int(11) NOT NULL,
  `endereco_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Delfino', 'delfinoapp@gmail.com', '$2y$10$fMU4RehtMYqxsaDvcgDVEOd7SpdmXo46v9AHdQiQwbZFdRP1vqZay', NULL, '2020-09-24 14:02:20', '2020-09-24 14:02:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enfermeiros`
--
ALTER TABLE `enfermeiros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enfermeiros`
--
ALTER TABLE `enfermeiros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `escolas`
--
ALTER TABLE `escolas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telefones`
--
ALTER TABLE `telefones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
