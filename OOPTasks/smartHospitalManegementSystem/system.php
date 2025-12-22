<?php
    abstract class staff{
        public $name;
        protected $id;
        private $salary;

        public function __construct($name, $id, $salary){
            $this-> name=$name;
            $this-> id=$id;
            $this -> salary =$salary;
        }
        public function __destruct(){
            echo "staff member ". $this->name . " record closed". "<br>";
        }
        public function setSalary($salary){
            $this-> salary=$salary;
        }
        public function getSalary(){
            return $this-> salary;
        }

        abstract public function performDuty();

        public function getTaxedSalary(){
            return $this->salary*0.9;
        }
    }
    interface surgonInterface{
        public function performSurgory();
    }

    interface emergencyInterface{
        public function handleEmergency();
    }

    class doctor extends staff implements surgonInterface{
        public $speciality;

        public function __construct($name, $id, $salary, $speciality){
            parent::__construct($name,$id,$salary);
            $this-> speciality=$speciality;
        }
        public function performDuty(){
            return "doctor: ". $this->name . ", ID: ". $this->id . ", salary: ". $this->getSalary(). ", specialist in: ".$this->speciality . " departement";
        }

        public function performSurgory(){
            return 'performSurgery';
        }
    }

    class nurse extends staff implements emergencyInterface{
        public $shiftTime;

        public function __construct($name, $id, $salary, $shiftTime){
            parent::__construct($name,$id,$salary);
            $this-> shiftTime=$shiftTime;
        }
        public function performDuty(){
            return "nurse: ". $this->name . ", ID: ". $this->id . ", salary: ". $this->getSalary(). ", shift time in: ".$this->shiftTime ;
        }
        public function handleEmergency(){
            return 'handleEmergency';
        }
    }

    

    class hospitalManegaer{
        public function checkWorker(staff $staffMember){
            return $staffMember->performDuty();
        }
    }

    
    $doc = new doctor("ali", 1, 1000, "ophthalmology");

    // $doctor->salary = 5000; -->error
    $doc->setSalary(5000); // -->correct

    $nurse = new Nurse("Maha", 2, 2000, "night");

    $manager = new hospitalManegaer();

    echo $manager->checkWorker($doc) . "<br>";
    echo $manager->checkWorker($nurse) . "<br>";

    








?>