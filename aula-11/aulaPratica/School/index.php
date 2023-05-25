<style>
    html{ background-color: rgb(100,100,100); }
</style>
<html>
    <pre>
        <?php
            // Aula Prática 11 – Herança (Parte 2)
            // Nessa aula de POO com PHP, vamos aprender a colocar a Herança em prática, usando as técnicas de Herança de Implementação e Herança para Diferença.

            //require_once "Person.php";
            // $p1 = new Person; // It's wrong
            
            // ----------------------------------------------------

            // require_once "Visitor.php";
            
            // $v1 = new Visitor();

            // $v1->setName("Lucas");
            // $v1->setAge(16);
            // $v1->setGenre("M");

            // print_r($v1);

            // ----------------------------------------------------

            require_once "Student/Student.php";

            $student = new Student();

            $student->setName("Lucas");
            $student->setRegistration(1111);
            $student->setAge(16);
            $student->setGenre("M");
            $student->setCourse("Programming");
            $student->payTuition();

            print_r($student);
        
            // ----------------------------------------------------

            require_once "Student/Scholarship.php";

            $scholarship = new Scholarship();

            $scholarship->setRegistration(1112);
            $scholarship->setName("Lucas");
            $scholarship->setScholarship(12.5);
            $scholarship->setCourse("Computer Science");
            $scholarship->setAge(16);
            $scholarship->setGenre("M");
            $scholarship->payTuition();

            print_r($scholarship);

            // ----------------------------------------------------
        ?>
    </pre>
</html>
