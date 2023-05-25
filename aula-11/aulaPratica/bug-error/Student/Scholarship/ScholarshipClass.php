<?php
    require_once "Student/StudentClass.php";
    require_once "InterfaceScholarship.php";

    class Scholarship extends Student implements Scholarship{
        private $scholarship;
        private $renewScholarship;

        public function payTuition(){}

        // ----------------------------------
        // Getters and Setters
        // ----------------------------------
        public function getScholarship(){
            return $this->scholarship;
        }
        public function setScholarship($scholarship){
            $this->scholarship = $scholarship;
        }
        // ----------------------------------
        public function getRenewScholarship(){
            return $this->renewScholarship;
        }
        public function setRenewScholarship($renewScholarship){
            $this->renewScholarship = $renewScholarship;
        }
        // ----------------------------------
    }
?>
