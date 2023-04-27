<?php
    
    require_once "InterfaceControlador.php";

    class ControleRemoto implements Controlador {

        private $volume;
        private $ligado;
        private $tocando;

        // Constructor Method:
        public function __construct(){
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }
        
        // Methods from controller:
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<p><---- MENU ----></p>";
            if($this->getLigado()){
                echo "<br>Está ligado? SIM.";
            }
            else{
                echo "<br>Está ligado? NÃO.";
            }
            
            if($this->getVolume() < 0){
                echo "<br>Está tocando? SIM.";
            }
            else{
                echo "<br>Está tocando? NÃO.";
            }
            echo "</br>".$this->getVolume();
            for ($i=0; $i < $this->getVolume(); $i+= 5) { 
                echo "|";
            }
        }
        public function fecharMenu(){
            echo "</br>Fechando menu...";
        }
        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }
            else{
                echo "<p>ERRO! Não posso aumentar o volume (TV desligada).</p>";
            }
        }
        public function menosVolume(){
            if($this->getLigado()){
                $this->setLigado($this->getLigado() - 5);
            }
            else{
                echo "<p>ERRO! Não posso diminuir o volume (TV desligada).</p>";
            }
        }
        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }
        public function play(){
            if($this->getLigado() && !$this->getTocando()){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if($this->getLigado() and $this->getTocando()){
                $this->setTocando(false);
            }
        }
        
        // ------------------------------------
        // GET and SET to private $volume:
        private function getVolume(){
            return $this->volume;
        }
        private function setVolume($volume){
            $this->volume = $volume;
        }
        // ------------------------------------
        // GET and SET to private $ligado:
        private function getLigado(){
            return $this->ligado;
        }
        private function setLigado($ligado){
            $this->ligado = $ligado;
        }
        // ------------------------------------
        // GET and SET to private $tocando:
        private function getTocando(){
            return $this->tocando;
        }
        private function setTocando($tocando){
            $this->tocando = $tocando;
        }
        // ------------------------------------
    }
    
?>