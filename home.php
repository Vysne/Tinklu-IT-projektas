<?php
session_start();
include "config.php";
include "libraries/database.php";

function errorMsg($message) {
    echo "<script>alert('${message}');</script>";
}

$fileName = "";
if(isset($_GET["action"])) {
    $fileName = "controller/" . $_GET["action"] . ".php";
}

$duomenys = Db::select("SELECT * FROM klientai WHERE kliento_nr = {$_SESSION['kliento_nr']};")[0];

$totalBalance = 0;
$saskaitos = array();
$klientai = array();
if($_SESSION["statusas"] == "klientas") {
    $saskaitos = Db::select("SELECT * FROM saskaitos WHERE kliento_nr = {$_SESSION['kliento_nr']};");
}
else if($_SESSION["statusas"] == "administratorius") {
    $saskaitos = Db::select("SELECT * FROM saskaitos;");
}
else if($_SESSION["statusas"] == "buhalteris") {
    $klientai = Db::select("SELECT * FROM klientai WHERE statusas = 'klientas';");
}

//Tikrinamas kai paspaudziamas pateikti mygtukas
if(isset($_POST["parodyti"])) {
    $sql = "SELECT * FROM saskaitos WHERE kliento_nr = {$_POST['klientai']} AND data BETWEEN '{$_POST['nuo']}' AND '{$_POST['iki']}';";
    $saskaitos = Db::select($sql);   
}

//Tikriname vartotojo statusa
if(isset($_SESSION["prisijunges"]) && $_SESSION["prisijunges"] == true && $_SESSION["statusas"] == "klientas") {
    include "templates/home_tpl_klientas.php";
}
else if(isset($_SESSION["prisijunges"]) && $_SESSION["statusas"] == "administratorius") {
    include "templates/home_tpl_admin.php";
}
else if(isset($_SESSION["prisijunges"]) && $_SESSION["statusas"] == "buhalteris") {
    include "templates/home_tpl_buhalteris.php";
}
else {
    header("Location: index.php");
}

?>