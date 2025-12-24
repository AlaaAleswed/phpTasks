<?php
require_once "classes/User.php";
require_once "classes/Admin.php";
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $adminObj = new Admin();
    $admin = $adminObj->login($email, $password);
    if ($admin) {
        $_SESSION['admin'] = true;
        header("Location: admin_dashboard.php");
        exit;
    }

    $userObj = new User();
    $user = $userObj->login($email, $password);
    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: welcome.php");
        exit;
    }

    $error = "Invalid Login";
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

<h2>Login</h2>

<?php if($error): ?>
<div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>

<form method="POST">
  <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
  <input type="password" class="form-control mb-2" name="password" placeholder="Password" required>
  <button class="btn btn-primary">Login</button>
</form>

</body>
</html>
