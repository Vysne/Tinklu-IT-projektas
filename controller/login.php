<?php
include "libraries/client.php";
include "templates/login_tpl.php";

if(isset($_POST['loginForm']))
{
    $klientoNr = $_POST['userNr'];
    $slaptazodis = $_POST['userPass'];

    $klientas = new Client($klientoNr, $slaptazodis);

    if(!($duombaze->checkKlientoNr($klientoNr, "klientai"))) {
        if($duombaze->checkPassword($klientoNr, $slaptazodis)) {
            header("Location: index.php");
        }
        else {

        }
    }
    else {
        echo "<script>alert('Paskyra su įvestu kliento numeriu neegzistuoja.')</script>";
    }
}

?>