<?php
    require('StudentClass.php');

    class Scholarship extends Student{
        private $scholarship;
        private $renewScholarship;

        public function payTuition(){
            echo "<p>The monthly payment of <strong>".$this->getName()."</strong> is paid!</p>";
        }

        // -------------------------------------------
        public function getScholarship(){
            return $this->scholarship;
        }
        public function setScholarship($scholarship){
            $this->scholarship = $scholarship;
        }
        // -------------------------------------------
        public function getRenewScholarship(){
            return $this->renewScholarship();
        }
        public function setRenewScholarship($renewScholarship){
            $this->renewScholarship = $renewScholarship;
        }
        // -------------------------------------------
    }
?>
