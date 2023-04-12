<?php

    require_once "Controlador.php";

    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;
    
        public function __construct(){
            $this->volume  = 50;
            $this->ligado  = false;
            $this->tocando = false;
        }
    
        private function setVolume($valor){
            $this->volume = $valor;
        }
        private function getVolume(){
            return $this->volume;
        }
    
        private function setLigado($valor){ //  = true
            $this->ligado = $valor;
        }
        private function getLigado(){
            return $this->ligado;
        }
    
        private function setTocando($valor){ //   = true
            $this->tocando = $valor;
        }
        private function getTocando(){
            return $this->tocando;
        }


        // Métodos extendidos do "Controlador.php" da "interface Controlador"
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){

            echo "<p>------ MENU ------</p>";

            if($this->getLigado()){
                $result = "Sim";
            }
            else{
                $result = "Não";
            }
            echo "<br>Está ligado? $result";
            if($this->getTocando()){
                $result = "Sim";
            }
            else{
                $result = "Não";
            }
            echo "<br>Está tocando? $result";
            echo "<br>Volume: ".$this->getVolume();
            for ($i=0; $i < $this->getVolume(); $i+=10) { 
                echo "|";
            }
            echo "<br>";
        }
        public function fecharMenu(){
            echo "<br>Fechando Menu...";
        }
        public function maisVolume(){
            if ($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }
            else{
                echo "<p>ERRO! Não posso aumentar o volume.</p>";
            }
        }
        public function menosVolume(){
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 5);
            }
            else{
                echo "<p>ERRO! Não posso diminuir o volume.</p>";
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
            if ($this->getLigado() && !($this->getTocando())){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if ($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
    }
?>