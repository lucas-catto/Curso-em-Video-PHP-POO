<?php
    class Person{
        private $name;
        private $age;
        private $genre;

        public function makeBirthday(){
            $this->age++;
        }

        // --------------------------------------
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        // --------------------------------------
        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
            $this->age = $age;
        }
        // --------------------------------------
        public function getGenre(){
            return $this->genre;
        }
        public function setGenre($genre){
            $this->genre = $genre;
        }
        // --------------------------------------

    }
?>
