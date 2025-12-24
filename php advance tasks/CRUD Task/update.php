<?php
require 'config.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM employees WHERE id = ?");
$stmt->execute([$id]);
$emp = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare(
        "UPDATE employees SET name=?, address=?, salary=? WHERE id=?"
    );
    $stmt->execute([
        $_POST['name'],
        $_POST['address'],
        $_POST['salary'],
        $id
    ]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Update Employee</h2>

<div class="form-container">
<form method="post">
    <label>Name</label>
    <input type="text" name="name" value="<?= $emp['name'] ?>" required>

    <label>Address</label>
    <input type="text" name="address" value="<?= $emp['address'] ?>" required>

    <label>Salary</label>
    <input type="number" name="salary" value="<?= $emp['salary'] ?>" required>

    <button type="submit">Update</button>
</form>

<a class="back-link" href="index.php">← Back</a>
</div>

</body>
</html>
