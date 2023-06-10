<?php
    require_once "AnimalClass.php";

    class Mammal extends Animal{

        private $colorHair;

        public function moveAround(){
            echo "<p>Running.</p>";
        }
        public function toFeed(){
            echo "<p>Eating.</p>";
        }
        public function makeSound(){
            echo "<p>Sound of Mammal.</p>";
        }
        
        // -----------------------------------------------
        // Getters and Setters
        // -----------------------------------------------
        public function getColorHair(){
            return $this->colorHair;
        }
        public function setColorHair($colorHair){
            $this->colorHair = $colorHair;
        }
        // -----------------------------------------------
    }
?>
