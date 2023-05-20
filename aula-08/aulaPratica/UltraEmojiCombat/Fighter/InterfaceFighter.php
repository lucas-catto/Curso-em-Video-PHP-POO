<?php
    interface FighterInterface{
        public function toPresent();
        public function status();
        public function winFight();
        public function loseFight();
        public function drawFight();
    }
?>