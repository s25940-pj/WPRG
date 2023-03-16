<?php

function diceRoll() {
    echo "Type in a number to determine how many times a dice will be rolled: ";
    
    $numberOfDiceRolls = trim(fgets(STDIN));

    if (!validateInput($numberOfDiceRolls)) {
        echo "This is not a valid number!";

        return;
    }

    $scoreboard = array();

    for ($i = 1; $i <= $numberOfDiceRolls; $i++) {
        $diceRollResult = rand(1, 6);
        $scoreboard[] = $diceRollResult;
    }

    return $scoreboard;
}

function validateInput($input) {
    if (!is_numeric($input)) {
        return false;
    }

    return true;
}

print_r(diceRoll());