<?php
$valor = readline();
echo $valor,PHP_EOL;
$array = [100, 50, 20, 10, 5, 2, 1];

foreach($array as $n){
    $n1 = intdiv($valor, $n);
    $valor = $valor % $n;

    echo "$n1 nota(s) de R$ ".number_format($n, 2,",","."),PHP_EOL;
}

?>
