<?php
require_once "classes/User.php";
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit;
}

$userObj = new User();
$error = "";
$success = "";

if (!isset($_GET['id'])) {
    header("Location: admin_dashboard.php");
    exit;
}

$user = $userObj->getUserById($_GET['id']);
if (!$user) {
    die("User not found");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updated = $userObj->updateUser(
        $_GET['id'],
        $_POST['email'],
        $_POST['mobile'],
        $_POST['full_name'] 
    );

    if ($updated) {
        $success = "User updated successfully";
        $user = $userObj->getUserById($_GET['id']); 
    } else {
        $error = "Update failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit User</title>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

<h2>Edit User</h2>

<?php if ($error): ?>
<div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>

<?php if ($success): ?>
<div class="alert alert-success"><?= $success ?></div>
<?php endif; ?>

<form method="POST">
  <input type="email" name="email" class="form-control mb-2"
         value="<?= $user['email'] ?>" required>

  <input type="text" name="mobile" class="form-control mb-2"
         value="<?= $user['mobile'] ?>" required>

  <input type="text" name="full_name" class="form-control mb-2"
         value="<?= $user['full_name'] ?>" required>

  <button class="btn btn-primary">Update</button>
  <a href="admin_dashboard.php" class="btn btn-secondary">Back</a>
</form>

</body>
</html>
