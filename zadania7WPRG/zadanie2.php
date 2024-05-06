<?php
function insertDollarSign($array, $n) {
    if (!is_array($array) || !is_int($n) || $n < 0 || $n >= count($array)) {
        echo "BŁĄD: Niepoprawne parametry.\n";
        return;
    }

    array_splice($array, $n, 0, '$');
    print_r($array);
}

$array = [1, 2, 3, 4, 5];
$n = 4;
insertDollarSign($array, $n);
?>