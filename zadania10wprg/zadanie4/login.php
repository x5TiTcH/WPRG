<?php
session_start();

$users_file = 'users.txt';

function authenticate($email, $password, $users_file) {
    if (file_exists($users_file)) {
        $users = file($users_file, FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            list($stored_email, $stored_password, $firstname, $lastname) = explode(';', $user);
            if ($stored_email == $email && password_verify($password, $stored_password)) {
                return ['firstname' => $firstname, 'lastname' => $lastname];
            }
        }
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($user = authenticate($email, $password, $users_file)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $user;
        $loggedin = true;
    } else {
        $error = 'Nieprawidłowy email lub hasło.';
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    $loggedin = false;
}
?>
