<?php
function createArray($a, $b, $c, $d) {
    $result = array();

    if ($a > $b || $c > $d) {
        echo "BŁĄD: Niepoprawne parametry.\n";
        return;
    }

    for ($i = $a; $i <= $b; $i++) {
        $result[$i] = $c;
        $c++;
        if ($c > $d) {
            break;
        }
    }

    return $result;
}


$a = 1;
$b = 5;
$c = 4;
$d = 8;
$result = createArray($a, $b, $c, $d);
print_r($result);
?>