<?php
    // Aula Prática 3 – Configurando Visibilidade de Atributos e Métodos
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 03b</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';
                $caneta = new Caneta;
                
                $caneta->modelo  = "Bic cristal";
                $caneta->cor     = "Azul";
                //$caneta->ponta   = 0.5;
                //$caneta->carga   = 99;
                //$caneta->tampada = true;

                $caneta->rabiscar();
                //$caneta->tampar();
                $caneta->destampada();

                
                print_r($caneta);

               
            ?>
        </pre>
    </body>
</html>