<?php require_once("PHP/Sessions.php"); ?>
<?php require_once("CSS/Style.css"); ?>
<?php require_once("PHP/Functions.php"); ?>
<?php require_once("PHP/DB.php"); ?>
<?php
if(isset($_GET['token'])){
    $TokenFromURL = $_GET['token'];
}
if (isset($_POST["Reset"])) {
    $Password = mysql_real_escape_string($_POST["Password"]);
    $ConfirmPassword = mysql_real_escape_string($_POST["ConfirmPassword"]);

    // Validate data
    if (empty($Password) || empty($ConfirmPassword)){
        $_SESSION["ErrorMessage"] = "Alle velden moeten gevuld zijn";
        RedirectTo("ResetPassword.php");
    } elseif ($Password!==$ConfirmPassword) {
        $_SESSION["ErrorMessage"] = "Wachtwoorden komen niet overeen";
        RedirectTo("AccountHerstel.php");
    } elseif (strlen($Password)<8){
        $_SESSION["ErrorMessage"] = "Wachtwoord moet minimaal 8 waarden bevatten";
        RedirectTo("AccountHerstel.php");
    } elseif (CheckEmail($Email)){
        $_SESSION["ErrorMessage"] = "Email word al gebruikt";
        RedirectTo("AccountHerstel.php")
    } else {
        global $ConnectionDB;
        $HashedPassword = PasswordEncrypt($Password);
        $Query = "UPDATE users SET password='$HashedPassword' WHERE token='$TokenFromURL'";
        $Execute = mysql_query($Query);
        if($Execute){
            $_SESSION["Message"] = "Password veranderd";
            RedirectTo("Login.php");
        } else {
            $_SESSION["ErrorMessage"] = "Iets is fout gegaan";
            RedirectTo("Login.php");
        }
    }
}
function RestoreMail()
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