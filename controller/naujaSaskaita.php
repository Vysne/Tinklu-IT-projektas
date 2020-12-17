<?php
include "templates/saskaita_tpl.php";

//TIkrinamas kada yra paspaustas Sukurti Saskaita mygtukas
if(isset($_POST["submitSaskaita"])) {
    if(!(empty($_POST["saskaitos_nr"]) || empty($_POST["kliento_nr"]) || empty($_POST["gavejas"]) || empty($_POST["mokejimo_paskirtis"]) || empty($_POST["kiekis"]) || empty($_POST["data"]) || empty($_POST["suma"]))) {

        //Issaugojama visas i masyva
        $saskaitosInfo = array(
            "saskaitos_nr" => Db::escape($_POST["saskaitos_nr"]),
            "kliento_nr" => Db::escape($_POST["kliento_nr"]),
            "gavejas" => Db::escape($_POST["gavejas"]),
            "mokejimo_paskirtis" => Db::escape($_POST["mokejimo_paskirtis"]),
            "kiekis" => Db::escape($_POST["kiekis"]),
            "data" => Db::escape($_POST["data"]),
            "suma" => Db::escape($_POST["suma"])
        );

        //Paruosiamas SQL sakinys pries irasant i duombaze
        $sql = "INSERT INTO saskaitos (`saskaitos_nr`, `kliento_nr`, `gavejas`, `mokejimo_paskirtis`, `kiekis`, `data`, `suma`)
        VALUES ('{$saskaitosInfo['saskaitos_nr']}', '{$saskaitosInfo['kliento_nr']}', '{$saskaitosInfo['gavejas']}', '{$saskaitosInfo['mokejimo_paskirtis']}', '{$saskaitosInfo['kiekis']}', '{$saskaitosInfo['data']}', '{$saskaitosInfo['suma']}');";

        echo $sql;

        //Irasymas i duombaze
        if(Db::query($sql)) {
            errorMsg("Sąskaita sėkmingai sukurta");
            echo "<script>window.location.replace('home.php');</script>";
        }
    }
    else {
        errorMsg("Prašome užpildyti visus laukelius");
    }
}
?>