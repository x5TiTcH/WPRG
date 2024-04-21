<?php
function is_prime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function print_primes($start, $end) {
    for ($num = $start; $num <= $end; $num++) {
        if (is_prime($num)) {
            echo $num . " ";
        }
    }
}

echo "Liczby pierwsze w zakresie od 1 do 20: ";
print_primes(1, 20);
?>
