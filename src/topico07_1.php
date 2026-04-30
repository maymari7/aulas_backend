<?php
 /*   echo "<h1>while</h1>"; // if é mais estatico while enquanto aquela condição for vdd ele continua num loop ate q se torne falsa
    $i=0;
    while($i<=5){
        echo " $i";
        $i++;
    }

saida: 0 1 2 3 4 5
1) qual valor inicial? 0
2) condição enquanto o valor for menor que 5 ele ira continuar contando ($i<=5)
3) contador -> $i++
4) quantas vezes o loop foi executado? 6
5) qual o valor que tornou a condição como falsa? <=5
-----------------------
    echo 
    $i=11;
    while($i<=14){
        echo " $i";
        $i++;
    };
        
saida: 11 12 13 14 
1) 11
2) <15 ou $i<=14
3) $i++
4) 4
5) 15
-----------------------
    echo 
    $i=4;
    while($i>=0){
        echo " $i";
        $i--;
    }

1) 4
2) $i>=0 ou $i>= -1
3) $i--
4) 5
5) -1
-----------------------
    echo 
    $i=0;
    while($i<11){
        echo" $i";
        $i+=2;
    }

saida: 0 2 4 6 8 10
1) 0
2) $i<=10
3) $i+=2
4) 6
5) 12 (não é o 11 pq a condição é falsa pq o 12 seria o proximo numero a aparecer e n apareceu)
-----------------------
    echo "<h1>Do while</h1>"; // do while executa pelo menos uma vez, do while fast food - while - restaurante
    $i=0;
    do{
        echo " $i";
        $i++;
    }while($i<5);
-----------------------
    echo "<h1>For</h1>";
    for($i='batata';$i<=5;$i++){
        echo " $i";
    }
-----------------------
    echo "<h1>Looping aninhado</h1>";
    for($i=0;$i<3;$i++){ // loop externo // 1 minuto
        for($j=0;$j<2;$j++){ // loop interno // 60 segundos
            echo"$i $j<br>";
        }
    }

i j
0 0
0 1
1 0
1 1
2 0
2 1
-----------------------
    for($i=4;$i<7;$i++){ 
        for($j=0;$j<3;$j++){ 
            echo"$i $j<br>";
        }
    }
    
i j
4 0
4 1
4 2
5 0
5 1
5 2
6 0
6 1
6 2
*/
?>