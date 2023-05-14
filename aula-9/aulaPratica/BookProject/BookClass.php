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
        public function open(){}
        public function close(){}
        public function leafThrough(){}
        public function advancePage(){}
        public function backPage(){}

    }
?>
