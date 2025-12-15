<?php
session_start();

$cookie_name = "user";
$cookie_value = "Alaa";
$expiry_time = time() + 3600; 
$cookie_path = "/"; 
$domain = ""; 
$secure = false;
$httponly = true;
setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Question 5</h1>
    <?php
    $projectName = basename(dirname($_SERVER['SCRIPT_FILENAME']));
    echo "project name: " . $projectName . "<br>";
    $scriptName = basename($_SERVER['SCRIPT_FILENAME']);
    echo "script name: " . $scriptName;
    ?>

    <h1>Question 6</h1>
    <?php
    date_default_timezone_set('Asia/Amman');
    echo "Page Requested Time: " . date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);
    ?>

    <h1>Question 7</h1>
    <?php
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 1;
    } else {
        $_SESSION['counter']++;
    }
    echo "This page has been refreshed " . $_SESSION['counter'] . " times.";
    ?>

    <h1>Question 8</h1>
    <?php
    if (!isset($_SESSION['visitor_count'])) {
        $_SESSION['visitor_count'] = 1;
    } else {
        $_SESSION['visitor_count']++;
    }
    echo "Number of Visitors : ";
    echo $_SESSION['visitor_count'];
    ?>

    <h1>Question 9</h1>
    <?php
    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie Value: " . $_COOKIE[$cookie_name] . "<br>";
    } else {
        echo "Cookie not set yet.<br>";
    }
    ?>
    
</body>

</html>