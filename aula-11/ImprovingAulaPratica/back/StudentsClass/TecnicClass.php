<?php
    require_once 'StudentClass.php';

    class Tecnic extends Student{
        private $professionalRegister;
        // -------------------------------------------
        public function getProfessionalRegister(){
            return $this->professionalRegister;
        }
        public function setProfessionalRegister($professionalRegister){
            $this->professionalRegister = $professionalRegister;
        }
        // -------------------------------------------
    }
?>
