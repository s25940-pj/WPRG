<?php

echo valueAtIndex(10);

function valueAtIndex($index) {
    if (!is_int($index)) {
        return;
    }

    $randomNums = createRandomNumsArray();

    return $randomNums[$index];
}

function createRandomNumsArray() {
    $randomNums = array();

    for ($i = 0; $i <= rand(0, 100); $i++) {
        $randomNums[] = rand(0, 100);
    }

    return $randomNums;
}