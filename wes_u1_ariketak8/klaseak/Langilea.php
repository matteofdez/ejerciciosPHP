<?php

class Langilea {
    public $izena;
    public $soldata;

    public function __construct($izena, $soldata) {
        $this->izena = $izena;
        $this->soldata = $soldata;
    }

    public function soldataIgo($kopurua) {
        $this->soldata += $kopurua;
    }

    public function erakutsiDatuak() {
        echo "Langilea: " . $this->izena . "<br>";
        echo "Soldata: " . $this->soldata . "€<br>";
    }
}
?>
