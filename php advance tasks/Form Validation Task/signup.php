<?php
require_once "classes/User.php";
session_start();
$user = new User();
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $full_name = $_POST['fname']." ".$_POST['mname']." ".$_POST['lname']." ".$_POST['family'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];
    $dob = $_POST['year']."-".$_POST['month']."-".$_POST['day'];

    if (!preg_match("/^[\w\-\.]+@([\w-]+\.)+[\w-]{2,4}$/", $email))
        $errors[] = "Invalid Email";

    if (!preg_match("/^[0-9]{14}$/", $mobile))
        $errors[] = "Mobile must be 14 digits";

    if (!preg_match("/^[A-Za-z]+$/", $_POST['fname'])) $errors[] = "Invalid First Name";
    if (!preg_match("/^[A-Za-z]+$/", $_POST['mname'])) $errors[] = "Invalid Middle Name";
    if (!preg_match("/^[A-Za-z]+$/", $_POST['lname'])) $errors[] = "Invalid Last Name";
    if (!preg_match("/^[A-Za-z]+$/", $_POST['family'])) $errors[] = "Invalid Family Name";

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[^\s]{8,}$/", $password))
        $errors[] = "Weak Password";

    if ($password !== $confirm)
        $errors[] = "Passwords do not match";

    $age = date_diff(date_create($dob), date_create())->y;
    if ($age < 16) $errors[] = "You must be older than 16";

    if (empty($errors)) {
        $data = [
            "email" => $email,
            "mobile" => $mobile,
            "full_name" => $full_name,
            "password" => $password,
            "dob" => $dob
        ];
        $user->register($data);
        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<h2>Sign Up</h2>

<?php foreach ($errors as $e): ?>
<div class="alert alert-danger"><?= $e ?></div>
<?php endforeach; ?>

<form method="POST">
  <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
  <input type="text" class="form-control mb-2" name="mobile" placeholder="Mobile (14 digits)" pattern="[0-9]{14}" required>

  <input type="text" class="form-control mb-2" name="fname" placeholder="First Name" pattern="[A-Za-z]+" required>
  <input type="text" class="form-control mb-2" name="mname" placeholder="Middle Name" pattern="[A-Za-z]+" required>
  <input type="text" class="form-control mb-2" name="lname" placeholder="Last Name" pattern="[A-Za-z]+" required>
  <input type="text" class="form-control mb-2" name="family" placeholder="Family Name" pattern="[A-Za-z]+" required>

  <input type="password" class="form-control mb-2" name="password"
         pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[^\s]{8,}" placeholder="Password" required>
  <input type="password" class="form-control mb-2" name="confirm" placeholder="Confirm Password" required>

  <div class="row">
    <div class="col"><input class="form-control" name="day" placeholder="DD" required pattern="\d{2}"></div>
    <div class="col"><input class="form-control" name="month" placeholder="MM" required pattern="\d{2}"></div>
    <div class="col"><input class="form-control" name="year" placeholder="YYYY" required pattern="\d{4}"></div>
  </div>

  <button class="btn btn-success mt-3">Register</button>
</form>

</body>
</html>
