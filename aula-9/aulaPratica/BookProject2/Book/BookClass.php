<?php

    require_once "../PeopleClass.php";

    class Book{
        private $title;
        private $author;
        private $totalPages;
        private $presentPage;
        private $open;
        private $reader;
        
        public function details(){
            
        }

        // -------------------------------------
        public function getTitle(){
            return $this->title;
        }
        public function setTitle($title){
            $this->title = $title;
        }
        // -------------------------------------
        public function getAuthor(){
            return $this->author;
        }
        public function setAuthor($author){
            $this->author = $author;
        }
        // -------------------------------------
        public function getTotalPages(){
            return $this->totalPages;
        }
        public function setTotalPages($totalPages){
            $this->totalPages = $totalPages;
        }
        // -------------------------------------
        public function getPresentPage(){
            return $this->presentPage;
        }
        public function setPresentPage($presentPage){
            $this->presentPage = $presentPage;
        }
        // -------------------------------------
        public function getOpen(){
            return $this->open;
        }
        public function setOpen($open){
            $this->open = $open;
        }
        // -------------------------------------
        public function getReader(){
            return $this->reader;
        }
        public function setReader($reader){
            $this->reader = $reader;
        }
        // -------------------------------------

    }
?>