<?php include "header.php"; ?>

<h1>
    Home
</h1>

<table style="text-align: left; border-spacing: 10px">
    <tr>
        <th></th>
        <th>Make</th>
        <th>Model</th>
        <th>Year</th>
        <th>Price</th>
    </tr>
    <?php
    $query = "SELECT * FROM cars ORDER BY price ASC LIMIT 5";
    $cars = $conn->query($query);
    $rowNum = 0;

    if ($cars->num_rows > 0) {
        while ($row = $cars->fetch_assoc()) {
            $rowNum++;
            echo "<tr>";
            echo "<td><a href='details.php?id=".$row['id']."'>" . $rowNum . "</a></td>" .
                "<td>" . $row["make"] . "</td>" .
                "<td>" . $row["model"] . "</td>" .
                "<td>" . $row["year"] . "</td>" .
                "<td>" . $row["price"] . "</td>";
            echo "</tr>";
        }
    }

    ?>
</table>
