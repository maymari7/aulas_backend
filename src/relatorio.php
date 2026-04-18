<?php
require_once 'conecta.php';
$produtos = $pdo->query("SELECT * FROM produtos ORDER BY nome")->fetchAll();
// diferença entre pdo() e exec(): pdo() é usado para consultas que retornam resultados (SELECT), enquanto exec() é para comandos que não retornam resultados (CREATE, INSERT, UPDATE, DELETE).
// query(): método do PDO para executar uma consulta SQL que retorna um conjunto de resultados (ex: SELECT).
// fetchAll(): método do PDO para obter todas as linhas do resultado como um array associativo

// Sistema de Mensagens
$status = $_GET['msg'] ?? '';
$mensagens = [
    'sucesso' => 'Ação realizada com sucesso!',
    'excluido' => 'Produto removido do sistema.',
    'erro' => 'Erro ao processar solicitação.',
    'tabela_pronta' => 'Banco de dados configurado!'
];

include_once 'header.php';
?>

<h1>Relatório de Estoque</h1>

<?php if ($status && isset($mensagens[$status])): ?>
    <div class="alert <?= $status === 'erro' ? 'error' : 'success' ?>">
        <?= $mensagens[$status] ?>
    </div>
<?php endif; ?>

<!-- tabela para exibir os produtos -->
<table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
    <tr>
        <th>ID</th><th>Nome</th><th>Preço</th><th>Quantidade</th><th>Ações</th>
    </tr>
    <?php foreach($produtos as $p): ?>
        <!-- foreach é um loop que itera sobre um array -->
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= htmlspecialchars($p['nome']) ?></td>
        <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
        <td><?= $p['quantidade'] ?></td>
        <td>
            <a href="altera.php?id=<?= $p['id'] ?>">Editar</a> |
            <form action="exclui.php" method="POST" style="display:inline" onsubmit="return confirm('Excluir?')">
                <!-- onsubmit é um evento que é acionado quando o formulário é enviado, ao clicar no botão ele é acionado exibindo uma mensagem de confirmação -->
                <button type="submit" name="id" value="<?= $p['id'] ?>">Excluir</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


<?php include_once 'footer.php'; ?>