<?php
$valor = readline();

if ($valor < 0 or $valor > 100){
    echo "Fora de intervalo",PHP_EOL;;
}elseif ($valor <= 25){
        echo "Intervalo [0,25]",PHP_EOL;;
    }elseif($valor <= 50){
        echo "Intervalo (25,50]",PHP_EOL;;
    }elseif($valor <= 75){
        echo "Intervalo [50,75]",PHP_EOL;;
    }else{
        echo "Intervalo (75,100]",PHP_EOL;
    }

?>