<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $url=$GET['url'];
        header("Location: " .$url);
        exit(); 
    }
?>