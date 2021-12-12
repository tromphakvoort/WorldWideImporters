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

    // Validate data
    if (empty($Email) && empty($HerEmail) && empty($Password) && empty($HerPassword)) {
        ErrorSession("Alle velden moeten ingevuld zijn", false);
    } elseif ($Email !== $HerEmail) {
        ErrorSession("Emails komen niet overeen", false);
    } elseif ($Password !== $HerPassword) {
        ErrorSession("Wachtwoorden komen niet overeen", false);
    } elseif (strlen($Password) < 8) {
        ErrorSession("Wachtwoord moet minimaal 8 waarden bevatten", false);
    } elseif (CheckEmail($Email)) {
        ErrorSession("Email word al gebruikt", false);
    } else {
        global $ConnectieDB;
        $Query = "INSERT INTO users(email,password)VALUES('$Email', '$Password')";
        $Execute = mysql_query($Query);
        if ($Execute) {
            EmailSend();
        } else {
            return null;
        }
    }
}
?>