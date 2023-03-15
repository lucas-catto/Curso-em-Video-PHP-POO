<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            require_once 'Computer.php';
            require_once 'Picture.php';

            $comp = new Computer;
            $comp->ligado = true;
            $comp->ligado();

            echo "<br>";

            $pic = new Picture;
            $pic->clear = false; //clean
            $pic->Clear();
        ?>
    </body>
</html>