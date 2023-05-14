<?php

    require_once "BookInterface.php";
    require_once "PersonClass.php";

    class Book implements Publication{
        private $title;
        private $author;
        private $totalPages;
        private $presentPage;
        private $open;
        private $reader;

        public function details(){}

        function __construct($title,$author,$totalPages,$reader){
            $this->title      = $title;
            $this->author     = $author;
            $this->totalPages = $totalPages;
            $this->reader     = $reader;
        }

        // ===================================
        public function open(){
            $this->open = true;
        }
        public function close(){
            $this->open = false;
        }
        public function leafThrough($page){
            if($page > $this->totalPages){ // if the total of page '$page' is bigger than the '$this->totalPages' (total of pages)
                $this->presentPage = 0;
            }
            else{
                $this->presentPage = $page;
            }
        }
        public function advancePage(){
            if($this->presentPage < $this->totalPages){
                $this->presentPage ++;
            }
            else{
                echo "This is already the last page!". $this->presentPage;
            }
        }
        public function backPage(){
            if($this->presentPage > 0){
                $this->presentPage --;
            }
            else{
                echo "The page is already 0!";
            }
        }

    }
?>
