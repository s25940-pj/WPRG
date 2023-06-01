<?php
session_start();

if (isset($_POST['save'])) {
    $_SESSION['people'] = $_POST['person'];
}

$card_num = $_SESSION['card_num'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
$num_of_users = $_SESSION['num_of_users'];
$people = $_SESSION['people'];

echo "<h2>Summary</h2>";
echo "<p>Card number: $card_num</p>";
echo "<p>Full name: $first_name $last_name</p>";
echo "<p>Email: $email</p>";
echo "<p>Number of people: $num_of_users</p>";
echo "<h3>List of people:</h3>";

foreach ($people as $person) {
    echo "<p>Name: " . $person['first_name'] . "</p>";
    echo "<p>Last name: " . $person['last_name'] . "</p>";
    echo "<p>Email: " . $person['email'] . "</p>";
    echo "<hr>";
}
