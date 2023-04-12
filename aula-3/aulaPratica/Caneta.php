<?php
    class Caneta{
        public    $modelo;
        public    $cor;
        private   $ponta;
        protected $carga;
        protected $tampada;

        // ----------------------------------------------
        public function rabiscar() {
            if ($this->tampada == true) {
                echo "<p>I can't write</p>";
            }
            else{
                echo "<p>I'm writting</p>";
            }
        }
        // ----------------------------------------------
        public function tampar() {
            $this->tampada = true;
        }
        // ----------------------------------------------
        public function destampada() {
            $this->tampada = false;
        }
    }
?>
