<?php
$host = 'db'; $db = 'app_db'; $user = 'app_user'; $pass = 'app_pass';
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

// Host: endereço do servidor onde o banco de dados está hospedado (ex: localhost ou IP).
    // Função: indicar onde o banco de dados está localizado.

// Database (DB): nome do banco de dados que será acessado.
    // Função: definir qual banco dentro do servidor será utilizado.

// User: nome do usuário com permissão de acesso ao banco.
    // Função: identificar quem está tentando se conectar.

// Pass: senha do usuário do banco de dados.
    // Função: autenticar o usuário para garantir acesso seguro.

// DSN (Data Source Name): string com informações como tipo de banco, host e nome do banco.
    // Função: padronizar e facilitar a conexão com o banco via PDO.

// PDO (PHP Data Objects): extensão do PHP para acesso a bancos de dados.
    // Função: permitir conexão segura e eficiente, com suporte a prepared statements, transações e tratamento de erros.

// try: bloco de código onde operações que podem gerar erro são executadas.
    // Função: tentar executar ações sensíveis, como conexão com o banco.

// catch: bloco que captura exceções geradas no try.
    // Função: tratar erros sem interromper o sistema de forma abrupta.

// die(): função que encerra o script imediatamente exibindo uma mensagem.
    // Função: parar a execução em casos críticos, como falha na conexão com o banco.