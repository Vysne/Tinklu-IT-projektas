<?php
include "libraries/newPerson.php";
include "templates/register_tpl.php";


if(isset($_POST["registerButton"]))
{
    $userData = array(
        "vardas" => $_POST["userName"],
        "pavarde" => $_POST["userSurname"],
        "slaptazodis" => $_POST["userPass"],
        "el_pastas" => $_POST["userEmail"],
        "banksas_nr" => $_POST["userBankNr"],
        "adresas" => $_POST["userAddress"]
    );
    $naujasKlientas = new NewPerson($userData);
    
    $userData['slaptazodis'] = $naujasKlientas->passwordHash();

    if($naujasKlientas->isInputsEmpty())
    {
        $klientoNr = $naujasKlientas->generateClientNr();
        if($duombaze->checkKlientoNr($klientoNr, "klientai")) {
            //Laisvas kliento nr ir ikelia ji i duomenyu masyva
            $userData["kliento_nr"] = $klientoNr;
            if($duombaze->insertNewClient($userData))
            {
                session_start();
                $_SESSION['kliento_nr'] = $userData["kliento_nr"];
                header("Location: confirm.php");
            }
            else
            {

            }
        }
        else {
            //Nelaisvas kliento nr ir sugeneruoja nauja
            $klientoNr = $naujasKlientas->generateClientNr();
        }
    }
    else
    {
        
    }
    
}
?>