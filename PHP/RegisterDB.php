<?php require_once("PHP/Session.php"); ?>
<?php require_once("CSS/Style.css"); ?>
<?php require_once("PHP/Functions.php"); ?>
<?php require_once("PHP/DB.php"); ?>
<?php
if (isset($_POST["Registreren"])) {
    $Email = mysql_real_escape_string($_POST["Email"]);
    $HerEmail = mysql_real_escape_string($_POST["Her-Email"]);
    $Password = mysql_real_escape_string($_POST["Password"]);
    $HerPassword = mysql_real_escape_string($_POST["Her-Password"]);
    $Token = bin2hex(openssl_random_pseudo_bytes(40));

    // Validate data
    if (empty($Email) && empty($HerEmail) && empty($Password) && empty($HerPassword)) {
        $_SESSION["ErrorMessage"] = "Alle velden moeten ingevuld zijn";
        RedirectTo("Registreren.php");
    } elseif ($Email !== $HerEmail) {
        $_SESSION["ErrorMessage"] = "Emails komen niet overeen";
        RedirectTo("Registreren.php")
    } elseif ($Password !== $HerPassword) {
        $_SESSION["ErrorMessage"] = "Passworden komen niet overeen";
        RedirectTo("Registreren.php")
    } elseif (strlen($Password) < 8) {
        $_SESSION["ErrorMessage"] = "Password moet minimaal 8 waarden bevatten";
        RedirectTo("Registreren.php")
    } elseif (CheckEmail($Email)) {
        $_SESSION["ErrorMessage"] = "Email word al gebruikt";
        RedirectTo("Registreren.php")
    } else {
        global $ConnectionDB;
        $Query = "INSERT INTO users(email,password,token,active)VALUES('$Email', '$Password', '$Token', 'OFF')";
        $Execute = mysql_query($Query);
        if ($Execute) {
            EmailSend();
        } else {
            return null;
        }
    }
}
?>