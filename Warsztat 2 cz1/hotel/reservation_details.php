<?php
$num_of_guests = $_POST['num_of_guests'] ?? 0;
?>

<h1>Reservation: <?php echo rand(1, 1000)?></h1>
<table>
    <tr>
        <td>Number of guests</td>
        <td><?php echo $num_of_guests; ?></td>
    </tr>
    <?php
    for ($guest_num = 1; $guest_num <= $num_of_guests; $guest_num++) {
        echo '<tr><td>Guest nr.' . $guest_num . ' First Name:</td><td>' . $_POST['first_name_guest_' . $guest_num] . '</td></tr>';
        echo '<tr><td>Guest nr.' . $guest_num . ' Last Name:</td><td>' . $_POST['last_name_guest_' . $guest_num] . '</td></tr>';
        echo '<tr><td>Guest nr.' . $guest_num . ' Email Address:</td><td>' . $_POST['email_guest_' . $guest_num] . '</td></tr>';
    }
    ?>
    <tr>
        <td>Address:</td>
        <td><?php echo $_POST['address']; ?></td>
    </tr>
    <tr>
        <td>Credit Card Number:</td>
        <td><?php echo $_POST['credit_card_num']; ?></td>
    </tr>
    <tr>
        <td>Arrival Date:</td>
        <td><?php echo $_POST['arrival_date']; ?></td>
    </tr>
    <tr>
        <td>Arrival Time:</td>
        <td><?php echo $_POST['arrival_time']; ?></td>
    </tr>
    <tr>
        <td>Child Bed:</td>
        <td><?php echo isset($_POST['child_bed']) ? 'Yes' : 'No'; ?></td>
    </tr>
    <tr>
        <td>Amenities:</td>
        <td><?php echo isset($_POST['amenities']) ? implode(', ', $_POST['amenities']) : 'No'; ?></td>
    </tr>
</table>
