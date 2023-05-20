<?php
    class Picture{
        var $clear;

        function Clear(){
            if($this->clear == false){
                echo "You need to clear the picture!";
            }
            else{
                echo "The picture is clean!";
            }
        }
    }
?>