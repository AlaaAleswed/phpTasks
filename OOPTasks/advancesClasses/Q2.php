<?php
    class message{
        public $name;

        public function __construct($name){
            $this ->name = $name;
            echo "Hello All, Iam $name ";
        }
    }

    $user = new message("scott");
?>