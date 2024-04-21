<?php
function arithmetic_series_sum($first_term, $difference, $n) {
    $last_term = $first_term + ($n - 1) * $difference;
    $series_sum = ($n * ($first_term + $last_term)) / 2;
    return $series_sum;
}

function geometric_series_sum($first_term, $ratio, $n) {
    $series_sum = $first_term * (1 - pow($ratio, $n)) / (1 - $ratio);
    return $series_sum;
}

$first_term = 2;
$difference = 3;
$n = 5;

$arithmetic_sum = arithmetic_series_sum($first_term, $difference, $n);
echo "Suma ciągu arytmetycznego: " . $arithmetic_sum . "\n";

$ratio = 2;
$geometric_sum = geometric_series_sum($first_term, $ratio, $n);
echo "Suma ciągu geometrycznego: " . $geometric_sum . "\n";
?>
