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
    $year = 2013;

    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "This year is a leap year";
    } else {
        echo "This year is not a leap year";
    }
    ?>

    <h1>Question 2</h1>
    <?php
    $temp = 27;
    if ($temp < 20) {
        echo "It is winter!";
    } else {
        echo "It is summertime!";
    }
    ?>

    <h1>Question 3</h1>
    <?php
    $first = 2;
    $second = 3;
    $sum = $first + $second;
    if ($first == $second) {
        $sum = $sum * 3;
        echo "($first + $second) * 3 = $sum";
    } else {
        echo "$first + $second = $sum";
    }
    ?>

    <h1>Question 4</h1>
    <?php
    $first = 10;
    $second = 10;
    $sum = $first + $second;
    if ($sum == 30) {
        echo $sum;
    } else {
        echo "false";
    }
    ?>

    <h1>Question 5</h1>
    <?php
    $number = 20;
    if ($number % 3 == 0) {
        echo "true";
    } else {
        echo "false";
    }
    ?>

    <h1>Question 6</h1>
    <?php
    $number = 50;
    if ($number >= 20 && $number <= 50) {
        echo "true";
    } else {
        echo "false";
    }
    ?>

    <h1>Question 7</h1>
    <?php
    $numbers = array(1, 5, 9);
    echo max($numbers);
    ?>

    <h1>Question 8</h1>
    <?php
    $units = 275;
    $bill = 0;
    if ($units <= 50) {
        $bill = $units * 2.5;
    } elseif ($units <= 150) {
        $bill = 50 * 2.5 + ($units - 50) * 5;
    } elseif ($units <= 250) {
        $bill = 50 * 2.5 + 100 * 5 + ($units - 150) * 6.2;
    } else {
        $bill = 50 * 2.5 + 100 * 5 + 100 * 6.2 + ($units - 250) * 7.5;
    }
    echo "Total bill: $bill JOD";
    ?>

    <h1>Question 9</h1>
    <?php
    $num1 = 9;
    $num2 = 3;
    $operation = "divide";
    switch ($operation) {
        case "add":
            echo $num1 + $num2;
            break;
        case "subtract":
            echo $num1 - $num2;
            break;
        case "multiply":
            echo $num1 * $num2;
            break;
        case "divide":
                echo $num1 / $num2;
            break;
        default:
            echo "Invalid operation";
    }
    ?>


    <h1>Question 10</h1>
    <?php
    $age = 15;
    if ($age >= 18) {
        echo "Eligible to vote";
    } else {
        echo "Not eligible to vote";
    }
    ?>

    <h1>Question 11</h1>
    <?php
    $number = -60;
    if ($number > 0) {
        echo "Positive";
    } elseif ($number < 0) {
        echo "Negative";
    } else {
        echo "Zero";
    }
    ?>

    <h1>Question 12</h1>
    <?php
    $scores = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
    $average = array_sum($scores) / count($scores);
    if ($average < 60) {
        $grade = "F";
    } elseif ($average < 70) {
        $grade = "D";
    } elseif ($average < 80) {
        $grade = "C";
    } elseif ($average < 90) {
        $grade = "B";
    } else {
        $grade = "A";
    }
    echo $grade;
    ?>
</body>

</html>