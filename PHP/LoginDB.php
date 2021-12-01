<?php require_once("PHP/Sessie.php"); ?>
<?php require_once("CSS/Style.css"); ?>
<?php require_once("PHP/Functies.php"); ?>
<?php require_once("PHP/DB.php"); ?>

<?php
if(isset($_POST["Login"])){
    $Gebruiker = mysql_real_escape_string($_POST["Gebruiker"]);
    $Wachtwoord = mysql_real_escape_string($_POST["Wachtwoord"]);
    if(empty($Gebruiker) && empty($Wachtwoord)){
        FoutSessie("Alle velden moeten ingevuld zijn", true);
    }else{
        if(GebruikerActief()){
            $GevondenAccount = LoginPoging($Gebruiker, $Wachtwoord);
            if($GevondenAccount){
                Redirect_To("Index.php");
            }else{
                FoutSessie("Gebruikersnaam of Wachtwoord klopt niet", true);
            }
        }else{
            FoutSessie("Gebruiker moet geactiveerd worden", true);
        }
    }
}
?>