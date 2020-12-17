<?php

//Klase kuri leis sistemai komunikuoti su duomenu baze
class Db {
    protected static $connection; //Kintamasis, kuris bus naudojamas komunikacijai

    //Sukuriamas rysys tarp duombazes ir svetaines
    public static function connect() {
        if(!isset(self::$connection)) {
            self::$connection = new mysqli(config::DB_SERVER, config::DB_USER, config::DB_PASS, config::DB_NAME);
        }
        return self::$connection;
    }

    //Sutvarkomas inputas tam kad butu saugus naudoti SQL
    public static function escape($string) {
        $connection = Db::connect();
        return mysqli_real_escape_string($connection, $string);
    }

    //SQL statement execution funckija
    public static function query($sql) {
        $connection = Db::connect();
        $results = $connection->query($sql);
        return $results;
    }

    //SELECT funkcija
    public static function select($sql) {
        $rows = array();
        $result = Db::query($sql);
        if($result === false) {
            return false;
        }
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    //Sugeneruojamas unikalus kliento numeris
    public static function generateNr() {
        $klientoNr = rand(1000, 9999);
        $result = Db::select("SELECT kliento_nr FROM klientai WHERE kliento_nr = ${klientoNr};");
        while(count($result) > 0) {
            if(count($result) == 0) {
                return $klientoNr;
            }
            else {
                $klientoNr = rand(1000, 9999);
                $result = Db::select("SELECT kliento_Nr FROM klientai WHERE kliento_nr = ${klientoNr};");
            }
        }
        return $klientoNr;
    }

    //Tikrina ar klientas su pateiktu numeriu egzistuoja
    public static function checkKlientoNr($klientoNr) {
        $sql = "SELECT * FROM klientai WHERE kliento_nr = {$klientoNr};";
        $result = Db::select($sql);
        if(count($result) > 0) {
            return true;
        }
        return false;
    }
}

?>