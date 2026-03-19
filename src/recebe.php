<h1>Recebe</h1>
<?php
echo "<pre>";print_r($_POST);echo "</pre>";

$login=$_POST["login"];
$senha=$_POST["senha"];

echo "Login: <b>$login</b><br>";
echo "Senha: <b>$senha</b><br>";
?>