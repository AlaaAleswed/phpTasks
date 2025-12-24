<?php
session_start();
require_once "classes/User.php";
if (!isset($_SESSION['admin']))
    header("Location: admin.php");

$userObj = new User();
$users = $userObj->getAllUsers();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

    <h2>All Users</h2>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Last Login</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        

        <?php while ($u = mysqli_fetch_assoc($users)): ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['full_name'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><?= $u['created_at'] ?></td>
                <td><?= $u['last_login'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                </td>
                <td>
                    <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>

            </tr>
        <?php endwhile; ?>
    </table>

    <a href="logout.php" class="btn btn-secondary">Logout</a>

</body>

</html>