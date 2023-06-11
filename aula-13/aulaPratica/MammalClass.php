<?php

    require_once "AnimalClass.php";

    class MammalClass extends AnimalClass{

        protected $colorHair;

        public function makeSound(){
            echo "<p>Sound of Mammal.</p>";
        }
    }
?>
