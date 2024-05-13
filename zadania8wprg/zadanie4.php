<?php
$text = readline("Podaj ciąg znaków: ");
$vowels = preg_match_all('/[aeiou]/i', $text, $matches);
echo "Wynik: $vowels\n";
?>
