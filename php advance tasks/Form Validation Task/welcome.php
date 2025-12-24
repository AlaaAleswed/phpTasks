<?php
session_start();
if (!isset($_SESSION['user'])) header("Location: login.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

<h1>Welcome</h1>
<p>Your Email: <?= $_SESSION['user']['email'] ?></p>
<a href="logout.php" class="btn btn-danger">Logout</a>

</body>
</html>
