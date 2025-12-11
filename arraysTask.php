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
    $colors=array("red","green","white");
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
    ?>

    <h1>Question 2</h1>
    <ul>
        <li><?php  echo $colors[0]?></li>
        <li><?php  echo $colors[1]?></li>
        <li><?php  echo $colors[2]?></li>
    </ul>
    
    <h1>Question 3</h1>
    <?php
    $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
     "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
      "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
       "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

       foreach ($cities as $x => $y) {
            echo "the capital of $x is $y <br>";
        }
    ?>

    <h1>Question 4</h1>
    <?php
    $color = array (4 => 'white', 6 => 'green', 11=> 'red');
    echo $color[4];
    ?>

    <h1>Question 5</h1>
    <?php
    $arr=array(1,2,3,4,5);
    $newItem='$';
    array_splice($arr,3,0,$newItem);
    print_r($arr);
    ?>

    <h1>Question 6</h1>
    <?php
    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    asort($fruits); 
    foreach($fruits as $x => $y){
        echo "$x = $y <br>";
    }
    ?>

    <h1>Question 7</h1>
    <?php
    $temp=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $avg=0;
    for( $i= 0; $i< count($temp); $i++ ){
         $avg+=$temp[$i]/count($temp);
    }
    echo " Average Tempreture is : $avg <br>";

    sort($temp);    
    $minTemp=array_slice($temp,0,7);
    echo "List of seven lowest temperatures: ";
    foreach ($minTemp as $value) {
    echo $value . ", ";
    }
    echo"<br>";

    $temp=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    rsort($temp);    
    $maxTemp=array_slice($temp,0,7);
    echo "List of seven largest temperatures: ";
    foreach ($maxTemp as $value) {
    echo $value . ", ";
    }
    ?>

    <h1>Question 8</h1>
    <?php
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $merge=array_merge($array1, $array2);   
    print_r($merge);
    ?>

    <h1>Question 9</h1>
    <?php
    $colors = array("red","blue", "white","yellow");
    foreach ($colors as $i=>$values){
        $upper[$i]= strtoupper($values);
    }
    print_r($upper);
    ?>

    <h1>Question 10</h1>
    <?php
    $colors = array("RED","BLUE", "WHITE","YELLOW");
    foreach ($colors as $i=>$values){
        $lower[$i]= strtolower($values);
    }
    print_r($lower);
    ?>

    <h1>Question 11</h1>
    <?php
    $divisible=array();
    for ($i=200; $i < 250 ; $i++) { 
        if($i%4== 0){
            array_push($divisible,$i);
    }}
    echo implode(", ", $divisible);
    ?>

    <h1>Question 12</h1>
    <?php
    $words =  array("abcd","abc","de","hjjj","g","wer");
    $shortest=$words[0];
    $largest=$words[0];
    for ($i=0; $i < count($words)-1; $i++) { 
        if(strlen($words[$i])<strlen($words[$i+ 1])) {
           $shortest=$words[$i];
        }
        if(strlen($words[$i])>strlen($words[$i+ 1])) {
           $largestt=$words[$i];
        }
    }
    echo "The shortest array length is  $shortest <br>";
    echo "The largest array length is  $largest <br>";
    ?>

    <h1>Question 13</h1>
    <?php
    $numbers=array();
    for ($i= 0; $i < 10; $i++) {
        $numbers[]=rand(11,20);
    }
    echo implode(", ", $numbers);  
    ?>

    <h1>Question 14</h1>
    <?php
     $array1 = array(2, 0, 10, -5, 6);
     $lowestNonZero = null;
    foreach ($array1 as $num) {
        if ($num != 0) {
            if ($lowestNonZero === null || $num < $lowestNonZero) {
                $lowestNonZero = $num;
            }
        }
    }
    echo "The lowest nonZero number is $lowestNonZero";
    ?>

</body>
</html>