<?php
$text = readline("Podaj ciąg znaków: ");
echo "Ciąg dużymi literami: " . strtoupper($text) . "\n";
echo "Ciąg małymi literami: " . strtolower($text) . "\n";
echo "Pierwsza litera dużą literą: " . ucfirst($text) . "\n";
echo "Wszystkie pierwsze litery słów dużymi literami: " . ucwords($text) . "\n";
?>

