<?php
    class sort{
        public  $arr=array("");

        public function sorting (array $arr){
            sort($arr);
            print_r($arr);
    }
    }
    $arr=new sort;
    $arr->sorting([11, -2, 4, 35, 0, 8, -9]);
?>