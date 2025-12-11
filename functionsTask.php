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
    function isPrime($num){
        if ($num>1 && $num%1==0){
            for ($i= 2; $i<$num; $i++){
                if ($num %$i == 0){
                    echo "$num is NOT a prime number";
                    break;
                }
            }
         echo"$num is a prime number";
        } 
        else echo "the number should be greater than 1";
    }
    isPrime(5);
    ?>

    <h1>Question 2</h1>
    <?php
    function reverse($str){
        $rev="";
        for($i=strlen($str)-1;$i>=0;$i--){
            $rev.=$str[$i];
        }
        return $rev;    
    }
    echo reverse("remove");
    ?>

    <h1>Question 3</h1>
    <?php
    function isLower($str){
        for($i=0;$i<strlen($str);$i++) {
            if (ord($str[$i])<97 || ord($str[$i])>122){
                 echo "your sting is not lowercase";
                return;
            }
        }
            echo "your string is lowercase";
    }
    isLower("remOve");
    ?>
    
    <h1>Question 4</h1>
    <?php
    function swap($num1,$num2){
         $temp=$num1;
         $num1=$num2;
         $num2=$temp;
        echo $num1 .",". $num2;
    }
    swap(1,2)
    ?>

    <h1>Question 5</h1>
    <?php
    function isArmstrong ($num){
        $str=(string)$num;
        for($i=0;$i<strlen($str);$i++){
            $arm+=pow($str[$i],3);
        }
        $arm=(int) $arm;
        if ($arm==$num){
            echo $num . " is Armstrong";
        }
        else
            echo $num . " is not Armstrong"; 
    }
    isArmstrong(407);
    ?>

    <h1>Question 6</h1>
    <?php
    function isPalindrome($str){
        $strNoSpaces=strtolower(str_replace(" ","",$str));
        $str_clean = preg_replace("/[^a-zA-Z]/", "", $strNoSpaces);
        for($i=strlen($str_clean)-1;$i>=0;$i--){
            $rev.=$str_clean[$i];
        }
        if ($str_clean==$rev){
            echo "Yes it is a palindrome ";
        }
        else echo "It is not palindome";
    }
    isPalindrome("Eva, can I see bees in a cave");
    ?>

    <h1>Question 7</h1>
    <?php
    function removeDuplicates(array $arr){
        $newArr=array();
        foreach($arr as $val){
            if(!in_array($val, $newArr)){
                $newArr[]=$val;
            }
        }
        return $newArr;
    } 
    print_r(removeDuplicates(array(2, 4, 7, 4, 8, 4)))
    ?>
    
</body>
</html>