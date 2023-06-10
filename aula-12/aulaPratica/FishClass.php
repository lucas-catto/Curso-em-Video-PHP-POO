<?php
    require_once "AnimalClass.php";

    class Fish extends Animal{

        private $scaleColor;
            
        public function moveAround(){
            echo "<p>Swiming.</p>";
        }
        public function toFeed(){
            echo "<p>Eating substances.</p>";
        }
        public function makeSound(){
            echo "<p>Fish doesn't make sound.</p>";
        }
        public function dropBubble(){
            echo "<p>Dropped a bubble.</p>";
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
