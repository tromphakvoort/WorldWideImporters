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
        $Execute = "<div class=\"ErrorMessage\">";
        $Execute .= htmlentities($_SESSION["ErrorMessage"]);
        $Execute .= "</div>";
        $_SESSION["FoutMessage"]=null;
        return $Execute;
    }
}

function Message()
{
    if(isset($_SESSION["Message"])){
        $Execute = "<div class=\"Message\">";
        $Execute .= htmlentities($_SESSION["Message"]);
        $Execute .= "</div>";
        $_SESSION["Message"]=null;
        return $Execute;
    }
}
?>