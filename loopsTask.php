<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Question 1</h1>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
        if ($i < 10)
            echo "-";
    }
    ?>

    <h1>Question 2</h1>
    <?php
    $total = 0;
    for ($i = 1; $i <= 30; $i++) {
        $total += $i;
    }
    echo $total;
    ?>

    <h1>Question 3</h1>
    <?php
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($i == 0)
                echo "A ";
            elseif ($i == 1)
                echo ($j < 3 ? "A " : "B ");
            elseif ($i == 2)
                echo ($j < 2 ? "A " : "C ");
            elseif ($i == 3)
                echo ($j < 1 ? "A " : "D ");
            else
                echo "E ";
        }
        echo "<br>";
    }
    ?>

    <h1>Question 4</h1>
    <?php
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($i == 0)
                echo "1 ";
            elseif ($i == 1)
                echo ($j < 3 ? "1 " : "2 ");
            elseif ($i == 2)
                echo ($j < 2 ? "1 " : "3 ");
            elseif ($i == 3)
                echo ($j < 1 ? "1 " : "4 ");
            else
                echo "5 ";
        }
        echo "<br>";
    }
    ?>

    <h1>Question 5</h1>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($i == $j)
                echo $i . " ";
            else
                echo "0 ";
        }
        echo "<br>";
    }
    ?>

    <h1>Question 6</h1>
    <?php
    $factorial = 1;
    for ($i = 1; $i <= 5; $i++) {
        $factorial *= $i;
    }
    echo $factorial;
    ?>

    <h1>Question 7</h1>
    <?php
    $a = 0;
    $b = 1;
    echo $a . ", " . $b;
    for ($i = 2; $i < 10; $i++) {
        $c = $a + $b;
        echo ", " . $c;
        $a = $b;
        $b = $c;
    }
    ?>

    <h1>Question 8</h1>
    <?php
    $text = "Orange Coding Academy";
    $count = substr_count(strtolower($text), "c");
    echo $count;
    ?>

    <h1>Question 9</h1>
    <?php
    echo "<table  border='1'>";
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td>$i * $j = " . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <h1>Question 10</h1>
    <?php
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0)
            echo "FizzBuzz ";
        else if ($i % 3 == 0)
            echo "Fizz ";
        else if ($i % 5 == 0)
            echo "Buzz ";
        else
            echo $i . " ";
    }
    ?>

    <h1>Question 11</h1>
    <?php
    $num = 1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
    ?>

    <h1>Question 12</h1>
    <?php
    $rows = 5;
    $totalRows = 9;
    echo "<pre>";
    for ($i = 1; $i <= $totalRows; $i++) {//1
        $numChars = ($i <= $rows) ? $i : $totalRows - $i + 1;
        echo str_repeat(" ", $rows - $numChars);
        for ($j = 0; $j < $numChars; $j++) {
            echo chr(65 + $j);
            if ($j < $numChars - 1)
                echo " ";
        }
        echo "<br>";
    }

    echo "</pre>";
    ?>





</body>

</html>