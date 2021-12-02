<?php
session_start();

function ErrorSession($Message, $Login)
{
    $_SESSION["ErrorMessage"]=$Message;
    if($Login===true){
        RedirectTo("Login.php");
    }else{
        RedirectTo("Registreren.php");
    }
}

function Session($Message, $Login)
{
    $_SESSION["Message"]=$Message;
    if($Login===true){
        RedirectTo("Login.php");
    }else{
        RedirectTo("Registreren.php");
    }
}

function ErrorMessage()
{
    if(isset($_SESSION["ErrorMessage"])){
        $Uitvoer = "<div class=\"ErrorMessage\">";
        $Uitvoer .= htmlentities($_SESSION["ErrorMessage"]);
        $Uitvoer .= "</div>";
        $_SESSION["FoutMessage"]=null;
        return $Uitvoer;
    }
}

function Message()
{
    if(isset($_SESSION["Message"])){
        $Uitvoer = "<div class=\"Message\">";
        $Uitvoer .= htmlentities($_SESSION["Message"]);
        $Uitvoer .= "</div>";
        $_SESSION["Message"]=null;
        return $Uitvoer;
    }
}
?>