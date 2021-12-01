<?php require_once("PHP/Sessie.php"); ?>
<?php
function OmleidenNaar($Locatie)
{
    header("Location:".$Locatie);
}
function WachtwoordEncrypt($Wachtwoord)
{
    $Blowfish = "$2y$10$";
    $SaltLengte = 22;
    $Salt = MaakSalt($SaltLengte);
    $SaltnBlowfish  = $Blowfish . $Salt;
    $Hash = crypt($Wachtwoord, $SaltnBlowfish);
        return $Hash;
}

function MaakSalt($lengte)
{
    $RanString = md5(uniqid(mt_rand(), true));
    $Basis64_String = base64_encode($RanString);
    $AangepastString = str_replace('+', '-', $Basis64_String);
    $Salt = substr($AangepastString, 0 , $lengte);
        return $Salt;
}

function WachtwoordCheck($Wachtwoord, $HuidigHash)
{
    $Hash = crypt($Wachtwoord, $HuidigHash);
    if ($Hash === $HuidigHash) {
        return true;
    } else {
        return false;
    }
}

function CheckEmail($Email)
{
    global $ConnectieDB;
    $Query = "SELECT * FROM users WHERE email='$Email'";
    $Uitvoeren = mysql_query($Query);
    if(mysql_num_rows($Execute)>0){
        return true;
    }else{
        return false;
    }
}

function CheckGebruiker($Gebruiker)
{
    global $ConnectieDB;
    $Query = "SELECT * FROM users WHERE gebruikersnaam='$Gebruiker'";
    $Uitvoeren = mysql_query($Query);
    if(mysql_num_rows($Execute)>0){
        return true;
    }else{
        return false;
    }
}

function LoginPoging($Gebruiker, $Wachtwoord)
{
    $Query = "SELECT * FROM users WHERE gebruikersnaam='$Gebruiker'";
    $Uitvoeren = mysql_query($Query);
    if($Admin = mysql_fetch_assoc($Uitvoeren)>0){
        return true;
    }else{
        return false;
    }
}
function GebruikerActief()
{
    global $ConnectieDB;
    $Query = "SELECT * FROM users WHERE actief='On'";
    $Uitvoeren = mysql_query($Query);
    if($Admin = mysql_num_rows($Uitvoeren)>0){
        return true;
    }else{
        return false;
    }
}
function EmailVersturen()
{
    global $ConnectieDB;
    $HashedWachtwoord = WachtwoordEncrypt($Wachtwoord);
    $Query = "INSERT INTO users(gebruikers,email,wachtwoord,token,actief)VALUES('$Gebruiker','$Email','$HashedWachtwoord','$Token','OFF')";
    $Uitvoeren = mysql_query($Query);
    if($Uitvoeren){
        $Onderwerp = "Activeer account";
        $Body = 'Hi' .$Gebruiker. ', Hier is u activatie link http://localhost/Registreren/Actieveren.php?token='.$Token;
        $ZenderEmail = "no-reply@WWI.nl";
        if(mail($Email, $Onderwerp, $Body, $ZenderEmail)){
            Sessie("Controleer u email voor activatie", true);
        }else{
            Sessie("Probeer het opnieuw", false);
        }
    }else{
        Sessie("Probeer het opnieuw", false);
    }
}
?>