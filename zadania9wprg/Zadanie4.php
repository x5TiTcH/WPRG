<?php
$linksFile = 'links.txt';

if (file_exists($linksFile)) {
    $fileContents = file($linksFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    echo "<ul>";
    foreach ($fileContents as $line) {
        list($url, $description) = explode(';', $line);
        echo "<li><a href=\"$url\">$description</a></li>";
    }
    echo "</ul>";
} else {
    echo "Plik $linksFile nie istnieje.";
}
?>
