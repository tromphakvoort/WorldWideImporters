<?php require_once("PHP/ResetDB.php"); ?>
<html>
<head>
    <title>Nieuwe password maken</title>
</head>

    <body>
        <div id="Herstellen">
            <div id="Message">
                <?php echo ErrorMessage(); ?>
                <?php echo Message(); ?>
            </div>
            <form action="ResetPassword.php?token=<?php echo $TokenFromURL; ?>" method="post">
                <fieldset>
                <p>Password:</p><br>
                    <input type="password" Name="Password" value=""><br>

                    <p>Herhaal Password:</p><br>
                    <input type="password" Name="Her-Password" value=""><br>

                    <input type="Submit" name="Submit" value="Registreren"><br>
                </fieldset>
            </form>
        </div>  
    </body>
</html>    
