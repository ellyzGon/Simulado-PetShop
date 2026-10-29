-- Modelo inicial do banco de dados: PetShop Estoque
-- Revise e adapte antes de executar no banco do projeto.

CREATE DATABASE IF NOT EXISTS petshop_estoque
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE petshop_estoque;

CREATE TABLE funcionario (
    id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    ativo BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE TABLE categoria (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL UNIQUE,
    descricao VARCHAR(255) NULL
);

CREATE TABLE produto (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    id_categoria INT NOT NULL,
    nome VARCHAR(120) NOT NULL,
    descricao TEXT NULL,
    marca VARCHAR(100) NULL,
    preco_custo DECIMAL(10,2) NOT NULL,
    preco_venda DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL DEFAULT 0,
    estoque_minimo INT NOT NULL DEFAULT 0,
    validade DATE NULL,
    CONSTRAINT fk_produto_categoria
        FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria),
    CONSTRAINT chk_produto_preco_custo CHECK (preco_custo >= 0),
    CONSTRAINT chk_produto_preco_venda CHECK (preco_venda >= 0),
    CONSTRAINT chk_produto_quantidade CHECK (quantidade >= 0),
    CONSTRAINT chk_produto_estoque_minimo CHECK (estoque_minimo >= 0)
);

CREATE TABLE movimentacao_estoque (
    id_movimentacao INT AUTO_INCREMENT PRIMARY KEY,
    id_produto INT NOT NULL,
    id_funcionario INT NOT NULL,
    tipo_operacao ENUM('ENTRADA', 'SAIDA') NOT NULL,
    quantidade INT NOT NULL,
    data_movimentacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    observacao VARCHAR(255) NULL,
    CONSTRAINT fk_movimentacao_produto
        FOREIGN KEY (id_produto) REFERENCES produto(id_produto),
    CONSTRAINT fk_movimentacao_funcionario
        FOREIGN KEY (id_funcionario) REFERENCES funcionario(id_funcionario),
    CONSTRAINT chk_movimentacao_quantidade CHECK (quantidade > 0)
);

-- Regras de estoque negativo devem ser validadas também pela aplicação
-- e pela transação de banco de dados antes de registrar uma saída.
