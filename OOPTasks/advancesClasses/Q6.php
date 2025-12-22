<?php
    class stingToDate{
        public $str;

        public function convert($str){
            $date = DateTime::createFromFormat('d-m-Y', $str);
            echo $date->format('Y-m-d');
        }

    }
    $convert = new stingToDate();
    $convert->convert('12-08-2004');

?>