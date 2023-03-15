<?php
    class Computer{
        //estados
        var $ligado;


        // ------------------------------------------------

        //ações
        function ligado(Type $var = null){

            if($this->ligado == true){
                echo "The computer is working!";
            }
            else{
                echo "The computer is sleeping!";
            }
        }
    }
?>