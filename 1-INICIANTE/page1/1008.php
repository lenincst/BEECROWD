<?php
$num_func = (int)readline("Numero do funcionário: ");
$hr_trab = (int)readline("Quantas horas ele trabalhou: ");
$valor_hr = sprintf("%.2f",readline("Quanto ele recebe por hora: "));

$salario = $hr_trab*$valor_hr;

echo "NUMBER = ".$num_func.("\n");
echo "SALARY = U$ ".sprintf("%.2f",$salario).("\n");

?>
