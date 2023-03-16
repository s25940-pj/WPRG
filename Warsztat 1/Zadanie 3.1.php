<?php

$arr = createRandomNumsArray();

echo getMaxValueUsingForLoop() . "\n";
echo getMaxValueUsingWhileLoop() . "\n";
echo getMaxValueUsingDoWhileLoop() . "\n";
echo getMaxValueUsingForeachLoop();

function createRandomNumsArray() {
    $randomNums = array();

    for ($i = 0; $i <= rand(0, 100); $i++) {
        $randomNums[] = rand(0, 100);
    }

    return $randomNums;
}

function getMaxValueUsingForLoop() {
    global $arr;
    $maxValue = 0;

    for ($i = 0; $i <= count($arr) - 1; $i++) {
        if ($arr[$i] > $maxValue) {
            $maxValue = $arr[$i];
        }
    }

    return $maxValue;
}

function getMaxValueUsingWhileLoop() {
    global $arr;
    $maxValue = 0;
    $index = count($arr) - 1;

    while ($index > 0) {
        if ($arr[$index] > $maxValue) {
            $maxValue = $arr[$index];
        }

        $index--;
    }

    return $maxValue;
}

function getMaxValueUsingDoWhileLoop() {
    global $arr;
    $maxValue = 0;
    $index = count($arr) - 1;

    do {
        if ($arr[$index] > $maxValue) {
            $maxValue = $arr[$index];
        }

        $index--;
    }
    while ($index > 0);

    return $maxValue;
}

function getMaxValueUsingForeachLoop() {
    global $arr;
    $maxValue = 0;

    foreach ($arr as $item) {
        if ($item > $maxValue) {
            $maxValue = $item;
        }
    }

    return $maxValue;
}