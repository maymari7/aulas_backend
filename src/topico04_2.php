<?php
$a=10;  // a = 10 (int)
$b="10"; // b = "10" (string)
echo "Igualdade = ".($a==$b)."<br>"; // true - são iguais (os dois são numeros 10 mesmo que seja umtipo int e outro string)
    // igualdade compara os valores
echo "Idêntico = ".($a===$b)."<br>"; // false - não são identicas (tem os mesmo valores mas um é int e outro string)
    // indentico compara valores e tipos - identico true = mesmo valor e mesmo tipo 
echo "Não igual = ".($a!=$b)."<br>"; // false
echo "Não Idêntico = ".($a!==$b)."<br>"; // true

echo "<hr>";

$a=10;
$b=20;
$c=50;
$d=($a<=$b);
var_dump($d);
echo "<hr> d = ".$d;

//&&
echo "<hr>";
$e=($a<=$c) && !($c>1000); //&& as duas condições devem ser verdadeiras
                // ! inverte uma condição, oq é falso vira verdadeiro oq é verdadeiro vira falso
var_dump($e);
echo "<hr>";

//ou
$f=($a>$b) || ($c<1000); //|| só é falso quando as duas condições são falsas, se uma for verdadeira o resultado é verdadeiro
var_dump($f);
echo "<hr>";

//xor - só é verdadeiro quando uma condição é verdadeira e a outra falsa
$g=(!($a<$b) xor ($b<$c));
var_dump(($g));
echo "<hr>";

// Operador ternário
$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = $d<br>e = $e";
?>