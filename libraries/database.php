<?php

class Database {
    protected $connection;

    //Sukuria prisijungima prie duomenu bazes
    public function setConnection($server, $user, $pass, $db) {
        $this->connection = new mysqli($server, $user, $pass, $db);
    }

    //Naujo kliento irasymas i duomenu baze
    public function insertNewClient($data, $lentele = "klientai") {
        $sql = "INSERT INTO {$lentele} (`kliento_nr`, `vardas`, `pavarde`, `slaptazodis`, `adresas`, `saskaitos_nr`, `el_pastas`, `statusas`) 
                VALUES ({$data['kliento_nr']}, '{$data['vardas']}', '{$data['pavarde']}', '{$data['slaptazodis']}', '{$data['adresas']}', '{$data['banksas_nr']}', '{$data['el_pastas']}', 'klientas');";
        if($this->connection->query($sql)) {
            return true;
        }
        else {
            return false;
        }
    }

    //Patikrina pateiktu duomenys, duomenu bazeje
    public function checkKlientoNr($klientoNr, $lentele) {
        $sql = "SELECT * FROM $lentele WHERE kliento_nr = $klientoNr";
        if($result = $this->connection->query($sql)->num_rows > 0) {
            return false;
        }
        else {
            return true;
        }
    }

    //Patikrinti paskyros slaptazodi
    public function checkPassword($klientoNr, $klientoSlaptazodis) {
        $sql = "SELECT slaptazodis FROM klientai WHERE kliento_nr = {$klientoNr};";
        $result = $this->connection->query($sql);
        $data = $result->fetch_assoc();
        return password_verify($klientoSlaptazodis, $data['slaptazodis']);
    }
}
?>