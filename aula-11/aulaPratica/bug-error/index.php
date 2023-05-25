<style>
    html{ background-color: rgb(100,100,100); }
</style>
<html>
    <?php
        // Aula Prática 11 – Herança (Parte 2)
        // Nessa aula de POO com PHP, vamos aprender a colocar a Herança em prática, usando as técnicas de Herança de Implementação e Herança para Diferença.

        require_once "Visitor/VisitorClass.php";
        
        // Wrong:
        // $p1 = new Person();

        $v = new Visitor();
        $v->setName("Lucas");
        $v->setAge(16);
        $v->setGenre("M");
        print_r($v);
    ?>
    
</html>
