<?php

class NewPerson {
    protected $vardas,
              $pavarde,
              $slaptazodis,
              $el_pastas,
              $banksas_nr,
              $adresas;

    public function __construct($personData) {
        $this->vardas = $personData["vardas"];
        $this->pavarde = $personData["pavarde"];
        $this->slaptazodis = $personData["slaptazodis"];
        $this->el_pastas = $personData["el_pastas"];
        $this->banksas_nr = $personData["banksas_nr"];
        $this->adresas = $personData["adresas"];
    }

    //tikrina ar inputs nera tusti
    public function isInputsEmpty() {
        if(empty($this->vardas) || empty($this->pavarde) || empty($this->slaptazodis) || empty($this->el_pastas) || empty($this->banksas_nr) || empty($this->adresas)) {
            $errorMessage = "Prašome užpildyti visus laukelius.";
            return false;
        }
        else {
            return true;
        }
    }
    
    //uzmaskuojamas slaptazodis
    public function passwordHash() {
        $hashed_password = password_hash($this->slaptazodis, PASSWORD_DEFAULT);
        return $hashed_password;
    }


    //kliento nr generatoriu
    public function generateClientNr() {
        return rand(1000, 9999);
    }
}

?>