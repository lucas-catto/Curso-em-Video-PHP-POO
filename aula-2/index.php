<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 02b</title>
    </head>
    <body>
        <?php
            require_once 'Pen.php';

            $pen = new Pen;          
            $pen->cor     = "Blue";
            $pen->ponta   = 0.5;
            $pen->tampar();
            print_r($pen);

            echo '<br>';

            $pen2 = new Pen;
            $pen2->cor   = "Verde";
            $pen2->carga = 50;
            $pen2->tampar();
            print_r($pen2);
        ?>
    </body>
</html>