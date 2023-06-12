
<?php

    require_once "ClassPerson.php";

    class Gafanhoto extends Person{
        // -------------------------------------
        private $login;
        private $totalWatched;
        // -------------------------------------
        public function __construct($name, $age, $genre, $login){

            parent::__construct($name,$age,$genre); // Chamada do construtor da superclasse

            $this->setLogin($login);
            $this->setTotalWatched(0);

        }
        // -------------------------------------
        public function watchOneMore(){
            $this->setTotalWatched($this->getTotalWatched() +1);
        }
        // -------------------------------------
        // -------- Getters and Setters --------
        // -------------------------------------
        public function getLogin(){
            return $this->login;
        }
        public function setLogin($login){
            $this->login = $login;
        }
        // -------------------------------------
        public function getTotalWatched(){
            return $this->totalWatched;
        }
        public function setTotalWatched($totalWatched){
            $this->totalWatched = $totalWatched;
        }
        // -------------------------------------
    }
?>
