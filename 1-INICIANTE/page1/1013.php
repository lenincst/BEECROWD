<?php

$entrada = readline();
$array = explode(" ", $entrada);
$a = $array[0];
$b = $array[1];
$c = $array[2];

$v1 = ($a + $b + abs(($a - $b)))/2;
$resultado = ($v1 + $c + abs(($v1 - $c)))/2;

echo $resultado ." eh o maior", PHP_EOL;

?>
