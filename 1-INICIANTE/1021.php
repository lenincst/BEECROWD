<?php
$valor = (float)readline();
$valor = round($valor * 100);

$notas = [
    10000, 5000, 2000, 1000, 500, 200
];
echo "NOTAS:\n";

foreach ($notas as $n){
    $a = intdiv($valor, $n);
    $valor = ($valor % $n);

    echo $a ." nota(s) de R$ ".sprintf("%.2f",$n /100),PHP_EOL;
}

echo "MOEDAS:\n";
$moedas = [
    100 , 50, 25, 10, 5, 1
];

foreach ($moedas as $n){
    $b = intdiv($valor, $n);
    $valor = ($valor % $n);

    echo $b." moeda(s) de R$ ".sprintf("%.2f",$n/100),PHP_EOL;
}

?>
