<?php
session_start();

if (isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    $visit_count = 1;
}
setcookie('visit_count', $visit_count, time() + 3600 * 24 * 365);

if (isset($_POST['reset'])) {
    setcookie('visit_count', '', time() - 3600);
    $visit_count = 0;
}

$threshold = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visit Counter</title>
</head>
<body>
<h1>Visit Counter</h1>
<p>Liczba odwiedzin: <?php echo $visit_count; ?></p>
<?php
if ($visit_count >= $threshold) {
    echo "<p>Gratulacje! Osiągnąłeś $threshold odwiedzin!</p>";
}
?>
<form method="post">
    <button type="submit" name="reset">Resetuj licznik</button>
</form>
</body>
</html>
