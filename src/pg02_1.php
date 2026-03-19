<h1>Pg02_1 - 12/03/2026</h1>
<?php
    $idade = 34;
    echo "idade = $idade<br>";
    $cep = "01012123"; 
    echo "cep = $cep<br>";

    /*
    bases:
decimal - 0123456789 10
binário - 01 10
octal - 01234567 10
hexadecimal 0123456789abcdef 10
    */

    $preco = 5247.543; //tipo de dado - float
    /*
como transformar um numero de programção para o numero que o usuário entende?
dolar uusa .
real usa ,
    echo number format(); - Formata um numero, é necessário mostrar a ele quantas casas ele precisa, e alterar virgulas e pontos
    passo a passo:
    echo number_format($preco); saida: preco = R$ 5,248
    echo number_format($preco ,2); saida: preco = R$ 5,247.54
    echo number_format($preco ,2,","); saida: preco = R$ 5,247,54
    echo number_format($preco ,2,",","."); saida: preco = R$ 5.247,54
    */
    echo "preco = R$ ";
    echo number_format($preco ,2,",","."); 

//diferença de aspas simples e duplas
echo "<hr>";
    $cor ="purple";
    echo "cor = $cor<br>";
    echo 'cor = $cor<br>';
echo "<hr>";
    echo "<h2 style='color:$cor'>outro titulo 2</h2>";
    $ativo = true; //váriavel verdadeira o falso NAO usa aspas ("true" errado)
    echo " está ativo? $ativo <br>";
    echo "<hr>";

//concatenação usar o ponto (.)
    echo "aquela era: " .$cor;
    echo "<hr>";

//qual é o valor da nota em numeros inteiros?
    //transformação de numero flutuante para numeros inteiros, com concatenação
    $nota=7.8;
    echo "nota = ".(int)$nota; 
    echo "<br>";
//mostrar apenas os centavos
    $notadecimal=9.5; //valor cheio menos a parte inteira (9.5 - 5 = 0.5)
    echo "nota = " .$notadecimal - (int)$notadecimal;

//git add .
//git commit -m "nome do commit"
//git push
?>

