<style>
    html{ background-color: rgb(100,100,100); }
</style>
<html>
    <pre>
        <?php
            // Aula Prática 10 – Herança (Parte 1)
            // Nessa aula de POO, vamos aprender a aplicar o conceito de Herança ao PHP.

            require_once "PersonClass.php";
            require_once "EmployeeClass.php";
            require_once "StudentClass.php";
            require_once "TeacherClass.php";

            $person   = new Person();
            $employee = new Employee();
            $student  = new Student();
            $teacher  = new Teacher();

            $person  ->setName("Pedro");
            $employee->setName("Fabiana");
            $student ->setName("Maria");
            $teacher ->setName("Cláudio");

            $person  ->setGenre("M");
            $employee->setGenre("F");
            $student ->setGenre("F");
            $teacher ->setGenre("M");

            $person  ->setAge("14");
            $employee->setAge("24");
            $student ->setAge("27");
            $teacher ->setAge("36");


            $student->setCourse("Programming");
            $teacher->setSalary(2500.75);
            $employee->setSector("Stock");

            // Wrong:
            // p1->Person | p2->Student | p3->Teacher | p4->Employee
            // $person->reciveRaise(550.20);
            // $student->changeWork();
            // $employee->cancelRegistration();

            // Right:
            $teacher->reciveRaise(500.20);
            $employee->changeWork();
            $student->cancelReagistration();

            print_r($person);
            print_r($employee);
            print_r($student);
            print_r($teacher);

        ?>
    </pre>
</html>
