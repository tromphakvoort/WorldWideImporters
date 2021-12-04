<?php require_once("PHP/RegisterDB.php"); ?>

<!DOCTYPE>
<html>
    <head>
        <title>Nu registreren</title>
    </head>

    <body>
        <div id="Registreren">
            <div id="Message">
                <?php echo ErrorMessage(); ?>
                <?php echo Message(); ?>
            </div>
            <div id="centerpage">
                <br>
                <a href="Login.php"><span class="FieldInfo">Al lid? Login nu</span></a>
                <form action="Registreren.php" method="post">
                    <fieldset>
                        <p>Email:</p><br>
                        <input type="text" Name="Email" value=""><br>

                        <p>Herhaal email:</p><br>
                        <input type="text" Name="Her-Email" value=""><br>

                        <p>Password:</p><br>
                        <input type="password" Name="Password" value=""><br>

                        <p>Herhaal Password:</p><br>
                        <input type="password" Name="Her-Password" value=""><br>

                        <input type="Submit" name="Submit" value="Registreren"><br>
                    </fieldset>
                </form>
            </div>
        </div>  
    </body>
</html>