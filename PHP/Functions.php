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

function CheckEmail($Email)
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
?>