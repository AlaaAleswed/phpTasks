
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Questuin 1</h1>
    <table border="1">
    <tr>
        <td><?php  echo "salary of Mr. A is"; ?>  </td>
        <td> <?php echo "1000$"; ?></td>
    </tr>
    <tr>
        <td><?php  echo "salary of Mr. B is"; ?>  </td>
        <td> <?php echo "1200$"; ?></td>
    </tr>
    <tr>
        <td><?php  echo "salary of Mr. C is"; ?>  </td>
        <td> <?php echo "1400$"; ?></td>
    </tr>
        
    </table>
    <h1>Questuin 2</h1>
    <?php
    $fileName='task1.php';
    date_default_timezone_set("Asia/Amman");
    echo date("F d Y H:i:s",filemtime($fileName));
     ?>

    <h1>Questuin 3</h1>
    <?php
    $fileName2='test.txt';
    $lines = file($fileName2); 
    $lineCount = count($lines);
    echo $lineCount;
     ?>
</body>
</html>