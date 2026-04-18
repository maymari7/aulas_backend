<?php
require_once 'conecta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO produtos (nome, preco, quantidade) VALUES (?, ?, ?)");
        // prepare prepara a query, ? é um placeholder para os valores que serão inseridos
        // ? é um placeholder, o valor real é passado no execute() como array
        $stmt->execute([$_POST['nome'], $_POST['preco'], $_POST['quantidade']]);
        // execute executa a query, passando os valores reais no array. Isso previne SQL injection, pois os valores são tratados como dados, não como parte da query.
        // o prepare() e execute() evitam sql injection: $_POST['nome'], $_POST['preco'], $_POST['quantidade']
        header("Location: relatorio.php?msg=sucesso");
        exit;
    } catch (Exception $e) {
        header("Location: relatorio.php?msg=erro");
    }
}
include_once 'header.php';
?>
<h2>Cadastrar Produto</h2>
<form method="POST">
    <input type="text" name="nome" placeholder="Nome" required><br><br>
    <input type="number" step="0.01" name="preco" placeholder="Preço" required><br><br>
    <input type="number" name="quantidade" placeholder="Quantidade" required><br><br>
    <button type="submit">Salvar</button>
</form>
<?php include_once 'footer.php'; ?>