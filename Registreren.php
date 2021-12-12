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
            <form action="Registreren.php" method="post">
                <fieldset>
                    <p>Email:</p><br>
                    <input type="text" Name="Email" value=""><br>

                    <p>Herhaal email:</p><br>
                    <input type="text" Name="Her-Email" value=""><br>

                    <p>Wachtwoord:</p><br>
                    <input type="password" Name="Wachtwoord" value=""><br>

                    <p>Herhaal Wachtwoord:</p><br>
                    <input type="password" Name="Her-Wachtwoord" value=""><br>

                    <input type="Submit" name="Submit" value="Registreren"><br>
                </fieldset>
            </form>
        </div>  
    </body>
</html>