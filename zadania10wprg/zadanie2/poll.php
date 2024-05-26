<?php
session_start();

$question = "Czy lubisz programować?";
$options = ["Tak", "Nie", "Nie mam zdania"];

if (isset($_COOKIE['poll_voted'])) {
    $voted = true;
} else {
    $voted = false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$voted) {
    setcookie('poll_voted', '1', time() + 3600 * 24 * 365);
    $voted = true;
    $selected_option = $_POST['option'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sonda</title>
</head>
<body>
<h1>Sonda internetowa</h1>
<p><?php echo $question; ?></p>
<?php if ($voted): ?>
    <p>Dziękujemy za głosowanie!</p>
<?php else: ?>
    <form method="post">
        <?php foreach ($options as $option): ?>
            <label>
                <input type="radio" name="option" value="<?php echo $option; ?>" required> <?php echo $option; ?>
            </label><br>
        <?php endforeach; ?>
        <button type="submit">Głosuj</button>
    </form>
<?php endif; ?>
</body>
</html>
