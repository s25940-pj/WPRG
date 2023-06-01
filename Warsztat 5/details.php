<?php include 'header.php'; ?>

<h1>Details</h1>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM cars WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Id: " . $row["id"] . "<br>";
        echo "Make: " . $row["make"] . "<br>";
        echo "Model: " . $row["model"] . "<br>";
        echo "Price: " . $row["price"] . "<br>";
        echo "Year: " . $row["year"] . "<br>";
        echo "Description: " . $row["description"] . "<br>";
    } else {
        echo "No info";
    }
} else {
    echo "Car does not exist";
}
