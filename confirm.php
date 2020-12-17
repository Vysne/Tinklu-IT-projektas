<?php
session_start();
//Tikrinama ar sesijos masyvas turi kliento numeri
if(isset($_SESSION["kliento_nr"])) {
    echo "Registracija sėkminga. Jūsų kliento numeris yra - {$_SESSION['kliento_nr']}\n<a href='index.php?action=login'>Prisijungti</a>";
}
else {
    //Jei sesija neturi kliento numerio tuomet perkeliamas yra i index.php
    header("Location: index.php");
    session_destroy();
}
session_destroy();
?>