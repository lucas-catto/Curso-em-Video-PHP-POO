
<style>html{background-color:gray;}p{color:white}</style>

<html>
    <?php
        // Aula Prática 13 – Polimorfismo Sobrecarga (Parte 2)
        // Nessa aula de POO, vamos aprender uma maneira alternativa de implementar sobrecarga aos métodos em PHP. Veja como fazer polimorfismo de sobrecarga em PHP.

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        require_once "MammalClass.php";
        require_once "WolfClass.php";
        require_once "DogClass.php";

        $mammal = new MammalClass();
        $wolf   = new WolfClass();
        $dog    = new DogClass();

        $mammal -> makeSound();
        $wolf   -> makeSound();
        $dog    -> makeSound();

        $dog->reactSentence("Hello");
        $dog->reactSentence("Nothing.");

        $dog->reactTime(11, 45);
        $dog->reactTime(21, 00);

        $dog->reactOwner(true);
        $dog->reactOwner(false);

        $dog->reactAgeWeight(2,  12.5);
        $dog->reactAgeWeight(17, 4.5);

    ?>
</html>