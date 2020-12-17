<?php
include "config.php";
include "libraries/database.php";

$fileName = "";
if(isset($_GET["action"])) {
    $fileName = "controller/" . $_GET["action"] . ".php";
}

//Funkcija kuri ismes vartotojui error zinutes
function errorMsg($message) {
    echo "<script>alert('${message}');</script>";
}

include "templates/main_tpl.php";
?>