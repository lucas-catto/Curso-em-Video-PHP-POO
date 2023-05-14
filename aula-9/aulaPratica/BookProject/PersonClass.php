<?php
    class Person{
        private $name;
        private $age;
        private $genre;
        
        public function birthday(){}

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
