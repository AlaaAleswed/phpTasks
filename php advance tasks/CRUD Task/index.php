<?php
require 'config.php';
$stmt = $pdo->query("SELECT * FROM employees");
$employees = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Employees</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>

    <h2>Employees Details</h2>
    <a href="create.php" class="add-btn">+ Add New Employee</a>

    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>

        <?php foreach ($employees as $emp): ?>
            <tr>
                <td><?= $emp['id'] ?></td>
                <td><?= $emp['name'] ?></td>
                <td><?= $emp['address'] ?></td>
                <td><?= $emp['salary'] ?></td>
                <td class="actions">
                    <a class="view" href="read.php?id=<?= $emp['id'] ?>"><i class="fa-solid fa-eye"></i></a>
                    <a class="edit" href="update.php?id=<?= $emp['id'] ?>"><i class="fa-solid fa-pen"></i></a>
                    <a class="delete" href="#" onclick="confirmDelete(<?= $emp['id'] ?>)"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this employee?")) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>

</body>

</html>