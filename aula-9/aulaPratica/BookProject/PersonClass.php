<?php
    class Person{
        private $name;
        private $age;
        private $genre;
        
        public function birthday(){
            $this->setAge($this->getAge() + 1);
        }

        function __construct($name,$age,$genre){
            $this->name  = $name;
            $this->age   = $age;
            $this->genre = $genre;
        }

        // ==================================
        private function getName(){
            return $this->name;
        }
        private function setName($name){
            $this->name = $name;
        }
        // ----------------------------------
        private function getAge(){
            return $this->age;
        }
        private function setAge($age){
            $this->age = $age;
        }
        // ----------------------------------
        private function getGenre(){
            return $this->genre;
        }
        private function setGenre($genre){
            $this->genre = $genre;
        }
        // ----------------------------------
        
    }
    
?>
