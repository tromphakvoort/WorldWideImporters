<?php require_once("PHP/Sessions.php"); ?>
<?php require_once("CSS/Style.css"); ?>
<?php require_once("PHP/Functions.php"); ?>
<?php require_once("PHP/DB.php"); ?>

<?php
if(isset($_POST["Login"])){
    $Email = mysql_real_escape_string($_POST["Email"]);
    $Password = mysql_real_escape_string($_POST["Wachtwoord"]);
    if(empty($Email) && empty($Password)){
        ErrorSession("Alle velden moeten ingevuld zijn", true);
    }else{
        if(EmailActive()){
            $FoundAccount = LoginAtempt($Email, $Password);
            if($FoundAccount){
                Redirect_To("Index.php");
            }else{
                ErrorSession("Email of Wachtwoord klopt niet", true);
            }
        }else{
            ErrorSession("Account moet geactiveerd worden", true);
        }
    }
}
?>