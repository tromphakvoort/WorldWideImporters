<?php require_once("PHP/Sessie.php"); ?>
<?php require_once("CSS/Style.css"); ?>
<?php require_once("PHP/Functies.php"); ?>
<?php require_once("PHP/DB.php"); ?>

<?php
if(isset($_POST["Login"])){
    $Email = mysql_real_escape_string($_POST["Email"]);
    $Wachtwoord = mysql_real_escape_string($_POST["Wachtwoord"]);
    if(empty($Email) && empty($Wachtwoord)){
        FoutSessie("Alle velden moeten ingevuld zijn", true);
    }else{
        if(EmailActief()){
            $GevondenAccount = LoginPoging($Email, $Wachtwoord);
            if($GevondenAccount){
                Redirect_To("Index.php");
            }else{
                FoutSessie("Email of Wachtwoord klopt niet", true);
            }
        }else{
            FoutSessie("Account moet geactiveerd worden", true);
        }
    }
}
?>