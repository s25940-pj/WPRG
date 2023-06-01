<a href="index.php">Home</a>
<a href="list.php">All cars</a>
<a href="add.php">Add car</a>

<?php
$hostname = "localhost:2137";
$username = "root";
$password = "root";
$database = "mojaBaza";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}