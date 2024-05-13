<?php
$number = readline("Podaj liczbę zmiennoprzecinkową: ");
$decimal_count = strlen(substr(strrchr($number, "."), 1));
echo "Ilość cyfr po przecinku: $decimal_count\n";
?>
