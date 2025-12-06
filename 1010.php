<?php
$linha1 = fgets(STDIN);
sscanf($linha1, "%d %d %lf" , $codigo1, $quantidade1, $valor1);

$linha2 = fgets(STDIN);
sscanf($linha2, "%d %d %lf", $codigo2, $quantidade2, $valor2);

$total = ($quantidade1 * $valor1) + ($quantidade2 * $valor2);

echo "VALOR A PAGAR: R$ ".sprintf("%.2f", $total).("\n");

?>
