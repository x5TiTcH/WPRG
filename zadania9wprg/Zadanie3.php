<?php
$counterFile = 'licznik.txt';

if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}

$visits = (int)file_get_contents($counterFile);
$visits++;
file_put_contents($counterFile, $visits);

echo "Liczba odwiedzin: " . $visits;
?>
