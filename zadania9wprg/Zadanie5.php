<?php
$allowedIpsFile = 'allowed_ips.txt';
$allowedIps = file($allowedIpsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$clientIp = $_SERVER['REMOTE_ADDR'];

if (in_array($clientIp, $allowedIps)) {
    include 'special_page.php';
} else {
    include 'regular_page.php';
}
?>
<?php
