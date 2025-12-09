<?php
$raio = readline();
$pi = 3.14159;

$formula = (4.0/3) * $pi * pow($raio, 3);

echo "VOLUME = ".(sprintf("%.3f", $formula)).("\n");

?>