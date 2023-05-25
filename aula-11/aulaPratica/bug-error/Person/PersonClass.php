<?php
    require_once "InterfacePerson.php";

    abstract class Person implements Person{
        private $name;
        private $age;
        private $genre;

        public final function makeBirthday(){
            $this->age++;
        }

        // ----------------------------------
        // Getters and Setters
        // ----------------------------------
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        // ----------------------------------
        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
            $this->age = $age;
        }
        // ----------------------------------
        public function getGenre(){
            return $this->age;
        }
        public function setGenre($genre){
            $this->genre = $genre;
        }
        // ----------------------------------
    }
?>
