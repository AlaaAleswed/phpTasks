<?php
require_once "classes/Admin.php";
session_start();
$adminObj = new Admin();
$error = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin = $adminObj->login($_POST['email'], $_POST['password']);
    if ($admin) {
        $_SESSION['admin'] = true;
        header("Location: admin_dashboard.php");
        exit;
    } else {
        $error = "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

<h2>Admin Login</h2>

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
