<?php
    interface Publication{
        private function open();
        private function close();
        private function leafThrough();
        private function advancePage();
        private function backPage();
    }
?>
