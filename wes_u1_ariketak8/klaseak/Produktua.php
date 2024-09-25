<?php

class Produktua {
    public $izenburua;
    public $prezioa;
    public $kopurua;

    public function __construct($izenburua, $prezioa) {
        $this->izenburua = $izenburua;
        $this->prezioa = $prezioa;
        $this->kopurua = 0;
    }

    public function aukeratu($kopurua) {
        $this->kopurua = $kopurua;
        $this->pantailaratu();
    }

    public function pantailaratu() {
        $prezioFinala = $this->kopurua * $this->prezioa;
        echo "Produktua: " . $this->izenburua . "<br>";
        echo "Prezio: " . $prezioFinala . "€<br>";
    }
}
?>
