<?php

printMultiplicationTable();

function printMultiplicationTable() {
    echo "Type in number of multiplication table's columns (rows number will be equal to it): ";

    $columnsNum = trim(fgets(STDIN));

    if (!validateInput($columnsNum)) {
        echo "This is not a valid number!";

        return;
    }

    $multiplicationTable = generateMultiplicationTable($columnsNum);

    printColumnHeaders($columnsNum, $multiplicationTable);
    printCellsWithMultiplicationResults($columnsNum, $multiplicationTable);
}

function validateInput($input) {
    if (!is_numeric($input)) {
        return false;
    }

    return true;
}

function generateMultiplicationTable($columnsNum) {
    $multiplicationTable = array();
    $rowsNum = 1;

    for ($i = 1; $i <= $columnsNum; $i++) {
        $row = array();

        for ($j = 1; $j <= $columnsNum; $j++) {
            $row[] = $rowsNum * $j;
        }

        $multiplicationTable[] = $row;
        $rowsNum++;
    }

    return $multiplicationTable;
}

function printColumnHeaders($columnsNum, $multiplicationTable) {
    echo " " . printSeparatorSpaces($columnsNum, 1);

    for ($headerNum = 1; $headerNum <= count($multiplicationTable); $headerNum++) {
        echo $headerNum . printSeparatorSpaces($columnsNum, $headerNum);
    }

    echo "\n";
}

function printCellsWithMultiplicationResults($columnsNum, $multiplicationTable) {
    foreach ($multiplicationTable as $iterationNum => $tableRow) {
        printRowHeader($columnsNum, $iterationNum);

        foreach ($tableRow as $equationResult) {
            echo $equationResult . printSeparatorSpaces($columnsNum, $equationResult);
        }

        echo "\n";
    }
}

function printRowHeader($columnsNum, $iterationNum) {
    $tableRowNum = $iterationNum + 1;
    echo $tableRowNum . printSeparatorSpaces($columnsNum, $tableRowNum);
}

function printSeparatorSpaces($columnsNum, $valueToPrintFor) {
    $separatorSpaces = "";
    $maxValue = strlen($columnsNum ** 2);
    $numOfRequiredSpaces = $maxValue - strlen($valueToPrintFor) + 1;

    for ($i = 1; $i <= $numOfRequiredSpaces; $i++) {
        $separatorSpaces = $separatorSpaces . " ";
    }

    return $separatorSpaces;
}

