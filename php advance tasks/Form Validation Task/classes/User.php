<?php
require_once "Database.php";

class User extends Database {

    public function register($data) {
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (email, mobile, full_name, password, date_of_birth)
                VALUES ('{$data['email']}', '{$data['mobile']}', '{$data['full_name']}',
                        '$password', '{$data['dob']}')";
        return mysqli_query($this->conn, $sql);
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($this->conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['password'])) {
            $this->updateLastLogin($user['id']);
            return $user;
        }
        return false;
    }

    public function updateLastLogin($id) {
        mysqli_query($this->conn, "UPDATE users SET last_login=NOW() WHERE id=$id");
    }

    public function getAllUsers() {
        return mysqli_query($this->conn, "SELECT * FROM users");
    }

    public function deleteUser($id) {
        return mysqli_query($this->conn, "DELETE FROM users WHERE id=$id");
    }

    public function getUserById($id)
{
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = mysqli_prepare($this->conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    return mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
}

public function updateUser($id, $email, $mobile, $full_name)
{
    $sql = "UPDATE users SET email=?, mobile=?, full_name=? WHERE id=?";
    $stmt = mysqli_prepare($this->conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $email, $mobile, $full_name, $id);
    return mysqli_stmt_execute($stmt);
}


}
