
<style>html{background-color:gray;}</style>

<html>
    <pre>
        <?php
            // Aula Prática 14 – Projeto Final em PHP (Parte 1)
            // Nessa aula de POO, vamos iniciar a construção de um exemplo completo de um modelo 100% construído em Programação Orientada a Objetos com PHP.

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            require_once "ClassVideo.php";

            $vetor = array();

            $vetor[0] = new Video("Aula 1 de POO");
            $vetor[1] = new Video("Aula 2 de POO");
            $vetor[2] = new Video("Aula 3 de POO");

            print_r($vetor);

            // -------------------------------------

            require_once "ClassGafanhoto.php";

            $gafanhoto = array();

            $gafanhoto[0] = new Gafanhoto("Lucas Catto", 16, "Masc", 111);
            $gafanhoto[1] = new Gafanhoto("Elon Musk",   51, "Masc", 222);
            $gafanhoto[2] = new Gafanhoto("Steve Jobs",  56, "Masc", 333);

            print_r($gafanhoto);

        ?>
    </pre>
</html>
