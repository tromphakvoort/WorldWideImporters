<?php require_once("PHP/Session.php"); ?>
<?php require_once("PHP/DB.php"); ?>
<?php
global $ConnectionDB;
if(isset($_GET['token'])){
    $TokenFromUrl=$_GET['token'];
    $Query = "UPDATE users SET active='true' WHERE token='$TokenFromURL'";
    $Execute = mysql_query($Query);
    if($Execute) {
        $_SESSION["Message"] = "Account geactiveerd";
        RedirectTo("Login.php");
    }else{
        $_SESSION["ErrorMessage"] = "Iets is fout gegaan";
        RedirectTo("Registreren.php");
    }
}