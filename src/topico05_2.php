<?php
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
}
else{
    echo "voce é menor de idade.";
}
?>

<hr>

<!-- IF ELSE ELSEIF -->
<?php
$cor = "roxo";

if ($cor == "verde") {
    echo "siga em frente";
}
elseif ($cor == "amarelo") {
    echo "atenção";
}
elseif ($cor == "vermelho") {
    echo "espera pare freia a mula stop estatua imediatamente";
}
else{
    echo "invalido";
}
?>

<!-- com apenas UM = é como se tivesse atribuindo um novo valor a variavel $cor -->
 <!-- else trata situações NÂO PREVISTAS -->

 <hr>

 <!-- Operador Ternário -->
 <!-- if else na mesma linha: (condição) ? resultado_se_verdadeiro : resultado_se_falso; -->

<!-- switch -->
<?php
$semaforo = "verde";
switch ($semaforo) {
    case "verde": echo "siga";
    break;

    case "amarelo": echo "atenção";
    break;

    case "vermelho": echo "pare";
    break;

    default: echo "invalido";
}
?>
<!-- DEFAULT todos os valores  -->
<hr>
<!-- EXEMPLO -->
 <?php
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>

<hr>

<?php
date_default_timezone_set('America/Sao_Paulo');//(definir) o fuso horário
echo date('d/m/Y H:i:s');  // Exemplo de saída: 08/10/2024 14:35:20

// date pega o horario e a data DO SERVIDOR, não da maquina local ent precisa do date_default_timezone_set para ajustar o fuso horário
?>
<hr>
<?php
$nome="u";
    echo "nome = $nome";
    echo "<br>MDS = ".md5($nome);
    echo "<hr>";
    $hash = password_hash($nome, PASSWORD_DEFAULT);
    echo "$hash = $hash";
// md5 cria 32 caracteres baseados em um hexadecimal
// hash 64 caracteres
?>