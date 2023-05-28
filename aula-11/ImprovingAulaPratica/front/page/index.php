<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <header>
        <a href="../index/index.php" id="goBack">Go Back!</a>
    </header>
    <body>
        <div class="container">
            <!-- PHP + HTML -->
            <!-- ================================================================= -->
            <?php if($_GET['type'] == 'teacher'){ ?>
                <form action="../exibition/index.php" name="teacher" method="get">
                    <input type="text"   name="name"      placeholder="Name"      required>
                    <input type="number" name="age"       placeholder="Age"       required>
                    <input type="text"   name="genre"     placeholder="Genre"     required>
                    <input type="text"   name="specialty" placeholder="Specialty" required>
                    <input type="number" name="salary"    placeholder="Salary"    required>

                    <input type="submit" id="next" value="Next!">
                </form>
            <?php } ?>

            <!-- ================================================================= -->
            <?php if($_GET["type"] == 'visitor'){ ?>
                <form action="../exibition/index.php" method="get">
                    <input type="text"   name="name"      placeholder="Name"  required>
                    <input type="number" name="age"       placeholder="Age"   required>
                    <input type="text"   name="genre"     placeholder="Genre" required>

                    <input type="submit" id="next" value="Next!">
                </form>
            <?php } ?>

            <!-- ================================================================= -->
            <?php if($_GET["type"] == 'student'){ ?>
                <form action="../exibition/index.php" method="get">
                    <input type="text"   name="name"          placeholder="Name"          required>
                    <input type="number" name="age"           placeholder="Age"           required>
                    <input type="text"   name="genre"         placeholder="Genre"         required>
                    <input type="text"   name="matriculation" placeholder="Matriculation" required>
                    <input type="text"   name="course"        placeholder="Course"        required>

                    <input type="submit" id="next" value="Next!">
                </form>
            <?php } ?>

            <!-- ================================================================= -->
            <?php if($_GET["type"] == 'scholarship'){ ?>
                <form action="../exibition/index.php" method="get">
                    <input type="text"   name="name"             placeholder="Name"              required>
                    <input type="number" name="age"              placeholder="Age"               required>
                    <input type="text"   name="genre"            placeholder="Genre"             required>
                    <input type="text"   name="scholarship"      placeholder="Scholarship"       required>
                    <input type="text"   name="renewscholarship" placeholder="Renew Scholarship" required>

                    <input type="submit" id="next" value="Next!">
                </form>
            <?php }?>

            <!-- ================================================================= -->
            <?php if($_GET["type"] == 'tecnic'){ ?>
                <form action="../exibition/index.php" method="get">
                    <input type="text"   name="name"                 placeholder="Name"                  required>
                    <input type="number" name="age"                  placeholder="Age"                   required>
                    <input type="text"   name="genre"                placeholder="Genre"                 required>
                    <input type="text"   name="professionalregister" placeholder="Professional Register" required>

                    <input type="submit" id="next" value="Next!">
                </form>
            <?php } ?>
            <!-- ================================================================= -->
            
            
            <?php /* else{ echo "Something is wrong!"; }*/?> 
            
            <!-- PHP + HTML -->



        </div> <!-- container -->
    </body>
</html>


