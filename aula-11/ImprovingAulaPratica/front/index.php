<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <form action="#" method="get">
                <select name="type" id="type">
                    <option value="#" disabled selected>Choose</option>
                    <option value="teacher"    >Teacher</option>
                    <option value="visitor"    >Visitor</option>
                    <option value="student"    >Student</option>
                    <option value="scholarship">Scholarship</option>
                    <option value="tecnic"     >Tecnic</option>
                </select>


                <input type="submit" value="All finished!">
            </form>
        </div> <!-- container -->

        <?php
            $type = isset($_GET["type"]) ? $_GET["type"] : "";

            if($type == "teacher"){
                require_once "..back/TeacherClass.php";
            }
            elseif ($type == "visitor"){
                require_once "../back/VisitorClass.php";
            }
            elseif ($type == "student"){
                require_once "../back/StudentsClass/StudentClass.php";
            }
            elseif ($type == "scholarship"){
                require_once "../back/StudentsClass/ScholarshipClass.php";
            }
            elseif ($type == "tecnic"){
                require_once "../back/Students/TecnincClass.php";
            }
            else{
                echo "Something wrong!";
            }
        ?>
    </body>
</html>
