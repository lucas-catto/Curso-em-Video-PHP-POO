
<?php
    abstract class Person{
        // -------------------------------------
        protected $name;
        protected $age;
        protected $genre;
        protected $experience;
        // -------------------------------------
        public function __construct($name, $age, $genre){
            $this->setName($name);
            $this->setAge($age);
            $this->setGenre($genre);
            $this->setExperience(0);
        }
        // -------------------------------------
        protected function earnExperience($amount){
            $this->setExperience($this->getExperience() + $amount);
        }
        // -------------------------------------
        // -------- Getters and Setters --------
        // -------------------------------------
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        // -------------------------------------
        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
            $this->age = $age;
        }
        // -------------------------------------
        public function getGenre(){
            return $this->genre;
        }
        public function setGenre($genre){
            $this->genre = $genre;
        }
        // -------------------------------------
        public function getExperience(){
            return $this->experience;
        }
        public function setExperience($experience){
            $this->experience = $experience;
        }
        // -------------------------------------
    }
?>
