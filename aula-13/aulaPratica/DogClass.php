<?php

    require_once "WolfClass.php";

    class DogClass extends WolfClass{
        
        public function makeSound(){
            echo "<p>AuAuAu.</p>";
        }

        public function reactSentence($sentence){
            if($sentence == "Food" || $sentence == "Hello"){
                echo "<p>Wagging the tail.</p>";
            }
            else{
                echo "<p>Growling.</p>";
            }
        }
        public function reactTime($hour, $minutes){
            if($hour < 12){
                echo "<p>Waggin</p>";
            }
            else if($hour >= 18){
                echo "<p>Ignore.</p>";
            }
            else{
                echo "<p>Wagging and Growling.</p>";
            }
        }
        public function reactOwner($owner){
            if($owner){
                echo "<p>Wagging the tail.</p>";
            }
            else{
                echo "<p>Wagging and Growling.</p>";
            }
        }
        public function reactAgeWeight($age, $weight){
            if($age < 5){
                if($weight < 10){
                    echo "<p>Wagging.</p>";
                }
                else{
                    echo "<p>Bark.</p>";
                }
            }
            else{
                if($weight < 10){
                    echo "<p>Growling.</p>";
                }
                else{
                    echo "<p>Ignore.</p>";
                }
            }
        }
    }
?>
