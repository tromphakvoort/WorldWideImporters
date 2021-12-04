<?php require_once("PHP/Sessions.php"); ?>
<?php require_once("CSS/Style.css"); ?>
<?php require_once("PHP/Functions.php"); ?>
<?php require_once("PHP/DB.php"); ?>

<?php
if(isset($_POST["Login"])){
    $Email = mysql_real_escape_string($_POST["Email"]);
    $Password = mysql_real_escape_string($_POST["Password"]);
    if(empty($Email) && empty($Password)){

        //Validate data
        $_SESSION["ErrorMessage"] = "Alle velden moeten ingevuld zijn";
        RedirectTo("Login.php");
    }else{
        if(EmailActive()){
            $FoundAccount = LoginAtempt($Email, $Password);
            if($FoundAccount){
                $_SESSION["User_Email"] = $FoundAccount['email'];
                $_SESSION["User_Password"] = $FoundAccount['password'];
                if(isset($_Post["Remember"])){
                    $ExpireTime = time() + 86400;
                    setcookie("SettingEmail",$Email,$ExpireTime);
                }

                Redirect_To("Index.php");
            }else{
                $_SESSION["ErrorMessage"] = "Email of Password klopt niet";
                RedirectTo("Login.php");
            }
        }else{
            $_SESSION["ErrorMessage"] = "Account moet geactiveerd worden";
            RedirectTo("Login.php");
        }
    }
}
?>