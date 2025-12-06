<?php
$nome_vendedor = (string)readline("Nome vendedor: ");
$salario_fixo = (double)readline("Salário fixo: ");
$vendas_mes = (double)readline("Valor de vendas do mês: ");

$comissao = ($vendas_mes * 15) / 100;
$total = $salario_fixo + $comissao;

echo "TOTAL = R$ ".sprintf("%.2f", $total).("\n");

?>
