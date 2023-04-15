<?php
$date_of_birth = $_GET['date_of_birth'] ?? null;

function getDayOfWeekOfBday($date_of_birth) {
    return date('l', strtotime($date_of_birth));
}

function getAge($date_of_birth, $today) {
    return date_diff(date_create($date_of_birth), date_create($today)) -> format('%y');
}

function getDaysToNextBday($date_of_birth, $today) {
    $date_of_birth = date_create($date_of_birth);
    $today = date_create($today);
    $interval = (int) date_diff($today, $date_of_birth) -> format('%a');

    if ($today > $date_of_birth) {
        $current_year = date('Y');
        $is_leap_year = date('L', strtotime("$current_year-01-01"));

        if ($is_leap_year) {
            $interval = $interval + 366;
        }
        else {
            $interval = $interval + 355;
        }
    }

    return $interval;
}

?>
<form method="GET" action="">
    <label for="date">Enter your date of birth:</label>
    <input type="date" id="date_of_birth" name="date_of_birth" required>
    <button type="submit">Submit</button>
</form>
<?php
    if ($date_of_birth != null) {
        $today = date("Y-m-d");

        if (date_create($date_of_birth) > date_create($today)) {
            echo '<p>You are not born yet!</p>';
        }
        else {
            echo '<p>You were born on ' . getDayOfWeekOfBday($date_of_birth) . '.</p>';
            echo '<p>You are ' . getAge($date_of_birth, $today) . ' years old.</p>';

            echo '<p>Your next birthday is in ' . getDaysToNextBday($date_of_birth, $today) . ' days.</p>';
        }
    }
?>


