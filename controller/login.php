<?php
include "templates/login_tpl.php";

//Tikrinam ar Prisijungti mygtuka yra paspaustas
if(isset($_POST["loginForm"])) {

    //Tikrinam ar abu laukeliai yra ivesti
    if(!(empty($_POST["klientoNr"]) || empty($_POST["slaptazodis"]))) {

        //Issaugojama viskas kas yra ivesta laukeliuose
        $userData = array(
            "kliento_nr" => Db::escape($_POST["klientoNr"]),
            "slaptazodis" => Db::escape($_POST["slaptazodis"])
        );

        //Tikrinama ar egzistuoja ivestas kliento numeris
        if(Db::checkKlientoNr($userData["kliento_nr"])) {
            $data = Db::select("SELECT * FROM klientai WHERE kliento_nr = {$userData['kliento_nr']}")[0];
            
            if(checkPassword($userData["slaptazodis"], $data["slaptazodis"])) {
                session_start();
                $_SESSION["prisijunges"] = true;
                $_SESSION["statusas"] = $data["statusas"];
                $_SESSION["kliento_nr"] = $data["kliento_nr"];
                header("Location: home.php");
            }
            else {
                errorMsg("Neteisingas slaptažodis");
            }
        }
        else {
            errorMsg("Paskyra su pateiktu kliento numeriu neegzistuoja");
        }
        
    }
    else {
        errorMsg("Prašome įvesti prisijungimo duomenis");
    }
}

//Funkcija kuri tikrina ar ivestas teisingas slaptazodis
function checkPassword($slaptazodis, $hashed) {
    return password_verify($slaptazodis, $hashed);
}
?>