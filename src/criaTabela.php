<?php
require_once 'conecta.php';
$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT DEFAULT 0
)";
$pdo->exec($sql);
echo "<h1>Tabela criada com sucesso!</h1>";
//header("Location: relatorio.php?msg=tabela_pronta");

// require_once: inclui o arquivo especificado apenas uma vez, evitando múltiplas inclusões.
    // Função: garantir que o código de conexão seja carregado sem risco de duplicação.
// CREATE TABLE IF NOT EXISTS: comando SQL para criar uma tabela apenas se ela não existir.
// DEFAULT: define um valor padrão para uma coluna caso nenhum valor seja fornecido durante a inserção.
// exec(): método do PDO para executar uma consulta SQL que não retorna resultados (ex: CREATE, INSERT, UPDATE).
