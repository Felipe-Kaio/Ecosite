-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/06/2025 às 03:32
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_eco`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha`, `telefone`) VALUES
(1, 'Felipe Kaio Barros forte', '083.993.123-98', 'felipekaiobarr@gmail.com', '$2y$10$cODVjVYgj', '(85) 99259-1642'),
(3, 'soares', '999.999.999-99', 'soares@gmail.com', '$2y$10$M6gHFirwJ', '(85) 99999-9999'),
(4, 'mateus', '888.888.888-88', 'mateus@gmail.com', '$2y$10$XP5NTqLnv', '(99) 99999-9999'),
(5, 'soares234', '999.999.999-98', 'soares345@gmail.com', '$2y$10$Wse2Ow56r', '(85) 99999-9999'),
(6, 'soares2345', '999.999.999-97', 'soares344@gmail.com', '$2y$10$uMTAt1CWAAVagrWJfwXjn.QcoLmUbpiWHxFv2PJ85NaA/STdI842S', '(85) 99999-9990');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Adicionar tabelas de produtos e pedidos
CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    categoria VARCHAR(50),
    imagem VARCHAR(255)
);

INSERT INTO produtos (id, nome, descricao, preco, categoria, imagem) VALUES
(1, 'Conjunto Utensílios Bambu', 'Kit completo com 6 utensílios de cozinha em bambu 100% biodegradável e resistente.', 89.90, 'Casa Sustentável', 'https://images.unsplash.com/photo-1556228578-8c89e6adf883?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'),
(2, 'Shampoo Sólido Vegano', 'Para cabelos normais a secos. Livre de plástico e ingredientes nocivos. Dura até 80 lavagens.', 42.90, 'Beleza Natural', 'https://images.unsplash.com/photo-1592078615290-033ee584e267?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'),
(3, 'Garrafa Térmica Aço Inox', 'Mantém líquidos quentes por 12h e frios por 24h. Livre de BPA e outros químicos.', 79.90, 'Acessórios', 'https://images.unsplash.com/photo-1583744946564-b52d01e2da64?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'),
(4, 'Mochila de Fibra Natural', 'Feita à mão com fibras de bananeira, resistente à água e com design ergonômico.', 149.90, 'Moda Consciente', 'https://images.unsplash.com/photo-1586796445437-aea4f0473ad6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'),
(5, 'Kit Escovas de Bambu', 'Conjunto com 3 escovas de dentes de bambu com cerdas biodegradáveis.', 34.90, 'Cuidados Pessoais', 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'),
(6, 'Kit Canudos Reutilizáveis', '4 canudos de aço inoxidável em diferentes tamanhos + limpador. Case inclusa.', 49.90, 'Acessórios', 'https://images.unsplash.com/photo-1550358864-518f202c02ba?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');

CREATE TABLE IF NOT EXISTS pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    data_pedido DATETIME NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    desconto DECIMAL(10,2) DEFAULT 0,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

CREATE TABLE IF NOT EXISTS itens_pedido (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT NOT NULL,
    produto_id INT NOT NULL,
    quantidade INT NOT NULL,
    preco_unitario DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
);
