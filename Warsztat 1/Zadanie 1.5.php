<?php

class Shape {
    const TRIANGLE = 1;
    const RECTANGLE = 2;
    const TRAPEZOID = 3;
}

readShapeFromUser();

function readShapeFromUser() {
    echo "Choose a shape (1=Triangle, 2=Rectangle, 3=Trapezoid): ";

    $input = trim(fgets(STDIN));

    if (!is_numeric($input)) {
        echo "This is not a valid option to choose from.\n";
        readShapeFromUser();
    }
    else {
        $shape = intval($input);

        switch ($shape) {
            case Shape::TRIANGLE:
                echo calculateTriangleArea();
                break;
            case Shape::RECTANGLE:
                echo calculateRectangleArea();
                break;
            case Shape::TRAPEZOID:
                echo calculateTrapezoidArea();
                break;
            default:
                echo "This is not a valid option to choose from.\n";
                readShapeFromUser();
                break;
        }
    }
}

function calculateTriangleArea() {
    echo "Enter data separated by space which is required for calculating triangle's area in this order (base, height): ";

    $input = trim(fgets(STDIN));
    $data = explode(' ', $input);

    if (!dataTypeOfDataIsInt($data) || count($data) !== 2) {
        echo "Invalid input. Please enter two numbers separated by a space.\n";
        calculateTriangleArea();
    }

    $base = intval($data[0]);
    $height = intval($data[1]);

    return (0.5 * $base) * $height;

}

function calculateRectangleArea() {
    echo "Enter data separated by space which is required for calculating rectangle's area in this order (base, height): ";

    $input = trim(fgets(STDIN));
    $data = explode(' ', $input);

    if (!dataTypeOfDataIsInt($data) || count($data) !== 2) {
        echo "Invalid input. Please enter two numbers separated by a space.\n";
        calculateRectangleArea();
    }

    $base = intval($data[0]);
    $height = intval($data[1]);

    return $base * $height;
}

function calculateTrapezoidArea() {
    echo "Enter data separated by space which is required for calculating trapezoid's area in this order (upper base, lower base, height): ";

    $input = trim(fgets(STDIN));
    $data = explode(' ', $input);

    if (!dataTypeOfDataIsInt($data) || count($data) !== 3) {
        echo "Invalid input. Please enter three numbers separated by a space.\n";
        calculateTrapezoidArea();
    }

    $upperBase = intval($data[0]);
    $lowerBase = intval($data[1]);
    $height = intval($data[2]);

    return (($upperBase + $lowerBase) * $height) / 2;
}

function dataTypeOfDataIsInt($data) {
    foreach ($data as $item) {
        if (!is_numeric($item) || intval($item) != $item) {
            return false;
        }
    }

    return true;
}