<?php include "header.php"; ?>

<h1>Add</h1>

<form action="process_car.php" method="POST">
    <label for="make">Make:</label>
    <input type="text" id="make" name="make" required><br>

    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required><br>

    <label for="year">Year:</label>
    <input type="number" id="year" name="year" required><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>

    <input type="submit" value="Create Car">
</form>