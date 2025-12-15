<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        first number <input type="number" name="fNo" id="fNo"><br> <br>

        orerattion <input type="radio" name="radio" id="+" value="+"><label for="+">+</label> &nbsp;&nbsp;
        <input type="radio" name="radio" id="-" value="-"><label for="-">-</label> &nbsp;&nbsp;
        <input type="radio" name="radio" id="*" value="*"><label for="*">*</label> &nbsp;&nbsp;
        <input type="radio" name="radio" id="/" value="/"><label for="/">/</label> <br> <br>

        second number <input type="number" name="sNo" id="sNo"> <br> <br>
        <button type="submit">Calculate</button>


    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first = $_POST['fNo'];
        $second = $_POST['sNo'];
        $operation = $_POST['radio'];

        switch ($operation) {
            case '+':
                $result = $first + $second;
                break;
            case '-':
                $result = $first - $second;
                break;
            case '*':
                $result = $first * $second;
                break;
            case '/':
                $result = $first / $second;
                break;
        }

        echo "<p>Result: $first  $operation $second =  $result</p>";


    }
    ?>
</body>

</html>