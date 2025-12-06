<?php
$valor = (int)readline();
$vmin = (int)60;
$vhor = (int)60;

$segundo = ($valor % $vmin);
$minuto = intdiv($valor, $vmin);
$hora = intdiv($minuto, $vhor);
$minuto = ($minuto % $vhor);

echo "$hora:$minuto:$segundo", PHP_EOL;

?>
