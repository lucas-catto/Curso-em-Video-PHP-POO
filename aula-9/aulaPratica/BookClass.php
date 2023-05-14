<?php

    require_once "BookInterface.php";

    class Book implements Publication{
        private $title;
        private $author;
        private $totalPages;
        private $presentPage;
        private $open;
        private $reader;

        public function details(){}

        // ===================================
        public function open(){}
        public function close(){}
        public function leafThrough(){}
        public function advancePage(){}
        public function backPage(){}

    }
?>
