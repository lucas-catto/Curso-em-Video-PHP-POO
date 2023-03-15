<?php
    class Pen{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        // ----------------------------------------------
        function rabiscar() {
            if ($this->tampada == true) {
                echo "<p>I can't write</p>";
            }
            else{
                echo "<p>I'm writting</p>";
            }
        }
        // ----------------------------------------------
        function tampar() {
            $this->tampada = true;
        }
        // ----------------------------------------------
        function destampada() {
            $this->tampada = false;
        }
    }
?>
