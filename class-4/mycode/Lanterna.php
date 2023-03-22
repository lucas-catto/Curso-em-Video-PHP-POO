<?php

    class Lanterna {
        private $luz;
        private $cabo;

        private $corLuz;
        private $corLanterna;

        public function __construct($luz, $cabo){
            // --------------------------------------            
            if ($luz == false) {
                $this->luz = "Luz apagada.";
            } 
            else {
                $this->luz = "Luz acesa.";
            }
            // --------------------------------------           
            if($cabo == false){
                $this->cabo = "Cabo enrolado.";
            }
            else{
                $this->cabo = "Cabo desenrolado.";
            }
            // --------------------------------------
        }

        // (apenas) altera o valor
        public function setCorLuz($luz){
            $this->corLuz = $luz;
        }
        // (apenas) exibe o valor
        public function getCorLuz(){
            return $this->corLuz;
        }
        // ------------------------------------------
        
    }
    

?>