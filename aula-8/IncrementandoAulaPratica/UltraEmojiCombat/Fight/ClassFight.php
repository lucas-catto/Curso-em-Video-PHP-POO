<?php
require_once "InterfaceFight.php";
require_once "Fighter/ClassFighter.php";

class Fight implements FightInterface{

    private $challenged;
    private $challenger;
    private $rounds;
    private $approved;

    public function makeFight($fighter1, $fighter2){
        if ($fighter1->getCategory() === $fighter2->getCategory() && ($fighter1 != $fighter2) && ($fighter1->getGenre() == $fighter2->getGenre())){
            $this->setApproved(true);
            $this->setChallenged($fighter1);
            $this->setChallenger($fighter2);
        } 
        else{
            $this->setApproved(false);
            $this->setChallenged(null);
            $this->setChallenger(null);
        }

    }
    public function fight(){
        if ($this->getApproved()){
            $this->getChallenged()->toPresent();
            $this->getChallenger()->toPresent();

            $winner = rand(0,2);

            switch ($winner){
                case $winner == 0:
                    echo "<p>Draw!</p>";
                    $this->challenged->setDraw();
                    $this->challenger->setDraw();
                    break;
                case $winner == 1:
                    echo "<p>" . $this->getChallenged()->getName() . " won!</p>";
                    $this->challenged->winFight();
                    $this->challenger->loseFight();
                    break;
                case $winner == 2:
                    echo "<p>" . $this->getChallenger()->getName() . " won!</p>";
                    $this->challenger->winFight();
                    $this->challenged->loseFight();
                    break;
                default:
                    echo "The program is broken!";
                    break;
            }
        } else {
            echo "<p>The fight cannot happen!</p>";
        }
    }


    // --------------------------------------------------
    // Getter and Setter
    // --------------------------------------------------
    private function getChallenged(){
        return $this->challenged;
    }
    private function setChallenged($challenged){
        $this->challenged = $challenged;
    }
    // --------------------------------------------------
    private function getChallenger(){
        return $this->challenger;
    }
    private function setChallenger($challenger){
        $this->challenger = $challenger;
    }
    // --------------------------------------------------
    private function getRounds(){
        return $this->rounds;
    }
    private function setRounds($rounds){
        $this->rounds = $rounds;
    }
    // --------------------------------------------------
    private function getApproved(){
        return $this->approved;
    }
    private function setApproved($approved){
        $this->approved = $approved;
    }
// --------------------------------------------------
}
?>