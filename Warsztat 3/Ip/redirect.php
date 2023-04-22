<?php
$current_user_ip = $_SERVER['REMOTE_ADDR'];
$file = 'ip_addresses.txt';
$lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    list($ip_address, $webpage) = explode(';', $line);
    if ($ip_address == $current_user_ip) {
        header("Location: $webpage");
        exit;
    }
}

// if the user's IP address is not in the file, redirect to a default page
header("Location: index.php");
exit;
