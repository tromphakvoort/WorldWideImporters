<?php require_once("PHP/Session.php"); ?>
<?php
function RedirectTo($Location)
{
    header("Location:".$Location);
}
function PasswordEncrypt($Password)
{
    $Blowfish = "$2y$10$";
    $SaltLength = 22;
    $Salt = CreateSalt($SaltLength);
    $SaltandBlowfish  = $Blowfish . $Salt;
    $Hash = crypt($Password, $SaltandBlowfish);
        return $Hash;
}

function CreateSalt($Length)
{
    $RanString = md5(uniqid(mt_rand(), true));
    $Basis64_String = base64_encode($RanString);
    $CustomString = str_replace('+', '-', $Basis64_String);
    $Salt = substr($CustomString, 0 , $Length);
        return $Salt;
}

function PasswordCheck($Password, $CurrentHash)
{
    $Hash = crypt($Password, $CurrentHash);
    if ($Hash === $CurrentHash) {
        return true;
    } else {
        return false;
    }
}

function CheckEmail($Email) //Control if email exists
{
    global $ConnectionDB;
    $Query = "SELECT * FROM users WHERE email='$Email'";
    $Execute = mysql_query($Query);
    if(mysql_num_rows($Execute)>0){
        return true;
    }else{
        return false;
    }
}

function LoginAtempt($Email, $Password)
{
    $Query = "SELECT * FROM users WHERE email='$Email'";
    $Execute = mysql_query($Query);
    if($Admin = mysql_fetch_assoc($Execute)>0){
        return true;
    }else{
        return false;
    }
}
function AccountActive()
{
    global $ConnectionDB;
    $Query = "SELECT * FROM users WHERE Active=true";
    $Execute = mysql_query($Query);
    if($Admin = mysql_num_rows($Execute)>0){
        return true;
    }else{
        return false;
    }
}
function EmailSend() //Send mail with token for setting account active
{
    global $ConnectionDB;
    $HashedPassword = PasswordEncrypt($Password);
    $Query = "INSERT INTO users(email,password,token,Active)VALUES('$Email','$HashedPassword','$Token',false)";
    $Execute = mysql_query($Query);
    if($Execute){
        $Subject = "Activeer account";
        $Body = 'Hi, Hier is u activatie link http://localhost/Registreren/Actieveren.php?token='.$Token;
        $SenderEmail = "no-reply@WWI.nl";
        if(mail($Email, $Subject, $Body, $SenderEmail)){
            $_SESSION["Message"] = "Controleer u email voor activatie";
            RedirectTo("Login.php");
        }else{
            $_SESSION["ErrorMessage"] = "Probeer het opnieuw";
            RedirectTo("Registreren.php");
        }
    }else{
        $_SESSION["ErrorMessage"] = "Probeer het opnieuw";
        RedirectTo("Registreren.php");
    }
}
function Login()
{
    if(isset($_SESSION["UserEmail"])||isset($_COOKIE["SettingEmail"])){
        return true;
    }
}
?>