<?php
    class Caneta{
        public    $modelo; //  = 'caractere';
        public    $cor; //     = 'caractere';
        private   $ponta; //   = 'real';
        protected $carga; //   = 'inteiro';
        protected $tampada; // = 'lógico';

        public  function escrever(){}
        public  function rabiscar(){}
        public  function pintar(){}
        private function tampar(){}
        private function destampar(){}
    }

    $caneta1 = new Caneta;
    
    $caneta1->modelo = 'Bic Cristal';
    echo $caneta1->modelo;

    $caneta1->ponta = 0.5;
    echo $caneta1->ponta;
?>