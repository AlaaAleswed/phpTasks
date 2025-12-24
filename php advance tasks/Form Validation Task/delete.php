<?php
require_once "classes/User.php";
session_start();
if (!isset($_SESSION['admin'])) header("Location: admin.php");

$userObj = new User();
$userObj->deleteUser($_GET['id']);
header("Location: admin_dashboard.php");
