<?php
require_once "Database.php";

class Admin extends Database
{

    public function login($email, $password)
{
    $sql = "SELECT * FROM admins WHERE email = ?";
    $stmt = mysqli_prepare($this->conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $admin = mysqli_fetch_assoc($result);

    if ($admin) {
        $db_password = trim($admin['password']);
        $input_password = trim($password);

        if ($db_password === $input_password) {
            return $admin;
        }
    }

    return false;
}
}


?>