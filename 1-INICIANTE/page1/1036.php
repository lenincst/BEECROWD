<?php
$valores = readline();
$array = explode(" ", $valores);

$a = $array[0];
$b = $array[1];
$c = $array[2];

if ($a == 0){
    echo "Impossivel calcular",PHP_EOL;
}else{
    $delta = pow($b,2)-4*$a*($c);
    if ($delta < 0){
        echo "Impossivel calcular",PHP_EOL;
    }else{
        $r1 = (-$b + sqrt($delta))/(2*$a);
        $r2 = (-$b - sqrt($delta))/(2*$a);
        echo "R1 = ".sprintf("%.5f",$r1),PHP_EOL;
        echo "R2 = ".sprintf("%.5f",$r2),PHP_EOL;
    }
}PHP_EOL;

?>
