<?php
// ARRAY

// VARIAVEL ARRAY INDEXADA - é uma variável que armazena múltiplos valores, cada um identificado por um índice NUMERICO
$array = [30, 40, 50]; // quarda mais de um valor dentro da mesma variável, cada valor é separado por vírgula e fica entre colchetes
// $array = [0]+=5;
echo "Array:<br>" . $array[0] . "<br>" . $array[1] . "<br>" . $array[2]; // para acessar um valor do array, colocamos o nome do array e entre colchetes o número do valor que queremos acessar

echo "<hr>";

$uf = ["SP", "RJ", "MG", "ES"]; // array de string

echo "Meu Estado é: " . $uf[0]; // para acessar um valor do array, colocamos o nome do array e entre colchetes o número do valor que queremos acessar
echo "<br><br>";
echo "<pre>";print_r($uf); echo "</pre>"; 
// pre - formata a saída do array, deixando cada valor em uma linha diferente, e mostrando o índice de cada valor
// print_r - imprime o array inteiro, mostrando o índice de cada valor

echo "<hr>";

// VARIAVEL ARRAY ASSOCIATIVA - é uma variável que armazena múltiplos valores, cada um identificado por um índice STRING
$estudante = [
    "id" => 1,
    "nome" => "João", 
    "curso" => "TADS",
    "RA" => 2526100328
];

echo "ID: " . $estudante["id"] . "<br>" . "Nome: " . $estudante["nome"] . "<br>" . "Curso: " . $estudante["curso"] . "<br>" . "RA: " . $estudante["RA"];
echo "<br><br>";
echo "<pre>";print_r($estudante); echo "</pre>"; 

echo "<hr>";

// VARIAVEL ARRAY MULTIDIMENSIONAL - Um array multidimensional é um array que contém outros arrays como valores, podendo ser indexado ou associativo.
$mult=[
    [10,20,30],
    [40,50,60],
    [70,80,90]
];
/*uma outra maneira de criar um array multidimensional é: 
    $mult2=[[10,20,30],[40,50,60],[70,80,90]];*/
    
echo "Valor: " . $mult[1][2]; // para acessar um valor do array multidimensional, colocamos o nome do array e entre colchetes o número do valor que queremos acessar, e para acessar o valor do array interno, colocamos outro colchete com o número do valor que queremos acessar
echo "<br><br>";
echo "<pre>";print_r($mult); echo "</pre>";

echo "<hr>";

$mult2=[
    [10,"aviao",30],
    [40, 50, "ilha"],
    ["agua",80,"barco"]
];
echo "valores: <br><br>" . $mult2[2][0] . "<br>" . $mult2[0][1] . "<br>" . $mult2[1][2] . "<br>" . $mult2[2][2];
echo "<br><br>";
echo "<pre>";print_r($mult2); echo "</pre>";

echo "<hr>";

// ARRAY DE ARRAYS ASSOCIATIVOS
$bd=[
    ["id"=>1,"nome"=>"João","curso"=>"TDB"],
    ["id"=>2,"nome"=>"Maria","curso"=>"TADS"],
    ["id"=>3,"nome"=>"Pedro","curso"=>"TJD"]
];
echo "nome: " . $bd[1]["nome"] . "<br>" . "curso: " . $bd[1]["curso"] . "<br>" . "id: " . $bd[1]["id"];
echo "<br><br>";
echo "<pre>";print_r($bd); echo "</pre>";