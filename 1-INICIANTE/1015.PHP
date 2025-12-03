<?php
$y = readline();
$array = explode(" ", $y);
$y1 = $array[0];
$y2 = $array[1];

$x = readline();
$array2 = explode(" ", $x);
$x1 = $array2[0];
$x2 = $array2[1];

$num1 = $y2 - $y1;
$num2 = $x2 - $x1;

$resultado = sqrt(
    ((pow($num1, 2))+
    (pow($num2, 2)))
);

    echo $resultado;

?>