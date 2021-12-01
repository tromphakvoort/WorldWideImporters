<?php require_once("PHP/Sessie.php"); ?>
<?php require_once("CSS/Style.css"); ?>
<?php require_once("PHP/Functies.php"); ?>
<?php require_once("PHP/DB.php"); ?>
<?php
if(isset($_POST["Registreren"])){
    $Gebruiker = mysql_real_escape_string($_POST["Gebruiker"]);
    $Email = mysql_real_escape_string($_POST["Email"]);
    $HerEmail = mysql_real_escape_string($_POST["Her-Email"]);
    $Wachtwoord = mysql_real_escape_string($_POST["Wachtwoord"]);
    $HerWachtwoord = mysql_real_escape_string($_POST["Her-Wachtwoord"]);
    $Token = bin2hex(openssl_random_pseudo_bytes(40));

    if(empty($Gebruiker) && empty($Email) && empty($HerEmail) && empty($Wachtwoord) && empty($HerWachtwoord)) {
        FoutSessie("Alle velden moeten ingevuld zijn", false);
    }elseif($Email!==$HerEmail) {
        FoutSessie("Emails komen niet overeen", false);
    }elseif($Wachtwoord!==$HerWachtwoord) {
        FoutSessie("Wachtwoorden komen niet overeen", false);
    }elseif(strlen($Wachtwoord)<8){
        FoutSessie("Wachtwoord moet minimaal 8 waarden bevatten", false);
    }elseif(CheckEmail($Email)){
        FoutSessie("Email word al gebruikt", false);
    }elseif(CheckGebruiker($Gebruiker)){
        FoutSessie("Gebruikersnaam word al gebruikt", false);
    }else{
        global $ConnectieDB;
        $Query = "INSERT INTO users(gebruikersnaam,email,wachtwoord,token,actief)VALUES('$Gebruiker', '$Email', '$Wachtwoord', '$Token', 'OFF')";
        $Uitvoeren = mysql_query($Query);
        if($Uitvoeren){
            EmailVersturen();
        }else{
            return null;
        }
    }
}
?>