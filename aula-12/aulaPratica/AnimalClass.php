<?php
    abstract class Animal{
        
        protected $weight;
        protected $age;
        protected $bodyMembers;

        public abstract function moveAround();
        public abstract function toFeed();
        public abstract function makeSound();

        // -----------------------------------------------
        // Getters and Setters
        // -----------------------------------------------
        public function getWeight(){
            return $this->weight;
        }
        public function setWeight($weight){
            $this->weight = $weight;
        }
        // -----------------------------------------------
        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
            $this->age = $age;
        }
        // -----------------------------------------------
        public function getBodyMembers(){
            return $this->bodyMembers;
        }
        public function setBodyMembers($bodyMembers){
            $this->bodyMembers = $bodyMembers;
        }
        // -----------------------------------------------
    }
?>
