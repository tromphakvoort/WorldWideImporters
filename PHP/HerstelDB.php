<?php require_once("PHP/Sessions.php"); ?>
<?php require_once("CSS/Style.css"); ?>
<?php require_once("PHP/Functions.php"); ?>
<?php require_once("PHP/DB.php"); ?>
<?php
if (isset($_POST["Herstellen"])) {
    $Email = mysql_real_escape_string($_POST["Email"]);

    // Validate data
    if (empty($Email)){
        $_SESSION["ErrorMessage"] = "Email nodig";
        RedirectTo("AccountHerstel.php");
    } elseif (!CheckEmail($Email)) {
        $_SESSION["ErrorMessage"] = "Email niet gevonden";
        RedirectTo("AccountHerstel.php");
    } else {
        global $ConnectionDB;
        $Query = "SELECT * FROM users WHERE email='$Email'";
        $Execute = mysql_query($Query);
        RestoreMail();
        } else {
            return null;
        }
    }
}
function RestoreMail() //Send mail for restoring account
{
    if ($Admin = mysql_fetch_array($Execute)) {
        $Admin["email"];
        $Admin["token"];
        $Subject = "Herstel password";
        $Body = 'Hi ' .$Admin["email"]. 'Hier is uw herstel link' .
        'http://localhost/AccountHerstel/ResetPassword.php?token'.$Admin["token"];
        $SenderEmail = 'no-reply@WWI.nl';
        if(mail($Email, $Subject, $Body, $SenderEmail)){
            $_SESSION["Message"] = "Controleer u email voor activatie";
            RedirectTo("Login.php");
            }else{
                $_SESSION["ErrorMessage"] = "Probeer het opnieuw";
                RedirectTo("Registreren.php");
    }else{
        $_SESSION["ErrorMessage"] = "Probeer het opnieuw";
        RedirectTo("Registreren.php");
    }
}
?>