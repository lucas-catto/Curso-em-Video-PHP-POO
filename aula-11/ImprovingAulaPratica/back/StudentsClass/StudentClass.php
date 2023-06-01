<?php
    //require_once "PersonClass.php";
    require(__DIR__.'/../PersonClass.php');

    class Student extends Person{
        private $matriculation;
        private $course;

        public function payTuition(){
            echo "<p>The monthly payment of <strong>".$this->getName()."</strong> is paid!</p>";
        }

        // -------------------------------------------
        public function getMatriculation(){
            return $this->matriculation;
        }
        public function setMatriculation($matriculation){
            $this->matriculation = $matriculation;
        }
        // -------------------------------------------
        public function getCourse(){
            return $this->course;
        }
        public function setCourse($course){
            $this->course = $course;
        }
        // -------------------------------------------
    }
?>
