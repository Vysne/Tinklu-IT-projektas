<?php
include "libraries/database.php";
$duombaze = new Database();
$duombaze->setConnection('localhost', 'root', '', 'saskaitu_sistema');

$fileName = "";
if(isset($_GET["action"])) {
    $fileName = "controller/" . $_GET["action"] . ".php";
}

//Cia yra naujas pakeitimas

//Klaidu laikimo kintamas
$errorMessage = "";


include "templates/main.php";
?>