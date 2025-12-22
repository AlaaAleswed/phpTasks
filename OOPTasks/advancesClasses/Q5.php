<?php
    class date{
        public $date1;
        public $date2;

        public function diff($date1, $date2){
            $date1= new DateTime ($date1);
            $date2= new DateTime ($date2);
            $diff=$date1->diff($date2);
            echo "difference: ". $diff->y ." years ". $diff->m ." months ". $diff->d .  " days ";
        }
    }
    $obj = new date();
    $obj->diff("1981-11-03", "2013-09-04")
?>