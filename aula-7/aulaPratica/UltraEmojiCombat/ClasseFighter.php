<?php

    require_once "InterfaceFighter.php";

    class Fighter implements FighterInterface{
        
        // Attribute:
        private $name;
        private $nacionality;
        private $age;
        private $height;
        private $weight;
        private $category;
        private $wins;
        private $defeats;
        private $draw;

        // Construct
        public function __construct($name,$nacionality,$age,$height,$weight,$wins,$defeats,$draw){
            $this->setWeight($weight);
            $this->name        = $name;
            $this->nacionality = $nacionality;
            $this->age         = $age;
            $this->height      = $height;
            $this->getCategory();
            $this->wins        = $wins;
            $this->defeats     = $defeats;
            $this->draw        = $draw;
        }

        public function toPresent(){
            echo "<p>----------------------------------</p>";
            echo         "Fighter:     " . $this->getName();
            echo "</br>"."Nacionality: " . $this->getNacionality();
            echo "</br>"."Age:         " . $this->getAge();
            echo "</br>"."Height:      " . $this->getHeight();
            echo "</br>"."Weight:      " . $this->getWeight();
            echo "</br>"."Wins:        " . $this->getWins();
            echo "</br>"."Defeats:     " . $this->getDefeats();
            echo "</br>"."Draw:        " . $this->getDraw();
            echo "<p>----------------------------------</p>";
        }
        public function status(){
            echo "<p>----------------------------------</p>";
            echo "Name: "            . $this->getName();
            echo "</br>"."Category: " . $this->getCategory();
            echo "</br>"."Wins:     " . $this->getWins();
            echo "</br>"."Defeats:  " . $this->getDefeats();
            echo "</br>"."Draws:    " . $this->getDraw();
            echo "</br>"."<p>----------------------------------</p>";
        }
        public function winFight(){
            $this->setWins($this->getWins() + 1);
        }
        public function loseFight(){
            $this->setDefeats($this->getDefeats() + 1);
        }
        public function drawFight(){
            $this->setDraw($this->getDraw() + 1);
        }


        // Getters and Setters
        private function getName(){
            return $this->name;
        }
        private function setName($name){
            $this->name = $name;
        }
        // ---------------------------------------------
        private function getNacionality(){
            return $this->nacionality;
        }
        private function setNacionality($nacionality){
            $this->nacionality = $nacionality;
        }
        // ---------------------------------------------
        private function getAge(){
            return $this->age;
        }
        private function setAge($age){
            $this->age = $age;
        }
        // ---------------------------------------------
        private function getHeight(){
            return $this->height;
        }
        private function setHeight($height){
            $this->height = $height;
        }
        // ---------------------------------------------
        private function getWeight(){
            return $this->weight;
        }
        private function setWeight($weight){
            $this->weight = $weight;
            $this->setCategory();
        }
        // ---------------------------------------------
        private function getCategory(){
            return $this->category;
        }
        private function setCategory(){

            if($this->weight < 52.2){
                $this->category = "Invalid!";
            }
            elseif ($this->weight <= 70.3) {
                $this->category = "Light!";
            }
            elseif ($this->weight <= 83.9) {
                $this->category = "Average!";
            }
            elseif ($this->weight <= 120.2) {
                $this->category = "Heavy!";
            }
            else{
                $this->category = "Invalid!";
            }
        }
        // ---------------------------------------------
        private function getWins(){
            return $this->wins;
        }
        private function setWins($wins){
            $this->wins = $wins;
        }
        // ---------------------------------------------
        private function getDefeats(){
            return $this->defeats;
        }
        private function setDefeats($defeats){
            $this->defeats = $defeats;
        }
        // ---------------------------------------------
        private function getDraw(){
            return $this->draw;
        }
        private function setDraw($draw){
            $this->draw = $draw;
        }
        // ---------------------------------------------
    }
?>
