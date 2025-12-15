<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "The data sent by POST method" . "<br>";

    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Email: " . $email . "<br>";
    echo "password: " . $password . "<br>";
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
        echo "The data sent by GET method" . "<br>";

    $email = $GET['email'];
    $password = $GET['password'];

    echo "Email: " . $email . "<br>";
    echo "password: " . $password . "<br>";
}

?>