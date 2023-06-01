<form method="post" action="">
    <label for="number">Enter a positive integer:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Check</button>
    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $counter= 0;

        if (!validateInput($number)) {
            echo '<p>The number you provided is invalid!</p>';
        }
        else {
            if (isPrime($number)) {
                echo '<p>The number ' . $number . ' is prime. Counter: ' . $counter . '</p>';
            } else {
                echo '<p>The number ' . $number . ' is not prime. Counter: ' . $counter . '</p>';
            }
        }
    }
    ?>
</form>

<?php
function validateInput($input) {
    if (is_numeric($input) && $input > 1 && floor($input) == $input) {
        return true;
    }

    return false;
}

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
?>
