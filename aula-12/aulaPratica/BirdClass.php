<?php

    require_once "AnimalClass.php";

    class Bird extends Animal{

        private $feather;

        public function moveAround(){
            echo "<p>Flying.</p>";
        }
        public function toFeed(){
            echo "<p>Eating fruits.</p>";
        }
        public function makeSound(){
            echo "<p>Sound of a bird.</p>";
        }
        public function buildNest(){
            echo "<p>Building a nest.</p>";
        }

        // -----------------------------------------------
        // Getters and Setters
        // -----------------------------------------------
        public function getFeather(){
            return $this->feather;
        }
        public function setFeather($feather){
            $this->feather = $feather;
        }
        // -----------------------------------------------
    }
?>
