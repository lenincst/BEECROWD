<?php
$valor = readline();
$array = explode(" ", $valor);

$a = $array[0];
$b = $array[1];
$c = $array[2];
$d = $array[3];

$par = $a % 2;
$soma1 = $c + $d;
$soma2 = $a + $b;

if ($b > $c && $d > $a && $soma1 > $soma2 && $d > 0 && $c > 0 && $par == 0){
    echo "Valores aceitos";
}else{
    echo "Valores nao aceitos";
}
echo "\n";

?>
