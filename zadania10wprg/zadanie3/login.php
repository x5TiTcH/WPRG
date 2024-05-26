<?php
session_start();

$correct_username = 'admin';
$correct_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['loggedin'] = true;
        $loggedin = true;
    } else {
        $error = 'Nieprawidłowy login lub hasło.';
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    $loggedin = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
<h1>Logowanie</h1>
<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
    <p>Poprawnie zalogowano!</p>
    <a href="?logout">Wyloguj</a>
<?php else: ?>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post">
        <label>
            Login: <input type="text" name="username" required>
        </label><br>
        <label>
            Hasło: <input type="password" name="password" required>
        </label><br>
        <button type="submit">Zaloguj</button>
    </form>
<?php endif; ?>
</body>
</html>
