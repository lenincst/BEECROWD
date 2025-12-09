<?php
$nota_um = readline();
$nota_dois = readline();

$MEDIA = (double) ($nota_um*3.5+$nota_dois*7.5)/(3.5 + 7.5);

echo "MEDIA = ".sprintf("%.5f", $MEDIA).("\n");

?>
