<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
</head>
<body>
<form method="POST" action="calculator.php">
  <label for="num1">First number:</label>
  <input type="number" name="num1" id="num1" required>

  <label for="num2">Second number:</label>
  <input type="number" name="num2" id="num2" required>

  <label for="operator">Operator:</label>
  <select name="operator" id="operator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>

  <input type="submit" name="submit" value="Calculate">
</form>
<?php
    if (isset($_GET['calculationResult'])) {
        $calculationResult = $_GET['calculationResult'];

        echo "<h2>Result: $calculationResult</h2>";
    }
?>
</body>
</html>
