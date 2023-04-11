<h1>Reservation: <?php echo rand(1, 1000)?></h1>
<table>
    <tr>
        <td>Number of guests</td>
        <td><?php echo $_POST['num_of_guests']; ?></td>
    </tr>

    <tr>
        <td>First Name</td>
        <td><?php echo $_POST['first_name']; ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?php echo $_POST['last_name']; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $_POST['address']; ?></td>
    </tr>
    <tr>
        <td>Credit Card Number</td>
        <td><?php echo $_POST['credit_card_num']; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $_POST['email']; ?></td>
    </tr>
    <tr>
        <td>Arrival Date</td>
        <td><?php echo $_POST['arrival_date']; ?></td>
    </tr>
    <tr>
        <td>Arrival Time</td>
        <td><?php echo $_POST['arrival_time']; ?></td>
    </tr>
    <tr>
        <td>Child Bed</td>
        <td><?php echo isset($_POST['child_bed']) ? 'Yes' : 'No'; ?></td>
    </tr>
    <tr>
        <td>Amenities</td>
        <td><?php echo isset($_POST['amenities']) ? implode(', ', $_POST['amenities']) : 'No'; ?></td>
    </tr>
</table>
