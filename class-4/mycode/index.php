<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade do Curso de PHP POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once('Lanterna.php');

                $lant = new Lanterna(false, false);
                print_r ($lant);

                $lant->setCorLuz("Blue");
                print($lant->getCorLuz());

            ?>
        </pre>
    </body>
</html>