<?php
session_start();

function FoutSessie($Bericht, $Login)
{
    $_SESSION["FoutBericht"]=$Bericht;
    if($Login===true){
        OmleidenNaar("Login.php");
    }else{
        OmleidenNaar("Registreren.php");
    }
}

function Sessie($Bericht, $Login)
{
    $_SESSION["Bericht"]=$Bericht;
    if($Login===true){
        OmleidenNaar("Login.php");
    }else{
        OmleidenNaar("Registreren.php");
    }
}

function FoutBericht()
{
    if(isset($_SESSION["FoutBericht"])){
        $Uitvoer = "<div class=\"FoutBericht\">";
        $Uitvoer .= htmlentities($_SESSION["FoutBericht"]);
        $Uitvoer .= "</div>";
        $_SESSION["FoutBericht"]=null;
        return $Uitvoer;
    }
}

function Bericht()
{
    if(isset($_SESSION["Bericht"])){
        $Uitvoer = "<div class=\"Bericht\">";
        $Uitvoer .= htmlentities($_SESSION["Bericht"]);
        $Uitvoer .= "</div>";
        $_SESSION["Bericht"]=null;
        return $Uitvoer;
    }
}
?>