<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <form action="../page/index.php" method="get">

                <h1>Choose one of the options</h1>
                
                <div class="elements">

                    <select name="type" id="type" required>
                        <option value="teacher" selected >Teacher</option>
                        <option value="visitor"          >Visitor</option>
                        <option value="student"          >Student</option>
                        <option value="scholarship"      >Scholarship</option>
                        <option value="tecnic"           >Tecnic</option>
                    </select>
    
                    <input type="submit" id="submit" value="All finished!">
                </div>

            </form>
        </div> <!-- container -->
    </body>
</html>
