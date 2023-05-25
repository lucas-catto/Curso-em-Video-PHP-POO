<?php
    require_once "Student.php";
    
    class Scholarship extends Student{

        private $scholarship;
        
        public function renewScholarship(){
            echo "Renewed Scholarship.";
        }

        public function payTuition(){
            echo "<p><strong>".$this->getName()."</strong> is a scholarship student, so he has discount in the count.</p>";
        }

        // -------------------------------------
        public function getScholarship(){
            return $this->scholarship;
        }
        public function setScholarship($scholarship){
            $this->scholarship = $scholarship;
        }
        // -------------------------------------
    }
?>
