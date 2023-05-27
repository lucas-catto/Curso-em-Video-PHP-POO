<style>
    html { background-color: rgb(100,100,100); }
</style>

<html>
    <pre>
        <?php
            /*
            // -------------------------------------------
            // Only requiests of files: 
            require_once "TeacherClass.php";
            require_once "VisitorClass.php";
            require_once "StudentsClass/StudentClass.php";
            require_once "StudentsClass/ScholarshipClass.php";
            require_once "StudentsClass/TecnicClass.php";
            // -------------------------------------------
            // Only creating Objects: 
            $teacher             = new Teacher();
            $visitor             = new Visitor();
            $student_student     = new Student();
            $student_scholarship = new Scholarship();
            $student_tecnic      = new Tecnic();
            // -------------------------------------------
            // Working: 

            // Teacher: 
            $teacher->setName("Lucas");
            $teacher->setAge(16);
            $teacher->setGenre("M");
            // ------------------------
            // Visitor: 
            $visitor->setName("Elon Musk");
            $visitor->setAge(51);
            $visitor->setGenre("M");
            // ------------------------
            // Student-Student: 
            $student_student->setName("Steve Jobs");
            $student_student->setAge(68);
            $student_student->setGenre("M");
            // ------------------------
            // Student-Scholarship: 
            $student_scholarship->setName("Bill Gates");
            $student_scholarship->setAge(67);
            $student_scholarship->setGenre("M");
            // ------------------------
            // Student-Tecnic
            $student_tecnic->setName("Linus Torvalds");
            $student_tecnic->setAge(53);
            $student_tecnic->setGenre("M");
            // ------------------------

            // -------------------------------------------
            // Only printing the results: 
            print_r($teacher);
            print_r($visitor);
            print_r($student_student);
            print_r($student_scholarship);
            print_r($student_tecnic);
            */
            /* Result of this code:
                        Teacher Object
                (
                    [specialty:Teacher:private] => 
                    [salary:Teacher:private] => 
                    [name:Person:private] => Lucas
                    [age:Person:private] => 16
                    [genre:Person:private] => M
                )
                Visitor Object
                (
                    [name:Person:private] => Elon Musk
                    [age:Person:private] => 51
                    [genre:Person:private] => M
                )
                Student Object
                (
                    [matriculation:Student:private] => 
                    [course:Student:private] => 
                    [name:Person:private] => Steve Jobs
                    [age:Person:private] => 68
                    [genre:Person:private] => M
                )
                Scholarship Object
                (
                    [scholarship:Scholarship:private] => 
                    [renewScholarship:Scholarship:private] => 
                    [matriculation:Student:private] => 
                    [course:Student:private] => 
                    [name:Person:private] => Bill Gates
                    [age:Person:private] => 67
                    [genre:Person:private] => M
                )
                Tecnic Object
                (
                    [professionalRegister:Tecnic:private] => 
                    [matriculation:Student:private] => 
                    [course:Student:private] => 
                    [name:Person:private] => Linus Torvalds
                    [age:Person:private] => 53
                    [genre:Person:private] => M
                )
            */
        ?>
    </pre>
</html>
