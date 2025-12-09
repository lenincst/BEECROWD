<?php
$x = readline();
$array2 = explode(" ", $x);
$x1 = $array2[0];
$y1 = $array2[1];

$y = readline();
$array = explode(" ", $y);
$x2 = $array[0];
$y2 = $array[1];

$num1 = pow(($x2 - $x1),2);
$num2 = pow(($y2 - $y1),2);

$distancia = sqrt($num1+$num2);

echo sprintf("%.4f", $distancia), PHP_EOL;

?>