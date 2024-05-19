<?php
if (isset($_GET['birthdate'])) {
    $birthdate = $_GET['birthdate'];
    $birthDate = new DateTime($birthdate);
    $currentDate = new DateTime();

    $dayOfWeek = $birthDate->format('l');
    $age = $currentDate->diff($birthDate)->y;
    $nextBirthday = new DateTime($birthDate->format('Y') . '-' . $birthDate->format('m') . '-' . $birthDate->format('d'));
    $nextBirthday->setDate($currentDate->format('Y'), $birthDate->format('m'), $birthDate->format('d'));
    if ($nextBirthday < $currentDate) {
        $nextBirthday->modify('+1 year');
    }
    $daysUntilNextBirthday = $currentDate->diff($nextBirthday)->days;

    echo "Dzień tygodnia: " . $dayOfWeek . "<br>";
    echo "Ukończone lata: " . $age . "<br>";
    echo "Ilość dni do najbliższych, przyszłych urodzin: " . $daysUntilNextBirthday . "<br>";
} else {
    echo "Nie podano daty urodzenia.";
}
?>
