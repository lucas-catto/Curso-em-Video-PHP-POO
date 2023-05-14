
<style>
    /*Estou colocando esse CSS pois luz clara dói meu olho.*/ 
    html{
        background-color: rgb(150,150,150);
    }
</style>

<html>
    <pre>
        <?php

            // Aula Prática 9 – Exercício prático POO em PHP
            // Nessa aula de POO, vamos fazer um exercício de Programação Orientada a Objeto em PHP com tudo aquilo que aprendemos até aqui.
            
            require_once "PersonClass.php";
            require_once "BookClass.php";

            $person = array();
            $book   = array();
            //  Reader Name//Reader Age//Reader Genre
            $person[0] = new Person("Steve Jobs", 56, "M");
            $person[1] = new Person("Elon Musk",  51, "M");
            //  Book Name//Author Name//Total Pages//People Name
            $book[0] = new Book("PHP, the book!",     "Bruno", 450, $person[0]);
            $book[1] = new Book("Java for beginners", "Linus", 758, $person[1]);

            $book[0]->open();
            $book[0]->leafThrough(0);
            // $book[0]->advancePage();
            // $book[0]->backPage();
            $book[0]->details();

            print_r($book[0]);

            // -----------------------------
            for ($i=0; $i < 53; $i++) { 
                echo "=";
            } echo "</br>";
            // -----------------------------

            print_r($book[1]);
            $book[1]->open();
            $book[1]->advancePage();
            $book[1]->details();

        ?>
    </pre>
</html>
