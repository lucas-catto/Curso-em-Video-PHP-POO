<?php

    require_once "InterfaceLutador.php";

    class Lutador implements InterfaceLutador{

        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function apresentar(){}
        public function status(){}
        public function ganharLuta(){}
        public function perderLuta(){}
        public function empatarLuta(){}


        // Getters and Setters
        private function getNome(){
            return $this->nome;
        }
        private function setNome($nome){
            $this->nome = $nome;
        }
        private function getNacionalidade(){
            return $this->nacionalidade;
        }
        private function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        private function getIdade(){
            return $this->idade;
        }
        private function setIdade($idade){
            $this->idade = $idade;
        }
        private function getAltura(){
            return $this->altura;
        }
        private function setAltura($altura){
            $this->altura = $altura;
        }
        private function getPeso(){
            return $this->peso;
        }
        private function setPeso($peso){
            $this->peso = $peso;
        }
        private function getCategoria(){
            return $this->categoria;
        }
        private function setCategoria($categoria){
            $this->categoria = $categoria;
        }
        private function getVitorias(){
            return $this->vitorias;
        }
        private function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }
        private function getDerrotas(){
            return $this->derrotas;
        }
        private function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }
        private function getEmpates(){
            return $this->empates;
        }
        private function setEmpates($empates){
            $this->empates = $empates;
        }
    }
?>