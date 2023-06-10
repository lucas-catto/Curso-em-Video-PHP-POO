<?php

    require_once "AnimalClass.php";

    class Reptilian extends Animal{

        private $scaleColor;
        
        public function moveAround(){
            echo "<p>Crawling.</p>";
        }
        
        public function toFeed(){
            echo "<p>Eating vegetables.</p>";
        }

        public function makeSound(){
            echo "<p>Sound of reptilian.</p>";
        }
    
        // -----------------------------------------------
        // Getters and Setters
        // -----------------------------------------------
        public function getScaleColor(){
            return $this->scaleColor;
        }
        public function setScaleColor($scaleColor){
            $this->scaleColor = $scaleColor;
        }
        // -----------------------------------------------
    }    
?>
