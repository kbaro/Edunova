<?php
if(!isset($_GET["email"]) || !isset($_GET["password"])){
    header("location: login2.php?g=1");
    exit;
}
if($_GET["email"]==="" || $_GET["password"]===""){
    header("location: login2.php?g=2");
    exit;
}
if($_GET["email"]==="edunova@edunova.hr" && $_GET["password"]==="e"){
    include_once "session.php";
    $_SESSION["user"]=$_GET["email"];
    header("location: secure.php");
    exit;
}else{
    header("location: login2.php?g=3");
}
