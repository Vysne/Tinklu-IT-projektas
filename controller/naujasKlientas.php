<?php
include "templates/register_tpl.php";

//Tikrinama kada yra paspaudziamas Registruotis mygtukas
if(isset($_POST["registerButton"])) {

    //Tikrinam ar visi inputai uzpildyti
    if(!(empty($_POST["vardas"]) || empty($_POST["pavarde"]) || empty($_POST["slaptazodis"]) || empty($_POST["el_pastas"]) || empty($_POST["banksas_nr"]) || empty($_POST["adresas"]))) {

        //Issaugomi duomenys masyve
        $userData = array (
            "vardas" => Db::escape($_POST["vardas"]),
            "pavarde" => Db::escape($_POST["pavarde"]),
            "slaptazodis" => Db::escape($_POST["slaptazodis"]),
            "el_pastas" => Db::escape($_POST["el_pastas"]),
            "banksas_nr" => Db::escape($_POST["banksas_nr"]),
            "adresas" => Db::escape($_POST["adresas"])
        );

        //Sugeneruojamas unikalus kliento numeris
        $userData["kliento_nr"] = Db::generateNr();
        
        //Uzmaskuojamas kliento slaptazodis
        $userData["slaptazodis"] = hidePassword($userData["slaptazodis"]);

        //Irasymas i duomenu baze
        $sql = "INSERT INTO klientai (`kliento_nr`, `vardas`, `pavarde`, `slaptazodis`, `adresas`, `saskaitos_nr`, `el_pastas`, `statusas`) VALUES ({$userData['kliento_nr']}, '{$userData['vardas']}', '{$userData['pavarde']}', '{$userData['slaptazodis']}', '{$userData['adresas']}', '{$userData['banksas_nr']}', '{$userData['el_pastas']}', 'klientas');";

        //Tikrinama ar sekmingai irasyta i duomenu baze
        if(Db::query($sql)) {
            errorMsg("Nauja paskyra sėkmnigai sukurta. Kliento Numeris - {$userData['kliento_nr']}");
        }
        else {
            errorMsg("Nepavyko prisiregistruoti. Bandykite dar karta");
        }
    }
    else {
        errorMsg("Prašome užpildyti visus laukelius");
    }

}

//Funkcija kuri uzmaskuos slaptazodi
function hidePassword($slaptazodis) {
    return password_hash($slaptazodis, PASSWORD_DEFAULT);
}
?>