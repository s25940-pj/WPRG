<?php
session_start();

if (isset($_POST['submit'])) {
    $card_num = $_POST['card_num'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $num_of_users = $_POST['num_of_users'];
    $_SESSION['card_num'] = $card_num;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['email'] = $email;
    $_SESSION['num_of_users'] = $num_of_users;

    echo "<h2>Customer information</h2>";
    echo "<form method='POST' action='submit.php'>";

    for ($i = 1; $i <= $num_of_users; $i++) {
        echo "<h3>$i Person</h3>";
        echo "<label>Name:</label>";
        echo "<input type='text' name='person[$i][first_name]'><br><br>";
        echo "<label>Nazwisko:</label>";
        echo "<input type='text' name='person[$i][last_name]'><br><br>";
        echo "<label>Email:</label>";
        echo "<input type='text' name='person[$i][email]'><br><br>";
    }

    echo "<input type='submit' name='save' value='Save'>";
    echo "<input type='submit' name='submit' value='Submit'>";
    echo "</form>";
}