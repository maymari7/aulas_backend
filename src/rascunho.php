<?php
$a=10;$b=20;$c=30;$d=40;
//-------
$c+=50;
//------
$e=($a<$b)&&($c<$d);
$f=!($a<$b)||!($c<$d);
$g=!($a<$b)&&($c<$d);
$h=!($a<$b)||($c<$d);

echo "e = $e<br>f = $f<br>g = $g<br>h = $h";

echo "<hr>";

$num=10;
//----------
$res=($num%2==0)?"par":"impar";
echo "$num é $res";

echo "<hr>";

$a=10;$b=20;$c=30;$d=40;
$e=($a<$b)&&($c<$d); // true && true = true
$f=!($a<$b)||!($c<$d); // false || false = false
$g=!($a<$b)&&($c<$d); // false && true = false
$h=!($a<$b)||($c<$d); // false || true = true

echo "<hr>";

$a=5;
$b=2;
$c=$a+$b; // c = 7

$d=$c%$b; // d = 1
$b+=2; // b = 4
$a+=$b; // a = 9
echo "$a $b $c $d"; // 9 4 7 1

?>