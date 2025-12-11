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
    $string = "alaa aleswed";
    echo "Uppercase: " . strtoupper(($string)) . "<br>";
    echo "Lowercase: " . strtolower($string) . "<br>";
    echo "First letter uppercase: " . ucfirst($string) . "<br>";
    echo "Capitalized words: " . ucwords($string) . "<br>";
    ?>

    <h1>Question 2</h1>
    <?php
    $date = '085119';
    $dateFormat = substr($date, 0, 2) . ":" . substr($date, 2, 2) . ":" . substr($date, 4, 2);
    echo $dateFormat;
    ?>

    <h1>Question 3</h1>
    <?php
    $sentence = "I am a full stack developer at orange coding academy";
    $word = "orange";
    if (stripos($sentence, $word)) {
        echo "Word Found!";
    } else {
        echo "Word Not Found!";
    }
    ?>

    <h1>Question 4</h1>
    <?php
    $url = 'www.orange.com/index.php';
    $fileName = basename($url);
    echo $fileName;
    ?>

    <h1>Question 5</h1>
    <?php
    $email = 'info@gmail.com';
    $userName = strstr($email, '@', true);
    echo $userName;
    ?>

    <h1>Question 6</h1>
    <?php
    $email = 'info@gmail.com';
    $lastThree = substr($email, -3);
    echo $lastThree;
    ?>

    <h1>Question 7</h1>
    <?php
    $str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $pass = str_shuffle($str);
    $pass2 = substr(str_shuffle($str), 0, 10);
    echo $pass . "<br>";
    echo $pass2;
    ?>

    <h1>Question 8</h1>
    <?php
    $str = "that new trainee is so genius";
    $newWord = "the";
    $words = explode(" ", $str);
    $words[0] = $newWord;
    $words = implode(" ", $words);
    echo $words;
    ?>

    <h1>Question 9</h1>
    <?php
    $str1 = "dragonball";
    $str2 = "dragonboll";
    $length = min(strlen($str1), strlen($str2));
    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] != $str2[$i]) {
            echo "First difference between two strings at position $i: \"$str1[$i]\" vs \"$str2[$i]\"";
            break;
        }
    }
    ?>

    <h1>Question 10</h1>
    <?php
    $string = "Twinkle, twinkle, little star.";
    $words = explode(" ", $string);
    var_dump($words);
    ?>

    <h1>Question 11</h1>
    <?php
    $char = 'a';
    $char2 = 'z';
    $nextChar = ($char === 'z') ? 'a' : chr(ord($char) + 1);
    $nextChar2 = ($char2 === 'z') ? 'a' : chr(ord($char2) + 1);
    echo "after a: " . $nextChar . "<br>";
    echo "after z: " . $nextChar2;
    ?>

    <h1>Question 12</h1>
    <?php
    $string = 'The brown fox';
    $word = ' quick ';
    $position = strpos($string, 'brown'); // brown position
    $newString = substr_replace($string, $word, $position, 0);
    echo $newString . "<br>";

    $string = 'The quick brown fox';
    $firstWord = strtok($string, " ");
    echo $firstWord;
    ?>

    <h1>Question 13</h1>
    <?php
    $num = '0000524.56';
    $newNum = ltrim($num, '0');
    echo $newNum;
    ?>

    <h1>Question 14</h1>
    <?php
    $string = 'The quick brown fox jumps over the lazy dog';
    $remove = 'fox';
    $newString = str_replace($remove, '', $string);
    echo $newString;
    ?>

    <h1>Question 15</h1>
    <?php
    $string = 'The quick brown fox jumps over the lazy dog---';
    $newString = rtrim($string, '-');
    echo $newString;
    ?>

    <h1>Question 16</h1>
    <?php
    $string = '\"\1+2/3*2:2-3/4*3';
    $newSrting = preg_replace('/[^0-9]+/', ' ', $string);
    echo $newSrting;
    ?>

    <h1>Question 17</h1>
    <?php
    $string = 'The quick brown fox jumps over the lazy dog';
    $words = explode(' ', $string);
    $first5 = array_slice($words, 0, 5);
    $result = implode(' ', $first5);
    echo $result;
    ?>

    <h1>Question 18</h1>
    <?php
    $num='2,543.12';
    $newNum=str_replace(',','', $newNum);
    echo $newNum;
    ?>

    <h1>Question 19</h1>
    <?php
    for ($i='a'; $i <'z' ; $i++) { 
        echo $i." ";
        if ($i === "z") break;
    }
    ?>
</body>

</html>