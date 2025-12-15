<?php
echo phpversion();
echo "<br>";

echo "Tomorrow I'll learn PHP global variables."."<br>";
echo "This is a bad command: del c:\\. ";
?>

<form method="POST">
    name: <input type="text" name="name" id="name">
    <button type="submit">submit</button>
</form>
<?php
echo "name: ". $_POST['name'];
echo "<br>";

echo $_SERVER['SERVER_ADDR'] . "<br>";

echo$_SERVER['PHP_SELF']. "<br>"    ;

$url="https://www.w3schools.com/php/default.asp";
$components = parse_url($url);
print_r($components);
echo "<br>";

$str="PHP Tutorial";
$str=explode(" ", $str);
$firstWord=$str[0];
$color="red";
echo "<span style='color:$color'>$firstWord</span>";
for ($i = 1; $i < count($str); $i++) {
    echo $str[$i] . " ";
}

$new_page_url = "https://www.w3schools.com/page.php";
header("Location: ". $new_page_url);
exit();


?>
