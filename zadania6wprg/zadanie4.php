<?php
function sum_of_digits($number) {
    $sum = 0;
    while ($number > 0) {
$digit = $number % 10;
$sum += $digit;
$number = floor($number / 10);
}
return $sum;
}

function compute_until_sum_greater_than_10($number) {
$sum = sum_of_digits($number);
while ($sum < 10) {
$number++;
$sum = sum_of_digits($number);
}
return $number;
}

$number = 123;
$final_number = compute_until_sum_greater_than_10($number);
echo "Liczba po obliczeniach: " . $final_number . "\n";
?>
