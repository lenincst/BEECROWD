<?php
$valor = readline();
$v1 = 100.00;
$v2 = 50;
$v3 = 20;
$v4 = 10;
$v5 = 5;
$v6 = 2;
$v7 = 1;

$a1 = $valor / $v1;
$a2 = $valor % $v1;

$b1 = $a2 / $v2;
$b2 = $a2 % $v2;

$c1 = $b2 / $v3;
$c2 = $b2 % $v3;

$d1 = $c2 / $v4;
$d2 = $c2 % $v4;

$e1 = $d2 / $v5;
$e2 = $d2 % $v5;;

$f1 = $e2 / $v6;
$f2 = $e2 % $v6;

$g1 = $f2 / $v7;
$g2 = $f2 % $v7;

echo $valor, PHP_EOL;

echo (int)$a1 ." nota(s) de R$ ".number_format($v1, 2, ',', '.'), PHP_EOL;
echo (int)$b1 ." nota(s) de R$ ".number_format($v2, 2, ',', '.'), PHP_EOL;
echo (int)$c1 ." nota(s) de R$ ".number_format($v3, 2, ',', '.'), PHP_EOL;
echo (int)$d1 ." nota(s) de R$ ".number_format($v4, 2, ',', '.'), PHP_EOL;
echo (int)$e1 ." nota(s) de R$ ".number_format($v5, 2, ',', '.'), PHP_EOL;
echo (int)$f1 ." nota(s) de R$ ".number_format($v6, 2, ',', '.'), PHP_EOL;
echo (int)$g1 ." nota(s) de R$ ".number_format($v7, 2, ',', '.'), PHP_EOL;

?>
