<?php
    // ---------------------------------------
    require_once "ClassVideo.php";
    require_once "ClassGafanhoto.php";
    // ---------------------------------------

    class Visualization{
        // ---------------------------------------
        private $viwer;
        private $movie;
        // ---------------------------------------
        public function __construct($viwer, $movie){
            $this->setViwer($viwer);
            $this->setMovie($movie);
            // ---------------------------------------
            $this->movie->setViews($this->movie->getViews() + 1);
            $this->viwer->setTotalWatched($this->viwer->getTotalWatched() + 1);
            // ---------------------------------------
        }
        // ---------------------------------------
        public function toAssess(){
            $this->movie->setAssessment(5);
        }
        public function toAssessNote($note){
            $this->movie->setAssessment($note);
        }
        public function toAssessPorcentage($porcentage){
            $note = 0;
            if($porcentage <= 20){
                $note = 3;
            }
            else if($porcentage <= 50){
                $note = 5;
            }
            else if($porcentage <= 90){
                $note = 8;
            }
            else{
                $note = 10;
            }
            $this->movie->setAssessment($note);
        }
        // ---------------------------------------
        public function getViwer(){
            return $this->viwer;
        }
        public function setViwer($viwer){
            $this->viwer = $viwer;
        }
        // ---------------------------------------
        public function getMovie(){
            return $this->movie;
        }
        public function setMovie($movie){
            $this->movie = $movie;
        }
        // ---------------------------------------
    }
?>