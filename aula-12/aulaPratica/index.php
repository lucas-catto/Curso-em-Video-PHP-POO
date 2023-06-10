<style>html{background-color:gray;}</style>

<html>
    <pre>
        <?php
            // Aula Prática 12 – Polimorfismo em PHP (Parte 1)
            // Nessa aula de POO, vamos aprender como fazer Polimorfismo de Sobreposição (Override) em PHP.


            require_once "AnimalClass.php";
            require_once "BirdClass.php";
            require_once "FishClass.php";
            require_once "MammalClass.php";
            require_once "ReptilianClass.php";

            
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            
            /*$animal = new Animal();*/
            

            $bird      = new Bird();
            $fish      = new Fish();
            $mammal    = new Mammal();
            $reptilian = new Reptilian();

            // ------------------------------
            // Mammal:

            //$mammal->setWeight(33.5);
            //$mammal->moveAround();

            //print_r($mammal);

            // ------------------------------
            // Bird:

            //$bird->moveAround();

            //print_r($bird);

            // ------------------------------
            // Reptilian:
            
            //$reptilian->moveAround();

            // ----------------------------------

            require_once "kangarooClass.php";
            require_once "DogClass.php";
            require_once "SnakeClass.php";
            require_once "TurtleClass.php";
            require_once "GoldFishClass.php";
            require_once "MacawClass.php";

            $kangaroo = new Kangaroo();
            $dog      = new Dog();
            $snake    = new Snake();
            $turtle   = new Turtle();
            $goldFish = new GoldFish();
            $macaw    = new Macaw();

            $mammal   -> moveAround();
            $kangaroo -> moveAround();
            $dog      -> moveAround();
            $turtle   -> moveAround();

            $mammal   -> makeSound();
            $kangaroo -> makeSound();
            $dog      -> makeSound();
            $turtle   -> makeSound();

        ?>
    </pre>
</html>
