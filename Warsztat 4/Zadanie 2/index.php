<?php

$show_super_secret_msg = false;

if (!isset($_COOKIE["counter"])) {
    $counter = 1;
    setcookie("counter", $counter);
    $_COOKIE["counter"] = $counter;

} else {
    $counter = ++$_COOKIE["counter"];

    if ($counter == 21) {
        $show_super_secret_msg = true;
    }

    setcookie("counter", $counter);
}

echo $_COOKIE["counter"];

if ($show_super_secret_msg) {
    echo 37;
}
