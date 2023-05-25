<?php
    require_once "Person/PersonClass.php";
    require_once "InterfaceTeacher.php";

    class Teacher extends Person implements Teacher{
        private $specialty;
        private $salary;

        public function reciveRaise(){}

        // ----------------------------------
        // Getters and Setters
        // ----------------------------------
        public function getSpecialty(){
            return $this->specialty;
        }
        public function setSpecialty($specialty){
            $this->specialty = $specialty;
        }
        // ----------------------------------
        public function getSalary(){
            return $this->salary;
        }
        public function setSalary($salary){
            $this->salary = $salary;
        }
        // ----------------------------------
    }  
?>
