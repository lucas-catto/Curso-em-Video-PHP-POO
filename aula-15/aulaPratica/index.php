
<style>html{background-color:gray;}</style>

<html>
    <pre>
        <?php
            // Aula Prática 15 – Projeto Final em PHP (Parte 2)
            // Nessa aula de POO, vamos aplicar o modelo de agregação em Classes utilizando linguagem PHP. Um exercício prático e completamente feito em Programação Orientada a Objetos.

            // -------------------------------------
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            // -------------------------------------

            require_once "ClassVideo.php";

            $video = array();

            $video[0] = new Video("Aula 1 de POO");
            $video[1] = new Video("Aula 2 de POO");
            $video[2] = new Video("Aula 3 de POO");

            //print_r($video);

            // -------------------------------------

            require_once "ClassGafanhoto.php";

            $gafanhoto = array();

            $gafanhoto[0] = new Gafanhoto("Lucas Catto", 16, "Masc", 111);
            $gafanhoto[1] = new Gafanhoto("Elon Musk",   51, "Masc", 222);
            $gafanhoto[2] = new Gafanhoto("Steve Jobs",  56, "Masc", 333);

            //print_r($gafanhoto);

            // -------------------------------------

            require_once "ClassVisualization.php";

            $visualization = array();

            $visualization[0] = new Visualization($gafanhoto[0], $video[2]);
            $visualization[1] = new Visualization($gafanhoto[0], $video[1]);

            $visualization[0]->toAssess();
            $visualization[0]->toAssessPorcentage(85);

            print_r($visualization);
        ?>
    </pre>
</html>
