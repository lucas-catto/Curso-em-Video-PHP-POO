<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exibition</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <header>
        <a href="../index/index.php">Go back to Index!</a>
    </header>
    <body>
        <div class="container"><pre>

            <!-- PHP + HTML -->

            <?php
                    // All -  ''
                $name  = isset($_GET["name"])  ? $_GET["name"]  : false;
                $age   = isset($_GET["age"])   ? $_GET["age"]   : false;
                $genre = isset($_GET["genre"]) ? $_GET["genre"] : false;
                // teacher
                $specialty = isset($_GET["specialty"]) ? $_GET["specialty"] : false;
                $salary    = isset($_GET["salary"])    ? $_GET["salary"]    : false;
                // student-student
                $course        = isset($_GET["course"])        ? $_GET["course"]        : false;
                $matriculation = isset($_GET["matriculation"]) ? $_GET["matriculation"] : false;
                // only 'visitor'
                $name  = isset($_GET["name"])  ? $_GET["name"]  : false;
                $age   = isset($_GET["age"])   ? $_GET["age"]   : false;
                $genre = isset($_GET["genre"]) ? $_GET["genre"] : false;
                // student-scholarship
                $scholarship      = isset($_GET["scholarship"])      ? $_GET["scholarship"]      : false;
                $renewscholarship = isset($_GET["renewscholarship"]) ? $_GET["renewscholarship"] : false;
                // student-tecnic
                $professionalRegister = isset($_GET["professionalRegister"]) ? $_GET["professionalRegister"] : false; 


                if($name && $age && $genre){
                    /* --------------------------------------------------------------------------- */
                    if($salary && $specialty){
                        require_once "../../back/TeacherClass.php";

                        $teacher = new Teacher;

                        $teacher->setName($name);
                        $teacher->setAge($age);
                        $teacher->setGenre($genre);
                        $teacher->setSpecialty($specialty);
                        $teacher->setSalary($salary);

                        print_r($teacher);

                    } // teacher
                    /* --------------------------------------------------------------------------- */
                    elseif($course && $matriculation){
                        require_once "../../back/StudentsClass/StudentClass.php";

                        $student = new Student;

                        $student->setName($name);
                        $student->setAge($age);
                        $student->setGenre($genre);
                        $student->setCourse($course);
                        $student->setMatriculation($matriculation);

                        print_r($student);

                    } // student-student
                    /* --------------------------------------------------------------------------- */
                    elseif($scholarship && $renewscholarship){
                        require_once "../../back/StudentsClass/";
                    } // Scholarship
                    /* --------------------------------------------------------------------------- */
                    elseif($professionalRegister){
                        require_once "../../back/StudentsClass/";
                    } // Tecnic
                    /* --------------------------------------------------------------------------- */
                    else{
                        require_once "../../back/VisitorClass.php";

                        $visitor = new Visitor;

                        $visitor->setName($name);
                        $visitor->setAge($age);
                        $visitor->setGenre($genre);

                        print_r($visitor);
                    }// visitor
                    /* --------------------------------------------------------------------------- */
                }




































                /*
                fazer a verificação se todas as características são veradedas, então é só instanciar o objeto
                

                características:
                name
                age
                genre



                teacher
                specialty
                salary

                visitor

                student
                course
                matriculation

                scholarship
                scholarship
                renewscholarship

                tecnic
                rpfessional register


                */
            ?>


</pre></div>
    </body>
</html>
