<?php
    class factorial{
        public $number;
        
        public function calculateFact($number){
            $fact=1;
            for($i=$number;$i>=1;$i--){
                $fact*=$i; 
            }
            echo "the factorial of $number is $fact";
        }
    }
    $factorial=new factorial();
    $factorial->calculateFact(5);


?>