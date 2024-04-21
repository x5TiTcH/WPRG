<?php
function is_pangram($text) {
    $text = strtolower(preg_replace("/[^a-zA-Z]/", "", $text));

    $letters_count = [];
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_alpha($char)) {
            if (!isset($letters_count[$char])) {
                $letters_count[$char] = 1;
            } else {
                $letters_count[$char]++;
            }
        }
    }

    return count($letters_count) == 26;
}

$text = "The quick brown fox jumps over the lazy dog.";
if (is_pangram($text)) {
    echo "Tekst jest pangramem.\n";
} else {
    echo "Tekst nie jest pangramem.\n";
}
?>
