<?php
$entrada = readline();
$separar = explode(" ", $entrada);

$codigo = $separar[0];
$quantidade = $separar[1];

$tabela = [
    1 => 4.0,
    2 => 4.50,
    3 => 5.00,
    4 => 2.00,
    5 => 1.50
];

if (array_key_exists($codigo, $tabela)){
    $total = $tabela[$codigo]*$quantidade;
    
    echo "Total: R$ ".sprintf("%.2f", $total).PHP_EOL;
}else{
    echo "Código Inválido".PHP_EOL;
}
?>
