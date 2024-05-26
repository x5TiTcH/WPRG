<?php
session_start();

$users_file = 'users.txt';

function validate_password($password) {
    return strlen($password) >= 6 &&
        preg_match('/[A-Z]/', $password) &&
        preg_match('/[0-9]/', $password) &&
        preg_match('/[\W]/', $password);
}

function email_exists($email, $users_file) {
    if (file_exists($users_file)) {
        $users = file($users_file, FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            list($stored_email) = explode(';', $user);
            if ($stored_email == $email) {
                return true;
            }
        }
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!validate_password($password)) {
        $error = 'Hasło musi mieć co najmniej 6 znaków, zawierać co najmniej 1 wielką literę, cyfrę oraz znak specjalny.';
    } elseif (email_exists($email, $users_file)) {
        $error = 'Adres email jest już zarejestrowany.';
    } else {
        $user_data = $email . ';' . password_hash($password, PASSWORD_DEFAULT) . ';' . $firstname . ';' . $lastname . "\n";
        file_put_contents($users_file, $user_data, FILE_APPEND);
        $success = 'Rejestracja zakończona sukcesem. Możesz się teraz zalogować.';
    }
}
?>
