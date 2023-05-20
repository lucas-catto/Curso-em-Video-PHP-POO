<?php

    require_once "PersonClass.php";

    class Student extends Person{
        private $course;
        private $registration;

        public function cancelReagistration(){
            echo "<p>The registration will be cancel!</p>";
        }
        
        // -----------------------------------------------------
        public function getCourse(){
            return $this->course;
        }
        public function setCourse($course){
            $this->course = $course;
        }
        // -----------------------------------------------------
        public function getRegistration(){
            return $this->registration;
        }
        public function setRegistration($registration){
            $this->registration = $registration;
        }
        // -----------------------------------------------------
    }
?>
