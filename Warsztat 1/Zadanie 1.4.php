<?php
function extractDateOfBirthFromPesel($pesel) {
    $year = substr($pesel, 0, 2);
    $month = substr($pesel, 2, 2);
    $day = substr($pesel, 4, 2);

    if ($month > 80) {
        $year += 1800;
        $month -= 80;
    } elseif ($month > 60) {
        $year += 2200;
        $month -= 60;
    } elseif ($month > 40) {
        $year += 2100;
        $month -= 40;
    } elseif ($month > 20) {
        $year += 2000;
        $month -= 20;
    } else {
        $year += 1900;
    }

    return date("d-m-y", strtotime("$day-$month-$year"));
}

$dateOfBirth = extractDateOfBirthFromPesel("33110512576");

echo $dateOfBirth;