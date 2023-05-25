<?php
    require_once "InterfaceStudent.php";
    require_once "Person/PersonClass.php";

    class Student extends Person implements Student{
        private $registration;
        private $course;

        public function payTuition(){}

        // ----------------------------------
        // Getters and Setters
        // ----------------------------------
        public function getRegistration(){
            return $this->registration;
        }
        public function setRegistration($registration){
            $this->registration = $registration;
        }
        // ----------------------------------
        public function getCourse(){
            return $this->course;
        }
        public function setCourse($course){
            $this->course = $course;
        }
        // ----------------------------------
    }
    
?>