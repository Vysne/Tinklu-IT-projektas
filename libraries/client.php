<?php

class Client {
    protected $kliento_nr,
              $slaptazodis;

    public function __construct($numeris, $pass) {
        $this->klient_nr = $numeris;
        $this->slaptazodis = $pass;
    }
}

?>