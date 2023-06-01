<?php include "header.php";
$query = "INSERT INTO cars (make, model, price, year, description) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ssdis", $_POST['make'], $_POST['model'], $_POST['price'], $_POST['year'], $_POST['description']);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "<h1>Car created successfully!</h1>";
} else {
    echo "<h1>Error creating car: " . mysqli_stmt_error($stmt) . "</h1>";
}
mysqli_stmt_close($stmt);

