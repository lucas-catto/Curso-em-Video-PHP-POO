<?php
    require_once "Person.php";

    class Student extends Person{

        private $registration;
        private $course;

        public function payTuition(){ // final
            echo "<p>Paying tuition to student <strong>".$this->getName()."</strong></p>";
        }

        // -------------------------------------
        public function getRegistration(){
            return $this->registration;
        }
        public function setRegistration($registration){
            $this->registration = $registration;
        }
        // -------------------------------------
        public function getCourse(){
            return $this->course;
        }
        public function setCourse($course){
            $this->course = $course;
        }
        // -------------------------------------
    }
?>
