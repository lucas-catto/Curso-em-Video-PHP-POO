<html>
    <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php
            // Aula Prática 6 – Encapsulamento
            // Nessa aula de POO, vamos aprender como fazer encapsulamento em PHP, entendendo melhor o primeiro dos três pilares da POO

            require_once "ClasseControleRemoto.php";

            $controle = new ControleRemoto();
            $controle->ligar();
            $controle->maisVolume();
            $controle->abrirMenu();

        ?>
    </pre>
</html>
