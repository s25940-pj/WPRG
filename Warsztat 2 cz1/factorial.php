<?php

function recursiveFactorial($num) {
    if ($num <= 1) {
        return 1;
    }
    return $num * recursiveFactorial($num - 1);
}

function standardFactorial($num) {
    $result = 1;

    while ($num > 1) {
        $result = $result * ($num * ($num - 1));
        $num -= 2;
    }

    return $result;
}

$start_time = microtime(true);
echo recursiveFactorial(12) . PHP_EOL;
$end_time = microtime(true);
$total_time = $end_time - $start_time;
echo "Run time of 'recursiveFactorial' is: $end_time" . PHP_EOL;

$start_time = microtime(true);
echo standardFactorial(12) . PHP_EOL;
$end_time = microtime(true);
$total_time = $end_time - $start_time;
echo "Run time of 'standardFactorial' is: $end_time";