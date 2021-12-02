<?php require_once("PHP/RegistrerenDB.php"); ?>

<!DOCTYPE>
<html>
    <head>
        <title>Nu registreren</title>
    </head>

    <body>
        <div id="Registreren">
            <div id="Bericht">
                <?php echo FoutBericht(); ?>
                <?php echo Bericht(); ?>
            </div>
            <form action="register.php" method="post">
                <fieldset>
                    <p>Email:</p><br>
                    <input type="text" Name="Email" value=""><br>

                    <p>Herhaal email:</p><br>
                    <input type="text" Name="Her-Email" value=""><br>

                    <p>Wachtwoord:</p><br>
                    <input type="password" Name="Wachtwoord" value=""><br>

                    <p>Herhaal wachtwoord:</p><br>
                    <input type="password" Name="Her-Wachtwoord" value=""><br>

                    <input type="Submit" name="Submit" value="Registreren"><br>
                </fieldset>
            </form>
        </div>  
    </body>
</html>
