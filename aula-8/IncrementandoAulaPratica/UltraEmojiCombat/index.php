<style>
    /*Estou colocando esse CSS pois luz clara dói meu olho.*/
    html {
        background-color: rgb(50, 50, 50);
    }
</style>

<html>
<pre>
    <?php

    // Aula Prática 7 – Objetos Compostos em PHP
    // Nessa aula de POO, vamos aprender a criar Objetos Compostos utilizando vetores em PHP.
    
    require_once "Fighter/ClassFighter.php";
    require_once "Fight/ClassFight.php";
    // constructor parameters: name - nacionality - age - height - weight - wins - defeats - draw
    
    $fighter = array();
    // 0 ~ 5 Male / 6 ~ 11 Feminine
    //Boys                        name        nacionality    Genre         age    height    weight   wins defeats draw
    $fighter[0]  = new Fighter("Pretty Boy",   "France",     "male",        31,    1.75,     68.9,    11,    2,    1);
    $fighter[1]  = new Fighter("Putscript",    "Brazil",     "male",        29,    1.68,     57.8,    14,    2,    3);
    $fighter[2]  = new Fighter("Snapshadow",   "EUA",        "male",        35,    1.65,     80.9,    12,    2,    1);
    $fighter[3]  = new Fighter("Dead Code",    "Australia",  "male",        28,    1.93,     81.6,    13,    0,    2);
    $fighter[4]  = new Fighter("Ufocobol",     "Brazil",     "male",        37,    1.70,    119.3,     5,    4,    3);
    $fighter[5]  = new Fighter("Nerdaard",     "EUA",        "male",        30,    1.81,    105.7,    12,    2,    4); 

    $fighter[6]  = new Fighter("Zoe Tech",     "France",     "feminine",    29,    1.86,     87.9,     9,    2,    3); // Alterar os dados daqui pra baixo:
    $fighter[7]  = new Fighter("Mia Byte",     "Brazil",     "feminine",    25,    1.63,     57.8,    12,    4,    4);
    $fighter[8]  = new Fighter("Lena Code",    "EUA",        "feminine",    31,    1.71,     80.9,    11,    2,    2);
    $fighter[9]  = new Fighter("Amy Dev",      "Australia",  "feminine",    28,    1.77,     81.6,     8,    4,    6);
    $fighter[10] = new Fighter("Ava Tech",     "Brazil",     "feminine",    33,    1.67,     70.3,     3,    3,    2);
    $fighter[11] = new Fighter("Bit Malwere",  "EUA",        "feminine",    34,    1.78,     64.7,    13,    3,    3);

    ?>
</html></pre>