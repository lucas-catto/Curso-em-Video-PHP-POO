<?php

    require_once "MammalClass.php";

    class Dog extends Mammal{
        public function buryBone(){
            echo "<p>Burying bone.</p>";
        }
        public function wagTail(){
            echo "<p>Wagging tail.</p>";
        }
        public function makeSound(){
            echo "AuAuAu.";
        }
    }
    
?>