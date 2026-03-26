<?php
$a=10;
$b=2;
echo "Adição:".($a + $b); //adição = 12
echo "<br>Subtração:".($a - $b); //subtração 8
echo "<br>Multiplicação:".($a * $b); //multiplicação 20
echo "<br>Divisão:".($a / $b); //divisão 5
echo "<br>Módulo:".($a % $b); //resto da divisão 0
echo "<br>Exponenciação:".($a ** $b); // 10² = 100
?>

<hr>

<?php
$a=10;
$b=2;
$a+=$b; // 10 = 10 + 2, agora $a = 12
$b-=5; // 2 = 2 - 5, agora $b = (-3)
echo "a = ".$a; // a = 12
echo "<br>b = ".$b; // b = -3
$c=11; //criando variavel
$d=6;
$c%=$d; // 11 = 11/6 -> resto 5, agora $c = 5
$d+=$a; // 6 = 6 + 12, agora $d = 18
echo "<br>c = ".$c; //c = 5
echo "<br>d = ".$d; //d = 18

// concatenar com .=
$n="cinco";
$n.=$c;
echo "<br>n =  ".$n
?>

<hr>

<?php
// PRÈ-INCREMENTO
$x = 100;
echo "x = ".++$x; //x = 101
echo "<br>x final = ".$x; //x final = 101

// POS-INCREMENTO
$y = 100;
echo "<br>y = ".$y++; //y = 100, imprime a variavel primeiro
echo "<br>y final = ".$y; //y final = 101

echo "<hr>";

//exercicios (questão de prova - deixa uma lacuna na linha e ver qual linha sai o resultado )
$i = 10;
echo "<br> i = $i";
// $i++; // 10 + 1
// $i++; // 11 + 1
// ++$i; // 1 + 12 = 13
$i=3;
echo "<br>i = $i"; //i = 13
$i--; //13 - 1
--$i;//1 - 12 = 11
echo "<br> i = $i" // i = 11
?>