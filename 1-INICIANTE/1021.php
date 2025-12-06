<?php
$valor = (float)readline();

$notas = [
    100.00, 50.00, 20.00, 10.00, 5.00, 2.00
];

foreach ($notas as $n){
    $a = intdiv($valor, $n);
    $valor = ($valor % $n);

    echo "notas: $a",PHP_EOL;
}

$moedas = [
    1 , 0.50, 0.25, 0.10, 0.05, 0.01
];
foreach ($moedas as $n){
    $b = ($valor / $n);
    $valor = ($b % $n);

    echo "moedas: ". sprintf("%.2f",$b),PHP_EOL;
}


?>