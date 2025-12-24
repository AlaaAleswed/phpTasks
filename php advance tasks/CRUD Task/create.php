<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare(
        "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)"
    );
    $stmt->execute([
        $_POST['name'],
        $_POST['address'],
        $_POST['salary']
    ]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add New Employee</h2>

<div class="form-container">
<form method="post">
    <label>Name</label>
    <input type="text" name="name" required>

    <label>Address</label>
    <input type="text" name="address" required>

    <label>Salary</label>
    <input type="number" name="salary" required>

    <button type="submit">Save</button>
</form>

<a class="back-link" href="index.php">← Back</a>
</div>

</body>
</html>
