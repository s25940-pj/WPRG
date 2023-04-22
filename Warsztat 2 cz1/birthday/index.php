<?php
$date_of_birth = $_GET['date_of_birth'] ?? null;

function getDayOfWeekOfBday($date_of_birth) {
    return date('l', strtotime($date_of_birth));
}

function getAge($date_of_birth, $today) {
    return date_diff(date_create($date_of_birth), date_create($today)) -> format('%y');
}

function getDaysToNextBday($date_of_birth) {
    $birthdate = new DateTime($date_of_birth);
    $today = new DateTime();
    $next_birthday = new DateTime();
    $next_birthday->setDate($today->format('Y'), $birthdate->format('m'), $birthdate->format('d'));

    if ($next_birthday < $today) {
        $next_birthday->modify('+1 year');
    }

    $interval = $today->diff($next_birthday);

    return $interval->days;
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

            echo '<p>Your next birthday is in ' . getDaysToNextBday($date_of_birth) . ' days.</p>';
        }
    }
?>


