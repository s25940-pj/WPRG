<?php
$num_of_guests = $_GET['num_of_guests'] ?? 1;
?>

<form method="POST" action="reservation_details.php">
    <label for="num_of_guests">Number of guests:</label>
    <select id="num_of_guests" name="num_of_guests">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br>
    <?php
    for ($guest_num = 1; $guest_num <= $num_of_guests; $guest_num++) {
        echo '<h1> Guest nr.' . $guest_num . ': </h1>';
        echo '<label for="first_name_guest_' . $guest_num . '">First Name:</label>';
        echo '<input type="text" id="first_name_guest_' . $guest_num . '" name="first_name_guest_' . $guest_num .  '" required>';
        echo '<br>';
        echo '<br>';
        echo '<label for="last_name_guest_' . $guest_num . '">Last Name:</label>';
        echo '<input type="text" id="last_name_guest_' . $guest_num . '" name="last_name_guest_' . $guest_num .  '" required>';
        echo '<br>';
        echo '<br>';
        echo '<label for="email_g_' . $guest_num . '">Email:</label>';
        echo '<input type="text" id="email_guest_' . $guest_num . '" name="email_guest_' . $guest_num .  '" required>';
        echo '<br>';
        echo '<br>';
    }
    ?>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>
    <br>
    <br>
    <label for="credit_card_num">Credit Card Number:</label>
    <input type="text" id="credit_card_num" name="credit_card_num" pattern="[0-9]{16}" required>
    <br>
    <br>
    <label for="arrival_date">Arrival Date:</label>
    <input type="date" id="arrival_date" name="arrival_date" required>
    <br>
    <br>
    <label for="arrival_time">Arrival Time:</label>
    <input type="time" id="arrival_time" name="arrival_time" required>
    <br>
    <br>
    <label for="child_bed">Child Bed:</label>
    <input type="checkbox" id="child_bed" name="child_bed">
    <br>
    <br>
    <label for="amenities">Amenities:</label>
    <select id="amenities" name="amenities[]" multiple>
        <option value="air_conditioning">Air Conditioning</option>
        <option value="smoking_room">Smoking Room</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Submit">
</form>

