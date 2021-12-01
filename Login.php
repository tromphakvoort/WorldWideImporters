<?php require_once("PHP/LoginDB.php"); ?>

<!DOCTYPE>
<html>
    <head>Login</title>
    </head>

    <body>
        <div id="Login">
            <div id="Bericht">
                <?php echo FoutBericht(); ?>
                <?php echo Bericht(); ?>
            </div>
            <form action="Login.php" method="post">
                <fieldset>
                    <p>Email:</p><br>
                    <input type="text" Name="Email" value=""><br>

                    <p>Wachtwoord:</p><br>
                    <input type="password" Name="Wachtwoord" value=""><br>

                    <input type="Submit" name="Login" value="Login"><br>
                </fieldset>
            </form>
        </div>  
    </body>
</html>