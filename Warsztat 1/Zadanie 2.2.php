<?php

$nationalities = array(
    "Poland" => "Polish",
    "England" => "English",
    "Russia" => "Russian"
);

echo checkNationality();

function checkNationality() {
    echo "Check your nationality by typing in your country name: ";
    $countryName = trim(fgets(STDIN));
    global $nationalities;

    if (!array_key_exists($countryName, $nationalities)) {
        echo "No data available";
        return;
    }

    return $nationalities[$countryName];
}
