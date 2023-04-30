<style>
        html{
            background: gray;
        }
    </style>
<html>
    <pre>
        <?php
            // Aplicando os conceitos da aula em um exercício paralelo
            
            require_once "ClasseComputador.php";

            $computador = new Computador;
            // ligar() - desligar() - abrirTampa() - fecharTampa()
            $computador->abrirTampa();
            $computador->ligar();
            $computador->desligar();
            $computador->fecharTampa();
        ?>
    </pre>
</html>
