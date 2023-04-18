<?php
    require_once "Controlador.php";
    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct(){
            $this->volume  = 40;
            $this->ligado  = false;
            $this->tocando = false;
        }
        // Métodos acessores aos atributos 
        public function setVolume($valor){
            $this->volume = $valor;
        }
        public function getVolume(){
            return $this->volume;
        }
        // -----------------------------------
        public function setLigado($valor){
            $this->ligado = $valor;
        }
        public function getLigado(){
            return $this->ligado;
        }
        // -----------------------------------
        public function setTocando($valor){
            $this->tocando = $valor;
        }
        public function getTocando(){
            return $this->tocando;
        }


        // Métodos dos atributos extendidos de "Controlador.php":

        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            if($this->getLigado()){
                $lig = "Sim";
            }
            else{
                $lig = "Não";
            }
            echo "<p>Está ligado? $lig</p>";
            if($this->getTocando()){
                $toc = "Sim";
            }
            else{
                $lig = "Não";
            }
            echo "<p>Está tocando? $toc</p>";
            
            
            echo "<p>Volume ".$this->getVolume()."</p>";
            for ($i=0; $i < $this->getVolume(); $i+=10) { 
                echo "|";
            } echo "</br>";
        }
        public function fecharMenu(){
            if($this->abrirMenu()){
                echo "<p>Fechando o menu..</p>";
            }
        }
        public function maisVolume(){
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 5);
            }
            else{
                echo "<p>Não foi possível aumentar o volume..</p>";
            }
        }
        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 5);
            }
            else{
                echo "<p>Não foi possível diminuir o volume..</p>";
            }
        }
        public function ligarMudo(){}
        public function desligarMudo(){}
        public function play(){}
        public function pause(){}
        public function avancarCanal(){}
        public function voltarCanal(){}

    }
    
?>