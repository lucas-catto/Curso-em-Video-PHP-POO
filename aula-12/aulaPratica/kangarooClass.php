<?php

    require_once "MammalClass.php";

    class kangaroo extends Mammal{
        public function useBag(){
            echo "<p>Using bag.</p>";
        }
        public function moveAround(){
            echo "<p>Jumping.</p>";
        }
    }
?>
