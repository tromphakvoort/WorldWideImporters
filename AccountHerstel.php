<?php require_once("PHP/HerstelDB.php"); ?>
<html>
<head>
    <title>Account herstellen</title>
</head>

    <body>
        <div id="Herstellen">
            <div id="Message">
                <?php echo ErrorMessage(); ?>
                <?php echo Message(); ?>
            </div>
            <form action="AccountHerstel.php" method="post">
                <fieldset>
                    <p>Email:</p><br>
                    <input type="text" Name="Email" value=""><br>

                    <input type="Submit" name="Submit" value="Registreren"><br>
                </fieldset>
            </form>
        </div>  
    </body>
</html>    
