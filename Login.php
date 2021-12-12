<?php require_once("PHP/LoginDB.php"); ?>

<!DOCTYPE>
<html>
    <head>Login</title>
    </head>

    <body>
        <div id="Login">
            <div id="Message">
                <?php echo ErrorMessage(); ?>
                <?php echo Message(); ?>
            </div>
            <form action="Login.php" method="post">
                <fieldset>
                    <p>Email:</p><br>
                    <input type="text" Name="Email" value=""><br>

                    <p>Password:</p><br>
                    <input type="password" Name="Wachtwoord" value=""><br>

                    <input type="Submit" name="Login" value="Login"><br>
                </fieldset>
            </form>
        </div>  
    </body>
</html>