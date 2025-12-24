<?php
require 'config.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM employees WHERE id = ?");
$stmt->execute([$id]);
$emp = $stmt->fetch();

if (!$emp) {
    echo "Employee not found";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Employee Details</h2>

<div class="form-container">
    <p><strong>Name:</strong> <?= $emp['name'] ?></p>
    <p><strong>Address:</strong> <?= $emp['address'] ?></p>
    <p><strong>Salary:</strong> <?= $emp['salary'] ?></p>

    <a class="back-link" href="index.php">← Back</a>
</div>

</body>
</html>
