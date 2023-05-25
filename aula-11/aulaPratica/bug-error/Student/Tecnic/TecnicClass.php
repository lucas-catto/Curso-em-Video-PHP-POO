<?php
    require_once "Student/StudentClass.php";
    require_once "InterfaceTecninc.php";

    class Tecnic extends Student implements Tecninc{
        private $professionalRecord;

        public function toPractice(){}

        // ----------------------------------
        // Getters and Setters
        // ----------------------------------
        public function getProfessionalRecord(){
            return $this->professionalRecord;
        }
        public function setProfessionalRecord($professionalRecord){
            $this->professionalRecord = $professionalRecord;
        }
        // ----------------------------------
    }
?>
