<?php
session_start();

function ErrorMessage()
{
    //Error message
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
    //Succes message
    if(isset($_SESSION["Message"])){
        $Execute = "<div class=\"Message\">";
        $Execute .= htmlentities($_SESSION["Message"]);
        $Execute .= "</div>";
        $_SESSION["Message"]=null;
        return $Execute;
    }
}
?>