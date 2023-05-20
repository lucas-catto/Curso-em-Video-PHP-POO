<?php

    require_once "PersonClass.php";

    class Teacher extends Person{
        private $specialty;
        private $salary;

        public function reciveRaise($raise){
            $this->salary += $raise;
        }

        // --------------------------------------------
        public function getSpecialty(){
            return $this->specialty;
        }
        public function setSpecialty($specialty){
            $this->specialty = $specialty;
        }
        // --------------------------------------------
        public function getSalary(){
            return $this->salary;
        }
        public function setSalary($salary){
            $this->salary = $salary;
        }
        // --------------------------------------------
    }
?>
