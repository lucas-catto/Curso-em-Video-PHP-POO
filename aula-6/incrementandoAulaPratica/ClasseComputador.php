<?php
    
    /*require_once "InterfaceComputador.php";

    class Computador implements Notebook {

        public $ligado;
        public $tampaAberta;

        public function __construct(){
            $this->setLigado(false);
            $this->setTampaAberta(false);
        }

        public function ligar(){
            if(!$this->getTampaAberta()){
                $this->setLigado(false);
                echo "Não é possível ligar com a tampa fechada.";
            }
            else{
                $this->setTampaAberta(true);
                $this->setLigado(true);
            }
        }
        public function desligar(){
            if($this->getLigado() == true){
                $this->setLigado(false);
                echo "Está ligado? Desligando..";
            }
            else{
                echo "Está ligado? Não";
            }
        }
        public function abrirTampa(){}
        public function fecharTampa(){
            if ($this->getLigado() == true){
                $this->setLigado(false);
                $this->setTampaAberta(false);
            }
            else{
                $this->setTampaAberta(false);
            }
        }

        // ==============================================

        // GET and SETTER to $ligado
        private function getLigado(){
            return $this->ligado;
        }
        private function setLigado($estado){
            $this->ligado = $estado;
        }

        // GET and SETTER to $tampa
        private function getTampaAberta(){
            return $this->tampaAberta;
        }
        private function setTampaAberta($tampa){
            $this->tampaAberta = $tampa;
        }
    }*/

    // ==============================================================================
    // Reescrevendo o código
    
    require_once "InterfaceComputador.php";

    class Computador implements ComputadorInterface{

        private $ligado;
        private $tampa;

        public function ligar(){
            /*As condiçãoes serão:
                - Se a tampa estiver fechada não liga
            */
            if ($this->getTampa()) {
                $this->setLigado(true);
                echo "<br><p>Iniciando o computador..</p>";
            }
            else{
                $this->setLigado(false);
                echo "<br><p>A tampa esta fechada.</p>";
            }
        }
        public function desligar(){
            /*As condiçãoes serão:
                - Tem que estar com a tampa aberta
                - O computador tem que estar ligado
            */
            if($this->getLigado()){
                $this->setLigado(false);
                echo "<br><p>Desligando o computador.</p>";
            }
            else{
                $this->setLigado(false);
                echo "<br><p>O computador já está desligado.</p>";
            }
        }
        public function abrirTampa(){
            /*As condiçãoes serão:
                - A tampa tem que estar fechada
                - O computador deligado
            */
            if ($this->getLigado() == false) {
                $this->setTampa(true);
                echo "<br><p>Abrindo a tampa..</p>";
            }
            else{
                if ($this->getTampa()) {
                    echo "<br><p>A tampa já está aberta.</p>";
                }
                if ($this->getLigado()) {
                    echo "<br><p>O computador já está ligado.</p>";
                }
                
                
            }
        }
        public function fecharTampa(){
            /*As condiçãoes serão:
                - A tampa tem que estar aberta
                - O computador tem que estar desligado
            */
            if($this->getTampa() and $this->getLigado() == false){
                echo "<br><p>Fechando a tampa.</p>";
                $this->setTampa(false);
            }
            else{
                if($this->getLigado()){
                    echo "<br><p>Deligue o computador antes.</p>";
                }
                if ($this->getTampa() == false) {
                    echo "<br><p>A tampa já esta fechada.</p>";
                }
            }
        }
        //----------------------------------------------------------
        //----------------------------------------------------------
        // GETTER and SETTER
        
        private function getLigado(){
            return $this->ligado;
        }
        private function setLigado($ligadoVar){
            $this->ligado = $ligadoVar;
        }
        private function getTampa(){
            return$this->tampa;
        }
        private function setTampa($tampaVar){
            $this->tampa = $tampaVar;
        }

    }
    
?>