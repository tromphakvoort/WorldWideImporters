<?php require_once("PHP/Session.php");?>
<?php require_once("PHP/Functions.php");?>
<?php
$_SESSION["UserEmail"] = null;
session_destroy();
RedirectTo("Index.php");
?>