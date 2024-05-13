<?php
$text = readline("Podaj ciąg liczb: ");
$cleaned_text = preg_replace('/[\/\\:*?"<>|+\-.]/', '', $text);
echo "Wynik: $cleaned_text\n";
?>
