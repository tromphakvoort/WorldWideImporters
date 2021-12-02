<?php require_once("PHP/Session.php"); ?>
<?php require_once("CSS/Style.css"); ?>
<?php require_once("PHP/Functies.php"); ?>
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
        ErrorSession("Alle velden moeten ingevuld zijn", false);
    } elseif ($Email !== $HerEmail) {
        ErrorSession("Emails komen niet overeen", false);
    } elseif ($Password !== $HerPassword) {
        ErrorSession("Passworden komen niet overeen", false);
    } elseif (strlen($Password) < 8) {
        ErrorSession("Password moet minimaal 8 waarden bevatten", false);
    } elseif (CheckEmail($Email)) {
        ErrorSession("Email word al gebruikt", false);
    } else {
        global $ConnectieDB;
        $Query = "INSERT INTO users(email,Password,token,Active)VALUES('$Email', '$Password', '$Token', 'OFF')";
        $Execute = mysql_query($Query);
        if ($Execute) {
            EmailSend();
        } else {
            return null;
        }
    }
}
?>