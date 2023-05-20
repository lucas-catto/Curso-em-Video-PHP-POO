<style>
    /*Estou colocando esse CSS pois luz clara dói meu olho.*/ 
    html{
        background-color: rgb(150,150,150);
    }
</style>

<html><pre>
    <?php

        // Aula Prática 7 – Objetos Compostos em PHP
        // Nessa aula de POO, vamos aprender a criar Objetos Compostos utilizando vetores em PHP.

        require_once "Fighter/ClassFighter.php";
        require_once "Fight/ClassFight.php";
        // constructor parameters: name - nacionality - age - height - weight - wins - defeats - draw

        $fighter = array();
        //                          name-------nacionality---age-height----weight-wins-defeats-draw
        $fighter[0] = new Fighter("Pretty Boy",  "France",    31,   1.75,   68.9,    11,   2,   1);
        $fighter[1] = new Fighter("Putscript",   "Brazil",    29,   1.68,   57.8,    14,   2,   3);
        $fighter[2] = new Fighter("Snapshadow",  "EUA",       35,   1.65,   80.9,    12,   2,   1);
        $fighter[3] = new Fighter("Dead Code",   "Australia", 28,   1.93,   81.6,    13,   0,   2);
        $fighter[4] = new Fighter("Ufocobol",    "Brazil",    37,   1.70,   119.3,   5,    4,   3);
        $fighter[5] = new Fighter("Nerdaard",    "EUA",       30,   1.81,   105.7,   12,   2,   4);

        $UEC01 = new Fight();
        $UEC01->makeFight($fighter[4], $fighter[5]);
        $UEC01->fight();

        // $fighter[0]->status();
        // $fighter[1]->status();
    ?>
</html></pre>
