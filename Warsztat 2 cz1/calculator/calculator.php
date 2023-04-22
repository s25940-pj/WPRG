<?php
if (isset($_POST['submit'])) {
    $firstNum = $_POST['num1'];
    $secondNum = $_POST['num2'];
    $operator = $_POST['operator'];
    $calculationResult = '';

    switch($operator){
        case '+':
            $calculationResult = $firstNum + $secondNum;
            break;
        case '-':
            $calculationResult = $firstNum - $secondNum;
            break;
        case '*':
            $calculationResult = $firstNum * $secondNum;
            break;
        case '/':
            if($secondNum == 0){
                $calculationResult = "Undefined";
            } else {
                $calculationResult = $firstNum / $secondNum;
            }
            break;
    }

    header("Location: redirect.php?calculationResult=$calculationResult");
    exit;
}


