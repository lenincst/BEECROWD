<?php
$entrada = readline("valores separados por espaço: ");
$pi = 3.14159;

$valores = explode(" ", $entrada);
//print_r($valores);
$a = $valores[0];
$b = $valores[1];
$c = $valores[2];

$triangulo = ($a * $c) / 2;
$circulo = $pi * pow($c,2);
$trapezio = (($a + $b) * $c) / 2;
$quadrado = pow($b, 2);
$retangulo = $a * $b;

echo "TRIANGULO: ".sprintf("%.3f", $triangulo),PHP_EOL;
echo "CIRCULO: ".sprintf("%.3f",$circulo),PHP_EOL;
echo "TRAPEZIO: ".sprintf("%.3f",$trapezio),PHP_EOL;
echo "QUADRADO: ".sprintf("%.3f",$quadrado),PHP_EOL;
echo "RETANGULO: ".sprintf("%.3f",$retangulo),PHP_EOL;

?>
