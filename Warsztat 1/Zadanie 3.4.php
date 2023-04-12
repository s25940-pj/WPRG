<?php
$counter = 0;

if (isPrime(13123123)) {
    echo  "Prime\n";
}
else {
    echo  "Not prime\n";
}

echo "Counter: " . $counter;

function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }

        global $counter;
        $counter++;
    }

	return true;
}
