<?php
$idade_dias = readline();

$anos = intdiv($idade_dias, 365);
$dias = $idade_dias % 365;
$meses = intdiv($dias, 30);
$dias = $dias % 30;

echo "$anos ano(s)\n" . "$meses mes(es)\n" . "$dias dia(s)", PHP_EOL;

?>
